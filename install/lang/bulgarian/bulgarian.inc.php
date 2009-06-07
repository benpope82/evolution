<?php
/**
 * MODx language File
 *
 * @author davaeron
 * @package MODx installer
 * @version 1.0
 * @translation     INFORMATOR TEAM www.informator.org  23.05.2008
 * Filename:       /install/lang/bulgarian/bulgarian.inc.php
 * Language:       English
 * Encoding:       utf-8
 */
$_lang["license"] = '<h2>MODx Лицензионно Споразумение.</h2>
<hr style="text-align:left;height:1px;width:90%;" />
<h3>Вие трябва да се съгласите с Лиценза преди да продължите с инсталацията.</h3>
<p>Използването на този софтуер е обект на GPL лиценз. За да ви помогнем да разберете
  какво е GPL лиценз и как той влияе на способността ви да използвате софтуера, ние
  ще ви го предоставим накратко:</p>
<h3>GNU General Public License е лиценз за Свободен Софтуер.</h3>
<p>Подобно на всички останали лицензи за Свободен Софтуер, той ви дава следните четири права:</p>
<ul>
  <li>Правото свободно да използвате софтуера за всякакви цели.</li>
  <li>Свободата да изучавате как работи софтуера и да го адаптирате към вашите специфични нужди.</li>
  <li>Правото да разпространявате копия на софтуера, като по този начин помагате на хората.</li>
  <li>Правото да доусъвършенствате софтуера и да предоставяте своите подобрения,
    така че да може да се облагодетелства цялата общност.</li>
</ul>
<p>Можете да упражнявате дадените ви свободи, съгласявайки се с
  изричните условия на този лиценз. Тези принципни условия са:</p>
<ul>
  <li>Върху всяко разпространявано копие, вие сте длъжен на видно място и по подходящ начин да сложите
    съответната забележка, отнасяща се до авторските права и ограничената отговорност. Вие сте длъжен,
    също така да запазите в цялост всички бележки, които се отнасят до този лиценз и до ограничаване
    отговорността по него; както и да предоставите на всички рецепиенти на софтуера копие от
    GNU General Public License, заедно със самия софтуер. Всеки превод на GNU General Public License
    трябва да бъде придружен от оригинала на GNU General Public License.</li>
  <li>Ако промените своето копие или копия на софтуера или част от него, или разработите
    друг софтуер, базиран на него, имате право да разпространявате полученото произволно
    произведение под GNU General Public License. Всеки превод на GNU General Public License
    трябва да бъде придружен от оригинала на GNU General Public License.</li>
  <li>Ако копирате или разпространявате софтуера, това трябва да е придружено съответно с
    пълния програмен код, или с писмено предложение за предоставяне на програмния код,
    валидно най-малко три години.</li>
  <li>Всяко от тези условия може да бъде отхвърлено, ако получите разрешение за това от
    носителя на правата.</li>
  <li>Горепосоченото по никакъв начин не засяга правото ви на свободно договаряне или някакви други права.</li>
</ul>
<p>Горепосоченото е част от GNU General Public License. Продължавайки нататък, вие се
  съгласявате с GNU General Public Licence, не само с тази част. Горепосоченото е просто
  резюме на GNU General Public Licence, като не гарантираме точността. Особено препоръчително е
  да прочетете целия <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public
  License</a> преди да продължите, който също така може да бъде намерен в лицензния файл,
  разпространяван с този пакет.</p>';
