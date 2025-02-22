<?php return [
    'installer' => [
        'app_config_section' => 'Weboldal konfigurálása',
        'license_section' => 'Licenc kulcs',
        'dependencies_section' => 'Függőségek telepítése',
        'locale_select_label' => 'Válasszon nyelvet',
        'locale_select_error' => 'A(z) :code nyelvi kód helytelen, kérjük módosítsa azt.',
        'app_url_label' => 'Honlap webcíme',
        'backend_uri_label' => 'Admin felület címe',
        'backend_uri_comment' => 'A weboldal védelme érdekében használjon egyéni címet az adminisztrációs panel eléréséhez.',
        'license_key_label' => 'Licenc kulcs',
        'license_key_comment' => 'A folytatáshoz adjon meg egy érvényes licenc kulcsot.',
        'license_thanks_comment' => 'Köszönjük, hogy az October CMS rendszert választotta!',
        'license_expired_comment' => 'A licenc kifizetetlen vagy lejárt. Kérjük, látogasson el az octobercms.com webhelyre, hogy licencet szerezzen.',
        'too_many_failures_label' => 'Túl sok sikertelen próbálkozás',
        'non_interactive_label' => 'Nem interaktív mód észlelve',
        'non_interactive_comment' => 'Ha ezt a hibát látja, használja ezeket a parancsokat.',
        'install_failed_label' => 'Sikertelen telepítés',
        'install_failed_comment' => 'Próbálja meg manuálisan futtatni ezeket a parancsokat.',
        'database_engine_label' => 'Adatbázis motor',
        'database_host_label' => 'Adatbázis hoszt',
        'database_host_comment' => 'Az adatbázis kapcsolat gépneve.',
        'database_port_label' => 'Adatbázis port',
        'database_port_comment' => '(Opcionális) Csatlakozáshoz szükséges port.',
        'database_name_label' => 'Adatbázis neve',
        'database_name_comment' => 'Adja meg a használni kívánt adatbázis nevét',
        'database_login_label' => 'Adatbázis belépés',
        'database_login_comment' => 'Felhasználó adatbázis jogosultságokkal.',
        'database_pass_label' => 'Adatbázis jelszó',
        'database_pass_comment' => 'Jelszó a megadott felhasználó számára.',
        'database_path_label' => 'Adatbázis útvonal',
        'database_path_comment' => 'A fájl alapú tároláshoz adjon meg egy elérési utat az weboldal gyökérkönyvtárához képest.',
        'migrate_database_comment' => 'Kérjük, migrálja az adatbázist a következő paranccsal',
        'visit_backend_comment' => 'Ezután nyissa meg az adminisztrációs felületet ezen a webcímen',
        'open_configurator_comment' => 'Nyissa meg a weboldalt a böngészőjében',
    ],
    'app' => [
        'name' => 'October CMS',
        'tagline' => 'Visszatérés az alapokhoz',
    ],
    'directory' => [
        'create_fail' => 'Nem hozható létre a könyvtár: :name',
    ],
    'file' => [
        'create_fail' => 'Nem hozható létre a fájl: :name',
    ],
    'combiner' => [
        'not_found' => 'A(z) \':name\' egyesítő fájl nem található.',
    ],
    'resizer' => [
        'not_found' => 'Az átméretezett fájl \':name\' nem található.',
    ],
    'system' => [
        'name' => 'Rendszer',
        'menu_label' => 'Rendszer',
        'categories' => [
            'cms' => 'Weboldal',
            'misc' => 'Egyebek',
            'logs' => 'Naplók',
            'mail' => 'Levelezés',
            'shop' => 'Bolt',
            'team' => 'Csapat',
            'users' => 'Felhasználók',
            'system' => 'Rendszer',
            'social' => 'Közösség',
            'backend' => 'Admin',
            'events' => 'Események',
            'customers' => 'Vevők',
            'my_settings' => 'Beállításaim',
            'notifications' => 'Értesítések',
        ],
    ],
    'theme' => [
        'label' => 'Téma',
        'unnamed' => 'Névtelen téma',
        'name' => [
            'label' => 'Téma neve',
            'help' => 'A névnek egyedinek kell lennie. Például: RainLab.Vanilla',
        ],
    ],
    'themes' => [
        'install' => 'Téma telepítése',
        'search' => 'Keresés...',
        'installed' => 'Telepítve',
        'no_themes' => 'A piactérről még nem lett telepítve téma.',
        'recommended' => 'Ajánlott',
        'remove_confirm' => 'Valóban törölni akarja a témát?',
    ],
    'plugin' => [
        'label' => 'Bővítmény',
        'unnamed' => 'Névtelen bővítmény',
        'name' => [
            'label' => 'Bővítmény neve',
            'help' => 'Nevezze meg egyedi kódja alapján a bővítményt. Például: RainLab.Blog',
        ],
        'by_author' => 'Fejlesztő: :name',
    ],
    'plugins' => [
        'install' => 'Bővítmények telepítése',
        'install_products' => 'Bővítmények telepítése',
        'search' => 'Keresés...',
        'installed' => 'Telepítve',
        'no_plugins' => 'A piactérről még nem lett telepítve bővítmény.',
        'recommended' => 'Ajánlott',
        'plugin_label' => 'Bővítmény',
        'unknown_plugin' => 'A bővítményhet tartozó fájlok törölve lettek.',
        'select_label' => 'Művelet kiválasztása...',
        'bulk_actions_label' => 'Csoportos műveletek',
        'check_yes' => 'Igen',
        'check_no' => 'Nem',
        'unfrozen' => 'Frissítés engedélyezve',
        'enabled' => 'Bővítmény engedélyezve',
        'freeze' => 'nem frissíthetőek',
        'unfreeze' => 'frissíthetőek',
        'enable' => 'engedélyezve',
        'disable' => 'tiltva',
        'refresh' => 'Frissítés',
        'remove' => 'Eltávolítás',
        'freeze_label' => 'Frissítések tiltása',
        'unfreeze_label' => 'Frissítések engedélyezése',
        'enable_label' => 'Bővítmény engedélyezése',
        'disable_label' => 'Bővítmény tiltása',
        'refresh_label' => 'Bővítmény adatok törlése',
        'action_confirm' => 'Biztos, hogy :action legyenek a bővítmények?',
        'freeze_success' => 'A kijelölt bővítmények frissítése sikeresen tiltva lett.',
        'unfreeze_success' => 'A kijelölt bővítmények frissítése sikeresen engedélyezve lett.',
        'enable_success' => 'A kijelölt bővítmények sikeresen engedélyezve lettek.',
        'disable_success' => 'A kijelölt bővítmények sikeresen tiltva lettek.',
        'refresh_confirm' => 'Biztos benne, hogy minden egyedi adatot tötölni szeretne a bővítményekből?',
        'refresh_success' => 'A kijelölt bővítmények adatai sikeresen törölve lettek.',
        'remove_confirm' => 'Valóban törölni akarja a kijelölt bővítményeket?',
        'remove_success' => 'A bővítmények sikeresen eltávolításra kerültek.',
    ],
    'project' => [
        'attach' => 'Csatolás',
        'detach' => 'leválasztás',
        'none' => 'Nincs',
        'id' => [
            'label' => 'Projekt azonosító',
            'help' => 'Súgó (angol nyelvű)',
            'missing' => 'Adjon meg egy projekt azonosítót.',
        ],
        'detach_confirm' => 'Biztosan le akarja választani a projektet?',
        'unbind_success' => 'A projekt leválasztása sikerült.',
    ],
    'settings' => [
        'menu_label' => 'Beállítások',
        'home_label' => 'Összes beállítás',
        'not_found' => 'Nem létezik a megadott beállítás oldal.',
        'missing_model' => 'A beállítások oldal egy modell definíciót hiányol.',
        'update_success' => 'A(z) :name beállításainak frissítése sikerült.',
        'return' => 'Vissza a beállításokhoz',
        'search' => 'Keresés...',
        'find_setting' => 'Beállítás keresése...',
    ],
    'mail' => [
        'log_file' => 'Naplófájl',
        'menu_label' => 'Beállítások',
        'menu_description' => 'A weboldal e-mail küldésének testreszabása.',
        'general' => 'Beállítások',
        'method' => 'Levélküldés módja',
        'sender_name' => 'Feladó neve',
        'sender_email' => 'Feladó e-mail címe',
        'php_mail' => 'PHP levélküldő',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP címe',
        'smtp_authorization' => 'SMTP hitelesítés szükséges',
        'smtp_authorization_comment' => 'Jelölje be, amennyiben az SMTP kiszolgálója hitelesítést igényel.',
        'smtp_username' => 'Felhasználónév',
        'smtp_password' => 'Jelszó',
        'smtp_port' => 'SMTP port',
        'smtp_ssl' => 'SSL kapcsolat szükséges',
        'smtp_encryption' => 'SMTP titkosítás típusa',
        'smtp_encryption_none' => 'Nincs',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Elérési út',
        'sendmail_path_comment' => 'Adja meg a Sendmail elérését.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun tartomány',
        'mailgun_domain_comment' => 'Adja meg a Mailgun tartománynevét.',
        'mailgun_secret' => 'Titkos jelszó',
        'mailgun_secret_comment' => 'Adja meg a Mailgun API kulcsát.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Titkos jelszó',
        'mandrill_secret_comment' => 'Adja meg Mandrill API kulcsát.',
        'ses' => 'SES',
        'ses_key' => 'SES kulcs',
        'ses_key_comment' => 'Adja meg az API kulcsot',
        'ses_secret' => 'SES kód',
        'ses_secret_comment' => 'Adja meg az API titkos kulcsot',
        'sparkpost' => 'SparkPost',
        'sparkpost_secret' => 'SparkPost kód',
        'sparkpost_secret_comment' => 'Adja meg az API titkos kulcsot',
        'ses_region' => 'SES régió',
        'ses_region_comment' => 'Adja meg a régiót (pl. us-east-1)',
        'drivers_hint_header' => 'Hiányzó komponens',
        'drivers_hint_content' => 'A levél kiküldéséhez szükséges, hogy telepítve legyen az ":plugin" nevű bővítmény.',
    ],
    'mail_templates' => [
        'menu_label' => 'Sablonok',
        'menu_description' => 'Levél típusok és elrendezések menedzselése.',
        'new_template' => 'Új sablon',
        'new_layout' => 'Új elrendezés',
        'new_partial' => 'Új részlap',
        'template' => 'Sablon',
        'templates' => 'Sablonok',
        'partial' => 'Részlap',
        'partials' => 'Részlapok',
        'menu_layouts_label' => 'Levél elrendezések',
        'menu_partials_label' => 'Levél részlapok',
        'layout' => 'Elrendezés',
        'layouts' => 'Elrendezések',
        'no_layout' => '-- nincs --',
        'name' => 'Név',
        'name_comment' => 'Erre a sablonra hivatkozásként használt egyedi név.',
        'code' => 'Kód',
        'code_comment' => 'Erre a sablonra hivatkozásként használt egyedi kód.',
        'subject' => 'Tárgy',
        'subject_comment' => 'Az e-mail üzenet tárgya',
        'description' => 'Leírás',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Egyszerű szöveg',
        'test_send' => 'Tesztüzenet küldése',
        'test_success' => 'A tesztüzenet elküldése sikerült.',
        'test_confirm' => 'Teszt üzenet küldése a(z) ":email" címre. Folytatja?',
        'creating' => 'Sablon létrehozása...',
        'creating_layout' => 'Elrendezés létrehozása...',
        'saving' => 'Sablon mentése...',
        'saving_layout' => 'Elrendezés mentése...',
        'delete_confirm' => 'Valóban törölni akarja a sablont?',
        'delete_layout_confirm' => 'Valóban törölni akarja az elrendezést?',
        'deleting' => 'Sablon törlése...',
        'deleting_layout' => 'Elrendezés törlése...',
        'sending' => 'Üzenet küldése folyamatban...',
        'return' => 'Vissza a sablonokhoz',
        'options' => 'Beállítások',
        'disable_auto_inline_css' => 'Automatikusan beágyazott CSS tiltása',
    ],
    'mail_brand' => [
        'menu_label' => 'Kinézet',
        'menu_description' => 'A színek és más vizuális jellemzők módosítása.',
        'page_title' => 'Levél megjelenésének testreszabása',
        'sample_template' => [
            'heading' => 'Címsor',
            'paragraph' => 'Ez egy bekezdés Lorem Ipsum szöveggel és hivatkozással. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Elem',
                'description' => 'Leírás',
                'price' => 'Ár',
                'centered' => 'középre igazítva',
                'right_aligned' => 'jobbra igazítva',
            ],
            'buttons' => [
                'primary' => 'Elsődleges gomb',
                'positive' => 'Pozitív gomb',
                'negative' => 'Negatív gomb',
            ],
            'panel' => 'Kiemelt szöveg',
            'more' => 'Még több szöveg',
            'promotion' => 'Kupon kód: OCTOBER',
            'subcopy' => 'Utóirat helye',
            'thanks' => 'Üdvözlettel',
        ],
        'fields' => [
            '_section_background' => 'Hátterek',
            'body_bg' => 'Törzs háttere',
            'content_bg' => 'Tartalom háttere',
            'content_inner_bg' => 'Belső tartalom háttere',
            '_section_buttons' => 'Gombok',
            'button_text_color' => 'Szöveg színe',
            'button_primary_bg' => 'Elsődleges gomb háttere',
            'button_positive_bg' => 'Pozitív gomb háttere',
            'button_negative_bg' => 'Negatív gomb háttere',
            '_section_type' => 'Tipográfia',
            'header_color' => 'Fejléc színe',
            'heading_color' => 'Címsorok színe',
            'text_color' => 'Szöveg színe',
            'link_color' => 'Hivatkozás színe',
            'footer_color' => 'Lábléc színe',
            '_section_borders' => 'Szegélyek',
            'body_border_color' => 'Törzs szegély színe',
            'subcopy_border_color' => 'Utóirat szegély színe',
            'table_border_color' => 'Táblázat szegély színe',
            '_section_components' => 'Komponensek',
            'panel_bg' => 'Panel háttere',
            'promotion_bg' => 'Promóció háttere',
            'promotion_border_color' => 'Promóció szegély színe',
        ],
    ],
    'install' => [
        'project_label' => 'Csatolás',
        'plugin_label' => 'Bővítmény telepítése',
        'theme_label' => 'Téma telepítése',
        'missing_plugin_name' => 'Adja meg a telepítendő bővítmény nevét.',
        'missing_theme_name' => 'Adja meg a telepítendő téma nevét.',
        'install_completing' => 'A telepítési folyamat befejezése',
        'install_success' => 'A bővítmény telepítése sikerült.',
    ],
    'updates' => [
        'title' => 'Gépház',
        'name' => 'Honlap állapota',
        'menu_label' => 'Gépház',
        'menu_description' => 'A rendszer frissítése, valamint a bővítmények kezelése.',
        'return_link' => 'Vissza a gépházhoz',
        'retry_label' => 'Újra próbál',
        'plugin_name' => 'Név',
        'plugin_code' => 'Kód',
        'plugin_description' => 'Leírás',
        'plugin_version' => 'Verzió',
        'plugin_latest' => 'Legújabb',
        'plugin_author' => 'Fejlesztő',
        'plugin_not_found' => 'A bővítmény nem található',
        'plugin_version_not_found' => 'Bővítmény verzió nem található',
        'theme_not_found' => 'A téma nem található',
        'core_build' => 'Új verzió: :build',
        'core_build_help' => 'Elérhető a legújabb hivatalos kiadás.',
        'core_downloading' => 'Rendszer letöltése...',
        'core_extracting' => 'Rendszer kicsomagolása...',
        'core_set_build' => 'Rendszer beállítása...',
        'changelog' => 'Kiadott verziók',
        'changelog_view_details' => 'Részletek',
        'themes' => 'Témák',
        'plugin_downloading' => 'Bővítmény letöltése: :name',
        'plugin_removing' => 'Bővítmény eltávolítása: :name',
        'plugin_extracting' => 'Bővítmény kicsomagolása: :name',
        'plugin_version_none' => 'Új bővítmény',
        'plugin_current_version' => 'Aktuális verzió',
        'theme_new_install' => 'Új téma telepítése.',
        'theme_downloading' => 'Téma letöltése: :name',
        'theme_removing' => 'Téma eltávolítása: :name',
        'theme_extracting' => 'Téma kicsomagolása: :name',
        'update_label' => 'Honlap frissítése',
        'update_completing' => 'Folyamat befejezése',
        'update_loading' => 'Frissítések betöltése...',
        'update_success' => 'A frissítés sikeresen megtörtént.',
        'update_failed_label' => 'A frissítés nem sikerült.',
        'force_label' => 'Frissítés kényszerítése',
        'found' => [
            'label' => 'Új verzió elérhető!',
            'help' => 'Töltse le a legújabb frissítéseket.',
        ],
        'none' => [
            'label' => 'A weboldal naprakész',
            'help' => 'Gratulálunk! A weboldala naprakész.',
        ],
        'important_action' => [
            'empty' => 'Művelet kiválasztása',
            'confirm' => 'Frissítés elfogadása',
            'skip' => 'Frissítés kihagyása (csak most)',
            'ignore' => 'Frissítés kihagyása (mindig)',
        ],
        'important_action_required' => 'Művelet szükséges',
        'important_view_guide' => 'Frissítési útmutató megtekintése',
        'important_view_release_notes' => 'Kiadási megjegyzések megtekintése',
        'important_alert_text' => 'Néhány frissítés körültekintést igényel.',
        'details_title_plugin' => 'Bővítmény részletei',
        'details_title_theme' => 'Téma részletei',
        'details_view_homepage' => 'Weboldal',
        'details_readme' => 'Dokumentáció',
        'details_readme_missing' => 'Nincs megadva leírás.',
        'details_changelog' => 'Kiadott verziók',
        'details_changelog_missing' => 'Nincs kiadási jegyzék.',
        'details_upgrades' => 'Frissítési útmutató',
        'details_upgrades_missing' => 'Nincs megadva instrukció.',
        'details_licence' => 'Felhasználási feltételek',
        'details_view_licence' => 'Licenc megtekintése',
        'details_licence_missing' => 'Nincs megadva licenc.',
        'details_current_version' => 'Verzió',
        'details_author' => 'Fejlesztő',
    ],
    'market' => [
        'menu_label' => 'Piactér',
        'menu_description' => 'Bővítmények és témák kezelése és telepítése.',
        'content_loading' => 'Betöltés...',
    ],
    'server' => [
        'connect_error' => 'Hiba a kiszolgálóhoz való csatlakozáskor.',
        'response_not_found' => 'A frissítési kiszolgáló nem található.',
        'response_invalid' => 'Érvénytelen válasz érkezett a kiszolgálóról.',
        'response_empty' => 'Üres válasz érkezett a kiszolgálóról.',
        'file_error' => 'Nem sikerült továbbítania a kiszolgálónak a csomagot.',
        'file_corrupt' => 'A kiszolgálóról letöltött fájl sérült.',
    ],
    'behavior' => [
        'missing_property' => 'A(z) :class osztálynak kell definiálnia a(z) :behavior viselkedés által használt $:property tulajdonságot.',
    ],
    'config' => [
        'not_found' => 'Nem található a(z) :location számára definiált :file konfigurációs fájl.',
        'required' => 'A(z) :location helyen használt konfigurációnak meg kell adnia egy \':property\' értéket.',
    ],
    'zip' => [
        'extract_failed' => 'Nem tömöríthető ki a(z) \':file\' fájl.',
    ],
    'event_log' => [
        'hint' => 'Ez a napló a rendszerben történt lehetséges hibákat listázza ki. Például a kivételeket és a hibakeresési információkat.',
        'menu_label' => 'Esemény napló',
        'menu_description' => 'A rendszer hiba üzeneteinek megtekintése.',
        'empty_link' => 'Kiürítés',
        'empty_loading' => 'A kiürítés folyamatban...',
        'empty_success' => 'Az esemény napló kiürítése sikerült.',
        'return_link' => 'Vissza az esemény naplóhoz',
        'id' => 'Azonosító',
        'id_label' => 'Azonosító',
        'created_at' => 'Időpont',
        'message' => 'Üzenet',
        'level' => 'Típus',
        'preview_title' => 'Esemény részletei',
    ],
    'request_log' => [
        'hint' => 'Ez a napló a böngésző kérelmeket listázza ki. Ha például egy látogató nem létező aloldalt nyit meg, akkor egy 404-es állapotkódú bejegyzés jön létre.',
        'menu_label' => 'Kérelem napló',
        'menu_description' => 'Rossz vagy átirányított kérelmek megtekintése.',
        'empty_link' => 'Kiürítés',
        'empty_loading' => 'A kiürítés folyamatban...',
        'empty_success' => 'A kérelem napló kiürítése megtörtént.',
        'return_link' => 'Vissza a kérelem naplóhoz',
        'id' => 'Azonosító',
        'id_label' => 'Azonosító',
        'count' => 'Számláló',
        'referer' => 'Hivatkozás',
        'url' => 'Webcím',
        'status_code' => 'Kód',
        'preview_title' => 'Kérelem részletei',
    ],
    'permissions' => [
        'name' => 'Rendszer',
        'manage_system_settings' => 'Beállítások kezelése',
        'manage_software_updates' => 'Frissítések és bővítmények kezelése',
        'access_logs' => 'Naplók megtekintése',
        'manage_mail_templates' => 'Levél sablonok kezelése',
        'manage_mail_settings' => 'Levelezési beállítások kezelése',
        'manage_other_administrators' => 'Adminisztrátorok kezelése',
        'manage_preferences' => 'Saját beállítások kezelése',
        'manage_editor' => 'Kódszerkesztő testreszabása',
        'view_the_dashboard' => 'Vezérlőpult elérése',
        'manage_default_dashboard' => 'Vezérlőpult testreszabása',
        'manage_branding' => 'Kinézet testreszabása',
    ],
    'log' => [
        'menu_label' => 'Engedélyek',
        'menu_description' => 'Válassza ki, hogy mely műveleteket szeretne naplózni.',
        'default_tab' => 'Engedélyek',
        'log_events' => 'Események naplózása',
        'log_events_comment' => 'A rendszer üzeneteinek eltárolása.',
        'log_requests' => 'Kérelmek naplózása',
        'log_requests_comment' => 'Rossz vagy átirányított kérelmek eltárolása.',
        'log_theme' => 'Téma változtatások naplózása',
        'log_theme_comment' => 'A fájlokban történt változtatások eltárolása.',
    ],
    'media' => [
        'invalid_path' => 'Érvénytelen elérési útvonal: \':path\'',
        'folder_size_items' => 'fájl',
    ],
    'page' => [
        'custom_error' => [
            'label' => 'Oldal hiba',
            'help' => 'Sajnáljuk, de hiba történt, ezért az oldal nem megjeleníthető.',
        ],
        'invalid_token' => [
            'label' => 'Biztonsági kód érvényessége lejárt. Kérjük töltse be újra az oldalt.',
        ],
        'maintenance' => [
            'label' => 'Hamarosan visszatérünk!',
            'help' => 'A weboldal karbantartás alatt áll. Látogasson vissza később!',
            'message' => 'Üzenet:',
            'available_at' => 'Újrapróbálás:',
        ],
    ],
    'pagination' => [
        'previous' => 'Előző',
        'next' => 'Következő',
    ],
];