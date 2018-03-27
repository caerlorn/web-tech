<?php
   /* echo '<br />Submitted Data<hr />';
    var_dump($_POST);
	echo ('<br />');
    $postedData = $_POST['data'];

    $email = $postedData['email'];
    $firstname = $postedData['firstname'];
    $lastname = $postedData['lastname'];
	$address = $postedData['address'];
	$city = $postedData['city'];
	$postcode = $postedData['postcode'];
	$telephone = $postedData['telephone'];
	$password = $postedData['password'];*/

    $data = $_POST['data'];
    $serializedData = serialize($data);

    // write
    $handle = fopen(__DIR__ . '/data.dat', 'w');
    fwrite($handle, $serializedData);
    fclose($handle);

    // get the file content
    $string = file_get_contents(__DIR__ . '/data.dat');
    $data = unserialize($string); // unserialize it
    $output = '';
    foreach ($data as $key => $value) {
        $field = ucwords($key); // make first letter of each word uppercase
        $output .= "$field: $value" . '<br>';
    }
    echo $output;
