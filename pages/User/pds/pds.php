
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

        <style>
           table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse !important;
                    padding:0 !important;
                    width:100%;
                    }
        @media print {
                #pf2 {margin:20px;}
      }    
      
      {mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6611111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6711111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl6811111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6911111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7011111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7111111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7211111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7311111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7411111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.00_\)\;\\\(0\.00\\\)";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7611111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.00_\)\;\\\(0\.00\\\)";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7711111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.0_\)\;\\\(0\.0\\\)";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7811111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.0_\)\;\\\(0\.0\\\)";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7911111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl8011111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl8111111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl8211111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl8311111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8411111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8611111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8711111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8811111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8911111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9011111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]mmmm\\ d\\\,\\ yyyy\;\@";
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9111111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9211111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9311111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl9411111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl9611111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl9711111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl9811111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9911111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10011111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10111111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10211111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10311111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10411111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10611111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10711111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10811111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10911111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl11011111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl11111111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11211111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11311111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl11411111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11611111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11711111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11811111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl11911111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl12011111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"mm\/dd\/yyyy";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12111111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12211111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl12311111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl12411111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl12511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl12611111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl12711111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl12811111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl12911111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13011111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13111111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13211111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13311111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"mm\/dd\/yyyy";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13411111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl13511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl13611111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13711111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl13811111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl13911111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl14011111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl14111111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl14211111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl14311111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl14411111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl14511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl14611111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl14711111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl14811111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl14911111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl15011111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl15111111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl15211111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl15311111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl15411111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl15511111
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}

    
        </style>
        
    </head>
    <body>
        <div id="sidebar">
            <div id="outline"></div>
        </div>
        <div id="page-container">
            
            <div id="pf1" class="pf w0 h0" data-page-no="1">
                <div class="pc pc1 w0 h0">
                   <?php echo fetch() ?>
                    
                   
                    
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
                   <p style="font-size:14px !important; font-family:arial;">I declare under oath  
                              that I have personally
                             accomplished this Personal  
                              Data Sheet which is
                             a true, correct  
                              and
                            complete   statement   pursuant   to
                               the   provisions   of 
                             pertinent   laws,   rules     and
                                 regulations     of     the  
                              Republic     of     the
                            Philippines.   I   authorize   the
                               agency  head/authorized   representative
                              to  verify/validate    the 
                            contents    stated  herein.
                            I   agree   that   any 
                             misrepresentation   made   in 
                             this   document   and   its
                               attachments   shall   cause
                               the   filing   of
                        administrative/criminal case/s against me.</p> 
                        <div class="t m0 x2 h6d y1c3 ff4 fs9 fc0 sc0 ls0 ws0">
                            </div>
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

    <script>
        // window.print();
        </script>
</html>
