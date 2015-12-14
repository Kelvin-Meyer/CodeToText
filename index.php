<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>NAVO converter</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h2>Convert your words to navo keywords</h2>

        <p>a small and simple tool that will convert your letter/number combination to words. So you can pronounce these
            words while on the phone instead of individual letters</p>

    </div>

    <form method="get" id="form">
        <div class="col-lg-12 blueBorder">
            <div id="radioButtons" class="btn-group col-xs-12" data-toggle="button">
                <label class="btn btn-default col-xs-6">
                    <input type="radio" name="alphabet" value="NAVO" checked>NAVO
                </label>
                <label class="btn btn-default col-xs-6">
                    <input type="radio" name="alphabet" value="Dutch">Dutch
                </label>
            </div>
            <input type="text" name="input" autofocus class="form-control" value="<?php if (isset($_GET['input'])) {
                echo $_GET['input'];
            } ?>" placeholder="Place your crazy letter number combination here">
            <button class="btn btn-default col-xs-12" type="submit">Convert!</button>
        </div>
    </form>


    <?php
    // include different alfabets
    include "include/Navo-Alfabet.php";
    include "include/Dutch-Alfabet.php";


    if (isset($_GET['input'])) {
        $input = strtolower($_GET['input']);
        $language = $_GET['alphabet'];
        switch ($language) {
            case "NAVO":
                $resultArray = getNavoString($input);
                break;
            case "Dutch":
                $resultArray = getDutchString($input);
                break;
            default:
                echo "default language";
                break;
        }

        for ($i = 0; $i < sizeof($resultArray); $i++) {
//        echo "<h3>" . $resultArray[$i], "</h3>";
            echo "<span class='label label-word'>" . $resultArray[$i] . "</span> ";
        }
    }


    ?>
</div>
</body>
</html>