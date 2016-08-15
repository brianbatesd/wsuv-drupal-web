<?php print $doctype; ?>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>><!--<![endif]-->
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
  <link rel="apple-touch-icon" sizes="76x76" href="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/apple-touch-icon-152x152.png">
  <meta name="apple-mobile-web-app-title" content="WSUV">
  <link rel="icon" type="image/png" href="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/favicon-32x32.png" sizes="32x32">
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php print $page_top; ?>

    <div id="quick-links"> <!-- BEGIN QUICK LINKS -->
    	<div id="quick-links-wrapper"> <!-- BEGIN QUICK LINKS WRAPPER -->

    	<ul class="quick-links-left">
    		<li><a href="https://connect.wsu.edu/">Staff Email</a></li>
    		<li><a href="https://library.vancouver.wsu.edu">Library</a></li>
    		<li><a href="https://studentaffairs.vancouver.wsu.edu/student-affairs/bookie-student-bookstore">Bookstore</a></li>
    		<li><a href="https://wsu.edu/about/statewide/">WSU Statewide</a></li>
    		<li><a href="https://secure.wsu.edu/give/default.aspx?area=38">Give to WSU</a></li>
    	</ul>

    	<ul class="quick-links-right">
    		<li><a href="https://my.wsu.edu/">myWSU</a></li>
    		<li><a href="http://learn.wsu.edu/">Blackboard</a></li>
    		<li><a href="http://directory.vancouver.wsu.edu">Directory</a></li>
    		<li><a href="https://admin.vancouver.wsu.edu/information-technology">Tech Support</a></li>
    		<li><a href="https://www.ronet.wsu.edu/Main/Apps/RONetLogon.ASP">RONet</a></li>
    	</ul>

    	</div> <!-- END QUICK LINKS WRAPPER -->
    </div>  <!-- END QUICK LINKS -->

    <div id="nav"> <!-- BEGIN AUDIENCE LINKS -->
    	<div id="nav-wrapper">

    	<ul class="nav">
        <li><a href="https://www.vancouver.wsu.edu/about-wsu-vancouver">About</a></li>
    		<li><a href="https://admin.vancouver.wsu.edu/academic-affairs">Academics</a></li>
    		<li><a href="https://studentaffairs.vancouver.wsu.edu/admissions">Admissions</a></li>
        <li><a href="https://admin.vancouver.wsu.edu/development-and-alumni-relations">Alumni</a></li>
        <li><a href="https://studentaffairs.vancouver.wsu.edu/student-affairs/resources-current-students">Current Students</a></li>
        <li><a href="https://admin.vancouver.wsu.edu/research">Research</a></li>
    	</ul>

    	<div id="google-cse"> <!-- BEGIN GOOGLE CSE -->

			<div class="search"><?php $block = module_invoke('search', 'block_view', 'search'); print render($block); ?></div>

		</div> <!-- END GOOGLE CSE -->

    	</div>
    </div> <!-- END AUDIENCE LINKS -->

	<div id="logo-action"> <!-- BEGIN LOGO AND ACTION LINKS -->
		<div id="logo-action-wrapper"> <!-- BEGIN LOGO AND ACTION LINKS WRAPPER -->

		<a href="https://www.vancouver.wsu.edu" title="Home"><img class="primary-logo" src="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/wsuvancouver-primarylogo.png" alt="WSU Vancouver logo"></a>

		<ul class="logo-action-links">
			<li><a href="https://studentaffairs.vancouver.wsu.edu/student-involvement/request-campus-tour">Campus tour</a></li>
			<li><a href="https://www.applyweb.com/fixie/form/s/T7W13sd">Request info</a></li>
			<li><a class="apply-now" href="https://studentaffairs.vancouver.wsu.edu/admissions/apply">Apply now</a></li>
		</ul>

		</div> <!-- END LOGO AND ACTION LINKS WRAPPER -->
	</div> <!-- END LOGO AND ACTION LINKS -->

  <?php print $page; ?>
  <?php print $page_bottom; ?>

  	<div id="sitemap-footer"> <!-- BEGIN SITEMAP FOOTER -->
  		<div id="sitemap-wrapper"> <!-- BEGIN SITEMAP WRAPPER -->

  		<ul class="sitemap-footer-column1">
 			<li class="sitemap-title">WSU Vancouver</li>
			<li><a href="https://www.vancouver.wsu.edu/about-wsu-vancouver">About WSU Vancouver</a></li>
			<li><a href="http://registrar.wsu.edu/academic-calendar">Academic Calendar</a></li>
			<li><a href="http://directory.vancouver.wsu.edu">Campus Directory</a></li>
			<li><a href="https://www.vancouver.wsu.edu/campus-map-directions-and-parking-information">Campus Map</a></li>
			<li><a href="https://hd.vancouver.wsu.edu/child-development">Child Development Program</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/diversity">Diversity</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/human-resources/employment">Employment</a></li>
			<li><a href="https://events.vancouver.wsu.edu">Events Calendar</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/facilities-operations/events-office">Events Office</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/parking/parking-services">Parking Services</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/research">Research</a></li>
    	</ul>

  		<ul class="sitemap-footer-column2">
 			<li class="sitemap-title">Future Students</li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/admissions">Admissions</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/financial-aid">Student Financial Services</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/majors-and-programs">Majors and Programs</a></li>
			<li>&nbsp;</li>
			<li class="sitemap-title">Current Students</li>
			<li><a href="http://learn.wsu.edu/">Blackboard</a></li>
			<li><a href="https://library.vancouver.wsu.edu">Library</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/osi">Student Involvement</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/student-involvement/registered-student-organizations-rsos">Student Organizations</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/src">Student Resource Center</a></li>
			<li><a href="http://outlook.office365.com/">Student Email</a></li>
    	</ul>

  		<ul class="sitemap-footer-column3">
 			<li class="sitemap-title">Administration</li>
			<li><a href="https://admin.vancouver.wsu.edu/academic-affairs">Academic Affairs</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/capital-planning-and-development">Capital Planning and Development</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/office-of-the-chancellor">Office of the Chancellor</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/development-and-alumni-relations">Development and Alumni Relations</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/finance-and-operations">Finance and Operations</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/human-resources">Human Resources</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/information-technology">Information Technology</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/marketing-and-communications">Marketing and Communications</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/public-safety/public-safety">Public Safety</a></li>
			<li><a href="https://www.vancouver.wsu.edu/safety-plan">Safety Plan and Security Report</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/">Student Affairs and Enrollment</a></li>
   		</ul>

  		<ul class="sitemap-footer-column4">
 			<li class="sitemap-title">Academic Units</li>
			<li><a href="https://cas.vancouver.wsu.edu">Arts and Sciences</a></li>
      <li><a href="https://business.vancouver.wsu.edu">Business</a></li>
			<li><a href="https://education.vancouver.wsu.edu">Education</a></li>
			<li><a href="https://ecs.vancouver.wsu.edu">Engineering and Computer Science</a></li>
			<li><a href="https://hd.vancouver.wsu.edu">Human Development</a></li>
			<li><a href="https://nursing.vancouver.wsu.edu">Nursing</a></li>
			<li>&nbsp;</li>
			<li class="sitemap-title">Alumni</li>
			<li><a href="https://admin.vancouver.wsu.edu/development-and-alumni-relations/alumni-relations/alumni-association">Alumni Association</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/development-and-alumni-relations/alumni-relations/get-involved">Get Involved</a></li>
			<li><a href="https://admin.vancouver.wsu.edu/giving/make-gift-wsu-vancouver">Make a Gift</a></li>
    	</ul>

  		</div> <!-- END SITEMAP WRAPPER -->
  	</div> <!-- END SITEMAP FOOTER -->

    <div id="copyright"> <!-- BEGIN COPYRIGHT -->
  		<div id="copyright-wrapper"> <!-- BEGIN COPYRIGHT WRAPPER -->
  		<p class="legal">&copy; WSU Vancouver | <a href="https://oeo.wsu.edu/">Accessibility</a> | <a href="https://policies.wsu.edu/">Policies</a> | <a href="http://public.wsu.edu/~forms/ProposedWAC.html">Rule making</a> | <a href="https://ucomm.wsu.edu/wsu-copyright-policy/">Copyright</a></p>
  		<p class="links-mobile"><a href="https://my.wsu.edu/">myWSU</a> | <a href="http://learn.wsu.edu/">Blackboard</a> | <a href="https://connect.wsu.edu/">Staff Email</a> | <a href="http://directory.vancouver.wsu.edu/">Directory</a> | <a href="https://studentaffairs.vancouver.wsu.edu/student-affairs/bookie-student-bookstore">Bookstore</a> | <a href="http://directory.vancouver.wsu.edu/">Library</a></p>
  		<p class="address"><a href="https://www.vancouver.wsu.edu/campus-map-directions-and-parking-information" title="Campus map, directions and parking information">14204 NE Salmon Creek Ave, Vancouver, WA, 98686</a> | 360-546-9788</p>
  		<p class="social"><a href="https://www.facebook.com/wsuvancouver"><img src="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-facebook.png" alt="Facebook"></a> <a href="https://www.twitter.com/wsuvancouver"><img src="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-twitter.png" alt="Twitter"></a> <a href="https://www.instagram.com/wsuvancouver"><img src="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-instagram.png" alt="Instagram"></a> <a href="https://www.flickr.com/wsuvancouver"><img src="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-flickr.png" alt="Flickr"></a> <a href="https://www.youtube.com/wsuvancouver"><img src="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-youtube.png" alt="YouTube" class="social-last"></a></p>
  		</div> <!-- END COPYRIGHT WRAPPER -->
  	</div> <!-- END COPYRIGHT -->

<script src="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/js/responsive-nav.min.js"></script>
<script src="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/js/search-enhancement.js"></script>

<script>
  var navigation = responsiveNav("#nav");
</script>

</body>
</html>
