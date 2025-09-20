<?php




require_once  __DIR__ . '/../../functions.php';


if (isset($_POST['toggle_theme'])) {
    $currentTheme = getCurrentTheme();
    $newTheme = $currentTheme == 'light' ? 'dark' : 'light' ;
    setTheme ($newTheme);
}


$referer = $_SERVER ['HTTP_REFERER'] ?? '/darkvader/index.php';
header("Location: $referer");
exit;








?>