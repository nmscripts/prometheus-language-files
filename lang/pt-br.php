<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 *
	 * Portuguese Brazillian translation courtesy of GGG Killer.
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
		"home" => "Página Principal",
		"store" => "Loja",
		"buy_credits" => "Comprar Créditos",
		"raffles" => "Sorteios",
		"profile" => "Perfil",
		"support" => "Suporte",
		"admin" => "Administração",
		"sign_out" => "Sair",
		"sign_in" => "Fazer login",
		
		// Header errors and messages
		"not_setup" => "Você não configurou o seu painel apropiadamante! <a href='admin.php?a=gen&settings'>Clique aqui</a> [Admin -> General Settings -> Settings]",
		"header_sandbox" => "O modo Sandbox do PayPal está ativo. Somente use o Sandbox para testes! Você pode desabilitá-lo  <a href='admin.php?a=gen&settings'>aqui</a>",
		"missing_action" => "Um ou mais pacotes está com uma ação faltando!",
		"unfinished_action" => "Você tem uma ação não terminada na página 'Perfil', <a href='profile.php'>aqui</a>",

		// Frontpage
		"welcome" => "Bem Vindo - Faça login",
		"welcome_text" => "Faça login pelo Steam para usar o nosso portal de doações.",

		// News
		"news" => "Notícias",
		"by" => "Por",
		"no_news" => "Nenhuma notícia",
		"no_news_text" => "Não há nenhuma notícia atualmente.",
		"no_news_articles" => "Nenhum artigo de notícia.",
		// Footer
		"tos" => "Termos de Serviço",
		"powered_by" => "Powered by Steam", // Don't think this needs to be changed...

		// Store
		"credits" => "Créditos",
		"featured_pkg" => "Pacote em Destaque",
		"permanent" => "Permanente",
		"non_permanent" => "Não Permanente",
		"select_credit" => "Selecione um pacote de crédito(s)",
		"select_raffle" => "Selecione um tíquete de sorteio",
		"global_packages" => "Pacotes Globais",

		// Raffles
		"raffle_ticket" => "Comprar bilhete",
		"raffle_ended" => "O sorteio terminou, o vencedor é: ",
		"raffle_not_compatible" => "Esse pacote não é compatível com o que você tem. Entrada no sorteio negada.",
		"raffle_already_own" => "Você já possui esse pacote. Entrada no sorteio negada.",
		"raffle_reached_max" => "Você alcançou o limite máximo de entradas em sorteios. Entrada no sorteio negada.",

		// Support
		"create_ticket" => "Criar tíquete",
		"ticket_closed" => "Esse tíquete está fechado.",
		"reply" => "Responder",
		"create" => "Criar",

		// Terms of Service
		"tos_edited" => "Os TdS foram editados. <a href='tos.php'>Terms de Serviço</a> aceite-os antes de comprar um pacote!",
		"tos_must_accept" => "Você deve aceitar os TdS antes de comprar algo!",
		"tos_accept" => "Aceitar",

		// Purchase buttons
		"purchase_paypal" => "Comprar com Paypal",
		"purchase_credits" => "Comprar com Créditos",
		"purchase" => "Comprar",
		"buy_sign_in" => "Você deve estar logado antes de comprar algo!",
		"buy_already_own" => "Você já possui este pacote!",
		"buy_not_compatible" => "Este pacote não é compatível com o que você possui!",
		"buy_they_already_own" => "Esta pessoa já possui este pacote!",
		"buy_they_not_compatible" => "Este pacote não é compatível com o que essa pessoa possui!",

		// Packages
		"buying_someone_else" => "Você está comprando isto para outra pessoa?",
		"buying_yourself" => "Você está atualmente comprando isto para si mesmo",
		"buying_for" => "Você está atualmente comprando isto para",
		"packages_custom_amount" => "Preço variável",
		"packages_not_available" => "Nenhum pacote está disponível para este servidor.",
		"raffle_not_available" => "Nenhum sorteio está disponível para este servidor.",
		"credit_not_available" => "Nenhum pacote de crédito está disponível para este servidor.",

		// Buttons
		"submit" => "Enviar",

		// Profile
		"non_perm_pkg" => "Pacote Não Permanente",
		"perm_pkg" => "Pacote(s) Permanente(s)",
		"acc_info" => "Informações da Conta",
		"pkg_history" => "Histórico de Pacote(s)",
		"acc_credits" => "Créditos",
		"transfer_credits" => "Transferir Créditos",
		"package" => "Pacote(s)",

		// Tables
		"id" => "ID",
		"user" => "Usuário",
		"description" => "Descrição",
		"timestamp" => "Timestamp",
		"action" => "Ação",
		"replies" => "Respostas",
		"view" => "Visualizar",

		// Select boxes
		"select_server" => "Selecione um servidor:",
		"select_currency" => "Selecione uma moeda:",
		"select_category" => "Selecione uma categoria:",
		"none" => "Nenhum(a)",

		// Modals
		"yes" => "Sim",
		"no" => "Não",
		"sure" => "Você tem certeza?",
		"sure_cur" => "Você tem certeza que você quer deletar esta moeda?",
		"sure_srv" => "Você tem certeza que você quer deletar este servidor?",
		"sure_cat" => "Você tem certeza que você quer deletar esta categoria?",

		// Dangerous settings
		"dangerous" => "Configurações perigosas",
		"danger_cur" => "Ou, alternativamente você pode deletar esta moeda.",
		"danger_srv" => "Não delete esse servidor a não ser que nenhum pacote esteja atribuído a ele!",
		"danger_cat" => "Não delete essa categoria a não ser que nenhum pacote esteja atribuído a ela!",
		"delete" => "Deletar",

		// Admin nav
		"dashboard" => "Painel de Controle",
		"general_settings" => "Configurações gerais",
		"support_tickets" => "Tíquetes de suporte",
		"servers" => "Servidores",
		"currencies" => "Moedas",
		"categories" => "Categorias",
		"packages_and_actions" => "Pacotes & ações",
		"credit_packages" => "Pacotes de crédito",
		"raffles" => "Sorteios",
		"theme_editor" => "Editor de tema",
		"documentation" => "Documentação",

		// General Settings
		"settings" => "Configurações",
		"main_page" => "Página Principal",
		"integration_settings" => "Configurações de Integração",
		"ingame_notifications" => "Notificações dentro do jogo",

		// Servers page
		"add_srv" => "Adicionar servidor",
		"edit_srv" => "Editar servidor",
		"server_name" => "Nome do Servidor",
		"featured_pkg_short" => "Pacote em destaque",

		// Currency page
		"add_cur" => "Adicionar moeda",
		"edit_cur" => "Remover moeda",
		"cc" => "Código da moeda",

		// Category page
		"add_cat" => "Adicionar categoria",
		"edit_cat" => "Editar categoria",
		"cat_name" => "Nome da Categoria",

		// Dashboard nav
		"main_dashboard" => "Painel de Controle principal",
		"sale" => "Desconto(s)",
		"transactions" => "Transações",
		"users" => "Usuários",
		"logs" => "Logs",
		"update_sql" => "Atualizar SQL",
		"other_features" => "Outras funções",

		// Admin dashboard
		"total" => "Total",
		"full_total" => "Total geral",
		"dashboard_text" => "Bem vindo ao painel de controle do administrador, este é o lugar onde você vai ser capaz de ver as estatísticas sobre a atividades de doações de seus servidores."

		 /*
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Bem Vindo",
		"need_credits" => "Precisa de mais créditos? <a href='store.php?credits'>Clique aqui!</a>",
		"no_history" => "Nenhum histórico",
		"amount" => "Quantidade",
		"you_have_none" => "Você tem nenhum!",
		"add_cre" => "Adicionar pacote de crédito",
		"edit_cre" => "Editar pacote de crédito",
		"pack_title" => "Título do pacote",
		"price" => "Preço",
		"currency" => "Moeda",
		"sure_cre" => "Você tem certeza que você quer deletar este pacote de crédito?",
		"danger_cre" => "Ou, alternativamente você pode deletar este pacode de crédito.",
		"select_package" => "Selecione um pacote:",
		"choose_cre" => "Selecione um pacote de crédito",
		"brief_desc" => "Decrição breve",
		"amt_of_cre" => "Quantidade de créditos",
		"price_of_pkg" => "Preço do pacote",
		"no_support" => "Você não tem nenhum tíquete de suporte",
		"no_other_available" => "Nenhum outro pacote disponível",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Ganhe este pacote de graça!",
		"dashboard_revenuegraph" => "Gráfico de Ganhos",
		"dashboard_revenuecurrency" => "Mostrado na sua moeda principal",
		"dashboard_packagesgraph" => "Vendas de Pacotes",
		"dashboard_serversgraph" => "Vendas de Servidores",
		"between" => "Entre",
		"and" => "e",

		/** 
		 * New in 1.4.9
		 */
		"free" => "Grátis",
		"buy_own_free" => "Você já possui este pacote. Você não pode pegá-lo duas vezes!",

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
	);
?>
