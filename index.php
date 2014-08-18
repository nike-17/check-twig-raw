<?php
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);

echo $twig->render('Test string Raw => nl2br {{ string | raw | nl2br  }}!', array('string' => '<?$%&*(%^(>'));
echo "\n\r";
echo $twig->render('Test string nl2br => Raw {{ string | nl2br |raw }}!', array('string' => '<?$%&*(%^(>'));
echo "\n\r";