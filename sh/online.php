<?php 

    // change username column length for w command
    putenv("PROCPS_USERLEN=20");
    exec('w -h | awk \'{print $1","$3","$4","$5}\'',$users);
    $result = array();
    foreach ($users as $user)
    {
        $result[] = explode(",", $user);
    }
	header('Content-Type: application/json; charset=UTF-8');
    echo json_encode($result);
