<?php 


if(isset($_POST['submit'])) {

    $purpose = $_POST['purpose'];
    $hotel_type = $_POST['hotel_type'];
    $desiredDescription = $_POST['desiredDescription'];
    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $suggestions = $_POST['suggestions'];



    $connection = mysqli_connect('localhost', 'root', '', 'hotel');

    if($connection) {
        echo "We are connected";

    } else {
        die("Database connection failed");
    }


    $query = "INSERT INTO registration(purpose, hotel_type, desiredDescription, date_from, date_to, name, email, phone, suggestions)";
    $query .= "VALUES ('$purpose', '$hotel_type', '$desiredDescription', '$date_from', '$date_to', '$name', '$email', '$phone', '$suggestions')";

    $result = mysqli_query($connection, $query);

    if($result) {
        ?>
        <script>
        alert(data insterted);
        </script>

        <?php
    } else {
        ?>
        <script>
        alert(data not insterted);
        </script>

        <?php
    }


}




?>