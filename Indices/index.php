<?php
// index.php - Página principal de Tierras Sagradas
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierras Sagradas - Enciclopedia Mitológica</title>
    <meta name="description" content="Explora los dioses, bestias y historias de las Tierras Sagradas.">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css">

    <!-- JS Libraries -->
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    
    


    </script>
</head>

<body>
    <?php include '../includes/header.php'; ?>

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

    <section id="dioses">
        <h2>Personajes Destacados</h2>

<section class="cards-container">
    
 <div class="card-skewed" aria-label="Dios Nerok">
    <div class="particles-container" id="particles-nerok"></div>
    
    <!-- Contenedor de imágenes -->
    <div class="card-img-wrapper">
        <!-- Gif de galaxia (fondo base) -->
        <img src="../img/Indices/gg.gif" alt="Nerok fondo" class="card-bg">

        <!-- Imagen transparente (efecto en hover) -->
    </div>
        <img src="../img/Indices/overlay.png" alt="Nerok overlay" class="card-overlay">

    <h3>Binohmo</h3>
    <p>Dios y Creador supremo</p>
</div>


   <div class="card-skewed" aria-label="Dios Nerok">
    <div class="particles-container" id="particles-nerok"></div>
    
    <!-- Contenedor de imágenes -->
    <div class="card-img-wrapper">
        <!-- Gif de galaxia (fondo base) -->
        <img src="../img/Indices/bgShelby.png" alt="Nerok fondo" class="card-bg">

        <!-- Imagen transparente (efecto en hover) -->
    </div>
        <img src="../img/Indices/shelby.png" alt="Nerok overlay" class="card-overlay">

    <h3>Binohmo</h3>
    <p>Dios y Creador supremo</p>
</div>


 
    <div class="card-skewed" aria-label="Dios Tempus">
        <div class="particles-container" id="particles-tempus"></div>
        <img src="../img/Indices/galax.gif" alt="Nerok">
        <h3>Tempus</h3>
        <p>Dios del tiempo eterno</p>
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
        <a href="bestiario.php" class="btn-skewed">Ver Todo el Bestiario</a>
    </section>

    <!-- Historias -->
    <section id="historias">
        <h2>Tres Historias Principales</h2>
        <div class="cards-container">
            <a href="historias.php?h=origen-del-cielo" class="btn-skewed">El Origen del Cielo</a>
            <a href="historias.php?h=la-guerra-de-los-dioses" class="btn-skewed">La Guerra de los Dioses</a>
            <a href="historias.php?h=los-susurros-de-lunara" class="btn-skewed">Los Susurros de Lunara</a>
        </div>
    </section>

    <!-- Tierras -->
    <section id="tierras">
        <h2>Explora las Tierras</h2>
        <div class="cards-container">
            <a href="tierras.php?t=montañas-negras" class="card-skewed">Montañas Negras</a>
            <a href="tierras.php?t=bosques-de-selvath" class="card-skewed">Bosques de Selvath</a>
            <a href="tierras.php?t=desiertos-de-fuego" class="card-skewed">Desiertos de Fuego</a>
            <a href="tierras.php?t=lagos-de-lunara" class="card-skewed">Lagos de Lunara</a>
        </div>
    </section>

    <!-- Diario -->
    <section id="diario">
        <h2>Diario del Cronista</h2>
        <div class="cards-container">
            <div class="card-skewed">
                <h3>12 de Marzo</h3>
                <p>Se avistaron nuevas criaturas en el bosque norte.</p>
            </div>
            <div class="card-skewed">
                <h3>5 de Abril</h3>
                <p>Los dioses han descendido durante la tormenta solar.</p>
            </div>
        </div>
        <a href="diario.php" class="btn-skewed">Leer el Diario</a>
    </section>

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
