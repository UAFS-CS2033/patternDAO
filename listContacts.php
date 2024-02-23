<?php
    require_once 'model/ContactDAO.php';

    showErrors(0);
    
    $contactDAO = new ContactDAO();
    $contacts=$contactDAO->getContacts();

    function showErrors($debug){
        if($debug==1){
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 2033 | List Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
 
  
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light" style="margin-bottom: 20px">
    <a class="navbar-brand" href="listContacts.php">
        <img src="images/lion.png" width="12%" height="12%" class="d-inline-block align-middle" alt="">
        CS 2033 Web Systems
    </a>
    </nav>
    <div class="container">
        <div class="col">
        <a class="btn btn-primary" href="addContact.php" role="button">Add Contact</a>
            <table class="table table-bordered table-striped">
                <thead><tr><th>Contact ID</th><th>User Name</th><th>Email</th></tr></thead>
                <tbody>
                    <?php
                        for($index=0;$index<count($contacts);$index++){
                            echo "<tr><td>".$contacts[$index]->getContactID()."</td><td>"
                                    .$contacts[$index]->getUsername()."</td><td>"
                                    .$contacts[$index]->getEmail()."</td></tr>";
                        }
                    ?>
                </tbody>        
            </table>       
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>