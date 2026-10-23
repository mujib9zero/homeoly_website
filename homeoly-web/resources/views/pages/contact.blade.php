@extends('layouts.app')

@section('title', 'যোগাযোগ ও অ্যাপয়েন্টমেন্ট - হোমিওলি ক্লিনিক')

@section('content')
<!-- Header -->
<div class="bg-primary-subtle py-14 border-b border-green-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-text-dark mb-3">যোগাযোগ ও পরামর্শ</h1>
        <p class="text-text-muted text-base max-w-xl mx-auto">
            আপনার যে কোনো স্বাস্থ্য সমস্যা নিয়ে আমাদের সাথে নির্দ্বিধায় কথা বলুন। আমরা সবসময় আপনার সেবায় প্রস্তুত।
        </p>
    </div>
</div>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Contact Info Sidebar -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-[#FAFDFB] p-8 rounded-3xl border border-gray-200">
                    <h3 class="text-2xl font-bold text-text-dark mb-6">চেম্বার ও হেল্পডেস্ক</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center text-primary text-xl flex-shrink-0">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-dark text-base">আমাদের মূল কেন্দ্র</h4>
                                <p class="text-sm text-text-muted mt-1 leading-relaxed">
                                    বাড়ি #১২, রোড #০৫, ধানমন্ডি, ঢাকা - ১২০৯, বাংলাদেশ।
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center text-primary text-xl flex-shrink-0">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-dark text-base">ফোন / হটলাইন</h4>
                                <p class="text-sm text-text-muted mt-1">+৮৮০ ১৭০০-০০০০০০</p>
                                <p class="text-sm text-text-muted">+৮৮০ ১৯৬০-১১২২৩৩</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center text-primary text-xl flex-shrink-0">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-dark text-base">ইমেইল ঠিকানা</h4>
                                <p class="text-sm text-text-muted mt-1">support@homeoly.com</p>
                                <p class="text-sm text-text-muted">appointment@homeoly.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center text-primary text-xl flex-shrink-0">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-dark text-base">কনসালটেশন সময়সূচী</h4>
                                <p class="text-sm text-text-muted mt-1">শনিবার - বৃহস্পতিবার: সকাল ৯:০০ - রাত ৯:০০</p>
                                <p class="text-sm text-text-muted">শুক্রবার: বিকাল ৪:০০ - রাত ৯:০০</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-7">
                <div class="bg-white p-8 sm:p-10 rounded-3xl border border-gray-200 shadow-sm">
                    <h3 class="text-2xl font-bold text-text-dark mb-2">অনলাইনে অ্যাপয়েন্টমেন্ট অথবা বার্তা পাঠান</h3>
                    <p class="text-sm text-text-muted mb-6">ফর্মটি পূরণ করুন, আমাদের মেডিকেল কনসালট্যান্ট অতি দ্রুত আপনার সাথে যোগাযোগ করবেন।</p>

                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-xl bg-green-50 border border-green-200 text-green-800 text-sm flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-lg text-primary"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-semibold text-text-dark uppercase mb-2">আপনার নাম *</label>
                                <input type="text" name="name" required placeholder="নাম লিখুন" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm transition">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-text-dark uppercase mb-2">মোবাইল নম্বর *</label>
                                <input type="text" name="phone" required placeholder="০১XXXXXXXXX" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm transition">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-semibold text-text-dark uppercase mb-2">ইমেইল এড্রেস *</label>
                                <input type="email" name="email" required placeholder="example@gmail.com" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm transition">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-text-dark uppercase mb-2">রোগ বা সেবার বিষয়</label>
                                <input type="text" name="subject" placeholder="যেমন: এলার্জি, গ্যাস্ট্রিক, বাতের ব্যথা" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm transition">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-text-dark uppercase mb-2">আপনার সমস্যা বা বার্তা বিস্তারিত লিখুন *</label>
                            <textarea name="message" rows="4" required placeholder="কখন থেকে সমস্যা, লক্ষণসমূহ ইত্যাদি লিখুন..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm transition"></textarea>
                        </div>

                        <button type="submit" class="w-full sm:w-auto bg-primary hover:bg-primary-dark text-white font-semibold px-8 py-3.5 rounded-xl shadow-md transition flex items-center justify-center gap-2">
                            <i class="fa-regular fa-paper-plane"></i>
                            <span>বার্তা পাঠান</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
