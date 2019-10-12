package com.example.findmyhospital;

import androidx.appcompat.app.AppCompatActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Button;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    EditText eid,pass;
    Button login,register;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        eid = findViewById(R.id.email);
        pass= findViewById(R.id.password);
        login = findViewById(R.id.login);
        register = findViewById(R.id.register);

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
                Intent i = new Intent(MainActivity.this,Homepage.class);
                startActivity(i);
                break;

            case R.id.register:
                Intent reg = new Intent(MainActivity.this,Register.class);
                startActivity(reg);
                break;

        }

    }
}
