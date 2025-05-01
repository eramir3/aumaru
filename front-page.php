<?php get_header();?>
  <main
    class="m-auto flex flex-col py-16 lg:h-[calc(100vh_-_124px)] h-[calc(100vh_-_86px)]"
  >
    <div class="flex flex-col flex-grow lg:relative">
      <div class="w-full">
        <div
          id="myCarousel"
          class="carousel slide w-full xxl:pt-32"
          data-ride="carousel"
          data-pause="false"
          data-interval="5000"
        >
          <div class="carousel-inner">
            <div class="item active">
              <img
                src="<?php echo get_theme_file_uri('/src/assets/images/blackberry-single.png'); ?>"
                alt="aumaru-blackberry"
                class="m-auto lg:w-1/5 max-lg:w-72"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo get_theme_file_uri('/src/assets/images/guava-single.png'); ?>"
                alt="aumaru-guava"
                class="m-auto lg:w-1/5 max-lg:w-72"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo get_theme_file_uri('/src/assets/images/soursop-single.png'); ?>"
                alt="aumaru-soursop"
                class="m-auto lg:w-1/5 max-lg:w-72"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo get_theme_file_uri('/src/assets/images/lulo-single.png'); ?>"
                alt="aumaru-lulo"
                class="m-auto lg:w-1/5 max-lg:w-72"
              />
            </div>
          </div>
        </div>
      </div>
      <aside
        class="md:block hidden top-[240px] w-fit lg:-rotate-90 -left-10 lg:text-left lg:absolute md:m-auto md:text-center md:mb-12 md:mt-12 lg:m-0"
      >
        <div class="text-[#F9F8EA] font-montserrat text-6xl">AUMARÚ</div>
        <div class="text-[#F9F8EA] text-3xl" style="font-family: nexa-light">
          PULPE DE FRUIT
        </div>
      </aside>
      <aside class="w-fit top-[280px] right-12 lg:absolute m-auto mt-12 lg:m-0">
        <div class="flex lg:flex-col gap-5">
          <a href="https://www.instagram.com/aumaru_officiel/" target="_blank">
            <i class="fa-brands fa-instagram text-[#F9F8EA] text-4xl"></i>
          </a>
          <a href="https://www.facebook.com/people/Aumar%C3%BA-Pulpe-de-Fruit/100088791141039/" target="_blank">
            <i class="fa-brands fa-facebook text-[#F9F8EA] text-4xl"></i>
          </a>
          <a href="https://wa.me/33788225586" target="_blank">
            <i class="fa-brands fa-whatsapp text-[#F9F8EA] text-4xl"></i>
          </a>
        </div>
      </aside>
    </div>
    <div
      class="text-[#F9F8EA] text-center mt-6 lg:pr-10 text-lg"
      style="font-family: nexa-light"
    >
      PULPE DE FRUIT SANS SUCRES AJOUTÉS - 100% NATURELLES
    </div>
  </main>
<?php wp_footer(); ?>
</body>
</html>
