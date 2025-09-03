<?php
// Pobierz ścieżkę żądania
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Obsłuż stronę główną
if ($request === '/' || $request === '/index.php') {
    echo "<h1>Witaj w aplikacji Azure App Service!</h1>";
    echo "<p>Mój numer indeksu to: " . getenv("STUDENT_ID") . "</p>";
}
// W innym przypadku wyświetl stronę 404
else {
    http_response_code(404);
    if (file_exists(__DIR__ . "/404.html")) {
        include(__DIR__ . "/404.html");
    } else {
        echo "<h1>404 - Strona nie istnieje</h1>";
    }
}
?>
