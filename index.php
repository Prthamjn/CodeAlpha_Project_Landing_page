<?php
if (isset($_POST['name'])) {



    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this database failed due to" .
            mysqli_connect_error());
    }
    // echo"success connecting to the database";


    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $desce = $_POST['desce'];

    $sql = "INSERT INTO `port`.`port` ( `name`, `email`, `subject`, `desce`) VALUES ( '$name', '$email', '$subject', '$desce');";
    // echo $sql;

    if ($con->query($sql) == true) {
        // echo "successfully inserted";
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>



<!-- html start -->




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratham Jain | Portfolio</title>
    <link rel="icon" type="image/x-icon" href="./icon/favicon.png">
    <link rel="stylesheet" href="style.css">


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/ee85f7f432.js" crossorigin="anonymous"></script>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <style>
        #portfolio {
            padding-top: 25px;
        }

        .portfolio-title {
            font-weight: bold;
        }

        .portfolio-subtitle {
            font-style: italic;
        }

        .thumbnail:hover {
            background-color: #333;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <!-- <div class="scroll-up-btn"> -->
    <!-- <i class="fas fa-angle-up"></i> -->
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">P<span>J.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="#contact" class="menu-btn">Projects</a></li>
            </ul>

            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- this is home section -->

    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hey, My Name is </div>
                <div class="text-2">Rohan Agrawal </div>
                <div class="text-3">From Aligarh <span class="typing"></span></div>
                <a href="#contact">Hire Me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->

    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/WhatsApp Image 2023-03-16 at 12.50.32 PM.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Pratham and I'm a <span class="typing-2"></span></div>
                    <p>Seeking a Web Developer role where I can utilize my technical skills,problem solving abilities, and passion in the field of web development to contribute to the success of the organization.</p>
                    <a href="pdf/Pratham Jain Resume.pdf" download>Download Resume</a>
                </div>

            </div>
        </div>
    </section>
    i
    <!-- Services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">WEB DESIGNS</div>
                        <p>I try to do good and trending web design, I make all web designs responsive.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">SEO</div>
                        <p>Search engine optimization: the process of making your site better for search engines.</p>
                    </div>
                </div>




                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">WEB DEVELOPMENT</div>
                        <p>I design web pages with the help of HTML, CSS and JAVASCRIPT. and try to do something unique.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My Skills & Expertise</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My Creative skills & expriences</div>
                    <p>HTML, CSS and JAVASCRIPT, PHP, MY SQL All these are my skills and my experience is not enough because I am new in this field, now but I will try Good projects. </p>
                    <a href="#">Read More</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>50%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JAVASCRIPT</span>
                            <span>60%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>70%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>SQL</span>
                            <span>40%</span>
                        </div>
                        <div class="line sql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>DBMS</span>
                            <span>90%</span>
                        </div>
                        <div class="line dbms"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>












    <!-- contact section start -->

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>For any Work or Information, You can fill this form and if you want to get fast reply,then you can contact me through email.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title"><a href="#about">Pratham Jain</a></div>
                            </div>
                        </div>

                        <div class="row">
                            <i class="fab fa-linkedin-in"></i>
                            <div class="info">
                                <div class="head">Linkedin</div>
                                <div class="sub-title"><a href="https://in.linkedin.com/in/prthamjn" target="_blank">/Pratham Jain</a></div>
                            </div>
                        </div>

                        <div class="row">
                            <i class="fab fa-instagram"></i>
                            <div class="info">
                                <div class="head">Instagram</div>
                                <div class="sub-title"><a href="https://www.instagram.com/prthmjn/" target="_blank">/Prthmjn</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message Me</div>

                    <form action="index.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input required type="text" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="field email">
                                <input required type="text" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="field ">
                            <input required type="text" name="subject" id="subject" placeholder="Subject">
                        </div>
                        <div class="field textarea">
                            <textarea name="desce" id="describe" cols="30" rows="10" placeholder="Describe Project" required></textarea>
                        </div>
                        <div class="button">
                            <button type="Submit">Send Message</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">Pratham Jain</a> | <span class="far fa-copyright"></span>2023 All rights Reserved.</span>
    </footer>

    <script>
        var typed = new Typed(".typing", {
            strings: ["Student", " Web Developer"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        });

        var typed = new Typed(".typing-2", {
            strings: ["Student", " Web Developer"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        });
    </script>




</body>

</html>