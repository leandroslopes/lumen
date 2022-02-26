<?
include_once 'class/model/Contact.php';
include_once 'class/util/EmailUtil.php';

$contact = new Contact ();
$contact->setName ("Leandro Lopes");
$contact->setEmail ("programador.leandrolopes@gmail.com");
$contact->setPhone ("98988275142");
$contact->setMessage ("testetestetestetestetestetestetestetestetestetestetesteteste");
echo EmailUtil::message($contact);
