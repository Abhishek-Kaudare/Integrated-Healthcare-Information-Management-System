package com.example.findmyhospital;

import androidx.appcompat.app.AppCompatActivity;
import androidx.cardview.widget.CardView;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.ListView;
import android.widget.TextView;

import java.lang.reflect.Array;
import java.util.ArrayList;

public class Other_hospitals extends AppCompatActivity {

    String[] Address = {"Mumbai, Colaba-East..", "Dadar-Badia Hospital.." , "Bandra, A-201 45 Marg"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_other_hospitals);
        Intent intent = getIntent();
        ImageView imageView = (ImageView)findViewById(R.id.imageView);
        TextView doctor_name = (TextView)findViewById(R.id.doctor_name);
        TextView doctor_description = (TextView)findViewById(R.id.doctor_description);

        imageView.setImageResource(intent.getIntExtra("image",0));
        doctor_name.setText(intent.getStringExtra("name"));
        doctor_description.setText(intent.getStringExtra("description"));









    }

    }


