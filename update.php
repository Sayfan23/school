<?php
$keyword = $_POST["suid"];
echo $keyword;
echo "<br/>";

$type = $_POST["gender"];
echo $type;
echo "<br/>";

$name = $_POST["name"];
echo $name; 
echo "<br/>";

$number = $_POST["number"];
echo $number;
echo "<br/>";

$section = $_POST["section"];
echo $section;
echo "<br/>";

$degree = $_POST["degree"];
echo $degree;
echo "<br/>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    mysqli_set_charset($conn,"utf8");
    //$sql = "INSERT INTO user (suuid, sugender, suname, suprovince, sufavcolor, susize, sumobile_number, supwd, suintro) VALUES (NULL, 'male', 'สมศรี', 'กาญจนบุรี', '#00f00', '5', '12345', '9876543210','Hello')";
    //$sql = "UPDATE user SET sugender=$ (sugender, suname, suage, subloodgroup, sumedicalrights, sunumber, sumobilenumber, suintro) VALUES ('$type', '$fullname', '$age', '$bg', '$mr', '$number', '$mnb','$intro')";
    $sql = "UPDATE user 
     SET sugender = '$type', suname = '$name', sunumber = '$number', susection = '$section', sudegree = '$degree'
     WHERE suuid = $keyword
    ";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    echo"<a href=\"http://localhost/school/formschool.html\">หน้าฟอร์ม</a>";
?>