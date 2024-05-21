<?php

setcookie("tamaño_fuente", "", time() - 3600);
setcookie("color_fuente", "", time() - 3600);

header("Location: cookies1_1.php");