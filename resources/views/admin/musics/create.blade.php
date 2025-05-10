@extends('layouts.admin')

@section('title', 'افزودن موزیک')

@section('content')
<form action="{{ route('musics.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title_fa">عنوان فارسی:</label>
        <input type="text" id="title_fa" name="title_fa" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="title_en">عنوان انگلیسی:</label>
        <input type="text" id="title_en" name="title_en" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description_fa">توضیح فارسی:</label>
        <textarea id="description_fa" name="description_fa" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="description_en">توضیح انگلیسی:</label>
        <textarea id="description_en" name="description_en" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="file">آپلود فایل:</label>
        <input type="file" id="file" name="file" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">ذخیره موزیک</button>
</form>
@endsection