<?php get_header(); ?>
<div class="flex flex-col h-screen">
  <main class="max-w-screen-xxl m-auto py-16 flex-grow">
    <?php 
      while(have_posts()) {
        the_post(); ?>
        <div class="max-w-4xl m-auto">
          <!-- Display featured image -->
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="mb-6">
              <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
            </div>
          <?php endif; ?>

          <h1 class="text-white text-center text-5xl font-semibold mb-6">
            <?php the_title(); ?>
          </h1>

          <div class="text-white text-xl">
            <?php the_content(); ?>
          </div>
        </div>
    <?php }?>
  </main>
<?php get_footer(); ?>
</div>
