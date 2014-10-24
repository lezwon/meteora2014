<?php
/**
 * Created by PhpStorm.
 * User: Lezwon
 * Date: 23-10-2014
 * Time: 22:16
 */

include 'connection.php';
include 'reference.php';


$alert = null;


//###########################    ADD Event      #############################

function insertEvent($name,$description,$type,$image_small,$image_large,$image_mobile){
    global $alert;
    $sql = "insert into events (name, description, type, image_small,image_large,image_mobile)
VALUES ('$name','$description',$type,'$image_small','$image_large','$image_mobile')";
    if(executeCommand($sql))
        $alert =  "The Record was added successfully";
    else
        $alert =  "Failed";
}

if(checkIfFieldSet(['name','description','type'])
    && checkIfFileSet(['image_small','image_large'])){

    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    $type = $_REQUEST['type'];
    $image_small = $_FILES['image_small'];
    $image_large = $_FILES['image_large'];
    $image_mobile = $_FILES['image_mobile'];

    $target_base_dir = "uploads/events/";
    $target_dir_small = $target_base_dir ."small/". basename( $image_small["name"]);
    $target_dir_large = $target_base_dir ."large/". basename( $image_large["name"]);
    $target_dir_mobile = $target_base_dir ."mobile/". basename( $image_mobile["name"]);
    $uploadOk=1;

// Check if file already exists
    if (file_exists($target_dir_small) || file_exists($target_dir_large)
        || file_exists($target_dir_mobile)) {

        $alert =  "Sorry, file already exists.";
        $uploadOk = 0;
    }


// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $alert =  "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (
            move_uploaded_file($image_small["tmp_name"], $target_dir_small) &&
            move_uploaded_file($image_large["tmp_name"], $target_dir_large) &&
            move_uploaded_file($image_mobile["tmp_name"], $target_dir_mobile)
        ) {

//            $alert =  "The file ". basename( $image["name"]). " has been uploaded.";
        } else {
            $alert =  "Sorry, there was an error uploading your file.";
            $uploadOk = 0;
        }
    }

    if($uploadOk){
        insertEvent($name,$description,$type,$target_dir_small,$target_dir_large,$target_dir_mobile);
    }

}
else
    $alert = "Fields were empty";


//###########################    DELETE      #############################

if(checkIfFieldSet('delete')){
    $delete = $_REQUEST['delete'];

    $query = "select image_small,image_large, image_mobile from events where id = '$delete'";
    $filepath = retrieveData($query);

    foreach($filepath as $arr=>$row){
        if(file_exists($row['image_small']) || file_exists($row['image_large'])
            ||  file_exists($row['image_mobile'])) {

            unlink($row['image_small']);
            unlink($row['image_large']);
            unlink($row['image_mobile']);
        }
    }

    $query = "delete from events where id = '$delete'";

    if(executeCommand($query)){
        $alert = "Items Deleted";
    }else{
        $alert =  "Error";
    }
}

//###########################    DELETE ALL      #############################

if(checkIfFieldSet('deleteAll')){
    $delete = $_REQUEST['deleteAll'];

    $query = "select image_small,image_large, image_mobile from events";
    $filepath = retrieveData($query);

    foreach($filepath as $arr=>$row){
        if(file_exists($row['image_small']) || file_exists($row['image_large'])
            ||  file_exists($row['image_mobile'])) {

            unlink($row['image_small']);
            unlink($row['image_large']);
            unlink($row['image_mobile']);
        }
    }

    $query = "delete from events";

    if(executeCommand($query)){
        $alert =  "Items Deleted";
//        $query = "ALTER TABLE items AUTO_INCREMENT = 1";
        executeCommand($query);
    }else{
        $alert =  "Error";
    }
}


##############################      RETREIVE DATA       #############################

$sql = "DESC events";
$thead = retrieveData($sql);

$sql = "Select events.id, events.name, events.description,
type.name as type, events.image_small, events.image_large, events.image_mobile
from events,type WHERE events.type = type.id";
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
                <li><a class="btn btn-primary btn-large"  data-target="#add-modal" data-toggle="modal" href="">Add Event</a></li>
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
                <table class=" table add-records table-bordered">
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
                            <td><?php echo $row['type'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><img src="<?php echo $row['image_small'] ?>" alt=""/></td>
                            <td><img src="<?php echo $row['image_large'] ?>" alt=""/></td>
                            <td><img src="<?php echo $row['image_mobile'] ?>" alt=""/></td>
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

<!-- Add Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="add-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form action="admin_events.php" method="post" enctype="multipart/form-data">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="add-modal-label">Add Event Window</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea cols="30" rows="3" class="form-control" id="description" name="description" required=""></textarea>
                            </div>



                            <fieldset class="form-group">
                                <legend>Select Type of Event</legend>
                                <div class="radio-inline">
                                    <input type="radio" id="onstage" name="type" value="1" required=""/>
                                    <label for="onstage">Onstage Event</label>
                                </div>

                                <div class="radio-inline">
                                    <input type="radio" id="offstage" name="type" value="2" required=""/>
                                    <label for="offstage">Offstage Event</label>
                                </div>
                            </fieldset>
                            
                            <div class="form-group">
                                <label for="image_small">Small Image (350x270)</label>
                                <input type="file" name="image_small" class="form-control" id="image_small" required="">
                            </div>

                            <div class="form-group">
                                <label for="image_large">Large Image (700x400)</label>
                                <input type="file" name="image_large" class="form-control" id="image_large" required="">
                            </div>

                            <div class="form-group">
                                <label for="image_large">Mobile Image (350x450)</label>
                                <input type="file" name="image_mobile" class="form-control" id="image_mobile" required="">
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


<!--Delete Modal-->
<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="admin_events.php" method="post">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="delete-modal-label">Delete Event Window</h4>
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
            <form action="admin_events.php" method="post">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="delete-all-modal-label">Delete Event Window</h4>
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