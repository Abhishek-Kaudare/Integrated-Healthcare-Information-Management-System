package com.example.findmyhospital.Model;

public class Hospital {
    public String hospital_name;
    public String city;
    public String state;
    public String pincode;
    public String hospital_id;

    public Hospital(String hospital_name, String city, String state, String pincode, String hospital_id) {
        this.hospital_name = hospital_name;
        this.city = city;
        this.state = state;
        this.pincode = pincode;
        this.hospital_id = hospital_id;
    }

    public Hospital() {
    }

    public String getHospital_name() {
        return hospital_name;
    }

    public void setHospital_name(String hospital_name) {
        this.hospital_name = hospital_name;
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

    public String getHospital_id() {
        return hospital_id;
    }

    public void setHospital_id(String hospital_id) {
        this.hospital_id = hospital_id;
    }
}
