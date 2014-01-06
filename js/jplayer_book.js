$(document).ready(function(){
    $("#jquery_jplayer_1").jPlayer({
        swfPath: "/sites/all/libraries/jplayermp3/Jplayer.swf",
        supplied: "mp3",
        wmode: "window"
    });
    init();

});
var path;

function init(){
    var audioNames = eval ( $("#audio_name").html() ) ;
    path = $("#audio_path").html();
    var audioPathObj = new Object();
    window.pageAudios = new Object();

    var len = audioNames.length;
    for(i=0;i<len;i++){
        audioPathObj[ audioNames[i] ] = audioNames[i+1] ;
        i++;
    }

    for( i = 0 ; i < len ; i= i+2){
        var first = audioPathObj[ i ];
        var second = audioPathObj[ i +1];

        if( !!first && first != ""){
            window.pageAudios[i] = first;
        }else if(!!second && second != ""){
            window.pageAudios[i] = second;
        }else{
            window.pageAudios[i] = "null";
        }
    }

    if(audioPathObj[1] == ""){
        $("#jp_container_1").hide();
    }

}



function changeAudioUrl(pageIndex){

    //var urlPath = audioPathObj[pageIndex+1];
    var urlPath = window.pageAudios[pageIndex];

    $('#jquery_jplayer_1').jPlayer("pause");

    if(urlPath == "null"){
        $("#jp_container_1").hide();
        return;
    }
    $("#jp_container_1").show();

    $('#jquery_jplayer_1').jPlayer(
    'setMedia',
    { mp3: path + urlPath}).jPlayer('play');
}



