@extends('layouts.app')

@section('title', 'স্বাস্থ্য ব্লগ ও নিবন্ধসমূহ - হোমিওলি')

@section('content')
<!-- Header -->
<div class="bg-primary-subtle py-14 border-b border-green-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-primary font-bold text-xs uppercase tracking-wider">রিসার্চ ও হেলথ টিপস</span>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-text-dark mt-2 mb-3">হোমিওপ্যাথি স্বাস্থ্য ব্লগ</h1>
        <p class="text-text-muted text-base max-w-xl mx-auto">
            সুস্থ ও সক্রিয় জীবনযাপনে বিশেষজ্ঞ চিকিৎসকদের বৈজ্ঞানিক পরামর্শ এবং রোগ প্রতিরোধমূলক সচেতনতা।
        </p>
    </div>
</div>

<!-- Blog Grid (576px-Blog.svg / 1200px -See more.svg) -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col group">
                <div class="relative h-52 overflow-hidden bg-gray-100">
                    <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=800&auto=format&fit=crop&q=80'">
                    <span class="absolute top-4 left-4 bg-primary text-white text-[11px] font-semibold px-3 py-1 rounded-full shadow-sm">
                        {{ $post['category'] }}
                    </span>
                </div>

                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-xs text-text-muted mb-3">
                        <span><i class="fa-regular fa-calendar text-primary mr-1"></i> {{ $post['date'] }}</span>
                        <span>•</span>
                        <span><i class="fa-regular fa-clock text-primary mr-1"></i> {{ $post['read_time'] }}</span>
                    </div>

                    <h3 class="text-lg font-bold text-text-dark mb-3 group-hover:text-primary transition leading-snug">
                        <a href="{{ route('blog.show', $post['slug']) }}">{{ $post['title'] }}</a>
                    </h3>

                    <p class="text-sm text-text-muted leading-relaxed line-clamp-3 mb-4 flex-grow">
                        {{ $post['summary'] }}
                    </p>

                    <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-xs font-medium text-text-dark">{{ $post['author'] }}</span>
                        <a href="{{ route('blog.show', $post['slug']) }}" class="text-primary font-bold text-xs inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                            সম্পূর্ণ পড়ুন <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
