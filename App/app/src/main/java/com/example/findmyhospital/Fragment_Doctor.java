package com.example.findmyhospital;

import android.content.Intent;
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
import com.example.findmyhospital.Model.BloodBank;
import com.example.findmyhospital.Model.Doctor;

import org.json.JSONArray;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

public class Fragment_Doctor extends Fragment {

    ViewGroup root;
    String url,baseURL,val;
    List<Doctor> hosp;
    RequestQueue requestQueue;
    ListView listView;

    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup)inflater.inflate(R.layout.activity_list_of_doctors,null);
        //Log.i("Volley",getArguments().getString("docs_id"));
        listView = (ListView)root.findViewById(R.id.listView);
        baseURL = getString(R.string.base_url);
        requestQueue = Volley.newRequestQueue(getContext());
        hosp = new ArrayList<>();
        listView = (ListView)root.findViewById(R.id.listView);
        try{
            val = getArguments().getString("args");
        }catch (Exception e){
            Log.e("Volley",e.toString());
        }
        if(val==null){
            getDoctorData();
        }else{
            getDoctorData(val);
            Log.e("Volley","hello");
        }

        listView.setOnItemClickListener(new AdapterView.OnItemClickListener(){

            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {

                Doctor hos = hosp.get(i);
                Intent intent = new Intent(getActivity(),Personal_Info_Doctors.class);
                intent.putExtra("doctor_id", hos.getDoctor_id());
                startActivity(intent);
            }
        });
        return root;
    }

    private void getDoctorData(String val) {
        hosp.clear();
        url = baseURL + "api/docfilter/" + val;
        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST, url, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            Log.e("Volley","val " + res.toString());
                            String name,city,state,pincode,userId;
                            name = res.getString("name");
                            city = res.getString("city");
                            state = res.getString("state");
                            pincode = res.getString("pincode");
                            userId = res.getString("doctor_id");
                            Doctor hos = new Doctor(name,city,state,pincode,userId);
                            hosp.add(hos);

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

    private void getDoctorData() {
        hosp.clear();
        url = baseURL + "api/alldoctors";
        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST, url, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            Log.e("Volley",res.toString());
                            String name,city,state,pincode,userId;
                            name = res.getString("name");
                            city = res.getString("city");
                            state = res.getString("state");
                            pincode = res.getString("pincode");
                            userId = res.getString("doctor_id");
                            Doctor hos = new Doctor(name,city,state,pincode,userId);
                            hosp.add(hos);

                        }catch (Exception e){
                            Log.e("Volley",e.toString());
                        }
                    try{
                        CustomAdapter CustomAdapter = new CustomAdapter();
                        listView.setAdapter(CustomAdapter);
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

    class  CustomAdapter extends BaseAdapter {

        @Override
        public int getCount() {
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
            view = getLayoutInflater().inflate(R.layout.customlistofoperators,null);

            Doctor hos = hosp.get(i);
            ImageView imageView = (ImageView)view.findViewById(R.id.imageView);
            TextView doctor_name = (TextView)view.findViewById(R.id.doctor_name);
            TextView doctor_description = (TextView)view.findViewById(R.id.doctor_description);
            TextView doctor_address = (TextView)view.findViewById(R.id.doctor_address);
            TextView doctor_distances = (TextView)view.findViewById(R.id.distance_of_doctors);
            TextView pincode = view.findViewById(R.id.pincode);
            TextView state = view.findViewById(R.id.state);

            imageView.setImageResource(R.drawable.doctor);
            doctor_name.setText(hos.getName());
            doctor_description.setText(hos.getCity());
            doctor_address.setText(hos.getCity());
            state.setText(hos.getState());
            pincode.setText(hos.getPincode());

            return view;
        }
    }
}
