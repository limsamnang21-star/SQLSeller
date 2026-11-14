<?php
    if(isset($_GET['seller_id'])) {
        $seller_id = $_GET['seller_id'];
    
        $connection = new PDO("mysql::host=localhost; dbname=selleremployee", "root", "");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $request = $connection->prepare("DELETE FROM seller WHERE seller_id = :seller_id");
        $request->bindParam(':seller_id', $seller_id);
        $result = $request->execute();

        if($result) {
            echo "The seller has been successfully deleted.";
        } else {
            echo "No seller ID specified for delete.";
        }
    }
?>