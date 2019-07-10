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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="/sites/www.vancouver.wsu.edu/themes/omegawsuv/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/sites/www.vancouver.wsu.edu/themes/omegawsuv/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/sites/www.vancouver.wsu.edu/themes/omegawsuv/apple-touch-icon-152x152.png">
  <meta name="apple-mobile-web-app-title" content="WSUV">
  <link rel="icon" type="image/png" href="/sites/www.vancouver.wsu.edu/themes/omegawsuv/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/sites/www.vancouver.wsu.edu/themes/omegawsuv/favicon-32x32.png" sizes="32x32">
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <a href="#region-sidebar-first" class="element-invisible element-focusable"><?php print t('Skip to site navigation'); ?></a>
    <a href="#sitemap-footer" class="element-invisible element-focusable"><?php print t('Skip to footer sitemap'); ?></a>
  </div>

  <?php print $page_top; ?>

    <div id="quick-links" role="navigation" aria-label="Quick links"> <!-- BEGIN QUICK LINKS -->
    	<div id="quick-links-wrapper"> <!-- BEGIN QUICK LINKS WRAPPER -->

    	<ul class="quick-links-left">
    		<li><a href="https://outlook.office365.com/owa/wsu.edu/">Webmail</a></li>
    		<li><a href="http://office365.wsu.edu/">Office 365</a></li>
        <li><a href="https://library.vancouver.wsu.edu">Library</a></li>
        <li><a href="https://www.vancouver.wsu.edu/academic-affairs">Academics</a></li>
    		<li><a href="https://studentaffairs.vancouver.wsu.edu/student-affairs/bookie-student-bookstore">Bookstore</a></li>
    	</ul>

    	<ul class="quick-links-right">
    		<li><a href="https://my.wsu.edu/">myWSU</a></li>
        <li><a href="https://wsu.edu/about/statewide/">WSU Statewide</a></li>
    		<li><a href="http://learn.wsu.edu/">Blackboard</a></li>
    		<li><a href="https://www.vancouver.wsu.edu/information-technology">Tech Support</a></li>
    		<li><a href="http://directory.vancouver.wsu.edu">Directory</a></li>
    	</ul>

    	</div> <!-- END QUICK LINKS WRAPPER -->
    </div>  <!-- END QUICK LINKS -->

    <div id="nav" role="navigation" aria-label="Audience topics"> <!-- BEGIN AUDIENCE LINKS -->
    	<div id="nav-wrapper">

    	<ul class="nav">
        <li><a href="https://www.vancouver.wsu.edu/about-wsu-vancouver">About</a></li>
        <li><a href="https://studentaffairs.vancouver.wsu.edu/admissions">Admissions</a></li>
    		<li><a href="https://studentaffairs.vancouver.wsu.edu/admissions/degrees-majors-and-programs">Degrees</a></li>
        <li><a href="https://studentaffairs.vancouver.wsu.edu/student-affairs/resources-current-students">Current Students</a></li>
        <li><a href="https://www.vancouver.wsu.edu/research">Research</a></li>
        <li><a href="https://www.vancouver.wsu.edu/alumni">Alumni</a></li>
    	</ul>

    	<div id="google-cse"> <!-- BEGIN GOOGLE CSE -->

			<div class="search" role="search"><?php $block = module_invoke('search', 'block_view', 'search'); print render($block); ?></div>

		</div> <!-- END GOOGLE CSE -->

    	</div>
    </div> <!-- END AUDIENCE LINKS -->

	<div id="logo-action"> <!-- BEGIN LOGO AND ACTION LINKS -->
		<div id="logo-action-wrapper"> <!-- BEGIN LOGO AND ACTION LINKS WRAPPER -->

		<a href="https://www.vancouver.wsu.edu"><img class="primary-logo" src="/sites/www.vancouver.wsu.edu/themes/omegawsuv/images/wsu-vancouver-primary-logo-rgb.svg" alt="Home page"><img class="horizontal-logo" src="/sites/www.vancouver.wsu.edu/themes/omegawsuv/images/wsu-vancouver-horizontal-logo-rgb.svg" alt="Home page"></a>

		<ul class="logo-action-links">
			<li><a href="https://studentaffairs.vancouver.wsu.edu/admissions/visit-campus">Campus tour</a></li>
			<li><a href="https://www.applyweb.com/fixie/form/s/T7W13sd">Request info</a></li>
			<li><a class="apply-now" href="https://studentaffairs.vancouver.wsu.edu/admissions/apply">Apply now</a></li>
		</ul>

		</div> <!-- END LOGO AND ACTION LINKS WRAPPER -->
	</div> <!-- END LOGO AND ACTION LINKS -->

  <div role="main" aria-label="Content">
    <?php print $page; ?>
  </div>

  <?php print $page_bottom; ?>

  <footer role="contentinfo" aria-label="Footer sitemap">
  	<div id="sitemap-footer"> <!-- BEGIN SITEMAP FOOTER -->
  		<div id="sitemap-wrapper"> <!-- BEGIN SITEMAP WRAPPER -->

  		<ul class="sitemap-footer-column-1">
 			<li class="sitemap-title">WSU Vancouver</li>
			<li><a href="https://www.vancouver.wsu.edu/about-wsu-vancouver">About WSU Vancouver</a></li>
      <li><a href="https://studentaffairs.vancouver.wsu.edu/access-center">Access Center</a></li>
      <li><a href="https://www.vancouver.wsu.edu/administrative-departments">Administration</a></li>
			<li><a href="https://www.vancouver.wsu.edu/campus-map-directions">Campus Map</a></li>
			<li><a href="https://hd.vancouver.wsu.edu/child-development">Child Development Program</a></li>
			<li><a href="https://www.vancouver.wsu.edu/human-resources">Employment</a></li>
			<li><a href="https://www.vancouver.wsu.edu/equity-diversity">Equity and Diversity</a></li>
			<li><a href="https://www.vancouver.wsu.edu/events">Events Calendar</a></li>
			<li><a href="https://www.vancouver.wsu.edu/parking-services">Parking Services</a></li>
    	</ul>

  		<ul class="sitemap-footer-column-2">
 			<li class="sitemap-title">Future Students</li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/admissions">Admissions</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/admissions/degrees-majors-programs">Majors and Programs</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/financial-aid">Student Financial Services</a></li>
			<li>&nbsp;</li>
			<li class="sitemap-title">Current Students</li>
  		<li><a href="http://registrar.wsu.edu/academic-calendar">Academic Calendar</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/">Student Affairs and Enrollment</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/osi">Student Involvement</a></li>
			<li><a href="https://studentaffairs.vancouver.wsu.edu/src">Student Resource Center</a></li>
    	</ul>

  		<ul class="sitemap-footer-column-3">
 			<li class="sitemap-title">Campus Safety</li>
			<li><a href="https://www.vancouver.wsu.edu/public-safety">Public Safety</a></li>
			<li><a href="https://www.vancouver.wsu.edu/safety-plan">Safety Plan and Security Report</a></li>
      <li>&nbsp;</li>
      <li class="sitemap-title">Alumni</li>
      <li><a href="https://www.vancouver.wsu.edu/development-alumni-relations/alumni-association">Alumni Association</a></li>
      <li><a href="https://www.vancouver.wsu.edu/development-alumni-relations/get-involved">Get Involved</a></li>
      <li><a href="https://www.vancouver.wsu.edu/development-alumni-relations/make-gift-wsu-vancouver">Make a Gift</a></li>
   		</ul>

  		<ul class="sitemap-footer-column-4">
 			<li class="sitemap-title">Academics</li>
			<li><a href="https://cas.vancouver.wsu.edu">Arts and Sciences</a></li>
      <li><a href="https://business.vancouver.wsu.edu">Business</a></li>
      <li><a href="https://murrow.vancouver.wsu.edu">Communication</a></li>
			<li><a href="https://education.vancouver.wsu.edu">Education</a></li>
			<li><a href="https://ecs.vancouver.wsu.edu">Engineering and Computer Science</a></li>
			<li><a href="https://hd.vancouver.wsu.edu">Human Development</a></li>
      <li><a href="https://medicine.vancouver.wsu.edu">Medicine</a></li>
			<li><a href="https://nursing.vancouver.wsu.edu">Nursing</a></li>
    	</ul>

  		</div> <!-- END SITEMAP WRAPPER -->
  	</div> <!-- END SITEMAP FOOTER -->

    <div id="copyright"> <!-- BEGIN COPYRIGHT -->
  		<div id="copyright-wrapper"> <!-- BEGIN COPYRIGHT WRAPPER -->
  	  <ul class="policies">
        <li class="list-title">&copy; WSU Vancouver</li>
        <li class="about-mobile"><a href="https://www.vancouver.wsu.edu/about-wsu-vancouver">About</a></li>
        <li><a href="https://access.wsu.edu/">Accessibility</a></li>
        <li><a href="https://policies.wsu.edu/">Policies</a></li>
        <li><a href="http://public.wsu.edu/~forms/ProposedWAC.html">Rule making</a></li>
        <li><a href="https://ucomm.wsu.edu/wsu-copyright-policy/">Copyright</a></li>
      </ul>

  		<ul class="links-mobile">
        <li class="list-title">Resources</li>
        <li><a href="https://my.wsu.edu/">myWSU</a></li>
        <li><a href="http://learn.wsu.edu/">Blackboard</a></li>
        <li><a href="http://office365.wsu.edu/">Email and Office 365</a></li>
        <li><a href="https://www.vancouver.wsu.edu/equity-diversity">Equity and Diversity</a></li>
        <li><a href="https://studentaffairs.vancouver.wsu.edu/majors-and-programs">Majors and Programs</a></li>
        <li><a href="http://directory.vancouver.wsu.edu/">Directory</a></li>
        <li><a href="https://studentaffairs.vancouver.wsu.edu/student-affairs/bookie-student-bookstore">Bookstore</a></li>
        <li><a href="http://directory.vancouver.wsu.edu/">Library</a></li>
        <li><a href="https://www.vancouver.wsu.edu/information-technology/wsu-wireless">Wi-fi</a></li>
      </ul>

      <div id="contact-wrapper"> <!-- BEGIN CONTACT WRAPPER -->
    		<ul class="contact-info">
          <li class="list-title">Contact</li>
          <li><a href="https://www.vancouver.wsu.edu/campus-map-directions" alt="Map, parking and directions">14204 NE Salmon Creek Ave, Vancouver, WA, 98686</a></li>
          <li><a href="tel:+13605469788">360-546-9788</a></li>
        </ul>

    		<p class="social">
          <a href="https://www.instagram.com/wsuvancouver"><img src="/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-instagram.png" alt="Instagram"></a>
          <a href="https://www.twitter.com/wsuvancouver"><img src="/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-twitter.png" alt="Twitter"></a>
          <a href="https://www.facebook.com/wsuvancouver"><img src="/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-facebook.png" alt="Facebook"></a>
          <a href="https://www.flickr.com/photos/wsuvancouver/"><img src="/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-flickr.png" alt="Flickr"></a>
          <a href="https://www.youtube.com/wsuvancouver"><img src="/sites/www.vancouver.wsu.edu/themes/omegawsuv/social-youtube.png" alt="YouTube" class="social-last"></a>
        </p>

        <!-- <div id="thirty-years-wrapper">
          <img class="celebrating-30-years" src="https://www.vancouver.wsu.edu/sites/www.vancouver.wsu.edu/themes/omegawsuv/images/celebrating-30-years.svg" alt="Celebrating 30 Years" />
        </div> -->

      </div> <!-- END CONTACT WRAPPER -->

  		</div> <!-- END COPYRIGHT WRAPPER -->
  	</div> <!-- END COPYRIGHT -->
  </footer>

<script src="/sites/www.vancouver.wsu.edu/themes/omegawsuv/js/responsive-nav.min.js"></script>
<script src="/sites/www.vancouver.wsu.edu/themes/omegawsuv/js/search-enhancement.js"></script>

<script>var navigation = responsiveNav("#nav");</script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 970688392;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/970688392/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script type="text/javascript"> (function(a,e,c,f,g,h,b,d){var k={ak:"970688392",cl:"xAeiCIrAh34QiI_uzgM",autoreplace:"360-546-9779"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script"); </script>

<script type="text/javascript"> /* <![CDATA[ */ goog_snippet_vars = function() { var w = window; w.google_conversion_id = 970688392; w.google_conversion_label = "SaZmCO29mn4QiI_uzgM"; w.google_remarketing_only = false; } // DO NOT CHANGE THE CODE BELOW. goog_report_conversion = function(url) { goog_snippet_vars(); window.google_conversion_format = "3"; var opt = new Object(); opt.onload_callback = function() { if (typeof(url) != 'undefined') { window.location = url; } } var conv_handler = window['google_trackConversion']; if (typeof(conv_handler) == 'function') { conv_handler(opt); } } /* ]]> */ </script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js"> </script>

</body>

</html>
