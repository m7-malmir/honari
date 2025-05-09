@extends('layouts.app')

@section('title', 'تماس با ما')

@section('content')
    <h1>اطلاعات تماس</h1>

    <form action="{{ route('contact-info.store') }}" method="POST">
        @csrf

        <div>
            <label>آدرس (فارسی):</label>
            <input type="text" name="address_fa" value="{{ $contactInfo?->address_fa }}">
        </div>

        <div>
            <label>آدرس (انگلیسی):</label>
            <input type="text" name="address_en" value="{{ $contactInfo?->address_en }}">
        </div>

        <!-- بقیه فیلدها... -->
        
        <button type="submit">ذخیره</button>
    </form>
@endsection
