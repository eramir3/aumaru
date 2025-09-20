<?php get_header(); ?>
<div class="flex flex-col h-screen">
  <div class="max-w-screen-xxl m-auto py-16 flex-grow">
    <h1
      style="font-family: abril-fatface"
      class="text-center text-white text-5xl font-semibold"
    >
    <?php the_title(); ?>
    </h1>
    <div class="flex justify-center">
      <div
        style="font-family: nexa; bg-[#131313]/50"
        class="text-white p-6 mx-2 mt-12 max-w-3xl"
      >
        <p class="text-xl" style="font-family: nexa-light">
          Avez-vous un événement pour 50, 100, 200, 300 ou encore plus de personnes? <br /> <br />
          Souhaitez-vous proposer une alternative de boissons différent pour votre événement? <br /> <br />
          Avec nos machines de jus et de granité nous pouvons vous aider à apporter un touche
          éxotique et diGérent à votre événement! <br /> <br />
          N’hésitez pas à nous contacter pour réaliser un devis sur mesure!
        </p>
      </div>
    </div>
    <main class="max-w-screen-xl">
      <div class="py-20">
        <img class="rounded-xl" src="<?php echo get_theme_file_uri('/src/assets/images/services.png'); ?>" />
      </div>
    </main>
  </div>
<?php get_footer(); ?>
</div>
