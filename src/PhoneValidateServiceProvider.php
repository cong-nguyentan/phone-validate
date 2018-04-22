<?php

namespace congnguyentan\PhoneValidate;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Validator;

class PhoneValidateServiceProvider extends ServiceProvider
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
        Validator::extend('phone', 'congnguyentan\\PhoneValidate\\PhoneValidate@validatePhone', trans("phone_validate::phone_validate.invalid"));
    }
}