<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <style>
        h1{
            text-align: center;
        }
        .table{
            padding: 10px 200px;
        }
        table{
            padding: 20px;
            border-radius: 8px;
        }
        .img{
            height: 100px;
            width: 100px
            border: 1px solid;
            border-radius: 50px;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
    error_reporting(0);
    include "connection.php";

    $query = "SELECT * FROM items";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    // echo $total;

    if($total != 0){
        ?>

        <h1>Menu</h1>
        <div class="table">
            <table border="1" cellspacing="7" width="100%">
                <tr>
                    <th width="2%">Item</th>
                    <th width="5%">Item Name</th>
                    <th width="5%">Image</th>
                    <th width="5%">Price</th>
                </tr>

        <?php
        while($result = mysqli_fetch_assoc($data)){
            echo "<tr class='table' align='center'>
                <td>".$result['id']."</td>
                <td>".$result['item_name']."</td>
                <td><img src='".$result['img_source']."' class='img'></td>
                <td>".$result['price']."</td>
            </tr>";
        }
    }
?>
</table>
</div>

