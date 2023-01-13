<?php 

include('../../function/config.php');

function pds_section1_update()
{

    
    
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM personal_information_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>

<form method="POST">
        <div class="d-md-flex">
            <div class="row">
        <legend>PERSONAL DETAILS</legend>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" style="font-size:10px !important;" name="surname" class="form-control" value="<?= $row['surname']?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" style="font-size:10px !important;"  name="firstname" class="form-control" value="<?= $row['firstname'] ?>">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Middlename</label>
                        <input type="text" style="font-size:10px !important;"  name="middlename" class="form-control" value="<?= $row['middlename'] ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Name Extension (JR, SR)</label>
                        <input type="text" style="font-size:10px !important;"  name="name_extension" class="form-control" value="<?= $row['name_extension'] ?>">
                    </div>
                </div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" style="font-size:10px !important;"  name="date_of_birth" class="form-control" value="<?= $row['date_of_birth'] ?>">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>Place of Birth</label>
                        <input type="text" style="font-size:10px !important;"  name="place_of_birth" class="form-control" value="<?= $row['place_of_birth'] ?>">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>Sex</label>
                        <input type="text" style="font-size:10px !important;"  name="sex" class="form-control" value="<?= $row['sex'] ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Civil status</label>
                        <input type="text" style="font-size:10px !important;"  name="civil_status" class="form-control" value="<?= $row['civil_status'] ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Citizenship</label>
                        <input type="text" style="font-size:10px !important;"  name="citizenship" class="form-control" value="<?= $row['citizenship'] ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Citizenship Country</label>
                        <input type="text" style="font-size:10px !important;"  name="citizenship_country" class="form-control" value="<?= $row['citizenship_country'] ?>">
                    </div>
                </div>



                <div class="col-md-2">
                    <div class="form-group">
                        <label>Height (m)</label>
                        <input type="text" style="font-size:10px !important;"  name="height" class="form-control" value="<?= $row['height'] ?>">
                    </div>
                </div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label>Weight (kg)</label>
                        <input type="text" style="font-size:10px !important;"  name="weight" class="form-control" value="<?= $row['weight'] ?>">
                    </div>
                </div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label>Blood Type</label>
                        <input type="text" style="font-size:10px !important;"  name="blood_type" class="form-control" value="<?= $row['blood_type'] ?>">
                    </div>
                </div>


                

        <legend>ISSUED ID</legend>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>GSIS NO</label>
                        <input type="text" style="font-size:10px !important;"  name="gsis_no" class="form-control" value="<?= $row['gsis_no'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>PAG-IBIG NO.</label>
                        <input type="text" style="font-size:10px !important;"  name="pag_ibig_no" class="form-control" value="<?= $row['pagibig_no'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>PHILHEALTH NO.</label>
                        <input type="text" style="font-size:10px !important;"  name="philhealth_no" class="form-control" value="<?= $row['philhealth_no'] ?>">
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="form-group">
                        <label>SSS NO.</label>
                        <input type="text" style="font-size:10px !important;"  name="sss_no" class="form-control" value="<?= $row['sss_no'] ?>">
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="form-group">
                        <label>TIN NO.</label>
                        <input type="text" style="font-size:10px !important;"  name="tin_no" class="form-control" value="<?= $row['tin_no'] ?>">
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="form-group">
                        <label>AGENCY EMPLOYEE NO.</label>
                        <input type="text" style="font-size:10px !important;"  name="agency_employee_number" class="form-control" value="<?= $row['agency_employee_no'] ?>">
                    </div>
                </div>



                <legend>CONTACT INFORMATION</legend>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>TELEPHONE NO.</label>
                        <input type="text" style="font-size:10px !important;"  name="telephone_no" class="form-control" value="<?= $row['telephone_no'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>MOBILE NO.</label>
                        <input type="text" style="font-size:10px !important;"  name="mobile_no" class="form-control" value="<?= $row['mobile_no'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>EMAIL ADDRESS (if any)</label>
                        <input type="text" style="font-size:10px !important;"  name="email_address" class="form-control" value="<?= $row['email_address'] ?>">
                    </div>
                </div>

              



                  <legend>RESIDENTIAL ADDRESS</legend>
    
                <div class="col-md-4">
                    <div class="form-group">
                        <label>House/Block/Lot No.</label>
                        <input type="text" style="font-size:10px !important;"  name="residential_house_block" class="form-control" value="<?= $row['residential_house_block'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>Street</label>
                        <input type="text" style="font-size:10px !important;"  name="residential_street" class="form-control" value="<?= $row['residential_street'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>Subdivision/Village</label>
                        <input type="text" style="font-size:10px !important;"  name="residential_subdivision_village" class="form-control" value="<?= $row['residential_subdivision_village'] ?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Barangay</label>
                        <input type="text" style="font-size:10px !important;"  name="residential_barangay" class="form-control" value="<?= $row['residential_barangay'] ?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>City/Municipality</label>
                        <input type="text" style="font-size:10px !important;"  name="residential_city_municipality" class="form-control" value="<?= $row['residential_city_municipality'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>Province</label>
                        <input type="text" style="font-size:10px !important;"  name="residential_province" class="form-control" value="<?= $row['residential_province'] ?>">
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" style="font-size:10px !important;"  name="residential_zipcode" class="form-control" value="<?= $row['residential_zipcode'] ?>">
                    </div>
                </div>

            
            <legend>PERMANENT ADDRESS</legend>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>House/Block/Lot No.</label>
                        <input type="text" style="font-size:10px !important;"  name="permanent_house_block" class="form-control" value="<?= $row['permanent_house_block'] ?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Street</label>
                        <input type="text" style="font-size:10px !important;"  name="permanent_street" class="form-control" value="<?= $row['permanent_street'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>Subdivision/Village</label>
                        <input type="text" style="font-size:10px !important;"  name="permanent_subdivision_village" class="form-control" value="<?= $row['permanent_subdivision_village'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>Barangay</label>
                        <input type="text" style="font-size:10px !important;"  name="permanent_barangay" class="form-control" value="<?= $row['permanent_barangay'] ?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>City/Municipality</label>
                        <input type="text" style="font-size:10px !important;"  name="permanent_city_municipality" class="form-control" value="<?= $row['permanent_city_municipality'] ?>">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>Province</label>
                        <input type="text" style="font-size:10px !important;"  name="permanent_province" class="form-control" value="<?= $row['permanent_province'] ?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" style="font-size:10px !important;"  name="permanent_zipcode" class="form-control" value="<?= $row['permanent_zipcode'] ?>">
                    </div>
                </div>







                

                <div class="col-md-12 ">
                    <div class=" pull right">
                    <button type="submit" name="update_pds_section_1_button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>








            </div>
        </div>			
    </form>
    <?php


   if(isset($_POST['update_pds_section_1_button']))
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
        $citizenship_country  = mysqli_real_escape_string($con, $_POST['citizenship_country']);
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
        $residential_house_block  = mysqli_real_escape_string($con, $_POST['residential_house_block']);
        $residential_street  = mysqli_real_escape_string($con, $_POST['residential_street']);
        $residential_subdivision_village  = mysqli_real_escape_string($con, $_POST['residential_subdivision_village']);
        $residential_barangay  = mysqli_real_escape_string($con, $_POST['residential_barangay']);
        $residential_city_municipality  = mysqli_real_escape_string($con, $_POST['residential_city_municipality']);
        $residential_province  = mysqli_real_escape_string($con, $_POST['residential_province']);
        $residential_zipcode  = mysqli_real_escape_string($con, $_POST['residential_zipcode']);
        $permanent_house_block  = mysqli_real_escape_string($con, $_POST['permanent_house_block']);
        $permanent_street  = mysqli_real_escape_string($con, $_POST['permanent_street']);
        $permanent_subdivision_village  = mysqli_real_escape_string($con, $_POST['permanent_subdivision_village']);
        $permanent_barangay  = mysqli_real_escape_string($con, $_POST['permanent_barangay']);
        $permanent_city_municipality  = mysqli_real_escape_string($con, $_POST['permanent_city_municipality']);
        $permanent_province  = mysqli_real_escape_string($con, $_POST['permanent_province']);
        $permanent_zipcode  = mysqli_real_escape_string($con, $_POST['permanent_zipcode']);
    
        $pds_id = $_SESSION['id'];

        $sq2l = mysqli_query($con, "UPDATE personal_information_tbl SET 
        surname='$surname',
        firstname='$firstname',
        middlename='$middlename',
        name_extension='$name_extension',
        date_of_birth='$date_of_birth',
        place_of_birth='$place_of_birth',
        sex='$sex',
        civil_status='$civil_status',
        height='$height',
        weight='$weight',
        blood_type='$blood_type',
        gsis_no='$gsis_no',
        pagibig_no='$pag_ibig_no',
        philhealth_no='$philhealth_no',
        sss_no='$sss_no',
        tin_no='$tin_no',
        agency_employee_no='$agency_employee_number',
        citizenship='$citizenship',
        citizenship_country='$citizenship_country',
        residential_house_block='$residential_house_block',
        residential_street='$residential_street',
        residential_subdivision_village='$residential_subdivision_village',
        residential_barangay='$residential_barangay',
        residential_city_municipality='$residential_city_municipality',
        residential_province='$residential_province',
        residential_zipcode='$residential_zipcode',
        permanent_house_block='$permanent_house_block',
        permanent_street='$permanent_street',
        permanent_subdivision_village='$permanent_subdivision_village',
        permanent_barangay='$permanent_barangay',
        permanent_city_municipality='$permanent_city_municipality',
        permanent_province='$permanent_province',
        permanent_zipcode='$permanent_zipcode',
        telephone_no='$telephone_no',
        mobile_no='$mobile_no',
        email_address='$email_address'
         WHERE pds_id='$pds_id'
        ");

        ?>
            <script>
                alert('ok');
            </script>
        <?php

        
   }
}


function pds_section2_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM personal_information_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
            <form method="POST">

<div class="d-md-flex">
            <div class="row">



  <legend>SPOUSE DETAILS</legend>




                <div class="col-md-3">
                    <div class="form-group">
                        <label>Spouse Surname</label>
                        <input type="text" style="font-size:10px !important;" name="spouse_surname" class="form-control" value="<?= $row['spouse_surname']?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Spouse Firstname</label>
                        <input type="text" style="font-size:10px !important;"  name="spouse_firstname" class="form-control" value="<?= $row['spouse_firstname'] ?>">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Spouse Middlename</label>
                        <input type="text" style="font-size:10px !important;"  name="spouse_middlename" class="form-control" value="<?= $row['spouse_middlename'] ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Name Extension (JR, SR)</label>
                        <input type="text" style="font-size:10px !important;"  name="spouse_name_extension" class="form-control" value="<?= $row['spouse_name_extension'] ?>">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Spouse Occupation</label>
                        <input type="text" style="font-size:10px !important;"  name="spouse_occupation" class="form-control" value="<?= $row['spouse_occupation'] ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Spouse Employer / Business name</label>
                        <input type="text" style="font-size:10px !important;"  name="spouse_employer" class="form-control" value="<?= $row['spouse_employer'] ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Spouse Business Address</label>
                        <input type="text" style="font-size:10px !important;"  name="spouse_business_address" class="form-control" value="<?= $row['spouse_business_address'] ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Spouse Telephone number</label>
                        <input type="text" style="font-size:10px !important;"  name="spouse_telephone_no" class="form-control" value="<?= $row['spouse_telephone_no'] ?>">
                    </div>
                </div>

                <Legend>FATHER DETAILS</Legend>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Father Surname</label>
                        <input type="text" style="font-size:10px !important;"  name="father_surname" class="form-control" value="<?= $row['father_surname'] ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Father Firstname</label>
                        <input type="text" style="font-size:10px !important;"  name="father_firstname" class="form-control" value="<?= $row['father_firstname'] ?>">
                    </div>
                </div>



                <div class="col-md-3">
                    <div class="form-group">
                        <label>Father Middlename</label>
                        <input type="text" style="font-size:10px !important;"  name="father_middlename" class="form-control" value="<?= $row['father_middlename'] ?>">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Father Name Extension</label>
                        <input type="text" style="font-size:10px !important;"  name="father_name_extension" class="form-control" value="<?= $row['father_name_extension'] ?>">
                    </div>
                </div>
<legend>MOTHER DETAILS</legend>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Mother Maiden Name </label>
                        <input type="text" style="font-size:10px !important;"  name="mother_maiden_name" class="form-control" value="<?= $row['mother_maiden_name'] ?>">
                    </div>
                </div>


                


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Mother Surname</label>
                        <input type="text" style="font-size:10px !important;"  name="mother_surname" class="form-control" value="<?= $row['mother_surname'] ?>">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Mother Firstname</label>
                        <input type="text" style="font-size:10px !important;"  name="mother_firstname" class="form-control" value="<?= $row['mother_firstname'] ?>">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Mother Middlename</label>
                        <input type="text" style="font-size:10px !important;"  name="mother_middlename" class="form-control" value="<?= $row['mother_middlename'] ?>">
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class=" pull right">
                    <button type="submit" name="update_pds_section_2_button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>


                </div>
        </div>			
    </form>

    <?php


    if(isset($_POST['update_pds_section_2_button']))
    {
        $spouse_surname  = mysqli_real_escape_string($con, $_POST['spouse_surname']);
        $spouse_firstname  = mysqli_real_escape_string($con, $_POST['spouse_firstname']);
        $spouse_middlename  = mysqli_real_escape_string($con, $_POST['spouse_middlename']);
        $spouse_name_extension  = mysqli_real_escape_string($con, $_POST['spouse_name_extension']);
        $spouse_occupation  = mysqli_real_escape_string($con, $_POST['spouse_occupation']);
        $spouse_employer  = mysqli_real_escape_string($con, $_POST['spouse_employer']);
        $spouse_business_address  = mysqli_real_escape_string($con, $_POST['spouse_business_address']);
        $spouse_telephone_no  = mysqli_real_escape_string($con, $_POST['spouse_telephone_no']);
        $father_surname  = mysqli_real_escape_string($con, $_POST['father_surname']);
        $father_firstname  = mysqli_real_escape_string($con, $_POST['father_firstname']);
        $father_middlename  = mysqli_real_escape_string($con, $_POST['father_middlename']);
        $father_name_extension  = mysqli_real_escape_string($con, $_POST['father_name_extension']);
        $mother_maiden_name  = mysqli_real_escape_string($con, $_POST['mother_maiden_name']);
        $mother_surname  = mysqli_real_escape_string($con, $_POST['mother_surname']);
        $mother_firstname  = mysqli_real_escape_string($con, $_POST['mother_firstname']);
        $mother_middlename  = mysqli_real_escape_string($con, $_POST['mother_middlename']);
        $pds_id = $_SESSION['id'];

        $sq2l = mysqli_query($con, "UPDATE personal_information_tbl SET 
        spouse_surname='$spouse_surname',
        spouse_firstname='$spouse_firstname',
        spouse_middlename='$spouse_middlename',
        spouse_name_extension='$spouse_name_extension',
        spouse_occupation='$spouse_occupation',
        spouse_employer='$spouse_employer',
        spouse_business_address='$spouse_business_address',
        spouse_telephone_no='$spouse_telephone_no',
        father_surname='$father_surname',
        father_firstname='$father_firstname',
        father_middlename='$father_middlename',
        father_name_extension='$father_name_extension',
        mother_maiden_name='$mother_maiden_name',
        mother_surname='$mother_surname',
        mother_firstname='$mother_firstname',
        mother_middlename='$mother_middlename' 
        WHERE pds_id='$pds_id'
          
          ");
      
      ?>
        <script>
            alert('ok');
        </script>
     <?php

    }
}



function pds_section3_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM personal_information_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
            <form method="POST">

