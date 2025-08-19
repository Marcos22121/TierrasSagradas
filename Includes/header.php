<header>
  <div class="header-container">
    <!-- Logo -->
    <div class="logo">
      <a href="javascript:void(0)" id="openSidebar">
        <img src="../img/Includes/logo_dragon.webp" alt="Tierras Sagradas">
      </a>
      <h2>Tierras Sagradas</h2>
    </div>

    <nav>
      <form class="search-skewed" action="buscar.php" method="get">
        <input type="text" name="q" placeholder="Buscar..." />
        <button type="submit"></button>
      </form>

      <!-- Botones skewed -->
      <a href="personajes.php" class="nav-skewed"><span>Personajes</span></a>
      <a href="bestiario.php" class="nav-skewed"><span>Bestiario</span></a>
      <a href="historias.php" class="nav-skewed"><span>Historias</span></a>
      <a href="tierras.php" class="nav-skewed"><span>Tierras</span></a>
      <a href="diario.php" class="nav-skewed"><span>Diario</span></a>
    </nav>
  </div>

  <style>
    /* ===========================
    HEADER REDISEÑADO COMPLETO
    =========================== */
    header {
      position: fixed;
      top: 0;
      width: 100%;
      height: 90px; /* altura total del header */
      background: #0B0B0B; /* negro sólido */
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 2rem;
      z-index: 1000;
      filter: opacity(85%);
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
      align-items: center;
      gap: 10px;
      height: 100%; /* ocupa toda la altura del header */
    }

    /* =======================
    NAV BOTONES SKEWED
    ======================= */
    .nav-skewed {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px 8px;
      color: var(--color-text);
      text-decoration: none;
      transform: skewX(-12deg);
      transition: background 0.3s ease, color 0.3s ease;
      height: 100%;
      background: none;
      background-size: 200% 100%;
      background-position: left;
    }

    .nav-skewed:hover {
      background: linear-gradient(90deg, var(--color-dorado-start), var(--color-dorado-end));
      color: #000;
      transition: background 0.4s ease, color 0.3s ease;
    }

    .nav-skewed::before,
    .nav-skewed::after {
      content: "";
      position: absolute;
      top: 15%;
      width: 1px;
      height: 70%;
      background: linear-gradient(to top, transparent, var(--color-dorado-start) 40%, var(--color-dorado-end) 60%, transparent);
      opacity: 0.7;
      pointer-events: none;
    }

    .nav-skewed::before {
      left: 0;
      transform: none;
    }

    .nav-skewed::after {
      right: 0;
      transform: none;
    }

    .nav-skewed span {
      transform: skewX(12deg);
      display: inline-block;
      padding: 0 1rem; /* padding solo en el texto */
    }

    /* =======================
    SEARCH SKEWED
    ======================= */
    .search-skewed {
      position: relative;
      display: flex;
      align-items: center;
      transform: skewX(-12deg);
      overflow: hidden;
      border: none;
      border-radius: 4px;
      height: 40px;
      background: #111;
      /* === Ajusta el padding aquí para agrandar la barra de búsqueda === */
      padding: 0 18px; /* <--- MODIFICA ESTE VALOR PARA CAMBIAR EL PADDING */
    }

    /* Bordes laterales gradiente dorado oscuro, desvanecidos arriba */
    .search-skewed::before,
    .search-skewed::after {
      content: "";
      position: absolute;
      width: 2px;
      height: 80%;
      top: 10%;
      background: linear-gradient(
        to top,
        rgba(140, 110, 40, 0.8) 40%,
        rgba(140, 110, 40, 0.3) 90%,
        transparent 100%
      );
      pointer-events: none;
      z-index: 1;
    }
    .search-skewed::before {
      left: 0;
    }
    .search-skewed::after {
      right: 0;
    }

    .search-skewed input {
      border: none;
      outline: none;
      background: transparent;
      /* === Ajusta el padding aquí para agrandar el campo de texto === */
      padding: 0 18px; /* <--- MODIFICA ESTE VALOR PARA CAMBIAR EL PADDING DEL INPUT */
      color: var(--color-text, #fff);
      font-size: 14px;
      transform: skewX(12deg); /* corrección del skew */
      width: 170px; /* puedes aumentar este valor si quieres más ancho */
      z-index: 2;
    }

    .search-skewed button {
      border: none;
      background: linear-gradient(90deg, var(--color-dorado-start), var(--color-dorado-end));
      cursor: pointer;
      /* === Ajusta el padding aquí para agrandar el botón === */
      padding: 0 95px; /* <--- MODIFICA ESTE VALOR PARA CAMBIAR EL PADDING DEL BOTÓN */
      transform: skewX(12deg); /* corrección del skew */
      color: #000;
      font-weight: bold;
      z-index: 2;
    }

    .search-skewed button:hover {
      background: linear-gradient(90deg, var(--color-dorado-end), var(--color-dorado-start));
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.5rem;
      
    }
  </style>

  <?php include("sidebar.php"); ?>
</header>
