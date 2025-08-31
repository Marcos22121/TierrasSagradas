<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierras Sagradas - Enciclopedia Mitológica</title>
    <meta name="description" content="Explora los dioses, bestias y historias de las Tierras Sagradas.">

    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <!-- Hero -->

        <section id="hero" class="section">
              <section class="flex">
            <img class="hero-bg" src="../img/Indices/ezgif.gif" alt="Cielo mítico de Tierras Sagradas">
            <div class="hero-vignette"></div>

            <div class="hero-inner">
                <div class="hero-left">
                    <h1 class="fx-stroke">Bienvenido a <br><span>Tierras Sagradas</span></h1>
                    <p class="lead">
                        Un compendio viviente de dioses, héroes y clanes; forjado a través de la luz de Binohmo.
                    </p>
                    <div class="cta-row">
                        <a href="./historias.php" class="btn-gold">Leyendas y más</a>
                        <a href="#map-section" class="btn-ghost">Ver mapa</a>
                    </div>
                </div>
                <div class="hero-right"></div>
            </div>
        </section>
    </section>

    <!-- Intro -->
    <section class="horizontal-frame">
        <div class="horizontal-frame-overlay">
            <img src="../img/Indices/dragonnashe.webp" alt="augrim" width="400" height="400" class="hero-img">

            <div>
                <h2>Sobre las Tierras Sagradas</h2>
                <hr>
                <p>Las Tierras Sagradas son un vasto mundo lleno de mitología, donde dioses y héroes conviven con bestias legendarias. Desde las Montañas Negras hasta los Lagos de Lunara, cada rincón guarda secretos y aventuras por descubrir.</p>
                <p>En esta enciclopedia encontrarás información sobre los dioses que rigen este mundo, las bestias que lo habitan y las historias que han forjado su historia. Explora los personajes destacados, sumérgete en el bestiario y descubre las leyendas que dan vida a las Tierras Sagradas.</p>
            </div>
        </div>
    </section>

    <!-- Criptas / Cards -->
    <div class="flex">
       <!-- Cripta -->
<section class="content-wrapper flex flex-col items-center gap-6 p-6 rounded-2xl bg-black bg-opacity-50 shadow-2xl">
    <div class="w-full flex justify-center">
        <img src="../img/Indices/cripta.webp"
            alt="Ilustración de una cripta mítica"
            class="w-full h-auto object-contain rounded-lg shadow-lg">
    </div>

    <div class="flex-grow w-full text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-100 mb-4 px-2 tracking-wide fx-stroke">
            Adéntrate en el Museo 
        </h2>
        <p class="text-lg text-gray-300 mb-6 px-2">
            Descubre secretos olvidados y artefactos prohibidos en lo profundo del Museo. 
            Tesoros perdidos, héroes caídos y ecos de dioses antiguos aguardan a quienes se adentran en el.
        </p>
        <div class="flex justify-center px-2">
            <a href="../indices/museo.php" class="btn-gradient-fill relative overflow-hidden group">
                <span class="relative z-10 text-white font-semibold">Explorar el Museo</span>
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-amber-600 transition-transform duration-500 transform scale-x-0 origin-left group-hover:scale-x-100"></div>
            </a>
        </div>
    </div>
</section>

<!-- Historias -->
<section class="content-wrapper flex flex-col items-center gap-6 p-6 rounded-2xl bg-black bg-opacity-50 shadow-2xl">
    <div class="w-full flex justify-center">
        <img src="../img/Indices/Guerra3.jpg"
            alt="Pergamino antiguo con relatos"
            class="w-full h-auto object-contain rounded-lg shadow-lg">
    </div>

    <div class="flex-grow w-full text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-100 mb-4 px-2 tracking-wide fx-stroke">
            Historias que Forjaron el Mundo
        </h2>
        <p class="text-lg text-gray-300 mb-6 px-2">
            Sumérgete en relatos épicos de dioses, clanes y héroes que dieron forma a las Tierras Sagradas. 
            Cada historia es un eco inmortal que aún resuena en este vasto mundo mitológico.
        </p>
        <div class="flex justify-center px-2">
            <a href="./historias.php" class="btn-gradient-fill relative overflow-hidden group">
                <span class="relative z-10 text-white font-semibold">Leer Historias</span>
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-amber-600 transition-transform duration-500 transform scale-x-0 origin-left group-hover:scale-x-100"></div>
            </a>
        </div>
    </div>
</section>

<!-- Personajes -->
<section class="content-wrapper flex flex-col items-center gap-6 p-6 rounded-2xl bg-black bg-opacity-50 shadow-2xl">
    <div class="w-full flex justify-center">
        <img src="../img/Indices/personajes.png"
            alt="Retrato de un personaje mítico"
            class="w-full h-auto object-contain rounded-lg shadow-lg">
    </div>

    <div class="flex-grow w-full text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-100 mb-4 px-2 tracking-wide fx-stroke">
            Conoce a los Personajes Legendarios
        </h2>
        <p class="text-lg text-gray-300 mb-6 px-2">
            Descubre a los héroes, villanos y seres legendarios que recorren las Tierras Sagradas. 
            Cada personaje lleva consigo una historia única y un destino propio.
        </p>
        <div class="flex justify-center px-2">
            <a href="./personajes.php" class="btn-gradient-fill relative overflow-hidden group">
                <span class="relative z-10 text-white font-semibold">Explorar Personajes</span>
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-amber-600 transition-transform duration-500 transform scale-x-0 origin-left group-hover:scale-x-100"></div>
            </a>
        </div>
    </div>
