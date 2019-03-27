<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>資處公略</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style>
       .nav-item *{
         color:white;
         text-decoration:none;
       }

       a{
         cursor:pointer;
       }
    </style>
    <script>
      $(function(){
        $('[name=img]').change(function(){
          $('#FileText').text(this.value.split('\\')[2]);
        })
        
        $('#Submit').click(function(){
          if($('#FileText').text().search('png|jpeg|jpg') == -1){
            alert('目前只支援png,jpeg,jpg格式');
            return false;
          }else if($('#url').search('youtube.com') == -1){
            alert('只能輸入Youtube的網址');
            return false;
          }

        })
      })
    </script>
    </head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="./index.php">功能區</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item" active>
          <a href="./index.php" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 8 8">
              <path d="M4 0l-4 3h1v4h2v-2h2v2h2v-4.03l1 .03-4-3z" />
            </svg>
            <strong>
              回主畫面
            </strong>
          </a>        
        </li>
        <li class="nav-item">
          <a data-toggle="modal" data-target="#exampleModalCenter">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 8 8">
              <path d="M0 0v1h8v-1h-8zm4 2l-3 3h2v3h2v-3h2l-3-3z" />
            </svg>
            <strong>
              上傳圖片&網址
            </strong>
          </a>    
        </li>
      </ul>
    </div>
    </nav>
    <div class="jumbotron">
      <h1 class="display-4">Welcome Come Website</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> 
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>
    <div class="container">
      <div class="card-deck">
      <?php
        include_once('link.php');
        $sql = $db->query('select * from data');
        while($query = $sql->fetch(PDO::FETCH_ASSOC)){
      ?>
      <div class="card">
        <img class="card-img-top" src="./UserImages/<?php echo $query['d_img']; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo explode('.',$query['d_img'])[0]; ?></h5>
          <p class="card-title">影片簡介：</p>
          <a href="<?php echo $query['d_link']; ?>" class="btn btn-primary active" role="button" aria-pressed="true">影片連結</a>
        </div>
      </div>
      <?php
        }
      ?>
  </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">上傳圖片&網址</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="./Process.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="custom-file">
                <input type="file" name="img" id="customFile">
                <label class="custom-file-label" id="FileText" for="customFile">選擇圖片</label>
              </div>
              <hr>
              <div class="form-group">
                  <input type="text" id="url" name="url" class="form-control" placeholder="輸入Youtube的網址">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
              <button type="submit" id="Submit" class="btn btn-primary">上傳</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>