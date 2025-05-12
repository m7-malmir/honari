@extends('layouts.app')

@section('title', 'صفحه اصلی')

@section('body-class', 'bg-black overflow-hidden')

@section('canvas')
<!-- Canvas element for animation -->
<canvas id="bgCanvas"></canvas>
@endsection

@section('content')
<div class="relative w-screen h-screen flex items-center justify-center bg-black bg-opacity-60">
    <div class="bg-white bg-opacity-10 border border-white border-opacity-20 rounded-2xl p-10 max-w-4xl text-white flex gap-8 z-20 backdrop-filter backdrop-blur-lg">
        <img src="https://placekitten.com/300/300" alt="Artist Image" class="w-48 h-48 object-cover rounded-xl border-2 border-white border-opacity-30">
        <div class="flex flex-col justify-center">
            <h2 class="mt-0 mb-4 text-2xl font-bold">نام هنرمند</h2>
            <p class="text-lg leading-relaxed">
                این هنرمند در زمینه موسیقی الکترونیک فعالیت دارد و تاکنون چندین آلبوم منتشر کرده است. سبک کار او ترکیبی از کلاسیک و مدرن است.
            </p>
        </div>
    </div>
</div>
@endsection