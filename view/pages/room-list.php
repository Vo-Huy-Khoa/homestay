<?php

$sql = "select * from categories";
$list_categories = Database::db_get_list($sql);

$sql_room = "select * from rooms where status = '0' ";
$list_room = Database::db_get_list($sql_room);

?>
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../public/user/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Danh Sách Phòng</h1>

                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-8">
                        <?php foreach($list_room as $room): ?>
                        <div class="row room-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute w-100 h-100" src="../uploads/<?php echo $room['image'] ?>" alt=""
                                        style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                                <div class="p-4">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <small class="bg-primary text-white rounded py-1 px-3">$<?php echo number_format($room['price']);  ?>/Đêm</small>
    
                                    </div>
                                    <h5 class="mb-3"><?php echo $room['name'] ?></h5>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $room['bed'] ?>
                                            Bed</small>
                                        <small class="border-end me-3 pe-3"><i
                                                class="fa fa-bath text-primary me-2"></i><?php echo $room['bath'] ?> Bath</small>
                                        <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    </div>
                                    <p class="text-body mb-0"><?php echo substr($room['description'], 0, 150) ?></p>
                                </div>
                                <div class="d-flex justify-content-between border-top mt-auto p-4">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="<?php echo Helper::get_url('?c=room-details&room_id='.$room['id']) ?>">Chi Tiết
                                        </a>
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="<?php echo Helper::get_url('?c=booking&room_id='.$room['id']) ?>">Đặt Phòng</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>


                    <div class="col-lg-4">
<!-- 
                        <div class="bg-light mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="border-bottom text-center text-dark p-3 pt-4 mb-3">
                                <span class="align-top fs-4 lh-base">$</span>
                                <span class="align-middle fs-1 lh-sm fw-bold">49.00</span>
                                <span class="align-bottom fs-6 lh-lg">/ Night</span>
                            </div>
                            <div class="row g-3 p-4 pt-2">
                                <div class="col-12">
                                    <div class="date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date3" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="date" id="date4" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check out" data-target="#date4" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select class="form-select">
                                        <option selected>Night</option>
                                        <option value="1">Night 1</option>
                                        <option value="2">Night 2</option>
                                        <option value="3">Night 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 w-100">Book Now</button>
                                </div>
                            </div>
                        </div> -->


                        <div class="bg-light p-4 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Thể Loại</h4>
                            <?php foreach($list_categories as $categories) : ?>
                            <a class="d-block position-relative mb-3" href="<?php echo Helper::get_url('?c=room-grid&category_id='.$categories['id']) ?>">
                                <img class="img-fluid" src="../uploads/<?php echo $categories['image'] ?>" alt="">
                                <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3"
                                    style="background: rgba(0,0,0,.3);">
                                    <h5 class="text-white m-0 mt-auto"><?php echo $categories['name'] ?></h5>
                                </div>
                            </a>
                            <?php endforeach; ?>
                         </div>


                        <div class="border p-1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="border p-4">
                                <h4 class="mb-4">Giúp Đỡ Và Tư Vấn</h4>
                                <p>Liên Hệ Qua Số Điện Thoại Bên Dưới Nếu Có Thắc Mắc Và Cần Giúp Đỡ.</p>
                                <div class="bg-primary text-center p-3">
                                    <h4 class="text-white m-0">+84 977 425 396</h4>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


