<?php

namespace App\Providers;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Validator::extend('cpf', '\App\Rules\Cpf@passes');
        Validator::extend('placa_veiculo', '\App\Rules\PlacaVeiculo@passes');

        $this->app->singleton(Generator::class, function() {
            return Factory::create('pt_BR');
        });
    }
}
