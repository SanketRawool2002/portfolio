<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏴‍☠️ Captain Sanket Rawool - Pirate Developer</title>
    
    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.min.js"></script>
    
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pirata+One&family=Cinzel+Decorative:wght@400;700;900&family=Seaweed+Script&family=MedievalSharp&family=Special+Elite&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --pirate-gold: #ffd700;
            --treasure-bronze: #cd7f32;
            --ocean-blue: #1e90ff;
            --deep-sea: #191970;
            --ship-brown: #8b4513;
            --sail-white: #f5f5f5;
            --blood-red: #8b0000;
            --seaweed-green: #2e8b57;
            --pirate-black: #0a0a0a;
            --parchment: #f5e6ca;
            --old-paper: #e8d8b6;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Cpath fill='%23FFD700' d='M16 2C8.27 2 2 8.27 2 16s6.27 14 14 14 14-6.27 14-14S23.73 2 16 2zm0 2c6.627 0 12 5.373 12 12s-5.373 12-12 12S4 22.627 4 16 9.373 4 16 4z'/%3E%3Cpath fill='%238B4513' d='M16 6c-5.523 0-10 4.477-10 10s4.477 10 10 10 10-4.477 10-10-4.477-10-10-10zm0 2c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8z'/%3E%3Cpath fill='%23FF0000' d='M16 10c-3.314 0-6 2.686-6 6s2.686 6 6 6 6-2.686 6-6-2.686-6-6-6z'/%3E%3C/svg%3E"), auto;
        }
        
        body {
            font-family: 'Cinzel Decorative', cursive;
            background: linear-gradient(180deg, var(--deep-sea) 0%, #000 100%);
            color: var(--parchment);
            overflow-x: hidden;
            min-height: 100vh;
        }
        
        /* Ocean Waves Background */
        .ocean-waves {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(180deg, transparent 60%, rgba(30, 144, 255, 0.2) 100%),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%231E90FF"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%231E90FF"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%231E90FF"/></svg>');
            background-size: 100% 200px;
            background-position: bottom;
            background-repeat: repeat-x;
            animation: waves 20s linear infinite;
            z-index: -3;
            pointer-events: none;
        }
        
        @keyframes waves {
            0% { background-position: 0 bottom; }
            100% { background-position: 1000px bottom; }
        }
        
        /* Flying Seagulls */
        .seagull {
            position: absolute;
            font-size: 2rem;
            color: white;
            animation: fly 15s linear infinite;
            z-index: -1;
        }
        
        @keyframes fly {
            0% { transform: translateX(-100px) translateY(0px); }
            100% { transform: translateX(calc(100vw + 100px)) translateY(calc(50px * var(--i))); }
        }
        
        /* Treasure Map Overlay */
        .map-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" opacity="0.1"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="%238B4513" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            z-index: -2;
            opacity: 0.2;
        }
        
        /* Pirate Navigation */
        .pirate-nav {
            background: rgba(139, 69, 19, 0.9);
            border-bottom: 5px solid var(--pirate-gold);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }
        
        .nav-brand {
            font-family: 'Pirata One', cursive;
            font-size: 2.5rem;
            color: var(--pirate-gold);
            text-shadow: 3px 3px 0 var(--blood-red);
            letter-spacing: 2px;
        }
        
        .nav-brand small {
            font-family: 'Seaweed Script', cursive;
            font-size: 1rem;
            color: var(--sail-white);
            text-shadow: 1px 1px 0 #000;
        }
        
        .nav-compass {
            width: 40px;
            height: 40px;
            background: var(--pirate-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid var(--ship-brown);
            animation: spin 20s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .nav-link {
            color: var(--parchment) !important;
            font-family: 'MedievalSharp', cursive;
            font-weight: bold;
            margin: 0 1rem;
            position: relative;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            color: var(--pirate-gold) !important;
            transform: scale(1.1);
        }
        
        .nav-link::after {
            content: '⚓';
            position: absolute;
            right: -20px;
            opacity: 0;
            transition: all 0.3s;
        }
        
        .nav-link:hover::after {
            opacity: 1;
            right: -15px;
        }
        
        /* Hero Section - Pirate Ship */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding-top: 100px;
            overflow: hidden;
        }
        
        .ship-container {
            position: absolute;
            right: 10%;
            top: 20%;
            width: 40%;
            height: 300px;
            z-index: -1;
        }
        
        @media (max-width: 768px) {
            .ship-container {
                position: relative;
                width: 100%;
                right: 0;
                top: 0;
                height: 200px;
                margin-bottom: 2rem;
            }
        }
        
        .hero-title {
            font-family: 'Pirata One', cursive;
            font-size: 5rem;
            color: var(--pirate-gold);
            text-shadow: 
                4px 4px 0 var(--blood-red),
                8px 8px 0 rgba(0, 0, 0, 0.5);
            line-height: 1;
            margin-bottom: 1rem;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .hero-subtitle {
            font-family: 'Seaweed Script', cursive;
            font-size: 2rem;
            color: var(--sail-white);
            margin-bottom: 2rem;
        }
        
        .pirate-tag {
            display: inline-block;
            background: var(--blood-red);
            color: var(--pirate-gold);
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-family: 'MedievalSharp', cursive;
            margin-right: 1rem;
            margin-bottom: 1rem;
            border: 2px solid var(--pirate-gold);
            box-shadow: 3px 3px 0 var(--ship-brown);
            transition: all 0.3s;
        }
        
        .pirate-tag:hover {
            transform: translateY(-5px);
            box-shadow: 5px 5px 0 var(--ship-brown);
        }
        
        /* Treasure Chest Card */
        .treasure-card {
            background: 
                linear-gradient(135deg, var(--old-paper) 0%, var(--parchment) 100%),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path fill="%238B4513" opacity="0.1" d="M20,20 Q50,5 80,20 L80,80 Q50,95 20,80 Z"/></svg>');
            border: 15px solid transparent;
            border-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"><rect width="100" height="100" fill="none" stroke="%238B4513" stroke-width="10"/></svg>') 30 stretch;
            border-radius: 20px;
            padding: 2rem;
            color: var(--pirate-black);
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 10px 30px rgba(0, 0, 0, 0.5),
                inset 0 0 50px rgba(205, 127, 50, 0.2);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .treasure-card:hover {
            transform: translateY(-20px) rotate(1deg);
            box-shadow: 
                0 20px 50px rgba(0, 0, 0, 0.7),
                inset 0 0 100px rgba(255, 215, 0, 0.3);
        }
        
        .treasure-card::before {
            content: '✧';
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 2rem;
            color: var(--pirate-gold);
            animation: sparkle 2s infinite;
        }
        
        @keyframes sparkle {
            0%, 100% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
        }
        
        /* Skill Bars - Treasure Maps */
        .skill-map {
            background: var(--old-paper);
            border: 5px solid var(--ship-brown);
            border-radius: 10px;
            padding: 1rem;
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .skill-map::before {
            content: '🗺️';
            position: absolute;
            left: -10px;
            top: -10px;
            background: var(--pirate-gold);
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--ship-brown);
        }
        
        .skill-progress {
            height: 20px;
            background: linear-gradient(90deg, var(--treasure-bronze), var(--pirate-gold));
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }
        
        .skill-progress::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(255, 255, 255, 0.4) 50%, 
                transparent 100%);
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        /* Pirate Flag Section Headers */
        .section-flag {
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
        }
        
        .section-flag h2 {
            font-family: 'Pirata One', cursive;
            font-size: 3rem;
            color: var(--pirate-gold);
            text-shadow: 2px 2px 0 var(--blood-red);
            padding: 0 2rem;
            background: var(--blood-red);
            clip-path: polygon(0% 0%, 85% 0%, 100% 50%, 85% 100%, 0% 100%);
        }
        
        /* Treasure Timeline */
        .timeline {
            position: relative;
            padding-left: 50px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 5px;
            background: linear-gradient(to bottom, var(--pirate-gold), var(--treasure-bronze));
            border-radius: 5px;
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
            padding-left: 30px;
        }
        
        .timeline-item::before {
            content: '⚓';
            position: absolute;
            left: -20px;
            top: 0;
            font-size: 2rem;
            background: var(--blood-red);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid var(--pirate-gold);
        }
        
        /* Pirate Ship Progress */
        .ship-progress {
            width: 100%;
            height: 150px;
            position: relative;
            margin: 2rem 0;
        }
        
        .ship-body {
            width: 100%;
            height: 40px;
            background: var(--ship-brown);
            border-radius: 20px 20px 0 0;
            position: absolute;
            bottom: 0;
            overflow: hidden;
        }
        
        .ship-mast {
            width: 10px;
            height: 100px;
            background: var(--ship-brown);
            position: absolute;
            left: 50%;
            bottom: 40px;
            transform: translateX(-50%);
        }
        
        .ship-sail {
            width: 80px;
            height: 60px;
            background: var(--sail-white);
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            clip-path: polygon(50% 0%, 100% 100%, 0% 100%);
            animation: sail 3s ease-in-out infinite;
        }
        
        @keyframes sail {
            0%, 100% { transform: translateX(-50%) rotate(5deg); }
            50% { transform: translateX(-50%) rotate(-5deg); }
        }
        
        /* Pirate Scroll */
        .pirate-scroll {
            background: linear-gradient(to bottom, var(--parchment) 0%, var(--old-paper) 100%);
            padding: 2rem;
            border-radius: 0 20px 20px 0;
            position: relative;
            color: var(--pirate-black);
            transform: perspective(1000px) rotateY(-5deg);
            box-shadow: -10px 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .pirate-scroll::before,
        .pirate-scroll::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 100%;
            background: var(--treasure-bronze);
            top: 0;
        }
        
        .pirate-scroll::before {
            left: -25px;
            border-radius: 20px 0 0 20px;
        }
        
        .pirate-scroll::after {
            right: -25px;
            border-radius: 0 20px 20px 0;
        }
        
        /* Pirate Button */
        .pirate-btn {
            background: linear-gradient(135deg, var(--pirate-gold), var(--treasure-bronze));
            color: var(--blood-red);
            border: 3px solid var(--ship-brown);
            padding: 1rem 2rem;
            font-family: 'MedievalSharp', cursive;
            font-weight: bold;
            font-size: 1.2rem;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
            box-shadow: 5px 5px 0 var(--blood-red);
        }
        
        .pirate-btn:hover {
            transform: translateY(-5px);
            box-shadow: 10px 10px 0 var(--blood-red);
            color: var(--pirate-black);
        }
        
        .pirate-btn::after {
            content: '⚔️';
            position: absolute;
            right: 10px;
            opacity: 0;
            transition: all 0.3s;
        }
        
        .pirate-btn:hover::after {
            opacity: 1;
            right: 20px;
        }
        
        /* Treasure Footer */
        .treasure-footer {
            background: linear-gradient(180deg, var(--ship-brown), var(--pirate-black));
            border-top: 10px solid var(--pirate-gold);
            padding: 3rem 0;
            margin-top: 5rem;
            position: relative;
        }
        
        .treasure-footer::before {
            content: '🏴‍☠️';
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 3rem;
            background: var(--blood-red);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 5px solid var(--pirate-gold);
        }
        
        /* 3D Treasure Chest */
        #treasure-3d {
            width: 300px;
            height: 300px;
            margin: 0 auto;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .hero-subtitle {
                font-size: 1.5rem;
            }
            
            .section-flag h2 {
                font-size: 2rem;
            }
            
            .pirate-nav {
                padding: 0.5rem 0;
            }
            
            .nav-brand {
                font-size: 1.8rem;
            }
            
            .treasure-card {
                margin: 1rem;
            }
            
            .pirate-scroll {
                transform: none;
                margin: 1rem;
            }
        }
        
        /* Parrot Animation */
        .parrot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background: var(--seaweed-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            z-index: 1000;
            animation: parrotSwing 3s ease-in-out infinite;
            cursor: pointer;
            border: 3px solid var(--pirate-gold);
        }
        
        @keyframes parrotSwing {
            0%, 100% { transform: rotate(-10deg); }
            50% { transform: rotate(10deg); }
        }
        
        /* Treasure Sparkles */
        .sparkle {
            position: absolute;
            width: 10px;
            height: 10px;
            background: var(--pirate-gold);
            border-radius: 50%;
            animation: sparkleFly 2s linear infinite;
        }
        
        @keyframes sparkleFly {
            0% { transform: translateY(0) rotate(0deg); opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }
        
        /* Compass Navigation */
        .compass-nav {
            position: fixed;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
        }
        
        .compass {
            width: 80px;
            height: 80px;
            background: radial-gradient(circle, var(--parchment), var(--old-paper));
            border-radius: 50%;
            border: 5px solid var(--ship-brown);
            position: relative;
        }
        
        .compass-pointer {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 60%;
            height: 4px;
            background: var(--blood-red);
            transform-origin: left center;
            transition: transform 0.3s;
        }
        
        @media (max-width: 768px) {
            .compass-nav {
                display: none;
            }
            .parrot {
                bottom: 70px;
            }
        }
    </style>
</head>
<body>
    <!-- Ocean Background -->
    <div class="ocean-waves"></div>
    <div class="map-overlay"></div>
    
    <!-- Flying Seagulls -->
    <div class="seagull" style="--i:0; top: 10%;">🦅</div>
    <div class="seagull" style="--i:1; top: 30%;">🦅</div>
    <div class="seagull" style="--i:2; top: 50%;">🦅</div>
    <div class="seagull" style="--i:3; top: 70%;">🦅</div>
    
    <!-- Parrot Companion -->
    <div class="parrot" onclick="parrotSpeak()">🦜</div>
    
    <!-- Compass Navigation -->
    <div class="compass-nav">
        <div class="compass" id="compass">
            <div class="compass-pointer" id="compassPointer"></div>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="pirate-nav navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand nav-brand" href="#">
                Captain Sanket Rawool
                <small>The Code Corsair</small>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pirateNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);">⚓</span>
            </button>
            
            <div class="collapse navbar-collapse" id="pirateNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">🏠 Home Port</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#treasure">💎 Treasure Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#voyage">🗺️ Voyage Log</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#crew">👥 Crew & Contacts</a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-compass">🧭</div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Sanket Rawool</h1>
                    <h2 class="hero-subtitle">Full Stack Pirate Developer</h2>
                    
                    <div class="mb-4">
                        <span class="pirate-tag">📍 Mumbai Port</span>
                        <span class="pirate-tag">📞 9967911477</span>
                        <span class="pirate-tag">📧 sankyraul1989@gmail.com</span>
                    </div>
                    
                    <p class="lead mb-4">
                        Ahoy! I be Captain Sanket Rawool, a pirate of the digital seas. 
                        I plunder code treasures and navigate through stormy servers. 
                        My ship be loaded with web technologies and my maps lead to 
                        the X that marks scalable solutions!
                    </p>
                    
                    <div>
                        <button class="pirate-btn me-3" onclick="setSail()">
                            ⚓ Set Sail With Me
                        </button>
                        <button class="pirate-btn" onclick="viewTreasure()">
                            💰 View My Treasure
                        </button>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="ship-container" id="pirateShip3D"></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Treasure Skills -->
    <section id="treasure" class="py-5">
        <div class="container">
            <div class="section-flag text-center mb-5">
                <h2>MY TREASURE CHEST</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="treasure-card">
                        <h3 class="mb-4">🏴‍☠️ Frontend Booty</h3>
                        
                        <div class="skill-map">
                            <div class="d-flex justify-content-between mb-2">
                                <span>HTML5 / CSS3 Cutlass</span>
                                <span>95%</span>
                            </div>
                            <div class="skill-progress" style="width: 95%"></div>
                        </div>
                        
                        <div class="skill-map">
                            <div class="d-flex justify-content-between mb-2">
                                <span>JavaScript Jolly Roger</span>
                                <span>88%</span>
                            </div>
                            <div class="skill-progress" style="width: 88%"></div>
                        </div>
                        
                        <div class="skill-map">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Bootstrap Brigantine</span>
                                <span>92%</span>
                            </div>
                            <div class="skill-progress" style="width: 92%"></div>
                        </div>
                        
                        <div class="skill-map">
                            <div class="d-flex justify-content-between mb-2">
                                <span>React Galleon</span>
                                <span>85%</span>
                            </div>
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="treasure-card">
                        <h3 class="mb-4">⚓ Backend Anchors</h3>
                        
                        <div class="skill-map">
                            <div class="d-flex justify-content-between mb-2">
                                <span>PHP Plunder</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                        
                        <div class="skill-map">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Laravel Longboat</span>
                                <span>85%</span>
                            </div>
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                        
                        <div class="skill-map">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Java Jig</span>
                                <span>78%</span>
                            </div>
                            <div class="skill-progress" style="width: 78%"></div>
                        </div>
                        
                        <div class="skill-map">
                            <div class="d-flex justify-content-between mb-2">
                                <span>API Islands</span>
                                <span>92%</span>
                            </div>
                            <div class="skill-progress" style="width: 92%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Ship Progress -->
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="treasure-card">
                        <h3 class="text-center mb-4">🏴‍☠️ My Ship's Progress</h3>
                        <div class="ship-progress">
                            <div class="ship-mast"></div>
                            <div class="ship-sail"></div>
                            <div class="ship-body"></div>
                        </div>
                        
                        <div class="row text-center mt-4">
                            <div class="col-md-3">
                                <div class="display-4 text-gold">95%</div>
                                <div>Frontend</div>
                            </div>
                            <div class="col-md-3">
                                <div class="display-4 text-gold">88%</div>
                                <div>Backend</div>
                            </div>
                            <div class="col-md-3">
                                <div class="display-4 text-gold">92%</div>
                                <div>Database</div>
                            </div>
                            <div class="col-md-3">
                                <div class="display-4 text-gold">90%</div>
                                <div>Deployment</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Voyage Log (Experience) -->
    <section id="voyage" class="py-5" style="background: rgba(30, 144, 255, 0.1);">
        <div class="container">
            <div class="section-flag text-center mb-5">
                <h2>VOYAGE LOG</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="treasure-card">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div>
                                        <h3 class="text-gold">First Mate Web Developer</h3>
                                        <h4 class="text-bronze">ISBM Organization — Mumbai Port</h4>
                                    </div>
                                    <span class="pirate-tag">April 2024 – Present</span>
                                </div>
                                
                                <div class="pirate-scroll">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">🏴‍☠️ Plundered Bootstrap, JavaScript, jQuery, and PHP treasures</li>
                                        <li class="mb-2">⚓ Navigated React and Laravel seas with API integration</li>
                                        <li class="mb-2">🗺️ Charted WhatsApp chat integration for University Lead Management</li>
                                        <li class="mb-2">🏰 Defended ERP/LMS systems from bugs and implemented new features</li>
                                        <li class="mb-2">⚡ Mastered live server deployments and domain configurations</li>
                                        <li class="mb-2">🤖 Integrated Telegram notifications and WhatsApp bot automation</li>
                                        <li>⚔️ Developed Task Management Web Application with advanced features</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Treasure Map Projects -->
            <div class="row mt-5">
                <div class="col-lg-6 mb-4">
                    <div class="treasure-card h-100">
                        <h3 class="mb-4">🗺️ Academic Treasure Hunt</h3>
                        <h4 class="text-gold">Complaint Management System</h4>
                        <p class="mt-3">Charted a web-based complaint management system using HTML, CSS, JavaScript, PHP to navigate complaint registration seas.</p>
                        
                        <div class="mt-4">
                            <span class="pirate-tag small">HTML5</span>
                            <span class="pirate-tag small">CSS3</span>
                            <span class="pirate-tag small">JavaScript</span>
                            <span class="pirate-tag small">PHP</span>
                            <span class="pirate-tag small">MySQL</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="treasure-card h-100">
                        <h3 class="mb-4">🎓 Navigation School</h3>
                        
                        <div class="mb-4">
                            <h5 class="text-gold">Bachelor of Science in Information Technology</h5>
                            <div class="d-flex justify-content-between">
                                <span>Mumbai University — 2023</span>
                                <span class="text-bronze">CGPI: 8.92</span>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h5 class="text-gold">HSC (Class XII)</h5>
                            <div class="d-flex justify-content-between">
                                <span>Maharashtra Board — 2020</span>
                                <span class="text-bronze">62.46%</span>
                            </div>
                        </div>
                        
                        <div>
                            <h5 class="text-gold">SSC (Class X)</h5>
                            <div class="d-flex justify-content-between">
                                <span>Maharashtra Board — 2018</span>
                                <span class="text-bronze">84.80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Crew & Contacts -->
    <section id="crew" class="py-5">
        <div class="container">
            <div class="section-flag text-center mb-5">
                <h2>SHIP'S CREW & CONTACTS</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="treasure-card h-100">
                        <h3 class="mb-4">👤 Pirate Profile</h3>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-birthday-cake text-gold me-3"></i>
                                    <div>
                                        <small>Date of Birth</small>
                                        <div>06 December 2002</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user text-gold me-3"></i>
                                    <div>
                                        <small>Gender</small>
                                        <div>Male</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-heart text-gold me-3"></i>
                                    <div>
                                        <small>Marital Status</small>
                                        <div>Single</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker text-gold me-3"></i>
                                    <div>
                                        <small>Current Port</small>
                                        <div>Mumbai, Maharashtra</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <h5 class="mb-3">🏴‍☠️ Languages Spoken</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="pirate-tag small">English</span>
                                <span class="pirate-tag small">Hindi</span>
                                <span class="pirate-tag small">Marathi</span>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <h5 class="mb-3">🎭 Pirate Pastimes</h5>
                            <div class="row">
                                <div class="col-6 mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-book me-2 text-bronze"></i>
                                        <span>Reading Books</span>
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-plane me-2 text-bronze"></i>
                                        <span>Traveling</span>
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-baseball-ball me-2 text-bronze"></i>
                                        <span>Cricket</span>
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-paint-brush me-2 text-bronze"></i>
                                        <span>Drawing</span>
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-camera me-2 text-bronze"></i>
                                        <span>Photo Editing</span>
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-gamepad me-2 text-bronze"></i>
                                        <span>Gaming</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="treasure-card h-100">
                        <h3 class="mb-4">📨 Send Message in a Bottle</h3>
                        
                        <div class="pirate-scroll">
                            <div class="mb-3">
                                <label class="form-label">Your Name, Matey</label>
                                <input type="text" class="form-control pirate-input" placeholder="Enter your pirate name">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Message in a Bottle</label>
                                <textarea class="form-control pirate-input" rows="4" placeholder="Write your message here..."></textarea>
                            </div>
                            
                            <button class="pirate-btn w-100 mt-3" onclick="sendMessage()">
                                <i class="fas fa-paper-plane me-2"></i>Launch Bottle
                            </button>
                        </div>
                        
                        <div class="mt-5">
                            <h5 class="mb-3">⚓ Direct Contacts</h5>
                            <div class="d-flex flex-column gap-3">
                                <a href="tel:+919967911477" class="d-flex align-items-center text-decoration-none">
                                    <div class="pirate-tag small me-3">📞</div>
                                    <div>
                                        <small>Ship's Radio</small>
                                        <div>+91 9967911477</div>
                                    </div>
                                </a>
                                
                                <a href="mailto:sankyraul1989@gmail.com" class="d-flex align-items-center text-decoration-none">
                                    <div class="pirate-tag small me-3">📧</div>
                                    <div>
                                        <small>Message Bird</small>
                                        <div>sankyraul1989@gmail.com</div>
                                    </div>
                                </a>
                                
                                <div class="d-flex align-items-center">
                                    <div class="pirate-tag small me-3">📍</div>
                                    <div>
                                        <small>Home Port</small>
                                        <div>Mumbai, Maharashtra</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 3D Treasure Chest -->
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="treasure-card">
                        <h3 class="text-center mb-4">🎁 Interactive Treasure Chest</h3>
                        <div id="treasure-3d"></div>
                        <div class="text-center mt-3">
                            <button class="pirate-btn me-2" onclick="openChest()">Open Chest</button>
                            <button class="pirate-btn" onclick="spinChest()">Spin Treasure</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="treasure-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="nav-brand mb-3">Captain Sanket Rawool</h3>
                    <p>"Not all treasure is silver and gold, mate. Some treasure is in the code we write!"</p>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="d-flex justify-content-end gap-3 mb-3">
                        <a href="#" class="pirate-tag small"><i class="fab fa-github"></i></a>
                        <a href="#" class="pirate-tag small"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="pirate-tag small"><i class="fab fa-codepen"></i></a>
                        <a href="#" class="pirate-tag small"><i class="fab fa-dribbble"></i></a>
                    </div>
                    <p class="text-muted">© 2024 Pirate Portfolio | All treasure rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Main Pirate Script -->
    <script>
        // Create Sparkles
        function createSparkles() {
            for (let i = 0; i < 20; i++) {
                setTimeout(() => {
                    const sparkle = document.createElement('div');
                    sparkle.className = 'sparkle';
                    sparkle.style.left = Math.random() * 100 + 'vw';
                    sparkle.style.top = Math.random() * 100 + 'vh';
                    document.body.appendChild(sparkle);
                    
                    setTimeout(() => {
                        sparkle.remove();
                    }, 2000);
                }, i * 100);
            }
        }
        
        // Create more sparkles periodically
        setInterval(createSparkles, 3000);
        
        // 3D Pirate Ship
        let scene, camera, renderer, ship;
        
        function initPirateShip() {
            // Scene setup
            scene = new THREE.Scene();
            scene.background = null;
            
            // Camera setup
            camera = new THREE.PerspectiveCamera(75, 400/300, 0.1, 1000);
            camera.position.z = 5;
            
            // Renderer setup
            renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
            renderer.setSize(400, 300);
            document.getElementById('pirateShip3D').appendChild(renderer.domElement);
            
            // Lighting
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
            scene.add(ambientLight);
            
            const directionalLight = new THREE.DirectionalLight(0xffd700, 1);
            directionalLight.position.set(5, 5, 5);
            scene.add(directionalLight);
            
            // Create pirate ship
            createShip();
            
            // Animation
            function animate() {
                requestAnimationFrame(animate);
                
                if (ship) {
                    ship.rotation.y += 0.01;
                    ship.position.y = Math.sin(Date.now() * 0.001) * 0.2;
                }
                
                renderer.render(scene, camera);
            }
            
            animate();
            
            // Handle window resize
            window.addEventListener('resize', () => {
                camera.aspect = 400/300;
                camera.updateProjectionMatrix();
                renderer.setSize(400, 300);
            });
        }
        
        function createShip() {
            // Remove old ship if exists
            if (ship) {
                scene.remove(ship);
            }
            
            // Create ship hull
            const hullGeometry = new THREE.BoxGeometry(3, 1, 1);
            const hullMaterial = new THREE.MeshPhongMaterial({ 
                color: 0x8b4513,
                shininess: 100 
            });
            const hull = new THREE.Mesh(hullGeometry, hullMaterial);
            
            // Create mast
            const mastGeometry = new THREE.CylinderGeometry(0.1, 0.1, 3);
            const mastMaterial = new THREE.MeshPhongMaterial({ color: 0x8b4513 });
            const mast = new THREE.Mesh(mastGeometry, mastMaterial);
            mast.position.set(0, 2, 0);
            
            // Create sail
            const sailGeometry = new THREE.PlaneGeometry(2, 2);
            const sailMaterial = new THREE.MeshPhongMaterial({ 
                color: 0xf5f5f5,
                side: THREE.DoubleSide 
            });
            const sail = new THREE.Mesh(sailGeometry, sailMaterial);
            sail.position.set(0, 2, 0.6);
            
            // Create flag
            const flagGeometry = new THREE.PlaneGeometry(0.5, 0.3);
            const flagMaterial = new THREE.MeshPhongMaterial({ 
                color: 0xff0000,
                side: THREE.DoubleSide 
            });
            const flag = new THREE.Mesh(flagGeometry, flagMaterial);
            flag.position.set(0, 3.5, 0.1);
            
            // Group everything
            ship = new THREE.Group();
            ship.add(hull);
            ship.add(mast);
            ship.add(sail);
            ship.add(flag);
            
            scene.add(ship);
        }
        
        // 3D Treasure Chest
        let chestScene, chestCamera, chestRenderer, chest;
        
        function initTreasureChest() {
            chestScene = new THREE.Scene();
            chestScene.background = null;
            
            chestCamera = new THREE.PerspectiveCamera(75, 300/300, 0.1, 1000);
            chestCamera.position.z = 5;
            
            chestRenderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
            chestRenderer.setSize(300, 300);
            document.getElementById('treasure-3d').appendChild(chestRenderer.domElement);
            
            // Lighting
            const chestLight = new THREE.AmbientLight(0xffffff, 0.6);
            chestScene.add(chestLight);
            
            const chestDirLight = new THREE.DirectionalLight(0xffd700, 1);
            chestDirLight.position.set(5, 5, 5);
            chestScene.add(chestDirLight);
            
            // Create treasure chest
            createChest();
            
            // Animation
            function animateChest() {
                requestAnimationFrame(animateChest);
                
                if (chest) {
                    chest.rotation.y += 0.005;
                }
                
                chestRenderer.render(chestScene, chestCamera);
            }
            
            animateChest();
        }
        
        function createChest() {
            if (chest) {
                chestScene.remove(chest);
            }
            
            // Chest body
            const chestGeometry = new THREE.BoxGeometry(2, 1, 1.5);
            const chestMaterial = new THREE.MeshPhongMaterial({ 
                color: 0xcd7f32,
                shininess: 100 
            });
            const chestBody = new THREE.Mesh(chestGeometry, chestMaterial);
            
            // Chest lid
            const lidGeometry = new THREE.BoxGeometry(2.1, 0.2, 1.6);
            const lidMaterial = new THREE.MeshPhongMaterial({ color: 0x8b4513 });
            const lid = new THREE.Mesh(lidGeometry, lidMaterial);
            lid.position.y = 0.6;
            lid.rotation.x = -0.3;
            
            // Treasure inside
            const treasureGroup = new THREE.Group();
            
            // Gold coins
            for (let i = 0; i < 20; i++) {
                const coinGeometry = new THREE.CylinderGeometry(0.2, 0.2, 0.05, 16);
                const coinMaterial = new THREE.MeshPhongMaterial({ color: 0xffd700 });
                const coin = new THREE.Mesh(coinGeometry, coinMaterial);
                
                coin.position.x = (Math.random() - 0.5) * 1.5;
                coin.position.y = (Math.random() - 0.5) * 0.5;
                coin.position.z = (Math.random() - 0.5) * 1;
                coin.rotation.x = Math.random() * Math.PI;
                coin.rotation.z = Math.random() * Math.PI;
                
                treasureGroup.add(coin);
            }
            
            // Gems
            const gemColors = [0xff0000, 0x00ff00, 0x0000ff, 0xff00ff];
            for (let i = 0; i < 5; i++) {
                const gemGeometry = new THREE.OctahedronGeometry(0.15);
                const gemMaterial = new THREE.MeshPhongMaterial({ 
                    color: gemColors[i % gemColors.length],
                    shininess: 200 
                });
                const gem = new THREE.Mesh(gemGeometry, gemMaterial);
                
                gem.position.x = (Math.random() - 0.5) * 1.5;
                gem.position.y = (Math.random() - 0.5) * 0.5;
                gem.position.z = (Math.random() - 0.5) * 1;
                
                treasureGroup.add(gem);
            }
            
            treasureGroup.position.y = -0.2;
            treasureGroup.visible = false;
            
            // Group everything
            chest = new THREE.Group();
            chest.add(chestBody);
            chest.add(lid);
            chest.add(treasureGroup);
            
            chestScene.add(chest);
            
            // Store references for animation
            chest.userData = {
                lid: lid,
                treasure: treasureGroup,
                isOpen: false
            };
        }
        
        // Interactive Functions
        function parrotSpeak() {
            const messages = [
                "Arrr! Welcome aboard!",
                "Shiver me timbers! That's good code!",
                "Yo ho ho and a bottle of rum!",
                "Dead men tell no tales, but live devs write great code!",
                "Avast! Check out the treasure!",
                "Walk the plank if you don't like this portfolio!",
                "Ahoy! Let's set sail on a coding adventure!",
                "Thar she blows! A bug in the code!"
            ];
            
            const message = messages[Math.floor(Math.random() * messages.length)];
            
            // Create speech bubble
            const bubble = document.createElement('div');
            bubble.className = 'treasure-card';
            bubble.style.position = 'fixed';
            bubble.style.bottom = '100px';
            bubble.style.right = '20px';
            bubble.style.maxWidth = '300px';
            bubble.style.zIndex = '1001';
            bubble.innerHTML = `<p class="mb-0">🦜 <em>"${message}"</em></p>`;
            
            document.body.appendChild(bubble);
            
            setTimeout(() => {
                bubble.remove();
            }, 3000);
        }
        
        function setSail() {
            document.getElementById('treasure').scrollIntoView({ 
                behavior: 'smooth' 
            });
            
            // Add sailing effect
            document.querySelector('.ship-sail').style.animationDuration = '1s';
            setTimeout(() => {
                document.querySelector('.ship-sail').style.animationDuration = '3s';
            }, 1000);
            
            createSparkles();
        }
        
        function viewTreasure() {
            document.getElementById('crew').scrollIntoView({ 
                behavior: 'smooth' 
            });
            
            // Make treasure sparkle
            for (let i = 0; i < 50; i++) {
                setTimeout(() => {
                    createSparkles();
                }, i * 50);
            }
        }
        
        function openChest() {
            const chestData = chest.userData;
            
            if (!chestData.isOpen) {
                // Open chest
                gsap.to(chestData.lid.rotation, {
                    x: -1.5,
                    duration: 2,
                    ease: "back.out(1.7)"
                });
                
                // Show treasure
                chestData.treasure.visible = true;
                
                // Animate coins
                chestData.treasure.children.forEach((coin, index) => {
                    setTimeout(() => {
                        gsap.to(coin.position, {
                            y: coin.position.y + 0.5,
                            duration: 0.5,
                            ease: "power2.out"
                        });
                    }, index * 50);
                });
                
                chestData.isOpen = true;
            } else {
                // Close chest
                gsap.to(chestData.lid.rotation, {
                    x: -0.3,
                    duration: 1,
                    ease: "power2.inOut"
                });
                
                // Hide treasure
                chestData.treasure.visible = false;
                
                chestData.isOpen = false;
            }
        }
        
        function spinChest() {
            gsap.to(chest.rotation, {
                y: chest.rotation.y + Math.PI * 2,
                duration: 2,
                ease: "power2.inOut"
            });
            
            createSparkles();
        }
        
        function sendMessage() {
            const inputs = document.querySelectorAll('.pirate-input');
            let allFilled = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    allFilled = false;
                    input.style.borderColor = '#ff0000';
                } else {
                    input.style.borderColor = '';
                }
            });
            
            if (allFilled) {
                // Create message bottle animation
                const bottle = document.createElement('div');
                bottle.innerHTML = '💌';
                bottle.style.position = 'fixed';
                bottle.style.bottom = '50px';
                bottle.style.right = '100px';
                bottle.style.fontSize = '3rem';
                bottle.style.zIndex = '1001';
                
                document.body.appendChild(bottle);
                
                // Animate bottle
                gsap.to(bottle, {
                    x: -300,
                    y: -300,
                    rotation: 360,
                    duration: 2,
                    ease: "power2.inOut",
                    onComplete: () => {
                        bottle.remove();
                        
                        // Show success message
                        const success = document.createElement('div');
                        success.className = 'treasure-card';
                        success.style.position = 'fixed';
                        success.style.top = '50%';
                        success.style.left = '50%';
                        success.style.transform = 'translate(-50%, -50%)';
                        success.style.zIndex = '1002';
                        success.innerHTML = `
                            <h4 class="text-gold">Message Sent!</h4>
                            <p>Your message bottle has been launched into the digital sea!</p>
                        `;
                        
                        document.body.appendChild(success);
                        
                        setTimeout(() => {
                            success.remove();
                        }, 3000);
                    }
                });
                
                // Clear inputs
                inputs.forEach(input => input.value = '');
            } else {
                parrotSpeak();
            }
        }
        
        // Compass Navigation
        function updateCompass() {
            const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
            const pointer = document.getElementById('compassPointer');
            
            if (pointer) {
                pointer.style.transform = `translate(-50%, -50%) rotate(${scrollPercent * 3.6}deg)`;
            }
        }
        
        // Initialize when page loads
        window.addEventListener('load', () => {
            initPirateShip();
            initTreasureChest();
            
            // Start compass updates
            window.addEventListener('scroll', updateCompass);
            updateCompass();
            
            // Create initial sparkles
            createSparkles();
            
            // Make seagulls fly
            document.querySelectorAll('.seagull').forEach((seagull, index) => {
                seagull.style.animationDelay = `${index * 2}s`;
            });
            
            // Smooth scrolling for navigation
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    if (targetSection) {
                        window.scrollTo({
                            top: targetSection.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Animate skill bars on scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const skillBars = entry.target.querySelectorAll('.skill-progress');
                        skillBars.forEach(bar => {
                            bar.style.width = bar.style.width;
                        });
                    }
                });
            }, { threshold: 0.5 });
            
            document.querySelectorAll('.treasure-card').forEach(card => {
                observer.observe(card);
            });
        });
        
        // Add custom cursor effect for pirate elements
        document.querySelectorAll('.pirate-btn, .pirate-tag, .nav-link').forEach(element => {
            element.addEventListener('mouseenter', () => {
                document.body.style.cursor = 'url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'32\' height=\'32\' viewBox=\'0 0 32 32\'%3E%3Cpath fill=\'%238B0000\' d=\'M16 2L2 16l14 14 14-14L16 2zm0 2.828L27.172 16 16 27.172 4.828 16 16 4.828z\'/%3E%3Cpath fill=\'%23FFD700\' d=\'M16 8l-8 8 8 8 8-8-8-8zm0 2.828L21.172 16 16 21.172 10.828 16 16 10.828z\'/%3E%3C/svg%3E"), auto';
            });
            
            element.addEventListener('mouseleave', () => {
                document.body.style.cursor = 'url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'32\' height=\'32\' viewBox=\'0 0 32 32\'%3E%3Cpath fill=\'%23FFD700\' d=\'M16 2C8.27 2 2 8.27 2 16s6.27 14 14 14 14-6.27 14-14S23.73 2 16 2zm0 2c6.627 0 12 5.373 12 12s-5.373 12-12 12S4 22.627 4 16 9.373 4 16 4z\'/%3E%3Cpath fill=\'%238B4513\' d=\'M16 6c-5.523 0-10 4.477-10 10s4.477 10 10 10 10-4.477 10-10-4.477-10-10-10zm0 2c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8z\'/%3E%3Cpath fill=\'%23FF0000\' d=\'M16 10c-3.314 0-6 2.686-6 6s2.686 6 6 6 6-2.686 6-6-2.686-6-6-6z\'/%3E%3C/svg%3E"), auto';
            });
        });
        
        // Mobile menu fix
        document.querySelector('.navbar-toggler').addEventListener('click', () => {
            document.querySelector('.navbar-collapse').classList.toggle('show');
        });
    </script>
</body>
</html>