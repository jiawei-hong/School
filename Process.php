<?php
    include_once('./link.php');
    date_default_timezone_set('Asia/Taipei');
    $sql = $db->prepare('insert into data(d_name,d_class,d_img,d_link) values(:name,:class,:img,:link) ');
    $sql->bindValue('name',explode('.',$_FILES['img']['name'])[0]);
    $sql->bindValue('class',$_POST['class']);
    $sql->bindValue('img',$_FILES['img']['name']);
    $sql->bindValue('link',$_POST['url']);
    $sql->execute();
    move_uploaded_file($_FILES['img']['tmp_name'],'./UserImages/'.mb_convert_encoding($_FILES['img']['name'],'utf-8','auto'));
?>
<script>
    alert('新增成功。');
    // location.href = './index.php'
</script>