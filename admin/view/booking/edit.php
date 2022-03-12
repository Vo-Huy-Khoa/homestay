<?php


    $id = filter_input(INPUT_GET,'id'); 

    $sql_booking = "select * from bookings where id = :id ";
    $param = [
        'id' => $id
    ];


    $booking = Database::db_get_row($sql_booking,$param);

    if (filter_input(INPUT_POST,'action') == 'edit') {

        $name = filter_input(INPUT_POST,'name');
        $email = filter_input(INPUT_POST,'email');
        $phone = filter_input(INPUT_POST,'phone');
        $check_in = filter_input(INPUT_POST,'check_in');
        $check_out = filter_input(INPUT_POST,'check_out');
        $people = filter_input(INPUT_POST,'people');
        $message = filter_input(INPUT_POST,'message');


        $sql_update = "update bookings set  name = :name, email = :email, 
                                            phone = :phone, people = :people, check_in = :check_in 
                                            , check_out = :check_out, message = :message  where id = :id ";

        $params = [
            "id" => $id,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'people' => $people,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'message' => $message,
    
        ];

        if (!empty($id) &&Database::db_execute($sql_update, $params)){
            Helper::redirect_js(Helper::get_url('?c=booking-list'));
        }
    }




?>
 
 
 
 
 <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Booking Edit</h6>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $booking['name'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $booking['email'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $booking['phone'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="people" class="form-label">people</label>
                                    <input type="text" class="form-control" id="people" name="people" value="<?php echo $booking['people'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="check_in" class="form-label">Check In</label>
                                    <input type="date" class="form-control" id="check_in" name="check_in" value="<?php echo $booking['check_in'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="check_out" class="form-label">Check Out</label>
                                    <input type="date" class="form-control" id="check_out" name="check_out" value="<?php echo $booking['check_out'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <input type="text" class="form-control" id="message" name="message" value="<?php echo $booking['message'] ?>">
                                </div>
                                <input type="hidden" name="action" value="edit">
                                <button type="submit" class="btn btn-primary">EDIT</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Form End -->