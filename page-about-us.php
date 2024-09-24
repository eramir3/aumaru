<?php get_header(); ?>
<div class="flex flex-col h-screen">
  <main class="max-w-screen-xxl m-auto py-16 flex-grow">
    <h1
      style="font-family: abril-fatface"
      class="text-center text-white text-5xl font-semibold"
    >
      <?php the_title(); ?>
    </h1>
    <div class="flex flex-col lg:flex-row">
      <aside class="pt-14">
        <img src="<?php echo get_theme_file_uri('/src/assets/images/gold-logo.png'); ?>" class="m-auto" width="300"/>
        <img src="<?php echo get_theme_file_uri('/src/assets/images/pulpes.png'); ?>" class="mt-24" width="700"/>
      </aside>
      <aside
        style="font-family: nexa-light"
        class="text-white p-6 mx-2 mt-12 bg-[#131313]/50 shrink-[8]"
      >
        <div class="flex flex-col lg:flex-row lg:gap-14">
          <div class="lg:flex-1">
            <h2
              class="text-[#EFC897] font-extrabold text-3xl bg-[#D9D9D9]/30 pl-12 pt-2"
            >
              MISSION
            </h2>
            <div class="ml-12 mt-12 border-t-[1px] border-white max-w-76 hidden lg:block"></div>
            <p class="mb-12 pt-8 pl-12">
            Mettre à disposition de nos clients les meilleurs produits 100% naturels faits à 
            partir de fruits tropicaux de la plus haute qualité, tout en soutenant la production des 
            paysans de la région du Tequendama en Colombie.
            </p>
          </div>
          <div class="lg:flex-1">
            <h2
              class="text-[#EFC897] font-extrabold text-3xl bg-[#D9D9D9]/30 pl-12 pt-2"
            >
              VISION
            </h2>
            <div class="ml-12 mt-12 border-t-[1px] border-white max-w-76 hidden lg:block"></div>
            <p class="mb-12 pt-8 pl-12">
              Nous voulons partager avec le monde la richesse des fruits tropicaux de la Colombie.
            </p>
          </div>
        </div>
        <div>
          <h2
            class="text-[#EFC897] font-extrabold text-3xl bg-[#D9D9D9]/30 pl-12 pt-2 max-w-96"
          >
            NOTRE HISTOIRE
          </h2>  
            <div class="mb-12 pt-8 pl-12 lg:columns-2 columns-1">
              L’histoire de ce projet a plus de 30 ans et englobe trois générations d’une même famille
              d’entrepreneurs colombiens. Inspirés du potentiel et de la richesse naturelle de la
              Colombie, et après de plusieurs années de travail marqués par des événements
              mondiales, le chapitre qui aujourd’hui prennent la forme d’Aumarú – pulpe de fruit a
              commencé au début de 2023 à Lyon, France.
              <br/>
              <br/>
              Du fait de ses vallées comme à ses montagnes, en passant par ses esplanades, la
              Colombie est un des pays avec la plus grande variété de fruits au monde. Notre rêve a
              été de partager cette richesse naturelle avec le monde, en proposant une gamme 100%
              naturelle, sans sucres ajoutés de pulpes de fruits afin d’offrir à nos clients une
              expérience authentique de la gastronomie colombienne. Grâce au savoir-faire des
              producteurs colombiens, avec lesquels nous travaillons de la main, nos pulpes ont la
              véritable saveur des fruits de la Colombie.
              <br/>
              <br/>
              Nos fruits exotiques dont le corossol, la curuba, la feijoa, la goyave, le lulo, le maracuja,
              la mûre des Andes, et le tamarillo vous permettront d’apporter une nouvelle gamme de
              saveurs et d’arômes à vos cocktails, glaces, confitures, pâtes de fruit, sauces, desserts,
              et bien d&#39;autres choses!
              <br/>
              <br/>
              Ainsi, depuis 2023, nous faisons découvrir la vraie richesse naturelle de la Colombie
              aux professionnels comme aux particuliers dans les différents bars, les restaurants et
              les glaciers de Lyon, Marseille et Paris et ailleurs.
            </div>
        </div>
      </aside>
    </div>
  </main>
<?php get_footer(); ?>
</div>

