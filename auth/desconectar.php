<?php
session_start();
session_unset();
session_destroy();

header("Location: http://localhost/portafoli-personal-php/index.php");