@php
    $baseClass = class_basename($model);

    $routeName = str_plural(strtolower($baseClass));
    $modelName = strtolower($baseClass);

    $url = ($model->id) ? route($routeName . '.update', [$modelName => $model]) : route($routeName . '.store');

    $method = ($model->id) ? 'put' : 'post';
@endphp

{{ Form::model($model, array_merge(['url' => $url, 'method' => $method], $attributes)) }}

{{ Form::hidden('id', $model->id, ['id' => 'id']) }}
