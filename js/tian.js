/**
 * 分类选项卡高亮
 */
(function($){
  $(document).ready(function() {
    var url = window.location.pathname;
    var urlSplit = url.split("/");
    var ageType = urlSplit[4];
    dealAgeType(ageType);

    /**
     * 处理年龄相关的文本
     */
      function dealAgeType(ageType){
          //如果url地址中没有".html"，这里添加
         if (ageType.indexOf(".html") == -1){
           ageType += ".html";
         }
         ageType = "/" + ageType;
         $(".top_bookshelf li").each(function(i, liEle){
            var aEle = $(liEle).children("a");
            //删除已有的class
            aEle.removeClass("active");

            if (aEle.attr("href").indexOf(ageType) != -1){
                aEle.addClass("active");
            }
         })
      }
    })
})(jQuery);
