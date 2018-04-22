<?php

namespace congnguyentan\phone-validate;

use Illuminate\Support\ServiceProvider;

class phone-validateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/translates', 'phone_validate');
        $this->registerValidationRule();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function registerValidationRule(){
        Validator::extend('phone', 'congnguyentan\\phone-validate\\phone-validate@validatePhone', trans("phone_validate::phone_validate.invalid"));
    }
}