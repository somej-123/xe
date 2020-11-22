<?php
$lang->member='회원';
$lang->site='사이트';
$lang->member_default_info='기본 정보';
$lang->member_extend_info='추가 정보';
$lang->default_group_1='준회원';
$lang->default_group_2='정회원';
$lang->default_group='기본그룹';
$lang->admin_group='관리그룹';
$lang->keep_signed='로그인 유지';
$lang->remember_user_id='아이디 저장';
$lang->already_logged='이미 로그인되어 있습니다.';
$lang->denied_user_id='사용 금지된 아이디입니다.';
$lang->denied_nick_name='사용 금지된 닉네임입니다.';
$lang->null_user_id='회원 아이디를 입력해주세요.';
$lang->null_password='비밀번호를 입력해주세요.';
$lang->invalid_authorization='인증이 필요한 계정입니다.';
$lang->invalid_email_address='이메일 주소와 일치하는 회원이 없습니다.';
$lang->invalid_user_id='존재하지 않는 회원 아이디입니다.';
$lang->invalid_password='잘못된 비밀번호입니다.';
$lang->invalid_new_password='이전 비밀번호와 같습니다.';
$lang->allow_mailing='메일링 가입';
$lang->is_admin='최고 관리 권한';
$lang->member_group='회원 그룹';
$lang->group_title='그룹 제목';
$lang->group_srl='그룹 번호';
$lang->group_order='그룹 우선순위';
$lang->group_order_change='그룹 우선순위 변경';
$lang->signature='서명';
$lang->profile_image='프로필 사진';
$lang->profile_image_max_width='가로 제한 길이';
$lang->profile_image_max_height='세로 제한 길이';
$lang->image_name='이미지 이름';
$lang->image_name_max_width='가로 제한 길이';
$lang->image_name_max_height='세로 제한 길이';
$lang->image_mark='이미지 마크';
$lang->image_mark_max_width='가로 제한 길이';
$lang->image_mark_max_height='세로 제한 길이';
$lang->group_image_mark='그룹 이미지 마크';
$lang->group_image_mark_max_width='가로 제한 길이';
$lang->group_image_mark_max_height='세로 제한 길이';
$lang->signature_max_height='서명 높이 제한';
$lang->enable_join='회원 가입 허가';
$lang->enable_confirm='메일 인증 사용';
$lang->enable_ssl='SSL 기능 사용';
$lang->security_sign_in='보안로그인 사용';
$lang->limit_day='임시 제한 일자';
$lang->limit_day_description='임시 제한 일자 설명';
$lang->limit_date='제한일';
$lang->after_login_url='로그인 후 이동할 주소(URL)';
$lang->after_logout_url='로그아웃 후 이동할 주소(URL)';
$lang->redirect_url='회원 가입 후 이동할 페이지';
$lang->agreement='회원 가입 약관';
$lang->accept_agreement='약관동의';
$lang->member_info='회원 정보';
$lang->current_password='현재 비밀번호';
$lang->allow_message='쪽지 허용';
if(!is_array($lang->allow_message_type)){
	$lang->allow_message_type = array();
}
$lang->allow_message_type['Y']='모두 허용';
$lang->allow_message_type['F']='등록된 친구들만 허용';
$lang->allow_message_type['N']='모두 금지';
$lang->about_allow_message='쪽지 허용 방법 및 대상을 지정할 수 있습니다.';
$lang->logged_users='현재 접속자';
$lang->msg_mail_authorization='메일 인증을 사용하려면 웸마스터의 이름과 메일주소가 유효해야 합니다.';
$lang->webmaster_name='웹마스터 이름';
$lang->webmaster_email='웹마스터 메일주소';
$lang->column_id='입력항목 ID';
$lang->about_column_id='입력항목의 구분자로 사용될 ID입니다. 영문으로 시작하고 영문 숫자만 사용가능합니다.';
$lang->options='선택 옵션';
$lang->about_keep_signed='브라우저를 닫더라도 로그인이 계속 유지될 수 있습니다.\n\n로그인 유지 기능을 사용할 경우 다음 접속부터는 로그인할 필요가 없습니다.\n\n단, 게임방, 학교 등 공공장소에서 이용 시 개인정보가 유출될 수 있으니 꼭 로그아웃을 해주세요.';
$lang->about_keep_warning='브라우저를 닫더라도 로그인이 계속 유지될 수 있습니다. 로그인 유지 기능을 사용할 경우 다음 접속부터는 로그인할 필요가 없습니다. 단, 게임방, 학교 등 공공장소에서 이용 시 개인정보가 유출될 수 있으니 꼭 로그아웃을 해주세요.';
$lang->about_webmaster_name='인증 메일이나 기타 사이트 관리 시 사용될 웹마스터의 이름을 입력해주세요. (기본 : webmaster)';
$lang->about_webmaster_email='인증 메일이나 기타 사이트 관리 시 사용될 웹마스터의 메일 주소를 입력해주세요.';
if(!is_array($lang->search_target_list)){
	$lang->search_target_list = array();
}
$lang->search_target_list['email_address']='이메일';
$lang->search_target_list['regdate']='가입일시';
$lang->search_target_list['regdate_more']='가입일시(이상)';
$lang->search_target_list['regdate_less']='가입일시(이하)';
$lang->search_target_list['last_login']='최근 로그인 일시';
$lang->search_target_list['last_login_more']='최근 로그인 일시(이상)';
$lang->search_target_list['last_login_less']='최근 로그인 일시(이하)';
$lang->search_target_list['birthday']='생일';
$lang->search_target_list['extra_vars']='사용자 정의';
$lang->cmd_modify_new_auth_email_address='신규 메일 주소로 변경 후 인증 메일 발송';
$lang->cmd_set_design_info='디자인';
$lang->cmd_login='로그인';
$lang->cmd_logout='로그아웃';
$lang->cmd_signup='회원가입';
$lang->cmd_site_signup='가입';
$lang->cmd_modify_member_email_address='이메일 주소 변경';
$lang->about_modify_member_email_address='사용하는 이메일 주소를 변경할 수 있습니다.';
$lang->cmd_modify_member_info='회원정보 변경';
$lang->cmd_modify_member_password='비밀번호 변경';
$lang->cmd_view_member_info='회원정보 보기';
$lang->cmd_leave='탈퇴';
$lang->cmd_find_member_account='ID/PW 찾기';
$lang->cmd_find_member_account_with_email='이메일 주소로 계정 찾기';
$lang->cmd_find_member_account_with_email_question='질문/답변으로 계정 찾기';
$lang->cmd_resend_auth_mail='인증메일 재발송';
$lang->cmd_send_auth_new_emaill_address='신규 메일 주소로 인증 메일 발송';
$lang->cmd_member_list='회원 목록';
$lang->cmd_module_config='기본 설정';
$lang->cmd_member_group='그룹 관리';
$lang->cmd_send_mail='메일발송';
$lang->cmd_manage_id='금지 아이디 관리';
$lang->cmd_manage_nick_name='금지 닉네임 관리';
$lang->cmd_manage_form='가입 폼 관리';
$lang->cmd_view_own_document='작성 글 보기';
$lang->cmd_manage_member_info='회원 정보 관리';
$lang->cmd_trace_document='작성글 추적';
$lang->cmd_trace_comment='작성 댓글 추적';
$lang->cmd_view_scrapped_document='스크랩 보기';
$lang->cmd_view_saved_document='저장함 보기';
$lang->cmd_send_email='메일 보내기';
$lang->msg_email_not_exists='이메일 주소가 존재하지 않습니다.';
$lang->msg_alreay_scrapped='이미 스크랩된 게시물입니다.';
$lang->msg_cart_is_null='대상을 선택해주세요.';
$lang->msg_checked_file_is_deleted='%d개의 첨부 파일이 삭제되었습니다.';
$lang->msg_find_account_title='아이디/비밀번호 정보입니다.';
$lang->msg_find_account_info='요청한 계정 정보는 아래와 같습니다.';
$lang->msg_find_account_comment='아래 링크를 클릭하면 위에 적힌 비밀번호로 바뀌게 됩니다.<br />로그인 한 후 비밀번호를 바꾸어주세요.';
$lang->msg_confirm_account_title='가입 인증 메일입니다.';
$lang->title_modify_email_address='이메일주소 변경 요청 확인 메일입니다.';
$lang->msg_confirm_account_info='가입한 계정 정보는 아래와 같습니다.';
$lang->msg_confirm_account_comment='아래 링크를 클릭하면 가입 인증이 이루어집니다.';
$lang->msg_confirm_email_address_change='아래 링크를 클릭하면 이메일 주소가 %s으로 변경됩니다.';
$lang->msg_auth_mail_sent='%s 메일로 인증 정보를 담은 메일이 발송되었습니다. 메일을 확인하세요.';
$lang->msg_confirm_mail_sent='%s 메일로 가입 인증 메일이 발송되었습니다. 메일을 확인하세요.';
$lang->msg_change_mail_sent='%s 메일로 이메일 변경 인증 메일이 발송되었습니다. 메일을 확인하세요.';
$lang->msg_invalid_modify_email_auth_key='잘못된 이메일 변경 요청입니다.<br />이메일 변경요청을 다시 하거나 사이트 관리자에게 문의해주세요.';
$lang->msg_invalid_auth_key='잘못된 계정 인증 요청입니다.<br />아이디/비밀번호 찾기를 다시 하거나 사이트 관리자에게 계정 정보를 문의해주세요.';
$lang->msg_success_authed='인증이 정상적으로 되어 임시 비밀번호로 변경 처리가 되었습니다.\n꼭 인증 메일에 표시된 비밀번호를 이용하여 원하는 비밀번호로 변경하세요.';
$lang->msg_success_confirmed='가입 인증이 정상적으로 처리 되었습니다.';
$lang->msg_failed_auth='이 가입인증 링크는 만료되었습니다(24시간 초과).\n새로운 가입 인증 메일을 확인해주세요.';
$lang->msg_new_member='회원 추가';
$lang->msg_rechecked_password='비밀번호 재확인';
$lang->msg_update_member='회원정보 조회/수정';
$lang->msg_leave_member='회원 탈퇴';
$lang->msg_group_is_null='등록된 그룹이 없습니다.';
$lang->msg_not_delete_default='기본 항목을 삭제할 수 없습니다.';
$lang->msg_not_exists_member='존재하지 않는 회원입니다.';
$lang->msg_cannot_delete_admin='관리자 아이디는 삭제할 수 없습니다. 관리자 해제 후 다시 삭제시도해주세요.';
$lang->msg_exists_user_id='이미 존재하는 아이디입니다. 다른 아이디를 입력해주세요.';
$lang->msg_exists_email_address='이미 존재하는 메일 주소입니다. 다른 메일 주소를 입력해주세요.';
$lang->msg_exists_nick_name='이미 존재하는 닉네임입니다. 다른 닉네임을 입력해주세요.';
$lang->msg_signup_disabled='회원 가입할 수 없습니다.';
$lang->msg_already_logged='이미 회원 가입을 한 상태입니다.';
$lang->msg_not_logged='로그인을 하지 않았습니다.';
$lang->msg_insert_group_name='그룹명을 입력해 주세요.';
$lang->msg_check_group='그룹을 선택해 주세요.';
$lang->msg_not_uploaded_profile_image='프로필 이미지를 등록할 수 없습니다.';
$lang->msg_not_uploaded_image_name='이미지 이름을 등록할 수 없습니다.';
$lang->msg_not_uploaded_image_mark='이미지 마크를 등록할 수 없습니다.';
$lang->msg_not_uploaded_group_image_mark='그룹 이미지 마크를 등록할 수 없습니다.';
$lang->msg_accept_agreement='약관에 동의해야 합니다.';
$lang->msg_user_denied='입력한 아이디의 사용이 중지 되었습니다.';
$lang->msg_user_not_confirmed='아직 메일 인증이 이루어지지 않았습니다. 메일을 확인해 주세요.';
$lang->msg_user_limited='입력한 아이디는 %s 까지 사용하실 수 없습니다.';
$lang->about_rechecked_password='회원의 정보를 안전하게 보호하기 위해 비밀번호를 다시 한번 확인 합니다.';
$lang->about_user_id='회원 ID는 3~20자 사이의 영문+숫자로 이루어져야 하며 영문으로 시작해야 합니다.';
$lang->about_password='비밀번호는 6~20자로 되어야 합니다.';
$lang->cmd_config_password_strength='비밀번호 보안수준';
$lang->cmd_password_hashing_algorithm='비밀번호 암호화 알고리듬';
$lang->cmd_password_hashing_work_factor='비밀번호 암호화 소요시간';
$lang->cmd_password_hashing_auto_upgrade='알고리듬 자동 업그레이드';
$lang->password_strength_low='낮음';
$lang->password_strength_normal='보통';
$lang->password_strength_high='높음';
$lang->about_password_strength_config='회원들이 비밀번호를 등록/변경할 때, 비밀번호가 설정된 보안수준을 만족해야 합니다. 단, 관리자가 직접 등록할 경우에는 적용되지 않습니다.';
$lang->about_password_hashing_algorithm='회원들의 비밀번호를 DB에 저장할 때 암호화(해싱)하는 방식을 지정할 수 있습니다.';
$lang->about_password_hashing_work_factor='시간이 오래 걸리는 알고리듬일수록 보안이 강하지만, 로그인이 오래 걸릴 수 있습니다. bcrypt 및 pbkdf2 알고리듬에만 적용됩니다.';
$lang->about_password_hashing_auto_upgrade='설정된 알고리듬과 다른 방법으로 암호화된 비밀번호가 있으면 다음 로그인시 설정된 알고리듬으로 자동 변환합니다.';
if(!is_array($lang->about_password_strength)){
	$lang->about_password_strength = array();
}
$lang->about_password_strength['low']='비밀번호는 4자 이상이어야 합니다.';
$lang->about_password_strength['normal']='비밀번호는 6자리 이상이어야 하며 영문과 숫자를 반드시 포함해야 합니다.';
$lang->about_password_strength['high']='비밀번호는 8자리 이상이어야 하며 영문과 숫자, 특수문자를 반드시 포함해야 합니다.';
$lang->about_user_name='이름은 2~20자 이내여야 합니다.';
$lang->about_nick_name='닉네임은 2~20자 이내여야 합니다.';
$lang->about_email_address='메일 주소는 메일 인증 후 비밀번호 변경이나 찾기 등에 사용됩니다.';
$lang->about_homepage='홈페이지가 있을 경우 입력해주세요.';
$lang->about_blog_url='운영하는 블로그가 있을 경우 입력해주세요.';
$lang->about_birthday='생년월일을 입력해주세요.';
$lang->about_allow_mailing='메일링 가입이 체크되지 않으면 단체메일 발송시 메일을 받지 않습니다.';
$lang->about_denied='체크 시 아이디를 사용할 수 없도록 합니다.';
$lang->about_is_admin='체크 시 최고 관리자 권한을 가지게 됩니다.';
$lang->about_member_description='회원에 대한 관리자 메모입니다.';
$lang->about_group='한 아이디는 여러 개의 group에 속할 수 있습니다.';
$lang->about_column_type='추가할 가입 폼의 형식을 지정해주세요.';
$lang->about_column_name='템플릿에서 사용할 수 있는 영문으로 된 이름을 적어주세요. (변수명)';
$lang->about_column_title='가입 또는 정보 수정/조회시에 표시될 제목입니다.';
$lang->about_default_value='기본으로 입력될 값을 정할 수 있습니다.';
$lang->about_active='활성 항목에 체크를 해야 가입시 정상적으로 노출됩니다.';
$lang->about_form_description='설명란에 입력을 하면 가입시 표시가 됩니다.';
$lang->about_required='체크하면 회원가입시 필수항목으로 입력하도록 됩니다.';
$lang->about_enable_join='체크하면 회원가입을 할 수 있습니다.';
$lang->about_enable_confirm='입력된 메일 주소로 인증 메일을 보내 회원 가입을 확인합니다. 가입자가 인증메일을 통해 인증절차를 완료해야만 정상적으로 로그인이 가능해집니다.';
$lang->about_enable_ssl='서버에서 보안접속(SSL) 지원이 될 경우 회원가입, 정보수정, 로그인 등의 개인정보가 서버로 보내질 때 SSL(https)을 이용하도록 할 수 있습니다.';
$lang->about_limit_day='회원 가입 후 정해진 일자동안 인증 제한을 할 수 있습니다.';
$lang->about_limit_date='지정한 날짜까지 로그인을 할 수 없습니다.';
$lang->about_after_login_url='로그인 후 이동할 URL을 정할 수 있습니다. 입력 URL이 없는 경우 해당 페이지가 유지됩니다.';
$lang->about_after_logout_url='로그아웃 후 이동할 URL을 정할 수 있습니다. 입력 URL이 없는 경우 해당 페이지가 유지됩니다.';
$lang->about_redirect_url='회원 가입 후 이동할 페이지를 선택해 주세요. 선택된 페이지가 없는 경우 이전 페이지로 돌아갑니다.';
$lang->about_agreement='회원 가입 약관이 없을 경우 표시되지 않습니다.';
$lang->about_image_name='회원의 이름을 글자 대신 이미지로 사용할 수 있게 합니다.';
$lang->about_image_mark='회원의 이름 앞에 마크를 달 수 있습니다.';
$lang->about_group_image_mark='회원의 이름 앞에 그룹 마크를 달 수 있습니다.';
$lang->about_profile_image='회원의 프로필 이미지를 사용할 수 있게 합니다.';
$lang->about_signature_max_height='서명란의 최대 높이를 제한할 수 있습니다. (0 또는 비워두면 제한하지 않습니다.)';
$lang->about_accept_agreement='약관을 모두 읽었으며 동의합니다.';
$lang->about_member_default='회원 가입을 한 사람이 최초에 속하는 그룹을 말합니다.';
$lang->about_find_member_account='아이디/비밀번호는 가입시 등록한 메일 주소로 알려드립니다. 가입할 때 등록한 메일 주소를 입력하고 "ID/PW 찾기" 버튼을 클릭해주세요.<br />';
$lang->about_temp_password='임시 비밀번호가 정상적으로 발급되었습니다.<br />로그인 후 반드시 비밀번호를 변경하세요.<br />';
$lang->about_ssl_port='기본 포트 이외의 보안접속(SSL) 포트를 사용하는 경우 포트번호를 입력해주세요.';
$lang->about_reset_auth_mail='현재등록된 이메일 주소는 %s입니다. 이메일 주소를 변경하고자 하는 경우 새로운 이메일 주소로 회원정보 갱신 후 인증메일을 재발송할 수 있습니다.';
$lang->about_resend_auth_mail='인증 메일을 받지 못한 경우 다시 받을 수 있습니다.';
$lang->about_reset_auth_mail_submit='이메일을 로그인 계정으로 사용할 경우 신규 메일주소로 로그인해야 합니다.';
$lang->no_article='글이 없습니다.';
$lang->find_account_question='비밀번호 찾기 질문/답변';
$lang->find_account_answer='비밀번호 찾기 답변';
$lang->about_find_account_question='회원 정보에 입력한 아이디와 이메일, 질문/답변으로 임시 비밀번호를 발급 받을 수 있습니다.';
if(!is_array($lang->find_account_question_items)){
	$lang->find_account_question_items = array();
}
$lang->find_account_question_items['1']='다른 이메일 주소는?';
$lang->find_account_question_items['2']='나의 보물 1호는?';
$lang->find_account_question_items['3']='나의 출신 초등학교는?';
$lang->find_account_question_items['4']='나의 출신 고향은?';
$lang->find_account_question_items['5']='나의 이상형은?';
$lang->find_account_question_items['6']='어머니 성함은?';
$lang->find_account_question_items['7']='아버지 성함은?';
$lang->find_account_question_items['8']='가장 좋아하는 색깔은?';
$lang->find_account_question_items['9']='가장 좋아하는 음식은?';
$lang->temp_password='임시 비밀번호';
$lang->cmd_get_temp_password='임시 비밀번호 발급';
$lang->about_get_temp_password='로그인 후 비밀번호 변경해 주세요.';
$lang->msg_question_not_exists='등록한 비밀번호 찾기 질문/답변이 없습니다.';
$lang->msg_answer_not_matches='비밀번호 찾기 질문/답변 또는 정보가 올바르지 않습니다.';
$lang->change_password_date='비밀번호 갱신주기';
$lang->about_change_password_date='일정기간이 지나면 비밀번호 변경을 하도록 유도하는 기능입니다. (사용하지 않음 : 0 입력) ';
$lang->msg_change_password_date='%s일 동안 비밀번호를 변경하지 않았습니다. 개인정보 보호를 위하여 비밀번호를 변경해야 합니다.';
$lang->login_trial_limit1='로그인 시도 횟수 제한 횟수';
$lang->login_trial_limit2='로그인 시도 횟수 제한 시간';
$lang->about_login_trial_limit1='정해진 시간 안에 허용되는 로그인 횟수를 입력하십시오. 짧은 시간 동안 하나의 아이피(IP)에서 시도할 수 있는 로그인 횟수에 제한을 둡니다.';
$lang->about_login_trial_limit2='지정된 횟수의 로그인을 허용하는 시간을 정하십시오. 짧은 시간 동안 하나의 아이피(IP)에서 시도할 수 있는 로그인 횟수에 제한을 둡니다. 시간은 가장 마지막 로그인 시도의 시각으로부터의 시간을 기준으로 측정합니다.';
$lang->msg_kr_address='읍, 면, 동 이름으로 검색하세요.';
$lang->msg_kr_address_etc='나머지 주소(번지)를 입력하세요.';
$lang->cmd_search_again='다시 검색';
$lang->msg_select_user='관리할 회원을 선택해주세요.';
$lang->msg_delete_user='선택한 회원을 삭제합니다.';
$lang->cmd_selected_user_manage='선택한 회원 관리';
$lang->about_change_user_group='선택한 회원의 그룹을 다시 설정.';
$lang->about_send_message='회원에게 쪽지를 발송해서 이 사실을 알립니다. 작성하지 않으면 발송하지 않습니다.';
$lang->cmd_required='필수';
$lang->cmd_optional='선택';
$lang->cmd_image_max_width='너비 제한';
$lang->cmd_image_max_height='높이 제한';
$lang->cmd_input_extend_form='회원 정의 입력';
$lang->about_multi_type='다중 또는 단일 항목의 선택 값을 입력하세요.(줄 바꿈으로 구분)';
$lang->msg_delete_extend_form='선택한 항목을 삭제합니다.';
$lang->set_manage_id='줄 바꿈으로 구분';
$lang->count_manage_id='<span class="_deniedIDCount">%s</span>개의 금지 아이디가 있습니다.';
$lang->count_manage_nick_name='<span class="_deniedNickNameCount">%s</span>개의 금지 닉네임이 있습니다.';
$lang->user_list='회원 목록';
$lang->cmd_show_all_member='모든 회원';
$lang->cmd_show_super_admin_member='최고 관리자';
$lang->cmd_show_site_admin_member='사이트 관리자';
$lang->approval='승인';
$lang->denied='거부';
$lang->use_group_image_mark='그룹 이미지 마크 사용';
$lang->group_image_mark='그룹 이미지 마크';
$lang->usable_group_image_mark_list='사용가능한 그룹 이미지 마크 목록';
$lang->add_group_image_mark='그룹 이미지 마크 추가';
$lang->link_file_box='파일박스 관리 바로가기';
$lang->msg_group_delete='선택한 그룹을 삭제합니다.';
$lang->email='이메일';
$lang->add_prohibited_id='금지 아이디 추가';
$lang->multi_line_input='여러 항목은 줄을 바꾸어 입력하세요.';
$lang->add_extend_form='사용자 정의 항목 추가';
$lang->msg_null_prohibited_id='추가할 금지 아이디를 입력해주세요.';
$lang->msg_null_prohibited_nick_name='추가할 금지 닉네임을 입력해주세요.';
$lang->identifier='로그인 계정';
$lang->about_identifier='로그인에 사용할 계정을 선택해주세요.';
$lang->about_public_item='본인 외에 다른 회원에게도 노출될 정보인지 선택합니다.';
$lang->use_after_save='저장 후 사용';
$lang->cmd_add_group='그룹 추가';
$lang->msg_groups_exist='개 그룹이 존재합니다.';
$lang->cmd_member_config='회원 설정';
$lang->cmd_member_sync='회원정보 동기화';
$lang->about_member_sync='회원정보와 게시물/댓글 정보를 동기화 합니다. 데이터가 많은 경우 시간이 오래 소요될 수 있습니다. <strong>이용자가 많은 경우 반드시 서비스를 중단하고 진행하세요.</strong>';
$lang->msg_success_modify_email_address='이메일 주소가 정상적으로 변경되었습니다. 변경된 이메일 주소로 로그인 가능합니다.';
$lang->group='그룹';
$lang->retrieve_password='비밀번호 찾기';
$lang->excess_ip_access_count='로그인 가능 횟수를 초과했습니다. %s 간 로그인할 수 없습니다.';
$lang->enable_login_fail_report='계정 무한 대입 방지 사용';
$lang->login_fail_report='로그인 실패 기록 보고 입니다.';
$lang->login_fail_report_contents='<h2>로그인 실패 기록을 알려드립니다.</h2>%1$s<hr /><p>* 비밀번호를 틀리는 등의 일이 없었는데 이 메시지를 보신다면, 계정 관리에 유의 바랍니다.<br />* 이 메시지는 로그인이 성공한 순간 누적 로그인 실패 기록이 많을 경우, 로그인 성공 이전 실패 기록을 모아서 발송합니다.<br />발송 시각: %2$s</p>';
$lang->all_group='그룹전체';
$lang->msg_insert_group_name_detail='그룹제목이 빈 곳은 반영되지 않습니다';
$lang->msg_exist_selected_module='회원 가입 후 이동할 주소의 정보가 존재하지 않습니다.';
$lang->cmd_spammer='스패머 관리';
$lang->spammer_description='<p>지정된 회원을 차단하고, 회원이 남긴 글과 댓글을 삭제합니다. 회원이 작성한 게시물의 양에 따라 오래걸릴 수 있습니다.</p>';
$lang->btn_spammer_delete_all='모두 삭제';
$lang->spammer_move_to_trash='휴지통으로 이동';
$lang->msg_spammer_complete='완료되었습니다.';
$lang->warn_member_setting='주의! 현재 설정이 사이트의 회원 가입을 허용하고 있지 않고 있다는 것을 명심하십시오.';
$lang->allow_transparent_thumbnail='리사이즈 이미지에 투명 배경을 허용합니다. (PNG only)';
