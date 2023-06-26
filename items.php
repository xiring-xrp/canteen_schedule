<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add items</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            padding: 100px;
        }
        h1{
            text-align: center;
        }
        .contain{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 25px
        }
        form{
            padding: 50px;
            border: 2px solid;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Item</h1>
    <div class="contain">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="item">Item</label>
            <input type="text" name="item" id="item" required><br>
            <label for="">Image Upload</label>
            <input type="file" name="uploadfile" required><br>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" required><br>
            <input type="submit" name="add" value="add item" id="">
        </form>
    </div>
</body>
</html>

<?php
    error_reporting(0);
    if(isset($_POST['add'])){

        $item = $_POST['item'];

        // print_r($_FILES["uploadfile"]);
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "img/".$filename;
        move_uploaded_file($tempname, $folder);

        $price = $_POST['price'];

        $query = "INSERT INTO items (item_name, img_source, price) values ('$item','$folder', '$price')";
        $data = mysqli_query($conn, $query);
    
        if($data){
            echo "<script>alert('Data Insert Into Database')</script>";
        }else{
            echo "<script>alert('Failed to Insert Data Into Database!!!')</script>";
        }
    }
?>