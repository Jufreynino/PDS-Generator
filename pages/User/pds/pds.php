
<?php 


include('../../../function/function_pds.php');
include('../../../function/config.php');



session_start();
if(!isset($_SESSION['id']))
{

	header('location:../auth/login.php');
}
else
{

}
?><!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" href="base.min.css" />
        <link rel="stylesheet" href="fancy.min.css" />
        <link rel="stylesheet" href="main.css" />
        <script src="compatibility.min.js"></script>
        <script src="theViewer.min.js"></script>
        <script>
            try {
                theViewer.defaultViewer = new theViewer.Viewer({});
            } catch (e) {}
        </script>
        <title></title>
    </head>
    <body>
        <div id="sidebar">
            <div id="outline"></div>
        </div>
        <div id="page-container">
            <div id="pf1" class="pf w0 h0" data-page-no="1">
                <div class="pc pc1 w0 h0">
                   <?php echo fetch() ?>
                    <div class="c x3 y41 w13 hc"><div class="t m0 x2 hd y42 ff5 fs4 fc1 sc0 ls0 ws0">II. FAMILY BACKGROUND</div></div>
                    <div class="c x3 y43 w7 h1f"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">22.</div></div>
                    <div class="c x8 y43 wd h1f"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">SPOUSE&apos;S SURNAME</div></div>
                    <div class="c x9 y43 w14 h1f"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0">sadasd</div></div>
                    <div class="c xf y43 w15 h1f"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">23. NAME of CHILDREN (Write full name and list all)</div></div>
                    <div class="c x1b y43 w12 h1f"><div class="t m0 x7 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">DATE OF BIRTH (mm/dd/yyyy)</div></div>
                    <div class="c x8 y46 wd h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">FIRST NAME</div></div>
                    <div class="c x9 y46 wb h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0">dasd</div></div>
                    <div class="c xa y46 wc h20">
                        <div class="t m0 x2 h11 y47 ff4 fs0 fc0 sc0 ls0 ws0">NAME EXTENSION (JR., SR)</div>
                        <div class="t m0 x2 h3 y48 ff1 fs0 fc0 sc0 ls0 ws0">JR</div>
                    </div>
                    <div class="c xf y46 w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y46 w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/24/5243</div></div>
                    <div class="c x8 y4b wd h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">MIDDLE NAME</div></div>
                    <div class="c x9 y4b w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0">dasd</div></div>
                    <div class="c xf y4b w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y4b w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/25/5243</div></div>
                    <div class="c x8 y4c wd h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">OCCUPATION</div></div>
                    <div class="c x9 y4c w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0">dasd</div></div>
                    <div class="c xf y4c w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y4c w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/26/5243</div></div>
                    <div class="c x8 y4d w8 h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">EMPLOYER/BUSINESS NAME</div></div>
                    <div class="c x9 y4d w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0">dasd</div></div>
                    <div class="c xf y4d w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y4d w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/27/5243</div></div>
                    <div class="c x8 y4e wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">BUSINESS ADDRESS</div></div>
                    <div class="c x9 y4e w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0">dasd</div></div>
                    <div class="c xf y4e w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y4e w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/28/5243</div></div>
                    <div class="c x8 y52 wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">TELEPHONE NO.</div></div>
                    <div class="c x9 y52 w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0">dasd</div></div>
                    <div class="c xf y52 w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y52 w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/29/5243</div></div>
                    <div class="c x3 y53 w7 h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">24.</div></div>
                    <div class="c x8 y53 wd h20"><div class="t m0 x7 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">FATHER&apos;S SURNAME</div></div>
                    <div class="c x9 y53 w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0">Bayog</div></div>
                    <div class="c xf y53 w15 h20"><div class="t m0 x2 hf y49 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y53 w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">7/30/5243</div></div>
                    <div class="c x8 y54 wd h22"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">FIRST NAME</div></div>
                    <div class="c x9 y54 wb h22"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0">Godfrey Norman</div></div>
                    <div class="c xa y54 wc h22">
                        <div class="t m0 x2 h11 y55 ff4 fs0 fc0 sc0 ls0 ws0">NAME EXTENSION (JR., SR)</div>
                        <div class="t m0 x2 h3 y56 ff1 fs0 fc0 sc0 ls0 ws0">sda</div>
                    </div>
                    <div class="c xf y54 w15 h22"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y54 w12 h22"><div class="t m0 x2 h21 y57 ff1 fs3 fc0 sc0 ls0 ws0">7/31/5243</div></div>
                    <div class="c x8 y58 wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">MIDDLE NAME</div></div>
                    <div class="c x9 y58 w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0">Davantes</div></div>
                    <div class="c xf y58 w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y58 w12 h20"><div class="t m0 x2 h21 y57 ff1 fs3 fc0 sc0 ls0 ws0">8/1/5243</div></div>
                    <div class="c x3 y59 w7 h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">25.</div></div>
                    <div class="c x8 y59 w8 h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">MOTHER&apos;S MAIDEN NAME</div></div>
                    <div class="c x9 y59 wa h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0">Estara</div></div>
                    <div class="c xf y59 w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y59 w12 h20"><div class="t m0 x2 h21 y57 ff1 fs3 fc0 sc0 ls0 ws0">8/2/5243</div></div>
                    <div class="c x8 y5a wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">SURNAME</div></div>
                    <div class="c x9 y5a w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0">Escober</div></div>
                    <div class="c xf y5a w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y5a w12 h20"><div class="t m0 x2 h21 y57 ff1 fs3 fc0 sc0 ls0 ws0">8/3/5243</div></div>
                    <div class="c x8 y5b wd h20"><div class="t m0 x2 hb y4f ff4 fs2 fc0 sc0 ls0 ws0">FIRST NAME</div></div>
                    <div class="c x9 y5b w14 h20"><div class="t m0 x2 hf y50 ff1 fs5 fc0 sc0 ls0 ws0">Judith</div></div>
                    <div class="c xf y5b w15 h20"><div class="t m0 x2 hf y51 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y5b w12 h20"><div class="t m0 x2 h21 y4a ff1 fs3 fc0 sc0 ls0 ws0">8/4/5243</div></div>
                    <div class="c x8 y5c wd h20"><div class="t m0 x2 hb y44 ff4 fs2 fc0 sc0 ls0 ws0">MIDDLE NAME</div></div>
                    <div class="c x9 y5c w14 h20"><div class="t m0 x2 hf y45 ff1 fs5 fc0 sc0 ls0 ws0">Estera</div></div>
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
                    <div class="c x9 y70 wb h27"><div class="t m0 x2 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0">Silanganan Elementary School</div></div>
                    <div class="c xa y70 we h27"><div class="t m0 x2 ha y72 ff4 fs3 fc0 sc0 ls0 ws0">Basic educaion</div></div>
                    <div class="c x1a y70 w19 h27"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0">6/13/2001</div></div>
                    <div class="c x5 y70 w5 h27"><div class="t m0 x7 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0">3/29/2007</div></div>
                    <div class="c x1 y70 w2 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y70 w17 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">2007</div></div>
                    <div class="c x23 y70 w18 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x8 y74 wd h28"><div class="t m0 x2 hb y71 ff4 fs2 fc0 sc0 ls0 ws0">SECONDARY</div></div>
                    <div class="c x9 y74 wb h28"><div class="t m0 x2 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0">Bagong Silang High School</div></div>
                    <div class="c xa y74 we h28"><div class="t m0 x2 ha y72 ff4 fs3 fc0 sc0 ls0 ws0">Basic educaion</div></div>
                    <div class="c x1a y74 w19 h28"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0">6/14/2007</div></div>
                    <div class="c x5 y74 w5 h28"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0">4/13/2011</div></div>
                    <div class="c x1 y74 w2 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y74 w17 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">2011</div></div>
                    <div class="c x23 y74 w18 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x8 y75 wd h27">
                        <div class="t m0 x2 hb y76 ff4 fs2 fc0 sc0 ls0 ws0">VOCATIONAL /</div>
                        <div class="t m0 x2 hb y25 ff4 fs2 fc0 sc0 ls0 ws0">TRADE COURSE</div>
                    </div>
                    <div class="c x9 y75 wb h27"><div class="t m0 x2 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c xa y75 we h27"><div class="t m0 x2 ha y77 ff4 fs3 fc0 sc0 ls0 ws0">Basic educaion</div></div>
                    <div class="c x1a y75 w19 h27"><div class="t m0 x2 h21 y77 ff1 fs3 fc0 sc0 ls0 ws0">6/14/2007</div></div>
                    <div class="c x5 y75 w5 h27"><div class="t m0 x2 h21 y77 ff1 fs3 fc0 sc0 ls0 ws0">4/13/2011</div></div>
                    <div class="c x1 y75 w2 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y75 w17 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x23 y75 w18 h27"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x8 y78 wd h28"><div class="t m0 x2 hb y71 ff4 fs2 fc0 sc0 ls0 ws0">COLLEGE</div></div>
                    <div class="c x9 y78 wb h28"><div class="t m0 x2 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0">Access Computer and Technical Colleege</div></div>
                    <div class="c xa y78 we h28"><div class="t m0 x24 h7 y71 ff1 fs2 fc0 sc0 ls0 ws0">Bachelor of Science in Information Technology</div></div>
                    <div class="c x1a y78 w19 h28"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0">6/12/2013</div></div>
                    <div class="c x5 y78 w5 h28"><div class="t m0 x2 h21 y72 ff1 fs3 fc0 sc0 ls0 ws0">5/30/2018</div></div>
                    <div class="c x1 y78 w2 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">tse</div></div>
                    <div class="c x1b y78 w17 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">2018</div></div>
                    <div class="c x23 y78 w18 h28"><div class="t m0 x2 hf y73 ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x8 y79 wd h28"><div class="t m0 x2 hb y7a ff4 fs2 fc0 sc0 ls0 ws0">GRADUATE STUDIES</div></div>
                    <div class="c x9 y79 wb h28"><div class="t m0 x25 h7 y7a ff1 fs2 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c xa y79 we h28"><div class="t m0 x26 h7 y7a ff1 fs2 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1a y79 w19 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x5 y79 w5 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1 y79 w2 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x1b y79 w17 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
                    <div class="c x23 y79 w18 h28"><div class="t m0 x2 hf y7b ff1 fs5 fc0 sc0 ls0 ws0">test</div></div>
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
                    <div class="c x3 y9e w25 h38"><div class="t m0 x39 h39 y9f ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x33 y9e w1f h38"><div class="t m0 x29 h39 y9f ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c xa y9e w20 h38"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x35 y9e w21 h38"><div class="t m0 x3a h39 y9f ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x36 y9e w23 h38"><div class="t m0 x34 h39 y9f ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x38 y9e w24 h38"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x3 ya1 w25 h3b"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x33 ya1 w1f h3b"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c xa ya1 w20 h3b"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x35 ya1 w21 h3b"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x36 ya1 w23 h3b"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x38 ya1 w24 h3b"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x3 ya3 w25 h38"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x33 ya3 w1f h38"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c xa ya3 w20 h38"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x35 ya3 w21 h38"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x36 ya3 w23 h38"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x38 ya3 w24 h38"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x3 ya4 w25 h3b"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x33 ya4 w1f h3b"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c xa ya4 w20 h3b"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x35 ya4 w21 h3b"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x36 ya4 w23 h3b"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x38 ya4 w24 h3b"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x3 ya5 w25 h38"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x33 ya5 w1f h38"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c xa ya5 w20 h38"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x35 ya5 w21 h38"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x36 ya5 w23 h38"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x38 ya5 w24 h38"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x3 ya6 w25 h38"><div class="t m0 x39 h39 y9f ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x33 ya6 w1f h38"><div class="t m0 x29 h39 y9f ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c xa ya6 w20 h38"><div class="t m0 x28 h3a ya7 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x35 ya6 w21 h38"><div class="t m0 x3a h39 y9f ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x36 ya6 w23 h38"><div class="t m0 x34 h39 y9f ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x38 ya6 w24 h38"><div class="t m0 x10 h3a ya7 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x3 ya8 w25 h3b"><div class="t m0 x39 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x33 ya8 w1f h3b"><div class="t m0 x29 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c xa ya8 w20 h3b"><div class="t m0 x28 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x35 ya8 w21 h3b"><div class="t m0 x3a h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x36 ya8 w23 h3b"><div class="t m0 x34 h39 ya2 ff1 fsb fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x38 ya8 w24 h3b"><div class="t m0 x10 h3a ya0 ff1 fsc fc0 sc0 ls0 ws0">N/A</div></div>
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
                    <div class="c x3 yc1 w2c h43"><div class="t m0 x40 h3a yc2 ff1 fsc fc0 sc0 ls0 ws0">07/01/2022</div></div>
                    <div class="c x26 yc1 w2d h43"><div class="t m0 x40 h3a yc2 ff1 fsc fc0 sc0 ls0 ws0">11/22/2022</div></div>
                    <div class="c x3c yc1 w28 h43"><div class="t m0 xd h39 yc3 ff1 fsb fc0 sc0 ls0 ws0">Computer Programmer I</div></div>
                    <div class="c xa yc1 w29 h43">
                        <div class="t m0 xe h39 yc4 ff1 fsb fc0 sc0 ls0 ws0">National Meat Inspection Service / PIMD-</div>
                        <div class="t m0 x41 h39 yc5 ff1 fsb fc0 sc0 ls0 ws0">ICT</div>
                    </div>
                    <div class="c x3e yc1 w2a h43"><div class="t m0 x40 h3d yc6 ff1 fsa fc0 sc0 ls0 ws0">23978.00</div></div>
                    <div class="c x3f yc1 w2b h43"><div class="t m0 x0 h39 yc3 ff1 fsb fc0 sc0 ls0 ws0">SG 10</div></div>
                    <div class="c x36 yc1 w23 h43"><div class="t m0 x32 h39 yc3 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yc1 w24 h43"><div class="t m0 x37 h39 yc3 ff1 fsb fc0 sc0 ls0 ws0">Y</div></div>
                    <div class="c x3 yc7 w2c h44"><div class="t m0 x40 h3a yc8 ff1 fsc fc0 sc0 ls0 ws0">07/01/2023</div></div>
                    <div class="c x26 yc7 w2d h44"><div class="t m0 x40 h3a yc8 ff1 fsc fc0 sc0 ls0 ws0">06/30/2022</div></div>
                    <div class="c x3c yc7 w28 h44"><div class="t m0 xd h39 yc9 ff1 fsb fc0 sc0 ls0 ws0">Computer Programmer I</div></div>
                    <div class="c xa yc7 w29 h44"><div class="t m0 x24 h39 yc9 ff1 fsb fc0 sc0 ls0 ws0">National Meat Inspection Service / POSMD</div></div>
                    <div class="c x3e yc7 w2a h44"><div class="t m0 x40 h3d yca ff1 fsa fc0 sc0 ls0 ws0">23978.00</div></div>
                    <div class="c x3f yc7 w2b h44"><div class="t m0 x0 h39 yc9 ff1 fsb fc0 sc0 ls0 ws0">SG 10</div></div>
                    <div class="c x36 yc7 w23 h44"><div class="t m0 x32 h39 yc9 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yc7 w24 h44"><div class="t m0 x37 h39 yc9 ff1 fsb fc0 sc0 ls0 ws0">Y</div></div>
                    <div class="c x3 ycb w2c h38"><div class="t m0 x40 h3a ya7 ff1 fsc fc0 sc0 ls0 ws0">07/01/2024</div></div>
                    <div class="c x26 ycb w2d h38"><div class="t m0 x40 h3a ya7 ff1 fsc fc0 sc0 ls0 ws0">12/31/2021</div></div>
                    <div class="c x3c ycb w28 h38"><div class="t m0 xd h39 y9f ff1 fsb fc0 sc0 ls0 ws0">Computer Programmer I</div></div>
                    <div class="c xa ycb w29 h38">
                        <div class="t m0 xe h39 ycc ff1 fsb fc0 sc0 ls0 ws0">National Meat Inspection Service / PIMD-</div>
                        <div class="t m0 x41 h39 ycd ff1 fsb fc0 sc0 ls0 ws0">ICT</div>
                    </div>
                    <div class="c x3e ycb w2a h38"><div class="t m0 x40 h3d yce ff1 fsa fc0 sc0 ls0 ws0">20978.00</div></div>
                    <div class="c x3f ycb w2b h38"><div class="t m0 x0 h39 y9f ff1 fsb fc0 sc0 ls0 ws0">SG 10</div></div>
                    <div class="c x36 ycb w23 h38"><div class="t m0 x32 h39 y9f ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ycb w24 h38"><div class="t m0 x37 h39 y9f ff1 fsb fc0 sc0 ls0 ws0">Y</div></div>
                    <div class="c x3 ycf w2c h45"><div class="t m0 x40 h3a yd0 ff1 fsc fc0 sc0 ls0 ws0">07/01/2025</div></div>
                    <div class="c x26 ycf w2d h45"><div class="t m0 x40 h3a yd0 ff1 fsc fc0 sc0 ls0 ws0">06/30/2021</div></div>
                    <div class="c x3c ycf w28 h45"><div class="t m0 xd h39 yd1 ff1 fsb fc0 sc0 ls0 ws0">Computer Programmer I</div></div>
                    <div class="c xa ycf w29 h45">
                        <div class="t m0 xe h39 yd2 ff1 fsb fc0 sc0 ls0 ws0">National Meat Inspection Service / PIMD-</div>
                        <div class="t m0 x41 h39 yd3 ff1 fsb fc0 sc0 ls0 ws0">ICT</div>
                    </div>
                    <div class="c x3e ycf w2a h45"><div class="t m0 x40 h3d yd4 ff1 fsa fc0 sc0 ls0 ws0">20978.00</div></div>
                    <div class="c x3f ycf w2b h45"><div class="t m0 x0 h39 yd1 ff1 fsb fc0 sc0 ls0 ws0">SG 10</div></div>
                    <div class="c x36 ycf w23 h45"><div class="t m0 x32 h39 yd1 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ycf w24 h45"><div class="t m0 x37 h39 yd1 ff1 fsb fc0 sc0 ls0 ws0">Y</div></div>
                    <div class="c x3 yd5 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2026</div></div>
                    <div class="c x26 yd5 w2d h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">06/30/2021</div></div>
                    <div class="c x3c yd5 w28 h46"><div class="t m0 xd h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Computer Programmer I</div></div>
                    <div class="c xa yd5 w29 h46">
                        <div class="t m0 xe h39 yd8 ff1 fsb fc0 sc0 ls0 ws0">National Meat Inspection Service / PIMD-</div>
                        <div class="t m0 x41 h39 yd9 ff1 fsb fc0 sc0 ls0 ws0">ICT</div>
                    </div>
                    <div class="c x3e yd5 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">20978.00</div></div>
                    <div class="c x3f yd5 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 10</div></div>
                    <div class="c x36 yd5 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yd5 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Y</div></div>
                    <div class="c x3 ydb w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2027</div></div>
                    <div class="c x26 ydb w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/22/2021</div></div>
                    <div class="c x3c ydb w28 h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Full stack Web Developer</div></div>
                    <div class="c xa ydb w29 h46"><div class="t m0 x19 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Bosny Marketing</div></div>
                    <div class="c x3e ydb w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ydb w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 11</div></div>
                    <div class="c x36 ydb w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ydb w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ydc w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2028</div></div>
                    <div class="c x26 ydc w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/23/2021</div></div>
                    <div class="c x3c ydc w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ydc w29 h46"><div class="t m0 x42 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Elopement Wedding Planner</div></div>
                    <div class="c x3e ydc w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ydc w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 12</div></div>
                    <div class="c x36 ydc w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ydc w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ydd w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2029</div></div>
                    <div class="c x26 ydd w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/24/2021</div></div>
                    <div class="c x3c ydd w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ydd w29 h46"><div class="t m0 x43 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">United Reality Group</div></div>
                    <div class="c x3e ydd w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ydd w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 13</div></div>
                    <div class="c x36 ydd w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ydd w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yde w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2030</div></div>
                    <div class="c x26 yde w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/25/2021</div></div>
                    <div class="c x3c yde w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yde w29 h46"><div class="t m0 x20 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Meler production</div></div>
                    <div class="c x3e yde w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yde w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 14</div></div>
                    <div class="c x36 yde w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yde w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ydf w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2031</div></div>
                    <div class="c x26 ydf w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/26/2021</div></div>
                    <div class="c x3c ydf w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ydf w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e ydf w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ydf w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 15</div></div>
                    <div class="c x36 ydf w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ydf w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ye0 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2032</div></div>
                    <div class="c x26 ye0 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/27/2021</div></div>
                    <div class="c x3c ye0 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ye0 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e ye0 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ye0 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 16</div></div>
                    <div class="c x36 ye0 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ye0 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ye1 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2033</div></div>
                    <div class="c x26 ye1 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/28/2021</div></div>
                    <div class="c x3c ye1 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ye1 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e ye1 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ye1 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 17</div></div>
                    <div class="c x36 ye1 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ye1 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ye2 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2034</div></div>
                    <div class="c x26 ye2 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/29/2021</div></div>
                    <div class="c x3c ye2 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ye2 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e ye2 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ye2 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 18</div></div>
                    <div class="c x36 ye2 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ye2 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ye3 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2035</div></div>
                    <div class="c x26 ye3 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/30/2021</div></div>
                    <div class="c x3c ye3 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ye3 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e ye3 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ye3 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 19</div></div>
                    <div class="c x36 ye3 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ye3 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ye4 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2036</div></div>
                    <div class="c x26 ye4 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">1/31/2021</div></div>
                    <div class="c x3c ye4 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ye4 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e ye4 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ye4 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 20</div></div>
                    <div class="c x36 ye4 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ye4 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ye5 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2037</div></div>
                    <div class="c x26 ye5 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/1/2021</div></div>
                    <div class="c x3c ye5 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ye5 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e ye5 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ye5 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 21</div></div>
                    <div class="c x36 ye5 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ye5 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ye6 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2038</div></div>
                    <div class="c x26 ye6 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/2/2021</div></div>
                    <div class="c x3c ye6 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ye6 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e ye6 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ye6 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 22</div></div>
                    <div class="c x36 ye6 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ye6 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 ye7 w2c h47"><div class="t m0 x40 h3a ye8 ff1 fsc fc0 sc0 ls0 ws0">07/01/2039</div></div>
                    <div class="c x26 ye7 w2d h47"><div class="t m0 x0 h3a ye8 ff1 fsc fc0 sc0 ls0 ws0">2/3/2021</div></div>
                    <div class="c x3c ye7 w28 h47"><div class="t m0 x32 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa ye7 w29 h47"><div class="t m0 x10 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e ye7 w2a h47"><div class="t m0 x40 h3d yea ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f ye7 w2b h47"><div class="t m0 x0 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0">SG 23</div></div>
                    <div class="c x36 ye7 w23 h47"><div class="t m0 x32 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 ye7 w24 h47"><div class="t m0 x37 h39 ye9 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yeb w2c h48"><div class="t m0 x40 h3a yec ff1 fsc fc0 sc0 ls0 ws0">07/01/2040</div></div>
                    <div class="c x26 yeb w2d h48"><div class="t m0 x0 h3a yec ff1 fsc fc0 sc0 ls0 ws0">2/4/2021</div></div>
                    <div class="c x3c yeb w28 h48"><div class="t m0 x32 h39 yed ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yeb w29 h48"><div class="t m0 x10 h39 yed ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yeb w2a h48"><div class="t m0 x40 h3d yee ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yeb w2b h48"><div class="t m0 x0 h39 yed ff1 fsb fc0 sc0 ls0 ws0">SG 24</div></div>
                    <div class="c x36 yeb w23 h48"><div class="t m0 x32 h39 yed ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yeb w24 h48"><div class="t m0 x37 h39 yed ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yef w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2041</div></div>
                    <div class="c x26 yef w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/5/2021</div></div>
                    <div class="c x3c yef w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yef w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yef w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yef w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 25</div></div>
                    <div class="c x36 yef w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yef w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yf0 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2042</div></div>
                    <div class="c x26 yf0 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/6/2021</div></div>
                    <div class="c x3c yf0 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yf0 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yf0 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yf0 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 26</div></div>
                    <div class="c x36 yf0 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yf0 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yf1 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2043</div></div>
                    <div class="c x26 yf1 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/7/2021</div></div>
                    <div class="c x3c yf1 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yf1 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yf1 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yf1 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 27</div></div>
                    <div class="c x36 yf1 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yf1 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yf2 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2044</div></div>
                    <div class="c x26 yf2 w2d h46"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/8/2021</div></div>
                    <div class="c x3c yf2 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yf2 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yf2 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yf2 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 28</div></div>
                    <div class="c x36 yf2 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yf2 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yf3 w2c h48"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2045</div></div>
                    <div class="c x26 yf3 w2d h48"><div class="t m0 x0 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/9/2021</div></div>
                    <div class="c x3c yf3 w28 h48"><div class="t m0 x32 h39 yed ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yf3 w29 h48"><div class="t m0 x10 h39 yed ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yf3 w2a h48"><div class="t m0 x40 h3d yee ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yf3 w2b h48"><div class="t m0 x0 h39 yed ff1 fsb fc0 sc0 ls0 ws0">SG 29</div></div>
                    <div class="c x36 yf3 w23 h48"><div class="t m0 x32 h39 yed ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yf3 w24 h48"><div class="t m0 x37 h39 yed ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yf4 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2046</div></div>
                    <div class="c x26 yf4 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/10/2021</div></div>
                    <div class="c x3c yf4 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yf4 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yf4 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yf4 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 30</div></div>
                    <div class="c x36 yf4 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yf4 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yf5 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2047</div></div>
                    <div class="c x26 yf5 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/11/2021</div></div>
                    <div class="c x3c yf5 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yf5 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yf5 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yf5 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 31</div></div>
                    <div class="c x36 yf5 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yf5 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yf6 w2c h46"><div class="t m0 x40 h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">07/01/2048</div></div>
                    <div class="c x26 yf6 w2d h46"><div class="t m0 xc h3a yd6 ff1 fsc fc0 sc0 ls0 ws0">2/12/2021</div></div>
                    <div class="c x3c yf6 w28 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yf6 w29 h46"><div class="t m0 x10 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yf6 w2a h46"><div class="t m0 x40 h3d yda ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yf6 w2b h46"><div class="t m0 x0 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">SG 32</div></div>
                    <div class="c x36 yf6 w23 h46"><div class="t m0 x32 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yf6 w24 h46"><div class="t m0 x37 h39 yd7 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
                    <div class="c x3 yf7 w2c h49"><div class="t m0 x40 h3a yf8 ff1 fsc fc0 sc0 ls0 ws0">07/01/2049</div></div>
                    <div class="c x26 yf7 w2d h49"><div class="t m0 xc h3a yf8 ff1 fsc fc0 sc0 ls0 ws0">2/13/2021</div></div>
                    <div class="c x3c yf7 w28 h49"><div class="t m0 x32 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0">Freelance Wordpress Developer</div></div>
                    <div class="c xa yf7 w29 h49"><div class="t m0 x10 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0">Randell Tiongson Personal Finance</div></div>
                    <div class="c x3e yf7 w2a h49"><div class="t m0 x40 h3d yfa ff1 fsa fc0 sc0 ls0 ws0">10000.00</div></div>
                    <div class="c x3f yf7 w2b h49"><div class="t m0 x0 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0">SG 33</div></div>
                    <div class="c x36 yf7 w23 h49"><div class="t m0 x32 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0">COS</div></div>
                    <div class="c x38 yf7 w24 h49"><div class="t m0 x37 h39 yf9 ff1 fsb fc0 sc0 ls0 ws0">N</div></div>
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
                    <div class="c x10 y10e w3a h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x45 y10e w39 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">sdsffds</div></div>
                    <div class="c x48 y10e w37 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fdsf</div></div>
                    <div class="c x47 y10e w37 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fs</div></div>
                    <div class="c x3e y10e w38 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fd</div></div>
                    <div class="c x10 y110 w3a h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x45 y110 w39 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fsdf</div></div>
                    <div class="c x48 y110 w37 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fs</div></div>
                    <div class="c x47 y110 w37 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fsd</div></div>
                    <div class="c x3e y110 w38 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fsd</div></div>
                    <div class="c x10 y111 w3a h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x45 y111 w39 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fsdf</div></div>
                    <div class="c x48 y111 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fsd</div></div>
                    <div class="c x47 y111 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fs</div></div>
                    <div class="c x3e y111 w38 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fds</div></div>
                    <div class="c x10 y113 w3a h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x45 y113 w39 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fsdf</div></div>
                    <div class="c x48 y113 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fs</div></div>
                    <div class="c x47 y113 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fds</div></div>
                    <div class="c x3e y113 w38 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fds</div></div>
                    <div class="c x10 y114 w3a h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x45 y114 w39 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fsdf</div></div>
                    <div class="c x48 y114 w37 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fsd</div></div>
                    <div class="c x47 y114 w37 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fsd</div></div>
                    <div class="c x3e y114 w38 h56"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">sdf</div></div>
                    <div class="c x10 y115 w3a h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x45 y115 w39 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">sf</div></div>
                    <div class="c x48 y115 w37 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fdsf</div></div>
                    <div class="c x47 y115 w37 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fs</div></div>
                    <div class="c x3e y115 w38 h58"><div class="t m0 x2 h57 y10f ff1 fs11 fc0 sc0 ls0 ws0">fds</div></div>
                    <div class="c x10 y116 w3a h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x45 y116 w39 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">sf</div></div>
                    <div class="c x48 y116 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fsdf</div></div>
                    <div class="c x47 y116 w37 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fs</div></div>
                    <div class="c x3e y116 w38 h58"><div class="t m0 x2 h57 y112 ff1 fs11 fc0 sc0 ls0 ws0">fsd</div></div>
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
                    <div class="c x10 y12a w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Road to Full Stack Developmet</div></div>
                    <div class="c x45 y12a w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">2/24/2018</div></div>
                    <div class="c x48 y12a w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">2/24/2018</div></div>
                    <div class="c x47 y12a w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y12a w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R9</div></div>
                    <div class="c x4b y12a w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Mr. El Miguel A. Marcaida</div></div>
                    <div class="c x10 y12c w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">C# Programming with Database Application</div></div>
                    <div class="c x45 y12c w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">2/10/2018</div></div>
                    <div class="c x48 y12c w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">2/10/2018</div></div>
                    <div class="c x47 y12c w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y12c w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">DICT R9</div></div>
                    <div class="c x4b y12c w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">Mr. Joselito V, San Juan</div></div>
                    <div class="c x10 y12e w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y12e w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">1/7/2022</div></div>
                    <div class="c x48 y12e w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">1/7/2022</div></div>
                    <div class="c x47 y12e w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y12e w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">DICT R9</div></div>
                    <div class="c x4b y12e w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y12f w3a h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y12f w39 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/8/2022</div></div>
                    <div class="c x48 y12f w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/8/2022</div></div>
                    <div class="c x47 y12f w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y12f w3b h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R10</div></div>
                    <div class="c x4b y12f w3c h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y130 w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y130 w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/9/2022</div></div>
                    <div class="c x48 y130 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/9/2022</div></div>
                    <div class="c x47 y130 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y130 w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R11</div></div>
                    <div class="c x4b y130 w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y131 w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y131 w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">1/10/2022</div></div>
                    <div class="c x48 y131 w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">1/10/2022</div></div>
                    <div class="c x47 y131 w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y131 w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">DICT R12</div></div>
                    <div class="c x4b y131 w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y132 w3a h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y132 w39 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/11/2022</div></div>
                    <div class="c x48 y132 w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/11/2022</div></div>
                    <div class="c x47 y132 w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y132 w3b h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R13</div></div>
                    <div class="c x4b y132 w3c h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y133 w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y133 w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/12/2022</div></div>
                    <div class="c x48 y133 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/12/2022</div></div>
                    <div class="c x47 y133 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y133 w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R14</div></div>
                    <div class="c x4b y133 w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y134 w3a h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y134 w39 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">1/13/2022</div></div>
                    <div class="c x48 y134 w37 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">1/13/2022</div></div>
                    <div class="c x47 y134 w37 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y134 w3b h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">DICT R15</div></div>
                    <div class="c x4b y134 w3c h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y136 w3a h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y136 w39 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">1/14/2022</div></div>
                    <div class="c x48 y136 w37 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">1/14/2022</div></div>
                    <div class="c x47 y136 w37 h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y136 w3b h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">DICT R16</div></div>
                    <div class="c x4b y136 w3c h62"><div class="t m0 x2 h60 y135 ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y137 w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y137 w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">1/15/2022</div></div>
                    <div class="c x48 y137 w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">1/15/2022</div></div>
                    <div class="c x47 y137 w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y137 w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">DICT R17</div></div>
                    <div class="c x4b y137 w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y138 w3a h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y138 w39 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/16/2022</div></div>
                    <div class="c x48 y138 w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/16/2022</div></div>
                    <div class="c x47 y138 w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y138 w3b h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R18</div></div>
                    <div class="c x4b y138 w3c h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y139 w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y139 w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/17/2022</div></div>
                    <div class="c x48 y139 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/17/2022</div></div>
                    <div class="c x47 y139 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y139 w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R19</div></div>
                    <div class="c x4b y139 w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y13a w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y13a w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/18/2022</div></div>
                    <div class="c x48 y13a w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/18/2022</div></div>
                    <div class="c x47 y13a w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y13a w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R20</div></div>
                    <div class="c x4b y13a w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y13b w3a h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y13b w39 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">1/19/2022</div></div>
                    <div class="c x48 y13b w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">1/19/2022</div></div>
                    <div class="c x47 y13b w37 h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y13b w3b h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">DICT R21</div></div>
                    <div class="c x4b y13b w3c h5f"><div class="t m0 x2 h60 y12d ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y13c w3a h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y13c w39 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/20/2022</div></div>
                    <div class="c x48 y13c w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/20/2022</div></div>
                    <div class="c x47 y13c w37 h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y13c w3b h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R22</div></div>
                    <div class="c x4b y13c w3c h61"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y13d w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y13d w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/21/2022</div></div>
                    <div class="c x48 y13d w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/21/2022</div></div>
                    <div class="c x47 y13d w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y13d w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R23</div></div>
                    <div class="c x4b y13d w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y13e w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y13e w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/22/2022</div></div>
                    <div class="c x48 y13e w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/22/2022</div></div>
                    <div class="c x47 y13e w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y13e w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R24</div></div>
                    <div class="c x4b y13e w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y13f w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y13f w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/23/2022</div></div>
                    <div class="c x48 y13f w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/23/2022</div></div>
                    <div class="c x47 y13f w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y13f w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R25</div></div>
                    <div class="c x4b y13f w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y140 w3a h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y140 w39 h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0">1/24/2022</div></div>
                    <div class="c x48 y140 w37 h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0">1/24/2022</div></div>
                    <div class="c x47 y140 w37 h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y140 w3b h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0">DICT R26</div></div>
                    <div class="c x4b y140 w3c h61"><div class="t m0 x2 h60 y141 ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y142 w3a h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Introduction to UI/UX Design</div></div>
                    <div class="c x45 y142 w39 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/25/2022</div></div>
                    <div class="c x48 y142 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">1/25/2022</div></div>
                    <div class="c x47 y142 w37 h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">3.0</div></div>
                    <div class="c x3e y142 w3b h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">DICT R27</div></div>
                    <div class="c x4b y142 w3c h5f"><div class="t m0 x2 h60 y12b ff1 fs13 fc0 sc0 ls0 ws0">Ms. Maria Teresa M. Camba</div></div>
                    <div class="c x10 y143 w33 h63"><div class="t m0 x49 h5a y10a ff5 fsf fc3 sc0 ls0 ws0">(Continue on separate sheet if necessary)</div></div>
                    <div class="c x10 y144 w33 h50"><div class="t m0 x2 h39 y104 ff5 fsb fc1 sc0 ls0 ws0">VIII. OTHER INFORMATION</div></div>
                    <div class="c x10 y145 w34 h64"><div class="t m0 xe h52 y146 ff4 fsf fc0 sc0 ls0 ws0">31.</div></div>
                    <div class="c xb y145 w3d h64"><div class="t m0 x28 h52 y146 ff4 fsf fc0 sc0 ls0 ws0">SPECIAL SKILLS and HOBBIES</div></div>
                    <div class="c x4 y145 w3e h64"><div class="t m0 x7 h52 y146 ff4 fsf fc0 sc0 ls0 ws0">32.</div></div>
                    <div class="c x4c y145 w3f h64">
                        <div class="t m0 x4d h52 y147 ff4 fsf fc0 sc0 ls0 ws0">NON-ACADEMIC DISTINCTIONS / RECOGNITION</div>
                        <div class="t m0 x4e h52 y148 ff4 fsf fc0 sc0 ls0 ws0">(Write in full)</div>
                    </div>
                    <div class="c x4b y145 w40 h64"><div class="t m0 x24 h52 y146 ff4 fsf fc0 sc0 ls0 ws0">33.</div></div>
                    <div class="c x4f y145 w41 h64">
                        <div class="t m0 x40 h52 y147 ff4 fsf fc0 sc0 ls0 ws0">MEMBERSHIP IN ASSOCIATION/ORGANIZATION</div>
                        <div class="t m0 x6 h52 y148 ff4 fsf fc0 sc0 ls0 ws0">(Write in full)</div>
                    </div>
                    <div class="c x10 y149 w42 h5f"><div class="t m0 xe h57 y14a ff1 fs11 fc0 sc0 ls0 ws0">PHP, PHP Frameworks (Codeigniter, Laravel)</div></div>
                    <div class="c x4 y149 w43 h5f"><div class="t m0 x50 h57 y14a ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x4b y149 w3c h5f"><div class="t m0 x1e h57 y14a ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x10 y14b w42 h5f"><div class="t m0 x42 h57 y14c ff1 fs11 fc0 sc0 ls0 ws0">HTML, CSS, Javascript, Jquery</div></div>
                    <div class="c x4 y14b w43 h5f"><div class="t m0 x50 h57 y14c ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x4b y14b w3c h5f"><div class="t m0 x1e h57 y14c ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x10 y14d w42 h61"><div class="t m0 x17 h57 y14c ff1 fs11 fc0 sc0 ls0 ws0">Wordpress Development</div></div>
                    <div class="c x4 y14d w43 h61"><div class="t m0 x50 h57 y14c ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x4b y14d w3c h61"><div class="t m0 x1e h57 y14c ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x10 y14e w42 h5f">
                        <div class="t m0 x0 h57 y14f ff1 fs11 fc0 sc0 ls0 ws0">Computer Hardware and Software trouble</div>
                        <div class="t m0 x12 h57 y150 ff1 fs11 fc0 sc0 ls0 ws0">shooting</div>
                    </div>
                    <div class="c x4 y14e w43 h5f"><div class="t m0 x50 h57 y14c ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x4b y14e w3c h5f"><div class="t m0 x1e h57 y14c ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x10 y151 w42 h5f"><div class="t m0 x8 h57 y14a ff1 fs11 fc0 sc0 ls0 ws0">Computer Application (MS Office)</div></div>
                    <div class="c x4 y151 w43 h5f"><div class="t m0 x50 h57 y14a ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x4b y151 w3c h5f"><div class="t m0 x1e h57 y14a ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x10 y152 w42 h5f"><div class="t m0 x19 h57 y14a ff1 fs11 fc0 sc0 ls0 ws0">Adobe photoshop</div></div>
                    <div class="c x4 y152 w43 h5f"><div class="t m0 x50 h57 y14a ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x4b y152 w3c h5f"><div class="t m0 x1e h57 y14a ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x10 y153 w42 h65"><div class="t m0 x1f h57 y154 ff1 fs11 fc0 sc0 ls0 ws0">na</div></div>
                    <div class="c x4 y153 w43 h65"><div class="t m0 x50 h57 y154 ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x4b y153 w3c h65"><div class="t m0 x1e h57 y154 ff1 fs11 fc0 sc0 ls0 ws0">N/A</div></div>
                    <div class="c x10 y155 w33 h59"><div class="t m0 x49 h5a y118 ff5 fsf fc3 sc0 ls0 ws0">(Continue on separate sheet if necessary)</div></div>
                    <div class="c x10 y156 w42 h66"><div class="t m0 x6 h39 y157 ff5 fsb fc0 sc0 ls0 ws0">SIGNATURE</div></div>
                    <div class="c x47 y156 w44 h66"><div class="t m0 x17 h39 y157 ff5 fsb fc0 sc0 ls0 ws0">DATE</div></div>
                    <div class="c x4b y156 w3c h66"><div class="t m0 x13 h39 y157 ff5 fsb fc0 sc0 ls0 ws0">November 22, 2022</div></div>
                    <div class="c x51 y158 w45 h67"><div class="t m0 x24 h68 y159 ff7 fs12 fc0 sc0 ls0 ws0">CS FORM 212 (Revised 2017), Page 3 of 4</div></div>
                </div>
                <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
            </div>
            <div id="pf4" class="pf w46 h69" data-page-no="4">
                <div class="pc pc4 w46 h69">
                    <img class="bi xc y15a w47 h6a" alt="" src="bg4.png" />
                    <div class="c x52 y15b w48 h6b"><div class="t m0 x7 h6c y15c ff4 fs14 fc0 sc0 ls0 ws0">34.</div></div>
                    <div class="c x28 y15b w49 h6b"><div class="t m0 x2 h6d y15d ff4 fs9 fc0 sc0 ls0 ws0">Are you related by consanguinity or affinity to the appointing or recommending authority, or to the</div></div>
                    <div class="c x28 y15e w49 h6e"><div class="t m0 x2 h6d y15f ff4 fs9 fc0 sc0 ls0 ws0">chief of bureau or office or to the person who has immediate supervision over you in the Office,</div></div>
                    <div class="c x28 y160 w49 h6f"><div class="t m0 x2 h6d y161 ff4 fs9 fc0 sc0 ls0 ws0">Bureau or Department where you will be apppointed,</div></div>
                    <div class="c x28 y162 w49 h70"><div class="t m0 x2 h6d y163 ff4 fs9 fc0 sc0 ls0 ws0">a. within the third degree?</div></div>
                    <div class="c x28 y164 w49 h71"><div class="t m0 x2 h6d y165 ff4 fs9 fc0 sc0 ls0 ws0">b. within the fourth degree (for Local Government Unit - Career Employees)?</div></div>
                    <div class="c x53 y166 w4a h6e">
                        <div class="t m0 x2 h6d y15f ff4 fs9 fc0 sc0 ls0 ws0">If YES, give details:</div>
                        <div class="t m0 x2 h6d y167 ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                        <div class="t m0 x2 h6d y168 ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                    </div>
                    <div class="c x54 y169 w4b h72">
                        <div class="t m0 x2 h6d y16a ff4 fs9 fc0 sc0 ls0 ws0">sadasds</div>
                        <div class="t m0 x2 h6d y16b ff4 fs9 fc0 sc0 ls0 ws0">s</div>
                    </div>
                    <div class="c x52 y16c w48 h73"><div class="t m0 x7 h6c y16d ff4 fs14 fc0 sc0 ls0 ws0">35.</div></div>
                    <div class="c x28 y16e w49 h74"><div class="t m0 x2 h6d y16f ff4 fs9 fc0 sc0 ls0 ws0">a. Have you ever been found guilty of any administrative offense?</div></div>
                    <div class="c x53 y170 w4a h72">
                        <div class="t m0 x2 h6d y16a ff4 fs9 fc0 sc0 ls0 ws0">If YES, give details:</div>
                        <div class="t m0 x2 h6d y16b ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                        <div class="t m0 x2 h6d y171 ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                    </div>
                    <div class="c x54 y172 w4b h70"><div class="t m0 x2 h6d y173 ff4 fs9 fc0 sc0 ls0 ws0">dsadasas</div></div>
                    <div class="c x28 y174 w49 h75">
                        <div class="t m0 x2 h6d y175 ff4 fs9 fc0 sc0 ls0 ws0">b. Have you been criminally charged before any court?</div>
                        <div class="t m0 x2 h6d y176 ff4 fs9 fc0 sc0 ls0 ws0"></div>
                    </div>
                    <div class="c x53 y177 w4a h72">
                        <div class="t m0 x2 h6d y16a ff4 fs9 fc0 sc0 ls0 ws0">If YES, give details:</div>
                        <div class="t m0 x2 h6d y16b ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                        <div class="t m0 x2 h6d y171 ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                    </div>
                    <div class="c x54 y178 w4c h70"><div class="t m0 x0 h6d y179 ff4 fs9 fc0 sc0 ls0 ws0">Date Filed:</div></div>
                    <div class="c x55 y178 w4d h70"><div class="t m0 x2 h6d y179 ff4 fs9 fc0 sc0 ls0 ws0">4342423</div></div>
                    <div class="c x53 y17a w4e h72"><div class="t m0 x52 h6d y179 ff4 fs9 fc0 sc0 ls0 ws0">Status of Case/s:</div></div>
                    <div class="c x55 y17a w4d h72"><div class="t m0 x2 h6d y179 ff4 fs9 fc0 sc0 ls0 ws0">32324</div></div>
                    <div class="c x52 y17b w48 h73"><div class="t m0 x7 h6c y16d ff4 fs14 fc0 sc0 ls0 ws0">36.</div></div>
                    <div class="c x28 y17c w49 h76">
                        <div class="t m0 x2 h6d y17d ff4 fs9 fc0 sc0 ls0 ws0">Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation</div>
                        <div class="t m0 x2 h6d y17e ff4 fs9 fc0 sc0 ls0 ws0">by any court or tribunal?</div>
                    </div>
                    <div class="c x53 y17f w4a h77">
                        <div class="t m0 x2 h6d y180 ff4 fs9 fc0 sc0 ls0 ws0">If YES, give details:</div>
                        <div class="t m0 x2 h6d y181 ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                        <div class="t m0 x2 h6d y182 ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                    </div>
                    <div class="c x54 y183 w4b h77"><div class="t m0 x2 h6d y184 ff4 fs9 fc0 sc0 ls0 ws0">3244</div></div>
                    <div class="c x52 y185 w48 h70"><div class="t m0 x7 h6c y186 ff4 fs14 fc0 sc0 ls0 ws0">37.</div></div>
                    <div class="c x28 y187 w49 h78">
                        <div class="t m0 x2 h6d y188 ff4 fs9 fc0 sc0 ls0 ws0">Have you ever been separated from the service in any of the following modes: resignation,</div>
                        <div class="t m0 x2 h6d y189 ff4 fs9 fc0 sc0 ls0 ws0">retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased</div>
                        <div class="t m0 x2 h6d y18a ff4 fs9 fc0 sc0 ls0 ws0">out (abolition) in the public or private sector?</div>
                    </div>
                    <div class="c x53 y18b w4a h79">
                        <div class="t m0 x2 h6d y18c ff4 fs9 fc0 sc0 ls0 ws0">If YES, give details:</div>
                        <div class="t m0 x2 h6d y18d ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                        <div class="t m0 x2 h6d y18e ff4 fs9 fc0 sc0 ls0 ws0">________________________________</div>
                    </div>
                    <div class="c x54 y18f w4f h7a"><div class="t m0 x2 h33 y179 ff9 fs9 fc0 sc0 ls0 ws0">dsfsdfsd</div></div>
                    <div class="c x52 y190 w48 h7b"><div class="t m0 x7 h6c y191 ff4 fs14 fc0 sc0 ls0 ws0">38.</div></div>
                    <div class="c x28 y192 w49 h7c">
                        <div class="t m0 x2 h6d y193 ff4 fs9 fc0 sc0 ls0 ws0">a. Have you ever been a candidate in a national or local election held within the last year (except</div>
                        <div class="t m0 x2 h6d y194 ff4 fs9 fc0 sc0 ls0 ws0">Barangay election)?</div>
                    </div>
                    <div class="c x53 y192 w50 h79"><div class="t m0 x10 h6d y195 ff4 fs9 fc0 sc0 ls0 ws0">If YES, give details:</div></div>
                    <div class="c x55 y192 w51 h79"><div class="t m0 x2 h33 y179 ff9 fs9 fc0 sc0 ls0 ws0">sadadsdas</div></div>
                    <div class="c x28 y196 w49 h7d">
                        <div class="t m0 x2 h6d y197 ff4 fs9 fc0 sc0 ls0 ws0">b. Have you resigned from the government service during the three (3)-month period before the last</div>
                        <div class="t m0 x2 h6d y198 ff4 fs9 fc0 sc0 ls0 ws0">election to promote/actively campaign for a national or local candidate?</div>
                    </div>
                    <div class="c x53 y199 w50 h72"><div class="t m0 x10 h6d y173 ff4 fs9 fc0 sc0 ls0 ws0">If YES, give details:</div></div>
                    <div class="c x55 y199 w51 h72"><div class="t m0 x2 h33 y179 ff9 fs9 fc0 sc0 ls0 ws0">asds</div></div>
                    <div class="c x52 y19a w48 h7b"><div class="t m0 x7 h6c y191 ff4 fs14 fc0 sc0 ls0 ws0">39.</div></div>
                    <div class="c x28 y19b w49 h7e"><div class="t m0 x2 h6d y19c ff4 fs9 fc0 sc0 ls0 ws0">Have you acquired the status of an immigrant or permanent resident of another country?</div></div>
                    <div class="c x53 y19d w52 h79"><div class="t m0 x2 h6d y18c ff4 fs9 fc0 sc0 ls0 ws0">If YES, give details (country):</div></div>
                    <div class="c x54 y19e w4f h72"><div class="t m0 x2 h6d y19f ff4 fs9 fc0 sc0 ls0 ws0">dasdas</div></div>
                    <div class="c x52 y1a0 w48 h7f"><div class="t m0 x7 h6c y1a1 ff4 fs14 fc0 sc0 ls0 ws0">40.</div></div>
                    <div class="c x28 y1a2 w49 h80">
                        <div class="t m0 x2 h6d y1a3 ff4 fs9 fc0 sc0 ls0 ws0">Pursuant to: (a) Indigenous People&apos;s Act (RA 8371); (b) Magna Carta for Disabled Persons (RA</div>
                        <div class="t m0 x2 h6d y1a4 ff4 fs9 fc0 sc0 ls0 ws0">7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:</div>
                    </div>
                    <div class="c x52 y1a5 w53 h6b"><div class="t m0 x2 h6c y1a6 ff4 fs14 fc0 sc0 ls0 ws0">a.</div></div>
                    <div class="c x28 y1a7 w49 h81"><div class="t m0 x2 h6d y1a8 ff4 fs9 fc0 sc0 ls0 ws0">Are you a member of any indigenous group?</div></div>
                    <div class="c x53 y1a7 w50 h77"><div class="t m0 x2 h6d y1a9 ff4 fs9 fc0 sc0 ls0 ws0">If YES, please specify:</div></div>
                    <div class="c x30 y1a7 w54 h77"><div class="t m0 x2 h6d y1aa ff4 fs9 fc0 sc0 ls0 ws0">dsas</div></div>
                    <div class="c x52 y1ab w53 h82"><div class="t m0 x2 h6c y1ac ff4 fs14 fc0 sc0 ls0 ws0">b.</div></div>
                    <div class="c x28 y1ad w49 h7f"><div class="t m0 x2 h6d y1ae ff4 fs9 fc0 sc0 ls0 ws0">Are you a person with disability?</div></div>
                    <div class="c x53 y1ad w55 h77"><div class="t m0 x2 h6d y1a9 ff4 fs9 fc0 sc0 ls0 ws0">If YES, please specify ID No:</div></div>
                    <div class="c x30 y1ad w54 h77"><div class="t m0 x2 h6d y1aa ff4 fs9 fc0 sc0 ls0 ws0">dsa</div></div>
                    <div class="c x52 y1af w53 h6b"><div class="t m0 x2 h6c y1a6 ff4 fs14 fc0 sc0 ls0 ws0">c.</div></div>
                    <div class="c x28 y1af w56 h6b"><div class="t m0 x2 h6d y15d ff4 fs9 fc0 sc0 ls0 ws0">Are you a solo parent?</div></div>
                    <div class="c x53 y1b0 w55 h6f"><div class="t m0 x2 h6d y1b1 ff4 fs9 fc0 sc0 ls0 ws0">If YES, please specify ID No:</div></div>
                    <div class="c x30 y1b0 w54 h6f"><div class="t m0 x2 h6d y195 ff4 fs9 fc0 sc0 ls0 ws0">das</div></div>
                    <div class="c x52 y1b2 w48 h83"><div class="t m0 x7 h6c y1b3 ff4 fs14 fc0 sc0 ls0 ws0">41.</div></div>
                    <div class="c x28 y1b2 w49 h83">
                        <div class="t m0 x2 h6c y1b3 ff4 fs14 fc0 sc0 ls0 ws0">REFERENCES <span class="fc3">(Person not related by consanguinity or affinity to applicant /appointee)</span></div>
                    </div>
                    <div class="c x52 y1b4 w57 h73"><div class="t m0 x56 h6c y16d ff4 fs14 fc0 sc0 ls0 ws0">NAME</div></div>
                    <div class="c x57 y1b4 w58 h73"><div class="t m0 x16 h6c y16d ff4 fs14 fc0 sc0 ls0 ws0">ADDRESS</div></div>
                    <div class="c x53 y1b4 w4e h73"><div class="t m0 x8 h6c y16d ff4 fs14 fc0 sc0 ls0 ws0">TEL. NO.</div></div>
                    <div class="c x52 y1b5 w57 h84"><div class="t m0 x3a h33 y1b6 ff1 fs9 fc0 sc0 ls0 ws0">Jerick Repomanta</div></div>
                    <div class="c x57 y1b5 w58 h84">
                        <div class="t m0 xc h85 y1b7 ff1 fs15 fc0 sc0 ls0 ws0">Golden Sands Hotel Apartment dubai</div>
                        <div class="t m0 x14 h85 y1b8 ff1 fs15 fc0 sc0 ls0 ws0">UAE</div>
                    </div>
                    <div class="c x53 y1b5 w4e h84"><div class="t m0 x10 h86 y1b9 ffc fs15 fc0 sc0 ls0 ws0">504305376</div></div>
                    <div class="c x52 y1ba w57 h84"><div class="t m0 x58 h33 y1bb ff1 fs9 fc0 sc0 ls0 ws0">Jonathan R. Bacolod</div></div>
                    <div class="c x57 y1ba w58 h84">
                        <div class="t m0 x40 h85 y1bc ff1 fs15 fc0 sc0 ls0 ws0">2452 Lansones St., Ascoville, Malaria,</div>
                        <div class="t m0 x19 h85 y1bd ff1 fs15 fc0 sc0 ls0 ws0">Caloocan City</div>
                    </div>
                    <div class="c x53 y1ba w4e h84"><div class="t m0 x0 h86 y1b9 ffc fs15 fc0 sc0 ls0 ws0">9128389571</div></div>
                    <div class="c x52 y1be w57 h87"><div class="t m0 x58 h33 y1b6 ff1 fs9 fc0 sc0 ls0 ws0">Jonathan R. Bacolod</div></div>
                    <div class="c x57 y1be w58 h87">
                        <div class="t m0 x40 h85 y1b7 ff1 fs15 fc0 sc0 ls0 ws0">2452 Lansones St., Ascoville, Malaria,</div>
                        <div class="t m0 x19 h85 y1b8 ff1 fs15 fc0 sc0 ls0 ws0">Caloocan City</div>
                    </div>
                    <div class="c x53 y1be w4e h87"><div class="t m0 x0 h86 y1bf ffc fs15 fc0 sc0 ls0 ws0">9128389571</div></div>
                    <div class="c x52 y1c0 w48 h88"><div class="t m0 x7 h6c y1c1 ff4 fs14 fc0 sc0 ls0 ws0">42.</div></div>
                    <div class="c x28 y1c2 w59 h89">
                        <div class="t m0 x2 h6d y1c3 ff4 fs9 fc0 sc0 ls0 ws0">
                            I<span class="_ _3"></span> <span class="_ _3"></span>declare<span class="_ _3"></span> <span class="_ _3"></span>under<span class="_ _3"></span> <span class="_ _3"></span>oath<span class="_ _3"></span>
                            <span class="_ _3"></span>that<span class="_ _3"></span> <span class="_ _3"></span>I<span class="_ _3"></span> <span class="_ _3"></span>have<span class="_ _3"></span> <span class="_ _3"></span>personally
                            <span class="_ _3"></span> <span class="_ _3"></span>accomplished<span class="_ _3"></span> <span class="_ _3"></span>this<span class="_ _3"></span> <span class="_ _3"></span>Personal<span class="_ _3"></span>
                            <span class="_ _3"></span>Data<span class="_ _3"></span> <span class="_ _3"></span>Sheet<span class="_ _3"></span> <span class="_ _3"></span>which<span class="_ _3"></span> <span class="_ _3"></span>is
                            <span class="_ _3"></span> <span class="_ _3"></span>a<span class="_ _3"></span> <span class="_ _3"></span>true,<span class="_ _3"></span> <span class="_ _3"></span>correct<span class="_ _3"></span>
                            <span class="_ _3"></span>and
                        </div>
                        <div class="t m0 x2 h6d y17d ff4 fs9 fc0 sc0 ls0 ws0">
                            complete<span class="_ _4"></span> <span class="_ _4"></span>statement<span class="_ _4"></span> <span class="_ _4"></span>pursuant<span class="_ _4"></span> <span class="_ _4"></span>to
                            <span class="_ _4"></span> <span class="_ _4"></span>the<span class="_ _4"></span> <span class="_ _4"></span>provisions<span class="_ _4"></span> <span class="_ _4"></span>of<span class="_ _4"></span>
                            <span class="_ _4"></span>pertinent<span class="_ _4"></span> <span class="_ _4"></span>laws,<span class="_ _4"></span> <span class="_ _3"></span>rules<span class="_ _4"> </span> <span class="_ _4"> </span>and
                            <span class="_ _4"> </span> <span class="_ _4"> </span>regulations<span class="_ _4"> </span> <span class="_ _4"> </span>of<span class="_ _4"> </span> <span class="_ _4"> </span>the<span class="_ _4"> </span>
                            <span class="_ _4"> </span>Republic<span class="_ _4"> </span> <span class="_ _4"> </span>of<span class="_ _4"> </span> <span class="_ _4"> </span>the
                        </div>
                        <div class="t m0 x2 h6d y17e ff4 fs9 fc0 sc0 ls0 ws0">
                            Philippines.<span class="_ _3"></span> <span class="_ _4"> </span>I<span class="_ _4"></span> <span class="_ _4"></span>authorize<span class="_ _3"></span> <span class="_ _4"> </span>the
                            <span class="_ _4"></span> <span class="_ _4"></span>agency<span class="_ _3"></span> <span class="_ _4"></span>head/authorized<span class="_ _4"></span> <span class="_ _4"></span>representative
                            <span class="_ _3"></span> <span class="_ _4"></span>to<span class="_ _4"></span> <span class="_ _3"></span>verify/validate<span class="_ _4"> </span> <span class="_ _4"></span>the<span class="_ _4"></span>
                            <span class="_ _3"></span>contents<span class="_ _4"> </span> <span class="_ _4"></span>stated<span class="_ _4"></span> <span class="_ _3"></span>herein.
                        </div>
                        <div class="t m0 x2 h6d y1a8 ff4 fs9 fc0 sc0 ls0 ws0">
                            I<span class="_ _1"> </span> <span class="_ _1"> </span>agree<span class="_ _1"> </span> <span class="_ _1"> </span>that<span class="_ _1"> </span> <span class="_ _5"> </span>any<span class="_ _5"> </span>
                            <span class="_ _1"> </span>misrepresentation<span class="_ _1"> </span> <span class="_ _1"> </span>made<span class="_ _1"> </span> <span class="_ _1"> </span>in<span class="_ _5"> </span>
                            <span class="_ _1"> </span>this<span class="_ _1"> </span> <span class="_ _1"> </span>document<span class="_ _1"> </span> <span class="_ _1"> </span>and<span class="_ _5"> </span> <span class="_ _1"> </span>its
                            <span class="_ _1"> </span> <span class="_ _1"> </span>attachments<span class="_ _1"> </span> <span class="_ _1"> </span>shall<span class="_ _5"> </span> <span class="_ _1"> </span>cause
                            <span class="_ _1"> </span> <span class="_ _1"> </span>the<span class="_ _1"> </span> <span class="_ _1"> </span>filing<span class="_ _5"> </span> <span class="_ _1"> </span>of
                        </div>
                        <div class="t m0 x2 h6d y1c4 ff4 fs9 fc0 sc0 ls0 ws0">administrative/criminal case/s against me.</div>
                    </div>
                    <div class="c x55 y1c5 w51 h6b"><div class="t m0 x6 h6c y1c6 ff4 fs14 fc4 sc0 ls0 ws0">PHOTO</div></div>
                    <div class="c x32 y1c7 w5a h8a">
                        <div class="t m0 x2 h8b y1c8 ff4 fs15 fc0 sc0 ls0 ws0">
                            Government Issued ID<span class="fs2"> <span class="fs16">(i.e.Passport, GSIS, SSS, PRC, Driver&apos;s License, etc.)</span></span>
                        </div>
                        <div class="t m0 x2 h85 y1c9 ff6 fs15 fc0 sc0 ls0 ws0">PLEASE INDICATE ID Number and Date of Issuance</div>
                    </div>
                    <div class="c x32 y1ca w5b h8c"><div class="t m0 x2 h6c y1cb ff4 fs14 fc0 sc0 ls0 ws0">Government Issued ID:</div></div>
                    <div class="c x59 y1ca w5c h8c"><div class="t m0 x2 h8d y1cb ff1 fs14 fc0 sc0 ls0 ws0">3434343</div></div>
                    <div class="c x32 y1cc w5b h8e"><div class="t m0 x2 h6c y1cd ff4 fs14 fc0 sc0 ls0 ws0">ID/License/Passport No.:</div></div>
                    <div class="c x59 y1cc w5c h8e"><div class="t m0 x2 h8d y1cd ff1 fs14 fc0 sc0 ls0 ws0">423</div></div>
                    <div class="c x57 y1cc w5d h6f"><div class="t m0 x14 h6c y1ce ff4 fs14 fc0 sc0 ls0 ws0">Signature (Sign inside the box)</div></div>
                    <div class="c x32 y1cf w5b h8f"><div class="t m0 x2 h6c y1b3 ff4 fs14 fc0 sc0 ls0 ws0">Date/Place of Issuance:</div></div>
                    <div class="c x59 y1cf w5c h8f"><div class="t m0 x2 h8d y1b3 ff1 fs14 fc0 sc0 ls0 ws0">4234</div></div>
                    <div class="c x57 y1d0 w58 h90"><div class="t m0 x3d h6d y1d1 ff4 fs9 fc0 sc0 ls0 ws0">November 22, 2022</div></div>
                    <div class="c x57 y1cf w5d h6e"><div class="t m0 x5a h6c y1d2 ff4 fs14 fc0 sc0 ls0 ws0">Date Accomplished</div></div>
                    <div class="c x55 y1cf w51 h6e"><div class="t m0 x43 h6c y1d2 ff4 fs14 fc0 sc0 ls0 ws0">Right Thumbmark</div></div>
                    <div class="c x52 y1d3 w5e h7f"><div class="t m0 x15 h8b y1d4 ff4 fs15 fc0 sc0 ls0 ws0">SUBSCRIBED AND SWORN to before me this , affiant exhibiting his/her validly issued government ID as indicated above.</div></div>
                    <div class="c x5b y1d5 w5f h7b"><div class="t m0 x1e h6d y1d6 ff4 fs9 fc0 sc0 ls0 ws0">Person Administering Oath</div></div>
                    <div class="c x52 y1d7 w5e h91"><div class="t m0 x5c h7 y1d8 ff6 fs2 fc0 sc0 ls0 ws0">CS FORM 212 (Revised 2017), Page 4 of 4</div></div>
                    <div class="c xc y91 w60 h92">
                        <div class="t m3 x5d h93 y1d9 ff9 fs17 fc0 sc0 ls0 ws0">ID picture taken within</div>
                        <div class="t m3 x5e h93 y1da ff9 fs17 fc0 sc0 ls0 ws0">the last<span class="_ _6"> </span>6 months</div>
                        <div class="t m3 x5f h93 y1db ff9 fs17 fc0 sc0 ls0 ws0">4.5 cm. X 3.5 cm</div>
                        <div class="t m3 x60 h93 y1dc ff9 fs17 fc0 sc0 ls0 ws0">(passport size)</div>
                        <div class="t m3 x51 h93 y1dd ff9 fs17 fc0 sc0 ls0 ws0">Computer generated</div>
                        <div class="t m3 x5d h93 y1de ff9 fs17 fc0 sc0 ls0 ws0">or photocopied picture</div>
                        <div class="t m3 x5f h93 y1df ff9 fs17 fc0 sc0 ls0 ws0">is not acceptable</div>
                        <div class="t m3 x61 h94 y1e0 ffb fs18 fc0 sc0 ls0 ws0">YES<span class="_ _7"> </span> NO</div>
                        <div class="t m3 x61 h94 y1e1 ffb fs18 fc0 sc0 ls0 ws0">YES</div>
                        <div class="t m3 x4b h94 y1e2 ffb fs18 fc0 sc0 ls0 ws0">NO</div>
                        <div class="t m3 x62 h94 y1e3 ffb fs18 fc0 sc0 ls0 ws0">YES<span class="_ _8"> </span> NO</div>
                        <div class="t m3 x62 h94 y1e4 ffb fs18 fc0 sc0 ls0 ws0">YES<span class="_ _9"> </span> NO</div>
                        <div class="t m3 x62 h94 y1e5 ffb fs18 fc0 sc0 ls0 ws0">YES<span class="_ _a"> </span> NO</div>
                        <div class="t m3 x63 h94 y1e6 ffb fs18 fc0 sc0 ls0 ws0">YES<span class="_ _b"> </span> NO</div>
                        <div class="t m3 x62 h94 y1e7 ffb fs18 fc0 sc0 ls0 ws0">YES<span class="_ _c"> </span> NO</div>
                        <div class="t m3 x62 h94 y1e8 ffb fs18 fc0 sc0 ls0 ws0">YES</div>
                        <div class="t m3 x62 h94 y1e9 ffb fs18 fc0 sc0 ls0 ws0">YES</div>
                        <div class="t m3 x62 h94 y1ea ffb fs18 fc0 sc0 ls0 ws0">YES</div>
                        <div class="t m3 x64 h94 y1e8 ffb fs18 fc0 sc0 ls0 ws0">NO</div>
                        <div class="t m3 x64 h94 y1e9 ffb fs18 fc0 sc0 ls0 ws0">NO</div>
                        <div class="t m3 x64 h94 y1ea ffb fs18 fc0 sc0 ls0 ws0">NO</div>
                        <div class="t m3 x62 h94 y1eb ffb fs18 fc0 sc0 ls0 ws0">YES<span class="_ _c"> </span> NO</div>
                        <div class="t m3 x62 h94 y1ec ffb fs18 fc0 sc0 ls0 ws0">YES</div>
                        <div class="t m3 x64 h94 y1ed ffb fs18 fc0 sc0 ls0 ws0">NO</div>
                    </div>
                </div>
                <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
            </div>
        </div>
        <div class="loading-indicator"></div>
    </body>
</html>
