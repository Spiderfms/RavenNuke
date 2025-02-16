<?php

/********************************************************************/
/* NukeSentinel™                                                    */
/* By: NukeScripts(tm) (https://www.nukescripts.coders.exchange)    */
/* Copyright © 2000-2023 by NukeScripts™                            */
/* See CREDITS.txt for ALL contributors                             */
/********************************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'."\n";
echo '<html>'."\n";
echo '<head>'."\n";
$pagetitle = _AB_NUKESENTINEL.": "._AB_PAGETRACKING;
echo '<title>'.$pagetitle.'</title>'."\n";
echo '</head>'."\n";
echo '<body bgcolor="#FFFFFF" text="#000000" link="#000000" alink="#000000" vlink="#000000">'."\n";
echo '<h1 align="center">'.$pagetitle.'</h1>'."\n";
$totalselected = $db->sql_numrows($db->sql_query("SELECT `tid`, `page`, `date` FROM `".$prefix."_nsnst_tracked_ips` WHERE `ip_addr`='$ip_addr' AND `user_id`='$user_id'"));
if($totalselected > 0) {
  $result = $db->sql_query("SELECT `ip_long` FROM `".$prefix."_nsnst_tracked_ips` WHERE `user_id`='$user_id' AND `ip_addr`='$ip_addr' LIMIT 0,1");
  list($ip_long) = $db->sql_fetchrow($result);
  echo '<div class="text-center"><strong>'.$ip_addr.' ('.$ip_long.')</strong></div><br />'."\n";
  echo '<table summary="" align="center" border="0" bgcolor="#000000" cellpadding="2" cellspacing="2">'."\n";
  echo '<tr bgcolor="#ffffff">'."\n";
  echo '<td><strong>'._AB_PAGEVIEWED.'</strong></td>'."\n";
  echo '<td><strong>'._AB_DATE.'</strong></td>'."\n";
  echo '</tr>'."\n";
  $result = $db->sql_query("SELECT `tid`, `page`, `date` FROM `".$prefix."_nsnst_tracked_ips` WHERE `ip_addr`='$ip_addr' AND `user_id`='$user_id' ORDER BY `page`");
  while(list($ltid, $page, $date_time) = $db->sql_fetchrow($result)){
    $page = wordwrap($page, 50, "\n", true);
    $page = str_replace("&amp;amp;", "&amp;", htmlentities($page, ENT_QUOTES));
    $page = str_replace("\n", "<br />\n", $page);
    echo '<tr bgcolor="#ffffff">'."\n";
    echo '<td>'.$page.'</td>'."\n";
    echo '<td>'.date("Y-m-d \@ H:i:s",$date_time).'</td>'."\n";
    echo '</tr>'."\n";
  }
  echo '</table>'."\n";
} else {
  echo '<div class="text-center"><strong>'._AB_NOPAGES.'</strong></div>'."\n";
}
echo '</body>'."\n";
echo '</html>';

?>