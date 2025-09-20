<?php

function generateBreadcrumbs ($currentPage) {
    $breadcrumbs = [
        'home' => ['title' => 'Главная', 'url' => '/darkvader/index.php'],
        'about' => ['title' => 'О нас', 'url' => '/darkvader/pages/about.php'],
        'contact' => ['title' => 'Контакты', 'url' => '/darkvader/pages/contact.php'],
        'service' => ['title' => 'Услуги', 'url' => '/darkvader/pages/services.php'],
         'gallery' => ['title' => 'Галерея', 'url' => '/darkvader/pages/gallery.php']
    ];

$output = '<nav class="breadcrumbs" aria-label="Хлебные крошки"><ol class="breadcrumb">';
$output .= '<li class="breadcrumb-item active"><a href="/darkvader/index.php">Главная</a></li>';


if ($currentPage !='home'&& isset($breadcrumbs[$currentPage])) {
    $output .= '<li><span class="separator">/</span></li>';
    $output .= '<li class="breadcrumb-item active"><a href="' . $breadcrumbs[$currentPage]['url'] . '">' . 
                            $breadcrumbs [$currentPage]['title'] . '</a></li>';
   }
$output .= '</ol></nav>' ;
return $output;

}

function getCurrentTheme() {
    if (isset($_COOKIE['theme'])) {
        return $_COOKIE['theme'];
    }
    return 'light'; 
}
function setTheme($theme, $expire = 30 * 24 * 60 * 60) {
     setcookie ('theme', $theme, time() + $expire, '/');
     $_COOKIE['theme'] = $theme;
}








?>