<?php get_header(); ?>
<div class="flex flex-col h-screen">
  <main class="max-w-screen-xxl m-auto py-16 flex-grow">
    <?php 
      while(have_posts()) {
        the_post(); ?>
        <div>
          <h2 class="text-white"><?php the_title(); ?></h2>
          <div class="text-white">
            <?php the_content(); ?>
          </div>
        </div>
    <?php }?>
  </main>
<?php get_footer(); ?>
</div>
