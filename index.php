<?php

/** Global varibals */

$_name = "kitty";
$_header = "#header";
$_about_me = "#AboutMe";
$_gallery = "# ";
$_contactMe = "#";
$_img_link = 'img/1.jpg';

/**Gallery  photos varibals */

$_photo_one = 'img/one.jpg';
$_photo_two = 'img/two.jpg';
$_photo_three = 'img/three.jpg';

/* change logo  */

$_change_logo = "MEC Academy" ;

/** change Font size */

$_h1_font = 80 ;
$_h3_font = 25 ;
$_p_font = 16 ;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">
    <title>kitty Site</title>

    <style>
     <?php include  "style/style.php" ?>
    </style>
</head>

<body>
<nav class="nav">
    <div class="cont">
        <div class="logo">
            <?=$_change_logo?>
        </div>
        <div class="topnavLinks">
            <a href="<?=$_header ?>">Home</a>
            <a href="<?= $_about_me ?>">About Me</a>
            <a href="<?= $_gallery ?>">Galary</a>
            <a href="<?= $_contactMe ?>">Contact Me</a>
        </div>
    </div>
</nav>

<header id="#header">
    <div class="topHeader">
        <div class="head_left">
            <h1>My Name is
                <?= $_name ?>
            </h1>
            <h3>Why do humans love cats, according to science, and is it healthy?</h3>
            <p>There are some 85 million cats in American households, many of which are cherished family members. What
                is behind felines’ appeal to humans? Could it be their apparently choosy nature? And what is their
                effect on human health? This Special Feature investigates.</p>
        </div>
        <div class="headRight">
            <img src="<?= $_img_link ?>" alt="Cat" width=250px>
        </div>
    </div>
</header>

<?php

$_body_sec = <<<BODYSEC

<section id="<?$_about_me?>" class="aboutCats">

<div class="about_title"><h3>What people love about cats</h3></div>
    
    <div class="about_cont">
  
        <div class="about_left_div">
        <img src="img/one.jpg" alt="cat" >
        </div>
        <div class="about_right_div">
            <p>When people say they love cats, that love can be intense. For many, a feline friend is a singularly 
                    trustworthy confidant and a comforting presence in times of loneliness.
                    Are such close relationships, however, healthy on a psychological or physical level?
                    Geneticists, infectious disease experts, psychologists, and others have put forward several theories as to why cats resonate 
                    so strongly with some people, and what effect felines may have on their humans’ health.
                    Dr. Patricia Pendry of Washington State University studies human-animal interactions. She has published research describing the 
                    especially strong bond between highly emotional people and their cats.
                    Dr. Pendry speculated to MNT that felines’ discriminating behavior may be irresistible to humans:
            </p>
        </div>
    </div>

</section>


BODYSEC;

echo $_body_sec;

?>


</body>

</html>