</section>



    </div>

<div class="recuadro">

  <div class="perspective-1000">
    <img src="../img/indices/bestiario.jpg" 
         alt="Imagen izquierda" 
         class="imagen-izquierda">
  </div>

  <div class="contenido">
    <h2 class="titulo">Las Bestias de Tierras Sagradas</h2>
    <p class="descripcion">En las vastas y cambiantes Tierras Sagradas, no solo los héroes y villanos han marcado su huella. Bajo la superficie de sus bosques ancestrales, en las ruinas olvidadas de ciudades caídas y en los abismos que dividen el mundo, habitan criaturas que desafían la razón humana. Algunas son guardianes milenarios, creados para proteger secretos prohibidos. Otras son monstruos nacidos del odio, del caos y de la corrupción que se extiende como una plaga en este reino.

El Bestiario de las Tierras Sagradas es más que un simple compendio de seres: es un testimonio vivo de los miedos y leyendas que han dado forma a las culturas de cada región. En sus páginas encontrarás desde bestias colosales capaces de derrumbar murallas con un solo rugido, hasta entidades invisibles que se deslizan entre las sombras, cazando a los incautos que osan adentrarse en sus dominios.

Los sabios que recopilaron este conocimiento advierten que cada criatura tiene un propósito en el tejido del mundo. Algunas ofrecen sabiduría a quienes se atreven a escuchar su voz, otras representan pruebas de fuego que solo los más valientes pueden superar. Pero todas, sin excepción, están unidas por un mismo destino: recordarnos que el verdadero poder de las Tierras Sagradas no yace en sus reinos ni en sus ejércitos, sino en las fuerzas ocultas que acechan más allá de la vista.

Explorar este bestiario es adentrarse en un territorio incierto, donde la línea entre mito y realidad se desdibuja. Cada entrada que leas es una invitación a imaginar, a temer y a descubrir qué secretos guardan estas criaturas. Quizás, al conocerlas, logres comprender mejor el equilibrio que sostiene este mundo… o tal vez, al igual que muchos antes, quedes marcado por aquello que nunca debió ser revelado.</p>
   <div class="boton-container">
  <button class="btn-gradient-fill">
    <span class="texto-boton">Explorar el Bestiario</span>
    <div class="overlay"></div>
  </button>
</div>

  </div>



  
</div>

<div class="recuadro-mapa">
  <div id="map-section" class="mapa-h2">
    <h2>Mapa Interactivo</h2>
  </div>
  <div class="pergamino-wrapper">
    <img class="pergamino-img" src="../img/indices/pergamin.png" alt="Pergamino">
    <div class="map-slot">
      <div id="mapa" style="width: 60%; height: 55%; border-radius: 12px; margin-bottom: 105px;"></div>
    </div>
  </div>
</div>


    <!-- Scripts -->
    <script>
      gsap.registerPlugin(ScrollTrigger);
      gsap.utils.toArray("section").forEach(section => {
        gsap.from(section, {
          opacity: 0,
          y: 50,
          duration: 1,
          ease: "power3.out",
          scrollTrigger: {
            trigger: section,
            start: "top 85%",
            toggleActions: "play none none none"
          }
        });
      });

      var map = L.map('mapa', { crs: L.CRS.Simple, minZoom: 3.5, maxZoom: 5 });
      var w = 1050, h = 625;
      var southWest = map.unproject([0, h], map.getMaxZoom()-1);
      var northEast = map.unproject([w, 0], map.getMaxZoom()-1);
      var bounds = new L.LatLngBounds(southWest, northEast);
      L.imageOverlay('../img/Indices/mapaprueba.webp', bounds).addTo(map);
      map.setMaxBounds(bounds);
      map.fitBounds(bounds);
      var marker = L.marker(map.unproject([500, 300], map.getMaxZoom()-1)).addTo(map).bindPopup('<b>Marcador</b><br>Ejemplo de lugar.');
    </script>
    <?php include "../includes/footer.php"; ?>

<script>
  const card = document.querySelector('.imagen-izquierda');
  const container = card.parentElement;

  container.addEventListener('mousemove', (e) => {
    const rect = container.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = ((y - centerY) / centerY) * 10; // inclinación vertical
    const rotateY = ((x - centerX) / centerX) * -10; // inclinación horizontal

    card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
  });

  container.addEventListener('mouseleave', () => {
    card.style.transform = 'rotateX(0) rotateY(0)';
  });
</script>



</body>

</html>
