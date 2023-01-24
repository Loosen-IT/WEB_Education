<?php
echo password_hash('nutzer',PASSWORD_DEFAULT).'<br>';
if (password_verify('janniclas','$2y$10$souY2m/rkEQB/9AA44jmwOl9Sv/PDGuUAn.DAZP/Jl6lmlKagAAxG')){
    echo "true";
} else {
    echo "false";
}
?>

