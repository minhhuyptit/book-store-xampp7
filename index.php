<?php
	error_reporting( error_reporting() & ~E_NOTICE );	//Tắt tất cả thông báo lỗi;
	require_once 'define.php';
	function __autoload($clasName){
		$fileName = LIBRARY_PATH . "{$clasName}.php";
		if(file_exists($fileName)){
			require_once $fileName;
		}
	}

	Session::init();

	$bootstrap = new Bootstrap();
	$bootstrap->init();
?>