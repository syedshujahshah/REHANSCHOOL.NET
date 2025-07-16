<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum - Rehan School</title>
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
            background: linear-gradient(135deg, #3498db, #2980b9);
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

        .curriculum-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .curriculum-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .curriculum-card:hover {
            transform: translateY(-5px);
        }

        .curriculum-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .curriculum-card ul {
            list-style: none;
            padding-left: 0;
        }

        .curriculum-card li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 1.5rem;
        }

        .curriculum-card li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #27ae60;
            font-weight: bold;
        }

        .approach-section {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            margin-bottom: 3rem;
        }

        .approach-section h2 {
            color: #2c3e50;
            margin-bottom: 2rem;
            text-align: center;
            font-size: 2.5rem;
        }

        .approach-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .approach-item {
            text-align: center;
            padding: 1.5rem;
        }

        .approach-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #3498db, #2980b9);
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
            
            .curriculum-grid {
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
                        <li><a href="curriculum.php">Curriculum</a></li>
                        <li><a href="#" onclick="redirectTo('facilitators.php')">Facilitators</a></li>
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
                <h1>Our Innovative Curriculum</h1>
                <p>Preparing students for the challenges of tomorrow through cutting-edge education</p>
            </div>

            <div class="curriculum-grid">
                <div class="curriculum-card">
                    <h3>🔬 STEM Education</h3>
                    <ul>
                        <li>Advanced Mathematics</li>
                        <li>Computer Science & Programming</li>
                        <li>Robotics & AI Fundamentals</li>
                        <li>Data Science Basics</li>
                        <li>Scientific Research Methods</li>
                    </ul>
                </div>

                <div class="curriculum-card">
                    <h3>💼 Entrepreneurship</h3>
                    <ul>
                        <li>Business Plan Development</li>
                        <li>Financial Literacy</li>
                        <li>Marketing & Sales</li>
                        <li>Leadership Skills</li>
                        <li>Innovation & Creativity</li>
                    </ul>
                </div>

                <div class="curriculum-card">
                    <h3>🎨 Creative Arts</h3>
                    <ul>
                        <li>Digital Design & Media</li>
                        <li>Creative Writing</li>
                        <li>Music & Performing Arts</li>
                        <li>Visual Arts</li>
                        <li>Cultural Studies</li>
                    </ul>
                </div>

                <div class="curriculum-card">
                    <h3>🌍 Global Citizenship</h3>
                    <ul>
                        <li>Environmental Science</li>
                        <li>Social Responsibility</li>
                        <li>International Relations</li>
                        <li>Cultural Awareness</li>
                        <li>Community Service</li>
                    </ul>
                </div>

                <div class="curriculum-card">
                    <h3>💬 Communication Skills</h3>
                    <ul>
                        <li>Public Speaking</li>
                        <li>Debate & Discussion</li>
                        <li>Technical Writing</li>
                        <li>Presentation Skills</li>
                        <li>Digital Communication</li>
                    </ul>
                </div>

                <div class="curriculum-card">
                    <h3>🧠 Critical Thinking</h3>
                    <ul>
                        <li>Problem-Solving Techniques</li>
                        <li>Analytical Reasoning</li>
                        <li>Research Methodology</li>
                        <li>Decision Making</li>
                        <li>Logical Analysis</li>
                    </ul>
                </div>
            </div>

            <div class="approach-section">
                <h2>Our Teaching Approach</h2>
                <div class="approach-grid">
                    <div class="approach-item">
                        <div class="approach-icon">🤖</div>
                        <h3>AI-Powered Learning</h3>
                        <p>Personalized learning experiences using artificial intelligence to adapt to each student's pace and style.</p>
                    </div>
                    <div class="approach-item">
                        <div class="approach-icon">👥</div>
                        <h3>Collaborative Learning</h3>
                        <p>Team-based projects and peer learning to develop social skills and teamwork abilities.</p>
                    </div>
                    <div class="approach-item">
                        <div class="approach-icon">🎯</div>
                        <h3>Project-Based Learning</h3>
                        <p>Real-world projects that connect classroom learning to practical applications and career preparation.</p>
                    </div>
                    <div class="approach-item">
                        <div class="approach-icon">🌐</div>
                        <h3>Global Perspective</h3>
                        <p>International curriculum standards with local cultural integration for well-rounded education.</p>
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
