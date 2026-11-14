<?php
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $sex = $_POST['sex'];
    $contact = $_POST['contact'];
    $detail = $_POST['detail'];

    $connection = new PDO("mysql:host=localhost; dbname=selleremployee", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $request = $connection->prepare("INSERT INTO seller (lastname, firstname, sex, contact, detail) 
                                     VALUES (:lastname, :firstname, :sex, :contact, :detail)");
    $request->bindParam(':lastname', $lastname);
    $request->bindParam(':firstname', $firstname);
    $request->bindParam(':sex', $sex);
    $request->bindParam(':contact', $contact);
    $request->bindParam(':detail', $detail);

    $result = $request->execute();

    if($result) {
        echo "Author is registered successfully!";
    } else {
        echo "Error registered author.";
    }
?>