@php

    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);

@endphp

<div @class(["form-group mb-3", $class])>
    <label class="m-2" for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-select form-select-lg mb-3" aria-label="Large select example">
        <option value="">Choose classroom</option>
        @foreach($roles as $role)
            <option @selected(old('role_id', $user->role_id) == $role->id) value="{{ $role->id }}">{{ $role->label }}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
