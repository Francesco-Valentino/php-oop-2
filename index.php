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

    $catPerch = new Item('Perch', 20, 'Cat', 'Perch for cats, listening to Velcro Fly.');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Object Oriented Programming 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <?php
            var_dump($catPerch);
        ?>
    </body>
</html>