# 🏛️ Gods Backoffice

> Questo è il backoffice del progetto richiesto per l'esame di Boolean. Come entità principale ho scelto Dei messa in relazione 1 a molti con Pantheon e molti a molti con Domini.

![Preview](./readme_images/gods-preview.png)



![Laravel](https://img.shields.io/badge/Laravel-11-red?logo=laravel&label=Laravel)
![Licenza](https://img.shields.io/badge/Licenza-MIT-blue?label=Licenza)

---


## 🌟 Caratteristiche principali

- **Gestione CRUD completa**: Crea, modifica, elimina e visualizza Dei, Pantheon e Domini tramite interfaccia amministrativa intuitiva.
- **Relazioni tra entità**: Associa Dei a Pantheon e Domini, con gestione pivot e filtri avanzati.
- **Autenticazione sicura**: Login, registrazione e gestione utenti tramite Laravel Breeze.
- **Seeders e migrazioni**: Database facilmente popolabile e versionato per sviluppo e test rapidi.
- **API RESTful**: Endpoints per integrazione con frontend.

---


## 🛠️ Tech Stack

### Backend

- **Laravel 11**: Core API & Business Logic
- **MySQL**: Database relazionale
- **Laravel Breeze**: Autenticazione e scaffolding

### Frontend

- **Blade**: Templating engine Laravel
- **Vite**: Asset bundler

### Altro
- **Composer**: Gestione dipendenze PHP

---


## 🚀 Quick Start

### Requisiti

Assicurati di avere installato:
- PHP >= 8.2
- Composer
- MySQL

### Installazione

```bash
# Clona il repository
git clone https://github.com/mirkobechini/gods-backoffice.git

# Entra nella cartella del progetto
cd gods-backoffice

# Installa le dipendenze PHP
composer install

# Copia il file di esempio delle variabili ambiente
cp .env.example .env

# Genera la chiave dell'applicazione
php artisan key:generate

# Configura il database nel file .env

# Esegui le migration e i seeders
php artisan migrate --seed

# (Opzionale) Compila asset frontend
npm install && npm run build
```

### Avvio

```bash
# Avvia il server di sviluppo Laravel
php artisan serve
```

Apri il browser su `http://localhost:8000`.

---


## 📊 Database Design

L'architettura del database segue le best practice Laravel:

- Tabelle: users, gods, pantheons, domains, domain_god (pivot)
- Migrazioni versionate in `database/migrations`
- Seeder per dati di esempio in `database/seeders`

> [!TIP]
> Le migration e i seeder sono consultabili nella cartella `database/`.

---


## 📂 Struttura del progetto

```text
.
|-- app/                # Backend (Controllers, Models, Providers)
|-- bootstrap/
|-- config/
|-- database/           # Migrations, Seeders, Factories
|-- public/             # Entry point e asset
|-- resources/          # Views (Blade), JS, SCSS
|-- routes/             # Definizione rotte
|-- storage/
|-- tests/              # Test automatici
|-- artisan             # CLI Laravel
|-- composer.json       # Dipendenze PHP
|-- package.json        # Dipendenze JS (solo asset)
|-- README.md
```

---

## 🗺️ Roadmap

- [x] Rilascio versione alpha
- [x] Integrazione API esterna

---

## 🤝 Contribuire

Le contribuzioni migliorano il progetto. Per contribuire:

1. Fai fork del repository
2. Crea un branch: `git checkout -b feature/NomeFeature`
3. Esegui commit: `git commit -m "Add NomeFeature"`
4. Fai push del branch: `git push origin feature/NomeFeature`
5. Apri una Pull Request

---


## 📄 Licenza

Distribuito sotto licenza MIT. Vedi il file `LICENSE` per i dettagli.

---

## 📧 Contatti

Mirko Bechini - [LinkedIn](https://www.linkedin.com/in/mirko-bechini-892202252) - mirkobechini@gmail.com

Link progetto: https://github.com/mirkobechini/gods-backoffice
