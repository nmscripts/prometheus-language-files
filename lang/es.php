<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 *
	 * Spanish translation courtesy of Skymax00
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
		"home" => "Inicio",
		"store" => "Tienda",
		"buy_credits" => "Comprar créditos",
		"raffles" => "Sorteos",
		"profile" => "Perfil",
		"support" => "Soporte",
		"admin" => "Admin",
		"sign_out" => "Cerrar sesión",
		"sign_in" => "Iniciar sesión",

		// Header errors and messages
		"not_setup" => "No configuraste tu panel correctamente! <a href='admin.php?a=gen&p=settings'>Haz Clic Aquí</a> [Admin -> Ajustes Generales -> Ajustes]",
		"header_sandbox" => "PayPal Sandbox está activado. Utilice sólo Sandbox para pruebas! Puedes desactivarlo <a href='admin.php?a=gen&p=paypal'>aquí</a>",
		"missing_action" => "Falta una acción en uno o más paquetes.",
		"unfinished_action" => "Tiene una acción sin terminar en la página 'Perfil', <a href='profile.php'>aquí</a>",

		// Frontpage
		"welcome" => "Bienvenido - Iniciar sesión",
		"welcome_text" => "Inicie sesión a través de Steam para utilizar nuestro fácil panel de donación.",

		// News
		"news" => "Noticias",
		"by" => "Por",
		"no_news" => "No hay noticias",
		"no_news_text" => "Actualmente no hay noticias.",
		"no_news_articles" => "No hay artículos de noticias",

		// Footer
		"tos" => "Términos y Condiciones",
		"powered_by" => "Powered by Steam",

		// Store
		"credits" => "Créditos",
		"featured_pkg" => "Paquete destacado",
		"permanent" => "Permanente",
		"non_permanent" => "No permanente",

		"select_credit" => "Seleccione el paquete de créditos",
		"select_raffle" => "Seleccione el paquete de sorteos",
		"global_packages" => "Paquetes globales",

		// Raffles
		"raffle_ticket" => "Comprar ticket",
		"raffle_ended" => "El sorteo ha terminado, el ganador es: ",
		"raffle_not_compatible" => "Este paquete no es compatible con uno que usted posee. Entrada al sorteo denegado.",
		"raffle_already_own" => "Ya tienes este paquete. Entrada al sorteo denegado.",
		"raffle_reached_max" => "Alcanzaste la cantidad máxima de entradas de sorteo. Entrada al sorteo denegado.",

		// Support
		"create_ticket" => "Crear ticket",
		"ticket_closed" => "Este ticket está cerrado.",
		"reply" => "Responder",
		"create" => "Crear",

		// Terms of Service
		"tos_edited" => "Los TyC han sido editados. Acepta los <a href='tos.php'>Términos y Condiciones</a> antes de comprar el paquete!",
		"tos_must_accept" => "Tienes que aceptar los TyC antes de comprar el paquete!",
		"tos_accept" => "Aceptar",

		// Purchase buttons
		"purchase_paypal" => "Comprar con Paypal",
		"purchase_credits" => "Comprar con Créditos",
		"purchase" => "Comprar",
		"buy_sign_in" => "Tienes que estar logueado antes de comprar!",
		"buy_already_own" => "Ya tienes este paquete!",
		"buy_not_compatible" => "Este paquete no es compatible con uno que usted posee!",
		"buy_they_already_own" => "Esta persona ya posee este paquete!",
		"buy_they_not_compatible" => "Este paquete no es compatible con uno que ellos poseen!",

		// Packages
		"buying_someone_else" => "Estás comprando para otra persona?",
		"buying_yourself" => "Actualmente está comprando para usted mismo",
		"buying_for" => "Actualmente está comprando para",
		"packages_custom_amount" => "Cantidad personalizada",

		"packages_not_available" => "No hay paquetes disponibles para este servidor.",
		"raffle_not_available" => "No hay paquetes de sorteos disponibles en este momento.",
		"credit_not_available" => "No hay paquetes de créditos disponibles en este momento.",

		// Buttons
		"submit" => "Enviar",

		// Profile
		"non_perm_pkg" => "Paquete no permanente",
		"perm_pkg" => "Paquete(s) permanente(s)",
		"acc_info" => "Información de la cuenta",
		"pkg_history" => "Historial del paquete",
		"acc_credits" => "Créditos",
		"transfer_credits" => "Transferir créditos",
		"package" => "Paquete",

		// Tables
		"id" => "ID",
		"user" => "Usuario",
		"description" => "Descripción",
		"timestamp" => "Registro de tiempo",
		"action" => "Acción",
		"replies" => "Respuestas",
		"view" => "Ver",

		// Select boxes
		"select_server" => "Seleccionar servidor:",
		"select_currency" => "Seleccionar moneda:",
		"select_category" => "Seleccionar categoría:",
		"none" => "Ninguna",

		// Modals
		"yes" => "Sí",
		"no" => "No",
		"sure" => "Estás seguro?",
		"sure_cur" => "Estás seguro que quieres eliminar esta moneda?",
		"sure_srv" => "Estás seguro que quieres eliminar este servidor?",
		"sure_cat" => "Estás seguro que quieres eliminar esta categoría?",

		// Dangerous settings
		"dangerous" => "Configuración avanzada",
		"danger_cur" => "O bien, puedes eliminar esta moneda.",
		"danger_srv" => "No elimine este servidor a menos que se le asignen paquetes!",
		"danger_cat" => "No elimine esta categoría a menos que no se le asignen paquetes!",
		"delete" => "Eliminar",

		// Admin nav
		"dashboard" => "Panel",
		"general_settings" => "Ajustes generales",
		"support_tickets" => "Soporte de tickets",
		"servers" => "Servidores",
		"currencies" => "Monedas",
		"categories" => "Categorías",
		"packages_and_actions" => "Paquetes & Acciones",
		"credit_packages" => "Paquetes de créditos",
		"raffles" => "Sorteos",
		"theme_editor" => "Editar tema",
		"documentation" => "Documentación",

		// General Settings
		"settings" => "Ajustes",
		"main_page" => "Página principal",
		"integration_settings" => "Ajustes de integración",
		"ingame_notifications" => "Notificaciones ingame",

		// Servers page
		"add_srv" => "Agregar servidor",
		"edit_srv" => "Editar servidor",
		"server_name" => "Nombre del servidor",
		"featured_pkg_short" => "Paquete destacado",

		// Currency page
		"add_cur" => "Agregar moneda",
		"edit_cur" => "Editar moneda",
		"cc" => "Código de moneda",

		// Category page
		"add_cat" => "Agregar categoría",
		"edit_cat" => "Editar categoría",
		"cat_name" => "Nombre de la categoría",

		// Dashboard nav
		"main_dashboard" => "Panel principal",
		"sale" => "Ventas",
		"transactions" => "Transacciones",
		"users" => "Usuarios",
		"logs" => "Logs",
		"update_sql" => "Actualizar SQL",
		"other_features" => "Otras características",

		// Admin dashboard
		"total" => "Total",
		"full_total" => "Total completo",
		"dashboard_text" => "Bienvenido al panel de administración, aquí podrás ver las estadísticas acerca de las donaciones de sus servidores.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Bienvenido",
		"need_credits" => "Necesitas más créditos? <a href='store.php?page=credits'>Clic Aquí!</a>",
		"no_history" => "Sin Historial",
		"amount" => "Cantidad",
		"you_have_none" => "No tienes ninguno!",

		"add_cre" => "Agregar paquete de créditos",
		"edit_cre" => "Editar paquete de créditos",
		"pack_title" => "Título del paquete",
		"price" => "Precio",
		"currency" => "Moneda",
		"sure_cre" => "Estás seguro que deseas eliminar este paquete de créditos?",
		"danger_cre" => "O bien, puedes eliminar este paquete de créditos.",
		"select_package" => "Seleccionar paquete:",
		"choose_cre" => "Elegir paquete de créditos",
		"brief_desc" => "Decripción breve",
		"amt_of_cre" => "Cantidad de créditos",
		"price_of_pkg" => "Precio del paquete",
		"no_support" => "No tienes tickets de soporte",
		"no_other_available" => "No hay otros paquetes disponibles",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Obtenga este paquete gratis!",
		"dashboard_revenuegraph" => "Gráfico de ingresos",
		"dashboard_revenuecurrency" => "Se muestra en la moneda principal",
		"dashboard_packagesgraph" => "Ventas de Paquetes",
		"dashboard_serversgraph" => "Ventas de Servidores",
		"between" => "Entre",
		"and" => "Y",

		/** 
		 * New in 1.4.9
		 */
		"free" => "Gratis",
		"buy_own_free" => "Ya tienes este paquete gratuito. No puedes reclamarlo dos veces!",
		
		/**
		 * New in 1.4.9.2
		 */
		"updates" => "Actualizaciones",

		/**
		 * New in 1.4.9.3
		 */
		"header_sqlupdate" => "Tienes una actualización de MySQL no aplicada, actualízalo <a href='admin.php?update'>aquí!</a>",
		"monthly_goal" => "Objetivo mensual",

		/**
		 * New in 1.4.9.6
		 */
		"payment_success" => "Pago exitoso!",
		"profile_updated" => "Tu perfil ha sido actualizado.",
		"payment_failed" => "Pago fallido!",
		"check_credits" => "Por favor, verifica que tengas suficientes créditos para comprar este paquete!",
		"not_authorised" => "No tienes autorización para ver esta área. Inicia sesión primero!",

		/**
		 * New in 1.5
		 */
		"wiki" => "Wiki",
		"no_graph_info" => "No hay información gráfica",
		"no_graph_info_text" => "No se muestra la información gráfica debido a que no hubo ninguna transacción!",
		"paymentwall_purchase" => "Comprar con Paymentwall",
		"stripe_purchase" => "Comprar con Stripe",
		"payment_gateways" => "Métodos de Pago",
		"advanced" => "Avanzado",
		"no_servers" => "No hay servidores disponibles en este momento.",
		"entries" => "entradas",
		"you_can_enter" => "Puedes entrar",
		"times_more" => "veces más",
		"dashboard_creditsrevenue" => "Este gráfico también compara los créditos gastados con el dinero gastado. Aunque los créditos se adquieren con dinero. (Créditos = <font color='#9c9c9c'><b>Gray</b></font>, Dinero = <font color='#c10000'><b>Red</b></font>)",
		"pkg_discounted" => "Este paquete es descontado porque usted lo posee",

		"compatible_text" => "Si es propietario de este paquete, no podrás obtener los paquetes mostrados a continuación",
		"not_compatible" => "No es compatible con",

		"packages" => "Paquetes",
		"upgradeable_text" => "Si posee el paquete seleccionado, obtiene éste a un precio descontado del precio de los paquetes seleccionados",
		"upgradeable" => "Actualizable con",

		"assign_actions" => "Asignar acciones",
		"actions_text" => "Asigne qué acciones desea que este paquete realice después de haber sido comprado por un usuario.",
		"actions" => "Acciones",
		"servers" => "Servidores",
		"label_amount" => "Cantidad de etiqueta",
		"add_package" => "Agregar paquete",
		"edit_package" => "Editar paquete",
		"labels" => "Etiquetas",
		"title" => "Título",
		"category" => "Categoría",
		"no_packages" => "Actualmente no tiene paquetes en el sistema",

		/**
		 * New in 1.5.0.6
		 */
		"signin" => "Iniciar sesión",
		"welcome_signin" => "Debe iniciar sesión primero para poder comprar cualquier paquete",
		"blacklist_notext" => "Necesitas ingresar un Steam64 o SteamID válido a la blacklist!",
		"blacklist_success" => "Has puesto a esta persona en la blacklist correctamente",
		"blacklisted_you" => "No puedes comprar ningún paquete ya que estás en la blacklist de esta comunidad.",
		"blacklisted_them" => "Esta persona está en la blacklist de esta comunidad, no puedes comprarle(s)",

		"recent_donators" => "Donadores recientes",
		"name" => "Nombre",
		"recent_none" => "No hubo donadores recientes",
		"raffle_free" => "Ingrese gratis!",

		/**
		 * New in 1.5.0.8
		 */
		"top_donators" => "Los mejores donadores",
		"top_none" => "No hay mejores donadores",

		/**
		 * New in 1.5.0.9
		 */
		"step" => "Paso",

		/**
		 * New in 1.5.1
		 */
		"permission_groups" => "Grupos de permisos",
		"add_permission" => "Agregar grupo de permisos",
		"edit_permission" => "Editar grupo de permisos",
		"permissions" => "Permisos",
		"no_perm" => "No tienes suficientes permisos para realizar esta acción",

		/**
		 * New in 1.5.1.2
		 */
		"select_gateway" => "Seleccione el método de pago",

		/**
		 * New in 1.5.2
		 */
		"buy_disable" => "Deshabilitar paquetes",
		"buy_disable_text" => "Deshabilite estos paquetes si compra este paquete",

		"credits_doesntexist" => "Este usuario no existe en este sistema.",
		"credits_yourself" => "No puedes transferirte créditos a ti mismo.",
		"credits_steamid" => "Probar con otro SteamID",
		"credits_transferringto" => "Transferir a:",

		"type" => "Tipo",
		"gateway" => "Método",
		"no_users" => "No se encontraron usuarios",

		"view_profile" => "Ver perfil",
		"view_blacklist" => "Ver blacklist",

		"manage" => "Administrar",
		"users_search" => "Buscar por nombre, Steam64 o SteamID",

		"transaction" => "Transacción",
		"delivered" => "Entregado",
		"state" => "Estado",
		"assign_package" => "Asignar paquete",
		"set_credits" => "Establecer créditos",
		"give_ticket" => "Dar ticket",
		"del_inactive_actions" => "Eliminar acciones inactivas",

		"select_pkg" => "Seleccionar paquete",
		"do_assign_actions" => "Asignar acciones",
		"dont_assign_actions" => "No asignar acciones",
		"clone_expiretime" => "Tiempo de expiración del clon del último paquete del mismo tipo",
		"assign" => "Asignar",

		"set" => "Establecer", 
		"disable" => "Deshabilitar",
		"enable" => "Habilitar",
		"inactive_everyone" => "Establecer inactivo para todos",
		"del" => "Eliminar",
		"edit" => "Editar",

		"sale_settings" => "Configuración de venta",
		"sale_text" => "Elija a que paquetes desea que la venta se aplique.",
		"message" => "Mensaje",
		"percentage" => "Porcentaje",
		"end_date" => "Fecha que finaliza",

		"update" => "Actualizar",
		"automatic_updates" => "Actualizaciones automáticas",
		"dl_lua" => "Descargar el último lua",
		"dl_web" => "Descargar la última web",
		"no_write_perm" => "Su carpeta de actualizaciones no tiene permisos de escritura! Las actualizaciones automáticas no funcionarán a menos que lo cambie a 777. <br> Sin embargo, puedes utilizar este botón para descargar manualmente la actualización",
		"newest_version" => "La versión más reciente es:",

		"test_message" => "Enviar mensaje de prueba al servidor",

		/**
		 * New in 1.5.2.2
		 */
		
		"find_more" => "Descubre más!",

		/**
		 * New in 1.5.3
		 */
		
		"duplicate" => "Duplicar",
		"other" => "Otro",
		"someone_else" => "Sin embargo, todavía puede comprarlo para otro usuario",

		/**
		 * New in 1.5.4 -- Do not replace $1, $2, $3 etc, they get replaced with numbers and stuff automatically, so keep them there!
		 */
		
		"here" => "aquí", // This is $1 in 'job_already_created' because it's wrapped in a link
		"job_already_created" => "Ya has creado un trabajo personalizado. Si desea proceder directamente al checkout, haga clic en $1. De lo contrario, puede crear uno nuevo",
		
		"general_info" => "Información general",
		"preferences" => "Preferencias",

		"job_name" => "Nombre del trabajo",
		"chat_cmd" => "Comando de chat para convertirse en este trabajo",
		"job_desc" => "Descripción del trabajo",
		"job_colour" => "Color del trabajo",

		"weapons" => "Armas",
		"models" => "Modelos",
		"model" => "Modelo",
		
		"job_costs" => "Cuesta $1 o $2 créditos",

		"friends" => "Amigos",
		"friends_max" => "<h6>Amigos - $1 máx</h6>",
		"friends_add" => "Para cada amigo que agregues, agrega $1 o $2 créditos al precio final",
		"friends_not" => "No puedes agregar amigos a este paquete.",

		"salary" => "Sueldo",
		"salary_static" => "Su sueldo será $1",
		"salary_base" => "El sueldo base es $1. Por cada número que subas, agrega $2 o $3 créditos al precio final",
		"salary_max" => "<h6>Sueldo - $1 máx veces a escala</h6>",
		"salary_current" => "Nuestro salario actual es: $1",

		"license" => "Licencia",
		"license_included" => "Obtienes la licencia incluida en el trabajo",
		"license_include" => "Incluir licencia - Cuesta $1 o $2 créditos",
		"license_no" => "No obtienes ninguna licencia",

		"payment_confirmation" => "Confirmación de pago",
		"job_total" => "Su total actual es $1 o $2 créditos",
		"job_proceed" => "Proceder al pago",

		/**
		 * New in 1.5.5
		 */
		
		"job_total_nocredits" => "Su total actual es $1",
		"job_total_onlycredits" => "Su total actual es $1 créditos",
		
		"earned_total" => "TOTAL DE GANANCIAS",
		"earned_week" => "GANANCIAS EN ESTA SEMANA",
		"earned_month" => "GANANCIAS EN ESTE MES",

		"real_transaction" => "Cuenta como una transacción real",
		"not_real_transaction" => "No cuenta como una transacción real (No agregará dinero a ninguna estadística)",

		/**
		 * New in 1.6
		 */

		"active_everyone" => "Establecer activo para todos",
		"buy_others_disabled" => "La compra para otros está desactivada en este sistema",
		"job_skip_prize" => "Omitir - Haga clic en este botón si no desea reclamar el premio del sorteo",

		"move_packages" => "Haga clic en $1 para mover los paquetes alrededor",

		"add" => "Agregar",
		"edit" => "Editar",

		// Theme
		"theme" => "Tema",
		"danger_theme" => "No elimines este tema a menos que no lo estés usando actualmente!",
		"sure_theme" => "Estás seguro que quieres eliminar este tema?",
		"theme_name" => "Nombre del tema",
		
		"edit_theme" => "Editar tema",
		"add_theme" => "Agregar tema",
		"select_theme" => "Seleccionar tema",

		// Imprint page
		"imprint" => "Imprimir",
		"enable_imprint" => "Habilitar impresión",
		"company_name" => "Nombre de la empresa",
		"street_address" => "Dirección",
		"post_address" => "Dirección postal",
		"country" => "País",
		"trade_register" => "Registro Mercantil",
		"company_id" => "ID de la empresa",
		"company_ceo" => "CEO",
		"contact_email" => "Email de contacto",
		"contact_phone" => "Teléfono de contacto",

		/**
		 * New in 1.6.1
		 */
		"game" => "Juego",
		"server_ip" => "IP del servidor",
		"server_port" => "Puerto del servidor",
		"server_rcon" => "RCon del servidor",

		"edit_raffle" => "Editar sorteo",
		"add_raffle" => "Agregar sorteo",
		"select_raffle" => "Seleccionar sorteo:",

		"package_cantbuy" => "No puede comprar este paquete sin tener uno de los siguientes: $1",
		"package_they_cantbuy" => "No pueden comprar este paquete sin tener uno de los siguientes: $1",

		"hide" => "Si no tiene ninguno de estos paquetes, no puede obtener este",
		"hide_text" => "Si no tienes uno de los paquetes mostrados a continuación, no podrás comprar este paquete",

		"your_spendings" => "Tus gastos en los últimos 5 meses",
		"spendings_currency" => "Estos gastos se muestran en la moneda principal de este sitio web [$1]. Este gráfico compara los créditos gastados con el dinero gastado. Aunque los créditos sean adquiridos con dinero. (Créditos = <font color='#9c9c9c'><b>Gray</b></font>, Dinero = <font color='#c10000'><b>Red</b></font>)",
	
		"spent_total" => "TOTAL GASTADO",
		"spent_week" => "GASTADO EN ESTA SEMANA",
		"spent_month" => "GASTADO EN ESTE MES",

		/**
		 * New in 1.6.1.5
		 */
		"advent_calendar" => "Calendario de adviento",
		"advent" => "Adviento",
		"day" => "Día",
		"advent_opened" => "Has abierto el día $1 y recibido $2!",
		"advent_nopkg" => "Este día no tiene ningún paquete asignado, por favor póngase en contacto con el administrador de su comunidad sobre esto",
		"advent_text" => "Consigue un paquete gratuito todos los días a partir del 1 de diciembre hasta Navidad, el 24!",

		/**
		 * New in 1.6.2
		 */
		"coupons" => "Cupones",
		"add_cou" => "Añadir cupón",
		"edit_cou" => "Editar cupón",
		"select_cou" => "Seleccionar cupón",
		"sure_cou" => "Seguro que quieres eliminar este cupón?",
		"coupon_text" => "Si tienes un cupón, puedes agregarlo aquí",

	);

?>
