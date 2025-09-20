<header  style="background-image: url('/darkvader/images/picture1.jpg');background-size: cover; background-position: center; background-repeat: no-repeat;padding: 60px 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="theme-switcher">
                    <form method="post" action="/darkvader/templates/page_templates/toggle-theme.php">
                        <button type="submit" name="toggle_theme" class="theme-btn">
                            <?php echo $currentTheme == 'light' ? '🌙 Тёмная тема' : '☀️ Светлая тема' ; ?>
                        </button>
                    </form>
                </div>
                <?php include 'nav.php'; ?>
                <h1 style="text-align: center; color: white"><?= htmlspecialchars($pageTitle) ?></h1>
            </div>
        </div>
    </div>
</header>