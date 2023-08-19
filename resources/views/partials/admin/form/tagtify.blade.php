<div class="field">
    <label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
    <div class="control">
        @php 
            $value = $article->tags ? $article->tags->pluck('tag')->implode(',') : '';
        @endphp
        <input name="{{ $attribute }}" value="{{ empty($value) ? ($default ?? '') : $value }}" data-role="tagsinput" class=" form-control input is-large {{ $class ?? '' }}" autofocus>
    </div>
</div>
