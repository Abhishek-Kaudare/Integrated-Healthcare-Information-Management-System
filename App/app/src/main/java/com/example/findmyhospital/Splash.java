package com.example.findmyhospital;

import android.content.Intent;
import android.os.Bundle;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class Splash extends AppCompatActivity {

    private ImageView imageView;
    private TextView textView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);
        imageView= (ImageView) findViewById(R.id.image_splash);
        textView=(TextView) findViewById(R.id.text_splash);
        Animation anim = AnimationUtils.loadAnimation(this,R.anim.mytransition);
        imageView.startAnimation(anim);
        textView.startAnimation(anim);

        final Intent i = new Intent(this,MainActivity.class);
        Thread t = new Thread() {
            @Override
            public void run() {
                super.run();
                try{
                    sleep(1000);
                }
                catch (InterruptedException e){
                    e.printStackTrace();
                }
                finally {
                    startActivity(i);
                    finish();
                }
            }
        };

        t.start();

    }

}
