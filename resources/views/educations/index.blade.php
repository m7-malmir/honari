@extends('layouts.app')
@section('title', __('آموزش‌ها'))

@section('content')
    <h1>{{ __('آموزش‌ها') }}</h1>
    <div class="row">
        @foreach($educations as $edu)
            <div class="col-md-4">
                <a href="{{ route('educations.show', app()->getLocale() == 'fa' ? $edu->slug_fa : $edu->slug_en) }}">
                    <img src="{{ asset('storage/'.$edu->cover) }}" alt="" class="img-fluid" />
                    <h3>{{ app()->getLocale() == 'fa' ? $edu->title_fa : $edu->title_en }}</h3>
                    <p>{{ Str::limit(app()->getLocale() == 'fa' ? $edu->description_fa : $edu->description_en, 100) }}</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection