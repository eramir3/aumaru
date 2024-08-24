<?php get_header(); ?>
<div class="flex flex-col h-screen">
  <main class="max-w-screen-xxl m-auto py-16 flex-grow">
    <h1
      style="font-family: abril-fatface"
      class="text-center text-white text-5xl font-semibold mb-12"
    >
      CONNAÎTRE PLUS
    </h1>
    <div>
      <?php 
        while(have_posts()) { 
          the_post(); ?>
          <div class="max-w-4xl">
            <h2 class="text-white"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="text-white">
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>">Lire la suite »</a>
            </div>
          </div>
      <?php }
      ?>
    </div>
  </main>
<?php get_footer(); ?>
</div>
