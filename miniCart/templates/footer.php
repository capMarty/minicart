<script src="js/jquery-3.1.1.min.js"></script>


<?php
switch ($route) {
    case '':
        echo '<script src="js/eshop.js"></script>';
        break;
    case 'cart':
        echo '<script src="js/cart.js"></script>';
        break;
}
?>

</body>
</html>