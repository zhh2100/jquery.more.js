/**
 * jquery.more.js   git@github.com:qqtxt/jquery.more.js.git
 * 兼容jquery1.X-2.X
 * ============================================================================
 * 网站地址: http://www.jetee.cn/ qq:112738102  Q群30133166
 * ============================================================================
 * $Author: embrace$
 * @version 0.0.3 17:29 2016/11/25
 */
/**
 * 调用参数,方法如:$('#more').more({'url': 'data.php'});
 * amount  :'10'           每次显示记录数
 * url :'comments.php'     请求后台的地址
 * template:'.single_item' ajax返回json数据替换对应模板中的class  
 *	如array(array('title'=>'标题1','content'=>'内容1'))替换<div class="single_item"><div class="title"></div><div class="content"></div></div>
 *  替换成<div class="single_item"><div class="title">标题1</div><div class="content">内容1</div></div>
 * trigger :'#get_more'    触发加载更多记录的class属性
 * scroll  :'false'        是否支持滚动触发加载
 * spinner_code  :'<img src="loading.gif"/>'         loading.gif路径
 */
(function($){          
	var target = null;
	var template = null;
	var lock = false;
	var variables = {
		'last'      :    0        
	};
	var settings = {
		'amount'      :   '10',          
		'url'     	  :   'comments.php',
		'format'      :   'json',
		'template'    :   '.single_item',
		'trigger'     :   '.get_more',
		'scroll'      :   'false',
		'spinner_code':   '<img src="loading.gif"/>'
	};
	
	var methods = {
		init:function(options){
			return this.each(function(){
				if(options){
					$.extend(settings, options);
				}
				template = $(this).children(settings.template).wrap('<div/>').parent();
				template.css('display','none');
				$(this).append('<div class="more_loader_spinner">'+settings.spinner_code+'</div>');
				target = $(this);
				target.find(settings.trigger).bind('click.more',methods.get_data);
				if(settings.scroll != 'false'){
					$(window).bind('scroll.more',methods.check_scroll);
				}
				target.more('get_data');

			});
		},
		check_scroll : function(){
			if($(window).scrollTop()==$(document).height()-$(window).height() && lock == false){
				target.more('get_data');
			}
		},
		debug :   function(){
			var debug_string = '';
			$.each(variables, function(k,v){
				debug_string += k+' : '+v+'\n';
			});
			alert(debug_string);
		},     
		remove        : function(){
			target.children(settings.trigger).unbind('.more');
			$(window).unbind('.more');
			target.children(settings.trigger).remove();
		},
		add_elements  : function(data){
			var root = target;
			var counter = 0;
			if(data){
				$(data).each(function(){
					counter++;
					var t = template;
					$.each(this, function(key, value){                          
						if(t.find('.'+key)) t.find('.'+key).html(value);
					});       
					if(root.children(settings.trigger).length==0){
						root.children('.more_loader_spinner').before(t.html());
					}else{
						root.children(settings.trigger).before(t.html());
					}
					root.children(settings.template+':last').attr('id', 'more_element_'+ ((variables.last++)+1));
				});
			}   
			else  methods.remove();
			target.children('.more_loader_spinner').css('display','none');
			if(counter < settings.amount) methods.remove();
		},
		get_data: function(){   
			var ile;
			lock = true;
			target.children(".more_loader_spinner").css('display','block');
			$(settings.trigger).css('display','none');
			if(typeof(arguments[0]) == 'number') ile=arguments[0];
			else {
				ile = settings.amount;              
			}			
			$.post(settings.url, {
				last : variables.last, 
				amount : ile 
			}, function(data){       
				$(settings.trigger).css('display','block');
				methods.add_elements(data);
				lock = false;
			}, settings.format);
		}
	};
	$.fn.more = function(method){
		if(methods[method]) 
			return methods[method].apply(this, Array.prototype.slice.call(arguments, 1 ));
		else if(typeof method == 'object' || !method) 
			return methods.init.apply(this, arguments);
		else $.error('Method ' + method +' does not exist!');
	}; 
})(jQuery);