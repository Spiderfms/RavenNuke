<?php
/***************************************************************************
 *                                  faq.php
 *                            -------------------
 *   begin                : Sunday, Jul 8, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   Id: faq.php,v 1.14.2.2 2004/07/11 16:46:15 acydburn Exp
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 * Applied rules: Ernest Allen Buffington (TheGhost) 04/22/2023 4:38 PM
 * CountOnNullRector (https://3v4l.org/Bndc9)
 ***************************************************************************/
if ( !defined('MODULE_FILE') )
{
	die("You can't access this file directly...");
}
$module_name = basename(dirname(__FILE__));
require_once("modules/".$module_name."/nukebb.php");

define('IN_PHPBB', true);
include_once($phpbb_root_path . 'extension.inc');
include_once($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_FAQ, $nukeuser);
init_userprefs($userdata);
//
// End session management
//
// Set vars to prevent naughtiness
$faq = array();
//
// Load the appropriate faq file
//
if( isset($HTTP_GET_VARS['mode']) )
{
        switch( $HTTP_GET_VARS['mode'] )
        {
                case 'bbcode':
                        $lang_file = 'lang_bbcode';
                        $l_title = $lang['BBCode_guide'];
                        break;
                default:
                        $lang_file = 'lang_faq';
                        $l_title = $lang['FAQ'];
                        break;
        }
}
else
{
        $lang_file = 'lang_faq';
        $l_title = $lang['FAQ'];
}
include_once($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/' . $lang_file . '.' . $phpEx);

attach_faq_include($lang_file);

//
// Pull the array data from the lang pack
//
$j = 0;
$counter = 0;
$counter_2 = 0;
$faq_block = array();
$faq_block_titles = array();

for($i = 0; $i < count($faq); $i++)
{
        if( $faq[$i][0] != '--' )
        {
                $faq_block[$j][$counter]['id'] = $counter_2;
                $faq_block[$j][$counter]['question'] = $faq[$i][0];
                $faq_block[$j][$counter]['answer'] = $faq[$i][1];

                $counter++;
                $counter_2++;
        }
        else
        {
                $j = ( $counter != 0 ) ? $j + 1 : 0;

                $faq_block_titles[$j] = $faq[$i][1];

                $counter = 0;
        }
}

//
// Lets build a page ...
//
$page_title = $l_title;
include_once("modules/$module_name/includes/page_header.php");

$template->set_filenames(array(
        'body' => 'faq_body.tpl')
);
make_jumpbox('viewforum.'.$phpEx);

$template->assign_vars(array(
        'L_FAQ_TITLE' => $l_title,
        'L_BACK_TO_TOP' => $lang['Back_to_top'])
);

for($i = 0; $i < count($faq_block); $i++)
{
        if( is_countable($faq_block[$i]) ? count($faq_block[$i]) : 0 )
        {
                $template->assign_block_vars('faq_block', array(
                        'BLOCK_TITLE' => $faq_block_titles[$i])
                );
                $template->assign_block_vars('faq_block_link', array(
                        'BLOCK_TITLE' => $faq_block_titles[$i])
                );

                for($j = 0; $j < (is_countable($faq_block[$i]) ? count($faq_block[$i]) : 0); $j++)
                {
                        $row_color = ( !($j % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
                        $row_class = ( !($j % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

                        $template->assign_block_vars('faq_block.faq_row', array(
                                'ROW_COLOR' => '#' . $row_color,
                                'ROW_CLASS' => $row_class,
                                'FAQ_QUESTION' => $faq_block[$i][$j]['question'],
                                'FAQ_ANSWER' => $faq_block[$i][$j]['answer'],

                                'U_FAQ_ID' => $faq_block[$i][$j]['id'])
                        );

                        $template->assign_block_vars('faq_block_link.faq_row_link', array(
                                'ROW_COLOR' => '#' . $row_color,
                                'ROW_CLASS' => $row_class,
                                'FAQ_LINK' => $faq_block[$i][$j]['question'],

                                'U_FAQ_LINK' => '#' . $faq_block[$i][$j]['id'])
                        );
                }
        }
}

$template->pparse('body');

include_once("modules/$module_name/includes/page_tail.php");

?>