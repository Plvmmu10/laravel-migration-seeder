## Inizializzazione Progetto Laravel



-Intallare e creare una cartella con la struttura Laravel

composer create-project --prefer-dist laravel/laravel:^9.2 "Nome progetto"

cd "Nome progetto"

-Una volta che sono all'interno della cartella "Nome progetto" apriamola su VS

code . -r


-ed impostiamo il preset

composer require pacificdev/laravel_9_preset   


-Installiamo Bootstrap

php artisan preset:ui bootstrap
   

npm install         


npm install --save @fortawesome/fontawesome-free  

_________________________________________

-Inserire all'interno di vite.config.js su "alias"


'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),
___________________________________________


_____________________________________
-Verificare che ci sia all'interno di app.scss

"@use './partials/variables' as *; 


$fa-font-path: "../fonts/webfonts" !default; (copiare la cartella webfonts di fontawesome dentro una cartella fonts all'interno di resources)

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

@import '~bootstrap/scss/bootstrap';"


## Git ignore
-Aggiungere questi file

package-lock.json
composer.lock


## Pubblicazione GitHub

-Prima creare su Git la nuova Repo

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin your_git_url
git push -u origin main


-Installare pacchetto per update migration:

composer require doctrine/dbal
_______________________________________________________________

-Server Vite 
npm run dev

-Server Laravel
php artisan serve


php artisan key:generate
_______________________________________________________________
## Controller & Models
-Creazione

php artisan make:controller "NomeController"

php artisan make:model "NomeModel"


-Cambiare il nome del db

DB_DATABASE="Nome DB"
ed aggiungere la password, nel nostro caso "root"

_____________________________________________________________
## Migration

-Creazione del file Migration dove, una volta creata, possiamo aggiungere tutti i campi che a noi servono.
php artisan make:migration "Nome della Migration" es 

php artisan make:migration create_users_table


php artisan make:migration update_users_table --table=user


-Se volessimo aggiungere un campo solo

php artisan make:migration add_description_to_user_table

-Una volta creata la Migration possiamo creare la nostra tabella su DB
php artisan migrate

##comandi di Rollback da usare con attenzione.
php artisan migrate:rollback
php artisan migrate:reset


https://laravel.com/docs/9.x/migrations
_____________________________________________________________
## Seeders

-Creazione

php artisan make:seeder HousesTableSeeder

Houses può essere sostitutito con il nome del Models creato precedentemente ed importato all'interno del seeder
All'interno del seeder possiamo inserire tutti i dati necessari, se volessimo creare dei dati casuali vai alle #info utili ed utilizza Faker

Infine creiamo i seed
php artisan db:seed --class=HousesTableSeeder

____________________________________________________________
## Info utili

Per usare dei dati casuali utilizziamo Faker

use Faker\Generator as Faker;

 public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newHouse = new House();
            $newHouse->title = $faker->words(2, true);
    
            $newHouse->save();
        }
    }




-------


-Per inserire le immagini che non si trovano dentro public
<img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""

-Nel caso sia un BG non sarà necessario.
Ovviamente sarò necessari oavere all'interno di app.js

"import.meta.glob([
    '../img/**'
])"
