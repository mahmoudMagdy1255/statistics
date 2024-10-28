<?php

namespace Statistics;
use Illuminate\Support\ServiceProvider;

class StatisticsServiceProvider extends ServiceProvider
{
    public function register(){}

    public function boot(){
        $this->publishes([
            __DIR__.'/../config/statistics.php' => config_path('statistics.php'),
        ], 'config');
    }
}
