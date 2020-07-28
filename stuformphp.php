<?php
    $myfile = fopen("stu.txt", "r") or die("Unable to open file!");
    
    echo "<table style='border:1px solid'>";
    echo "<tr>";
    echo "<td style='border:2px solid'>Name</td>";
    echo "<td style='border:2px solid'>Email</td>";
    echo "<td style='border:2px solid'>Phone</td>";
    echo "<td style='border:2px solid'>Township</td>";
    echo "<td style='border:2px solid'>Grade</td>";
    echo "<td style='border:2px solid'>Subject</td>";
    echo "</tr>";
    
         while(!feof($myfile)) {
                    $st=fgets($myfile);
                    if($st!=""){
                       
                        $obj=json_decode($st,true);
                        echo "<tr style='border:2px solid'>";
                        echo "<td>{$obj["Name"]}</td>";
                        echo "<td>{$obj["Email"]}</td>";
                        echo "<td>{$obj["Phone"]}</td>";
                        echo "<td>{$obj["Township"]}</td>";
                        echo "<td>{$obj["Grade"]}</td>";
                        echo "<td>{$obj["Subjects"]}</td>";
                        echo "</tr>";
                    }
                }
                fclose($myfile);
                echo "</table>";
                echo "<br>";
           
?>