$_lang["encoding"] = 'utf-8';
$_lang["language_code"] = 'bg';
$_lang["modx_install"] = 'MODx &raquo; Инсталиране';
$_lang["loading"] = 'Зареждане...';
$_lang["Begin"] = 'Начало';
$_lang["status_connecting"] = ' Свързване с хостинг доставчика: ';
$_lang["status_failed"] = 'Неуспешно!';
$_lang["status_passed"] = 'Успешно - БД е избрана';
$_lang["status_passed_server"] = 'Успешно - колациите са достъпни';
$_lang["status_passed_database_created"] = 'Успешно - БД е създадена';
$_lang["status_checking_database"] = 'Проверка на БД: ';
$_lang["status_failed_could_not_select_database"] = 'Неуспешно - не може да бъде избрана БД';
$_lang["status_failed_could_not_create_database"] = 'Неуспешно - не може да бъде създадена БД';
$_lang["status_failed_table_prefix_already_in_use"] = 'Неуспешно - префикса на таблицата вече се използва!';
$_lang["welcome_message_welcome"] = 'Добре дошли в Инсталатора на MODx.';
$_lang["welcome_message_text"] = 'Тази програма ще ви води през останалата част от инсталацията.';
$_lang["welcome_message_select_begin_button"] = 'Моля, изберете бутона `Начало`, за да започнете инсталацията:';
$_lang["installation_mode"] = 'Режим на Инсталация';
$_lang["installation_new_installation"] = 'Нова Инсталация';
$_lang["installation_install_new_copy"] = 'Инсталиране на ново копие на ';
$_lang["installation_install_new_note"] = '. Моля, имайте предвид, че някоя опция може да презапише данните вътре в БД.';
$_lang["installation_upgrade_existing"] = 'Обновяване на инсталация';
$_lang["installation_upgrade_existing_note"] = 'Обновяване на налични файлове и БД.';
$_lang["installation_upgrade_advanced"] = 'Обновяване за напреднали<br /><small>(редактиране на конфигурацията<br /> на БД)</small>';
$_lang["installation_upgrade_advanced_note"] = 'За напреднали администратори на БД или при преместване на сървъри с различна колация на БД. <b>Трябва да знаете пълното име на БД, потребителското име, парола и подробности за връзката/колацията.</b>';
$_lang["connection_screen_connection_information"] = 'Информация за връзката';
$_lang["connection_screen_server_connection_information"] = 'Връзка към сървъра и информация за логване';
$_lang["connection_screen_server_connection_note"] = 'Моля, въведете името на сървъра, потребителското име и паролата и тогава тествайте връзката.';
$_lang["connection_screen_server_test_connection"] = 'Кликнете, за да тествате връзката към сървъра и достъпните колации.';
$_lang["connection_screen_database_connection_information"] = 'Информация за БД';
$_lang["connection_screen_database_connection_note"] = 'Моля, въведете името на БД, създадена за MODX. В случай, че няма такава БД, инсталаторът ще се опита да я създаде. Създаването може да е неуспешно, тъй като зависи от конфигурацията на MySQL или правата за достъп до БД на потребителя.';
$_lang["connection_screen_database_test_connection"] = 'Кликнете, за да създадете БД или да тествате връзката към нея';
$_lang["connection_screen_database_name"] = 'Име на БД:';
$_lang["connection_screen_table_prefix"] = 'Префикс на таблицата:';
$_lang["connection_screen_collation"] = 'Колация:';
$_lang["connection_screen_connection_method"] = 'Начин на свързване - метод:';
$_lang["connection_screen_character_set"] = 'Кодова таблица на връзката:';
$_lang["connection_screen_database_host"] = 'Хостване на БД:';
$_lang["connection_screen_database_login"] = 'Име за връзка към БД:';
$_lang["connection_screen_database_pass"] = 'Парола за БД:';
$_lang["connection_screen_default_admin_information"] = 'Информация за Администратора';
$_lang["connection_screen_default_admin_user"] = 'Администратор по подразбиране';
$_lang["connection_screen_default_admin_note"] = 'Трябва да въведете данните за главния администраторски акаунт. Попълнете името и паролата си тук, за да не ги забравите. Ще имате нужда от тях за логване след като приключи инсталацията.';
$_lang["connection_screen_default_admin_login"] = 'Потребителско Име:';
$_lang["connection_screen_default_admin_email"] = 'Em@il адрес:';
$_lang["connection_screen_default_admin_password"] = 'Парола:';
$_lang["connection_screen_default_admin_password_confirm"] = 'Потвърди паролата:';
$_lang["optional_items"] = 'Допълнителни опции';
$_lang["optional_items_note"] = 'Моля, изберете допълнителни опции и кликнете на Инсталиране на:';
$_lang["sample_web_site"] = 'Примерен Уеб Сайт';
$_lang["install_overwrite"] = 'Инсталиране/Презаписване - ';
$_lang["sample_web_site_note"] = 'Моля, имайте предвид, че това ще <b style=\"color:#CC0000\">презапише</b> съществуващите документи и ресурси.';
$_lang["checkbox_select_options"] = 'Опции:';
$_lang["all"] = 'Всички';
$_lang["none"] = 'Никой';
$_lang["toggle"] = 'Включване';
$_lang["templates"] = 'Шаблони';
$_lang["install_update"] = 'Инсталиране/Обновяване - ';
$_lang["chunks"] = 'Чънкове';
$_lang["modules"] = 'Модули';
$_lang["plugins"] = 'Плъгини';
$_lang["snippets"] = 'Снипети';
$_lang["preinstall_validation"] = 'Потвърждаване на инсталацията';
$_lang["summary_setup_check"] = 'Направени бяха редица проверки, за да сме сигурни, че инсталацията може да започне.';
$_lang["checking_php_version"] = 'Проверка на PHP версията: ';
$_lang["failed"] = 'Неуспешно!';
$_lang["ok"] = 'ОК!';
$_lang["you_running_php"] = ' - PHP версията ви е ';
$_lang["modx_requires_php"] = ', и MODx върви на PHP 4.2.0 или по-висока';
$_lang["php_security_notice"] = '<legend>Бележки за сигурността</legend><p>Тъй като MODx ще работи на вашата PHP версия, използването на MODx на тази версия не се препоръчва. Вашата версия на PHP е уязвима по отношение на дупки в сигурността. Моля,обновете към PHP версия 4.3.8 или по-висока. Препоръчително е да обновите версията си за сигурността на вашия сайт.</p>';
$_lang["checking_registerglobals"] = 'Проверка дали Register_Globals са изключени: ';
$_lang["checking_registerglobals_note"] = 'Тази конфигурация прави сайта ви много по-уязвим към Cross Site Scripting (XSS) атаки. Трябва да говорите с вашия доставчик за забраняване на тази настройка, което става обикновено по един от трите начина: модифициране на основния php.ini файл, добавяне на правила в .htaccess файла в основната директория (root) на вашата MODx инсталация, или добавяне на собствен php.ini във всяка директория на вашата инсталация, за да препокрие основния файл. Въпреки, това ще можете да инсталирате MODx, но се считайте за предупредени.'; //Look at changing this to provide a solution.
$_lang["checking_sessions"] = 'Проверка дали сесиите са правилно конфигурирани: ';
$_lang["checking_if_cache_exist"] = 'Проверка дали съществува директорията <span class=\"mono\">assets/cache</span> : ';
$_lang["checking_if_cache_writable"] = 'Проверка дали в директорията <span class=\"mono\">assets/cache</span> може да се пише: ';
$_lang["checking_if_cache_file_writable"] = 'Проверка дали може да се пише във файла <span class=\"mono\">assets/cache/siteCache.idx.php</span> : ';
$_lang["checking_if_cache_file2_writable"] = 'Проверка дали може да се пише във файла <span class=\"mono\">assets/cache/sitePublishing.idx.php</span> : ';
$_lang["checking_if_images_exist"] = 'Проверка дали съществува директорията <span class=\"mono\">assets/images</span> : ';
$_lang["checking_if_images_writable"] = 'Проверка дали в директорията <span class=\"mono\">assets/images</span> може да се пише: ';
$_lang["checking_if_export_exists"] = 'Проверка дали съществува директорията <span class=\"mono\">assets/export</span> : ';
$_lang["checking_if_export_writable"] = 'Проверка дали в директорията <span class=\"mono\">assets/export</span> може да се пише: ';
$_lang["checking_if_config_exist_and_writable"] = 'Проверка дали <span class=\"mono\">manager/includes/config.inc.php</span> съществува и може да се пише в него: ';
$_lang["config_permissions_note"] = 'За нови Linux/Unix инсталации, моля, създайте празен файл с име <span class=\"mono\">config.inc.php</span> в директорията <span class=\"mono\">manager/includes/</span> и задайте права на файла 0666.';
$_lang["creating_database_connection"] = 'Създаване на връзка към БД: ';
$_lang["database_connection_failed"] = 'Връзката към БД неуспешна!';
$_lang["database_connection_failed_note"] = 'Моля, проверете данните за връзка с БД и опитайте отново.';
$_lang["database_use_failed"] = 'Базата от Данни не може да бъде избрана!';
$_lang["database_use_failed_note"] = 'Моля, проверете правата за достъп до БД на определения потребител и опитайте отново.';
$_lang["checking_table_prefix"] = 'Проверка на префикса на таблицата `';
$_lang["table_prefix_already_inuse"] = ' - Префиксът на таблицата вече се използва в тази БД!';
$_lang["table_prefix_already_inuse_note"] = 'Инсталаторът не може да инсталира в избраната БД, тъй като в нея вече съществуват таблици със зададения префикс. Моля, изберете нов префикс за таблицата и стартирайте Инсталатора отново.';
$_lang["table_prefix_not_exist"] = ' - Префиксът на таблицата не съществува в тази БД!';
$_lang["table_prefix_not_exist_note"] = 'Инсталаторът не може да инсталира в избраната БД, тъй като тя не съдържа таблици със зададения префикс, които да бъдат обновявени. Моля, изберете съществуващ префикс на таблица  и стартирайте Инсталатора отново.';
$_lang["setup_cannot_continue"] = 'За съжаление Инсталаторът не може да продължи в момента поради ';
$_lang["error"] = 'грешка';
$_lang["errors"] = 'грешки';
$_lang["please_correct_error"] = '. Моля, коригирайте грешката';
$_lang["please_correct_errors"] = '. Моля, коригирайте грешките';
$_lang["and_try_again"] = ', и опитайте отново. Ако имате нужда от помощ при оправяне на проблема';
$_lang["and_try_again_plural"] = ', и опитайте отново. Ако имате нужда от помощ при оправяне на проблемите';
$_lang["checking_mysql_version"] = 'Проверка на версията на MySQL: ';
$_lang["mysql_version_is"] = ' MySQL версията ви е: ';
$_lang["mysql_5051_warning"] = 'Има известни спорни въпроси с MySQL 5.0.51. Препоръчително е да обновите преди да продължите.';
$_lang["mysql_5051"] = ' MySQL версията на сървъра е 5.0.51!';
$_lang["checking_mysql_strict_mode"] = 'Проверка дали MySQL е в strict mode: ';
$_lang["strict_mode_error"] = 'MODx изисква strict mode да е disabled. Това можете да направите чрез настройките за режима на MySQL , като редактирате файла my.cnf или като се свържете със администратора на сървъра.';
$_lang["strict_mode"] = ' MySQL сървъра е в strict mode!';
$_lang["visit_forum"] = ', посетете <a href="http://www.modxcms.com/forums/" target="_blank">MODx Форумите</a>.';
$_lang["testing_connection"] = 'Проверка на връзката...';
$_lang["btnback_value"] = 'Назад';
$_lang["btnnext_value"] = 'Напред';
$_lang["retry"] = 'Опитай отново';
$_lang["alert_enter_host"] = 'Трябва да въведете стойност за хоста на БД!';
$_lang["alert_enter_login"] = 'Трябва да въведете име на потребител за достъп до БД!';
$_lang["alert_server_test_connection"] = 'Трябва да тествате връзката към сървъра!';
$_lang["alert_server_test_connection_failed"] = 'Проверката на връзката към сървъра е неуспешна!';
$_lang["alert_enter_database_name"] = 'Трябва да въведете валидно име на БД!';
$_lang["alert_table_prefixes"] = 'Префиксът на таблицата трябва да започва с буква!';
$_lang["alert_database_test_connection"] = 'Трябва да създадете ваша БД или да проверите избирането на БД!';
$_lang["alert_database_test_connection_failed"] = 'Проверката за избиране на вашата БД е неуспешна!';
$_lang["alert_enter_adminlogin"] = 'Трябва да въведете Потребителско име за Системния Администраторски акаунт!';
$_lang["alert_enter_adminpassword"] = 'Трябва да въведете Парола за Системния Администраторски акаунт!';
$_lang["alert_enter_adminconfirm"] = 'Админстраторската парола не съвпада с паролата за потвърждение!';
$_lang["iagree_box"] = 'Съгласен съм с условията на използване на този лиценз.';
$_lang["btnclose_value"] = 'Затваряне';
$_lang["running_setup_script"] = 'Работи инсталационен скрипт.... моля, изчакайте';
$_lang["modx_footer1"] = '&copy; 2005-2008 <a href="http://www.modxcms.com/" target="_blank" style="color: green; text-decoration:underline">MODx</a> Content Management Framework (CMF) проект. Всички права запазени. MODx е лицензиран под GNU GPL.';
$_lang["modx_footer2"] = 'MODx е свободен софтуер.  Бъдете креативни и свикнете да работите с MODx. Имайте предвид, че ако решите да правите промени и да предоставяте копие от вашия модифициран MODx, изходния код трябва да е свободен!';
$_lang["setup_database"] = 'Инсталаторът ще направи опит да конфигирира БД:<br />';
$_lang["setup_database_create_connection"] = 'Създаване на връзка към БД: ';
$_lang["setup_database_create_connection_failed"] = 'Връзката към БД неуспешна!';
$_lang["setup_database_create_connection_failed_note"] = 'Моля, проверете данните за логване към БД и опитайте отново.';
$_lang["setup_database_selection"] = 'Избиране на БД `';
$_lang["setup_database_selection_failed"] = 'Избирането на БД е неуспешно...';
$_lang["setup_database_selection_failed_note"] = 'БД не съществува. Инсталаторът ще се опита да я създаде.';
$_lang["setup_database_creation"] = 'Създаване на БД `';
$_lang["setup_database_creation_failed"] = 'Създаването на БД е неуспешно!';
$_lang["setup_database_creation_failed_note"] = ' - Инсталаторът не успя да създаде БД!';
$_lang["setup_database_creation_failed_note2"] = 'Инсталаторът не успя да създаде БД, а също не намери съществуваща БД със същото име. Вероятно, сигурността при вашия хостинг доставчик не позволява външни скриптове да създават БД. Моля, създайте БД според условията на вашия хостинг доставчик и стартирайте Инсталатора отново.';
$_lang["setup_database_creating_tables"] = 'Създаване на таблици в БД: ';
$_lang["database_alerts"] = 'БД - внимание!';
$_lang["setup_couldnt_install"] = 'Инсталаторът на MODx не може да инсталира/промени някои таблици вътре в избраната БД.';
$_lang["installation_error_occured"] = 'Следните грешки възникнаха по време на инсталацията';
$_lang["during_execution_of_sql"] = ' по време на изпълнение на SQL условие ';
$_lang["some_tables_not_updated"] = 'Някои таблици не бяха обновени. Това може да е вследствие на предишни модификации.';
$_lang["installing_demo_site"] = 'Инсталиране на демо сайт: ';
$_lang["writing_config_file"] = 'Записване на конфигурационния файл: ';
$_lang["cant_write_config_file"] = 'MODx не успя да запише конфигурационния файл. Моля, копирайте следното във файла ';
$_lang["cant_write_config_file_note"] = 'След като инсталацията завърши, можете да се логнете в Мениджъра на MODx, като напишете в браузера си YourSiteName.com/manager/.';
$_lang["unable_install_template"] = 'Не успя да инсталира Шаблон.  Файл';
$_lang["unable_install_chunk"] = 'Не успя да инсталира Чънк.  Файл';
$_lang["unable_install_module"] = 'Не успя да инсталира Модул.  Файл';
$_lang["unable_install_plugin"] = 'Не успя да инсталира Плъгин.  Файл';
$_lang["unable_install_snippet"] = 'Не успя да инсталира Снипет.  Файл';
$_lang["not_found"] = 'не е намерен';
$_lang["upgraded"] = 'Обновен';
$_lang["installed"] = 'Инсталиран';
$_lang["running_database_updates"] = 'Обновяване на БД: ';
$_lang["installation_successful"] = 'Инсталацията беше успешна!';
$_lang["to_log_into_content_manager"] = 'За да се логнете в Мениджъра (manager/index.php) кликнете на бутона `Затваряне` .';
$_lang["install"] = 'Инсталиране';
$_lang["remove_install_folder_auto"] = 'Изтрий директория install и файловете, които се намират в нея <br />&nbsp;(Тази операция изисква да бъдат гарантирани права за изтриване върху директорията install).';
$_lang["remove_install_folder_manual"] = 'Моля, запомнете да изтриете  директорията &quot;<b>install</b>&quot; преди да се логнете в Мениджъра.';
$_lang["install_results"] = 'Резултати от инсталацията';
$_lang["installation_note"] = '<strong>Забележка:</strong> След логване в Мениджъра, трябва да редактирате и съхраните настройките на Системата Конфигурция преди да преглеждате сайта си, като изберете <strong>Администрация</strong> -> Системна Конфигурация в Мениджъра на MODx.';
$_lang["upgrade_note"] = '<strong>Забележка:</strong> Преди да преглеждате сайта си, трябва да се логнете в Мениджъра с администраторския акаунт, след това да прегледате и съхраните настройките на Системната Конфигурация.';
?>