<?php

$id = filter_input(INPUT_GET,'id'); 


$sql_update = "update bookings set  status = '0' where id = :id ";

$param = [
    'id' => $id
];

$sql_row_booking = "select * from bookings where id = :id ";
$row_booking = Database::db_get_row($sql_row_booking,$param);

$room_id = $row_booking['room_id'];

$sql_room = "update rooms set status = '0' where id = :id ";
$param_room = [
    'id' => $room_id
];


if (!empty($id) &&Database::db_execute($sql_update,$param)&&Database::db_execute($sql_room,$param_room)){
    Helper::redirect_js(Helper::get_url('?c=booking-list'));
}

?>
