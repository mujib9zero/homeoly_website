@extends('layouts.app')

@section('title', $post['title'] . ' - হোমিওলি')

@section('content')
<!-- Blog Header -->
<div class="bg-primary-subtle py-12 border-b border-green-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block bg-primary text-white text-xs font-semibold px-3 py-1 rounded-full mb-3">
            {{ $post['category'] }}
        </span>
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-text-dark leading-tight mb-4">
            {{ $post['title'] }}
        </h1>
        <div class="flex items-center justify-center gap-4 text-xs sm:text-sm text-text-muted">
            <span><i class="fa-solid fa-user-doctor text-primary mr-1"></i> {{ $post['author'] }}</span>
            <span>•</span>
            <span><i class="fa-regular fa-calendar text-primary mr-1"></i> {{ $post['date'] }}</span>
            <span>•</span>
            <span><i class="fa-regular fa-clock text-primary mr-1"></i> {{ $post['read_time'] }}</span>
        </div>
    </div>
</div>

<!-- Blog Content (1200px- Post.svg / 768- Post.svg) -->
<section class="py-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Featured Image -->
        <div class="rounded-3xl overflow-hidden mb-10 shadow-lg border border-gray-100">
            <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-[380px] sm:h-[450px] object-cover" onerror="this.src='https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1200&auto=format&fit=crop&q=80'">
        </div>

        <!-- Article Body -->
        <div class="prose max-w-none text-text-dark text-base sm:text-lg leading-relaxed space-y-6">
            <p class="font-medium text-text-dark text-xl leading-relaxed">
                {{ $post['summary'] }}
            </p>

            <h3 class="text-2xl font-bold text-text-dark pt-4">১. রোগের মূল উৎসে কাজ করার প্রাকৃতিক পদ্ধতি</h3>
            <p class="text-text-muted text-base leading-relaxed">
                আধুনিক চিকিৎসা বিজ্ঞানের পাশাপাশি প্রাকৃতিক নিরাময় পদ্ধতি হিসেবে হোমিওপ্যাথি বিশ্বজুড়ে সমাদৃত। হোমিওপ্যাথির মূল মূলনীতি হলো "Similia Similibus Curentur" বা সদৃশ দ্বারা সদৃশ নিরাময়। অর্থাৎ যে উপাদান সুস্থ শরীরে যে লক্ষণ সৃষ্টি করতে পারে, ক্ষুদ্র মাত্রায় তা অসুস্থ শরীরের সেই লক্ষণ দূর করতে সক্ষম।
            </p>

            <h3 class="text-2xl font-bold text-text-dark pt-4">২. প্রতিরোধ ক্ষমতা বা Vital Force সক্রিয়করণ</h3>
            <p class="text-text-muted text-base leading-relaxed">
                হোমিওপ্যাথিক ওষুধের বিশেষত্ব হলো এটি শরীরের প্রাকৃতিক রোগ প্রতিরোধ ক্ষমতাকে জাগ্রত করে তোলে। ফলে বাহ্যিক কোনো ক্ষতিকারক রাসায়নিকের ওপর নির্ভরশীল না হয়ে দেহ নিজেই নিজেকে সারিয়ে তোলে। এটি ক্রনিক রোগ যেমন দীর্ঘস্থায়ী এলার্জি, হাঁপানি, গ্যাস্ট্রিক ও চর্মরোগের ক্ষেত্রে অত্যন্ত কার্যকর প্রমাণিত হয়েছে।
            </p>

            <div class="my-8 p-6 rounded-2xl bg-primary-subtle border-l-4 border-primary">
                <p class="text-sm sm:text-base text-text-dark font-semibold italic">
                    "সঠিক কেস-টেকিং এবং বিশেষজ্ঞ চিকিৎসকের নির্দেশনায় নিয়মিত ঔষধ সেবন করলে জটিল রোগ থেকেও স্থায়ী আরোগ্য লাভ সম্ভব।"
                </p>
                <span class="block text-xs text-primary font-bold mt-2">— {{ $post['author'] }}, {{ $post['author_role'] }}</span>
            </div>

            <h3 class="text-2xl font-bold text-text-dark pt-4">৩. কখন চিকিৎসকের পরামর্শ নেবেন?</h3>
            <p class="text-text-muted text-base leading-relaxed">
                নিজে নিজে অনুমান করে কোনো ওষুধ সেবন করবেন না। প্রতিটি রোগীর শারীরিক ও মানসিক গঠন সম্পূর্ণ ভিন্ন, তাই অভিজ্ঞ ডাক্তারের সাথে বিস্তারিত কথা বলে সঠিক মাত্রার ওষুধ নির্বাচন করুন।
            </p>
        </div>

        <!-- Doctor Advice / CTA Box -->
        <div class="mt-12 p-8 rounded-3xl bg-[#FAFDFB] border border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <h4 class="text-xl font-bold text-text-dark mb-1">এই বিষয়ে আপনার কোনো প্রশ্ন আছে?</h4>
                <p class="text-sm text-text-muted">হোমিওলির বিশেষজ্ঞ ডাক্তারের সাথে সরাসরি কথা বলতে অ্যাপয়েন্টমেন্ট নিন।</p>
            </div>
            <a href="{{ route('contact') }}" class="bg-primary hover:bg-primary-dark text-white font-semibold px-6 py-3 rounded-xl transition flex-shrink-0">
                পরামর্শ গ্রহণ করুন
            </a>
        </div>
    </div>
</section>
@endsection
