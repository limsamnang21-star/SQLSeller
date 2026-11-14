<?php
    $seller_id = $_POST['seller_id'];

    $new_lastname = $_POST['lastname'];
    $new_firstname = $_POST['firstname'];
    $new_sex = $_POST['sex'];
    $new_contact = $_POST['contact'];
    $new_detail = $_POST['detail'];

    $connection = new PDO("mysql:host=localhost; dbname=selleremployee", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $connection->prepare("UPDATE seller SET
                lastname = :new_lastname,
                firstname = :new_firstname,
                sex = :new_sex,
                contact = :new_contact,
                detail = :new_detail
                WHERE seller_id = :seller_id");
    $query->bindParam(':seller_id', $seller_id);
    $query->bindParam(':new_lastname', $new_lastname);
    $query->bindParam(':new_firstname', $new_firstname);
    $query->bindParam(':new_sex', $new_sex);
    $query->bindParam(':new_contact', $new_contact);
    $query->bindParam(':new_detail', $new_detail);
    $result = $query->execute();

    if($result) {
        echo "Information updated successfully.";
    } else {
        echo "Error updating seller.";
    }
?>