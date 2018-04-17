<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\DropdownList; //add the model name here

class DropdownListProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('months_array',DropdownList::all()); //array used to store all table data
        });
    }

   
}