<?php
$request = $_SERVER['REQUEST_URI'];

if ($request == "/" || $request == "/index.php") {
    echo "<h1>Witaj w aplikacji Azure App Service!</h1>";
    echo "<p>Mój numer indeksu to: " . getenv("STUDENT_ID") . "</p>";
} else {
    http_response_code(404);
    include("404.html");
}
?>
