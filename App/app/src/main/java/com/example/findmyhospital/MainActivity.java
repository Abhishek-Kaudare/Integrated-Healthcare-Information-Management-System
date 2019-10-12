package com.example.findmyhospital;

import androidx.appcompat.app.AppCompatActivity;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.Button;
import android.widget.Toast;

import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    EditText eid,pass;
    Button login,register;
    String email,password,baseURL,url;
    SharedPreferences pref;
    RequestQueue requestQueue;
    public static MainActivity fa;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        fa = this;
        eid = findViewById(R.id.email);
        pass= findViewById(R.id.password);
        login = findViewById(R.id.login);
        register = findViewById(R.id.register);
        pref = getSharedPreferences("user_details",MODE_PRIVATE);
        email = pref.getString("email","");
        baseURL = getString(R.string.base_url);
        requestQueue = Volley.newRequestQueue(MainActivity.this);
        if(!email.isEmpty()){
            startActivity(new Intent(MainActivity.this,Homepage.class));
            finish();
        }
        login.setOnClickListener(this);
        register.setOnClickListener(this);
//        b1.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                Intent i4 = new Intent(MainActivity.this,ListOfDoctors.class);
//                startActivity(i4);
//
//            }
//        });
//        b2.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                Intent i3 = new Intent(MainActivity.this,ListOfPharmacy.class);
//                startActivity(i3);
//
//            }
//        });
//        b3.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                Intent i2 = new Intent(MainActivity.this,ListOfBloodBanks.class);
//                startActivity(i2);
//            }
//        });
//        b4.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                Intent i = new Intent(MainActivity.this,Filter.class);
//                startActivity(i);
//            }
//        });

    }

    @Override
    public void onClick(View view) {

        switch (view.getId()){
            case R.id.login:
                verifyLogin();
                break;

            case R.id.register:
                Intent reg = new Intent(MainActivity.this,Register.class);
                startActivity(reg);
                break;

        }

    }

    private void verifyLogin() {
        email = eid.getText().toString();
        password = pass.getText().toString();
        Log.e("Volley",email + " " + password);
        url = baseURL + "api/login";
        //JSONObject jsonRequest = new JSONObject(map);

        try{
            JSONObject jsonBody = new JSONObject();
            jsonBody.put("email",email);
            jsonBody.put("password",password);
            MyJsonArrayRequest Req =new MyJsonArrayRequest(Request.Method.POST, url, jsonBody, new Response.Listener<JSONArray>() {
                        @Override
                        public void onResponse(JSONArray response) {
                            try {
                                for(int i = 0; i < response.length(); i++)
                                    try {
                                        JSONObject res = response.getJSONObject(i);
                                        Log.e("Volley",res.toString());
                                        if (res.getString("message").equals("SUCCESS")) {
                                            SharedPreferences.Editor editor = pref.edit();
                                            editor.putString("email", email);
                                            editor.commit();
                                            Intent intent = new Intent(getApplicationContext(), Homepage.class);
                                            intent.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
                                            startActivity(intent);
                                            finish();
                                        }
                                    }catch(Exception e){
                                        Log.e("Volley",e.toString());
                                        }

                            } catch (Exception e) {
                                // If there is an error then output this to the logs.
                                Log.e("Volley", "Invalid JSON Object.");
                            }

                        }
                    },

                    new Response.ErrorListener() {
                        @Override
                        public void onErrorResponse(VolleyError error) {
                            // If there a HTTP error then add a note to our repo list.
//                        setRepoListText("Error while calling REST API");
                            Log.e("Volley", error.toString());
                        }
                    }
            );
            Req.setRetryPolicy(new DefaultRetryPolicy(500000,
                    DefaultRetryPolicy.DEFAULT_MAX_RETRIES,
                    DefaultRetryPolicy.DEFAULT_BACKOFF_MULT));
            requestQueue.add(Req);
        }catch (Exception e){
            Log.e("Volley",e.toString());
        }

    }
}
