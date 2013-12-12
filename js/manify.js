(function($) {
    //图书放大
   $(document).ready(function() {
    var that_pa = null;
    $("ul.book_list li a").hover(function() {
      if(!!that_pa){
          that_pa.find(".big_image").hide();
      }
      var s_pa=$(this).closest('li');
      that_pa = s_pa;
      var s_src= s_pa.find("img").attr("src");
      s_pa.css("z-index","3")
      s_pa.nextAll().css("z-index","1")
      var k = s_src.lastIndexOf('/');
      var book_name =s_src.substr(k+1,s_src.length);

      s_pa.find(".big_image").show(300);

      s_pa.find(".big_image").css("background-image" , "url(/sites/all/themes/kidslib-theme/images/big_book/"+book_name+")");

      if($("ul.book_list li").index(s_pa)>4){
        s_pa.find(".big_image").css("top" , "-200px").css("left","30px").css("background-postion","bottom");
        }
      },function (){
          var s_pa=$(this).closest('li');
          var ele = s_pa.find(".big_image");
          ele.stop(true);
          ele.hide();
        }
     )
  })
})(jQuery);
