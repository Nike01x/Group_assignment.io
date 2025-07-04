<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CanvaKita - Design Templates Made in Malaysia</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <nav>
        <div class="nav-container">
            <div class="logo">
                <a href="#" onclick="showSection('home')">CanvaKita©️</a>
                <div class="motto" style="font-size: 0.7rem; font-weight: 500; color: #815854; margin-top: 0.2rem;">Make it EASY, SAVE TIME & EFFICIENT</div>
            </div>            
            <ul class="nav-links">
                <li><a href="#" onclick="showSection('home',event)">Home</a></li>
                <li><a href="#" onclick="showSection('templates',event)">Templates</a></li>
                <li><a href="#" onclick="showSection('about',event)">About Us</a></li>
                <li><a href="#" onclick="showSection('contact',event)">Contact</a></li>
                <li><a href="#" onclick="showSection('Employee',event)">Employee</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <!-- Home Section -->

        <section id="home" class="section active">
            <div class="container">
                <div class="hero">
                    <div class="team-photo" style="width: 300px; height: 300px; border-radius: 50%; background: #815854; margin: 0 auto 1.5rem; overflow: hidden; border: 5px solid rgba(129, 88, 84, 0.2);">
                        <img src="PIC\Black and White Minimalist Professional Initial Logo[1].jpg" alt="Logo" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>           
                    <h1>Premium Templates Design!</h1>
                    <p>Transform your ideas into stunning visuals with our professionally crafted templates!</p>
                    <a href="#" class="cta-button" onclick="showSection('templates',event)">Explore Templates</a>
                </div>

                <div class="features">
                    <div class="feature-card">
                        <div class="feature-icon">🎨</div>
                        <h3>Professional Quality</h3>
                        <p>Hand-crafted by professional designers with attention to every detail</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">⚡</div>
                        <h3>Instant Download</h3>
                        <p>Get your templates immediately after purchase and start creating right away</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔧</div>
                        <h3>Easy to Customize</h3>
                        <p>All templates are fully editable and come with detailed instructions</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Templates Section -->
        <section id="templates" class="section">
            <div class="container">
                <div class="content-section">
                    <h2 class="section-title">Our Template Collection</h2>
                    <div class="templates-grid">
                        <div class="template-category">
                            <div class="category-icon">📄</div>
                            <h3 class="category-title">Resume Templates</h3>
                            <p class="category-description">Resume and CV templates that help you stand out from the crowd</p>
                            <span class="template-count"><a href="#" class="cta2-button" onclick="showSection('resume')">ORDER NOW!</a></span>
                        </div>
                        <div class="template-category">
                            <div class="category-icon">🎯</div>
                            <h3 class="category-title">Banner Designs</h3>
                            <p class="category-description">Eye-catching banners for web, social media, and print advertising</p>
                            <span class="template-count"><a href="#" class="cta2-button" onclick="showSection('banner')">ORDER NOW!</a></span>
                        </div>
                        <div class="template-category">
                            <div class="category-icon">📊</div>
                            <h3 class="category-title">Presentation slides</h3>
                            <p class="category-description">Stunning PowerPoint and Keynote templates for impactful presentations</p>
                            <span class="template-count"><a href="#" class="cta2-button" onclick="showSection('slides')">ORDER NOW!</a></span>
                        </div>
                        <div class="template-category">
                            <div class="category-icon">📋</div>
                            <h3 class="category-title">Poster Templates</h3>
                            <p class="category-description">Creative posters, marketing, and promotional campaigns</p>
                            <span class="template-count"><a href="#" class="cta2-button" onclick="showSection('poster')">ORDER NOW!</a></span>
                        </div>
                        <div class="template-category">
                            <div class="category-icon">🏢</div>
                            <h3 class="category-title">Company Logos</h3>
                            <p class="category-description">Professional logo designs and brand identity packages</p>
                            <span class="template-count"><a href="#" class="cta2-button" onclick="showSection('logos')">ORDER NOW!</a></span>
                        </div>
                        <div class="template-category">
                            <div class="category-icon">✨</div>
                            <h3 class="category-title">Custom Order</h3>
                            <p class="category-description">Get an EXCLUSIVE CUSTOM template to your liking!</p>
                            <span class="template-count"><a href="#" class="cta2-button" onclick="showSection('custom')">ORDER NOW!</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--resume section-->
        <!--In your resume section-->
        <section id="resume" class="section">
            <!-- Thumbnail container -->
            <div class="thumbnails-container">
                <!-- First resume -->
                <div class="thumbnail-wrapper">
                    <a href="#resume-popup-1">
                        <img src="PIC\Resume_1_page-0001.jpg" 
                            alt="Resume Template 1" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- Second resume -->
                <div class="thumbnail-wrapper">
                    <a href="#resume-popup-2">
                        <img src="PIC\resume_2_page-0001.jpg" 
                            alt="Resume Template 2" 
                            class="thumbnail">
                    </a>
                </div>
            </div>

            <!-- Overlays (note the different IDs) -->
            <div id="resume-popup-1" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Resume_1_page-0001.jpg" 
                    class="enlarged-img">
            </div>

            <div id="resume-popup-2" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\resume_2_page-0001.jpg" 
                    class="enlarged-img">
            </div>

            <center><a href="#" class="cta-button" onclick="showSection('cust_resume')">Want us to customize your resume?</a></center>

            <center><a href="#" class="cta-button" onclick="showSection('templates')">return</a></center>
        </section>

        <!--cust_resume section-->
        <section id="cust_resume" class="section">
            <div class="container">
                <div class="content-section">
                    <h2 class="section-title">Custom Resume Order</h2>
                    <p style="text-align: center; margin-bottom: 2rem;">Fill out your details below and our designers will create a professional resume tailored just for you!</p>
                    
                    <form class="contact-form" action="process_resume.php" method="POST" enctype="multipart/form-data" onsubmit="handleResumeSubmit(event)">
                        <!-- Personal Information -->
                        <h3 style="color: #815854; margin: 2rem 0 1rem;">Personal Information</h3>
                        <div class="form-group">
                            <label for="resume-name">Full Name*</label>
                            <input type="text" id="resume-name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="resume-email">Email Address*</label>
                            <input type="email" id="resume-email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="resume-phone">Phone Number</label>
                            <input type="tel" id="resume-phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="resume-address">Address</label>
                            <input type="text" id="resume-address" name="address">
                        </div>
                        
                        <div class="form-group">
                            <label for="resume-linkedin">LinkedIn Profile (optional)</label>
                            <input type="url" id="resume-linkedin" name="linkedin">
                        </div>
                        
                        <!-- Professional Information -->
                        <h3 style="color: #815854; margin: 2rem 0 1rem;">Professional Information</h3>
                        <div class="form-group">
                            <label for="resume-title">Professional Title/Headline*</label>
                            <input type="text" id="resume-title" name="title" required placeholder="e.g., Software Engineer, Marketing Specialist">
                        </div>
                        
                        <div class="form-group">
                            <label for="resume-summary">Professional Summary*</label>
                            <textarea id="resume-summary" name="summary" rows="3" required placeholder="Briefly describe your professional background and key skills"></textarea>
                        </div>
                        
                        <!-- Work Experience -->
                        <h3 style="color: #815854; margin: 2rem 0 1rem;">Work Experience</h3>
                        <div id="experience-container">
                            <!-- Experience fields will be added here by JavaScript -->
                        </div>
                        <button type="button" class="add-experience-btn" style="background: #815854; color: white; padding: 0.5rem 1rem; border: none; border-radius: 5px; margin-bottom: 1rem;" onclick="addExperienceField()">+ Add Another Position</button>
                        
                        <!-- Education -->
                        <h3 style="color: #815854; margin: 2rem 0 1rem;">Education</h3>
                        <div id="education-container">
                            <!-- Education fields will be added here by JavaScript -->
                        </div>
                        <button type="button" class="add-education-btn" style="background: #815854; color: white; padding: 0.5rem 1rem; border: none; border-radius: 5px; margin-bottom: 1rem;" onclick="addEducationField()">+ Add Another Degree</button>
                        
                        <!-- Skills -->
                        <h3 style="color: #815854; margin: 2rem 0 1rem;">Skills</h3>
                        <div class="form-group">
                            <label for="resume-skills">List your key skills (comma separated)*</label>
                            <textarea id="resume-skills" name="skills" rows="2" required placeholder="e.g., Project Management, Photoshop, Data Analysis"></textarea>
                        </div>
                        
                        <!-- Resume Preferences -->
                        <h3 style="color: #815854; margin: 2rem 0 1rem;">Resume Preferences</h3>
                        <div class="form-group">
                            <label for="resume-style">Preferred Resume Style*</label>
                            <select id="resume-style" name="style" required>
                                <option value="">Select a style</option>
                                <option value="modern">Modern</option>
                                <option value="professional">Professional</option>
                                <option value="creative">Creative</option>
                                <option value="minimalist">Minimalist</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="resume-color">Preferred Color Scheme</label>
                            <select id="resume-color" name="color">
                                <option value="blue">Blue</option>
                                <option value="black">Black & White</option>
                                <option value="green">Green</option>
                                <option value="red">Red</option>
                                <option value="custom">Custom (specify in notes)</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="resume-notes">Additional Notes/Requirements</label>
                            <textarea id="resume-notes" name="notes" rows="3" placeholder="Any specific requirements or preferences you'd like us to know about"></textarea>
                        </div>
                        
                        <!-- File Upload -->
                        <div class="form-group">
                            <label for="resume-file">Upload Current Resume (optional)</label>
                            <input type="file" id="resume-file" name="resume_file" accept=".pdf,.doc,.docx">
                            <small>We can use this as a reference (PDF or Word document)</small>
                        </div>
                        
                        <button type="submit" class="submit-btn">Submit Resume Request</button>
                    </form>
                    
                    <center><a href="#" class="cta-button" onclick="showSection('resume')">Back to Resume Templates</a></center>
                </div>
            </div>
        </section>
        <!--banner section-->
        <section id="banner" class="section">
        
            <!-- frist banner -->
            <div class="thumbnails-container">
                <div class="thumbnail-wrapper">
                    <a href="#banner-popup-1">
                        <img src="PIC\banner 1.png"
                            alt="banner Template 1" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- Second banner -->
                <div class="thumbnail-wrapper">
                    <a href="#banner-popup-2">
                        <img src="PIC\Banner 2.png"
                            alt="banner Template 2" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- third banner -->
                <div class="thumbnail-wrapper">
                    <a href="#banner-popup-3">
                        <img src="PIC\banner 3.png" 
                            alt="banner Template 3" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- 4th banner -->
                <div class="thumbnail-wrapper">
                    <a href="#banner-popup-4">
                        <img src="PIC\banner 4.png" 
                            alt="banner Template 4" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- 5th banner -->
                <div class="thumbnail-wrapper">
                    <a href="#banner-popup-5">
                        <img src="PIC\banner 5.png" 
                            alt="banner Template 5" 
                            class="thumbnail">
                    </a>
                </div>


            </div>

            <!-- Overlays (note the different IDs) -->
            <div id="banner-popup-1" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\banner 1.png"
                    class="enlarged-img">
            </div>

            <div id="banner-popup-2" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Banner 2.png"
                    class="enlarged-img">
            </div>

            <div id="banner-popup-3" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\banner 3.png"
                    class="enlarged-img">
            </div>

            <div id="banner-popup-4" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Banner 4.png"
                    class="enlarged-img">
            </div>

            <div id="banner-popup-5" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Banner 5.png"
                    class="enlarged-img">
            </div>


            <center><a href="#" class="cta-button" onclick="showSection('templates')">return</a></center>
        </section>
         
         <!--slides section-->
         <!-- In your slides section -->
        <section id="slides" class="section">
            <!-- Thumbnail container -->
            <div class="thumbnails-container">
                <!-- First slide set -->
                <div class="thumbnail-wrapper">
                    <a href="#slide-popup-1-1">
                        <img src="PIC\slide1\slide1_page-0001.jpg"
                            alt="slide Template 1" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- Second slide set -->
                <div class="thumbnail-wrapper">
                    <a href="#slide-popup-2-1">
                        <img src="PIC\slide2\slide2_page-0001.jpg" 
                            alt="slide Template 2" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- Third slide set -->
                <div class="thumbnail-wrapper">
                    <a href="#slide-popup-3-1">
                        <img src="PIC\slide3\slide3_page-0001.jpg"
                            alt="slide Template 3" 
                            class="thumbnail">
                    </a>
                </div>
            
                 <!-- fourth slide set -->
                 <div class="thumbnail-wrapper">
                    <a href="#slide-popup-4-1">
                        <img src="PIC\slide4\slide4_page-0001.jpg"
                            alt="slide Template 4" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- fifth slide set -->
                <div class="thumbnail-wrapper">
                    <a href="#slide-popup-5-1">
                        <img src="PIC\slide5\slide5_page-0001.jpg"
                            alt="slide Template 5" 
                            class="thumbnail">
                    </a>
                </div>
                
            </div>

            <!-- slideshow for first slide set -->
            <div id="slide-popup-1-1" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide active">
                        <img src="PIC\slide1\slide1_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide1\slide1_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide1\slide1_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-1-1" class="prev">❮</a>
                        <a href="#slide-popup-1-2" class="next">❯</a>
                    </div>
                </div>
            </div>

            <div id="slide-popup-1-2" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide1\slide1_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide1\slide1_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide1\slide1_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-1-1" class="prev">❮</a>
                        <a href="#slide-popup-1-3" class="next">❯</a>
                    </div>
                </div>
            </div>

            <div id="slide-popup-1-3" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide1\slide1_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide1\slide1_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide1\slide1_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-1-2" class="prev">❮</a>
                        <a href="#slide-popup-1-1" class="next">❯</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar structure for slide sets 2 and 3 -->
            <!-- slideshow for second slide set -->
            <div id="slide-popup-2-1" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide active">
                        <img src="PIC\slide2\slide2_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide2\slide2_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide2\slide2_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-2-3" class="prev">❮</a>
                        <a href="#slide-popup-2-2" class="next">❯</a>
                    </div>
                </div>
            </div>

            <div id="slide-popup-2-2" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide2\slide2_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide2\slide2_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide2\slide2_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-2-1" class="prev">❮</a>
                        <a href="#slide-popup-2-3" class="next">❯</a>
                    </div>
                </div>
            </div>

            <div id="slide-popup-2-3" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide2\slide2_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide2\slide2_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide2\slide2_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-2-2" class="prev">❮</a>
                        <a href="#slide-popup-2-1" class="next">❯</a>
                    </div>
                </div>
            </div>

            <!-- slideshow for third slide set -->
            <div id="slide-popup-3-1" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide active">
                        <img src="PIC\slide3\slide3_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide3\slide3_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide3\slide3_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-3-3" class="prev">❮</a>
                        <a href="#slide-popup-3-2" class="next">❯</a>
                    </div>
                </div>
            </div>

            <div id="slide-popup-3-2" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide3\slide3_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide3\slide3_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide3\slide3_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-3-1" class="prev">❮</a>
                        <a href="#slide-popup-3-3" class="next">❯</a>
                    </div>
                </div>
            </div>

            <div id="slide-popup-3-3" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide3\slide3_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide3\slide3_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide3\slide3_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-3-2" class="prev">❮</a>
                        <a href="#slide-popup-3-1" class="next">❯</a>
                    </div>
                </div>
            </div>

            <div id="slide-popup-4-1" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide active">
                        <img src="PIC\slide4\slide4_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide4\slide4_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide4\slide4_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-4-3" class="prev">❮</a>
                        <a href="#slide-popup-4-2" class="next">❯</a>
                    </div>
                </div>
            </div>
            
            <div id="slide-popup-4-2" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide4\slide4_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide4\slide4_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide4\slide4_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-4-1" class="prev">❮</a>
                        <a href="#slide-popup-4-3" class="next">❯</a>
                    </div>
                </div>
            </div>
            
            <div id="slide-popup-4-3" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide4\slide4_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide4\slide4_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide4\slide4_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-4-2" class="prev">❮</a>
                        <a href="#slide-popup-4-1" class="next">❯</a>
                    </div>
                </div>
            </div>


            <div id="slide-popup-5-1" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide active">
                        <img src="PIC\slide5\slide5_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide5\slide5_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide5\slide5_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-5-3" class="prev">❮</a>
                        <a href="#slide-popup-5-2" class="next">❯</a>
                    </div>
                </div>
            </div>
            
            <div id="slide-popup-5-2" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide5\slide5_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide5\slide5_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide5\slide5_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-5-1" class="prev">❮</a>
                        <a href="#slide-popup-5-3" class="next">❯</a>
                    </div>
                </div>
            </div>
            
            <div id="slide-popup-5-3" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="PIC\slide5\slide5_page-0001.jpg" class="enlarged-img">
                    </div>
                    <div class="slide">
                        <img src="PIC\slide5\slide5_page-0002.jpg" class="enlarged-img">
                    </div>
                    <div class="slide active">
                        <img src="PIC\slide5\slide5_page-0003.jpg" class="enlarged-img">
                    </div>
                    <div class="slide-nav">
                        <a href="#slide-popup-5-2" class="prev">❮</a>
                        <a href="#slide-popup-5-1" class="next">❯</a>
                    </div>
                </div>
            </div>

            <center><a href="#" class="cta-button" onclick="showSection('templates')">return</a></center>
        </section>

        <!--poster section-->
        <section id="poster" class="section">
            
            <!-- Thumbnail container -->
            <div class="thumbnails-container">
                <!-- First poster -->
                <div class="thumbnail-wrapper">
                    <a href="#poster-popup-1">
                        <img src="PIC\Poster[1].png"
                            alt="poster Template 1" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- Second poster -->
                <div class="thumbnail-wrapper">
                    <a href="#poster-popup-2">
                        <img src="PIC\poster 2.png" 
                            alt="poster Template 2" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- 3rd poster -->
                <div class="thumbnail-wrapper">
                    <a href="#poster-popup-3">
                        <img src="PIC\Poster 3.png" 
                            alt="poster Template 3" 
                            class="thumbnail">
                    </a>
                </div>


            </div>

            <!-- Overlays (note the different IDs) -->
            <div id="poster-popup-1" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Poster[1].png" 
                    class="enlarged-img">
            </div>

            <div id="poster-popup-2" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\poster 2.png" 
                    class="enlarged-img">
            </div>

            <div id="poster-popup-3" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Poster 3.png" 
                    class="enlarged-img">
            </div>


            <center><a href="#" class="cta-button" onclick="showSection('templates')">return</a></center>            
        </section>

        <!--logos section-->
        <section id="logos" class="section">

            <!-- frist logo -->
            <div class="thumbnails-container">
                <div class="thumbnail-wrapper">
                    <a href="#logo-popup-1">
                        <img src="PIC\Gray and White Minimalist Rose Illustration Calligraphy Photographer Logo[1].png" 
                            alt="logo Template 1" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- Second logo -->
                <div class="thumbnail-wrapper">
                    <a href="#logo-popup-2">
                        <img src="PIC\Brown Creative Simple Coffee Shop Logo[1].png" 
                            alt="logo Template 2" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- third logo -->
                <div class="thumbnail-wrapper">
                    <a href="#logo-popup-3">
                        <img src="PIC\Black and White Minimalist Professional Initial Logo[1].jpg" 
                            alt="logo Template 3" 
                            class="thumbnail">
                    </a>
                </div>

                <!-- fourth logo -->
                <div class="thumbnail-wrapper">
                    <a href="#logo-popup-4">
                        <img src="PIC\Black and Blue Illustrative Volleyball Club Logo[1].png" 
                            alt="logo Template 4" 
                            class="thumbnail">
                    </a>
                </div>
            </div>

            <!-- Overlays (note the different IDs) -->
            <div id="logo-popup-1" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Gray and White Minimalist Rose Illustration Calligraphy Photographer Logo[1].png"
                    class="enlarged-img">
            </div>

            <div id="logo-popup-2" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Brown Creative Simple Coffee Shop Logo[1].png"
                    class="enlarged-img">
            </div>

            <div id="logo-popup-3" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Black and White Minimalist Professional Initial Logo[1].jpg" 
                    class="enlarged-img">
            </div>

            <div id="logo-popup-4" class="overlay">
                <a href="#" class="close-btn">&times;</a>
                <img src="PIC\Black and Blue Illustrative Volleyball Club Logo[1].png" 
                    class="enlarged-img">
            </div>

            <center><a href="#" class="cta-button" onclick="showSection('templates')">return</a></center>
        </section>

        <!-- Custom Section -->
        <section id="custom" class="section">
            <div class="container">
                <div class="content-section">
                    <h2 class="section-title">Custom Template Order</h2>
                    <div class="about-content">
                        <p>Need something unique? Our designers can create a custom template tailored specifically to your needs. Fill out the form below and we'll get back to you with a quote within 24 hours.</p>
                    </div>

                    <form class="contact-form" action="process_custom.php" method="POST" enctype="multipart/form-data" onsubmit="handleCustomSubmit(event)">
                        <div class="form-group">
                            <label for="custom-name">Your Name</label>
                            <input type="text" id="custom-name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="custom-email">Email Address</label>
                            <input type="email" id="custom-email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="custom-phone">Phone Number (optional)</label>
                            <input type="tel" id="custom-phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="template-type">Template Type</label>
                            <select id="template-type" name="template-type" required>
                                <option value="">Select a template type</option>
                                <option value="resume">Resume/CV</option>
                                <option value="banner">Banner/Advertisement</option>
                                <option value="presentation">Presentation slides</option>
                                <option value="poster">Poster/Flyer</option>
                                <option value="logo">Logo/Branding</option>
                                <option value="other">Other (specify below)</option>
                            </select>
                        </div>
                        
                        <div class="form-group" id="custom-type-container" style="display: none;">
                            <label for="custom-type">Please specify template type</label>
                            <input type="text" id="custom-type" name="custom-type">
                        </div>
                        
                        <div class="form-group">
                            <label for="purpose">Purpose/Use Case</label>
                            <textarea id="purpose" name="purpose" rows="2" required placeholder="What will this template be used for?"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="requirements">Design Requirements</label>
                            <textarea id="requirements" name="requirements" rows="4" required placeholder="Describe what you're looking for in detail (colors, style, elements, etc.)"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="deadline">Desired Completion Date</label>
                            <input type="date" id="deadline" name="deadline" min="">
                        </div>
                        
                        <div class="form-group">
                            <label for="budget">Budget Range (MYR)</label>
                            <select id="budget" name="budget">
                                <option value="10-50">RM10 - RM50</option>
                                <option value="51-100">RM51 - RM100</option>
                                <option value="101-200">RM101 - RM200</option>
                                <option value="300+">RM200+</option>
                                <option value="unsure">Not sure</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="reference">Reference Files (optional)</label>
                            <input type="file" id="reference" name="reference" multiple accept="image/*,.pdf,.psd,.ai">
                            <small>You can upload reference images, logos, or existing designs (Max 5MB each)</small>
                        </div>
                        
                        <button type="submit" class="submit-btn">Request Custom Design</button>
                    </form>
                    
                    <div class="process-steps" style="margin-top: 3rem;">
                        <h3 style="text-align: center; margin-bottom: 1.5rem;">Our Custom Design Process</h3>
                        <div class="features" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                            <div class="feature-card">
                                <div class="feature-icon">1</div>
                                <h3>Submit Request</h3>
                                <p>Fill out our custom order form with your requirements and preferences</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon">2</div>
                                <h3>Quote & Agreement</h3>
                                <p>We'll review your request and send you a quote within 24 hours</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon">3</div>
                                <h3>Design & Review</h3>
                                <p>Our designers will create drafts for your review and feedback</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon">4</div>
                                <h3>Final Delivery</h3>
                                <p>Receive your final design files in all required formats</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <center><a href="#" class="cta-button" onclick="showSection('templates')">Back to Templates</a></center>
        </section>
        
        <!-- About Section -->
        <section id="about" class="section">
            <div class="container">
                <div class="content-section">
                    <h2 class="section-title">About CanvaKita</h2>
                    <div class="about-content">

                        <div class="logo"><h3><b>VISION</b></h3><br></div>
                         <p>   
                            To be an online graphic design brand known for its clean, quality results that meet the needs of users.
                            To be the leading company offering professional, accessible and affordable digital graphic design services for all walks of life.</p>
                    <br>
                        <div class="logo"><h3><b>MISSION</b></h3><br></div>
                         <p>   Providing quality graphic design services that are easily accessible and tailored to customer needs.
                            Focusing on customer satisfaction with friendly, responsive and efficient service.</p>
                    <br>    
                        <div class="logo"><h3><b>OBJECTIVE</b></h3><br></div>
                         <p> Provide various design services such as logos, resumes, banners, posters and slides with attractive, quality and neat results.<br>
                            
                            Provide user-friendly online services to make it easier for customers to place orders, inquire and receive design results. <br>
                            
                            Ensure orders are completed in a quick period without compromising quality</p>
                    <br>    
                        <p>Join our community of satisfied customers and discover how easy it can be to create beautiful, professional designs that make an impact.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section">
            <div class="container">
                <div class="content-section">
                    <h2 class="section-title">Get In Touch</h2>
                    <form class="contact-form" action="process_contact.php" method="POST" onsubmit="handleSubmit(event)">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Employee Section -->
        <section id="Employee" class="section">
            <div class="container">
                <div class="content-section"style="overflow: hidden;">
                    <h2 class="section-title">Our Team</h2>
                    <p class="about-content" style="text-align: center; margin-bottom: 3rem;">
                        Meet the talented individuals behind CanvaKita who work tirelessly to bring you beautiful, professional designs.
                    </p>

                        <!-- In your main Employee section, update each team-card like this: -->
                        <div class="team-card" onclick="showEmployeeProfile('anis')" style="cursor: pointer; background: rgba(249, 235, 222, 0.7); padding: 1.5rem; border-radius: 20px; text-align: center; transition: all 0.3s ease; max-width: 100%; box-sizing: border-box;">                            <div class="team-photo" style="width: 150px; height: 150px; border-radius: 50%; background: #815854; margin: 0 auto 1.5rem; overflow: hidden; border: 5px solid rgba(129, 88, 84, 0.2);">
                                <img src="PIC\Anis_Qihah.jpg" alt="Anis Faqihah" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3 style="color: #815854; margin-bottom: 0.5rem;">Anis Faqihah</h3>
                            <p style="color: #666; font-weight: 600; margin-bottom: 1rem;">Creative Director</p>
                            <div style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem;">
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">UX Design</span>
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">Art Direction</span>
                            </div>
                            <p style="color: #555; font-size: 0.9rem;">Brings cultural aesthetics to digital design</p>
                        </div>

                        <!-- Fatin Syazana -->
                        <div class="team-card" onclick="showEmployeeProfile('fatin')" style="cursor: pointer; background: rgba(249, 235, 222, 0.7); padding: 1.5rem; border-radius: 20px; text-align: center; transition: all 0.3s ease; max-width: 100%; box-sizing: border-box;">                            <div class="team-photo" style="width: 150px; height: 150px; border-radius: 50%; background: #815854; margin: 0 auto 1.5rem; overflow: hidden; border: 5px solid rgba(129, 88, 84, 0.2);">
                                <img src="PIC\Fatin_Syaza.jpg" alt="Fatin Syazana" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3 style="color: #815854; margin-bottom: 0.5rem;">Fatin Syazana</h3>
                            <p style="color: #666; font-weight: 600; margin-bottom: 1rem;">Lead Designer</p>
                            <div style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem;">
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">Typography</span>
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">Content Strategy</span>
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">Social Media</span>
                            </div>
                            <p style="color: #555; font-size: 0.9rem;">Turns words into visual masterpieces</p>
                        </div>


                        <!-- Arif Zulkarnain -->
                        <div class="team-card" onclick="showEmployeeProfile('arif')" style="cursor: pointer; background: rgba(249, 235, 222, 0.7); padding: 1.5rem; border-radius: 20px; text-align: center; transition: all 0.3s ease; max-width: 100%; box-sizing: border-box;">                            <div class="team-photo" style="width: 150px; height: 150px; border-radius: 50%; background: #815854; margin: 0 auto 1.5rem; overflow: hidden; border: 5px solid rgba(129, 88, 84, 0.2);">
                                <img src="PIC\Arif_Zul.jpg" alt="Arif Zulkarnain" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3 style="color: #815854; margin-bottom: 0.5rem;">Arif Zulkarnain</h3>
                            <p style="color: #666; font-weight: 600; margin-bottom: 1rem;">UI/UX Specialist</p>
                            <div style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem;">
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">UI Design</span>
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">User Flows</span>
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">Minimalism</span>
                            </div>
                            <p style="color: #555; font-size: 0.9rem;">Makes complex interfaces feel simple</p>
                        </div>  

                        <!-- Khairul Naqiu -->
                <!-- Khairul Naqiu -->
                        <div class="team-card" onclick="showEmployeeProfile('khairul')" style="cursor: pointer; background: rgba(249, 235, 222, 0.7); padding: 1.5rem; border-radius: 20px; text-align: center; transition: all 0.3s ease; max-width: 100%; box-sizing: border-box;">                            <div class="team-photo" style="width: 150px; height: 150px; border-radius: 50%; background: #815854; margin: 0 auto 1.5rem; overflow: hidden; border: 5px solid rgba(129, 88, 84, 0.2);">
                                <img src="PIC\Me(1)(1).jpg" alt="Khairul Naqiu" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3 style="color: #815854; margin-bottom: 0.5rem;">Khairul Naqiu</h3>
                            <p style="color: #666; font-weight: 600; margin-bottom: 1rem;">Development Lead</p>
                            <div style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem;">
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">Coding</span>
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">QA Testing</span>
                                <span style="background: rgba(129, 88, 84, 0.1); color: #815854; padding: 0.2rem 0.6rem; border-radius: 20px; font-size: 0.8rem;">Optimization</span>
                            </div>
                            <p style="color: #555; font-size: 0.9rem;">Ensures everything works perfectly</p>
                        </div>

                    </div>
                </div>
            </div>
            <right><a href="GROUP.html" class="cta-button">Group.html</a></right>
        </section>

        </section>

        <!-- Anis Faqihah Profile -->
        <section id="employee-anis" class="section employee-profile">
            <div class="container">
                <div class="content-section">
                    <a href="#" class="cta-button" onclick="showSection('Employee')" style="margin-bottom: 2rem;">Back to Team</a>
                    <div class="employee-profile-content">
                        <div class="employee-header">
                            <div class="team-photo" style="width: 200px; height: 200px; border-radius: 50%; background: #815854; margin: 0 auto 2rem; overflow: hidden; border: 5px solid rgba(129, 88, 84, 0.2);">
                                <img src="PIC\Anis_Qihah.jpg" alt="Anis Faqihah" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h2 class="section-title">Anis Faqihah</h2>
                            <h3 style="color: #815854; text-align: center; margin-bottom: 1.5rem;">Creative Director & UX Strategist</h3>
                        </div>
                        <div class="employee-details">
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">My Story</h3>
                            <p style="line-height: 1.8; color: #555;">A former art gallery curator turned digital designer, Anis brings a unique perspective to our team. With a Fine Arts degree from UiTM and 8 years in the creative industry, she bridges the gap between aesthetic beauty and functional design. Her passion for Malaysian cultural motifs often inspires our most popular templates.</p>
                            
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">Superpowers</h3>
                            <ul style="line-height: 1.8; color: #555; margin-left: 1.5rem;">
                                <li>✦ Transforms complex ideas into stunning visuals</li>
                                <li>✦ UX/UI design wizardry</li>
                                <li>✦ Color theory expert</li>
                                <li>✦ Team mentorship</li>
                            </ul>
                            
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">Signature Works</h3>
                            <div class="features" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin: 1rem 0;">
                                <div class="feature-card">
                                    <div class="feature-icon">🖼️</div>
                                    <p>Cultural Fusion Banner Series</p>
                                </div>
                                <div class="feature-card">
                                    <div class="feature-icon">📚</div>
                                    <p>Annual Report Template Collection</p>
                                </div>
                            </div>
                            
                            <div class="social-links" style="display: flex; justify-content: center; gap: 1.5rem; margin-top: 2rem;">
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fab fa-linkedin"></i></a>
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fab fa-behance"></i></a>
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        <!-- Fatin Syazana Profile -->
        <section id="employee-fatin" class="section employee-profile">
            <div class="container">
                <div class="content-section">
                    <a href="#" class="cta-button" onclick="showSection('Employee')" style="margin-bottom: 2rem;">Back to Team</a>
                    <div class="employee-profile-content">
                        <div class="employee-header">
                            <div class="team-photo" style="width: 200px; height: 200px; border-radius: 50%; background: #815854; margin: 0 auto 2rem; overflow: hidden; border: 5px solid rgba(129, 88, 84, 0.2);">
                                <img src="PIC\Fatin_Syaza.jpg" alt="Fatin Syazana" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h2 class="section-title">Fatin Syazana</h2>
                            <h3 style="color: #815854; text-align: center; margin-bottom: 1.5rem;">Lead Designer & Content Strategist</h3>
                        </div>
                        <div class="employee-details">
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">My Journey</h3>
                            <p style="line-height: 1.8; color: #555;">A digital nomad who worked with startups in Bali and Singapore before joining CanvaKita, Fatin specializes in creating designs that tell compelling stories. Her background in journalism and love for typography makes our templates not just beautiful, but communication powerhouses.</p>
                            
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">Specialties</h3>
                            <ul style="line-height: 1.8; color: #555; margin-left: 1.5rem;">
                                <li>✦ Typography maestro</li>
                                <li>✦ Brand storytelling</li>
                                <li>✦ Social media visuals</li>
                                <li>✦ Content strategy</li>
                            </ul>
                            
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">Notable Creations</h3>
                            <div class="features" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin: 1rem 0;">
                                <div class="feature-card">
                                    <div class="feature-icon">✍️</div>
                                    <p>Typography Masterclass Series</p>
                                </div>
                                <div class="feature-card">
                                    <div class="feature-icon">📱</div>
                                    <p>Social Media Template Kits</p>
                                </div>
                            </div>
                            
                            <div class="social-links" style="display: flex; justify-content: center; gap: 1.5rem; margin-top: 2rem;">
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fab fa-dribbble"></i></a>
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Arif Zulkarnain Profile -->
        <section id="employee-arif" class="section employee-profile">
            <div class="container">
                <div class="content-section">
                    <a href="#" class="cta-button" onclick="showSection('Employee')" style="margin-bottom: 2rem;">Back to Team</a>
                    <div class="employee-profile-content">
                        <div class="employee-header">
                            <div class="team-photo" style="width: 200px; height: 200px; border-radius: 50%; background: #815854; margin: 0 auto 2rem; overflow: hidden; border: 5px solid rgba(129, 88, 84, 0.2);">
                                <img src="PIC\Arif_Zul.jpg" alt="Arif Zulkarnain" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h2 class="section-title">Arif Zulkarnain</h2>
                            <h3 style="color: #815854; text-align: center; margin-bottom: 1.5rem;">UI/UX Specialist & Graphic Designer</h3>
                        </div>
                        <div class="employee-details">
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">My Path</h3>
                            <p style="line-height: 1.8; color: #555;">Former competitive gamer turned designer, Arif brings a unique perspective on user interaction. His obsession with perfecting user flows and micro-interactions ensures our templates are not just pretty, but incredibly intuitive to use. When he's not designing, he's probably analyzing app interfaces for fun.</p>
                            
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">Expertise</h3>
                            <ul style="line-height: 1.8; color: #555; margin-left: 1.5rem;">
                                <li>✦ UI micro-interactions</li>
                                <li>✦ User flow optimization</li>
                                <li>✦ Minimalist design</li>
                                <li>✦ Design systems</li>
                            </ul>
                            
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">Key Contributions</h3>
                            <div class="features" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin: 1rem 0;">
                                <div class="feature-card">
                                    <div class="feature-icon">🖥️</div>
                                    <p>Dashboard UI Template Series</p>
                                </div>
                                <div class="feature-card">
                                    <div class="feature-icon">📱</div>
                                    <p>Mobile App Design Kits</p>
                                </div>
                            </div>
                            
                            <div class="social-links" style="display: flex; justify-content: center; gap: 1.5rem; margin-top: 2rem;">
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fab fa-github"></i></a>
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fab fa-codepen"></i></a>
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Khairul Naqiu Profile -->
        <section id="employee-khairul" class="section employee-profile">
            <div class="container">
                <div class="content-section">
                    <a href="#" class="cta-button" onclick="showSection('Employee')" style="margin-bottom: 2rem;">Back to Team</a>
                    <div class="employee-profile-content">
                        <div class="employee-header">
                            <div class="team-photo" style="width: 200px; height: 200px; border-radius: 50%; background: #815854; margin: 0 auto 2rem; overflow: hidden; border: 5px solid rgba(129, 88, 84, 0.2);">
                                <img src="PIC\Me(1)(1).jpg" alt="Khairul Naqiu" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="badge" style="background: #815854; color: white; padding: 0.3rem 1rem; border-radius: 20px; display: inline-block; margin-bottom: 1rem;">Tech Wizard</div>
                            <h2 class="section-title">Khairul Naqiu</h2>
                            <h3 style="color: #815854; text-align: center; margin-bottom: 1.5rem;">Development Lead & Quality Assurance</h3>
                        </div>
                        <div class="employee-details">
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">My Background</h3>
                            <p style="line-height: 1.8; color: #555;">A self-taught coder who started building websites at 14, Khairul ensures every template we create works flawlessly across all platforms. His meticulous attention to detail means our users never encounter bugs or compatibility issues. By night, he's an open-source contributor and tech blogger.</p>
                            
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">Super Skills</h3>
                            <ul style="line-height: 1.8; color: #555; margin-left: 1.5rem;">
                                <li>✦ Cross-platform compatibility</li>
                                <li>✦ Performance optimization</li>
                                <li>✦ Automated testing</li>
                                <li>✦ Tech documentation</li>
                            </ul>
                            
                            <h3 style="color: #815854; margin: 2rem 0 1rem;">Behind the Scenes</h3>
                            <div class="features" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin: 1rem 0;">
                                <div class="feature-card">
                                    <div class="feature-icon">🧪</div>
                                    <p>Template Testing Framework</p>
                                </div>
                                <div class="feature-card">
                                    <div class="feature-icon">⚡</div>
                                    <p>Export Optimization System</p>
                                </div>
                            </div>
                            
                            <div class="social-links" style="display: flex; justify-content: center; gap: 1.5rem; margin-top: 2rem;">
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fab fa-github"></i></a>
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fab fa-dev"></i></a>
                                <a href="#" style="color: #815854; font-size: 1.5rem;"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</main>

    <!--footer-->
 
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>About CanvaKita</h3>
                <p>Your premier destination for high-quality Malaysian-made design templates. We help bring your creative visions to life with professional, easy-to-use templates.</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul class="footer-links" style="padding: 0; margin: 0; list-style: none; text-align: center;">
                    <li style="margin-bottom: 0.5rem;"><a href="#" onclick="showSection('home')">Home</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="#" onclick="showSection('templates')">Templates</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="#" onclick="showSection('about')">About Us</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="#" onclick="showSection('contact')">Contact</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="#" onclick="showSection('custom')">Custom Orders</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="#" onclick="showSection('Employee',event)">Employee</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Contact Info</h3>
                <p><i class="fas fa-map-marker-alt"></i> Kedah, Malaysia</p>
                <p><i class="fas fa-envelope"></i> hello@canvakita.com</p>
                <p><i class="fas fa-phone"></i> +60 13-512-3621</p>
                <p><i class="fas fa-clock"></i> Mon-Fri: 9AM - 6PM</p>
            </div>

            <div class="footer-column">
                <h3>Newsletter</h3>
                <p>Subscribe to get updates on new templates and special offers.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit" class="submit-btn" style="margin-top: 0.5rem;">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 CanvaKita. All rights reserved.</p>
            <p>Recommended browser: Latest versions of Chrome, Firefox, Safari, or Edge.</p>
            <p>Last updated: <span id="lastUpdated"></span></p>
        </div>
    </footer>

<script src="script.js"></script>
</body>
</html>
