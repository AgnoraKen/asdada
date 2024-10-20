<?php defined("ABSPATH") || die("!");
function gov_language(){
	return [
		//general
		"comment_label" => "Yorum",
		"recommended_series" => "İlgili Seriler",
		"wpb_get_post_views_label" => "{{count}} Okunma",
		"view_all_label" => "Tümünü Gör",
		"previous" => "Önceki",
		"next" => "Sonraki",
		"surprise_me_label" => "Beni Şaşırt!",
		"ago" => "önce",
		//home 
		"home_hot_series_update_label" => "Bugün Popüler",
		"home_project_release_label" => "Proje Güncelle",
		"home_blog_release_label" => "Blog",
		"home_latest_release_label" => "Son Güncelleme",
		"mini_ch" => "Bölüm ",
		//home slider
		"home_slider_trending_label" => "{{blogname}} Bu Haftanın <b>Trendleri</b>",
		"home_slider_summary_label" => "Özet",
		"home_recommended" => "Öneriler",
		//bookmark
		"bookmark_head" => "Burada en faza {{max}} olacak şekilde manga kaydedebilirsiniz. Liste, en son güncellemelere göre sıralanır. Ayrıca listeniz şu anda kullandığınız tarayıcının çerezlerine kaydolur.",
		"bookmark_no_item" => "İŞARETLENEN HİÇBİR SERİNİZ YOK",
		"delete" =>  "Sil",

		//chapter single page 
		"chapter_to_chapter_list_link" => 'Tüm bölümler için: <a href="{{link}}">{{text}}</a>',
		"chapter_before_readerarea_text" => '<b> {{chapter_title}} </b> bölümünü <b>{{blogname}}</b> ile okuyun. <b> {{manga_title}} </b>, <b> {{blogname}} </b> ile her daim güncel şekilde okunabilir. Diğer serilerimize de göz atmayı unutmayın. <b> {{blogname}} </b>\'deki tüm serilerimizi Seriler menüsünde bulabilirsiniz. ',
		//chapter single page dropdown chapter selection
		"chapter_drop_down_select_chapter_label" => "Bölüm Seç",

		"chapter_download_label" => "İndir",
		"chapter_nav_previous_label" => "Önceki",
		"chapter_nav_next_label" => "Sıradaki",
		"chapter_after_readerarea_tags" => 'manga oku {{chapter_title}}, seri {{chapter_title}}, online {{chapter_title}} oku, {{chapter_title}} istersen oku, {{chapter_title}} bölümü, {{chapter_title}} yüksek kalite, {{chapter_title}} adam gibi oku, {{chapter_title}} okuyabilirsin, {{chapter_title}} hani okuma istersen, {{chapter_title}} okuyabilirsin ama okumayabilirsin, {{chapter_title}} gel bi\' oku be yav, {{chapter_title}} okusana aq',
		"chapter_after_readerarea_novel_tags" => '{{chapter_title}} roman, {{chapter_title}} romanı, çevrimiçi {{chapter_title}} oku, {{chapter_title}} romanı oku, {{chapter_title}} yüksek kalitede oku, {{chapter_title}} ya da okuma',
		//chapter single page, reader area 
		"chapter_readerarea_no_images" => '<center><h4>HİÇBİR GÖRSEL YOK</h4></center>',
		"chapter_readerarea_default_server_label" => "Sunucu 1",

		//series single page
		"series_info_alt_label" => "Diğer Adlar",
		"series_info_synopsis_label" => '{{post_title}} Özeti',
		"series_info_genres_label" => "Türler",
		"series_info_author_label" => "Yazar",
		"series_info_artist_label" => "Sanatçı",
		"series_info_posted_on_label" => "Yaratılış",
		"series_info_status_label" => "Durum",
		"series_info_released_label" => "Yayınlanmış",
		"series_info_type_label" => "Tür",
		"series_info_posted_by_label" => "Yaratan",
		"series_info_updated_on_label" => "Güncellenme",
		"series_info_serialization_label" => "Serileşme",
		"series_info_rating_label" => "Puan {{rating}}",
		"series_bottom_keyword_text" => '<strong>Anahtar Kelimeler: </strong> <a href="{{link}}">{{post_title}} oku</a>, <a href="{{link}}">{{post_title}} türkçe</a>, <a href="{{link}}">{{post_title}} türkçe çeviri</a>, <a href="{{link}}">{{post_title}} türkçe indir</a>',
		"series_bookmarked_by" => "{{count}} kişi tarafından takip ediliyor.",
		"series_keywords_text" => "{{manga_title}} oku, {{manga_title}} türkçe, {{manga_title}} türkçe oku, {{manga_title}} türkçe indir, {{manga_title}} çevrimiçi oku",
		"series_nsfw" => "UYARI! \"{{manga_title}}\" serisi, reşit olmayan şahıslar için zararlı olabilecek kanlı ya da cinsel içerikler barındırabilir.",
		"series_gallery_label" => "{{manga_title}} Galeri",
		"series_chapter_list" => "{{manga_title}} Bölümleri",
		"series_read_button_label" => "Oku",
		"widget_chapter_label" => "Bölüm",
		"search_chapter_placeholder" => "Bölüm Ara. Örneğin: 25 veya 178",
		"series_chapter_number" => "Bölüm",
		"series_chapter_date" => "Tarih",
		"series_chapter_download" => "İndir",
		"series_first_chapter_label" => "İlk Bölüm",
		"series_new_chapter_label" => "Yeni Bölüm",
		"series_chapter_search_no_result" => "Bölüm Bulunamadı",

		//blog 
		"blog_meta" => "{{author}} tarafından {{time}} tarihinde yayınlandı.",

		//advanced search series
		"filter_all_label" => "Tümü",
		"filter_default_label" => "Varsayılan",
		"advanced_search_manga_list_label" => "Seri Listeleri",
		"advanced_search_filter_button_label" => "Filtrele",
		"advanced_search_series_title_label" => "Başlık",
		"advanced_search_series_year_label" => "Yıl",
		"advanced_search_series_status_label" => "Durum",
		"advanced_search_series_status_all_label" => "Tümü",
		"advanced_search_series_status_ongoing_label" => "Devam Ediyor",
		"advanced_search_series_status_completed_label" => "Tamamlanmış",
		"advanced_search_series_type_label" => "Tür",
		"advanced_search_series_type_all_label" => "Tümü",
		"advanced_search_series_order_by_label" => "Sırala",
		"advanced_search_series_order_by_az_label" => "A-Z",
		"advanced_search_series_order_by_za_label" => "Z-A",
		"advanced_search_series_order_by_latest_update_label" => "Güncelleme",
		"advanced_search_series_order_by_latest_added_label" => "Eklenme",
		"advanced_search_series_order_by_popular_label" => "Popülerlik",
		"advanced_search_series_genre_label" => "Tür",
		"advanced_search_series_show_genre_label" => "Tür Göster",
		"advanced_search_series_text_mode_label" => "Yalnızca Adla Göster",
		"advanced_search_series_image_mode_label" => "Seri Kartlarıyla Göster",
		"advanced_search_series_search_button_label" => "Ara",
		
		//widget
		"widget_popular_weekly" => "Haftalık",
		"widget_popular_monthly" => "Aylık",
		"widget_popular_alltime" => "Tüm Zamanlar",

		//footer 
		"footer_az_heading" => "A-Z LİSTELE",
		"footer_az_text" => "Seriler A'dan Z'ye sıralanarak aranıyor.",
		"footer_disclaimer" => "Bu sitedeki tüm seriler, orijinal serilerin birer ön gösterimleridir. Karakter isimlerinde, hikâyelerde ve kullanılan dilde hatalar barındırabilir. Orijinal versiyonları için bölgenizde mevcutsa asıl seriyi satın alın.",
		
		"search_page_title" => "'{{title}}' Ara",
		"search_page_notfound" => "Bulunamadı",
		"search_placeholder" => "Ara",
		"series_info_keywords_label" => "Anahtar Kelimeler: ",
		"select_chapter_label" => "Bölüm",
		"home_genre_label" => "Tüm Seriler",
		"thumbnail_color_label" => "Renk",
		"darkmode_label" => "Karanlık",
		"related_blog_label" => "Öneriler",
		"reading_mode_full_label" => "Tüm Sayfalar",
		"reading_mode_single_label" => "Tek Sayfa",
		"reading_nav_next_label" => "Sıradaki",
		"reading_nav_prev_label" => "Önceki",
		"readerarea_tags_label" => "Etiketler:",
		"thumbnail_novel_label" => "Roman",
		"seriestu_first_chapter_label" => "İlk:",
		"seriestu_new_chapter_label" => "Son:",
		
		//2.1.1
		"warning_enter_label" => "Gir",
		"warning_exit_label" => "Çık",
		"widget_genre_title_view_label" => "Tüm serileri görüntüle:",
		"series_info_additional_label" => "Ek İçerik",
		'series_history_title' => "Son Okunan",
		'series_history_prefixAgo' => "",
		'series_history_prefixFromNow' => "",
		'series_history_suffixAgo' => "önce",
		'series_history_suffixFromNow' => "itibaren",
		'series_history_seconds' => "bir dakikadan az",
		'series_history_minute' => "yaklaşık bir dakika",
		'series_history_minutes' => "{{num}} dakika",
		'series_history_hour' => "yaklaşık bir saat",
		'series_history_hours' => "yaklaşık {{num}} saat",
		'series_history_day' => "bir gün",
		'series_history_days' => "{{num}} gün",
		'series_history_month' => "yaklaşık bir ay",
		'series_history_months' => "{{num}} ay",
		'series_history_year' => "yaklaşık bir yıl",
		'series_history_years' => "{{num}} yıl",
		
		//2.1.2
		'bookmark_disabled' => "İŞARETLEME ÖZELLİĞİ DEVRE DIŞI",
		
		//2.1.4
		"series_nsfw_warning" => "İçerik Uyarısı",
		"slider_score" => "Puan",
		"slider_start_reading" => "Okumaya Başla",
		"view_all_bottom_label" => "{{title}} Tümünü Gör",
		
		//2.1.5
		"series_info_views_label" => "Okunma",
		
		//2.1.6
		"front_homepage_label" => "Ana Sayfaya Git",
		"views_thousand_label" => "Bin",
		"views_million_label" => "Milyon",
		"views_billion_label" => "Milyar",
		"views_trillion_label" => "Trilyon",
		"views_quadrillion_label" => "Katrilyon",

		//2.1.7
		"series_archive_page_no_result" => "-- Gönderi Bulunamadı --",
	];
};