
<div class="music_box">
    <div class="container margin-top-2">
        <div class="row">
            <div class='row margin-top-2'>
                <div id="audio_player" class="jp-jplayer"></div>
                <div id="jp_container_1" class="jp-audio music_box_cell">
                    <div class="jp-type-single">
                        <div class="jp-gui jp-interface">
                            <ul class="jp-controls">
                                <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                                <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                                <li><a href="#" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                <li><a href="#" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                            </ul>
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value"></div>
                            </div>
                            <div class="jp-time-holder">
                                <div class="jp-current-time"></div>
                                <div class="jp-duration"></div>
                            </div>
                        </div>
                        <div id="jp_playlist2" class="jp-playlist2">
                            
                        </div>
                        <div id="jp_playlist" class="jp-playlist">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo Asset::css('jplayer.soundcloud.css'); ?>
<?php echo Asset::js('jquery-1.9.1.js'); ?>
<?php echo Asset::js('jquery.jplayer.min.js'); ?>
<?php echo Asset::js('jplayer.playlist.min.js'); ?>
<?php echo Asset::js('soundcloud_player.js'); ?>
<script type="text/javascript">
    var music_data = JSON.parse(JSON.stringify(<?php echo $music_data; ?>));
    $(loadJPlayer);
</script>