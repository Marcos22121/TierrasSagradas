<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierras Sagradas - Enciclopedia Mitológica</title>
    <meta name="description" content="Explora los dioses, bestias y historias de las Tierras Sagradas.">

    <!-- Fonts -->

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    </script>
</head>
<body>
    <?php include '../includes/header.php'; ?>

<section class="flex">
      <section id="hero" class="section">
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
        <div class="hero-right">
          <!-- Espacio para un escudo / sello / dragón (opcional) -->
          <!-- <img src="../img/Indices/dragon.png" alt="Sello" class="hero-emblem"> -->
        </div>
      </div>
</section>

<div class="horizontal-frame">

<div class="horizontal-frame-overlay">
        <img src="../img/Indices/dragonnashe.webp" alt="augrim" width="400px" height="400px" class="hero-img">

    <div>
    <h2>Sobre las Tierras Sagradas</h2>
    <hr>
    <p>Las Tierras Sagradas son un vasto mundo lleno de mitología, donde dioses y héroes conviven con bestias legendarias. Desde las Montañas Negras hasta los Lagos de Lunara, cada rincón guarda secretos y aventuras por descubrir.</p>
    <p>En esta enciclopedia encontrarás información sobre los dioses que rigen este mundo, las bestias que lo habitan y las historias que han forjado su historia. Explora los personajes destacados, sumérgete en el bestiario y descubre las leyendas que dan vida a las Tierras Sagradas.</p>
          <div class="cta-row">
            <a href="./personajes.php" class="btn-gold">Explorar personajes</a>
            <a href="#map-section" class="btn-ghost">Ver mapa</a>
          </div>
</div>
</div>
    


</section>

<div class="content-wrapper"> 

    <section id="dioses">
        <h2>Personajes Destacados</h2>

<section class="cards-container">
    
<div class="card-skewed" aria-label="Dios Nerok">
    <div class="particles-container" id="particles-nerok"></div>
    
    <!-- Contenedor de imágenes -->
    <div class="card-img-wrapper">
        <!-- Gif de galaxia (fondo base) -->
        <img src="../img/Indices/gg.gif" alt="Nerok fondo" class="card-bg">
    </div>

    <!-- Imagen transparente (efecto en hover) -->
    <img src="../img/Indices/overlay.png" alt="Nerok overlay" class="card-overlay">

    <!-- Contenido con gradiente de fondo -->
    <div class="card-skewed-content">
        <h3>Binohmo</h3>
        <p>Dios y Creador supremo</p>
    </div>
</div>

<div class="card-skewed" aria-label="Tobias">
    <div class="particles-container" id="particles-tobias"></div>
    <!-- Contenedor de imágenes -->
    <div class="card-img-wrapper">
        <!-- Fondo base -->
        <img src="../img/Indices/bgShelby.png" alt="Tobias fondo" class="card-bg">
    </div>
    <!-- Imagen transparente (efecto en hover) -->
    <img src="../img/Indices/shelby.png" alt="Tobias overlay" class="card-overlay">
    <!-- Contenido con gradiente de fondo -->
    <div class="card-skewed-content">
        <h3>Tobi Shelby</h3>
        <p>El ingeniero, inventor y visionario de las Tierras Sagradas</p>
    </div>
</div>

<div class="card-skewed" aria-label="Nuevo Personaje">
    <div class="particles-container" id="particles-nuevo"></div>
    <div class="card-img-wrapper">
        <!-- Cambia la imagen de fondo aquí -->
        <img src="../img/Indices/aman.png" alt="Nuevo fondo" class="card-bg">
    </div>
    <!-- Cambia la imagen overlay aquí -->
    <img src="../img/Indices/augrim.png" alt="Nuevo overlay" class="card-overlay">
    <div class="card-skewed-content">
        <h3>Augrim</h3>
        <p>Héroe Legendario de las Montañas Luminosas</p>
    </div>
</div>
    
</section>
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

    

<script>
  // Registrar el plugin ScrollTrigger
  gsap.registerPlugin(ScrollTrigger);

  // Seleccionar todas las secciones que queremos animar
  gsap.utils.toArray("section").forEach(section => {
    gsap.from(section, {
      opacity: 0,
      y: 50,
      duration: 1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: section,
        start: "top 85%",  // cuando el top de la sección llega al 80% de la pantalla
        toggleActions: "play none none none"
      }
    });
  });

  // Animación del hero
  gsap.from(".hero-overlay h1", { duration: 1.5, y: -50, opacity: 0, ease: "power3.out" });
  gsap.from(".hero-overlay p", { duration: 1.5, y: 20, opacity: 0, delay: 0.3, ease: "power3.out" });
  gsap.from(".hero-cta .btn-skewed", { duration: 1, y: 20, delay: 0.5, stagger: 0.2, ease: "power3.out" });
</script>
<script>
    document.querySelectorAll('.card-skewed').forEach(card => {
        const particleContainer = card.querySelector('.particles-container');
        const particleId = particleContainer.id;

        let particlesLoaded = false;

        card.addEventListener('mouseenter', () => {
            if (!particlesLoaded) {
                particlesJS.load(particleId, '../Scripts/particlesjs-config.json', function() {
                    console.log(`Partículas cargadas para ${particleId}`);
                    particlesLoaded = true;
                });
            }
        });
    });
</script>

<script src="../Scripts/particles.js"></script>
<script>
    document.querySelectorAll('.card-skewed').forEach(card => {
        const particleContainer = card.querySelector('.particles-container');
        const particleId = particleContainer.id;

        let particlesLoaded = false;

        card.addEventListener('mouseenter', () => {
            if (!particlesLoaded) {
                particlesJS.load(particleId, '../Scripts/particlesjs-config.json', function() {
                    console.log(`Partículas cargadas para ${particleId}`);
                    particlesLoaded = true;
                });
            }
        });

        card.addEventListener('mouseleave', () => {
    const canvas = particleContainer.querySelector('canvas');
    if (canvas) {
        canvas.remove();
        particlesLoaded = false;
    }
});

    });
</script>

<script>
  var map = L.map('mapa', {
    crs: L.CRS.Simple, // Coord sistema simple para mapas personalizados
    minZoom: 3.499999999999999,       // zoom mínimo
    maxZoom: 5         // zoom máximo
  });

  var w = 1050; // ancho real de la imagen del mapa
  var h = 625;  // alto real de la imagen del mapa

  // Coordenadas de las esquinas
  var southWest = map.unproject([0, h], map.getMaxZoom()-1);
  var northEast = map.unproject([w, 0], map.getMaxZoom()-1);
  var bounds = new L.LatLngBounds(southWest, northEast);

  // Agregar imagen como capa del mapa
  L.imageOverlay('../img/Indices/mapaprueba.webp', bounds).addTo(map);

  // Ajustar mapa a los límites de la imagen
  map.setMaxBounds(bounds);
  map.fitBounds(bounds);

  // Opcional: agregar marcador de ejemplo
  var marker = L.marker(map.unproject([500, 300], map.getMaxZoom()-1)).addTo(map)
    .bindPopup('<b>Marcador</b><br>Ejemplo de lugar.');

</script>


<?php include "../includes/footer.php"; ?>

</body>
</html>
