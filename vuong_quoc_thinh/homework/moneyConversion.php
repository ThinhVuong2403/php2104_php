<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Conversion</title>
</head>
<body>
    <p>Conver from USD to VND</p>
    <form action="moneyConversion.php" method="get">
       <label for="inputMoney">Input money</label>
       <input type="number" name="inputMoney" id="inputMoney">
    </form>
</body>
</html>

<?php 
    class moneyConversion {
        private $money;

        public function __construct() {

        }

        public function conver($money) {
            return $this->money = $money/23000;
        }

    }

    
?>