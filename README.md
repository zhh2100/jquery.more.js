<pre>
# jquery.more.js
使用jquery.more.js来实现点击底部更多后, 底部加载出新的数据，ajax加载更多


调用参数,方法如:    $('#more').more({'url': 'data.php'});

可用参数
amount  :'10'           每次显示记录数
url :'comments.php'     请求后台的地址
template:'.single_item' ajax返回json数据替换对应模板中的class  
如array(array('title'=>'标题1','content'=>'内容1'))替换<div class="single_item"><div class="title"></div><div class="content"></div></div>
替换成<div class="single_item"><div class="title">标题1</div><div class="content">内容1</div></div>
trigger :'#get_more'    触发加载更多记录的class属性
scroll  :'false'        是否支持滚动触发加载
spinner_code  :'<img src="loading.gif"/>'         loading.gif路径



示例
html文件
<!DOCTYPE html>  
<html>  
<head>  
	<meta charset="utf-8"/>  
	<title>demo</title> 
<style>
</style>
<script src="http://cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
<script src="jquery.more.min.js"></script>
</head>
<body style="height:1000px;">

<div id="more">  
	 <div class="single_item">  
			<div class="other"><div class="date"></div>其他内容</div>
			<div class="author"></div>  
			<div class="title"></div>
      <div class="other">其他内容</div>
	 </div>
	 <a href="javascript:;" class="get_more">::点击加载更多内容::</a>  
</div>
<script type="text/javascript">
jQuery(function($){
	$('#more').more({'url': 'data.php','scroll':'true'});
});
</script>
</body>
</html>

php文件
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
</pre>