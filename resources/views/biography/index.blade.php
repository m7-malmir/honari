<h2>{{ $bio->full_name_fa }} ({{ $bio->full_name_en }})</h2>
<p>{{ $bio->bio_fa }}</p>
<p>{{ $bio->bio_en }}</p>
<img src="{{ asset('storage/' . $bio->profile_image) }}" alt="" width="128" />
<a href="{{ route('biography.edit', $bio->id) }}">ویرایش بیوگرافی</a>