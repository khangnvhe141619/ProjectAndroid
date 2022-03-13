package com.example.mp3app.Service;

import com.example.mp3app.Model.Album;
import com.example.mp3app.Model.Playlist;
import com.example.mp3app.Model.Quangcao;
import com.example.mp3app.Model.Theloaitrongngay;

import java.util.List;

import retrofit2.Call;
import retrofit2.http.GET;

public interface Dataservice {

    @GET("songbanner.php")
    Call<List<Quangcao>> GetDataBanner();

    @GET("playlistforcurentday.php")
    Call<List<Playlist>> GetPlaylistCurrentDay();

    @GET("chudevatheloaitrongngay.php")
    Call<Theloaitrongngay> GetCategoryMusic();

    @GET("albumhot.php")
    Call<List<Album>> GetAlbumHot();
}
