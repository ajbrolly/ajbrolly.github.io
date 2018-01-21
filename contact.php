<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Me | Ashlee Brolly</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,900" rel="stylesheet">
</head>

<body>

    <div class="wrapper">

        <!-- Main Navigation -->
        <header>
            <div class="header-content clearfix">
                <a href="index.html" id="logo"><img src="img/logo-yellow.png"></a>
                <nav>
                    <ul>
                        <li>
                            <a href="index.html"> About</a>
                        </li>
                        <li>
                            <a href="portfolio.html"> Portfolio</a>
                        </li>
                        <li>
                            <a href="contact.php"> Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="container clearfix">

            <!-- Main Content Container -->
            <div class="main-content">
                <h2>Contact</h2>

                <!-- Contact Form -->
                <div class="form-container">
                    <form action=“includes/signup.inc.php” method=“POST”>
                        <?php
                            if (isset($_GET['name'])) {
                                $name = $_GET['name'];
                                echo '<input type=“text” name="name" value="'.$name.'">';
                            } else {
                                echo '<input type=“text” name="name">';
                            }   
                        ?>

                        <input type=“text” name=“email” placeholder=“Email”>
                
                        <?php 
                            if (isset($_GET['subject'])) {
                                $subject = $_GET['subject'];
                                echo '<input type=“text” name="subject" value="'.$subject.'">';
                            } else {
                                echo '<input type=“text” name="subject">';
                            }

                            if (isset($_GET['message'])) {
                                $message = $_GET['message'];
                                echo '<textarea name="message" rows="5" value="'.$message.'"></textarea>';
                                
                            } else {
                                echo '<textarea name="message" rows="5"></textarea>';
                            }
                        ?>
                        <button type=“submit” name”submit”>Sign Up</button>
                    </form>
                    
                    <?php
                        if (!isset($_GET[form])) {
                            exit();
                        }
                        else {
                            $formCheck = $_GET['form'];
            
                            if ($formCheck == "empty") {
                                echo "<p class='error'>You did not fill in all fields!</p>";
                                exit();
                            } elseif ($formCheck == "char") {
                                echo "<p class='error'>You used invalid characters!</p>";
                                exit();
                            } elseif ($formCheck == "email") {
                                echo "<p class='error'>You used an invalid email!</p>";
                                exit();
                            } elseif ($formCheck == "success") {
                                echo "<p class='error'>You have been signed up!</p>";
                                exit();
                            }
            
            
                        }
                    
                    ?>
                </div>
            </div>

            <!-- Sidebar with Social & Contact Links -->
            <div class="side-bar">
                <h3>Connect with Me</h3>
                <div id="social-container" class="clearfix">
                    <ul>
                        <li>
                            <a href="https://github.com/ajbrolly" target="_blank">
                                <img src="img/github.png" class="social-icons" alt="GitHub">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/ashleebrolly/" target="_blank">
                                <img src="img/linkedin.png" class="social-icons" alt="LinkedIn">
                            </a>
                        </li>
                        <li>
                            <a href="https://stackoverflow.com/users/8497389/ashlee-brolly?tab=profile" target="_blank">
                                <img src="img/stackoverflow.png" class="social-icons" alt="StackOverflow">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="push"></div>
    </div>

    <!-- Sticky Footer  -->
    <footer class="footer">
        © Copyright 2017 Ashlee Brolly
    </footer>

</body>

</html>