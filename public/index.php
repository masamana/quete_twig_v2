<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

echo $twig->render(name: 'home.html.twig');
