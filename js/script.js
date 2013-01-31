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
  //alert('123456');
  
    $('.bookshelf_main_bg ul.book_list li.ebook a').click(function(){
    //alert('123456');
	 // url = 'http://ilearning.cn';
	  url = this.href;
      var iWidth=800; //窗口宽度
           var iHeight=800;//窗口高度
           var iTop=(window.screen.height-iHeight)/2;
           var iLeft=(window.screen.width-iWidth)/2;
     window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
	 return false;
	 });
	 $('.bookshelf_main_bg ul.book_list li.video a').click(function(){
    //alert('123456');
	 // url = 'http://ilearning.cn';
	  url = this.href;
      var iWidth=1000; //窗口宽度
           var iHeight=1000;//窗口高度
           var iTop=(window.screen.height-iHeight)/2;
           var iLeft=(window.screen.width-iWidth)/2;
     window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
	 return false;
	 });
    
// Place your code here.


    
});
})(jQuery);
