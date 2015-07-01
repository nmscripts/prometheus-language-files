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
    
    /**
     * Text direction
     * @var string
     *
     * LTR = Left to right
     * RTL = Right to left
     */
    $dir = 'ltr';

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
        "not_setup" => "Du har ikke sat dit panel up korrekt! <a href='admin.php?a=gen&p=settings'>Klik her</a> [Admin -> General Settings -> Settings]",
        "header_sandbox" => "Paypal sandbox er slået til. Brug kun asndbox for testing! Du kan slå det fra <a href='admin.php?a=gen&p=paypal'>her</a>",
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

        /** 
         * New in 1.4.8
         */
        "purchase_free" => "Få denne pakke gratis!",
        "dashboard_revenuegraph" => "Indtægt Graf",
        "dashboard_revenuecurrency" => "Vist i din valgte valuta",
        "dashboard_packagesgraph" => "Pakke Salg",
        "dashboard_serversgraph" => "Server Salg",
        "between" => "Mellem",
        "and" => "Og",

         /** 
         * New in 1.4.9
         */
        "free" => "Gratis",
        "buy_own_free" => "Du har allerede fået denne gratis pakke. Du kan kun få den en gang!",

         /**
         * New in 1.4.9.2
         */
        "updates" => "Opdateringer",

         /**
         * New in 1.4.9.3
         */
        "header_sqlupdate" => "Du har ikke anvendt den nye MySQL opsætning. Opdater <a href='admin.php?update'>her!</a>",
        "monthly_goal" => "Mål for denne måned",

        /**
         * New in 1.4.9.6
         */
        "payment_success" => "Betaling fuldført!",
        "profile_updated" => "Din profil er blevet opdateret.",
        "payment_failed" => "Betaling fejlede!",
        "check_credits" => "Tjek venligst om du har nok credits til at købe denne pakke!",
        "not_authorised" => "Du har ikke adgang til denne side. Log ind først!",

         /**
         * New in 1.5
         */
        "wiki" => "Wiki",
        "no_graph_info" => "Ingen graf info",
        "no_graph_info_text" => "Viser ikke graf info så længe der ikke er nogen transaktioner!",
        "paymentwall_purchase" => "Køb med Paymentwall",
        "stripe_purchase" => "Køb med Stripe",
        "payment_gateways" => "Betalingsmetoder",
        "advanced" => "Avanceret",
        "no_servers" => "Ingen servere tilgængelige i øjeblikket.",
        "entries" => "Deltagelser",
        "you_can_enter" => "Du kan deltage",
        "times_more" => "gange endnu",
        "dashboard_creditsrevenue" => "Denne graf sammenligner også hvad der er brugt af penge for credits. Although credits are aquired with money. (Credits = <font color='#9c9c9c'><b>Gray</b></font>, Money = <font color='#c10000'><b>Red</b></font>)",
        "pkg_discounted" => "Denne pakke er nedsat fordi du ejer",

        "compatible_text" => "Hvis du ejer denne pakke kan du ikke eje de pakker herunder",
        "not_compatible" => "Ikke kompatibel med",

        "packages" => "Pakker",
        "upgradeable_text" => "Hvis du ejer den valgte pakke, får du nedsat pris af den valgte pakkes pris.",
        "upgradeable" => "Kan opgraderes fra",

        "assign_actions" => "Tildel funktion",
        "actions_text" => "Tildel hvilken funktion du vil have bliver udført efter den bliver købt af en spiller.",
        "actions" => "Funktioner",
        "servers" => "Servere",
        "label_amount" => "Antal af Labels",
        "add_package" => "Tilføj pakke",
        "edit_package" => "Rediger pakke",
        "labels" => "Labels",
        "title" => "Titel",
        "category" => "Kategori",
        "no_packages" => "Du har i øjeblikket ingen pakker i systemet",

        /**
         * New in 1.5.0.2
         */
        "hide" => "Sjul denne pakke",
        "hide_text" => "Hvis du ikke ejer den valgte pakke herunder, gem pakken fra butikken",
		
		/**
		 * New in 1.5.0.6
		 */
		"signin" => "Sign in",
		"welcome_signin" => "You need to sign in first in order to buy any packages",
		"blacklist_notext" => "You need to enter a valid Steam64 or SteamID to blacklist!",
		"blacklist_success" => "You have successfully blacklisted this person",
		"blacklisted_you" => "You are blacklisted from purchasing any package on this community",
		"blacklisted_them" => "This person is blacklisted from this community, you can not purchase for them",

		"recent_donators" => "Recent donators",
		"name" => "Name",
		"recent_none" => "There has not been any recent donators",
		"raffle_free" => "Enter for free!",

        /**
         * New in 1.5.0.8
         */
        "top_donators" => "Top 3 donators",
        "top_none" => "There are no top donators",

        /**
         * New in 1.5.0.9
         */
        "step" => "Step",

        /**
         * New in 1.5.1
         */
        "permission_groups" => "Permission groups",
        "add_permission" => "Add permission group",
        "edit_permission" => "Edit permission group",
        "permissions" => "Permissions",
        "no_perm" => "I'm sorry Dave, I'm afraid I can't let you do that (Insufficient permisisons)",

        /**
         * New in 1.5.1.2
         */
        "select_gateway" => "Select payment method",

        /**
         * New in 1.5.2
         */
        "buy_disable" => "Disable packages",
        "buy_disable_text" => "Disable these packages if you buy this package",

        "credits_doesntexist" => "This user does not exist on this system.",
        "credits_yourself" => "You can't transfer credits to yourself.",
        "credits_steamid" => "Try another SteamID",
        "credits_transferringto" => "Transferring to:",

        "type" => "Type",
        "gateway" => "Gateway",
        "no_users" => "No users found",

        "view_profile" => "View profile",
        "view_blacklist" => "View blacklist",

        "manage" => "Manage",
        "users_search" => "Search for name, steam64 or steamid",

        "transaction" => "Transaction",
        "delivered" => "Delivered",
        "state" => "State",
        "assign_package" => "Assign package",
        "set_credits" => "Set credits",
        "give_ticket" => "Give ticket",
        "del_inactive_actions" => "Delete inactive actions",

        "select_pkg" => "Select package",
        "do_assign_actions" => "Assign actions",
        "dont_assign_actions" => "Do not assign actions",
        "clone_expiretime" => "Clone expiretime of latest package of same type",
        "assign" => "Assign",

        "set" => "Set", 
        "disable" => "Disable",
        "enable" => "Enable",
        "inactive_everyone" => "Set inactive for everyone",
        "del" => "Del",
        "edit" => "Edit",

        "sale_settings" => "Sale settings",
        "sale_text" => "Choose what packages you want the sale to apply to.",
        "message" => "Message",
        "percentage" => "Percentage",
        "end_date" => "End date",

        "update" => "Update",
        "automatic_updates" => "Automatic updates",
        "dl_lua" => "Download latest lua",
        "dl_web" => "Download latest web",
        "no_write_perm" => "Your updates folder does not have write permissions! Automatic updates won\'t work unless you chmod it to 777. <br> You can however use this button to manually download the update",
        "newest_version" => "Newest available version is:",

        "test_message" => "Send test message to server",

       /**
         * New in 1.5.2.2
         */
        
        "find_more" => "Find out more!",
    );

?>
