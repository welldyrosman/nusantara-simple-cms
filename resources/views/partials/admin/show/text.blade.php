
<div class="form-group">
    <label>{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
    @php $value = (${$resource}->$attribute ?? old($attribute)) @endphp
    <input readonly class="form-control {{ $class ?? '' }}" value="{{ empty($value) ? $default ?? '' : $value }}"
        type="{{ $type ?? 'text' }}" name="{{ $attribute }}" />

</div>

