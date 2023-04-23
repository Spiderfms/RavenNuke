<?php
###############################################################################
# nukeSEO Social Bookmarking Copyright (c) 2006 Kevin Guske  http://nukeSEO.com
###############################################################################
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License.
###############################################################################

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
	header('Location: index.php');
	exit('Access Denied');
}

function getBookmarkHTML($mynukeurl, $mynuketitle, $separator = "&nbsp;", $imgsize = "small")
{
###############################################################################
# Comment out, add and / or resort the $bookmarks array as desired.  Bookmark
# sites will be displayed in the order they appear in the $bookmarks array and
# all bookmarking sites in the array will be displayed.
###############################################################################
$bookmarks = array ();
//$bookmarks["google"] = array (
//					"siteurl"	=> "http://www.google.com/bookmarks/mark?op=edit&amp;bkmk={MYNUKEURL}&amp;title={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Google Bookmarks] body=[Bookmark and share this link with Google Bookmarks]",
//					"imgclass"	=> "google"
//				);
//$bookmarks["yahoo"] = array (
//					"siteurl"	=> "http://myweb2.search.yahoo.com/myresults/bookmarklet?u={MYNUKEURL}&amp;t={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Yahoo! My Web] body=[Bookmark and share this link with Yahoo! My Web]",
//					"imgclass"	=> "yahoo"
//				);
//$bookmarks["del.icio.us"] = array (
//					"siteurl"	=> "https://del.icio.us/post?url={MYNUKEURL}&amp;title={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[del.icio.us] body=[Bookmark and share this link with Delicious.com]",
//					"imgclass"	=> "delicious"
//				);
//$bookmarks["digg"] = array (
//					"siteurl"	=> "https://digg.com/submit?phase=2&amp;url={MYNUKEURL}&amp;title={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Digg] body=[Bookmark and share this link with Digg]",
//					"imgclass"	=> "digg"
//				);
//$bookmarks["stumbleupon"] = array (
//					"siteurl"	=> "https://www.stumbleupon.com/submit?url={MYNUKEURL}&amp;title={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Stumbleupon] body=[Share this link with your friends at Stumbleupon]",
//					"imgclass"	=> "stumbleupon"
//				);
//$bookmarks["myspace"] = array (
//					"siteurl"	=> "https://www.myspace.com/Modules/PostTo/Pages/?u=check+this+out:+{MYNUKEURL}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Myspace] body=[Share this link with your friends on Myspace]",
//					"imgclass"	=> "myspace"
//				);
$bookmarks["reddit"] = array (
					"siteurl"	=> "https://reddit.com/submit?url={MYNUKEURL}&amp;title={MYNUKETITLE}",
					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Reddit] body=[Bookmark and share this link with Reddit]",
					"imgclass"	=> "reddit"
				);
//$bookmarks["technorati"] = array (
//					"siteurl"	=> "https://technorati.com/cosmos/search.html?url={MYNUKEURL}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Technorati] body=[Search this link with Technorati]",
//					"imgclass"	=> "technorati"
//				);
$bookmarks["facebook"] = array(
					"siteurl"	=> "https://www.facebook.com/sharer.php?u={MYNUKEURL}",
					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Facebook] body=[Share this link with your friends on Facebook]",
					"imgclass"	=> "facebook"
				);
$bookmarks["twitter"] = array(
					"siteurl"	=> "https://twitter.com/home?status=check+this+out:+{MYNUKEURL}",
					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Twitter] body=[Share this link with your friends on Twitter]",
					"imgclass"	=> "twitter"
				);
