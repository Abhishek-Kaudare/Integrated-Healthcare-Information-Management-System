package com.example.findmyhospital.Model;

public class BloodBank {
    public String bloodbank_name;
    public String city;
    public String state;
    public String pincode;
    public String bloodbank_id;


    public BloodBank(String bloodbank_name, String city, String state, String pincode, String bloodbank_id) {
        this.bloodbank_name = bloodbank_name;
        this.city = city;
        this.state = state;
        this.pincode = pincode;
        this.bloodbank_id = bloodbank_id;
    }

    public BloodBank() {
    }

    public String getBloodbank_name() {
        return bloodbank_name;
    }

    public void setBloodbank_name(String bloodbank_name) {
        this.bloodbank_name = bloodbank_name;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getState() {
        return state;
    }

    public void setState(String state) {
        this.state = state;
    }

    public String getPincode() {
        return pincode;
    }

    public void setPincode(String pincode) {
        this.pincode = pincode;
    }

    public String getBloodbank_id() {
        return bloodbank_id;
    }

    public void setBloodbank_id(String bloodbank_id) {
        this.bloodbank_id = bloodbank_id;
    }
}
