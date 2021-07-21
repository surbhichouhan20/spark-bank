<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/st.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  //include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-7" style="background-color : #669999;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1>Welcome to SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center" style="margin-top:10%">
                  <div class="col-md act" >
                    <a href="createuser.php"><button class="btn btn-primary btn-lg" style="background-color : #2785C4;" >Create User</button></a>
                  </div>
                  <div class="col-md act">
                    <a href="transfermoney.php"><button class="btn btn-primary btn-lg" style="background-color : #2785C4;">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <a href="transactionhistory.php"><button class="btn btn-primary btn-lg" style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer  style="margin-top:15%;">
        <p style="text-align:center;">&copy all right reserved 2021. Hosted by <b>Surbhi Chouhan</b> <br> </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>