package com.rajendra.onlinedailygroceries;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.graphics.drawable.Drawable;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

import com.rajendra.onlinedailygroceries.adapter.CategoryAdapter;
import com.rajendra.onlinedailygroceries.adapter.DiscountedProductAdapter;
import com.rajendra.onlinedailygroceries.adapter.RecentlyViewedAdapter;
import com.rajendra.onlinedailygroceries.model.Category;
import com.rajendra.onlinedailygroceries.model.DiscountedProducts;
import com.rajendra.onlinedailygroceries.model.RecentlyViewed;

import java.util.ArrayList;
import java.util.List;
import java.util.ListIterator;

import static com.rajendra.onlinedailygroceries.R.drawable.*;

public class MainActivity extends AppCompatActivity {

    RecyclerView discountRecyclerView, categoryRecyclerView, recentlyViewedRecycler;
    DiscountedProductAdapter discountedProductAdapter;
    List<DiscountedProducts> discountedProductsList;

    CategoryAdapter categoryAdapter;
    List<Category> categoryList;

    RecentlyViewedAdapter recentlyViewedAdapter;
    List<RecentlyViewed> recentlyViewedList;

    TextView allCategory;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        discountRecyclerView = findViewById(R.id.discountedRecycler);
        categoryRecyclerView = findViewById(R.id.categoryRecycler);
        allCategory = findViewById(R.id.allCategoryImage);
        recentlyViewedRecycler = findViewById(R.id.recently_item);


        allCategory.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(MainActivity.this, AllCategory.class);
                startActivity(i);
            }
        });









        // adding data to model
        discountedProductsList = new ArrayList<>();
        discountedProductsList.add(new DiscountedProducts(1, itachi));
        discountedProductsList.add(new DiscountedProducts(2, violet));
        discountedProductsList.add(new DiscountedProducts(3, kyoukai));
        discountedProductsList.add(new DiscountedProducts(4, rezero));
        discountedProductsList.add(new DiscountedProducts(5, kimetsu));
        discountedProductsList.add(new DiscountedProducts(6, boku));

        // adding data to model
        categoryList = new ArrayList<>();
        categoryList.add(new Category(1, ic_home_fruits));
        categoryList.add(new Category(2, ic_home_fish));
        categoryList.add(new Category(3, ic_home_meats));
        categoryList.add(new Category(4, ic_home_veggies));
        categoryList.add(new Category(5, ic_home_fruits));
        categoryList.add(new Category(6, ic_home_fish));
        categoryList.add(new Category(7, ic_home_meats));
        categoryList.add(new Category(8, ic_home_veggies));

        // adding data to model
       recentlyViewedList = new ArrayList<>();
       recentlyViewedList.add(new RecentlyViewed("Itachi Shinden", "Bagian dimana Itachi harus membantai seluruh anggota Klannya, Uchiha. Dan Itachi lebih melulai dari Uchiha Izumi. Gadis yang mencintainya", "Genre", "Drama", "Romance", itachi, itachi));
       recentlyViewedList.add(new RecentlyViewed("Violet Evergarden", "Dikisahkan Violet Evergarden adalah seorang perempuan yang pernah bergabung dengan militer. Pada masa perang, ia dikenal sebagai prajurit berdarah dingin.", "Genre", "Romance", "Slice Of Lofe", violet, violet));
       recentlyViewedList.add(new RecentlyViewed("Kyoukai No Kanata", "Dikisahkan Violet Evergarden adalah seorang perempuan yang pernah bergabung dengan militer. Pada masa perang, ia dikenal sebagai prajurit berdarah dingin.", "Genre", "Romance", "Action", kyoukai, kyoukai));
       recentlyViewedList.add(new RecentlyViewed("Re-Zero", "Full of nutrients like vitamin C, vitamin K, vitamin E, folate, and potassium.", "Genre", "Romance", "Isekai", rezero, rezero));

        setDiscountedRecycler(discountedProductsList);
        setCategoryRecycler(categoryList);
       setRecentlyViewedRecycler(recentlyViewedList);

    }

    private void setDiscountedRecycler(List<DiscountedProducts> dataList) {
        RecyclerView.LayoutManager layoutManager = new LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false);
        discountRecyclerView.setLayoutManager(layoutManager);
        discountedProductAdapter = new DiscountedProductAdapter(this,dataList);
        discountRecyclerView.setAdapter(discountedProductAdapter);
    }


    private void setCategoryRecycler(List<Category> categoryDataList) {
        RecyclerView.LayoutManager layoutManager = new LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false);
        categoryRecyclerView.setLayoutManager(layoutManager);
        categoryAdapter = new CategoryAdapter(this,categoryDataList);
        categoryRecyclerView.setAdapter(categoryAdapter);
    }

    private void setRecentlyViewedRecycler(List<RecentlyViewed> recentlyViewedDataList) {
        RecyclerView.LayoutManager layoutManager = new LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false);
        recentlyViewedRecycler.setLayoutManager(layoutManager);
        recentlyViewedAdapter = new RecentlyViewedAdapter(this,recentlyViewedDataList);
        recentlyViewedRecycler.setAdapter(recentlyViewedAdapter);
    }
    //Now again we need to create a adapter and model class for recently viewed items.
    // lets do it fast.
}
