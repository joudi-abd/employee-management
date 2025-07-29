<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend(
            'filter',
            function($attribute, $value)
            {
                $words=['تافه','غبي','سخيف','غزة','فاشل','يموت','موت','يقتل','سكين','رصاص','حرب','قتال','دماء'];
                foreach($words as $word)
                {
                    if($value === $word || str_contains($value, $word))
                    {
                        return false;
                    }
                }
                return true;
            }, "Your input contains inappropriate words."
        );
    }
}
