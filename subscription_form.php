<?php
include_once 'lib/MCAPI.class.php';
include_once 'lib/MC.config.php';

$api = new MCAPI($apikey);
$listid = '46f890ae78';
$merge_vars = $api->listMergeVars($listid);
?>

    <form id=subscription action="http://homebyschool.us2.list-manage.com/subscribe/post?u=0dbddc6ceb334893829ecca38&amp;id=46f890ae78" method=post>
<?php foreach($merge_vars as $i=>$var){ ?>
      <label><?= $var['name'] ?>
        <input name="<?= $var['tag'] ?>"
               placeholder="<?= $var['helptext'] ?>"
               type="<?= $var['type'] ?>"
               <?php if ($var['required']) { ?>required<?php } ?>
         />
      </label>
<?php } ?>
      <input type=submit value=Subscribe class=css3button />
    </form>
