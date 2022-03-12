
<?php

$id = filter_input(INPUT_GET, 'room_id');
$sql_room = "select * from rooms where id = '$id' ";
$row_room = Database::db_get_row($sql_room);

if (filter_input(INPUT_POST,'action') == 'add') {
    $name = filter_input(INPUT_POST,'name');
    $email = filter_input(INPUT_POST,'email');
    $phone = filter_input(INPUT_POST,'phone');
    
    $check_in = date_create(filter_input(INPUT_POST,'check_in'));
    $check_out = date_create(filter_input(INPUT_POST,'check_out'));
    

    $date_check_in = date_format($check_in,"Y-m-d");
    $date_check_out = date_format($check_out,"Y-m-d");


    $people = filter_input(INPUT_POST,'people');
    $message = filter_input(INPUT_POST,'message');

    $sql = "insert into bookings(room_id, name, email, phone, people, check_in, check_out, message, status) 
                            value(:room_id, :name, :email, :phone, :people, :check_in, :check_out, :message, :status)";

    $params = [
        "room_id" => $id,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'people' => $people,
        'check_in' => $date_check_in,
        'check_out' => $date_check_out,
        'message' => $message,
        'status' => '0',
    ];

    if (Database::db_execute($sql, $params)) {
        $message = "Đặt Phòng Thành Công!";
        echo  "<script type='text/javascript'>alert('$message');</script>";
        Helper::redirect_js(Helper::get_url('?c=booking&room_id='.$row_room['id']));
  
        
    }

}

?>

<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../public/user/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Đặt Phòng</h1>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase"><?php echo $row_room['name'] ?></span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                    src="../public/user/img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                    src="../public/user/img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                    src="../public/user/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="../public/user/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="check_in" name="check_in"
                                                placeholder="Check In" data-target="#date3"
                                                data-toggle="datetimepicker" />
                                            <label for="check_in">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="check_out" name="check_out"
                                                placeholder="Check Out" data-target="#date4"
                                                data-toggle="datetimepicker" />
                                            <label for="check_out">Check Out</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                                            <label for="phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="people" name="people" placeholder="People">
                                            <label for="people">people</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="people" name="people">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <label for="people">People</label>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select" id="select3">
                                                <option value="1">Room 1</option>
                                                <option value="2">Room 2</option>
                                                <option value="3">Room 3</option>
                                            </select>
                                            <label for="select3">Select A Room</label>
                                        </div>
                                    </div> -->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message" name="message"
                                                style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="hidden" name="action" value="add">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

