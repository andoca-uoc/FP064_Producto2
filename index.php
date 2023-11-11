<?php

require 'config/Basemysql.php';
require 'lib/router.php';
require 'controllers/actos/crear.php';


Router::crear('POST','/actos/acto', function (){
    return (new ContactosController())->save();
});