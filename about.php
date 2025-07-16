<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Rehan School</title>
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
            background: linear-gradient(135deg, #9b59b6, #8e44ad);
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

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-bottom: 4rem;
        }

        .about-text {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .about-text h2 {
            color: #2c3e50;
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        .about-text p {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .mission-vision {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .mission-item {
            margin-bottom: 2rem;
        }

        .mission-item h3 {
            color: #3498db;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .mission-item p {
            color: #666;
            line-height: 1.8;
        }

        .values-section {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            margin-bottom: 4rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .values-section h2 {
            color: #2c3e50;
            margin-bottom: 2rem;
            text-align: center;
            font-size: 2.5rem;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .value-card {
            text-align: center;
            padding: 2rem;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .value-icon {
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

        .value-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .achievements-section {
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: white;
            padding: 4rem 0;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 4rem;
        }

        .achievements-section h2 {
            font-size: 2.5rem;
            margin-bottom: 3rem;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .achievement-item {
            padding: 1.5rem;
        }

        .achievement-item h3 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .achievement-item p {
            opacity: 0.9;
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
            
            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
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
                        <li><a href="#" onclick="redirectTo('facilitators.php')">Facilitators</a></li>
                        <li><a href="about.php">About Us</a></li>
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
                <h1>About Rehan School</h1>
                <p>Pioneering the future of education through innovation and excellence</p>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <h2>Our Story</h2>
                    <p>Rehan School was founded with a revolutionary vision: to create leaders, not just students. Established in 2020, we recognized the need for an educational institution that could bridge the gap between traditional learning and the demands of the modern world.</p>
                    
                    <p>As Pakistan's first AI-enabled school, we have pioneered the integration of artificial intelligence in education, creating personalized learning experiences that adapt to each student's unique needs and learning style.</p>
                    
                    <p>Our commitment to excellence has made us a beacon of innovation in the educational landscape, preparing students not just for exams, but for life itself.</p>
                </div>

                <div class="mission-vision">
                    <div class="mission-item">
                        <h3>🎯 Our Mission</h3>
                        <p>To empower students with the knowledge, skills, and character needed to become leaders and problem-solvers of tomorrow through innovative, AI-enabled education.</p>
                    </div>

                    <div class="mission-item">
                        <h3>👁️ Our Vision</h3>
                        <p>To be the leading educational institution that transforms lives and shapes the future by creating confident, capable, and compassionate leaders.</p>
                    </div>

                    <div class="mission-item">
                        <h3>💡 Our Philosophy</h3>
                        <p>We believe that every child has unlimited potential. Our role is to unlock that potential through personalized learning, innovative teaching, and holistic development.</p>
                    </div>
                </div>
            </div>

            <div class="values-section">
                <h2>Our Core Values</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">🌟</div>
                        <h3>Excellence</h3>
                        <p>We strive for the highest standards in everything we do, from teaching to student support.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🚀</div>
                        <h3>Innovation</h3>
                        <p>We embrace new technologies and methodologies to enhance the learning experience.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🤝</div>
                        <h3>Integrity</h3>
                        <p>We maintain the highest ethical standards and build trust through transparency.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🌍</div>
                        <h3>Global Perspective</h3>
                        <p>We prepare students to be global citizens with local values and international outlook.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">💪</div>
                        <h3>Empowerment</h3>
                        <p>We empower students to take ownership of their learning and future success.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">❤️</div>
                        <h3>Compassion</h3>
                        <p>We foster empathy, kindness, and social responsibility in all our students.</p>
                    </div>
                </div>
            </div>

            <div class="achievements-section">
                <div class="container">
                    <h2>Our Achievements</h2>
                    <div class="achievements-grid">
                        <div class="achievement-item">
                            <h3>100%</h3>
                            <p>University Acceptance Rate</p>
                        </div>
                        <div class="achievement-item">
                            <h3>50+</h3>
                            <p>National Awards</p>
                        </div>
                        <div class="achievement-item">
                            <h3>1000+</h3>
                            <p>Successful Graduates</p>
                        </div>
                        <div class="achievement-item">
                            <h3>5</h3>
                            <p>Years of Excellence</p>
                        </div>
                        <div class="achievement-item">
                            <h3>95%</h3>
                            <p>Parent Satisfaction</p>
                        </div>
                        <div class="achievement-item">
                            <h3>25+</h3>
                            <p>International Partnerships</p>
                        </div>
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
