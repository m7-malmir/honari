@extends('layouts.admin')

@section('title', 'ویرایش ویدیو')

@section('content')
<h1>ویرایش ویدیو</h1>
<form action="{{ route('admin.videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title_fa">عنوان فارسی</label>
        <input type="text" id="title_fa" name="title_fa" class="form-control" value="{{ $video->title_fa }}">
    </div>
    <div class="form-group">
        <label for="title_en">عنوان انگلیسی</label>
        <input type="text" id="title_en" name="title_en" class="form-control" value="{{ $video->title_en }}">
    </div>
    <div class="form-group">
        <label for="video_url">لینک ویدیو</label>
        <input type="url" id="video_url" name="video_url" class="form-control" value="{{ $video->video_url }}">
    </div>
    <div class="form-group">
        <label for="description_fa">توضیحات فارسی</label>
        <textarea id="description_fa" name="description_fa" class="form-control">{{ $video->description_fa }}</textarea>
    </div>
    <div class="form-group">
        <label for="description_en">توضیحات انگلیسی</label>
        <textarea id="description_en" name="description_en" class="form-control">{{ $video->description_en }}</textarea>
    </div>
    <div class="form-group">
        <label for="thumbnail">تصویر کاور</label>
        <input type="file" id="thumbnail" name="thumbnail" class="form-control">
        <p>تصویر فعلی: <img src="{{ asset('storage/'.$video->thumbnail) }}" width="100"></p>
    </div>
    <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
</form>
@endsection