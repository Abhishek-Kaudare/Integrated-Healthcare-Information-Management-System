package com.example.findmyhospital;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

public class ListOfSchemes extends AppCompatActivity {



    String[] state={"All State / UTs","Chhattisgarh","Tamil Nadu","All State"};
    String[] disability_type={"Hearing Impairment","Locomotor Disability","Muscular Dystrophy","Tamil Nadu"};
    String[] scheme_name={"Chochlear Implant Surgery under ADIP","Age Relaxation for Motorized Tricycle ADIP Scheme","DAY CARE CENTRE FOR MUSCULAR DYSTROPHY","Hearing Impairment","Early Intervention Centres for Hearing Impaired"};
    String[] benefits={"40% Disability","40% Disability","40% Disability","Special Benefit"};


    String[] state_phy={"All State / UTs","Chhattisgarh","Tamil Nadu","All State"};
    String[] disability_phy={"Hearing Impairment","Locomotor Disability","Muscular Dystrophy","Tamil Nadu"};
    String[] scheme_name_phy={"Chochlear Implant Surgery under ADIP","Age Relaxation for Motorized Tricycle ADIP Scheme","DAY CARE CENTRE FOR MUSCULAR DYSTROPHY","Hearing Impairment","Early Intervention Centres for Hearing Impaired"};
    String[] benefits_phy={"40% Disability","40% Disability","40% Disability","Special Benefit"};

    String[] state_women={"All State / UTs","All State","Punjab","All State"};
    String[] disability_women={"Maternity benefits programme, introduced in the year, 2010 and implemented by Ministry of Women and Child Development. It is a conditional transfer scheme for both pregnant and lactating women of 19 years of age and above for 1st live births. This scheme provides, conditions for safe delivery, Child care and good nutrition. Also, the scheme covers the wage loss suffered by these women during child birth" ,"This scheme aims to provide free antenatal services and required treatment to pregnant women in their pregnancy period of 3-6 months living in under-served, semi-urban, poor and rural areas.","Union Ministry of Youth Affairs and Sports had launched this scheme under its social development activity “ Swachhagraha” to promote women’s health and hygiene. This scheme aims to create awareness and provide logistics on sanitary napkins for women and girls, especially in rural and urban schools.","This is 100 % Government of India funded Programme, through National Health Mission. The main objective of this scheme is to motivate all BPL, SC and ST Pregnant Women to deliver in health Institutions, to reduce maternal and infant deaths. In this programme, pregnant women of BPL, SC & ST who deliver in health institutions in rural areas are provided Rs 700 cash incentives, in urban areas; Rs 600 and if they deliver through C-Section in private institutions are provided Rs 1500. If the said category Pregnant Women deliver at their homes, they are also provided Rs 500 cash incentives to meet their post-delivery wage loss."};
    String[] scheme_women={"Pradhan Mantri Matritva Vandana Yojan","Pradhan Mantri Surakshit Matritva Abhiyan","Sanitease","Janani Suraksha Yojana"};
    String[] benefits_women={"40% Disability","40% Disability","40% Disability","Special Benefit"};
    int var=1;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list_of_schemes);

        Intent intent = getIntent();
        String select = intent.getStringExtra("gov_filter");
        Log.i("schemes",select);

        if(select.equals("Kids")){

            var = 1;
            Toast.makeText(this,"Kids",Toast.LENGTH_SHORT).show();

        }
        else if(select.equals("Physically Challenged")){
            var=2;
            Toast.makeText(this,"Physically",Toast.LENGTH_SHORT).show();

        }
        else{
            var=3;
            Toast.makeText(this,"Women",Toast.LENGTH_SHORT).show();
        }

        final ListView listView = (ListView)findViewById(R.id.schemes_list);

        SchemesCustomAdapter CustomAdapter = new SchemesCustomAdapter();
        listView.setAdapter(CustomAdapter);

    }

    class  SchemesCustomAdapter extends BaseAdapter {

        @Override
        public int getCount() {
            return state.length;
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
            view = getLayoutInflater().inflate(R.layout.custom_gov_scheme,null);

            TextView pharmacy_name = (TextView)view.findViewById(R.id.state_name);
            TextView pharmacy_description = (TextView)view.findViewById(R.id.type);
            TextView pharmacy_address = (TextView)view.findViewById(R.id.scheme_name);
            TextView pharmacy_distances = (TextView)view.findViewById(R.id.disability_benefits);
            Log.i("sss","she");

            if(var==1){
                pharmacy_name.setText(state[i]);
                pharmacy_description.setText(disability_type[i]);
                pharmacy_address.setText(scheme_name[i]);
                pharmacy_distances.setText(benefits[i]);
                Log.i("she","she");
                //Toast.makeText(this,"hey",Toast.LENGTH_SHORT).show();
            }
            else if(var == 2){

                pharmacy_name.setText(state_phy[i]);
                pharmacy_description.setText(disability_phy[i]);
                pharmacy_address.setText(scheme_name_phy[i]);
                pharmacy_distances.setText(benefits_phy[i]);

            }
            else{
                TextView last =(TextView)view.findViewById(R.id.last);
                TextView last2 =(TextView)view.findViewById(R.id.type_head);
                last.setText("Benefits");
                last2.setText("Description");
                pharmacy_name.setText(state_women[i]);
                pharmacy_description.setText(disability_women[i]);
                pharmacy_address.setText(scheme_women[i]);
                pharmacy_distances.setText(benefits_women[i]);


            }


            return view;
        }
    }

}
