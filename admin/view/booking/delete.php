<?php

   $id = filter_input(INPUT_GET,'id'); 

   
    $sql = "delete from bookings where id = :id ";
    $params = [

        'id' => $id
    ];

    if (Database::db_execute($sql, $params)) {
        Helper::redirect_js(Helper::get_url('?c=booking-process'));

    }
  

   
?>