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
		"home" => "Home",
		"store" => "Store",
		"buy_credits" => "Buy Credits",
		"raffles" => "Raffles",
		"profile" => "Profile",
		"support" => "Support",
		"admin" => "Admin",
		"sign_out" => "Sign out",
		"sign_in" => "Sign in",

		// Header errors and messages
		"not_setup" => "You have not set up your panel properly! <a href='admin.php?a=gen&settings'>Click here</a> [Admin -> General Settings -> Settings]",
		"header_sandbox" => "PayPal Sandbox is enabled. Only use sandbox for testing! You can disable it <a href='admin.php?a=gen&settings'>here</a>",
		"missing_action" => "One or more packages is missing an action!",
		"unfinished_action" => "You have an un-finished action in the 'Profile' page, <a href='profile.php'>here</a>",

		// Frontpage
		"welcome" => "Welcome - Sign in",
		"welcome_text" => "Sign in through steam to use our easy donation portal.",

		// News
		"news" => "News",
		"by" => "By",
		"no_news" => "No news",
		"no_news_text" => "There are currently no news.",
		"no_news_articles" => "No news articles.",

		// Footer
		"tos" => "Terms of Service",
		"powered_by" => "Powered by Steam",

		// Store
		"credits" => "Credits",
		"featured_pkg" => "Featured Package",
		"permanent" => "Permanent",
		"non_permanent" => "Non Permanent",

		"select_credit" => "Select Credit Package",
		"select_raffle" => "Select Raffle Package",
		"global_packages" => "Global Packages",

		// Raffles
		"raffle_ticket" => "Buy ticket",
		"raffle_ended" => "The raffle has ended, the winner is: ",
		"raffle_not_compatible" => "This package is not compatible with one you own. Entry to raffle denied.",
		"raffle_already_own" => "You already own this package. Entry to raffle denied.",
		"raffle_reached_max" => "You have reached the max amount of raffle entries. Entry to raffle denied.",

		// Support
		"create_ticket" => "Create ticket",
		"ticket_closed" => "This ticket is closed.",
		"reply" => "Reply",
		"create" => "Create",

		// Terms of Service
		"tos_edited" => "The ToS has been edited. <a href='tos.php'>Terms of Service</a> accept it before purchasing a package!",
		"tos_must_accept" => "You must accept the ToS before purchasing!",
		"tos_accept" => "Accept",

		// Purchase buttons
		"purchase_paypal" => "Purchase with Paypal",
		"purchase_credits" => "Purchase with Credits",
		"purchase" => "Purchase",
		"buy_sign_in" => "You must be signed in before purchasing!",
		"buy_already_own" => "You already own this package!",
		"buy_not_compatible" => "This package is not compatible with one you own!",
		"buy_they_already_own" => "This person already own this package!",
		"buy_they_not_compatible" => "This package is not compatible with one they own!",

		// Packages
		"buying_someone_else" => "Are you purchasing for someone else?",
		"buying_yourself" => "You are currently purchasing for yourself",
		"buying_for" => "You are currently purchasing for",
		"packages_custom_amount" => "Custom amount",

		"packages_not_available" => "No packages are available for this server.",
		"raffle_not_available" => "No raffle packages available at the moment.",
		"credit_not_available" => "No credit packages available at the moment.",

		// Buttons
		"submit" => "Submit",

		// Profile
		"non_perm_pkg" => "Non-Permanent Package",
		"perm_pkg" => "Permanent Package(s)",
		"acc_info" => "Account Information",
		"pkg_history" => "Package History",
		"acc_credits" => "Credits",
		"transfer_credits" => "Transfer Credits",
		"package" => "Package",

		// Tables
		"id" => "ID",
		"user" => "User",
		"description" => "Description",
		"timestamp" => "Timestamp",
		"action" => "Action",
		"replies" => "Replies",
		"view" => "View",

		// Select boxes
		"select_server" => "Select server:",
		"select_currency" => "Select currency:",
		"select_category" => "Select category:",
		"none" => "None",

		// Modals
		"yes" => "Yes",
		"no" => "No",
		"sure" => "Are you sure?",
		"sure_cur" => "Are you sure you want to delete this currency?",
		"sure_srv" => "Are you sure you want to delete this server?",
		"sure_cat" => "Are you sure you want to delete this category?",

		// Dangerous settings
		"dangerous" => "Dangerous settings",
		"danger_cur" => "Or alternatively, you can delete this currency.",
		"danger_srv" => "Don't delete this server unless no packages are assigned to it!",
		"danger_cat" => "Don't delete this category unless no packages are assigned to it!",
		"delete" => "Delete",

		// Admin nav
		"dashboard" => "Dashboard",
		"general_settings" => "General settings",
		"support_tickets" => "Support tickets",
		"servers" => "Servers",
		"currencies" => "Currencies",
		"categories" => "Categories",
		"packages_and_actions" => "Packages & actions",
		"credit_packages" => "Credit packages",
		"raffles" => "Raffles",
		"theme_editor" => "Theme editor",
		"documentation" => "Documentation",

		// General Settings
		"settings" => "Settings",
		"main_page" => "Main page",
		"integration_settings" => "Integration Settings",
		"ingame_notifications" => "Ingame Notifications",

		// Servers page
		"add_srv" => "Add server",
		"edit_srv" => "Edit server",
		"server_name" => "Server Name",
		"featured_pkg_short" => "Featured pkg",

		// Currency page
		"add_cur" => "Add currency",
		"edit_cur" => "Edit currency",
		"cc" => "Currency Code",

		// Category page
		"add_cat" => "Add category",
		"edit_cat" => "Edit category",
		"cat_name" => "Category Name",

		// Dashboard nav
		"main_dashboard" => "Main dashboard",
		"sale" => "Sale",
		"transactions" => "Transactions",
		"users" => "Users",
		"logs" => "Logs",
		"update_sql" => "Update SQL",
		"other_features" => "Other features",

		// Admin dashboard
		"total" => "Total",
		"full_total" => "Full total",
		"dashboard_text" => "Welcome to the administrator dashboard, this is where you will be able to view fancy stats about your servers' donation activity.",

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

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Get this package for free!",
		"dashboard_revenuegraph" => "Revenue Graph",
		"dashboard_revenuecurrency" => "Shown in your main currency",
		"dashboard_packagesgraph" => "Package Sales",
		"dashboard_serversgraph" => "Servers Sales",
		"between" => "Between",
		"and" => "And",

		/** 
		 * New in 1.4.9
		 */
		"free" => "Free",
		"buy_own_free" => "You already own this free package. You can't claim it twice!",
		
		/**
		 * New in 1.4.9.2
		 */
		"updates" => "Updates",

		/**
		 * New in 1.4.9.3
		 */
		"header_sqlupdate" => "You have an unapplied MySQL update <a href='admin.php?update'>here!</a>",
		"monthly_goal" => "Monthly goal",

		/**
		 * New in 1.4.9.6
		 */
		"payment_success" => "Payment successful!",
		"profile_updated" => "Your profile has been updated.",
		"payment_failed" => "Payment failed!",
		"check_credits" => "Please check that you have enough credits to buy this package!",
		"not_authorised" => "You are not authorized to view this area. Sign in first!",

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

	);

?>
