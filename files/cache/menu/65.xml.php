<?php define('__XE__', true); require_once('C:/AutoSet10/public_html/xe/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="67" parent_srl="0" menu_name_key='Welcome Page' text="<?php if(true) { $_names = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',); print $_names[$lang_type]; }?>" url="<?php print(true?'index':"")?>" href="<?php print(true?getSiteUrl('', '','mid','index'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="75" parent_srl="0" menu_name_key='XEIcon' text="<?php if(true) { $_names = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',"en"=>'XEIcon',"ko"=>'XEIcon',"jp"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"fr"=>'XEIcon',"de"=>'XEIcon',"ru"=>'XEIcon',"es"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"mn"=>'XEIcon',); print $_names[$lang_type]; }?>" url="<?php print(true?'xeicon':"")?>" href="<?php print(true?getSiteUrl('', '','mid','xeicon'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="131" parent_srl="0" menu_name_key='test board' text="<?php if(true) { $_names = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',"en"=>'XEIcon',"ko"=>'XEIcon',"jp"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"fr"=>'XEIcon',"de"=>'XEIcon',"ru"=>'XEIcon',"es"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"mn"=>'XEIcon',"en"=>'test board',"ko"=>'test board',"jp"=>'test board',"zh-CN"=>'test board',"zh-TW"=>'test board',"fr"=>'test board',"de"=>'test board',"ru"=>'test board',"es"=>'test board',"tr"=>'test board',"vi"=>'test board',"mn"=>'test board',); print $_names[$lang_type]; }?>" url="<?php print(true?'testBoard':"")?>" href="<?php print(true?getSiteUrl('', '','mid','testBoard'):"")?>" is_shortcut='N' desc='연습 게시판' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="140" parent_srl="0" menu_name_key='SOSOHAMMALL' text="<?php if(true) { $_names = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',"en"=>'XEIcon',"ko"=>'XEIcon',"jp"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"fr"=>'XEIcon',"de"=>'XEIcon',"ru"=>'XEIcon',"es"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"mn"=>'XEIcon',"en"=>'test board',"ko"=>'test board',"jp"=>'test board',"zh-CN"=>'test board',"zh-TW"=>'test board',"fr"=>'test board',"de"=>'test board',"ru"=>'test board',"es"=>'test board',"tr"=>'test board',"vi"=>'test board',"mn"=>'test board',"en"=>'SOSOHAMMALL',"ko"=>'SOSOHAMMALL',"jp"=>'SOSOHAMMALL',"zh-CN"=>'SOSOHAMMALL',"zh-TW"=>'SOSOHAMMALL',"fr"=>'SOSOHAMMALL',"de"=>'SOSOHAMMALL',"ru"=>'SOSOHAMMALL',"es"=>'SOSOHAMMALL',"tr"=>'SOSOHAMMALL',"vi"=>'SOSOHAMMALL',"mn"=>'SOSOHAMMALL',); print $_names[$lang_type]; }?>" url="<?php print(true?'outpage':"")?>" href="<?php print(true?getSiteUrl('', '','mid','outpage'):"")?>" is_shortcut='N' desc='외부 페이지를 불러와보는 테스트입니다.' open_window='Y' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="145" parent_srl="0" menu_name_key='문서페이지 테스트' text="<?php if(true) { $_names = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',"en"=>'XEIcon',"ko"=>'XEIcon',"jp"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"fr"=>'XEIcon',"de"=>'XEIcon',"ru"=>'XEIcon',"es"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"mn"=>'XEIcon',"en"=>'test board',"ko"=>'test board',"jp"=>'test board',"zh-CN"=>'test board',"zh-TW"=>'test board',"fr"=>'test board',"de"=>'test board',"ru"=>'test board',"es"=>'test board',"tr"=>'test board',"vi"=>'test board',"mn"=>'test board',"en"=>'SOSOHAMMALL',"ko"=>'SOSOHAMMALL',"jp"=>'SOSOHAMMALL',"zh-CN"=>'SOSOHAMMALL',"zh-TW"=>'SOSOHAMMALL',"fr"=>'SOSOHAMMALL',"de"=>'SOSOHAMMALL',"ru"=>'SOSOHAMMALL',"es"=>'SOSOHAMMALL',"tr"=>'SOSOHAMMALL',"vi"=>'SOSOHAMMALL',"mn"=>'SOSOHAMMALL',"en"=>'문서페이지 테스트',"ko"=>'문서페이지 테스트',"jp"=>'문서페이지 테스트',"zh-CN"=>'문서페이지 테스트',"zh-TW"=>'문서페이지 테스트',"fr"=>'문서페이지 테스트',"de"=>'문서페이지 테스트',"ru"=>'문서페이지 테스트',"es"=>'문서페이지 테스트',"tr"=>'문서페이지 테스트',"vi"=>'문서페이지 테스트',"mn"=>'문서페이지 테스트',); print $_names[$lang_type]; }?>" url="<?php print(true?'DocumentTest':"")?>" href="<?php print(true?getSiteUrl('', '','mid','DocumentTest'):"")?>" is_shortcut='N' desc='문서 페이지 테스트 입니다.' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="149" parent_srl="0" menu_name_key='위젯 페이지 테스트' text="<?php if(true) { $_names = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',"en"=>'XEIcon',"ko"=>'XEIcon',"jp"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"fr"=>'XEIcon',"de"=>'XEIcon',"ru"=>'XEIcon',"es"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"mn"=>'XEIcon',"en"=>'test board',"ko"=>'test board',"jp"=>'test board',"zh-CN"=>'test board',"zh-TW"=>'test board',"fr"=>'test board',"de"=>'test board',"ru"=>'test board',"es"=>'test board',"tr"=>'test board',"vi"=>'test board',"mn"=>'test board',"en"=>'SOSOHAMMALL',"ko"=>'SOSOHAMMALL',"jp"=>'SOSOHAMMALL',"zh-CN"=>'SOSOHAMMALL',"zh-TW"=>'SOSOHAMMALL',"fr"=>'SOSOHAMMALL',"de"=>'SOSOHAMMALL',"ru"=>'SOSOHAMMALL',"es"=>'SOSOHAMMALL',"tr"=>'SOSOHAMMALL',"vi"=>'SOSOHAMMALL',"mn"=>'SOSOHAMMALL',"en"=>'문서페이지 테스트',"ko"=>'문서페이지 테스트',"jp"=>'문서페이지 테스트',"zh-CN"=>'문서페이지 테스트',"zh-TW"=>'문서페이지 테스트',"fr"=>'문서페이지 테스트',"de"=>'문서페이지 테스트',"ru"=>'문서페이지 테스트',"es"=>'문서페이지 테스트',"tr"=>'문서페이지 테스트',"vi"=>'문서페이지 테스트',"mn"=>'문서페이지 테스트',"en"=>'위젯 페이지 테스트',"ko"=>'위젯 페이지 테스트',"jp"=>'위젯 페이지 테스트',"zh-CN"=>'위젯 페이지 테스트',"zh-TW"=>'위젯 페이지 테스트',"fr"=>'위젯 페이지 테스트',"de"=>'위젯 페이지 테스트',"ru"=>'위젯 페이지 테스트',"es"=>'위젯 페이지 테스트',"tr"=>'위젯 페이지 테스트',"vi"=>'위젯 페이지 테스트',"mn"=>'위젯 페이지 테스트',); print $_names[$lang_type]; }?>" url="<?php print(true?'WidgetPageTest':"")?>" href="<?php print(true?getSiteUrl('', '','mid','WidgetPageTest'):"")?>" is_shortcut='N' desc='위젯 페이지 테스트합니다' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>