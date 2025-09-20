
<?php require_once __DIR__ . '/../functions.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<?php include 'page_templates/head.php'; ?>
<?php $currentPage = basename($_SERVER['PHP_SELF'], '.php');

$pageTitles = [
    'index' => 'Главная',
    'service' => 'Услуги',
    'contact' => 'Контакты',
    'gallery' => 'Галерея',
    'about' => 'О нас'
];

// Если текущая страница есть в массиве — используем заголовок, иначе имя файла
$pageTitle = $pageTitles[$currentPage] ?? ucfirst($currentPage);
?>

<body class="<?php echo $currentTheme; ?>-theme">
    <div class="wrapper">
    <?php include 'page_templates/header.php'; ?>
    <section class="breadcrumbs">
        <?php echo generateBreadcrumbs ($currentPage); ?>
    </section>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo $pageContent; ?>
                </div>
            </div>
        </div>
    </main>

    <?php include 'page_templates/footer.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>