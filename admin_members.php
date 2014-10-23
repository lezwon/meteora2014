<?php
/**
 * Created by PhpStorm.
 * User: Lezwon
 * Date: 23-10-2014
 * Time: 22:16
 */

include 'connection.php';
include 'reference.php';





//###########################    ADD MEMBER      #############################

function insertMember($name,$phone=null,$description=null,$post,$image){
    global $alert;
    $sql = "insert into team (name, phone, description, post,image) VALUES ('$name','$phone','$description','$post','$image')";
    if(executeCommand($sql))
        $alert =  "The Record was added successfully";
    else
        echo "Failed";
}

if(checkIfSet('name') && isset($_FILES['image']) && checkIfSet('post')){
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $description = $_REQUEST['description'];
    $post = $_REQUEST['post'];
    $image = $_FILES['image'];

    $target_dir = "uploads/";
    $target_dir = $target_dir . basename( $image["name"]);
    $uploadOk=1;

// Check if file already exists
    if (file_exists($target_dir . $image["name"])) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }


// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($image["tmp_name"], $target_dir)) {
//            echo "The file ". basename( $image["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
            $uploadOk = 0;
        }
    }

    if($uploadOk){
        insertMember($name,$phone,$description,$post,$target_dir);
    }

}


//###########################    DELETE      #############################

if(checkIfSet('delete')){
    $delete = $_REQUEST['delete'];

/*    $query = "select i_image from items where i_id = '$delete'";
    $filepath = retrieveData($query);
    unlink($filepath[0][0]);*/

    $query = "delete from team where id = '$delete'";

    if(executeCommand($query)){
        $alert = "Items Deleted";
    }else{
        echo "Error";
    }
}

//###########################    DELETE ALL      #############################

if(checkIfSet('deleteAll')){
    $delete = $_REQUEST['deleteAll'];

    $query = "select image from team";
    $filepath = retrieveData($query);

    foreach($filepath as $arr=>$row){
        if(file_exists($row['image']))
            unlink($row['image']);
    }

    $query = "delete from team";

    if(executeCommand($query)){
        $alert =  "Items Deleted";
//        $query = "ALTER TABLE items AUTO_INCREMENT = 1";
        executeCommand($query);
    }else{
        echo "Error";
    }
}


##############################      RETREIVE DATA       #############################

$sql = "DESC team";
$thead = retrieveData($sql);

$sql = "Select * from team";
$tbody = retrieveData($sql);

?>


<!doctype html>
<html lang="en">
<head>
    <?php echo $head ?>
</head>
<body>

<div class="wrapper">
    <div class="row">
        <div class="small-3 columns">
            <ul class="large-block-grid-2">
                <li><a class="btn btn-primary btn-large"  data-target="#add-member-modal" data-toggle="modal" href="">Add Member</a></li>
                <li><a class="btn btn-primary btn-large"  data-target="#deleteAllModal" data-toggle="modal" href="">Delete All</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <p class="bg-success"><?php echo $alert ?></p>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <div class="table-responsive">
                <table class=" table add-members table-bordered">
                    <thead>
                        <tr>
                            <?php foreach($thead as $array=>$row){ ?>
                                <th><?php echo $row['Field'] ?></th>
                            <?php } ?>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tbody as $array=>$row){ ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['post'] ?></td>
                                <td><img src="<?php echo $row['image'] ?>" alt=""/></td>
                                <td><button class="btn btn-danger btn-sm btn-delete" data-toggle="modal"
                                            data-target="#deleteModal" data-id="<?php echo $row['id']?>">Delete</button></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Member Modal -->
<div class="modal fade" id="add-member-modal" tabindex="-1" role="dialog" aria-labelledby="add-member-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form action="admin_members.php" method="post" enctype="multipart/form-data">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="add-member-modal-label">Add Member Window</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea cols="30" rows="3" class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="post">Post</label>
                                <input type="text" class="form-control" id="post" name="post" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" id="image" required="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<!--Delete Member Modal-->
<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-member-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="admin_members.php" method="post">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="delete-member-modal-label">Delete Member Window</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="small-12 columns">
                            <h3>Are you sure?</h3>
                            <input name="delete" type="hidden" value="" id="input-delete"/>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>

            </form>
        </div>
    </div>
</div>


<!--Delete All Modal-->
<div id="deleteAllModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-all-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="admin_members.php" method="post">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="delete-all-modal-label">Delete Member Window</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="small-12 columns">
                            <h3>Are you sure?</h3>
                            <input name="deleteAll" type="hidden" value="true"/>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>

            </form>
        </div>
    </div>
</div>


<?php echo $scripts ?>
</body>
</html>