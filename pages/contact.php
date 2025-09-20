<?php

/**
 * СТРАНИЦА "КОНТАКТЫ"
 * 
 * Этот файл представляет страницу с контактной информацией.
 * Здесь мы также можем обработать форму обратной связи, если она есть.
 */

// Определяем текущую страницу для подсветки в меню
$currentPage = 'contact';

// Устанавливаем заголовок страницы
$pageTitle = 'Контактная информация';

// Формируем содержимое страницы
$pageContent = '
    <section class="contact-section">
    <div class="contact-form">
            <h2>Форма обратной связи</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Ваше имя:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Ваш email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Сообщение:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Отправить сообщение</button>
            </form>
        </div>
    </section>
';

$name = '';
$email = '';
$message = '';

// Обрабатываем форму, если она была отправлена
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
}

if ($name != 'Вася') {
    $pageContent .= '
        <div class="message success">
            Спасибо, ' . $name. '! Ваше сообщение было успешно отправлено.
            Мы ответим вам на email ' . $email . ' в ближайшее время.
        </div>
    ';
} else {
    $pageContent .= '
        <div class="message success">
Здорова Василий!
        </div>
    ';
}

// Подключаем общий шаблон сайта
include __DIR__ . '/../templates/template.php';
