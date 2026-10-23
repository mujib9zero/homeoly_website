<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private function getPosts()
    {
        return [
            [
                'id' => 1,
                'slug' => 'homeopathy-treatment-benefits-and-natural-cure',
                'title' => 'হোমিওপ্যাথি চিকিৎসার আধুনিক কার্যকারিতা ও স্বাস্থ্য সুরক্ষা',
                'category' => 'হোমিওপ্যাথি চিকিৎসা',
                'date' => '২২ অক্টোবর, ২০২৬',
                'read_time' => '৫ মিনিট পড়ার সময়',
                'image' => 'assets/images/1200px_Desktop_image1_505_5711.png',
                'summary' => 'প্রাকৃতিক উপাদান দিয়ে রোগ নিরাময়ে হোমিওপ্যাথির কার্যপদ্ধতি, পার্শ্বপ্রতিক্রিয়াহীন চিকিৎসা ও দীর্ঘমেয়াদী সুস্থতার উপায়।',
                'author' => 'ডাঃ আনোয়ার হোসেন',
                'author_role' => 'সিনিয়র হোমিওপ্যাথি বিশেষজ্ঞ'
            ],
            [
                'id' => 2,
                'slug' => 'chronic-disease-management-with-homeopathy',
                'title' => 'দীর্ঘমেয়াদী ও ক্রনিক রোগের স্থায়ী উপশমে কার্যকরী হোমিওপ্যাথি',
                'category' => 'স্বাস্থ্য পরামর্শ',
                'date' => '১৮ অক্টোবর, ২০২৬',
                'read_time' => '৭ মিনিট পড়ার সময়',
                'image' => 'assets/images/1200px_Desktop_image2_505_5711.png',
                'summary' => 'অ্যালার্জি, সাইনোসাইটিস, মাইগ্রেন এবং পেটের সমস্যার আধুনিক সমাধান ও প্রতিরোধমূলক স্বাস্থ্যবিধি।',
                'author' => 'ডাঃ নুসরাত জাহান',
                'author_role' => 'ক্লিনিকাল রিসার্চার'
            ],
            [
                'id' => 3,
                'slug' => 'child-care-and-immune-boosting-homeopathy',
                'title' => 'শিশুদের রোগ প্রতিরোধ ক্ষমতা বৃদ্ধিতে নিরাপদ প্রাকৃতিক ওষুধ',
                'category' => 'শিশু ও মা',
                'date' => '১৫ অক্টোবর, ২০২৬',
                'read_time' => '৪ মিনিট পড়ার সময়',
                'image' => 'assets/images/1200px_Desktop_image3_505_5711.png',
                'summary' => 'শিশুদের সাধারণ ঠাণ্ডা, কাশি ও কৃমির উপশমে পার্শ্বপ্রতিক্রিয়ামুক্ত ওষুধ ব্যবহারের বৈজ্ঞানিক দিকনির্দেশনা।',
                'author' => 'ডাঃ ফারহানা কবির',
                'author_role' => 'শিশু রোগ বিশেষজ্ঞ'
            ],
            [
                'id' => 4,
                'slug' => 'stress-relief-and-holistic-healing',
                'title' => 'মানসিক চাপ ও অনিদ্রা দূরীকরণে হোমিওপ্যাথিক দৃষ্টিভঙ্গি',
                'category' => 'মানসিক স্বাস্থ্য',
                'date' => '১০ অক্টোবর, ২০২৬',
                'read_time' => '৬ মিনিট পড়ার সময়',
                'image' => 'assets/images/1200px_Desktop_image4_505_5711.png',
                'summary' => 'মনের শান্তি ও শারীরিক ভারসাম্য রক্ষা করতে হোমিওপ্যাথির সুসংহত হোলিস্টিক হিলিং প্রক্রিয়া।',
                'author' => 'ডাঃ মোস্তাফিজুর রহমান',
                'author_role' => 'কাউন্সিলর ও কনসালট্যান্ট'
            ]
        ];
    }

    public function index()
    {
        $posts = $this->getPosts();
        return view('pages.blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $all = $this->getPosts();
        $post = collect($all)->firstWhere('slug', $slug) ?? $all[0];
        $recentPosts = collect($all)->where('id', '!=', $post['id'])->take(3);
        return view('pages.blog.show', compact('post', 'recentPosts'));
    }
}
