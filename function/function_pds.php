<?php 


function c2_fetch_civil_service()
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
            <tr height=36 style='mso-height-source:userset;height:27.0pt'>
                <td colspan=5 height=36 class=xl12111111 width=258 style='height:27.0pt;
                width:194pt'><?= $row['career_1'] ?></td>
                <td class=xl7711111 width=90 style='border-left:none;width:68pt'><?= $row['rating_1'] ?></td>
                <td colspan=2 class=xl9311111 width=96 style='border-left:none;width:72pt'><?= $row['date_of_examination_1'] ?></td>
                <td colspan=3 class=xl12011111 width=247 style='border-left:none;width:185pt'><?= $row['place_of_examination_1'] ?></td>
                <td class=xl7011111 width=78 style='border-left:none;width:59pt'><?= $row['license_number_1'] ?></td>
                <td class=xl7911111 width=56 style='border-left:none;width:42pt'><?= $row['license_validity_1'] ?></td>
                <td class=xl1511111></td>
            </tr>

    <?php

}


function c3_fetch_voluntary()
{
    global $con;
    $id = $_SESSION['id'];
            
    $sql = "SELECT * FROM personal_information_tbl INNER JOIN voluntary_work_tbl ON personal_information_tbl.pds_id = voluntary_work_tbl.pds_id
    
    
    
    
    ";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);
    ?>
            
            <tr height=37 style='mso-height-source:userset;height:27.75pt'>
                <td colspan=4 height=37 class=xl1248470 width=407 style='border-right:.5pt solid black;
                height:27.75pt;width:307pt'><?= $row['voluntary_work_name_address_1'] ?></td>
                <td class=xl738470 style='border-top:none;border-left:none'>&nbsp;<?= $row['voluntary_work_from_1'] ?></td>
                <td class=xl738470 style='border-top:none;border-left:none'>&nbsp;<?= $row['voluntary_work_to_1'] ?></td>
                <td class=xl748470 style='border-top:none;border-left:none'>&nbsp;<?= $row['voluntary_work_hours_1'] ?></td>
                <td colspan=4 class=xl1288470 style='border-right:1.0pt solid black;
                border-left:none'>&nbsp;<?= $row['voluntary_work_position_1'] ?></td>
                <td class=xl158470>
                <td class=xl158470>
            </tr>

    <?php

}

function c3_fetch_learning()
{
    global $con;
    $id = $_SESSION['id'];
            
    $sql = "SELECT * FROM personal_information_tbl INNER JOIN learning_tbl ON personal_information_tbl.pds_id = learning_tbl.pds_id
    
    ";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);
    ?>
        <tr height=33 style='mso-height-source:userset;height:24.75pt'>
            <td colspan=4 height=33 class=xl828470 width=407 style='border-right:.5pt solid black;
            height:24.75pt;width:307pt'><?= $row['learning_development_title_1'] ?></td>
            <td class=xl688470 style='border-top:none;border-left:none'><?= $row['learning_development_from_1'] ?></td>
            <td class=xl688470 style='border-top:none;border-left:none'><?= $row['learning_development_to_1'] ?></td>
            <td class=xl708470 style='border-top:none;border-left:none'><?= $row['learning_development_number_of_hours_1'] ?> </td>
            <td class=xl698470 style='border-top:none;border-left:none'>&nbsp;<?= $row['learning_development_type_of_ld_1'] ?></td>
            <td colspan=3 class=xl798470 width=236 style='border-right:1.0pt solid black;
            border-left:none;width:177pt'><?= $row['learning_development_conducted_by_1'] ?></td>
            <td class=xl158470></td>
            <td class=xl158470></td>
        </tr>

    <?php

}

 





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
                <div style=" margin:10px; " >

                  
