<?php

$sql = "select * from rooms where status = '0' ";
$list_room = Database::db_get_list($sql);

if (filter_input(INPUT_POST, 'action') == 'add') {

    $room_id = filter_input(INPUT_POST,'room_id');
    $name = filter_input(INPUT_POST,'name');
    $email = filter_input(INPUT_POST,'email');
    $phone = filter_input(INPUT_POST,'phone');
    $people = filter_input(INPUT_POST,'people');
    
    $check_in = date_create(filter_input(INPUT_POST,'check_in'));
    $check_out = date_create(filter_input(INPUT_POST,'check_out'));
    $date_check_in = date_format($check_in,"Y-m-d");
    $date_check_out = date_format($check_out,"Y-m-d");


    $sql= "insert into bookings (room_id, name, email, phone, people, check_in, check_out, status ) 
                        value( :room_id, :name, :email, :phone, :people, :check_in, :check_out, :status) ";

    $params = [
        "room_id" => $room_id,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'people' => $people,
        'check_in' => $date_check_in,
        'check_out' => $date_check_out,
        'status' => '0',
    ];


    if (Database::db_execute($sql, $params)) {
        Helper::redirect_js(Helper::get_url('?c=booking-process'));
    }
}


?>



<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add</h6>
                <form action="" method="post">
                <div class="mb-3">
                        <label for="room_id" class="form-label">Room</label>
                        <br>
                        <select name="room_id" id="room_id">
                            <?php foreach ($list_room as $room) : ?>
                                <option selected value="<?php echo $room['id']; ?>"><?php echo $room['name']; ?></option>
                            <?php endforeach; ?>
                        </select><br>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input  type="text" class="form-control" id="name" name="name" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input  type="email" class="form-control" id="email" name="email" >
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input  type="text" class="form-control" id="phone" name="phone" >
                    </div>
                    <div class="mb-3">
                        <label for="people" class="form-label">People</label>
                        <input  type="text" class="form-control" id="people" name="people" >
                    </div>
                    <div class="mb-3">
                        <label for="check_in" class="form-label">Check In</label>
                        <input  type="date" class="form-control" id="check_in" name="check_in" >
                    </div>
                    <div class="mb-3">
                        <label for="check_out" class="form-label">Check Out</label>
                        <input  type="date" class="form-control" id="check_out" name="check_out" >
                    </div>

                    <input type="hidden" name="action" value="add">
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>


    </div>
</div>
<!-- Form End -->