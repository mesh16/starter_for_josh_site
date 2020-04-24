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

    <?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid aboutbg text-center">
        <div class="container">

            <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=2');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            <div>
                <p class="about-text"><?php the_content() ?></p>
            </div>
            <?php
endwhile;
endif;
wp_reset_query();?>

            <div class="blocker"></div>

        </div>
        <!--container-->
    </section>


    <section class="container-fluid articlesbg">

        <div class="container">

            <div class="row">
                <!-- a row that gives us access to the BS columns-->

                <div class="article-title text-center">
                    <h3>LATEST ARTICLES</h3>
                </div>

                <div class="col-md-4 article-cent">

                    <?php $post_id = 17;
$queried_post = get_post($post_id);?>
                    <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
                    <h4><?php echo $queried_post->post_title; ?></h4>
                    <?php echo $queried_post->post_excerpt; ?>
                    <?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>

                </div>
                <!--col-md-4-->
                <div class="col-md-4 article-cent">

                    <?php $post_id = 19;
$queried_post = get_post($post_id);?>
                    <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
                    <h4><?php echo $queried_post->post_title; ?></h4>
                    <?php echo $queried_post->post_excerpt; ?>
                    <?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>

                </div>
                <!--col-md-4-->

                <div class="col-md-4 article-cent">

                    <?php $post_id = 21;
$queried_post = get_post($post_id);?>
                    <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
                    <h4><?php echo $queried_post->post_title; ?></h4>
                    <?php echo $queried_post->post_excerpt; ?>
                    <?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>

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
