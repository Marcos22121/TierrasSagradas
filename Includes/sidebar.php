<link rel="stylesheet" href="../Style/sidebar.css">
<div id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <img src="../img/Includes/logo.png" alt="Logo" height="200"><br>
    </div>
    <ul class="sidebar-menu">
        <li><a href="../Indices/index.php">Inicio</a></li>
        <li><a href="../Indices/que-es.php">¿Qué es Tierras Sagradas?</a></li>
        <li><a href="../Indices/historias.php">Historias</a></li>
        <li><a href="../Indices/personajes.php">Personajes</a></li>
        <li><a href="../Indices/tierras.php">Tierras</a></li>
    </ul>
</div>

<!-- Botón hamburguesa -->
<button class="hamburger" onclick="toggleSidebar()">☰</button>

<script>
function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("active");
}
</script>
