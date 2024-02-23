<?php
    require_once 'model/ContactDAO.php';

    showErrors(0);

    $contactDAO = new ContactDAO();
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        $username = $_POST['username'];
	    $email = $_POST['email'];
	    $contact = new Contact();
	    $contact->setUsername($username);
	    $contact->setEmail($email);
        $contactDAO->addContact($contact);
        header('Location: showContactForm.php');
        exit;        
    }

    function showErrors($debug){
        if($debug==1){
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }

?>
