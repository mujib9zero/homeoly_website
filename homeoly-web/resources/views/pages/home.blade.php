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

        <!-- 9. Doctor Dashboard Section Feature Icons Hotspots (Image has no click action) -->
        <div class="absolute top-[34.9%] left-[61.18%] w-[4.43%] h-[1.01%] rounded-xl cursor-pointer z-30" onmouseenter="setDocIconHover(1, true)" onmouseleave="setDocIconHover(1, false)" title="Live Doctor Monitoring"></div>
        <div class="absolute top-[37.4%] left-[61.18%] w-[4.43%] h-[1.01%] rounded-xl cursor-pointer z-30" onmouseenter="setDocIconHover(2, true)" onmouseleave="setDocIconHover(2, false)" title="Patient Scheduling & Management"></div>
        <div class="absolute top-[39.9%] left-[61.18%] w-[4.43%] h-[1.01%] rounded-xl cursor-pointer z-30" onmouseenter="setDocIconHover(3, true)" onmouseleave="setDocIconHover(3, false)" title="Instant Digital Prescription"></div>

        <!-- 10. Digital Prescription Interactive Steps (1, 2, 3, 4) with Hover Highlights (No white background or glow) -->
        <div class="absolute top-[50.4%] left-[25.2%] w-[5.5%] h-[1.3%] rounded-2xl cursor-pointer z-30" onmouseenter="activateStep(1)" onmouseleave="resetStep()" onclick="activateStep(1); openBooking('Step 1: Patient Health History')" title="Step 1"></div>
        <div class="absolute top-[50.4%] right-[25.5%] w-[5.5%] h-[1.3%] rounded-2xl cursor-pointer z-30" onmouseenter="activateStep(2)" onmouseleave="resetStep()" onclick="activateStep(2); openBooking('Step 2: Doctor Consultation')" title="Step 2"></div>
        <div class="absolute top-[55.25%] left-[25.2%] w-[5.5%] h-[1.3%] rounded-2xl cursor-pointer z-30" onmouseenter="activateStep(3)" onmouseleave="resetStep()" onclick="activateStep(3); openBooking('Step 3: Digital Prescription Delivery')" title="Step 3"></div>
        <div class="absolute top-[55.25%] right-[25.5%] w-[5.5%] h-[1.3%] rounded-2xl cursor-pointer z-30" onmouseenter="activateStep(4)" onmouseleave="resetStep()" onclick="activateStep(4); openBooking('Step 4: Medicine Home Delivery')" title="Step 4"></div>

        <!-- 11. "Download App Manual" Button -->
        <a href="{{ asset('assets/Homeoly_User_Manual.pdf') }}" target="_blank" download="Homeoly_App_Manual.pdf" title="Download App Manual" class="absolute top-[66.07%] left-[6.64%] w-[21.68%] h-[1.06%] rounded-xl cursor-pointer hover:opacity-90 transition z-30"></a>

        <!-- 12. REAL-TIME SYNCHRONIZED 360° VIDEO PLAYER COMPONENT -->
        <div id="guide-video-player" class="absolute top-[61.53%] left-[58.39%] w-[34.80%] h-[6.85%] select-none z-30">
            <div class="relative w-full h-full rounded-[10px] overflow-hidden bg-black shadow-lg">
                <!-- SVG Animated Border Stroke (Runs 360° with video, pauses when paused, completes on end) -->
                <svg class="video-progress-border" viewBox="0 0 419 362" preserveAspectRatio="none">
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

        <!-- 13. FAQ Arrow Hotspots (Only the arrow icons are clickable) -->
        <div id="faq_hotspot_0" class="absolute top-[74.90%] left-[88.77%] w-[3.65%] h-[0.68%] cursor-pointer z-30 transition-all duration-300" onclick="toggleFaqAccordion(0)" title="FAQ Item 1 Arrow"></div>
        <div id="faq_hotspot_1" class="absolute top-[78.62%] left-[88.80%] w-[3.65%] h-[0.68%] cursor-pointer z-30 transition-all duration-300" onclick="toggleFaqAccordion(1)" title="FAQ Item 2 Arrow"></div>
        <div id="faq_hotspot_2" class="absolute top-[79.77%] left-[88.80%] w-[3.65%] h-[0.68%] cursor-pointer z-30 transition-all duration-300" onclick="toggleFaqAccordion(2)" title="FAQ Item 3 Arrow"></div>
        <div id="faq_hotspot_3" class="absolute top-[81.59%] left-[88.66%] w-[3.65%] h-[0.68%] cursor-pointer z-30 transition-all duration-300" onclick="toggleFaqAccordion(3)" title="FAQ Item 4 Arrow"></div>
        <div id="faq_hotspot_4" class="absolute top-[82.73%] left-[88.66%] w-[3.65%] h-[0.68%] cursor-pointer z-30 transition-all duration-300" onclick="toggleFaqAccordion(4)" title="FAQ Item 5 Arrow"></div>

        <!-- 14. Download App Links (Google Play & App Store) -->
        <div id="download-section" class="absolute top-[91.42%] left-[6.67%] w-[32%] h-[1.25%] z-20 pointer-events-none"></div>
        <a href="https://play.google.com/store/apps" target="_blank" title="Download on Google Play"
           onmouseenter="setDownloadBtnHover('google_play', true)"
           onmouseleave="setDownloadBtnHover('google_play', false)"
           class="absolute top-[91.42%] left-[6.67%] w-[14.83%] h-[1.23%] rounded-xl transition-all duration-300 z-30 cursor-pointer"></a>
        <a href="https://www.apple.com/app-store/" target="_blank" title="Download on App Store"
           onmouseenter="setDownloadBtnHover('app_store', true)"
           onmouseleave="setDownloadBtnHover('app_store', false)"
           class="absolute top-[91.41%] left-[23.17%] w-[14.83%] h-[1.23%] rounded-xl transition-all duration-300 z-30 cursor-pointer"></a>

        <!-- 15. Footer Social Icons (Direct platform links with interactive hover) -->
        <a href="https://facebook.com/homeoly" target="_blank" title="Facebook"
           onmouseenter="setSocialIconHover('fb', true)"
           onmouseleave="setSocialIconHover('fb', false)"
           class="absolute top-[96.97%] left-[6.87%] w-[3.33%] h-[0.76%] rounded-xl transition-all duration-300 z-30 cursor-pointer"></a>
        <a href="https://instagram.com/homeoly" target="_blank" title="Instagram"
           onmouseenter="setSocialIconHover('insta', true)"
           onmouseleave="setSocialIconHover('insta', false)"
           class="absolute top-[96.97%] left-[11.46%] w-[3.33%] h-[0.76%] rounded-xl transition-all duration-300 z-30 cursor-pointer"></a>
        <a href="https://twitter.com/homeoly" target="_blank" title="Twitter / X"
           onmouseenter="setSocialIconHover('twitter', true)"
           onmouseleave="setSocialIconHover('twitter', false)"
           class="absolute top-[96.97%] left-[16.04%] w-[3.33%] h-[0.76%] rounded-xl transition-all duration-300 z-30 cursor-pointer"></a>
        <a href="https://linkedin.com/company/homeoly" target="_blank" title="LinkedIn"
           onmouseenter="setSocialIconHover('linkedin', true)"
           onmouseleave="setSocialIconHover('linkedin', false)"
           class="absolute top-[96.97%] left-[20.62%] w-[3.33%] h-[0.76%] rounded-xl transition-all duration-300 z-30 cursor-pointer"></a>

        <!-- 16. Footer Newsletter Subscription Form -->
        <form action="{{ route('newsletter.subscribe') }}" method="POST"
              class="absolute top-[97.18%] left-[78.33%] w-[15.13%] h-[0.76%] z-30 flex items-center">
            @csrf
            <input type="email" name="email" id="footerNewsletterEmail" required
                   placeholder="Email address"
                   onfocus="handleNewsletterFocus(true)"
                   onblur="handleNewsletterFocus(false)"
                   oninput="handleNewsletterInput(this.value)"
                   class="w-[82%] h-full pl-3 pr-2 rounded-l-md bg-transparent text-[11px] sm:text-xs text-text-dark placeholder:text-transparent outline-none border-none font-medium z-30">
            <button type="submit" id="footerNewsletterSubmitBtn" title="Subscribe"
                    onmouseenter="setNewsletterBtnHover(true)"
                    onmouseleave="setNewsletterBtnHover(false)"
                    class="w-[18%] h-full flex items-center justify-center opacity-0 cursor-pointer z-30">
                <span class="sr-only">Subscribe</span>
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

            // Slot 1 is the currently ACTIVE card in the carousel:
            // Applies exact design from active card.svg (fill: #D9F2E3 and filter: active_card_filter)
            if (cardBg) {
                if (currentSlot === 1) {
                    cardBg.setAttribute('fill', '#D9F2E3');
                    cardBg.setAttribute('filter', 'url(#active_card_filter)');
                } else {
                    cardBg.setAttribute('fill', '#F9F9F9');
                    cardBg.removeAttribute('filter');
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
                        cardBg.setAttribute('filter', 'url(#active_card_filter)');
                    } else {
                        // Return to normal (Slot 1 remains active green with active filter, others normal #F9F9F9)
                        if (currentSlot === 1) {
                            cardBg.setAttribute('fill', '#D9F2E3');
                            cardBg.setAttribute('filter', 'url(#active_card_filter)');
                        } else {
                            cardBg.setAttribute('fill', '#F9F9F9');
                            cardBg.removeAttribute('filter');
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

    // 5. Doctor Dashboard Feature Icons Hover (Color transition only, no displacement/movement)
    function setDocIconHover(iconIndex, isHover) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;
        const iconGroup = svgDoc.getElementById('doc_feature_icon_' + iconIndex);
        if (!iconGroup) return;

        const rect = iconGroup.querySelector('rect');
        const paths = iconGroup.querySelectorAll('path');

        if (isHover) {
            if (rect) rect.setAttribute('fill', '#00A746');
            paths.forEach(p => p.setAttribute('fill', '#FFFFFF'));
        } else {
            if (rect) rect.setAttribute('fill', '#E6F6ED');
            paths.forEach(p => p.setAttribute('fill', '#00A746'));
        }
    }
    // 6. Digital Prescription Steps 1, 2, 3, 4 Hover Actions
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
        // Default: All steps are in normal un-hovered state (#E6F6ED, num #007D35)
        for (let s = 1; s <= 4; s++) {
            const bg = svgDoc.getElementById('step_bg_' + s);
            const num = svgDoc.getElementById('step_num_' + s);
            if (bg) bg.setAttribute('fill', '#E6F6ED');
            if (num) num.setAttribute('fill', '#007D35');
        }
    }

    // 6. Service Reliability Accordion In-Place Multi-Expand Toggle
    // User Requirements:
    // 1) By default, ALL answers are collapsed (closed).
    // 2) Multi-expand: multiple items can be opened simultaneously without overflow or colliding.
    // 3) Section 2 headline ("প্রেসক্রিপশন সম্পর্কিত প্রশ্ন") on left and Section 2 Question 1 ("প্রেসক্রিপশন কতদিন এপে সংরক্ষিত থাকবে?") on right MUST ALWAYS remain horizontally aligned across all states.
    // 4) Arrows are the only clickable element (no popup modal).

    let faqOpen = [false, false, false, false, false];

    const FAQ_ARROW_CENTERS = [
        { cx: 1090.82, cy: 3977.28 },
        { cx: 1091.16, cy: 4174.08 },
        { cx: 1091.16, cy: 4234.39 },
        { cx: 1089.41, cy: 4330.73 },
        { cx: 1089.41, cy: 4391.06 }
    ];

    // Base top percentages in the Figma SVG coordinate space (when deltaY = 0)
    const FAQ_HOTSPOT_BASE_TOPS = [
        74.90, // Item 0 (fixed in place)
        78.62, // Item 1
        79.77, // Item 2
        81.59, // Item 3
        82.73  // Item 4
    ];
    const SVG_TOTAL_HEIGHT = 5286;

    function toggleFaqAccordion(index) {
        faqOpen[index] = !faqOpen[index];
        updateFaqSvgState();
    }

    function updateFaqSvgState() {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;

        // 1. Toggle display and opacity of all 5 answer panels
        for (let i = 0; i < 5; i++) {
            const ans = svgDoc.getElementById('faq_answer_' + i);
            if (!ans) continue;

            if (faqOpen[i]) {
                ans.style.display = '';
                ans.style.opacity = '1';
            } else {
                ans.style.display = 'none';
                ans.style.opacity = '0';
            }
        }

        // 2. Multi-expand vertical translation math
        // In the original SVG geometry:
        // - Item 0 was drawn open (+136px space reserved).
        // - Items 1..4 were drawn closed (0px space reserved).
        //
        // dy_1: below item 0. If item 0 is open, dy=0. If closed, dy = -136.
        const dy_1 = (faqOpen[0] ? 0 : -136);

        // dy_2: below item 0 and item 1.
        const dy_2 = dy_1 + (faqOpen[1] ? 136 : 0);

        // Section 2 starts below item 0, item 1, and item 2:
        // Both Section 2 Headline on left (faq_prescription_title) AND Question 3 on right (faq_item_group_3)
        // MUST shift by the EXACT SAME dy_section2 so they remain strictly horizontal and never misalign.
        const dy_section2 = dy_2 + (faqOpen[2] ? 136 : 0);
        const dy_prescription_title = dy_section2;
        const dy_3 = dy_section2;

        // dy_4: below item 3.
        const dy_4 = dy_section2 + (faqOpen[3] ? 136 : 0);

        // dy_footer: below all items.
        const dy_footer = dy_4 + (faqOpen[4] ? 136 : 0);

        // Apply SVG translations
        const elGroup1 = svgDoc.getElementById('faq_item_group_1');
        const elGroup2 = svgDoc.getElementById('faq_item_group_2');
        const elPrescriptionTitle = svgDoc.getElementById('faq_prescription_title');
        const elGroup3 = svgDoc.getElementById('faq_item_group_3');
        const elGroup4 = svgDoc.getElementById('faq_item_group_4');
        const elFooter = svgDoc.getElementById('faq_footer_group');

        if (elGroup1) elGroup1.style.transform = `translate(0, ${dy_1}px)`;
        if (elGroup2) elGroup2.style.transform = `translate(0, ${dy_2}px)`;
        if (elPrescriptionTitle) elPrescriptionTitle.style.transform = `translate(0, ${dy_prescription_title}px)`;
        if (elGroup3) elGroup3.style.transform = `translate(0, ${dy_3}px)`;
        if (elGroup4) elGroup4.style.transform = `translate(0, ${dy_4}px)`;
        if (elFooter) elFooter.style.transform = `translate(0, ${dy_footer}px)`;

        // 3. Update overlay hotspot positions so the clickable arrow areas follow their corresponding questions
        const dyMap = [0, dy_1, dy_2, dy_3, dy_4];
        for (let i = 0; i < 5; i++) {
            const hotspot = document.getElementById('faq_hotspot_' + i);
            if (hotspot) {
                const shiftPercent = (dyMap[i] / SVG_TOTAL_HEIGHT) * 100;
                const newTop = FAQ_HOTSPOT_BASE_TOPS[i] + shiftPercent;
                hotspot.style.top = `${newTop.toFixed(3)}%`;
            }
        }

        // 4. Update arrow orientations:
        // Arrow 0 in SVG is drawn pointing UP (opened). When closed (!faqOpen[0]), rotate 180° to point DOWN.
        // Arrows 1..4 in SVG are drawn pointing DOWN (closed). When opened (faqOpen[i]), rotate 180° to point UP.
        for (let i = 0; i < 5; i++) {
            const arrow = svgDoc.getElementById('faq_arrow_' + i);
            if (!arrow) continue;

            const center = FAQ_ARROW_CENTERS[i];
            arrow.style.transition = 'transform 0.3s ease';

            if (i === 0) {
                if (faqOpen[0]) {
                    arrow.setAttribute('transform', '');
                } else {
                    arrow.setAttribute('transform', `rotate(180 ${center.cx} ${center.cy})`);
                }
            } else {
                if (faqOpen[i]) {
                    arrow.setAttribute('transform', `rotate(180 ${center.cx} ${center.cy})`);
                } else {
                    arrow.setAttribute('transform', '');
                }
            }
        }
    }

    // Call updateFaqSvgState as soon as SVG object loads
    function initFaqSvgState() {
        const svgObj = document.getElementById('landingSvgObject');
        if (svgObj) {
            if (svgObj.contentDocument && svgObj.contentDocument.getElementById('faq_arrow_0')) {
                updateFaqSvgState();
            } else {
                svgObj.addEventListener('load', () => {
                    updateFaqSvgState();
                });
            }
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFaqSvgState);
    } else {
        initFaqSvgState();
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

    // 9. Download Buttons Hover Handler
    function setDownloadBtnHover(type, isHover) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;
        const btnId = (type === 'google_play') ? 'btn_google_play_bg' : 'btn_app_store_bg';
        const rect = svgDoc.getElementById(btnId);
        if (rect) {
            rect.setAttribute('fill', isHover ? '#8DE0B1' : '#B0E4C6');
            rect.style.filter = isHover ? 'drop-shadow(0 4px 10px rgba(0, 167, 70, 0.35))' : '';
        }
    }

    // 10. Footer Social Media Icons Hover Handler
    function setSocialIconHover(platform, isHover) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;
        const iconIdMap = {
            'fb': 'social_fb_bg',
            'insta': 'social_insta_bg',
            'twitter': 'social_twitter_bg',
            'linkedin': 'social_linkedin_bg'
        };
        const rect = svgDoc.getElementById(iconIdMap[platform]);
        if (rect) {
            rect.setAttribute('fill', isHover ? '#00702F' : '#00A746');
            rect.style.transformOrigin = 'center';
            rect.style.filter = isHover ? 'drop-shadow(0 4px 8px rgba(0, 112, 47, 0.45))' : '';
        }
    }

    // 11. Footer Newsletter Input & Subscribe Button Handlers
    function handleNewsletterFocus(isFocused) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;
        const placeholder = svgDoc.getElementById('svg_newsletter_placeholder');
        const input = document.getElementById('footerNewsletterEmail');
        if (placeholder) {
            if (isFocused || (input && input.value.trim() !== '')) {
                placeholder.style.display = 'none';
            } else {
                placeholder.style.display = '';
            }
        }
    }

    function handleNewsletterInput(val) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;
        const placeholder = svgDoc.getElementById('svg_newsletter_placeholder');
        if (placeholder) {
            placeholder.style.display = (val && val.trim().length > 0) ? 'none' : '';
        }
    }

    function setNewsletterBtnHover(isHover) {
        const svgDoc = getSvgDoc();
        if (!svgDoc) return;
        const btnBg = svgDoc.getElementById('footer_newsletter_btn_bg');
        if (btnBg) {
            btnBg.setAttribute('fill', isHover ? '#00702F' : '#00A746');
            btnBg.style.filter = isHover ? 'drop-shadow(0 3px 6px rgba(0, 112, 47, 0.45))' : '';
        }
    }
</script>
@endsection
