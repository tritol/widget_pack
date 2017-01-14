<?php

return [

	'widget_pack:settings:disable_free_html_filter' => "Na úvodní stránce zakázat filtrování HTML v udělátkách Volné HTML (POUZE SPRÁVCE)",
	'widgets:not_configured' => "Toto udělátko zatím nebylo nastaveno",
		
	// index_login
	'widgets:index_login:description' => "Zobrazuje přihlašovací pole",
	'widgets:index_login:welcome' => "<b>%s</b> vítejte v komunitě <b>%s</b>",

	// index_members
	'widgets:index_members:name' => "Uživatelé",
	'widgets:index_members:description' => "Zobrazuje uživatele vašich stránek",
	'widgets:index_members:user_icon' => "Pouze uživatelé s portrétem",
	'widgets:index_members:no_result' => "Žádní uživatelé",

	// index_memebers_online
	'widgets:index_members_online:name' => "Přihlášení uživatelé",
	'widgets:index_members_online:description' => "Zobrazuje kdo je na přihlášen k vašim stránkám",
	'widgets:index_members_online:member_count' => "Počet zobrazených uživatelů",
	'widgets:index_members_online:user_icon' => "Pouze uživatelé s portrétem",
	'widgets:index_members_online:no_result' => "Žádní přihlášení uživatelé",

	// index_activity
	'widgets:index_activity:description' => "Zobrazuje nejnovější aktivitu na vašich stránkách",

	// image_slider
	'widgets:image_slider:name' => "Obrázková prezentace",
	'widgets:image_slider:description' => "Zobrazuje obrázkovou prezentaci",
	'widgets:image_slider:seconds_per_slide' => "Doba zobrazení obrázku (sec)",
	'widgets:image_slider:slider_height' => "Výška obrázků (pixely)",
	'widgets:image_slider:overlay_color' => "Barva překryvu (hex)",
	'widgets:image_slider:title' => "Prezentace",
	'widgets:image_slider:label:url' => "URL obrázku",
	'widgets:image_slider:label:text' => "Text",
	'widgets:image_slider:label:link' => "Odkaz",
	'widgets:image_slider:label:direction' => "Směr",

	// twitter_search
	'widgets:twitter_search:name' => "Hledání na Twitteru",
	'widgets:twitter_search:description' => "Zobrazuje výsledky hledání z Twitteru",

	'widgets:twitter_search:embed_code' => "Kód vloženého udělátka Twitteru",
	'widgets:twitter_search:embed_code:help' => "Na Twitter.com vytvořte udělátko a sem vložte váš vložený kód",
	'widgets:twitter_search:embed_code:error' => "Z vloženého kódu nemohu získat ID udělátka",
	'widgets:twitter_search:height' => "Výška udělátka (pixely)",
	'widgets:twitter_search:not_configured' => "Toto udělátko zatím nebylo nastaveno",

	// content_by_tag
	'widgets:content_by_tag:name' => "Obsah podle štítku",
	'widgets:content_by_tag:description' => "Najde obsah podle štítku",

	'widgets:content_by_tag:owner_guids' => "Omezit obsah na následující autory",
	'widgets:content_by_tag:owner_guids:description' => "Vyhledejte uživatele, který je autorem obsahu. Pokud nechcete omezovat obsah podle autorů, ponechte prázdné.",
	'widgets:content_by_tag:container_guids' => "Zobrazit pouze obsah následujících skupin",
	'widgets:content_by_tag:container_guids:description' => "Vyhledejte skupinu, ze které přidávat obsah. Pokud nechcete omezovat obsah podle skupin, ponechte prázdné.",
	'widgets:content_by_tag:group_only' => "Zobrazit pouze obsah z této skupiny",
	'widgets:content_by_tag:entities' => "Jaké položky zobrazit",
	'widgets:content_by_tag:tags' => "Štítky (oddělené čárkou)",
	'widgets:content_by_tag:tags_option' => "Jak vyhodnotit štítky",
	'widgets:content_by_tag:tags_option:and' => "A (SOUČASNĚ)",
	'widgets:content_by_tag:tags_option:or' => "NEBO",
	'widgets:content_by_tag:excluded_tags' => "Vyloučit štítky",
	'widgets:content_by_tag:display_option' => "Jak zobrazit obsah",
	'widgets:content_by_tag:display_option:normal' => "Normálně",
	'widgets:content_by_tag:display_option:simple' => "Zjednodušeně",
	'widgets:content_by_tag:display_option:slim' => "Minimálně (jedna řádka)",
	'widgets:content_by_tag:highlight_first' => "Počet zvýrazněných položek (pouze pro Minimální zobrazení)",
	'widgets:content_by_tag:show_search_link' => "Zobrazit odkaz hledání",
	'widgets:content_by_tag:show_search_link:disclaimer' => "Výsledky hledání se mohou lišit od obsahu udělátka",
	'widgets:content_by_tag:show_avatar' => "Zobrazit portrét uživatele",
	'widgets:content_by_tag:show_timestamp' => "Zobrazit časovou značku obsahu",
	'widgets:content_by_tag:order_by' => "Jak obsah řadit",
	'widgets:content_by_tag:order_by:time_created' => "Dle času vytvoření",
	'widgets:content_by_tag:order_by:alpha' => "Abecedně",

	// RSS widget
	'widgets:rss:name' => "RSS zdroj",
	'widgets:rss:description' => "Zobrazuje RSS zdroj",
	'widgets:rss:error:notset' => "Nebylo zadáno URL RSS zdroje",

	'widgets:rss:settings:rss_count' => "Počet zobrazených položek",
	'widgets:rss:settings:rssfeed' => "URL RSS zdroje",
	'widgets:rss:settings:rss_cachetimeout' => "Časový limit RSS mezipaměti ve vteřinách (pro výchozí hodnotu ponechte prázdné)",
	'widgets:rss:settings:show_feed_title' => "Zobrazit nadpis položky",
	'widgets:rss:settings:excerpt' => "Zobrazit úryvek",
	'widgets:rss:settings:show_item_icon' => "Zobrazit ikonu (je-li k dispozici)",
	'widgets:rss:settings:post_date' => "Zobrazit datum vydání",
	'widgets:rss:settings:show_in_lightbox' => "Po kliknutí na odkaz zobrazit celý text v plovoucím okně",

	// RSS widget
	'widgets:rss_server:name' => "RSS zdroj",
	'widgets:rss_server:description' => "Zobrazuje RSS zdroj (načítaný na serveru)",
	'widgets:rss_server:settings:show_author' => "Zobrazit autora položky",

	// Free HTML
	'widgets:free_html:name' => "Volné HTML",
	'widgets:free_html:description' => "Napište svůj vlastní obsah v HTML",
	'widgets:free_html:settings:html_content' => "Dodejte prosím HTML k zobrazení",

	// entity_statistics widget
	"widgets:entity_statistics:name" => "Statistiky",
	"widgets:entity_statistics:description" => "Zobrazuje statistiky stránek",
	"widgets:entity_statistics:settings:selected_entities" => "Zvolte jaké položky chcete zobrazit",

	// messages widget
	"widgets:messages:description" => "Zobrazuje vaše nejnovější zprávy",
	"widgets:messages:not_logged_in" => "Pro zobrazení zpráv se musíte přihlásit",
	"widgets:messages:settings:only_unread" => "Zobrazit pouze nepřečtené zprávy",

	// likes widget
	"widgets:likes:name" => "Líbí se",
	"widgets:likes:description" => "Zobrazuje informace o líbivém obsahu",
	"widgets:likes:settings:interval" => "Interval",
	"widgets:likes:settings:interval:week" => "Poslední týden",
	"widgets:likes:settings:interval:month" => "Poslední měsíc",
	"widgets:likes:settings:interval:3month" => "Poslední 3 měsíce",
	"widgets:likes:settings:interval:halfyear" => "Poslední půlrok",
	"widgets:likes:settings:interval:year" => "Poslední rok",
	"widgets:likes:settings:interval:unlimited" => "Bez omezení",
	"widgets:likes:settings:like_type" => "Typ obsahu",
	"widgets:likes:settings:like_type:user_likes" => "Vaše poslední líbí se",
	"widgets:likes:settings:like_type:most_liked" => "Nejlíbivější obsah",
	"widgets:likes:settings:like_type:recently_liked" => "Nejnověji oblíbený obsah",

	// user search widget
	"widgets:user_search:name" => "Hledání uživatelů",
	"widgets:user_search:description" => "Vyhledá všechny uživatele těchto stránek (včetně zakázaných a neověřených uživatelů)",

	// iframe widget
	"widgets:iframe:name" => "Vnořený rám /Iframe/",
	"widgets:iframe:description" => "Zobrazuje URL v rámci",
	"widgets:iframe:settings:iframe_url" => "Zadejte URL pro vložení",
	"widgets:iframe:settings:iframe_height" => "(volitelně) Zadejte výšku rámce (v pixelech)",
];
