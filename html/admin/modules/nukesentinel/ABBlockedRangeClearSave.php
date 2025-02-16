<?php

/********************************************************************/
/* NukeSentinel™                                                    */
/* By: NukeScripts(tm) (https://www.nukescripts.coders.exchange)    */
/* Copyright © 2000-2023 by NukeScripts™                            */
/* See CREDITS.txt for ALL contributors                             */
/********************************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
$clearresult = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_blocked_ranges`");
while($clearblock = $db->sql_fetchrow($clearresult)) {
  $old_masscidr = ABGetCIDRs($clearblock['ip_lo'], $clearblock['ip_hi']);
  if($ab_config['htaccess_path'] != "") {
    $old_masscidr = explode("||", $old_masscidr);
    for($i=0; $i < sizeof($old_masscidr); $i++) {
      if($old_masscidr[$i]!="") {
        $old_masscidr[$i] = "deny from ".$old_masscidr[$i]."\n";
      }
    }
    $ipfile = file($ab_config['htaccess_path']);
    $ipfile = implode("", $ipfile);
    $ipfile = str_replace($old_masscidr, "", $ipfile);
    $ipfile = $ipfile;
    $doit = fopen($ab_config['htaccess_path'], "w");
    fwrite($doit, $ipfile);
    fclose($doit);
  }
  $db->sql_query("DELETE FROM `".$prefix."_nsnst_blocked_ranges` WHERE `ip_lo`='".$clearblock['ip_lo']."' AND `ip_hi`='".$clearblock['ip_hi']."'");
  $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_blocked_ranges`");
}
$db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_blocked_ranges`");
header("Location: ".$admin_file.".php?op=ABBlockedRangeMenu");

?>