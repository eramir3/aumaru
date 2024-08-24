<?php get_header(); ?>
<div class="flex flex-col h-screen">
  <main class="max-w-screen-xxl m-auto py-16 flex-grow">
    <h1
      style="font-family: abril-fatface"
      class="text-center text-white text-5xl font-semibold"
    >
    <?php the_title(); ?>
    </h1>
    <div 
      style="font-family: nexa-light" 
      class="flex flex-col items-center text-white p-6 mx-2 mt-12">
      <h2
        class="text-[#EFC897] font-extrabold text-3xl text-center"
        style="font-family: nexa-bold"
      >
        EN SAVOIR PLUS
      </h2>
      <p class="pt-8 max-w-96" style="font-family: nexa-light"><?php the_content(); ?></p>
    </div>
    <div class="flex flex-col items-center mt-1">
      <div
        class="flex flex-col mt-12 text-white gap-8 items-baseline lg:flex-row"
        style="font-family: nexa-bold"
      >
        <div class="flex justify-center gap-4">
          <img src="<?php echo get_theme_file_uri('/src/assets/images/flag-france.png'); ?>" />
          <span class="pt-1">+33 7 88 22 55 86</span>
        </div>
        <div class="flex justify-center gap-4">
        <img src="<?php echo get_theme_file_uri('/src/assets/images/flag-colombia.png'); ?>" />
          <span class="pt-1">+57 310 212 1976</span>
        </div>
      </div>
    </div>
    <div
      style="font-family: nexa-bold"
      class="text-center text-white mt-12"
    >
      aumaru@gransaman.com
    </div>
  </main>
<?php get_footer(); ?>
</div>
