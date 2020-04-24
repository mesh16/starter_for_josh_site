<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Josh Whitkin | Games Design for the future</title>

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
    <?php
    /*
    Template Name: Home page
    */
    ?>

    <?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid aboutbg text-center">
        <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

            <div class="blocker"></div>

        </div>
        <!--container-->
    </section>


    <section class="container-fluid articlesbg">

        <div class="container">

            <div class="row">
                <!-- a row that gives us access to the BS columns-->

                <div class="article-title text-center">
                <h3 class="text-center article-title "><?php the_field('titleforarticles'); ?></h3>
                </div>

                <!--col-md-4-->
                <div class="col-md-4 article-cent">
                <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage'); ?>">
                <h4><?php the_field('articletitle'); ?></h4>
                <p><?php the_field('articleexcerpt'); ?></p>
                <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>    
                </div>

                <!--col-md-4-->
                <div class="col-md-4 article-cent">
                <img class="img-responsive" alt=“model” src="<?php the_field('articleimagetwo'); ?>">
                <h4><?php the_field('articletitletwo'); ?></h4>
                <p><?php the_field('articleexcerpttwo'); ?></p>
                <a href="<?php the_field('readmoretwo'); ?>" class="readmore">CONTINUE READING</a> 
                </div>
                <!--col-md-4-->

                <div class="col-md-4 article-cent">
                <img class="img-responsive" alt=“games” src="<?php the_field('articleimagethree'); ?>">
                <h4><?php the_field('articletitlethree'); ?></h4>
                <p><?php the_field('articleexcerptthree'); ?></p>
                <a href="<?php the_field('readmorethree'); ?>" class="readmore">CONTINUE READING</a> 
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
