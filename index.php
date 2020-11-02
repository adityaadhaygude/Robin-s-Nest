<?php
 require_once 'header.php';
//  echo "<div>";
//  if ($loggedin) echo " $user, you are logged in";
//  else echo ' please sign up or log in</div>';
 ?>

    <?php
        
         if($loggedin == True){
            echo '<div id="upload_post" class="mb-3 col-md-8 offset-md-2">
            <form method="post" action="post.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="post_header" class="text-success">What\'s on your mind!</label>
                    <input type="file" name="image" class="form-control-file mb-1" id="file">
                    <textarea class="form-control" name="caption" id="caption" rows="3"></textarea>
                </div>
                <input type="submit" value="Upload Post" name="submit" class="btn btn-primary">
            </form>
            </div>';
            $sql = "SELECT * FROM posts order by timestamp desc";
            $result = mysqli_query($connection,$sql);
            while($row = mysqli_fetch_array($result)){
                echo '
                <div class="col-md-8 offset-md-2">
                <div class="card">

                    <div class="row" style="min-height:50px;">
                        <div class="col-2 col-md-1 my-2" style="border-radius:50%;">
                            <img src="'.$row['post_user'].'.jpg" alt="" style="height:45px;width:45px;border-radius:50%;border:1px solid black" class="ml-3"/>
                        </div>
                        <div class="align-self-center" style="font-weight:bold;">
                            <a href="#" style="text-decoration:none;" class="ml-4">'.$row['post_user'].'
                            </a>
                        </div>
                        <div class="col-1 col-1"></div>
                    </div>
                    
                    <img class="card-img-top" src="'.$row['img'].'" alt="Card image cap" >
                    <div class="card-body">
                        <p class="card-text"><span class="text-primary" style="font-weight:bold;">'.$row['post_user'].'</span>'." ".''.$row['caption'].'</p>
                        <p class="card-text">'.$row['timestamp'].'</p>
                    </div>  
                    </div>      
                </div>';
            }
         }      
    ?>

 <div data-role="footer" class="my-3">
    <p class="text-center">Thank you for visiting. All rights reserved.</p>
 </div>
 </div>
 </body>
</html>