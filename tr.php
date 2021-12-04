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
    "home" => "Ana Sayfa",
    "store" => "Mağaza",
    "buy_credits" => "Kredi Al",
    "raffles" => "Çekilişler",
    "profile" => "Profil",
    "support" => "Destek",
    "admin" => "Yetkili",
    "sign_out" => "Çıkış Yap",
    "sign_in" => "Giriş Yap",

    // Header errors and messages
    "not_setup" => "Panelinizi doğru düzgün bir şekilde kurmadınız! <a href='admin.php?a=gen&p=settings'>Buraya Tıkla</a> [Yetkili -> Genel Ayarlar -> Ayarlar]",
    "header_sandbox" => "PayPal Sandbox etkinleştirildi. Sandboxı sadece test için kullan! Onu <a href='admin.php?a=gen&p=paypal'>buradan</a> devre dışı bırakabilirsin",
    "missing_action" => "Bir ya da daha fazla pakette bir işlem eksik!",
    "unfinished_action" => "'Profil' kısmında tamamlamadığın bir şey var. Profiline gitmek için <a href='profile.php'>buraya tıkla</a>",

    // Frontpage
    "welcome" => "Hoşgeldin - Giriş Yap",
    "welcome_text" => "Kolay bağış portalımızı kullanmak için steam ile giriş yapın.",

    // News
    "news" => "Haberler",
    "by" => "Yazar:",
    "no_news" => "Yeni Haber Yok",
    "no_news_text" => "Şu anda hiç haber yok.",
    "no_news_articles" => "Haber makalesi yok.",

    // Footer
    "tos" => "Kullanım Şartları",
    "powered_by" => "Steam Tarafından Desteklenmektedir",

    // Store
    "credits" => "Kredi",
    "featured_pkg" => "Öne Çıkan Paket",
    "permanent" => "Kalıcı",
    "non_permanent" => "Geçici",

    "select_credit" => "Kredi paketi seç",
    "global_packages" => "Genel Paketler",

    // Raffles
    "raffle_ticket" => "Bilet al",
    "raffle_ended" => "Çekiliş sona erdi. Kazanan: ",
    "raffle_not_compatible" => "Bu paket sahip olduğunuz bir paketle uyumlu değil. Çekilişe giriş reddedildi.",
    "raffle_already_own" => "Zaten bu pakete sahipsin. Çekilişe giriş reddedildi.",
    "raffle_reached_max" => "Maksimum çekilişe katılma sayısını aştınız. Çekilişe giriş reddedildi.",

    // Support
    "create_ticket" => "Destek talebi oluştur",
    "ticket_closed" => "Bu destek talebi kapandı.",
    "reply" => "Cevapla",
    "create" => "Oluştur",

    // Terms of Service
    "tos_edited" => "Kullanım şartları güncellendi. <a href='tos.php'>Kullanım Şartları</a> bir paket almadan önce kabul et!",
    "tos_must_accept" => "Satın almadan önce kullanım şartlarını kabul etmelisin!",
    "tos_accept" => "Kabul Et",

    // Purchase buttons
    "purchase_paypal" => "Paypal ile satın al",
    "purchase_credits" => "Kredi ile satın al",
    "purchase" => "Satın Al",
    "buy_sign_in" => "Satın almadan önce giriş yapmalısın!",
    "buy_already_own" => "Zaten bu pakete sahipsin!",
    "buy_not_compatible" => "Bu paket sahip olduğun bir paket ile uyuşmuyor!",
    "buy_they_already_own" => "Bu pakete zaten sahipsin!",
    "buy_they_not_compatible" => "Bu paket sahip olduğun bir paket ile uyuşmuyor!",

    // Packages
    "buying_someone_else" => "Başkası için mi satın alıyorsun?",
    "buying_yourself" => "Şu anda kendin için satın alıyorsun",
    "buying_for" => "Şu anda satın aldığın kişi:",
    "packages_custom_amount" => "Özel Miktar",

    "packages_not_available" => "Bu sunucu için geçerli bir paket yok.",
    "raffle_not_available" => "Şu anda geçerli bir paket çekilişi yok.",
    "credit_not_available" => "Şu anda geçerli bir kredi çekilişi yok.",

    // Buttons
    "submit" => "Gönder",

    // Profile
    "non_perm_pkg" => "Geçici Paket",
    "perm_pkg" => "Kalıcı Paket(ler)",
    "acc_info" => "Hesap Bilgisi",
    "pkg_history" => "Paket Geçmişi",
    "acc_credits" => "Kredi",
    "transfer_credits" => "Kredi Transfer Et",
    "package" => "Paket",

    // Tables
    "id" => "ID",
    "user" => "Kullanıcı",
    "description" => "Açıklama",
    "timestamp" => "Tarih Bilgisi",
    "action" => "Eylem",
    "replies" => "Cevaplar",
    "view" => "Görüntüle",

    // Select boxes
    "select_server" => "Sunucu seç:",
    "select_currency" => "Para birimi seç:",
    "select_category" => "Kategori seç:",
    "none" => "Hiç",

    // Modals
    "yes" => "Evet",
    "no" => "Hayır",
    "sure" => "Emin misin?",
    "sure_cur" => "Bu para birimini silmek istediğinden emin misin?",
    "sure_srv" => "Bu sunucuyu silmek istediğinden emin misin?",
    "sure_cat" => "Bu kategoriyi silmek istediğinden emin misin?",

    // Dangerous settings
    "dangerous" => "Tehlikeli Ayarlar",
    "danger_cur" => "Ya da bu para birimini silebilirsin.",
    "danger_srv" => "Herhangi bir paket atanmadığı sürece bu sunucuyu silmeyin!",
    "danger_cat" => "Herhangi bir paket atanmadığı sürece bu kategoriyi silmeyin!",
    "delete" => "Sil",

    // Admin nav
    "dashboard" => "Admin Panel",
    "general_settings" => "Genel Ayarlar",
    "support_tickets" => "Destek Talepleri",
    "servers" => "Sunucular",
    "currencies" => "Para Birimleri",
    "categories" => "Kategoriler",
    "packages_and_actions" => "Paketler ve Eylemler",
    "credit_packages" => "Kredi Paketleri",
    "theme_editor" => "Tema düzenleyici",
    "documentation" => "Dokümantasyon",

    // General Settings
    "settings" => "Ayarlar",
    "main_page" => "Ana Sayfa",
    "integration_settings" => "Entegrasyon Ayarları",
    "ingame_notifications" => "Oyun içi Bildirimler",

    // Servers page
    "add_srv" => "Sunucu Ekle",
    "edit_srv" => "Sunucuyu Düzenle",
    "server_name" => "Sunucu İsmi",
    "featured_pkg_short" => "Öne Çıkan Paket",

    // Currency page
    "add_cur" => "Para birimi ekle",
    "edit_cur" => "Para birimini düzenle",
    "cc" => "Para birimi kodu",

    // Category page
    "add_cat" => "Kategori ekle",
    "edit_cat" => "Kategoriyi düzenle",
    "cat_name" => "Kategori ismi",

    // Dashboard nav
    "main_dashboard" => "Ana Panel",
    "sale" => "Satış",
    "transactions" => "İşlemler",
    "users" => "Kullanıcılar",
    "logs" => "Loglar",
    "update_sql" => "SQL güncelle",
    "other_features" => "Diğer özellikler",

    // Admin dashboard
    "total" => "Toplam",
    "full_total" => "Full Toplam",
    "dashboard_text" => "Admin paneline hoşgeldin, burası senin sunucunun bağış istatistiklerini takip edeceğin yer.",

    /**
     * New in 1.4.7.2
     */
    "welcome_main" => "Hoşgeldin",
    "need_credits" => "Daha fazla krediye mi ihtiyacın var? <a href='store.php?page=credits'>Buraya Tıkla!</a>",
    "no_history" => "Geçmiş Yok",
    "amount" => "Miktar",
    "you_have_none" => "Sende yok!",

    "add_cre" => "Kredi paketi ekle",
    "edit_cre" => "Kredi paketini düzenle",
    "pack_title" => "Paket başlığı",
    "price" => "Fiyat",
    "currency" => "Para birimi",
    "sure_cre" => "Bu kredi paketini silmek istiyor musun?",
    "danger_cre" => "Ya da bu kredi paketini silebilirsin.",
    "select_package" => "Paket seç:",
    "choose_cre" => "Kredi paketi seç",
    "brief_desc" => "Kısa Açıklama",
    "amt_of_cre" => "Kredi miktarı",
    "price_of_pkg" => "Paketin fiyatı",
    "no_support" => "Destek talebin yok",
    "no_other_available" => "Başka paket mevcut değil",

    /**
     * New in 1.4.8
     */
    "purchase_free" => "Bu paketi bedavaya al!",
    "dashboard_revenuegraph" => "Gelir Grafiği",
    "dashboard_revenuecurrency" => "Ana para biriminizde gösterilir",
    "dashboard_packagesgraph" => "Paket Satışları",
    "dashboard_serversgraph" => "Sunucu Satışları",
    "between" => "Arasında",
    "and" => "Ve",

    /**
     * New in 1.4.9
     */
    "free" => "Bedava",
    "buy_own_free" => "Bu pakete zaten bedavaya sahipsin. İki kere alamazsın!",

    /**
     * New in 1.4.9.2
     */
    "updates" => "Güncellemeler",

    /**
     * New in 1.4.9.3
     */
    "header_sqlupdate" => "Uygulanmamış bir MySQL güncellemeniz var. <a href='admin.php?update'>Tıkla!</a>",
    "monthly_goal" => "Aylık Hedef",

    /**
     * New in 1.4.9.6
     */
    "payment_success" => "Ödeme başarılı!",
    "profile_updated" => "Profilin güncellendi.",
    "payment_failed" => "Ödeme başarısız!",
    "check_credits" => "Lütfen bu paketi satın almak yeterli krediye sahip olup olmadığınızı kontrol ediniz!",
    "not_authorised" => "Bu alanı görüntüleme yetkiniz yok. Önce giriş yapınız!",

    /**
     * New in 1.5
     */
    "wiki" => "Wiki",
    "no_graph_info" => "Grafik bilgisi yok",
    "no_graph_info_text" => "Herhangi bir işlem yapılmadığı için grafik bilgisi gösterilmiyor !",
    "paymentwall_purchase" => "Paymentwall ile satın al",
    "stripe_purchase" => "Stripe ile satın al",
    "payment_gateways" => "Ödeme Seçenekleri",
    "advanced" => "Gelişmiş",
    "no_servers" => "Şu anda kullanılabilir bir sunucu yok.",
    "entries" => "girdiler",
    "you_can_enter" => "Girebilirsin",
    "times_more" => "kat daha fazla",
    "dashboard_creditsrevenue" => "Krediler para ile alınsa da bu grafik ayrıca harcanan kredileri harcanan parayla karşılaştırır. (Kredi = <font color='#9c9c9c'><b>Gray</b></font>, Para = <font color='#c10000'><b>Red</b></font>)",
    "pkg_discounted" => "Bu paket, sahip olduğunuz için indirimlidir. ",

    "compatible_text" => "Eğer bu pakete sahip değilsen aşşağıdaki seçilen paketleri alamazsın",
    "not_compatible" => "ile uyumlu değil",

    "packages" => "Paketler",
    "upgradeable_text" => "Seçilen pakete sahipseniz, bunu seçili paketlerin fiyatı üzerinden indirimli fiyattan alırsınız. ",
    "upgradeable" => "İle yükseltilebilir",

    "assign_actions" => "Eylemleri ata",
    "actions_text" => "Bir oyuncu tarafından satın alındıktan sonra bu paketin gerçekleştirmesini istediğiniz eylemleri atayın.",
    "actions" => "Eylemler",
    "label_amount" => "Etiket miktarı",
    "add_package" => "Paket ekle",
    "edit_package" => "Paketi Düzenle",
    "labels" => "Etiketler",
    "title" => "Başlık",
    "category" => "Kategori",
    "no_packages" => "Şu anda sistemde paketiniz yok",

    /**
     * New in 1.5.0.6
     */
    "signin" => "Kayıt Ol",
    "welcome_signin" => "Bir paket satın almak için ilk önce kayıt olmalısın",
    "blacklist_notext" => "Kara listeye almak için geçerli bir Steam64 veya SteamID girmeniz gerekiyor!",
    "blacklist_success" => "Başarıyla bu kişiyi kara listeye aldınız",
    "blacklisted_you" => "Bu toplulukta herhangi bir paket satın almazsınız. Kara listeye alındınız",
    "blacklisted_them" => "Bu kişi bu toplulukta kara listeye alındığı için onun için bir şey satın alamazsınız",

    "recent_donators" => "Yakın Zamanda Bağış Atanlar",
    "name" => "İsim",
    "recent_none" => "Yakın zamanda bağış yapan olmadı ",
    "raffle_free" => "Bedavaya gir!",

    /**
     * New in 1.5.0.8
     */
    "top_donators" => "En iyi bağışçılar",
    "top_none" => "En iyi bağışçı yok",

    /**
     * New in 1.5.0.9
     */
    "step" => "Adım",

    /**
     * New in 1.5.1
     */
    "permission_groups" => "İzin grupları",
    "add_permission" => "İzin grubu ekle",
    "edit_permission" => "İzin grubunu düzenle",
    "permissions" => "İzinler",
    "no_perm" => "Üzgünüm Mahmut, korkarım bunu yapmana izin veremem (Yetersiz izin) ",

    /**
     * New in 1.5.1.2
     */
    "select_gateway" => "Ödeme türünü seçin",

    /**
     * New in 1.5.2
     */
    "buy_disable" => "Paketleri devre dışı bırak",
    "buy_disable_text" => "Bu paketi satın alırsanız bu paketleri devre dışı bırakın ",

    "credits_doesntexist" => "Bu kullanıcı bu sistemde mevcut değil.",
    "credits_yourself" => "Kendinize kredi aktaramazsınız.",
    "credits_steamid" => "Başka SteamID deneyin",
    "credits_transferringto" => "Kişisine transfer ediliyor:",

    "type" => "Tip",
    "gateway" => "Gateway",
    "no_users" => "Kullanıcı Bulunamadı",

    "view_profile" => "Profili görüntüle",
    "view_blacklist" => "Kara listeyi görüntüle",

    "manage" => "Yönet",
    "users_search" => "İsim, steam64 veya steamid aratın",

    "transaction" => "İşlemler",
    "delivered" => "Teslim Edildi",
    "state" => "Durum",
    "assign_package" => "Paket ata",
    "set_credits" => "Kredi ata",
    "give_ticket" => "Bilet ver",
    "del_inactive_actions" => "Etkin olmayan eylemleri sil",

    "select_pkg" => "Paket seç",
    "do_assign_actions" => "Eylem ata",
    "dont_assign_actions" => "Eylem atama",
    "clone_expiretime" => "Aynı tipteki en son oluşturulmuş paketin son kullanma tarihini kopyala",
    "assign" => "Ata",

    "set" => "Ayarla",
    "disable" => "Devre Dışı Bırak",
    "enable" => "Etkinleştir",
    "inactive_everyone" => "Herkes için etkin değil olarak ayarla",
    "del" => "Sil",
    "edit" => "Düzenle",

    "sale_settings" => "Satış ayarları",
    "sale_text" => "İndirimin hangi paketlere uygulanmasını istediğinizi seçin.",
    "message" => "Mesaj",
    "percentage" => "Yüzde",
    "end_date" => "Bitiş zamanı",

    "update" => "Güncelle",
    "automatic_updates" => "Otomatik güncellemeler",
    "dl_lua" => "En güncel lua\'yı indir",
    "dl_web" => "En güncel web\'i indir",
    "no_write_perm" => "Güncellemeler klasörünüzün yazma izni yok! Chmod\'u 777 yapmadığın sürece otomatik güncellemeler çalışmaz. <br> Ancak güncellemeyi manuel olarak indirmek için bu düğmeyi kullanabilirsiniz.",
    "newest_version" => "Güncel Versiyon:",

    "test_message" => "Sunucuya mesaj gönder",

    /**
     * New in 1.5.2.2
     */

    "find_more" => "Daha fazlasını Bul!",

    /**
     * New in 1.5.3
     */

    "duplicate" => "Çiftle",
    "other" => "Diğer",
    "someone_else" => "Ancak, yine de başka biri için satın alabilirsiniz.",

    /**
     * New in 1.5.4 -- Do not replace $1, $2, $3 etc, they get replaced with numbers and stuff automatically, so keep them there!
     */

    "here" => "buraya", // This is $1 in 'job_already_created' because it's wrapped in a link
    "job_already_created" => "Zaten bir meslek oluşturdun. Doğrudan ödemeye devam etmek istiyorsanız $1 tıklayın. Aksi takdirde yeni bir tane oluşturabilirsiniz",

    "general_info" => "Genel Bilgi",
    "preferences" => "Tercihler",

    "job_name" => "Meslek İsmi",
    "chat_cmd" => "Bu mesleğe geçmek için gereken sohbet komudu",
    "job_desc" => "Meslek açıklaması",
    "job_colour" => "Meslek rengi",

    "weapons" => "Silahlar",
    "models" => "Modeller",
    "model" => "Model",

    "job_costs" => "$1 veya $2 kredi tutar",

    "friends" => "Arkadaşlar",
    "friends_max" => "<h6>Arkadaşlar - maks $1</h6>",
    "friends_add" => "Eklediğin her arkadaş için son fiyata $1 veya $2 kredi eklenir",
    "friends_not" => "Bu pakete arkadaş ekleme izniniz yok",

    "salary" => "Maaş",
    "salary_static" => "Maaşın $1 olacak",
    "salary_base" => "Temel maaş $1. Arttırdığın her rakamda son fiyata $2 veya $3 kredi eklenir",
    "salary_max" => "<h6>Maaşs - maks $1 kat ölçeklendirebilirsin</h6>",
    "salary_current" => "Şu anki maaşın: $1",

    "license" => "Lisans",
    "license_included" => "Mesleğinize dahil bir lisans alırsınız",
    "license_include" => "Lisans dahil et - $1 veya $2 kredi tutar",
    "license_no" => "Lisansın olamaz",

    "payment_confirmation" => "Ödeme doğrulama",
    "job_total" => "Toplam $1 veya $2 kredi",
    "job_proceed" => "Ödemeye geç",

    /**
     * New in 1.5.5
     */

    "job_total_nocredits" => "Toplam $1",
    "job_total_onlycredits" => "Toplam $1 kredi",

    "earned_total" => "TOPLAM KAZANÇ",
    "earned_week" => "BU HAFTANIN KAZANCI",
    "earned_month" => "BU AYIN KAZANCI",

    "real_transaction" => "Gerçek bir işlem olarak sayın ",
    "not_real_transaction" => "Gerçek bir işlem olarak saymayın (Her hangi bir istatistiğe eklenmeyecek)",

    /**
     * New in 1.6
     */

    "active_everyone" => "Herkes için aktif olarak ayarla",
    "buy_others_disabled" => "Başkaları için satın almak sistem tarafından devre dışı bırakıldı",
    "job_skip_prize" => "Geç - Sadece çekiliş ödülünü almak istemediğiniz zaman tıklayın",

    "move_packages" => "Paketleri hareket ettirmek için $1 tıklayın",

    "add" => "Ekle",

    // Theme
    "theme" => "Tema",
    "danger_theme" => "Şu anda kullanmıyorsanız bu temayı silmeyin!",
    "sure_theme" => "Bu temayı silmek istediğinizden emin misiniz?",
    "theme_name" => "Tema ismi",

    "edit_theme" => "Temayı düzenle",
    "add_theme" => "Tema ekle",
    "select_theme" => "Tema seç",

    // Imprint page
    "imprint" => "Marka",
    "enable_imprint" => "Markayı etkinleştir",
    "company_name" => "Firma ismi",
    "street_address" => "Adress",
    "post_address" => "Posta kodu",
    "country" => "Ülke",
    "trade_register" => "Vergi levhası",
    "company_id" => "Firma ID",
    "company_ceo" => "CEO",
    "contact_email" => "Email",
    "contact_phone" => "Telefon",

    /**
     * New in 1.6.1
     */
    "game" => "Oyun",
    "server_ip" => "Sunucu IP",
    "server_port" => "Sunucu port",
    "server_rcon" => "Sunucu RCon",

    "edit_raffle" => "Çekilişi düzenle",
    "add_raffle" => "Çekiliş ekle",
    "select_raffle" => "Çekiliş seç:",

    "package_cantbuy" => "Bunlardan birine sahip değilsen bu paketi alamazsın: $1",
    "package_they_cantbuy" => "Bunlardan birine sahip değillerse bu paketi alamayacaklar: $1",

    "hide" => "Eğer bu paketlerden birine sahip değilsen bunu alamazsın",
    "hide_text" => "Eğer aşşağıda seçili olan paketlere sahip değilsen bu paketi satın alamazsın",

    "your_spendings" => "5 ay içinde harcadıkların",
    "spendings_currency" => "Harcadıkların websitenin ana para birimi [$1] olarak gösteriliyor. Kredi para ile satın alınıyor olsa bile, bu grafik ne kadar kredi ve para harcadığını karşılaştırıyor. (Kredi = <font color='#9c9c9c'><b>Gray</b></font>, Para = <font color='#c10000'><b>Red</b></font>)",

    "spent_total" => "TOPLAM HARCANAN",
    "spent_week" => "BU HAFTA HARCANAN",
    "spent_month" => "BU AY HARCANAN",

    /**
     * New in 1.6.1.5
     */
    "advent_calendar" => "Etkinlik Takvimi",
    "advent" => "Etkinlik",
    "day" => "Gün",
    "advent_opened" => "$1. gün açtın ve $2 elde ettin!",
    "advent_nopkg" => "Bu güne atanmış bir paket yok, lütfen bu konuda topluluğunuzun yöneticisiyle iletişime geçin.",
    "advent_text" => "1 Aralık'tan 24 Aralık Noel Arifesine kadar her gün bir ücretsiz paket alın!",

    /**
     * New in 1.6.2
     */
    "coupons" => "Kuponlar",
    "add_cou" => "Kupon ekle",
    "edit_cou" => "Kuponu düzenle",
    "select_cou" => "Kupon seç",
    "sure_cou" => "Bu kuponu silmek istediğinden emin misin?",
    "coupon_text" => "Eğer kupon kodunuz varsa buraya ekleyin :)",

    /**
     * New in 1.6.3.23
     */
    "privacy" => "Gizlilik Politikası",
    "enable_privacy" => "Gizlilik Politikasını Etkinleştir",

    /**
     * New in 1.6.3.25
     */
    "link_expire" => "Bağlantı sona erme zamanı",
    "link_expire_text" => "Seçilen paketlerden herhangi birine sahipseniz ve süresi dolmamışsa, bu paket bu pakete sürelerini ekler ve diğerlerini devre dışı bırakır. ",

    /**
     * New in 1.6.4
     */
    "advent_opened_both" => "$1. günü açtınız. $2 ve $3 kredi aldınız!",
    "advent_opened_credits" => "$1. günü açtınız ve $2 kredi aldınız!",
    "advent_opened_nothing" => "$1. günü açtınız ve maalesef hiç bir şey alamadınız :(",

    /**
     * New in 1.7.6
     */
    "hightolow" => "Fiyat (Yüksekten Düşüğe)",
    "lowtohigh" => "Fiyat (Düşükten Yükseğe)",
    "categories_store" => "Kategoriler",
    "sort_by" => "Göre Sırala",
    "search_by" => "Ara",
    "category_all" => "Hepsi",
    "id_search" => "ID (Varsayılan)",
    "search_one" => "Ara (Başlık, Açıklama, Etiket)",
    "no_description" => "Açıklama yok.",
);

$curfile = __FILE__;
if ($curfile == 'en-gb.php') {
    $english_lang = $lang;
}
