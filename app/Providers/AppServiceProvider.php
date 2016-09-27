<?php

namespace App\Providers;

use App\Contracts\PostFilterImpl;
use App\Contracts\Statistics;
use App\Contracts\TaggerImpl;
use App\Models\Note;
use App\Repositories\CourseRepository;
use App\Repositories\EventRepository;
use App\Repositories\NewsRepository;
use App\Repositories\NoteRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerTagger();  
        $this->registerPostFilter();
        $this->registerStats();
    }

    /**
     * Register the Post Taggging Module
     */
    private function registerTagger()
    {
        $this->app->bind('tagger', function () {
            return new TaggerImpl();
        });
    }


    private function registerStats()
    {
        $this->app->bind('stat', function ($app) {
            return new Statistics($app);
        });
    }

    /**
     * Register PostFilter Implementation
     */
    private function registerPostFilter()
    {
        $this->app->bind('postFilter', function () {
            return new PostFilterImpl();
        });
    }
}
