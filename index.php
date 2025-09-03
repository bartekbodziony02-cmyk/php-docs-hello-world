<?php
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Strona główna
if ($request === '' || $request === 'index.php') {
    echo "<h1>Witaj w aplikacji Azure App Service!</h1>";
    echo "<p>Mój numer indeksu to: " . getenv("STUDENT_ID") . "</p>";
}
// Każda inna ścieżka → 404.html
else {
    http_response_code(404);
    if (file_exists(__DIR__ . "/404.html")) {
        readfile(__DIR__ . "/404.html");
    } else {
        echo "<h1>404 - Strona nie istnieje</h1>";
    }
}
?>