<nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                        <li class="nav-item">
                                <a class="nav-link <?php echo (isset($currentPage) && $currentPage == 'home') ? 'active' : ''; ?>" href="/darkvader/index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link <?php echo (isset($currentPage) && $currentPage == 'about') ? 'active' : ''; ?>" href="/darkvader/pages/about.php">О нас</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link <?php echo (isset($currentPage) && $currentPage == 'contact') ? 'active' : ''; ?>" href="/darkvader/pages/contact.php">Контакты</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link <?php echo (isset($currentPage) && $currentPage == 'service') ? 'active' : ''; ?>" href="/darkvader/pages/service.php">Услуги</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link <?php echo (isset($currentPage) && $currentPage == 'gallery') ? 'active' : ''; ?>" href="/darkvader/pages/gallery.php">Галерея</a>
                        </li>
                </ul>
        </div>
</nav>