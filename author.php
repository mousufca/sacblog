<?php
include_once ('header.php');
?>
<br>
<br>
<?php
if(isset($_GET["name"])){
    $id=$_GET["name"];
    $q="SELECT * FROM posts WHERE author='$id'";
    $re=$con->query($q);
    echo "<div class=\"uk-container\">";
    if($re->num_rows>0) {
        while ($res = $re->fetch_array()) {
            ?>

            <div class="uk-card uk-card-default single">
                <div class="uk-card-media-top">
                </div>
                <div class="uk-card-body single-post">
                    <h3 class="uk-card-title"><a href="./post.php?id=<?php echo $res["id"]; ?>"><?php echo $res["title"]; ?></a></h3>
                    <p><?php echo $res["short"]; ?></p><br>
                    <span class="uk-margin-small-right" uk-icon="calendar"></span><?php echo $res["date"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="uk-margin-small-right" uk-icon="user"></span><a
                            href="./author.php?name=<?php echo $res["author"]; ?>"><?php echo $res["author"]; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="uk-margin-small-right" uk-icon="thumbnails"></span><a
                            href="./category.php?name=<?php echo $res["category"]; ?>"><?php echo $res["category"]; ?></a>
                </div>
            </div>
            <?php
        }
    }
    else{
        echo "<h2>No Post Available</h2>";
    }
    echo "</div>";
}

?>
