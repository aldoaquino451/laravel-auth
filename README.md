Laravel Boolfolio 
===

Oggi incominciate, come abbiamo visto in classe, a separare l’ambiente dei controller, delle rotte e delle view per tutta quella che sarà la dashboard.     
Il progetto sarà la gestione del vostro portfolio e le tabelle saranno quindi: projects, tecnologies e types (che più avanti metteremo in relazione).       
Iniziate  a organizzare il progetto e il database.      
Ecco lo snippet di codice per il raggruppamento delle rotte     

    Route::name('admin.')
        ->prefix('admin')
        ->group(function(){
            // mie rotte admin
    });

Steps:
- Creazione db
- Creazione delle migration e (facoltativo) seeder
- organizzazione delle rotte (sia dashboard che reources) e dei controller admin
- organizzazione delle view admin
- lavorare sulla CRUD dei progetti

Aggiungere l'Autentificazione.
