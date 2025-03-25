<?php
session_start();
require_once "config/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Zeke Job Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }
        .hero-content {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }
        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .feature-box {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            height: 100%;
            transition: transform 0.3s;
        }
        .feature-box:hover {
            transform: translateY(-10px);
        }
        .feature-box i {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 20px;
        }
        .cta-section {
            background-color: #f8f9fa;
            padding: 70px 0;
            margin: 50px 0;
            text-align: center;
        }
        .user-type-section {
            padding: 50px 0;
        }
        .user-type-card {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            text-align: center;
            height: 100%;
        }
        .user-type-card h3 {
            margin-bottom: 20px;
        }
        .btn-lg {
            padding: 12px 30px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Find Your Dream Job Today</h1>
                <p>Connect with top employers and explore thousands of opportunities tailored to your skills and career goals.</p>
                <a href="jobs.php" class="btn btn-primary btn-lg">Browse Jobs</a>
            </div>
        </div>
    </section>
    
    <!-- User Type Section -->
    <section class="user-type-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2>Choose Your Path</h2>
                    <p class="lead">Whether you're looking for a job or hiring talent, we've got you covered.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="user-type-card">
                        <h3>Job Seekers</h3>
                        <p>Create your profile, upload your resume, and start applying for your dream job today. Our platform connects you with thousands of employers looking for talent like you.</p>
                        <div class="mt-4">
                            <a href="jobseeker-register.php" class="btn btn-primary">Register as Jobseeker</a>
                            <a href="jobseeker-login.php" class="btn btn-outline-primary ms-2">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="user-type-card">
                        <h3>Employers</h3>
                        <p>Post job openings, manage applications, and find the perfect candidate for your organization. Our advanced matching system helps you connect with qualified talent.</p>
                        <div class="mt-4">
                            <a href="employer-register.php" class="btn btn-primary">Register as Employer</a>
                            <a href="employer-login.php" class="btn btn-outline-primary ms-2">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2>Why Choose Zeke Job Portal</h2>
                    <p class="lead">We provide the tools and resources you need to succeed in your job search or hiring process.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <h4>Easy Application Process</h4>
                        <p>Apply to multiple jobs with just a few clicks using your saved profile and resume.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h4>Advanced Job Matching</h4>
                        <p>Our intelligent system matches your skills and experience with the perfect job opportunities.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h4>Career Resources</h4>
                        <p>Access a wide range of resources to help you prepare for interviews and advance your career.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Take the Next Step in Your Career?</h2>
            <p class="lead mb-4">Join thousands of job seekers and employers who trust Zeke Job Portal.</p>
            <a href="jobseeker-register.php" class="btn btn-primary btn-lg me-3">Find a Job</a>
            <a href="employer-register.php" class="btn btn-outline-primary btn-lg">Post a Job</a>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 