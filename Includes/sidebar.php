<?php
// sidebar.php - Menú lateral con hover desplegable
?>

<!-- Sidebar oculto por defecto -->
<div id="sidebar" class="sidebar">
  <div class="sidebar-header">
    <h2>Menú</h2>
    <span id="closeSidebar">&times;</span>
  </div>

  <ul class="sidebar-menu">
    <li class="menu-item">
      <a href="index.php">Inicio</a>
    </li>

    <li class="menu-item has-sub">
      <a href="#">Personajes</a>
      <ul class="submenu">
        <li><a href="personajes.php?c=nerok">Nerok</a></li>
        <li><a href="personajes.php?c=tempus">Tempus</a></li>
        <li><a href="personajes.php?c=lunara">Lunara</a></li>
      </ul>
    </li>

    <li class="menu-item has-sub">
      <a href="#">Bestiario</a>
      <ul class="submenu">
        <li><a href="bestiario.php?c=grifo">Grifo de Ébano</a></li>
        <li><a href="bestiario.php?c=serpiente">Serpiente de Cristal</a></li>
        <li><a href="bestiario.php?c=leon">León de Sombras</a></li>
      </ul>
    </li>

    <li class="menu-item has-sub">
      <a href="#">Historias</a>
      <ul class="submenu">
        <li><a href="historias.php?h=origen-del-cielo">Origen del Cielo</a></li>
        <li><a href="historias.php?h=guerra-de-dioses">Guerra de los Dioses</a></li>
        <li><a href="historias.php?h=susurros-lunara">Susurros de Lunara</a></li>
      </ul>
    </li>

    <li class="menu-item has-sub">
      <a href="#">Tierras</a>
      <ul class="submenu">
        <li><a href="tierras.php?t=montañas-negras">Montañas Negras</a></li>
        <li><a href="tierras.php?t=bosques-selvath">Bosques de Selvath</a></li>
        <li><a href="tierras.php?t=lagos-lunara">Lagos de Lunara</a></li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="diario.php">Diario</a>
    </li>
  </ul>
</div>

<style>
.sidebar {
  position: fixed;
  left: -300px;
  top: 0;
  height: 100%;
  width: 300px;
  background: rgba(0,0,0,0.95);
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
  justify-content: space-between;
  align-items: center;
  padding: 0 1rem;
  border-bottom: 1px solid var(--color-dorado-end, gold);
}

.sidebar-header h2 {
  font-family: 'Cinzel', serif;
}

#closeSidebar {
  cursor: pointer;
  font-size: 2rem;
  transition: color 0.3s;
}

#closeSidebar:hover {
  color: var(--color-dorado-start, orange);
}

.sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 1rem 0;
}

.sidebar-menu .menu-item {
  position: relative;
}

.sidebar-menu a {
  display: block;
  padding: 0.8rem 1rem;
  text-decoration: none;
  color: inherit;
  transition: background 0.3s, padding-left 0.3s;
}

.sidebar-menu a:hover {
  background: rgba(255, 215, 0, 0.2);
  padding-left: 1.5rem;
}

.has-sub > a::after {
  content: "▶";
  position: absolute;
  right: 15px;
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
document.getElementById("openSidebar").addEventListener("click", () => {
  document.getElementById("sidebar").classList.add("open");
});

document.getElementById("closeSidebar").addEventListener("click", () => {
  document.getElementById("sidebar").classList.remove("open");
});
</script>
