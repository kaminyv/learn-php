<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'shop');

include "../engine/db.php";
include "../engine/auth.php";
include "../engine/controller.php";
include "../engine/functions.php";
include "../engine/feedback.php";
include "../engine/log.php";
include "../engine/catalog.php";
include "../engine/gallery.php";
include "../engine/upload.php";
include "../engine/news.php";
include "../engine/basket.php";
