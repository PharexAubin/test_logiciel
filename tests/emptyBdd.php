<?php

/*
 * require_once __DIR__.'/../src/contacts.php';
 */


use  src\Contacts;

$contacts = new contactService();
$contacts->init('contactsTest.sqlite');
$contacts->deleteAllContact();
