# 📚 BibliotekaPHPMySQL

Prosty system zarządzania książkami w bibliotece oparty na PHP i MySQL.

## 🧰 Technologie
- PHP (bez frameworka)
- MySQL
- HTML, CSS
- Bootstrap 5

## 📦 Funkcje
- Przeglądanie listy książek
- Dodawanie nowych książek
- Edytowanie informacji o książkach
- Usuwanie książek
- Filtrowanie według autora i gatunku

## 🔧 Instalacja
1. Sklonuj repozytorium lub rozpakuj ZIP:
   ```
   git clone https://github.com/twoj-login/BibliotekaPHPMySQL.git
   ```

2. Zaimportuj bazę danych:
   - `database.sql` – struktura bazy
   - `insert_data.sql` – przykładowe dane

3. Skonfiguruj połączenie z bazą w pliku `config/database.php`

4. Uruchom projekt na lokalnym serwerze (XAMPP/MAMP) i otwórz `public/index.php` w przeglądarce.

## 🗃️ Struktura katalogów

```
BibliotekaPHPMySQL/
├── config/
├── controllers/
├── models/
├── views/
├── public/
├── database.sql
├── insert_data.sql
└── README.md
```

## 🗄️ Struktura bazy danych

```sql
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255),
    genre VARCHAR(100),
    year INT
);
```

## ✍️ Autor
- Imię Nazwisko (Twoje)
- Projekt stworzony na potrzeby nauki PHP/MySQL
