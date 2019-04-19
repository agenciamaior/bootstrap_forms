@php
    $attributes['class'] = (!empty($attributes['class'])) ? $attributes['class'] : 'btn btn-success btn-lg';
    $attributes['id'] = !empty($attributes['id']) ? $attributes['id'] : '';
    $attributes['type'] = !empty($attributes['type']) ? $attributes['type'] : 'submit';

    $hasIcon = true;
    $icon = 'check';

    if (array_key_exists('icon', $attributes)) {
        if ($attributes['icon'] == null) {
            $hasIcon = false;
        } else {
            $icon = $attributes['icon'];
        }
    }

    unset($attributes['icon']);

    $buffer = [];
    foreach ($attributes as $key => $a) {
        $buffer[] = $key . '="' . $a . '"';
    }
@endphp

<button {!! implode(' ', $buffer) !!}>
    @if($hasIcon)
        <i class="fa fa-{{ $icon }}"></i> 
    @endif
    
    {!! $text !!}
</button>