package com.example.mp3app.Model;


import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class TheLoai {

    @SerializedName("IdTheLoai")
    @Expose
    private String idTheLoai;
    @SerializedName("IdKeychuDe")
    @Expose
    private String idKeychuDe;
    @SerializedName("tenTheLoai")
    @Expose
    private String tenTheLoai;
    @SerializedName("HinhTheLoai")
    @Expose
    private String hinhTheLoai;

    public String getIdTheLoai() {
        return idTheLoai;
    }

    public void setIdTheLoai(String idTheLoai) {
        this.idTheLoai = idTheLoai;
    }

    public String getIdKeychuDe() {
        return idKeychuDe;
    }

    public void setIdKeychuDe(String idKeychuDe) {
        this.idKeychuDe = idKeychuDe;
    }

    public String getTenTheLoai() {
        return tenTheLoai;
    }

    public void setTenTheLoai(String tenTheLoai) {
        this.tenTheLoai = tenTheLoai;
    }

    public String getHinhTheLoai() {
        return hinhTheLoai;
    }

    public void setHinhTheLoai(String hinhTheLoai) {
        this.hinhTheLoai = hinhTheLoai;
    }

}