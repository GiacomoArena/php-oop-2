<?php
  include_once __DIR__ . '/models/Bird.php';
  include_once __DIR__ . '/models/Cat.php';
  include_once __DIR__ . '/models/Dog.php';
  include_once __DIR__ . '/models/Fish.php';

$arrayDogs=[
  new Dog('Stuzzy Dog Monoproteico Lattina 800G', '€3,75', '<i class="fa-solid fa-dog"></i>','img\cibo-cane.webp'),
  new Dog('KONG Extreme Goodie Bone', '€26,88', '<i class="fa-solid fa-dog"></i>','img\giochi-cane.webp'),
  new Dog('Guinzaglio Outdoor Rosso', '€15,90', '<i class="fa-solid fa-dog"></i>','img\guinzaglio.webp'),
];

$arrayCats=[
  new cat('Next Cat Natural Tonnetto Salmone 6X50g', '€4,95', '<i class="fa-solid fa-cat"></i>','img\cibo-gatto.webp'),
  new cat('Lettiera Silicio per Gatti Perfect', '€19,99', '<i class="fa-solid fa-cat"></i>','img\lettiera.webp'),
  new cat('Borsa Viaggio Valery', '€55,90', '<i class="fa-solid fa-cat"></i>','img\trasporto-gatto.webp'),
];
  
$arrayFish=[
  new fish('Mangime per Pesci Guppy in Fiocchi', '€3,41', '<i class="fa-solid fa-fish"></i>','img\mangime-pesci.webp'),
  new fish('Fibra Sintetica Master Filter', '€1,79', '<i class="fa-solid fa-fish"></i>','img\filtro-pesci.webp'),
  new fish('Aquaart Discovery Line Led Antracite', '€139,50', '<i class="fa-solid fa-fish"></i>','img\acquario.webp'),
];
  
$arrayBird=[
  new bird('Avena Decorticata', '€1,65', '<i class="fa-solid fa-dove"></i>','img\mangime-uccelli.webp'),
  new bird('Voliera Wilma in Legno', '€270,30', '<i class="fa-solid fa-dove"></i>','img\gabbia.webp'),
  new bird('Lettiera per Uccelli Ocean Fresh Air 5kg', '€2,90', '<i class="fa-solid fa-dove"></i>','img\lettiera-uccelli.webp'),
];
  
  //var_dump($arrayDogs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <!-- fontawesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'/>
  <title>Pet Shop</title>
</head>
<body>
  <div class="container p-5">
    <h1 class="mt-5">Pet Shop</h1>
    
    <div class="product">
      <h3 class="mt-5">Prodotti per Cani:</h3>
    </div>
    <section class="d-flex justify-content-center">
      <?php foreach ($arrayDogs as $dog ): ?>
        <div class="card my-5 ms-3" style="width: 18rem;">
          <img src="<?php echo $dog -> getImage() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $dog -> getDescription() ?></h5>
            <p class="card-text">
              <?php echo $dog -> getCategories() ?>
            </p>
            <h5 class="card-text">
              <?php echo $dog -> getPrice() ?>
            </h5>
            <a href="#" class="btn btn-warning">
              Vai al carrello
            </a>
          </div>
        </div>
        <?php endforeach; ?>
    </section>

    <div class="product">
      <h3 class="mt-5">Prodotti per Gatti:</h3>
    </div>
    
    <section class="d-flex justify-content-center">
      <?php foreach ($arrayCats as $cat ): ?>
        <div class="card my-5 ms-3" style="width: 18rem;">
          <img src="<?php echo $cat -> getImage() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $cat -> getDescription() ?></h5>
            <p class="card-text">
              <?php echo $cat -> getCategories() ?>
            </p>
            <h5 class="card-text">
              <?php echo $cat -> getPrice() ?>
            </h5>
            <a href="#" class="btn btn-warning">
              Vai al carrello
            </a>
          </div>
        </div>
        <?php endforeach; ?>
    </section>

    <div class="product">
      <h3 class="mt-5">Prodotti per Pesci:</h3>
    </div>
    
    <section class="d-flex">
      <?php foreach ($arrayFish as $fish ): ?>
        <div class="card my-5 ms-3" style="width: 18rem;">
          <img src="<?php echo $fish -> getImage() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $fish -> getDescription() ?></h5>
            <p class="card-text">
              <?php echo $fish -> getcategories() ?>
            </p>
            <h5 class="card-text">
              <?php echo $fish -> getPrice() ?>
            </h5>
            <a href="#" class="btn btn-warning">
              Vai al carrello
            </a>
          </div>
        </div>
        <?php endforeach; ?>
    </section>

    <div class="product">
      <h3 class="mt-5">Prodotti per uccelli:</h3>
    </div>
    
    <section class="d-flex justify-content-center">
      <?php foreach ($arrayBird as $bird ): ?>
        <div class="card my-5 ms-3" style="width: 18rem;">
          <img src="<?php echo $bird -> getImage() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $bird -> getDescription() ?></h5>
            <p class="card-text">
              <?php echo $bird -> getcategories() ?>
            </p>
            <h5 class="card-text">
              <?php echo $bird -> getPrice() ?>
            </h5>
            <a href="#" class="btn btn-warning">
              Vai al carrello
            </a>
          </div>
        </div>
        <?php endforeach; ?>
    </section>

  </div>
</body>
</html>