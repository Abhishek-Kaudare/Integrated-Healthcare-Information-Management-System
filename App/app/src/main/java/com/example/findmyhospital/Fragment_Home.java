package com.example.findmyhospital;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.SearchView;
import android.widget.Switch;
import android.widget.Toast;
import android.widget.ViewFlipper;
import android.content.Intent;
import android.os.Bundle;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.cardview.widget.CardView;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentTransaction;

import java.util.Locale;

public class Fragment_Home extends Fragment implements View.OnClickListener,SearchView.OnQueryTextListener {
    @Nullable
    ViewFlipper v_flip;
    ViewGroup root;
    CardView hospital,blood,pharmacy,doctor;
    SearchView searchView;
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        root = (ViewGroup)inflater.inflate(R.layout.fragment_homepage,null);
        int image[] = {R.drawable.slide1,R.drawable.slide2,R.drawable.slide3};

        searchView = root.findViewById(R.id.search_main);
        v_flip = root.findViewById(R.id.v_flipper);

        for(int i :image){
            flipperImages(i);
        }

        blood = root.findViewById(R.id.bloodbank_card);
        hospital = root.findViewById(R.id.hospital_card);
        doctor = root.findViewById(R.id.doctor_card);
        pharmacy = root.findViewById(R.id.pharmacy_card);

        blood.setOnClickListener(this);
        hospital.setOnClickListener(this);
        doctor.setOnClickListener(this);
        pharmacy.setOnClickListener(this);
        searchView.setOnQueryTextListener(this);

        return root;
    }

