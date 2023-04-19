<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
        if(isset($_POST['username'])){
            $color=htmlentities($_POST['color']);
            $dish=htmlentities($_POST['dish']);
            $username=htmlentities($_POST['username']);
            echo "you really enjoy $dish -especially with a nice $color wine"; }
        
    ?>
</body>
</html>