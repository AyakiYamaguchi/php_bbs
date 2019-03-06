<?php
require_once(__DIR__ .'/header.php');
require_once(__DIR__ . '/redirect.php');

$app = new Bbs\Controller\Thread();
$app->run('createThread');
?>
<h1 class="page__ttl">新規スレッド</h1>
<form action="" method="post" class="form-group new_thread" id="new_thread">
  <div class="form-group">
    <label>スレッド名</label>
    <input type="text" name="thread_name" class="form-control" placeholder="">
    <label>最初のコメント</label>
    <input type="text" name="comment" class="form-control" placeholder="">
    <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    <p class="err"><?= h($app->getErrors('create_thread')); ?></p>
  </div>
  <div class="form-group btn btn-primary" onclick="document.getElementById('new_thread').submit();">作成</div>
</form>

<?php
require_once(__DIR__ .'/footer.php');
?>
