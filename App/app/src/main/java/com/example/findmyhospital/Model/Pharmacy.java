package com.example.findmyhospital.Model;

public class Pharmacy {
    public String pharmacy_name;
    public String city;
    public String state;
    public String pincode;
    public String pharmacy_id;

    public Pharmacy(String pharmacy_name, String city, String state, String pincode, String pharmacy_id) {
        this.pharmacy_name = pharmacy_name;
        this.city = city;
        this.state = state;
        this.pincode = pincode;
        this.pharmacy_id = pharmacy_id;
    }

    public Pharmacy() {
    }

    public String getPharmacy_name() {
        return pharmacy_name;
    }

    public void setPharmacy_name(String pharmacy_name) {
        this.pharmacy_name = pharmacy_name;
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

    public String getPharmacy_id() {
        return pharmacy_id;
    }

    public void setPharmacy_id(String pharmacy_id) {
        this.pharmacy_id = pharmacy_id;
    }
}
