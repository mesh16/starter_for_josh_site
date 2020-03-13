<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    
</head>

<body>

<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid aboutbg text-center">
        <div class="container">
            <h2> GAMES &amp; LEVEL DESIGNER </h2>
            <p class="particle">...and particle wizard</p>
            <p class="about-text">My name is Josh Whitkin. I’m a professional with more than 7 years of industry experience in Games Design, Level Design, Scripting and Visual Effects. What makes me passionate about games is the combination of technology and creativity, and how multiple disciplines come together to create an interactive experience. Whether I'm designing for puzzle games, 2D platformers or 3D environments. I always tell a story.</p>
            <div class="blocker"></div>

        </div>
    </section>


    <section class="container-fluid articlesbg">

        <div class="container">

            <div class="row">
                <!-- a row that gives us access to the BS columns-->

                <div class="article-title text-center">
                    <h3>LATEST ARTICLES</h3>
                </div>

                <div class="col-md-4 article-cent">
                    <!--md is where it breaks - medium - px? -->
                    <img class="img-responsive" alt=“portait” src="http://206.189.45.97/~mesh16/wp-content/themes/josh_theme/images/portrait.jpg">
                    <h4>A PORTRAIT</h4>
                    <p class="date">12 December 2020</p>
                    <p>STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts. </p>
                    <p class="readmore">CONTINUE READING</p>

                </div>
                <!--col-md-4-->

                <div class="col-md-4 article-cent">
                    <img class="img-responsive" alt=“model” src="http://206.189.45.97/~mesh16/wp-content/themes/josh_theme/images/model.jpg">
                    <h4>A MODEL</h4>
                    <p class="date">12 December 2020</p>
                    <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts. </p>
                    <p class="readmore">CONTINUE READING</p>

                </div>
                <!--col-md-4-->

                <div class="col-md-4 article-cent">
                    <img class="img-responsive" alt=“games” src="http://206.189.45.97/~mesh16/wp-content/themes/josh_theme/images/games.jpg">
                    <h4>GAMES DESIGN</h4>
                    <p class="date">12 December 2020</p>
                    <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts. </p>
                    <p class="readmore">CONTINUE READING</p>

                </div>
                <!--col-md-4-->


            </div>
            <!--row-->




        </div><!-- container -->


    </section>

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
