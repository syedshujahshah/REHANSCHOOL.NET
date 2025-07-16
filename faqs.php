<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - Rehan School</title>
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
            background: linear-gradient(135deg, #16a085, #1abc9c);
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

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: white;
            margin-bottom: 1rem;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .faq-question {
            background: #f8f9fa;
            padding: 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s ease;
        }

        .faq-question:hover {
            background: #e9ecef;
        }

        .faq-question h3 {
            color: #2c3e50;
            font-size: 1.1rem;
            margin: 0;
        }

        .faq-toggle {
            font-size: 1.5rem;
            color: #3498db;
            transition: transform 0.3s ease;
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-answer.active {
            padding: 1.5rem;
            max-height: 200px;
        }

        .faq-answer p {
            color: #666;
            line-height: 1.8;
        }

        .faq-categories {
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
                        <li><a href="#" onclick="redirectTo('videos.php')">Videos</a></li>
                        <li><a href="faqs.php">FAQs</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="page-header">
                <h1>Frequently Asked Questions</h1>
                <p>Find answers to common questions about Rehan School</p>
            </div>

            <div class="faq-categories">
                <button class="category-btn active" onclick="filterFAQs('all')">All Questions</button>
                <button class="category-btn" onclick="filterFAQs('admission')">Admission</button>
                <button class="category-btn" onclick="filterFAQs('curriculum')">Curriculum</button>
                <button class="category-btn" onclick="filterFAQs('facilities')">Facilities</button>
                <button class="category-btn" onclick="filterFAQs('fees')">Fees</button>
            </div>

            <div class="faq-container">
                <div class="faq-item" data-category="admission">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>What is the admission process for Rehan School?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Our admission process includes an online application, entrance assessment, parent interview, and document verification. We evaluate students based on academic performance, aptitude, and alignment with our educational philosophy.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="curriculum">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>How is AI integrated into the curriculum?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We use AI-powered learning platforms that adapt to each student's learning pace and style. Our curriculum includes AI fundamentals, coding, robotics, and data science, while AI tools help personalize the learning experience across all subjects.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="fees">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>What are the fee structures and payment options?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Our fees vary by grade level and include tuition, technology fees, and activity charges. We offer flexible payment plans including monthly, quarterly, and annual options. Scholarships are available for deserving students.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="facilities">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>What facilities are available at the school?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Our campus features smart classrooms, AI labs, science laboratories, library, sports complex, cafeteria, medical room, and transportation services. All facilities are equipped with modern technology and safety measures.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="curriculum">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>What makes your curriculum different from traditional schools?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Our curriculum combines traditional academics with modern skills like entrepreneurship, critical thinking, and technology. We focus on project-based learning, real-world applications, and developing leadership qualities alongside academic excellence.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="admission">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>What age groups do you accept for admission?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We accept students from Pre-K (age 4) through Grade 12 (age 18). Each grade level has specific admission requirements and assessment criteria tailored to the student's developmental stage.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="facilities">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Do you provide transportation services?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide safe and reliable transportation services covering major areas of the city. Our buses are equipped with GPS tracking, CCTV cameras, and trained attendants to ensure student safety.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="curriculum">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>How do you prepare students for university admissions?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Our college counseling program includes SAT/ACT preparation, university application guidance, scholarship assistance, and career counseling. We maintain partnerships with leading universities worldwide for better admission opportunities.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="fees">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Are there any additional costs beyond tuition fees?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Additional costs may include uniforms, books, field trips, extracurricular activities, and examination fees. We provide a detailed fee structure during the admission process to ensure transparency.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="admission">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Can students transfer from other schools mid-year?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we accept mid-year transfers subject to seat availability and assessment. Transfer students undergo an evaluation process to ensure smooth integration into our academic program and school culture.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="facilities">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>What safety measures are in place at the school?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We have comprehensive safety protocols including CCTV surveillance, trained security personnel, fire safety systems, medical facilities, emergency procedures, and regular safety drills to ensure a secure learning environment.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="curriculum">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>What extracurricular activities are available?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We offer a wide range of activities including sports, music, drama, debate, robotics clubs, community service, student government, and various academic competitions to support holistic development.</p>
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

        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            const toggle = element.querySelector('.faq-toggle');
            
            // Close all other FAQs
            document.querySelectorAll('.faq-answer').forEach(item => {
                if (item !== answer) {
                    item.classList.remove('active');
                    item.previousElementSibling.querySelector('.faq-toggle').textContent = '+';
                }
            });
            
            // Toggle current FAQ
            answer.classList.toggle('active');
            toggle.textContent = answer.classList.contains('active') ? '−' : '+';
        }

        function filterFAQs(category) {
            const items = document.querySelectorAll('.faq-item');
            const buttons = document.querySelectorAll('.category-btn');
            
            // Update active button
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            // Filter items
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
