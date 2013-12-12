var record = 15;//每页显示多少条记录
var count = 1;//记录总数
var pageTotal = 1//总页数
var pagenum = 1;//将要显示的页码

//重新整理当前页码，如果页面小于1，则赋值为1，如果大于总页数，则等于总页数
coordinatePagenum(pagenum);

//根据当前要显示的页码取得当前面里第一条记录的号码
var pageBegin = (record*(pagenum-1)+1)|0;

//根据当前要显示的页码取得当前面里最后一条记录的号码
var pageEnd = record*pagenum;

function initdata(pagenum) {
    var list_obj = document.getElementById("list").getElementsByTagName("li");
    count=list_obj.length;
    pageTotal = ((count+record-1)/record)|0;//总页数
    showhiddenRecord(pagenum)
}
function showhiddenRecord(pagenum){
    //document.getElementById('number').innerHTML=pagenum;
    if(pagenum<=1){
       document.getElementById('theFirstPage').innerHTML="<span class=\"pager-none\">第一页</span>";
       document.getElementById('thePrePage').innerHTML="<span  class=\"pager-none\">上一页</span>";
       document.getElementById('page_pageTotal').innerHTML=pagenum+"/"+pageTotal;
    }else{
        document.getElementById('theFirstPage').innerHTML="<a href=\"javascript:firstPage()\" class=\"pager-first\">第一页</a>";
        document.getElementById('thePrePage').innerHTML="<a href=\"javascript:prePage()\"  class=\"pager-previous\">上一页</a>";
        document.getElementById('page_pageTotal').innerHTML=pagenum+"/"+pageTotal;
    }
    if(pagenum>=pageTotal){
        document.getElementById('theNextPage').innerHTML="<span  class=\"pager-none\">下一页</span>";
        document.getElementById('theLastPage').innerHTML="<span  class=\"pager-none\">最后一页</span";
        document.getElementById('page_pageTotal').innerHTML=pagenum+"/"+pageTotal;
    }else{
        document.getElementById('theNextPage').innerHTML="<a href=\"javascript:nextPage()\"  class=\"pager-next\">下一页</a>";
        document.getElementById('theLastPage').innerHTML="<a href=\"javascript:lastPage()\"  class=\"pager-last\">最后一页</a>";
        document.getElementById('page_pageTotal').innerHTML=pagenum+"/"+pageTotal;
    }
    //document.getElementById('mySelect').value=pagenum;
    //根据当前要显示的页码取得当前面里第一条记录的号码
    pageBegin = (record*(pagenum-1)+1)|0;
    
    //根据当前要显示的页码取得当前面里最后一条记录的号码
    pageEnd = record*pagenum;
    list_obj = document.getElementById("list").getElementsByTagName("li");
    for(var i=0;i<list_obj.length;i++){
        if(i>=pageBegin-1 && i<=pageEnd-1){
           list_obj[i].style.display="";
        }else{
           list_obj[i].style.display="none";
        }
    }
    
}

function firstPage(){
    pagenum=1;
    showhiddenRecord(pagenum);
}

function lastPage(){
    pagenum=pageTotal
    showhiddenRecord(pageTotal);
}

//重新整理当前页码，如果页面小于1，则赋值为1，如果大于总页数，则等于总页数
function coordinatePagenum(num){
    if(num<1){
        num="1";
    }else if(num>pageTotal){
        num=pageTotal;
    }
}

function prePage(){
    pagenum--;
    coordinatePagenum(pagenum);
    showhiddenRecord(pagenum);
}

function nextPage(){
    pagenum++;
    coordinatePagenum(pagenum);
    showhiddenRecord(pagenum);
}

function gotoPage(num){
    pagenum=num
    coordinatePagenum(pagenum);
    showhiddenRecord(num);
}

