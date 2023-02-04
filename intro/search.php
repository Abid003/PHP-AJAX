<?php

    include "db_connector.php";

    $search = $_POST['search'];

    $sql = "SELECT * FROM student WHERE name LIKE '%{$search}%'";

     $result = mysqli_query($conn, $sql) or die("failed");

      $output = "<table> 
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Semester</th>
                <th>Section</th>
            </tr>";

       if(mysqli_num_rows($result)>0){
     
         while($row = mysqli_fetch_assoc($result)){
            $output.= "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['semsister']}</td>
                <td>{$row['sec']}</td>";
        

        $output.="</table>";
         
        echo $output;
       mysqli_close($conn);
    }

    }else{
        echo "no record found";
    }

    


?>