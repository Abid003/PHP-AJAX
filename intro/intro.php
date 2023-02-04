<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div>
            <div>
                <label for="name" >Name: </label>
                <input type="text" required name="name" id="name">
            </div>

            <div>
                <label for="id">ID: </label>
                <input type="number" min="0" name="id" id="id">
            </div>

            <div>
                <label for="semester">Semester: </label>
                <input type="text"  name="semester" id="sem">
            </div>

            <div>
                <label for="sec">Section: </label>
                <input type="text" name="sec" id="sec">
            </div>

            <input type="submit" value="add" id="add-btn">


    </div>

    <h1>student table </h1>


    <div id="table-data">
        <?php include "ajax_load.php"; ?>


    </div>


    <div>
        <h1>search student</h1>
        <p>enter student name or id</p>
        <input type="text" name="search" id= "search">

        <div id ="searchResult"></div>


    </div>

    <script src="script.js"></script>

</body>

</html>