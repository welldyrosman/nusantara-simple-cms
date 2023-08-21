<div class="form-group">
    <label>{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>

    <select readonly name="{{ $attribute }}" class="form-control">
        @if (isset($null) && $null === true)
            <option value="{{ null }}">{{ __('admin.none') }}</option>
        @endif
        @foreach ($options as $key => $value)
            <option {{ $key === (${$resource}->$attribute ?? old($attribute)) ? 'selected' : '' }}
                value="{{ isset($valueOnly) ? $value : $key }}">{{ $value }}</option>
        @endforeach
    </select>

</div>
