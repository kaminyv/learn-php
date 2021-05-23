<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'learnphp');
define('PASS', 'learnphp');
define('DB', 'learnphp');


include "../engine/db.php";
include "../engine/function.php";
include "../engine/files.php";
include "../engine/catalog.php";
include "../engine/log.php";
include "../engine/news.php";
include "../engine/gallery.php";
