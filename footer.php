<footer
  style="font-family: nexa-bold"
  class="bg-no-repeat bg-cover bg-[url('./assets/images/footer.png')] bg-[#F9F6F2] pt-2 pb-10"
>
  <div
    class="max-w-screen-xxl m-auto mt-12 lg:flex lg:justify-between lg:items-center lg:mt-2"
  >
    <div class="flex flex-col items-center font-extrabold lg:items-start">
      <a href="<?php echo site_url('/mentions-legales') ?>">Mentions Légales</a>
      <a href="<?php echo site_url('/conditionnes-generales-de-vente') ?>">Conditionnes Generales De Vente</a>
    </div>
    <div class="flex flex-col items-center mt-12 lg:mt-6 lg:mr-32">
      <img src="<?php echo get_theme_file_uri('/src/assets/images/green-logo.png'); ?>" />
      <p class="pt-4">CI RADCO - GRANSAMAN PULPE DE FRUIT</p>
      <p style="font-family: nexa-light">TOUS LES DROITS SONT RESERVÉS</p>
      <p>Copyright &copy; <?php echo date('Y'); ?></p>
    </div>
    <div class="flex justify-center gap-6 my-12">
      <a href="https://www.instagram.com/aumaru_officiel/" target="_blank">
        <i class="fa-brands fa-instagram text-[#598170] text-4xl"></i>
      </a>
      <a href="https://www.facebook.com/people/Aumar%C3%BA-Pulpe-de-Fruit/100088791141039/" target="_blank">
        <i class="fa-brands fa-facebook text-[#598170] text-4xl"></i>
      </a>
      <a href="https://wa.me/33788225586" target="_blank">
        <i class="fa-brands fa-whatsapp text-[#598170] text-4xl"></i>
      </a>
    </div>
  </div>
</footer>
<script>

jQuery(document).ready(function($) {

  // Code for adding item to cart
  $('.add_to_cart_button').on('click', function() {
    $(this).addClass('adding_to_cart');
    $(this).text('Adding to Cart…');
    $(this).css('pointer-events', 'none');
    $(this).css('filter', 'brightness(0.8)');
  });

  $('body').on('added_to_cart', function() {
    const button = document.getElementsByClassName('adding_to_cart')
    $(button).text('Add to Cart');
    $(button).css('pointer-events', 'auto');
    $(button).css('filter', 'brightness(1)');
    $(button).append('<i class="fa-solid fa-check ml-2"></i>');
  });
});

</script>

<?php wp_footer(); ?>
</body>
</html>
