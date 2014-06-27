jQuery(function($) {

//mypage チェックボックス全選択 all
$('#all_check').on('change', function() {
    $("input[name='all_music[]']").prop('checked', this.checked);
});
//mypage チェックボックス全選択 artist
$('#artist_check').on('change', function() {
    $("input[name='all_artist[]']").prop('checked', this.checked);
});
//mypage チェックボックス全選択 album
$('#album_check').on('change', function() {
    $("input[name='all_album[]']").prop('checked', this.checked);
});


});
//別窓表示
function newOpen(url,w_name, w,h)
{
// ウィンドウを開く
window.open( url , w_name , "width=" + w + ", height="+ h );
}
