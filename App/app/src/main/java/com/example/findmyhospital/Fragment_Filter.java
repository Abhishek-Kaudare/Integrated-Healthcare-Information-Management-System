package com.example.findmyhospital;

import android.content.Intent;
import android.location.Location;
import android.location.LocationManager;
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

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

public class Fragment_Filter extends Fragment implements View.OnClickListener{

    ViewGroup root;
    String value1,value2;
    Spinner specialistDoctor,infra;
    Button search;
    RequestQueue requestQueue;
    String url,baseURL;
    List<String> Spectypes,infratypes;

    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup) inflater.inflate(R.layout.activity_filter, null);
        baseURL = getString(R.string.base_url);
        requestQueue = Volley.newRequestQueue(getContext());
        specialistDoctor = root.findViewById(R.id.specialist);
        infra = root.findViewById(R.id.infra);
        Spectypes = new ArrayList<>();
        infratypes = new ArrayList<>();
        getHospitalType();
        getInfraType();

        search = root.findViewById(R.id.search_hospital);
//        infratypes.add("SPECT/CT");
//        infratypes.add("LINAC Accelerator (Novalis Tx)");
//        infratypes.add("High Dose Rate (HDR) Brachytherapy");
//        infratypes.add("Digitalized X-Ray, USG, CT-Scan, MRI");
//        infratypes.add("EEG (Electroencephalography");
//        infratypes.add("Motorized Thrombectomy System");
//        infratypes.add("3 Tesla MRI");
//        infratypes.add("C-Arm Scan");

//        ArrayAdapter<String> specAdapter = new ArrayAdapter<String>(getActivity(),android.R.layout.simple_spinner_item,infratypes);
//        specAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
//        infra.setAdapter(specAdapter);

        specialistDoctor.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> adapterView, View view, int i, long l) {
                value1 = Spectypes.get(i);
                specialistDoctor.setSelection(i);
                Log.e("Volley",value1);
            }

            @Override
            public void onNothingSelected(AdapterView<?> adapterView) {

            }
        });

        infra.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> adapterView, View view, int i, long l) {
                value2 = infratypes.get(i);
                infra.setSelection(i);
                Log.e("Volley",value2);
            }

            @Override
            public void onNothingSelected(AdapterView<?> adapterView) {

            }
        });

        search.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Double lat = 13.3533;
                Double lon = 74.7849;
                url = baseURL + "api/hospitalfilter";

                Fragment_Hospital fragment_hospital= new Fragment_Hospital();
                Bundle args = new Bundle();
                args.putString("args",url);
                fragment_hospital.setArguments(args);
                FragmentTransaction transaction = getActivity().getSupportFragmentManager().beginTransaction();
                transaction.add(R.id.fragment,fragment_hospital);
                transaction.replace(R.id.fragment,fragment_hospital).commit();
            }
        });

        return root;

    }

    private void getInfraType() {
        url = baseURL + "api/allhosspec";
        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST, url, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            infratypes.add(res.getString("specialization_name"));

                        }catch (Exception e){
                            Log.e("Volley",e.toString());
                        }
                    ArrayAdapter<String> specAdapter = new ArrayAdapter<String>(getActivity(),android.R.layout.simple_spinner_item,infratypes);
                    specAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
                    infra.setAdapter(specAdapter);
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

    @Override
    public void onClick(View view) {
        Fragment_Hospital fragment_hospital = new Fragment_Hospital();
        FragmentTransaction fragmentTransaction = getActivity().getSupportFragmentManager().beginTransaction();
        fragmentTransaction.replace(R.id.fragment,fragment_hospital);
        fragmentTransaction.addToBackStack(null);
        fragmentTransaction.commit();
    }

    private void getHospitalType(){
        url = baseURL + "api/alltypesofhospital";
        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST, url, null, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            Spectypes.add(res.getString("type"));
//                            Log.e("Volley",res.getString("type"));

                        }catch (Exception e){
                            Log.e("Volley",e.toString());
                        }
                    ArrayAdapter<String> doctornamesAdapter = new ArrayAdapter<String>(getActivity(),android.R.layout.simple_spinner_item,Spectypes);
                    doctornamesAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);

                    specialistDoctor.setAdapter(doctornamesAdapter);
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
