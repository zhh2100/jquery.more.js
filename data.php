<?php
$last=$_POST['last'];
$amount=$_POST['amount'];
$data=array(
	array('title'=>'测试1','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试2','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试3','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试4','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试5','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试6','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试7','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试8','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试9','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试10','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试11','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试12','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试13','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试14','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试15','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试16','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试17','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试18','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试19','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试20','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试21','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试22','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试23','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试24','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试25','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试26','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试27','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试28','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试29','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试30','author'=>'author','date'=>'17:41 2016/11/25'	),
	array('title'=>'测试31','author'=>'author','date'=>'17:41 2016/11/25'	),

);

echo json_encode(array_slice($data,$last,$amount));exit;