<?php

/********************************************************************/
/* NukeSentinel™                                                    */
/* By: NukeScripts(tm) (https://www.nukescripts.coders.exchange)    */
/* Copyright © 2000-2023 by NukeScripts™                            */
/* See CREDITS.txt for ALL contributors                             */
/********************************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
$pagetitle = _AB_NUKESENTINEL.": "._AB_REFERTRACKING;
include("header.php");
OpenTable();
OpenMenu(_AB_REFERTRACKING);
mastermenu();
CarryMenu();
trackedmenu();
CloseMenu();
CloseTable();
echo '<br />'."\n";
OpenTable();
//$perpage = $ab_config['track_perpage'];
if($perpage == 0) { $perpage = 25; }
if(!isset($min)) $min=0;
if(!isset($max)) $max=$min+$perpage;
if(!isset($column)) $column='';
if(!isset($direction)) $direction='';
if(!isset($user_id)) $user_id='';
if(!isset($ip_addr)) $ip_addr='';
if(!$column or $column=="") $column = "date";
if(!$direction or $direction=="") $direction = "desc";
$tid=intval($tid);
list($uname) = $db->sql_fetchrow($db->sql_query("SELECT `refered_from` FROM `".$prefix."_nsnst_tracked_ips` WHERE `tid`='$tid' LIMIT 0,1"));
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_tracked_ips` WHERE `refered_from`='$uname'"));
if($totalselected > 0) {
  if(strlen($uname) > 50) { $rfrom = substr($uname, 0, 50)."..."; } else { $rfrom = $uname; }
  echo '<div class="text-center"><strong>'.$rfrom.'</strong></div><br />'."\n";
  // Page Sorting
  $selcolumn1 = $selcolumn2 = $seldirection1 = $seldirection2 = "";
  if($column == "date") { $selcolumn2 = ' selected="selected"'; }
  else { $selcolumn1 = ' selected="selected"'; }
  if($direction == "desc") { $seldirection2 = ' selected="selected"'; }
  else { $seldirection1 = ' selected="selected"'; }
  echo '<table summary="" align="center" cellpadding="2" cellspacing="2" border="0" width="100%">'."\n";
  echo '<tr>'."\n";
  echo '<td align="right">'."\n";
  echo '<form action="'.$admin_file.'.php?op=ABTrackedRefersPages" method="post" style="padding: 0px; margin: 0px;">'."\n";
  echo '<input type="hidden" name="min" value="'.$min.'" />'."\n";
  echo '<input type="hidden" name="tid" value="'.$tid.'" />'."\n";
  echo '<strong>'._AB_SORT.':</strong> <select name="column">'."\n";
  echo '<option value="page"'.$selcolumn1.'>'._AB_PAGEVIEWED.'</option>'."\n";
  echo '<option value="date"'.$selcolumn2.'>'._AB_HITDATE.'</option>'."\n";
  echo '</select> <select name="direction">'."\n";
  echo '<option value="asc"'.$seldirection1.'>'._AB_ASC.'</option>'."\n";
  echo '<option value="desc"'.$seldirection2.'>'._AB_DESC.'</option>'."\n";
  echo '</select> <input type="submit" value="'._AB_SORT.'" />'."\n";
  echo '</form>'."\n";
  echo '</td>'."\n";
  echo '</tr>'."\n";
  echo '</table>'."\n";
  // Page Sorting
  echo '<table summary="" align="center" cellpadding="2" cellspacing="2" bgcolor="'.$bgcolor2.'" border="0" width="100%">'."\n";
  echo '<tr>'."\n";
  echo '<td bgcolor="'.$bgcolor2.'" width="80%"><strong>'._AB_PAGEVIEWED.'</strong></td>'."\n";
  echo '<td bgcolor="'.$bgcolor2.'" width="20%"><strong>'._AB_DATE.'</strong></td>'."\n";
  echo '</tr>'."\n";
  $result = $db->sql_query("SELECT `ip_addr`, `page`, `date` FROM `".$prefix."_nsnst_tracked_ips` WHERE `refered_from`='$uname' ORDER BY $column $direction LIMIT $min, $perpage");
  while(list($lipaddr, $page, $date_time) = $db->sql_fetchrow($result)){
    $page = htmlspecialchars($page, ENT_QUOTES, _CHARSET);
    echo '<tr onmouseover="this.style.backgroundColor=\''.$bgcolor2.'\'" onmouseout="this.style.backgroundColor=\''.$bgcolor1.'\'" bgcolor="'.$bgcolor1.'">'."\n";
    echo '<td><a href="'.$page.'" target="_blank">'.$page.'</a></td>'."\n";
    echo '<td>'.date("Y-m-d \@ H:i:s",$date_time).'</td>'."\n";
    echo '</tr>'."\n";
  }
  echo '</table>'."\n";
  abadminpagenums($op, $totalselected, $perpage, $max, $column, $direction, "", "", $tid);
} else {
  echo '<div class="text-center"><strong>'._AB_NOIPS.'</strong></div>'."\n";
}
CloseTable();
include("footer.php");

?>