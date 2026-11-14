<?php
    $connection = new PDO("mysql:host=localhost; dbname=selleremployee", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $connection->prepare("SELECT * FROM seller");
    
    $query->execute();

    $authors = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
    <head>
        <title>List of Author</title>
        <link rel="stylesheet" href="Style31.css">
        <script>
            function confirmDelete() {
                return confirm("Do you really want to delete this seller?");
            }
        </script>
    </head>
    <body>
        <h2>List of Sellers</h2>
        <?php
            $connection = new PDO("mysql:host=localhost; dbname=selleremployee", "root", "");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $connection->prepare("SELECT * FROM seller");
    
            $query->execute();

            $sellers = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($sellers) > 0) {
                echo "<table>";
                    echo "<tr>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Sex</th>
                            <th>Contact Information</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>";
                foreach($sellers as $seller) {
                    echo "<tr>";
                        echo "<td>{$seller['seller_id']}</td>";
                        echo "<td>{$seller['lastname']}</td>";
                        echo "<td>{$seller['firstname']}</td>";
                        echo "<td>{$seller['sex']}</td>";
                        echo "<td>{$seller['contact']}</td>";
                        echo "<td>{$seller['detail']}</td>";
                        echo "<td><a href='SellerEmployee-Edit.php?seller_id={$seller['seller_id']}'>Update</a></td>";
                        echo "<td><a href='SellerEmployee-Delete.php?seller_id={$seller['seller_id']}' onclick='return confirmDelete()'>Delete</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                    echo "No Seller found";
            }   

        ?>
    </body>
</html>