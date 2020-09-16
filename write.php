<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body id="target">
  <div class="container">
    <header class="jumbotron text-center">
    <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
        <h1><a href="http://localhost/index.php">JavaScript</a></h1>
  </header>
  <div class="row">
    <nav class="col-md-3">
        <ol class="nav nav-pills nav-stacked">
          <?php
         while( $row = mysqli_fetch_assoc($result)){
           echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
         }
         ?>
        </ol>
    </nav>
     <div class="col-md-9">
       <article>
                <form action="process.php" method="post">

                 <div class="form-group">
                   <label for="form-title">제목</label>
                   <input type="text" class="form-control" name="title" id="form-title" placeholder="제목을 적어주세요.">
                 </div>

                 <div class="form-group">
                   <label for="form-author">작성자</label>
                   <input type="text" class="form-control" name="author" id="form-author" placeholder="작성자를 적어주세요.">
                 </div>

                 <div class="form-group">
                   <label for="form-description">본문</label>
                   <textarea class="form-control" rows="10" name="description"  id="form-description" placeholder="본문을 적어주세요."></textarea>
                 </div>

                 <input type="submit" name="name" class="btn btn-default  btn-lg">
               </form>
             </article>
             <hr>
             <div id="control">
               <div class="btn-group" role="group" aria-label="...">
                 <input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default  btn-lg"/>
                 <input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
               </div>
               <a href="http://localhost/write.php" class="btn btn-success  btn-lg">쓰기</a>
             </div>
           </div>
       </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
