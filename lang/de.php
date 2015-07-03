<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 */
	$lang = array(

		// Navigation bar
		"home" => "Home",
		"store" => "Shop",
		"buy_credits" => "Credits kaufen",
		"raffles" => "Verlosungen",
		"profile" => "Profil",
		"support" => "Support",
		"admin" => "Admin",
		"sign_out" => "Abmelden",
		"sign_in" => "Anmelden",

		// Header errors and messages
		"not_setup" => "You have not set up your panel properly! <a href='admin.php?a=gen&p=settings'>Click here</a> [Admin -> General Settings -> Settings]",
		"header_sandbox" => "PayPal Sandbox is enabled. Only use sandbox for testing! You can disable it <a href='admin.php?a=gen&p=paypal'>here</a>",
		"missing_action" => "One or more packages is missing an action!",
		"unfinished_action" => "You have an un-finished action in the 'Profile' page, <a href='profile.php'>here</a>",

		// Frontpage
		"welcome" => "Willkommen - Anmelden",
		"welcome_text" => "Bitte melde dich mit Steam an um dem Server zu spenden.",

		// News
		"news" => "News",
		"by" => "Von",
		"no_news" => "Keine News",
		"no_news_text" => "Es gibt momentan keine News",
		"no_news_articles" => "Keine neuen News Artikel",

		// Footer
		"tos" => "Nutzungsbedingungen",
		"powered_by" => "Powered by Steam",

		// Store
		"credits" => "Credits",
		"featured_pkg" => "Meistgekauftes Paket",
		"permanent" => "Permanent",
		"non_permanent" => "Zeitbegrenzt",

		"select_credit" => "Credit Paket auswaehlen",
		"select_raffle" => "Verlosungspaket auswaehlen",
		"global_packages" => "Allgemeine Pakete",

		// Raffles
		"raffle_ticket" => "Ticket kaufen",
		"raffle_ended" => "Die Verlosung ist zu Ende. Der Gewinner ist: ",
		"raffle_not_compatible" => "Dieses Paket ist nicht mit einem deiner anderen Pakete kompatibel. Zugriff zur Verlosung verweigert.",
		"raffle_already_own" => "Du besitzt dieses Paket bereits. Zugriff zur Verlosung verweigert.",
		"raffle_reached_max" => "Du hast die maximale Anzahl an Verlosungszugriffen erreicht. Zugriff zur Verlosung verweigert.",

		// Support
		"create_ticket" => "Ticket erstellen",
		"ticket_closed" => "Dieses Ticket ist geschlossen.",
		"reply" => "Antworten",
		"create" => "Erstellen",

		// Terms of Service
		"tos_edited" => "Die Nutzungsbedingungen wurden bearbeitet. <a href='tos.php'>Terms of Service</a> Akzeptiere sie bevor du das Paket kaufst!",
		"tos_must_accept" => "Du musst die Nutzungsbedingungen akzeptieren!",
		"tos_accept" => "Akzeptieren",

		// Purchase buttons
		"purchase_paypal" => "Mit PayPal kaufen",
		"purchase_credits" => "Mit PayPal kaufen",
		"purchase" => "Kaufen",
		"buy_sign_in" => "Du musst dich anmelden, bevor du etwas kaufen kannst!",
		"buy_already_own" => "Du besitzt dieses Paket bereits!",
		"buy_not_compatible" => "Dieses Paket ist nicht mit einem deiner anderen Pakete kompatibel!",
		"buy_they_already_own" => "Diese Person besitzt dieses Paket bereits!",
		"buy_they_not_compatible" => "Dieses Paket ist nicht mit einem anderen Paket dieser Person kompatibel!",

		// Packages
		"buying_someone_else" => "Kaufst du fuer jemand anderen?",
		"buying_yourself" => "Im Moment kaufst du fuer dich selbst.",
		"buying_for" => "Im Moment kaufst du fuer ",
		"packages_custom_amount" => "Benutzerdefinierte Anzahl",

		"packages_not_available" => "Fuer diesen Server sind keine Pakete verfuegbar.",
		"raffle_not_available" => "Im Moment sind keine Verlosungspakete verfuegbar.",
		"credit_not_available" => "Im Moment sind keine Credit Pakete verfuegbar.",

		// Buttons
		"submit" => "Bestaetigen",

		// Profile
		"non_perm_pkg" => "Zeitbegrenztes Paket",
		"perm_pkg" => "Permanente(s) Paket(e)",
		"acc_info" => "Account Information",
		"pkg_history" => "Paket Verlauf",
		"acc_credits" => "Credits",
		"transfer_credits" => "Credits ueberweisen",
		"package" => "Paket",

		// Tables
		"id" => "ID",
		"user" => "Benutzer",
		"description" => "Beschreibung",
		"timestamp" => "Zeitstempel",
		"action" => "Aktion",
		"replies" => "Antworten",
		"view" => "Ansehen",

		// Select boxes
		"select_server" => "Server waehlen:",
		"select_currency" => "Waehrung waehlen:",
		"select_category" => "Kategorie waehlen:",
		"none" => "Keine(n)",

		// Modals
		"yes" => "Ja",
		"no" => "Nein",
		"sure" => "Bist du sicher?",
		"sure_cur" => "Bist du sicher, dass du diese Waehrung loeschen moechtest?",
		"sure_srv" => "Bist du dir sicher, dass du diesen Server loeschen moechtest?",
		"sure_cat" => "Bist du dir sicher, dass du diese Kategorie loeschen moechtest?",

		// Dangerous settings
		"dangerous" => "Gefaehrliche Einstellungen",
		"danger_cur" => "Alternativ, kannst du diese Waehrung loeschen.",
		"danger_srv" => "Nicht den Server loeschen, es sei denn, ihm sind keine Pakete zugewiesen!",
		"danger_cat" => "Nicht die Kategorie loeschen, es sei denn, ohr sind keine Pakete zugewiesen!",
		"delete" => "Loeschen",

		// Admin nav
		"dashboard" => "Dashboard",
		"general_settings" => "Allgemeine Einstellungen",
		"support_tickets" => "Support Tickets",
		"servers" => "Server",
		"currencies" => "Waehrungen",
		"categories" => "Kategorien",
		"packages_and_actions" => "Pakete & Aktionen",
		"credit_packages" => "Credit Pakete",
		"raffles" => "Verlosungen",
		"theme_editor" => "Theme editor",
		"documentation" => "Documentation",

		// General Settings
		"settings" => "Einstellungen",
		"main_page" => "Hauptseite",
		"integration_settings" => "Integration Einstellungen",
		"ingame_notifications" => "Ingame Benachrichtigungen",

		// Servers page
		"add_srv" => "Server hinzufuegen",
		"edit_srv" => "Server bearbeiten",
		"server_name" => "Server Name",
		"featured_pkg_short" => "Meistgekauftes Paket",

		// Currency page
		"add_cur" => "Waehrung hinzufuegen",
		"edit_cur" => "Waehrung bearbeiten",
		"cc" => "Waehrungs Code",

		// Category page
		"add_cat" => "Kategorie hinzufuegen",
		"edit_cat" => "Kategorie bearbeiten",
		"cat_name" => "Kategorie Name",

		// Dashboard nav
		"main_dashboard" => "Haupt Dashboard",
		"sale" => "Sale",
		"transactions" => "Transaktionen",
		"users" => "Benutzer",
		"logs" => "Logs",
		"update_sql" => "Update SQL",
		"other_features" => "Andere Features",

		// Admin dashboard
		"total" => "Gesamt",
		"full_total" => "Insgesamt",
		"dashboard_text" => "Willkommen im Admin Dashboard. Hier kannst du Statistiken ueber die Spenden sehen.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Willkommen",
		"need_credits" => "Du brauchst mehr Credits? <a href='store.php?credits'>Schau mal hier!</a>",
		"no_history" => "Keinen Verlauf",
		"amount" => "Anzahl",
		"you_have_none" => "Du hast keine(n)",

		"add_cre" => "Credit Paket hinzufuegen",
		"edit_cre" => "Credit Paket bearbeiten",
		"pack_title" => "Paket Titel",
		"price" => "Preis",
		"currency" => "Waehrung",
		"sure_cre" => "Bist du sicher, dass du dieses Credit Paket loeschen moechtest?",
		"danger_cre" => "Alternativ, kannst du dieses Vredit Paket loeschen.",
		"select_package" => "Paket auswaehlen:",
		"choose_cre" => "Credit Paket auswaehlen",
		"brief_desc" => "Kurzbeschreibung",
		"amt_of_cre" => "Anzahl Credits",
		"price_of_pkg" => "Paketpreis",
		"no_support" => "Du hast keine Support Tickets",
		"no_other_available" => "Kein anderes Paket verfuegbar",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Bekomme dieses Paket kostenlos!",
		"dashboard_revenuegraph" => "Einnahmen Graf",
		"dashboard_revenuecurrency" => "In deiner Hauptwaehrung angezeigt",
		"dashboard_packagesgraph" => "Paket Sales",
		"dashboard_serversgraph" => "Server Sales",
		"between" => "Zwischen",
		"and" => "Und",

		/** 
		 * New in 1.4.9
		 */
		"free" => "Kostenlos",
		"buy_own_free" => "Du besitzt dieses kostenlose Paket bereits. Du kannst es nicht zweimal anfordern.",
		
		/**
		 * New in 1.4.9.2
		 */
		"updates" => "Updates",

		/**
		 * New in 1.4.9.3
		 */
		"header_sqlupdate" => "Es gibt ein neues <a href='admin.php?update'>MySQL Update!</a>",
		"monthly_goal" => "Monatliches Ziel",
		
		/**
		 * New in 1.4.9.6
		 */
		"payment_success" => "Zahlung erfolgreich!",
		"profile_updated" => "Dein Profil wurde aktualisiert.",
		"payment_failed" => "Zahlung fehlgeschlagen!",
		"check_credits" => "Bitte ueberpruefe ob du genug Credits hast um dieses Paket zu kaufen!",
		"not_authorised" => "Du bist nicht berechtigt diesen Bereich zu sehen. Melde dich zuerst an!",
		
		/**
		 * New in 1.5
		 */
		"wiki" => "Wiki",
		"no_graph_info" => "Keine Graphinfo",
		"no_graph_info_text" => "Graphinfo wird nicht angezeigt, weil noch keine Transaktionen vorhanden sind!",
		"paymentwall_purchase" => "Mit Paymentwall kaufen",
		"stripe_purchase" => "Mit Stripe kaunfen",
		"payment_gateways" => "Zahlungsmoeglichkeiten",
		"advanced" => "Erweitert",
		"no_servers" => "Momentan sind keine Server verfuegbar.",
		"entries" => "Zugaenge",
		"you_can_enter" => "Du kannst eintreten.",
		"times_more" => "mal mehr",
		"dashboard_creditsrevenue" => "This graph also compares credits spent to money spent. Although credits are aquired with money. (Credits = <font color='#9c9c9c'><b>Gray</b></font>, Money = <font color='#c10000'><b>Red</b></font>)",
		"pkg_discounted" => "Dieses Paket ist ausverkauft, da du es bereits besitzt.",

		"compatible_text" => "Solange du dieses Paket besitzt, kannst du die Pakete unten nicht besitzen",
		"not_compatible" => "Nicht kompatibel mit",

		"packages" => "Pakete",
		"upgradeable_text" => "Wenn sie das ausgewaehlte Paket besitzen, erhalten sie dieses verguenstigt.",
		"upgradeable" => "Verbesserbar mit",

		"assign_actions" => "Aktionen festlegen",
		"actions_text" => "Lege fest welche Aktion das Paket ausfuehren soll, nachdem der Spieler es gekauft hat.",
		"actions" => "Aktionen",
		"servers" => "Server",
		"label_amount" => "Label Anahl",
		"add_package" => "Paket hinzufuegen",
		"edit_package" => "Paket bearbeiten",
		"labels" => "Labels",
		"title" => "Titel",
		"category" => "Kategorie",
		"no_packages" => "Momentan sind keine Pakete im System",
		
		/**
		 * New in 1.5.0.2
		 */
		"hide" => "Paket verstecken",
		"hide_text" => "Wenn du keins der unten ausgewaehlten Pakete besitzt, verstecke sie im Shop",
		
		/**
		 * New in 1.5.0.6
		 */
		"signin" => "Anmelden",
		"welcome_signin" => "Du musst dich erst anmelden bevor du ein Paket kaufen kannst",
		"blacklist_notext" => "Du musst eine korrekte Steam64 oder SteamID eingeben",
		"blacklist_success" => "Du hast diese Person erfolgreich geblacklistet",
		"blacklisted_you" => "Du bist von jeglichem Verkauf von Paketen in dieser Community ausgeschlossen",
		"blacklisted_them" => "Diese Person ist von Verkaufen in dieser Community ausgeschlossen. Du kannst nichts fuer ihn kaufen",

		"recent_donators" => "Letzte Donator",
		"name" => "Name",
		"recent_none" => "In letzter zeit hat keiner gespendet",
		"raffle_free" => "Tritt kostenlos bei!",
		
		/**
		 * New in 1.5.0.8
		 */
		"top_donators" => "Top Donator",
		"top_none" => "Es gibt momentan noch keine Donator",

		/**
		 * New in 1.5.0.9
		 */
		"step" => "Schritt",

		/**
		 * New in 1.5.1
		 */
		"permission_groups" => "Admin Gruppen",
		"add_permission" => "Admin Gruppe hinzufuegen",
		"edit_permission" => "Admin Gruppe bearbeiten",
		"permissions" => "Rechte",
		"no_perm" => "Sorry, aber das darfst du leider nicht machen (nicht genuegend Rechte)",

		/**
		 * New in 1.5.1.2
		 */
		"select_gateway" => "Zahlungsmethode auswaehlen",

		/**
		 * New in 1.5.2
		 */
		"buy_disable" => "Pakete deaktivieren",
		"buy_disable_text" => "Deaktiviere diese Pakete wenn du dieses Paket kaufst",

		"credits_doesntexist" => "DieserBenutzer existiert in unserem System nicht.",
		"credits_yourself" => "Du kannst Credits nicht an dich selbst senden.",
		"credits_steamid" => "Versuche eine andere SteamID",
		"credits_transferringto" => "Uebertragen an:",

		"type" => "Typ",
		"gateway" => "Zugang",
		"no_users" => "Keine Benutzer gefunden",

		"view_profile" => "Profil anschauen",
		"view_blacklist" => "Blacklist anschauen",

		"manage" => "Verwalten",
		"users_search" => "Nach Namen, Steam64 oder SteamID suchen",

		"transaction" => "Transaktion",
		"delivered" => "Ausgeliefert",
		"state" => "Status",
		"assign_package" => "Paket zuweisen",
		"set_credits" => "Credits setzen",
		"give_ticket" => "Ticket geben",
		"del_inactive_actions" => "Inaktive Aktionoen loeschen",

		"select_pkg" => "Paket auswählen",
		"do_assign_actions" => "Aktionen ausfuehren",
		"dont_assign_actions" => "Aktionen nicht ausfuehren",
		"clone_expiretime" => "verbleibende Zeit vom letzten Paket des gleichen Typs kopieren",
		"assign" => "Zuweisen",

		"set" => "Setzen", 
		"disable" => "Deaktivieren",
		"enable" => "Aktivieren",
		"inactive_everyone" => "Für jeden inaktiv setzen",
		"del" => "Del",
		"edit" => "Bearbeiten",

		"sale_settings" => "Sale Einstellungen",
		"sale_text" => "Wähle die Pakete, welche im Sale angeboten werden sollen.",
		"message" => "Nachricht",
		"percentage" => "Prozent",
		"end_date" => "End Datum",

		"update" => "Update",
		"automatic_updates" => "Automatische Updates",
		"dl_lua" => "Aktuellste Lua Dateien downloaden",
		"dl_web" => "Aktuellste Web Dateien downloaden",
		"no_write_perm" => "Dein Updates Ornder hat keine Schreib-Rechte! Automatische Updates werden nicht funktionieren, bis du ihm die Rechte 777 vergeben hast! <br> Hier kannst du das Update manuell downloaden",
		"newest_version" => "Die neueste Version:",

		"test_message" => "Test Nachricht an den Server senden",
		
		/**
		 * New in 1.5.2.2
		 */
		
		"find_more" => "Hier gibt es genauere Infos!",
	);

?>
