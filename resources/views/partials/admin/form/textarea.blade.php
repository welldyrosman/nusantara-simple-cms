<div class="form-group">
    <label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
        <textarea id="summernotenew" name="{{ $attribute }}" >{{ ${$resource}->$attribute ?? old($attribute) }}</textarea>
</div>
