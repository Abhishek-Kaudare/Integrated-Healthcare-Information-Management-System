package com.example.findmyhospital;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;

import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.Volley;
import com.example.findmyhospital.Model.Hospital;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

public class Fragment_Hospital extends Fragment {

    ViewGroup root;
    String url,baseURL,val;
    List<Hospital> hosp;
    RequestQueue requestQueue;
    ListView listView;
    Intent intent;

    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup)inflater.inflate(R.layout.activity_list_of_hospitals,null);
        baseURL = getString(R.string.base_url);
        requestQueue = Volley.newRequestQueue(getContext());
        hosp = new ArrayList<>();
        listView = (ListView)root.findViewById(R.id.listViewOfHospital);
        try{
            val = getArguments().getString("args");
        }catch (Exception e){
            Log.e("Volley",e.toString());
        }
        if(val==null){
            getHospitalData();
        }else{
            getHospitalData(val);
            Log.e("Volley",val);
        }


        listView.setOnItemClickListener(new AdapterView.OnItemClickListener(){

            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {

                Hospital hos = hosp.get(i);


                Intent intent = new Intent(getContext(),Personal_Info_Hospitals.class);
//                intent.putExtra("hospital_id", hos.getHospital_id());


                intent = new Intent(getContext(),Personal_Info_Hospitals.class);
                intent.putExtra("hospital_id", hos.getHospital_id());

                startActivity(intent);
            }
        });



        return root;
    }

    private void getHospitalData(String val){
        hosp.clear();


        //Log.e("Volley",j.toString());
        url = baseURL + "api/hospitalfilter";
        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST,val, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            Log.e("Volley",res.toString());
                            String name,city,state,pincode,userId;
                            name = res.getString("hospital_name");
                            city = res.getString("city");
                            state = res.getString("state");
                            pincode = res.getString("pincode");
                            userId = res.getString("hospital_id");
                            Hospital hos = new Hospital(name,city,state,pincode,userId);
                            hosp.add(hos);

                        }catch (Exception e){
                            Log.e("Volley",e.toString());
                        }
                    HospitalCustomAdapter hospitalCustomAdapter = new HospitalCustomAdapter();
                    listView.setAdapter(hospitalCustomAdapter);
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

    private void getHospitalData() {
        hosp.clear();
        url = baseURL + "api/allhospital";
        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST, url, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            //Log.e("Volley",res.toString());
                            String name,city,state,pincode,userId;
                            name = res.getString("hospital_name");
                            city = res.getString("city");
                            state = res.getString("state");
                            pincode = res.getString("pincode");
                            userId = res.getString("hospital_id");
                            Hospital hos = new Hospital(name,city,state,pincode,userId);
                            hosp.add(hos);

                        }catch (Exception e){
                            Log.e("Volley",e.toString());
                        }
                    HospitalCustomAdapter hospitalCustomAdapter = new HospitalCustomAdapter();
                    listView.setAdapter(hospitalCustomAdapter);
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

    class  HospitalCustomAdapter extends BaseAdapter {

        @Override
        public int getCount() {
            //return 1;
            return hosp.size();
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
            view = getLayoutInflater().inflate(R.layout.custom_list_of_hospitals,null);

            Hospital hos = hosp.get(i);

            ImageView imagePharmacyView = (ImageView)view.findViewById(R.id.imageViewHospital);
            TextView pharmacy_name = (TextView)view.findViewById(R.id.hospital_name);
            TextView pharmacy_description = (TextView)view.findViewById(R.id.hospital_description);
            TextView pharmacy_address = (TextView)view.findViewById(R.id.hospital_address);
            TextView pharmacy_distances = (TextView)view.findViewById(R.id.distance_of_hospitals);
            TextView pincode = view.findViewById(R.id.pincode);
            TextView state = view.findViewById(R.id.state);


            imagePharmacyView.setImageResource(R.drawable.medicine);
            pharmacy_name.setText(hos.getHospital_name());
            pharmacy_description.setText(hos.getCity());
            pharmacy_address.setText(hos.getCity());
            state.setText(hos.getState());
            pincode.setText(hos.getPincode());

            return view;
        }
    }



}

