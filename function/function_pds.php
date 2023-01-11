<?php 

function fetch()
{
    global $con;

 $id = $_SESSION['id'];
            
        $sql = "SELECT * FROM personal_information_tbl INNER JOIN civil_service_tbl ON personal_information_tbl.pds_id = civil_service_tbl.pds_id 
        INNER JOIN work_experience5_tbl ON personal_information_tbl.pds_id = work_experience5_tbl.pds_id 
        INNER JOIN work_experience10_tbl ON personal_information_tbl.pds_id = work_experience10_tbl.pds_id 
        INNER JOIN work_experience15_tbl ON personal_information_tbl.pds_id = work_experience15_tbl.pds_id 
        INNER JOIN work_experience20_tbl ON personal_information_tbl.pds_id = work_experience20_tbl.pds_id 
        INNER JOIN work_experience25_tbl ON personal_information_tbl.pds_id = work_experience25_tbl.pds_id 
        INNER JOIN work_experience30_tbl ON personal_information_tbl.pds_id = work_experience30_tbl.pds_id 
        
        
        
        
        ";
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_assoc($result);
    

        ?>
        
        <?php if($row['sex'] == 'Male' && $row['civil_status'] == 'Single') {?>
                    <img class="bi x0 y0 w1 h1" alt="" src="1.png" />
        <?php }else if($row['sex'] == 'Male' && $row['civil_status'] == 'Married'){ ?>
                    <img class="bi x0 y0 w1 h1" alt="" src="2.png" />
        <?php }else if($row['sex'] == 'Male' && $row['civil_status'] == 'Widowed'){ ?>
                    <img class="bi x0 y0 w1 h1" alt="" src="3.png" />
        <?php }else if($row['sex'] == 'Male' && $row['civil_status'] == 'Separated'){ ?>
                    <img class="bi x0 y0 w1 h1" alt="" src="4.png" />
        <?php }else if($row['sex'] == 'Male' && $row['civil_status'] == 'Other'){ ?>
                    <img class="bi x0 y0 w1 h1" alt="" src="5.png" />

        <?php } else if($row['sex'] == 'Female' && $row['civil_status'] == 'Single') {?>
                    <img class="bi x0 y0 w1 h1" alt="" src="6.png" />
        <?php }else if($row['sex'] == 'Female' && $row['civil_status'] == 'Married'){ ?>
                    <img class="bi x0 y0 w1 h1" alt="" src="7.png" />
        <?php }else if($row['sex'] == 'Female' && $row['civil_status'] == 'Widowed'){ ?>
                    <img class="bi x0 y0 w1 h1" alt="" src="8.png" />
        <?php }else if($row['sex'] == 'Female' && $row['civil_status'] == 'Separated'){ ?>
                    <img class="bi x0 y0 w1 h1" alt="" src="9.png" />
        <?php }else if($row['sex'] == 'Female' && $row['civil_status'] == 'Other'){ ?>
                    <img class="bi x0 y0 w1 h1" alt="" src="10.png" />


        <?php } ?>
                    <div class="c x1 y1 w2 h2"><div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"></div></div>
                    <div class="c x3 y3 w3 h4"><div class="t m0 x4 h5 y4 ff2 fs1 fc0 sc0 ls0 ws0">PERSONAL DATA SHEET</div></div>
                    <div class="c x3 y5 w3 h6">
                        <div class="t m0 x2 h7 y6 ff3 fs2 fc0 sc0 ls0 ws0">WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person
                        </div>
                        <div class="t m0 x2 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">concerned.</div>
                    </div>
                    <div class="c x3 y8 w3 h8"><div class="t m0 x2 h7 y9 ff3 fs2 fc0 sc0 ls0 ws0">READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.</div></div>
                    <div class="c x3 ya w4 h9">
                        <div class="t m0 x2 ha yb ff4 fs3 fc0 sc0 ls0 ws0">Print legibly. Tick appropriate boxes ( ) and use separate sheet if necessary. Indicate N/A if not applicable. <span class="ff1">DO NOT ABBREVIATE.</span></div>
                    </div>
                    <div class="c x5 ya w5 h9"><div class="t m0 x2 hb yc ff4 fs2 fc0 sc0 ls0 ws0">1. CS ID No.</div></div>
                    <div class="c x1 ya w6 h9"><div class="t m0 x6 hb yc ff4 fs2 fc0 sc0 ls0 ws0">(Do not fill up. For CSC use only)</div></div>
                    <div class="c x3 yd w3 hc"><div class="t m0 x2 hd ye ff5 fs4 fc1 sc0 ls0 ws0">I. PERSONAL INFORMATION</div></div>
                    <div class="c x3 yf w7 he"><div class="t m0 x7 hb y10 ff4 fs2 fc0 sc0 ls0 ws0">2.</div></div>
                    <div class="c x8 yf w8 he"><div class="t m0 x2 hb y10 ff4 fs2 fc0 sc0 ls0 ws0">SURNAME</div></div>
                    <div class="c x9 yf w9 he"><div class="t m0 x2 hf y11 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['surname'] ?></div></div>
                    <div class="c x8 y12 w8 h10"><div class="t m0 x2 hb y10 ff4 fs2 fc0 sc0 ls0 ws0">FIRST NAME</div></div>
                    <div class="c x9 y12 wa h10"><div class="t m0 x2 hf y11 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['firstname'] ?></div></div>
                    <div class="c x1 y12 w6 h10">
                        <div class="t m0 x2 h11 y13 ff4 fs0 fc0 sc0 ls0 ws0">NAME EXTENSION (JR., SR) <span class="ff1"><?= $row['name_extension'] ?></span></div>
                    </div>
                    <div class="c x8 y14 w8 h6"><div class="t m0 x2 hb y15 ff4 fs2 fc0 sc0 ls0 ws0">MIDDLE NAME</div></div>
                    <div class="c x9 y14 wa h6"><div class="t m0 x2 hf y16 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['middlename'] ?></div></div>
                    <div class="c x3 y17 w7 h12"><div class="t m0 x7 hb y18 ff4 fs2 fc0 sc0 ls0 ws0">3.</div></div>
                    <div class="c x8 y17 w8 h12">
                        <div class="t m0 x2 hb y19 ff4 fs2 fc0 sc0 ls0 ws0">DATE OF BIRTH</div>
                        <div class="t m0 x2 hb y1a ff4 fs2 fc0 sc0 ls0 ws0">(mm/dd/yyyy)</div>
                    </div>
                    <div class="c x9 y17 wb h12"><div class="t m0 x2 hf y1b ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['date_of_birth'] ?></div></div>
                    <div class="c xa y17 wc h12"><div class="t m0 x2 hb y1c ff4 fs2 fc0 sc0 ls0 ws0">16. CITIZENSHIP</div></div>
                    <div class="c x3 y1d w7 h13"><div class="t m0 x7 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">4.</div></div>
                    <div class="c x8 y1d wd h13"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">PLACE OF BIRTH</div></div>
                    <div class="c x9 y1d wb h13"><div class="t m0 x2 hf y1f ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['place_of_birth'] ?></div></div>
                    <div class="c xa y1d we h13"><div class="t m0 xb hb y1e ff4 fs2 fc0 sc0 ls0 ws0">If holder of dual citizenship,</div></div>
                    <div class="c x1 y1d w6 h13"><div class="t m0 xc h14 y1f ff4 fs5 fc0 sc0 ls0 ws0">Pls. indicate country:</div></div>
                    <div class="c x3 y20 w7 h13"><div class="t m0 x7 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">5.</div></div>
                    <div class="c x8 y20 wd h13"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">SEX</div></div>
                    <div class="c xa y20 we h13"><div class="t m0 xd hb y21 ff4 fs2 fc0 sc0 ls0 ws0">please indicate the details.</div></div>
                    <div class="c x3 y22 w7 h13"><div class="t m0 xe hb y23 ff4 fs2 fc0 sc0 ls0 ws0">6</div></div>
                    <div class="c x8 y22 w8 h13"><div class="t m0 x2 hb y23 ff4 fs2 fc0 sc0 ls0 ws0">CIVIL STATUS</div></div>
                    <div class="c xa y24 wc h15"><div class="t m0 x2 hb y25 ff4 fs2 fc0 sc0 ls0 ws0">17. RESIDENTIAL ADDRESS</div></div>
                    <div class="c xf y24 wf h15"><div class="t m0 x10 hb y25 ff4 fs2 fc0 sc0 ls0 ws0"><?= $row['residential_house_block'] ?></div></div>
                    <div class="c x1 y24 w6 h15"><div class="t m0 x11 hb y25 ff4 fs2 fc0 sc0 ls0 ws0"><?= $row['residential_street'] ?></div></div>
                    <div class="c xf y22 wf h16"><div class="t m0 xd h7 y26 ff6 fs2 fc0 sc0 ls0 ws0">House/Block/Lot No.</div></div>
                    <div class="c x1 y22 w6 h16"><div class="t m0 x12 h7 y26 ff6 fs2 fc0 sc0 ls0 ws0">Street</div></div>
                    <div class="c xf y27 wf h17"><div class="t m0 x13 hb y28 ff4 fs2 fc0 sc0 ls0 ws0"><?= $row['residential_subdivision_village'] ?></div></div>
                    <div class="c x1 y27 w6 h17"><div class="t m0 x14 hb y28 ff4 fs2 fc0 sc0 ls0 ws0"><?= $row['residential_barangay'] ?></div></div>
                    <div class="c xf y29 wf h18"><div class="t m0 x15 h7 y26 ff6 fs2 fc0 sc0 ls0 ws0">Subdivision/Village</div></div>
                    <div class="c x1 y29 w6 h18"><div class="t m0 x16 h7 y26 ff6 fs2 fc0 sc0 ls0 ws0">Barangay</div></div>
                    <div class="c x3 y2a w7 h12"><div class="t m0 x7 hb y1c ff4 fs2 fc0 sc0 ls0 ws0">7.</div></div>
                    <div class="c x8 y2a w8 h12"><div class="t m0 x2 hb y1c ff4 fs2 fc0 sc0 ls0 ws0">HEIGHT (m)</div></div>
                    <div class="c x9 y2a wb h12"><div class="t m0 x2 hf y1b ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['height'] ?></div></div>
                    <div class="c xf y2b wf h15"><div class="t m0 x13 hb y25 ff4 fs2 fc0 sc0 ls0 ws0"><?= $row['residential_city_municipality'] ?></div></div>
                    <div class="c x1 y2b w6 h15"><div class="t m0 x6 hb y25 ff4 fs2 fc0 sc0 ls0 ws0"><?= $row['residential_province'] ?></div></div>
                    <div class="c xf y2a wf h19"><div class="t m0 x17 h7 y2c ff6 fs2 fc0 sc0 ls0 ws0">City/Municipality</div></div>
                    <div class="c x1 y2a w6 h19"><div class="t m0 x16 h7 y2c ff6 fs2 fc0 sc0 ls0 ws0">Province</div></div>
                    <div class="c x3 y2d w7 h10"><div class="t m0 x7 hb y2e ff4 fs2 fc0 sc0 ls0 ws0">8.</div></div>
                    <div class="c x8 y2d w8 h10"><div class="t m0 x2 hb y2e ff4 fs2 fc0 sc0 ls0 ws0">WEIGHT (kg)</div></div>
                    <div class="c x9 y2d wb h10"><div class="t m0 x2 hf y2f ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['weight'] ?></div></div>
                    <div class="c xa y2d wc h10"><div class="t m0 xb hb y2e ff4 fs2 fc0 sc0 ls0 ws0">ZIP CODE</div></div>
                    <div class="c xf y2d w10 h10"><div class="t m0 x18 hb y2e ff4 fs2 fc0 sc0 ls0 ws0"><?= $row['residential_zipcode'] ?></div></div>
                    <div class="c x3 y30 w7 h13"><div class="t m0 x7 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">9.</div></div>
                    <div class="c x8 y30 w8 h13"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">BLOOD TYPE</div></div>
                    <div class="c x9 y30 wb h13"><div class="t m0 x2 hf y1f ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['blood_type'] ?></div></div>
                    <div class="c xa y31 wc h1a"><div class="t m0 x2 hb y32 ff4 fs2 fc0 sc0 ls0 ws0">18. PERMANENT ADDRESS</div></div>
                    <div class="c xf y31 wf h1a"><div class="t m0 x10 h7 y32 ff6 fs2 fc0 sc0 ls0 ws0"><?= $row['permanent_house_block'] ?></div></div>
                    <div class="c x1 y31 w6 h1a"><div class="t m0 x11 h7 y32 ff6 fs2 fc0 sc0 ls0 ws0"><?= $row['permanent_street'] ?></div></div>
                    <div class="c xf y30 wf h18"><div class="t m0 xd h7 y26 ff6 fs2 fc0 sc0 ls0 ws0">House/Block/Lot No.</div></div>
                    <div class="c x1 y30 w6 h18"><div class="t m0 x12 h7 y26 ff6 fs2 fc0 sc0 ls0 ws0">Street</div></div>
                    <div class="c x3 y33 w7 h13"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">10.</div></div>
                    <div class="c x8 y33 w8 h13"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">GSIS ID NO.</div></div>
                    <div class="c x9 y33 wb h13"><div class="t m0 x2 hf y1f ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['gsis_no'] ?></div></div>
                    <div class="c xf y34 wf h1a"><div class="t m0 x19 h7 y32 ff6 fs2 fc0 sc0 ls0 ws0"><?= $row['permanent_subdivision_village'] ?></div></div>
                    <div class="c x1 y34 w6 h1a"><div class="t m0 x14 h7 y32 ff6 fs2 fc0 sc0 ls0 ws0"><?= $row['permanent_barangay'] ?></div></div>
                    <div class="c xf y33 wf h18"><div class="t m0 x15 h7 y26 ff6 fs2 fc0 sc0 ls0 ws0">Subdivision/Village</div></div>
                    <div class="c x1 y33 w6 h18"><div class="t m0 x16 h7 y26 ff6 fs2 fc0 sc0 ls0 ws0">Barangay</div></div>
                    <div class="c x3 y35 w7 h1b"><div class="t m0 x2 hb y36 ff4 fs2 fc0 sc0 ls0 ws0">11.</div></div>
                    <div class="c x8 y35 w8 h1b"><div class="t m0 x2 hb y36 ff4 fs2 fc0 sc0 ls0 ws0">PAG-IBIG ID NO.</div></div>
                    <div class="c x9 y35 wb h1b"><div class="t m0 x2 hf y37 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['pagibig_no'] ?></div></div>
                    <div class="c x1a y38 w11 h1a"><div class="t m0 x2 hf y39 ff7 fs5 fc0 sc0 ls0 ws0"><?= $row['permanent_city_municipality'] ?></div></div>
                    <div class="c x1b y38 w12 h1a"><div class="t m0 x2 hf y39 ff7 fs5 fc0 sc0 ls0 ws0"><?= $row['permanent_province'] ?></div></div>
                    <div class="c xf y35 wf h1c"><div class="t m0 x17 h7 y3a ff6 fs2 fc0 sc0 ls0 ws0">City/Municipality</div></div>
                    <div class="c x1 y35 w6 h1c"><div class="t m0 x16 h7 y3a ff6 fs2 fc0 sc0 ls0 ws0">Province</div></div>
                    <div class="c x3 y3b w7 h13"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">12.</div></div>
                    <div class="c x8 y3b wd h13"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">PHILHEALTH NO.</div></div>
                    <div class="c x9 y3b wb h13"><div class="t m0 x2 hf y1f ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['philhealth_no'] ?></div></div>
                    <div class="c xa y3b wc h13"><div class="t m0 xb hb y1e ff4 fs2 fc0 sc0 ls0 ws0">ZIP CODE</div></div>
                    <div class="c xf y3b wf h13"><div class="t m0 x11 h7 y1e ff6 fs2 fc0 sc0 ls0 ws0"><?= $row['permanent_zipcode'] ?></div></div>
                    <div class="c x3 y3c w7 h13"><div class="t m0 x2 hb y23 ff4 fs2 fc0 sc0 ls0 ws0">13.</div></div>
                    <div class="c x8 y3c wd h13"><div class="t m0 x2 hb y23 ff4 fs2 fc0 sc0 ls0 ws0">SSS NO.</div></div>
                    <div class="c x9 y3c wb h13"><div class="t m0 x2 hf y3d ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['sss_no'] ?></div></div>
                    <div class="c xa y3c wc h13"><div class="t m0 x2 hb y23 ff4 fs2 fc0 sc0 ls0 ws0">19. TELEPHONE NO.</div></div>
                    <div class="c xf y3c w10 h13"><div class="t m0 x1c hb y23 ff4 fs2 fc0 sc0 ls0 ws0"><?= $row['telephone_no'] ?></div></div>
                    <div class="c x3 y3e w13 h1d"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">14. TIN NO.</div></div>
                    <div class="c x9 y3e wb h1d"><div class="t m0 x2 hf y1f ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['tin_no'] ?></div></div>
                    <div class="c xa y3e wc h1d"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">20. MOBILE NO.</div></div>
                    <div class="c xf y3e w10 h1d"><div class="t m0 x1d hb y1e ff4 fs2 fc0 sc0 ls0 ws0"><?= $row['mobile_no'] ?></div></div>
                    <div class="c x3 y3f w13 h13"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">15. AGENCY EMPLOYEE NO.</div></div>
                    <div class="c x9 y3f wb h13"><div class="t m0 x2 hf y1f ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['agency_employee_no'] ?></div></div>
                    <div class="c xa y3f wc h13"><div class="t m0 x2 hb y1e ff4 fs2 fc0 sc0 ls0 ws0">21. E-MAIL ADDRESS (if any)</div></div>
                    <div class="c xf y3f w10 h13"><div class="t m0 x1e h1e y40 ff8 fs4 fc2 sc0 ls0 ws0"><?= $row['email_address'] ?></div></div>
                    <div class="c x3 y41 w13 hc"><div class="t m0 x2 hd y42 ff5 fs4 fc1 sc0 ls0 ws0">II. FAMILY BACKGROUND</div></div>
                    <div class="c x3 y43 w7 h1f"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">22.</div></div>
                    <div class="c x8 y43 wd h1f"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">SPOUSE SURNAME</div></div>
                    <div class="c x9 y43 w14 h1f"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['spouse_surname'] ?></div></div>
                    <div class="c xf y43 w15 h1f"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">23. NAME of CHILDREN (Write full name and list all)</div></div>
                    <div class="c x1b y43 w12 h1f"><div class="t m0 x7 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">DATE OF BIRTH (mm/dd/yyyy)</div></div>
                    <div class="c x8 y46 wd h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">FIRST NAME</div></div>
                    <div class="c x9 y46 wb h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0"> <?= $row['spouse_firstname'] ?></div></div>
                    <div class="c xa y46 wc h20">
                        <div class="t m0 x2 h11 y47 ff4 fs0 fc0 sc0 ls0 ws0">NAME EXTENSION (JR., SR)</div>
                        <div class="t m0 x2 h3 y48 ff1 fs0 fc0 sc0 ls0 ws0"><?= $row['spouse_name_extension'] ?></div>
                    </div>
                    <div class="c xf y46 w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y46 w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/24/5243</div></div>
                    <div class="c x8 y4b wd h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">MIDDLE NAME</div></div>
                    <div class="c x9 y4b w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['spouse_middlename'] ?></div></div>
                    <div class="c xf y4b w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y4b w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/25/5243</div></div>
                    <div class="c x8 y4c wd h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">OCCUPATION</div></div>
                    <div class="c x9 y4c w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['spouse_occupation'] ?></div></div>
                    <div class="c xf y4c w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y4c w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/26/5243</div></div>
                    <div class="c x8 y4d w8 h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">EMPLOYER/BUSINESS NAME</div></div>
                    <div class="c x9 y4d w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['spouse_employer'] ?></div></div>
                    <div class="c xf y4d w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y4d w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/27/5243</div></div>
                    <div class="c x8 y4e wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">BUSINESS ADDRESS</div></div>
                    <div class="c x9 y4e w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['spouse_business_address'] ?></div></div>
                    <div class="c xf y4e w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y4e w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/28/5243</div></div>
                    <div class="c x8 y52 wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">TELEPHONE NO.</div></div>
                    <div class="c x9 y52 w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['spouse_telephone_no'] ?></div></div>
                    <div class="c xf y52 w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y52 w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/29/5243</div></div>
                    <div class="c x3 y53 w7 h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">24.</div></div>
                    <div class="c x8 y53 wd h20"><div class="t m0 x7 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">FATHER&apos;S SURNAME</div></div>
                    <div class="c x9 y53 w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['father_surname'] ?></div></div>
                    <div class="c xf y53 w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y53 w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/30/5243</div></div>
                    <div class="c x8 y54 wd h22"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">FIRST NAME</div></div>
                    <div class="c x9 y54 wb h22"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['father_firstname'] ?></div></div>
                    <div class="c xa y54 wc h22">
                        <div class="t m0 x2 h11 y55 ff4 fs0 fc0 sc0 ls0 ws0">NAME EXTENSION (JR., SR)</div>
                        <div class="t m0 x2 h3 y56 ff1 fs0 fc0 sc0 ls0 ws0"><?= $row['father_name_extension'] ?></div>
                    </div>
                    <div class="c xf y54 w15 h22"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y54 w12 h22"><div class="t m0 x2 h21 y57 ff1 fs3 fc0 sc0 ls0 ws0">7/31/5243</div></div>
                    <div class="c x8 y58 wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">MIDDLE NAME</div></div>
                    <div class="c x9 y58 w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['father_middlename'] ?></div></div>
                    <div class="c xf y58 w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y58 w12 h20"><div class="t m0 x2 h21 y57 ff1 fs3 fc0 sc0 ls0 ws0">8/1/5243</div></div>
                    <div class="c x3 y59 w7 h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">25.</div></div>
                    <div class="c x8 y59 w8 h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">MOTHER&apos;S MAIDEN NAME</div></div>
                    <div class="c x9 y59 wa h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['mother_maiden_name'] ?></div></div>
                    <div class="c xf y59 w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y59 w12 h20"><div class="t m0 x2 h21 y57 ff1 fs3 fc0 sc0 ls0 ws0">8/2/5243</div></div>
                    <div class="c x8 y5a wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">SURNAME</div></div>
                    <div class="c x9 y5a w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['mother_surname'] ?></div></div>
                    <div class="c xf y5a w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y5a w12 h20"><div class="t m0 x2 h21 y57 ff1 fs3 fc0 sc0 ls0 ws0">8/3/5243</div></div>
                    <div class="c x8 y5b wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">FIRST NAME</div></div>
                    <div class="c x9 y5b w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['mother_firstname'] ?></div></div>
                    <div class="c xf y5b w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y5b w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">8/4/5243</div></div>
                    <div class="c x8 y5c wd h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">MIDDLE NAME</div></div>
                    <div class="c x9 y5c w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['mother_middlename'] ?></div></div>
                    <div class="c xf y5c w10 h20"><div class="t m0 x1f h7 y44 ff5 fs2 fc3 sc0 ls0 ws0">(Continue on separate sheet if necessary)</div></div>
                    <div class="c x3 y5d w16 h23"><div class="t m0 x2 hd y5e ff5 fs4 fc1 sc0 ls0 ws0">III. EDUCATIONAL BACKGROUND</div></div>
                    <div class="c xf y5d w10 h23"><div class="t m0 xb hb y25 ff4 fs2 fc0 sc0 ls0 ws0"></div></div>
                    <div class="c x3 y5f w7 h24"><div class="t m0 x2 hb y60 ff4 fs2 fc0 sc0 ls0 ws0">26.</div></div>
                    <div class="c x8 y61 w8 h25"><div class="t m0 x17 hb y62 ff4 fs2 fc0 sc0 ls0 ws0">LEVEL</div></div>
                    <div class="c x9 y61 wb h25">
                        <div class="t m0 x20 hb y63 ff4 fs2 fc0 sc0 ls0 ws0">NAME OF SCHOOL</div>
                        <div class="t m0 x21 hb y64 ff4 fs2 fc0 sc0 ls0 ws0">(Write in full)</div>
                    </div>
                    <div class="c xa y61 we h25">
                        <div class="t m0 x10 hb y63 ff4 fs2 fc0 sc0 ls0 ws0">BASIC EDUCATION/DEGREE/COURSE</div>
                        <div class="t m0 x22 hb y64 ff4 fs2 fc0 sc0 ls0 ws0">(Write in full)</div>
                    </div>
                    <div class="c x1a y5f w11 h24"><div class="t m0 x7 h11 y65 ff4 fs0 fc0 sc0 ls0 ws0">PERIOD OF ATTENDANCE</div></div>
                    <div class="c x1 y61 w2 h25">
                        <div class="t m0 x2 h3 y66 ff9 fs0 fc0 sc0 ls0 ws0">HIGHEST LEVEL/</div>
                        <div class="t m0 x7 h3 y67 ff9 fs0 fc0 sc0 ls0 ws0">UNITS EARNED</div>
                        <div class="t m0 x7 h3 y68 ff9 fs0 fc0 sc0 ls0 ws0">(if not graduated)</div>
                    </div>
                    <div class="c x1b y61 w17 h25">
                        <div class="t m0 x0 h3 y69 ff9 fs0 fc0 sc0 ls0 ws0">YEAR</div>
                        <div class="t m0 x2 h3 y6a ff9 fs0 fc0 sc0 ls0 ws0">GRADUATED</div>
                    </div>
                    <div class="c x23 y61 w18 h25">
                        <div class="t m0 x7 h11 y6b ff4 fs0 fc0 sc0 ls0 ws0">SCHOLARSHIP/</div>
                        <div class="t m0 xc h11 y6c ff4 fs0 fc0 sc0 ls0 ws0">ACADEMIC</div>
                        <div class="t m0 x0 h11 y6d ff4 fs0 fc0 sc0 ls0 ws0">HONORS</div>
                        <div class="t m0 xc h11 y6e ff4 fs0 fc0 sc0 ls0 ws0">RECEIVED</div>
                    </div>
                    <div class="c x1a y61 w19 h26"><div class="t m0 x0 hb y6f ff4 fs2 fc0 sc0 ls0 ws0">From</div></div>
                    <div class="c x5 y61 w5 h26"><div class="t m0 x10 hb y6f ff4 fs2 fc0 sc0 ls0 ws0">To</div></div>
                    <div class="c x8 y70 wd h27"><div class="t m0 x2 hb y71 ff4 fs2 fc0 sc0 ls0 ws0">ELEMENTARY</div></div>
                    <div class="c x9 y70 wb h27"><div class="t m0 x2 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0"><?= $row['elementary_name_of_school'] ?></div></div>
                    <div class="c xa y70 we h27"><div class="t m0 x2 ha y72 ff4 fs3 fc0 sc0 ls0 ws0"><?= $row['elementary_basic_education'] ?></div></div>
                    <div class="c x1a y70 w19 h27"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0"><?= $row['elementary_period_attendance_from'] ?></div></div>
                    <div class="c x5 y70 w5 h27"><div class="t m0 x7 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0"><?= $row['elementary_period_attendance_to'] ?></div></div>
                    <div class="c x1 y70 w2 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['elementary_highest_level'] ?></div></div>
                    <div class="c x1b y70 w17 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['elementary_year_graduated'] ?></div></div>
                    <div class="c x23 y70 w18 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['elementary_honor_received'] ?></div></div>
                    <div class="c x8 y74 wd h28"><div class="t m0 x2 hb y71 ff4 fs2 fc0 sc0 ls0 ws0">SECONDARY</div></div>
                    <div class="c x9 y74 wb h28"><div class="t m0 x2 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0"><?= $row['secondary_name_of_school'] ?></div></div>
                    <div class="c xa y74 we h28"><div class="t m0 x2 ha y72 ff4 fs3 fc0 sc0 ls0 ws0"><?= $row['secondary_basic_education'] ?></div></div>
                    <div class="c x1a y74 w19 h28"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0"><?= $row['secondary_period_attendance_from'] ?></div></div>
                    <div class="c x5 y74 w5 h28"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0"><?= $row['secondary_period_attendance_to'] ?></div></div>
                    <div class="c x1 y74 w2 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['secondary_highest_level'] ?></div></div>
                    <div class="c x1b y74 w17 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['secondary_year_graduated'] ?></div></div>
                    <div class="c x23 y74 w18 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['secondary_honor_received'] ?></div></div>
                    <div class="c x8 y75 wd h27">
                        <div class="t m0 x2 hb y76 ff4 fs2 fc0 sc0 ls0 ws0">VOCATIONAL /</div>
                        <div class="t m0 x2 hb y25 ff4 fs2 fc0 sc0 ls0 ws0">TRADE COURSE</div>
                    </div>
                    <div class="c x9 y75 wb h27"><div class="t m0 x2 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0"><?= $row['vocational_name_of_school'] ?></div></div>
                    <div class="c xa y75 we h27"><div class="t m0 x2 ha y77 ff4 fs3 fc0 sc0 ls0 ws0"><?= $row['vocational_basic_education'] ?></div></div>
                    <div class="c x1a y75 w19 h27"><div class="t m0 x2 h21 y77 ff1 fs3 fc0 sc0 ls0 ws0"><?= $row['vocational_period_attendance_from'] ?></div></div>
                    <div class="c x5 y75 w5 h27"><div class="t m0 x2 h21 y77 ff1 fs3 fc0 sc0 ls0 ws0"><?= $row['vocational_period_attendance_to'] ?></div></div>
                    <div class="c x1 y75 w2 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['vocational_highest_level'] ?></div></div>
                    <div class="c x1b y75 w17 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['vocational_year_graduated'] ?></div></div>
                    <div class="c x23 y75 w18 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['vocational_honor_received'] ?></div></div>
                    <div class="c x8 y78 wd h28"><div class="t m0 x2 hb y71 ff4 fs2 fc0 sc0 ls0 ws0">COLLEGE</div></div>
                    <div class="c x9 y78 wb h28"><div class="t m0 x2 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0"><?= $row['college_name_of_school'] ?></div></div>
                    <div class="c xa y78 we h28"><div class="t m0 x24 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0"><?= $row['college_basic_education'] ?></div></div>
                    <div class="c x1a y78 w19 h28"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0"><?= $row['college_period_attendance_from'] ?></div></div>
                    <div class="c x5 y78 w5 h28"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0"><?= $row['college_period_attendance_to'] ?></div></div>
                    <div class="c x1 y78 w2 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['college_highest_level'] ?></div></div>
                    <div class="c x1b y78 w17 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['college_year_graduated'] ?></div></div>
                    <div class="c x23 y78 w18 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['college_honor_received'] ?></div></div>
                    <div class="c x8 y79 wd h28"><div class="t m0 x2 hb y7a ff4 fs2 fc0 sc0 ls0 ws0">GRADUATE STUDIES</div></div>
                    <div class="c x9 y79 wb h28"><div class="t m0 x25 h7 y7a ff1 fs2 fc0 sc0 ls0 ws0"><?= $row['graduate_studies_name_of_school'] ?></div></div>
                    <div class="c xa y79 we h28"><div class="t m0 x26 h7 y7a ff1 fs2 fc0 sc0 ls0 ws0"><?= $row['graduate_studies_basic_education'] ?></div></div>
                    <div class="c x1a y79 w19 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['graduate_studies_period_attendance_from'] ?></div></div>
                    <div class="c x5 y79 w5 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['graduate_studies_period_attendance_to'] ?></div></div>
                    <div class="c x1 y79 w2 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['graduate_studies_highest_level'] ?></div></div>
                    <div class="c x1b y79 w17 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['graduate_studies_year_graduated'] ?></div></div>
                    <div class="c x23 y79 w18 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0"><?= $row['graduate_studies_honor_received'] ?></div></div>
                    <div class="c x3 y7c w3 h29"><div class="t m0 x27 h7 y7d ff5 fs2 fc3 sc0 ls0 ws0">(Continue on separate sheet if necessary)</div></div>
                    <div class="c x3 y7e w13 h2a"><div class="t m0 x28 hd y7f ff5 fs4 fc0 sc0 ls0 ws0">SIGNATURE</div></div>
                    <div class="c x1a y7e w11 h2a"><div class="t m0 x29 hd y7f ff5 fs4 fc0 sc0 ls0 ws0">DATE</div></div>
                    <div class="c x1 y7e w6 h2a"><div class="t m0 x21 hb y80 ff4 fs2 fc0 sc0 ls0 ws0">11/22/2022</div></div>
                    <div class="c x3 y81 w3 h29"><div class="t m0 x2a h3 y82 ff6 fs0 fc0 sc0 ls0 ws0">CS FORM 212 (Revised 2017), Page 1 of 4</div></div>
                    <div class="c x0 y83 w1 h2b">
                        
                    <div class="t m1 x24 h2c y84 ffa fs6 fc0 sc0 ls0 ws0">CS<span class="_ _0"> </span>Form<span class="_ _0"> </span>No.<span class="_ _0"> </span>212</div>
                        <div class="t m1 x24 h2d y85 ffa fs7 fc0 sc0 ls0 ws0">Revised<span class="_ _1"> </span>2017</div>
                        <div class="t m1 x2b h2e y86 ff9 fs8 fc0 sc0 ls0 ws0">Philippines</div>
                        <div class="t m1 x2c h2f y87 ffb fs8 fc0 sc0 ls0 ws0">Filipino<span class="_ _2"> </span> Dual Citizenship</div>
                        <div class="t m1 x2d h2f y88 ffb fs8 fc0 sc0 ls0 ws0">Male</div>
                        <div class="t m1 x2e h2f y89 ffb fs8 fc0 sc0 ls0 ws0">Female</div>
                        <div class="t m1 x2d h2f y8a ffb fs8 fc0 sc0 ls0 ws0">Single</div>
                        <div class="t m1 x2e h2f y8b ffb fs8 fc0 sc0 ls0 ws0">Married</div>
                        <div class="t m1 x2d h2f y8c ffb fs8 fc0 sc0 ls0 ws0">Widowed</div>
                        <div class="t m1 x2d h2f y8d ffb fs8 fc0 sc0 ls0 ws0">Other/s:</div>
                        <div class="t m1 x2e h2f y8e ffb fs8 fc0 sc0 ls0 ws0">Separated</div>
                        <div class="t m1 x2f h2f y8f ffb fs8 fc0 sc0 ls0 ws0">by birth</div>
                        <div class="t m1 x30 h2f y90 ffb fs8 fc0 sc0 ls0 ws0">by naturalization</div>
                    </div>
                    <a class="l" href="mailto:jufreyninsbayog@gmail.com">
                        <div class="d m2" style="border-style: none; position: absolute; left: 366.8207px; bottom: 426.3795px; width: 104.1307px; height: 10.3572px; background-color: rgba(255, 255, 255, 0.000001);"></div>
                    </a>
                </div>
                <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
             </div>
          
            <div id="pf2" class="pf w1a h30" data-page-no="2">
            <div class="pc pc2 w1a h30">
            <img class="bi x0 y91 w1b h31" alt="" src="bg2.png" />
                    <div class="c x3 y92 w1c h32"><div class="t m0 x2 h33 y93 ff5 fs9 fc1 sc0 ls0 ws0">IV. CIVIL SERVICE ELIGIBILITY</div></div>
                    <div class="c x3 y94 w1d h34"><div class="t m0 x2 h35 y95 ff4 fsa fc0 sc0 ls0 ws0">27.</div></div>
                    <div class="c x28 y96 w1e h36">
                        <div class="t m0 x0 h35 y97 ff4 fsa fc0 sc0 ls0 ws0">CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER</div>
                        <div class="t m0 x31 h35 y98 ff4 fsa fc0 sc0 ls0 ws0">SPECIAL LAWS/ CES/ CSEE</div>
                        <div class="t m0 x32 h35 y99 ff4 fsa fc0 sc0 ls0 ws0">BARANGAY ELIGIBILITY / DRIVER&apos;S LICENSE</div>
                    </div>
                    <div class="c x33 y96 w1f h36">
                        <div class="t m0 x32 h35 y9a ff4 fsa fc0 sc0 ls0 ws0">RATING</div>
                        <div class="t m0 x3 h35 y9b ff4 fsa fc0 sc0 ls0 ws0">(If Applicable)</div>
                    </div>
                    <div class="c xa y96 w20 h36">
                        <div class="t m0 x34 h35 y97 ff4 fsa fc0 sc0 ls0 ws0">DATE OF</div>
                        <div class="t m0 x0 h35 y98 ff4 fsa fc0 sc0 ls0 ws0">EXAMINATION /</div>
                        <div class="t m0 x3 h35 y99 ff4 fsa fc0 sc0 ls0 ws0">CONFERMENT</div>
                    </div>
                    <div class="c x35 y96 w21 h36"><div class="t m0 x28 h35 y98 ff4 fsa fc0 sc0 ls0 ws0">PLACE OF EXAMINATION / CONFERMENT</div></div>
                    <div class="c x36 y94 w22 h34"><div class="t m0 x37 h35 y99 ff4 fsa fc0 sc0 ls0 ws0">LICENSE (if applicable)</div></div>
                    <div class="c x36 y96 w23 h37"><div class="t m0 x10 h35 y9c ff4 fsa fc0 sc0 ls0 ws0">NUMBER</div></div>
                    <div class="c x38 y96 w24 h37">
                        <div class="t m0 xc h35 y9d ff4 fsa fc0 sc0 ls0 ws0">Date of</div>
                        <div class="t m0 xc h35 y95 ff4 fsa fc0 sc0 ls0 ws0">Validity</div>
                    </div>
                    <div class="c x3 y9e w25 h38"><div class="t m0 x39 h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['career_1'] ?></div></div>
                    <div class="c x33 y9e w1f h38"><div class="t m0 x29 h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['rating_1'] ?></div></div>
                    <div class="c xa y9e w20 h38"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['date_of_examination_1'] ?></div></div>
                    <div class="c x35 y9e w21 h38"><div class="t m0 x3a h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['place_of_examination_1'] ?></div></div>
                    <div class="c x36 y9e w23 h38"><div class="t m0 x34 h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['license_number_1'] ?></div></div>
                    <div class="c x38 y9e w24 h38"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['license_validity_1'] ?></div></div>
                    <div class="c x3 ya1 w25 h3b"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['career_2'] ?></div></div>
                    <div class="c x33 ya1 w1f h3b"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['rating_2'] ?></div></div>
                    <div class="c xa ya1 w20 h3b"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['date_of_examination_2'] ?></div></div>
                    <div class="c x35 ya1 w21 h3b"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['place_of_examination_2'] ?></div></div>
                    <div class="c x36 ya1 w23 h3b"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['license_number_2'] ?></div></div>
                    <div class="c x38 ya1 w24 h3b"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['license_validity_2'] ?></div></div>
                    <div class="c x3 ya3 w25 h38"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['career_3'] ?></div></div>
                    <div class="c x33 ya3 w1f h38"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['rating_3'] ?></div></div>
                    <div class="c xa ya3 w20 h38"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['date_of_examination_3'] ?></div></div>
                    <div class="c x35 ya3 w21 h38"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['place_of_examination_3'] ?></div></div>
                    <div class="c x36 ya3 w23 h38"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['license_number_3'] ?></div></div>
                    <div class="c x38 ya3 w24 h38"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['license_validity_3'] ?></div></div>
                    <div class="c x3 ya4 w25 h3b"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['career_4'] ?></div></div>
                    <div class="c x33 ya4 w1f h3b"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['rating_4'] ?></div></div>
                    <div class="c xa ya4 w20 h3b"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['date_of_examination_4'] ?></div></div>
                    <div class="c x35 ya4 w21 h3b"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['place_of_examination_4'] ?></div></div>
                    <div class="c x36 ya4 w23 h3b"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['license_number_4'] ?></div></div>
                    <div class="c x38 ya4 w24 h3b"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['license_validity_4'] ?></div></div>
                    <div class="c x3 ya5 w25 h38"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['career_5'] ?></div></div>
                    <div class="c x33 ya5 w1f h38"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['rating_5'] ?></div></div>
                    <div class="c xa ya5 w20 h38"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['date_of_examination_5'] ?></div></div>
                    <div class="c x35 ya5 w21 h38"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['place_of_examination_5'] ?></div></div>
                    <div class="c x36 ya5 w23 h38"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['license_number_5'] ?></div></div>
                    <div class="c x38 ya5 w24 h38"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['license_validity_5'] ?></div></div>
                    <div class="c x3 ya6 w25 h38"><div class="t m0 x39 h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['career_6'] ?></div></div>
                    <div class="c x33 ya6 w1f h38"><div class="t m0 x29 h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['rating_6'] ?></div></div>
                    <div class="c xa ya6 w20 h38"><div class="t m0 x28 h3a ya7 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['date_of_examination_6'] ?></div></div>
                    <div class="c x35 ya6 w21 h38"><div class="t m0 x3a h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['place_of_examination_6'] ?></div></div>
                    <div class="c x36 ya6 w23 h38"><div class="t m0 x34 h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['license_number_6'] ?></div></div>
                    <div class="c x38 ya6 w24 h38"><div class="t m0 x10 h3a ya7 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['license_validity_6'] ?></div></div>
                    <div class="c x3 ya8 w25 h3b"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['career_7'] ?></div></div>
                    <div class="c x33 ya8 w1f h3b"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['rating_7'] ?></div></div>
                    <div class="c xa ya8 w20 h3b"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['date_of_examination_7'] ?></div></div>
                    <div class="c x35 ya8 w21 h3b"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['place_of_examination_7'] ?></div></div>
                    <div class="c x36 ya8 w23 h3b"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['license_number_7'] ?></div></div>
                    <div class="c x38 ya8 w24 h3b"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['license_validity_7'] ?></div></div>
                    <div class="c x3 ya9 w1c h3c"><div class="t m0 x3b h3d yaa ff5 fsa fc3 sc0 ls0 ws0">(Continue on separate sheet if necessary)</div></div>
                    <div class="c x3 yab w1c h32"><div class="t m0 x2 h33 yac ff5 fs9 fc1 sc0 ls0 ws0">V. WORK EXPERIENCE</div></div>
                    <div class="c x3 yad w26 h3c">
                        <div class="t m0 x2 h39 yae ff5 fsb fc1 sc0 ls0 ws0">(Include private employment. Start from your recent work) Description of duties should be indicated in the attached Work Experience sheet.</div>
                    </div>
                    <div class="c x3 yaf w1d h32"><div class="t m0 x2 h35 y95 ff4 fsa fc0 sc0 ls0 ws0">28.</div></div>
                    <div class="c x28 yb0 w27 h3e">
                        <div class="t m0 x3 h35 yb1 ff4 fsa fc0 sc0 ls0 ws0">INCLUSIVE DATES</div>
                        <div class="t m0 x34 h35 yb2 ff4 fsa fc0 sc0 ls0 ws0">(mm/dd/yyyy)</div>
                    </div>
                    <div class="c x3c yb3 w28 h3f">
                        <div class="t m0 x11 h35 yb4 ff4 fsa fc0 sc0 ls0 ws0">POSITION TITLE</div>
                        <div class="t m0 x15 h35 yb5 ff4 fsa fc0 sc0 ls0 ws0">(Write in full/Do not abbreviate)</div>
                    </div>
                    <div class="c xa yb3 w29 h3f">
                        <div class="t m0 x0 h35 yb4 ff4 fsa fc0 sc0 ls0 ws0">DEPARTMENT / AGENCY / OFFICE / COMPANY</div>
                        <div class="t m0 x3d h35 yb5 ff4 fsa fc0 sc0 ls0 ws0">(Write in full/Do not abbreviate)</div>
                    </div>
                    <div class="c x3e yb3 w2a h3f">
                        <div class="t m0 xc h40 yb6 ff4 fsd fc0 sc0 ls0 ws0">MONTHLY</div>
                        <div class="t m0 x0 h40 yb7 ff4 fsd fc0 sc0 ls0 ws0">SALARY</div>
                    </div>
                    <div class="c x3f yb3 w2b h3f">
                        <div class="t m0 x2 h41 yb8 ff4 fse fc0 sc0 ls0 ws0">SALARY/ JOB/ PAY</div>
                        <div class="t m0 x0 h41 yb9 ff4 fse fc0 sc0 ls0 ws0">GRADE (if</div>
                        <div class="t m0 x24 h41 yba ff4 fse fc0 sc0 ls0 ws0">applicable)&amp; STEP</div>
                        <div class="t m0 xe h41 ybb ff4 fse fc0 sc0 ls0 ws0">(Format &quot;00-0&quot;)/</div>
                        <div class="t m0 xc h41 ybc ff4 fse fc0 sc0 ls0 ws0">INCREMENT</div>
                    </div>
                    <div class="c x36 yb3 w23 h3f">
                        <div class="t m0 x3 h40 yb6 ff4 fsd fc0 sc0 ls0 ws0">STATUS OF</div>
                        <div class="t m0 xc h40 yb7 ff4 fsd fc0 sc0 ls0 ws0">APPOINTMENT</div>
                    </div>
                    <div class="c x38 yb3 w24 h3f">
                        <div class="t m0 x0 h40 ybd ff4 fsd fc0 sc0 ls0 ws0">GOV&apos;T</div>
                        <div class="t m0 xc h40 ybe ff4 fsd fc0 sc0 ls0 ws0">SERVICE</div>
                        <div class="t m0 x3 h40 ybf ff4 fsd fc0 sc0 ls0 ws0">(Y/ N)</div>
                    </div>
                    <div class="c x3 yb3 w2c h42"><div class="t m0 x37 h35 yc0 ff4 fsa fc0 sc0 ls0 ws0">From</div></div>
                    <div class="c x26 yb3 w2d h42"><div class="t m0 x32 h35 yc0 ff4 fsa fc0 sc0 ls0 ws0">To</div></div>
                    <div class="c x3 yc1 w2c h43"><div class="t m0 x40 h3a yc2 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_1'] ?></div></div>
                    <div class="c x26 yc1 w2d h43"><div class="t m0 x40 h3a yc2 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_1'] ?></div></div>
                    <div class="c x3c yc1 w28 h43"><div class="t m0 xd h39 yc3 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_1'] ?></div></div>
                    <div class="c xa yc1 w29 h43">
                        <div class="t m0 xe h39 yc4 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_1'] ?></div>
                    </div>
                    <div class="c x3e yc1 w2a h43"><div class="t m0 x40 h3d yc6 ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_1'] ?></div></div>
                    <div class="c x3f yc1 w2b h43"><div class="t m0 x0 h39 yc3 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_1'] ?></div></div>
                    <div class="c x36 yc1 w23 h43"><div class="t m0 x32 h39 yc3 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_1'] ?></div></div>
                    <div class="c x38 yc1 w24 h43"><div class="t m0 x37 h39 yc3 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_1'] ?></div></div>
                    <div class="c x3 yc7 w2c h44"><div class="t m0 x40 h3a yc8 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_2'] ?></div></div>
                    <div class="c x26 yc7 w2d h44"><div class="t m0 x40 h3a yc8 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_2'] ?></div></div>
                    <div class="c x3c yc7 w28 h44"><div class="t m0 xd h39 yc9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_2'] ?></div></div>
                    <div class="c xa yc7 w29 h44"><div class="t m0 x24 h39 yc9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_2'] ?></div></div>
                    <div class="c x3e yc7 w2a h44"><div class="t m0 x40 h3d yca ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_2'] ?></div></div>
                    <div class="c x3f yc7 w2b h44"><div class="t m0 x0 h39 yc9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_2'] ?></div></div>
                    <div class="c x36 yc7 w23 h44"><div class="t m0 x32 h39 yc9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_2'] ?></div></div>
                    <div class="c x38 yc7 w24 h44"><div class="t m0 x37 h39 yc9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_2'] ?></div></div>
                    <div class="c x3 ycb w2c h38"><div class="t m0 x40 h3a ya7 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_3'] ?></div></div>
                    <div class="c x26 ycb w2d h38"><div class="t m0 x40 h3a ya7 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_3'] ?></div></div>
                    <div class="c x3c ycb w28 h38"><div class="t m0 xd h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_3'] ?></div></div>
                    <div class="c xa ycb w29 h38">
                        <div class="t m0 xe h39 ycc ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_3'] ?></div>
                    </div>
                    <div class="c x3e ycb w2a h38"><div class="t m0 x40 h3d yce ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_3'] ?></div></div>
                    <div class="c x3f ycb w2b h38"><div class="t m0 x0 h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_3'] ?></div></div>
                    <div class="c x36 ycb w23 h38"><div class="t m0 x32 h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_3'] ?></div></div>
                    <div class="c x38 ycb w24 h38"><div class="t m0 x37 h39 y9f ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_3'] ?></div></div>
                    <div class="c x3 ycf w2c h45"><div class="t m0 x40 h3a yd0 ff1 fsc fc0 sc0 ls0 ws0"><?php $row['inclusive_dates_from_4'] ?></div></div>
                    <div class="c x26 ycf w2d h45"><div class="t m0 x40 h3a yd0 ff1 fsc fc0 sc0 ls0 ws0"><?php $row['inclusive_dates_to_4'] ?></div></div>
                    <div class="c x3c ycf w28 h45"><div class="t m0 xd h39 yd1 ff1 fsb fc0 sc0 ls0 ws0"><?php $row['inclusive_dates_position_title_4'] ?></div></div>
                    <div class="c xa ycf w29 h45">
                        <div class="t m0 xe h39 yd2 ff1 fsb fc0 sc0 ls0 ws0"><?php $row['inclusive_dates_department_4'] ?></div>
                    </div>
                    <div class="c x3e ycf w2a h45"><div class="t m0 x40 h3d yd4 ff1 fsa fc0 sc0 ls0 ws0"><?php $row['inclusive_dates_monthly_4'] ?></div></div>
                    <div class="c x3f ycf w2b h45"><div class="t m0 x0 h39 yd1 ff1 fsb fc0 sc0 ls0 ws0"><?php $row['inclusive_dates_salary_job_paygrade_4'] ?></div></div>
                    <div class="c x36 ycf w23 h45"><div class="t m0 x32 h39 yd1 ff1 fsb fc0 sc0 ls0 ws0"><?php $row['inclusive_dates_status_of_appointment_4'] ?></div></div>
                    <div class="c x38 ycf w24 h45"><div class="t m0 x37 h39 yd1 ff1 fsb fc0 sc0 ls0 ws0"><?php $row['inclusive_dates_government_service_4'] ?></div></div>
                    <div class="c x3 yd5 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_5'] ?></div></div>
                    <div class="c x26 yd5 w2d h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_5'] ?></div></div>
                    <div class="c x3c yd5 w28 h46"><div class="t m0 xd h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_5'] ?></div></div>
                    <div class="c xa yd5 w29 h46">
                        <div class="t m0 xe h39 yd8 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_5'] ?></div>
                    </div>
                    <div class="c x3e yd5 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_5'] ?></div></div>
                    <div class="c x3f yd5 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_5'] ?></div></div>
                    <div class="c x36 yd5 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_5'] ?></div></div>
                    <div class="c x38 yd5 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_5'] ?></div></div>
                    <div class="c x3 ydb w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_6'] ?></div></div>
                    <div class="c x26 ydb w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_6'] ?></div></div>
                    <div class="c x3c ydb w28 h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_6'] ?></div></div>
                    <div class="c xa ydb w29 h46"><div class="t m0 x19 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_6'] ?></div></div>
                    <div class="c x3e ydb w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_6'] ?></div></div>
                    <div class="c x3f ydb w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_6'] ?></div></div>
                    <div class="c x36 ydb w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_6'] ?></div></div>
                    <div class="c x38 ydb w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_6'] ?></div></div>
                    <div class="c x3 ydc w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_7'] ?></div></div>
                    <div class="c x26 ydc w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_7'] ?></div></div>
                    <div class="c x3c ydc w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_7'] ?></div></div>
                    <div class="c xa ydc w29 h46"><div class="t m0 x42 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_7'] ?></div></div>
                    <div class="c x3e ydc w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_7'] ?></div></div>
                    <div class="c x3f ydc w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_7'] ?></div></div>
                    <div class="c x36 ydc w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_7'] ?></div></div>
                    <div class="c x38 ydc w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_7'] ?></div></div>
                    <div class="c x3 ydd w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_8'] ?></div></div>
                    <div class="c x26 ydd w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_8'] ?></div></div>
                    <div class="c x3c ydd w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_8'] ?></div></div>
                    <div class="c xa ydd w29 h46"><div class="t m0 x43 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_8'] ?></div></div>
                    <div class="c x3e ydd w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_8'] ?></div></div>
                    <div class="c x3f ydd w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_8'] ?></div></div>
                    <div class="c x36 ydd w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_8'] ?></div></div>
                    <div class="c x38 ydd w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_8'] ?></div></div>
                    <div class="c x3 yde w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_9'] ?></div></div>
                    <div class="c x26 yde w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_9'] ?></div></div>
                    <div class="c x3c yde w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_9'] ?></div></div>
                    <div class="c xa yde w29 h46"><div class="t m0 x20 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_9'] ?></div></div>
                    <div class="c x3e yde w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_9'] ?></div></div>
                    <div class="c x3f yde w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_9'] ?></div></div>
                    <div class="c x36 yde w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_9'] ?></div></div>
                    <div class="c x38 yde w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_9'] ?></div></div>
                    <div class="c x3 ydf w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_10'] ?></div></div>
                    <div class="c x26 ydf w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_10'] ?></div></div>
                    <div class="c x3c ydf w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_10'] ?></div></div>
                    <div class="c xa ydf w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_10'] ?></div></div>
                    <div class="c x3e ydf w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_10'] ?></div></div>
                    <div class="c x3f ydf w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_10'] ?></div></div>
                    <div class="c x36 ydf w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_10'] ?></div></div>
                    <div class="c x38 ydf w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_10'] ?></div></div>
                    <div class="c x3 ye0 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_11']?></div></div>
                    <div class="c x26 ye0 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_11']?></div></div>
                    <div class="c x3c ye0 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_11']?></div></div>
                    <div class="c xa ye0 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_11']?></div></div>
                    <div class="c x3e ye0 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_11']?></div></div>
                    <div class="c x3f ye0 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_11']?></div></div>
                    <div class="c x36 ye0 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_11']?></div></div>
                    <div class="c x38 ye0 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_11']?></div></div>
                    <div class="c x3 ye1 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_12'] ?></div></div>
                    <div class="c x26 ye1 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_12'] ?></div></div>
                    <div class="c x3c ye1 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_12'] ?></div></div>
                    <div class="c xa ye1 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_12'] ?></div></div>
                    <div class="c x3e ye1 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_12'] ?></div></div>
                    <div class="c x3f ye1 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_12'] ?></div></div>
                    <div class="c x36 ye1 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_12'] ?></div></div>
                    <div class="c x38 ye1 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_12'] ?></div></div>
                    <div class="c x3 ye2 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_13'] ?></div></div>
                    <div class="c x26 ye2 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_13'] ?></div></div>
                    <div class="c x3c ye2 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_13'] ?></div></div>
                    <div class="c xa ye2 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_13'] ?></div></div>
                    <div class="c x3e ye2 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_13'] ?></div></div>
                    <div class="c x3f ye2 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_13'] ?></div></div>
                    <div class="c x36 ye2 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_13'] ?></div></div>
                    <div class="c x38 ye2 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_13'] ?></div></div>
                    <div class="c x3 ye3 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_14']?></div></div>
                    <div class="c x26 ye3 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_14']?></div></div>
                    <div class="c x3c ye3 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_14']?></div></div>
                    <div class="c xa ye3 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_14']?></div></div>
                    <div class="c x3e ye3 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_14']?></div></div>
                    <div class="c x3f ye3 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_14']?></div></div>
                    <div class="c x36 ye3 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_14']?></div></div>
                    <div class="c x38 ye3 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_14']?></div></div>
                    <div class="c x3 ye4 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_15'] ?></div></div>
                    <div class="c x26 ye4 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_15'] ?></div></div>
                    <div class="c x3c ye4 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_15'] ?></div></div>
                    <div class="c xa ye4 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_15'] ?></div></div>
                    <div class="c x3e ye4 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_15'] ?></div></div>
                    <div class="c x3f ye4 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_15'] ?></div></div>
                    <div class="c x36 ye4 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_15'] ?></div></div>
                    <div class="c x38 ye4 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_15'] ?></div></div>
                    <div class="c x3 ye5 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_16'] ?></div></div>
                    <div class="c x26 ye5 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_16'] ?></div></div>
                    <div class="c x3c ye5 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_16'] ?></div></div>
                    <div class="c xa ye5 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_16'] ?></div></div>
                    <div class="c x3e ye5 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_16'] ?></div></div>
                    <div class="c x3f ye5 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_16'] ?></div></div>
                    <div class="c x36 ye5 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_16'] ?></div></div>
                    <div class="c x38 ye5 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_16'] ?></div></div>
                    <div class="c x3 ye6 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_17'] ?></div></div>
                    <div class="c x26 ye6 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_17'] ?></div></div>
                    <div class="c x3c ye6 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_17'] ?></div></div>
                    <div class="c xa ye6 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_17'] ?></div></div>
                    <div class="c x3e ye6 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_17'] ?></div></div>
                    <div class="c x3f ye6 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_17'] ?></div></div>
                    <div class="c x36 ye6 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_17'] ?></div></div>
                    <div class="c x38 ye6 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_17'] ?></div></div>
                    <div class="c x3 ye7 w2c h47"><div class="t m0 x40 h3a ye8 ff1 fsc fc0 sc0 ls0 ws0"> <?= $row['inclusive_dates_from_18']?></div></div>
                    <div class="c x26 ye7 w2d h47"><div class="t m0 x0 h3a ye8 ff1 fsc fc0 sc0 ls0 ws0"> <?= $row['inclusive_dates_to_18']?></div></div>
                    <div class="c x3c ye7 w28 h47"><div class="t m0 x32 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0"> <?= $row['inclusive_dates_position_title_18']?></div></div>
                    <div class="c xa ye7 w29 h47"><div class="t m0 x10 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0"> <?= $row['inclusive_dates_department_18']?></div></div>
                    <div class="c x3e ye7 w2a h47"><div class="t m0 x40 h3d yea ff1 fsa fc0 sc0 ls0 ws0"> <?= $row['inclusive_dates_monthly_18']?></div></div>
                    <div class="c x3f ye7 w2b h47"><div class="t m0 x0 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0"> <?= $row['inclusive_dates_salary_job_paygrade_18']?></div></div>
                    <div class="c x36 ye7 w23 h47"><div class="t m0 x32 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0"> <?= $row['inclusive_dates_status_of_appointment_18']?></div></div>
                    <div class="c x38 ye7 w24 h47"><div class="t m0 x37 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0"> <?= $row['inclusive_dates_government_service_18']?></div></div>
                    <div class="c x3 yeb w2c h48"><div class="t m0 x40 h3a yec ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_19'] ?></div></div>
                    <div class="c x26 yeb w2d h48"><div class="t m0 x0 h3a yec ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_19'] ?></div></div>
                    <div class="c x3c yeb w28 h48"><div class="t m0 x32 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_19'] ?></div></div>
                    <div class="c xa yeb w29 h48"><div class="t m0 x10 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_19'] ?></div></div>
                    <div class="c x3e yeb w2a h48"><div class="t m0 x40 h3d yee ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_19'] ?></div></div>
                    <div class="c x3f yeb w2b h48"><div class="t m0 x0 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_19'] ?></div></div>
                    <div class="c x36 yeb w23 h48"><div class="t m0 x32 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_19'] ?></div></div>
                    <div class="c x38 yeb w24 h48"><div class="t m0 x37 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_19'] ?></div></div>
                    <div class="c x3 yef w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_20'] ?></div></div>
                    <div class="c x26 yef w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_20'] ?></div></div>
                    <div class="c x3c yef w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_20'] ?></div></div>
                    <div class="c xa yef w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_20'] ?></div></div>
                    <div class="c x3e yef w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_20'] ?></div></div>
                    <div class="c x3f yef w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_20'] ?></div></div>
                    <div class="c x36 yef w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_20'] ?></div></div>
                    <div class="c x38 yef w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_20'] ?></div></div>
                    <div class="c x3 yf0 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_21'] ?></div></div>
                    <div class="c x26 yf0 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_21'] ?></div></div>
                    <div class="c x3c yf0 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_21'] ?></div></div>
                    <div class="c xa yf0 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_21'] ?></div></div>
                    <div class="c x3e yf0 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_21'] ?></div></div>
                    <div class="c x3f yf0 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_21'] ?></div></div>
                    <div class="c x36 yf0 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_21'] ?></div></div>
                    <div class="c x38 yf0 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_21'] ?></div></div>
                    <div class="c x3 yf1 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_22'] ?></div></div>
                    <div class="c x26 yf1 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_22'] ?></div></div>
                    <div class="c x3c yf1 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_22'] ?></div></div>
                    <div class="c xa yf1 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_22'] ?></div></div>
                    <div class="c x3e yf1 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_22'] ?></div></div>
                    <div class="c x3f yf1 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_22'] ?></div></div>
                    <div class="c x36 yf1 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_22'] ?></div></div>
                    <div class="c x38 yf1 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_22'] ?></div></div>
                    <div class="c x3 yf2 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_23'] ?></div></div>
                    <div class="c x26 yf2 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_23'] ?></div></div>
                    <div class="c x3c yf2 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_23'] ?></div></div>
                    <div class="c xa yf2 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_23'] ?></div></div>
                    <div class="c x3e yf2 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_23'] ?></div></div>
                    <div class="c x3f yf2 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_23'] ?></div></div>
                    <div class="c x36 yf2 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_23'] ?></div></div>
                    <div class="c x38 yf2 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_23'] ?></div></div>
                    <div class="c x3 yf3 w2c h48"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_24'] ?></div></div>
                    <div class="c x26 yf3 w2d h48"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_24'] ?></div></div>
                    <div class="c x3c yf3 w28 h48"><div class="t m0 x32 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_24'] ?></div></div>
                    <div class="c xa yf3 w29 h48"><div class="t m0 x10 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_24'] ?></div></div>
                    <div class="c x3e yf3 w2a h48"><div class="t m0 x40 h3d yee ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_24'] ?></div></div>
                    <div class="c x3f yf3 w2b h48"><div class="t m0 x0 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_24'] ?></div></div>
                    <div class="c x36 yf3 w23 h48"><div class="t m0 x32 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_24'] ?></div></div>
                    <div class="c x38 yf3 w24 h48"><div class="t m0 x37 h39 yed ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_24'] ?></div></div>
                    <div class="c x3 yf4 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_25'] ?></div></div>
                    <div class="c x26 yf4 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_25'] ?></div></div>
                    <div class="c x3c yf4 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_25'] ?></div></div>
                    <div class="c xa yf4 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_25'] ?></div></div>
                    <div class="c x3e yf4 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_25'] ?></div></div>
                    <div class="c x3f yf4 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_25'] ?></div></div>
                    <div class="c x36 yf4 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_25'] ?></div></div>
                    <div class="c x38 yf4 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_25'] ?></div></div>
                    <div class="c x3 yf5 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_26'] ?></div></div>
                    <div class="c x26 yf5 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_26'] ?></div></div>
                    <div class="c x3c yf5 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_26'] ?></div></div>
                    <div class="c xa yf5 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_26'] ?></div></div>
                    <div class="c x3e yf5 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_26'] ?></div></div>
                    <div class="c x3f yf5 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_26'] ?></div></div>
                    <div class="c x36 yf5 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_26'] ?></div></div>
                    <div class="c x38 yf5 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_26'] ?></div></div>
                    <div class="c x3 yf6 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_27'] ?></div></div>
                    <div class="c x26 yf6 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_27'] ?></div></div>
                    <div class="c x3c yf6 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_27'] ?></div></div>
                    <div class="c xa yf6 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_27'] ?></div></div>
                    <div class="c x3e yf6 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_27'] ?></div></div>
                    <div class="c x3f yf6 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_27'] ?></div></div>
                    <div class="c x36 yf6 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_27'] ?></div></div>
                    <div class="c x38 yf6 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_27'] ?></div></div>
                    <div class="c x3 yf7 w2c h49"><div class="t m0 x40 h3a yf8 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_from_28'] ?></div></div>
                    <div class="c x26 yf7 w2d h49"><div class="t m0 xc h3a yf8 ff1 fsc fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_to_28'] ?></div></div>
                    <div class="c x3c yf7 w28 h49"><div class="t m0 x32 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_position_title_28'] ?></div></div>
                    <div class="c xa yf7 w29 h49"><div class="t m0 x10 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_department_28'] ?></div></div>
                    <div class="c x3e yf7 w2a h49"><div class="t m0 x40 h3d yfa ff1 fsa fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_monthly_28'] ?></div></div>
                    <div class="c x3f yf7 w2b h49"><div class="t m0 x0 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_salary_job_paygrade_28'] ?></div></div>
                    <div class="c x36 yf7 w23 h49"><div class="t m0 x32 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_status_of_appointment_28'] ?></div></div>
                    <div class="c x38 yf7 w24 h49"><div class="t m0 x37 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0"><?= $row['inclusive_dates_government_service_28'] ?></div></div>
                    <div class="c x3 yfb w1c h4a"><div class="t m0 x3b h3d yfc ff5 fsa fc3 sc0 ls0 ws0">(Continue on separate sheet if necessary)</div></div>
                    <div class="c x3 yfd w2e h4b"><div class="t m0 x8 h33 yfe ff5 fs9 fc0 sc0 ls0 ws0">SIGNATURE</div></div>
                    <div class="c x35 yfd w2f h4b"><div class="t m0 xd h33 yfe ff5 fs9 fc0 sc0 ls0 ws0">DATE</div></div>
                    <div class="c x3f yfd w30 h4b"><div class="t m0 x2 h3d yff ff5 fsa fc0 sc0 ls0 ws0">November 22, 2022</div></div>
                    <div class="c x3 y100 w1c h4c"><div class="t m0 x44 h4d y101 ff6 fsd fc0 sc0 ls0 ws0">CS FORM 212 (Revised 2017), Page 2 of 4</div></div>
                </div>
                <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
            </div>
            
            <div id="pf3" class="pf w31 h4e" data-page-no="3">
                <div class="pc pc3 w31 h4e">
                    <img class="bi x3 y102 w32 h4f" alt="" src="bg3.png" />
                    <div class="c x10 y103 w33 h50"><div class="t m0 x2 h39 y104 ff5 fsb fc1 sc0 ls0 ws0">VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</div></div>
                    <div class="c x10 y105 w34 h51"><div class="t m0 x7 h52 y106 ff4 fsf fc0 sc0 ls0 ws0">29.</div></div>
                    <div class="c xb y105 w35 h51">
                        <div class="t m0 x1f h52 y107 ff4 fsf fc0 sc0 ls0 ws0">NAME &amp; ADDRESS OF ORGANIZATION</div>
                        <div class="t m0 x3c h52 y108 ff4 fsf fc0 sc0 ls0 ws0">(Write in full)</div>
                    </div>
                    <div class="c x45 y105 w36 h51">
                        <div class="t m0 x46 h52 y109 ff4 fsf fc0 sc0 ls0 ws0">INCLUSIVE DATES</div>
                        <div class="t m0 x28 h52 y10a ff4 fsf fc0 sc0 ls0 ws0">(mm/dd/yyyy)</div>
                    </div>
                    <div class="c x47 y10b w37 h53"><div class="t m0 x2 h54 y10c ff4 fs10 fc0 sc0 ls0 ws0">NUMBER OF HOURS</div></div>
                    <div class="c x3e y10b w38 h53"><div class="t m0 x26 h52 y10d ff4 fsf fc0 sc0 ls0 ws0">POSITION / NATURE OF WORK</div></div>
                    <div class="c x45 y10b w39 h55"><div class="t m0 x37 h52 y10a ff4 fsf fc0 sc0 ls0 ws0">From</div></div>
                    <div class="c x48 y10b w37 h55"><div class="t m0 x32 h52 y10a ff4 fsf fc0 sc0 ls0 ws0">To</div></div>



                    <div class="c x10 y10e w3a h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_name_address_1']?></div></div>
                    <div class="c x45 y10e w39 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_from_1']?></div></div>
                    <div class="c x48 y10e w37 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_to_1']?></div></div>
                    <div class="c x47 y10e w37 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_hours_1']?></div></div>
                    <div class="c x3e y10e w38 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_position_1']?></div></div>


                    <div class="c x10 y110 w3a h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_name_address_2']?></div></div>
                    <div class="c x45 y110 w39 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_from_2']?></div></div>
                    <div class="c x48 y110 w37 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_to_2']?></div></div>
                    <div class="c x47 y110 w37 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_hours_2']?></div></div>
                    <div class="c x3e y110 w38 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_position_2']?></div></div>

                    <div class="c x10 y111 w3a h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_name_address_3'] ?></div></div>
                    <div class="c x45 y111 w39 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_from_3'] ?></div></div>
                    <div class="c x48 y111 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_to_3'] ?></div></div>
                    <div class="c x47 y111 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_hours_3'] ?></div></div>
                    <div class="c x3e y111 w38 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_position_3'] ?></div></div>



                    <div class="c x10 y113 w3a h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_name_address_4'] ?></div></div>
                    <div class="c x45 y113 w39 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_from_4'] ?></div></div>
                    <div class="c x48 y113 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_to_4'] ?></div></div>
                    <div class="c x47 y113 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_hours_4'] ?></div></div>
                    <div class="c x3e y113 w38 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_position_4'] ?></div></div>


                    <div class="c x10 y114 w3a h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_name_address_5'] ?></div></div>
                    <div class="c x45 y114 w39 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_from_5'] ?></div></div>
                    <div class="c x48 y114 w37 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_to_5'] ?></div></div>
                    <div class="c x47 y114 w37 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_hours_5'] ?></div></div>
                    <div class="c x3e y114 w38 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_position_5'] ?></div></div>

                    <div class="c x10 y115 w3a h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_name_address_6'] ?></div></div>
                    <div class="c x45 y115 w39 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_from_6'] ?></div></div>
                    <div class="c x48 y115 w37 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_to_6'] ?></div></div>
                    <div class="c x47 y115 w37 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_hours_6'] ?></div></div>
                    <div class="c x3e y115 w38 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_position_6'] ?></div></div>


                    <div class="c x10 y116 w3a h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_name_address_7'] ?></div></div>
                    <div class="c x45 y116 w39 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_from_7'] ?></div></div>
                    <div class="c x48 y116 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_to_7'] ?></div></div>
                    <div class="c x47 y116 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_hours_7'] ?></div></div>
                    <div class="c x3e y116 w38 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0"><?= $row['voluntary_work_position_7'] ?></div></div>
                    <div class="c x10 y117 w33 h59"><div class="t m0 x49 h5a y118 ff5 fsf fc3 sc0 ls0 ws0">(Continue on separate sheet if necessary)</div></div>
                    <div class="c x10 y119 w33 h5b"><div class="t m0 x2 h39 y11a ff5 fsb fc1 sc0 ls0 ws0">VII. LEARNING AND DEVELOPMENT (L&amp;D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</div></div>
                    <div class="c x10 y11b w34 h5c"><div class="t m0 x7 h52 y11c ff4 fsf fc0 sc0 ls0 ws0">30.</div></div>
                    <div class="c xb y11d w35 h5d">
                        <div class="t m0 x37 h52 y11e ff4 fsf fc0 sc0 ls0 ws0">TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS</div>
                        <div class="t m0 x3c h52 y11f ff4 fsf fc0 sc0 ls0 ws0">(Write in full)</div>
                    </div>
                    <div class="c x45 y11b w36 h5c">
                        <div class="t m0 x4a h52 y120 ff4 fsf fc0 sc0 ls0 ws0">INCLUSIVE DATES OF</div>
                        <div class="t m0 x42 h52 y121 ff4 fsf fc0 sc0 ls0 ws0">ATTENDANCE</div>
                        <div class="t m0 x28 h52 y122 ff4 fsf fc0 sc0 ls0 ws0">(mm/dd/yyyy)</div>
                    </div>
                    <div class="c x47 y11d w37 h5d"><div class="t m0 x2 h54 y123 ff4 fs10 fc0 sc0 ls0 ws0">NUMBER OF HOURS</div></div>
                    <div class="c x3e y11d w3b h5d">
                        <div class="t m0 x10 h5e y124 ff4 fs12 fc0 sc0 ls0 ws0">Type of LD</div>
                        <div class="t m0 x0 h5e y125 ff4 fs12 fc0 sc0 ls0 ws0">( Managerial/</div>
                        <div class="t m0 x0 h5e y126 ff4 fs12 fc0 sc0 ls0 ws0">Supervisory/</div>
                        <div class="t m0 x0 h5e y127 ff4 fs12 fc0 sc0 ls0 ws0">Technical/etc)</div>
                    </div>
                    <div class="c x4b y11d w3c h5d">
                        <div class="t m0 x15 h52 y11e ff4 fsf fc0 sc0 ls0 ws0">CONDUCTED/ SPONSORED BY</div>
                        <div class="t m0 x26 h52 y11f ff4 fsf fc0 sc0 ls0 ws0">(Write in full)</div>
                    </div>



        <?php
  

}