<table border=0 cellpadding=0 cellspacing=0  style='border-collapse:
 collapse;table-layout:fixed;width:100%;'>
 <col width=23 style='mso-width-source:userset;mso-width-alt:841;width:17pt'>
 <col width=44 style='mso-width-source:userset;mso-width-alt:1609;width:33pt'>
 <col width=68 style='mso-width-source:userset;mso-width-alt:2486;width:51pt'>
 <col width=74 style='mso-width-source:userset;mso-width-alt:2706;width:56pt'>
 <col width=49 style='mso-width-source:userset;mso-width-alt:1792;width:37pt'>
 <col width=90 style='mso-width-source:userset;mso-width-alt:3291;width:68pt'>
 <col width=48 span=2 style='mso-width-source:userset;mso-width-alt:1755;
 width:36pt'>
 <col width=123 style='mso-width-source:userset;mso-width-alt:4498;width:92pt'>
 <col width=59 style='mso-width-source:userset;mso-width-alt:2157;width:44pt'>
 <col width=65 style='mso-width-source:userset;mso-width-alt:2377;width:49pt'>
 <col width=78 style='mso-width-source:userset;mso-width-alt:2852;width:59pt'>
 <col width=56 style='mso-width-source:userset;mso-width-alt:2048;width:42pt'>
 <col width=64 style='width:48pt'>
 <tr height=4 style='mso-height-source:userset;height:3.0pt'>
  <td colspan=13 height=4 class=xl10211111 width=825 style='border-right:1.0pt solid black;
  height:3.0pt;width:620pt'><a name="RANGE!A1:M49">&nbsp;</a></td>
  <td class=xl1511111 width=64 style='width:48pt'></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=13 height=24 class=xl11511111 style='border-right:1.0pt solid black;
  height:18.0pt'>IV.<span style='mso-spacerun:yes'> </span>CIVIL SERVICE
  ELIGIBILITY</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl8411111 style='height:15.0pt;border-top:none'>27.</td>
  <td colspan=4 rowspan=2 class=xl10511111 width=235 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:177pt'>CAREER SERVICE/ RA 1080 (BOARD/
  BAR) UNDER SPECIAL LAWS/ CES/ CSEE<span
  style='mso-spacerun:yes'>���������������������������������������������������
  </span>BARANGAY ELIGIBILITY / DRIVER'S LICENSE</td>
  <td rowspan=2 class=xl11311111 width=90 style='border-top:none;width:68pt'>RATING<br>
    (If Applicable)</td>
  <td colspan=2 rowspan=2 class=xl10911111 width=96 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:72pt'>DATE OF EXAMINATION / CONFERMENT</td>
  <td colspan=3 rowspan=2 class=xl10911111 width=247 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:185pt'>PLACE OF EXAMINATION / CONFERMENT</td>
  <td colspan=2 class=xl11111111 style='border-right:1.0pt solid black;
  border-left:none'>LICENSE (if applicable)</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl6511111 style='height:25.5pt'>&nbsp;</td>
  <td class=xl6611111 style='border-top:none;border-left:none'>NUMBER</td>
  <td class=xl6711111 width=56 style='border-top:none;border-left:none;
  width:42pt'>Date of<br>
    Validity</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=5 height=36 class=xl12111111 width=258 style='height:27.0pt;
  width:194pt'>N/A</td>
  <td class=xl7711111 width=90 style='border-left:none;width:68pt'>N/A</td>
  <td colspan=2 class=xl9311111 width=96 style='border-left:none;width:72pt'>N/A</td>
  <td colspan=3 class=xl12011111 width=247 style='border-left:none;width:185pt'>N/A</td>
  <td class=xl7011111 width=78 style='border-left:none;width:59pt'>N/A</td>
  <td class=xl7911111 width=56 style='border-left:none;width:42pt'>N/A</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=5 height=36 class=xl12111111 width=258 style='height:27.0pt;
  width:194pt'>&nbsp;</td>
  <td class=xl7711111 width=90 style='border-top:none;border-left:none;
  width:68pt'>&nbsp;</td>
  <td colspan=2 class=xl12911111 width=96 style='border-right:.5pt solid black;
  border-left:none;width:72pt'>&nbsp;</td>
  <td colspan=3 class=xl12011111 width=247 style='border-left:none;width:185pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7911111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=5 height=36 class=xl12111111 width=258 style='height:27.0pt;
  width:194pt'>&nbsp;</td>
  <td class=xl7711111 width=90 style='border-top:none;border-left:none;
  width:68pt'>&nbsp;</td>
  <td colspan=2 class=xl9311111 width=96 style='border-left:none;width:72pt'>&nbsp;</td>
  <td colspan=3 class=xl12011111 width=247 style='border-left:none;width:185pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7911111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=5 height=36 class=xl12111111 width=258 style='height:27.0pt;
  width:194pt'>&nbsp;</td>
  <td class=xl7711111 width=90 style='border-top:none;border-left:none;
  width:68pt'>&nbsp;</td>
  <td colspan=2 class=xl9311111 width=96 style='border-left:none;width:72pt'>&nbsp;</td>
  <td colspan=3 class=xl12011111 width=247 style='border-left:none;width:185pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7911111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=5 height=36 class=xl12111111 width=258 style='height:27.0pt;
  width:194pt'>&nbsp;</td>
  <td class=xl7711111 width=90 style='border-top:none;border-left:none;
  width:68pt'>&nbsp;</td>
  <td colspan=2 class=xl9311111 width=96 style='border-left:none;width:72pt'>&nbsp;</td>
  <td colspan=3 class=xl12011111 width=247 style='border-left:none;width:185pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7911111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=5 height=36 class=xl12111111 width=258 style='height:27.0pt;
  width:194pt'>&nbsp;</td>
  <td class=xl7711111 width=90 style='border-top:none;border-left:none;
  width:68pt'>&nbsp;</td>
  <td colspan=2 class=xl9311111 width=96 style='border-left:none;width:72pt'>&nbsp;</td>
  <td colspan=3 class=xl12011111 width=247 style='border-left:none;width:185pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7911111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=5 height=36 class=xl14211111 width=258 style='height:27.0pt;
  width:194pt'>&nbsp;</td>
  <td class=xl7811111 width=90 style='border-top:none;border-left:none;
  width:68pt'>&nbsp;</td>
  <td colspan=2 class=xl13211111 width=96 style='border-left:none;width:72pt'>&nbsp;</td>
  <td colspan=3 class=xl13311111 width=247 style='border-left:none;width:185pt'>&nbsp;</td>
  <td class=xl7211111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl8011111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=13 height=16 class=xl14311111 style='border-right:1.0pt solid black;
  height:12.0pt'>(Continue on separate sheet if necessary)</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=13 height=24 class=xl14611111 style='border-right:1.0pt solid black;
  height:18.0pt'>V.<span style='mso-spacerun:yes'>� </span>WORK EXPERIENCE<span
  style='mso-spacerun:yes'>�</span></td>
  <td class=xl1511111></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl8611111 colspan=12 style='height:12.0pt'>(Include
  private employment.<span style='mso-spacerun:yes'>� </span>Start from your
  recent work) Description of duties should be indicated in the attached Work
  Experience sheet.</td>
  <td class=xl8511111>&nbsp;</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6511111 style='height:18.0pt'>28.</td>
  <td colspan=2 rowspan=2 class=xl12711111 width=112 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:84pt'>INCLUSIVE DATES (mm/dd/yyyy)</td>
  <td colspan=3 rowspan=3 class=xl12611111 width=213 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:161pt'>POSITION TITLE<span
  style='mso-spacerun:yes'>���������������������������������������������������������������������������������������������������������������������������
  </span>(Write in full/Do not abbreviate)</td>
  <td colspan=3 rowspan=3 class=xl12611111 width=219 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:164pt'>DEPARTMENT / AGENCY / OFFICE /
  COMPANY<span
  style='mso-spacerun:yes'>��������������������������������������������������������������������������������������������
  </span>(Write in full/Do not abbreviate)</td>
  <td rowspan=3 class=xl13411111 width=59 style='border-bottom:.5pt solid black;
  width:44pt'>MONTHLY SALARY</td>
  <td rowspan=3 class=xl12211111 width=65 style='border-bottom:.5pt solid black;
  width:49pt'>SALARY/ JOB/ PAY GRADE (if applicable)&amp; STEP<span
  style='mso-spacerun:yes'>� </span>(Format &quot;00-0&quot;)/ INCREMENT</td>
  <td rowspan=3 class=xl15011111 width=78 style='border-bottom:.5pt solid black;
  width:59pt'>STATUS OF APPOINTMENT</td>
  <td rowspan=3 class=xl11811111 width=56 style='border-bottom:.5pt solid black;
  width:42pt'>GOV'T SERVICE<span
  style='mso-spacerun:yes'>��������������������������������������������������������������������������������������������������������������������������������������
  </span>(Y/ N)</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6811111 style='height:15.0pt'>&nbsp;</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td colspan=2 height=25 class=xl12411111 style='border-right:.5pt solid black;
  height:18.75pt'>From</td>
  <td class=xl6911111 style='border-top:none;border-left:none'>To</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td colspan=2 height=30 class=xl13711111 style='border-right:.5pt solid black;
  height:22.5pt'>07/01/2022</td>
  <td class=xl9411111 style='border-top:none;border-left:none'>11/22/2022</td>
  <td colspan=3 class=xl13911111 width=213 style='border-right:.5pt solid black;
  border-left:none;width:161pt'>Computer Programmer I</td>
  <td colspan=3 class=xl13911111 width=219 style='border-right:.5pt solid black;
  border-left:none;width:164pt'>National Meat Inspection Service / PIMD-ICT</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>23978.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>SG 10</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>COS</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>Y</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=38 style='mso-height-source:userset;height:28.5pt'>
  <td colspan=2 height=38 class=xl13711111 style='border-right:.5pt solid black;
  height:28.5pt'>01/03/2022</td>
  <td class=xl9411111 style='border-top:none;border-left:none'>06/30/2022</td>
  <td colspan=3 class=xl13911111 width=213 style='border-right:.5pt solid black;
  border-left:none;width:161pt'>Computer Programmer I</td>
  <td colspan=3 class=xl13911111 width=219 style='border-right:.5pt solid black;
  border-left:none;width:164pt'>National Meat Inspection Service / POSMD</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>23978.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>SG 10</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>COS</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>Y</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=2 height=36 class=xl13711111 style='border-right:.5pt solid black;
  height:27.0pt'>07/01/2021</td>
  <td class=xl9411111 style='border-top:none;border-left:none'>12/31/2021</td>
  <td colspan=3 class=xl13911111 width=213 style='border-right:.5pt solid black;
  border-left:none;width:161pt'>Computer Programmer I</td>
  <td colspan=3 class=xl13911111 width=219 style='border-right:.5pt solid black;
  border-left:none;width:164pt'>National Meat Inspection Service / PIMD-ICT</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>20978.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>SG 10</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>COS</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>Y</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=2 height=40 class=xl13611111 width=67 style='border-right:.5pt solid black;
  height:30.0pt;width:50pt'>08/03/2021</td>
  <td class=xl9411111 style='border-top:none;border-left:none'>06/30/2021</td>
  <td colspan=3 class=xl13911111 width=213 style='border-right:.5pt solid black;
  border-left:none;width:161pt'>Computer Programmer I</td>
  <td colspan=3 class=xl13911111 width=219 style='border-right:.5pt solid black;
  border-left:none;width:164pt'>National Meat Inspection Service / PIMD-ICT</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>20978.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>SG 10</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>COS</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>Y</td>
  <td class=xl1511111></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13611111 width=67 style='border-right:.5pt solid black;
  height:24.0pt;width:50pt'>08/03/2021</td>
  <td class=xl9311111 width=68 style='border-top:none;border-left:none;
  width:51pt'>06/30/2021</td>
  <td colspan=3 class=xl13911111 width=213 style='border-right:.5pt solid black;
  border-left:none;width:161pt'>Computer Programmer I</td>
  <td colspan=3 class=xl13911111 width=219 style='border-right:.5pt solid black;
  border-left:none;width:164pt'>National Meat Inspection Service / PIMD-ICT</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>20978.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>SG 10</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>COS</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>Y</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13611111 width=67 style='border-right:.5pt solid black;
  height:24.0pt;width:50pt'>18/10/2019</td>
  <td class=xl9311111 width=68 style='border-top:none;border-left:none;
  width:51pt'>22/01/2021</td>
  <td colspan=3 class=xl13911111 width=213 style='border-right:.5pt solid black;
  border-left:none;width:161pt'>Freelance Full stack Web Developer</td>
  <td colspan=3 class=xl13911111 width=219 style='border-right:.5pt solid black;
  border-left:none;width:164pt'>Bosny Marketing</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>10000.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>N</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>Freelance
  Wordpress Developer</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>Elopement
  Wedding Planner</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>10000.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>N</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>Freelance
  Wordpress Developer</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>United
  Reality Group</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>10000.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>N</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>Freelance
  Wordpress Developer</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>Meler
  production</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>10000.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>N</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>Freelance
  Wordpress Developer</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>Randell
  Tiongson Personal Finance</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>10000.00 </td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>N</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=33 style='mso-height-source:userset;height:24.75pt'>
  <td colspan=2 height=33 class=xl13111111 width=67 style='height:24.75pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl13111111 width=67 style='height:24.0pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr class=xl7411111 height=29 style='mso-height-source:userset;height:21.75pt'>
  <td colspan=2 height=29 class=xl13111111 width=67 style='height:21.75pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8111111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7011111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7511111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7011111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7011111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7111111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl7411111 width=64 style='width:48pt'></td>
 </tr>
 <tr height=13 style='mso-height-source:userset;height:9.75pt'>
  <td colspan=2 height=13 class=xl14911111 width=67 style='height:9.75pt;
  width:50pt'>&nbsp;</td>
  <td class=xl8211111 width=68 style='border-top:none;border-left:none;
  width:51pt'>&nbsp;</td>
  <td colspan=3 class=xl7211111 width=213 style='border-left:none;width:161pt'>&nbsp;</td>
  <td colspan=3 class=xl7211111 width=219 style='border-left:none;width:164pt'>&nbsp;</td>
  <td class=xl7611111 width=59 style='border-top:none;border-left:none;
  width:44pt'>&nbsp;</td>
  <td class=xl7211111 width=65 style='border-top:none;border-left:none;
  width:49pt'>&nbsp;</td>
  <td class=xl7211111 width=78 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
  <td class=xl7311111 width=56 style='border-top:none;border-left:none;
  width:42pt'>&nbsp;</td>
  <td class=xl1511111></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td colspan=13 height=37 class=xl15211111 style='border-right:1.0pt solid black;
  height:27.75pt'>(Continue on separate sheet if necessary)</td>
  <td class=xl9011111></td>
 </tr>
 <tr height=12 style='mso-height-source:userset;height:9.0pt'>
  <td colspan=3 height=12 class=xl9511111 width=135 style='border-right:1.0pt solid black;
  height:9.0pt;width:101pt'>SIGNATURE</td>
  <td colspan=5 class=xl9911111 style='border-right:1.0pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl8711111 style='border-left:none'>DATE</td>
  <td class=xl8811111 style='border-left:none'>&nbsp;</td>
  <td class=xl8911111 colspan=2>December 27, 2022</td>
  <td class=xl9211111>&nbsp;</td>
  <td class=xl9111111>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=13 height=17 class=xl9811111 style='height:12.75pt'><span
  style='mso-spacerun:yes'>������������������������������ </span>CS FORM 212
  (Revised 2017), Page 2 of 4</td>
  <td class=xl1511111></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=23 style='width:17pt'></td>
  <td width=44 style='width:33pt'></td>
  <td width=68 style='width:51pt'></td>
  <td width=74 style='width:56pt'></td>
  <td width=49 style='width:37pt'></td>
  <td width=90 style='width:68pt'></td>
  <td width=48 style='width:36pt'></td>
  <td width=48 style='width:36pt'></td>
  <td width=123 style='width:92pt'></td>
  <td width=59 style='width:44pt'></td>
  <td width=65 style='width:49pt'></td>
  <td width=78 style='width:59pt'></td>
  <td width=56 style='width:42pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
 <![endif]>
