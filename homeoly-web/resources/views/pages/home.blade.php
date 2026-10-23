@extends('layouts.app')

@section('title', 'Homeoly - Modern Homeopathic Healthcare from Home')

@section('content')
<div class="pixel-perfect-section relative bg-white select-none">

    <!-- Flash message when an appointment or newsletter is submitted -->
    @if(session('success'))
    <div id="flashNotification" class="fixed top-5 z-50 max-w-md w-full px-4 animate-bounce left-1/2 -translate-x-1/2">
        <div class="p-4 rounded-2xl bg-white border-2 border-primary shadow-2xl text-text-dark text-sm flex items-center justify-between">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-circle-check text-2xl text-primary"></i>
                <span class="font-bold">{{ session('success') }}</span>
            </div>
            <button onclick="document.getElementById('flashNotification').remove()" class="text-gray-400 hover:text-gray-700">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>
    @endif

    <!-- 100% EXACT ARTBOARD WITH EMBEDDED OBJECT FOR LIVE DOM MANIPULATION -->
    <div class="w-full relative">
        <object id="landingSvgObject" type="image/svg+xml" data="{{ asset('assets/svg/app landing page.svg') }}" class="w-full h-auto block" priority></object>

        <!-- DYNAMIC INTERACTIVE TOUCHPOINTS OVERLAY (MAPPED 100% PIXEL PERFECT) -->

        <!-- TOP NAVBAR INTERACTIVE HOTSPOTS -->
        <!-- Home (হোম) -->
        <a href="#hero-section" onclick="smoothScrollTo('hero-section'); toggleResourcesDropdown(false);" onmouseenter="setNavHover('nav_home', true)" onmouseleave="setNavHover('nav_home', false)" class="absolute top-[0.45%] left-[36.0%] w-[3.5%] h-[0.7%] z-30 cursor-pointer" title="Home (হোম)"></a>

        <!-- Services (সেবাসমূহ) -->
        <a href="#services-section" onclick="smoothScrollTo('services-section'); toggleResourcesDropdown(false);" onmouseenter="setNavHover('nav_services', true)" onmouseleave="setNavHover('nav_services', false)" class="absolute top-[0.45%] left-[40.8%] w-[4.5%] h-[0.7%] z-30 cursor-pointer" title="Services (সেবাসমূহ)"></a>

        <!-- Resources Dropdown Toggle Hotspot & Exact Figma Popup (রিসোর্স) -->
        <div id="navResourcesHotspot" class="absolute top-[0.45%] left-[45.0%] w-[6.5%] h-[0.7%] z-30 cursor-pointer" onclick="toggleResourcesDropdown()" onmouseenter="setNavHover('nav_resources', true)" onmouseleave="setNavHover('nav_resources', false)" title="Resources Dropdown (রিসোর্স)"></div>
        <div id="resourcesSubmenu" class="hidden absolute top-[1.436%] left-[41.94%] w-[20.26%] z-40 transition-all duration-300 transform origin-top scale-95 opacity-0 select-none">
            <div class="relative w-full">
                @include('components.resources_dropdown')
                <!-- Interactive Links over the popup items -->
                <!-- Item 1: Download App (ডাউনলোড অ্যাপ) -->
                <a href="#download-section" onclick="smoothScrollTo('download-section'); toggleResourcesDropdown(false);" class="absolute top-[10%] left-[6%] w-[88%] h-[38%] rounded-xl cursor-pointer hover:bg-primary/5 transition z-50 flex items-center" title="ডাউনলোড অ্যাপ (Download App)"></a>
                <!-- Item 2: Download App Manual (ডাউনলোড অ্যাপ ম্যানুয়াল) -->
                <a href="{{ asset('assets/Homeoly_User_Manual.pdf') }}" target="_blank" download="Homeoly_App_Manual.pdf" onclick="toggleResourcesDropdown(false);" class="absolute top-[52%] left-[6%] w-[88%] h-[38%] rounded-xl cursor-pointer hover:bg-primary/5 transition z-50 flex items-center" title="ডাউনলোড অ্যাপ ম্যানুয়াল (Download App Manual)"></a>
            </div>
        </div>

        <!-- About Us (আমাদের সম্পর্কে) -->
        <a href="#about-section" onclick="smoothScrollTo('about-section'); toggleResourcesDropdown(false);" onmouseenter="setNavHover('nav_about', true)" onmouseleave="setNavHover('nav_about', false)" class="absolute top-[0.45%] left-[53.2%] w-[7.8%] h-[0.7%] z-30 cursor-pointer" title="About Us (আমাদের সম্পর্কে)"></a>

        <!-- Contact (যোগাযোগ) -->
        <a href="#contact-section" onclick="smoothScrollTo('contact-section'); toggleResourcesDropdown(false);" onmouseenter="setNavHover('nav_contact', true)" onmouseleave="setNavHover('nav_contact', false)" class="absolute top-[0.45%] left-[61.6%] w-[5.5%] h-[0.7%] z-30 cursor-pointer" title="Contact (যোগাযোগ)"></a>

        <!-- Language Selector Hotspot (ভাষা পরিবর্তন) -->
        <div class="absolute top-[0.45%] right-[7.0%] w-[8.0%] h-[0.7%] z-30 cursor-pointer" onclick="toggleLanguageDropdown(); toggleResourcesDropdown(false);" onmouseenter="setNavHover('nav_lang', true)" onmouseleave="setNavHover('nav_lang', false)" title="Select Language"></div>
        <div id="languageSubmenu" class="hidden absolute top-[1.4%] right-[7.0%] z-40 bg-white/95 backdrop-blur-md rounded-2xl shadow-2xl border border-gray-100 p-2 min-w-[150px] space-y-1 transition transform duration-200">
            <button type="button" onclick="setLanguage('en')" class="w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs font-semibold text-text-dark hover:bg-primary-light hover:text-primary transition">
                <span>English (Default)</span>
                <i id="checkEn" class="fa-solid fa-check text-primary"></i>
            </button>
            <button type="button" onclick="setLanguage('bn')" class="w-full flex items-center justify-between px-3 py-2 rounded-xl text-xs font-semibold text-text-dark hover:bg-primary-light hover:text-primary transition">
                <span>বাংলা</span>
                <i id="checkBn" class="fa-solid fa-check text-primary hidden"></i>
            </button>
        </div>

        <!-- Section Target Anchors -->
        <div id="hero-section" class="absolute top-0 left-0 w-full h-[10px] pointer-events-none"></div>
        <div id="services-section" class="absolute top-[20.0%] left-0 w-full h-[10px] pointer-events-none"></div>
        <div id="about-section" class="absolute top-[30.0%] left-0 w-full h-[10px] pointer-events-none"></div>
        <div id="contact-section" class="absolute top-[96.0%] left-0 w-full h-[10px] pointer-events-none"></div>

        <!-- 4. Hero Section: Unified "Download Now" Button (Includes text and right download arrow icon -> Direct to Play Store) -->
        <a href="https://play.google.com/store" target="_blank" title="Download Now on Google Play Store" class="absolute top-[13.11%] left-[9.13%] w-[16.45%] h-[1.02%] rounded-xl cursor-pointer hover:opacity-90 hover:ring-2 hover:ring-primary/60 transition z-30"></a>

        <!-- 5. Hero Section: Mouse Scroll Button (Below Hero section) -->
        <a href="javascript:void(0)" onclick="smoothScrollTo('healthcare-section')" title="Scroll Down" class="absolute top-[13.0%] left-[47.8%] w-[4.5%] h-[1.4%] rounded-full cursor-pointer hover:scale-105 transition z-30"></a>

        <!-- 7. Healthcare Carousel Cards (Horizontal Continuous Auto-Scroll & Hover active states) -->
        <div id="healthcare-section" class="absolute top-[20.7%] left-[6.7%] w-[86.6%] h-[4.7%] z-20 pointer-events-none"></div>

        <!-- Carousel Arrow Buttons: Left & Right -->
        <div class="absolute top-[22.7%] left-[1.2%] w-[3.5%] h-[0.9%] rounded-full cursor-pointer z-30" onmouseenter="setHealthArrowHover('left', true)" onmouseleave="setHealthArrowHover('left', false)" onclick="scrollHealthcareLeft()" title="Scroll Previous"></div>
        <div class="absolute top-[22.7%] right-[1.2%] w-[3.5%] h-[0.9%] rounded-full cursor-pointer z-30" onmouseenter="setHealthArrowHover('right', true)" onmouseleave="setHealthArrowHover('right', false)" onclick="scrollHealthcareRight()" title="Scroll Next"></div>

        <div class="absolute top-[20.7%] left-[6.7%] w-[20.8%] h-[4.7%] rounded-2xl cursor-pointer z-30" onmouseenter="pauseCardAutoplay(); highlightSlotCard(0, true)" onmouseleave="resumeCardAutoplay(); highlightSlotCard(0, false)" onclick="openBooking('100% Side-effect Free Treatment')" title="Side-effect Free Treatment"></div>
        <div class="absolute top-[20.7%] left-[28.6%] w-[20.8%] h-[4.7%] rounded-2xl cursor-pointer z-30" onmouseenter="pauseCardAutoplay(); highlightSlotCard(1, true)" onmouseleave="resumeCardAutoplay(); highlightSlotCard(1, false)" onclick="openBooking('Comprehensive Health Records')" title="Comprehensive Health Records"></div>
        <div class="absolute top-[20.7%] left-[50.6%] w-[20.8%] h-[4.7%] rounded-2xl cursor-pointer z-30" onmouseenter="pauseCardAutoplay(); highlightSlotCard(2, true)" onmouseleave="resumeCardAutoplay(); highlightSlotCard(2, false)" onclick="openBooking('Online & Chamber Care')" title="Online & Chamber Care"></div>
        <div class="absolute top-[20.7%] left-[72.5%] w-[20.8%] h-[4.7%] rounded-2xl cursor-pointer z-30" onmouseenter="pauseCardAutoplay(); highlightSlotCard(3, true)" onmouseleave="resumeCardAutoplay(); highlightSlotCard(3, false)" onclick="openBooking('Medicine Home Delivery')" title="Medicine Home Delivery"></div>

        <!-- 9. Doctor Dashboard App Hotspot -->
        <a href="javascript:void(0)" onclick="openBooking('Homeoly Mobile App')" title="Mobile App Consultation" class="absolute top-[30.5%] left-[9.5%] w-[45%] h-[9.5%] rounded-3xl cursor-pointer hover:ring-2 hover:ring-primary/40 transition z-30"></a>
        <a href="javascript:void(0)" onclick="openBooking('Doctor Dashboard Portal')" title="Doctor Portal" class="absolute top-[38.5%] right-[9.5%] w-[16%] h-[1.2%] rounded-xl cursor-pointer hover:bg-primary/10 transition z-30"></a>

        <!-- 10. Digital Prescription Interactive Steps (1, 2, 3, 4) with Hover Highlights -->
        <div class="absolute top-[50.4%] left-[25.2%] w-[5.5%] h-[1.3%] rounded-2xl cursor-pointer z-30 hover-glow" onmouseenter="activateStep(1)" onmouseleave="resetStep()" onclick="activateStep(1); openBooking('Step 1: Patient Health History')" title="Step 1"></div>
        <div class="absolute top-[50.15%] right-[25.5%] w-[5.5%] h-[1.3%] rounded-2xl cursor-pointer z-30 hover-glow" onmouseenter="activateStep(2)" onmouseleave="resetStep()" onclick="activateStep(2); openBooking('Step 2: Doctor Consultation')" title="Step 2"></div>
        <div class="absolute top-[55.25%] left-[25.2%] w-[5.5%] h-[1.3%] rounded-2xl cursor-pointer z-30 hover-glow" onmouseenter="activateStep(3)" onmouseleave="resetStep()" onclick="activateStep(3); openBooking('Step 3: Digital Prescription Delivery')" title="Step 3"></div>
        <div class="absolute top-[54.55%] right-[25.5%] w-[5.5%] h-[1.3%] rounded-2xl cursor-pointer z-30 hover-glow" onmouseenter="activateStep(4)" onmouseleave="resetStep()" onclick="activateStep(4); openBooking('Step 4: Medicine Home Delivery')" title="Step 4"></div>

        <!-- 11. "Download App Manual" Button -->
        <a href="{{ asset('assets/Homeoly_User_Manual.pdf') }}" target="_blank" download="Homeoly_App_Manual.pdf" title="Download App Manual" class="absolute top-[66.0%] left-[6.7%] w-[21.7%] h-[1.1%] rounded-xl cursor-pointer hover:ring-2 hover:ring-primary/60 transition z-30"></a>

        <!-- 12. REAL-TIME SYNCHRONIZED 360° VIDEO PLAYER COMPONENT -->
        <div id="guide-video-player" class="absolute top-[61.53%] left-[58.39%] w-[34.80%] h-[6.85%] select-none z-30">
            <div class="relative w-full h-full rounded-[10px] overflow-hidden bg-black shadow-lg">
                <!-- SVG Animated Border Stroke (Runs 360° with video, pauses when paused, completes on end) -->
                <svg class="video-progress-border" viewBox="0 0 419 362" preserveAspectRatio="none">
                    <rect x="2" y="2" width="415" height="358" rx="8" ry="8" fill="none" stroke="#D1EADE" stroke-width="4" />
                    <rect id="videoProgressStroke" pathLength="100" x="2" y="2" width="415" height="358" rx="8" ry="8" fill="none" stroke="#00A746" stroke-width="4" stroke-dasharray="100" stroke-dashoffset="100" />
                </svg>

                <!-- HTML5 Video Element -->
                <video id="homeolyGuideVideo" class="w-full h-full object-cover relative z-10" poster="{{ asset('assets/images/video_poster.png') }}" playsinline preload="metadata">
                    <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4" type="video/mp4">
                    Your browser does not support video playback.
                </video>

                <!-- Custom Play Overlay Button -->
                <div id="videoPlayOverlay" onclick="toggleGuideVideo()" class="absolute inset-0 z-20 bg-black/30 hover:bg-black/20 flex items-center justify-center cursor-pointer transition">
                    <div class="w-14 h-14 rounded-full bg-white/95 text-primary flex items-center justify-center text-xl shadow-xl hover:scale-110 transition transform">
                        <i id="playIcon" class="fa-solid fa-play ml-1"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- 13. Service Reliability Accordion Question Hotspots (Item 1 is default expanded) -->
        <div class="absolute top-[75.0%] right-[7.0%] w-[60.0%] h-[1.0%] cursor-pointer z-30" onclick="toggleFaqAccordion(0)" title="FAQ Item 1"></div>
        <div class="absolute top-[78.8%] right-[7.0%] w-[60.0%] h-[1.0%] cursor-pointer z-30" onclick="toggleFaqAccordion(1)" title="FAQ Item 2"></div>
        <div class="absolute top-[80.0%] right-[7.0%] w-[60.0%] h-[1.0%] cursor-pointer z-30" onclick="toggleFaqAccordion(2)" title="FAQ Item 3"></div>
        <div class="absolute top-[82.0%] right-[7.0%] w-[60.0%] h-[1.0%] cursor-pointer z-30" onclick="toggleFaqAccordion(3)" title="FAQ Item 4"></div>
        <div class="absolute top-[83.1%] right-[7.0%] w-[60.0%] h-[1.0%] cursor-pointer z-30" onclick="toggleFaqAccordion(4)" title="FAQ Item 5"></div>

        <!-- 14. Download App Links (Google Play & App Store) -->
        <div id="download-section" class="absolute top-[91.4%] left-[6.7%] w-[32%] h-[1.3%] z-20 pointer-events-none"></div>
        <a href="https://play.google.com/store" target="_blank" title="Download on Google Play" class="absolute top-[91.4%] left-[6.7%] w-[15%] h-[1.3%] rounded-xl hover:ring-2 hover:ring-primary/50 transition z-30"></a>
        <a href="https://www.apple.com/app-store/" target="_blank" title="Download on App Store" class="absolute top-[91.4%] left-[23.1%] w-[15%] h-[1.3%] rounded-xl hover:ring-2 hover:ring-primary/50 transition z-30"></a>

        <!-- 15. Footer Social Icons (Direct platform links) -->
        <a href="https://facebook.com" target="_blank" title="Facebook" class="absolute top-[97.0%] left-[6.8%] w-[3.4%] h-[0.8%] rounded-xl hover:ring-2 hover:ring-primary/60 transition z-30"></a>
        <a href="https://twitter.com" target="_blank" title="Twitter / X" class="absolute top-[97.0%] left-[11.4%] w-[3.4%] h-[0.8%] rounded-xl hover:ring-2 hover:ring-primary/60 transition z-30"></a>
        <a href="https://instagram.com" target="_blank" title="Instagram" class="absolute top-[97.0%] left-[16.0%] w-[3.4%] h-[0.8%] rounded-xl hover:ring-2 hover:ring-primary/60 transition z-30"></a>
        <a href="https://linkedin.com" target="_blank" title="LinkedIn" class="absolute top-[97.0%] left-[20.6%] w-[3.4%] h-[0.8%] rounded-xl hover:ring-2 hover:ring-primary/60 transition z-30"></a>

        <!-- 16. Footer Newsletter Subscription Form -->
        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="absolute top-[97.2%] right-[6.8%] w-[15.1%] h-[0.78%] z-30 flex items-center">
            @csrf
            <input type="email" name="email" required placeholder="Enter email address" class="w-full h-full pl-3 pr-8 rounded-l-md bg-transparent text-xs text-text-dark placeholder:text-gray-400 outline-none border-none font-medium">
            <button type="submit" title="Subscribe" class="w-9 h-full flex items-center justify-center text-white hover:opacity-90 transition cursor-pointer">
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>
        </form>
    </div>

