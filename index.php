<?php 
    include 'php/form.php';
    include 'php/connection.php';
    $conn = mysqlConnecion();
    CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>SE 102 - CRUD</title>
</head>
<body>
    <div class="modal hidden">
        <button class="close-modal" title="Close">&times;</button>
        <h2 id="textAdd">ADD NEW DATA</h2>
        <form method="POST" action="php/form.php" id="formModal">
            <div>
                <input type="input" name="firstName" id="firstName" class="formInputs" placeholder="First Name">
            </div>
            <div>
                <input type="input" name="secondName" id="secondName" class="formInputs" placeholder="Second Name">
            </div>
            <div>
                <input type="number" name="age" id="age" class="formInputs" placeholder="Age">
            </div>
            <div>
                <select name="gender" id="gender" class="formInputs" title="Gender">
                    <option disabled selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div>
                <input type="submit" name="add-new-data-btn" id="submitBtn" class="submitBtn" title="Submit">
            </div>
        </form>
    </div>
    <div class="overlay hidden"></div>
    <h1 id="titlePhp" >SE 102 - CRUD in PHP</h1>
    <span id="addNewDiv">
       <p id="textOpe">OPERATIONS</p>
       <button class="addBtn" title="Add new data">&plus; New Data</button>
    </span>
    <div class="sortBy">
        <small id="sortByLabel">(CLICK THE HEADER TO SORT)</small>
    </div>
    <section>
        <div class="tableDiv">
            <table class="table">
                <tr>
                    <th class="table-header" title="Click to sort by ID">ID</th>
                    <th class="table-header" title="Click to sort by First Name">First Name</th>
                    <th class="table-header" title="Click to sort by Last Name">Last Name</th>
                    <th class="table-header" title="Click to sort by Age">Age</th>
                    <th class="table-header" title="Click to sort by Gender">Gender</th>
                    <th class="table-header">Edit</th>
                    <th class="table-header">Delete</th>
                </tr>
                    <?php   
                      include 'php/table.php';
                      getTable();
                    ?>
            </table>
        </div>
    </section>
    <script src="js/modal.js"></script>
    <script src="js/table-sorter.js"></script>
    <script src="js/form.js"></script>
</body>
</html>