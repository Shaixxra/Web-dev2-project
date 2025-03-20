<?php
    include('connect.php');


    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $insert = "INSERT INTO crud_table VALUES (NULL,'$name', $age, '$address')";
        $insertSQL = mysqli_query($connect, $insert);

        echo "<script>alert('Data Added')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }
   

?>

<!DOCTYPE html>
<html lang="en">
    <style>
        body{
            background-color: pink;
            display: flex;
            justify-content: center;
            align-items: center;
        }
     .addBTN {
        background: purple;
        position: relative;
        border-radius: 20px;
        border:solid pink;
        top: 10px;
        display: grid;
        justify-content: center;
        place-items: center;
        height: 400px;
        width: 40%;
     }
     form{
        display: grid;
     }
     label{
        color: white;
        font-weight: 4px bold;
        
     }
     input{
        background-color: transparent;
        border: solid 3px white;
        border-radius: 10px;
        height: 35px;
        color: purple;
        width: 200px;
        border-radius: 7px;a
     }
     .sub{
        background: pink;
        font-weight: bold;
        font-size: 15px;
        position: relative;
        left: 55px;
        width: 100px;
        padding: 5px;
        color: purple;
     }
     .back{
        position: relative;
        right: 150px;
        border-radius: 30px;
        border: solid 2px;
        background-color: pink;
        text-decoration: none;
        padding: 7px;
        font-size: 1em;
        font-weight: bold;
        width: 30px;
        height: 20px;
        color: purple;
        border-radius: 3px;
        text-align: center;
        
        width: 50px;
        height: 15px;
     }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <style>
        form{
            margin-right: 0;
            margin-left: 0;
            padding: 1em;
        }
    </style>
</head>
<body>
     <div class="addBTN">
    <a class="back" href="index.php">Back</a>
    <form action="add.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br>

        <label for="age">AGE</label>
        <input type="number" name="age" id="age"><br>
        
        <label for="address">Address</label>
        <input type="text" name="address" id="address"><br>
        
        <input class="sub" type="submit" name="submit" id="submit"><br>
    </form>
    </div>
</body>
</html>



