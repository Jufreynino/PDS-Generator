<?php

include('../function/function_pds.php');
include('../function/config.php');



session_start();
if(!isset($_SESSION['id']))
{

	header('location:../auth/login.php');
}
else
{

}

?><html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="c3_files/filelist.xml">
<style id="22_8470_Styles">
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl158470
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
.xl658470
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
.xl668470
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
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl678470
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
.xl688470
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
	white-space:nowrap;}
.xl698470
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
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl708470
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
	mso-number-format:"0\.0_\)\;\\\(0\.0\\\)";
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl718470
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
	mso-number-format:"0\.0_\)\;\\\(0\.0\\\)";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl728470
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl738470
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
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl748470
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
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl758470
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl768470
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
	text-align:right;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl778470
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
	text-align:right;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl788470
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
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl798470
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl808470
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl818470
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl828470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl838470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl848470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl858470
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl868470
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl878470
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
.xl888470
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
.xl898470
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
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl908470
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
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl918470
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
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl928470
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
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl938470
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl948470
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
.xl958470
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
.xl968470
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
.xl978470
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
.xl988470
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
.xl998470
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
.xl1008470
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
.xl1018470
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
.xl1028470
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
.xl1038470
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
.xl1048470
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
.xl1058470
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
.xl1068470
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
.xl1078470
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
.xl1088470
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
.xl1098470
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
.xl1108470
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
.xl1118470
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
.xl1128470
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
.xl1138470
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
.xl1148470
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
.xl1158470
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
	white-space:nowrap;}
.xl1168470
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
	white-space:nowrap;}
.xl1178470
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1188470
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
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1198470
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
	mso-number-format:General;
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
.xl1208470
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
	mso-number-format:General;
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
.xl1218470
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
	mso-number-format:General;
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
.xl1228470
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
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1238470
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1248470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1258470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1268470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1278470
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
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl1288470
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl1298470
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl1308470
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl1318470
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
	white-space:normal;}
.xl1328470
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
	white-space:normal;}
.xl1338470
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
	white-space:normal;}
.xl1348470
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
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl1358470
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
	white-space:normal;}
.xl1368470
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
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1378470
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
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1388470
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
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1398470
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1408470
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1418470
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
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1428470
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
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1438470
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
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl1448470
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
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl1458470
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
	vertical-align:bottom;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl1468470
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
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl1478470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1488470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1498470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1508470
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
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1518470
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
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1528470
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
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1538470
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1548470
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
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1558470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1568470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1578470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1588470
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
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl1598470
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
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl1608470
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl1618470
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl1628470
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl1638470
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
	white-space:normal;}
.xl1648470
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
	white-space:normal;}
.xl1658470
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
	white-space:normal;}
.xl1668470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1678470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1688470
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
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1698470
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl1708470
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl1718470
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
</style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="22_8470" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=995 style='border-collapse:
 collapse;table-layout:fixed;width:748pt'>
 <col width=26 style='mso-width-source:userset;mso-width-alt:950;width:20pt'>
 <col width=214 style='mso-width-source:userset;mso-width-alt:7826;width:161pt'>
 <col width=22 style='mso-width-source:userset;mso-width-alt:804;width:17pt'>
 <col width=145 style='mso-width-source:userset;mso-width-alt:5302;width:109pt'>
 <col width=72 style='mso-width-source:userset;mso-width-alt:2633;width:54pt'>
 <col width=71 span=2 style='mso-width-source:userset;mso-width-alt:2596;
 width:53pt'>
 <col width=79 style='mso-width-source:userset;mso-width-alt:2889;width:59pt'>
 <col width=21 style='mso-width-source:userset;mso-width-alt:768;width:16pt'>
 <col width=32 style='mso-width-source:userset;mso-width-alt:1170;width:24pt'>
 <col width=183 style='mso-width-source:userset;mso-width-alt:6692;width:137pt'>
 <col width=26 style='mso-width-source:userset;mso-width-alt:950;width:20pt'>
 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
 <tr height=4 style='mso-height-source:userset;height:3.0pt'>
  <td colspan=11 height=4 class=xl1368470 width=936 style='border-right:1.0pt solid black;
  height:3.0pt;width:703pt'><a name="RANGE!A1:K51">&nbsp;</a></td>
  <td class=xl158470 width=26 style='width:20pt'></td>
  <td class=xl158470 width=33 style='width:25pt'></td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td colspan=11 height=30 class=xl1558470 style='border-right:1.0pt solid black;
  height:22.5pt'>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT /
  PEOPLE / VOLUNTARY ORGANIZATION/S</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td rowspan=2 height=35 class=xl1418470 style='height:26.25pt;border-top:
  none'>29.</td>
  <td colspan=3 rowspan=2 class=xl1438470 width=381 style='border-right:.5pt solid black;
  width:287pt'>NAME &amp; ADDRESS OF ORGANIZATION<span
  style='mso-spacerun:yes'>
  </span>(Write in full)</td>
  <td colspan=2 rowspan=2 class=xl978470 width=143 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:107pt'>INCLUSIVE DATES<span
  style='mso-spacerun:yes'>
  </span>(mm/dd/yyyy)</td>
  <td rowspan=3 class=xl1278470 width=71 style='border-bottom:.5pt solid black;
  border-top:none;width:53pt'>NUMBER OF HOURS</td>
  <td colspan=4 rowspan=3 class=xl1018470 width=315 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black;width:236pt'>POSITION / NATURE OF WORK</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:11.25pt'>
  <td height=15 class=xl158470 style='height:11.25pt'></td>
  <td class=xl158470></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl668470 style='height:13.5pt'>&nbsp;</td>
  <td colspan=3 class=xl1588470 width=381 style='border-right:.5pt solid black;
  width:287pt'>&nbsp;</td>
  <td class=xl678470 style='border-top:none'>From</td>
  <td class=xl658470 style='border-top:none;border-left:none'>To</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>