<div class="d-md-flex">
            <div class="row">



  <legend>ELEMENTARY</legend>




                <div class="col-md-7">
                    <div class="form-group">
                        <label>NAME OF SCHOOL</label>
                        <input type="text" style="font-size:10px !important;" name="elementary_name_of_school" class="form-control" value="<?= $row['elementary_name_of_school']?>">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label>BASIC EDUCATION/DEGREE/COURSE</label>
                        <input type="text" style="font-size:10px !important;"  name="elementary_basic_education" class="form-control" value="<?= $row['elementary_basic_education'] ?>">
                    </div>
                </div>


                <div class="col-md-5">
                    <div class="form-group">
                        <label>HIGHEST LEVEL/UNITS EARNED(if not graduated)</label>
                        <input type="text" style="font-size:10px !important;"  name="elementary_highest_level" class="form-control" value="<?= $row['elementary_highest_level'] ?>">
                    </div>
                </div>



                <div class="col-md-2">
                    <div class="form-group">
                        <label>FROM</label>
                        <input type="text" style="font-size:10px !important;"  name="elementary_period_attendance_from" class="form-control" value="<?= $row['elementary_period_attendance_from'] ?>">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>TO</label>
                        <input type="text" style="font-size:10px !important;"  name="elementary_period_attendance_to" class="form-control" value="<?= $row['elementary_period_attendance_to'] ?>">
                    </div>
                </div>


                
                <div class="col-md-3">
                    <div class="form-group">
                        <label>YEAR GRADUATED </label>
                        <input type="text" style="font-size:10px !important;"  name="elementary_year_graduated" class="form-control" value="<?= $row['elementary_year_graduated'] ?>">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
                        <input type="text" style="font-size:10px !important;"  name="elementary_honor_received" class="form-control" value="<?= $row['elementary_honor_received'] ?>">
                    </div>
                </div>




                                    
                    <legend>SECONDARY</legend>




                    <div class="col-md-7">
                        <div class="form-group">
                            <label>NAME OF SCHOOL</label>
                            <input type="text" style="font-size:10px !important;" name="secondary_name_of_school" class="form-control" value="<?= $row['secondary_name_of_school']?>">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>BASIC EDUCATION/DEGREE/COURSE</label>
                            <input type="text" style="font-size:10px !important;"  name="secondary_basic_education" class="form-control" value="<?= $row['secondary_basic_education'] ?>">
                        </div>
                    </div>


                    <div class="col-md-5">
                        <div class="form-group">
                            <label>HIGHEST LEVEL/UNITS EARNED(if not graduated)</label>
                            <input type="text" style="font-size:10px !important;"  name="secondary_highest_level" class="form-control" value="<?= $row['secondary_highest_level'] ?>">
                        </div>
                    </div>



                    <div class="col-md-2">
                        <div class="form-group">
                            <label>FROM</label>
                            <input type="text" style="font-size:10px !important;"  name="secondary_period_attendance_from" class="form-control" value="<?= $row['secondary_period_attendance_from'] ?>">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>TO</label>
                            <input type="text" style="font-size:10px !important;"  name="secondary_period_attendance_to" class="form-control" value="<?= $row['secondary_period_attendance_to'] ?>">
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="form-group">
                            <label>YEAR GRADUATED </label>
                            <input type="text" style="font-size:10px !important;"  name="secondary_year_graduated" class="form-control" value="<?= $row['secondary_year_graduated'] ?>">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
                            <input type="text" style="font-size:10px !important;"  name="secondary_honor_received" class="form-control" value="<?= $row['secondary_honor_received'] ?>">
                        </div>
                    </div>


                    <legend>VOCATIONAL / TRADE COURSE       </legend>




                    <div class="col-md-7">
                        <div class="form-group">
                            <label>NAME OF SCHOOL</label>
                            <input type="text" style="font-size:10px !important;" name="vocational_name_of_school" class="form-control" value="<?= $row['vocational_name_of_school']?>">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>BASIC EDUCATION/DEGREE/COURSE</label>
                            <input type="text" style="font-size:10px !important;"  name="vocational_basic_education" class="form-control" value="<?= $row['vocational_basic_education'] ?>">
                        </div>
                    </div>


                    <div class="col-md-5">
                        <div class="form-group">
                            <label>HIGHEST LEVEL/UNITS EARNED(if not graduated)</label>
                            <input type="text" style="font-size:10px !important;"  name="vocational_highest_level" class="form-control" value="<?= $row['vocational_highest_level'] ?>">
                        </div>
                    </div>



                    <div class="col-md-2">
                        <div class="form-group">
                            <label>FROM</label>
                            <input type="text" style="font-size:10px !important;"  name="vocational_period_attendance_from" class="form-control" value="<?= $row['vocational_period_attendance_from'] ?>">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>TO</label>
                            <input type="text" style="font-size:10px !important;"  name="vocational_period_attendance_to" class="form-control" value="<?= $row['vocational_period_attendance_to'] ?>">
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="form-group">
                            <label>YEAR GRADUATED </label>
                            <input type="text" style="font-size:10px !important;"  name="vocational_year_graduated" class="form-control" value="<?= $row['vocational_year_graduated'] ?>">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
                            <input type="text" style="font-size:10px !important;"  name="vocational_honor_received" class="form-control" value="<?= $row['vocational_honor_received'] ?>">
                        </div>
                    </div>


                    <legend>COLLEGE</legend>




                    <div class="col-md-7">
                        <div class="form-group">
                            <label>NAME OF SCHOOL</label>
                            <input type="text" style="font-size:10px !important;" name="college_name_of_school" class="form-control" value="<?= $row['college_name_of_school']?>">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>BASIC EDUCATION/DEGREE/COURSE</label>
                            <input type="text" style="font-size:10px !important;"  name="college_basic_education" class="form-control" value="<?= $row['college_basic_education'] ?>">
                        </div>
                    </div>


                    <div class="col-md-5">
                        <div class="form-group">
                            <label>HIGHEST LEVEL/UNITS EARNED(if not graduated)</label>
                            <input type="text" style="font-size:10px !important;"  name="college_highest_level" class="form-control" value="<?= $row['college_highest_level'] ?>">
                        </div>
                    </div>



                    <div class="col-md-2">
                        <div class="form-group">
                            <label>FROM</label>
                            <input type="text" style="font-size:10px !important;"  name="college_period_attendance_from" class="form-control" value="<?= $row['college_period_attendance_from'] ?>">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>TO</label>
                            <input type="text" style="font-size:10px !important;"  name="college_period_attendance_to" class="form-control" value="<?= $row['college_period_attendance_to'] ?>">
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="form-group">
                            <label>YEAR GRADUATED </label>
                            <input type="text" style="font-size:10px !important;"  name="college_year_graduated" class="form-control" value="<?= $row['college_year_graduated'] ?>">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
                            <input type="text" style="font-size:10px !important;"  name="college_honor_received" class="form-control" value="<?= $row['college_honor_received'] ?>">
                        </div>
                    </div>




                    <legend>GRADUATE STUDIES </legend>




                    <div class="col-md-7">
                        <div class="form-group">
                            <label>NAME OF SCHOOL</label>
                            <input type="text" style="font-size:10px !important;" name="graduate_studies_name_of_school" class="form-control" value="<?= $row['graduate_studies_name_of_school']?>">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>BASIC EDUCATION/DEGREE/COURSE</label>
                            <input type="text" style="font-size:10px !important;"  name="graduate_studies_basic_education" class="form-control" value="<?= $row['graduate_studies_basic_education'] ?>">
                        </div>
                    </div>


                    <div class="col-md-5">
                        <div class="form-group">
                            <label>HIGHEST LEVEL/UNITS EARNED(if not graduated)</label>
                            <input type="text" style="font-size:10px !important;"  name="graduate_studies_highest_level" class="form-control" value="<?= $row['graduate_studies_highest_level'] ?>">
                        </div>
                    </div>



                    <div class="col-md-2">
                        <div class="form-group">
                            <label>FROM</label>
                            <input type="text" style="font-size:10px !important;"  name="graduate_studies_period_attendance_from" class="form-control" value="<?= $row['graduate_studies_period_attendance_from'] ?>">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>TO</label>
                            <input type="text" style="font-size:10px !important;"  name="graduate_studies_period_attendance_to" class="form-control" value="<?= $row['graduate_studies_period_attendance_to'] ?>">
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="form-group">
                            <label>YEAR GRADUATED </label>
                            <input type="text" style="font-size:10px !important;"  name="graduate_studies_year_graduated" class="form-control" value="<?= $row['graduate_studies_year_graduated'] ?>">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</label>
                            <input type="text" style="font-size:10px !important;"  name="graduate_studies_honor_received" class="form-control" value="<?= $row['graduate_studies_honor_received'] ?>">
                        </div>
                    </div>



                
                

                <div class="col-md-12 ">
                    <div class=" pull right">
                    <button type="submit" name="update_pds_section_2_button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>



                </div>
        </div>			
    </form>

    <?php


    if(isset($_POST['update_pds_section_2_button']))
    {
        $elementary_name_of_school  = mysqli_real_escape_string($con, $_POST['elementary_name_of_school']);
        $elementary_basic_education  = mysqli_real_escape_string($con, $_POST['elementary_basic_education']);
        $elementary_period_attendance_from  = mysqli_real_escape_string($con, $_POST['elementary_period_attendance_from']);
        $elementary_period_attendance_to  = mysqli_real_escape_string($con, $_POST['elementary_period_attendance_to']);
        $elementary_highest_level  = mysqli_real_escape_string($con, $_POST['elementary_highest_level']);
        $elementary_year_graduated  = mysqli_real_escape_string($con, $_POST['elementary_year_graduated']);
        $elementary_honor_received  = mysqli_real_escape_string($con, $_POST['elementary_honor_received']);
        $secondary_name_of_school  = mysqli_real_escape_string($con, $_POST['secondary_name_of_school']);
        $secondary_basic_education  = mysqli_real_escape_string($con, $_POST['secondary_basic_education']);
        $secondary_period_attendance_from  = mysqli_real_escape_string($con, $_POST['secondary_period_attendance_from']);
        $secondary_period_attendance_to  = mysqli_real_escape_string($con, $_POST['secondary_period_attendance_to']);
        $secondary_highest_level  = mysqli_real_escape_string($con, $_POST['secondary_highest_level']);
        $secondary_year_graduated  = mysqli_real_escape_string($con, $_POST['secondary_year_graduated']);
        $secondary_honor_received  = mysqli_real_escape_string($con, $_POST['secondary_honor_received']);
        $vocational_name_of_school  = mysqli_real_escape_string($con, $_POST['vocational_name_of_school']);
        $vocational_basic_education  = mysqli_real_escape_string($con, $_POST['vocational_basic_education']);
        $vocational_period_attendance_from  = mysqli_real_escape_string($con, $_POST['vocational_period_attendance_from']);
        $vocational_period_attendance_to  = mysqli_real_escape_string($con, $_POST['vocational_period_attendance_to']);
        $vocational_highest_level  = mysqli_real_escape_string($con, $_POST['vocational_highest_level']);
        $vocational_year_graduated  = mysqli_real_escape_string($con, $_POST['vocational_year_graduated']);
        $vocational_honor_received  = mysqli_real_escape_string($con, $_POST['vocational_honor_received']);
        $college_name_of_school  = mysqli_real_escape_string($con, $_POST['college_name_of_school']);
        $college_basic_education  = mysqli_real_escape_string($con, $_POST['college_basic_education']);
        $college_period_attendance_from  = mysqli_real_escape_string($con, $_POST['college_period_attendance_from']);
        $college_period_attendance_to  = mysqli_real_escape_string($con, $_POST['college_period_attendance_to']);
        $college_highest_level  = mysqli_real_escape_string($con, $_POST['college_highest_level']);
        $college_year_graduated  = mysqli_real_escape_string($con, $_POST['college_year_graduated']);
        $college_honor_received  = mysqli_real_escape_string($con, $_POST['college_honor_received']);
        $graduate_studies_name_of_school  = mysqli_real_escape_string($con, $_POST['graduate_studies_name_of_school']);
        $graduate_studies_basic_education  = mysqli_real_escape_string($con, $_POST['graduate_studies_basic_education']);
        $graduate_studies_period_attendance_from  = mysqli_real_escape_string($con, $_POST['graduate_studies_period_attendance_from']);
        $graduate_studies_period_attendance_to  = mysqli_real_escape_string($con, $_POST['graduate_studies_period_attendance_to']);
        $graduate_studies_highest_level  = mysqli_real_escape_string($con, $_POST['graduate_studies_highest_level']);
        $graduate_studies_year_graduated  = mysqli_real_escape_string($con, $_POST['graduate_studies_year_graduated']);
        $graduate_studies_honor_received  = mysqli_real_escape_string($con, $_POST['graduate_studies_honor_received']);
        $pds_id = $_SESSION['id'];

        $sq2l = mysqli_query($con, "UPDATE personal_information_tbl SET 
       elementary_name_of_school='$elementary_name_of_school',
       elementary_basic_education='$elementary_basic_education',
       elementary_period_attendance_from='$elementary_period_attendance_from',
       elementary_period_attendance_to='$elementary_period_attendance_to',
       elementary_highest_level='$elementary_highest_level',
       elementary_year_graduated='$elementary_year_graduated',
       elementary_honor_received='$elementary_honor_received',
       secondary_name_of_school='$secondary_name_of_school',
       secondary_basic_education='$secondary_basic_education',
       secondary_period_attendance_from='$secondary_period_attendance_from',
       secondary_period_attendance_to='$secondary_period_attendance_to',
       secondary_highest_level='$secondary_highest_level',
       secondary_year_graduated='$secondary_year_graduated',
       secondary_honor_received='$secondary_honor_received',
       vocational_name_of_school='$vocational_name_of_school',
       vocational_basic_education='$vocational_basic_education',
       vocational_period_attendance_from='$vocational_period_attendance_from',
       vocational_period_attendance_to='$vocational_period_attendance_to',
       vocational_highest_level='$vocational_highest_level',
       vocational_year_graduated='$vocational_year_graduated',
       vocational_honor_received='$vocational_honor_received',
       college_name_of_school='$college_name_of_school',
       college_basic_education='$college_basic_education',
       college_period_attendance_from='$college_period_attendance_from',
       college_period_attendance_to='$college_period_attendance_to',
       college_highest_level='$college_highest_level',
       college_year_graduated='$college_year_graduated',
       college_honor_received='$college_honor_received',
       graduate_studies_name_of_school='$graduate_studies_name_of_school',
       graduate_studies_basic_education='$graduate_studies_basic_education',
       graduate_studies_period_attendance_from='$graduate_studies_period_attendance_from',
       graduate_studies_period_attendance_to='$graduate_studies_period_attendance_to',
       graduate_studies_highest_level='$graduate_studies_highest_level',
       graduate_studies_year_graduated='$graduate_studies_year_graduated',
       graduate_studies_honor_received='$graduate_studies_honor_received' 
        WHERE pds_id='$pds_id'
          
          ");
      
      ?>
        <script>
            alert('ok');
        </script>
     <?php

    }
}





