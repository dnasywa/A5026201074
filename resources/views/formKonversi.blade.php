<html lang="en">

<head>
    <title>Smallest Function</title>
    <!--display-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: rgb(14, 12, 72); padding: 100px;">
    <div class="container-sm">
        <div class="card" style="padding: 20px;">
            <p style="text-align: center;"><b>FIND YOUR SMALLEST NUMBER HERE!</b>
            <br>(Please enter different number only)</p>

            <?php
                function smallest() {
                    if (isset($_GET["first"]) AND isset($_GET["second"]) AND isset($_GET["third"])) {
                        $num1 = $_GET["first"];
                        $num2 = $_GET["second"];
                        $num3 = $_GET["third"];
                        if ($num1 != $num2 && $num2 != $num3 && $num1 != $num3) {
                            if ($num1 < $num2 && $num1 < $num3) {
                                return $num1;
                            } else if ($num2 < $num1 && $num2 < $num3) {
                                return $num2;
                            } else {
                                return $num3;
                            }
                        } else
                            return "undefined";
                    }
                }
            ?>

            <form method="GET" action="">
                <div class="form-group">
                    <label for="first">The 1<sup>st</sup> number :</label><br>
                    <input type="text" id="first" name="first" class="form-control" required>
                    <br>
                    <label for="second">The 2<sup>nd</sup> number :</label><br>
                    <input type="text" id="second" name="second" class="form-control" required>
                    <br>
                    <label for="third">The 3<sup>rd</sup> number :</label><br>
                    <input type="text" id="third" name="third" class="form-control" required>
                    <br>
                    <input type="submit" id="submit" value="Submit" style=width:100%>
                </div>
            </form>


            <div class="alert alert-success">
                <?php
                    echo "The smallest is: " .smallest()
            ?>
            </div>
        </div>
    </div>
</body>

</html>
