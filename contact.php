<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/ssp.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>SSP Engineers Ltd</title>
   
</head>

<body>

    <div class="navDiv">

        <nav class="navbar navbar-expand-lg navbar-dark offset-xl-3 col-xl-6  offset-lg-2 col-lg-8 offset-md-0 col-md-12">

            <img style="width:80px;margin:0 10px 0 0px;" src="images/SSPCircuit2.2.svg" alt="">
            <a class="sspTitle" href="#">Engineers <span style="font-size:18px;color:#ddd;">LTD</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.html">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.html">Contact<span class="sr-only">(current)</span></a>
                    </li>


                </ul>

            </div>

        </nav>

    </div>

    <img class="bgImg" src="images/Dunlin Alpha.jpeg" alt="">
    <div class="firstSection">

        <div class="contactDiv">

            <div id="largeLogoWelcome" class="contactTextDiv">
                <h1 style="margin:20px 0 40px 0;">Contact SSP</h1>

                <div style="position:relative;">
                    <?php
                    if (isset($_POST['submit'])) {
                        $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
                        $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
                        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
                        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
                        if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
                            $name_error = 'Invalid name';
                        }
                        if (!preg_match("/^[A-Za-z .'-]+$/", $subject)) {
                            $subject_error = 'Invalid subject';
                        }
                        if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
                            $email_error = 'Invalid email';
                        }
                        if (strlen($message) === 0) {
                            $message_error = 'Your message should not be empty';
                        }
                    }
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]); ?>" method="POST">
                        <label for="name">Name:</label><br>
                        <input type="text" name="name">
                        <p>
                            <?php if (isset($name_error)) echo $name_error; ?>
                        </p>
                        <label for="subject">Subject:</label><br>
                        <input type="text" name="subject">
                        <p>
                            <?php if (isset($subject_error)) echo $subject_error; ?>
                        </p>
                        <label for="email">Email:</label><br>
                        <input type="text" name="email">
                        <p>
                            <?php if (isset($email_error)) echo $email_error; ?>
                        </p>
                        <label for="message">Message:</label><br>
                        <textarea name="message"></textarea>
                        <p>
                            <?php if (isset($message_error)) echo $message_error; ?>
                        </p>
                        <input class="btn-primary btn" type="submit" name="submit" value="Submit">
                        <?php
                        if (isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
                            $to = 'md1618tt@gmail.com'; // edit here
                            $headers[] = 'MIME-Version: 1.0';
                            $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                            $headers[] = 'From: SSP <mdrahony.online/SSP>';
                            $message = "
                        <html>
                        <head>
                        <title>Contact Form Message</title>
                        </head>
                        <body>
                        <p>Message from: " . $name . "\r\n\r\n</p>
                        <p>Email: " . $email . "\r\n\r\n</p>
                        <p>Subject: " . $subject . "\r\n\r\n</p>
                        <p>Message: " . $message . "</p>
                        </body>
                        </html>
                        ";

                            if (mail($to, $subject, $message, implode("\r\n", $headers))) {
                                echo '<p style="color: green">Message sent</p>';
                            } else {
                                echo '<p>Error occurred, please try again later</p>';
                            }
                        }
                        ?>
                    </form>


                </div>
            </div>
        </div>


    </div>
    <div class="footerCont">
        <div class="footerInnerTop"></div>
        <div class="footerInnerBottom">
            <div class="contactssp flexItem">
                <a href="contact.php" style="text-decoration: none;color:white;">CONTACT<br> SSP</a>
            </div>
            <div class="madeBy flexItem">
                <a href="#" style="text-decoration: none;color:white;">ASSOCIATE<br> LINKS</a>
            </div>

        </div>
        <div class="devLink">
            <a href="http://www.mdrahony.online" style="text-decoration: none;color:#bbb; font-size:12px;">&copy; SSP | Developer</a>
        </div>
    </div>
</body>
<script src="jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="js/SSP.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>