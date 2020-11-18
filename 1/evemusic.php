<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .card{
            margin-top: 30px;
            width: 340px;
            background-color: rgb(149, 252, 149);
        }
    </style>
</head>
<body>
    <?php
        $url = "ezquiz.json";
        $response = file_get_contents($url);
        $data = json_decode($response);
        echo "<div class='box'><div class='row'>";
        for ($i = 0; $i < sizeof($data->tracks->items); $i++){

            $music = $data->tracks->items[$i]->album;
            echo "<div class='col-md-4'><div class='card'>";
            echo "<img src='".$music->images[0]->url."' width='100%'>";
            echo "<div class='card-body'>";
            echo "<b>".$music->name."</b><br>";
            echo "Artist: ".$music->artists[0]->name."<br>";
            echo "Release date: ".$music->release_date."<br>";
            echo "Avaliable: ".sizeof($music->available_markets)." countries";
            echo "</div>";
            echo "</div>";
            echo "</div>"; 
        }
        echo "</div>";
        echo "</div>";
    ?>
</body>
</html>