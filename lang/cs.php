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
		"home" => "Domov",
		"store" => "Obchod",
		"buy_credits" => "Koupit kredity",
		"raffles" => "Tombola",
		"profile" => "Profil",
		"support" => "Podpora",
		"admin" => "Admin",
		"sign_out" => "Odhlásit se",
		"sign_in" => "Přihlásit se",

		// Header errors and messages
		"not_setup" => "Nenastavili jste svůj panel správně! <a href='admin.php?a=gen&settings'>Klikněte zde</a> [Admin -> Obecné nastavení -> Nastavení]",
		"header_sandbox" => "PayPal Sandbox je povolen. Používejte pouze pískoviště pro testování! Můžete ho zakázat <a href='admin.php?a=gen&settings'>zde</a>",
		"missing_action" => "Jeden nebo více balíků chybí akce!",
		"unfinished_action" => "Máte nehotové akce na stránce "Profil", <a href='profile.php'>zde</a>",

		// Frontpage
		"welcome" => "Vítejte - Přihlašte se",
		"welcome_text" => "Přihlaste se prostřednictvím Steamu pro využití našeho lehkého donate portálu.",

		// News
		"news" => "Novinky",
		"by" => "Od",
		"no_news" => "Žádné novinky",
		"no_news_text" => "V současné době nejsou žádné novinky.",
		"no_news_articles" => "Žádné novinky.",

		// Footer
		"tos" => "Smluvní podmínky",
		"powered_by" => "Poháněno Steamem",

		// Store
		"credits" => "Kredity",
		"featured_pkg" => "Nejlepší balíček",
		"permanent" => "Permanentní",
		"non_permanent" => "Nepermanentní",

		"select_credit" => "Zvolte Kreditní Balíček",
		"select_raffle" => "Zvolte Tomobolový Balíček",
		"global_packages" => "Globální Balíčky",

		// Raffles
		"raffle_ticket" => "Zakoupit lístek",
		"raffle_ended" => "Tombola skončila, výherce je: ",
		"raffle_not_compatible" => "Tento balíček není kompatibilní s tím, který vlastníte. Vstup do tomboly zakázán.",
		"raffle_already_own" => "Již vlastníte tento balíček. Vstup do tomboly zakázán.",
		"raffle_reached_max" => "Dosáhli jste maximální množství vstupů do tomboly. Vstup do tomboly zakázán.",

		// Support
		"create_ticket" => "Vytvořit tiket",
		"ticket_closed" => "Tento tiket je uzavřen.",
		"reply" => "Odpovědět",
		"create" => "Vytvořit",

		// Terms of Service
		"tos_edited" => "Podmínky služby byli upraveny. <a href='tos.php'>Podmínky služby</a> odsouhlaste je před tím, než si koupíte balíček!",
		"tos_must_accept" => "Musíte souhlasit s Podmínkami Služby!",
		"tos_accept" => "Souhlasím",

		// Purchase buttons
		"purchase_paypal" => "Zakoupit s PayPalem",
		"purchase_credits" => "Zakoupit s kreditama",
		"purchase" => "Zakoupit",
		"buy_sign_in" => "Musíte být přihlašen, před tím než si něco zakoupíte!",
		"buy_already_own" => "Již vlastníte tento balíček!",
		"buy_not_compatible" => "Tento balíček není kompatibilní s tím, který vlastníte!",
		"buy_they_already_own" => "Tato osoba již vlastní tento balíček!",
		"buy_they_not_compatible" => "Tento balíček není kompatibilní některým, který vlastníte!",

		// Packages
		"buying_someone_else" => "Zakupujete toto pro někoho jiného?",
		"buying_yourself" => "Zakupujete pro sebe.",
		"buying_for" => "Zakupujete pro ",
		"packages_custom_amount" => "Vlastní částka",

		"packages_not_available" => "Žádné balíčky jsou k dispozici pro tento server.",
		"raffle_not_available" => "Žádné tombolové balíčky nejsou k dispozici v současné době.",
		"credit_not_available" => "Žádné kreditové balíčky nejsou k dispozici v současné době.",

		// Buttons
		"submit" => "Potvrdit",

		// Profile
		"non_perm_pkg" => "Nepermanentní Balíček",
		"perm_pkg" => "Permanentní Balíček/ky",
		"acc_info" => "Informace O Účtu",
		"pkg_history" => "Historie Balíčků",
		"acc_credits" => "Kredity",
		"transfer_credits" => "Přenést Kredity",
		"package" => "Balíček",

		// Tables
		"id" => "ID",
		"user" => "Použivatel",
		"description" => "Popis",
		"timestamp" => "Čas",
		"action" => "Akce",
		"replies" => "Odpovědi",
		"view" => "Otevřít",

		// Select boxes
		"select_server" => "Zvolte server:",
		"select_currency" => "Zvolte měnu:",
		"select_category" => "Zvolte kategorii:",
		"none" => "None",

		// Modals
		"yes" => "Ano",
		"no" => "Ne",
		"sure" => "Jste si jisti?",
		"sure_cur" => "Jste si jisti, že chcete smazat tuto měnu?",
		"sure_srv" => "Jste si jisti, že chcete smazat tento server?",
		"sure_cat" => "Jste si jisti, že chcete smazat tuto kategorii?",

		// Dangerous settings
		"dangerous" => "Nebezpečné nastavení",
		"danger_cur" => "Nebo alternativně, můžete odstranit tuto měnu.",
		"danger_srv" => "Neodstraňujte tento server, pokud jsou k němu přiřazeny balíčky!",
		"danger_cat" => "Neodstraňujte tuto kategorii, pokud jsou k ní přiřazeny balíčky!",
		"delete" => "Smazat",

		// Admin nav
		"dashboard" => "Hlavní menu",
		"general_settings" => "Všeobecné nastavení",
		"support_tickets" => "Podporové tikety",
		"servers" => "Servery",
		"currencies" => "Měny",
		"categories" => "Kategorie",
		"packages_and_actions" => "Balíčky & akce",
		"credit_packages" => "Kreditové balíčky",
		"raffles" => "Tombola",
		"theme_editor" => "Editor témy",
		"documentation" => "Manuál",

		// General Settings
		"settings" => "Nastavení",
		"main_page" => "Hlavní stránka",
		"integration_settings" => "Nastavení integrace",
		"ingame_notifications" => "Upozornění ve hře",

		// Servers page
		"add_srv" => "Přidat server",
		"edit_srv" => "Upravit server",
		"server_name" => "Jméno Serveru",
		"featured_pkg_short" => "Nejlepší balíček",

		// Currency page
		"add_cur" => "Přidat měnu",
		"edit_cur" => "Upravit měnu",
		"cc" => "Kód měny",

		// Category page
		"add_cat" => "Přidat kategorii",
		"edit_cat" => "Upravit kategorii",
		"cat_name" => "Jméno Kategorie",

		// Dashboard nav
		"main_dashboard" => "Hlavní menu",
		"sale" => "Sleva",
		"transactions" => "Transakce",
		"users" => "Uživatelé",
		"logs" => "Záznamy",
		"update_sql" => "Aktualizovat SQL",
		"other_features" => "Jiné funkce",

		// Admin dashboard
		"total" => "Celkově",
		"full_total" => "Plný celek",
		"dashboard_text" => "Vítejte na hlavním menu správce, zde si budete moci prohlížet statistiky o penězích z vašich serverů.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Vítejte",
		"need_credits" => "Potřebujete víc kreditů? <a href='store.php?credits'>Klikněte zde!</a>",
		"no_history" => "Žádná historie",
		"amount" => "Hodnota",
		"you_have_none" => "Nemáte nic!",

		"add_cre" => "Přidat kreditový balíček",
		"edit_cre" => "Upravit kreditový balíček",
		"pack_title" => "Název balíčku",
		"price" => "Cena",
		"currency" => "Měna",
		"sure_cre" => "Jste si jisti, že chcete smazat tento kreditový balíček?",
		"danger_cre" => "Nebo alternativně, můžete odstranit tento kreditní balíček.",
		"select_package" => "Vybrat balíček:",
		"choose_cre" => "Zvolit kreditový balíček",
		"brief_desc" => "Stručný popis",
		"amt_of_cre" => "Množství kreditů",
		"price_of_pkg" => "Cena balíčku",
		"no_support" => "Nemáte žádné podpůrné tikety",
		"no_other_available" => "Žádné další balíčky nejsou k dispozici",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Získej tento balíček zdarma!",
		"dashboard_revenuegraph" => "Graf příjmů",
		"dashboard_revenuecurrency" => "Zobrazovat ve vaší hlavní měně",
		"dashboard_packagesgraph" => "Prodej balíčků",
		"dashboard_serversgraph" => "Výnos serverů",
		"between" => "Mezi",
		"and" => "A",

		/**
		 * New in 1.5
		 */
		"wiki" => "Wiki",
		"no_graph_info" => "No graph info",
		"no_graph_info_text" => "Not showing graph info due to there not having been any transactions!",
		"paymentwall_purchase" => "Purchase with Paymentwall",
		"stripe_purchase" => "Purchase with Stripe",
		"payment_gateways" => "Payment Gateways",
		"advanced" => "Advanced",
		"no_servers" => "No servers available at the moment.",
		"entries" => "entries",
		"you_can_enter" => "You can enter",
		"times_more" => "time(s) more",
		"dashboard_creditsrevenue" => "This graph also compares credits spent to money spent. Although credits are aquired with money. (Credits = <font color='#9c9c9c'><b>Gray</b></font>, Money = <font color='#c10000'><b>Red</b></font>)",
		"pkg_discounted" => "This package is discounted because you own",

		"compatible_text" => "If you own this package, you can't get the packages selected below",
		"not_compatible" => "Not compatible with",

		"packages" => "Packages",
		"upgradeable_text" => "If you own the package selected, you get this one at a discounted price of the selected packages' price",
		"upgradeable" => "Upgradeable with",

		"assign_actions" => "Assign actions",
		"actions_text" => "Assign what actions you want this package to perform after it has been purchased by a player.",
		"actions" => "Actions",
		"servers" => "Servers",
		"label_amount" => "Label amount",
		"add_package" => "Add package",
		"edit_package" => "Edit package",
		"labels" => "Labels",
		"title" => "Title",
		"category" => "Category",
		"no_packages" => "You currently have no packages on the system",

		/**
		 * New in 1.5.0.2
		 */
		"hide" => "Hide this package",
		"hide_text" => "If you dont own one of the packages selected below, hide this package from the store",
		
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
	);

?>