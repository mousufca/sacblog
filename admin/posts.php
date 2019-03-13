<?php
include_once ('./header.php');
?>
<br>

<div class="uk-container">
    <table class="uk-table uk-table-hover uk-table-divider post-list">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $user=$_SESSION["username"];
            $qu="SELECT * FROM posts where author='$user' order by id desc";
            $res=$con->query($qu);
            if($res->num_rows>0){
                while($data=$res->fetch_array()){
                    ?>
                    <tr>
                        <td><?php echo $data['id'];?></td>
                        <td><?php echo $data['title'];?></td>
                        <td><?php echo $data['category'];?></td>
                        <td><?php echo $data['date'];?></td>
                        <td>
<!--                            <a href="./edit.php?id=--><?php //echo $data['id']; ?><!--" class="uk-icon-link uk-margin-small-right" uk-icon="file-edit"></a>-->
                            <a href="./posts.php?del=<?php echo $data['id']; ?>" class="uk-icon-link" uk-icon="trash"></a>
                        </td>
                    </tr>
            <?php
                }
            }
            else{
                echo "<h2>No Posts available</h2>";
            }
        ?>

        <?php
            if(isset($_GET['del'])){
                $delid=$_GET["del"];
                $qu="DELETE FROM posts where id='$delid'";
                if($con->query($qu)){
                    echo "<script>alert('post deleted')</script>";
                    redirect('./posts.php');
                }
                else{
                    echo "<script>alert('something went wrong')</script>";
                }
            }
        ?>
        </tbody>
    </table>
</div>
