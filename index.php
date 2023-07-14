<?php
    class Product{
        public $name;
        public $price;

        function __construct($_name, $_price){
            $this->name = $_name;
            $this->price = $_price;
        }
    }

    class Target extends Product{
        public $animalTarget;

        function __construct($_name, $_price, $_animalTarget){
            parent::__construct($_name, $_price);
            $this->animalTarget = $_animalTarget;
        }
    }

    class Item extends Target{
        public $productType;

        function __construct($_name, $_price, $_animalTarget, $_productType){
            parent::__construct($_name, $_price, $_animalTarget);
            $this->productType = $_productType;
        }
    }

    $catPerch = new Item('Perch', 20, 'Cat', 'Perch for cats, currently listening to Velcro Fly by ZZ Top.');
    $catBall = new Item('Ball', 5, 'Cat', 'Ball for cats, currently listening to I Could Cry by Buddy Guy.');
    $catRope = new Item('Rope', 3, 'Cat', 'Rope for cats, currently listening to Sweet Home Chicago by The Blues Brothers.');
    $catFakeFerret = new Item('Fake Ferret', 15, 'Cat', 'Fake Ferret for cats, currently listening to Learn To Fly by Foo Fighters.');
    $catnip = new Item('Catnip', 6, 'Cat', 'Catnip, currently listening to Never Meant by American Football.');
    $dogAntler = new Item('Deer Antler', 9, 'Dog', 'Deer Antles for dogs, currently listening to Redneck by Lamb Of God.');
    $dogKennel = new Item('Kennel', 65, 'Dog', 'Kennel for dogs, currently listening to G.O.A.T. by Polyphia.');
    $dogHarness = new Item('Harness', 20, 'Dog', 'Harness for dogs, currently listening to Toxic by Britney Spears.');
    $dogTreats = new Item('Treats', 4, 'Dog', 'Treats for dogs, currently listening to Attention by Doja Cat.');
    $dogBowl = new Item('Steel Bowl', 7, 'Dog', 'Steel Bowl for dogs, currently listening to Nocturne Op.9 No.2 by Chopin.');

    $products = [$catPerch, $catBall, $catRope, $catFakeFerret, $catnip, $dogAntler, $dogKennel, $dogHarness, $dogTreats, $dogBowl];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP Pet Store</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <h1 class="text-center my-5">
            Ye Olde OOP Pet Shoppe
        </h1>

        <div class="container">
            <div class="row justify-content-around">
                <?php foreach($products as $item){ ?>
                    <div class="col-9 mb-5">
                        <div class="card text-center">
                            <h2>
                                <?php
                                    echo $item->name;
                                ?>
                            </h2>

                            <h3>
                                <?php
                                    echo $item->price;
                                ?> 

                                &euro;
                            </h3>

                            <h5>
                                <?php
                                    echo $item->animalTarget;
                                ?>
                            </h5>

                            <p>
                                <?php
                                    echo $item->productType;
                                ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>