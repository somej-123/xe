<?php

class myboardModel extends myboard
{
	// 메뉴 편집의 메뉴 추가에 모듈이 나올 수 있도록 추가
	public function triggerModuleListInSitemap(&$arr)
	{
		array_push($arr, 'myboard');
	}
}

//메뉴 편집의 메뉴 추가에 모듈이 나올 수 있도록 추가
 //[모듈이름]Model
    //해당 모듈의 get 관련 메소드를 가진 클래스
    //해당 모듈 클래스를 상속 받아야 함

    //triggerModuleListInSitemap()
    //메뉴 타입으로 나오게 하기 위한 메소드
    //myboard 클래스에서 menu.
    //getModuleListInSitemap()트리거에 이 메소드를 등록했기 때문에 해당 트리거 발생 시 이 메소드가 호출 됨
    //파라미터는 메뉴 타입으로 나올 수 있는 모듈 이름을 담은 배열로 반드시 레퍼런스 타입으로 받은 후 배열의 모듈 이름을 추가해 주어야함
/* End of file : myboard.model.php */