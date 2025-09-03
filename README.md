# Azure PHP Hello World

Prosta aplikacja PHP uruchomiona w Azure App Service.

## Funkcjonalności
- Wyświetla stronę główną z numerem indeksu studenta.
- Obsługuje własną stronę błędu 404 (plik `404.html`).

## Struktura
- `index.php` – logika aplikacji, obsługa tras i numer indeksu.
- `404.html` – niestandardowa strona błędu.
- `README.md` – opis projektu.

## Zmienna środowiskowa
Należy w Azure App Service dodać w **Configuration → Application settings**:

```
STUDENT_ID = 49370
```

## Podgląd działania
- `/` → wyświetla stronę główną.
- `/xyz` → wyświetla stronę błędu 404.
