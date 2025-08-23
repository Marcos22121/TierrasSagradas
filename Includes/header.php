
<head>
  <link rel="stylesheet" href="../Style/style.css">
</head>
<header>
  
  <div class="header-container">
   
<div class="logo">
          <a href="javascript:void(0)" id="openSidebar">
    <img src="../img/Includes/banner.png" alt="Tierras Sagradas" width="100px" height="150px" id="logo-banner">
      </a>
    <h2>TIERRAS SAGRADAS</h2>
</div>



    <nav>
      <form class="search-skewed" action="buscar.php" method="get">
        <input type="text" name="q" placeholder="Buscar..." />
        <button type="submit"></button>
      </form>

      <a href="personajes.php" class="nav-skewed"><span>Personajes</span></a>
      <a href="bestiario.php" class="nav-skewed"><span>Bestiario</span></a>
      <a href="historias.php" class="nav-skewed"><span>Historias</span></a>
      <a href="tierras.php" class="nav-skewed"><span>Tierras</span></a>
      <a href="museo.php" class="nav-skewed"><span>Museo</span></a>
    </nav>
  </div>
  <style>

header {
    position: fixed;
    top: 0;
    min-width: 100vw;
    height: 6%;
    background: #0B0B0B;
    display: flex;
    align-items: center;
    justify-content: center; 
    vertical-align: middle;
    box-shadow: 0 2px 10px rgba(0,0,0,0.5);
    
    padding: 1rem 1rem;
    z-index: 1000;
    filter: opacity(85%);
}

.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 93%;
}

.logo {
    display: flex;
        align-items: center;
    justify-content: center;


    gap: 5px;
}
.logo img {
    cursor: pointer;
    transition: 0.3s;
    margin-top: 40%;
}

.logo img:hover {
    padding-top: 15%;
}

.logo h2 {
    margin: 0;
    align-self: center;
    font-family: 'Cinzel', serif;
    margin-bottom: 1rem;
    text-shadow: 0 0 10px var(--color-dorado-end);
}

header nav {
    display: flex;
    align-items: center;
    gap: 10px;
    height: 100%;


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
    white-space: nowrap; /* Evita que el texto se rompa en varias líneas */
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
    padding: 0 1rem;
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
    padding: 0 18px;
}

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

.search-skewed::before { left: 0; }
.search-skewed::after { right: 0; }

.search-skewed input {
    border: none;
    outline: none;
    background: transparent;
    padding: 0 18px;
    color: var(--color-text, #fff);
    font-size: 14px;
    transform: skewX(12deg);
    width: 170px;
    z-index: 2;
}

.search-skewed button {
    border: none;
    background: linear-gradient(90deg, var(--color-dorado-start), var(--color-dorado-end));
    cursor: pointer;
    padding: 0 95px;
    transform: skewX(12deg);
    color: #000;
    font-weight: bold;
    z-index: 2;
}

.search-skewed button:hover {
    background: linear-gradient(90deg, var(--color-dorado-end), var(--color-dorado-start));
}

/* =======================
    MENU HAMBURGUESA
======================= */
.menu-toggle {
    display: none; /* Oculto por defecto en desktop */
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 22px;
    cursor: pointer;
    position: relative;
}

.menu-toggle .bar {
    width: 100%;
    height: 3px;
    background-color: var(--color-text);
    transition: all 0.3s ease;
}

/* Estado activo del menú */
.menu-toggle.active .bar:nth-child(2) {
    opacity: 0;
}
.menu-toggle.active .bar:nth-child(1) {
    transform: translateY(9.5px) rotate(45deg);
}
.menu-toggle.active .bar:nth-child(3) {
    transform: translateY(-9.5px) rotate(-45deg);
}

/* =======================
    MEDIA QUERIES
======================= */
@media (max-width: 1024px) {
    header {
        padding: 0 1rem;
    }

    /* Oculta los elementos de navegación en pantallas pequeñas */
    header nav {
        display: none;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        position: fixed;
        top: 90px;
        left: 0;
        width: 100%;
        height: calc(100vh - 90px);
        background: rgba(0, 0, 0, 0.95);
        padding-top: 2rem;
        gap: 20px;
        transition: transform 0.3s ease-in-out;
        transform: translateX(-100%);
    }

    /* Clase para mostrar el menú */
    header nav.active {
        display: flex;
        transform: translateX(0);
    }
    
    .search-skewed, .nav-skewed {
        width: 80%; /* Asegura que los elementos se vean bien en el menú vertical */
    }

    .nav-skewed {
        padding: 1.5rem;
    }

    .menu-toggle {
        display: flex; /* Muestra el botón de menú */
    }
}
  </style>
  <?php include("sidebar.php"); ?>

</header>


<style>

</style>
