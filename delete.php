<?php
    include('connect.php');

    if(isset($_POST['delete'])){
        $delID = $_POST['delID'];

        $delete = "DELETE FROM crud_table WHERE ID=$delID";
        $sqlDel = mysqli_query($connect, $delete);

        echo "<script>alert('Data Deleted')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>