function pds_section4_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM civil_service_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
                <div style="overflow-x:auto;">
                   <table class="table">
                        <tr>
                            <th rowspan="2">CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE / BARANGAY ELIGIBILITY / DRIVER'S LICENSE</th>
                            <th rowspan="2" style="width:50px;">RATING <br>(If Applicable</th>
                            <th rowspan="2" style="width:50px;">DATE OF EXAMINATION / CONFERMENT</th>
                            <th rowspan="2" style="width:500px;">PLACE OF EXAMINATION / CONFERMENT</th>
                            <th colspan="2">LICENSE (if applicable)</th>
                            <th rowspan="2"  style="width:170px;">Action</th>
                        </tr>
                        <tr>
                            <th>NUMBER</th>
                            <th>Date of Validity</th>
                        </tr>
                        <tr>
                            <td><?= $row['career_1']?></td>
                            <td><?= $row['rating_1']?></td>
                            <td><?= $row['date_of_examination_1']?></td>
                            <td><?= $row['place_of_examination_1']?></td>
                            <td><?= $row['license_number_1']?></td>
                            <td><?= $row['license_validity_1']?></td>
                            <td>
                                <button type="button" class="btn bg-info" data-toggle="modal" data-target="#edit">Edit </button>
                                <button type="button" class="btn bg-danger" data-toggle="modal" data-target="#delete">Delete </button>
                            
                            </td>
                            
                        </tr>

                      
                    
                    </table>
                </div>	
            </div>		
        </div>		
        <br>

                <div id="edit" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header bg-info">
								<h6 class="modal-title">Edit Details</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
<form method="POST">
                                    <div class="form-group">
										<label>CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE / BARANGAY ELIGIBILITY / DRIVER'S LICENSE</label>
										<input type="text" class="form-control" name="career_1" value="<?= $row['career_1']?>">
									</div>

									<div class="form-group">
										<label>RATING (If Applicable)</label>
										<input type="text" class="form-control" name="rating_1" value="<?= $row['rating_1']?>">
									</div>

                                    <div class="form-group">
										<label>DATE OF EXAMINATION / CONFERMENT</label>
										<input type="text" class="form-control" name="date_of_examination_1" value="<?= $row['date_of_examination_1']?>">
									</div>
                                    <div class="form-group">
										<label>PLACE OF EXAMINATION / CONFERMENT</label>
										<input type="text" class="form-control" name="place_of_examination_1" value="<?= $row['place_of_examination_1']?>">
									</div>
                                    <div class="form-group">
										<label>LICENSE NUMBER</label>
										<input type="text" class="form-control" name="license_number_1" value="<?= $row['license_number_1']?>">
									</div>
                                    <div class="form-group">
										<label>LICENSE Date of Validity</label>
										<input type="text" class="form-control" name="license_validity_1" value="<?= $row['license_validity_1']?>">
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                <button type="submit" name="update_pds_section_4_button" class="btn bg-primary">Save Changes</button>
							</div>
						</div>
</form>
					</div>
				</div>
    <?php
    if(isset($_POST['update_pds_section_4_button']))
    {
        $career_1  = mysqli_real_escape_string($con, $_POST['career_1']);
        $rating_1  = mysqli_real_escape_string($con, $_POST['rating_1']);
        $date_of_examination_1  = mysqli_real_escape_string($con, $_POST['date_of_examination_1']);
        $place_of_examination_1  = mysqli_real_escape_string($con, $_POST['place_of_examination_1']);
        $license_number_1  = mysqli_real_escape_string($con, $_POST['license_number_1']);
        $license_validity_1  = mysqli_real_escape_string($con, $_POST['license_validity_1']);
       
        
        $pds_id = $_SESSION['id'];

        $sq2l = mysqli_query($con, "UPDATE civil_service_tbl SET 
        career_1='$career_1',
        rating_1='$rating_1',
        date_of_examination_1='$date_of_examination_1',
        place_of_examination_1='$place_of_examination_1',
        license_number_1='$license_number_1',
        license_validity_1='$license_validity_1'
        WHERE pds_id='$pds_id'
          
          ");
      
      ?>
     <script>
        $( document ).ready(function() {
            new PNotify({
            title: 'Successfully Update',
            text: 'Close this tab',
            addclass: 'bg-primary border-primary',
            delay: 1000 ,
            after_close: function() {
        window.location.href = 'http://localhost/PDS%20Generator/pages/user/pds_section_4.php';
    }
            });
        });
     </script>
     <?php
    }
}



function pds_section5_we5_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM work_experience5_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
            <form method="POST">
               



                
                <tr>
                    <th colspan="2">INCLUSIVE DATES (mm/dd/yyyy)</th>
                    <th rowspan="2" style="width:200px;">POSITION TITLE (Write in full/Do not abbreviate)</th>
                    <th rowspan="2" style="width:400px;">DEPARTMENT / AGENCY / OFFICE / COMPANY (Write in full/Do not abbreviate)</th>
                    <th rowspan="2" style="width:100px;">MONTHLY SALARY</th>
                    <th rowspan="2" style="width:100px;">SALARY/ JOB/ PAY GRADE (if applicable)& STEP  (Format "00-0")/ INCREMENT</th>
                    <th rowspan="2" style="width:100px;">STATUS OF APPOINTMENT</th>
                    <th rowspan="2" style="width:50px;">GOV'T SERVICE (Y/ N)</th>
                </tr>
                <tr>
                    <th style="width:100px;">From</th>
                    <th style="width:100px;">To</th>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_1" value="<?= $row['inclusive_dates_from_1']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_1" value="<?= $row['inclusive_dates_to_1']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_1" value="<?= $row['inclusive_dates_position_title_1']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_1" value="<?= $row['inclusive_dates_department_1']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_1" value="<?= $row['inclusive_dates_monthly_1']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_1" value="<?= $row['inclusive_dates_salary_job_paygrade_1']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_1" value="<?= $row['inclusive_dates_status_of_appointment_1']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_1" value="<?= $row['inclusive_dates_government_service_1']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_2" value="<?= $row['inclusive_dates_from_2']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_2" value="<?= $row['inclusive_dates_to_2']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_2" value="<?= $row['inclusive_dates_position_title_2']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_2" value="<?= $row['inclusive_dates_department_2']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_2" value="<?= $row['inclusive_dates_monthly_2']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_2" value="<?= $row['inclusive_dates_salary_job_paygrade_2']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_2" value="<?= $row['inclusive_dates_status_of_appointment_2']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_2" value="<?= $row['inclusive_dates_government_service_2']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_3" value="<?= $row['inclusive_dates_from_3']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_3" value="<?= $row['inclusive_dates_to_3']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_3" value="<?= $row['inclusive_dates_position_title_3']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_3" value="<?= $row['inclusive_dates_department_3']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_3" value="<?= $row['inclusive_dates_monthly_3']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_3" value="<?= $row['inclusive_dates_salary_job_paygrade_3']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_3" value="<?= $row['inclusive_dates_status_of_appointment_3']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_3" value="<?= $row['inclusive_dates_government_service_3']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_4" value="<?= $row['inclusive_dates_from_4']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_4" value="<?= $row['inclusive_dates_to_4']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_4" value="<?= $row['inclusive_dates_position_title_4']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_4" value="<?= $row['inclusive_dates_department_4']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_4" value="<?= $row['inclusive_dates_monthly_4']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_4" value="<?= $row['inclusive_dates_salary_job_paygrade_4']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_4" value="<?= $row['inclusive_dates_status_of_appointment_4']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_4" value="<?= $row['inclusive_dates_government_service_4']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_5" value="<?= $row['inclusive_dates_from_5']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_5" value="<?= $row['inclusive_dates_to_5']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_5" value="<?= $row['inclusive_dates_position_title_5']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_5" value="<?= $row['inclusive_dates_department_5']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_5" value="<?= $row['inclusive_dates_monthly_5']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_5" value="<?= $row['inclusive_dates_salary_job_paygrade_5']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_5" value="<?= $row['inclusive_dates_status_of_appointment_5']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_5" value="<?= $row['inclusive_dates_government_service_5']?>"></td>
                </tr>
           
    <?php
    
}





function pds_section5_we10_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM work_experience10_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
      
               



                
     
                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_6" value="<?= $row['inclusive_dates_from_6']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_6" value="<?= $row['inclusive_dates_to_6']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_6" value="<?= $row['inclusive_dates_position_title_6']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_6" value="<?= $row['inclusive_dates_department_6']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_6" value="<?= $row['inclusive_dates_monthly_6']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_6" value="<?= $row['inclusive_dates_salary_job_paygrade_6']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_6" value="<?= $row['inclusive_dates_status_of_appointment_6']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_6" value="<?= $row['inclusive_dates_government_service_6']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_7" value="<?= $row['inclusive_dates_from_7']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_7" value="<?= $row['inclusive_dates_to_7']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_7" value="<?= $row['inclusive_dates_position_title_7']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_7" value="<?= $row['inclusive_dates_department_7']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_7" value="<?= $row['inclusive_dates_monthly_7']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_7" value="<?= $row['inclusive_dates_salary_job_paygrade_7']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_7" value="<?= $row['inclusive_dates_status_of_appointment_7']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_7" value="<?= $row['inclusive_dates_government_service_7']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_8" value="<?= $row['inclusive_dates_from_8']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_8" value="<?= $row['inclusive_dates_to_8']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_8" value="<?= $row['inclusive_dates_position_title_8']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_8" value="<?= $row['inclusive_dates_department_8']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_8" value="<?= $row['inclusive_dates_monthly_8']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_8" value="<?= $row['inclusive_dates_salary_job_paygrade_8']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_8" value="<?= $row['inclusive_dates_status_of_appointment_8']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_8" value="<?= $row['inclusive_dates_government_service_8']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_9" value="<?= $row['inclusive_dates_from_9']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_9" value="<?= $row['inclusive_dates_to_9']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_9" value="<?= $row['inclusive_dates_position_title_9']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_9" value="<?= $row['inclusive_dates_department_9']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_9" value="<?= $row['inclusive_dates_monthly_9']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_9" value="<?= $row['inclusive_dates_salary_job_paygrade_9']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_9" value="<?= $row['inclusive_dates_status_of_appointment_9']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_9" value="<?= $row['inclusive_dates_government_service_9']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_10" value="<?= $row['inclusive_dates_from_10']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_10" value="<?= $row['inclusive_dates_to_10']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_10" value="<?= $row['inclusive_dates_position_title_10']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_10" value="<?= $row['inclusive_dates_department_10']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_10" value="<?= $row['inclusive_dates_monthly_10']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_10" value="<?= $row['inclusive_dates_salary_job_paygrade_10']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_10" value="<?= $row['inclusive_dates_status_of_appointment_10']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_10" value="<?= $row['inclusive_dates_government_service_10']?>"></td>
                </tr>
           
    <?php
    
}



function pds_section5_we15_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM work_experience15_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
               



          

                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_11" value="<?= $row['inclusive_dates_from_11']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_11" value="<?= $row['inclusive_dates_to_11']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_11" value="<?= $row['inclusive_dates_position_title_11']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_11" value="<?= $row['inclusive_dates_department_11']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_11" value="<?= $row['inclusive_dates_monthly_11']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_11" value="<?= $row['inclusive_dates_salary_job_paygrade_11']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_11" value="<?= $row['inclusive_dates_status_of_appointment_11']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_11" value="<?= $row['inclusive_dates_government_service_11']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_12" value="<?= $row['inclusive_dates_from_12']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_12" value="<?= $row['inclusive_dates_to_12']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_12" value="<?= $row['inclusive_dates_position_title_12']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_12" value="<?= $row['inclusive_dates_department_12']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_12" value="<?= $row['inclusive_dates_monthly_12']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_12" value="<?= $row['inclusive_dates_salary_job_paygrade_12']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_12" value="<?= $row['inclusive_dates_status_of_appointment_12']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_12" value="<?= $row['inclusive_dates_government_service_12']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_13" value="<?= $row['inclusive_dates_from_13']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_13" value="<?= $row['inclusive_dates_to_13']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_13" value="<?= $row['inclusive_dates_position_title_13']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_13" value="<?= $row['inclusive_dates_department_13']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_13" value="<?= $row['inclusive_dates_monthly_13']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_13" value="<?= $row['inclusive_dates_salary_job_paygrade_13']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_13" value="<?= $row['inclusive_dates_status_of_appointment_13']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_13" value="<?= $row['inclusive_dates_government_service_13']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_14" value="<?= $row['inclusive_dates_from_14']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_14" value="<?= $row['inclusive_dates_to_14']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_14" value="<?= $row['inclusive_dates_position_title_14']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_14" value="<?= $row['inclusive_dates_department_14']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_14" value="<?= $row['inclusive_dates_monthly_14']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_14" value="<?= $row['inclusive_dates_salary_job_paygrade_14']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_14" value="<?= $row['inclusive_dates_status_of_appointment_14']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_14" value="<?= $row['inclusive_dates_government_service_14']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_15" value="<?= $row['inclusive_dates_from_15']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_15" value="<?= $row['inclusive_dates_to_15']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_15" value="<?= $row['inclusive_dates_position_title_15']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_15" value="<?= $row['inclusive_dates_department_15']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_15" value="<?= $row['inclusive_dates_monthly_15']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_15" value="<?= $row['inclusive_dates_salary_job_paygrade_15']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_15" value="<?= $row['inclusive_dates_status_of_appointment_15']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_15" value="<?= $row['inclusive_dates_government_service_15']?>"></td>
                </tr>
           
    <?php
    
}






function pds_section5_we20_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM work_experience20_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
               



          

                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_16" value="<?= $row['inclusive_dates_from_16']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_16" value="<?= $row['inclusive_dates_to_16']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_16" value="<?= $row['inclusive_dates_position_title_16']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_16" value="<?= $row['inclusive_dates_department_16']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_16" value="<?= $row['inclusive_dates_monthly_16']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_16" value="<?= $row['inclusive_dates_salary_job_paygrade_16']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_16" value="<?= $row['inclusive_dates_status_of_appointment_16']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_16" value="<?= $row['inclusive_dates_government_service_16']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_17" value="<?= $row['inclusive_dates_from_17']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_17" value="<?= $row['inclusive_dates_to_17']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_17" value="<?= $row['inclusive_dates_position_title_17']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_17" value="<?= $row['inclusive_dates_department_17']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_17" value="<?= $row['inclusive_dates_monthly_17']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_17" value="<?= $row['inclusive_dates_salary_job_paygrade_17']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_17" value="<?= $row['inclusive_dates_status_of_appointment_17']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_17" value="<?= $row['inclusive_dates_government_service_17']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_18" value="<?= $row['inclusive_dates_from_18']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_18" value="<?= $row['inclusive_dates_to_18']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_18" value="<?= $row['inclusive_dates_position_title_18']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_18" value="<?= $row['inclusive_dates_department_18']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_18" value="<?= $row['inclusive_dates_monthly_18']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_18" value="<?= $row['inclusive_dates_salary_job_paygrade_18']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_18" value="<?= $row['inclusive_dates_status_of_appointment_18']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_18" value="<?= $row['inclusive_dates_government_service_18']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_19" value="<?= $row['inclusive_dates_from_19']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_19" value="<?= $row['inclusive_dates_to_19']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_19" value="<?= $row['inclusive_dates_position_title_19']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_19" value="<?= $row['inclusive_dates_department_19']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_19" value="<?= $row['inclusive_dates_monthly_19']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_19" value="<?= $row['inclusive_dates_salary_job_paygrade_19']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_19" value="<?= $row['inclusive_dates_status_of_appointment_19']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_19" value="<?= $row['inclusive_dates_government_service_19']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_20" value="<?= $row['inclusive_dates_from_20']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_20" value="<?= $row['inclusive_dates_to_20']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_20" value="<?= $row['inclusive_dates_position_title_20']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_20" value="<?= $row['inclusive_dates_department_20']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_20" value="<?= $row['inclusive_dates_monthly_20']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_20" value="<?= $row['inclusive_dates_salary_job_paygrade_20']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_20" value="<?= $row['inclusive_dates_status_of_appointment_20']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_20" value="<?= $row['inclusive_dates_government_service_20']?>"></td>
                </tr>
           
    <?php
    
}





