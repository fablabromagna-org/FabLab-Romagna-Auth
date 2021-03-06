<?php
define('ELENCO_PERMESSI', [
    'gestione.utenti.visualizzare_utenti' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Visualizzare i profili degli utenti',
        'descrizione' => 'Indica se l\'utente può visualizzare i profili degli utenti.'
    ],
    'gestione.utenti.visualizzare_anagrafiche' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Visualizzare anagrafiche utenti',
        'descrizione' => 'Indica se l\'utente può visualizzare tutte le anagrafiche degli utenti.'
    ],
    'gestione.utenti.modificare_anagrafiche' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Modificare anagrafiche',
        'descrizione' => 'Indica se l\'utente può modificare le anagrafiche degli utenti.'
    ],
    'gestione.utenti.modificare_gruppi_utenti' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Modificare i gruppi degli utenti',
        'descrizione' => 'Indica se l\'utente può modificare i gruppi ai quali gli utenti fanno parte. <b>Nota bene: variando i gruppi possono cambiare anche i permessi asseganti!</b>'
    ],
    'gestione.sistema.visualizzare_log' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Visualizzazione dei log',
        'descrizione' => 'Indica se l\'utente può accedere alla pagina di ricerca e visualizzazione dei log di sistema.'
    ],
    'gestione.utenti.creare' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Creare nuovi utenti',
        'descrizione' => 'Indica se l\'utente può creare nuovi utenti.'
    ],
    'gestione.scuola.visualizzare' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Visualizzare i dettagli di una scuola',
        'descrizione' => 'Indica se l\'utente può accedere alla pagina con tutti i dettagli di una scuola.'
    ],
    'gestione.gruppi.visualizzare' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Visualizzare gruppi',
        'descrizione' => 'Indica se l\'utente può visualizzare l\'elenco di tutti i gruppi e la relativa descrizione.'
    ],
    'gestione.gruppi.creare' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Creare gruppi',
        'descrizione' => 'Indica se l\'utente può creare nuovi gruppi.'
    ],
    'gestione.gruppi.modificare' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Modificare gruppi',
        'descrizione' => 'Indica se l\'utente può modificare i gruppi esistenti.'
    ],
    'gestione.gruppi.eliminare' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Eliminare gruppi',
        'descrizione' => 'Indica se l\'utente può eliminare i gruppi esistenti.'
    ],
    'gestione.permessi.visualizzare' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Visualizzare tutti i permessi',
        'descrizione' => 'Indica se l\'utente può vedere i permessi di utenti e gruppi.'
    ],
    'gestione.permessi.modificare_gruppi' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Modificare permessi gruppi',
        'descrizione' => 'Indica se l\'utente può modificare i permessi dei gruppi.'
    ],
    'gestione.permessi.modificare_utenti' => [
        'default' => true,
        'richiede_pannello_gestione' => true,
        'nome' => 'Modificare permessi utenti',
        'descrizione' => 'Indica se l\'utente può modificare i permessi degli utenti.'
    ]
]);
