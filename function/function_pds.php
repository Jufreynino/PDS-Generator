<?php 

function fetch()
{
    global $con;

 $id = $_SESSION['id'];
            
        $sql = "SELECT * FROM personal_information_tbl WHERE pds_id='$id'";
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
                        <div class="t m0 x2 h7 y6 ff3 fs2 fc0 sc0 ls0 ws0">
                            WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person
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
        <?php
  

}

