<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Unsplash\HttpClient;
use Unsplash\Photo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        HttpClient::init([
            'applicationId' => config('services.unsplash.access_key'),
            'utmSource'     => 'Laravel8'
        ]);

        View::composer(['posts', 'post', 'home', 'category', 'categories'], function($view)  {
            $keyword = Cache::remember('random_db_keyword', 60, function() {
                    return Category::inRandomOrder()->first()->name ?? 'technology';
                }); 

            $unsplashPhoto = Cache::remember('bg_' . Str::slug($keyword), 3600, function() use ($keyword) {
                return Photo::random(['query' => $keyword]);
            });

            $view->with('unsplashPhoto', $unsplashPhoto);
        });
    }
}
