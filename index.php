<?php get_header(); ?>
<div class="flex flex-col h-screen pt-16 m-auto">
  <h1
    style="font-family: abril-fatface"
    class="text-center text-white text-5xl font-semibold mb-12"
  >
    CONNAÎTRE PLUS
  </h1>
  <main class="py-16 flex flex-grow justify-center">
    <div class="max-w-screen-xxl">
      <?php 
        while(have_posts()) { 
          the_post(); ?>
          <div class="max-w-4xl mb-24">
            <!-- Display featured image -->
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="mb-4">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
                </a>
              </div>
            <?php endif; ?>

            <h2 class="text-white text-3xl pt-4 pb-2">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="text-white">
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>">Lire la suite »</a>
            </div>
          </div>
      <?php }
      ?>
    </div>
    <aside class="text-white">
      <div class="pl-2 ml-10">
        <h2 class="text-white text-3xl pb-2">Catégories</h2>
        <?php
          $categories = get_categories();
          foreach($categories as $category) {
            if($category->name !== 'Uncategorized') {
              echo '<div class="pb-2"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
            }
          }
        ?>
      </div>
    </aside>
  </main>
<?php get_footer(); ?>
</div>
