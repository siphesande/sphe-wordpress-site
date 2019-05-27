<?php get_header();?>

<div style="overflow:auto">
  <div class="menu">
    <a href="/index.php?page_id=12">Skills</a>
    <a href="/index.php?page_id=38">About</a>
    <a href="/index.php?page_id=32">Contacts</a>
    <a href="/index.php?page_id=36">Projects</a>
    <a href="/index.php?page_id=34">Blogs</a>
  </div>

  <div class="main">
    <?php while ( have_posts()) : the_post(); ?>
    <h1> <?php wp_title(''); ?></h1>
    <?php the_content(); ?>
    <?php endwhile; ?> 
  </div>

  <div class="right">
    <h2>About</h2>
    <p>
      <em>I am an aspiring software engineer from Cape Town, South Africa.</em>
    </p>
  </div>
</div>
<hr>
  <?php get_footer(); ?>

