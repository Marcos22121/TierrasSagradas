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

<section class="mt-20 flex flex-col md:flex-row items-center gap-10 p-5 rounded-lg border border-gray-700 bg-black bg-opacity-40 max-w-7xl mx-auto shadow-xl">
    <div class="w-full md:w-1/2 flex-shrink-0">
        <img src="../img/Indices/dragon.png" alt="Ilustración de un dragón mítico" class="w-full h-auto object-cover rounded-lg shadow-lg">
    </div>

    <div class="flex-grow md:w-1/2 text-center md:text-left">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-100 mb-4 px-2 tracking-wide fx-stroke">
            Adéntrate en la Cripta de los Antiguos
        </h2>
        <p class="text-lg text-gray-300 mb-6 px-2">
            Descubre los secretos más oscuros y los artefactos más poderosos de las Tierras Sagradas. En lo profundo de las criptas yacen no solo tesoros, sino también historias de héroes olvidados y deidades caídas. Prepárate para enfrentar desafíos que pondrán a prueba tu ingenio y tu valentía.
        </p>
        <div class="flex justify-center md:justify-start px-2">
            <a href="./criptas.php" class="btn-gradient-fill relative overflow-hidden group">
                <span class="relative z-10 text-white font-semibold">Explorar la Cripta</span>
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-amber-600 transition-transform duration-500 transform scale-x-0 origin-left group-hover:scale-x-100"></div>
            </a>
        </div>
    </div>
</section>

 </div> 
  

    
<script>
  // ... (tu script de GSAP y Leaflet permanece igual)
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

  var map = L.map('mapa', { crs: L.CRS.Simple, minZoom: 3.499999999999999, maxZoom: 5 });
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

</body>
</html>