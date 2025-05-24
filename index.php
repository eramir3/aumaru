<?php get_header(); ?>
<div class="flex flex-col h-screen pt-16 m-auto">
  <h1
    style="font-family: abril-fatface"
    class="text-center text-white text-5xl font-semibold mb-12"
  >
    CONNAÎTRE PLUS
  </h1>
  <div class="flex justify-center">
    <div
      style="font-family: nexa; bg-[#131313]/50"
      class="text-white p-6 mx-2 mt-12 max-w-3xl"
    >
      <p class="text-xl" style="font-family: nexa-light">
        Si tu es intéressé(e) par notre entreprise, tu trouveras ici différents articles parus dans les médias,
        ainsi que des recettes et des nouvelles concernant nos produits.
      </p>
    </div>
  </div>
  <div class="flex flex-col-reverse flex-grow justify-center lg:flex-row lg:py-16">
    <main class="max-w-screen-xxl">
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

            <!-- Post Categories -->
            <div class="text-white text-xl mb-2">
              <?php
                $post_categories = get_the_category();
                if ( ! empty( $post_categories ) ) {
                  foreach ( $post_categories as $cat ) {
                    echo 'Catégories: <a href="' . esc_url( get_category_link( $cat->term_id ) ) . '" class="mr-2 text-[#efc897] hover:underline">';
                    echo esc_html( $cat->name );
                    echo '</a>';
                  }
                }
              ?>
            </div>

            <div class="text-white text-xl mb-2">
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="text-[#efc897] hover:underline">Lire la suite »</a>
          </div>
      <?php }
      ?>
    </main>
    <aside class="mb-10">
      <div class="lg:pl-2 lg:ml-10">
        <h2 class="text-white text-3xl pb-2">Catégories</h2>
        <?php
          $categories = get_categories();
          foreach($categories as $category) {
            if($category->name !== 'Uncategorized') {
              echo '<div class="pb-2 text-[#efc897]"><a href="' . get_category_link($category->term_id) . '" class="hover:underline">' . $category->name . '</a></div>';
            }
          }
        ?>
      </div>
    </aside>
  </div>
<?php get_footer(); ?>
</div>
