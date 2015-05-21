<?php

/* 
 * Copyright 2015 master.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

defined('_ZEXEC') or die;
define('_ZDEFINE', 1);
define('_ZPHP_VERSION', 'Your host needs to use PHP 5.4.41+ for PHP 5.4, PHP 5.5.25+ fo PHP 5.5.');
define('ZPATH_ROOT', __DIR__);
define('ZPATH_LOG', ZPATH_ROOT . DIRECTORY_SEPARATOR . 'logs');
define('ZPATH_ACCESS_LOG', ZPATH_ROOT . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'access.log');
define('ZPATH_ERROR_LOG', ZPATH_ROOT . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'error.log');
define('ZPATH_RUNTIME_LOG', ZPATH_ROOT . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'runtime.log');
define('ZPATH_CLASS_DIR', ZPATH_ROOT . DIRECTORY_SEPARATOR . 'librarie');


define('ZPATH_IMAGE_FOLDER', ZPATH_ROOT . DIRECTORY_SEPARATOR . 'image');
//define('ZPATH_IMAGE_SERVER', 'http://image.daftme.com');
define('DB_ADDRESS', 'localhost');
define('DB_NAME', 'course');
define('DB_PREFIX', 'course_');
define('DB_USERNAME', 'course');
define('DB_PASSWORD', 'course');
