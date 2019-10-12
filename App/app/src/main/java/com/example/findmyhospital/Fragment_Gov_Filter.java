package com.example.findmyhospital;

import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

import java.util.ArrayList;
import java.util.List;

public class Fragment_Gov_Filter extends Fragment implements View.OnClickListener {
    ViewGroup root;
    Button search;
    Spinner spinner;
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState){
        root = (ViewGroup)inflater.inflate(R.layout.activity_fragment_gov_filter,null);
        spinner = (Spinner)root.findViewById(R.id.category);
// Create an ArrayAdapter using the string array and a default spinner layout
       ArrayAdapter<CharSequence> adapter = ArrayAdapter.createFromResource(getContext(),
                R.array.spinner_gov, android.R.layout.simple_spinner_item);
// Specify the layout to use when the list of choices appears
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(adapter);



        search = (Button)root.findViewById(R.id.search_gov);
        search.setOnClickListener(this);



        return root;
    }

    @Override
    public void onClick(View view) {

        String selected = spinner.getSelectedItem().toString();
        Intent i = new Intent(getContext(),ListOfSchemes.class);
        i.putExtra("gov_filter",selected);
        startActivity(i);
    }

}