<?php echo c3_fetch_voluntary() ?>




















 
 <tr height=15 style='mso-height-source:userset;height:11.25pt'>
  <td colspan=11 height=15 class=xl1128470 style='border-right:1.0pt solid black;
  height:11.25pt'>(Continue on separate sheet if necessary)</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=11 height=24 class=xl1638470 width=936 style='border-right:1.0pt solid black;
  height:18.0pt;width:703pt'>VII.<span style='mso-spacerun:yes'>
  </span>LEARNING AND DEVELOPMENT (L&amp;D) INTERVENTIONS/TRAINING PROGRAMS
  ATTENDED</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td rowspan=2 height=58 class=xl1428470 style='height:43.5pt'>30.</td>
  <td colspan=3 rowspan=3 class=xl1058470 width=381 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:287pt'>TITLE OF LEARNING AND DEVELOPMENT
  INTERVENTIONS/TRAINING PROGRAMS<span
  style='mso-spacerun:yes'> </span>(Write in
  full)</td>
  <td colspan=2 rowspan=2 class=xl1058470 width=143 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:107pt'>INCLUSIVE DATES OF
  ATTENDANCE<span
  style='mso-spacerun:yes'>
  </span>(mm/dd/yyyy)</td>
  <td rowspan=3 class=xl1028470 width=71 style='border-bottom:.5pt solid black;
  width:53pt'>NUMBER OF HOURS</td>
  <td rowspan=3 class=xl1078470 width=79 style='border-bottom:.5pt solid black;
  width:59pt'>Type of LD<br>
    <span style='mso-spacerun:yes'></span>( Managerial/ Supervisory/<br>
    Technical/etc)<span style='mso-spacerun:yes'></span></td>
  <td colspan=3 rowspan=3 class=xl1048470 width=236 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black;width:177pt'><span
  style='mso-spacerun:yes'></span>CONDUCTED/ SPONSORED BY<span
  style='mso-spacerun:yes'>
  </span>(Write in full)</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl158470 style='height:25.5pt'></td>
  <td class=xl158470></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl668470 style='height:13.5pt'>&nbsp;</td>
  <td class=xl678470 style='border-top:none'>From</td>
  <td class=xl658470 style='border-top:none;border-left:none'>To</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>



 <?php echo c3_fetch_learning()?>



 <tr height=18 style='height:13.5pt'>
  <td colspan=11 height=18 class=xl898470 style='border-right:1.0pt solid black;
  height:13.5pt'>(Continue on separate sheet if necessary)</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td colspan=11 height=30 class=xl1318470 width=936 style='border-right:1.0pt solid black;
  height:22.5pt;width:703pt'>VIII.<span style='mso-spacerun:yes'>??? </span>OTHER
  INFORMATION</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=45 style='mso-height-source:userset;height:33.75pt'>
  <td height=45 class=xl768470 style='height:33.75pt;border-top:none'>31.</td>
  <td class=xl788470 width=214 style='border-top:none;width:161pt'>SPECIAL
  SKILLS and HOBBIES</td>
  <td class=xl778470 width=22 style='border-top:none;width:17pt'>32.</td>
  <td colspan=5 class=xl788470 width=438 style='border-right:.5pt solid black;
  width:328pt'>NON-ACADEMIC DISTINCTIONS / RECOGNITION<span
  style='mso-spacerun:yes'>
  </span><br>(Write in full)</td>
  <td class=xl778470 width=21 style='border-top:none;border-left:none;
  width:16pt'>33.</td>
  <td colspan=2 class=xl788470 width=215 style='border-right:1.0pt solid black;
  width:161pt'>MEMBERSHIP IN ASSOCIATION/ORGANIZATION<span
  style='mso-spacerun:yes'>
  </span><br>(Write in full)</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.75pt'>
  <td colspan=2 height=33 class=xl1178470 width=240 style='border-right:.5pt solid black;
  height:24.75pt;width:181pt'>PHP, PHP Frameworks (Codeigniter, Laravel)</td>
  height:24.75pt;width:181pt'>PHP, PHP Frameworks (Codeigniter, Laravel)</td>
  height:24.75pt;width:181pt'>PHP, PHP Frameworks (Codeigniter, Laravel)</td>
  <td colspan=6 class=xl1098470 width=460 style='border-right:.5pt solid black;
  border-left:none;width:345pt'>N/A</td>
  <td colspan=3 class=xl1098470 width=236 style='border-right:1.0pt solid black;
  border-left:none;width:177pt'>N/A</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.75pt'>
  <td colspan=2 height=33 class=xl1178470 width=240 style='border-right:.5pt solid black;
  height:24.75pt;width:181pt'>HTML, CSS, Javascript, Jquery</td>
  <td colspan=6 class=xl1098470 width=460 style='border-right:.5pt solid black;
  border-left:none;width:345pt'>&nbsp;</td>
  <td colspan=3 class=xl1098470 width=236 style='border-right:1.0pt solid black;
  border-left:none;width:177pt'>&nbsp;</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.75pt'>
  <td colspan=2 height=33 class=xl1178470 width=240 style='border-right:.5pt solid black;
  height:24.75pt;width:181pt'>Wordpress Development</td>
  <td colspan=6 class=xl1098470 width=460 style='border-right:.5pt solid black;
  border-left:none;width:345pt'>&nbsp;</td>
  <td colspan=3 class=xl1098470 width=236 style='border-right:1.0pt solid black;
  border-left:none;width:177pt'>&nbsp;</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.75pt'>
  <td colspan=2 height=33 class=xl1178470 width=240 style='border-right:.5pt solid black;
  height:24.75pt;width:181pt'>Computer Hardware and Software trouble shooting</td>
  <td colspan=6 class=xl1098470 width=460 style='border-right:.5pt solid black;
  border-left:none;width:345pt'>&nbsp;</td>
  <td colspan=3 class=xl1098470 width=236 style='border-right:1.0pt solid black;
  border-left:none;width:177pt'>&nbsp;</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.75pt'>
  <td colspan=2 height=33 class=xl1178470 width=240 style='border-right:.5pt solid black;
  height:24.75pt;width:181pt'>Computer Application (MS Office)</td>
  <td colspan=6 class=xl1098470 width=460 style='border-right:.5pt solid black;
  border-left:none;width:345pt'>&nbsp;</td>
  <td colspan=3 class=xl1098470 width=236 style='border-right:1.0pt solid black;
  border-left:none;width:177pt'>&nbsp;</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.75pt'>
  <td colspan=2 height=33 class=xl1178470 width=240 style='border-right:.5pt solid black;
  height:24.75pt;width:181pt'>Adobe photoshop</td>
  <td colspan=6 class=xl1098470 width=460 style='border-right:.5pt solid black;
  border-left:none;width:345pt'>&nbsp;</td>
  <td colspan=3 class=xl1098470 width=236 style='border-right:1.0pt solid black;
  border-left:none;width:177pt'>&nbsp;</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td colspan=2 height=34 class=xl1178470 width=240 style='border-right:.5pt solid black;
  height:25.5pt;width:181pt'>&nbsp;</td>
  <td colspan=6 class=xl1098470 width=460 style='border-right:.5pt solid black;
  border-left:none;width:345pt'>&nbsp;</td>
  <td colspan=3 class=xl1098470 width=236 style='border-right:1.0pt solid black;
  border-left:none;width:177pt'>&nbsp;</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:11.25pt'>
  <td colspan=11 height=15 class=xl898470 style='border-right:1.0pt solid black;
  height:11.25pt'>(Continue on separate sheet if necessary)</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=38 style='mso-height-source:userset;height:28.5pt'>
  <td colspan=2 height=38 class=xl878470 width=240 style='border-right:1.0pt solid black;
  height:28.5pt;width:181pt'>SIGNATURE</td>
  <td colspan=4 class=xl948470 style='border-right:1.0pt solid black;
  border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl1158470 style='border-left:none'>DATE</td>
  <td colspan=3 class=xl948470 style='border-right:1.0pt solid black'>December
  27, 2022</td>
  <td class=xl858470></td>
  <td class=xl858470></td>
 </tr>
 <tr height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl158470 style='height:9.75pt'></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl868470><span style='mso-spacerun:yes'></span>CS FORM 212
  (Revised 2017), Page 3 of 4</td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <tr height=4 style='mso-height-source:userset;height:3.0pt'>
  <td height=4 class=xl158470 style='height:3.0pt'></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
  <td class=xl158470></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=26 style='width:20pt'></td>
  <td width=214 style='width:161pt'></td>
  <td width=22 style='width:17pt'></td>
  <td width=145 style='width:109pt'></td>
  <td width=72 style='width:54pt'></td>
  <td width=71 style='width:53pt'></td>
  <td width=71 style='width:53pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=21 style='width:16pt'></td>
  <td width=32 style='width:24pt'></td>
  <td width=183 style='width:137pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=33 style='width:25pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
