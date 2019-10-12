package com.example.findmyhospital;

import android.Manifest;
import android.app.Activity;
import android.app.PendingIntent;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.content.pm.PackageManager;
import android.database.Cursor;
import android.hardware.Sensor;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.location.Address;
import android.location.Geocoder;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.media.MediaPlayer;
import android.net.ConnectivityManager;
import android.net.Uri;
import android.os.AsyncTask;
import android.os.Bundle;
import android.os.Environment;
import android.provider.ContactsContract;
import android.provider.Settings;
import android.telephony.SmsManager;
import android.telephony.TelephonyManager;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.material.snackbar.Snackbar;
import com.karumi.dexter.Dexter;
import com.karumi.dexter.MultiplePermissionsReport;
import com.karumi.dexter.PermissionToken;
import com.karumi.dexter.listener.DexterError;
import com.karumi.dexter.listener.PermissionDeniedResponse;
import com.karumi.dexter.listener.PermissionGrantedResponse;
import com.karumi.dexter.listener.PermissionRequest;
import com.karumi.dexter.listener.PermissionRequestErrorListener;
import com.karumi.dexter.listener.multi.MultiplePermissionsListener;
import com.karumi.dexter.listener.single.PermissionListener;

import java.io.File;
import java.io.IOException;
import java.lang.reflect.Method;
import java.util.List;
import java.util.Locale;
import java.util.Random;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ActivityCompat;
import androidx.core.content.ContextCompat;
import androidx.core.view.GestureDetectorCompat;
import androidx.drawerlayout.widget.DrawerLayout;

public class SOSActivity extends AppCompatActivity {

    SensorManager sensorManager;
    Button button1, button2, button3, button4, button5, SOS;

