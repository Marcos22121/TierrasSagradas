<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierras Sagradas</title>
    <link rel="stylesheet" href="../Style/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <?php include '../Includes/sidebar.php'; ?>

    <main>
        <!-- HERO -->
        <section class="hero-card">
            <div class="hero-gif">
                <img src="../img/Indices/ezgif.gif" alt="Hero GIF" width="100%" height="100%"   >
            </div>
            <div class="hero-overlay">
                <h1 class="hero-title" id="hero-title"></h1>
                <p class="hero-subtitle" id="hero-subtitle"></p>
                <button class="explore-btn" id="exploreBtn">Explorar</button>
            </div>
        </section>

        <!-- LORE -->
        <section class="lore" id="lore-section">
            <h2>Lore de Tierras Sagradas</h2>
            <p>
                Aquí va el texto del lore. Puedes reemplazarlo después con la historia completa, personajes, mitos y leyendas que componen el universo de Tierras Sagradas.
            </p>
        </section>
 <h1>Explorar la mitología</h1>
        <!-- EXPLORACIÓN -->
        <section class="explore-section">
           
            <div class="explore-card">
                <img src="../img/indices/imagen.png" alt="Personajes">
                <div class="overlay"><h3>Personajes</h3></div>
            </div>
            <div class="explore-card">
                <img src="../img/indices/imagen.png" alt="Personajes">
                <div class="overlay"><h3>Historias</h3></div>
            </div>
            <div class="explore-card">
                <img src="../img/indices/imagen.png" alt="Personajes">
                <div class="overlay"><h3>Tierras</h3></div>
            </div>
            <div class="explore-card">
                <img src="../img/indices/imagen.png" alt="Personajes">
                <div class="overlay"><h3>Otros</h3></div>
            </div>
        </section>
    </main>

    <?php include '../Includes/footer.php'; ?>

    <script src="../Scripts/index.js"></script>
</body>
</html>