</div>

<!-- DYNAMIC APPOINTMENT MODAL -->
<div id="appointmentModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 relative shadow-2xl border border-gray-100 max-h-[92vh] overflow-y-auto">
        <button onclick="document.getElementById('appointmentModal').classList.add('hidden')" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 text-xl">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="flex items-center gap-3 mb-5">
            <div class="w-11 h-11 rounded-2xl bg-primary-light text-primary flex items-center justify-center text-xl">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
            <div>
                <h3 class="text-xl font-bold text-text-dark">Online Consultation Booking</h3>
                <p class="text-xs text-text-muted">Homeoly Certified Doctor Consultation Request</p>
            </div>
        </div>

        <form action="{{ route('appointment.book') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-text-dark mb-1">Patient Name *</label>
                <input type="text" name="name" required placeholder="Enter full name" class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:border-primary outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block text-xs font-bold text-text-dark mb-1">Phone Number *</label>
                    <input type="text" name="phone" required placeholder="+880 1XXXXXXXXX" class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:border-primary outline-none">
                </div>
                <div>
                    <label class="block text-xs font-bold text-text-dark mb-1">Preferred Date</label>
                    <input type="date" name="appointment_date" value="{{ date('Y-m-d') }}" class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:border-primary outline-none">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-text-dark mb-1">Healthcare Service</label>
                <input type="text" id="modalServiceInput" name="service" placeholder="e.g. Allergies, Skin, Asthma" class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:border-primary outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-text-dark mb-1">Short Description of Problem</label>
                <textarea name="message" rows="3" placeholder="Symptoms, duration, prior medicines..." class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:border-primary outline-none"></textarea>
            </div>

            <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-3.5 rounded-xl transition shadow-lg text-sm">
                Confirm Booking
            </button>
        </form>
    </div>
