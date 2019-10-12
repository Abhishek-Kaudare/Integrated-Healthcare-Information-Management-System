package com.example.findmyhospital;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONObject;

import androidx.appcompat.app.AppCompatActivity;

public class Personal_Info_Pharmacy extends AppCompatActivity {

    String pharmacy_id;
    String url,baseURL;
    RequestQueue requestQueue;
    String name,city,state,pincode,lat,lon,address;
    TextView doctor_name,doctor_description,doctor_address,additionalAddress;
    Intent intent,intent1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_personal__info__pharmacy);

        ImageView imageView = (ImageView) findViewById(R.id.imageView);
        doctor_name = (TextView) findViewById(R.id.pharmacy_name);
        doctor_description = (TextView) findViewById(R.id.pharmacy_description);
        doctor_address = (TextView) findViewById(R.id.pharmacy_address);
        additionalAddress = findViewById(R.id.extended_address);
        Button viewOnMap = (Button) findViewById(R.id.viewonmap);

        baseURL = getString(R.string.base_url);
        requestQueue = Volley.newRequestQueue(getApplicationContext());

        intent = getIntent();
        imageView.setImageResource(R.drawable.medicine);
        pharmacy_id = intent.getExtras().getString("pharmacy_id");
        getPharmacyInfo(pharmacy_id);


        viewOnMap.setOnClickListener(new View.OnClickListener() {

//            double lat = 13.3464352;
//            double lng = 72.8713559;

            @Override
            public void onClick(View view) {
                startActivity(intent1);
            }
        });
    }
    private void getPharmacyInfo(String pharmacy_id) {
        url = baseURL + "api/ipharmacy/"+pharmacy_id;
        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST, url, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            Log.e("Volley",res.toString());
                            name = res.getString("pharmacy_name");
                            Log.e("Volley",name);
                            city = res.getString("city");
                            Log.e("Volley",city);
                            state = res.getString("state");
                            pincode = res.getString("pincode");
                            Log.e("Volley",pincode);
                            lat = res.getString("lat");
                            lon = res.getString("longitude");
                            address = res.getString("address");
                            doctor_name.setText(name);
                            doctor_description.setText("description");
                            doctor_address.setText(address);
                            additionalAddress.setText(city + " " + state + " " + pincode);
                            intent1 = new Intent(Personal_Info_Pharmacy.this, MapsActivity.class);
                            intent1.putExtra("lat", lat);
                            intent1.putExtra("lng", lon);
                            intent1.putExtra("hn",name);
                            intent1.putExtra("ha", address);

                        }catch (Exception e){
                            Log.e("Volley",e.toString());
                        }
                }
            }, new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {
                    error.printStackTrace();
                    Log.i("onErrorResponse", "Error");
                }
            });
            request.setRetryPolicy(new DefaultRetryPolicy(500000,
                    DefaultRetryPolicy.DEFAULT_MAX_RETRIES,
                    DefaultRetryPolicy.DEFAULT_BACKOFF_MULT));
            requestQueue.add(request);
        }catch (Exception e){
            Log.e("Volley",e.toString());
        }
    }
}




