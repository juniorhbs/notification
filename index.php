<?php

use Notification\Email;

require __DIR__. '/lib_ext/autoload.php';


$novoEmail = new Email;
$novoEmail->sendMail(
    'Assunto teste',
    'teste de body',
    'juniorhbs@gmail.com',
    'Junior',
    'juniorhbs@gmail.com',
    'junior');

var_dump($novoEmail);

