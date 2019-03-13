<?php
include_once ('header.php');
?>
<br>
<br>
<?php
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $q="SELECT * FROM posts WHERE id='$id'";
        $re=$con->query($q);
        while($res=$re->fetch_array()){
            ?>

<div class="uk-container">
    <div class="uk-card uk-card-default single">
        <div class="uk-card-media-top">
        </div>
        <div class="uk-card-body single-post">
            <h3 class="uk-card-title"><?php echo $res["title"]; ?></h3>
            <p><?php echo $res["short"]; ?></p><br>
            <p><?php echo $res["body"]; ?></p>
            <span class="uk-margin-small-right" uk-icon="calendar"></span><?php echo $res["date"];?>&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="uk-margin-small-right" uk-icon="user"></span><a href="./author.php?name=<?php echo $res["author"]; ?>"><?php echo $res["author"];?></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="uk-margin-small-right" uk-icon="thumbnails"></span><a href="./category.php?name=<?php echo $res["category"]; ?>"><?php echo $res["category"];?></a>
        </div>
    </div>
</div>

        <?php
        }
    }

?>