</div>

<!-- DYNAMIC FAQ MODAL POPUP -->
<div id="faqModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 relative shadow-2xl border border-gray-100">
        <button onclick="document.getElementById('faqModal').classList.add('hidden')" class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 text-xl">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-xl bg-primary-light text-primary flex items-center justify-center text-lg">
                <i class="fa-solid fa-circle-question"></i>
            </div>
            <h3 id="faqModalTitle" class="text-lg font-bold text-text-dark">Frequently Asked Questions</h3>
        </div>

        <div class="p-4 rounded-2xl bg-primary-light/50 border border-green-100 mb-6">
            <p id="faqModalAnswer" class="text-sm text-text-dark leading-relaxed"></p>
        </div>

        <button onclick="document.getElementById('faqModal').classList.add('hidden')" class="w-full bg-primary text-white font-bold py-2.5 rounded-xl text-sm">
            Close
        </button>
    </div>
</div>

<script>
    const faqsData = @json($faqs);
    let currentLang = 'en';

    function getSvgDoc() {
        const obj = document.getElementById('landingSvgObject');
        return obj ? obj.contentDocument : null;
    }

    // 1. Navigation Menu Hover & Active Color (#008638)
    const HOVER_GREEN = '#008638';
    const DEFAULT_DARK = '#152934';
    let isResourcesOpen = false;

    function setNavHover(elementId, isHover) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;

        if (elementId === 'nav_resources') {
            if (isResourcesOpen) return; // keep green if open
            const resText = svgDoc.getElementById('nav_resources_text');
            if (resText) resText.setAttribute('fill', isHover ? HOVER_GREEN : DEFAULT_DARK);
            return;
        }

        if (elementId === 'nav_lang') {
            const langText = svgDoc.getElementById('nav_lang_text');
            if (langText) langText.setAttribute('fill', isHover ? HOVER_GREEN : DEFAULT_DARK);
            const globe = svgDoc.getElementById('nav_lang_globe');
            if (globe) {
                const paths = globe.querySelectorAll('path');
                paths.forEach(p => p.setAttribute('stroke', isHover ? HOVER_GREEN : DEFAULT_DARK));
            }
            const langArrow = svgDoc.getElementById('nav_lang_arrow_group');
            if (langArrow) {
                const p = langArrow.querySelector('path');
                if (p) p.setAttribute('fill', isHover ? HOVER_GREEN : DEFAULT_DARK);
            }
            return;
        }

        const el = svgDoc.getElementById(elementId);
        if (el) {
            el.setAttribute('fill', isHover ? HOVER_GREEN : DEFAULT_DARK);
        }
    }

    function toggleResourcesDropdown(forceState) {
        const menu = document.getElementById('resourcesSubmenu');
        if (!menu) return;

        if (typeof forceState === 'boolean') {
            isResourcesOpen = forceState;
        } else {
            isResourcesOpen = !isResourcesOpen;
        }

        const svgDoc = getSvgDoc();
        const arrow = svgDoc ? svgDoc.getElementById('nav_resources_arrow_group') : null;
        const resText = svgDoc ? svgDoc.getElementById('nav_resources_text') : null;

        if (isResourcesOpen) {
            menu.classList.remove('hidden');
            setTimeout(() => {
                menu.classList.remove('opacity-0', 'scale-95');
                menu.classList.add('opacity-100', 'scale-100');
            }, 10);
            if (arrow) arrow.style.transform = 'rotate(180deg)';
            if (resText) resText.setAttribute('fill', HOVER_GREEN);
        } else {
            menu.classList.remove('opacity-100', 'scale-100');
            menu.classList.add('opacity-0', 'scale-95');
            setTimeout(() => {
                if (!isResourcesOpen) menu.classList.add('hidden');
            }, 250);
            if (arrow) arrow.style.transform = 'rotate(0deg)';
            if (resText) resText.setAttribute('fill', DEFAULT_DARK);
        }
    }

    // 2. Language Dropdown Toggle
    function toggleLanguageDropdown() {
        const menu = document.getElementById('languageSubmenu');
        if (!menu) return;
        const isHidden = menu.classList.contains('hidden');
        menu.classList.toggle('hidden');

        const svgDoc = getSvgDoc();
        if (svgDoc) {
            const arrow = svgDoc.getElementById('nav_lang_arrow_group');
            if (arrow) {
                arrow.style.transform = isHidden ? 'rotate(180deg)' : 'rotate(0deg)';
            }
        }
    }

    function setLanguage(lang) {
        currentLang = lang;
        document.getElementById('checkEn').classList.toggle('hidden', lang !== 'en');
        document.getElementById('checkBn').classList.toggle('hidden', lang !== 'bn');
        document.getElementById('languageSubmenu').classList.add('hidden');

        const svgDoc = getSvgDoc();
        if (svgDoc) {
            const arrow = svgDoc.getElementById('nav_lang_arrow_group');
            if (arrow) arrow.style.transform = 'rotate(0deg)';
        }
    }

    // Close dropdowns on outside click
    document.addEventListener('click', function(e) {
        const resMenu = document.getElementById('resourcesSubmenu');
        const langMenu = document.getElementById('languageSubmenu');
        if (resMenu && !e.target.closest('#resourcesSubmenu') && !e.target.closest('#navResourcesHotspot')) {
            toggleResourcesDropdown(false);
        }
        if (langMenu && !e.target.closest('#languageSubmenu') && !e.target.closest('[title=\"Select Language\"]')) {
            langMenu.classList.add('hidden');
            const svgDoc = getSvgDoc();
            if (svgDoc) {
                const arrow = svgDoc.getElementById('nav_lang_arrow_group');
                if (arrow) arrow.style.transform = 'rotate(0deg)';
            }
        }
    });

    // 3. Smooth Scroll Helper
    function smoothScrollTo(elementId) {
        const el = document.getElementById(elementId);
        if (el) {
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // 4. Healthcare Carousel Cards Auto-Play & Seamless Circular Movement
    let cardAutoplayTimer = null;
    let cardShiftIndex = 0; // Tracks cycle step 0, 1, 2, 3
    const CARD_STEP_X = 264; // Horizontal gap between cards in Figma (345 - 81 = 264)

    function setHealthArrowHover(direction, isHover) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;
        if (direction === 'left') {
            const leftArrow = svgDoc.getElementById('health_card_left_arrow');
            if (leftArrow) {
                leftArrow.setAttribute('fill', isHover ? '#00A746' : '#D0D0D0');
            }
        } else if (direction === 'right') {
            const rightArrow = svgDoc.getElementById('health_card_arrow_fill');
            if (rightArrow) {
                rightArrow.setAttribute('fill', isHover ? '#00A746' : '#D0D0D0');
            }
        }
    }

    // Renders the 4 cards at their circular positions so they loop continuously:
    // Leftmost card wraps around realistically behind (3D depth / fade) and re-emerges from right!
    function renderCardPositions(animated = true) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;

        for (let i = 0; i < 4; i++) {
            const cardGroup = svgDoc.getElementById('health_card_group_' + i);
            const cardBg = svgDoc.getElementById('health_card_bg_' + i);
            if (!cardGroup) continue;

            // Compute circular slot position (0, 1, 2, 3)
            const currentSlot = (i - cardShiftIndex % 4 + 4) % 4;
            const shiftCount = currentSlot - i;
            const translateX = shiftCount * CARD_STEP_X;

            cardGroup.style.transition = animated ? 'transform 0.75s cubic-bezier(0.34, 1.25, 0.64, 1), opacity 0.5s ease' : 'none';
            cardGroup.style.transform = `translateX(${translateX}px)`;
            cardGroup.style.opacity = '1';

            // Slot 1 is the currently active/centered card in the carousel:
            // Gets active green background (#D9F2E3) AND subtle downward card shadow (drop-shadow-md)!
            if (cardBg) {
                if (currentSlot === 1) {
                    cardBg.setAttribute('fill', '#D9F2E3');
                    cardBg.style.filter = 'drop-shadow(3px 8px 12px rgba(0, 167, 70, 0.18))';
                } else {
                    cardBg.setAttribute('fill', '#F9F9F9');
                    cardBg.style.filter = 'none';
                }
            }
        }
    }

    // Highlight whichever card is currently sitting in a slot when hovered
    function highlightSlotCard(slotIndex, isHover) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;

        for (let i = 0; i < 4; i++) {
            const currentSlot = (i - cardShiftIndex % 4 + 4) % 4;
            if (currentSlot === slotIndex) {
                const cardBg = svgDoc.getElementById('health_card_bg_' + i);
                if (cardBg) {
                    if (isHover) {
                        cardBg.setAttribute('fill', '#D9F2E3');
                        cardBg.style.filter = 'drop-shadow(3px 8px 12px rgba(0, 167, 70, 0.18))';
                    } else {
                        // Return to normal (Slot 1 remains active green with shadow, others normal #F9F9F9)
                        if (currentSlot === 1) {
                            cardBg.setAttribute('fill', '#D9F2E3');
                            cardBg.style.filter = 'drop-shadow(3px 8px 12px rgba(0, 167, 70, 0.18))';
                        } else {
                            cardBg.setAttribute('fill', '#F9F9F9');
                            cardBg.style.filter = 'none';
                        }
                    }
                }
                break;
            }
        }
    }

    // Continuous movement: Cards shift from right to left (entering left and wrapping around from right)
    function scrollHealthcareRight() {
        cardShiftIndex++;
        renderCardPositions(true);

        const svgDoc = getSvgDoc();
        const rightArrow = svgDoc ? svgDoc.getElementById('health_card_arrow_fill') : null;
        if (rightArrow) {
            rightArrow.setAttribute('fill', '#00A746');
            setTimeout(() => rightArrow.setAttribute('fill', '#D0D0D0'), 300);
        }
    }

    function scrollHealthcareLeft() {
        cardShiftIndex--;
        renderCardPositions(true);

        const svgDoc = getSvgDoc();
        const leftArrow = svgDoc ? svgDoc.getElementById('health_card_left_arrow') : null;
        if (leftArrow) {
            leftArrow.setAttribute('fill', '#00A746');
            setTimeout(() => leftArrow.setAttribute('fill', '#D0D0D0'), 300);
        }
    }

    function resetHealthCard() {
        renderCardPositions(false);
    }

    function startCardAutoplay() {
        if (cardAutoplayTimer) clearInterval(cardAutoplayTimer);
        // Continuously moves from right to left every 3 seconds
        cardAutoplayTimer = setInterval(() => {
            scrollHealthcareRight();
        }, 3000);
    }

    function pauseCardAutoplay() {
        if (cardAutoplayTimer) {
            clearInterval(cardAutoplayTimer);
            cardAutoplayTimer = null;
        }
    }

    function resumeCardAutoplay() {
        startCardAutoplay();
    }

    // Auto-start continuous carousel when page loads
    window.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            startCardAutoplay();
        }, 1000);
    });

    // 5. Digital Prescription Steps 1, 2, 3, 4 Active State
    function activateStep(stepNum) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;

        for (let s = 1; s <= 4; s++) {
            const bg = svgDoc.getElementById('step_bg_' + s);
            const num = svgDoc.getElementById('step_num_' + s);
            if (s === stepNum) {
                if (bg) bg.setAttribute('fill', '#00A746');
                if (num) num.setAttribute('fill', 'white');
            } else {
                if (bg) bg.setAttribute('fill', '#E6F6ED');
                if (num) num.setAttribute('fill', '#007D35');
            }
        }
    }

    function resetStep() {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;
        // Default: Step 1 is active in design
        for (let s = 1; s <= 4; s++) {
            const bg = svgDoc.getElementById('step_bg_' + s);
            const num = svgDoc.getElementById('step_num_' + s);
            if (s === 1) {
                if (bg) bg.setAttribute('fill', '#00A746');
                if (num) num.setAttribute('fill', 'white');
            } else {
                if (bg) bg.setAttribute('fill', '#E6F6ED');
                if (num) num.setAttribute('fill', '#007D35');
            }
        }
    }

    // 6. Service Reliability Accordion Toggle
    function toggleFaqAccordion(index) {
        showFaqModal(index);
    }

    function showFaqModal(index) {
        if (faqsData && faqsData[index]) {
            document.getElementById('faqModalTitle').innerText = faqsData[index].question;
            document.getElementById('faqModalAnswer').innerText = faqsData[index].answer;
            document.getElementById('faqModal').classList.remove('hidden');
        }
    }

    // 7. Appointment Booking Modal
    function openBooking(serviceName) {
        const modal = document.getElementById('appointmentModal');
        const input = document.getElementById('modalServiceInput');
        if (input && serviceName) input.value = serviceName;
        if (modal) modal.classList.remove('hidden');
    }

    // 8. Video Real-time 360° Progress Border Controller
    const video = document.getElementById('homeolyGuideVideo');
    const overlay = document.getElementById('videoPlayOverlay');
    const stroke = document.getElementById('videoProgressStroke');

    function toggleGuideVideo() {
        if (!video) return;
        if (video.paused) {
            playGuideVideo();
        } else {
            pauseGuideVideo();
        }
    }

    function playGuideVideo() {
        if (!video) return;
        video.play();
        if (overlay) overlay.classList.add('opacity-0', 'pointer-events-none');
    }

    function pauseGuideVideo() {
        if (!video) return;
        video.pause();
        if (overlay) overlay.classList.remove('opacity-0', 'pointer-events-none');
    }

    if (video) {
        video.addEventListener('click', toggleGuideVideo);

        video.addEventListener('timeupdate', function () {
            if (video.duration && stroke) {
                const progressRatio = video.currentTime / video.duration;
                const offset = Math.max(0, 100 - (progressRatio * 100));
                stroke.style.strokeDashoffset = offset;
            }
        });

        video.addEventListener('ended', function () {
            if (stroke) stroke.style.strokeDashoffset = 0;
            setTimeout(function () {
                if (overlay) overlay.classList.remove('opacity-0', 'pointer-events-none');
                if (stroke) stroke.style.strokeDashoffset = 100;
                video.currentTime = 0;
            }, 1000);
        });

        video.addEventListener('pause', function () {
            if (!video.ended) {
                if (overlay) overlay.classList.remove('opacity-0', 'pointer-events-none');
            }
        });

        video.addEventListener('play', function () {
            if (overlay) overlay.classList.add('opacity-0', 'pointer-events-none');
        });
    }
</script>
@endsection
