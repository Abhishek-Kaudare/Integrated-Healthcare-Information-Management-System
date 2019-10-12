package com.example.findmyhospital;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;

public class ListOfPharmacy extends AppCompatActivity {



    int[]PImages ={R.drawable.medicine,R.drawable.medicine_1, R.drawable.medicine_2};
    String[] PNames = {"Arihant Medicals", "Wellness Forever", "Apollo Pharamacy"};
    String[] PDescriptions = {"Allopathetic", "Ayurvedic", "Allopathic"};
    String[] PAddress = {"Mumbai, Colaba-East..", "Dadar-Badia Hospital.." , "Bandra, A-201 45 Marg"};
    String[] PDistnces = {"7.1KM","5.2KM" ,"3.2KM"};


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list_of_pharmacy);


        final ListView listView = (ListView)findViewById(R.id.listViewOfPharmacy);

        PharmacyCustomAdapter  pharmacyCustomAdapter = new PharmacyCustomAdapter();
        listView.setAdapter(pharmacyCustomAdapter);

    }



    class  PharmacyCustomAdapter extends BaseAdapter {

        @Override
        public int getCount() {
            return PImages.length;
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
            view = getLayoutInflater().inflate(R.layout.custom_list_of_pharmacy,null);

            ImageView imagePharmacyView = (ImageView)view.findViewById(R.id.imagePharmacyView);
            TextView pharmacy_name = (TextView)view.findViewById(R.id.pharmacy_name);
            TextView pharmacy_description = (TextView)view.findViewById(R.id.pharmacy_description);
            TextView pharmacy_address = (TextView)view.findViewById(R.id.pharmacy_address);
            TextView pharmacy_distances = (TextView)view.findViewById(R.id.distance_of_pharmacy);


            imagePharmacyView.setImageResource(PImages[i]);
            pharmacy_name.setText(PNames[i]);
            pharmacy_description.setText(PDescriptions[i]);
            pharmacy_address.setText(PAddress[i]);
            pharmacy_distances.setText(PDistnces[i]);

            return view;
        }
    }




}
