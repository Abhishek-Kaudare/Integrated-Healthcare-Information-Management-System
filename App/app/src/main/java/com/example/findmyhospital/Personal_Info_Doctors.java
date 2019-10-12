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

import org.json.JSONArray;
import org.json.JSONObject;

public class Personal_Info_Doctors extends AppCompatActivity {


    int[] reviewsrate = {2, 4, 3, 5};
    String[] user = {"Megha sahu", "Sejal Nair", "Athul B.", "Milan Hazra"};
    String[] user_reviews = {"", "", "", ""};
    String doctor_id;
    String url, baseURL;
    RequestQueue requestQueue;
    String name, city, state, pincode, address;
    TextView doctor_name, doctor_description, doctor_address, additionalAddress;
    Intent intent;
    TextView button2,button3;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_personal__info__doctors);

        ImageView imageView = (ImageView) findViewById(R.id.imageView);
        doctor_name = (TextView) findViewById(R.id.doctor_name);
        doctor_description = (TextView) findViewById(R.id.doctor_description);
        doctor_address = (TextView) findViewById(R.id.doctor_address);
        additionalAddress = findViewById(R.id.extended_address);
        Button other_hospitals = (Button) findViewById(R.id.button1);
        TextView button2 = findViewById(R.id.button2);
        TextView button3 = findViewById(R.id.button3);

        baseURL = getString(R.string.base_url);
        requestQueue = Volley.newRequestQueue(getApplicationContext());


        Intent intent = getIntent();
        imageView.setImageResource(intent.getIntExtra("image", 0));
        final int image = intent.getIntExtra("image", 0);
        doctor_name.setText(intent.getStringExtra("doctor_name"));
        final String dn = intent.getStringExtra("doctor_name");
        doctor_description.setText(intent.getStringExtra("doctor_description"));
        final String dd = intent.getStringExtra("doctor_description");
        doctor_address.setText(intent.getStringExtra("doctor_address"));

        final ListView listview = (ListView) findViewById(R.id.review_doctors);
        ReviewsAdapter reviewsAdapter = new ReviewsAdapter();
        listview.setAdapter(reviewsAdapter);


        intent = getIntent();
        imageView.setImageResource(R.drawable.medicine);
        doctor_id = intent.getExtras().getString("doctor_id");
        Log.e("Volley", doctor_id);
        getDoctorInfo(doctor_id);


//        Intent intent = getIntent();
//        imageView.setImageResource(intent.getIntExtra("image",0));
//        final int image = intent.getIntExtra("image",0);
//        doctor_name.setText(intent.getStringExtra("doctor_name"));
//        final String dn = intent.getStringExtra("doctor_name");
//        doctor_description.setText(intent.getStringExtra("doctor_description"));
//        final String dd = intent.getStringExtra("doctor_description");
//        doctor_address.setText(intent.getStringExtra("doctor_address"));
//        StringBuilder builder =new StringBuilder();
//        String[] arr = {"MMBS" ,"BDS" , "BAMS"};
//        for (String s : arr) {
//            builder.append(s).append("\n");
//            certis.setText(builder.toString());
//
//
//        }
    }

    private void getDoctorInfo(String doctor_id) {
        url = baseURL + "api/idoctor/" + doctor_id;
        try {
            MyJsonArrayRequest request = new MyJsonArrayRequest(Request.Method.POST, url, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for (int i = 0; i < response.length(); i++)
                        try {
                            JSONObject res = response.getJSONObject(i);
                            Log.e("Volley", res.toString());
                            name = res.getString("name");
                            Log.e("Volley", name);
                            city = res.getString("city");
                            Log.e("Volley", city);
                            state = res.getString("state");
                            pincode = res.getString("pincode");
                            Log.e("Volley", pincode);
                            address = res.getString("address");
                            doctor_name.setText(name);
                            doctor_description.setText("description");
                            doctor_address.setText(address);
                            additionalAddress.setText(city + " " + state + " " + pincode);

                        } catch (Exception e) {
                            Log.e("Volley", e.toString());
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
        } catch (Exception e) {
            Log.e("Volley", e.toString());
        }

    }


    class ReviewsAdapter extends BaseAdapter {


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
            view = getLayoutInflater().inflate(R.layout.custom_reviews_card, null);

            RatingBar ratingBar = (RatingBar) view.findViewById(R.id.review_rating);

            TextView user_name = (TextView) view.findViewById(R.id.user_name);
            TextView user_description = (TextView) view.findViewById(R.id.review_description);

            ratingBar.setRating(reviewsrate[i]);
            user_name.setText(user[i]);
            user_description.setText(user_reviews[i]);

            Log.d("list", "done");

            return view;

        }
    }
}