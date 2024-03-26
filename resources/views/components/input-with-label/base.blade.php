<div class="form__input-wrapper">
    <label for="{{ $name }}" class="form__label">
        {{ $label }}
    </label>
    <input id="{{ $name }}" type="{{ $type }}" class="form__input @error($errorName) is-invalid @enderror"
        name="{{ $name }}" value="{{ $value }}" required autocomplete="email" autofocus>

    @error($errorName)
    <span class="form__error" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>