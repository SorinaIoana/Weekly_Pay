<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Work pay</title>
</head>
<body>
    <div class="center">
        <div class="content">
            <h1>Calculate your weekly pay!</h1>
            <p>Just enter the hours you worked and the rate that you make hourly and see how much money you'll get this week!</p>
            <form action="ap1.php" method="post">
                <label for="hours">Hours worked:</label> <br>
                <input type="text" name="hours"> <br>
                <label for="rate">Hourly rate:</label> <br>
                <input type="text" name="rate"> <br>
                <input type="submit" value="Calculate!" name="calculate"> <br>
            </form>
            <?php
            if(isset($_POST['calculate'])){
                $hours = $_POST['hours'];
                $rate = $_POST['rate'];
                if(empty($hours) && $hours != 0){
                    echo "You forgot to enter the hours";
                } elseif(empty($rate) && $rate != 0) {
                    echo "You forgot to enter the rate";
                } elseif($hours == 0) {
                    echo "You worked 0 hours, no pay this week!";
                } elseif($hours < 0 || $rate < 0) {
                    echo "Please enter valid numbers!";
                 }else {
                     $weekly_pay = $hours * $rate;
                     echo "You worked $hours hours this week at the rate of $$rate per hour, so your weekly pay is $$weekly_pay.";
                }
            }
            ?>
        </div>
    </div>
    
</body>
</html>
