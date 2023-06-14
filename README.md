<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

- Una volta scaricato il progetto : 
```
composer install
npm i
```
- Duplicare e rinominare il file `.env` collegandoci il proprio db
- Generare la key utilizzando 
```
php artisan key:generate
```
- Lanciare il server utilizzando : 
```
npm run dev
php artisan serve
```
---

- 1 Creazione migration museo 
- 2 Creazione migration artisti
- 

---
Per creare `MODEL`,  `MIGRATION` E `RESOURCE-SPAGE-CONTROLLER`  con un solo comando utilizziamo:
```
php artisan make:model NomeModel -m -r
```
---
# Campi tabella musei
- museum_name
- latitude->`nullable()`
- longitude->`nullable()`
- city
- type->nullable()

# Campi tabella artisti 
- artist_name
- artist_lastname
- date_of_birth->`nullable()`
- place_of_birth->`nullable()`
- alive->`nullable()`
- category->`nullable()`
- composition->`nullable()`

Per lanciare i seeder lanciare questo comando : 
```
php artisan migrate:refresh --seed
```
