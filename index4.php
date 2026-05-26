<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeWhale - Premium Web Solutions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.min.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Animated Background -->
    <div id="particles-js"></div>
    <div id="3d-container"></div>

    <!-- Floating Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <div class="logo-icon me-2">
                    <div class="whale-body"></div>
                    <div class="whale-tail"></div>
                </div>
                <span class="brand-text">CodeWhale</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <a href="#contact" class="btn btn-primary ms-lg-3">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section with 3D Whale -->
    <section id="home" class="hero">
        <div class="hero-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-3 fw-bold mb-4">Dive Into <span class="text-gradient">Digital Excellence</span></h1>
                        <p class="lead mb-4">We craft immersive web experiences that propel businesses forward in the digital ocean.</p>
                        <div class="d-flex gap-3">
                            <a href="#contact" class="btn btn-primary btn-lg px-4">Start Your Project</a>
                            <a href="#services" class="btn btn-outline-light btn-lg px-4">Explore Services</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="whale-model" class="model-container"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div class="arrow-down"></div>
        </div>
    </section>

    <!-- Clients Marquee -->
    <section class="clients-marquee py-4 bg-dark">
        <div class="container">
            <div class="marquee-content">
                <div class="marquee-item">
                    <img src="https://via.placeholder.com/150x60?text=TechGiant" alt="Client Logo">
                </div>
                <div class="marquee-item">
                    <img src="https://via.placeholder.com/150x60?text=InnovateCorp" alt="Client Logo">
                </div>
                <div class="marquee-item">
                    <img src="https://via.placeholder.com/150x60?text=DigitalWave" alt="Client Logo">
                </div>
                <div class="marquee-item">
                    <img src="https://via.placeholder.com/150x60?text=WebMasters" alt="Client Logo">
                </div>
                <div class="marquee-item">
                    <img src="https://via.placeholder.com/150x60?text=FutureSoft" alt="Client Logo">
                </div>
                <div class="marquee-item">
                    <img src="https://via.placeholder.com/150x60?text=CodeCraft" alt="Client Logo">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-6">
        <div class="container">
            <div class="section-header text-center mb-6">
                <h2 class="display-4 fw-bold mb-3">Our <span class="text-gradient">Services</span></h2>
                <p class="lead">Comprehensive digital solutions tailored to your business needs</p>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon bg-primary-gradient">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p>Custom websites built with modern frameworks like React, Vue, and Next.js for optimal performance.</p>
                        <ul class="service-tech">
                            <li>React.js</li>
                            <li>Vue.js</li>
                            <li>Next.js</li>
                            <li>Node.js</li>
                        </ul>
                        <div class="hover-content">
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon bg-success-gradient">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile Apps</h3>
                        <p>Cross-platform mobile applications with React Native and Flutter for seamless user experiences.</p>
                        <ul class="service-tech">
                            <li>React Native</li>
                            <li>Flutter</li>
                            <li>Swift</li>
                            <li>Kotlin</li>
                        </ul>
                        <div class="hover-content">
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon bg-warning-gradient">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Digital Marketing</h3>
                        <p>Comprehensive SEO and digital marketing strategies to boost your online presence.</p>
                        <ul class="service-tech">
                            <li>SEO</li>
                            <li>PPC</li>
                            <li>SMM</li>
                            <li>Content</li>
                        </ul>
                        <div class="hover-content">
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon bg-danger-gradient">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3>UI/UX Design</h3>
                        <p>Beautiful, intuitive interfaces designed to enhance user engagement and satisfaction.</p>
                        <ul class="service-tech">
                            <li>Figma</li>
                            <li>Adobe XD</li>
                            <li>Sketch</li>
                            <li>Prototyping</li>
                        </ul>
                        <div class="hover-content">
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon bg-info-gradient">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Cloud Solutions</h3>
                        <p>Scalable cloud infrastructure and services to support your growing business needs.</p>
                        <ul class="service-tech">
                            <li>AWS</li>
                            <li>Azure</li>
                            <li>Google Cloud</li>
                            <li>Docker</li>
                        </ul>
                        <div class="hover-content">
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon bg-purple-gradient">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3>DevOps</h3>
                        <p>Automated deployment pipelines and infrastructure as code for efficient development.</p>
                        <ul class="service-tech">
                            <li>CI/CD</li>
                            <li>Kubernetes</li>
                            <li>Terraform</li>
                            <li>Ansible</li>
                        </ul>
                        <div class="hover-content">
                            <a href="#" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section py-6 bg-dark">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="counter" data-target="250">0</div>
                        <p>Projects Completed</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="counter" data-target="120">0</div>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-code-branch"></i>
                        </div>
                        <div class="counter" data-target="15">0</div>
                        <p>Years Experience</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="counter" data-target="28">0</div>
                        <p>Awards Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-6">
        <div class="container">
            <div class="section-header text-center mb-6">
                <h2 class="display-4 fw-bold mb-3">About <span class="text-gradient">CodeWhale</span></h2>
                <p class="lead">We're more than just a development agency</p>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-image">
                        <div class="image-wrapper">
                            <img src="https://via.placeholder.com/600x400?text=Our+Team" alt="Our Team" class="img-fluid rounded-4">
                            <div class="floating-badge">
                                <div class="badge-content">
                                    <span class="counter" data-target="15">0</span>
                                    <span>Years Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3 class="mb-4">Crafting Digital Experiences Since 2008</h3>
                        <p class="lead">We combine technical expertise with creative vision to deliver exceptional digital products.</p>
                        <p>Founded in San Francisco, CodeWhale has grown from a small startup to a leading digital agency serving clients worldwide. Our team of passionate developers, designers, and strategists work together to create solutions that drive real business results.</p>

                        <div class="about-features mt-5">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="feature-text">
                                    <h5>Innovative Approach</h5>
                                    <p>We stay ahead of the curve with cutting-edge technologies.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="feature-text">
                                    <h5>Secure Solutions</h5>
                                    <p>Security is built into every layer of our development process.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="feature-text">
                                    <h5>Client-Centric</h5>
                                    <p>Your success is our top priority at every stage of the project.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-6 bg-dark">
        <div class="container">
            <div class="section-header text-center mb-6">
                <h2 class="display-4 fw-bold mb-3">Meet Our <span class="text-gradient">Team</span></h2>
                <p class="lead">The talented individuals behind our success</p>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="https://via.placeholder.com/300x300?text=John+Doe" alt="John Doe" class="img-fluid">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>John Doe</h4>
                            <p>CEO & Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="https://via.placeholder.com/300x300?text=Jane+Smith" alt="Jane Smith" class="img-fluid">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>Jane Smith</h4>
                            <p>CTO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="https://via.placeholder.com/300x300?text=Mike+Johnson" alt="Mike Johnson" class="img-fluid">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>Mike Johnson</h4>
                            <p>Lead Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="https://via.placeholder.com/300x300?text=Sarah+Williams" alt="Sarah Williams" class="img-fluid">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>Sarah Williams</h4>
                            <p>UX Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-6">
        <div class="container">
            <div class="section-header text-center mb-6">
                <h2 class="display-4 fw-bold mb-3">Our <span class="text-gradient">Portfolio</span></h2>
                <p class="lead">A showcase of our recent work</p>
                <div class="divider mx-auto"></div>
            </div>

            <div class="portfolio-filter mb-5 text-center">
                <button class="btn btn-filter active" data-filter="all">All</button>
                <button class="btn btn-filter" data-filter="web">Web Development</button>
                <button class="btn btn-filter" data-filter="mobile">Mobile Apps</button>
                <button class="btn btn-filter" data-filter="design">UI/UX Design</button>
            </div>

            <div class="row portfolio-grid">
                <!-- Project 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="https://via.placeholder.com/600x400?text=E-Commerce+Website" alt="E-Commerce Website" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>E-Commerce Platform</h4>
                                    <p>React, Node.js, MongoDB</p>
                                    <a href="#" class="btn btn-sm btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="https://via.placeholder.com/600x400?text=Fitness+App" alt="Fitness App" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Fitness Tracker App</h4>
                                    <p>React Native, Firebase</p>
                                    <a href="#" class="btn btn-sm btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="design">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="https://via.placeholder.com/600x400?text=Banking+Dashboard" alt="Banking Dashboard" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Banking Dashboard</h4>
                                    <p>Figma, Adobe XD</p>
                                    <a href="#" class="btn btn-sm btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="https://via.placeholder.com/600x400?text=Corporate+Portal" alt="Corporate Portal" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Corporate Portal</h4>
                                    <p>Vue.js, Laravel</p>
                                    <a href="#" class="btn btn-sm btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="https://via.placeholder.com/600x400?text=Food+Delivery" alt="Food Delivery App" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Food Delivery App</h4>
                                    <p>Flutter, Node.js</p>
                                    <a href="#" class="btn btn-sm btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="design">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="https://via.placeholder.com/600x400?text=Healthcare+App" alt="Healthcare App" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4>Healthcare App UI</h4>
                                    <p>Sketch, Principle</p>
                                    <a href="#" class="btn btn-sm btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-lg">View All Projects</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section py-6 bg-dark">
        <div class="container">
            <div class="section-header text-center mb-6">
                <h2 class="display-4 fw-bold mb-3">Client <span class="text-gradient">Testimonials</span></h2>
                <p class="lead">What our clients say about us</p>
                <div class="divider mx-auto"></div>
            </div>

            <div class="testimonials-slider">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>CodeWhale transformed our online presence with a stunning website that perfectly represents our brand. Their team was professional, responsive, and delivered beyond our expectations.</p>
                        <div class="testimonial-author">
                            <img src="https://via.placeholder.com/80x80?text=Client+1" alt="Client" class="author-image">
                            <div class="author-info">
                                <h5>Michael Johnson</h5>
                                <p>CEO, TechSolutions Inc.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>The mobile app developed by CodeWhale has significantly improved our customer engagement. Their attention to detail and user experience focus is truly impressive.</p>
                        <div class="testimonial-author">
                            <img src="https://via.placeholder.com/80x80?text=Client+2" alt="Client" class="author-image">
                            <div class="author-info">
                                <h5>Sarah Williams</h5>
                                <p>Marketing Director, RetailPlus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>Working with CodeWhale was a game-changer for our business. Their technical expertise and creative solutions helped us streamline operations and increase efficiency.</p>
                        <div class="testimonial-author">
                            <img src="https://via.placeholder.com/80x80?text=Client+3" alt="Client" class="author-image">
                            <div class="author-info">
                                <h5>David Chen</h5>
                                <p>COO, FinTech Global</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="technologies-section py-6">
        <div class="container">
            <div class="section-header text-center mb-6">
                <h2 class="display-4 fw-bold mb-3">Technologies <span class="text-gradient">We Use</span></h2>
                <p class="lead">Our toolkit for building exceptional digital products</p>
                <div class="divider mx-auto"></div>
            </div>

            <div class="tech-slider">
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-react"></i>
                    </div>
                    <p>React</p>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-vuejs"></i>
                    </div>
                    <p>Vue.js</p>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-angular"></i>
                    </div>
                    <p>Angular</p>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-node-js"></i>
                        <p>Node.js</p>
                    </div>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-python"></i>
                    </div>
                    <p>Python</p>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-aws"></i>
                    </div>
                    <p>AWS</p>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-docker"></i>
                    </div>
                    <p>Docker</p>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-swift"></i>
                    </div>
                    <p>Swift</p>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-android"></i>
                    </div>
                    <p>Android</p>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">
                        <i class="fab fa-php"></i>
                    </div>
                    <p>PHP</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-6 bg-dark">
        <div class="container">
            <div class="section-header text-center mb-6">
                <h2 class="display-4 fw-bold mb-3">Get In <span class="text-gradient">Touch</span></h2>
                <p class="lead">Ready to start your project? Contact us today!</p>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Location</h5>
                                <p>123 Tech Street, San Francisco, CA 94107</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Email</h5>
                                <p>info@codewhale.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Phone</h5>
                                <p>+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Working Hours</h5>
                                <p>Monday - Friday: 9AM - 6PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-6 bg-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-3">Ready to Transform Your Digital Presence?</h2>
                    <p class="lead mb-0">Let's discuss how we can help your business grow online.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#contact" class="btn btn-light btn-lg px-4">Get Started Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="footer-about">
                        <a class="navbar-brand d-flex align-items-center mb-3" href="#">
                            <div class="logo-icon me-2">
                                <div class="whale-body"></div>
                                <div class="whale-tail"></div>
                            </div>
                            <span class="brand-text">CodeWhale</span>
                        </a>
                        <p>We build future-ready digital solutions that help businesses thrive in the online world.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5>Services</h5>
                    <ul class="footer-links">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Mobile Apps</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Cloud Solutions</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Newsletter</h5>
                    <p>Subscribe to our newsletter for the latest updates and insights.</p>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-5">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; 2025 CodeWhale. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <ul class="footer-bottom-links">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>
</body>
<script src="script2.js"></script>
</html>