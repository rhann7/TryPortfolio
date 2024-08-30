<?php
    $fname = "Rai";
    $lname = "Handitya";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/08bedb65c4.js" crossorigin="anonymous"></script>

        <title>My Portfolio Website</title>
    </head>
    <body>
        <div id="header">
            <div class="container">
                <nav>
                    <div class="logo"><?php echo $fname + $lname ?></div>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="header-text">
                    <p>Hi There!</p>
                    <h1>I'm <span>Rai Handitya</span></h1>
                    <p>Software Engineering Student</p>
                </div>
            </div>
        </div>

        <div id="about">
            <div class="container">
                <div class="row">
                    <div class="about-col-1">
                        <img src="./images/about-pic.png">
                    </div>
                    <div class="about-col-2">
                        <h1 class="sub-title">About Me</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolorem id ad animi hic soluta! Magni, corrupti! Asperiores quo officia autem, doloremque dicta placeat consequatur et ducimus voluptas deserunt suscipit quibusdam quis! Impedit provident quasi aspernatur, fuga corporis cum omnis enim minima praesentium consequatur repellat, sint odio facilis ipsam earum!</p>

                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links" onclick="opentab('experience')">Experience</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>
                        </div>
                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <li><span>UI/UX</span><br>Designing Web/App Interfaces</li>
                                <li><span>Basic Programming</span><br>Basic Programming Using Java and Python</li>
                                <li><span>Web Development</span><br>Web App Development</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2023 - Current</span><br>Student at SMK Taruna Bhakti Depok</li>
                                <li><span>2020 - 2023</span><br>Student at SMP Taruna Bhakti Depok</li>
                                <li><span>2014 - 2020</span><br>Student at SD Negeri Sukamaju 1</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li><span>2023</span><br>Web Development Training at SMK Taruna Bhakti Depok</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="services">
            <div class="container">
                <h1 class="sub-title">My Services</h1>
                <div class="services-list">
                    <div>
                        <i class="fa-solid fa-laptop-code"></i>
                        <h2>Web Design</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat tempore perferendis quae. Eum, quasi consectetur?</p>
                        <a href="#">Learn More</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-icons"></i>
                        <h2>UI/UX Design</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat tempore perferendis quae. Eum, quasi consectetur?</p>
                        <a href="#">Learn More</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-gamepad"></i>
                        <h2>Game Installation</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat tempore perferendis quae. Eum, quasi consectetur?</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="projects">
            <div class="container">
                <h1 class="sub-title">My Work</h1>
                <div class="work-list">
                    <h2 class="sub-sub-title">Coming Soon... Wkwkwk</h2>
                </div>
            </div>
        </div>

        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="sub-title">Contact Me</h1>
                        <p><i class="fa-solid fa-paper-plane"></i> contact@example.com</p>
                        <p><i class="fa-solid fa-square-phone"></i> 081230987645</p>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.github.com/"><i class="fa-brands fa-github"></i></a>
                        </div>
                    </div>
                    <div class="contact-right">
                        <form>
                            <input type="text" name="Name" placeholder="Your Name" required>
                            <input type="email" name="Email" placeholder="Your Email" id="email" required>
                            <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                            <button type="submit" class="btn" onclick="message()">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy <?php echo $fname ?>. Made with anything</p>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>