//$bookmarks["windowslive"] = array(
//					"siteurl"	=> "https://favorites.live.com/quickadd.aspx?url={MYNUKEURL}&amp;title={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Windows Live] body=[Share this link with your friends on Windows Live]",
//					"imgclass"	=> "windowslive"
//				);
//$bookmarks["squidoo"] = array(
//					"siteurl"	=> "https://www.squidoo.com/lensmaster/bookmark?{MYNUKEURL}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Squidoo] body=[Someone, somewhere, wants to know what you think, Squidoo!]",
//					"imgclass"	=> "squidoo"
//				);
//$bookmarks["blinklist"] = array(
//					"siteurl"	=> "https://blinklist.com/index.php?Action=Blink/addblink.php&amp;Url={MYNUKEURL}&amp;Title={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Blinklist] body=[Help others Discover and Learn, Share on Blinklist]",
//					"imgclass"	=> "blinklist"
//				);
//$bookmarks["newsvine"] = array(
//					"siteurl"	=> "https://www.newsvine.com/_wine/save?u={MYNUKEURL}&amp;h={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Newsvine] body=[Help others Get Smarter, share this story on Newsvine]",
//					"imgclass"	=> "newsvine"
//				);
$bookmarks["fark"] = array(
					"siteurl"	=> "https://www.fark.com/cgi/fark/submit.pl?new_url={MYNUKEURL}&amp;new_comment={MYNUKETITLE}&amp;linktype=cool",
					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Fark] body=[It's not News, it's Fark!]",
					"imgclass"	=> "fark"
				);
$bookmarks["diigo"] = array(
					"siteurl"	=> "https://www.diigo.com/post?url={MYNUKEURL}&amp;title={MYNUKETITLE}",
					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Diigo] body=[Research, Share, Collaborate this story on Diigo]",
					"imgclass"	=> "diigo"
				);
//$bookmarks["swik"] = array(
//					"siteurl"	=> "https://stories.swik.net/?submitUrl&amp;url={MYNUKEURL}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[SWiK] body=[Share on SWiK - a community driven resource for open source software]",
//					"imgclass"	=> "swik"
//				);
//$bookmarks["faves"] = array(
//					"siteurl"	=> "https://faves.com/Authoring.aspx?u={MYNUKEURL}&amp;t={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Faves] body=[Share on Faves - sites you love from people like you]",
//					"imgclass"	=> "faves"
//				);
//$bookmarks["blogmarks"] = array(
//					"siteurl"	=> "https://blogmarks.net/my/new.php?mini=1&amp;simple=1&amp;url={MYNUKEURL}&amp;title={MYNUKETITLE}",
//					"imgalt"	=> "cssheader=[tonheaderclass2] cssbody=[tonbodyclass2] header=[Blogmarks] body=[Share this story on Blogmarks, and join the social bookmarking revolution]",
//					"imgclass"	=> "blogmarks"
//				);
###############################################################################
# You do not need to modify anything below this line
###############################################################################
	$bookmarkHTML = '';
	$mynukeurl = str_replace('&amp;', '&', $mynukeurl);
	$mynukeurl = htmlentities(urlencode($mynukeurl));
	$mynuketitle = str_replace('&amp;', '&', $mynuketitle);
	$mynuketitle = urlencode($mynuketitle);
	$numBookmarks = count($bookmarks);
	$numkey = 0;
	foreach ($bookmarks as $sitename => $sitedetails)
	{
		$siteurl = $sitedetails['siteurl'];
		$siteurl = str_replace("{MYNUKEURL}", $mynukeurl, $siteurl);
		$siteurl = str_replace("{MYNUKETITLE}", $mynuketitle, $siteurl);
		$imgalt = $sitedetails['imgalt'];
		$imgclass = $sitedetails['imgclass'];
		$bookmarkHTML .= "<a href=\"$siteurl\" title=\"$imgalt\" target=\"_blank\" class=\"donkeytopic\">";
		$siteimg = 'modules/News/css/images/transparent.gif';
		if ($imgsize == "text") {
			$bookmarkHTML .= "$sitename";
		} else {
			# XHTML fix courtesy of Guardian - http://code-authors.com
			$bookmarkHTML .= "<img alt=\"\" border=\"0\" class=\"sbicon $imgclass\" src=\"$siteimg\" style=\"opacity:0.4;\" onmouseover=\"this.style.opacity=1;\" onmouseout=\"this.style.opacity=0.4;\" />";
		}
		$bookmarkHTML .= "</a>";
		$numkey = $numkey + 1;
		//if ($numkey < $numBookmarks) $bookmarkHTML .= "$separator";
	}
	return $bookmarkHTML;
}
?>
