package com.example.mp3app.Fragment;

import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import com.example.mp3app.Activity.PlayNhacActivity;
import com.example.mp3app.Adapter.PlayNhacAdapter;
import com.example.mp3app.R;

public class Fragment_Play_Danh_Sach_Bai_Hat extends Fragment {

    View view;
    RecyclerView recyclerView;
    PlayNhacAdapter playNhacAdapter;
    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {
        view = inflater.inflate(R.layout.fragment_play_danh_sach_bai_hat, container, false);
        recyclerView = view.findViewById(R.id.recyclerViewPlayBaiHat);
        if(PlayNhacActivity.baihatArrayList.size() > 0){
            playNhacAdapter = new PlayNhacAdapter(getActivity(), PlayNhacActivity.baihatArrayList);
            recyclerView.setLayoutManager(new LinearLayoutManager(getActivity()));
            recyclerView.setAdapter(playNhacAdapter);
        }

        return view;
    }
}
