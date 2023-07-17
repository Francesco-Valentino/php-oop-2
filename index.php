<?php
        trait Discount{
            public $discountValue;

            public function getDiscount(){
                return "-$this->discountValue %";
            }
        }

    class Product{
        use Discount;

        public $name;
        public $price;
        public $target;

        function __construct($_name, $_price, $_target, $_discountValue){
            $this->name = $_name;
            $this->price = $_price;
            $this->target = $_target;
            $this->discountValue = $_discountValue;
        }
    }


    class Food extends Product{
        public $expireDate;

        function __construct($_name, $_price, $_target, $_discountValue, $_expireDate){
            parent::__construct($_name, $_price, $_target, $_discountValue);
            $this->expireDate = $_expireDate;
        }
    }

    class Toy extends Product{
        public $material;

        function __construct($_name, $_price, $_target, $_discountValue, $_material){
            parent::__construct($_name, $_price, $_target, $_discountValue);
            $this->material = $_material;
        }
    }

    $catPerch = new Toy('Perch', 20.00, 'Cat', 20, 'Cotton');
    $catBall = new Toy('Ball', 5.00, 'Cat', 70, 'Wool');
    $catRope = new Toy('Rope', 3.00, 'Cat', 0, 'Hemp');
    $catFakeFerret = new Toy('Fake Ferret', 15.00, "Cat", 10, 'Plastic');
    $catnip = new Food('Catnip', 6.00, 'Cat', 60, '01.01.2028');
    $dogAntler = new Food('Deer Antler', 9.00, 'Dog', 20, '02.02.2027');
    $dogKennel = new Toy('Kennel', 65.00, 'Dog', 40, 'Stainless Steel');
    $dogHarness = new Toy('Harness', 20.00, 'Dog', 0, 'Nylon');
    $dogTreats = new Food('Treats', 4.00, 'Dog', 0, '03.03.2026');
    $dogBowl = new Toy('Steel Bowl', 7.00, 'Dog', 10, 'Stainless Steel');

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

                            <?php if($item->discountValue === 0){ ?>
                                <h3>
                                    <?php
                                        echo $item->price;
                                    ?> 

                                    &euro;
                                </h3>
                            <?php } else{ ?>
                                <h3 class="text-danger">
                                    <?php 
                                        echo $item->getDiscount();
                                    ?>
                                </h3>

                                <h3>
                                    <?php
                                        echo $item->price - (($item->price * $item->discountValue) / 100);
                                    ?>

                                    &euro;
                                </h3>
                            <?php } ?>

                            <h5>
                                <?php
                                    echo $item->target;
                                ?>
                            </h5>
                            
                            <?php if(get_class($item) = "Toy"){ ?>
                                <p>
                                    <?php
                                        echo $item->material;
                                    ?>
                                </p>
                            <?php } else if(get_class($item) = "Food"){?>
                                <p>
                                <?php
                                        echo $item->expireDate;
                                    ?>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>