function pds_section5_we25_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM work_experience25_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
               
          

                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_21" value="<?= $row['inclusive_dates_from_21']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_21" value="<?= $row['inclusive_dates_to_21']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_21" value="<?= $row['inclusive_dates_position_title_21']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_21" value="<?= $row['inclusive_dates_department_21']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_21" value="<?= $row['inclusive_dates_monthly_21']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_21" value="<?= $row['inclusive_dates_salary_job_paygrade_21']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_21" value="<?= $row['inclusive_dates_status_of_appointment_21']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_21" value="<?= $row['inclusive_dates_government_service_21']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_22" value="<?= $row['inclusive_dates_from_22']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_22" value="<?= $row['inclusive_dates_to_22']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_22" value="<?= $row['inclusive_dates_position_title_22']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_22" value="<?= $row['inclusive_dates_department_22']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_22" value="<?= $row['inclusive_dates_monthly_22']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_22" value="<?= $row['inclusive_dates_salary_job_paygrade_22']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_22" value="<?= $row['inclusive_dates_status_of_appointment_22']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_22" value="<?= $row['inclusive_dates_government_service_22']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_23" value="<?= $row['inclusive_dates_from_23']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_23" value="<?= $row['inclusive_dates_to_23']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_23" value="<?= $row['inclusive_dates_position_title_23']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_23" value="<?= $row['inclusive_dates_department_23']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_23" value="<?= $row['inclusive_dates_monthly_23']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_23" value="<?= $row['inclusive_dates_salary_job_paygrade_23']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_23" value="<?= $row['inclusive_dates_status_of_appointment_23']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_23" value="<?= $row['inclusive_dates_government_service_23']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_24" value="<?= $row['inclusive_dates_from_24']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_24" value="<?= $row['inclusive_dates_to_24']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_24" value="<?= $row['inclusive_dates_position_title_24']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_24" value="<?= $row['inclusive_dates_department_24']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_24" value="<?= $row['inclusive_dates_monthly_24']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_24" value="<?= $row['inclusive_dates_salary_job_paygrade_24']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_24" value="<?= $row['inclusive_dates_status_of_appointment_24']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_24" value="<?= $row['inclusive_dates_government_service_24']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_25" value="<?= $row['inclusive_dates_from_25']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_25" value="<?= $row['inclusive_dates_to_25']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_25" value="<?= $row['inclusive_dates_position_title_25']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_25" value="<?= $row['inclusive_dates_department_25']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_25" value="<?= $row['inclusive_dates_monthly_25']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_25" value="<?= $row['inclusive_dates_salary_job_paygrade_25']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_25" value="<?= $row['inclusive_dates_status_of_appointment_25']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_25" value="<?= $row['inclusive_dates_government_service_25']?>"></td>
                </tr>
									
    <?php
    
}


