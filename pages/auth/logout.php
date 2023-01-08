<?php 

                session_start();
                $id = $_POST['u_id'];
        session_destroy();
        session_unset($id);
        header('location:../auth/login.php');
?>