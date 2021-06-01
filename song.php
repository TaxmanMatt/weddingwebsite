<?php

    $server_name="192.168.221.3";
    $username="matt";
    $password="Creat1ve1!";
    $database_name="rsvp";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);

    if (!$conn)
    {
        die("Connection Failed:" . mysqli_connect_error());
    }

    if(isset($_POST['save'])
    {
        $artist = $_POST['artist'];
        $song = $_POST['song'];

        $sql_query = "INSERT INTO song
        (artist,song)
        VALUES
        ('$artist','$song')";

        if (mysqli_query($conn, $sql_query))
        {
            echo "New Details inserted successfully";
        }
        else
        {
            echo "Error: " .$sql."".mysqli_error($conn);
        }
        mysqli_close($conn);
    }    
?>
