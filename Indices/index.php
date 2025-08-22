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

    <!-- JS Libraries -->     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    </script>
</head>
<?php include '../includes/header.php'; ?>
<body>
<section class="flex">
   <section id="hero">
  
    <img src="../img/indices/ezgif.gif" alt="Tierras Sagradas" class="hero-gif">

   
    <div class="hero-overlay">
        <h1>Bienvenido a las Tierras Sagradas</h1>
        <p>Donde dioses, bestias y héroes escriben la historia de un mundo épico.</p>
        <div class="hero-cta">
            <a href="personajes.php" class="btn-skewed">Explorar Personajes</a>
            <a href="bestiario.php" class="btn-skewed">Ver Bestiario</a>
        </div>
    </div>
    <div id="hero-particles"></div> <!-- Aquí se renderizan las partículas -->
</section>

<div class="horizontal-frame">

<div class="horizontal-frame-overlay">
        <img src="../img/Indices/augrim.png" alt="augrim" width="300px" height="400px" class="hero-img">

    <div>
    <h2>Sobre las Tierras Sagradas</h2>
    <hr>
    <p>Las Tierras Sagradas son un vasto mundo lleno de mitología, donde dioses y héroes conviven con bestias legendarias. Desde las Montañas Negras hasta los Lagos de Lunara, cada rincón guarda secretos y aventuras por descubrir.</p>
    <p>En esta enciclopedia encontrarás información sobre los dioses que rigen este mundo, las bestias que lo habitan y las historias que han forjado su historia. Explora los personajes destacados, sumérgete en el bestiario y descubre las leyendas que dan vida a las Tierras Sagradas.</p>
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

<!-- Nuevo card-skewed personalizado -->
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



    <!-- Bestiario -->
    <section id="bestiario">
        <h2>Bestiario en Foco</h2>
        <div class="cards-container">
            <div class="card-skewed">
                <img src="../img/bestiario/bestia1.webp" alt="Grifo de Ébano">
                <h3>Grifo de Ébano</h3>
                <p>Guardián de los cielos oscuros.</p>
            </div>
            <div class="card-skewed">
                <img src="../img/bestiario/bestia2.webp" alt="Serpiente de Cristal">
                <h3>Serpiente de Cristal</h3>
                <p>Habita los lagos encantados de Lunara.</p>
            </div>
            <div class="card-skewed">
                <img src="../img/bestiario/bestia3.webp" alt="León de Sombras">
                <h3>León de Sombras</h3>
                <p>Se esconde entre la penumbra de los bosques.</p>
            </div>
        </div>
    </section>

    <section id="historias">
        <h2>Tres Historias Principales</h2>
        <div class="cards-container">
            <div class="card-skewed">
                <img src="../img/historias/origen-cielo.jpg" alt="Origen del Cielo">
                <h3>Origen del Cielo</h3>
                <p>La creación de los cielos y las estrellas.</p>
            </div>
            <div class="card-skewed">
                <img src="../img/historias/guerra-dioses.jpg" alt="Guerra de los Dioses">
                <h3>Guerra de los Dioses</h3>
                <p>El conflicto que definió el destino de las Tierras Sagradas.</p>
            </div>
            <div class="card-skewed">
                <img src="../img/historias/susurros-lunara.jpg" alt="Susurros de Lunara">
                <h3>Susurros de Lunara</h3>
                <p>Los secretos revelados por la diosa de la luna.</p>
            </div>
        </div>
    </section>

    <section id="tierras">
        <h2>Explora las Tierras</h2>
        <div class="cards-container">
            <a href="tierras.php?t=montañas-negras" class="card-skewed">Montañas Negras</a>
            <a href="tierras.php?t=bosques-de-selvath" class="card-skewed">Bosques de Selvath</a>
            <a href="tierras.php?t=desiertos-de-fuego" class="card-skewed">Desiertos de Fuego</a>
            <a href="tierras.php?t=lagos-de-lunara" class="card-skewed">Lagos de Lunara</a>
        </div>
    </section>



    </div>

    <?php include '../includes/footer.php'; ?>

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

<?php include "../includes/footer.php"; ?>

</body>
</html>
