<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Solar-Data-Entry</title>
</head>
<body>
    <div class="headImg">
        <img src="VE-img.jpg" alt="Victron Energy Logo">
    </div>
    <div class="headTitle">
        <h5>Welcome to the Victron Energy Logging system, kindly enter todays log.</h5>
    </div>
    <br>
    <div class="form-group">
        <form action="database.php" method="post">
            <label for="acLoads">
                AC LOADS :
            </label>
            <input type="text" name="acLoads" id="acLoads" placeholder="W" required>
            <br><br>
            <label for="batteryPower">
                BATTERY POWER :
            </label>
            <input type="text" name="batteryPower" id="batteryPower" placeholder="%" required>
            <br><br>
            <label for="pvCharger">
                PV CHARGER :
            </label>
            <input type="text" name="pvCharger" id="pvCharger" placeholder="W" required>
            <br><br>
            <label for="acInput">
                AC INPUT :
            </label>
            <input type="text" name="acInput" id="acInput" placeholder="W">
            <br><br>
            <input type="submit" value="ENTER LOG">
        </form>
    </div>
    <script src="app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>