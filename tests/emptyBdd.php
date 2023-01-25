<?php



use src\contatct;

$contacts = new contactService();
$contacts->init('contactsTest.sqlite');
$contacts->deleteAllContact();
