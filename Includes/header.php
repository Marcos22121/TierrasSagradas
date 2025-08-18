    <header>
    <div class="header-container">
        <!-- Logo -->
        <div class="logo">
        <a href="index.php"><img src="../img/Includes/logo.png" alt="Tierras Sagradas"></a>
        </div>

        <!-- Navegación -->
        <nav>
        <a href="personajes.php" class="nav-skewed"><span>Personajes</span></a>
        <a href="bestiario.php" class="nav-skewed"><span>Bestiario</span></a>
        <a href="historias.php" class="nav-skewed"><span>Historias</span></a>
        <a href="tierras.php" class="nav-skewed"><span>Tierras</span></a>
        <a href="diario.php" class="nav-skewed"><span>Diario</span></a>
        </nav>
    </div>

    <!-- GSAP Animaciones -->
    

    <style>
    /* ===========================
    HEADER REDISEÑADO COMPLETO
    =========================== */
    header {
        position: fixed;
        top: 0;
        width: 95%;
        height: 80px; /* altura total del header */
        background: #0B0B0B; /* negro sólido */
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 2rem;
        z-index: 1000;
    }

    /* Contenedor del header */
    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    /* Logo */
    header .logo img {
        height: 70px; /* agrandado */
        width: auto;
    }

    /* Navegación */
    header nav {
        display: flex;
        height: 100%; /* ocupa toda la altura del header */
    }

    /* Botones skewed estilo texto por defecto */
    .nav-skewed {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 22px 8px; /* mucho padding vertical, poco horizontal */    color: var(--color-text); /* texto visible */
        text-decoration: none;
        transform: skewX(-12deg);
        transition: all 0.3s ease-in-out;
        height: 100%; /* ocupa toda la altura del header */
        background: none; /* sin fondo por defecto */
    }

    /* Des-skew del texto para lectura recta */
    .nav-skewed span {
        transform: skewX(12deg);
        display: inline-block;
        padding: 0 1rem; /* padding solo en el texto */
    }

    /* Hover: fondo dorado gradiente suave */
    .nav-skewed:hover {
        background: linear-gradient(120deg, var(--color-dorado-start), var(--color-dorado-end));
        color: #000;
        box-shadow: 0 0 10px var(--color-dorado-end);
    }


    </style>
    </header>
