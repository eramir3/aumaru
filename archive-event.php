<?php get_header(); ?>
<div class="flex flex-col h-screen pt-16 m-auto">
  <h1
    style="font-family: abril-fatface"
    class="text-center text-white text-5xl font-semibold mb-12"
  >
     ÉVÉNEMENTS
  </h1>
  <div class="flex justify-center">
    <div
      style="font-family: nexa; bg-[#131313]/50"
      class="text-white p-6 mx-2 mt-12 max-w-3xl"
    >
      <p class="text-xl" style="font-family: nexa-light">
        Voyez ce qui se passe dans notre monde
      </p>
    </div>
  </div>
  <main class="flex flex-col items-center mt-1 text-white pt-20">
    <?php 
      while(have_posts()) { 
        the_post(); ?>
        <div class="max-w-4xl mb-24">
          <div class="flex event-summary justify-center">
            <a class="event-summary__date text-center">
              <span class="event-summary__month">
                <?php 
                  $eventDate = new DateTime(get_field('event_date'));
                  echo $eventDate->format('M');
                ?>
              </span>
              <span class="event-summary__day">
                <?php echo $eventDate->format('d'); ?>
              </span>  
            </a>
            <div class="event-summary__content">
               <!-- Display featured image -->
               <?php if (has_post_thumbnail()) : ?>
                <div class="mb-4 max-w-80">
                  <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="text-white text-xl mb-2 max-w-[600px]">
            <?php the_excerpt(); ?>
          </div>
        </div>
    <?php }
    ?>
  </main>
<?php get_footer(); ?>
</div>
