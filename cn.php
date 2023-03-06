<?php

/**
 * Language array
 * @var array
 *
 * When updating this, ONLY change the values on the right hand side.
 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
 * If the new values are not set it will fallback to the default ones.
 *
 * Norwegian bokmål translation courtesy of myself.
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
    "home" => "首页",
    "store" => "商店",
    "buy_credits" => "购买积分",
    "raffles" => "抽奖",
    "profile" => "配置文件",
    "support" => "支持",
    "admin" => "管理员",
    "sign_out" => "登出",
    "sign_in" => "登入",

    // Header errors and messages
    "not_setup" => "您没有正确设置面板！<a href='admin.php？a=gen&p=settings'>点击这里</a> [管理员 -> 常规设置 -> 设置]",
    "header_sandbox" => "已启用PayPal沙盒。仅使用沙盒进行测试！您可以禁用它<a href='admin.php？a=gen&p=PayPal'>here</a>",
    "missing_action" => "一个或多个功能失去作用",
    "unfinished_action" => "您在'个人资料'页面中有一个未完成的操作，<a href='profile.php'>here</a>",

    // Frontpage
    "welcome" => "欢迎登陆",
    "welcome_text" => "可以通过登录Steam来进行赞助",

    // News
    "news" => "新闻",
    "by" => "来自",
    "no_news" => "没有消息",
    "no_news_text" => "目前没有新的消息",
    "no_news_articles" => "没有新闻篇章",

    // Footer
    "tos" => "服务条款",
    "powered_by" => "由steam提供动力",

    // Store
    "credits" => "积分",
    "featured_pkg" => "功能",
    "permanent" => "永久",
    "non_permanent" => "非永久",

    "select_credit" => "选择积分套餐",
    "global_packages" => "通用套餐",

    // Raffles
    "raffle_ticket" => "购票",
    "raffle_ended" => "抽奖结束,获胜者是: ",
    "raffle_not_compatible" => "这个套餐和你拥有的套餐不相符，已拒绝您的抽奖请求",
    "raffle_already_own" => "您已拥有此套餐，已拒绝您的抽奖请求",
    "raffle_reached_max" => "您已达到抽奖最大次数，已拒绝您的抽奖请求",

    // Support
    "create_ticket" => "创建您的工单",
    "ticket_closed" => "该工单已关闭.",
    "reply" => "回复",
    "create" => "创建",

    // Terms of Service
    "tos_edited" => "服务条款已更新。<a href='tos.php'>服务条款</a>在购买套餐之前接受它！",
    "tos_must_accept" => "您必须在购买前接受服务条款！",
    "tos_accept" => "接受",

    // Purchase buttons
    "purchase_paypal" => "用paypal购买",
    "purchase_credits" => "用积分购买",
    "purchase" => "购买",
    "buy_sign_in" => "你必须在购买前登录",
    "buy_already_own" => "您已经拥有这个套餐了！",
    "buy_not_compatible" => "此套餐与您拥有的套餐不兼容！",
    "buy_they_already_own" => "这个人已拥有此套餐",
    "buy_they_not_compatible" => "此套餐与这个人拥有的套餐不兼容！",

    // Packages
    "buying_someone_else" => "您目前正在为他人购买",
    "buying_yourself" => "您目前正在为自己购买",
    "buying_for" => "您目前正在购买",
    "packages_custom_amount" => "自定义金额",

    "packages_not_available" => "没有可用于此服务器的套餐",
    "raffle_not_available" => "目前没有可用的抽奖套餐",
    "credit_not_available" => "目前没有可用的积分套餐",

    // Buttons
    "submit" => "提交",

    // Profile
    "non_perm_pkg" => "非永久套餐",
    "perm_pkg" => "永久套餐",
    "acc_info" => "账户信息",
    "pkg_history" => "套餐历史记录",
    "acc_credits" => "积分",
    "transfer_credits" => "转移积分",
    "package" => "套餐",

    // Tables
    "id" => "ID",
    "user" => "用户",
    "description" => "描述",
    "timestamp" => "时间戳",
    "action" => "动作",
    "replies" => "回复",
    "view" => "检视",

    // Select boxes
    "select_server" => "选择服务器:",
    "select_currency" => "选择货币:",
    "select_category" => "选择类别:",
    "none" => "无",

    // Modals
    "yes" => "是",
    "no" => "否",
    "sure" => "你确定吗",
    "sure_cur" => "您确定要删除此货币吗？",
    "sure_srv" => "确实要删除此服务器吗？",
    "sure_cat" => "确实要删除此类别吗？",

    // Dangerous settings
    "dangerous" => "危险设置",
    "danger_cur" => "或者，您可以删除此货币。",
    "danger_srv" => "除非没有为其分配任何套餐，否则不要删除此服务器！",
    "danger_cat" => "除非未为其分配任何套餐，否则不要删除此类别！",
    "delete" => "删除",

    // Admin nav
    "dashboard" => "控制面板",
    "general_settings" => "常规设置",
    "support_tickets" => "支持票证",
    "currencies" => "服务器",
    "categories" => "类别",
    "packages_and_actions" => "套餐和操作",
    "credit_packages" => "积分套餐",
    "theme_editor" => "主题编辑器",
    "documentation" => "文档",

    // General Settings
    "settings" => "设置",
    "main_page" => "主页",
    "integration_settings" => "集成设置",
    "ingame_notifications" => "游戏内通知",

    // Servers page
    "add_srv" => "添加服务器",
    "edit_srv" => "编辑服务器",
    "server_name" => "服务器名称",
    "featured_pkg_short" => "功能",

    // Currency page
    "add_cur" => "添加货币",
    "edit_cur" => "编辑货币",
    "cc" => "货币代码",

    // Category page
    "add_cat" => "添加类别",
    "edit_cat" => "编辑类别",
    "cat_name" => "类别名称",

    // Dashboard nav
    "main_dashboard" => "控制面板",
    "sale" => "销售",
    "transactions" => "交易",
    "users" => "用户",
    "logs" => "日志",
    "update_sql" => "更新数据库",
    "other_features" => "其他功能",

    // Admin dashboard
    "total" => "总计",
    "full_total" => "详细总计",
    "dashboard_text" => "欢迎来到管理员控制面板，在这里您可以查看有关服务器捐赠活动的统计数据。",

    /**
     * New in 1.4.7.2
     */
    "welcome_main" => "欢迎",
    "need_credits" => "需要更多积分？<a href='store.php？page=credits'>点击这里！</a>",
    "no_history" => "无历史",
    "amount" => "金额",
    "you_have_none" => "你没有",

    "add_cre" => "添加积分套餐",
    "edit_cre" => "编辑积分套餐",
    "pack_title" => "套餐标题",
    "price" => "价格",
    "currency" => "货币",
    "sure_cre" => "您确定要删除此积分套餐吗",
    "danger_cre" => "或者，您可以删除此积分套餐",
    "select_package" => "选择套餐:",
    "choose_cre" => "选择积分套餐",
    "brief_desc" => "简要说明",
    "amt_of_cre" => "积分金额",
    "price_of_pkg" => "套餐价格",
    "no_support" => "您没有支持票证",
    "no_other_available" => "没有其他可用套餐",

    /**
     * New in 1.4.8
     */
    "purchase_free" => "免费获取此套餐",
    "dashboard_revenuegraph" => "收入图表",
    "dashboard_revenuecurrency" => "以您的主要货币显示",
    "dashboard_packagesgraph" => "套餐销售",
    "dashboard_serversgraph" => "服务器销售",
    "between" => "之间",
    "and" => "和",

    /**
     * New in 1.4.9
     */
    "free" => "免费",
    "buy_own_free" => "您已经获得过一次该免费套餐了，不能获取第二次",

    /**
     * New in 1.4.9.2
     */
    "updates" => "更新",

    /**
     * New in 1.4.9.3
     */
    "header_sqlupdate" => "您有一个未应用的 MySQL 更新<a href='admin.php？update'>here！</a>",
    "monthly_goal" => "每月目标",

    /**
     * New in 1.4.9.6
     */
    "payment_success" => "付款成功!",
    "profile_updated" => "您的个人资料已更新",
    "payment_failed" => "付款失败!",
    "check_credits" => "请检测您是否有足够的积分",
    "not_authorised" => "您无权查看此处。先登录！",

    /**
     * New in 1.5
     */
    "wiki" => "维基百科",
    "no_graph_info" => "无图形信息",
    "no_graph_info_text" => "由于没有任何交易，因此不显示图形信息！",
    "paymentwall_purchase" => "使用Paymentwall付款",
    "stripe_purchase" => "使用Stripe购买",
    "payment_gateways" => "支付途径",
    "advanced" => "高级",
    "no_servers" => "目前没有可用的服务器.",
    "entries" => "条例",
    "you_can_enter" => "您可以进入",
    "times_more" => "更多时间",
    "dashboard_creditsrevenue" => "此图还比较了花费的积分和花费的金额。虽然学分是用金钱获得的。（积分 = <字体颜色='#9c9c9c'><b>灰色</b></字体>， 钱 = <字体颜色='#c10000'><b>红</b></字体>）“，
    "pkg_discounted“ => ”此套餐打折，因为您拥有",

    "compatible_text" => "如果您拥有此套餐，则无法获得下面选择的套餐",
    "not_compatible" => "不兼容",

    "packages" => "套餐",
    "upgradeable_text" => "如果您拥有所选套餐，您将以所选套餐价格的折扣价获得此套餐",
    "upgradeable" => "可升级",

    "assign_actions" => "分配操作",
    "actions_text" => "分配您希望此包在玩家购买后执行的操作.",
    "actions" => "操作",
    "servers" => "服务器",
    "label_amount" => "标签金额",
    "add_package" => "添加套餐",
    "edit_package" => "编辑套餐",
    "labels" => "标签",
    "title" => "标题",
    "category" => "类别",
    "no_packages" => "当前系统上没有套餐",

    /**
     * New in 1.5.0.6
     */
    "signin" => "登录",
    "welcome_signin" => "您需要先登录才能购买套餐",
    "blacklist_notext" => "您需要输入有效的 Steam64 或 SteamID 才能列入黑名单",
    "blacklist_success" => "您已成功将此人列入黑名单",
    "blacklisted_you" => "您被列入黑名单，无法在此社区上购买任何套餐",
    "blacklisted_them" => "这个人被这个社区列入黑名单，你不能为他购买",

    "recent_donators" => "最近的捐赠者",
    "name" => "名称",
    "recent_none" => "最近没有任何捐赠者",
    "raffle_free" => "免费!",

    /**
     * New in 1.5.0.8
     */
    "top_donators" => "顶级捐赠者",
    "top_none" => "没有顶级捐赠者",

    /**
     * New in 1.5.0.9
     */
    "step" => "步",

    /**
     * New in 1.5.1
     */
    "permission_groups" => "权限组",
    "add_permission" => "添加权限组",
    "edit_permission" => "编辑权限组",
    "permissions" => "权限",
    "no_perm" => "对不起，恐怕我不能让你这样做（权限不足）",

    /**
     * New in 1.5.1.2
     */
    "select_gateway" => "选择付款方式",


    /**
     * New in 1.5.2
     */
    "buy_disable" => "禁用套餐",
    "buy_disable_text" => "如果您购买此套餐，请禁用这些套餐",

    "credits_doesntexist" => "此系统上不存在此用户.",
    "credits_yourself" => "你不能将积分转让给自己.",
    "credits_steamid" => "尝试另一个 SteamID",
    "credits_transferringto" => "正在转移到：",

    "type" => "类型",
    "gateway" => "途径",
    "no_users" => "未找到用户",

    "view_profile" => "查看个人资料",
    "view_blacklist" => "查看黑名单",

    "manage" => "管理",
    "users_search" => "搜索名称，steam-64或steamID",

    "transaction" => "事务",
    "delivered" => "已交付",
    "state" => "状态",
    "assign_package" => "分配套餐",
    "set_credits" => "设置积分",
    "give_ticket" => "赠票",
    "del_inactive_actions" => "删除非活动操作",

    "select_pkg" => "选择套餐",
    "do_assign_actions" => "分配操作",
    "dont_assign_actions" => "不分配操作",
    "clone_expiretime" => "克隆相同类型最新套餐的过期时间",
    "assign" => "分配",

    "set" => "设置",
    "disable" => "禁用",
    "enable" => "启用",
    "inactive_everyone" => "为所有人设置非活动状态",
    "del" => "删除",

    "sale_settings" => "销售设置",
    "sale_text" => "选择您希望销售适用的套餐.",
    "message" => "消息",
    "percentage" => "百分比",
    "end_date" => "结束日期",

    "update" => "更新",
    "automatic_updates" => "自动更新",
    "dl_lua" => "更新lua",
    "dl_web" => "更新网站",
    "no_write_perm" => "您的更新文件夹没有写入权限！自动更新将不起作用，除非您将其 chmod 为 777。<br>但是，您可以使用此按钮手动下载更新:",
    "newest_version" => "最新可用版本是：",

    "test_message" => "将测试消息发送到服务器",

    /**
     * New in 1.5.2.2
     */

    "find_more" => "了解更多！",

    /**
     * New in 1.5.3
     */

    "duplicate" => "重复",
    "other" => "其他",
    "someone_else" => "但是，您仍然可以为其他人购买",

    /**
     * New in 1.5.4 -- Do not replace $1, $2, $3 etc, they get replaced with numbers and stuff automatically, so keep them there!
     */

    "custom_job" => "自定义职业",

    "here" => "这里", // 这是 $1 的”job_already_created“，因为它包装在一个链接中
    "job_already_created" => "您已经创建了一个自定义职业。如果您想直接结帐，请单击 $1。否则你可以创建一个新的",

    "general_info" => "一般信息",
    "preferences" => "首选项",

    "job_name" => "职业名称",
    "chat_cmd" => "聊天命令成为此职业",
    "job_desc" => "职业描述",
    "job_colour" => "职业颜色",

    "weapons" => "武器",
    "models" => "模型",
    "model" => "模型",

    "job_costs" => "花费 $1 或 $2 积分",

    "friends" => "朋友",
    "friends_max" => "<h6>朋友 - 最多 $1</h6>",
    "friends_add" => "对于您添加的每个朋友，它会在最终价格上增加 $1 或 $2 的积分",
    "friends_not" => "您不得在此套餐中添加任何朋友",

    "salary" => "薪水",
    "salary_static" => "你的薪水将是 $1",
    "salary_base" => "基本工资是 $1。对于您每增加一个数字，它将在最终价格上增加 $2 或 $3 的积分",
    "salary_max" => "<h6>薪水 - $1 最大缩放次数</h6>",
    "salary_current" => "您目前的薪水是：$1",

    "license" => "许可证",
    "license_included" => "您获取的职业中包含的许可证",
    "license_include" => "包括许可证 - 费用为 $1 或 $2 积分",
    "license_no" => "Du får ikke en lisens",

    "payment_confirmation" => "Betalingskonfirmasjon",
    "job_total" => "Din totale sum er $1 eller $2 credits",
    "job_proceed" => "您没有获得许可证",

    /**
     * New in 1.5.5
     */

    "job_total_nocredits" => "您当前的总额是 $1",
    "job_total_onlycredits" => "您当前的总数是 $1 积分",

    "earned_total" => "总收入",
    "earned_week" => "本周收入",
    "earned_month" => "本月收入",

    "real_transaction" => "只算真正的收入",
    "not_real_transaction" => "不算真正的交易（不会为任何统计数据增加资金）",

    /**
     * New in 1.6
     */

    "active_everyone" => "为所有人设置活动",
    "buy_others_disabled" => "在此系统上禁用为他人购买",
    "job_skip_prize" => "跳过 - 如果您不想领取此抽奖奖品，请仅单击此按钮",

    "move_packages" => "点击 $1 移动包裹",

    "add" => "添加",
    "edit" => "编辑",

    // Theme
    "theme" => "主题",
    "danger_theme" => "除非您当前未使用它，否则不要删除此主题！",
    "sure_theme" => "您确定要删除此主题吗？",
    "theme_name" => "主题名称",

    "edit_theme" => "编辑主题",
    "add_theme" => "添加主题",
    "select_theme" => "选择主题",

    // Imprint page
    "imprint" => "印记",
    "enable_imprint" => "启用印记",
    "company_name" => "公司名称",
    "street_address" => "街道地址",
    "post_address" => "邮政地址",
    "country" => "国家",
    "trade_register" => "贸易登记",
    "company_id" => "公司",
    "company_ceo" => "CEO",
    "contact_email" => "公司邮箱",
    "contact_phone" => "公司电话",

    /**
     * New in 1.6.1
     */
    "game" => "游戏",
    "server_ip" => "服务器 IP",
    "server_port" => "服务器 端口",
    "server_rcon" => "服务器 RCon",

    "edit_raffle" => "编辑抽奖",
    "add_raffle" => "添加抽奖",
    "select_raffle" => "选择抽奖:",

    "package_cantbuy" => "如果不拥有以下物品之一，您将无法购买此套餐：$1",
    "package_they_cantbuy" => "如果不拥有以下物品之一，他们就无法购买此套餐：$1",

    "hide" => "如果您不拥有这些套餐中的任何一个，则无法获得此套餐",
    "hide_text" => "如果您不拥有下面选择的套餐之一，则无法购买此套餐",

    "your_spendings" => "您过去 5 个月的支出",
    "spendings_currency" => "这些支出以本网站主要货币 [$1] 显示。此图将花费的积分与花费的金额进行比较。虽然积分是用钱获得的。（积分 = <字体颜色='#9c9c9c'><b>灰色</b></字体>， 钱 = <字体颜色='#c10000'><b>红</b></字体>）",

    "spent_total" => "总支出",
    "spent_week" => "周支出",
    "spent_month" => "月支出",

    /**
     * New in 1.6.1.5
     */
    "advent_calendar" => "基督降临历",
    "advent" => "降临",
    "day" => "日",
    "advent_opened" => "您开盘了 $1 并收到了 $2 ",
    "advent_nopkg" => "这一天没有分配任何包裹，请就此联系您社区的管理员",
    "advent_text" => "从 1 月 24 日到平安夜、<> 日，每天获得一个免费套餐",

    /**
     * New in 1.6.2
     */
    "coupons" => "优惠券",
    "add_cou" => "添加优惠券",
    "edit_cou" => "编辑优惠券",
    "select_cou" => "选择优惠券",
    "sure_cou" => "您确定要删除此优惠券吗？",
    "coupon_text" => "如果您有优惠券代码，可以将其添加到此处:)",

    /**
     * New in 1.6.3.23
     */
    "privacy" => "隐私政策",
    "enable_privacy" => "启用隐私政策",

    /**
     * New in 1.6.3.25
     */
    "link_expire" => "链接过期时间",
    "link_expire_text" => "如果您拥有任何选定的套餐，并且它们尚未过期，则此套餐将其过期时间添加到此套餐并停用其他套餐",

    /**
     * New in 1.6.4
     */
    "advent_opened_both" => "您已经打开了 $1 天并获得 $2 和 $3 积分！",
    "advent_opened_credits" => "您已经打开了 $1 天并获得 $2 积分！",
    "advent_opened_nothing" => "您已经打开了一天 $1 不幸的是没有收到任何:(",

    /**
     * New in 1.7.6
     */
    "hightolow" => "价格（从高到低）",
    "lowtohigh" => "价格（从低到高）",
    "categories_store" => "类别",
    "sort_by" => "排序方式",
    "search_by" => "搜索",
    "category_all" => "全部",
    "id_search" => "ID (默认)",
    "search_one" => "搜索（标题、说明、标签）",
    "no_description" => "无可用描述",
);
