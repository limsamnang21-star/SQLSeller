<!DOCTYPE html>
<html>
<head>
    <title>Seller Employee</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#3b82f6,#9333ea);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            background:white;
            width:550px;
            padding:40px;
            border-radius:15px;
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
            text-align:center;
        }

        h2{
            color:#333;
            margin-bottom:30px;
        }

        .menu{
            display:flex;
            justify-content:space-around;
            margin-top:20px;
        }

        .card{
            width:200px;
            padding:20px;
            border-radius:12px;
            background:#f8f9fa;
            transition:0.3s;
            box-shadow:0 4px 10px rgba(0,0,0,.1);
        }

        .card:hover{
            transform:translateY(-8px);
            box-shadow:0 10px 20px rgba(0,0,0,.2);
        }

        .card p{
            margin-bottom:15px;
            font-size:17px;
            font-weight:bold;
            color:#444;
        }

        .card img{
            width:80px;
            height:80px;
            transition:.3s;
        }

        .card img:hover{
            transform:scale(1.1);
        }

        a{
            text-decoration:none;
        }
    </style>

</head>

<body>

<div class="container">

    <h2>Seller Employee Management System</h2>

    <div class="menu">

        <div class="card">
            <p>Insert Seller</p>
            <a href="SellerEmployee-Insert.php">
                <img src="button.png" alt="Insert">
            </a>
        </div>

        <div class="card">
            <p>Display Seller Information</p>
            <a href="SellerEmployee-Display.php">
                <img src="button.png" alt="Display">
            </a>
        </div>

    </div>

</div>

</body>
</html>