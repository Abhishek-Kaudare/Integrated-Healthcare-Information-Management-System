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

public class ListOfBloodBanks extends AppCompatActivity {

    int[]BBImages ={R.drawable.bloodbank,R.drawable.bloodbank_1, R.drawable.bloodbank_2};
    String[] BBNames = {"Shrusti Blood Bank", "Alankita Blood Bank", "Disha Blood Bank"};
    String[] BBDescriptions = {"Certified", "Certified", "Certified"};
    String[] BBAddress = {"Mumbai, Colaba-East..", "Dadar-Badia Hospital.." , "Bandra, A-201 45 Marg"};
    String[] BBDistnces = {"3.1KM","2.2KM" ,"1.2KM"};



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list_of_blood_banks);

        final ListView listView = (ListView)findViewById(R.id.listViewOfBloodBanks);


        BBCustomAdapter bbCustomAdapter = new BBCustomAdapter();
        listView.setAdapter(bbCustomAdapter);



//        listView.setOnItemClickListener(new AdapterView.OnItemClickListener(){
//
//            @Override
//            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
//
//                Intent intent = new Intent(ListOfBloodBanks.this,Personal_Info_Doctors.class);
//                intent.putExtra("image", BBImages[i]);
//                intent.putExtra("doctor_name",BBNames[i]);
//                intent.putExtra("doctor_description",BBDescriptions[i].toString());
//                intent.putExtra("doctor_address", BBAddress[i]);
//
//
//                startActivity(intent);
//            }
//        });
//


    }

    class  BBCustomAdapter extends BaseAdapter {

        @Override
        public int getCount() {
            return BBImages.length;
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
            view = getLayoutInflater().inflate(R.layout.custom_list_of_blood_banks,null);

            ImageView imagebbView = (ImageView)view.findViewById(R.id.imageBloodBankView);
            TextView bb_name = (TextView)view.findViewById(R.id.bloodbank_name);
            TextView bb_description = (TextView)view.findViewById(R.id.bloodbank_description);
            TextView bb_address = (TextView)view.findViewById(R.id.bloodbank_address);
            TextView bb_distances = (TextView)view.findViewById(R.id.distance_of_bloodbank);


            imagebbView.setImageResource(BBImages[i]);
            bb_name.setText(BBNames[i]);
            bb_description.setText(BBDescriptions[i]);
            bb_address.setText(BBAddress[i]);
            bb_distances.setText(BBDistnces[i]);

            return view;
        }




    }
}
