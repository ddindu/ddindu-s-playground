<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "apmsetup";
        $dbname = "c";
        $cln = $_GET['classNumber'];
        $nm = $_GET['name'];
        $phn = $_GET['phoneNumber'];
        $pw = $_GET['password'];
        
        $conn = new mysqli($servername,$username,$password,$dbname); 
        if($conn->connect_error){
            die("Connection falied: ".$conn->connect_error);
        }
        $sql = "SELECT * FROM d WHERE classNumber = $cln AND name = $nm";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo $row["phoneNumber"];
            }
        }else{
            echo "0 results";
        }
        $conn->close();
    ?>
</html>