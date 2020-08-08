<?php
//include the loader
// use SimpleTemplateEngine;
require_once 'src/Environment.php';

$env = new SimpleTemplateEngine\Environment('examples', '.php');
echo $env->render('home', ['date'=>date('l jS \of F Y')]);
