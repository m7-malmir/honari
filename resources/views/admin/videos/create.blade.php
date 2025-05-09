@extends('layouts.admin')

@section('title', 'افزودن ویدیو جدید')

@section('content')
<h1>افزودن ویدیو جدید</h1>
<form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title_fa">عنوان فارسی</label>
        <input type="text" id="title_fa" name="title_fa" class="form-control">
    </div>
    <div class="form-group">
        <label for="title_en">عنوان انگلیسی</label>
        <input type="text" id="title_en" name="title_en" class="form-control">
    </div>
    <div class="form-group">
        <label for="video_url">لینک ویدیو</label>
        <input type="url" id="video_url" name="video_url" class="form-control">
    </div>
    <div class="form-group">
        <label for="description_fa">توضیحات فارسی</label>
        <textarea id="description_fa" name="description_fa" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="description_en">توضیحات انگلیسی</label>
        <textarea id="description_en" name="description_en" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="thumbnail">تصویر کاور</label>
        <input type="file" id="thumbnail" name="thumbnail" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">ذخیره</button>
</form>
@endsection