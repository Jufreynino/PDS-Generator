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
            <form method="POST">
                <div style="overflow-x:auto;">
                   <table >
                        <tr>
                            <th rowspan="2">CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE / BARANGAY ELIGIBILITY / DRIVER'S LICENSE</th>
                            <th rowspan="2" style="width:100px;">RATING <br>(If Applicable</th>
                            <th rowspan="2" style="width:100px;">DATE OF EXAMINATION / CONFERMENT</th>
                            <th rowspan="2" style="width:200px;">PLACE OF EXAMINATION / CONFERMENT</th>
                            <th colspan="2">LICENSE (if applicable)</th>
                        </tr>
                        <tr>
                            <th>NUMBER</th>
                            <th>Date of Validity</th>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="career_1" value="<?= $row['career_1']?>"></td>
                            <td><input type="text" class="form-control" name="rating_1" value="<?= $row['rating_1']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_1" value="<?= $row['date_of_examination_1']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_1" value="<?= $row['place_of_examination_1']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_1" value="<?= $row['license_number_1']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_1" value="<?= $row['license_validity_1']?>"></td>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" name="career_2" value="<?= $row['career_2']?>"></td>
                            <td><input type="text" class="form-control" name="rating_2" value="<?= $row['rating_2']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_2" value="<?= $row['date_of_examination_2']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_2" value="<?= $row['place_of_examination_2']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_2" value="<?= $row['license_number_2']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_2" value="<?= $row['license_validity_2']?>"></td>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" name="career_3" value="<?= $row['career_3']?>"></td>
                            <td><input type="text" class="form-control" name="rating_3" value="<?= $row['rating_3']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_3" value="<?= $row['date_of_examination_3']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_3" value="<?= $row['place_of_examination_3']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_3" value="<?= $row['license_number_3']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_3" value="<?= $row['license_validity_3']?>"></td>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" name="career_4" value="<?= $row['career_4']?>"></td>
                            <td><input type="text" class="form-control" name="rating_4" value="<?= $row['rating_4']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_4" value="<?= $row['date_of_examination_4']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_4" value="<?= $row['place_of_examination_4']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_4" value="<?= $row['license_number_4']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_4" value="<?= $row['license_validity_4']?>"></td>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" name="career_5" value="<?= $row['career_5']?>"></td>
                            <td><input type="text" class="form-control" name="rating_5" value="<?= $row['rating_5']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_5" value="<?= $row['date_of_examination_5']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_5" value="<?= $row['place_of_examination_5']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_5" value="<?= $row['license_number_5']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_5" value="<?= $row['license_validity_5']?>"></td>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" name="career_6" value="<?= $row['career_6']?>"></td>
                            <td><input type="text" class="form-control" name="rating_6" value="<?= $row['rating_6']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_6" value="<?= $row['date_of_examination_6']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_6" value="<?= $row['place_of_examination_6']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_6" value="<?= $row['license_number_6']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_6" value="<?= $row['license_validity_6']?>"></td>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" name="career_7" value="<?= $row['career_7']?>"></td>
                            <td><input type="text" class="form-control" name="rating_7" value="<?= $row['rating_7']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_7" value="<?= $row['date_of_examination_7']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_7" value="<?= $row['place_of_examination_7']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_7" value="<?= $row['license_number_7']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_7" value="<?= $row['license_validity_7']?>"></td>
                        </tr>

                    
                    </table>
                </div>	
            </div>		
        </div>		
        <br>
                <div class="col-md-12 ">
                    <div class=" pull right">
                    <button type="submit" name="update_pds_section_4_button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
        </form>
    <?php


    if(isset($_POST['update_pds_section_4_button']))
    {
        $career_1  = mysqli_real_escape_string($con, $_POST['career_1']);
        $rating_1  = mysqli_real_escape_string($con, $_POST['rating_1']);
        $date_of_examination_1  = mysqli_real_escape_string($con, $_POST['date_of_examination_1']);
        $place_of_examination_1  = mysqli_real_escape_string($con, $_POST['place_of_examination_1']);
        $license_number_1  = mysqli_real_escape_string($con, $_POST['license_number_1']);
        $license_validity_1  = mysqli_real_escape_string($con, $_POST['license_validity_1']);
        $career_2  = mysqli_real_escape_string($con, $_POST['career_2']);
        $rating_2  = mysqli_real_escape_string($con, $_POST['rating_2']);
        $date_of_examination_2  = mysqli_real_escape_string($con, $_POST['date_of_examination_2']);
        $place_of_examination_2  = mysqli_real_escape_string($con, $_POST['place_of_examination_2']);
        $license_number_2  = mysqli_real_escape_string($con, $_POST['license_number_2']);
        $license_validity_2  = mysqli_real_escape_string($con, $_POST['license_validity_2']);
        $career_3  = mysqli_real_escape_string($con, $_POST['career_3']);
        $rating_3  = mysqli_real_escape_string($con, $_POST['rating_3']);
        $date_of_examination_3  = mysqli_real_escape_string($con, $_POST['date_of_examination_3']);
        $place_of_examination_3  = mysqli_real_escape_string($con, $_POST['date_of_examination_3']);
        $license_number_3  = mysqli_real_escape_string($con, $_POST['license_number_3']);
        $license_validity_3  = mysqli_real_escape_string($con, $_POST['license_validity_3']);
        $career_4  = mysqli_real_escape_string($con, $_POST['career_4']);
        $rating_4  = mysqli_real_escape_string($con, $_POST['rating_4']);
        $date_of_examination_4  = mysqli_real_escape_string($con, $_POST['date_of_examination_4']);
        $place_of_examination_4  = mysqli_real_escape_string($con, $_POST['place_of_examination_4']);
        $license_number_4  = mysqli_real_escape_string($con, $_POST['license_number_4']);
        $license_validity_4  = mysqli_real_escape_string($con, $_POST['license_validity_4']);
        $career_5  = mysqli_real_escape_string($con, $_POST['career_5']);
        $rating_5  = mysqli_real_escape_string($con, $_POST['rating_5']);
        $date_of_examination_5  = mysqli_real_escape_string($con, $_POST['date_of_examination_5']);
        $place_of_examination_5  = mysqli_real_escape_string($con, $_POST['place_of_examination_5']);
        $license_number_5  = mysqli_real_escape_string($con, $_POST['license_number_5']);
        $license_validity_5  = mysqli_real_escape_string($con, $_POST['license_validity_5']);
        $career_6  = mysqli_real_escape_string($con, $_POST['career_6']);
        $rating_6  = mysqli_real_escape_string($con, $_POST['rating_6']);
        $date_of_examination_6  = mysqli_real_escape_string($con, $_POST['date_of_examination_6']);
        $place_of_examination_6  = mysqli_real_escape_string($con, $_POST['place_of_examination_6']);
        $license_number_6  = mysqli_real_escape_string($con, $_POST['license_number_6']);
        $license_validity_6  = mysqli_real_escape_string($con, $_POST['license_validity_6']);
        $career_7  = mysqli_real_escape_string($con, $_POST['career_7']);
        $rating_7  = mysqli_real_escape_string($con, $_POST['rating_7']);
        $date_of_examination_7  = mysqli_real_escape_string($con, $_POST['date_of_examination_7']);
        $place_of_examination_7  = mysqli_real_escape_string($con, $_POST['place_of_examination_7']);
        $license_number_7  = mysqli_real_escape_string($con, $_POST['license_number_7']);
        $license_validity_7  = mysqli_real_escape_string($con, $_POST['license_validity_7']);
        
        $pds_id = $_SESSION['id'];

        $sq2l = mysqli_query($con, "UPDATE civil_service_tbl SET 
        career_1='$career_1',
        rating_1='$rating_1',
        date_of_examination_1='$date_of_examination_1',
        place_of_examination_1='$place_of_examination_1',
        license_number_1='$license_number_1',
        license_validity_1='$license_validity_1',
        career_2='$career_2',
        rating_2='$rating_2',
        date_of_examination_2='$date_of_examination_2',
        place_of_examination_2='$place_of_examination_2',
        license_number_2='$license_number_2',
        license_validity_2='$license_validity_2',
        career_3='$career_3',
        rating_3='$rating_3',
        date_of_examination_3='$date_of_examination_3',
        place_of_examination_3='$place_of_examination_3',
        license_number_3='$license_number_3',
        license_validity_3='$license_validity_3',
        career_4='$career_4',
        rating_4='$rating_4',
        date_of_examination_4='$date_of_examination_4',
        place_of_examination_4='$place_of_examination_4',
        license_number_4='$license_number_4',
        license_validity_4='$license_validity_4',
        career_5='$career_5',
        rating_5='$rating_5',
        date_of_examination_5='$date_of_examination_5',
        place_of_examination_5='$place_of_examination_5',
        license_number_5='$license_number_5',
        license_validity_5='$license_validity_5',
        career_6='$career_6',
        rating_6='$rating_6',
        date_of_examination_6='$date_of_examination_6',
        place_of_examination_6='$place_of_examination_6',
        license_number_6='$license_number_6',
        license_validity_6='$license_validity_6',
        career_7='$career_7',
        rating_7='$rating_7',
        date_of_examination_7='$date_of_examination_7',
        place_of_examination_7='$place_of_examination_7',
        license_number_7='$license_number_7',
        license_validity_7='$license_validity_7'
        WHERE pds_id='$pds_id'
          
          ");
      
      ?>
        <script>
            alert('ok');
        </script>


     <?php

    }
}



function pds_section5_update()
{
    global $con;

    $id     =    $_SESSION['id'];

    $sql = mysqli_query($con, "SELECT * FROM civil_service_tbl WHERE pds_id='$id'");
    $row = mysqli_fetch_assoc($sql);
    ?>
            <form method="POST">
                <div style="overflow-x:auto; " >
                   <table style=" width:100%;">
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
                            <td><input type="text" class="form-control" name="career_1" value="<?= $row['career_1']?>"></td>
                            <td><input type="text" class="form-control" name="rating_1" value="<?= $row['rating_1']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_1" value="<?= $row['date_of_examination_1']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_1" value="<?= $row['place_of_examination_1']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_1" value="<?= $row['license_number_1']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_1" value="<?= $row['license_validity_1']?>"></td>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" name="career_2" value="<?= $row['career_2']?>"></td>
                            <td><input type="text" class="form-control" name="rating_2" value="<?= $row['rating_2']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_2" value="<?= $row['date_of_examination_2']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_2" value="<?= $row['place_of_examination_2']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_2" value="<?= $row['license_number_2']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_2" value="<?= $row['license_validity_2']?>"></td>
                        </tr>


                        <tr>
                            <td><input type="text" class="form-control" name="career_3" value="<?= $row['career_3']?>"></td>
                            <td><input type="text" class="form-control" name="rating_3" value="<?= $row['rating_3']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_3" value="<?= $row['date_of_examination_3']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_3" value="<?= $row['place_of_examination_3']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_3" value="<?= $row['license_number_3']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_3" value="<?= $row['license_validity_3']?>"></td>
                        </tr>



                        <tr>
                            <td><input type="text" class="form-control" name="career_4" value="<?= $row['career_4']?>"></td>
                            <td><input type="text" class="form-control" name="rating_4" value="<?= $row['rating_4']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_4" value="<?= $row['date_of_examination_4']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_4" value="<?= $row['place_of_examination_4']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_4" value="<?= $row['license_number_4']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_4" value="<?= $row['license_number_4']?>"></td>
                        </tr>


                        <tr>
                            <td><input type="text" class="form-control" name="career_5" value="<?= $row['career_5']?>"></td>
                            <td><input type="text" class="form-control" name="rating_5" value="<?= $row['rating_5']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_5" value="<?= $row['date_of_examination_5']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_5" value="<?= $row['place_of_examination_5']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_5" value="<?= $row['license_number_5']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_5" value="<?= $row['license_validity_5']?>"></td>
                        </tr>


                        <tr>
                            <td><input type="text" class="form-control" name="career_6" value="<?= $row['career_6']?>"></td>
                            <td><input type="text" class="form-control" name="rating_6" value="<?= $row['rating_6']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_6" value="<?= $row['date_of_examination_6']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_6" value="<?= $row['place_of_examination_6']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_6" value="<?= $row['license_number_6']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_6" value="<?= $row['license_validity_6']?>"></td>
                        </tr>


                        <tr>
                            <td><input type="text" class="form-control" name="career_7" value="<?= $row['career_7']?>"></td>
                            <td><input type="text" class="form-control" name="rating_7" value="<?= $row['rating_7']?>"></td>
                            <td><input type="text" class="form-control" name="date_of_examination_7" value="<?= $row['date_of_examination_7']?>"></td>
                            <td><input type="text" class="form-control" name="place_of_examination_7" value="<?= $row['place_of_examination_7']?>"></td>
                            <td><input type="text" class="form-control" name="license_number_7" value="<?= $row['license_number_7']?>"></td>
                            <td><input type="text" class="form-control" name="license_validity_7" value="<?= $row['license_validity_7']?>"></td>
                        </tr>

                    
                    </table>
                    
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

