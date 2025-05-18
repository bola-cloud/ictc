<div class="mb-3">
    <label class="form-label">{{ __('lang.en_name') }}</label>
    <input type="text" name="en_name" class="form-control" value="{{ old('en_name', $member->en_name ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('lang.ar_name') }}</label>
    <input type="text" name="ar_name" class="form-control" value="{{ old('ar_name', $member->ar_name ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('lang.en_position') }}</label>
    <input type="text" name="en_position" class="form-control" value="{{ old('en_position', $member->en_position ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('lang.ar_position') }}</label>
    <input type="text" name="ar_position" class="form-control" value="{{ old('ar_position', $member->ar_position ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('lang.section') }}</label>
    <select name="team_section_id" class="form-select" required>
        @foreach ($sections as $section)
            <option value="{{ $section->id }}" {{ old('team_section_id', $member->team_section_id ?? '') == $section->id ? 'selected' : '' }}>
                {{ app()->getLocale() === 'ar' ? $section->ar_title : $section->en_title }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('lang.order') }}</label>
    <input type="number" name="order" class="form-control" value="{{ old('order', $member->order ?? 0) }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('lang.image') }}</label>
    <input type="file" name="image" class="form-control">
</div>
