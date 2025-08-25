<head>
    <link rel="stylesheet" href="../Style/style.css">
    <style>
        :root {
            --bg: #0B0B0B;
            --panel: #181619;
            --panel-2: #181B22;
            --panel-3: #272A31;
            --gold-1: #F5D38A;
            --gold-2: #C9952E;
            --text: #F5D38A;
            --ink: #EDE7D9;
            --muted: #C2B79E;
            --transition-speed: 0.2s;
            --ring: conic-gradient(from 0deg, rgba(0,0,0,0) 0 20%, var(--gold-1) 30%, var(--gold-2) 45%, rgba(0,0,0,0) 55% 100%);
            --color-dorado-start: var(--gold-1);
            --color-dorado-end: var(--gold-2);
            --color-text: var(--text);
        }
    </style>
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
            width: 100vw;
            height: 6%;
            background: var(--bg);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.5);
            padding: 1rem;
            z-index: 1000;
            opacity: 0.85;
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
         vertical-align: middle;
            gap: 10px;
            height: 100%;
            cursor: pointer;
            
        }

        .logo img {
            cursor: pointer;
            transition: 0.3s;
            margin-top: 40%;
        }
        .logo img:hover { padding-top: 15%; }
        .logo h2 {
            font-family: 'Cinzel', serif;
            color: var(--color-text);
            text-shadow: 0 0 10px var(--color-dorado-end);
            font-size: 1.2rem;
        }
        header nav {
            display: flex;
            align-items: center;
            gap: 10px;
            height: 100%;
        }
        .nav-skewed, .search-skewed {
            position: relative;
            display: flex;
            align-items: center;
            transform: skewX(-12deg);
            background: none;
            transition: background 0.3s, color 0.3s;
            height: 100%;
            white-space: nowrap;
        }
        .nav-skewed {
            justify-content: center;
            padding: 28px 8px;
            color: var(--color-text);
            text-decoration: none;
            background-size: 200% 100%;
        }
        .nav-skewed:hover {
            background: linear-gradient(90deg, var(--color-dorado-start), var(--color-dorado-end));
            color: var(--bg);
        }
        .nav-skewed::before, .nav-skewed::after {
            content: "";
            position: absolute;
            top: 15%;
            width: 1px;
            height: 70%;
            background: linear-gradient(to top, transparent, var(--color-dorado-start) 40%, var(--color-dorado-end) 60%, transparent);
            opacity: 0.7;
            pointer-events: none;
        }
        .nav-skewed::before { left: 0; }
        .nav-skewed::after { right: 0; }
        .nav-skewed span {
            transform: skewX(12deg);
            padding: 0 1rem;
        }
        .search-skewed {
            overflow: hidden;
            border-radius: 4px;
            height: 40px;
            background: var(--panel);
            padding: 0 18px;
        }
        .search-skewed::before, .search-skewed::after {
            content: "";
            position: absolute;
            width: 2px;
            height: 80%;
            top: 10%;
            background: linear-gradient(to top, var(--gold-2) 40%, rgba(140,110,40,0.3) 90%, transparent 100%);
            pointer-events: none;
            z-index: 1;
        }
        .search-skewed::before { left: 0; }
        .search-skewed::after { right: 0; }
        .search-skewed input, .search-skewed button {
            border: none;
            background: transparent;
            transform: skewX(12deg);
            z-index: 2;
        }
        .search-skewed input {
            padding: 0 18px;
            color: var(--color-text);
            font-size: 14px;
            width: 170px;
        }
        .search-skewed button {
            background: linear-gradient(90deg, var(--color-dorado-start), var(--color-dorado-end));
            cursor: pointer;
            padding: 0 95px;
            color: var(--bg);
            font-weight: bold;
        }
        .search-skewed button:hover {
            background: linear-gradient(90deg, var(--color-dorado-end), var(--color-dorado-start));
        }
        .menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 22px;
            cursor: pointer;
        }
        .menu-toggle .bar {
            width: 100%;
            height: 3px;
            background: var(--color-text);
            transition: 0.3s;
        }
        .menu-toggle.active .bar:nth-child(2) { opacity: 0; }
        .menu-toggle.active .bar:nth-child(1) { transform: translateY(9.5px) rotate(45deg); }
        .menu-toggle.active .bar:nth-child(3) { transform: translateY(-9.5px) rotate(-45deg); }
        @media (max-width: 1024px) {
            header { padding: 0 1rem; }
            header nav {
                display: none;
                flex-direction: column;
                position: fixed;
                top: 90px;
                left: 0;
                width: 100%;
                height: calc(100vh - 90px);
                background: var(--panel-2);
                padding-top: 2rem;
                gap: 20px;
                transform: translateX(-100%);
                transition: transform 0.3s;
            }
            header nav.active {
                display: flex;
                transform: translateX(0);
            }
            .search-skewed, .nav-skewed { width: 80%; }
            .nav-skewed { padding: 1.5rem; }
            .menu-toggle { display: flex; }
        }
    </style>
    <?php include("sidebar.php"); ?>
</header>
