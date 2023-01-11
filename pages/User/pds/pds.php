
<?php 
/// title of the syste: EPIS - Electronic Personal Information System/

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
