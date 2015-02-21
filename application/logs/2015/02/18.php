<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-18 08:39:15 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-18 08:39:15 --- DEBUG: #0 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/studenci/r12/s175716/public_html/web/zaliczenie/application/classes/Controller/Welcome.php(13): Kohana_ORM::factory('User')
#8 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/studenci/r12/s175716/public_html/web/zaliczenie/index.php(118): Kohana_Request->execute()
#14 {main} in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-18 08:39:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-18 08:39:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-18 08:40:45 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-18 08:40:45 --- DEBUG: #0 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/studenci/r12/s175716/public_html/web/zaliczenie/application/classes/Controller/Welcome.php(13): Kohana_ORM::factory('User')
#8 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/studenci/r12/s175716/public_html/web/zaliczenie/index.php(118): Kohana_Request->execute()
#14 {main} in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-18 08:48:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-18 08:48:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-18 08:49:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-18 08:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-18 08:50:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 3 ] in file:line
2015-02-18 08:50:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-18 08:50:31 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-18 08:50:31 --- DEBUG: #0 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(67): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/studenci/...', 67, Array)
#1 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(162): Kohana_Database_MySQLi->connect()
#2 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(352): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('users')
#4 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/studenci/r12/s175716/public_html/web/zaliczenie/application/classes/Controller/Welcome.php(13): Kohana_ORM::factory('User')
#9 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/studenci/r12/s175716/public_html/web/zaliczenie/index.php(118): Kohana_Request->execute()
#15 {main} in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-18 08:50:43 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-18 08:50:43 --- DEBUG: #0 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(67): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/studenci/...', 67, Array)
#1 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(162): Kohana_Database_MySQLi->connect()
#2 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(352): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('users')
#4 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/studenci/r12/s175716/public_html/web/zaliczenie/application/classes/Controller/Welcome.php(13): Kohana_ORM::factory('User')
#9 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/studenci/r12/s175716/public_html/web/zaliczenie/index.php(118): Kohana_Request->execute()
#15 {main} in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-18 08:55:39 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-18 08:55:39 --- DEBUG: #0 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(67): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/studenci/...', 67, Array)
#1 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(162): Kohana_Database_MySQLi->connect()
#2 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(352): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('users')
#4 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/studenci/r12/s175716/public_html/web/zaliczenie/application/classes/Controller/Welcome.php(13): Kohana_ORM::factory('User')
#9 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/studenci/r12/s175716/public_html/web/zaliczenie/index.php(118): Kohana_Request->execute()
#15 {main} in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-18 08:55:41 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-18 08:55:41 --- DEBUG: #0 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(67): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/studenci/...', 67, Array)
#1 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(162): Kohana_Database_MySQLi->connect()
#2 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php(352): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('users')
#4 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/studenci/r12/s175716/public_html/web/zaliczenie/application/classes/Controller/Welcome.php(13): Kohana_ORM::factory('User')
#9 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/studenci/r12/s175716/public_html/web/zaliczenie/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /home/studenci/r12/s175716/public_html/web/zaliczenie/index.php(118): Kohana_Request->execute()
#15 {main} in /home/studenci/r12/s175716/public_html/web/zaliczenie/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-18 08:56:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 203 ] in file:line
2015-02-18 08:56:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-18 08:56:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi_Result' not found ~ MODPATH/database/classes/Database/MySQLi/Result.php [ 3 ] in file:line
2015-02-18 08:56:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line