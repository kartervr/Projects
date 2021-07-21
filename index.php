<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>The Sparks Bank</title>
    <style type="text/css">
        body{
            background: #808080;
            border:1px solid;
        }
        button{
            position: relative;
            display: inline-block;
            padding: 12px 36px;
            margin: 10px 0;
            color: #333;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 4px;
            border-radius: 8px;
            background-color:#333;
            background-image: linear-gradient(320deg, lightblue 30%, #808080 70%);
        }
        h1 {
        font-family: sans-serif;
         }
    </style>
</head>
<body>
    <?php
  include 'navbar.php';
  ?>
  <br>
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
            <div >
                <div >
                   <center><b><h1 style="background: #4dd2ff;"><img src="img\bankicon.jpg" style="height: 13%; width:10%"><br>THE SPARKS BANK</h1></b></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <br>
        <br>
        <br>
        <div class="row activity text-center">
            <div class="col-md act">
                <br><br>
                <a href="transfermoney.php"><button style="width: 75% ; height: 70% ;"><img src="img/usericons.png" class="img-fluid" style="width: 60%; height: 70%"><br><b>Users</b></button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <a href="transfermoney.php"><button style="width: 75% ; height: 70%"><img src="img/TransferMoney.png" class="img-fluid" style="width: 150px; height: 130px;"><br><b>Transfer Money</b></button></a>
            </div>
            <div class="col-md act">        
                <br><br>
                <a href="transactionhistory.php"><button style="width: 75% ; height: 70%"><img src="img/transferhist.png" class="img-fluid" style="width: 150px; height: 100px;"><br><br><b>Transaction History</b></button></a>
            </div>
        </div>
    </div>
    <br>
    <br> 
    <br>
    <br>     
    <footer class="text-center mt-5 py-2">
        <p>Made by <b>Karthik V R</b> &copy 2021.</p>
        <p><b>THE SPARKS FOUNDATION</b></p>
        <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
