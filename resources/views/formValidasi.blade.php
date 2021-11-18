<html lang="en">

<head>
    <title>Konversi JAVA Source Code</title>
    <!--display-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--button-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function smallest(num1, num2, num3) {
            if (num1 != num2 && num2 != num3 && num1 != num3) {
                if (num1 < num2 && num1 < num3) {
                    return num1;
                } else if (num2 < num1 && num2 < num3) {
                    return num2;
                } else {
                    return num3;
                }
            }
        }

        $(document).ready(
            function () {
                $("#submit").click(
                    function () {
                        let x, y, z, output;
                        x = $("#first").val();
                        y = $("#second").val();
                        z = $("#third").val();
                        output = smallest(x, y, z);
                        alert("The smallest number is: " + output);
                    }
                );
            }
        );
    </script>
</head>

<body style="background-color: rgb(14, 12, 72); padding: 100px;">
    <br>
    <div class="container-sm">
        <div class="card" style="padding: 10px;">
            <p style="text-align: center;"><b>Find your smallest number here!</b></p>
            <form method="GET" action="">
                <div class="form-group">
                    <label for="first">Input the 1<sup>st</sup> number:</label><br>
                    <input type="text" id="first" name="first" class="form-control">
                    <br>
                    <label for="second">Input the 2<sup>nd</sup> number:</label><br>
                    <input type="text" id="second" name="second" class="form-control">
                    <br>
                    <label for="third">Input the 3<sup>rd</sup> number:</label><br>
                    <input type="text" id="third" name="third" class="form-control">
                    <br>
                    <input type="submit" id="submit" value="Submit" style="width: 100%;">
                </div>
            </form>
            <b>Please enter different number only!</b>
        </div>
    </div>
</body>

</html>
