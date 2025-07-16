<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos - Rehan School</title>
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
            background: linear-gradient(135deg, #8e44ad, #9b59b6);
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

        .video-categories {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .category-btn {
            background: white;
            color: #2c3e50;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .category-btn:hover,
        .category-btn.active {
            background: #3498db;
            color: white;
            transform: translateY(-2px);
        }

        .videos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .video-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
        }

        .video-thumbnail {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #3498db, #2980b9);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            cursor: pointer;
            position: relative;
        }

        .play-button {
            position: absolute;
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3498db;
            font-size: 1.5rem;
        }

        .video-info {
            padding: 1.5rem;
        }

        .video-info h3 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }

        .video-meta {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .video-description {
            color: #666;
            line-height: 1.6;
        }

        .video-category {
            display: inline-block;
            background: #ecf0f1;
            color: #2c3e50;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            margin-bottom: 1rem;
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
            
            .videos-grid {
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
                        <li><a href="#" onclick="redirectTo('facilitators.php')">Facilitators</a></li>
                        <li><a href="#" onclick="redirectTo('about.php')">About Us</a></li>
                        <li><a href="#" onclick="redirectTo('contact.php')">Contact Us</a></li>
                        <li><a href="videos.php">Videos</a></li>
                        <li><a href="#" onclick="redirectTo('faqs.php')">FAQs</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="page-header">
                <h1>Video Gallery</h1>
                <p>Explore our educational content and school activities</p>
            </div>

            <div class="video-categories">
                <button class="category-btn active" onclick="filterVideos('all')">All Videos</button>
                <button class="category-btn" onclick="filterVideos('campus')">Campus Tour</button>
                <button class="category-btn" onclick="filterVideos('curriculum')">Curriculum</button>
                <button class="category-btn" onclick="filterVideos('events')">Events</button>
                <button class="category-btn" onclick="filterVideos('testimonials')">Testimonials</button>
            </div>

            <div class="videos-grid" id="videosGrid">
                <div class="video-card" data-category="campus">
                    <div class="video-thumbnail" onclick="playVideo('campus-tour')">
                        🏫
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-info">
                        <div class="video-category">Campus Tour</div>
                        <h3>Virtual Campus Tour</h3>
                        <div class="video-meta">Duration: 5:30 | Views: 2,450</div>
                        <p class="video-description">Take a comprehensive tour of our state-of-the-art facilities including AI labs, modern classrooms, and recreational areas.</p>
                    </div>
                </div>

                <div class="video-card" data-category="curriculum">
                    <div class="video-thumbnail" onclick="playVideo('ai-education')">
                        🤖
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-info">
                        <div class="video-category">Curriculum</div>
                        <h3>AI-Enabled Learning Experience</h3>
                        <div class="video-meta">Duration: 8:15 | Views: 3,200</div>
                        <p class="video-description">Discover how we integrate artificial intelligence into our curriculum to provide personalized learning experiences.</p>
                    </div>
                </div>

                <div class="video-card" data-category="events">
                    <div class="video-thumbnail" onclick="playVideo('science-fair')">
                        🔬
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-info">
                        <div class="video-category">Events</div>
                        <h3>Annual Science Fair 2024</h3>
                        <div class="video-meta">Duration: 12:45 | Views: 1,800</div>
                        <p class="video-description">Highlights from our annual science fair showcasing innovative projects by our talented students.</p>
                    </div>
                </div>

                <div class="video-card" data-category="testimonials">
                    <div class="video-thumbnail" onclick="playVideo('parent-testimonial')">
                        👨‍👩‍👧‍👦
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-info">
                        <div class="video-category">Testimonials</div>
                        <h3>Parent Testimonials</h3>
                        <div class="video-meta">Duration: 6:20 | Views: 1,500</div>
                        <p class="video-description">Hear from parents about their experience with Rehan School and the positive impact on their children.</p>
                    </div>
                </div>

                <div class="video-card" data-category="curriculum">
                    <div class="video-thumbnail" onclick="playVideo('entrepreneurship')">
                        💼
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-info">
                        <div class="video-category">Curriculum</div>
                        <h3>Entrepreneurship Program</h3>
                        <div class="video-meta">Duration: 7:30 | Views: 2,100</div>
                        <p class="video-description">Learn about our unique entrepreneurship program that prepares students for future business leadership.</p>
                    </div>
                </div>

                <div class="video-card" data-category="events">
                    <div class="video-thumbnail" onclick="playVideo('graduation')">
                        🎓
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-info">
                        <div class="video-category">Events</div>
                        <h3>Graduation Ceremony 2024</h3>
                        <div class="video-meta">Duration: 15:00 | Views: 4,200</div>
                        <p class="video-description">Celebrating the achievements of our graduating class and their journey to success.</p>
                    </div>
                </div>

                <div class="video-card" data-category="campus">
                    <div class="video-thumbnail" onclick="playVideo('facilities')">
                        🏢
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-info">
                        <div class="video-category">Campus Tour</div>
                        <h3>Modern Facilities Overview</h3>
                        <div class="video-meta">Duration: 4:45 | Views: 1,900</div>
                        <p class="video-description">Explore our cutting-edge facilities including smart classrooms, laboratories, and sports complex.</p>
                    </div>
                </div>

                <div class="video-card" data-category="testimonials">
                    <div class="video-thumbnail" onclick="playVideo('student-testimonial')">
                        👨‍🎓
                        <div class="play-button">▶</div>
                    </div>
                    <div class="video-info">
                        <div class="video-category">Testimonials</div>
                        <h3>Student Success Stories</h3>
                        <div class="video-meta">Duration: 9:10 | Views: 2,800</div>
                        <p class="video-description">Former students share their success stories and how Rehan School shaped their careers.</p>
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

        function filterVideos(category) {
            const cards = document.querySelectorAll('.video-card');
            const buttons = document.querySelectorAll('.category-btn');
            
            // Update active button
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            // Filter cards
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function playVideo(videoId) {
            alert(`Playing video: ${videoId}\n\nIn a real implementation, this would open a video player or redirect to the video URL.`);
        }
    </script>
</body>
</html>
