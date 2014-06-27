<?php
session_start();
$token = sha1(uniqid(mt_rand(), true));
Session::set($token, $token);
?>
<div class="widewrapper main">
    <div class="container">
        <div class="row">
            <div class='col-md-10 col-md-offset-1 margin-top-2 mufee-superblock'>
                <div class='row'>
                    <aside class="create-comment" id="create-comment">
                        <h2>
                            <i class="icon-music"></i> Upload Music
                        </h2>
                        <form action="upload" method="post" enctype="multipart/form-data">
                            <table class="table table-striped">
                                <tr>
                                    <th>タイトル</th>
                                    <td><input type="text" name="title" id="contact-name" placeholder="Title" class="form-control input-lg"></td>
                                </tr>
                                <tr>
                                    <th>ファイル</th>
                                    <td>
                                        <input type="hidden" name="token" value="<?php echo $token; ?>">
                                        <input class='input-lg' type="file" name="upload_file">
                                    </td>
                                </tr>
                            </table>
                            <div class="buttons clearfix">
                                <button type="submit" class="btn btn-xlarge btn-mufee-one">Upload</button>
                                <input type='button' onClick="location.href = '/mypage/'" class="btn btn-xlarge btn-mufee-two" value='Cansel'>
                            </div>
                        </form>
                    </aside>

<?php if (!empty($message)): ?>
                        <div class="col-md-6 margin-top-2 ">
                            <div class="css-message"><p><?php echo $message ?></p></div>
                        </div>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>