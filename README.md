
🚀 Laravel 12 + Vue 3 + Inertia.js - Starter Template

Benvenuto!
Questa repository è un template base Laravel + Vue 3 con Inertia.js già configurato, pensato per accelerare lo sviluppo di nuove applicazioni.

## Requisiti

 - PHP >= 8.2
 - Composer
 - Node.js + NPM
 - MySql o MariaDB
 - Git
 - MAMP/ XAMPP / Laravel Valet / Laravel Forge

## Clonazione e avvio progetto

1️⃣ Clona la repository

```bash
  git clone https://github.com/davidearbola/scaffold-laravel12-vue3 nome-tuo-progetto
```
Spostati nella cartella del progetto:

```bash
  cd nome-tuo-progetto
```

💾 2️⃣ Installa le dipendenze PHP
```bash
  composer install
```

📦 3️⃣ Installa le dipendenze JavaScript
```bash
  npm install
```

🗝️ 4️⃣ Crea il file .env e genera la chiave 
Copia il file .env.example:
```bash
  cp .env.example .env
```
```bash
  php artisan key:generate
```

🛢️ 5️⃣ Configura il Database

Modifica il file .env e imposta i dati di connessione MySQL:

`B_DATABASE=nome_del_tuo_database`

`DB_USERNAME=tuo_username`

`DB_PASSWORD=tua_password`

Crea il database manualmente o da terminale prima di proseguire.


⚙️ 6️⃣ Esegui le migrazioni e i seed
```bash
php artisan migrate --seed
php artisan db:seed --class=UserSeeder
```

🧹 7️⃣ Compila gli assets
Per la modalità di sviluppo:
```bash
npm run dev
```
Oppure per la modalità produzione:
```bash
npm run build
```

🔥 8️⃣ Avvia il server Laravel
```bash
php artisan serve
```

🔑 Login di default
Dopo aver eseguito i seeder troverai un utente admin pronto per il login:

Email: admin@scaffold.it

Password: 1backdoor2big

✅ A questo punto puoi accedere alla tua applicazione visitando:
http://localhost:8000
Effettua il login con le credenziali sopra per accedere all'area riservata.


## 📚 Stack Tecnologico

Laravel 12

Vue.js 3 (Composition API)

Inertia.js

Vite

TailwindCSS (opzionale: aggiungi a piacere)

Repository Pattern già strutturato

## ❤️ Credits

Progetto scaffolding creato da Davide Arbola
https://github.com/davidearbola
