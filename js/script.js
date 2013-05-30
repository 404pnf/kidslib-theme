/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
jQuery.noConflict();
(function($) { 
$(function() {

  //分类电子书
  //收藏

    $('.book_classify .bookshelf_main_bg ul.book_list li.ebook a,.bookmarks .bookshelf_main_bg_1 ul.book_list li.ebook span.ebook_name a').click(function(){
	  url = this.href;
      var iWidth=1200; 
      var iHeight=window.screen.height-100;
      var iTop=0;
      var iLeft=(window.screen.width-iWidth)/2;
     window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
	 return false;
	 });
   //分类视频
    $('.bookmarks .bookshelf_main_bg_1 ul.book_list li.video span.ebook_name a,.book_classify  ul.book_list li.video a').click(function(){
	  url = this.href;
      var iWidth=720; 
      var iHeight=637;
      var iTop=(window.screen.height-iHeight)/2;
      var iLeft=(window.screen.width-iWidth)/2;
     window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
	 return false;
	 });
    //图书放大
	$("ul.book_list li a").hover(function() {
		var s_pa=$(this).closest('li');
		var s_src= s_pa.find("img").attr("src");
		s_pa.css("z-index","3")
		s_pa.nextAll().css("z-index","1")
		var k = s_src.lastIndexOf('/');
		var book_name =s_src.substr(k+1,s_src.length);
		
		
		s_pa.find(".big_image").show(300);
		
		s_pa.find(".big_image").css("background-image" , "url(/sites/all/themes/ilearning/images/big_book/"+book_name+")");
		
		if($("ul.book_list li").index(s_pa)>4){
			s_pa.find(".big_image").css("top" , "-200px").css("left","30px").css("background-postion","bottom");
		}
		
		}, function() {
			var s_pa=$(this).closest('li');
			s_pa.find(".big_image").hide();
		});

     //分类图标鼠标active获得点击后的高亮
	 var url = window.location + "";

	 var urlCategoryArr = url.match(/(\/\d+\/\d+)(\/\d+)*/);
	 var first = RegExp.$1 + "";
	 var last = RegExp.$2 + "";

     
	 if(first != ""){
	 $(".top_bookshelf  a").each(function(){
	     var _href = this.href;
	     var _indexof = _href.indexOf(first);
	     if(_indexof != -1){
	         $(this).addClass("active");
	     }
	     
	 });
	}


    
});
})(jQuery);
