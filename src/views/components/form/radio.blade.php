<div class="form-group radio">ß
    <label for="{{ $name }}">
        {{ Form::radio($name, $value, null, array_merge(['id' => $name], $attributes)) }}

        {{ $label }}
    </label>
</div>
