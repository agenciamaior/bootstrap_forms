@php
    $formClass = (!empty($attributes['form_class'])) ? $attributes['form_class'] : '';
    $buttonClass = (!empty($attributes['button_class'])) ? $attributes['button_class'] : 'btn btn-danger';
    $buttonId = (!empty($attributes['button_id'])) ? $attributes['button_id'] : '';
@endphp

{{ Form::open(['url' => $route, 'method' => 'delete', 'class' => $formClass]) }}

<button type="submit" class="{{ $buttonClass }}" id="{{ $buttonId }}">
    @php
        $hasIcon = true;
        $icon = 'trash';

        if (isset($attributes['icon'])) {
            if ($attributes['icon'] == false) {
                $hasIcon = false;
            } else {
                $icon = $attributes['icon'];
            }
        }
    @endphp

    @if($hasIcon)
        <i class="fa fa-{{ $icon }}"></i> 
    @endif
    
    {!! $text !!}
</button>

{{ Form::close() }}