@php
    $class = (!empty($attributes['class'])) ? $attributes['class'] : 'btn btn-success btn-lg';
    $id = !empty($attributes['id']) ? $attributes['id'] : '';
@endphp

<button type="submit" class="{{ $class }}" id="{{ $id }}">
    @php
        $hasIcon = true;
        $icon = 'check';

        if (array_key_exists('icon', $attributes)) {
            if ($attributes['icon'] == null) {
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