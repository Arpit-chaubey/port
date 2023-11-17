<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ff005d">
    <meta name="description" 
    content="Welcome to my portfolio! I am thrilled 
    to showcase my skills and work, and I invite you to explore and discover 
    how I can help you take your digital presence to the next level.">
    <title>FolioMy_Arpit</title>
    <link rel="icon" href="img/myfoliologo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-continer">
        <!--! ------------home--------------->
        <sction>
            <div id="home">
                <div class="container">
                    <nav>
                        <div class="logo">MY FOLIO</div>
                        <ul id="navitem">
                            <li><img class="side" src="img\logout.png" alt="Sorry! error" onclick="closemenu()"></i></li>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <img class="side" src="img\menu.png" alt="Sorry! error" onclick="openmenu()">
                    </nav>
                    <script>
                        var navite = document.getElementById('navitem');

                        function openmenu() {
                            navite.style.right = "0px";
                            transition= "2s";
                        }

                        function closemenu() {
                            navite.style.right = "-170px";
                        }
                    </script>
                    <div class="wapper">

                        <div class="cols col1">
                            <span class="hello1">HELLO</span>
                            <h1>I'm <span class="chng"></span></h1>
                            <p>Welcome to my portfolio! I am thrilled to showcase my skills and work, and I invite you to explore and discover how I can help you take your digital presence to the next level.</p>
                            <div class="btn">
                                <a href="ARPIT resume.pdf" download="ARPIT resume.pdf"><button class="dc">DOWNLOAD CV</button></a>
                            </div>
                        </div>
                        <div class="imgbox">
                        </div>
                    </div>
                </div>
            </div>
        </sction>
        <!-- !----------------- about ------------------------->
        <section>
            <div id="about">
                <div class="container2">
                    <div class="row">
                        <div class="ab-col1">
                            <img src="img/Untitled design.png" alt="Sorry! error"
                            srcset="img/Untitled design.png 1000w, img/Untitled design.png 2000w, img/Untitled design.png 3000w"
                            >
                        </div>
                        <div class="ab-col2">
                            <h1>About<b>Me</b></h1>
                            <p>
                                <b># Hello! I'm Arpit Chaubay.<br>
                                🌟 **Tech Enthusiast** | 📚 **Computer Science Student** | 💡 **Innovator**<br>
                                🎓 I'm a dedicated Computer Science student with a deep passion for technology and a strong desire to make a positive impact through innovation.<br>
                                🚀 **My Journey:**<br>
                                - Completed my diploma in Computer Science at RAJA JAIT SHIGH POLYTHICNIC.<br>
                                - Currently pursuing a Bachelor's degree in Computer Science at MRIIRS.<br>
                                - Thrive on staying up-to-date with the latest tech trends and developments.<br>
                                💻 **My Expertise:**<br>
                                - Proficient in languages such as Python, PHP.<br>
                                - Web development skills using HTML, CSS, and JavaScript.<br>
                                - Worked on framework like Bootstrap , Tailwind .<br>
                                - Data enthusiast exploring the realms of Machine Learning and Data Analysis.<br>
                                - An avid problem solver who enjoys tackling complex challenges.<br></b>
                            </p>

                            <p class="t-link">My Skills <b>:</b></p>
                            <div class="skill">
                                <span class="hello">HTML:</span>
                                <span class="hello2">CSS:</span>
                                <span class="hello3">J.S:</span>
                                <span class="hello4">PHP:</span>
                                <span class="hello5">PYTHON:</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--!------------------ services----------------------->
        <section>
            <div id="services">
                <div class="container3">
                    <h1 class="title2"><b>My </b>Projects</s></h1>
                    <div class="service-list">
                        <div class="block">
                            <h2 class="header">AI VOICE ASSITANCE</h2>
                            <p class="desc">An AI Voice Assistance System based on ChatGPT is a cutting-edge technology that combines natural language processing and artificial intelligence to provide users with a conversational and voice-activated interface for a wide range of tasks and information retrieval. This system leverages the power of GPT technology, which is designed to understand and generate human-like text, making it highly effective in voice-based interactions.</p>
                        </div>
                        <div class="block">
                            <h2 class="header">CLUB OPERATION MANAGER</h2>
                            <p class="desc">The Coding Club Operation Manager Web Application is a powerful and versatile tool designed to streamline and enhance the management of clubs, coding bootcamps,and programming-related educational initiatives. Whether you're a coding club coordinator, an instructor, or an administrator, this web app is your all-in-one solution to efficiently manage and organize all aspects of your coding club's operations.</p>
                        </div>
                        <div class="block">
                            <h2 class="header">STARTING SOON...</h2>
                            <br>
                            <p class="desc">JUST WAIT WORK START SOON.</p>
                        </div>
                    </div>
                    <a href="#home"><button class="btn3">TOP</button></a>
                </div>
            </div>
        </section>
        <!--!----------------- footer ------------------------->
        <section>
            <div id="contact">
                <div class="container4">
                    <h1 class="title3">Contact <b>Me</b></h1>
                    <div class="row2">
                        <div class="cont-left">
                            <p><img alt="Sorry! error" src="img\envelopes.png"></i>  arpit@helpinggeeks.com</p>
                            <div class="social">
                                <a name="insta" href="https://www.instagram.com/oneoff_weeb/"><img src="img\instagram.png" alt="Sorry! error"></a>
                                <a name="linkedin" href="https://www.linkedin.com/in/arpit-chaubay-616349289/"><img src="img\linkedin.png" alt="Sorry! error"></a>
                                <a name="twitter" href="https://twitter.com/ArpitChaubay"><img src="img\twitter-x-logo-42554.png" alt="Sorry! error"></a>
                                <a name="facebook" href="https://www.facebook.com/arpit.chaubey.319/"><img src="img\facebook.png" alt="Sorry! error"></a>
                            </div>
                            <a href="ARPIT resume.pdf" download="ARPIT resume.pdf"><button class="dc">DOWNLOAD CV</button></a>
                        </div>
                        <div class="cont-right">
                            <form method="post">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Your Email" required>
                                <textarea name="message" rows="6" placeholder="Your Message"></textarea>
                                <button class="submit" name="submit2" type="submit">Submit</button>
                            </form>
                            <div class="php">
                                <?php
                                error_reporting(0);
                                if (isset($_POST['submit2'])) {
                                    $server = "sql206.epizy.com";
                                    $username = "epiz_33820970";
                                    $password = "Ds7CYs31PsxR";
                                    $database = "epiz_33820970_portfolio";

                                    $conn = mysqli_connect($server, $username, $password, $database);

                                    if (!$conn) {
                                        echo "fail to connect";
                                    }


                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $message = $_POST['message'];
                                    $toEmail = "arpitchaubay2004@gmail.com";

                                     $query = "INSERT INTO `contactme` (`s.no`, `Name`, `E-mail`, `Your Message`) VALUES (NULL, '$name', '$email', '$message');";
                                     
                                     $run = mysqli_query($conn, $query);
                                    
                                     if (!$run) {
                                         echo "failed";
                                     }else{
                                         echo "Thank you for message";
                                     }

                                  
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------copyright -------------->
        <section>
            <div class="copyright">
                <p>Copyright © <b class="b2">MY FOLIO</b>. Made with <b>♡</b> by Arpit.</p>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('.chng', {

            strings: ["Coder", "STUDENT"],
            typeSpeed: 150,
            backspeed: 90,
            backspeed: 90,
            loop: true
        });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JMX11BPXBT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JMX11BPXBT');
</script>


</body>

</html>