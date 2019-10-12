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

public class ListOfInfra extends AppCompatActivity {

    int[]InImages ={R.drawable.bloodbank,R.drawable.bloodbank_1, R.drawable.bloodbank_2};
    String[] InNames = {"MRI Scan", "Eye Check up", "CT Scan"};
    String[] InDescriptions = {"Certified", "Certified", "Certified"};




    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list_of_infra);

        final ListView listView = (ListView)findViewById(R.id.listViewOfInfra);


        InfraCustomAdapter infraCustomAdapterCustomAdapter = new InfraCustomAdapter();
        listView.setAdapter(infraCustomAdapterCustomAdapter);



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

    class  InfraCustomAdapter extends BaseAdapter {

        @Override
        public int getCount() {
            return InImages.length;
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
            view = getLayoutInflater().inflate(R.layout.custom_list_of_infra,null);

            ImageView imagebbView = (ImageView)view.findViewById(R.id.imageViewInfra);
            TextView in_name = (TextView)view.findViewById(R.id.infra_name);
            TextView in_description = (TextView)view.findViewById(R.id.infra_description);



            imagebbView.setImageResource(InImages[i]);
            in_name.setText(InNames[i]);
            in_description.setText(InDescriptions[i]);

            return view;
        }

    }
}