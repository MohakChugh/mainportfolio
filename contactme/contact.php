<?php 
if(isset($_POST['submit'])){
    $to = "me.mohakchugh@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div class="contact-clean" style="background-color:rgb(54,59,65);">
        <form method="post">
            <h1 class="text-center" data-aos="fade" data-aos-duration="550" style="color:rgb(168,180,191);">Just a few quick Questions</h1>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" data-aos="fade" data-aos-delay="500"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email" data-aos="fade" data-aos-delay="600"><input class="form-control" type="tel" placeholder="Phone Number" data-aos="fade" data-aos-delay="750" style="margin-top:14px;">
                <input
                    class="form-control" type="url" placeholder="Website" data-aos="fade" data-aos-delay="900" style="margin-top:17px;"></div>
            <div class="form-group"><textarea class="form-control form-control-sm" rows="14" name="message" placeholder="Tell me about your project... what is it? what are you working on, What help and services do you require. How can i help, Timelines and detail. Basically Everything!"
                    data-aos="fade" data-aos-delay="1400"></textarea></div>
            <div class="form-group"><button class="btn btn-primary active btn-lg" type="submit" disabled="disabled" data-bs-hover-animate="tada" id="submitcontactbutton" style="margin-top:0px;">Submit</button></div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>