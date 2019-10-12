package com.example.findmyhospital;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;

import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;

public class ListOfBeds extends AppCompatActivity {



    String[] Speciality = {"Nursery", "Labour & Delievery Suits", "Isolation Room"};
    String[] Total_Beds = {"40", "45", "46"};
    String[] Engaged_Beds = {"35","36","37"};
//    String[] Distnces = {"7.1KM","5.2KM" ,"3.2KM"};






    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list_of_beds);

        final ListView listView = (ListView)findViewById(R.id.listViewOfBeds);

        BedCustomAdapter bedcustomAdapter = new BedCustomAdapter();
        listView.setAdapter(bedcustomAdapter);





    }

    class  BedCustomAdapter extends BaseAdapter{

        @Override
        public int getCount() {
            return Speciality.length;
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
            view = getLayoutInflater().inflate(R.layout.custom_list_of_beds,null);


            TextView speciality_name = (TextView)view.findViewById(R.id.speciality_name);
            TextView Total_beds  = (TextView)view.findViewById(R.id.total_beds);
            TextView Engaged_beds = (TextView)view.findViewById(R.id.engaged_beds);




            speciality_name.setText(Speciality[i]);
            Total_beds.setText(Total_Beds[i]);
            Engaged_beds.setText(Engaged_Beds[i]);
            return view;
        }
    }
}
