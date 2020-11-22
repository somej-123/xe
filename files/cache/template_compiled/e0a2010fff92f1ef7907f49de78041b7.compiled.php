<?php if(!defined("__XE__"))exit;?><form class="x_form-vertical" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="act" value="procMyboardAdminUpdateSimpleSetup" />
	<div class="x_control-group">
		<label class="x_control-label" for="title"><?php echo $__Context->lang->myboard_title ?></label>
		<div class="x_controls">
			<input type="text" name="title" id="title" class="lang_code" value="<?php echo $__Context->config->title ?>" />
			<p class="x_help-block"><?php echo $__Context->lang->about_myboard_title ?></p>
		</div>
	</div>
</form>
<!--
    <form>
        설정을 전송할 form
        module_srl:설정을 저장할 모듈의 번호
        act:실행할 액션명
        <?php echo $__Context->varname ?>
        변수를 출력하기 위한 XE템플릿 문법
        <?php echo $__Context->lang->varname ?>
        $lang : 언어 변수
        현재 언어에 맞는 언어 변수의 값
        xe에서 알아서 언어 변수를 세팅 함
-->