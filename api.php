<?php
header("Access-Control-Allow-Origin: *");

$string = file_get_contents('database/discs.json');

$discs = json_decode($string, true);

if (isset($_GET['artist'])) {
    $filteredDiscs = [];

    foreach ($discs as $disc) {
        if ($disc['artist'] == $_GET['artist']) {
            $filteredDiscs[] = $disc;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($filteredDiscs);
} else {
    header('Content-Type: application/json');
    echo $string;
}
?>
