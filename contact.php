<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/ico" href="./images/favi-min.png" />
    <title>Data-Seis - Michał Cis</title>
    <meta charset="utf-8">
    <meta name="description" content="Professional Seismic Party Chief and Project Manager. My main area of expertise is on-shore seismic acquisition. See more...">
    <meta name="keywords" content="Seismic acquisition Project Manager">
    <meta name="author" content="Bartlomiej Cis">
    <meta property="og:image" content=".../images/load-img-min.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
        <div class="fl spinner5">
            <?php
$to      = 'kontakt@bedekodzic.pl';
$to2      = 'cismichal@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';
   
mail($to2, $subject, $message,$header);
if(mail($to, $subject, $message,$header)) {
	echo '<div class="form-php"> <img class="logo" src="./images/logo.svg" alt=""><h3>Your message is sent</h3><div><a href="../index.html#contact" class="hvr-underline-from-center" >
                                <h3 >Return</h3>
                            </a>';
} else {
    echo '<div class="form-php"> <img class="logo" src="./images/logo.svg" alt=""><h3>Connection error. Pleasy try again.</h3><div><a href="../index.html#contact" class="hvr-underline-from-center" >
                                <h3 >Return</h3>
                            </a>';
}





?>
        </div>
</body>

