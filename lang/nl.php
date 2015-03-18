<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 *
	 * Dutch translation courtesy of Henk.
	 */
	$lang = array(

		// Navigation bar
		"home" => "Home",
		"store" => "Store",
		"buy_credits" => "Koop Credits",
		"raffles" => "Loterij",
		"profile" => "Profiel",
		"support" => "Klantenservice",
		"admin" => "Admin",
		"sign_out" => "Loguit",
		"sign_in" => "Login",

		// Header errors and messages
		"not_setup" => "Je heb je paneel niet goed opgezet! <a href='admin.php?a=gen&settings'>Klik hier</a> [Admin -> Generale Instellingen -> Instellingen]",
		"header_sandbox" => "PayPal Sandbox is geactiveerd. Gebruik sandbox mode alleen voor het testen! Je kan <a href='admin.php?a=gen&settings'>Hier</a> uitzetten",
		"missing_action" => "In één of meer packages ontbreekt een actie",
		"unfinished_action" => "Je heb een onafgemaakte actie op het 'Profiel' pagina, <a href='profile.php'>klik Hier</a>",

		// Frontpage
		"welcome" => "Welkome - Login",
		"welcome_text" => "Login via Steam om het donatie systeem te gebruiken",

		// News
		"news" => "Nieuws",
		"by" => "Door",
		"no_news" => "Geen nieuws",
		"no_news_text" => "Op het moment is er geen nieuws.",
		"no_news_articles" => "Geen nieuws artiekelen.",

		// Footer
		"tos" => "Terms of Service",
		"powered_by" => "Mogelijk gemaakt door Steam",

		// Store
		"credits" => "Credits",
		"featured_pkg" => "Featured Package",
		"permanent" => "Permanent",
		"non_permanent" => "Niet Permanent",

		"select_credit" => "Selecteer Credit Package",
		"select_raffle" => "Selecteer Raffle Package",
		"global_packages" => "Global Packages",

		// Raffles
		// You have reached the max amount of raffle entries. Entry to raffle denied
		"raffle_ticket" => "Koop een ticket",
		"raffle_ended" => "De loterij is ge-eindigt en de winnaar is: ",
		"raffle_not_compatible" => "Deze package is niet compactable met een die je nu heb!.",
		"raffle_already_own" => "Jij heb al toegang tot dit pakket.",
		"raffle_reached_max" => "Je heb het maximale loterij kaartjes berijkt. Je mag er niet meer kopen",

		// Support
		"create_ticket" => "Maak een ticket",
		"ticket_closed" => "Deze ticket is gesloten.",
		"reply" => "Reageer",
		"create" => "Maak",

		// Terms of Service
		"tos_edited" => "De ToS is gewijzigd. <a href='tos.php'>Terms of Service</a> Accepteer het voor dat je iets koopt",
		"tos_must_accept" => "You moet de ToS Accepteren voor het kopen!",
		"tos_accept" => "Accepteer",

		// Purchase buttons
		"purchase_paypal" => "Koop met Paypal",
		"purchase_credits" => "Koop met Credits",
		"purchase" => "Kopen",
		"buy_sign_in" => "Je moet ingelogd zijn voor het kopen!",
		"buy_already_own" => "Jij bezit dit pakket al!",
		"buy_not_compatible" => "Dit pakket is niet compatibel met één die u nu al heb!",
		"buy_they_already_own" => "Dit persoon is al in bezit van dit pakket!",
		"buy_they_not_compatible" => "Dit pakket is niet compatibel met één die hij/zij nu al heb!",

		// Packages
		"buying_someone_else" => "Koop je dit voor iemand anders?",
		"buying_yourself" => "Je bent het momenteel voor je zelf aan het kopen",
		"buying_for" => "Je koopt dit voor",
		"packages_custom_amount" => "Custom amount",

		"packages_not_available" => "Geen pakketten zijn beschikbaar voor deze server.",
		"raffle_not_available" => "Geen loterij pakketten beschikbaar op dit moment..",
		"credit_not_available" => "Geen credit pakketten beschikbaar op dit moment.",

		// Buttons
		"submit" => "Verstuur",

		// Profile
		"non_perm_pkg" => "Non-Permanent Pakket",
		"perm_pkg" => "Permanent pakket(en)",
		"acc_info" => "Account informatie",
		"pkg_history" => "Package geschiedenis",
		"acc_credits" => "Credits",
		"transfer_credits" => "Transfer Credits",
		"package" => "Package",

		// Tables
		"id" => "ID",
		"user" => "Gebruiker",
		"description" => "Beschrijfing",
		"timestamp" => "Timestamp",
		"action" => "Actie",
		"replies" => "Reacties",
		"view" => "Zien",

		// Select boxes
		"select_server" => "Selecteer server:",
		"select_currency" => "Selecteer Eenheid:",
		"select_category" => "Selecteer Categorie:",
		"none" => "Geen",

		// Modals
		"yes" => "Ja",
		"no" => "Nee",
		"sure" => "Weet je het zeker?",
		"sure_cur" => "Weet je zeker dat de dit eenheid wil verwijderen?",
		"sure_srv" => "Weet je zeker dat de deze server wil verwijderen?",
		"sure_cat" => "Weet je zeker dat de deze categorie wil verwijderen?",

		// Dangerous settings
		// Don't delete this category unless no packages are assigned to it
		"dangerous" => "Gevaarlijke instellingen",
		"danger_cur" => "Of je kan deze eenheid verwijderen.",
		"danger_srv" => "Verwijder deze server NIET tenzij er geen pakketen toegewezen zijn!",
		"danger_cat" => "Verwijder deze categorie NIET tenzij er geen pakketen toegewezen zijn !",
		"delete" => "Verwijder",

		// Admin nav
		"dashboard" => "Dashboard",
		"general_settings" => "Generale instellinge",
		"support_tickets" => "Support tickets",
		"servers" => "Servers",
		"currencies" => "Eenheden",
		"categories" => "Categorieën",
		"packages_and_actions" => "Pakketten & Acties",
		"credit_packages" => "Credit packages",
		"raffles" => "Loterij",
		"theme_editor" => "Theme editor",
		"documentation" => "Documentatie",

		// General Settings
		"settings" => "Instellingen",
		"main_page" => "Start pagina",
		"integration_settings" => "Intergratie Instellingen",
		"ingame_notifications" => "In spe; Notificaties",

		// Servers page
		"add_srv" => "Server toevoegen",
		"edit_srv" => "Server wijzigen ",
		"server_name" => "Server naam",
		"featured_pkg_short" => "Featured pkg",

		// Currency page
		"add_cur" => "Valuta toevoegen",
		"edit_cur" => "Valuta wijzigen",
		"cc" => "Valuta Code",

		// Category page
		"add_cat" => "Categorie tovoegen",
		"edit_cat" => "Categorie wijzigen",
		"cat_name" => "Categorie naam",

		// Dashboard nav
		"main_dashboard" => "Hoofd dashboard",
		"sale" => "Verkoop",
		"transactions" => "Transacties",
		"users" => "Gebruikers",
		"logs" => "Logs",
		"update_sql" => "Update SQL",
		"other_features" => "Andere opties",

		// Admin dashboard
		"total" => "Totaal",
		"full_total" => "volledige totaal",
		"dashboard_text" => "Welkom bij de beheerder dashboard, dit is waar je moet wezen om mooie statistieken te bekijken over donatie activiteit van uw servers.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Welkom",
		"need_credits" => "Heb je meer credits nodig?? <a href='store.php?credits'>Klik hier!</a>",
		"no_history" => "Geen Geschidenis",
		"amount" => "Amount", // Not sure for what this is :( if its for money its Bedrag otherwise Hoeveelheid)
		"you_have_none" => "Jij heb er geen!",

		"add_cre" => "Voeg credit pakket toe",
		"edit_cre" => "Edit credit pakket",
		"pack_title" => "Pakket Titel",
		"price" => "Prijs",
		"currency" => "Valuta",
		"sure_cre" => "Weet u zeker dat u deze credit pakket verwijderen?",
		"danger_cre" => "Of als alternatief, kunt u dit credit pakket te verwijderen.",
		"select_package" => "Selecteer pakket:",
		"choose_cre" => "Kies credit pakket",
		"brief_desc" => "Korte beschrijving",
		"amt_of_cre" => "Aantal credits",
		"price_of_pkg" => "Prijs van het pakket",
		"no_support" => "Je hebt geen support tickets",
		"no_other_available" => "Geen andere pakketten beschikbaar",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Verkrijg dit pakket gratis",
		"dashboard_revenuegraph" => "inkomsten grafiek",
		"dashboard_revenuecurrency" => "Weergegeven in uw standaard valuta",
		"dashboard_packagesgraph" => "Pakket verkoopcijfers",
		"dashboard_serversgraph" => "Servers verkoopcijfers",
		"between" => "Tussen",
		"and" => "En",
	);

?>
