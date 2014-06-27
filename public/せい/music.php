<div class="music_box">
    <div class="container margin-top-2">
        <div class="row">
            <div class='row margin-top-2'>
                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                <div class="jp-audio music_box_cell">
                    <div class="jp-type-single">
                        <div id="jp_interface_1" class="jp-interface">
                            <ul class="jp-controls">
                                <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                                <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                                <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                                <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                            </ul>
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value"></div>
                            </div>
                            <div class="jp-current-time"></div>
                            <div class="jp-duration"></div>
                        </div>
                        <div id="jp_playlist_1" class="jp-playlist">
                            <ul>
                                <li>曲のタイトル</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php echo Asset::js('jquery.jplayer.min.js'); ?>
<?php echo Asset::js('soundcloud_player.js'); ?>
<?php echo Asset::css('jplayer.blue.monday.css')?>

<!DOCTYPE html>
<script type="text/javascript">// <![CDATA[
	$(function() {
 
	for(var i=1; i<=$('div.jp-jplayer').length; i++) {
	/* プレイヤー分設置する */
        $("#audio_player_" + i).jPlayer({
                 /* イベントハンドラ */
                 ready: function(){
                 var num	= $(this).attr('id').split('_');
		num	= parseInt(num[num.length - 1], 10);
	        /* 仮にmp3のファイル名は 1.mp3,2.mp3,3.mp3とした */
		/*  よって、順番にセットされていく */
		song_file = "/uploadmusic/6fe81fa4a250c9aace4af6f2e55b1643.mp3";
 
                 $(this).jPlayer("setMedia", {
				mp3 : song_file
		});
             },
	cssSelectorAncestor: "#jp_container_" + i,
               /* 音量 */
                volume: 0.5,
                 /* Jplayer.swfをおいたパス */
	       swfPath: "/jplay/",
		solution: 'php ,html, htm,flash',
                  /* フォーマット優先度 */
                    supplied: "mp3"
                })
                .bind($.jPlayer.event.play, function() {
                    $(this).jPlayer("pauseOthers");
                });
			}
})
// ]]></script>