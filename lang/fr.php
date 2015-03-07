<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 *
	 * French translation courtesy of Hikage and Yellow.
	 */
	$lang = array(

		// Navigation bar
		"home" => "Accueil",
		"store" => "Magasin",
		"buy_credits" => "Acheter des Crédits",
		"raffles" => "Tombola",
		"profile" => "Profil",
		"support" => "Support",
		"admin" => "Admin",
		"sign_out" => "Se Déconnecter",
		"sign_in" => "Se Connecter",

		// Header errors and messages
		"not_setup" => "Vous n'avez pas configuré votre panneau correctement! <a href='admin.php?a=gen&settings'>Cliquez ici</a> [Admin -> General Settings -> Settings]",
		"header_sandbox" => "PayPal Sandbox est activée. N'utilisez les sandbox que pour les tests! Vous pouvez le désactiver <a href='admin.php?a=gen&settings'>ici</a>",
		"missing_action" => " Il manque une action dans un ou plusieurs paquet(s)",
		"unfinished_action" => "Vous avez une action non-fini sur la page 'Profil',<a href='profile.php'>ici</a>",

		// Frontpage
		"welcome" => "Bienvenue - Inscrivez-vous",
		"welcome_text" => "Connectez-vous à travers steam pour utiliser notre portail.",

		// News
		"news" => "News",
		"by" => "Par",
		"no_news" => "Pas de nouvelles",
		"no_news_text" => "Il n'y a pas de nouvelles.",
		"no_news_articles" => "Aucun article de presse.",

		// Footer
		"tos" => "Conditions générales d'utilisation",
		"powered_by" => "Propulsé par Steam",

		// Store
		"credits" => "Crédits",
		"featured_pkg" => "Paquet vedette",
		"permanent" => "Permanent",
		"non_permanent" => "Non Permanent",

		"select_credit" => "Selectionner paquet Crédit",
		"select_raffle" => "Selectionner paquet Enchère",
		"global_packages" => "Paquet global",

		// Raffles
		"raffle_ticket" => "Acheter un ticket",
		"raffle_ended" => "La tombola a pris fin, le gagnant est: ",
		"raffle_not_compatible" => "Ce forfait n'est pas compatible avec celui que vous possédez. L'entrée à la tombola vous est donc refusée.",
		"raffle_already_own" => "Vous possédez déjà ce paquet. L'entrée à la tombola vous est donc refusée.",
		"raffle_reached_max" => "Vous avez atteint le montant maximum d'entrées de tombola. L'entrée à la tombola vous est donc refusée.",

		// Support
		"create_ticket" => "Créer billet",
		"ticket_closed" => "Ce billet est fermé.",
		"reply" => "Répondre",
		"create" => "Créer",

		// Terms of Service
		"tos_edited" => "Les conditions ont été édité. Veuillez accepter les <a href='tos.php'>conditions générales d'utilisation</a> avant d'acheter un paquet!",
		"tos_must_accept" => "Vous devez accepter les CGU avant d'acheter!",
		"tos_accept" => "Accepter",

		// Purchase buttons
		"purchase_paypal" => "Achat avec Paypal",
		"purchase_credits" => "Achat avec des Crédits",
		"purchase" => "Achat",
		"buy_sign_in" => "Vous devez être connecté avant d'acheter!",
		"buy_already_own" => "Vous possédez déjà ce paquet!",
		"buy_not_compatible" => "Ce paquet n'est pas compatible avec celui que vous possédez!",
		"buy_they_already_own" => "Cette personne possède déjà ce paquet!",
		"buy_they_not_compatible" => "Ce paquet n'est pas compatible avec celui qu'il possède!",

		// Packages
		"buying_someone_else" => "Voulez-vous acheter pour quelqu'un d'autre?",
		"buying_yourself" => "Vous êtes en train d'acheter pour vous-même",
		"buying_for" => "Vous êtes en train d'acheter pour",
		"packages_custom_amount" => "Montant personnalisé",

		"packages_not_available" => "Aucun paquet n'est disponible pour ce serveur.",
		"raffle_not_available" => "Aucun paquet de tombola disponible pour le moment.",
		"credit_not_available" => "Aucun paquet de crédit disponible pour le moment.",

		// Buttons
		"submit" => "Soumettre",

		// Profile
		"non_perm_pkg" => "Paquet non permanent",
		"perm_pkg" => "Paquet(s) permanent",
		"acc_info" => "Informations du compte",
		"pkg_history" => "Historique de paquet",
		"acc_credits" => "Crédits",
		"transfer_credits" => "transfert de crédits",
		"package" => "Paquet",

		// Tables
		"id" => "ID",
		"user" => "Utilisateur",
		"description" => "Description",
		"timestamp" => "Horodatage",
		"action" => "Action",
		"replies" => "Réponses",
		"view" => "Vue",

		// Select boxes
		"select_server" => "Sélectionnez votre serveur:",
		"select_currency" => "Sélectionnez votre devise:",
		"select_category" => "Sélectionnez votre categorie:",
		"none" => "Aucun",

		// Modals
		"yes" => "Oui",
		"no" => "Non",
		"sure" => "Êtes-vous sûr?",
		"sure_cur" => "Êtes-vous sûr de vouloir supprimer cette devise?",
		"sure_srv" => "Êtes-vous sûr de vouloir supprimer ce serveur?",
		"sure_cat" => "Êtes-vous sûr de vouloir supprimer cette categorie?",

		// Dangerous settings
		"dangerous" => "Paramètres Dangereux",
		"danger_cur" => "Ou bien, vous pouvez supprimer cette devise.",
		"danger_srv" => "Ne supprimez ce serveur que si aucun paquet ne lui est attribué!",
		"danger_cat" => "Ne supprimez cette catégorie que si aucun paquet ne lui est attribué!",
		"delete" => "Effacer",

		// Admin nav
		"dashboard" => "tableau de bord",
		"general_settings" => "Paramètres généraux",
		"support_tickets" => "Tickets de support",
		"servers" => "Serveurs",
		"currencies" => "Devises",
		"categories" => "Catégories",
		"packages_and_actions" => "Paquets & actions",
		"credit_packages" => "Paquets de crédits",
		"raffles" => "Tombola",
		"theme_editor" => "Éditeur de thème",
		"documentation" => "Documentation",

		// General Settings
		"settings" => "Paramètres",
		"main_page" => "Page d'accueil",
		"integration_settings" => "Paramètres d'intégration",
		"ingame_notifications" => "Notifications Ingame",

		// Servers page
		"add_srv" => "Ajouter un serveur",
		"edit_srv" => "Editer un serveur",
		"server_name" => "Nom du serveur",
		"featured_pkg_short" => "Pkg vedette",

		// Currency page
		"add_cur" => "Ajouter une devise",
		"edit_cur" => "Editer une devise",
		"cc" => "Code de la devise",

		// Category page
		"add_cat" => "Ajouter une catégorie",
		"edit_cat" => "Editer une catégorie",
		"cat_name" => "Nom de la Catégorie",

		// Dashboard nav
		"main_dashboard" => "Tableau de bord",
		"sale" => "Vente",
		"transactions" => "Transactions",
		"users" => "Utilisateurs",
		"logs" => "Logs",
		"update_sql" => "Mise à jour SQL",
		"other_features" => "Autres caractéristiques",

		// Admin dashboard
		"total" => "Total",
		"full_total" => "Total Complet",
		"dashboard_text" => "Bienvenue sur le tableau de bord administrateur, c'est ici que vous serez en mesure de voir les stats de don de vos serveurs.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Welcome",
		"need_credits" => "Need more credits? <a href='store.php?credits'>Click here!</a>",
		"no_history" => "No history",
		"amount" => "Amount",
		"you_have_none" => "You have none!",

		"add_cre" => "Add credit package",
		"edit_cre" => "Edit credit package",
		"pack_title" => "Pack title",
		"price" => "Price",
		"currency" => "Currency",
		"sure_cre" => "Are you sure you want to delete this credit package?",
		"danger_cre" => "Or alternatively, you can delete this credit package.",
		"select_package" => "Select package:",
		"choose_cre" => "Choose credit package",
		"brief_desc" => "Brief description",
		"amt_of_cre" => "Amount of credits",
		"price_of_pkg" => "Price of package",
		"no_support" => "You have no support tickets",
		"no_other_available" => "No other packages available",
	);

?>
