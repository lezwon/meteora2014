<?php
/**
 * Created by PhpStorm.
 * User: Lezwon
 * Date: 24-10-2014
 * Time: 15:46
 */

include 'connection.php';


####################    RETREIVE EVENT INFO    ####################
if(checkIfFieldSet('id')){
    $id = $_REQUEST['id'];

    $sql = "Select events.id, events.name, events.description, type.name as type,
            events.image_small, events.image_large, events.image_mobile
            from events,type WHERE events.type = type.id AND events.id='$id'";

    $event = retrieveData($sql);

    echo json_encode($event[0] , true);
}