<?php get_header(); ?>

<div class="flex flex-col h-screen">
  <main class="max-w-screen-xxl m-auto py-16 flex-grow">
    <h1
      style="font-family: abril-fatface"
      class="text-center text-white text-5xl font-semibold"
    >
      QUI-SOMMES NOUS
    </h1>
    <div
      style="font-family: nexa-light"
      class="text-white p-6 mx-2 mt-12 bg-[#131313]/50"
    >
      <h2 class="text-[#EFC897] font-extrabold text-3xl">TEQUENDAMA</h2>
      <p class="pt-8">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have suffered alteration in some form, by injected
        humour, or randomised words which don't look even slightly
        believable. If you are going to use a passage of Lorem Ipsum, you
        need to be sure there isn't anything embarrassing hidden in the
        middle of text. All the Lorem Ipsum generators on the Internet
      </p>
    </div>
    <div class="flex flex-col lg:flex-row pt-24">
      <aside>
        <img src="./assets/images/gold-logo.png" class="m-auto" />
        <img src="./assets/images/pulpes.png" />
      </aside>
      <aside
        style="font-family: nexa-light"
        class="text-white p-6 mx-2 mt-12 bg-[#131313]/50 shrink-[8]"
      >
        <div class="flex flex-col lg:flex-row lg:gap-14">
          <div>
            <h2
              class="text-[#EFC897] font-extrabold text-3xl bg-red-600 pl-12 pt-2"
            >
              MISSION
            </h2>
            <p class="pt-2 mb-12">
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomised words which don't look
              even slightly believable.
            </p>
          </div>
          <div>
            <h2
              class="text-[#EFC897] font-extrabold text-3xl bg-red-600 pl-12 pt-2"
            >
              VISION
            </h2>
            <p class="pt-2 mb-12">
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomised words which don't look
              even slightly believable.
            </p>
          </div>
        </div>
        <div>
          <h2
            class="text-[#EFC897] font-extrabold text-3xl bg-red-600 pl-12 pt-2"
          >
            NOTRE HISTOIRE
          </h2>
          <p class="pt-2">
            There are many variations of passages of Lorem Ipsum available,
            but the majority have suffered alteration in some form, by
            injected humour, or randomised words which don't look even
            slightly believable.
          </p>
          <p class="pt-2">
            There are many variations of passages of Lorem Ipsum available,
            but the majority have suffered alteration in some form, by
            injected humour, or randomised words which don't look even
            slightly believable.
          </p>
        </div>
      </aside>
    </div>
  </main>
  <footer
    style="font-family: nexa-bold"
    class="bg-no-repeat bg-cover bg-[url('./assets/images/footer.png')] bg-[#F9F6F2] py-8"
  >
    <div
      class="max-w-screen-xxl m-auto mt-12 lg:flex lg:justify-between lg:items-center lg:mt-2 lg:pb-12"
    >
      <div class="flex flex-col items-center font-extrabold lg:items-start">
        <a>Mentions Légales</a>
        <a>Conditionnes Generales De Vente</a>
      </div>
      <div class="flex flex-col items-center mt-12 lg:mt-6 lg:mr-32">
        <img src="./assets/images/green-logo.png" />
        <p class="pt-4">CI RADCO - GRANSAMAN PULPE DE FRUIT</p>
        <p style="font-family: nexa-light">TOUS LES DROITS SONT RESERVÉS</p>
        <p>Copyright &copy; 2024</p>
      </div>
      <div class="flex justify-center gap-6 my-12">
        <i class="fa-brands fa-instagram text-[#598170] text-4xl"></i>
        <i class="fa-brands fa-facebook text-[#598170] text-4xl"></i>
        <i class="fa-brands fa-whatsapp text-[#598170] text-4xl"></i>
      </div>
    </div>
  </footer>
</div>
  

<?php get_footer();

