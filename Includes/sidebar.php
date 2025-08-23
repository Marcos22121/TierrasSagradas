<?php
// sidebar.php - Menú lateral con hover desplegable
?>

<!-- Sidebar oculto por defecto -->
<div id="sidebar" class="sidebar">
      <span id="closeSidebar">&times;</span>

  <div class="sidebar-header">
            <img src="../img/Includes/logo_completo.png" alt="Logo Tierras Sagradas" height="80%" width="80%">


  </div>

<hr>
  <ul class="sidebar-menu">
  <li class="menu-item">
    <a href="index.php">
      Inicio
      <span class="line-wrap"></span>
    </a>
  </li>

  <li class="menu-item has-sub">
    <a href="#">
      Personajes
      <span class="line-wrap"></span>
    </a>
    <ul class="submenu">
      <li><a href="personajes.php?c=nerok">Binohmo</a></li>
      <li><a href="personajes.php?c=tempus">Tobi Shelby</a></li>
      <li><a href="personajes.php?c=lunara">Augrim</a></li>
       <li><a href="personajes.php?c=nerok">MYMP</a></li>
      <li><a href="personajes.php?c=tempus">Lord Utared</a></li>
      <li><a href="personajes.php?c=lunara">Zocram</a></li>
      <li><a href="personajes.php?c=nerok">Evig</a></li>
      <li><a href="personajes.php?c=tempus">Bondlack</a></li>
      <li><a href="personajes.php?c=lunara">Aiden</a></li>
      <li><a href="personajes.php?c=nerok">Ignamund</a></li>
      <li><a href="personajes.php?c=tempus">Ver Todos...</a></li>
 
      
    </ul>
  </li>

  <li class="menu-item has-sub">
    <a href="#">
      Bestiario
      <span class="line-wrap"></span>
    </a>
    <ul class="submenu">
      <li><a href="bestiario.php?c=grifo">Grifo de Ébano</a></li>
      <li><a href="bestiario.php?c=serpiente">Serpiente de Cristal</a></li>
      <li><a href="bestiario.php?c=leon">León de Sombras</a></li>
    </ul>
  </li>

  <li class="menu-item has-sub">
    <a href="#">
      Historias
      <span class="line-wrap"></span>
    </a>
    <ul class="submenu">
      <li><a href="historias.php?h=origen-del-cielo">Origen del Cielo</a></li>
      <li><a href="historias.php?h=guerra-de-dioses">Guerra de los Dioses</a></li>
      <li><a href="historias.php?h=susurros-lunara">Susurros de Lunara</a></li>
    </ul>
  </li>

  <li class="menu-item has-sub">
    <a href="#">
      Tierras
      <span class="line-wrap"></span>
    </a>
    <ul class="submenu">
      <li><a href="tierras.php?t=montañas-negras">Montañas Negras</a></li>
      <li><a href="tierras.php?t=bosques-selvath">Bosques de Selvath</a></li>
      <li><a href="tierras.php?t=lagos-lunara">Lagos de Lunara</a></li>
    </ul>
  </li>

  <li class="menu-item">
    <a href="diario.php">
      Diario
      <span class="line-wrap"></span>
    </a>
  </li>
</ul>

</div>

<style>
.sidebar {
  position: fixed;
  left: -300px;
  top: 0;
  height: 100vh; /* Change from 100% to 100vh */
  width: 300px;
  background: rgba(0, 0, 0, 1);
  color: var(--color-text, #fff);
  transition: left 0.4s ease;
  z-index: 1000;
  padding-top: 1rem;
  box-shadow: 2px 0 15px rgba(0,0,0,0.5);
}


.sidebar.open {
  left: 0;
}

.sidebar-header {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding-top: -50px;
  padding-bottom: 30px;
}

hr {
    border:1px solid var(--color-dorado-end, gold);
}

.sidebar-header h2 {
  font-family: 'Cinzel', serif;
}

#closeSidebar {
  cursor: pointer;
  font-size: 3rem;
  transition: color 0.3s;
}

#closeSidebar:hover {
  color: var(--color-dorado-start, orange);
}

.sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 1rem 0;
    background: rgba(0, 0, 0, 1);

}

.sidebar-menu .menu-item {
  position: relative;
}

.sidebar-menu a {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between; /* texto a la izq, flecha a la der */
  padding: 0.8rem 1rem;
  text-decoration: none;
  color: inherit;
  transition: background 0.3s, padding-left 0.3s;
  overflow: hidden;
}

/* Línea solo abajo */
.sidebar-menu a .line-wrap {
  position: absolute;
  bottom: 0; /* solo abajo */
  left: 15%;
  width: 70%;
  height: 2px;
  background: linear-gradient(
    to right,
    transparent,
    var(--color-dorado-start) 40%,
    var(--color-dorado-end) 60%,
    transparent
  );
  opacity: 0.7;
  pointer-events: none;
}

/* Hover dorado */
.sidebar-menu a:hover {
  background: linear-gradient(90deg, var(--color-dorado-start), var(--color-dorado-end));
  padding-left: 1.5rem;
  color: #000;
  transition: background 0.4s ease, color 0.3s ease;
}

/* Flechita independiente */
.has-sub > a::after {
  content: "▶";
  margin-left: auto;
  transition: transform 0.3s;
}

.has-sub:hover > a::after {
  transform: rotate(90deg);
}

.submenu {
  display: none;
  position: absolute;
  left: 100%;
  top: 0;
  width: 220px;
  background: rgba(0,0,0,0.9);
  border-left: 2px solid var(--color-dorado-end, gold);
  list-style: none;
  padding: 0;
}

.has-sub:hover .submenu {
  display: block;
}

.submenu li a {
  padding: 0.7rem 1rem;
}

</style>

<!-- Script -->
<script>
const openSidebarBtn = document.getElementById("openSidebar");
if (openSidebarBtn) {
  openSidebarBtn.addEventListener("click", () => {
    document.getElementById("sidebar").classList.add("open");
  });
}

document.getElementById("closeSidebar").addEventListener("click", () => {
  document.getElementById("sidebar").classList.remove("open");
});
</script>
