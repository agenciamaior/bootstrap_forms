<?php

namespace AgenciaMaior\BootstrapForms;

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

        Form::component('bsText', 'bootstrap_forms::components.form.text', ['name', 'label', 'attributes' => []]);
        Form::component('bsEmail', 'bootstrap_forms::components.form.email', ['name', 'label', 'attributes' => []]);
        Form::component('bsUrl', 'bootstrap_forms::components.form.url', ['name', 'label', 'attributes' => []]);
        Form::component('bsTextarea', 'bootstrap_forms::components.form.textarea', ['name', 'label', 'attributes' => []]);
        Form::component('bsFile', 'bootstrap_forms::components.form.file', ['name', 'label', 'attributes' => []]);
        Form::component('bsPassword', 'bootstrap_forms::components.form.password', ['name', 'label', 'attributes' => []]);
        Form::component('bsPasswordToggle', 'bootstrap_forms::components.form.password-toggle', ['name', 'label', 'attributes' => []]);
        Form::component('bsSelect', 'bootstrap_forms::components.form.select', ['name', 'label', 'values', 'attributes' => []]);
        Form::component('bsCheckbox', 'bootstrap_forms::components.form.checkbox', ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsSwitch', 'bootstrap_forms::components.form.switch', ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsRadio', 'bootstrap_forms::components.form.radio', ['name', 'label', 'value', 'attributes' => []]);

        Form::component('bsSubmit', 'bootstrap_forms::components.form.submit', ['text', 'attributes' => []]);

        Html::component('deleteLink', 'bootstrap_forms::components.html.delete-link', ['text', 'route', 'attributes' => []]);

        // $this->publishes([
        //     __DIR__ . '/assets/js/bootstrap_forms.js' => resource_path('js/bootstrap_forms.js'),
        // ], 'bootstrap_forms_js');
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
