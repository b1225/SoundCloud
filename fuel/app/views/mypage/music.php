
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
    function loadJPlayer() {
    $('#jquery_jplayer_1').jPlayer({
        ready: function() {
            $(this).jPlayer('volume', 0.5)
                    .jPlayer('setMedia', {
  	    mp3: "../uploadmusic/6fe81fa4a250c9aace4af6f2e55b1643.mp3",})
                    .jPlayer('play');
        },
        swfPath: '../swf',
        supplied: 'mp3, m4a,',
        cssSelectorAncestor: '#jp_interface_1',
    });
}



// ]]></script>