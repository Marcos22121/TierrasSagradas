<footer>
  <div class="footer-container">
    
    <div class="footer-logo">
      <img src="../img/Includes/banner.png" alt="Tierras Sagradas" width="80" height="120">
      <h3>TIERRAS SAGRADAS</h3>
    </div>

    <div class="footer-links">
      <a href="personajes.php" class="footer-link">Personajes</a>
      <a href="bestiario.php" class="footer-link">Bestiario</a>
      <a href="historias.php" class="footer-link">Historias</a>
      <a href="tierras.php" class="footer-link">Tierras</a>
      <a href="museo.php" class="footer-link">Museo</a>
    </div>

    <div class="footer-copy">
      <p>&copy; <?php echo date("Y"); ?> Tierras Sagradas. Todos los derechos reservados.</p>
    </div>
  </div>

  <!-- Botón para subir con SVG -->
  <button id="scrollTopBtn" title="Ir arriba">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <line x1="12" y1="19" x2="12" y2="5"></line>
      <polyline points="5 12 12 5 19 12"></polyline>
    </svg>
  </button>

  <style>
    footer {
      background: #0B0B0B;
      width: 100%;
      padding: 2rem 1rem;
      text-align: center;
      color: var(--color-text);
      border-top: 1px solid;
      border-image: linear-gradient(90deg, var(--color-dorado-start), var(--color-dorado-end)) 1;
      filter: opacity(85%);
    }

    .footer-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.5rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .footer-logo img {
      cursor: pointer;
      transition: transform 0.3s ease;
    }
    .footer-logo img:hover {
      transform: scale(1.05);
    }

    .footer-logo h3 {
      font-family: 'Cinzel', serif;
      margin: 0;
      font-size: 1.5rem;
      text-shadow: 0 0 8px var(--color-dorado-end);
    }

    .footer-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
    }

    .footer-link {
      color: var(--color-text);
      text-decoration: none;
      font-family: 'Lora', serif;
      position: relative;
      padding: 0.5rem 1rem;
      transition: all 0.3s ease;
    }

    .footer-link::before,
    .footer-link::after {
      content: "";
      position: absolute;
      top: 20%;
      width: 1px;
      height: 60%;
      background: linear-gradient(to top, transparent, var(--color-dorado-start) 40%, var(--color-dorado-end) 60%, transparent);
      opacity: 0.7;
      pointer-events: none;
    }

    .footer-link::before { left: 0; }
    .footer-link::after { right: 0; }

    .footer-link:hover {
      background: linear-gradient(90deg, var(--color-dorado-start), var(--color-dorado-end));
      color: #000;
      border-radius: 4px;
    }

    .footer-copy {
      font-size: 0.9rem;
      opacity: 0.8;
    }

    @media (max-width: 768px) {
      .footer-links {
        flex-direction: column;
        gap: 10px;
      }
      .footer-logo h3 {
        font-size: 1.2rem;
      }
    }

    /* Botón de subir con SVG */
    #scrollTopBtn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 999;
      background: linear-gradient(90deg, var(--color-dorado-start), var(--color-dorado-end));
      border: none;
      padding: 12px;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0,0,0,0.4);
      transition: transform 0.3s ease, opacity 0.3s ease;
      opacity: 0.8;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #scrollTopBtn svg {
      width: 20px;
      height: 20px;
      stroke: #000;
    }

    #scrollTopBtn:hover {
      transform: scale(1.2);
      opacity: 1;
    }

    /* Inicialmente oculto */
    #scrollTopBtn.hidden {
      display: none;
    }
  </style>

  <script>
    const scrollBtn = document.getElementById('scrollTopBtn');

    window.addEventListener('scroll', () => {
      if(window.scrollY > 100){
        scrollBtn.classList.remove('hidden');
      } else {
        scrollBtn.classList.add('hidden');
      }
    });

    scrollBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>
</footer>
