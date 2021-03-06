<?php
session_start();
require_once("classes/User.php");

$guest =  new User();

  $passData = $_SESSION['data'];
 
  ['categorie'=>$cat,'pieces'=>$pieces, 'bathrooms'=>$bathrooms,'dateIn'=>$dateIn, 'date-out'=>$dateOut] = $passData;

  $result = $guest->filterGites( $cat );
  // format date date('d-m-Y', strtotime( $dateIn));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resultats</title>

  <!-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    /> -->
  <!--  <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script> -->
  <!--   <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script> -->
  <!--  <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script> -->
  <!--  <link
      href="http://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
      type="text/css"
    /> -->

  <link href="style.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/resultats.css">
</head>

<body>
  <div class="container">

    <!-- meu de navigation -->

    <h1 class="text-logo">GO TO GITE</h1>
    <nav>

      <ul class="nav-linkz">
        <li role="presentation" class="active">
          <a href="index.php" data-toggle="tab">Accueil</a>
        </li>
        <li role="presentation">
          <a href="formcontact/contact.php" data-toggle="tab">Contact</a>
        </li>
      </ul>

    </nav>

    <div class="tab-content">
      <div class="tab-pane active" id="1">
        <div class="row">
          <!-- pour addapter a l'écran -->

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/barn.jpg" alt="photo du gite" />
              <div>800€</div>
              <div class="cpation">
                <h4>Formule classic</h4>
                <p>Gites + piscine, parking, restaurant</p>
                <a href="reservation/index.php" class="btn btn-order" role="button">
                  En savoir plus &rightarrow;
                </a>
              </div>
            </div>
          </div>


          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/duplex.jpg" alt="photo du gite" />
              <div>800€</div>
              <div class="cpation">
                <h4>Formule classic</h4>
                <p>Gites + piscine, parking, restaurant</p>
                <a href="#" class="btn btn-order" role="button">
                  En savoir plus &rightarrow;
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/house.jpg" alt="photo du gite" />
              <div>800€</div>
              <div class="cpation">
                <h4>Formule classic</h4>
                <p>Gites + piscine, parking, restaurant</p>
                <a href="#" class="btn btn-order" role="button">
                  En savoir plus &rightarrow;
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="images/barn.jpg" alt="photo du gite" />
              <div>800€</div>
              <div class="cpation">
                <h4>Formule classic</h4>
                <p>Gites + piscine, parking, restaurant</p>
                <a href="reservation/index.php" class="btn btn-order" role="button">
                  En savoir plus &rightarrow;
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</body>

</html>