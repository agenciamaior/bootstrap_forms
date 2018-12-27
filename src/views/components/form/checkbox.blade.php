<div class="form-group checkbox">
    <label for="{{ $name }}">
        {{ Form::checkbox($name, $value, null, array_merge(['id' => $name], $attributes)) }}

        {{ $label }}
    </label>
</div>