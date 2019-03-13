<?php
include_once ('./header.php');
?>
<br>
<div class="uk-container">
    <form class="uk-form-stacked" method="post">
        <div class="uk-margin">
            <h2>Add Post</h2>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label uk-text-large" for="form-stacked-text">Title</label>
            <div class="uk-form-controls">
                <input name="title" class="uk-input" id="form-stacked-text" type="text" placeholder="Post title" required>
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label uk-text-large" for="form-stacked-select">Category</label>
            <div class="uk-form-controls">
                <select name="category" class="uk-select" id="form-stacked-select" required>
                    <?php
                        $qu="SELECT name from category";
                        $res=$con->query($qu);
                        while($data=$res->fetch_array()){
                            echo "<option>".$data["name"]."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label uk-text-large" for="form-stacked-text">Short Description</label>
            <div class="uk-form-controls">
                <textarea name="short" class="uk-input short" id="form-stacked-text" type="text" placeholder="Short description" required></textarea>
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label uk-text-large" for="form-stacked-text">Body</label>
            <div class="uk-form-controls">
                <textarea name="body" class="uk-input body" id="form-stacked-text" type="text" placeholder="Start Writing here" required></textarea>
            </div>
        </div>

        <div class="uk-margin">
            <input type="submit" name="addpost" class="uk-button uk-button-primary" value="Add Post">
        </div>
    </form>
</div>

<?php
    if(isset($_POST["addpost"])){
        $title=$_POST["title"];
        $short=$_POST["short"];
        $category=$_POST["category"];
        $body=$_POST["body"];
        $author=$_SESSION['username'];
        $date=idate("Y")."-".idate("m")."-".idate("d");
        $qu="INSERT INTO posts(title,short,body,date,author,category) VALUES('$title','$short','$body','$date','$author','$category')";
        if($con->query($qu)){
            echo "<script>alert('post added')</script>";

        }
        else{
            echo "<script>alert('something went wrong')</script>";
        }
    }
?>
