@php
    $class = (empty($attributes['class'])) ? 'form-control' : 'form-control ' . $attributes['class'];
@endphp

<div class="form-group">
    @if (!empty($label))
        <label for="{{ $name }}">{!! $label !!}</label>
    @endif

    <div class="input-group">
        {{ Form::password($name, array_merge($attributes, ['class' => $class])) }}
    
        <div class="input-group-append">
            <button class="btn btn-default password-toggle-button" type="button"><i class="fa fa-eye"></i></button>
        </div>
    </div>
</div>