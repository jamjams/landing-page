<!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css"> 
    <title></title>
 </head>
 <body>
    
    <div class="header">
        <h1>Contact Me</h1> 
        
    </div>

    <div class="navbuttons">
        
        <a href="index.php"><button type="button" class="btn btn-contact"  autocomplete="off">
            HOME
        </button></a>
        <a href="aboutme.php"><button type="button" class="btn btn-primary" autocomplete="off">
            ABOUT ME
        </button></a>
    
        <a href="projects.php"><button type="button" class="btn btn-projects" autocomplete="off">
            PROJECTS
        </button></a>
    </div>

    <div class="description">
        Choose your social account you most use.
        <div class="contactbuttons">
            <a href="https://www.ymail.com"><button type="button" class="btn btn-ymail btn-xs">Ymail</button></a>
            <a href="https://www.gmail.com"><button type="button" class="btn btn-gmail btn-xs">Gmail</button></a>
            <a href="https://www.facebook.com"><button type="button" class="btn btn-facebook btn-xs">Facebook</button></a>

            <div class="email">jahmelah.maathotep@gmail.com</div>
        </div>
        
    </div>
    <div class="container">
    
      
    </div>




    <!-- <address>
       Email me <a href="mailto:jahmelah.maathotep@gmail.com">Jahmelah</a>.<br> 
        Visit us at:<br>
        Example.com<br>
        Box 564, Disneyland<br>
        USA
    </address> -->

    <!-- <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
    <div class="row">
        <label for="name">Your name:</label><br />
        <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="email">Your email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="message">Your message:</label><br />
        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
    </div>
    <input id="submit_button" type="submit" value="Send email" />
</form>           -->           

    

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>
<?php
/* Set e-mail recipient */
/*$myemail  = "jahmelah.maathotep@index.php";

/* Check all form inputs using check_input function 
$yourname = check_input($_POST['yourname'], "Enter your name");
$subject  = check_input($_POST['subject'], "Write a subject");
$email    = check_input($_POST['email']);

$likeit   = check_input($_POST['likeit']);
$how_find = check_input($_POST['how']);
$comments = check_input($_POST['comments'], "Write your comments");

/* If e-mail is not valid show error message 
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* If URL is not valid set $website to empty */
/*if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
{
    $website = '';
}

/* Let's prepare the message for the e-mail 

Your contact form has been submitted by:

Name: $yourname
E-mail: $email
URL: $website

Like the website? $likeit
How did he/she find it? $how_find

Comments:
$comments

End of message
";

/* Send the message using mail() function 
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page 
header('Location: thanks.htm');
exit();

/* Functions we used
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>*/