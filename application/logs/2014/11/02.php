<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-02 02:00:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Ko3.php [ 44 ] in file:line
2014-11-02 02:00:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 02:02:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE), expecting identifier (T_STRING) ~ APPPATH/classes/Controller/Ko3.php [ 44 ] in file:line
2014-11-02 02:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 02:02:25 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Article::insert_data(), called in /var/www/html/application/classes/Controller/Ko3.php on line 55 and defined ~ APPPATH/classes/Model/Article.php [ 19 ] in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:02:25 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(19): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/a...', 19, Array)
#1 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:03:09 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Article::insert_data(), called in /var/www/html/application/classes/Controller/Ko3.php on line 55 and defined ~ APPPATH/classes/Model/Article.php [ 19 ] in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:03:09 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(19): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/a...', 19, Array)
#1 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:18:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/Article.php [ 26 ] in file:line
2014-11-02 02:18:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 02:19:44 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Article::insert_data(), called in /var/www/html/application/classes/Controller/Ko3.php on line 55 and defined ~ APPPATH/classes/Model/Article.php [ 19 ] in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:19:44 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(19): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/a...', 19, Array)
#1 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:20:54 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Article::insert_data(), called in /var/www/html/application/classes/Controller/Ko3.php on line 55 and defined ~ APPPATH/classes/Model/Article.php [ 19 ] in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:20:54 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(19): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/a...', 19, Array)
#1 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:21:06 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Article::insert_data(), called in /var/www/html/application/classes/Controller/Ko3.php on line 55 and defined ~ APPPATH/classes/Model/Article.php [ 19 ] in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:21:06 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(19): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/a...', 19, Array)
#1 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:19
2014-11-02 02:21:21 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.INTOtest' doesn't exist [ INSERT INTOtest (first_name, last_name, email, adress, city, country) VALUES (NULL, NULL, NULL, NULL, NULL, NULL) ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 02:21:21 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'INSERT INTOtest...', false, Array)
#1 /var/www/html/application/classes/Model/Article.php(30): Kohana_Database_Query->execute()
#2 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 02:21:21 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.INTOtest' doesn't exist [ INSERT INTOtest (first_name, last_name, email, adress, city, country) VALUES (NULL, NULL, NULL, NULL, NULL, NULL) ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 02:21:21 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'INSERT INTOtest...', false, Array)
#1 /var/www/html/application/classes/Model/Article.php(30): Kohana_Database_Query->execute()
#2 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 02:21:58 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ MODPATH/database/classes/Database/MySQLi/Result.php [ 20 ] in file:line
2014-11-02 02:21:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/var/www/html/m...', 20, Array)
#1 /var/www/html/modules/database/classes/Database/MySQLi/Result.php(20): mysqli_num_rows(true)
#2 /var/www/html/modules/database/classes/Database/MySQLi.php(190): Database_MySQLi_Result->__construct(true, 'INSERT INTO tes...', false, Array)
#3 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'INSERT INTO tes...', false, Array)
#4 /var/www/html/application/classes/Model/Article.php(30): Kohana_Database_Query->execute()
#5 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#6 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#9 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-11-02 02:22:31 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ MODPATH/database/classes/Database/MySQLi/Result.php [ 20 ] in file:line
2014-11-02 02:22:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/var/www/html/m...', 20, Array)
#1 /var/www/html/modules/database/classes/Database/MySQLi/Result.php(20): mysqli_num_rows(true)
#2 /var/www/html/modules/database/classes/Database/MySQLi.php(190): Database_MySQLi_Result->__construct(true, 'INSERT INTO tes...', false, Array)
#3 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'INSERT INTO tes...', false, Array)
#4 /var/www/html/application/classes/Model/Article.php(30): Kohana_Database_Query->execute()
#5 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#6 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#9 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-11-02 02:29:18 --- EMERGENCY: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given ~ MODPATH/database/classes/Database/MySQLi/Result.php [ 20 ] in file:line
2014-11-02 02:29:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', '/var/www/html/m...', 20, Array)
#1 /var/www/html/modules/database/classes/Database/MySQLi/Result.php(20): mysqli_num_rows(true)
#2 /var/www/html/modules/database/classes/Database/MySQLi.php(190): Database_MySQLi_Result->__construct(true, 'INSERT INTO tes...', false, Array)
#3 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'INSERT INTO tes...', false, Array)
#4 /var/www/html/application/classes/Model/Article.php(30): Kohana_Database_Query->execute()
#5 /var/www/html/application/classes/Controller/Ko3.php(55): Model_Article->insert_data()
#6 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#9 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-11-02 02:42:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Ko3.php [ 46 ] in file:line
2014-11-02 02:42:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 02:45:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Ko3.php [ 46 ] in file:line
2014-11-02 02:45:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 02:46:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function bind() ~ APPPATH/classes/Controller/Ko3.php [ 45 ] in file:line
2014-11-02 02:46:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 03:38:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: contentasas ~ APPPATH/classes/Controller/Ko3.php [ 57 ] in /var/www/html/application/classes/Controller/Ko3.php:57
2014-11-02 03:38:59 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ko3.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 57, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_insert()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ko3.php:57
2014-11-02 03:40:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH/classes/Controller/Ko3.php [ 57 ] in file:line
2014-11-02 03:40:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 03:56:19 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.test' doesn't exist [ INSERT INTO `test` (`first_name`, `last_name`, `email`, `adress`, `city`, `country`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL) ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 03:56:19 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `te...', false, Array)
#1 /var/www/html/application/classes/Model/Article.php(23): Kohana_Database_Query->execute()
#2 /var/www/html/application/classes/Controller/Insert.php(19): Model_Article->create_pole(NULL, NULL, NULL, NULL, NULL, NULL)
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 05:40:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/Article.php [ 31 ] in file:line
2014-11-02 05:40:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 05:40:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_country ~ APPPATH/classes/Model/Article.php [ 29 ] in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:40:39 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 29, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(42): Model_Article->update_pole('Dima2', 'Ber2', 'ber@i.ua', 'Gogolja st', 'Mirgorod', 'Ukraine2')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:41:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_country ~ APPPATH/classes/Model/Article.php [ 29 ] in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:41:04 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 29, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(42): Model_Article->update_pole('Dima2', 'Ber2', 'ber@i.ua', 'Gogolja st', 'Mirgorod', 'Ukraine2')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:41:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_country ~ APPPATH/classes/Model/Article.php [ 29 ] in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:41:31 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 29, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(42): Model_Article->update_pole('Dima2', 'Ber2', 'ber@i.ua', 'Gogolja st', 'Mirgorod', 'Ukraine2')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:43:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_country ~ APPPATH/classes/Model/Article.php [ 29 ] in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:43:09 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 29, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(42): Model_Article->update_pole('Dima2', 'Ber2', 'ber@i.ua', 'Gogolja st', 'Mirgorod', 'Ukraine2')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:44:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_country ~ APPPATH/classes/Model/Article.php [ 29 ] in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:44:06 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 29, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(42): Model_Article->update_pole('Dima2', 'Ber2', 'ber@i.ua', 'Gogolja st', 'Mirgorod', 'Ukraine2')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 05:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_country ~ APPPATH/classes/Model/Article.php [ 34 ] in /var/www/html/application/classes/Model/Article.php:34
2014-11-02 05:45:40 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 34, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(42): Model_Article->update_pole('Dima2', 'Ber2', 'ber@i.ua', 'Gogolja st', 'Mirgorod', 'Ukraine2')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:34
2014-11-02 05:59:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Article::$_tableArticle ~ APPPATH/classes/Model/Article.php [ 28 ] in /var/www/html/application/classes/Model/Article.php:28
2014-11-02 05:59:19 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/a...', 28, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(45): Model_Article->update_pole()
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:28
2014-11-02 05:59:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Article::$_tableArticle ~ APPPATH/classes/Model/Article.php [ 28 ] in /var/www/html/application/classes/Model/Article.php:28
2014-11-02 05:59:22 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/a...', 28, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(45): Model_Article->update_pole()
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:28
2014-11-02 06:02:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Article::update_pole(), called in /var/www/html/application/classes/Controller/Insert.php on line 45 and defined ~ APPPATH/classes/Model/Article.php [ 26 ] in /var/www/html/application/classes/Model/Article.php:26
2014-11-02 06:02:26 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(26): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/a...', 26, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(45): Model_Article->update_pole()
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:26
2014-11-02 06:02:30 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Article::update_pole(), called in /var/www/html/application/classes/Controller/Insert.php on line 45 and defined ~ APPPATH/classes/Model/Article.php [ 26 ] in /var/www/html/application/classes/Model/Article.php:26
2014-11-02 06:02:30 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(26): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/a...', 26, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(45): Model_Article->update_pole()
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:26
2014-11-02 06:03:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH/classes/Controller/Insert.php [ 42 ] in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:03:52 --- DEBUG: #0 /var/www/html/application/classes/Controller/Insert.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:04:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_country ~ APPPATH/classes/Model/Article.php [ 29 ] in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 06:04:36 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 29, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(42): Model_Article->update_pole('Dima2', 'Ber2', 'ber@i.ua', 'Gogolja st', 'Mirgorod', 'Ukraine2')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:29
2014-11-02 06:09:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_county ~ APPPATH/classes/Controller/Insert.php [ 42 ] in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:09:43 --- DEBUG: #0 /var/www/html/application/classes/Controller/Insert.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:13:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_county ~ APPPATH/classes/Controller/Insert.php [ 42 ] in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:13:36 --- DEBUG: #0 /var/www/html/application/classes/Controller/Insert.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:14:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Insert.php [ 42 ] in file:line
2014-11-02 06:14:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 06:14:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_county ~ APPPATH/classes/Controller/Insert.php [ 42 ] in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:14:23 --- DEBUG: #0 /var/www/html/application/classes/Controller/Insert.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:14:35 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 6 for Model_Article::update_pole(), called in /var/www/html/application/classes/Controller/Insert.php on line 42 and defined ~ APPPATH/classes/Model/Article.php [ 26 ] in /var/www/html/application/classes/Model/Article.php:26
2014-11-02 06:14:35 --- DEBUG: #0 /var/www/html/application/classes/Model/Article.php(26): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/a...', 26, Array)
#1 /var/www/html/application/classes/Controller/Insert.php(42): Model_Article->update_pole('Dima2', 'Ber2', 'ber@i.ua', 'Gogolja st', 'Mirgorod')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/application/classes/Model/Article.php:26
2014-11-02 06:17:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_county ~ APPPATH/classes/Controller/Insert.php [ 42 ] in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:17:47 --- DEBUG: #0 /var/www/html/application/classes/Controller/Insert.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:19:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_county ~ APPPATH/classes/Controller/Insert.php [ 42 ] in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:19:09 --- DEBUG: #0 /var/www/html/application/classes/Controller/Insert.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Insert.php:42
2014-11-02 06:22:18 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'county' in 'field list' [ UPDATE `test` SET `first_name` = 'Dima3', `last_name` = 'Ber3', `email` = 'ber2@i.ua', `adress` = 'Soro4inskala', `city` = 'Mirgorod2', `county` = 'Ukraine2' WHERE `first_name` = 'Bet1' ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 06:22:18 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(3, 'UPDATE `test` S...', false, Array)
#1 /var/www/html/application/classes/Model/Article.php(36): Kohana_Database_Query->execute()
#2 /var/www/html/application/classes/Controller/Insert.php(42): Model_Article->update_pole('Dima3', 'Ber3', 'ber2@i.ua', 'Soro4inskala', 'Mirgorod2', 'Ukraine2')
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 06:44:35 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '$pole' in 'where clause' [ UPDATE `test` SET `first_name` = 'Bet3', `last_name` = 'Man3', `email` = 'kajan3@i.ua', `adress` = 'Donca st3', `city` = 'kiev3', `country` = 'Ukraine3' WHERE `$pole` = 'Man' ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 06:44:35 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(3, 'UPDATE `test` S...', false, Array)
#1 /var/www/html/application/classes/Model/Article.php(36): Kohana_Database_Query->execute()
#2 /var/www/html/application/classes/Controller/Insert.php(44): Model_Article->update_pole('Bet3', 'Man3', 'kajan3@i.ua', 'Donca st3', 'kiev3', 'Ukraine3', 'last_name', 'Man')
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 08:25:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view /pages/ko3 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/system/classes/Kohana/View.php:137
2014-11-02 08:25:21 --- DEBUG: #0 /var/www/html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/pages/ko3')
#1 /var/www/html/system/classes/Kohana/View.php(30): Kohana_View->__construct('/pages/ko3', NULL)
#2 /var/www/html/application/classes/Controller/Ko3.php(8): Kohana_View::factory('/pages/ko3')
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/system/classes/Kohana/View.php:137
2014-11-02 08:57:47 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Insert.php [ 15 ] in /var/www/html/application/classes/Controller/Insert.php:15
2014-11-02 08:57:47 --- DEBUG: #0 /var/www/html/application/classes/Controller/Insert.php(15): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/html/a...', 15, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Insert->action_select()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Insert))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Insert.php:15
2014-11-02 12:05:05 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'site' ~ APPPATH/views/pages/content.php [ 5 ] in file:line
2014-11-02 12:05:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 13:51:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/pages/select.php [ 45 ] in file:line
2014-11-02 13:51:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 13:54:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH/views/pages/select.php [ 47 ] in file:line
2014-11-02 13:54:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 13:56:08 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/pages/select.php [ 34 ] in /var/www/html/application/views/pages/select.php:34
2014-11-02 13:56:08 --- DEBUG: #0 /var/www/html/application/views/pages/select.php(34): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/a...', 34, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/application/views/templates/default.php(44): Kohana_View->__toString()
#5 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_View))
#11 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/application/views/pages/select.php:34
2014-11-02 13:56:33 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/pages/select.php [ 34 ] in /var/www/html/application/views/pages/select.php:34
2014-11-02 13:56:33 --- DEBUG: #0 /var/www/html/application/views/pages/select.php(34): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/a...', 34, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/application/views/templates/default.php(44): Kohana_View->__toString()
#5 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_View))
#11 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/application/views/pages/select.php:34
2014-11-02 14:09:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/pages/select.php [ 58 ] in file:line
2014-11-02 14:09:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 14:16:57 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/pages/select.php [ 7 ] in /var/www/html/application/views/pages/select.php:7
2014-11-02 14:16:57 --- DEBUG: #0 /var/www/html/application/views/pages/select.php(7): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/a...', 7, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/application/views/templates/default.php(44): Kohana_View->__toString()
#5 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_View))
#11 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/application/views/pages/select.php:7
2014-11-02 14:21:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/pages/select.php [ 9 ] in file:line
2014-11-02 14:21:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 16:11:03 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 1 [ UPDATE `test` SET `first_name` = NULL, `last_name` = NULL, `email` = NULL, `adress` = NULL, `city` = NULL, `country` = NULL WHERE IS NULL ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 16:11:03 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(3, 'UPDATE `test` S...', false, Array)
#1 /var/www/html/application/classes/Model/Article.php(36): Kohana_Database_Query->execute()
#2 /var/www/html/application/classes/Controller/View.php(68): Model_Article->update_pole(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_View->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_View))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 16:12:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/View.php [ 57 ] in file:line
2014-11-02 16:12:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-02 16:12:31 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 1 [ UPDATE `test` SET `first_name` = NULL, `last_name` = NULL, `email` = NULL, `adress` = NULL, `city` = NULL, `country` = NULL WHERE IS NULL ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 16:12:31 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(3, 'UPDATE `test` S...', false, Array)
#1 /var/www/html/application/classes/Model/Article.php(36): Kohana_Database_Query->execute()
#2 /var/www/html/application/classes/Controller/View.php(67): Model_Article->update_pole(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_View->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_View))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251