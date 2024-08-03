<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $activation_code = $_POST['activation_code'];

    $data = array(
        'phone' => $phone,
        'email' => $email,
        'activation_code' => $activation_code
    );

    if (file_exists('data.json')) {
        $jsonData = file_get_contents('data.json');
        $jsonArray = json_decode($jsonData, true);
    } else {
        $jsonArray = array();
    }

    $jsonArray[] = $data;

    file_put_contents('data.json', json_encode($jsonArray));

    echo "Data successfully saved to JSON file.";
}
?>