function pds_section5_we30_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM work_experience30_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
               
          

                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_26" value="<?= $row['inclusive_dates_from_26']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_26" value="<?= $row['inclusive_dates_to_26']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_26" value="<?= $row['inclusive_dates_position_title_26']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_26" value="<?= $row['inclusive_dates_department_26']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_26" value="<?= $row['inclusive_dates_monthly_26']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_26" value="<?= $row['inclusive_dates_salary_job_paygrade_26']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_26" value="<?= $row['inclusive_dates_status_of_appointment_26']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_26" value="<?= $row['inclusive_dates_government_service_26']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_27" value="<?= $row['inclusive_dates_from_27']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_27" value="<?= $row['inclusive_dates_to_27']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_27" value="<?= $row['inclusive_dates_position_title_27']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_27" value="<?= $row['inclusive_dates_department_27']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_27" value="<?= $row['inclusive_dates_monthly_27']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_27" value="<?= $row['inclusive_dates_salary_job_paygrade_27']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_27" value="<?= $row['inclusive_dates_status_of_appointment_27']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_27" value="<?= $row['inclusive_dates_government_service_27']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="inclusive_dates_from_28" value="<?= $row['inclusive_dates_from_28']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_to_28" value="<?= $row['inclusive_dates_to_28']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_position_title_28" value="<?= $row['inclusive_dates_position_title_28']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_department_28" value="<?= $row['inclusive_dates_department_28']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_monthly_28" value="<?= $row['inclusive_dates_monthly_28']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_salary_job_paygrade_28" value="<?= $row['inclusive_dates_salary_job_paygrade_28']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_status_of_appointment_28" value="<?= $row['inclusive_dates_status_of_appointment_28']?>"></td>
                    <td><input type="text" class="form-control" name="inclusive_dates_government_service_28" value="<?= $row['inclusive_dates_government_service_28']?>"></td>
                </tr>

                </table>
                <br>
                    <div class="col-md-12 ">
                        <div class=" pull right">
                        <button type="submit" name="update_pds_section_5_button" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
              
    <?php
    if(isset($_POST['update_pds_section_5_button']))
    {
        $inclusive_dates_from_1  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_1']);
        $inclusive_dates_to_1  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_1']);
        $inclusive_dates_position_title_1  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_1']);
        $inclusive_dates_department_1  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_1']);
        $inclusive_dates_monthly_1  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_1']);
        $inclusive_dates_salary_job_paygrade_1  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_1']);
        $inclusive_dates_status_of_appointment_1  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_1']);
        $inclusive_dates_government_service_1  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_1']);



        $inclusive_dates_from_2  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_2']);
        $inclusive_dates_to_2  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_2']);
        $inclusive_dates_position_title_2  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_2']);
        $inclusive_dates_department_2  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_2']);
        $inclusive_dates_monthly_2  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_2']);
        $inclusive_dates_salary_job_paygrade_2  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_2']);
        $inclusive_dates_status_of_appointment_2  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_2']);
        $inclusive_dates_government_service_2  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_2']);



        $inclusive_dates_from_3  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_3']);
        $inclusive_dates_to_3  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_3']);
        $inclusive_dates_position_title_3  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_3']);
        $inclusive_dates_department_3  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_3']);
        $inclusive_dates_monthly_3  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_3']);
        $inclusive_dates_salary_job_paygrade_3  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_3']);
        $inclusive_dates_status_of_appointment_3  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_3']);
        $inclusive_dates_government_service_3  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_3']);


        $inclusive_dates_from_4  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_4']);
        $inclusive_dates_to_4  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_4']);
        $inclusive_dates_position_title_4  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_4']);
        $inclusive_dates_department_4  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_4']);
        $inclusive_dates_monthly_4  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_4']);
        $inclusive_dates_salary_job_paygrade_4  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_4']);
        $inclusive_dates_status_of_appointment_4  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_4']);
        $inclusive_dates_government_service_4  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_4']);


        $inclusive_dates_from_5  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_5']);
        $inclusive_dates_to_5  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_5']);
        $inclusive_dates_position_title_5  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_5']);
        $inclusive_dates_department_5  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_5']);
        $inclusive_dates_monthly_5  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_5']);
        $inclusive_dates_salary_job_paygrade_5  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_5']);
        $inclusive_dates_status_of_appointment_5  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_5']);
        $inclusive_dates_government_service_5  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_5']);

        $inclusive_dates_from_6  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_6']);
        $inclusive_dates_to_6  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_6']);
        $inclusive_dates_position_title_6  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_6']);
        $inclusive_dates_department_6  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_6']);
        $inclusive_dates_monthly_6  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_6']);
        $inclusive_dates_salary_job_paygrade_6  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_6']);
        $inclusive_dates_status_of_appointment_6  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_6']);
        $inclusive_dates_government_service_6  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_6']);


        $inclusive_dates_from_7  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_7']);
        $inclusive_dates_to_7  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_7']);
        $inclusive_dates_position_title_7  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_7']);
        $inclusive_dates_department_7  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_7']);
        $inclusive_dates_monthly_7  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_7']);
        $inclusive_dates_salary_job_paygrade_7  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_7']);
        $inclusive_dates_status_of_appointment_7  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_7']);
        $inclusive_dates_government_service_7  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_7']);

        $inclusive_dates_from_8  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_8']);
        $inclusive_dates_to_8  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_8']);
        $inclusive_dates_position_title_8  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_8']);
        $inclusive_dates_department_8  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_8']);
        $inclusive_dates_monthly_8  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_8']);
        $inclusive_dates_salary_job_paygrade_8  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_8']);
        $inclusive_dates_status_of_appointment_8  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_8']);
        $inclusive_dates_government_service_8  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_8']);


        $inclusive_dates_from_9  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_9']);
        $inclusive_dates_to_9  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_9']);
        $inclusive_dates_position_title_9  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_9']);
        $inclusive_dates_department_9  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_9']);
        $inclusive_dates_monthly_9  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_9']);
        $inclusive_dates_salary_job_paygrade_9  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_9']);
        $inclusive_dates_status_of_appointment_9  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_9']);
        $inclusive_dates_government_service_9  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_9']);

        $inclusive_dates_from_10  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_10']);
        $inclusive_dates_to_10  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_10']);
        $inclusive_dates_position_title_10  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_10']);
        $inclusive_dates_department_10  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_10']);
        $inclusive_dates_monthly_10  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_10']);
        $inclusive_dates_salary_job_paygrade_10  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_10']);
        $inclusive_dates_status_of_appointment_10  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_10']);
        $inclusive_dates_government_service_10  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_10']);

        $inclusive_dates_from_11  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_11']);
        $inclusive_dates_to_11  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_11']);
        $inclusive_dates_position_title_11  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_11']);
        $inclusive_dates_department_11  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_11']);
        $inclusive_dates_monthly_11  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_11']);
        $inclusive_dates_salary_job_paygrade_11  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_11']);
        $inclusive_dates_status_of_appointment_11  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_11']);
        $inclusive_dates_government_service_11  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_11']);

        $inclusive_dates_from_12  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_12']);
        $inclusive_dates_to_12  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_12']);
        $inclusive_dates_position_title_12  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_12']);
        $inclusive_dates_department_12  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_12']);
        $inclusive_dates_monthly_12  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_12']);
        $inclusive_dates_salary_job_paygrade_12  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_12']);
        $inclusive_dates_status_of_appointment_12  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_12']);
        $inclusive_dates_government_service_12  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_12']);



        $inclusive_dates_from_13  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_13']);
        $inclusive_dates_to_13  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_13']);
        $inclusive_dates_position_title_13  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_13']);
        $inclusive_dates_department_13  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_13']);
        $inclusive_dates_monthly_13  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_13']);
        $inclusive_dates_salary_job_paygrade_13  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_13']);
        $inclusive_dates_status_of_appointment_13  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_13']);
        $inclusive_dates_government_service_13  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_13']);


        $inclusive_dates_from_14  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_14']);
        $inclusive_dates_to_14  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_14']);
        $inclusive_dates_position_title_14  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_14']);
        $inclusive_dates_department_14  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_14']);
        $inclusive_dates_monthly_14  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_14']);
        $inclusive_dates_salary_job_paygrade_14  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_14']);
        $inclusive_dates_status_of_appointment_14  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_14']);
        $inclusive_dates_government_service_14  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_14']);



        $inclusive_dates_from_15  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_15']);
        $inclusive_dates_to_15  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_15']);
        $inclusive_dates_position_title_15  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_15']);
        $inclusive_dates_department_15  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_15']);
        $inclusive_dates_monthly_15  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_15']);
        $inclusive_dates_salary_job_paygrade_15  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_15']);
        $inclusive_dates_status_of_appointment_15  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_15']);
        $inclusive_dates_government_service_15  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_15']);


        $inclusive_dates_from_16  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_16']);
        $inclusive_dates_to_16  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_16']);
        $inclusive_dates_position_title_16  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_16']);
        $inclusive_dates_department_16  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_16']);
        $inclusive_dates_monthly_16  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_16']);
        $inclusive_dates_salary_job_paygrade_16  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_16']);
        $inclusive_dates_status_of_appointment_16  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_16']);
        $inclusive_dates_government_service_16  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_16']);


        $inclusive_dates_from_17  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_17']);
        $inclusive_dates_to_17  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_17']);
        $inclusive_dates_position_title_17  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_17']);
        $inclusive_dates_department_17  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_17']);
        $inclusive_dates_monthly_17  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_17']);
        $inclusive_dates_salary_job_paygrade_17  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_17']);
        $inclusive_dates_status_of_appointment_17  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_17']);
        $inclusive_dates_government_service_17  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_17']);


        $inclusive_dates_from_18  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_18']);
        $inclusive_dates_to_18  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_18']);
        $inclusive_dates_position_title_18  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_18']);
        $inclusive_dates_department_18  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_18']);
        $inclusive_dates_monthly_18  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_18']);
        $inclusive_dates_salary_job_paygrade_18  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_18']);
        $inclusive_dates_status_of_appointment_18  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_18']);
        $inclusive_dates_government_service_18  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_18']);



        $inclusive_dates_from_19  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_19']);
        $inclusive_dates_to_19  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_19']);
        $inclusive_dates_position_title_19  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_19']);
        $inclusive_dates_department_19  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_19']);
        $inclusive_dates_monthly_19  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_19']);
        $inclusive_dates_salary_job_paygrade_19  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_19']);
        $inclusive_dates_status_of_appointment_19  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_19']);
        $inclusive_dates_government_service_19  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_19']);


        $inclusive_dates_from_20  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_20']);
        $inclusive_dates_to_20  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_20']);
        $inclusive_dates_position_title_20  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_20']);
        $inclusive_dates_department_20  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_20']);
        $inclusive_dates_monthly_20  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_20']);
        $inclusive_dates_salary_job_paygrade_20  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_20']);
        $inclusive_dates_status_of_appointment_20  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_20']);
        $inclusive_dates_government_service_20  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_20']);



        $inclusive_dates_from_21  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_21']);
        $inclusive_dates_to_21  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_21']);
        $inclusive_dates_position_title_21  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_21']);
        $inclusive_dates_department_21  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_21']);
        $inclusive_dates_monthly_21  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_21']);
        $inclusive_dates_salary_job_paygrade_21  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_21']);
        $inclusive_dates_status_of_appointment_21  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_21']);
        $inclusive_dates_government_service_21  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_21']);


        $inclusive_dates_from_22  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_22']);
        $inclusive_dates_to_22  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_22']);
        $inclusive_dates_position_title_22  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_22']);
        $inclusive_dates_department_22  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_22']);
        $inclusive_dates_monthly_22  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_22']);
        $inclusive_dates_salary_job_paygrade_22  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_22']);
        $inclusive_dates_status_of_appointment_22  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_22']);
        $inclusive_dates_government_service_22  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_22']);



        $inclusive_dates_from_23  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_23']);
        $inclusive_dates_to_23  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_23']);
        $inclusive_dates_position_title_23  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_23']);
        $inclusive_dates_department_23  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_23']);
        $inclusive_dates_monthly_23  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_23']);
        $inclusive_dates_salary_job_paygrade_23  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_23']);
        $inclusive_dates_status_of_appointment_23  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_23']);
        $inclusive_dates_government_service_23  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_23']);


        $inclusive_dates_from_24  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_24']);
        $inclusive_dates_to_24  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_24']);
        $inclusive_dates_position_title_24  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_24']);
        $inclusive_dates_department_24  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_24']);
        $inclusive_dates_monthly_24  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_24']);
        $inclusive_dates_salary_job_paygrade_24  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_24']);
        $inclusive_dates_status_of_appointment_24  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_24']);
        $inclusive_dates_government_service_24  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_24']);


        $inclusive_dates_from_25  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_25']);
        $inclusive_dates_to_25  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_25']);
        $inclusive_dates_position_title_25  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_25']);
        $inclusive_dates_department_25  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_25']);
        $inclusive_dates_monthly_25  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_25']);
        $inclusive_dates_salary_job_paygrade_25  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_25']);
        $inclusive_dates_status_of_appointment_25  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_25']);
        $inclusive_dates_government_service_25  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_25']);


        $inclusive_dates_from_26  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_26']);
        $inclusive_dates_to_26  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_26']);
        $inclusive_dates_position_title_26  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_26']);
        $inclusive_dates_department_26  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_26']);
        $inclusive_dates_monthly_26  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_26']);
        $inclusive_dates_salary_job_paygrade_26  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_26']);
        $inclusive_dates_status_of_appointment_26  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_26']);
        $inclusive_dates_government_service_26  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_26']);


        $inclusive_dates_from_27  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_27']);
        $inclusive_dates_to_27  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_27']);
        $inclusive_dates_position_title_27  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_27']);
        $inclusive_dates_department_27  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_27']);
        $inclusive_dates_monthly_27  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_27']);
        $inclusive_dates_salary_job_paygrade_27  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_27']);
        $inclusive_dates_status_of_appointment_27  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_27']);
        $inclusive_dates_government_service_27  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_27']);



        $inclusive_dates_from_28  = mysqli_real_escape_string($con, $_POST['inclusive_dates_from_28']);
        $inclusive_dates_to_28  = mysqli_real_escape_string($con, $_POST['inclusive_dates_to_28']);
        $inclusive_dates_position_title_28  = mysqli_real_escape_string($con, $_POST['inclusive_dates_position_title_28']);
        $inclusive_dates_department_28  = mysqli_real_escape_string($con, $_POST['inclusive_dates_department_28']);
        $inclusive_dates_monthly_28  = mysqli_real_escape_string($con, $_POST['inclusive_dates_monthly_28']);
        $inclusive_dates_salary_job_paygrade_28  = mysqli_real_escape_string($con, $_POST['inclusive_dates_salary_job_paygrade_28']);
        $inclusive_dates_status_of_appointment_28  = mysqli_real_escape_string($con, $_POST['inclusive_dates_status_of_appointment_28']);
        $inclusive_dates_government_service_28  = mysqli_real_escape_string($con, $_POST['inclusive_dates_government_service_28']);
       
        $pds_id = $_SESSION['id'];






        $sql_we5 = mysqli_query($con, "UPDATE work_experience5_tbl SET 
        inclusive_dates_from_1='$inclusive_dates_from_1',
        inclusive_dates_to_1='$inclusive_dates_to_1',
        inclusive_dates_position_title_1='$inclusive_dates_position_title_1',
        inclusive_dates_department_1='$inclusive_dates_department_1',
        inclusive_dates_monthly_1='$inclusive_dates_monthly_1',
        inclusive_dates_salary_job_paygrade_1='$inclusive_dates_salary_job_paygrade_1',
        inclusive_dates_status_of_appointment_1='$inclusive_dates_status_of_appointment_1',
        inclusive_dates_government_service_1='$inclusive_dates_government_service_1',
        inclusive_dates_from_2='$inclusive_dates_from_2',
        inclusive_dates_to_2='$inclusive_dates_to_2',
        inclusive_dates_position_title_2='$inclusive_dates_position_title_2',
        inclusive_dates_department_2='$inclusive_dates_department_2',
        inclusive_dates_monthly_2='$inclusive_dates_monthly_2',
        inclusive_dates_salary_job_paygrade_2='$inclusive_dates_salary_job_paygrade_2',
        inclusive_dates_status_of_appointment_2='$inclusive_dates_status_of_appointment_2',
        inclusive_dates_government_service_2='$inclusive_dates_government_service_2',
        inclusive_dates_from_3='$inclusive_dates_from_3',
        inclusive_dates_to_3='$inclusive_dates_to_3',
        inclusive_dates_position_title_3='$inclusive_dates_position_title_3',
        inclusive_dates_department_3='$inclusive_dates_department_3',
        inclusive_dates_monthly_3='$inclusive_dates_monthly_3',
        inclusive_dates_salary_job_paygrade_3='$inclusive_dates_salary_job_paygrade_3',
        inclusive_dates_status_of_appointment_3='$inclusive_dates_status_of_appointment_3',
        inclusive_dates_government_service_3='$inclusive_dates_government_service_3',
        inclusive_dates_from_4='$inclusive_dates_from_4',
        inclusive_dates_to_4='$inclusive_dates_to_4',
        inclusive_dates_position_title_4='$inclusive_dates_position_title_4',
        inclusive_dates_department_4='$inclusive_dates_department_4',
        inclusive_dates_monthly_4='$inclusive_dates_monthly_4',
        inclusive_dates_salary_job_paygrade_4='$inclusive_dates_salary_job_paygrade_4',
        inclusive_dates_status_of_appointment_4='$inclusive_dates_status_of_appointment_4',
        inclusive_dates_government_service_4='$inclusive_dates_government_service_4',
        inclusive_dates_from_5='$inclusive_dates_from_5',
        inclusive_dates_to_5='$inclusive_dates_to_5',
        inclusive_dates_position_title_5='$inclusive_dates_position_title_5',
        inclusive_dates_department_5='$inclusive_dates_department_5',
        inclusive_dates_monthly_5='$inclusive_dates_monthly_5',
        inclusive_dates_salary_job_paygrade_5='$inclusive_dates_salary_job_paygrade_5',
        inclusive_dates_status_of_appointment_5='$inclusive_dates_status_of_appointment_5',
        inclusive_dates_government_service_5='$inclusive_dates_government_service_5' 
        WHERE pds_id='$pds_id'
          ");


        $sql_we10 = mysqli_query($con, "UPDATE work_experience10_tbl SET 
        inclusive_dates_from_6='$inclusive_dates_from_6',
        inclusive_dates_to_6='$inclusive_dates_to_6',
        inclusive_dates_position_title_6='$inclusive_dates_position_title_6',
        inclusive_dates_department_6='$inclusive_dates_department_6',
        inclusive_dates_monthly_6='$inclusive_dates_monthly_6',
        inclusive_dates_salary_job_paygrade_6='$inclusive_dates_salary_job_paygrade_6',
        inclusive_dates_status_of_appointment_6='$inclusive_dates_status_of_appointment_6',
        inclusive_dates_government_service_6='$inclusive_dates_government_service_6',
        inclusive_dates_from_7='$inclusive_dates_from_7',
        inclusive_dates_to_7='$inclusive_dates_to_7',
        inclusive_dates_position_title_7='$inclusive_dates_position_title_7',
        inclusive_dates_department_7='$inclusive_dates_department_7',
        inclusive_dates_monthly_7='$inclusive_dates_monthly_7',
        inclusive_dates_salary_job_paygrade_7='$inclusive_dates_salary_job_paygrade_7',
        inclusive_dates_status_of_appointment_7='$inclusive_dates_status_of_appointment_7',
        inclusive_dates_government_service_7='$inclusive_dates_government_service_7',
        inclusive_dates_from_8='$inclusive_dates_from_8',
        inclusive_dates_to_8='$inclusive_dates_to_8',
        inclusive_dates_position_title_8='$inclusive_dates_position_title_8',
        inclusive_dates_department_8='$inclusive_dates_department_8',
        inclusive_dates_monthly_8='$inclusive_dates_monthly_8',
        inclusive_dates_salary_job_paygrade_8='$inclusive_dates_salary_job_paygrade_8',
        inclusive_dates_status_of_appointment_8='$inclusive_dates_status_of_appointment_8',
        inclusive_dates_government_service_8='$inclusive_dates_government_service_8',
        inclusive_dates_from_9='$inclusive_dates_from_9',
        inclusive_dates_to_9='$inclusive_dates_to_9',
        inclusive_dates_position_title_9='$inclusive_dates_position_title_9',
        inclusive_dates_department_9='$inclusive_dates_department_9',
        inclusive_dates_monthly_9='$inclusive_dates_monthly_9',
        inclusive_dates_salary_job_paygrade_9='$inclusive_dates_salary_job_paygrade_9',
        inclusive_dates_status_of_appointment_9='$inclusive_dates_status_of_appointment_9',
        inclusive_dates_government_service_9='$inclusive_dates_government_service_9',
        inclusive_dates_from_10='$inclusive_dates_from_10',
        inclusive_dates_to_10='$inclusive_dates_to_10',
        inclusive_dates_position_title_10='$inclusive_dates_position_title_10',
        inclusive_dates_department_10='$inclusive_dates_department_10',
        inclusive_dates_monthly_10='$inclusive_dates_monthly_10',
        inclusive_dates_salary_job_paygrade_10='$inclusive_dates_salary_job_paygrade_10',
        inclusive_dates_status_of_appointment_10='$inclusive_dates_status_of_appointment_10',
        inclusive_dates_government_service_10='$inclusive_dates_government_service_10' 
        WHERE pds_id='$pds_id'
        ");


        $sql_we15 = mysqli_query($con, "UPDATE work_experience15_tbl SET 
        inclusive_dates_from_11='$inclusive_dates_from_11',
        inclusive_dates_to_11='$inclusive_dates_to_11',
        inclusive_dates_position_title_11='$inclusive_dates_position_title_11',
        inclusive_dates_department_11='$inclusive_dates_department_11',
        inclusive_dates_monthly_11='$inclusive_dates_monthly_11',
        inclusive_dates_salary_job_paygrade_11='$inclusive_dates_salary_job_paygrade_11',
        inclusive_dates_status_of_appointment_11='$inclusive_dates_status_of_appointment_11',
        inclusive_dates_government_service_11='$inclusive_dates_government_service_11',
        inclusive_dates_from_12='$inclusive_dates_from_12',
        inclusive_dates_to_12='$inclusive_dates_to_12',
        inclusive_dates_position_title_12='$inclusive_dates_position_title_12',
        inclusive_dates_department_12='$inclusive_dates_department_12',
        inclusive_dates_monthly_12='$inclusive_dates_monthly_12',
        inclusive_dates_salary_job_paygrade_12='$inclusive_dates_salary_job_paygrade_12',
        inclusive_dates_status_of_appointment_12='$inclusive_dates_status_of_appointment_12',
        inclusive_dates_government_service_12='$inclusive_dates_government_service_12',
        inclusive_dates_from_13='$inclusive_dates_from_13',
        inclusive_dates_to_13='$inclusive_dates_to_13',
        inclusive_dates_position_title_13='$inclusive_dates_position_title_13',
        inclusive_dates_department_13='$inclusive_dates_department_13',
        inclusive_dates_monthly_13='$inclusive_dates_monthly_13',
        inclusive_dates_salary_job_paygrade_13='$inclusive_dates_salary_job_paygrade_13',
        inclusive_dates_status_of_appointment_13='$inclusive_dates_status_of_appointment_13',
        inclusive_dates_government_service_13='$inclusive_dates_government_service_13',
        inclusive_dates_from_14='$inclusive_dates_from_14',
        inclusive_dates_to_14='$inclusive_dates_to_14',
        inclusive_dates_position_title_14='$inclusive_dates_position_title_14',
        inclusive_dates_department_14='$inclusive_dates_department_14',
        inclusive_dates_monthly_14='$inclusive_dates_monthly_14',
        inclusive_dates_salary_job_paygrade_14='$inclusive_dates_salary_job_paygrade_14',
        inclusive_dates_status_of_appointment_14='$inclusive_dates_status_of_appointment_14',
        inclusive_dates_government_service_14='$inclusive_dates_government_service_14',
        inclusive_dates_from_15='$inclusive_dates_from_15',
        inclusive_dates_to_15='$inclusive_dates_to_15',
        inclusive_dates_position_title_15='$inclusive_dates_position_title_15',
        inclusive_dates_department_15='$inclusive_dates_department_15',
        inclusive_dates_monthly_15='$inclusive_dates_monthly_15',
        inclusive_dates_salary_job_paygrade_15='$inclusive_dates_salary_job_paygrade_15',
        inclusive_dates_status_of_appointment_15='$inclusive_dates_status_of_appointment_15',
        inclusive_dates_government_service_15='$inclusive_dates_government_service_15' 
        WHERE pds_id='$pds_id'
        ");

        $sql_we20 = mysqli_query($con, "UPDATE work_experience20_tbl SET 
        inclusive_dates_from_16='$inclusive_dates_from_16',
        inclusive_dates_to_16='$inclusive_dates_to_16',
        inclusive_dates_position_title_16='$inclusive_dates_position_title_16',
        inclusive_dates_department_16='$inclusive_dates_department_16',
        inclusive_dates_monthly_16='$inclusive_dates_monthly_16',
        inclusive_dates_salary_job_paygrade_16='$inclusive_dates_salary_job_paygrade_16',
        inclusive_dates_status_of_appointment_16='$inclusive_dates_status_of_appointment_16',
        inclusive_dates_government_service_16='$inclusive_dates_government_service_16',
        inclusive_dates_from_17='$inclusive_dates_from_17',
        inclusive_dates_to_17='$inclusive_dates_to_17',
        inclusive_dates_position_title_17='$inclusive_dates_position_title_17',
        inclusive_dates_department_17='$inclusive_dates_department_17',
        inclusive_dates_monthly_17='$inclusive_dates_monthly_17',
        inclusive_dates_salary_job_paygrade_17='$inclusive_dates_salary_job_paygrade_17',
        inclusive_dates_status_of_appointment_17='$inclusive_dates_status_of_appointment_17',
        inclusive_dates_government_service_17='$inclusive_dates_government_service_17',
        inclusive_dates_from_18='$inclusive_dates_from_18',
        inclusive_dates_to_18='$inclusive_dates_to_18',
        inclusive_dates_position_title_18='$inclusive_dates_position_title_18',
        inclusive_dates_department_18='$inclusive_dates_department_18',
        inclusive_dates_monthly_18='$inclusive_dates_monthly_18',
        inclusive_dates_salary_job_paygrade_18='$inclusive_dates_salary_job_paygrade_18',
        inclusive_dates_status_of_appointment_18='$inclusive_dates_status_of_appointment_18',
        inclusive_dates_government_service_18='$inclusive_dates_government_service_18',
        inclusive_dates_from_19='$inclusive_dates_from_19',
        inclusive_dates_to_19='$inclusive_dates_to_19',
        inclusive_dates_position_title_19='$inclusive_dates_position_title_19',
        inclusive_dates_department_19='$inclusive_dates_department_19',
        inclusive_dates_monthly_19='$inclusive_dates_monthly_19',
        inclusive_dates_salary_job_paygrade_19='$inclusive_dates_salary_job_paygrade_19',
        inclusive_dates_status_of_appointment_19='$inclusive_dates_status_of_appointment_19',
        inclusive_dates_government_service_19='$inclusive_dates_government_service_19',
        inclusive_dates_from_20='$inclusive_dates_from_20',
        inclusive_dates_to_20='$inclusive_dates_to_20',
        inclusive_dates_position_title_20='$inclusive_dates_position_title_20',
        inclusive_dates_department_20='$inclusive_dates_department_20',
        inclusive_dates_monthly_20='$inclusive_dates_monthly_20',
        inclusive_dates_salary_job_paygrade_20='$inclusive_dates_salary_job_paygrade_20',
        inclusive_dates_status_of_appointment_20='$inclusive_dates_status_of_appointment_20',
        inclusive_dates_government_service_20='$inclusive_dates_government_service_20' 
        WHERE pds_id='$pds_id'
        ");

        $sql_we25 = mysqli_query($con, "UPDATE work_experience25_tbl SET 
        inclusive_dates_from_21='$inclusive_dates_from_21',
        inclusive_dates_to_21='$inclusive_dates_to_21',
        inclusive_dates_position_title_21='$inclusive_dates_position_title_21',
        inclusive_dates_department_21='$inclusive_dates_department_21',
        inclusive_dates_monthly_21='$inclusive_dates_monthly_21',
        inclusive_dates_salary_job_paygrade_21='$inclusive_dates_salary_job_paygrade_21',
        inclusive_dates_status_of_appointment_21='$inclusive_dates_status_of_appointment_21',
        inclusive_dates_government_service_21='$inclusive_dates_government_service_21',
        inclusive_dates_from_22='$inclusive_dates_from_22',
        inclusive_dates_to_22='$inclusive_dates_to_22',
        inclusive_dates_position_title_22='$inclusive_dates_position_title_22',
        inclusive_dates_department_22='$inclusive_dates_department_22',
        inclusive_dates_monthly_22='$inclusive_dates_monthly_22',
        inclusive_dates_salary_job_paygrade_22='$inclusive_dates_salary_job_paygrade_22',
        inclusive_dates_status_of_appointment_22='$inclusive_dates_status_of_appointment_22',
        inclusive_dates_government_service_22='$inclusive_dates_government_service_22',
        inclusive_dates_from_23='$inclusive_dates_from_23',
        inclusive_dates_to_23='$inclusive_dates_to_23',
        inclusive_dates_position_title_23='$inclusive_dates_position_title_23',
        inclusive_dates_department_23='$inclusive_dates_department_23',
        inclusive_dates_monthly_23='$inclusive_dates_monthly_23',
        inclusive_dates_salary_job_paygrade_23='$inclusive_dates_salary_job_paygrade_23',
        inclusive_dates_status_of_appointment_23='$inclusive_dates_status_of_appointment_23',
        inclusive_dates_government_service_23='$inclusive_dates_government_service_23',
        inclusive_dates_from_24='$inclusive_dates_from_24',
        inclusive_dates_to_24='$inclusive_dates_to_24',
        inclusive_dates_position_title_24='$inclusive_dates_position_title_24',
        inclusive_dates_department_24='$inclusive_dates_department_24',
        inclusive_dates_monthly_24='$inclusive_dates_monthly_24',
        inclusive_dates_salary_job_paygrade_24='$inclusive_dates_salary_job_paygrade_24',
        inclusive_dates_status_of_appointment_24='$inclusive_dates_status_of_appointment_24',
        inclusive_dates_government_service_24='$inclusive_dates_government_service_24',
        inclusive_dates_from_25='$inclusive_dates_from_25',
        inclusive_dates_to_25='$inclusive_dates_to_25',
        inclusive_dates_position_title_25='$inclusive_dates_position_title_25',
        inclusive_dates_department_25='$inclusive_dates_department_25',
        inclusive_dates_monthly_25='$inclusive_dates_monthly_25',
        inclusive_dates_salary_job_paygrade_25='$inclusive_dates_salary_job_paygrade_25',
        inclusive_dates_status_of_appointment_25='$inclusive_dates_status_of_appointment_25',
        inclusive_dates_government_service_25='$inclusive_dates_government_service_25' 
        WHERE pds_id='$pds_id'
        ");


        $sql_we30 = mysqli_query($con, "UPDATE work_experience30_tbl SET 
        inclusive_dates_from_26='$inclusive_dates_from_26',
        inclusive_dates_to_26='$inclusive_dates_to_26',
        inclusive_dates_position_title_26='$inclusive_dates_position_title_26',
        inclusive_dates_department_26='$inclusive_dates_department_26',
        inclusive_dates_monthly_26='$inclusive_dates_monthly_26',
        inclusive_dates_salary_job_paygrade_26='$inclusive_dates_salary_job_paygrade_26',
        inclusive_dates_status_of_appointment_26='$inclusive_dates_status_of_appointment_26',
        inclusive_dates_government_service_26='$inclusive_dates_government_service_26',
        inclusive_dates_from_27='$inclusive_dates_from_27',
        inclusive_dates_to_27='$inclusive_dates_to_27',
        inclusive_dates_position_title_27='$inclusive_dates_position_title_27',
        inclusive_dates_department_27='$inclusive_dates_department_27',
        inclusive_dates_monthly_27='$inclusive_dates_monthly_27',
        inclusive_dates_salary_job_paygrade_27='$inclusive_dates_salary_job_paygrade_27',
        inclusive_dates_status_of_appointment_27='$inclusive_dates_status_of_appointment_27',
        inclusive_dates_government_service_27='$inclusive_dates_government_service_27',
        inclusive_dates_from_28='$inclusive_dates_from_28',
        inclusive_dates_to_28='$inclusive_dates_to_28',
        inclusive_dates_position_title_28='$inclusive_dates_position_title_28',
        inclusive_dates_department_28='$inclusive_dates_department_28',
        inclusive_dates_monthly_28='$inclusive_dates_monthly_28',
        inclusive_dates_salary_job_paygrade_28='$inclusive_dates_salary_job_paygrade_28',
        inclusive_dates_status_of_appointment_28='$inclusive_dates_status_of_appointment_28',
        inclusive_dates_government_service_28='$inclusive_dates_government_service_28'
        WHERE pds_id='$pds_id'
        ");

      ?>
        <script>
            alert('ok');
        </script>


     <?php

    }
}





function pds_section6_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM voluntary_work_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
            <form method="POST">
                
                <tr>
                    <th rowspan="2" style="width:200px;">NAME & ADDRESS OF ORGANIZATION (Write in full)</th>
                    <th colspan="2">INCLUSIVE DATES (mm/dd/yyyy)</th>
                    <th rowspan="2" style="width:400px;">NUMBER OF HOURS</th>
                    <th rowspan="2" style="width:100px;">POSITION / NATURE OF WORK</th>
                </tr>
                <tr>
                    <th style="width:100px;">From</th>
                    <th style="width:100px;">To</th>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="voluntary_work_name_address_1" value="<?= $row['voluntary_work_name_address_1']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_from_1" value="<?= $row['voluntary_work_from_1']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_to_1" value="<?= $row['voluntary_work_to_1']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_hours_1" value="<?= $row['voluntary_work_hours_1']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_position_1" value="<?= $row['voluntary_work_position_1']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="voluntary_work_name_address_2" value="<?= $row['voluntary_work_name_address_2']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_from_2" value="<?= $row['voluntary_work_from_2']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_to_2" value="<?= $row['voluntary_work_to_2']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_hours_2" value="<?= $row['voluntary_work_hours_2']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_position_2" value="<?= $row['voluntary_work_position_2']?>"></td>
                </tr>




                <tr>
                    <td><input type="text" class="form-control" name="voluntary_work_name_address_3" value="<?= $row['voluntary_work_name_address_3']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_from_3" value="<?= $row['voluntary_work_from_3']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_to_3" value="<?= $row['voluntary_work_to_3']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_hours_3" value="<?= $row['voluntary_work_hours_3']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_position_3" value="<?= $row['voluntary_work_position_3']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="voluntary_work_name_address_4" value="<?= $row['voluntary_work_name_address_4']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_from_4" value="<?= $row['voluntary_work_from_4']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_to_4" value="<?= $row['voluntary_work_to_4']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_hours_4" value="<?= $row['voluntary_work_hours_4']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_position_4" value="<?= $row['voluntary_work_position_4']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="voluntary_work_name_address_5" value="<?= $row['voluntary_work_name_address_5']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_from_5" value="<?= $row['voluntary_work_from_5']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_to_5" value="<?= $row['voluntary_work_to_5']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_hours_5" value="<?= $row['voluntary_work_hours_5']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_position_5" value="<?= $row['voluntary_work_position_5']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="voluntary_work_name_address_6" value="<?= $row['voluntary_work_name_address_6']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_from_6" value="<?= $row['voluntary_work_from_6']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_to_6" value="<?= $row['voluntary_work_to_6']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_hours_6" value="<?= $row['voluntary_work_hours_6']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_position_6" value="<?= $row['voluntary_work_position_6']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="voluntary_work_name_address_7" value="<?= $row['voluntary_work_name_address_7']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_from_7" value="<?= $row['voluntary_work_from_7']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_to_7" value="<?= $row['voluntary_work_to_7']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_hours_7" value="<?= $row['voluntary_work_hours_7']?>"></td>
                    <td><input type="text" class="form-control" name="voluntary_work_position_7" value="<?= $row['voluntary_work_position_7']?>"></td>
                </tr>

</table>
                <br>
                    <div class="col-md-12 ">
                        <div class=" pull right">
                        <button type="submit" name="update_pds_section_6_button" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>

                    </div>	
											</div>		
        </form>
               
    <?php

        if(isset($_POST['update_pds_section_6_button']))
        {

            $pds_id = $_SESSION['id'];
            $voluntary_work_name_address_1  = mysqli_real_escape_string($con, $_POST['voluntary_work_name_address_1']);
            $voluntary_work_from_1  = mysqli_real_escape_string($con, $_POST['voluntary_work_from_1']);
            $voluntary_work_to_1  = mysqli_real_escape_string($con, $_POST['voluntary_work_to_1']);
            $voluntary_work_hours_1  = mysqli_real_escape_string($con, $_POST['voluntary_work_hours_1']);
            $voluntary_work_position_1  = mysqli_real_escape_string($con, $_POST['voluntary_work_position_1']);

            $voluntary_work_name_address_2  = mysqli_real_escape_string($con, $_POST['voluntary_work_name_address_2']);
            $voluntary_work_from_2  = mysqli_real_escape_string($con, $_POST['voluntary_work_from_2']);
            $voluntary_work_to_2  = mysqli_real_escape_string($con, $_POST['voluntary_work_to_2']);
            $voluntary_work_hours_2  = mysqli_real_escape_string($con, $_POST['voluntary_work_hours_2']);
            $voluntary_work_position_2  = mysqli_real_escape_string($con, $_POST['voluntary_work_position_2']);

            $voluntary_work_name_address_3  = mysqli_real_escape_string($con, $_POST['voluntary_work_name_address_3']);
            $voluntary_work_from_3  = mysqli_real_escape_string($con, $_POST['voluntary_work_from_3']);
            $voluntary_work_to_3  = mysqli_real_escape_string($con, $_POST['voluntary_work_to_3']);
            $voluntary_work_hours_3  = mysqli_real_escape_string($con, $_POST['voluntary_work_hours_3']);
            $voluntary_work_position_3  = mysqli_real_escape_string($con, $_POST['voluntary_work_position_3']);


            $voluntary_work_name_address_4  = mysqli_real_escape_string($con, $_POST['voluntary_work_name_address_4']);
            $voluntary_work_from_4  = mysqli_real_escape_string($con, $_POST['voluntary_work_from_4']);
            $voluntary_work_to_4  = mysqli_real_escape_string($con, $_POST['voluntary_work_to_4']);
            $voluntary_work_hours_4  = mysqli_real_escape_string($con, $_POST['voluntary_work_hours_4']);
            $voluntary_work_position_4  = mysqli_real_escape_string($con, $_POST['voluntary_work_position_4']);

            $voluntary_work_name_address_5  = mysqli_real_escape_string($con, $_POST['voluntary_work_name_address_5']);
            $voluntary_work_from_5  = mysqli_real_escape_string($con, $_POST['voluntary_work_from_5']);
            $voluntary_work_to_5  = mysqli_real_escape_string($con, $_POST['voluntary_work_to_5']);
            $voluntary_work_hours_5  = mysqli_real_escape_string($con, $_POST['voluntary_work_hours_5']);
            $voluntary_work_position_5  = mysqli_real_escape_string($con, $_POST['voluntary_work_position_5']);


            $voluntary_work_name_address_6  = mysqli_real_escape_string($con, $_POST['voluntary_work_name_address_6']);
            $voluntary_work_from_6  = mysqli_real_escape_string($con, $_POST['voluntary_work_from_6']);
            $voluntary_work_to_6  = mysqli_real_escape_string($con, $_POST['voluntary_work_to_6']);
            $voluntary_work_hours_6  = mysqli_real_escape_string($con, $_POST['voluntary_work_hours_6']);
            $voluntary_work_position_6  = mysqli_real_escape_string($con, $_POST['voluntary_work_position_6']);

            $voluntary_work_name_address_7  = mysqli_real_escape_string($con, $_POST['voluntary_work_name_address_7']);
            $voluntary_work_from_7  = mysqli_real_escape_string($con, $_POST['voluntary_work_from_7']);
            $voluntary_work_to_7  = mysqli_real_escape_string($con, $_POST['voluntary_work_to_7']);
            $voluntary_work_hours_7  = mysqli_real_escape_string($con, $_POST['voluntary_work_hours_7']);
            $voluntary_work_position_7  = mysqli_real_escape_string($con, $_POST['voluntary_work_position_7']);





            $sql = mysqli_query($con, "UPDATE voluntary_work_tbl SET  voluntary_work_name_address_1='$voluntary_work_name_address_1',
            voluntary_work_from_1='$voluntary_work_from_1',
            voluntary_work_to_1='$voluntary_work_to_1',
            voluntary_work_hours_1='$voluntary_work_hours_1',
            voluntary_work_position_1='$voluntary_work_position_1',
            voluntary_work_name_address_2='$voluntary_work_name_address_2',
            voluntary_work_from_2='$voluntary_work_from_2',
            voluntary_work_to_2='$voluntary_work_to_2',
            voluntary_work_hours_2='$voluntary_work_hours_2',
            voluntary_work_position_2='$voluntary_work_position_2',
            voluntary_work_name_address_3='$voluntary_work_name_address_3',
            voluntary_work_from_3='$voluntary_work_from_3',
            voluntary_work_to_3='$voluntary_work_to_3',
            voluntary_work_hours_3='$voluntary_work_hours_3',
            voluntary_work_position_3='$voluntary_work_position_3',
            voluntary_work_name_address_4='$voluntary_work_name_address_4',
            voluntary_work_from_4='$voluntary_work_from_4',
            voluntary_work_to_4='$voluntary_work_to_4',
            voluntary_work_hours_4='$voluntary_work_hours_4',
            voluntary_work_position_4='$voluntary_work_position_4',
            voluntary_work_name_address_5='$voluntary_work_name_address_5',
            voluntary_work_from_5='$voluntary_work_from_5',
            voluntary_work_to_5='$voluntary_work_to_5',
            voluntary_work_hours_5='$voluntary_work_hours_5',
            voluntary_work_position_5='$voluntary_work_position_5',
            voluntary_work_name_address_6='$voluntary_work_name_address_6',
            voluntary_work_from_6='$voluntary_work_from_6',
            voluntary_work_to_6='$voluntary_work_to_6',
            voluntary_work_hours_6='$voluntary_work_hours_6',
            voluntary_work_position_6='$voluntary_work_position_6',
            voluntary_work_name_address_7='$voluntary_work_name_address_7',
            voluntary_work_from_7='$voluntary_work_from_7',
            voluntary_work_to_7='$voluntary_work_to_7',
            voluntary_work_hours_7='$voluntary_work_hours_7',
            voluntary_work_position_7='$voluntary_work_position_7'
            WHERE pds_id='$pds_id'
            ");

                ?>
                <script>
                    alert('ok');
                </script>


                <?php
        }
    
}




function pds_section7_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM learning_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
            <form method="POST">
                
                <tr>
                    <th rowspan="2" style="width:200px;">TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS (Write in full)</th>
                    <th colspan="2">INCLUSIVE DATES (mm/dd/yyyy)</th>
                    <th rowspan="2" style="width:400px;">NUMBER OF HOURS</th>
                    <th rowspan="2" style="width:100px;">Type of LD( Managerial/ Supervisory/ Technical/etc) </th>
                    <th rowspan="2" style="width:100px;"> CONDUCTED/ SPONSORED BY (Write in full)</th>
                </tr>
                <tr>
                    <th style="width:100px;">From</th>
                    <th style="width:100px;">To</th>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_1" value="<?= $row['learning_development_title_1']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_1" value="<?= $row['learning_development_from_1']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_1" value="<?= $row['learning_development_to_1']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_1" value="<?= $row['learning_development_number_of_hours_1']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_1" value="<?= $row['learning_development_type_of_ld_1']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_1" value="<?= $row['learning_development_conducted_by_1']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_2" value="<?= $row['learning_development_title_2']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_2" value="<?= $row['learning_development_from_2']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_2" value="<?= $row['learning_development_to_2']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_2" value="<?= $row['learning_development_number_of_hours_2']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_2" value="<?= $row['learning_development_type_of_ld_2']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_2" value="<?= $row['learning_development_conducted_by_2']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_3" value="<?= $row['learning_development_title_3']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_3" value="<?= $row['learning_development_from_3']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_3" value="<?= $row['learning_development_to_3']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_3" value="<?= $row['learning_development_number_of_hours_3']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_3" value="<?= $row['learning_development_type_of_ld_3']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_3" value="<?= $row['learning_development_conducted_by_3']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_4" value="<?= $row['learning_development_title_4']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_4" value="<?= $row['learning_development_from_4']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_4" value="<?= $row['learning_development_to_4']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_4" value="<?= $row['learning_development_number_of_hours_4']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_4" value="<?= $row['learning_development_type_of_ld_4']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_4" value="<?= $row['learning_development_conducted_by_4']?>"></td>
                </tr>


                   <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_5" value="<?= $row['learning_development_title_5']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_5" value="<?= $row['learning_development_from_5']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_5" value="<?= $row['learning_development_to_5']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_5" value="<?= $row['learning_development_number_of_hours_5']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_5" value="<?= $row['learning_development_type_of_ld_5']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_5" value="<?= $row['learning_development_conducted_by_5']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_6" value="<?= $row['learning_development_title_6']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_6" value="<?= $row['learning_development_from_6']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_6" value="<?= $row['learning_development_to_6']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_6" value="<?= $row['learning_development_number_of_hours_6']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_6" value="<?= $row['learning_development_type_of_ld_6']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_6" value="<?= $row['learning_development_conducted_by_6']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_7" value="<?= $row['learning_development_title_7']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_7" value="<?= $row['learning_development_from_7']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_7" value="<?= $row['learning_development_to_7']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_7" value="<?= $row['learning_development_number_of_hours_7']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_7" value="<?= $row['learning_development_type_of_ld_7']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_7" value="<?= $row['learning_development_conducted_by_7']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_8" value="<?= $row['learning_development_title_8']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_8" value="<?= $row['learning_development_from_8']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_8" value="<?= $row['learning_development_to_8']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_8" value="<?= $row['learning_development_number_of_hours_8']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_8" value="<?= $row['learning_development_type_of_ld_8']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_8" value="<?= $row['learning_development_conducted_by_8']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_9" value="<?= $row['learning_development_title_9']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_9" value="<?= $row['learning_development_from_9']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_9" value="<?= $row['learning_development_to_9']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_9" value="<?= $row['learning_development_number_of_hours_9']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_9" value="<?= $row['learning_development_type_of_ld_9']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_9" value="<?= $row['learning_development_conducted_by_9']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_10" value="<?= $row['learning_development_title_10']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_10" value="<?= $row['learning_development_from_10']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_10" value="<?= $row['learning_development_to_10']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_10" value="<?= $row['learning_development_number_of_hours_10']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_10" value="<?= $row['learning_development_type_of_ld_10']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_10" value="<?= $row['learning_development_conducted_by_10']?>"></td>
                </tr>


                

                <?php
        
    
}


function pds_section7_10_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM learning20_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
           



           <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_11" value="<?= $row['learning_development_title_11']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_11" value="<?= $row['learning_development_from_11']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_11" value="<?= $row['learning_development_to_11']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_11" value="<?= $row['learning_development_number_of_hours_11']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_11" value="<?= $row['learning_development_type_of_ld_11']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_11" value="<?= $row['learning_development_conducted_by_11']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_12" value="<?= $row['learning_development_title_12']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_12" value="<?= $row['learning_development_from_12']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_12" value="<?= $row['learning_development_to_12']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_12" value="<?= $row['learning_development_number_of_hours_12']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_12" value="<?= $row['learning_development_type_of_ld_12']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_12" value="<?= $row['learning_development_conducted_by_12']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_13" value="<?= $row['learning_development_title_13']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_13" value="<?= $row['learning_development_from_13']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_13" value="<?= $row['learning_development_to_13']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_13" value="<?= $row['learning_development_number_of_hours_13']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_13" value="<?= $row['learning_development_type_of_ld_13']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_13" value="<?= $row['learning_development_conducted_by_13']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_14" value="<?= $row['learning_development_title_14']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_14" value="<?= $row['learning_development_from_14']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_14" value="<?= $row['learning_development_to_14']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_14" value="<?= $row['learning_development_number_of_hours_14']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_14" value="<?= $row['learning_development_type_of_ld_14']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_14" value="<?= $row['learning_development_conducted_by_14']?>"></td>
                </tr>


                   <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_15" value="<?= $row['learning_development_title_15']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_15" value="<?= $row['learning_development_from_15']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_15" value="<?= $row['learning_development_to_15']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_15" value="<?= $row['learning_development_number_of_hours_15']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_15" value="<?= $row['learning_development_type_of_ld_15']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_15" value="<?= $row['learning_development_conducted_by_15']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_16" value="<?= $row['learning_development_title_16']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_16" value="<?= $row['learning_development_from_16']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_16" value="<?= $row['learning_development_to_16']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_16" value="<?= $row['learning_development_number_of_hours_16']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_16" value="<?= $row['learning_development_type_of_ld_16']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_16" value="<?= $row['learning_development_conducted_by_16']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_17" value="<?= $row['learning_development_title_17']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_17" value="<?= $row['learning_development_from_17']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_17" value="<?= $row['learning_development_to_17']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_17" value="<?= $row['learning_development_number_of_hours_17']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_17" value="<?= $row['learning_development_type_of_ld_17']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_17" value="<?= $row['learning_development_conducted_by_17']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_18" value="<?= $row['learning_development_title_18']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_18" value="<?= $row['learning_development_from_18']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_18" value="<?= $row['learning_development_to_18']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_18" value="<?= $row['learning_development_number_of_hours_18']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_18" value="<?= $row['learning_development_type_of_ld_18']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_18" value="<?= $row['learning_development_conducted_by_18']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_19" value="<?= $row['learning_development_title_19']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_19" value="<?= $row['learning_development_from_19']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_19" value="<?= $row['learning_development_to_19']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_19" value="<?= $row['learning_development_number_of_hours_19']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_19" value="<?= $row['learning_development_type_of_ld_19']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_19" value="<?= $row['learning_development_conducted_by_19']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_20" value="<?= $row['learning_development_title_20']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_20" value="<?= $row['learning_development_from_20']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_20" value="<?= $row['learning_development_to_20']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_20" value="<?= $row['learning_development_number_of_hours_20']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_20" value="<?= $row['learning_development_type_of_ld_20']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_20" value="<?= $row['learning_development_conducted_by_20']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="learning_development_title_21" value="<?= $row['learning_development_title_21']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_from_21" value="<?= $row['learning_development_from_21']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_to_21" value="<?= $row['learning_development_to_21']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_number_of_hours_21" value="<?= $row['learning_development_number_of_hours_21']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_type_of_ld_21" value="<?= $row['learning_development_type_of_ld_21']?>"></td>
                    <td><input type="text" class="form-control" name="learning_development_conducted_by_21" value="<?= $row['learning_development_conducted_by_21']?>"></td>
                </tr>



                




</table>
                <br>
                    <div class="col-md-12 ">
                        <div class=" pull right">
                        <button type="submit" name="update_pds_section_7_button" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>

                    </div>	
											</div>		
        </form>
               
    <?php

        if(isset($_POST['update_pds_section_7_button']))
        {

            $pds_id = $_SESSION['id'];
            $learning_development_title_1  = mysqli_real_escape_string($con, $_POST['learning_development_title_1']);
            $learning_development_from_1  = mysqli_real_escape_string($con, $_POST['learning_development_from_1']);
            $learning_development_to_1  = mysqli_real_escape_string($con, $_POST['learning_development_to_1']);
            $learning_development_number_of_hours_1  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_1']);
            $learning_development_type_of_ld_1  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_1']);
            $learning_development_conducted_by_1  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_1']);

            $learning_development_title_2  = mysqli_real_escape_string($con, $_POST['learning_development_title_2']);
            $learning_development_from_2  = mysqli_real_escape_string($con, $_POST['learning_development_from_2']);
            $learning_development_to_2  = mysqli_real_escape_string($con, $_POST['learning_development_to_2']);
            $learning_development_number_of_hours_2  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_2']);
            $learning_development_type_of_ld_2  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_2']);
            $learning_development_conducted_by_2  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_2']);
         

            $learning_development_title_3  = mysqli_real_escape_string($con, $_POST['learning_development_title_3']);
            $learning_development_from_3  = mysqli_real_escape_string($con, $_POST['learning_development_from_3']);
            $learning_development_to_3  = mysqli_real_escape_string($con, $_POST['learning_development_to_3']);
            $learning_development_number_of_hours_3  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_3']);
            $learning_development_type_of_ld_3  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_3']);
            $learning_development_conducted_by_3  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_3']);
         

            $learning_development_title_4  = mysqli_real_escape_string($con, $_POST['learning_development_title_4']);
            $learning_development_from_4  = mysqli_real_escape_string($con, $_POST['learning_development_from_4']);
            $learning_development_to_4  = mysqli_real_escape_string($con, $_POST['learning_development_to_4']);
            $learning_development_number_of_hours_4  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_4']);
            $learning_development_type_of_ld_4  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_4']);
            $learning_development_conducted_by_4  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_4']);
         

            $learning_development_title_5  = mysqli_real_escape_string($con, $_POST['learning_development_title_5']);
            $learning_development_from_5  = mysqli_real_escape_string($con, $_POST['learning_development_from_5']);
            $learning_development_to_5  = mysqli_real_escape_string($con, $_POST['learning_development_to_5']);
            $learning_development_number_of_hours_5  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_5']);
            $learning_development_type_of_ld_5  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_5']);
            $learning_development_conducted_by_5  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_5']);
         


            $learning_development_title_6  = mysqli_real_escape_string($con, $_POST['learning_development_title_6']);
            $learning_development_from_6  = mysqli_real_escape_string($con, $_POST['learning_development_from_6']);
            $learning_development_to_6  = mysqli_real_escape_string($con, $_POST['learning_development_to_6']);
            $learning_development_number_of_hours_6  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_6']);
            $learning_development_type_of_ld_6  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_6']);
            $learning_development_conducted_by_6  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_6']);
         


            $learning_development_title_7  = mysqli_real_escape_string($con, $_POST['learning_development_title_7']);
            $learning_development_from_7  = mysqli_real_escape_string($con, $_POST['learning_development_from_7']);
            $learning_development_to_7  = mysqli_real_escape_string($con, $_POST['learning_development_to_7']);
            $learning_development_number_of_hours_7  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_7']);
            $learning_development_type_of_ld_7  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_7']);
            $learning_development_conducted_by_7  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_7']);
         


            $learning_development_title_8  = mysqli_real_escape_string($con, $_POST['learning_development_title_8']);
            $learning_development_from_8  = mysqli_real_escape_string($con, $_POST['learning_development_from_8']);
            $learning_development_to_8  = mysqli_real_escape_string($con, $_POST['learning_development_to_8']);
            $learning_development_number_of_hours_8  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_8']);
            $learning_development_type_of_ld_8  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_8']);
            $learning_development_conducted_by_8  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_8']);
         

            $learning_development_title_9  = mysqli_real_escape_string($con, $_POST['learning_development_title_9']);
            $learning_development_from_9  = mysqli_real_escape_string($con, $_POST['learning_development_from_9']);
            $learning_development_to_9  = mysqli_real_escape_string($con, $_POST['learning_development_to_9']);
            $learning_development_number_of_hours_9  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_9']);
            $learning_development_type_of_ld_9  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_9']);
            $learning_development_conducted_by_9  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_9']);
         

            $learning_development_title_10  = mysqli_real_escape_string($con, $_POST['learning_development_title_10']);
            $learning_development_from_10  = mysqli_real_escape_string($con, $_POST['learning_development_from_10']);
            $learning_development_to_10  = mysqli_real_escape_string($con, $_POST['learning_development_to_10']);
            $learning_development_number_of_hours_10  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_10']);
            $learning_development_type_of_ld_10  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_10']);
            $learning_development_conducted_by_10  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_10']);
         

            $learning_development_title_11  = mysqli_real_escape_string($con, $_POST['learning_development_title_11']);
            $learning_development_from_11  = mysqli_real_escape_string($con, $_POST['learning_development_from_11']);
            $learning_development_to_11  = mysqli_real_escape_string($con, $_POST['learning_development_to_11']);
            $learning_development_number_of_hours_11  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_11']);
            $learning_development_type_of_ld_11  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_11']);
            $learning_development_conducted_by_11  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_11']);
         

            $learning_development_title_12  = mysqli_real_escape_string($con, $_POST['learning_development_title_12']);
            $learning_development_from_12  = mysqli_real_escape_string($con, $_POST['learning_development_from_12']);
            $learning_development_to_12  = mysqli_real_escape_string($con, $_POST['learning_development_to_12']);
            $learning_development_number_of_hours_12  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_12']);
            $learning_development_type_of_ld_12  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_12']);
            $learning_development_conducted_by_12  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_12']);
         


            $learning_development_title_13  = mysqli_real_escape_string($con, $_POST['learning_development_title_13']);
            $learning_development_from_13  = mysqli_real_escape_string($con, $_POST['learning_development_from_13']);
            $learning_development_to_13  = mysqli_real_escape_string($con, $_POST['learning_development_to_13']);
            $learning_development_number_of_hours_13  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_13']);
            $learning_development_type_of_ld_13  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_13']);
            $learning_development_conducted_by_13  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_13']);
         

            $learning_development_title_14  = mysqli_real_escape_string($con, $_POST['learning_development_title_14']);
            $learning_development_from_14  = mysqli_real_escape_string($con, $_POST['learning_development_from_14']);
            $learning_development_to_14  = mysqli_real_escape_string($con, $_POST['learning_development_to_14']);
            $learning_development_number_of_hours_14  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_14']);
            $learning_development_type_of_ld_14  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_14']);
            $learning_development_conducted_by_14  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_14']);
         

            $learning_development_title_15  = mysqli_real_escape_string($con, $_POST['learning_development_title_15']);
            $learning_development_from_15  = mysqli_real_escape_string($con, $_POST['learning_development_from_15']);
            $learning_development_to_15  = mysqli_real_escape_string($con, $_POST['learning_development_to_15']);
            $learning_development_number_of_hours_15  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_15']);
            $learning_development_type_of_ld_15  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_15']);
            $learning_development_conducted_by_15  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_15']);
         

            $learning_development_title_16  = mysqli_real_escape_string($con, $_POST['learning_development_title_16']);
            $learning_development_from_16  = mysqli_real_escape_string($con, $_POST['learning_development_from_16']);
            $learning_development_to_16  = mysqli_real_escape_string($con, $_POST['learning_development_to_16']);
            $learning_development_number_of_hours_16  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_16']);
            $learning_development_type_of_ld_16  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_16']);
            $learning_development_conducted_by_16  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_16']);
         

            $learning_development_title_17  = mysqli_real_escape_string($con, $_POST['learning_development_title_17']);
            $learning_development_from_17  = mysqli_real_escape_string($con, $_POST['learning_development_from_17']);
            $learning_development_to_17  = mysqli_real_escape_string($con, $_POST['learning_development_to_17']);
            $learning_development_number_of_hours_17  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_17']);
            $learning_development_type_of_ld_17  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_17']);
            $learning_development_conducted_by_17  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_17']);
         

            $learning_development_title_18  = mysqli_real_escape_string($con, $_POST['learning_development_title_18']);
            $learning_development_from_18  = mysqli_real_escape_string($con, $_POST['learning_development_from_18']);
            $learning_development_to_18  = mysqli_real_escape_string($con, $_POST['learning_development_to_18']);
            $learning_development_number_of_hours_18  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_18']);
            $learning_development_type_of_ld_18  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_18']);
            $learning_development_conducted_by_18  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_18']);
         

            $learning_development_title_19  = mysqli_real_escape_string($con, $_POST['learning_development_title_19']);
            $learning_development_from_19  = mysqli_real_escape_string($con, $_POST['learning_development_from_19']);
            $learning_development_to_19  = mysqli_real_escape_string($con, $_POST['learning_development_to_19']);
            $learning_development_number_of_hours_19  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_19']);
            $learning_development_type_of_ld_19  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_19']);
            $learning_development_conducted_by_19  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_19']);
         

            $learning_development_title_20  = mysqli_real_escape_string($con, $_POST['learning_development_title_20']);
            $learning_development_from_20  = mysqli_real_escape_string($con, $_POST['learning_development_from_20']);
            $learning_development_to_20  = mysqli_real_escape_string($con, $_POST['learning_development_to_20']);
            $learning_development_number_of_hours_20  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_20']);
            $learning_development_type_of_ld_20  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_20']);
            $learning_development_conducted_by_20  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_20']);

            $learning_development_title_21  = mysqli_real_escape_string($con, $_POST['learning_development_title_21']);
            $learning_development_from_21  = mysqli_real_escape_string($con, $_POST['learning_development_from_21']);
            $learning_development_to_21  = mysqli_real_escape_string($con, $_POST['learning_development_to_21']);
            $learning_development_number_of_hours_21  = mysqli_real_escape_string($con, $_POST['learning_development_number_of_hours_21']);
            $learning_development_type_of_ld_21  = mysqli_real_escape_string($con, $_POST['learning_development_type_of_ld_21']);
            $learning_development_conducted_by_21  = mysqli_real_escape_string($con, $_POST['learning_development_conducted_by_21']);
         
         


         
        


            $sql = mysqli_query($con, "UPDATE learning_tbl SET
            learning_development_title_1='$learning_development_title_1',
            learning_development_from_1='$learning_development_from_1',
            learning_development_to_1='$learning_development_to_1',
            learning_development_number_of_hours_1='$learning_development_number_of_hours_1',
            learning_development_type_of_ld_1='$learning_development_type_of_ld_1',
            learning_development_conducted_by_1='$learning_development_conducted_by_1',
            learning_development_title_2='$learning_development_title_2',
            learning_development_from_2='$learning_development_from_2',
            learning_development_to_2='$learning_development_to_2',
            learning_development_number_of_hours_2='$learning_development_number_of_hours_2',
            learning_development_type_of_ld_2='$learning_development_type_of_ld_2',
            learning_development_conducted_by_2='$learning_development_conducted_by_2',
            learning_development_title_3='$learning_development_title_3',
            learning_development_from_3='$learning_development_from_3',
            learning_development_to_3='$learning_development_to_3',
            learning_development_number_of_hours_3='$learning_development_number_of_hours_3',
            learning_development_type_of_ld_3='$learning_development_type_of_ld_3',
            learning_development_conducted_by_3='$learning_development_conducted_by_3',
            learning_development_title_4='$learning_development_title_4',
            learning_development_from_4='$learning_development_from_4',
            learning_development_to_4='$learning_development_to_4',
            learning_development_number_of_hours_4='$learning_development_number_of_hours_4',
            learning_development_type_of_ld_4='$learning_development_type_of_ld_4',
            learning_development_conducted_by_4='$learning_development_conducted_by_4',
            learning_development_title_5='$learning_development_title_5',
            learning_development_from_5='$learning_development_from_5',
            learning_development_to_5='$learning_development_to_5',
            learning_development_number_of_hours_5='$learning_development_number_of_hours_5',
            learning_development_type_of_ld_5='$learning_development_type_of_ld_5',
            learning_development_conducted_by_5='$learning_development_conducted_by_5',
            learning_development_title_6='$learning_development_title_6',
            learning_development_from_6='$learning_development_from_6',
            learning_development_to_6='$learning_development_to_6',
            learning_development_number_of_hours_6='$learning_development_number_of_hours_6',
            learning_development_type_of_ld_6='$learning_development_type_of_ld_6',
            learning_development_conducted_by_6='$learning_development_conducted_by_6',
            learning_development_title_7='$learning_development_title_7',
            learning_development_from_7='$learning_development_from_7',
            learning_development_to_7='$learning_development_to_7',
            learning_development_number_of_hours_7='$learning_development_number_of_hours_7',
            learning_development_type_of_ld_7='$learning_development_type_of_ld_7',
            learning_development_conducted_by_7='$learning_development_conducted_by_7',
            learning_development_title_8='$learning_development_title_8',
            learning_development_from_8='$learning_development_from_8',
            learning_development_to_8='$learning_development_to_8',
            learning_development_number_of_hours_8='$learning_development_number_of_hours_8',
            learning_development_type_of_ld_8='$learning_development_type_of_ld_8',
            learning_development_conducted_by_8='$learning_development_conducted_by_8',
            learning_development_title_9='$learning_development_title_9',
            learning_development_from_9='$learning_development_from_9',
            learning_development_to_9='$learning_development_to_9',
            learning_development_number_of_hours_9='$learning_development_number_of_hours_9',
            learning_development_type_of_ld_9='$learning_development_type_of_ld_9',
            learning_development_conducted_by_9='$learning_development_conducted_by_9',
            learning_development_title_10='$learning_development_title_10',
            learning_development_from_10='$learning_development_from_10',
            learning_development_to_10='$learning_development_to_10',
            learning_development_number_of_hours_10='$learning_development_number_of_hours_10',
            learning_development_type_of_ld_10='$learning_development_type_of_ld_10',
            learning_development_conducted_by_10='$learning_development_conducted_by_10' 
 

            WHERE pds_id='$pds_id'
            ");



        $sql = mysqli_query($con, "UPDATE learning20_tbl SET
            learning_development_title_11='$learning_development_title_11',
            learning_development_from_11='$learning_development_from_11',
            learning_development_to_11='$learning_development_to_11',
            learning_development_number_of_hours_11='$learning_development_number_of_hours_11',
            learning_development_type_of_ld_11='$learning_development_type_of_ld_11',
            learning_development_conducted_by_11='$learning_development_conducted_by_11',
            learning_development_title_12='$learning_development_title_12',
            learning_development_from_12='$learning_development_from_12',
            learning_development_to_12='$learning_development_to_12',
            learning_development_number_of_hours_12='$learning_development_number_of_hours_12',
            learning_development_type_of_ld_12='$learning_development_type_of_ld_12',
            learning_development_conducted_by_12='$learning_development_conducted_by_12',
            learning_development_title_13='$learning_development_title_13',
            learning_development_from_13='$learning_development_from_13',
            learning_development_to_13='$learning_development_to_13',
            learning_development_number_of_hours_13='$learning_development_number_of_hours_13',
            learning_development_type_of_ld_13='$learning_development_type_of_ld_13',
            learning_development_conducted_by_13='$learning_development_conducted_by_13',
            learning_development_title_14='$learning_development_title_14',
            learning_development_from_14='$learning_development_from_14',
            learning_development_to_14='$learning_development_to_14',
            learning_development_number_of_hours_14='$learning_development_number_of_hours_14',
            learning_development_type_of_ld_14='$learning_development_type_of_ld_14',
            learning_development_conducted_by_14='$learning_development_conducted_by_14',
            learning_development_title_15='$learning_development_title_15',
            learning_development_from_15='$learning_development_from_15',
            learning_development_to_15='$learning_development_to_15',
            learning_development_number_of_hours_15='$learning_development_number_of_hours_15',
            learning_development_type_of_ld_15='$learning_development_type_of_ld_15',
            learning_development_conducted_by_15='$learning_development_conducted_by_15',
            learning_development_title_16='$learning_development_title_16',
            learning_development_from_16='$learning_development_from_16',
            learning_development_to_16='$learning_development_to_16',
            learning_development_number_of_hours_16='$learning_development_number_of_hours_16',
            learning_development_type_of_ld_16='$learning_development_type_of_ld_16',
            learning_development_conducted_by_16='$learning_development_conducted_by_16',
            learning_development_title_17='$learning_development_title_17',
            learning_development_from_17='$learning_development_from_17',
            learning_development_to_17='$learning_development_to_17',
            learning_development_number_of_hours_17='$learning_development_number_of_hours_17',
            learning_development_type_of_ld_17='$learning_development_type_of_ld_17',
            learning_development_conducted_by_17='$learning_development_conducted_by_17',
            learning_development_title_18='$learning_development_title_18',
            learning_development_from_18='$learning_development_from_18',
            learning_development_to_18='$learning_development_to_18',
            learning_development_number_of_hours_18='$learning_development_number_of_hours_18',
            learning_development_type_of_ld_18='$learning_development_type_of_ld_18',
            learning_development_conducted_by_18='$learning_development_conducted_by_18',
            learning_development_title_19='$learning_development_title_19',
            learning_development_from_19='$learning_development_from_19',
            learning_development_to_19='$learning_development_to_19',
            learning_development_number_of_hours_19='$learning_development_number_of_hours_19',
            learning_development_type_of_ld_19='$learning_development_type_of_ld_19',
            learning_development_conducted_by_19='$learning_development_conducted_by_19',
            learning_development_title_20='$learning_development_title_20',
            learning_development_from_20='$learning_development_from_20',
            learning_development_to_20='$learning_development_to_20',
            learning_development_number_of_hours_20='$learning_development_number_of_hours_20',
            learning_development_type_of_ld_20='$learning_development_type_of_ld_20',
            learning_development_conducted_by_20='$learning_development_conducted_by_20',
            learning_development_title_21='$learning_development_title_21',
            learning_development_from_21='$learning_development_from_21',
            learning_development_to_21='$learning_development_to_21',
            learning_development_number_of_hours_21='$learning_development_number_of_hours_21',
            learning_development_type_of_ld_21='$learning_development_type_of_ld_21',
            learning_development_conducted_by_21='$learning_development_conducted_by_21' 
 

            WHERE pds_id='$pds_id'
            ");
                ?>
                <script>
                    alert('ok');
                </script>






                <?php
        
    
    }
}





function pds_section8_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM other_information_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
            <form method="POST">
                
                <tr>
                    <th style="width:200px;">SPECIAL SKILLS and HOBBIES</th>
                    <th style="width:400px;">NON-ACADEMIC DISTINCTIONS / RECOGNITION (Write in full)</th>
                    <th style="width:100px;">MEMBERSHIP IN ASSOCIATION/ORGANIZATION   (Write in full) </th>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="skill1" value="<?= $row['skill1']?>"></td>
                    <td><input type="text" class="form-control" name="recognition1" value="<?= $row['recognition1']?>"></td>
                    <td><input type="text" class="form-control" name="organization1" value="<?= $row['organization1']?>"></td>
                </tr>

                <tr>
                    <td><input type="text" class="form-control" name="skill2" value="<?= $row['skill2']?>"></td>
                    <td><input type="text" class="form-control" name="recognition2" value="<?= $row['recognition2']?>"></td>
                    <td><input type="text" class="form-control" name="organization2" value="<?= $row['organization2']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="skill3" value="<?= $row['skill3']?>"></td>
                    <td><input type="text" class="form-control" name="recognition3" value="<?= $row['recognition3']?>"></td>
                    <td><input type="text" class="form-control" name="organization3" value="<?= $row['organization3']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="skill4" value="<?= $row['skill4']?>"></td>
                    <td><input type="text" class="form-control" name="recognition4" value="<?= $row['recognition4']?>"></td>
                    <td><input type="text" class="form-control" name="organization4" value="<?= $row['organization4']?>"></td>
                </tr>


                <tr>
                    <td><input type="text" class="form-control" name="skill5" value="<?= $row['skill5']?>"></td>
                    <td><input type="text" class="form-control" name="recognition5" value="<?= $row['recognition5']?>"></td>
                    <td><input type="text" class="form-control" name="organization5" value="<?= $row['organization5']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="skill6" value="<?= $row['skill6']?>"></td>
                    <td><input type="text" class="form-control" name="recognition6" value="<?= $row['recognition6']?>"></td>
                    <td><input type="text" class="form-control" name="organization6" value="<?= $row['organization6']?>"></td>
                </tr>



                <tr>
                    <td><input type="text" class="form-control" name="skill7" value="<?= $row['skill7']?>"></td>
                    <td><input type="text" class="form-control" name="recognition7" value="<?= $row['recognition7']?>"></td>
                    <td><input type="text" class="form-control" name="organization7" value="<?= $row['organization7']?>"></td>
                </tr>
                </table>

        <br>
                    <div class="col-md-12 ">
                        <div class=" pull right">
                        <button type="submit" name="update_pds_section_8_button" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>

                    </div>	
                            </div>		
</form>

<?php

if(isset($_POST['update_pds_section_8_button']))
{

$pds_id = $_SESSION['id'];
$skill1  = mysqli_real_escape_string($con, $_POST['skill1']);
$recognition1  = mysqli_real_escape_string($con, $_POST['recognition1']);
$organization1  = mysqli_real_escape_string($con, $_POST['organization1']);

$skill2  = mysqli_real_escape_string($con, $_POST['skill2']);
$recognition2  = mysqli_real_escape_string($con, $_POST['recognition2']);
$organization2  = mysqli_real_escape_string($con, $_POST['organization2']);


$skill3  = mysqli_real_escape_string($con, $_POST['skill3']);
$recognition3  = mysqli_real_escape_string($con, $_POST['recognition3']);
$organization3  = mysqli_real_escape_string($con, $_POST['organization3']);


$skill4  = mysqli_real_escape_string($con, $_POST['skill4']);
$recognition4  = mysqli_real_escape_string($con, $_POST['recognition4']);
$organization4  = mysqli_real_escape_string($con, $_POST['organization4']);


$skill5  = mysqli_real_escape_string($con, $_POST['skill5']);
$recognition5  = mysqli_real_escape_string($con, $_POST['recognition5']);
$organization5  = mysqli_real_escape_string($con, $_POST['organization5']);


$skill6  = mysqli_real_escape_string($con, $_POST['skill6']);
$recognition6  = mysqli_real_escape_string($con, $_POST['recognition6']);
$organization6  = mysqli_real_escape_string($con, $_POST['organization6']);


$skill7  = mysqli_real_escape_string($con, $_POST['skill7']);
$recognition7  = mysqli_real_escape_string($con, $_POST['recognition7']);
$organization7  = mysqli_real_escape_string($con, $_POST['organization7']);






$sql = mysqli_query($con, "UPDATE other_information_tbl SET 
skill1='$skill1',
skill2='$skill2',
skill3='$skill3',
skill4='$skill4',
skill5='$skill5',
skill6='$skill6',
skill7='$skill7',
recognition1='$recognition1',
recognition2='$recognition2',
recognition3='$recognition3',
recognition4='$recognition4',
recognition5='$recognition5',
recognition6='$recognition6',
recognition7='$recognition7',
organization1='$organization1',
organization2='$organization2',
organization3='$organization3',
organization4='$organization4',
organization5='$organization5',
organization6='$organization6',
organization7='$organization7'

WHERE pds_id='$pds_id'
");



?>
<script>
    alert('ok');
</script>






<?php


}
    
}











function register()
{
    global $con;

    if(isset($_POST['btn_register']))
    {
        $user = mysqli_real_escape_string($con, $_POST['user']);
        $pass = mysqli_real_escape_string($con, $_POST['pass']);
        $sql = mysqli_query($con, "INSERT INTO accounts(username, password) VALUES('$user','$pass')");
        $id = $con->insert_id;
        $sq2l = mysqli_query($con, "INSERT INTO personal_information_tbl(pds_id) VALUES('$id')");
        $sql1 = mysqli_query($con, "INSERT INTO civil_service_tbl(pds_id) VALUES('$id')");
        $sql2 = mysqli_query($con, "INSERT INTO learning20_tbl(pds_id) VALUES('$id')");
        $sql3 = mysqli_query($con, "INSERT INTO learning_tbl(pds_id) VALUES('$id')");
        $sql4 = mysqli_query($con, "INSERT INTO other_information_tbl(pds_id) VALUES('$id')");
        $sql5 = mysqli_query($con, "INSERT INTO personal_information_tbl	(pds_id) VALUES('$id')");
        $sql6 = mysqli_query($con, "INSERT INTO voluntary_work_tbl	(pds_id) VALUES('$id')");
        $sql7 = mysqli_query($con, "INSERT INTO work_experience5_tbl	(pds_id) VALUES('$id')");
        $sql8 = mysqli_query($con, "INSERT INTO work_experience10_tbl	(pds_id) VALUES('$id')");
        $sql9 = mysqli_query($con, "INSERT INTO work_experience15_tbl	(pds_id) VALUES('$id')");
        $sql10 = mysqli_query($con, "INSERT INTO work_experience20_tbl	(pds_id) VALUES('$id')");
        $sql11 = mysqli_query($con, "INSERT INTO work_experience25_tbl	(pds_id) VALUES('$id')");
        $sql12 = mysqli_query($con, "INSERT INTO work_experience30_tbl	(pds_id) VALUES('$id')");
        // $row = mysqli_fetch_assoc($sql);


        // if($row)
        // {
        //     if($row['password'] != $pass)
        //     {

        //         echo 'fsdf';
        //     //         <div class="alert alert-danger border-0 alert-dismissible">
        //     //             <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
        //     //             <span class="font-weight-semibold">Password Incorrect</a>.
        //     //         </div>
        //     }
        //     else
        //     {
        //         // echo 'sdsd';
        //         session_start();
        //             $_SESSION['id'] = $row['id'];
        //                 header("location: ../user/index.php");
        //     }
        // }
    }
}

function login()
{
    global $con;

    if(isset($_POST['btn_login']))
    {
        $user = mysqli_real_escape_string($con, $_POST['user']);
        $pass = mysqli_real_escape_string($con, $_POST['pass']);

        $sql = mysqli_query($con, "SELECT * FROM accounts WHERE username='$user'");
        $row = mysqli_fetch_assoc($sql);


        if($row)
        {
            if($row['password'] != $pass)
            {

                echo 'fsdf';
            //         <div class="alert alert-danger border-0 alert-dismissible">
            //             <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            //             <span class="font-weight-semibold">Password Incorrect</a>.
            //         </div>
            }
            else
            {
                // echo 'sdsd';
                session_start();
                    $_SESSION['id'] = $row['id'];
                        header("location: ../user/index.php");
            }
        }
    }
}