public void flipperImages(int image){

        ImageView imageView = new ImageView(getActivity());
        imageView.setBackgroundResource(image);

        v_flip.addView(imageView);
        v_flip.setFlipInterval(4000);
        v_flip.setAutoStart(true);

        v_flip.setInAnimation(getActivity(),android.R.anim.slide_in_left);
        v_flip.setOutAnimation(getActivity(),android.R.anim.slide_out_right);

    }

    @Override
    public void onClick(View view) {
        switch (view.getId()) {
            case R.id.hospital_card:
            Toast.makeText(getActivity(), "eass", Toast.LENGTH_SHORT).show();

                Intent i = new Intent(getContext(),Maps3Activity.class);
                startActivity(i);
                //Intent i = new Intent(Fragment_Home.this,Filter.class);
                break;

            case R.id.bloodbank_card:
                Toast.makeText(getActivity(), "eass", Toast.LENGTH_SHORT).show();

                Intent j = new Intent(getContext(),Maps2Activity.class);
                startActivity(j);
                break;
            case R.id.doctor_card:
                Toast.makeText(getActivity(), "doss", Toast.LENGTH_SHORT).show();

                Fragment_Doctor fragment_doctor = new Fragment_Doctor();
                FragmentTransaction fragmentTransactiondo = getActivity().getSupportFragmentManager().beginTransaction();
                fragmentTransactiondo.replace(R.id.fragment,fragment_doctor);
                fragmentTransactiondo.addToBackStack(null);
                fragmentTransactiondo.commit();
                break;

            case R.id.pharmacy_card:
                Toast.makeText(getActivity(), "eass", Toast.LENGTH_SHORT).show();
                Fragment_Pharmacy fragment_pharmacy = new Fragment_Pharmacy();
                FragmentTransaction fragmentTransactionphar = getActivity().getSupportFragmentManager().beginTransaction();
                fragmentTransactionphar.replace(R.id.fragment,fragment_pharmacy);
                fragmentTransactionphar.addToBackStack(null);
                fragmentTransactionphar.commit();
                break;

        }
    }

    @Override
    public boolean onQueryTextSubmit(String s) {

        Log.i("search",s);

        if(s.equals("crocin")||s.equals("Crocin"))
        {
            Toast.makeText(getActivity(), "eass", Toast.LENGTH_SHORT).show();
            Fragment_Pharmacy fragment_pharmacy = new Fragment_Pharmacy();
            FragmentTransaction fragmentTransactionphar = getActivity().getSupportFragmentManager().beginTransaction();
            fragmentTransactionphar.replace(R.id.fragment,fragment_pharmacy);
            fragmentTransactionphar.addToBackStack(null);
            fragmentTransactionphar.commit();
        }
        else if (s.equals("Paracetamol") || s.equals("paracetamol"))
        {
            Toast.makeText(getActivity(), "eass", Toast.LENGTH_SHORT).show();
            Fragment_Pharmacy fragment_pharmacy = new Fragment_Pharmacy();
            FragmentTransaction fragmentTransactionphar = getActivity().getSupportFragmentManager().beginTransaction();
            fragmentTransactionphar.replace(R.id.fragment,fragment_pharmacy);
            fragmentTransactionphar.addToBackStack(null);
            fragmentTransactionphar.commit();
        }

        else if (s.equals("Paracetamol") || s.equals("paracetamol"))
        {
            Toast.makeText(getActivity(), "eass", Toast.LENGTH_SHORT).show();
            Fragment_Pharmacy fragment_pharmacy = new Fragment_Pharmacy();
            FragmentTransaction fragmentTransactionphar = getActivity().getSupportFragmentManager().beginTransaction();
            fragmentTransactionphar.replace(R.id.fragment,fragment_pharmacy);
            fragmentTransactionphar.addToBackStack(null);
            fragmentTransactionphar.commit();
        }

        else if (s.equals("Combiflam") || s.equals("combiflam"))
        {
            Toast.makeText(getActivity(), "eass", Toast.LENGTH_SHORT).show();
            Fragment_Pharmacy fragment_pharmacy = new Fragment_Pharmacy();
            FragmentTransaction fragmentTransactionphar = getActivity().getSupportFragmentManager().beginTransaction();
            fragmentTransactionphar.replace(R.id.fragment,fragment_pharmacy);
            fragmentTransactionphar.addToBackStack(null);
            fragmentTransactionphar.commit();
        }

        else if (s.equals("Pudin Hara") || s.equals("pudin hara")||s.equals("pudinhara")|| s.equals("PudinHara"))
        {
            Toast.makeText(getActivity(), "eass", Toast.LENGTH_SHORT).show();
            Fragment_Pharmacy fragment_pharmacy = new Fragment_Pharmacy();
            FragmentTransaction fragmentTransactionphar = getActivity().getSupportFragmentManager().beginTransaction();
            fragmentTransactionphar.replace(R.id.fragment,fragment_pharmacy);
            fragmentTransactionphar.addToBackStack(null);
            fragmentTransactionphar.commit();
        }

        // Blood Groups search
        else if (s.equals("A-ve") || s.equals("A+ve")||s.equals("a-ve") ||s.equals("a+ve")||s.equals("B+ve")||s.equals("B-ve")||s.equals("b-ve") ||s.equals("b+ve") || s.equals("O-ve")|| s.equals("O+ve")||s.equals("o-ve") ||s.equals("o+ve"))
        {
            Toast.makeText(getActivity(), "eass", Toast.LENGTH_SHORT).show();
            Fragment_Blood fragment_pharmacy = new Fragment_Blood();
            FragmentTransaction fragmentTransactionphar = getActivity().getSupportFragmentManager().beginTransaction();
            fragmentTransactionphar.replace(R.id.fragment,fragment_pharmacy);
            fragmentTransactionphar.addToBackStack(null);
            fragmentTransactionphar.commit();
        }
        else{
            Toast.makeText(getActivity(),"Oops! Query Not Found",Toast.LENGTH_SHORT).show();
        }

        //Toast.makeText(getActivity(),"done done done",Toast.LENGTH_SHORT).show();
        return false;
    }

    @Override
    public boolean onQueryTextChange(String s) {
        return false;
    }
}
