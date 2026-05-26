<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeWhale - Web Solutions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">🐋 CodeWhale</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero d-flex align-items-center text-center">
        <div class="container">
            <h1 class="display-4">We Build Future-Ready Web Solutions</h1>
            <p class="lead">CodeWhale specializes in websites & web apps using the latest technologies.</p>
            <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
        </div>
        <canvas id="3d-background"></canvas>
    </section>

    <!-- Our Services Section -->
    <section id="services" class="py-5 bg-dark">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Our Services</h2>
                <p class="lead">Empowering businesses with cutting-edge digital solutions.</p>
            </div>

            <div class="row">
                <!-- Web Development -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-laptop-code fa-3x text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">Web Development</h5>
                            <p class="card-text text-muted">
                                Build modern, responsive, and SEO-optimized websites using the latest frameworks like <strong>React.js, Vue.js, and Next.js</strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Web Applications -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-cogs fa-3x text-success mb-3"></i>
                            <h5 class="card-title fw-bold">Web Applications</h5>
                            <p class="card-text text-muted">
                                Scalable, high-performing web applications tailored to business needs, from e-commerce to enterprise solutions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SEO Optimization -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-3x text-warning mb-3"></i>
                            <h5 class="card-title fw-bold">SEO Optimization</h5>
                            <p class="card-text text-muted">
                                Improve search engine rankings with our advanced SEO strategies, including <strong>technical SEO, on-page optimization, and link building</strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- UI/UX Design -->
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-paint-brush fa-3x text-danger mb-3"></i>
                            <h5 class="card-title fw-bold">UI/UX Design</h5>
                            <p class="card-text text-muted">
                                Stunning and intuitive designs to enhance user experience, ensuring seamless navigation and engagement.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mobile App Development -->
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt fa-3x text-info mb-3"></i>
                            <h5 class="card-title fw-bold">Mobile App Development</h5>
                            <p class="card-text text-muted">
                                Cross-platform mobile apps using <strong>React Native & Flutter</strong> for seamless performance across iOS and Android.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Cloud & DevOps -->
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-cloud fa-3x text-secondary mb-3"></i>
                            <h5 class="card-title fw-bold">Cloud & DevOps</h5>
                            <p class="card-text text-muted">
                                Scalable cloud infrastructure and DevOps services to enhance performance and automate workflows.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-5 bg-dark text-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold"><i class="fas fa-users text-warning"></i> About Us</h2>
                <p class="lead">We build powerful web applications and websites with cutting-edge technology.</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="images/about-us.jpg" class="img-fluid rounded shadow-lg" alt="About Us">
                </div>
                <div class="col-lg-6">
                    <h3><i class="fas fa-users text-warning"></i> Who We Are</h3>
                    <p>We are a team of passionate developers dedicated to creating stunning, scalable, and efficient web applications.</p>

                    <h3><i class="fas fa-bullseye text-primary"></i> Our Mission</h3>
                    <p>To deliver high-quality, user-friendly, and scalable digital solutions that drive success for our clients.</p>

                    <h3><i class="fas fa-cogs text-danger"></i> Why Choose Us?</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-light">
                            <i class="fas fa-code text-success"></i> 10+ Years of Development Experience
                        </li>
                        <li class="list-group-item bg-dark text-light">
                            <i class="fas fa-lightbulb text-warning"></i> Custom Solutions for Every Business
                        </li>
                        <li class="list-group-item bg-dark text-light">
                            <i class="fas fa-mobile-alt text-info"></i> Mobile-First & SEO-Friendly Websites
                        </li>
                        <li class="list-group-item bg-dark text-light">
                            <i class="fas fa-headset text-primary"></i> 24/7 Support & Maintenance
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Our Values -->
            <div class="text-center mt-5">
                <h3 class="fw-bold"><i class="fas fa-star text-warning"></i> Our Values</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-secondary text-light shadow-lg p-3">
                            <i class="fas fa-user-shield fa-3x text-light"></i>
                            <div class="card-body">
                                <h5 class="card-title">Security First</h5>
                                <p class="card-text">We prioritize security in every line of code we write.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-secondary text-light shadow-lg p-3">
                            <i class="fas fa-rocket fa-3x text-danger"></i>
                            <div class="card-body">
                                <h5 class="card-title">Innovation</h5>
                                <p class="card-text">Constantly innovating to bring the best solutions to our clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-secondary text-light shadow-lg p-3">
                            <i class="fas fa-handshake fa-3x text-success"></i>
                            <div class="card-body">
                                <h5 class="card-title">Client Satisfaction</h5>
                                <p class="card-text">We believe in long-term partnerships and excellent client service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technologies We Use -->
            <div class="text-center mt-5">
                <h3 class="fw-bold"><i class="fas fa-laptop-code text-info"></i> Technologies We Use</h3>
                <div class="row">
                    <div class="col-md-3">
                        <i class="fab fa-html5 fa-3x text-danger"></i>
                        <p class="mt-2">HTML5</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fab fa-css3-alt fa-3x text-primary"></i>
                        <p class="mt-2">CSS3</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fab fa-js-square fa-3x text-warning"></i>
                        <p class="mt-2">JavaScript</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fab fa-react fa-3x text-info"></i>
                        <p class="mt-2">React.js</p>
                    </div>
                </div>
            </div>

            <!-- Meet Our Team -->
            <div class="text-center mt-5">
                <h3 class="fw-bold"><i class="fas fa-users text-success"></i> Meet Our Team</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card team-card bg-secondary text-light shadow-lg">
                            <img src="images/team-ceo.jpg" class="card-img-top" alt="CEO">
                            <div class="card-body text-center">
                                <h5 class="card-title">John Doe</h5>
                                <p class="card-text">Founder & CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card team-card bg-secondary text-light shadow-lg">
                            <img src="images/team-cto.jpg" class="card-img-top" alt="CTO">
                            <div class="card-body text-center">
                                <h5 class="card-title">Jane Smith</h5>
                                <p class="card-text">Chief Technology Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card team-card bg-secondary text-light shadow-lg">
                            <img src="images/team-dev.jpg" class="card-img-top" alt="Developer">
                            <div class="card-body text-center">
                                <h5 class="card-title">Michael Lee</h5>
                                <p class="card-text">Lead Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-5 text-center">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have a project in mind? Reach out to us!</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2025 CodeWhale. All rights reserved.
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>