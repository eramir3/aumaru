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
      class="text-white p-6 mx-2 mt-12 bg-[#131313]/50"
    >
      <h2 class="text-[#EFC897] font-extrabold text-3xl">TEQUENDAMA</h2>
      <p class="pt-8">Grâce à sa position géographique privilégiée, la Colombie profite d’une diversité 
        de zones climatiques qui lui permettent d’avoir des récoltes tout au long de l’année une grande 
        variété de fruits et légumes. Voici juste un petit exemple de la richesse naturelle qu’elle a à 
        offrir et à partager avec le monde.</p>
    </div>
    <div class="flex flex-col lg:flex-row pt-24">
      <aside class="pt-24">
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
          <div class="ml-12 mt-12 border-t-[1px] border-white max-w-80 hidden lg:block"></div>
          <div class="flex flex-col lg:flex-row">
            <div class="mb-12 pt-8 pl-12">
              <p class="pt-2">
              En septembre 1999, l’Association des fruiticulteurs d’Anapoima (AFA) a été créée par quatre 
              agriculteurs qui cherchaient à valoriser les récoltes de fruits tropicaux des paysans de 
              la région du Tequendama. Ainsi, ils ont imaginé différents procédés de 
              transformation pour produire des produits 100% naturels tels que la pulpe de 
              fruits surgelée, les confitures et les bonbons, tous fabriqués à partir de fruits tropicaux 
              de la région.
              </p>
              <p class="pt-2">
              Vingt et un ans plus tard, Aumarú est né d’une initiative visant à amener 
              ces produits du cœur du Tequendama à Lyon et dans d’autres villes en France.
              </p>
            </div>
            <div class="mb-12 pt-8 pl-12">
              <p class="pt-2">
                D’une part, en travaillant avec les agriculteurs de la région colombienne, 
                nous cherchons à leur payer un juste prix pour leur récolte, quelque soit la saison.
              </p>
              <p class="pt-2">
              De plus, nous cherchons à réduire leurs coûts de transport et de stockage des fruits. 
              De cette manière, les agriculteurs ne se préoccupent que de récolter les fruits de 
              la plus haute qualité sans se soucier constamment de les vendre. D’autre part, nous cherchons 
              à informer les  consommateurs étrangers sur les fruits exotiques, tout en mettant à 
              leur disposition des produits alimentaires 100% naturels.
              </p>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </main>
<?php get_footer(); ?>
</div>

