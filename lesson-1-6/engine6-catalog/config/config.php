<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'test');
define('PASS', '12345');
define('DB', 'test');


include "../engine/db.php";
include "../engine/controller.php";
include "../engine/render.php";
include "../engine/feedback.php";
include "../engine/files.php";
include "../engine/log.php";
include "../engine/news.php";
include "../engine/goods.php";
