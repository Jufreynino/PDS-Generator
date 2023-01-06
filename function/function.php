<?php 

include('../../function/config.php');

function add_pds_section_1()
{
    global $con;

   if(isset($_POST['add_pds_section_1_button']))
   {
        $surname  = mysqli_real_escape_string($con, $_POST['surname']);
        $firstname  = mysqli_real_escape_string($con, $_POST['firstname']);
        $middlename  = mysqli_real_escape_string($con, $_POST['middlename']);
        $name_extension  = mysqli_real_escape_string($con, $_POST['name_extension']);
        $date_of_birth  = mysqli_real_escape_string($con, $_POST['date_of_birth']);
        $place_of_birth  = mysqli_real_escape_string($con, $_POST['place_of_birth']);
        $sex  = mysqli_real_escape_string($con, $_POST['sex']);
        $civil_status  = mysqli_real_escape_string($con, $_POST['civil_status']);
        $citizenship  = mysqli_real_escape_string($con, $_POST['citizenship']);
        $height  = mysqli_real_escape_string($con, $_POST['height']);
        $weight  = mysqli_real_escape_string($con, $_POST['weight']);
        $blood_type  = mysqli_real_escape_string($con, $_POST['blood_type']);
        $gsis_no  = mysqli_real_escape_string($con, $_POST['gsis_no']);
        $pag_ibig_no  = mysqli_real_escape_string($con, $_POST['pag_ibig_no']);
        $philhealth_no  = mysqli_real_escape_string($con, $_POST['philhealth_no']);
        $sss_no  = mysqli_real_escape_string($con, $_POST['sss_no']);
        $tin_no  = mysqli_real_escape_string($con, $_POST['tin_no']);
        $agency_employee_number  = mysqli_real_escape_string($con, $_POST['agency_employee_number']);
        $telephone_no  = mysqli_real_escape_string($con, $_POST['telephone_no']);
        $mobile_no  = mysqli_real_escape_string($con, $_POST['mobile_no']);
        $email_address  = mysqli_real_escape_string($con, $_POST['email_address']);
    


        ?>
            <script>
                alert('ok');
            </script>
        <?php
   }
}

