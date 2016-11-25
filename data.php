<?php
$last=$_POST['last'];
$amount=$_POST['amount'];
$data=array(
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试','author'=>'author','date'=>'17:41 2016/11/25'	),

);

echo json_encode(array_slice($data,$last,$amount));exit;