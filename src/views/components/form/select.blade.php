@php
    $class = (empty($attributes['class'])) ? 'form-control' : 'form-control ' . $attributes['class'];
    $default = (empty($attributes['default'])) ? null : $attributes['default'];
    
    $attributes['id'] = (!empty($attributes['id'])) ? $attributes['id'] : $name;

    if (!array_key_exists('placeholder', $attributes)) {
        $attributes['placeholder'] = '';
    }
@endphp

<div class="form-group">
    @if (!empty($label))
        <label for="{{ $name }}">{!! $label !!}</label>
    @endif
    
    {{ Form::select($name, $values, $default, array_merge($attributes, ['class' => $class])) }}
</div>