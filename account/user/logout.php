<?php 
session_start();
session_unset();
session_destroy();
echo "<script>
alert('logout anda berhasil');
document.location = '../../index.php';
</script>";

?>