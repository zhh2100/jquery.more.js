<pre>
# jquery.more.js 兼容jquery1.X-2.X
使用jquery.more.js来实现点击底部更多后, 底部加载出新的数据，ajax加载更多


调用参数,方法如:    $('#more').more({'url': 'data.php'});

可用参数
amount  :'10'           每次显示记录数
url :'comments.php'     请求后台的地址
template:'.single_item' ajax返回json数据替换对应模板中的class  
如array(array('title'=&gt;'标题1','content'=&gt;'内容1'))替换&lt;div class=&quot;single_item&quot;&gt;&lt;div class=&quot;title&quot;&gt;&lt;/div&gt;&lt;div class=&quot;content&quot;&gt;&lt;/div&gt;&lt;/div&gt;
替换成&lt;div class=&quot;single_item&quot;&gt;&lt;div class=&quot;title&quot;&gt;标题1&lt;/div&gt;&lt;div class=&quot;content&quot;&gt;内容1&lt;/div&gt;&lt;/div&gt;
trigger :'#get_more'    触发加载更多记录的class属性
scroll  :'false'        是否支持滚动触发加载
spinner_code  :'&lt;img src=&quot;loading.gif&quot;/&gt;'         loading.gif路径



示例
html文件
&lt;!DOCTYPE html&gt;  
&lt;html&gt;  
&lt;head&gt;  
	&lt;meta charset=&quot;utf-8&quot;/&gt;  
	&lt;title&gt;demo&lt;/title&gt; 
&lt;style&gt;
&lt;/style&gt;
&lt;script src=&quot;http://cdn.bootcss.com/jquery/1.12.3/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;jquery.more.min.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body style=&quot;height:1000px;&quot;&gt;
&lt;div id=&quot;more&quot;&gt;  
	 &lt;div class=&quot;single_item&quot;&gt;  
			&lt;div class=&quot;other&quot;&gt;&lt;div class=&quot;date&quot;&gt;&lt;/div&gt;其他内容&lt;/div&gt;
			&lt;div class=&quot;author&quot;&gt;&lt;/div&gt;  
			&lt;div class=&quot;title&quot;&gt;&lt;/div&gt;
      &lt;div class=&quot;other&quot;&gt;其他内容&lt;/div&gt;
	 &lt;/div&gt;
	 &lt;a href=&quot;javascript:;&quot; class=&quot;get_more&quot;&gt;::点击加载更多内容::&lt;/a&gt;  
&lt;/div&gt;

&lt;script type=&quot;text/javascript&quot;&gt;
jQuery(function($){
	$('#more').more({'url': 'data.php','scroll':'true'});
});
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;

php文件
&lt;?php
$last=$_POST['last'];
$amount=$_POST['amount'];
$data=array(
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),
	array('title'=&gt;'测试','author'=&gt;'author','date'=&gt;'17:41 2016/11/25'	),

);

echo json_encode(array_slice($data,$last,$amount));exit;
</pre>