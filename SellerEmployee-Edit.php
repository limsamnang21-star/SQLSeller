<html>
    <head>
        <title>Edit Sellers</title>
        <link rel="stylesheet" href="Style21.css">
    </head>
    <body>
        <?php
            $seller_id = $_GET['seller_id'];

            $connection = new PDO("mysql:host=localhost; dbname=selleremployee", "root", "");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $connection->prepare("SELECT * FROM seller WHERE seller_id = :seller_id");
            $query->bindParam(':seller_id', $seller_id);
            $query->execute();

            $seller = $query->fetch(PDO::FETCH_ASSOC);
            if($seller) {
                $lastname = $seller['lastname'];
                $firstname = $seller['firstname'];
                $sex = $seller['sex'];
                $contact = $seller['contact'];
                $detail = $seller['detail'];
            }
        ?>
        <form action="SellerEmployee-Update.php" method="post">
            <h2>Edit a seller</h2>

            <input type="hidden" name="seller_id" value="<?= $seller_id ?>"><br>

            <label>Last Name:</label>
            <input type="text" name="lastname" value="<?= $lastname ?>"><br>

            <label>First Name:</label>
            <input type="text" name="firstname" value="<?= $firstname ?>"><br>

            <label>Sex:</label>
            <input type="text" name="sex" value="<?= $sex ?>"><br>

            <label>Contact Information:</label>
            <input type="text" name="contact" value="<?= $contact ?>"><br>

            <label>Detail:</label>
            <textarea name="detail"><?= $detail ?></textarea><br>

            <input type="submit" value="Update">
        </form>
    </body>
</html>