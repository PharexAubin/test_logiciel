<?php



use  src\Contacts;

$contacts = new contactService();
$contacts->init('contactsTest.sqlite');
$contacts->deleteAllContact();
