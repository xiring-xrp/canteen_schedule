<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>admin</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="canteen">
                <img src="./img/canteen background image.jpg" alt="food-banner">
            </div>
        </header>

        <section>
            <div class="left-section">
                <h2>User</h2>
            </div>
            <div class="section-center">

            </div>
            <div class="right-section">

            </div>
        </section>

        <main>
            <div class="left-main-div">
                <?php
                error_reporting(0);
                    $role = $_GET['role'];
                    if($role == 'admin'){
                        ?>
                        <div class="items">
                            <a href="items.php">Add items</a>
                        </div>
                        <?php
                    }else{

                    }
                ?>
                <div class="view">
                    <a href="view.php">Menu</a>
                </div>
            </div>
            <div class="right-main-div">

            </div>
        </main>

        <footer>

        </footer>
    </div>
</body>
</html>