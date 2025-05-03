@extends('layouts.app')

@section('title', app()->getLocale() == 'fa' ? 'ویدیوها' : 'Videos')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-10">
        {{ app()->getLocale() == 'fa' ? 'ویدیوهای من' : 'My Videos' }}
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($videos as $video)
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg flex flex-col">
                @if($video->thumbnail)
                    <img class="w-full h-52 object-cover" src="{{ asset('storage/' . $video->thumbnail) }}" alt="{{ $video->{'title_' . app()->getLocale()} }}">
                @else
                    <div class="w-full h-52 bg-gray-700 flex items-center justify-center text-3xl text-gray-300">NO IMAGE</div>
                @endif

                <div class="p-4 flex flex-col flex-grow">
                    <h2 class="text-xl font-bold text-white mt-2">
                        {{ $video->{'title_' . app()->getLocale()} }}
                    </h2>
                    <div class="text-gray-400 text-sm mt-1 mb-2 flex-1">
                        {{ $video->{'description_' . app()->getLocale()} }}
                    </div>
                    
                    @if ($video->video_url)
                        @if(str_contains($video->video_url, 'youtube.com') || str_contains($video->video_url, 'youtu.be'))
                            <!-- Embed YouTube -->
                            <div class="w-full aspect-video my-2">
                                <iframe
                                    class="w-full h-full"
                                    src="https://www.youtube.com/embed/{{ \Illuminate\Support\Str::afterLast($video->video_url, '/') }}"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>
                            </div>
                        @else
                            <!-- لینک ویدیو عادی (مثلاً آپارات یا فیزیکی) -->
                            <a href="{{ $video->video_url }}" class="text-blue-400 underline my-2 block" target="_blank">مشاهده ویدیو</a>
                        @endif
                    @endif

                    @if($video->category)
                        <span class="mt-2 text-xs text-indigo-300">
                            {{ $video->category->{'name_' . app()->getLocale()} }}
                        </span>
                    @endif
                </div>
            </div>
        @empty
            <div class="col-span-12 text-center text-gray-500">
                {{ app()->getLocale() == 'fa' ? 'هیچ ویدیویی ثبت نشده است.' : 'No videos registered.' }}
            </div>
        @endforelse
    </div>
</div>
@endsection