package com.example.findmyhospital;

import androidx.annotation.NonNull;
import androidx.appcompat.app.ActionBarDrawerToggle;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.Gravity;
import android.view.MenuItem;
import android.widget.ImageView;
import androidx.appcompat.widget.Toolbar;
import androidx.core.view.GravityCompat;
import androidx.drawerlayout.widget.DrawerLayout;

import com.google.android.material.navigation.NavigationView;


public class Homepage extends AppCompatActivity implements NavigationView.OnNavigationItemSelectedListener {
    private DrawerLayout drawer;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_homepage);
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        drawer = findViewById(R.id.drawer);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(this,drawer,toolbar,R.string.app_name,R.string.app_name);
        drawer.addDrawerListener(toggle);
        toggle.syncState();
        //slider

        drawer = findViewById(R.id.drawer);
        NavigationView navigationView = findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);
        if (savedInstanceState == null) {
            getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                    new Fragment_Home()).commit();
            navigationView.setCheckedItem(R.id.home);
        }
    }


    @Override
    public void onBackPressed() {

        if(drawer.isDrawerOpen(GravityCompat.START)){
            drawer.closeDrawer(GravityCompat.START);
        }
        else {
            super.onBackPressed();
        }
    }
    @Override
    public boolean onNavigationItemSelected(@NonNull MenuItem menuItem) {
        switch (menuItem.getItemId()) {
            case R.id.home:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                        new Fragment_Home()).commit();
                break;
            case R.id.hospital:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                        new Fragment_Hospital()).commit();
                break;
            case R.id.hospital_filter:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                        new Fragment_Filter()).commit();
                break;
            case R.id.bloodbank:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                        new Fragment_Blood()).commit();
                break;
            case R.id.doctor:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                        new Fragment_Doctor()).commit();
                break;
            case R.id.doctor_filter:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                        new Fragment_Doctor_Filter()).commit();
                break;
            case R.id.pharmacy:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                        new Fragment_Pharmacy()).commit();
                break;
            case R.id.government:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                        new Fragment_Gov_Filter()).commit();
                break;
            case R.id.profile:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment,
                        new CompleteProfile()).commit();
                break;
            case R.id.logout:
                Logout();
                break;
        }
            drawer.closeDrawer(GravityCompat.START);
            return true;
        }

    private void Logout() {
        SharedPreferences preferences =getSharedPreferences("user_details", Context.MODE_PRIVATE);
        SharedPreferences.Editor editor = preferences.edit();
        editor.clear();
        editor.commit();
        startActivity(new Intent(Homepage.this,MainActivity.class));
    }


}
