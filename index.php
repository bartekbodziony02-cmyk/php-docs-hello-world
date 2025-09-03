<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($request === '/' || $request === '/index.php') {
    // Strona główna
    echo "<h1>Witaj w aplikacji Azure App Service!</h1>";
    echo "<p>Mój numer indeksu to: " . getenv("STUDENT_ID") . "</p>";
} else {
    // Błąd 404
    http_response_code(404);
    if (file_exists("404.html")) {
        include("404.html");
    } else {
        echo "<h1>404 - Ups! Strona nie istnieje</h1>";
    }
}
?>
