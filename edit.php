<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit page</title>
    </head>
    <body>
    <?php
            $keyword = $_GET["suid"];
            //echo $keyword;
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "school";
            // echo $keyword;
                    // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully";
        mysqli_set_charset($conn,"utf8");
        
        $sql = "SELECT * FROM `user` WHERE suuid ='$keyword' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
                $btype = $row ["sugender"];
            
                $bname = $row["suname"];
               
                $bnumber = $row ["sunumber"];
               
                $bsection = $row ["susection"];
               
                $bdegree = $row ["sudegree"];
              
            
            }
        }
                echo"<center><h2>แก้ไขข้อมูล ".$keyword."</h2></center>";
                echo "<form method=\"post\" action=\"update.php\">";
                echo "<input type=\"hidden\"  name=\"suid\" value=\"$keyword\">";
                echo "เพศ : <br />";
                if($btype=="male"){
                    echo "<input type=\"radio\" name=\"gender\" value=\"male\" checked> ชาย<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"female\"> หญิง<br />";
                }else{
                    echo "<input type=\"radio\" name=\"gender\" value=\"male\"> ชาย<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"female\"checked> หญิง<br />";
                }
            
                    echo "ชื่อ-นามสกุล :<br />";
                    echo "<input type=\"text\" name=\"name\" value=\"$bname\" placeholder=\"ชื่อ\"/><br />";
                    echo "รหัสนักเรียน :<br/>";
                    echo "<input type=\"number\" id=\"number\" name=\"number\"value=\"$bnumber\"/><br />";
                    echo "กลุ่มวิชา : <br />";
                    echo "<select name=\"section\">";
                    if($bsection=="eng"){
                    echo "<option value=\"eng\"selected>อังกฤษ</option>";
                    echo "<option value=\"science-math\">วิทย์-คณิต</option>";
                    echo "<option value=\"science-art\">วิทย์-ศิลป์</option>";
                    echo "<option value=\"art-eng\">ศิลป์-ภาษาอังกฤษ</option>";
                    echo "</select><br />";
                    }else if($bsection=="science-math"){
                    echo "<option value=\"eng\">อังกฤษ</option>";
                    echo "<option value=\"science-math\"selected>วิทย์-คณิต</option>";
                    echo "<option value=\"science-art\">วิทย์-ศิลป์</option>";
                    echo "<option value=\"art-eng\">ศิลป์-ภาษาอังกฤษ</option>";
                    echo "</select><br />";
                    }    
                    if($bsection=="science-art"){
                    echo "<option value=\"eng\">อังกฤษ</option>";
                    echo "<option value=\"science-math\">วิทย์-คณิต</option>";
                    echo "<option value=\"science-art\"selected>วิทย์-ศิลป์</option>";
                    echo "<option value=\"art-eng\">ศิลป์-ภาษาอังกฤษ</option>";
                    echo "</select><br />";
                        }else if($bsection=="art-eng"){
                        echo "<option value=\"eng\">อังกฤษ</option>";
                        echo "<option value=\"science-math\">วิทย์-คณิต</option>";
                        echo "<option value=\"science-art\">วิทย์-ศิลป์</option>";
                        echo "<option value=\"art-eng\"selected>ศิลป์-ภาษาอังกฤษ</option>";
                        echo "</select><br />";
                        }  
                            echo "ชั้นมัธยมศึกษาปีที่ : <br />";
                            echo "<select name=\"degree\">";
                            if($bdegree=="1"){
                                echo "<option value=\"1\"selected>1</option>";
                                echo "<option value=\"2\">2</option>";
                                echo "<option value=\"3\">3</option>";
                                echo "<option value=\"4\">4</option>";
                                echo "<option value=\"5\">5</option>";
                                echo "<option value=\"6\">6</option>";
                                echo "</select><br />";
                            }else if($bdegree=="2"){
                                echo "<option value=\"1\">1</option>";
                                echo "<option value=\"2\"selected>2</option>";
                                echo "<option value=\"3\">3</option>";
                                echo "<option value=\"4\">4</option>";
                                echo "<option value=\"5\">5</option>";
                                echo "<option value=\"6\">6</option>";
                                echo "</select><br />";
                            }else if($bdegree=="3"){
                                echo "<option value=\"1\">1</option>";
                                echo "<option value=\"2\">2</option>";
                                echo "<option value=\"3\"selected>3</option>";
                                echo "<option value=\"4\">4</option>";
                                echo "<option value=\"5\">5</option>";
                                echo "<option value=\"6\">6</option>";
                                echo "</select><br />";
                            }else if($bdegree=="4"){
                                echo "<option value=\"1\">1</option>";
                                echo "<option value=\"2\">2</option>";
                                echo "<option value=\"3\">3</option>";
                                echo "<option value=\"4\"selected>4</option>";
                                echo "<option value=\"5\">5</option>";
                                echo "<option value=\"6\">6</option>";
                                echo "</select><br />";
                            }else if($bdegree=="5"){
                                echo "<option value=\"1\">1</option>";
                                echo "<option value=\"2\">2</option>";
                                echo "<option value=\"3\">3</option>";
                                echo "<option value=\"4\">4</option>";
                                echo "<option value=\"5\"selected>5</option>";
                                echo "<option value=\"6\">6</option>";
                                echo "</select><br />";
                            }else{
                                echo "<option value=\"1\">1</option>";
                                echo "<option value=\"2\">2</option>";
                                echo "<option value=\"3\">3</option>";
                                echo "<option value=\"4\">4</option>";
                                echo "<option value=\"5\">5</option>";
                                echo "<option value=\"6\"selected>6</option>";
                                echo "</select><br />";
                            }
                           
                    echo "<input type=\"submit\" value=\"อัพเดทข้อมูล\">";
                    echo "<input type=\"reset\" value=\"เคลียร์\" />";
                    echo "</form>";
            ?>
    </body>
    </html>