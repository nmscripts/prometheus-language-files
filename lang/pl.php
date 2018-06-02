<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
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
		"home" => "Strona Główna",
		"store" => "Sklep",
		"buy_credits" => "Kup Kredyty",
		"raffles" => "Loterie",
		"profile" => "Profil",
		"support" => "Pomoc",
		"admin" => "Admin",
		"sign_out" => "Wyloguj",
		"sign_in" => "Zaloguj",

		// Header errors and messages
		"not_setup" => "Panel nie został poprawnie skonfigurowany! <a href='admin.php?a=gen&p=settings'>Kliknij Tutaj</a> [Admin -> General Settings -> Settings]",
		"header_sandbox" => "PayPal Sandbox jest włączony. Używaj tylko do testów! Możesz go wyłączyć <a href='admin.php?a=gen&p=paypal'>tutaj</a>",
		"missing_action" => "Co najmniej jedna paczka nie ma przypisanej akcji!",
		"unfinished_action" => "Masz nieukończone akcje w 'Profilu' , <a href='profile.php'>tutaj</a>",

		// Frontpage
		"welcome" => "Witaj - Zaloguj",
		"welcome_text" => "Zaloguj się za pomocą Steam żeby skorzystać z serwisu.",

		// News
		"news" => "Newsy",
		"by" => "Przez",
		"no_news" => "Brak Newsów",
		"no_news_text" => "Aktualnie nie ma newsów.",
		"no_news_articles" => "Brak nowych artykułów.",

		// Footer
		"tos" => "Regulamin Serwisu",
		"powered_by" => "Wspomagany przez Steam",

		// Store
		"credits" => "Kredyty",
		"featured_pkg" => "Wyróżnione Paczki",
		"permanent" => "Permanentny",
		"non_permanent" => "Niepermanentny",

		"select_credit" => "Wybierz Paczkę za Kredyty",
		"select_raffle" => "Wybierz Paczkę z Loterii",
		"global_packages" => "Paczki Globalne",

		// Raffles
		"raffle_ticket" => "Kup los",
		"raffle_ended" => "Loteria się zakończyła, zwycięzcą jest: ",
		"raffle_not_compatible" => "Ta paczka nie jest kompatybilna z twoją. Wejście do loterii odrzucone.",
		"raffle_already_own" => "Już masz tą paczkę. Wejście do loterii odrzucone.",
		"raffle_reached_max" => "Osiągnęto maksymalną ilość wejść do loterii. Wejście do loterii odrzucone.",

		// Support
		"create_ticket" => "Utwórz Zgłoszenie",
		"ticket_closed" => "Zgłoszenie jest zamknięte.",
		"reply" => "Odpowiedz",
		"create" => "Stwórz",

		// Terms of Service
		"tos_edited" => "Regulamin został zmieniony. Zaakceptuj <a href='tos.php'>Regulamin Serwisu</a> przed kupnem czegokolwiek!",
		"tos_must_accept" => "Musisz zaakceptować Regulamin przed zakupem!",
		"tos_accept" => "Zgadzam się",

		// Purchase buttons
		"purchase_paypal" => "Kup przez Paypal",
		"purchase_credits" => "Kup przez Kredyty",
		"purchase" => "Kup",
		"buy_sign_in" => "Musisz się zalogować przed kupnem!",
		"buy_already_own" => "Już masz tę paczę!",
		"buy_not_compatible" => "Ta paczka nie jest kompatybilna z paczką, którą posiadasz!",
		"buy_they_already_own" => "Ta osoba już posiada tę paczkę!",
		"buy_they_not_compatible" => "Ta paczka nie jest kompatybilna z paczką którą posiada!",

		// Packages
		"buying_someone_else" => "Kupujesz dla innej osoby?",
		"buying_yourself" => "Aktualnie kupujesz dla siebie",
		"buying_for" => "Aktualnie kupujesz dla",
		"packages_custom_amount" => "Dowolna kwota",

		"packages_not_available" => "Brak dostępnych paczek dla tego serwera.",
		"raffle_not_available" => "Aktualnie brak dostępnych loterii.",
		"credit_not_available" => "Aktualnie brak dostępnych kredytów.",

		// Buttons
		"submit" => "Wyślij",

		// Profile
		"non_perm_pkg" => "Niepermanentne paczki",
		"perm_pkg" => "Permanentne paczki",
		"acc_info" => "Informacje o Koncie",
		"pkg_history" => "Historia Paczek",
		"acc_credits" => "Kredyty",
		"transfer_credits" => "Przelew Kredytów",
		"package" => "Paczka",

		// Tables
		"id" => "ID",
		"user" => "Użytkownik",
		"description" => "Opis",
		"timestamp" => "Czas",
		"action" => "Akcja",
		"replies" => "Odpowiedzi",
		"view" => "Zobacz",

		// Select boxes
		"select_server" => "Wybierz serwer:",
		"select_currency" => "Wybierz walutę:",
		"select_category" => "Wybierz kategorię:",
		"none" => "Brak",

		// Modals
		"yes" => "Tak",
		"no" => "Nie",
		"sure" => "Jesteś pewien",
		"sure_cur" => "Na pewno chcesz usunąć tę walutę?",
		"sure_srv" => "Na pewno chcesz usunąć ten serwer?",
		"sure_cat" => "Na pewno chcesz usunąć tę kategorie?",

		// Dangerous settings --$
		"dangerous" => "Niebezpieczne Ustawienia",
		"danger_cur" => "Ewentualnie możesz usunąć tę walutę.",
		"danger_srv" => "Nie usuwaj tego serwera dopóki są do niego przypisane paczki!",
		"danger_cat" => "Nie usuwaj tej kategorii dopóki są do niej przypisane paczki!",
		"delete" => "Usuń",

		// Admin nav
		"dashboard" => "Panel",
		"general_settings" => "Główne Ustawienia",
		"support_tickets" => "Zgłoszenia Pomocy",
		"servers" => "Serwery",
		"currencies" => "Waluty",
		"categories" => "Kategorie",
		"packages_and_actions" => "Paczki i akcje",
		"credit_packages" => "Paczki za Kredyty",
		"raffles" => "Loterie",
		"theme_editor" => "Edytor stylu",
		"documentation" => "Dokumentacja",

		// General Settings
		"settings" => "Ustawienia",
		"main_page" => "Strona Główna",
		"integration_settings" => "Ustawienia integracji",
		"ingame_notifications" => "Powiadomienia w grze",

		// Servers page
		"add_srv" => "Dodaj serwer",
		"edit_srv" => "Edytuj serwer",
		"server_name" => "Nazwa serwera",
		"featured_pkg_short" => "Wyróżnione paczki",

		// Currency page
		"add_cur" => "Dodaj walutę",
		"edit_cur" => "Edytuj walutę",
		"cc" => "Symbol waluty",

		// Category page
		"add_cat" => "Dodaj kategorię",
		"edit_cat" => "Edytuj kategorię",
		"cat_name" => "Nazwa kategorii",

		// Dashboard nav
		"main_dashboard" => "Główny panel",
		"sale" => "Wyprzedaż",
		"transactions" => "Transakcje",
		"users" => "Użytkownicy",
		"logs" => "Logi",
		"update_sql" => "Aktualizacja SQL",
		"other_features" => "Inne właściwości",

		// Admin dashboard
		"total" => "W sumie",
		"full_total" => "Całkowicie",
		"dashboard_text" => "Witaj w panelu administratora, tutaj możesz zobaczyć statystyki swoich serwerów i dotacji.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Witaj",
		"need_credits" => "Brak Kredytów? <a href='store.php?page=credits'>Kliknij tutaj!</a>",
		"no_history" => "Brak historii",
		"amount" => "Kwota",
		"you_have_none" => "Nie masz żadnej!",

		"add_cre" => "Dodaj paczkę za Kredyty",
		"edit_cre" => "Edytuj paczkę za Kredyty",
		"pack_title" => "Tytuł paczki",
		"price" => "Cena",
		"currency" => "Waluta",
		"sure_cre" => "Na pewno chcesz usunąć tę paczkę?",
		"danger_cre" => "Ewentualnie moższ usunąć tę paczkę.",
		"select_package" => "Wybierz paczkę:",
		"choose_cre" => "Wybierz paczkę za kredyty",
		"brief_desc" => "Krótki opis",
		"amt_of_cre" => "Ilość kredytów",
		"price_of_pkg" => "Cena paczki",
		"no_support" => "Nie masz żadnych zgłoszeń",
		"no_other_available" => "Brak innych paczek",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Zdobdź tę paczkę za darmo!",
		"dashboard_revenuegraph" => "Wykres dochodów",
		"dashboard_revenuecurrency" => "Pokazane w głównej walucie",
		"dashboard_packagesgraph" => "Sprzedaż Paczek",
		"dashboard_serversgraph" => "Sprzedaż Serwerowa",
		"between" => "Między",
		"and" => "I",

		/** 
		 * New in 1.4.9
		 */
		"free" => "Darmowa",
		"buy_own_free" => "Już posiadasz tę darmową paczkę, nie możesz mieć dwóch!",
		
		/**
		 * New in 1.4.9.2
		 */
		"updates" => "Aktualizacje",

		/**
		 * New in 1.4.9.3
		 */
		"header_sqlupdate" => "Masz niewykonaną aktualizację MySQL <a href='admin.php?update'>tutaj!</a>",
		"monthly_goal" => "Miesięczny cel",

		/**
		 * New in 1.4.9.6
		 */
		"payment_success" => "Płatność zakończona sukcesem!",
		"profile_updated" => "Twój profil został zaktualizowany.",
		"payment_failed" => "Płatność zakończona niepowodzeniem!",
		"check_credits" => "Sprawdź czy masz wystarczającą ilość kredytów do zakupu paczki!",
		"not_authorised" => "Nie możesz być na tej stronie. Zaloguj się najpierw!",

		/**
		 * New in 1.5
		 */
		"wiki" => "Wiki",
		"no_graph_info" => "Brak danych wykresu",
		"no_graph_info_text" => "Brak wykresu przez brak transakcji!",
		"paymentwall_purchase" => "Kup przez Paymentwall",
		"stripe_purchase" => "Kup z Stripe",
		"payment_gateways" => "Metody Płatności",
		"advanced" => "Zaawansowane",
		"no_servers" => "Brak serwerów.",
		"entries" => "wejścia",
		"you_can_enter" => "Możesz wejść",
		"times_more" => "więcej razy",
		"dashboard_creditsrevenue" => "Wykres porównuje wydane kredyty do pieniędzy. (Kredyty = <font color='#9c9c9c'><b>Szary</b></font>, Pieniądze = <font color='#c10000'><b>Czerwony</b></font>)",
		"pkg_discounted" => "Ta paczka jest przeceniona, ponieważ posiadasz",

		"compatible_text" => "Jeżli posiadasz tę paczkę nie możesz kupić żadnej z poniższych",
		"not_compatible" => "Niekompatybilna z",

		"packages" => "Paczki",
		"upgradeable_text" => "Jeśli posiadasz wybraną paczkę, dostaniesz zniżkę na wybrane inne paczki",
		"upgradeable" => "Możliwa do ulepszenia z",

		"assign_actions" => "Dodaj akcje",
		"actions_text" => "Dodaj co ma się stać po kupnie paczki przez gracza.",
		"actions" => "Akcje",
		"servers" => "Serwery",
		"label_amount" => "Kwota",
		"add_package" => "Dodaj paczkę",
		"edit_package" => "Edytuj paczkę",
		"labels" => "Etykiety",
		"title" => "Tytuł",
		"category" => "Kategoria",
		"no_packages" => "Brak paczek w systemie",

		/**
		 * New in 1.5.0.6
		 */
		"signin" => "Zaloguj",
		"welcome_signin" => "Musisz się zalogować przed kupnem paczki",
		"blacklist_notext" => "Musisz podać prawidłowe Steam64 lub SteamID żeby dodać osobę na blacklistę!",
		"blacklist_success" => "Dodanie osoby na blacklistą zakończone powodzeniem",
		"blacklisted_you" => "Nie masz możliwości kupna Ĺźadnej paczki w tej sieci!",
		"blacklisted_them" => "Ta osoba jest na blackliście, nie możesz kupić dla niej",

		"recent_donators" => "Ostatni darczyńcy",
		"name" => "Nazwa",
		"recent_none" => "Brak ostatnich darczyńców",
		"raffle_free" => "Wejdź za darmo!",

		/**
		 * New in 1.5.0.8
		 */
		"top_donators" => "Najlepsi darczyńcy",
		"top_none" => "Brak najlepszych darczyńców",

		/**
		 * New in 1.5.0.9
		 */
		"step" => "Krok",

		/**
		 * New in 1.5.1
		 */
		"permission_groups" => "Permisje grupowe",
		"add_permission" => "Dodaj permisje",
		"edit_permission" => "Edytuj permisje",
		"permissions" => "Permisje",
		"no_perm" => "Niewystarczające permisje!",

		/**
		 * New in 1.5.1.2
		 */
		"select_gateway" => "Wybierz metodę płatności",

		/**
		 * New in 1.5.2
		 */
		"buy_disable" => "Wyłącz paczki",
		"buy_disable_text" => "Wyłącz te paczki po zakupie wybranej",

		"credits_doesntexist" => "Użytkownik nie istnieje w systemie.",
		"credits_yourself" => "Nie możesz przelać kredytów samemu sobie.",
		"credits_steamid" => "Spróbuj innego SteamID",
		"credits_transferringto" => "Przelew do:",

		"type" => "Typ",
		"gateway" => "Metoda",
		"no_users" => "Nie znaleziono użytkownika ",

		"view_profile" => "Zobacz profil",
		"view_blacklist" => "Zobacz blacklistę",

		"manage" => "Zarządzaj",
		"users_search" => "Szujkaj nickiem, steam64 albo steamid",

		"transaction" => "Transakcje",
		"delivered" => "Dostarczone",
		"state" => "Status",
		"assign_package" => "Przydziel paczkę",
		"set_credits" => "Ustaw kredyty",
		"give_ticket" => "Daj los",
		"del_inactive_actions" => "Usuń nieużyte akcje",

		"select_pkg" => "Wybierz paczkę",
		"do_assign_actions" => "Przydziel akcje",
		"dont_assign_actions" => "Nie przydzielaj akcji",
		"clone_expiretime" => "Skopiuj czas wygaśnięcia takiej samej paczki",
		"assign" => "Przydziel",

		"set" => "Ustaw", 
		"disable" => "Wyłącz",
		"enable" => "Włącz",
		"inactive_everyone" => "Wyłącz wszystkim",
		"del" => "Usuń",
		"edit" => "Edytuj",

		"sale_settings" => "Ustawienia przeceny",
		"sale_text" => "Wybierz paczki do przeceny.",
		"message" => "Wiadomość",
		"percentage" => "Procent",
		"end_date" => "Data zakończenia",

		"update" => "Aktualizacja",
		"automatic_updates" => "Automatyczne aktualizacje",
		"dl_lua" => "Pobierz najnowsze pliki lua",
		"dl_web" => "Pobierz najnowsze pliki web",
		"no_write_perm" => "Twój folder updates nie ma permisji do zapisywania! Automatyczne aktualizacje nie będą działać dopóki nie ustawisz chmod 777. <br> Możesz nadal aktualizować ręcznie",
		"newest_version" => "Najnowsza dostępna wersja to:",

		"test_message" => "Wyślij wiadomość testową na serwer",

		/**
		 * New in 1.5.2.2
		 */
		
		"find_more" => "Zobacz więcej!",

		/**
		 * New in 1.5.3
		 */
		
		"duplicate" => "Duplikuj",
		"other" => "Inne",
		"someone_else" => "Możesz kupić dla kogoś",

		/**
		 * New in 1.5.4 -- Do not replace $1, $2, $3 etc, they get replaced with numbers and stuff automatically, so keep them there!
		 */
		
		"here" => "tutaj", // This is $1 in 'job_already_created' because it's wrapped in a link
		"job_already_created" => "Utworzyłeś własny 'job'. Jeżli chcesz przejść do koszyka kliknij $1. W przeciwnym wypadku możesz stworzyć nową",
		
		"general_info" => "Informacje Ogólne",
		"preferences" => "Preferencje",

		"job_name" => "Nazwa Job",
		"chat_cmd" => "Komenda na wzięcie job",
		"job_desc" => "Opis job",
		"job_colour" => "Kolor Job",

		"weapons" => "Bronie",
		"models" => "Modele",
		"model" => "Model",
		
		"job_costs" => "Kosztuje $1 or $2 kredytów",

		"friends" => "Znajomi",
		"friends_max" => "<h6>Znajomi - $1 max</h6>",
		"friends_add" => "Dla każdego znajomego dodaje $1 or $2 kredytów do ceny końcowej",
		"friends_not" => "Nie możesz dodać znajomych do tej paczki",

		"salary" => "Zarobki",
		"salary_static" => "Twój zarobek to $1",
		"salary_base" => "Twój podstawowy zarobek to $1. Powiększając ilość dodajesz $2 or $3 kredytów do ceny końcowej",
		"salary_max" => "<h6>Zarobki - $1 razy do powiększenia</h6>",
		"salary_current" => "Twoje obecne zarobki to: $1",
		"license" => "Licencja",
		"license_included" => "Zdobądź licencję powiązaną z job",
		"license_include" => "Dodaj licencję - Kosztuje $1 or $2 kredytów",
		"license_no" => "Nie otrzymasz licencji",

		"payment_confirmation" => "Potwierdzenie płatności",
		"job_total" => "Twoja suma to $1 or $2 kredytów",
		"job_proceed" => "Przejdź do koszyka",

		/**
		 * New in 1.5.5
		 */
		
		"job_total_nocredits" => "Twoja suma to $1",
		"job_total_onlycredits" => "Twoja suma kredytów to $1",
		
		"earned_total" => "W SUMIE ZAROBIONE",
		"earned_week" => "ZAROBIONE W TYM TYGODNIU",
		"earned_month" => "ZAROBIONE W TYM MIESIĄCU",

		"real_transaction" => "Licz jako prawdziwą transakcję",
		"not_real_transaction" => "Nie licz jako prawdziwą transakcję (Nie będzie dodana do statystyk)",

		/**
		 * New in 1.6
		 */

		"active_everyone" => "Aktywuj wszystkim",
		"buy_others_disabled" => "Kupowanie innym jest wyłączone",
		"job_skip_prize" => "Pomiń - Kliknij tylko jeżli nie chcesz przyjąć nagrody z loterii",

		"move_packages" => "Kliknij $1 żeby przenieść paczki",

		"add" => "Dodaj",
		"edit" => "Edytuj",

		// Theme
		"theme" => "Styl",
		"danger_theme" => "Nie usuwaj stylu dopóki go używasz!",
		"sure_theme" => "Na pewno chcesz usunąć ten styl?",
		"theme_name" => "Nazwa stylu",
		
		"edit_theme" => "Edytuj styl",
		"add_theme" => "Dodaj styl",
		"select_theme" => "Wybierz styl",

		// Imprint page
		"imprint" => "Informacje o Sprzedającym",
		"enable_imprint" => "Włącz informacje o sprzedającym",
		"company_name" => "Nazwa firmy",
		"street_address" => "Adres",
		"post_address" => "Adres poczty",
		"country" => "Państwo",
		"trade_register" => "Rodzaj firmy",
		"company_id" => "NIP",
		"company_ceo" => "Właściciel",
		"contact_email" => "Email kontaktowy",
		"contact_phone" => "Telefon kontaktowy",

		/**
		 * New in 1.6.1
		 */
		"game" => "Gra",
		"server_ip" => "IP serwera",
		"server_port" => "Port serwera",
		"server_rcon" => "RCon serwera",

		"edit_raffle" => "Edytuj loterię",
		"add_raffle" => "Dodaj loterię",
		"select_raffle" => "Wybierz loterię:",

		"package_cantbuy" => "Nie możesz kupić tej paczki bez posiadania: $1",
		"package_they_cantbuy" => "On nie może kupić tej paczki bez posiadania: $1",

		"hide" => "Jeśli nie masz żadnej z tych paczek, nie możesz dostać tej",
		"hide_text" => "Jeśli nie masz żadnej z paczek poniżej nie możesz kupić tej",

		"your_spendings" => "Twoje wydatki w 5 ostatnich miesiącach",
		"spendings_currency" => "Te wydatki są pokazane w głównej walucie [$1]. Wykres porównuje wydane kredyty do pieniędzy. (Kredyty = <font color='#9c9c9c'><b>Szary</b></font>, Pieniądze = <font color='#c10000'><b>Czerwony</b></font>)",
	
		"spent_total" => "CAŁKOWITE WYDATKI",
		"spent_week" => "WYDATKI W TYM TYGODNIU",
		"spent_month" => "WYDATKI W TYM MIESIĄCU",

		/**
		 * New in 1.6.1.5
		 */
		"advent_calendar" => "Kalendarz Adwentowy",
		"advent" => "Adwent",
		"day" => "Dzień",
		"advent_opened" => "Otworzyłeś dzień $1 i otrzymałeś $2!",
		"advent_nopkg" => "Ten dzień nie ma przypisanej nagrody, zgłoś to administratorowi",
		"advent_text" => "Zdobądź darmową paczkę codziennie od 1. Grudnia do Wigilli, czyli 24.!",

		/**
		 * New in 1.6.2
		 */
		"coupons" => "Kupony",
		"add_cou" => "Dodaj kupon",
		"edit_cou" => "Edytuj kupon",
		"select_cou" => "Wybierz kupon",
		"sure_cou" => "Na pewno chcesz usunąć ten kupon?",
		"coupon_text" => "Jeśli masz kupon możesz go wpisć tutaj :)",

	);

	$curfile = __FILE__;
	if($curfile == 'pl.php'){
		$english_lang = $lang;
	}

?>
