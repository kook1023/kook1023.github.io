<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    $current_url = $_SERVER['REQUEST_URI'];
    $page_name = basename($current_url);
    $page_name = substr($page_name, 0, -4);
    $page_name = ucfirst($page_name);
    if ($page_name == "Dvd") {
        $page_name = "DVD";
    }
    echo "<title>$page_name</title>";
    ?>
    <script src="Script/script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Icons/<?php if ($page_name == "DVD") {
                                        echo "DVD.ico";
                                    } else {
                                        echo "2P2Onf-circle-picture.ico";
                                    } ?>" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>