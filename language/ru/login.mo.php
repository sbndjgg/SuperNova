<?php

/*
#############################################################################
#  Filename: login.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#  Copyright © 2009 MSW
#############################################################################
*/

/**
*
* @package language
* @system [Russian]
* @version 40a3.7
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();

global $config;

//$lang = array_merge($lang,
//$lang->merge(
$a_lang_array = (array(
  'Login' => 'Логин',
  'User_name' => 'Имя:',
  'Authorization' => 'Авторизация',
//  'Password' => 'Пароль:',
//  'neededpass' => 'Пароль',
  'Please_Login' => 'Пожалуйста <a href="login.php" target="_main">войдите...</a>',
  'Please_Wait' => 'Подождите',
  'Remember_me' => 'Запомнить меня',
  'Register' => 'Информация о ошибке',
  'Login_Error' => 'Ошибка',
  'PleaseWait' => 'Подождите',
  'PasswordLost' => 'Восстановить пароль',
  'Login_Ok' => 'Успешное подключение, <a href="./"><blink>перенаправление...</blink></a><br><center><img src="design/images/progressbar.gif"></center>',
  'Login_FailPassword' => 'Неверное имя и/или пароль<br /><a href="login.php" target="_top">Назад</a>',
  'Login_FailUser' => 'Такого игрока не существует.<br><a href=login.php>Назад</a>',
  'log_univ' => 'Добро пожаловать в нашу Вселенную!',
  'log_reg' => 'Зарегистрироваться',
  'log_reg_main' => 'Зарегистрироваться',
  'log_menu' => 'Меню',
  'log_stat_menu' => 'Статистика',
  'log_enter' => 'Войти',
  'log_news' => 'Новости сервера',
  'log_cred' => 'О сервере',
  'log_faq' => 'FAQ по игре',
  'log_forums' => 'Форум',
  'log_contacts' => 'Администрация',
  'log_desc' => '<strong>СуперНова — это онлайновая мультиплеерная космическая браузерная стратегия.</strong> Тысячи игроков выступают одновременно против друг друга. Для игры Вам нужен лишь обычный браузер.',
  'log_toreg' => 'Зарегистрируйся сейчас!',
  'log_online' => 'Игроков Онлайн',
  'log_lastreg' => 'Новичок',
  'log_numbreg' => 'Всего аккаунтов',
  'log_welcome' => 'Добро пожаловать в',
  'vacation_mode' => 'Вы в отпуске<br> отключить режим отпуска можно через ',
  'hours' => ' часов',
  'vacations' => 'Режим отпуска',
  'log_scr1' => 'Скриншот верфи, здесь строятся и заказываются корабли на текущей планете. Нажмите на изображение чтобы увеличить.',
  'log_scr2' => 'Скриншот статистики, здесь здесь показывается ваш рейтинг среди других игроков по различным параметрам. Нажмите на изображение чтобы увеличить.',
  'log_scr3' => 'Скриншот вселенной, здесь можно увидеть вашу планету во вселенной, а также найти планеты других игроков. Нажмите на изображение чтобы увеличить.',
  'log_rules' => 'Правила игры',
  'log_banned' => 'Список забаненных',
  'log_see_you' => 'Надеемся вас снова увидеть на просторах нашей Вселенной. Удачи!<br><a href="login.php">Перейти на страницу входа в игру</a>',
  'log_session_closed' => 'Сессия закрыта.',
  'registry' => 'Регистрация',
  'form' => 'Форма регистрации',
  'Undefined' => '- неопределённый -',
  'Male' => 'Мужской',
  'Female' => 'Женский',
  'Multiverse' => 'XNova',
  'E-Mail' => 'Адрес e-Mail',
  'MainPlanet' => 'Имя главной планеты',
  'GameName' => 'Имя',
  'gender' => 'Пол',
  'accept' => 'Я согласен с правилами',
  'reg_i_agree' => 'Я ознакомился и согласен с',
  'reg_with_rules' => 'правилами игры',
  'signup' => 'Зарегистрироваться',
  'Languese' => 'Язык',
  'log_reg_text0' => 'Перед регистрацией ознакомьтесь с',
  'log_reg_text1' => 'Регистрация означает, что вы полность прочли и согласились со всеми пунктами правил. Если вы не согласны хоть с каким-то пунктом правил - пожалуйста, не регестрируйтесь.',
  'thanksforregistry' => 'Поздравляем вас с успешной регистрацией! Вы будете перенаправлены на главную страницу вашей планеты через 10 секунд, если этого не произошло нажмите на эту <a href=overview.php><u>ссылку!</u></a>',
  'welcome_to_universe' => 'Добро пожаловать в OGame!!!',
  'please_click_url' => 'Для того чтобы использовать аккаунт, вы должны активировать его нажав на эту ссылку',
  'regards' => 'Удачи!',
  'error_lang' => 'Этот язык не поддерживается!<br />',
  'error_mail' => 'Неверный E-Mail !<br />',
  'error_planet' => 'Другая планета уже имеет то же название !<br />',
  'error_hplanetnum' => 'Название планеты должно быть написано ТОЛЬКО латинскими буквами !<br />',
  'error_character' => 'Неверное имя !<br />',
  'error_charalpha' => 'Вы можете использовать ТОЛЬКО латинские буквы !<br />',
  'error_password' => 'Пароль должен состоять как минимум из 4 знаков !<br />',
  'error_rgt' => 'Вы должны согласиться с правилами !<br />',
  'error_userexist' => 'Такое имя уже используется !<br />',
  'error_emailexist' => 'Такой e-mail уже используется !<br />',
  'error_sex' => 'Ошибка в выборе пола !<br />',
  'error_mailsend' => 'Ошибка в отправлении электронной почты, ваш пароль: ',
  'reg_welldone' => 'Регистрация завершена! Ваш пароль отправлен на указанный при регистрации почтовый ящик. Вот он же еще раз на всякий случай:<br>',
  'error_captcha' => 'Неверный графический код !<br/>',
  'error_v' => 'Повторить еще раз !<br />',
  'log_login_page' => 'Войти в игру',
  'log_reg_already' => 'Уже есть регистрация? Воспользутесь ссылкой ',
  'log_reg_already_lost' => 'Не помните пароль? Воспользутесь ссылкой ',

  'log_lost_header' => 'Сброс пароля',
  'log_lost_code' => 'Код подтверждения',
  'log_lost_description2' => 'Если у Вас есть код подтверждения - введите его ниже и нажмите кнопку "Сбросить пароль". На Ваш e-mail будет отправлено письмо с новым паролем<br /><br />
    Если вы уже запрашивали код подтвеждения, но не видите письмо в почтовом ящике - проверьте папку нежелательных писем (папка "спама"). Ваш почтовый сервер мог отметить наше письмо как "нежелательное"<br /><br />
    Если и там нет письма - напишите письмо Администрации сервера на адрес <span class="ok">' . $config->server_email . '</span>',
  'log_lost_reset_pass' => 'Сбросить пароль',
  'log_lost_send_mail' => 'Отправить код подтверждения',
  'log_lost_sent_code' => 'На указанный емейл отправлено письмо с дальнейшими инструкциями по сбросу пароля',
  'log_lost_sent_pass' => 'Так же на Ваш емейл отправлено письмо с новым паролем',

  'log_lost_err_email' => 'Указанный емейл не зарегестрирован в базе данных. Это может означать одно из нижеперечисленного:<br>Вы ошиблись при вводе емейла. Вернитесь на предыдущую страницу и попробуйте еще раз<br>Ваш аккаунт был удален из-за неактивности. Зарегестрируйтесь заново<br>Вы пытаетесь зайти в неправильную игровую Вселенную. Внимательно проверьте название текущей Вселенной и в случае ошибки зайдите на правильную Вселенную',
  'log_lost_err_sending' => 'Ошибка отправки сообщения по указанному емейлу. Сообщите об ошибке Администратору',
  'log_lost_err_code' => 'Указанный код подтверждения не зарегестрирован в базе данных. Это может означать одно из нижеперечисленного:<br>Вы ошиблись при вводе кода подтверждения. Вернитесь на предыдущую страницу и внимательно введите код<br>Вы пытаетесь ввести код подтверждения не в той Вселенной, для которой он был сгенерирован. Внимательно проверьте название текущей Вселенной и в случае ошибки зайдите на правильную Вселенную<br>Ваш аккаунт был удален из-за неактивности. Зарегестрируйтесь заново<br>Истек срок действия кода подтверждения. Проверьте дату действия кода в письме. Если она прошла, запросите новый код подтверждения',
  'log_lost_err_admin' => 'Члены Команды сервера (модераторы, операторы, администраторы итд) не могут использовать функцию сброса пароля. Обратитесь к Администратору сервера для смены пароля',
  'log_lost_err_change' => 'Ошибка смены пароля в базе данных. Сообщите об ошибке Администратору',

  'log_lost_description1' => 'Введите основной e-mail, на который зарегестрирован Ваш аккаунт. На него будет отправлено письмо с кодом подтверждения для сброса пароля',
  'login_register_offer' => 'Нажмите здесь, что бы зарегестрироваться',
  'login_password_restore_offer' => 'Нажмите здесь, что бы сбросить пароль',

  'login_register_email_hint' => 'Указывайте работающий e-mail - владельцем аккаунта считается владелец указанного e-mail<br />
    Постарайтесь не использовать ящики на mail.ru',
));
