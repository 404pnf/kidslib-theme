function ShowDialog(url) {
  var iWidth=800;
  var iHeight=800;
  var iTop=(window.screen.height-iHeight)/2;
  var iLeft=(window.screen.width-iWidth)/2;
  window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
}
