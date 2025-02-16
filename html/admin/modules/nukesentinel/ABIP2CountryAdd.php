<?php

/********************************************************************/
/* NukeSentinel™                                                    */
/* By: NukeScripts(tm) (https://www.nukescripts.coders.exchange)    */
/* Copyright © 2000-2023 by NukeScripts™                            */
/* See CREDITS.txt for ALL contributors                             */
/********************************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
$pagetitle = _AB_NUKESENTINEL.": "._AB_ADDIP2COUNTRY;
include("header.php");
OpenTable();
OpenMenu(_AB_ADDIP2COUNTRY);
mastermenu();
CarryMenu();
ip2cmenu();
CloseMenu();
CloseTable();
echo '<br />'."\n";
OpenTable();
if(!isset($xop)) $xop=''; //0001356: Notices in NukeSentinel
if(!isset($sip)) $sip=''; //0001356: Notices in NukeSentinel
if(!isset($min)) $min=0; //0001356: Notices in NukeSentinel
if(!isset($column) or !$column or $column=="") $column = "ip_lo"; //0001356: Notices in NukeSentinel
if(!isset($direction) or !$direction or $direction=="") $direction = "asc"; //0001356: Notices in NukeSentinel
if(!isset($showcountry)) $showcountry="All_Countries"; //0001356: Notices in NukeSentinel
echo '<form action="'.$admin_file.'.php" method="post">'."\n";
echo '<input type="hidden" name="op" value="ABIP2CountryAddSave" />'."\n";
echo '<input type="hidden" name="xop" value="'.$xop.'" />'."\n";
echo '<input type="hidden" name="sip" value="'.$sip.'" />'."\n";
echo '<input type="hidden" name="min" value="'.$min.'" />'."\n";
echo '<input type="hidden" name="column" value="'.$column.'" />'."\n";
echo '<input type="hidden" name="direction" value="'.$direction.'" />'."\n";
echo '<input type="hidden" name="showcountry" value="'.$showcountry.'" />'."\n";
echo '<table summary="" align="center" border="0" cellpadding="2" cellspacing="2">'."\n";
echo '<tr><td align="center" class="content" colspan="2">'._AB_ADDIP2COUNTRYS.'</td></tr>'."\n";
echo '<tr><td bgcolor="'.$bgcolor2.'"><strong>'._AB_IPLO.':</strong></td>'."\n";
echo '<td><input type="text" name="xip_lo[0]" size="4" maxlength="3" style="text-align: center;" />'."\n";
echo '. <input type="text" name="xip_lo[1]" size="4" value="0" maxlength="3" style="text-align: center;" />'."\n";
echo '. <input type="text" name="xip_lo[2]" size="4" value="0" maxlength="3" style="text-align: center;" />'."\n";
echo '. <input type="text" name="xip_lo[3]" size="4" value="0" maxlength="3" style="text-align: center;" /></td></tr>'."\n";
echo '<tr><td bgcolor="'.$bgcolor2.'"><strong>'._AB_IPHI.':</strong></td>'."\n";
echo '<td><input type="text" name="xip_hi[0]" size="4" maxlength="3" style="text-align: center;" />'."\n";
echo '. <input type="text" name="xip_hi[1]" size="4" value="255" maxlength="3" style="text-align: center;" />'."\n";
echo '. <input type="text" name="xip_hi[2]" size="4" value="255" maxlength="3" style="text-align: center;" />'."\n";
echo '. <input type="text" name="xip_hi[3]" size="4" value="255" maxlength="3" style="text-align: center;" /></td></tr>'."\n";
echo '<tr><td bgcolor="'.$bgcolor2.'"><strong>'._AB_COUNTRY.':</strong></td>'."\n";
echo '<td><select name="xc2c">'."\n";
$result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_countries` ORDER BY `c2c`");
while($countryrow = $db->sql_fetchrow($result)) {
  echo '<option value="'.$countryrow['c2c'].'">'.strtoupper($countryrow['c2c']).' - '.$countryrow['country'].'</option>'."\n";
}
echo '</select></td></tr>'."\n";
echo '<tr><td colspan="2" align="center"><input type="checkbox" name="another" value="1" checked="checked" />'._AB_ADDANOTHERRANGE.'</td></tr>'."\n";
echo '<tr><td colspan="2" align="center"><input type="submit" value="'._AB_ADDIP2COUNTRY.'" /></td></tr>'."\n";
echo '</table>'."\n";
echo '</form>'."\n";
CloseTable();
include("footer.php");

?>