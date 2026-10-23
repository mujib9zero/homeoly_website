<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Homeoly - Modern Homeopathic Healthcare from Home')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#00A746',
                        'primary-dark': '#008b39',
                        'primary-light': '#E6F6ED',
                        'brand-accent': '#20CB68',
                        'text-dark': '#152934',
                        'text-muted': '#5D6467',
                    },
                    fontFamily: {
                        sans: ['Hind Siliguri', 'Segoe UI', 'Roboto', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { font-family: 'Hind Siliguri', sans-serif; margin: 0; padding: 0; background-color: #FFFFFF; }
        .pixel-perfect-section { width: 100%; max-width: 1204px; margin-left: auto; margin-right: auto; }
        .pixel-perfect-section img { width: 100%; height: auto; display: block; }

        /* SVG Video Progress Border Styles */
        .video-progress-border {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 20;
        }

        .video-progress-border rect {
            fill: none;
            stroke: #00A746;
            stroke-width: 4;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            transition: stroke-dashoffset 0.1s linear;
        }

        /* Mouse Scroll Floating Animation */
        @keyframes mouseFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(6px); }
        }

        .mouse-scroll-indicator {
            animation: mouseFloat 2s ease-in-out infinite;
        }

        /* Active Green Hover glow for touchpoints */
        .hover-glow:hover {
            box-shadow: 0 0 15px rgba(0, 167, 70, 0.45);
        }
    </style>
</head>
<body class="bg-white text-text-dark antialiased flex flex-col min-h-screen">

    <!-- Main Content Area: 100% Exact Artboard from app landing page.svg -->
    <main class="flex-grow w-full bg-white flex justify-center">
        @yield('content')
    </main>

</body>
</html>
