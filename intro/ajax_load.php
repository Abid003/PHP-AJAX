<?php
    include 'db_connector.php';
    $sql = "select * from student";
    $result = mysqli_query($conn, $sql) or die("failed");
    $output = "";
    if(mysqli_num_rows($result)>0){
        $output = "<table>
        
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Semester</th>
                <th>Section</th>
            </tr>";
        while($row = mysqli_fetch_assoc($result)){
            $output.= "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['semsister']}</td>
                <td>{$row['sec']}</td>";
        }

        $output.="</table>";
        mysqli_close($conn);
        echo $output;

    }else{
        echo "no record found";
    }


?>