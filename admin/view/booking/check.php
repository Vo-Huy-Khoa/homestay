<?php

$id = filter_input(INPUT_GET, 'id');

$sql_row_booking = "select * from bookings where id = '$id' ";
$row_booking = Database::db_get_row($sql_row_booking);


$check_in = $row_booking['check_in'];
$check_out = $row_booking['check_out'];

$first_date = strtotime($check_in);
$second_date = strtotime($check_out);
$datediff = abs($first_date - $second_date);

$sql = "select * from rooms  ";
$list_room = Database::db_get_list($sql);


$room_id = $row_booking['room_id'];
$sql_row_room = "select * from rooms where id = '$room_id' ";
$row_room = Database::db_get_row($sql_row_room);




if (filter_input(INPUT_POST, 'action') == 'check') {
    $id = filter_input(INPUT_GET, 'id');


    $sql_update = "update bookings set  status = '2' where id = :id ";

    $param = [
        'id' => $id
    ];

    $sql_row_booking = "select * from bookings where id = :id ";
    $row_booking = Database::db_get_row($sql_row_booking, $param);

    $room_id = $row_booking['room_id'];

    $sql_room = "update rooms set status = '0' where id = :id ";
    $param_room = [
        'id' => $room_id
    ];


    if (!empty($id) && Database::db_execute($sql_update, $param) && Database::db_execute($sql_room, $param_room)) {
        Helper::redirect_js(Helper::get_url('?c=booking-list'));
    }
}


?>



<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Check Out</h6>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Room</label>
                        <input readonly type="text" class="form-control" id="name" name="name" value="<?php foreach ($list_room as $room) :
                                                                                                            if ($room['id'] == $row_booking['room_id']) {
                                                                                                                echo $room['name'];
                                                                                                            }
                                                                                                        endforeach;
                                                                                                        ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input readonly type="text" class="form-control" id="name" name="name" value="<?php echo $row_booking['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="people" class="form-label">people</label>
                        <input readonly type="text" class="form-control" id="people" name="people" value="<?php echo $row_booking['people'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="check_in" class="form-label">Check In</label>
                        <input readonly type="text" class="form-control" id="check_in" name="check_in" value="<?php echo $row_booking['check_in'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="check_out" class="form-label">Check Out</label>
                        <input readonly type="text" class="form-control" id="check_out" name="check_out" value="<?php echo $row_booking['check_out'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="day" class="form-label">Day</label>
                        <input readonly type="text" class="form-control" id="day" name="day" value="<?php echo number_format($row_room['price']) . '$ x ' . floor($datediff / (60 * 60 * 24)) . ' day'; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input readonly type="text" class="form-control" id="price" name="price" value="<?php echo number_format($row_room['price'] * floor($datediff / (60 * 60 * 24))) . '$' ?>">
                    </div>
                    <input type="hidden" name="action" value="check">
                    <button type="submit" class="btn btn-primary">CHECK</button>
                </form>
            </div>
        </div>


    </div>
</div>
<!-- Form End -->