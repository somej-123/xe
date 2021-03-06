<?php

class myboardView extends myboard
{
	public function init()
	{
		// 설정 값 세팅
		$oModuleModel = getModel('module');
		$config = $oModuleModel->getModulePartConfig('myboard', $this->module_info->module_srl);		
		Context::set('config', $config);
		
		// 템플릿 경로를 스킨 경로로 세팅
		$templatePath = sprintf('%sskins/%s/', $this->module_path, $this->module_info->skin);
		$this->setTemplatePath($templatePath);
		
		// 템플릿 파일명을 세팅
		$templateFile = str_replace('dispMyboard', '', $this->act);
		$this->setTemplateFile($templateFile);
	}
	
	public function dispMyboardWrite()
	{
		// 권한 체크
		if (!$this->grant->write_document)
		{
			return new Object(-1, 'msg_not_permitted');
		}
	}
	
	public function dispMyboardContent()
	{
		$documentSrl = Context::get('document_srl');
		
		// document_srl이 있으면 글 보기
		if ($documentSrl)
		{
			return $this->viewDocument();
		}
		
		// 없으면 목록 보기
		else
		{
			return $this->viewList();
		}
	}
	
	private function viewDocument()
	{
		$documentSrl = Context::get('document_srl');
		$oDocumentModel = getModel('document');
	
		// 권한 체크
		if (!$this->grant->view)
		{
			return new Object(-1, 'msg_not_permitted');
		}
		
		// document 얻기
		$oDocument = $oDocumentModel->getDocument($documentSrl);
		
		// 존재하는지 확인
		if (!$oDocument->isExists())
		{
			return new Object(-1, 'msg_not_founded');
		}
		
		// 모듈 관리자이면 권한 세팅
		if ($this->grant->manager)
		{
			$oDocument->setGrant();
		}
		
		// 조회수 증가
		$oDocument->updateReadedCount();
		
		// 브라우저 제목에 글 제목 추가
		Context::addBrowserTitle($oDocument->getTitleText());
		
		// 템플릿 변수 세팅
		Context::set('oDocument', $oDocument);
		
		// 글 보기, 목록 보기 모두 act가 동일하기 때문에 템플릿 파일을 직접 지정
		$this->setTemplateFile('View');
	}
	
	private function viewList()
	{
		$page = Context::get('page');
		$oDocumentModel = getModel('document');
		
		// 권한 체크
		if (!$this->grant->list)
		{
			return new Object(-1, 'msg_not_permitted');
		}
		
		// 목록 얻을 파라미터 세팅
		$args = new stdClass();
		$args->module_srl = $this->module_info->module_srl;
		$args->page = $page;
		$args->list_count = 10;
		$args->page_count = 10;
		$args->sort_index = 'list_order';
		$args->order_type = 'asc';
		
		// 목록 가져오기
		$output = $oDocumentModel->getDocumentList($args);
		
		// 템플릿 변수 세팅
		Context::set('document_list', $output->data);
		Context::set('total_count', $output->total_count);
		Context::set('total_page', $output->total_page);
		Context::set('page', $output->page);
		Context::set('page_navigation', $output->page_navigation);
		
		// 글 보기, 목록 보기 모두 act가 동일하기 때문에 템플릿 파일을 직접 지정
		$this->setTemplateFile('List');
	}
}

/* End of file: myboard.view.php */