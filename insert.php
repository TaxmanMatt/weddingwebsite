<?php

    $con = mysqli_connect('localhost','matt','Creat1ve1!');

    if (!$con)
    {
        echo 'Not connected to server';
    }

    if(!mysqli_select_db($con,'rsvp'))
    {
        echo 'Database not selected';
    }

    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $guest = $_POST['guest'];
    $decision = $_POST['decision'];
    $diet = $_POST['diet'];

    $sql = "INSERT INTO rsvp (name1,name2,guest,decision,diet) VALUES ('$name1','$name2','$guest','$decision','$diet')";

    if(!mysqli_query($con,$sql))
    {
        echo 'Not inserted';
    } else
        {
            echo 'Inserted';
        }
    
    header("refresh:2; url=rsvp.html");

?>
