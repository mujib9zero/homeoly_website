<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $services = DB::table('services')->get();
        $faqs = DB::table('faqs')->orderBy('order')->get();
        return view('pages.home', compact('services', 'faqs'));
    }

    public function bookAppointment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'service' => 'nullable|string|max:255',
            'appointment_date' => 'nullable|date',
            'message' => 'nullable|string',
        ]);

        DB::table('appointments')->insert([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'service' => $validated['service'] ?? 'General Consultation',
            'appointment_date' => $validated['appointment_date'] ?? now()->addDay()->toDateString(),
            'message' => $validated['message'] ?? null,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Thank you! Your appointment has been booked successfully. Our medical consultant will contact you shortly.');
    }

    public function subscribeNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        DB::table('newsletter_subscribers')->updateOrInsert(
            ['email' => $validated['email']],
            ['created_at' => now(), 'updated_at' => now()]
        );

        return back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}
