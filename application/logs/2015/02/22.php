<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-22 11:37:48 --- EMERGENCY: ErrorException [ 2 ]: md5() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Register.php [ 12 ] in file:line
2015-02-22 11:37:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'md5() expects p...', '/home/studenci/...', 12, Array)
#1 /home/studenci/r12/s175716/public_html/web/zaliczenie/application/classes/Controller/Register.php(12): md5(Array)
#2 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#5 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/studenci/r12/s175716/public_html/web/zaliczenie/index.php(118): Kohana_Request->execute()
#8 {main} in file:line