<?php

return [
    'navbar' => [
        'home' => 'Home',
        'articles' => 'I nostri articoli',
        'create' => 'Crea articolo',
        'dashboard' => 'Dashboard',
        'categories' => 'Categorie',
        'search_placeholder' => 'Cerca articoli',
        'search' => 'Cerca',
        'greeting' => 'Ciao :name',
        'login' => 'Accedi',
        'register' => 'Registrati',
        'logout' => 'Esci',
        'become_revisor' => 'Diventa revisore',
        'change_language' => 'Cambia lingua in :lang',
    ],

    'hero' => [
        'homepage' => [
            'badge' => 'Marketplace italiano',
            'title' => 'Compra e vendi con stile su Presto.it',
            'subtitle' => 'Scopri gli annunci della community e pubblica i tuoi prodotti in pochi istanti.',
            'primary_cta' => 'Esplora il catalogo',
            'secondary_cta' => 'Pubblica un annuncio',
        ],
        'articles_index' => [
            'badge' => 'Catalogo completo',
            'title' => 'I nostri articoli',
            'subtitle' => 'Scopri tutto ciò che la community ha messo in vendita, dalle novità ai grandi classici.',
        ],
        'articles_category' => [
            'badge' => 'Categoria',
            'title' => 'Articoli in :name',
            'subtitle' => 'Sfoglia tutti i prodotti della categoria selezionata e trova ciò che ti serve.',
        ],
        'articles_search' => [
            'badge' => 'Ricerca',
            'title' => 'Risultati per ":query"',
            'subtitle' => 'Ecco gli articoli che corrispondono alla tua ricerca. Affina i filtri per risultati ancora più precisi.',
        ],
        'articles_show' => [
            'badge' => 'Dettaglio articolo',
            'subtitle' => 'Pubblicato :time da :author nella categoria :category.',
            'subtitle_no_author' => 'Pubblicato :time nella categoria :category.',
        ],
        'articles_create' => [
            'badge' => 'Nuovo annuncio',
            'title' => 'Crea un nuovo articolo',
            'subtitle' => 'Condividi un prodotto con la community: bastano pochi dettagli e qualche foto.',
        ],
        'revisor' => [
            'badge' => 'Zona revisore',
            'title' => 'Dashboard',
        ],
        'auth_login' => [
            'badge' => 'Bentornato',
            'title' => 'Accedi al tuo account',
            'subtitle' => 'Gestisci rapidamente e in sicurezza i tuoi annunci e i tuoi acquisti.',
        ],
        'auth_register' => [
            'badge' => 'Unisciti a Presto.it',
            'title' => 'Crea il tuo account',
            'subtitle' => 'Registrati gratuitamente e inizia subito a pubblicare i tuoi prodotti.',
        ],
    ],

    'cards' => [
        'price' => '€ :price',
        'published' => 'Pubblicato :time fa',
        'cta' => 'Scopri di più',
    ],

    'lists' => [
        'empty_title' => 'Nessun articolo da mostrare',
        'empty_subtitle' => 'Torna presto: ogni giorno arrivano nuove proposte interessanti.',
        'category_empty_title' => 'Nessun articolo trovato per questa categoria',
        'category_empty_subtitle' => 'Visita un’altra categoria o crea tu il primo annuncio!',
        'search_empty_title' => 'Nessun articolo trovato',
        'search_empty_subtitle' => 'Modifica le parole chiave o filtra per categoria per trovare ciò che cerchi.',
    ],

    'alerts' => [
        'success' => 'Articolo creato con successo!',
        'errors_title' => 'Controlla i seguenti errori:',
        'revisor_accepted' => 'Articolo approvato.',
        'revisor_rejected' => 'Articolo rifiutato.',
        'revisor_request_sent' => 'Richiesta inviata; riceverai una risposta via email.',
        'access_denied' => 'Accesso negato.',
    ],

    'form' => [
        'title' => 'Titolo',
        'title_placeholder' => 'Inserisci un titolo accattivante',
        'description' => 'Descrizione',
        'description_placeholder' => 'Descrivi nel dettaglio il tuo articolo',
        'price' => 'Prezzo',
        'price_placeholder' => '0,00',
        'category' => 'Categoria',
        'category_placeholder' => 'Seleziona una categoria',
        'images' => 'Immagini',
        'preview' => 'Anteprima immagini:',
        'remove' => 'Rimuovi',
        'submit' => 'Pubblica articolo',
        'email' => 'Email',
        'email_placeholder' => 'Inserisci la tua email',
        'password' => 'Password',
        'password_placeholder' => 'Inserisci la tua password',
        'password_confirmation' => 'Conferma password',
        'name' => 'Nome',
    ],

    'show' => [
        'price' => '€ :price',
        'back_to_catalog' => 'Torna al catalogo',
        'explore_more' => 'Esplora altri articoli',
        'image_alt' => 'Immagine articolo :number',
        'placeholder_alt' => 'Immagine segnaposto',
    ],

    'revisor' => [
        'labels' => 'Etichette',
        'no_labels' => 'Nessuna etichetta',
        'ratings' => 'Valutazioni',
        'price' => 'Prezzo',
        'description' => 'Descrizione',
        'category' => 'Categoria',
        'reject' => 'Rifiuta',
        'accept' => 'Approva',
        'empty' => 'Non ci sono articoli da revisionare',
        'image_alt' => 'Immagine :number',
        'adult' => 'Contenuti per adulti',
        'violence' => 'Violenza',
        'spoof' => 'Truffa',
        'racy' => 'Contenuti sensibili',
        'medical' => 'Contenuti medici',
    ],

    'auth' => [
        'login_button' => 'Accedi',
        'register_button' => 'Registrati',
    ],

    'filter' => [
        'title' => 'Filtra per categoria',
        'all' => '— Tutte le categorie —',
        'empty' => 'Nessun articolo trovato per la categoria selezionata.',
    ],

    'footer' => [
        'line1' => '© :year Presto.it. Tutti i diritti riservati.',
        'line2' => 'Creato con Laravel & Livewire',
    ],
];