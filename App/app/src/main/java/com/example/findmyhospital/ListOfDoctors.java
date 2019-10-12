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

public class ListOfDoctors extends AppCompatActivity {


    int[]Images ={R.drawable.doctor,R.drawable.doctor_1, R.drawable.doctor_2};
    String[] Names = {"Dr.Sanjib Gupta", "Dr.Mahadev Trimurthy", "Dr.Athul Balakrishnan"};
    String[] Descriptions = {"Cadiologist", "Dermatologist", "Dentist"};
    String[] Address = {"Mumbai, Colaba-East..", "Dadar-Badia Hospital.." , "Bandra, A-201 45 Marg"};
    String[] Distnces = {"7.1KM","5.2KM" ,"3.2KM"};






    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list_of_doctors);

        final ListView listView = (ListView)findViewById(R.id.listView);

        CustomAdapter customAdapter = new CustomAdapter();
        listView.setAdapter(customAdapter);



        listView.setOnItemClickListener(new AdapterView.OnItemClickListener(){

            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {

                Intent intent = new Intent(ListOfDoctors.this,Personal_Info_Doctors.class);
                intent.putExtra("image", Images[i]);
                intent.putExtra("doctor_name",Names[i]);
                intent.putExtra("doctor_description",Descriptions[i].toString());
                intent.putExtra("doctor_address", Address[i]);


                startActivity(intent);
            }
        });



    }

    class  CustomAdapter extends BaseAdapter{

        @Override
        public int getCount() {
            return Images.length;
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
            view = getLayoutInflater().inflate(R.layout.customlistofoperators,null);

            ImageView imageView = (ImageView)view.findViewById(R.id.imageView);
            TextView doctor_name = (TextView)view.findViewById(R.id.doctor_name);
            TextView doctor_description = (TextView)view.findViewById(R.id.doctor_description);
            TextView doctor_address = (TextView)view.findViewById(R.id.doctor_address);
            TextView doctor_distances = (TextView)view.findViewById(R.id.distance_of_doctors);


            imageView.setImageResource(Images[i]);
            doctor_name.setText(Names[i]);
            doctor_description.setText(Descriptions[i]);
            doctor_address.setText(Address[i]);
            doctor_distances.setText(Distnces[i]);

            return view;
        }
    }
}
