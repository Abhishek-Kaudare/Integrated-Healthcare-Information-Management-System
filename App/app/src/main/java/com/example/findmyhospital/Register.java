package com.example.findmyhospital;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
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
import java.util.Iterator;
import java.util.Map;

public class Register extends AppCompatActivity implements View.OnClickListener {
    Button reg;
    EditText email,name,password,confirm;
    TextView text;
    String nameS,emailS,passwordS,confirmS;
    RequestQueue requestQueue;
    String url;
    String baseURL;
    SharedPreferences pref;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
        Log.e("Volley","hello");
        email = findViewById(R.id.email);
        name = findViewById(R.id.name);
        password = findViewById(R.id.password);
        confirm = findViewById(R.id.confirm);
        text = findViewById(R.id.text);
        reg=findViewById(R.id.register);
        pref = getSharedPreferences("user_details",MODE_PRIVATE);
        requestQueue = Volley.newRequestQueue(this);
        reg.setOnClickListener(this);
    }


    @Override
    public void onClick(View view) {
        switch (view.getId()){
            case R.id.register:
                nameS = name.getText().toString();
                emailS = email.getText().toString();
                passwordS = password.getText().toString();
                confirmS = confirm.getText().toString();
                baseURL = getString(R.string.base_url);
                if(passwordS.equals(confirmS)){
                    register();
                }else{
                    text.setVisibility(View.VISIBLE);
                }
                break;


        }
    }

    private void register() {

        HashMap<String,Object> map = new HashMap<>();
        map.put("email",emailS);
        map.put("password",passwordS);
        map.put("name",nameS);
        map.put("role_id",Integer.parseInt("1"));
        url = baseURL + "api/register";

        JSONObject jsonRequest = new JSONObject(map);

        try{
            MyJsonArrayRequest request=new MyJsonArrayRequest(Request.Method.POST, url, jsonRequest, new Response.Listener<JSONArray>() {
                @Override
                public void onResponse(JSONArray response) {
                    Log.e("Volley",response.toString());
                    for(int i = 0; i < response.length(); i++)
                        try{
                            JSONObject res = response.getJSONObject(i);
                            if(res.getString("message").equals("SUCCESS")){
                                SharedPreferences.Editor editor = pref.edit();
                                editor.putString("email",emailS);
                                editor.commit();
                                Intent intent = new Intent(getApplicationContext(),Homepage.class);
                                intent.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
                                startActivity(intent);
                                MainActivity.fa.finish();
                                finish();

                            }

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
