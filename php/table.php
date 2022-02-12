<?php
    function getTable() {
        $conn = mysqlConnecion();
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, firstName, lastName, age, gender FROM records";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr class='tableRow'>";
            echo "<td class='table-data-grey table-data'>".$row["id"]."</td>";
            echo "<td class='table-data-white table-data'>".$row["firstName"]."</td>";
            echo "<td class='table-data-grey table-data'>".$row["lastName"]."</td>";
            echo "<td class='table-data-white table-data'>".$row["age"]." Years old </td>";
            echo "<td class='table-data-grey table-data'>".$row["gender"]."</td>";
            echo "<td class='table-btn table-data'><button class='editBtn' title='Modify data'>Edit</button></td>";
            echo "<td class='table-btn table-data'><button class='deleteBtn' title='Delete data'>Delete</button></td>";
            echo "</tr>";
          }
        }
        $conn->close();
    }
?>