</table>



                    
                </div>
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


                    <div class="c x45 y128 w39 h55"><div class="t m0 x37 h52 y129 ff4 fsf fc0 sc0 ls0 ws0">From</div></div>
                    <div class="c x48 y128 w37 h55"><div class="t m0 x32 h52 y129 ff4 fsf fc0 sc0 ls0 ws0">To</div></div>


                    <div class="c x10 y12a w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_1'] ?></div></div>
                    <div class="c x45 y12a w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_1'] ?></div></div>
                    <div class="c x48 y12a w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_1'] ?></div></div>
                    <div class="c x47 y12a w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_1'] ?></div></div>
                    <div class="c x3e y12a w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_1'] ?></div></div>
                    <div class="c x4b y12a w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_1'] ?></div></div>


                    <div class="c x10 y12c w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_2'] ?></div></div>
                    <div class="c x45 y12c w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_2'] ?></div></div>
                    <div class="c x48 y12c w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_2'] ?></div></div>
                    <div class="c x47 y12c w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_2'] ?></div></div>
                    <div class="c x3e y12c w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_2'] ?></div></div>
                    <div class="c x4b y12c w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_2'] ?></div></div>


                    <div class="c x10 y12e w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_3'] ?></div></div>
                    <div class="c x45 y12e w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_3'] ?></div></div>
                    <div class="c x48 y12e w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_3'] ?></div></div>
                    <div class="c x47 y12e w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_3'] ?></div></div>
                    <div class="c x3e y12e w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_3'] ?></div></div>
                    <div class="c x4b y12e w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_3'] ?></div></div>


                    <div class="c x10 y12f w3a h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_4'] ?></div></div>  
                    <div class="c x45 y12f w39 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_4'] ?></div></div>
                    <div class="c x48 y12f w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_4'] ?></div></div>
                    <div class="c x47 y12f w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_4'] ?></div></div>
                    <div class="c x3e y12f w3b h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_4'] ?></div></div>
                    <div class="c x4b y12f w3c h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_4'] ?></div></div>


                    <div class="c x10 y130 w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_5'] ?></div></div>
                    <div class="c x45 y130 w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_5'] ?></div></div>
                    <div class="c x48 y130 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_5'] ?></div></div>
                    <div class="c x47 y130 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_5'] ?></div></div>
                    <div class="c x3e y130 w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_5'] ?></div></div>
                    <div class="c x4b y130 w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_5'] ?></div></div>


                    <div class="c x10 y131 w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_6'] ?></div></div>
                    <div class="c x45 y131 w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_6'] ?></div></div>
                    <div class="c x48 y131 w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_6'] ?></div></div>
                    <div class="c x47 y131 w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_6'] ?></div></div>
                    <div class="c x3e y131 w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_6'] ?></div></div>
                    <div class="c x4b y131 w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_6'] ?></div></div>


                    <div class="c x10 y132 w3a h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_7'] ?></div></div>
                    <div class="c x45 y132 w39 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_7'] ?></div></div>
                    <div class="c x48 y132 w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_7'] ?></div></div>
                    <div class="c x47 y132 w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_7'] ?></div></div>
                    <div class="c x3e y132 w3b h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_7'] ?></div></div>
                    <div class="c x4b y132 w3c h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_7'] ?></div></div>


                    <div class="c x10 y133 w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_8'] ?></div></div>
                    <div class="c x45 y133 w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_8'] ?></div></div>
                    <div class="c x48 y133 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_8'] ?></div></div>
                    <div class="c x47 y133 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_8'] ?></div></div>
                    <div class="c x3e y133 w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_8'] ?></div></div>
                    <div class="c x4b y133 w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_8'] ?></div></div>


                    <div class="c x10 y134 w3a h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_9'] ?></div></div> 
                    <div class="c x45 y134 w39 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_9'] ?></div></div>
                    <div class="c x48 y134 w37 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_9'] ?></div></div>
                    <div class="c x47 y134 w37 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_9'] ?></div></div>
                    <div class="c x3e y134 w3b h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_9'] ?></div></div>
                    <div class="c x4b y134 w3c h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_9'] ?></div></div>


                    <div class="c x10 y136 w3a h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_10'] ?></div></div> 
                    <div class="c x45 y136 w39 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_10'] ?></div></div>
                    <div class="c x48 y136 w37 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_10'] ?></div></div>
                    <div class="c x47 y136 w37 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_10'] ?></div></div>
                    <div class="c x3e y136 w3b h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_10'] ?></div></div>
                    <div class="c x4b y136 w3c h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_10'] ?></div></div>

                    <div class="c x10 y137 w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_11'] ?></div></div>
                    <div class="c x45 y137 w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_11'] ?></div></div>
                    <div class="c x48 y137 w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_11'] ?></div></div>
                    <div class="c x47 y137 w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_11'] ?></div></div>
                    <div class="c x3e y137 w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_11'] ?></div></div>
                    <div class="c x4b y137 w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_11'] ?></div></div>


                    <div class="c x10 y138 w3a h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_12'] ?></div></div>
                    <div class="c x45 y138 w39 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_12'] ?></div></div>
                    <div class="c x48 y138 w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_12'] ?></div></div>
                    <div class="c x47 y138 w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_12'] ?></div></div>
                    <div class="c x3e y138 w3b h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_12'] ?></div></div>
                    <div class="c x4b y138 w3c h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_12'] ?></div></div>


                    <div class="c x10 y139 w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_13'] ?></div></div>
                    <div class="c x45 y139 w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_13'] ?></div></div>
                    <div class="c x48 y139 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_13'] ?></div></div>
                    <div class="c x47 y139 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_13'] ?></div></div>
                    <div class="c x3e y139 w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_13'] ?></div></div>
                    <div class="c x4b y139 w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_13'] ?></div></div>



                    <div class="c x10 y13a w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_14'] ?></div></div>
                    <div class="c x45 y13a w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_14'] ?></div></div>
                    <div class="c x48 y13a w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_14'] ?></div></div>
                    <div class="c x47 y13a w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_14'] ?></div></div>
                    <div class="c x3e y13a w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_14'] ?></div></div>
                    <div class="c x4b y13a w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_14'] ?></div></div>


                    <div class="c x10 y13b w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_15'] ?></div></div>
                    <div class="c x45 y13b w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_15'] ?></div></div>
                    <div class="c x48 y13b w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_15'] ?></div></div>
                    <div class="c x47 y13b w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_15'] ?></div></div>
                    <div class="c x3e y13b w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_15'] ?></div></div>
                    <div class="c x4b y13b w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_15'] ?></div></div>



                    <div class="c x10 y13c w3a h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_16'] ?></div></div>
                    <div class="c x45 y13c w39 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_16'] ?></div></div>
                    <div class="c x48 y13c w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_16'] ?></div></div>
                    <div class="c x47 y13c w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_16'] ?></div></div>
                    <div class="c x3e y13c w3b h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_16'] ?></div></div>
                    <div class="c x4b y13c w3c h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_16'] ?></div></div>


                    <div class="c x10 y13d w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_17'] ?></div></div>
                    <div class="c x45 y13d w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_17'] ?></div></div>
                    <div class="c x48 y13d w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_17'] ?></div></div>
                    <div class="c x47 y13d w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_17'] ?></div></div>
                    <div class="c x3e y13d w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_17'] ?></div></div>
                    <div class="c x4b y13d w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_17'] ?></div></div>



                    <div class="c x10 y13e w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_18'] ?></div></div>
                    <div class="c x45 y13e w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_18'] ?></div></div>
                    <div class="c x48 y13e w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_18'] ?></div></div>
                    <div class="c x47 y13e w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_18'] ?></div></div>
                    <div class="c x3e y13e w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_18'] ?></div></div>
                    <div class="c x4b y13e w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_18'] ?></div></div>


                    <div class="c x10 y13f w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_19'] ?></div></div>
                    <div class="c x45 y13f w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_19'] ?></div></div>
                    <div class="c x48 y13f w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_19'] ?></div></div>
                    <div class="c x47 y13f w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_19'] ?></div></div>
                    <div class="c x3e y13f w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_19'] ?></div></div>
                    <div class="c x4b y13f w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_19'] ?></div></div>



                    <div class="c x10 y140 w3a h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_20'] ?></div></div>
                     <div class="c x45 y140 w39 h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_20'] ?></div></div>
                    <div class="c x48 y140 w37 h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_20'] ?></div></div>
                    <div class="c x47 y140 w37 h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_20'] ?></div></div>
                    <div class="c x3e y140 w3b h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_20'] ?></div></div>
                    <div class="c x4b y140 w3c h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_20'] ?></div></div>


                    <div class="c x10 y142 w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_title_21'] ?></div></div>
                    <div class="c x45 y142 w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_from_21'] ?></div></div>
                    <div class="c x48 y142 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_to_21'] ?></div></div>
                    <div class="c x47 y142 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_number_of_hours_21'] ?></div></div>
                    <div class="c x3e y142 w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_type_of_ld_21'] ?></div></div>
                    <div class="c x4b y142 w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0"><?= $row['learning_development_conducted_by_21'] ?></div></div>
                    <div class="c x10 y143 w33 h63"><div class="t m0 x49 h5a y10a ff5 fsf fc3 sc0 ls0 ws0">(Continue on separate sheet if necessary)</div></div>
                    <div class="c x10 y144 w33 h50"><div class="t m0 x2 h39 y104 ff5 fsb fc1 sc0 ls0 ws0">VIII. OTHER INFORMATION</div></div>
        <?php
  

}

