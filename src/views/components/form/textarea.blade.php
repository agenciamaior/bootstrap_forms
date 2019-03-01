@php
    $class = (empty($attributes['class'])) ? 'form-control' : 'form-control ' . $attributes['class'];
    $default = (empty($attributes['default'])) ? null : $attributes['default'];
@endphp

<div class="form-group">
    @if (!empty($label))
        <label for="{{ $name }}">{!! $label !!}</label>
    @endif
    
    {{ Form::textarea($name, $default, array_merge($attributes, ['class' => $class])) }}
</div>
