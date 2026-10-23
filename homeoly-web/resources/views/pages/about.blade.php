@extends('layouts.app')

@section('title', 'আমাদের সম্পর্কে - হোমিওলি ক্লিনিক ও রিসার্চ সেন্টার')

@section('content')
<!-- Page Header -->
<div class="bg-primary-subtle py-14 border-b border-green-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-text-dark mb-3">আমাদের পরিচিতি ও লক্ষ্য</h1>
        <p class="text-text-muted text-base max-w-xl mx-auto">
            সুস্থতার পথচলায় আধুনিক চিকিৎসা বিজ্ঞান ও সনাতন প্রাকৃতিক নিরাময়ের এক অনন্য সমন্বয়।
        </p>
    </div>
</div>

<!-- Main Mission & Story (SVG 1200px- About us.svg) -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="space-y-5">
                <span class="text-primary font-bold text-sm tracking-wider uppercase">হোমিওলি পথচলা</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-text-dark leading-snug">
                    পার্শ্বপ্রতিক্রিয়াহীন প্রাকৃতিক চিকিৎসার মাধ্যমে সুস্থ সমাজ বিনির্মাণ
                </h2>
                <p class="text-text-muted leading-relaxed">
                    ২০১১ সালে একদল নিবেদিতপ্রাণ ও আধুনিক ডিগ্রিধারী হোমিওপ্যাথি চিকিৎসকদের হাত ধরে হোমিওলির যাত্রা শুরু। দীর্ঘদিন ধরে জটিল ও দীর্ঘস্থায়ী রোগে ভুগতে থাকা রোগীদের পার্শ্বপ্রতিক্রিয়াহীন সুচিকিৎসা প্রদান করাই আমাদের মূল উদ্দেশ্য।
                </p>
                <p class="text-text-muted leading-relaxed">
                    আমরা বিশ্বাস করি, রোগের লক্ষণ দাবিয়ে রাখা প্রকৃত সুস্থতা নয়; বরং শরীরের রোগ প্রতিরোধ ক্ষমতা (Vital Force) সক্রিয় করে রোগ সম্পূর্ণ দূর করাই প্রকৃত চিকিৎসা।
                </p>
                
                <div class="grid grid-cols-2 gap-4 pt-4">
                    <div class="p-4 rounded-xl bg-primary-subtle border border-green-100">
                        <h4 class="font-bold text-primary text-xl">১০০% অর্গানিক</h4>
                        <p class="text-xs text-text-muted mt-1">জার্মান মানের বিশুদ্ধ ওষুধ ও প্রমিত চিকিৎসা বিধান</p>
                    </div>
                    <div class="p-4 rounded-xl bg-primary-subtle border border-green-100">
                        <h4 class="font-bold text-primary text-xl">২৪/৭ সাপোর্ট</h4>
                        <p class="text-xs text-text-muted mt-1">জরুরি রোগী পর্যবেক্ষণ ও সার্বক্ষণিক কাউন্সেলিং</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-gray-100">
                    <img src="{{ asset('assets/images/1200px__About_us_image1_439_834.jpeg') }}" alt="Doctors team" class="w-full h-[400px] object-cover" onerror="this.src='https://images.unsplash.com/photo-1551076805-e1869033e561?w=800&auto=format&fit=crop&q=80'">
                </div>
            </div>
        </div>

        <!-- Vision and Values -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-8 border-t border-gray-100">
            <div class="p-6 rounded-2xl bg-[#FAFDFB] border border-gray-200">
                <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center text-primary text-xl mb-4">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3 class="text-lg font-bold text-text-dark mb-2">আমাদের ভিশন</h3>
                <p class="text-xs sm:text-sm text-text-muted leading-relaxed">
                    বাংলাদেশের প্রতিটি প্রান্তে বিজ্ঞানসম্মত ও নির্ভরযোগ্য হোমিওপ্যাথি চিকিৎসা সাধারণ মানুষের সাধ্যের মধ্যে পৌঁছে দেওয়া।
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#FAFDFB] border border-gray-200">
                <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center text-primary text-xl mb-4">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </div>
                <h3 class="text-lg font-bold text-text-dark mb-2">মূল্যবোধ ও সততা</h3>
                <p class="text-xs sm:text-sm text-text-muted leading-relaxed">
                    রোগীর প্রতি আন্তরিক সহমর্মিতা, গোপনীয়তা রক্ষা এবং শতভাগ স্বচ্ছতার সাথে সঠিক পরামর্শ প্রদান করা।
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#FAFDFB] border border-gray-200">
                <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center text-primary text-xl mb-4">
                    <i class="fa-solid fa-microscope"></i>
                </div>
                <h3 class="text-lg font-bold text-text-dark mb-2">গবেষণা ও মানোন্নয়ন</h3>
                <p class="text-xs sm:text-sm text-text-muted leading-relaxed">
                    আন্তর্জাতিক মানের হোমিওপ্যাথি ক্লিনিকাল গবেষণার সাথে যুক্ত থেকে আধুনিকতম চিকিৎসা প্রোটোকল বাস্তবায়ন।
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
