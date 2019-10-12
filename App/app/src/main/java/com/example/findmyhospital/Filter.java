package com.example.findmyhospital;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.util.Log;
import android.widget.ArrayAdapter;
import android.widget.Spinner;

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

public class Filter extends AppCompatActivity {

    Spinner specialistDoctor;
    Spinner language;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_filter);


        specialistDoctor = findViewById(R.id.specialist);
        language = findViewById(R.id.language);



        //specialistDoctor = findViewById(R.id.spinner1);
//        currentLocation = findViewById(R.id.spinner2);
//        Date = findViewById(R.id.spinner3);
//        Gender = findViewById(R.id.spinner4);




        List<String> doctor_names = new ArrayList<>();
        doctor_names.add("Choose your Specialist");

        doctor_names.add("Dr. Pankaj Trpathi- Cardiologist");
        doctor_names.add("Dr. Sanjib Gupta - Dermatologist");
        doctor_names.add("Dr. Athul B - Dentist");
        doctor_names.add("Dr. Abhishek Kaudare - Pathalogist");


        ArrayAdapter<String> doctornamesAdapter = new ArrayAdapter<>(this,android.R.layout.simple_spinner_item,doctor_names);
        doctornamesAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        specialistDoctor.setAdapter(doctornamesAdapter);


//        *********************************************************

        List<String> current_location = new ArrayList<>();
        current_location.add("Current Loctaion");
        current_location.add("Kurla");
        current_location.add("Chembur");
        current_location.add("Dadar");
        current_location.add("Sion");

        ArrayAdapter<String> currentlocationAdapter = new ArrayAdapter<>(this,android.R.layout.simple_spinner_item,current_location);
        currentlocationAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        language.setAdapter(currentlocationAdapter);

    }


}
