package com.example.findmyhospital;

import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;

import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONObject;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentTransaction;

import com.android.volley.toolbox.Volley;
import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

public class Fragment_Doctor_Filter extends Fragment implements View.OnClickListener {

    ViewGroup root;
    Spinner spec;
    Spinner language;
    Button search;
    RequestQueue requestQueue;
    String url,baseURL;
    List<String> types;
    String value1,value2;
    List<String> specs;
    List<String> languages;
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup) inflater.inflate(R.layout.fragment_doctor_filter, null);
        baseURL = getString(R.string.base_url);
        requestQueue = Volley.newRequestQueue(getContext());
        spec = root.findViewById(R.id.spec);
        specs = new ArrayList<>();
        getSpecsType();
        language = root.findViewById(R.id.language);
        search = root.findViewById(R.id.search_hospital);


        baseURL = getString(R.string.base_url);
        requestQueue = Volley.newRequestQueue(getContext());
        types = new ArrayList<>();
        //getDoctorType();


        List<String> doctor_specialist = new ArrayList<>();
        doctor_specialist.add("Choose your Specialist");

        spec.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> adapterView, View view, int i, long l) {
                value1 = specs.get(i);
                spec.setSelection(i);
                Log.e("Volley",value1);
            }

            @Override
            public void onNothingSelected(AdapterView<?> adapterView) {


//        ArrayAdapter<String> doctornamesAdapter = new ArrayAdapter<String>(getActivity(),android.R.layout.simple_spinner_item,doctor_names);
//        doctornamesAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
//        specialistDoctor.setAdapter(doctornamesAdapter);

//        *********************************************************
            }
        });

        languages = new ArrayList<>();
        languages.add("Hindi");
        languages.add("Punjabi");
        languages.add("Gujarati");

        language.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> adapterView, View view, int i, long l) {
                value2 = languages.get(i);
                Log.e("Volley",value2);
            }


            @Override
            public void onNothingSelected(AdapterView<?> adapterView) {

            }
        });

        ArrayAdapter<String> currentlocationAdapter = new ArrayAdapter<String>(getActivity(),android.R.layout.simple_spinner_item,languages);
        currentlocationAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        language.setAdapter(currentlocationAdapter);

        search.setOnClickListener(this);

        return root;

    }

    @Override
    public void onClick(View view) {
        Fragment_Doctor fragment_doctor = new Fragment_Doctor();
        Bundle args = new Bundle();
        args.putString("args",value2+"/"+value1);
        fragment_doctor.setArguments(args);
        FragmentTransaction transaction = getActivity().getSupportFragmentManager().beginTransaction();
        transaction.add(R.id.fragment,fragment_doctor);
        transaction.replace(R.id.fragment,fragment_doctor).commit();


    }

    private void getSpecsType(){
        url = baseURL + "api/specialityList";
        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST, url, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            specs.add(res.getString("medical_speciality_name"));
//                            Log.e("Volley",res.getString("type"));

                        }catch (Exception e){
                            Log.e("Volley",e.toString());
                        }
                    ArrayAdapter<String> doctornamesAdapter = new ArrayAdapter<String>(getActivity(),android.R.layout.simple_spinner_item,specs);
                    doctornamesAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
                    spec.setAdapter(doctornamesAdapter);
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
