<div class="form-group">
    
    <label class="file-label">
        <input readonly class="file-input" type="file" name="{{ $attribute }}">
        <div class="file-cta">
            <div class="file-icon">{!! icon('upload-cloud') !!}</div>
            <div class="file-label">{{ __('admin.fields.' . $attribute) }}</div>
        </div>
        @if (isset(${$resource}->$attribute))
            <div class="file-name">
                <a target="_blank" rel="noopener" href="{{ asset(${$resource}->$attribute) }}">{{ ${$resource}->$attribute }}</a>
            </div>
        @else
            <div class="file-name is-hidden"></div>
        @endif
    </label>

</div>

