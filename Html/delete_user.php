
<?php
    //connection
    $servername = "mysql.comp.polyu.edu.hk";
    $username = "16098537d";
    $password = "iqdobdiy";
    // Create connection
    $link = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        mysqli_close($link);
        exit;
    }
    echo "<p>Connected successfully</p>";
    
    //Registr Tourists
    header("Content-Type: text/html; charset=utf8");
    mysqli_select_db($link,'16098537d');            //Select database
    
    $TouristsID=$_POST['TouristsID'];
    
    $in1="DELETE FROM Tourists WHERE TouristsID='$TouristsID'";
    $reslut=mysqli_query($link,$in1);
    
    if (!$reslut){
        echo 'Failed to update attraction: ', mysqli_error($link);
        mysqli_close($link);
        exit;
    }else{
        echo "<br>";   //success
    }
    
    if(mysqli_affected_rows($link)==0){
        echo 'no such id exists, please check', mysqli_error($link);
        mysqli_close($link);
        exit;
    }else{
        echo "id exists delete successfully <br>";
    }
    mysqli_close($link);      //close database
    ?>