    Random random;
    Button get_imei;
    TextView stop_recording_text;
    Button pattern;
    MediaPlayer player;
    double gravity = 0;
    long count = 0;
    Geocoder geocoder;
    SensorManager sm;
    Sensor accelerator;
    long presentTime;
    List<Address> addresses;
    boolean detect = false;
    //LocationListener ll;
    String address, city, state, country, postalCode, knownName;
    int dTap = 0;
    LocationManager location_manager;
    TextView timer;
    String finalAddress = null;
    double latitude, longitude;
    //boolean notified;
    GestureDetectorCompat mDetector;
    String IMEI_Number_Holder = "862162046480211";
    TelephonyManager telephonyManager;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sos);
        askLocationPermission();
        button1 = findViewById(R.id.contact1);
        button2 = findViewById(R.id.contact2);
        button3 = findViewById(R.id.contact3);
        button4 = findViewById(R.id.contact4);
        button5 = findViewById(R.id.contact5);
        SOS = findViewById(R.id.sos_btn);

        get_imei = (Button) findViewById(R.id.button1);
        telephonyManager = (TelephonyManager) this.getSystemService(Context.TELEPHONY_SERVICE);
        get_imei.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                // TODO Auto-generated method stub
                checkPermissions();

            }
        });

        random = new Random();

        SharedPreferences sp = getSharedPreferences("Contacts", Context.MODE_PRIVATE);
        String s1 = sp.getString("1", "chooseContact1");
        String s2 = sp.getString("2", "chooseContact2");
        String s3 = sp.getString("3", "chooseContact3");
        String s4 = sp.getString("4", "chooseContact4");
        String s5 = sp.getString("5", "chooseContact5");
        if (s1.equals("chooseContact1") && s2.equals("chooseContact2") && s3.equals("chooseContact3") && s4.equals("chooseContact4") && s5.equals("chooseContact5")) {
            SOS.setVisibility(View.GONE);
            AlertDialog.Builder detect = new AlertDialog.Builder(SOSActivity.this);
            detect.setMessage("Add atleast one emergency contact to continue.").setPositiveButton("OK", new DialogInterface.OnClickListener() {

                @Override
                public void onClick(DialogInterface dialogInterface, int i) {
                    dialogInterface.cancel();
                }
            });
            detect.setCancelable(false);
            AlertDialog alert = detect.create();
            alert.show();
        }else{
            SOS.setVisibility(View.VISIBLE);
            load();
            try{
                SOS.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        try {
                            sendMessage(view);
                        } catch (Exception e) {
                            Log.e("Volley", e.toString());
                        }
                    }
                });
            }catch (Exception e){
                Log.e("Volley",e.toString());
            }

        }
        location_manager = (LocationManager) getSystemService(Context.LOCATION_SERVICE);
        latitude=longitude=0.0;
        boolean is_network_enabled = isNetworkEnabled();
        if (!is_network_enabled && !isWifiEnabled())
            create_dialog(2);

       new locationTask().execute();

    }
    private void checkPermissions() {
        if (checkSelfPermission(Manifest.permission.READ_PHONE_STATE) != PackageManager.PERMISSION_GRANTED) {
            Dexter.withActivity(this)
                    .withPermission(Manifest.permission.CAMERA)
                    .withListener(new PermissionListener() {
                        @Override
                        public void onPermissionGranted(PermissionGrantedResponse response) {
                            Log.e("Volley","permitted");
                        }

                        @Override
                        public void onPermissionDenied(PermissionDeniedResponse response) {
                            // check for permanent denial of permission
                            if (response.isPermanentlyDenied()) {
                                // navigate user to app settings
                            }
                        }

                        @Override
                        public void onPermissionRationaleShouldBeShown(PermissionRequest permission, PermissionToken token) {
                            token.continuePermissionRequest();
                        }
                    }).check();
        }
    }


    public void openContacts(View view) {
        // Intent intent = null;
        final int choose_button;
        if (view.getId() == R.id.contact1)
            choose_button = 1;
        else if (view.getId() == R.id.contact2)
            choose_button = 2;
        else if (view.getId() == R.id.contact3)
            choose_button = 3;
        else if (view.getId() == R.id.contact4)
            choose_button = 4;
        else
            choose_button = 5;


        if (ContextCompat.checkSelfPermission(SOSActivity.this,
                Manifest.permission.WRITE_EXTERNAL_STORAGE) + ContextCompat
                .checkSelfPermission(SOSActivity.this,
                        Manifest.permission.READ_CONTACTS)
                != PackageManager.PERMISSION_GRANTED) {

            Dexter.withActivity(this)
                    .withPermissions(
                            Manifest.permission.WRITE_EXTERNAL_STORAGE,
                            Manifest.permission.READ_CONTACTS)
                    .withListener(new MultiplePermissionsListener() {
                        @Override
                        public void onPermissionsChecked(MultiplePermissionsReport report) {
                            // check if all permissions are granted
                            if (report.areAllPermissionsGranted()) {
                                Toast.makeText(getApplicationContext(), "All permissions are granted!", Toast.LENGTH_SHORT).show();
                                Intent intent = new Intent(Intent.ACTION_PICK, ContactsContract.Contacts.CONTENT_URI);
                                // Toast.makeText(this,"this is me",Toast.LENGTH_SHORT).show();
                                 startActivityForResult(intent, choose_button);
                            }

                            // check for permanent denial of any permission
                            if (report.isAnyPermissionPermanentlyDenied()) {
                                // show alert dialog navigating to Settings
                                showSettingsDialog();
                            }
                        }

                        @Override
                        public void onPermissionRationaleShouldBeShown(List<PermissionRequest> permissions, PermissionToken token) {
                            token.continuePermissionRequest();
                        }
                    }).
                    withErrorListener(new PermissionRequestErrorListener() {
                        @Override
                        public void onError(DexterError error) {
                            Toast.makeText(getApplicationContext(), "Error occurred! ", Toast.LENGTH_SHORT).show();
                        }
                    })
                    .onSameThread()
                    .check();
        }else{
            Intent intent = new Intent(Intent.ACTION_PICK, ContactsContract.Contacts.CONTENT_URI);
            // Toast.makeText(this,"this is me",Toast.LENGTH_SHORT).show();
            startActivityForResult(intent, choose_button);
        }
    }

    public void askLocationPermission(){
        Log.e("Volley","askPermission");
        Dexter.withActivity(this)
                .withPermissions(
                        Manifest.permission.ACCESS_COARSE_LOCATION,
                        Manifest.permission.ACCESS_FINE_LOCATION,
                        Manifest.permission.SEND_SMS)
                .withListener(new MultiplePermissionsListener() {
                    @Override
                    public void onPermissionsChecked(MultiplePermissionsReport report) {
                        // check if all permissions are granted
                        if (report.areAllPermissionsGranted()) {
                            Toast.makeText(getApplicationContext(), "All LOCATION permissions are granted!", Toast.LENGTH_SHORT).show();
                        }
                        // check for permanent denial of any permission
                        if (report.isAnyPermissionPermanentlyDenied()) {
                            // show alert dialog navigating to Settings
                            showSettingsDialog();
                        }
                    }

                    @Override
                    public void onPermissionRationaleShouldBeShown(List<PermissionRequest> permissions, PermissionToken token) {
                        token.continuePermissionRequest();
                    }
                }).
                withErrorListener(new PermissionRequestErrorListener() {
                    @Override
                    public void onError(DexterError error) {
                        Toast.makeText(getApplicationContext(), "Error occurred! ", Toast.LENGTH_SHORT).show();
                    }
                })
                .onSameThread()
                .check();
    }


    public void onActivityResult(int reqCode, int resultCode, Intent data) {
        super.onActivityResult(reqCode, resultCode, data);
        if (resultCode == 0)
            return;
        String cNumber = null;
        String name = null;

        if (resultCode == Activity.RESULT_OK) {

            Uri contactData = data.getData();
            Cursor c = managedQuery(contactData, null, null, null, null);
            if (c.moveToFirst()) {


                String id = c.getString(c.getColumnIndexOrThrow(ContactsContract.Contacts._ID));

                String hasPhone = c.getString(c.getColumnIndex(ContactsContract.Contacts.HAS_PHONE_NUMBER));

                if (hasPhone.equalsIgnoreCase("1")) {
                    Cursor phones = getContentResolver().query(
                            ContactsContract.CommonDataKinds.Phone.CONTENT_URI, null,
                            ContactsContract.CommonDataKinds.Phone.CONTACT_ID + " = " + id,
                            null, null);
                    phones.moveToFirst();
                    cNumber = phones.getString(phones.getColumnIndex("data1"));
                    System.out.println("number is:" + cNumber);
                }
                name = c.getString(c.getColumnIndex(ContactsContract.Contacts.DISPLAY_NAME));


            }
        }
        storeData(name, cNumber, reqCode);
        showSelectedNumber(cNumber);
        switch (reqCode) {
            case 1:
                button1.setText(name);
                break;
            case 2:
                button2.setText(name);
                break;
            case 3:
                button3.setText(name);
                break;
            case 4:
                button4.setText(name);
                break;
            case 5:
                button5.setText(name);
                break;
        }
        SOS.setVisibility(View.VISIBLE);
    }

    public void showSelectedNumber(String number) {
        Toast.makeText(this, "Selected contact Number: " + number, Toast.LENGTH_LONG).show();
        //   CoordinatorLayout cl = findViewById(R.id.coordinatorLayout);
    }

    public void storeData(String name, String cNumber, int choose_button) {
        SharedPreferences   sp = getSharedPreferences("Contacts", Context.MODE_PRIVATE);
        SharedPreferences.Editor ed = sp.edit();
        ed.putString(Integer.toString(choose_button), cNumber);
        ed.putString(Integer.toString(choose_button) + "_1", name);
        ed.commit();
        Toast.makeText(this, "Data saved successfully", Toast.LENGTH_SHORT).show();


    }

    public void load() {
        SharedPreferences sp = getSharedPreferences("Contacts", Context.MODE_PRIVATE);
        String s1 = sp.getString("1_1", "choose Contact 1");
        String s2 = sp.getString("2_1", "choose Contact 2");
        String s3 = sp.getString("3_1", "choose Contact 3");
        String s4 = sp.getString("4_1", "choose Contact 4");
        String s5 = sp.getString("5_1", "choose Contact 5");
        button1.setText(s1);
        button2.setText(s2);
        button3.setText(s3);
        button4.setText(s4);
        button5.setText(s5);
        return;
    }

    public boolean isGPSEnabled() {
        if (location_manager.isProviderEnabled(LocationManager.GPS_PROVIDER)){
            return true;
        }
        return false;
    }

    public boolean isWifiEnabled() {
        final ConnectivityManager connMgr = (ConnectivityManager)
                this.getSystemService(Context.CONNECTIVITY_SERVICE);
        final android.net.NetworkInfo wifi = connMgr.getNetworkInfo(ConnectivityManager.TYPE_WIFI);
        if (wifi.isConnectedOrConnecting()) {
            return true;
        }
        return false;
    }


    public boolean isNetworkEnabled() {
        Object connectivityService = getSystemService(CONNECTIVITY_SERVICE);
        ConnectivityManager cm = (ConnectivityManager) connectivityService;
        try {
            Class<?> c = Class.forName(cm.getClass().getName());
            Method m = c.getDeclaredMethod("getMobileDataEnabled");
            m.setAccessible(true);
            Log.e("Volley","network true");
            return (Boolean) m.invoke(cm);
        } catch (Exception e) {
            e.printStackTrace();
            return false;
        }
    }

    public void create_dialog(int type) {
        String Title, Message;
        final String sendTo;
        if (type == 1) {//GPS dialog
            Title = "Enable GPS";
            Message = "GPS";
            sendTo = Settings.ACTION_LOCATION_SOURCE_SETTINGS;
        } else {
            Title = "Enable Data";
            Message = "Data";
            sendTo = Settings.ACTION_WIRELESS_SETTINGS;
        }

        AlertDialog.Builder gps_dialog = new AlertDialog.Builder(this);
        gps_dialog.setTitle(Title)
                .setMessage("Sending your current location to Emergency contacts require  " + Message + " to be Enabled.")
                .setPositiveButton("Settings", new DialogInterface.OnClickListener() {

                    @Override
                    public void onClick(DialogInterface dialogInterface, int i) {
                        Intent in = new Intent(sendTo);
                        startActivity(in);
                    }
                });
        if (Message == "Data") {
            gps_dialog.setNegativeButton("Cancel", new DialogInterface.OnClickListener() {

                @Override
                public void onClick(DialogInterface dialogInterface, int i) {
                    dialogInterface.cancel();
                }
            });
        }

        AlertDialog alert = gps_dialog.create();
        alert.show();
    }

    private void showSettingsDialog() {
        AlertDialog.Builder builder = new AlertDialog.Builder(SOSActivity.this);
        builder.setTitle("Need Permissions");
        builder.setMessage("This app needs permission to use this feature. You can grant them in app settings.");
        builder.setPositiveButton("GOTO SETTINGS", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                dialog.cancel();
                openSettings();
            }
        });
        builder.setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                dialog.cancel();
            }
        });
        builder.show();

    }

    // navigating user to app settings
    private void openSettings() {
        Intent intent = new Intent(Settings.ACTION_APPLICATION_DETAILS_SETTINGS);
        Uri uri = Uri.fromParts("package", getPackageName(), null);
        intent.setData(uri);
        startActivityForResult(intent, 101);
    }

    public void sendMessage(View view) throws IOException, InterruptedException {
        SOS.setEnabled(false);
        SendMessageTask task = new SendMessageTask();
        task.executeOnExecutor(AsyncTask.THREAD_POOL_EXECUTOR);
    }

    class SendMessageTask extends AsyncTask<Void, Integer, Void> { //I have changed the input from View to Void
        View view;
        String address, city, state, country, postal_code, known_name;

        @Override
        protected void onPreExecute() {
            super.onPreExecute();
        }

        @Override
        protected Void doInBackground(Void... view) {

//            for (int i = 1; i <= 40; i++) {
//                try {
//                    Thread.sleep(500);
//                    presentTime = i * 500;
//                    publishProgress(500 * i / 1000 + 10);
//
//                } catch (InterruptedException e) {
//                    e.printStackTrace();
//                }
//                if (dTap == 1) {
//                    dTap = 0;
//                    // Log.d("hehe","dtap is 1");
//                    publishProgress(2);
//                    return null;
//                }
//            }
                publishProgress(1);

                SharedPreferences sp = getSharedPreferences("Contacts", Context.MODE_PRIVATE);
                String s1 = sp.getString("1", "chooseContact1");
                String s2 = sp.getString("2", "chooseContact2");
                String s3 = sp.getString("3", "chooseContact3");
                String s4 = sp.getString("4", "chooseContact4");
                String s5 = sp.getString("5", "chooseContact5");
                SmsManager sms = SmsManager.getDefault();
                PendingIntent sentPI;
                String SENT = "SMS_SENT";

                sentPI = PendingIntent.getBroadcast(getApplicationContext(), 0,new Intent(SENT), 0);
                s1 = s1.replaceAll("\\s+", "");
                s2 = s2.replaceAll("\\s+", "");
                s3 = s3.replaceAll("\\s+", "");
                s4 = s4.replaceAll("\\s+", "");
                s5 = s5.replaceAll("\\s+", "");

                if (finalAddress.equals("Hey.. I am in Danger. Please, help me ASAP!!")) {
                    publishProgress(500);
                }
//            Log.d("hehe",s1);
                if (!s1.equals("chooseContact1")) {
                    try{
                        sms.sendTextMessage(s1, null, finalAddress, sentPI, null);
                        Log.d("Volley","sending sms"+finalAddress);
                    }catch (Exception e){
                        Log.e("Volley",e.toString());
                    }
                }
                if (!s2.equals("chooseContact2"))
                    sms.sendTextMessage(s2, null, finalAddress, sentPI, null); //must be uncommented
                if (!s3.equals("chooseContact3"))
                    sms.sendTextMessage(s3, null, finalAddress, sentPI, null);
                if (!s4.equals("chooseContact4"))
                    sms.sendTextMessage(s4, null, finalAddress, sentPI, null);
                if (!s5.equals("chooseContact5"))
                    sms.sendTextMessage(s5, null, finalAddress, sentPI, null);

                //Geocoder geoCoder ;

                Toast.makeText(getApplicationContext(),"this is the address",Toast.LENGTH_SHORT).show();


                return null;
            }

            @Override
            protected void onProgressUpdate(Integer... values) {

                if (values[0] == 1) {
                    Log.e("Volley","value 0");
//                    button1.setEnabled(false);
//                    button1.setImageResource(R.drawable.sosbtn2);
                } else if(values[0]==2){
//                    button1.setEnabled(true);
//                    button1.setImageResource(R.drawable.sosbtn);
                    Log.e("Volley","value 2");
                }
                else if(values[0]==3)
                {
//                    pattern.setVisibility(View.INVISIBLE);
//                    button_stop.setVisibility(View.VISIBLE);
//                    stop_recording_text.setVisibility(View.VISIBLE);
                    Log.e("Volley","value 3");
                }
                else if (values[0]==500){
                    Log.e("Volley","value 1");
                    //Toast.makeText(SendMessage1.this,"Unable to find location.",Toast.LENGTH_SHORT).show();
                }
                else {
                    Log.e("Volley","timer");
//                    if(30-values[0] < 10 ) {
//
//                        timer.setText("00:00:0" + (30 - values[0]));
//                        if(30-values[0] == 0)
//                            timer.setVisibility(View.INVISIBLE);
//                    }
//                    else
//                        timer.setText("00:00:"+(30-values[0]));
                }

            }
        }
    class locationTask extends AsyncTask<Void, Integer, Void> {
        LocationListener ll;
        String provider;
        Location location;
        boolean notified;

        locationTask() {
            notified = false;

//            ll = new LocationListener() {
//                @Override
//                public void onLocationChanged(Location location) {
//                    Log.d("hehe","location changed");
//                    notified = true;
//                }
//                @Override
//                public void onStatusChanged(String s, int i, Bundle bundle) {}
//                @Override
//                public void onProviderEnabled(String s) {}
//                @Override
//                public void onProviderDisabled(String s) {}
//            };
        }

        @Override
        protected void onPreExecute() {
            //    Log.d("hehe","location listener created again");
            ll = new LocationListener() {
                @Override
                public void onLocationChanged(Location location) {
                    // Log.d("hehe","location changed");
                    notified = true;
                }

                @Override
                public void onStatusChanged(String s, int i, Bundle bundle) {
                }

                @Override
                public void onProviderEnabled(String s) {
                }

                @Override
                public void onProviderDisabled(String s) {
                }
            };
            //super.onPreExecute();
        }

        @Override
        protected Void doInBackground(Void... voids) {

            finalAddress = "Hey.. I am in Danger. Please, help me ASAP!!My IMEI number is " + IMEI_Number_Holder;
            Log.d("Volley","hereeeeee");
            Log.d("hehe", "GPS is:" + isGPSEnabled());
            Log.d("Volley", "here again");
            if (isGPSEnabled()) {
                getLatAndLong(1);
                Log.d("Volley", "got location");
            } else if (isNetworkEnabled())
                getLatAndLong(2);
            else
                publishProgress(1);
            finalAddress = finalAddress + "Latitiudes: " + latitude + " Longitudes: " + longitude;
            Log.d("Volley", "lat and long : " + finalAddress);
            if (isNetworkEnabled() || isWifiEnabled()) {
                //Geocoder geocoder;
                addresses = null;
                geocoder = new Geocoder(SOSActivity.this, Locale.getDefault());

                try {
                    addresses = geocoder.getFromLocation(latitude, longitude, 1);
                    // Here 1 represent max location result to returned, by documents it recommended 1 to 5
                    //  Log.d("hehe",addresses);
                } catch (IOException e) {
                    e.printStackTrace();
                }

                address = addresses.get(0).getAddressLine(0); // If any additional address line present than only, check with max available address lines by getMaxAddressLineIndex()
                city = addresses.get(0).getLocality();
                state = addresses.get(0).getAdminArea();
                country = addresses.get(0).getCountryName();
                postalCode = addresses.get(0).getPostalCode();
                knownName = addresses.get(0).getFeatureName();
                finalAddress = "Hey.. I am in Danger. Please, help me ASAP!! Latitudes : " + latitude + " Longitudes : " + longitude + " and my location is : " + address + " " + city + " " + state + " " + country + " " + postalCode + "" + knownName;
                Log.d("Volley", finalAddress);
            }
            return null;
        }

        void getLatAndLong(int type) {

            if (type == 1) {//GPS provider
                provider = LocationManager.GPS_PROVIDER;
                Log.e("Volley",provider);
            } else {
                provider = LocationManager.NETWORK_PROVIDER;
                Log.e("Volley",provider);
            }


            try {
                publishProgress(2);
                //  Log.d("hehe","progress published");
                while (!notified) {
                }  //blocking position
                Log.d("Volley","notified");
//                location_manager.requestLocationUpdates(provider,0,0,ll);
                if (location_manager != null) {
                    location = location_manager.getLastKnownLocation(provider);
                } else
                    Log.d("Volley", "Location Manager is null");
                if (location != null) {
                    latitude = location.getLatitude();
                    longitude = location.getLongitude();
                    Log.d("Volley", "" + latitude + " " + longitude);
                } else
                    Log.d("Volley", "location is null");
            } catch (SecurityException e) {
                e.printStackTrace();

            }
        }

        @Override
        protected void onProgressUpdate(Integer... values) {
            if (values[0] == 1) {
                Toast.makeText(SOSActivity.this, "Neither GPS nor NETWORK is enabled..Unable to find location", Toast.LENGTH_SHORT).show();
            } else if (values[0] == 2) {
                try {
                    Log.d("hehe","requesting location");
                    location_manager.requestLocationUpdates(provider, 0, 0, ll);
                } catch (SecurityException e) {
                    e.printStackTrace();
                }
            }
        }

        @Override
        protected void onPostExecute(Void aVoid) {
            super.onPostExecute(aVoid);
        }
    }


}

