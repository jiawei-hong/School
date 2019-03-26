<?php
    include_once('./link.php');
    $sql = $db->prepare('insert into data(d_img,d_link) values(:img,:link) ');
    $sql->bindValue('img',$_FILES['img']['name']);
    $sql->bindValue('link',$_POST['url']);
    $sql->execute();
    move_uploaded_file($_FILES['img']['tmp_name'],'./UserImages/'.$_FILES['img']['name']);
?>
<script>
    alert('新增成功。');
    location.href = './index.php'
</script>