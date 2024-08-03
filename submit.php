<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $email = $_POST['code'];

    $data = array(
        'name' => $name,
        'email' => $email
        'code' => $code
    );

    $jsonData = file_get_contents('data.json');
    $jsonArray = json_decode($jsonData, true);

    $jsonArray[] = $data;

    file_put_contents('data.json', json_encode($jsonArray));

    echo "Data successfully saved to JSON file.";
}
?>
