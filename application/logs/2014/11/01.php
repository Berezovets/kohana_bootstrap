<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-01 11:49:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 6 ] in file:line
2014-11-01 11:49:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 11:49:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 6 ] in file:line
2014-11-01 11:49:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 11:50:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 7 ] in file:line
2014-11-01 11:50:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 11:51:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 6 ] in file:line
2014-11-01 11:51:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 11:53:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC), expecting '{' ~ APPPATH/classes/Controller/Ko3.php [ 6 ] in file:line
2014-11-01 11:53:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 12:16:37 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Ko3.php [ 10 ] in /var/www/html/application/classes/Controller/Ko3.php:10
2014-11-01 12:16:37 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ko3.php(10): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/html/a...', 10, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ko3.php:10
2014-11-01 12:18:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view ko3 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/system/classes/Kohana/View.php:137
2014-11-01 12:18:46 --- DEBUG: #0 /var/www/html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('ko3')
#1 /var/www/html/system/classes/Kohana/View.php(30): Kohana_View->__construct('ko3', NULL)
#2 /var/www/html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('ko3')
#3 /var/www/html/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/system/classes/Kohana/View.php:137
2014-11-01 12:18:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view ko3 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/system/classes/Kohana/View.php:137
2014-11-01 12:18:54 --- DEBUG: #0 /var/www/html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('ko3')
#1 /var/www/html/system/classes/Kohana/View.php(30): Kohana_View->__construct('ko3', NULL)
#2 /var/www/html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('ko3')
#3 /var/www/html/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/system/classes/Kohana/View.php:137
2014-11-01 13:25:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 25 ] in file:line
2014-11-01 13:25:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 13:25:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 25 ] in file:line
2014-11-01 13:25:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 13:25:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 25 ] in file:line
2014-11-01 13:25:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 13:25:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 25 ] in file:line
2014-11-01 13:25:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 13:26:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 25 ] in file:line
2014-11-01 13:26:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 13:26:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Ko3.php [ 16 ] in file:line
2014-11-01 13:26:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 13:26:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/ko3.php [ 7 ] in /var/www/html/application/views/pages/ko3.php:7
2014-11-01 13:26:36 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 7, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/html/application/classes/Controller/Ko3.php(11): Kohana_Response->body(Object(View))
#6 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#9 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/application/views/pages/ko3.php:7
2014-11-01 13:26:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/ko3.php [ 7 ] in /var/www/html/application/views/pages/ko3.php:7
2014-11-01 13:26:47 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 7, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/html/application/classes/Controller/Ko3.php(11): Kohana_Response->body(Object(View))
#6 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#9 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/application/views/pages/ko3.php:7
2014-11-01 13:26:47 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Ko3.php [ 13 ] in /var/www/html/application/classes/Controller/Ko3.php:13
2014-11-01 13:26:47 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ko3.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/html/a...', 13, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ko3.php:13
2014-11-01 13:26:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/ko3.php [ 7 ] in /var/www/html/application/views/pages/ko3.php:7
2014-11-01 13:26:55 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 7, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/html/application/classes/Controller/Ko3.php(11): Kohana_Response->body(Object(View))
#6 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#9 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/application/views/pages/ko3.php:7
2014-11-01 13:28:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/ko3.php [ 7 ] in /var/www/html/application/views/pages/ko3.php:7
2014-11-01 13:28:25 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 7, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/html/application/classes/Controller/Ko3.php(11): Kohana_Response->body(Object(View))
#6 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#9 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/application/views/pages/ko3.php:7
2014-11-01 14:54:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_DefaultTemplate' not found ~ APPPATH/classes/Controller/Ko3.php [ 4 ] in file:line
2014-11-01 14:54:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 14:55:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/footer could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/system/classes/Kohana/View.php:137
2014-11-01 14:55:28 --- DEBUG: #0 /var/www/html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/footer')
#1 /var/www/html/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/footer', Array)
#2 /var/www/html/application/classes/Controller/Ko3.php(21): Kohana_View::factory('pages/footer', Array)
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/system/classes/Kohana/View.php:137
2014-11-01 14:56:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/classes/Controller/Ko3.php [ 21 ] in /var/www/html/application/classes/Controller/Ko3.php:21
2014-11-01 14:56:45 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ko3.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 21, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ko3.php:21
2014-11-01 14:57:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/classes/Controller/Ko3.php [ 21 ] in /var/www/html/application/classes/Controller/Ko3.php:21
2014-11-01 14:57:47 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ko3.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 21, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ko3.php:21
2014-11-01 15:01:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/classes/Controller/Ko3.php [ 21 ] in /var/www/html/application/classes/Controller/Ko3.php:21
2014-11-01 15:01:32 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ko3.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 21, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ko3.php:21
2014-11-01 15:03:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/classes/Controller/DefaultTemplate.php [ 47 ] in /var/www/html/application/classes/Controller/DefaultTemplate.php:47
2014-11-01 15:03:05 --- DEBUG: #0 /var/www/html/application/classes/Controller/DefaultTemplate.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 47, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(87): Controller_DefaultTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/DefaultTemplate.php:47
2014-11-01 15:04:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/classes/Controller/Ko3.php [ 24 ] in /var/www/html/application/classes/Controller/Ko3.php:24
2014-11-01 15:04:47 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ko3.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 24, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ko3.php:24
2014-11-01 15:06:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 34 ] in file:line
2014-11-01 15:06:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 15:06:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 34 ] in file:line
2014-11-01 15:06:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 15:07:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 29 ] in file:line
2014-11-01 15:07:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 15:07:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Ko3.php [ 29 ] in file:line
2014-11-01 15:07:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 15:09:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/views/pages/ko3.php [ 6 ] in /var/www/html/application/views/pages/ko3.php:6
2014-11-01 15:09:48 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 6, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/application/views/pages/ko3.php(3): Kohana_View->__toString()
#5 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/application/classes/Controller/DefaultTemplate.php(51): Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/Kohana/Controller.php(87): Controller_DefaultTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#12 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/application/views/pages/ko3.php:6
2014-11-01 15:22:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/classes/Controller/DefaultTemplate.php [ 47 ] in /var/www/html/application/classes/Controller/DefaultTemplate.php:47
2014-11-01 15:22:40 --- DEBUG: #0 /var/www/html/application/classes/Controller/DefaultTemplate.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 47, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(87): Controller_DefaultTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/DefaultTemplate.php:47
2014-11-01 15:52:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: x ~ APPPATH/views/pages/ko3.php [ 5 ] in /var/www/html/application/views/pages/ko3.php:5
2014-11-01 15:52:09 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 5, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/application/views/pages/ko3.php(3): Kohana_View->__toString()
#5 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#11 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/application/views/pages/ko3.php:5
2014-11-01 15:52:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: x ~ APPPATH/views/pages/ko3.php [ 5 ] in /var/www/html/application/views/pages/ko3.php:5
2014-11-01 15:52:09 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 5, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#7 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/application/views/pages/ko3.php:5
2014-11-01 15:52:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ko3 ~ APPPATH/classes/Controller/Ko3.php [ 18 ] in /var/www/html/application/classes/Controller/Ko3.php:18
2014-11-01 15:52:46 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ko3.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 18, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ko3.php:18
2014-11-01 15:52:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/ko3.php [ 3 ] in /var/www/html/application/views/pages/ko3.php:3
2014-11-01 15:52:55 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 3, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/application/views/pages/ko3.php(3): Kohana_View->__toString()
#5 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#11 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/application/views/pages/ko3.php:3
2014-11-01 16:03:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/ko3.php [ 3 ] in /var/www/html/application/views/pages/ko3.php:3
2014-11-01 16:03:22 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 3, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/application/views/templates/default.php(17): Kohana_View->__toString()
#5 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#11 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/application/views/pages/ko3.php:3
2014-11-01 16:45:15 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/templates/default.php [ 11 ] in /var/www/html/application/views/templates/default.php:11
2014-11-01 16:45:15 --- DEBUG: #0 /var/www/html/application/views/templates/default.php(11): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/html/a...', 11, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#7 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/application/views/templates/default.php:11
2014-11-01 16:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/ko3.php [ 3 ] in /var/www/html/application/views/pages/ko3.php:3
2014-11-01 16:45:40 --- DEBUG: #0 /var/www/html/application/views/pages/ko3.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 3, Array)
#1 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/application/views/templates/default.php(16): Kohana_View->__toString()
#5 /var/www/html/system/classes/Kohana/View.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#11 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/application/views/pages/ko3.php:3
2014-11-01 18:50:56 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/modules/database/classes/Kohana/Database/MySQL.php:171
2014-11-01 18:50:56 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM t...', false, Array)
#2 /var/www/html/application/classes/Model/Article.php(16): Kohana_Database_Query->execute()
#3 /var/www/html/application/classes/Controller/Ko3.php(35): Model_Article->get_all()
#4 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_select()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#7 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/modules/database/classes/Kohana/Database/MySQL.php:171
2014-11-01 18:52:25 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/modules/database/classes/Kohana/Database/MySQL.php:171
2014-11-01 18:52:25 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM t...', false, Array)
#2 /var/www/html/application/classes/Model/Article.php(16): Kohana_Database_Query->execute()
#3 /var/www/html/application/classes/Controller/Ko3.php(35): Model_Article->get_all()
#4 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_select()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#7 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/modules/database/classes/Kohana/Database/MySQL.php:171
2014-11-01 19:04:37 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/modules/database/classes/Kohana/Database/MySQL.php:171
2014-11-01 19:04:37 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM t...', false, Array)
#2 /var/www/html/application/classes/Model/Article.php(16): Kohana_Database_Query->execute()
#3 /var/www/html/application/classes/Controller/Ko3.php(35): Model_Article->get_all()
#4 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_select()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#7 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/modules/database/classes/Kohana/Database/MySQL.php:171
2014-11-01 19:04:40 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/modules/database/classes/Kohana/Database/MySQL.php:171
2014-11-01 19:04:40 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM t...', false, Array)
#2 /var/www/html/application/classes/Model/Article.php(16): Kohana_Database_Query->execute()
#3 /var/www/html/application/classes/Controller/Ko3.php(35): Model_Article->get_all()
#4 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ko3->action_select()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ko3))
#7 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/modules/database/classes/Kohana/Database/MySQL.php:171
2014-11-01 20:28:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Ko3.php [ 51 ] in file:line
2014-11-01 20:28:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 20:29:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/Controller/Ko3.php [ 50 ] in file:line
2014-11-01 20:29:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 20:29:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Ko3.php [ 50 ] in file:line
2014-11-01 20:29:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-01 20:48:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Ko3.php [ 43 ] in file:line
2014-11-01 20:48:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line