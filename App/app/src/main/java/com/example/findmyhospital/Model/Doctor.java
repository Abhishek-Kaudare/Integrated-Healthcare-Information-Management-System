package com.example.findmyhospital.Model;

public class Doctor {
    public String name;
    public String city;
    public String state;
    public String pincode;
    public String doctor_id;

    public Doctor(String name, String city, String state, String pincode, String doctor_id) {
        this.name = name;
        this.city = city;
        this.state = state;
        this.pincode = pincode;
        this.doctor_id = doctor_id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
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

    public String getDoctor_id() {
        return doctor_id;
    }

    public void setDoctor_id(String doctor_id) {
        this.doctor_id = doctor_id;
    }
}
