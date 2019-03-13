<?php
    include_once ('header.php');
?>

<div class="uk-container main-section">
    <div class="post-area">
        <?php
            $q="SELECT * FROM posts ORDER BY date desc";
            $rpp=5;
            $res=$con->query($q);
            $rows=$res->num_rows;
            if($res->num_rows>0){
                if(!isset($_GET["page"])){
                    $page=1;
                }
                else{
                    $page=$_GET["page"];
                }
                $sln=($page-1)*$rpp;
                $qu="SELECT * FROM posts ORDER BY id desc LIMIT ".$sln.",".$rpp;
                $results=$con->query($qu);
                while($data=$results->fetch_array()){
                    ?>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title"><a href="./post.php?id=<?php echo $data["id"]; ?>"><?php echo $data["title"]; ?></a></h3>
                                    <p><?php echo $data["short"]; ?></p>
                                    <span class="uk-margin-small-right" uk-icon="calendar"></span><?php echo $data["date"];?>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="uk-margin-small-right" uk-icon="user"></span><a href="./author.php?name=<?php echo $data["author"]; ?>"><?php echo $data["author"];?></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="uk-margin-small-right" uk-icon="thumbnails"></span><a href="./category.php?name=<?php echo $data["category"]; ?>"><?php echo $data["category"];?></a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                $nop=ceil($rows/$rpp);
                echo "<ul class=\"uk-pagination uk-flex-right uk-margin-medium-top uk-margin-medium-left\" uk-margin>";
                for($page=1;$page<=$nop;$page++){
                    if(!isset($_GET['page'])){
                        echo '<li class=\"uk-active\"><a href="index.php?page='.$page.'">'.$page.'</a></li>';
                    }
                    else if($page==$_GET["page"]){
                        echo '<li class=\"uk-active\"><a href="index.php?page='.$page.'">'.$page.'</a></li>';
                    }
                    else
                        echo '<li><a href="index.php?page='.$page.'">'.$page.'</a></li>';
                }
                echo "</ul>";
            }
            else{
                echo "<h3>No posts available</h3>";
            }
        ?>
    </div>
    <div class="sidebar" style="position: relative;">
        <h3 class="title">Department</h3>
        <ul class="uk-list uk-margin-large-left">
        <?php
            $q="SELECT name from category";
            $re=$con->query($q);
            while($cat=$re->fetch_array()){
                echo "<li><a href='./category.php?name={$cat["name"]}'>".$cat["name"]."</a></li>";
            }
        ?>
        </ul>
    </div>
</div>



<?php
    include_once ('footer.php');
?>
