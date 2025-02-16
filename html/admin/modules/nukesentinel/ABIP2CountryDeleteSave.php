<?php

/********************************************************************/
/* NukeSentinel™                                                    */
/* By: NukeScripts(tm) (https://www.nukescripts.coders.exchange)    */
/* Copyright © 2000-2023 by NukeScripts™                            */
/* See CREDITS.txt for ALL contributors                             */
/********************************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
$getIPs = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnst_ip2country` WHERE `ip_lo`='$ip_lo' AND `ip_hi`='$ip_hi' LIMIT 0,1"));
list($xcountry) = $db->sql_fetchrow($db->sql_query("SELECT `country` FROM `".$prefix."_nsnst_countries` WHERE `c2c`='".$getIPs['c2c']."' LIMIT 0,1"));
$db->sql_query("DELETE FROM `".$prefix."_nsnst_ip2country` WHERE `ip_lo`='$ip_lo' AND `ip_hi`='$ip_hi'");
$db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnst_ip2country`");
$db->sql_query("UPDATE `".$prefix."_nsnst_tracked_ips` SET `c2c`='00' WHERE `ip_long` >= '$ip_lo' AND `ip_long` <= '$ip_hi'");
$db->sql_query("UPDATE `".$prefix."_nsnst_blocked_ips` SET `c2c`='00' WHERE `ip_long` >= '$ip_lo' AND `ip_long` <= '$ip_hi'");
$db->sql_query("UPDATE `".$prefix."_nsnst_blocked_ranges` SET `c2c`='00' WHERE `ip_lo` >= '$ip_lo' AND `ip_lo` <= '$ip_hi'");
header("Location: ".$admin_file.".php?op=$xop&min=$min&column=$column&direction=$direction&sip=$sip&showcountry=$showcountry");

?>