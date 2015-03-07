<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 *
	 * Danish translation courtesy of Nexzer.
	 */
	$lang = array(

        // Navigation bar
        "home" => "Hjem",
        "store" => "Butik",
        "buy_credits" => "Køb Credits",
        "raffles" => "Lotteri",
        "profile" => "Profil",
        "support" => "Support",
        "admin" => "Admin",
        "sign_out" => "Log ud",
        "sign_in" => "Log ind",

        // Header errors and messages    
        "not_setup" => "Du har ikke sat dit panel up korrekt! <a href='admin.php?a=gen&settings'>Klik her</a> [Admin -> General Settings -> Settings]",
        "header_sandbox" => "Paypal sandbox er slået til. Brug kun asndbox for testing! Du kan slå det fra <a href='admin.php?a=gen&settings'>her</a>",
        "missing_action" => "En eller flere pakke mangler en handling!",
        "unfinished_action" => "Du har en ikke færdiggjort handling på 'Profil' siden, <a href='profile.php'>tryk her</a>",

        // Frontpage
        "welcome" => "Velkommen - Log ind",
        "welcome_text" => "Log ind med steam for at bruge vores nemme donations.",

        // News
        "news" => "Nyheder",
        "by" => "Af",
        "no_news" => "Ingen nyheder",
        "no_news_text" => "Der er i øjeblikket ingen nyheder.",
        "no_news_articles" => "Ingen nyhedsartikler.",

        // Footer
        "tos" => "Servicevilkår",
        "powered_by" => "Drevet af Steam",

        // Store
        "credits" => "Credits",
        "featured_pkg" => "Fremhævet Pakke",
        "permanent" => "Permanent",
        "non_permanent" => "Ikke Permanent",

        "select_credit" => "Vælg Credit Pakke",
        "select_raffle" => "Vælg Lotteri Pakke",
        "global_packages" => "Globale Pakker",

        // Raffles
        "raffle_ticket" => "Køb billet",
        "raffle_ended" => "Lotteriet er over. Vinderen er: ",
        "raffle_not_compatible" => "Denne pakke er ikke kompitibel med en du ejer. Adgang til lotteriet nægtet.",
        "raffle_already_own" => "Du ejer allerede denne pakke. Adgang til lotteriet nægtet.",
        "raffle_reached_max" => "Du har nået det maksimale beløb for lotteri billeter. Adgang til lotteriet nægtet.",

        // Support
        "create_ticket" => "Lav en support sag",
        "ticket_closed" => "Denne sag er lukket.",
        "reply" => "Svar",
        "create" => "Opret",

        // Terms of Service
        "tos_edited" => "TOS er blevet redigeret. <a href='tos.php'>Servicevilkår</a> acceptere det, før du køber en pakke!",
        "tos_must_accept" => "Du skal acceptere ToS før du kan købe!",
        "tos_accept" => "Accepter",

        // Purchase buttons
        "purchase_paypal" => "Køb med Paypal",
        "purchase_credits" => "Køb med Credits",
        "purchase" => "Køb",
        "buy_sign_in" => "Du skal være logget ind før du køber!",
        "buy_already_own" => "Du ejer allerede denne pakke!",
        "buy_not_compatible" => "Denne pakke er ikke kompatibel med en du ejer!",
        "buy_they_already_own" => "Denne person allerede ejer denne pakke!",
        "buy_they_not_compatible" => "Denne pakke er ikke kompatibel med en de ejer!",

        // Packages
        "buying_someone_else" => "Køber du for en anden end dig selv?",
        "buying_yourself" => "Du er i øjeblikket i gang med at køber til dig selv",
        "buying_for" => "Du er i øjeblikket i gang med at køber for",
        "packages_custom_amount" => "Brugerdefineret beløb",

        "packages_not_available" => "Ingen pakker er tilgængelige for denne server.",
        "raffle_not_available" => "Ingen lotteri pakker tilgængelige i øjeblikket.",
        "credit_not_available" => "Ingen Kredit pakker tilgængelige i øjeblikket.",

        // Buttons
        "submit" => "Indsend",

        // Profile
        "non_perm_pkg" => "Ikke-permanente pakke",
        "perm_pkg" => "Permanente pakke(r)",
        "acc_info" => "Bruger Information",
        "pkg_history" => "Pakke historik",
        "acc_credits" => "Credits",
        "transfer_credits" => "Overfør Credits",

        // Tables
        "id" => "ID",
        "user" => "Bruger",
        "description" => "Beskrivelse",
        "timestamp" => "Tid",
        "action" => "Handling",
        "replies" => "Besvarelser",
        "view" => "Vis",

        // Select boxes
        "select_server" => "Vælg server:",
        "select_currency" => "Vælg valuta:",
        "select_category" => "Vælg kategori:",
        "none" => "None",

        // Modals
        "yes" => "Ja",
        "no" => "Nej",
        "sure" => "Er du sikker?",
        "sure_cur" => "Er du sikker på at du vil slette denne valuta?",
        "sure_srv" => "Er du sikker på at du vil slette denne server?",
        "sure_cat" => "Er du sikker på at du vil slette denne kategori?",

        // Dangerous settings
        "dangerous" => "Farlige indstillinger",
        "danger_cur" => "Eller alternativt, kan du slette denne valuta.",
        "danger_srv" => "Slet ikke denne server, medmindre ingen pakker er tildelt den!",
        "danger_cat" => "Du må ikke slette denne kategori, medmindre ingen pakker er tildelt den!",
        "delete" => "Slet",

        // Admin nav
        "dashboard" => "instrumentbræt",
        "general_settings" => "Generelle indstillinger",
        "support_tickets" => "Support sager",
        "servers" => "Servers",
        "currencies" => "Valuta",
        "categories" => "Kategorier",
        "packages_and_actions" => "Pakker og handlinger",
        "credit_packages" => "Credit pakker",
        "raffles" => "Lotterier",
        "theme_editor" => "Tema editor",
        "documentation" => "Dokumentation",

        // General Settings
        "settings" => "Indstillinger",
        "main_page" => "Forside",
        "integration_settings" => "integrationsindstillinger",
        "ingame_notifications" => "Ingame Meddelelser",

        // Servers page
        "add_srv" => "Tilføj server",
        "edit_srv" => "Rediger server",
        "server_name" => "Servernavn",
        "featured_pkg_short" => "Udvalgte pkg",

        // Currency page
        "add_cur" => "Tilføj valuta",
        "edit_cur" => "Edit valuta",
        "cc" => "Valutakode",

        // Category page
        "add_cat" => "Tilføj kategori",
        "edit_cat" => "Ændre kategori",
        "cat_name" => "Kategori navn",

        // Dashboard nav
        "main_dashboard" => "Main instrumentbræt",
        "sale" => "Tilbud",
        "transactions" => "Transaktioner",
        "users" => "Brugere",
        "logs" => "Logs",
        "update_sql" => "Opdater SQL",
        "other_features" => "Andre funktioner",

        // Admin dashboard
        "total" => "Total",
        "full_total" => "Full total",
        "dashboard_text" => "Velkommen til administratorens instrumentbræt, det er her du vil være i stand til at se fancy statistik af donationerne.",

         /** 
         * New in 1.4.7.2
         */
        "welcome_main" => "Velkommen!",
        "need_credits" => "Mangler flere credits? <a href='store.php?credits'>Klik her!</a>",
        "no_history" => "Ingen historie",
        "amount" => "Antal",
        "you_have_none" => "Du har ingen!",

        "add_cre" => "Tilføj credit pakke",
        "edit_cre" => "Ændre credit pakke",
        "pack_title" => "Pakke Titel",
        "price" => "Pris",
        "currency" => "Valuta",
        "sure_cre" => "Er du sikker på du vil slette denne credit pakke?",
        "danger_cre" => "Eller alternativt, kan du slette denne pakke.",
        "select_package" => "Vælg pakke:",
        "choose_cre" => "Vælg credit pakke",
        "brief_desc" => "Beskrivelse",
        "amt_of_cre" => "Antal af credits",
        "price_of_pkg" => "Prisen på pakken",
        "no_support" => "Du har ingen support sager",
        "no_other_available" => "Ingen andre pakker tilgængelige",
    );

?>
