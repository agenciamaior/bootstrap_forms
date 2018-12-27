<?php

namespace KdymSolucoes\BootstrapForms;

use Illuminate\Support\ServiceProvider;
use Form;
use Html;

class BootstrapFormsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'bootstrap_forms');

        Form::component('restForm', 'bootstrap_forms::components.form.form', ['model', 'attributes' => []]);

        Form::component('bsText', 'bootstrap_forms::components.form.text', ['name', 'label', 'attributes' => [], 'default' => null]);
        Form::component('bsEmail', 'bootstrap_forms::components.form.email', ['name', 'label', 'attributes' => [], 'default' => null]);
        Form::component('bsPassword', 'bootstrap_forms::components.form.password', ['name', 'label', 'attributes' => []]);
        Form::component('bsSelect', 'bootstrap_forms::components.form.select', ['name', 'label', 'values', 'default' => null, 'placeholder' => '', 'attributes' => []]);
        Form::component('bsCheckbox', 'bootstrap_forms::components.form.checkbox', ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsRadio', 'bootstrap_forms::components.form.radio', ['name', 'label', 'value', 'attributes' => []]);

        Form::component('bsSubmit', 'bootstrap_forms::components.form.submit', ['text', 'attributes' => []]);

        Html::component('bsDelete', 'bootstrap_forms::components.html.delete-link', ['text', 'route', 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
