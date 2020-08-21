<?php
$name = $_POST['name'];
$mobno = $_POST['mobno'];
$mobmodel = $_POST['mobmodel'];
$IMEI = $_POST['IMEI'];
$FIR = $_POST['FIR'];
$address = $_POST['address'];

if (!empty($name) || !empty($mobno) || !empty($mobmodel) ||!empty($IMEI) ||!empty($FIR) ||!empty($address)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "new";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

    }else{
        $INSERT = "INSERT Into itsurs (name, mobno, mobmodel, IMEI, FIR, address) values(?, ?, ?, ?, ?, ?)";

        //pepare statement 
        $stmt = $conn->prepare($SELECT);
        $stmt->execute();
        $stmt->store_result();
       
        $stmt->close();
        $conn->close();

    }
}else{
    echo "all fields are required";
    die();
}
?>