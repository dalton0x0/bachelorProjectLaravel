@php

    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $placeholder ??= null;

@endphp

<div @class(["form-floating mb-3", $class])>

    @if($type == 'textarea')
        <textarea class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" style="height: 10rem" data-sb-validations="required">{{ old($name, $value) }}</textarea>
    @else
        <input class="form-control @error($name) is-invalid @enderror" data-sb-feedback="{{ $name . ":required"}}" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}">
    @endif

    <label for="{{ $name }}">{{ $label }}</label>

    @error($name)
    <div class="invalid-feedback" data-sb-feedback={{ $name . ":required"}}>
        {{ $message }}
    </div>
    @enderror

</div>
