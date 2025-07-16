<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitators - Rehan School</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: #f39c12;
            border-radius: 8px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        nav a:hover {
            color: #3498db;
        }

        /* Main Content */
        main {
            margin-top: 100px;
            padding: 4rem 0;
        }

        .page-header {
            text-align: center;
            margin-bottom: 4rem;
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            padding: 4rem 0;
            border-radius: 15px;
        }

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .page-header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .facilitators-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .facilitator-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .facilitator-card:hover {
            transform: translateY(-10px);
        }

        .facilitator-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(45deg, #3498db, #2980b9);
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
        }

        .facilitator-card h3 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .facilitator-role {
            color: #3498db;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .facilitator-bio {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #3498db;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .social-link:hover {
            background: #2980b9;
        }

        .departments-section {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            margin-bottom: 3rem;
        }

        .departments-section h2 {
            color: #2c3e50;
            margin-bottom: 2rem;
            text-align: center;
            font-size: 2.5rem;
        }

        .departments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .department-card {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
        }

        .department-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: white;
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #3498db;
        }

        .footer-section p, .footer-section a {
            color: #bdc3c7;
            text-decoration: none;
            line-height: 1.8;
        }

        .footer-section a:hover {
            color: #3498db;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #34495e;
            color: #95a5a6;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2rem;
            }
            
            .facilitators-grid {
                grid-template-columns: 1fr;
            }
            
            nav ul {
                flex-direction: column;
                gap: 1rem;
            }

            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <a href="index.php" class="logo">
                    <div class="logo-icon">🎓</div>
                    Rehan School
                </a>
                <nav>
                    <ul>
                        <li><a href="#" onclick="redirectTo('index.php')">Home</a></li>
                        <li><a href="#" onclick="redirectTo('curriculum.php')">Curriculum</a></li>
                        <li><a href="facilitators.php">Facilitators</a></li>
                        <li><a href="#" onclick="redirectTo('about.php')">About Us</a></li>
                        <li><a href="#" onclick="redirectTo('contact.php')">Contact Us</a></li>
                        <li><a href="#" onclick="redirectTo('videos.php')">Videos</a></li>
                        <li><a href="#" onclick="redirectTo('faqs.php')">FAQs</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="page-header">
                <h1>Our Expert Facilitators</h1>
                <p>Meet the dedicated professionals shaping tomorrow's leaders</p>
            </div>

            <div class="facilitators-grid">
                <div class="facilitator-card">
                    <div class="facilitator-avatar">👨‍🏫</div>
                    <h3>Dr. Ahmed Hassan</h3>
                    <div class="facilitator-role">Principal & Educational Director</div>
                    <p class="facilitator-bio">With over 20 years of experience in educational leadership, Dr. Hassan brings innovative teaching methodologies and AI integration expertise.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-avatar">👩‍💻</div>
                    <h3>Ms. Sarah Khan</h3>
                    <div class="facilitator-role">AI & Technology Coordinator</div>
                    <p class="facilitator-bio">Computer Science expert specializing in AI education and robotics. Leading our technology integration initiatives.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-avatar">👨‍🔬</div>
                    <h3>Prof. Muhammad Ali</h3>
                    <div class="facilitator-role">STEM Department Head</div>
                    <p class="facilitator-bio">PhD in Physics with expertise in research methodology and scientific innovation. Passionate about hands-on learning.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-avatar">👩‍💼</div>
                    <h3>Ms. Fatima Sheikh</h3>
                    <div class="facilitator-role">Entrepreneurship Mentor</div>
                    <p class="facilitator-bio">Successful entrepreneur and business consultant helping students develop leadership and business skills.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-avatar">👨‍🎨</div>
                    <h3>Mr. Usman Malik</h3>
                    <div class="facilitator-role">Creative Arts Director</div>
                    <p class="facilitator-bio">Award-winning artist and designer fostering creativity and artistic expression in students.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>

                <div class="facilitator-card">
                    <div class="facilitator-avatar">👩‍🏫</div>
                    <h3>Dr. Aisha Raza</h3>
                    <div class="facilitator-role">Psychology & Counseling</div>
                    <p class="facilitator-bio">Child psychologist ensuring holistic development and mental well-being of all students.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">🔗</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>
            </div>

            <div class="departments-section">
                <h2>Our Departments</h2>
                <div class="departments-grid">
                    <div class="department-card">
                        <div class="department-icon">🔬</div>
                        <h3>Science & Technology</h3>
                        <p>15 Expert Facilitators</p>
                    </div>
                    <div class="department-card">
                        <div class="department-icon">💼</div>
                        <h3>Business & Entrepreneurship</h3>
                        <p>8 Industry Experts</p>
                    </div>
                    <div class="department-card">
                        <div class="department-icon">🎨</div>
                        <h3>Creative Arts</h3>
                        <p>12 Creative Professionals</p>
                    </div>
                    <div class="department-card">
                        <div class="department-icon">🌍</div>
                        <h3>Social Sciences</h3>
                        <p>10 Academic Scholars</p>
                    </div>
                    <div class="department-card">
                        <div class="department-icon">💬</div>
                        <h3>Languages & Communication</h3>
                        <p>8 Language Experts</p>
                    </div>
                    <div class="department-card">
                        <div class="department-icon">🏃‍♂️</div>
                        <h3>Sports & Physical Education</h3>
                        <p>6 Sports Professionals</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Rehan School</h3>
                    <p>Empowering the next generation of leaders through innovative education and AI-enabled learning.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="curriculum.php">Curriculum</a></p>
                    <p><a href="facilitators.php">Facilitators</a></p>
                    <p><a href="about.php">About Us</a></p>
                    <p><a href="contact.php">Contact</a></p>
                </div>
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p>📧 info@rehanschool.net</p>
                    <p>📞 +92-XXX-XXXXXXX</p>
                    <p>📍 Lahore, Pakistan</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Rehan School. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
