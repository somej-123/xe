<?php define('__XE__', true); require_once('C:/AutoSet10/public_html/xe/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="77" parent_srl="0" menu_name_key='XE Official Site' text="<?php if(true) { $_names = array("en"=>'XE Official Site',"ko"=>'XE Official Site',"jp"=>'XE Official Site',"zh-CN"=>'XE Official Site',"zh-TW"=>'XE Official Site',"fr"=>'XE Official Site',"de"=>'XE Official Site',"ru"=>'XE Official Site',"es"=>'XE Official Site',"tr"=>'XE Official Site',"vi"=>'XE Official Site',"mn"=>'XE Official Site',); print $_names[$lang_type]; }?>" url="<?php print(true?'http://www.xpressengine.com':"")?>" href="<?php print(true?'http://www.xpressengine.com':"")?>" is_shortcut='Y' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="78" parent_srl="0" menu_name_key='GitHub' text="<?php if(true) { $_names = array("en"=>'XE Official Site',"ko"=>'XE Official Site',"jp"=>'XE Official Site',"zh-CN"=>'XE Official Site',"zh-TW"=>'XE Official Site',"fr"=>'XE Official Site',"de"=>'XE Official Site',"ru"=>'XE Official Site',"es"=>'XE Official Site',"tr"=>'XE Official Site',"vi"=>'XE Official Site',"mn"=>'XE Official Site',"en"=>'GitHub',"ko"=>'GitHub',"jp"=>'GitHub',"zh-CN"=>'GitHub',"zh-TW"=>'GitHub',"fr"=>'GitHub',"de"=>'GitHub',"ru"=>'GitHub',"es"=>'GitHub',"tr"=>'GitHub',"vi"=>'GitHub',"mn"=>'GitHub',); print $_names[$lang_type]; }?>" url="<?php print(true?'https://github.com/xpressengine':"")?>" href="<?php print(true?'https://github.com/xpressengine':"")?>" is_shortcut='Y' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>