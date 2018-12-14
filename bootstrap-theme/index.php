<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('title'); ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('title'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container index">
    <div class="row">
        <div class="col-md-8 ">
    <br/>
    <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post() ; ?>
            
            <div class="card border-primary mb-3">
                <div class="card-header">
                    <a href="<?php the_permalink(); ?> ">
                        <?php the_title(); ?>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
         <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('sorry no post found') ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
<script src="./js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

</body>
</html>