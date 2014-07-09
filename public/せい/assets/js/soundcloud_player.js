var nowms;
var nextms;
function loadJPlayer() {
    $("#audio_player").jPlayer({
        /* イベントハンドラ */
        ready: function() {
            
            nowms = music_data.pop();
            nextms = music_data.pop();
            /* 再生するメディアの定義 */
            $(this).jPlayer("setMedia", {
                mp3: "/uploadmusic/" + nowms[0]["save_name"],
            }).jPlayer("play"); /* 自動再生 */
            console.log(nowms);
            document.getElementById("title").innerText = nowms[0]['title'];
        },
        
        ended: function(event) {
            /* 終了時 */
            if (nextms === 0) {
                location.href = window.location.href;
            } else {
                $(nextMusic);
            }
        },
        /* Jplayer.swfのパス */
        swfPath: "/swf",
        /* ソリューションの優先度（デフォルトは\"html, flash\") */
        solution: 'html, flash',
        /* フォーマット（デフォルトはmp3、カンマ区切りで複数指定可、優先度は左が高）*/
        /* 指定可能なフォーマットは、mp3, m4a, m4v, oga, ogv, wav, webma, webmv */
        /* 音声ならmp3 or m4a、動画ならm4v */
        supplied: "mp3",
        wmode: "window",
        playlistOptions: {
            autoPlay: true
        }
    });
};
function nextMusic() {
    nowms = nextms;
    $('#audio_player').jPlayer("setMedia", {
                mp3: "/uploadmusic/" + nowms[0]["save_name"],
            }).jPlayer('play'); /* 自動再生 */
   if (music_data.length > 0) {
        nextms = music_data.pop();
    } else if (music_data.length <= 0) {
        nextms = 0;
    }

    document.getElementById("title").innerText = nowms[0]["title"];
    /*document.getElementById("artistname").innerText = nowms[0]["username"];*/

};




var nowms;
var nextms;
function loadJPlayer() {
    $("#audio_player").jPlayer({
        /* イベントハンドラ */
        ready: function() {
            var myPlayList=[];
            for(i++;music_data;i++){
                nowms = music_data.pop();
                myPlayList="/uploadmusic/" + nowms[0]["save_name"];
            }
            console.log(myPlayList);
            for(var i=1; i<=myPlayList.length; i++) {
            /* 再生するメディアの定義 */
            $("#audio_player").jPlayer("setFile", myPlayList[i].mp3);
            console.log(nowms);
            document.getElementById("title").innerText = nowms[0]['title'];
        }},
        
        ended: function(event) {
            /* 終了時 */
            if (nextms === 0) {
                location.href = window.location.href;
            } else {
                $(nextMusic);
            }
        },
        /* Jplayer.swfのパス */
        swfPath: "/swf",
        /* ソリューションの優先度（デフォルトは\"html, flash\") */
        solution: 'html, flash',
        /* フォーマット（デフォルトはmp3、カンマ区切りで複数指定可、優先度は左が高）*/
        /* 指定可能なフォーマットは、mp3, m4a, m4v, oga, ogv, wav, webma, webmv */
        /* 音声ならmp3 or m4a、動画ならm4v */
        supplied: "mp3",
        wmode: "window",
        playlistOptions: {
            autoPlay: true
        }
    
    });
};
function nextMusic() {
    nowms = nextms;
    $('#audio_player').jPlayer("setMedia", {
                mp3: "/uploadmusic/" + nowms[0]["save_name"],
            }).jPlayer('play'); /* 自動再生 */
   if (music_data.length > 0) {
        nextms = music_data.pop();
    } else if (music_data.length <= 0) {
        nextms = 0;
    }

    document.getElementById("title").innerText = nowms[0]["title"];
    /*document.getElementById("artistname").innerText = nowms[0]["username"];*/

};
