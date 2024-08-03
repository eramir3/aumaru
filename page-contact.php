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
      <form action="" class="flex flex-col gap-4 justify-center">
        <label for="fname" class="text-[#EFC897]">Nom:</label>
        <input class="rounded-md h-12 min-w-[300px] lg:min-w-[800px] pl-2" type="text" id="fname" name="fname" />
        <label for="lname" class="text-[#EFC897] mt-4">Email:</label>
        <input class="rounded-md h-12 pl-2" type="text" name="lname"/>
        <label for="lname" class="text-[#EFC897] mt-4">Sujet:</label>
        <input class="rounded-md h-12 pl-2" type="text" name="sujet" />
        <label for="lname" class="text-[#EFC897] mt-4">Message:</label>
        <textarea class="rounded-md pl-2 pt-2" rows="7"></textarea>
        <input type="submit" value="SOUMMETRE" class="text-white m-auto rounded my-12" 
          style="background-color: #598170; padding: 16px 32px; width: 160px; cursor: pointer;"/>
      </form>
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
