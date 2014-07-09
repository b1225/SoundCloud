/*曲数*/
var next;
var music;
/*曲データ*/
var myPlaylist = [];
/*添え字*/
var index=0;

function loadJPlayer() {
   playlistdata();
   playlist_title();
   $("#audio_player").jPlayer({
        /* イベントハンドラ */
        ready: function() {
            /* 再生するメディアの定義 */
            $(this).jPlayer("setMedia", myPlaylist[index]).jPlayer("play"); /* 自動再生 */
            document.getElementById("jp_playlist2").innerHTML = myPlaylist[index]["title"];
            
        },
        ended: function(event) {
            /* 終了時 */
            index++;
            next--;
            if (next === 0) {
                index=0;
                next=music;
                $(this).jPlayer("setMedia", myPlaylist[index]);
                document.getElementById("jp_playlist2").innerHTML = myPlaylist[index]["title"];
            } else {
                $(nextMusic);
            }
        },
        swfPath: '/swf',
        supplied: 'mp3',
       playlistOptions: {
            autoPlay: true
        }
    });
};
function nextMusic() {
    
    $("#audio_player").jPlayer("setMedia", myPlaylist[index]).jPlayer("play");
    document.getElementById("jp_playlist2").innerHTML = myPlaylist[index]["title"];
    console.log(myPlaylist[2]);
};
function playlistdata()
{
   var i;
   var temp;
    for (i = 0; i <= music_data.length; i++) {
        temp = music_data.pop();
        myPlaylist[i] =
                {
                    "title": temp[0]["title"],
                    "artist": temp[0]["artist"],
                    "mp3": "/uploadmusic/" + temp[0]["save_name"],
                };
    }
    next=i;
    music=i;
    console.log(next);
};
function playlist_title()
{
    playlist_str="<ul>";
            for(var i=0;i<myPlaylist.length;i++)
            {
                playlist_str+='<li><a href="javaScript:void(0)" onclick="jp_Change(name)" name="'+i+'"><font color="#55a773" id="title">'+myPlaylist[i]["title"]+'</font></a></li>';
            }
            playlist_str+="</ul>";
            document.getElementById("jp_playlist").innerHTML = playlist_str;
}
function jp_Change(number)
{
    $("#audio_player").jPlayer("setMedia", myPlaylist[number]).jPlayer("play");
    document.getElementById("jp_playlist2").innerHTML = myPlaylist[number]["title"];
    index=number;
}
