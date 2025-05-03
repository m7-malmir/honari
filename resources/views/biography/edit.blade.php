<form method="POST" action="{{ route('biography.update', $bio->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input name="full_name_fa" value="{{ $bio->full_name_fa }}" />
    <input name="full_name_en" value="{{ $bio->full_name_en }}" />
    <input name="slug_fa" value="{{ $bio->slug_fa }}" />
    <input name="slug_en" value="{{ $bio->slug_en }}" />
    <input type="date" name="birth_date" value="{{ $bio->birth_date }}" />
    <textarea name="bio_fa">{{ $bio->bio_fa }}</textarea>
    <textarea name="bio_en">{{ $bio->bio_en }}</textarea>
    <input name="website" value="{{ $bio->website }}" />
    <input name="instagram" value="{{ $bio->instagram }}" />
    <input name="twitter" value="{{ $bio->twitter }}" />
    <input name="telegram" value="{{ $bio->telegram }}" />
    <input type="file" name="profile_image" />
    <button type="submit">ثبت تغییرات</button>
</form>