package com.example.findmyhospital;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.RatingBar;
import android.widget.TextView;
import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.Volley;
import com.example.findmyhospital.Model.Hospital;

import org.json.JSONArray;
import org.json.JSONObject;

public class Personal_Info_Hospitals extends AppCompatActivity {
    String hospital_id;
    String url,baseURL;
    RequestQueue requestQueue;
    String name,city,state,pincode,lat,lon,address;
    TextView doctor_name,doctor_description,doctor_address,contact,additionalAddress;
    Intent intent,intent1,intent2,intent3,intent4;

    int[] reviewsrate = {2,4,3,5};
    String[] user = {"Megha sahu","Sejal Nair","Athul B.","Milan Hazra"};
    String[] user_reviews = {"","","",""};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_personal_info_hospitals);
        baseURL = getString(R.string.base_url);
        requestQueue = Volley.newRequestQueue(getApplicationContext());

        ImageView imageView = (ImageView)findViewById(R.id.imageView);
        doctor_name = (TextView)findViewById(R.id.doctor_name);
        doctor_description = (TextView)findViewById(R.id.doctor_description);
        doctor_address = (TextView)findViewById(R.id.doctor_address);
        contact = (TextView)findViewById(R.id.certis);
        Button viewOnMap = (Button)findViewById(R.id.viewonmap);
        Button view_nearby_facilities = (Button)findViewById(R.id.view_nearby_facilities);
        Button view_bed = (Button)findViewById(R.id.view_beds);
        Button view_beds = (Button)findViewById(R.id.view_beds);
        Button view_infra = (Button)findViewById(R.id.view_infra);

        additionalAddress = (TextView)findViewById(R.id.extended_address);


//        final Intent intent = getIntent();
//        imageView.setImageResource(intent.getIntExtra("image",0));
//        final int image = intent.getIntExtra("image",0);
//        doctor_name.setText(intent.getStringExtra("doctor_name"));
//        final String dn = intent.getStringExtra("doctor_name");
//        doctor_description.setText(intent.getStringExtra("doctor_description"));
//        final String dd = intent.getStringExtra("doctor_description");
//        doctor_address.setText(intent.getStringExtra("doctor_address"));
//        final String da = intent.getStringExtra("doctor_address");
//        contact.setText("9022909863");


        Log.d("before","list");
        final ListView listview = (ListView)findViewById(R.id.review_hospital);
        ReviewsAdapter reviewsAdapter = new ReviewsAdapter();
        listview.setAdapter(reviewsAdapter);

        Log.d("listview","list");

        intent = getIntent();
        imageView.setImageResource(R.drawable.medicine);
        hospital_id = intent.getExtras().getString("hospital_id");
        Log.e("Volley",hospital_id);
        getHospitalInfo(hospital_id);
        intent3=new Intent(this,ListOfBeds.class);
        intent4=new Intent(this,ListOfInfra.class);


        viewOnMap.setOnClickListener(new View.OnClickListener() {

//            double lat =13.3535953;
//            double lng = 74.7876102;
            @Override
            public void onClick(View view) {

                try{
                    startActivity(intent1);
                }catch (Exception e){
                    Log.e("Volley",e.toString());
                }

            }
        });

        view_nearby_facilities.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

//                double lat =13.3541647;
//                double lng = 74.7898894;

                startActivity(intent2);
            }
        });

        view_bed.setOnClickListener(new View.OnClickListener() {

            //            double lat =13.3535953;
//            double lng = 74.7876102;
            @Override
            public void onClick(View view) {

                try{
                    startActivity(intent3);
                }catch (Exception e){
                    Log.e("No Volley",e.toString());
                }

            }
        });

        view_infra.setOnClickListener(new View.OnClickListener() {

            //            double lat =13.3535953;
//            double lng = 74.7876102;
            @Override
            public void onClick(View view) {

                try{
                    startActivity(intent4);
                }catch (Exception e){
                    Log.e("No Volley",e.toString());
                }

            }
        });

    }

    class ReviewsAdapter extends BaseAdapter{



//        view_beds.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                Intent intent1 = new Intent(Personal_Info_Hospitals.this,ListOfBeds.class);
//                startActivity(intent1);
//            }
//        });
//
//        view_infra.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                Intent intent1 = new Intent(Personal_Info_Hospitals.this, ListOfInfra.class);
//                startActivity(intent1);
//            }
//        });





        @Override
        public int getCount() {
            return user.length;
        }


        @Override
        public Object getItem(int i) {
            return null;
        }

        @Override
        public long getItemId(int i) {
            return 0;
        }

        @Override
        public View getView(int i, View view, ViewGroup viewGroup) {
            view = getLayoutInflater().inflate(R.layout.custom_reviews_card,null);

            RatingBar ratingBar = (RatingBar)view.findViewById(R.id.review_rating);

            TextView user_name = (TextView)view.findViewById(R.id.user_name);
            TextView user_description = (TextView)view.findViewById(R.id.review_description);

            ratingBar.setRating(reviewsrate[i]);
            user_name.setText(user[i]);
            user_description.setText(user_reviews[i]);

            Log.d("list","done");

            return view;
        }

    }

    private void getHospitalInfo(String hospital_id) {
        url = baseURL + "api/ihsopital/"+hospital_id;
        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST, url, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            Log.e("Volley",res.toString());
                            name = res.getString("hospital_name");
                            Log.e("Volley",name);
                            city = res.getString("city");
                            Log.e("Volley",city);
                            state = res.getString("state");
                            Log.e("Volley",state);
                            pincode = res.getString("pincode");
                            Log.e("Volley",pincode);
                            lat = res.getString("lat");
                            lon = res.getString("longitude");
                            address = res.getString("address");
                            doctor_name.setText(name);
                            doctor_description.setText("description");
                            doctor_address.setText(address);
                            additionalAddress.setText(city + " " + state + " " + pincode);
                            contact.setText("9022909863");
                            intent1 = new Intent(Personal_Info_Hospitals.this,MapsActivity.class);
                            intent1.putExtra("lat",Double.valueOf(lat));
                            Log.e("Volley",lon);
                            Log.e("Volley",lat);
                            intent1.putExtra("lng",Double.valueOf(lon));
                            intent1.putExtra("hn",name);
                            intent1.putExtra("ha",address);
                            intent2 = new Intent(Personal_Info_Hospitals.this,Maps2Activity.class);
                            intent2.putExtra("lat",Double.valueOf(lat));
                            intent2.putExtra("lng",Double.valueOf(lon));
                            intent2.putExtra("hn",name);
                            intent2.putExtra("ha",address);


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
