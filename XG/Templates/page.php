<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="de">

	<head profile="http://gmpg.org/xfn/11">

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

		<title>XG.BITPiR.AT - your XDCC Search Engine No.1 <?php echo $title != "" ? " - $title" : ""; ?></title>

		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css?ver=1.1"/>
		<link rel="stylesheet" type="text/css" media="screen" href="css/flick/jquery-ui.css?ver=1.8.5"/>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ui.jqgrid.css?ver=4.1.1"/>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ui.multiselect.css?ver=4.1.1"/>

		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>

		<script src="js/i18n/grid.locale-en.js" type="text/javascript"></script>
		<script src="js/jquery.jqGrid.min.js" type="text/javascript"></script>

		<script src="js/jquery.sudoSlider.min.js" type="text/javascript"></script>

		<script src="js/jquery.delayedObserver.js" type="text/javascript"></script>

		<script src="js/xg.js" type="text/javascript"></script>

	</head>

	<body>

		<div id="author-tag"></div>

		<div class="menu-box">

			<a class="left icon <?php echo $view == "start" ? " active-page" : ""; ?>" href="?show=start" id="link-start">
				<img class="icon left" src="images/client.png"/> Start
			</a>
			<a class="left icon <?php echo $view == "network" ? " active-page" : ""; ?>" href="?show=network" id="link-network">
				<img class="icon left" src="images/Server.png"/> Networks
			</a>
			<a class="left icon <?php echo $view == "search" ? " active-page" : ""; ?>" href="?show=search" id="link-search">
				<img class="icon left" src="images/Search.png"/> Search
			</a>
			<a class="left icon" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZW786UWCWEJWL"
			   id="link-donate" target="_blank">
				<img class="icon left" src="images/Donate.png"/> Donate
			</a>

			<div class="clear"></div>
		</div>

		<div class="clear"></div>

		<?php echo $content; ?>

		<div class="ui-widget-content form-box">Powered by <img src="images/breadcrumb_arrow.png"/><a href="https://github.com/lformella/xdcc-grabscher" target="_blank">XG v0.9</a>
			<?php
			$pid = @file_get_contents("/home/lars/xg/pid");

			if ($pid != "")
			{
				exec("LANG=en_US.UTF-8 ps -p " . $pid . "| grep -v PID | cut -d&quot; &quot; -f2", $data);
				if (sizeof($data) > 1)
				{
					echo " <img src=\"images/Overlay/_checked_1.png\" /> ";
				}

				exec("cat /proc/" . $pid . "/status | grep VmRSS | awk '{print $2}'", $size);
				if (sizeof($size) == 1)
				{
					echo " (<small>" . $size[0] . "<small>) ";
				}
			}
			?>
			using XG.Server.Backend.MySql
		</div>

		<!-- Piwik -->
		<script type="text/javascript">
			var pkBaseURL = (("https:" == document.location.protocol) ? "https://52g.de/piwik/" : "http://52g.de/piwik/");
			document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try
			{
				var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 5);
				piwikTracker.trackPageView();
				piwikTracker.enableLinkTracking();
			}
			catch (err)
			{
			}
		</script>
		<noscript><p><img src="http://52g.de/piwik/piwik.php?idsite=5" style="border:0" alt=""/></p></noscript>
		<!-- End Piwik Tracking Code -->

	</body>
</html>