<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>資處攻略</title>
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

       img{
         cursor:pointer;
       }
       
       .display-4{
         font-family:'微軟正黑體';
		 font-weight:600;
       }

       .card-title{
         font-family:'微軟正黑體';
         font-size:20px;
       }

       .card-img-top{
         width:397px;
         height:280px;;
       }

       table{
         margin-left:-30px;
       }

       #mainDiv{
        display: flex;
        justify-content: space-evenly;
        font-family:'微軟正黑體	';
        font-size:25px;
       }

       td{
         width:401px;
         height:410px;
       }

       .card-body{
         width:397px;
         height:186px;
       }

       span{
         display:flex;
         justify-content:center;
         font-family:'微軟正黑體';
         font-size:30px;
       }
    </style>
    <!-- <script>
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
    </script> -->
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
        <!-- <li class="nav-item">
          <a data-toggle="modal" data-target="#exampleModalCenter">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 8 8">
              <path d="M0 0v1h8v-1h-8zm4 2l-3 3h2v3h2v-3h2l-3-3z" />
            </svg>
            <strong>
              上傳圖片&網址
            </strong>
          </a>    
        </li> -->
      </ul>
    </div>
    </nav>
    <div class="jumbotron jumbotron-fluid" align="center">
      <h1 class="display-4">多媒體設計作品成果展示</h1>
      <hr class="my-4">
    </div>
    <div class="container">
      <?php
        include_once('link.php');
        $sql = $db->query('select * from data');
        $Arr = [];
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
          array_push($Arr,$row['d_category']);
        }
        $Arr = array_unique($Arr);
        foreach($Arr as $value){
        }
      ?>
      <div id="mainDiv">
         <?php
            foreach($Arr as $value){
         ?>
              <a href="./#<?php echo $value ?>" class="ui-button"><?php echo $value; ?></a>
         <?php
            }
         ?>
      </div>
      <p>
          <div id="微電影">
          <table>
          <span>微電影</span>
              <tbody>
            <?php
              $sql = $db->query('select * from data where d_category="微電影"');
              $query = $sql->fetchAll();
              for($i=0;$i<10;$i++){                       
            ?>
                  <tr>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i]['d_img'])[0]; ?> <a href="<?php echo $query[$i]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      if($i+1<10){
                    ?>
                    <td>
                      <div class="card-deck">
                          <div class="card">
                          <img class="card-img-top" src="<?php if($query[$i+1]['d_class'] == "資三智"){
                              echo './UserImages/wisdom/' . $query[$i+1]['d_img'];
                            }else{
                              echo './UserImages/benevolence/' . $query[$i+1]['d_img'];
                            }  ?>" alt="Card image cap">
                              <div class="card-body" align="center">
                              <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+1]['d_img'])[0]; ?> <a href="<?php echo $query[$i+1]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                                <h5 class="card-title">班級：<?php echo $query[$i+1]['d_class']; ?></h5>                
                                <h4 class="card-title"><?php echo $query[$i+1]['d_people']; ?></h4>
                              </div>
                          </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                    <?php
                      if($i+2<10){
                    ?>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i+2]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i+2]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i+2]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+2]['d_img'])[0]; ?> <a href="<?php echo $query[$i+2]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i+2]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i+2]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                  </tr>
                <?php
                    $i+=2;
                  }
                ?>
          </div>
          </tbody>
              </table>
      </p>
      <p>
      <div id="直播行銷">
          <table>
          <span>直播行銷</span>
              <tbody>
            <?php
              $sql = $db->query('select * from data where d_category="直播行銷"');
              $query = $sql->fetchAll();
              for($i=0;$i<$sql->rowCount();$i++){                
            ?>
                  <tr>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i]['d_img'])[0]; ?> <a href="<?php echo $query[$i]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      if($i+1<$sql->rowCount()){
                    ?>
                    <td>
                      <div class="card-deck">
                          <div class="card">
                          <img class="card-img-top" src="<?php if($query[$i+1]['d_class'] == "資三智"){
                              echo './UserImages/wisdom/' . $query[$i+1]['d_img'];
                            }else{
                              echo './UserImages/benevolence/' . $query[$i+1]['d_img'];
                            }  ?>" alt="Card image cap">
                              <div class="card-body" align="center">
                              <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+1]['d_img'])[0]; ?> <a href="<?php echo $query[$i+1]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                                <h5 class="card-title">班級：<?php echo $query[$i+1]['d_class']; ?></h5>                
                                <h4 class="card-title"><?php echo $query[$i+1]['d_people']; ?></h4>
                              </div>
                          </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                    <?php
                      if($i+2<$sql->rowCount()){
                    ?>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i+2]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i+2]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i+2]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+2]['d_img'])[0]; ?> <a href="<?php echo $query[$i+2]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i+2]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i+2]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                  </tr>
                <?php
                    $i+=2;
                  }
                ?>
          </div>
          </tbody>
              </table>
      </p>
      <p>
      <div id="性別平等">
          <table>
          <span>性別平等</span>
              <tbody>
            <?php
              $sql = $db->query('select * from data where d_category="性別平等"');
              $query = $sql->fetchAll();
              for($i=0;$i<$sql->rowCount();$i++){                
            ?>
                  <tr>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i]['d_img'])[0]; ?> <a href="<?php echo $query[$i]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      if($i+1<$sql->rowCount()){
                    ?>
                    <td>
                      <div class="card-deck">
                          <div class="card">
                          <img class="card-img-top" src="<?php if($query[$i+1]['d_class'] == "資三智"){
                              echo './UserImages/wisdom/' . $query[$i+1]['d_img'];
                            }else{
                              echo './UserImages/benevolence/' . $query[$i+1]['d_img'];
                            }  ?>" alt="Card image cap">
                              <div class="card-body" align="center">
                              <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+1]['d_img'])[0]; ?> <a href="<?php echo $query[$i+1]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                                <h5 class="card-title">班級：<?php echo $query[$i+1]['d_class']; ?></h5>                
                                <h4 class="card-title"><?php echo $query[$i+1]['d_people']; ?></h4>
                              </div>
                          </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                    <?php
                      if($i+2<$sql->rowCount()){
                    ?>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i+2]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i+2]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i+2]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+2]['d_img'])[0]; ?> <a href="<?php echo $query[$i+2]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i+2]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i+2]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                  </tr>
                <?php
                    $i+=2;
                  }
                ?>
          </div>
          </tbody>
              </table>
      </p>
      <p>
      <div id="自我介紹">
          <table>
          <span>自我介紹</span>
              <tbody>
            <?php
              $sql = $db->query('select * from data where d_category="自我介紹"');
              $query = $sql->fetchAll();
              for($i=0;$i<$sql->rowCount();$i++){                
            ?>
                  <tr>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i]['d_img'])[0]; ?> <a href="<?php echo $query[$i]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      if($i+1<$sql->rowCount()){
                    ?>
                    <td>
                      <div class="card-deck">
                          <div class="card">
                          <img class="card-img-top" src="<?php if($query[$i+1]['d_class'] == "資三智"){
                              echo './UserImages/wisdom/' . $query[$i+1]['d_img'];
                            }else{
                              echo './UserImages/benevolence/' . $query[$i+1]['d_img'];
                            }  ?>" alt="Card image cap">
                              <div class="card-body" align="center">
                              <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+1]['d_img'])[0]; ?> <a href="<?php echo $query[$i+1]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                                <h5 class="card-title">班級：<?php echo $query[$i+1]['d_class']; ?></h5>                
                                <h4 class="card-title"><?php echo $query[$i+1]['d_people']; ?></h4>
                              </div>
                          </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                    <?php
                      if($i+2<$sql->rowCount()){
                    ?>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i+2]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i+2]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i+2]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+2]['d_img'])[0]; ?> <a href="<?php echo $query[$i+2]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i+2]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i+2]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                  </tr>
                <?php
                    $i+=2;
                  }
                ?>
          </div>
          </tbody>
              </table>
      </p>
      <p>
      <div id="高中歲月">
          <table>
          <span>高中歲月</span>
              <tbody>
            <?php
              $sql = $db->query('select * from data where d_category="高中歲月"');
              $query = $sql->fetchAll();
              for($i=0;$i<$sql->rowCount();$i++){                
            ?>
                  <tr>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i]['d_img'])[0]; ?> <a href="<?php echo $query[$i]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      if($i+1<$sql->rowCount()){
                    ?>
                    <td>
                      <div class="card-deck">
                          <div class="card">
                          <img class="card-img-top" src="<?php if($query[$i+1]['d_class'] == "資三智"){
                              echo './UserImages/wisdom/' . $query[$i+1]['d_img'];
                            }else{
                              echo './UserImages/benevolence/' . $query[$i+1]['d_img'];
                            }  ?>" alt="Card image cap">
                              <div class="card-body" align="center">
                              <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+1]['d_img'])[0]; ?> <a href="<?php echo $query[$i+1]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                                <h5 class="card-title">班級：<?php echo $query[$i+1]['d_class']; ?></h5>                
                                <h4 class="card-title"><?php echo $query[$i+1]['d_people']; ?></h4>
                              </div>
                          </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                    <?php
                      if($i+2<$sql->rowCount()){
                    ?>
                    <td>
                      <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="<?php if($query[$i+2]['d_class'] == "資三智"){
                            echo './UserImages/wisdom/' . $query[$i+2]['d_img'];
                          }else{
                            echo './UserImages/benevolence/' . $query[$i+2]['d_img'];
                          }  ?>" alt="Card image cap">
                            <div class="card-body" align="center">
                            <h4 class="card-title">影片名稱：<?php echo explode('.',$query[$i+2]['d_img'])[0]; ?> <a href="<?php echo $query[$i+2]['d_link']; ?>" class="btn btn-primary active" width= role="button" aria-pressed="true">影片連結</a></h4>
                              <h5 class="card-title">班級：<?php echo $query[$i+2]['d_class']; ?></h5>                
                              <h4 class="card-title"><?php echo $query[$i+2]['d_people']; ?></h4>
                            </div>
                        </div>
                      </div>
                    </td>
                    <?php
                      }
                    ?>
                  </tr>
                <?php
                    $i+=2;
                  }
                ?>
          </div>
          </tbody>
              </table>
      </p>
    </div>
    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
              <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select name="class" class="form-control">
                  <option value="資三智">資三智</option>
                  <option value="資三仁">資三仁</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
              <button type="submit" id="Submit" class="btn btn-primary">上傳</button>
            </div>
          </form>
        </div>
      </div> -->
    </div>
</body>
</html>