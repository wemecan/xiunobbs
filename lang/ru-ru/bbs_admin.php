<?php

return array(
	'user'=>'Пользователи',
	'forum'=>'Форум',
	'plugin'=>'Плагины',
	'other'=>'Другое',
	'buy'=>'Купить',
	
	'user_admin'=>'Администратор',
	'group_admin'=>'Администрирование групп пользователей',
	'forum_admin'=>'Администрирование форума',
	'post_admin'=>'Администрирование сообщений и ответов',
	'thread_admin'=>'Администрирование тем',
	'plugin_admin'=>'Администрирование плагинов и дополнений',
	'other_admin'=>'Администрирование разного',
	
	'admin_index_page'=>'Панель управления',
	'front_index_page'=>'Форум ',
	'admin_site_setting'=>'Настройки',
	'admin_setting_base'=>'Основные настройки',
	'admin_setting_smtp'=>'Настройки SMTP',
	'admin_other_cache'=>'Очистка кеша',
	'admin_clear_tmp'=>'Временные папки и файлы',
	'admin_clear_cache'=>'Общий кеш',
	'admin_clear_successfully'=>'Кеш успешно очищен',
		
	'admin_user_list'=>'Пользователи',
	'admin_thread_batch'=>'Управление темами форума',
	'admin_user_group'=>'Группы пользователей',
	'admin_user_create'=>'Добавить пользователя',
	'admin_plugin_local_list'=>'Загружено',
	'admin_plugin_official_list'=>'Официальный плагин',
	
	'admin_token_error'=>'Ошибка в токене администратора, попробуйте разблокировать IP администратора, отредактировав файл: conf.php, поле admin_bind_ip = 0',
	'admin_token_expiry'=>'Токен админа ошибочен, пожалуйста, перелогиньтесь',
	'forum_edit'=>'Редактировать форум',
	'user_edit'=>'Редактировать пользователя',
	'edit_sucessfully'=>'Успешно отредактировано',
	'item_not_exists'=>'{item} не существует',
	'item_not_moderator'=>'{item} не модератор',
	'group_not_exists'=>'Группа пользователей не существует',
	
	'admin_login'=>'Авторизация в админпанель',
	'save_conf_failed'=>'Не удалось сохранить конфигурацию в файл {file}, проверьте права доступа к файлу',
	'user_already_exists'=>'Пользователь уже существует',
	'email_already_exists'=>'E-mail уже используется ',
	'uid_not_exists'=>'Указанный UID не существует ',
	'data_not_changed'=>'Данные не изменены',
	'admin_cant_be_deleted'=>'Невозможно напрямую удалить Администратора, сначала удалите пользователя из группы Администраторов',
	
	// index
	'admin_index'=>'Панель управления',
	'site_stat_info'=>'Статистика',
	'disk_free_space'=>'Доступно',
	'server_info'=>'Сервер',
	'os'=>'OS',
	'post_max_size'=>'Max POST data size',
	'upload_max_filesize'=>'Max upload file size',
	'allow_url_fopen'=>'Allow open remote URL',
	'safe_mode'=>'Safe Mode',
	'max_execution_time'=>'Max execution time',
	'memory_limit'=>'Memroy limit',
	'client_ip'=>'Client IP',
	'server_ip'=>'Sever IP',
	'dev_team_info'=>'Разработчики',
	
	'for_safe_input_password_again'=>'В целях безопасности введите свой пароль еще раз',
	
	// setting
	'sitename'=>'Название сайта',
	'sitebrief'=>'Описание сайта',
	'sitebrief_tips'=>'Поддерживает HTML, новая строка с &lt;br&gt;',
	'runlevel'=>'Доступ к форуму',
	'user_create_email_on'=>'Активация регистрации через e-mail',
	'user_resetpw_on'=>'Включить сброс пароля',
	'lang'=>'Язык',
	'database'=>'База данных',
	'host'=>'Сервер',
	'port'=>'Порт',
	'account'=>'Логин',
	'smtp_host'=>'Сервер SMTP',
	'lang_ru-ru'=>'Русский',
	
	// forum
	'forum_list'=>'Список форумов',
	'forum_id'=>'ID форума',
	'forum_icon'=>'Иконка',
	'forum_name'=>'Название',
	'forum_rank'=>'Сортировка',
	'forum_edit'=>'Редактировать',
	'forum_delete'=>'Удалить',
	'forum_brief'=>'Описание',
	'forum_announcement'=>'Анонс',
	'moderator'=>'Модератор',
	'add_new_line'=>'Новая строка',
	'forum_edit_tip'=>'При редактировании и изменении, будьте предельно внимательны и осторожны.',
	'forum_cant_delete_system_reserved'=>'Не удается удалить зарезервированную систему',
	'forum_moduid_format_tips'=>'Не более 10 модераторов, через запятую, например: Jack,Lisa,Mike',
	'user_privilege'=>'Уровни доступа',
	'allow_view'=>'Просмотр',
	'allow_thread'=>'Создание тем',
	'allow_post'=>'Сообщения',
	'allow_upload'=>'Вложения',
	'allow_download'=>'Скачивание',
	'forum_delete_thread_before_delete_forum'=>'Пожалуйста, сначала удалите темы, а потом форум.',
	'forum_please_delete_sub_forum'=>'Пожалуйста, сначала удалите под-форум.',
	'forum_delete_successfully'=>'Успешно удалено',
	
	'thread_queue_not_exists'=>'Очередь не существует',
	'search_condition'=>'Условия поиска',
	'start_date'=>'Начало',
	'end_date'=>'Окончание',
	'searching'=>'Поиск.',
	'operating'=>'Операция',
	'operator_complete'=>'Операция завершена',
	'click_to_view'=>'Просмотр',
	'thread_userip'=>'IP ',
	'thread_search_result'=>'Результаты: {n} ',
	
	// user
	'please_check_delete_user'=>'Убедитесь в том, что вы хотите удалить пользователя',
	'user_delete_confirm'=>'Вы уверены?',
	'user_admin_cant_be_deleted'=>'Администратора нельзя удалить, сначала удалите пользователя из группы администраторов',
	'search_type'=>'Поиск',
	'user_privileges'=>'Уровень доступа',
	'author'=>'Автор',
	
	// user group
	'group_list'=>'Список групп',
	'group_edit'=>'Редактировать',
	'group_id'=>'ID группы',
	'group_name'=>'Название',
	'group_credits_from'=>'Опыт',
	'group_credits_to'=>'Уровень',
	'group_edit_tips'=>'Будьте предельно внимательны и осторожны при редактировании групп пользователей',
	'admin_privilege'=>'Уровень доступа администратора',
	'top'=>'ТОП',
	'ban_user'=>'Блокировка',
	'delete_user'=>'Удалить',
	'view_user_info'=>'Профиль',
	
	// Plugin
	
	'admin_plugin_official_list'=>'Официальные',
	'admin_plugin_official_free_list'=>'Бесплатные',
	'admin_plugin_official_fee_list'=>'Платные',	
	'plugin_dir'=>'Директория плагина',
	'plugin_bbs_version'=>'Версия форума',
	'price'=>'Цена',
	'installs'=>'Installs',
	'plugin_user_stars_fmt'=>'Пользовательские звезды',
	'plugin_sells'=>'Продает',
	'plugin_is_cert'=>'Сертифицировано',
	'local_plugin'=>'Скачанные',
	'official_plugin'=>'Официальные',
	'pugin_cate_0'=>'Все',
	'pugin_cate_1'=>'Стиль',
	'pugin_cate_2'=>'Мини',
	'pugin_cate_3'=>'Глобальные',
	'pugin_cate_4'=>'Внешний вид',
	'pugin_cate_99'=>'Без категории',
	'plugin_detail'=>'Описание',
	'plugin_not_exists'=>'Плагин не существует',
	'plugin_brief_url'=>'URL-адрес плагина',
	'plugin_versio_not_match'=>'Этот плагин предназначен для Xiuno BBS  {bbs_version}, Ваша версия: {version}',
	'plugin_download_sucessfully'=>'Загрузка плагина ({dir}) успешна, нажмите для установки',
	'plugin_install_sucessfully'=>'Плагин Plugin ( {name} ) успешно установлен',
	'plugin_unstall_sucessfully'=>'Плагин ( {name} ) успешно удален, toдля полного удаления удалите директорию плагинва {dir} ',
	'plugin_enable_sucessfully'=>'Плагин ( {name} ) успешно активирован',
	'plugin_disable_sucessfully'=>'Плагин ( {name} ) успешно выключен',
	'plugin_upgrade_sucessfully'=>'Плагин ( {name} ) успешно обновлен',
	'plugin_not_need_update'=>'Не требует обновлений',
	'plugin_set_relatied_dir_writable'=>'Для установки плагина: {dir} задайте права чтения/записи на папку плагина',
	'plugin_dependency_following'=>'Плагин зависит от другого плагига: {s}, сначала установите зависимости',
	'plugin_being_dependent_cant_delete'=>'Не могу удалить ({name}), зависит от плагина: {s}.',
	'server_response_empty'=>'Пустой ответ от сервера',
	'server_response_error'=>'Ошибка при ответе сервера',
	'zip_data_error'=>'Ошибка архива Zip',
	'format_maybe_error'=>'Формат может быть не верен',
	'plugin_maybe_download_failed'=>'Плагин мог быть загружен с ошибкой, не существует директория плагина',
	'plugin_name_error'=>'Ошибка названия плагина',
	'plugin_unstall_confirm_tips'=>'Удалдение очистит все данные плагина ( {name} ) вы уверены?',
	'plugin_task_locked'=>'Другой плагин занят этой задачей, задача заблокирована.',
	'plugin_return_data_error'=>'Return data error:',
	'plugin_is_free'=>'Бесплатный плагин',
	'plugin_is_not_free'=>'Это платный плагин, сначала вам нужно его купить',
	'plugin_is_bought'=>'Уже куплено',
	'plugin_not_bought'=>'Не куплено',
	'plugin_wechat_qrcode_pay'=>'Wechat SCAN for Pay',
	'plugin_service_qq'=>'Service QQ',
	
	// hook lang_ru_ru_bbs_admin.php
	
);

?>
