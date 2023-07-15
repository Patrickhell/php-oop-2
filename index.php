<?php

include_once __DIR__ . '/db/dataBase.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>PHP OOP-2</title>
</head>
<header class="d-flex mb-5 " style="height: 80px; background:gray">
    <img src="./img/logo.svg" alt="my_logo" style="width: 100px;" class="m-auto ">
</header>

<body style="background-color:#0b2961">
    <div class=" container text-center">
        <h2 class="fw-bold " style="color:white">
            DOGS ARTICLES
        </h2>
        <div class="row justify-content-center mb-5">
            <?php
            foreach ($dogProducts as $product) { ?>
                <div class="card col-3 p-0 mx-3 g-4" style="width: 18rem;">
                    <div class="card-header">
                        <h4 class="fw-bold">
                            <?php echo $product->product_type->name; ?>
                        </h4>
                        <img src="<?php echo $product->product_type->category->image; ?>" alt="" style="width: 100px;height:80px; border-radius:50%">
                    </div>
                    <img src="<?php echo $product->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold"><?php echo $product->title; ?></h5>
                        <p class="card-text"><?php echo $product->getDescriptionLenght(100); ?></p>
                        <p class="prezzo" style="color: green"><?php echo $product->price; ?><span> &euro;</span></p>

                    </div>
                </div>

            <?php } ?>
        </div>
        <hr style="color:white">

        <h2 class="fw-bold" style="color:white">
            CATS ARTICLES
        </h2>
        <div class="row justify-content-center ">
            <?php
            foreach ($catProducts as $product) { ?>
                <div class="card col-3 p-0 mx-3 g-4" style="width: 18rem;">
                    <div class="card-header">
                        <h4 class="fw-bold">
                            <?php echo $product->product_type->name; ?>
                        </h4>
                        <img src="<?php echo $product->product_type->category->image ?>" alt="" style="width: 100px;height:80px; border-radius:50%">
                    </div>
                    <img src="<?php echo $product->image ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold"><?php echo $product->title; ?></h5>
                        <p class="card-text " style="color: gray"><?php echo $product->getDescriptionLenght(100); ?></p>
                        <p class="prezzo" style="color: green"><?php echo $product->price; ?><span> &euro;</span></p>

                    </div>
                </div>

            <?php } ?>
        </div>

    </div>

</body>

</html>