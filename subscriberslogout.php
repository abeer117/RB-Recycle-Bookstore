<html>
<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    ?>
<script type="text/javascript">
                         alert("You have been successfully logged out from recycling bookstore!");
        window.location.href = "home.php";    
    </script>    
    
</html>