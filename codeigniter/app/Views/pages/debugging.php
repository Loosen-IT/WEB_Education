<?php
echo password_hash('nutzer',PASSWORD_DEFAULT).'<br>';
if (password_verify('test','$2y$10$jim45spQWG0rYlSBknoimeuyrYPUArwl/ZimmXrFD/vq8XV7e5vH6')){
    echo "true";
} else {
    echo "false";
}
?>

