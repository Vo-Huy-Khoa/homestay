<?php
$room_id = filter_input(INPUT_GET, 'room_id');

$sql = "select * from categories";
$list_categories = Database::db_get_list($sql);

$sql_room = "select * from rooms where id = '$room_id' ";

$row_room = Database::db_get_row($sql_room);
$category_id = $row_room['category_id'];

$sql_categories = "select * from categories where id = '$category_id' ";
$row_categories = Database::db_get_row($sql_categories);

$sql_category_room = "select * from rooms where category_id = '$category_id' ";
$list_category_room = Database::db_get_list($sql_category_room);
?>
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../public/user/img/carousel-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Chi Tiết Phòng</h1>
            <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Room Detail</li>
                        </ol>
                    </nav> -->
        </div>
    </div>
</div>



<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-8">
                <div id="room-carousel" class="carousel slide mb-5 wow fadeIn" data-bs-ride="carousel" data-wow-delay="0.1s">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100" src="../../uploads/<?php echo $row_room['image'] ?>" alt="Image">
                        </div>
                        <!-- <div class="carousel-item">
                                    <img class="w-100" src="../public/user/img/carousel-2.jpg" alt="Image">
                                </div> -->
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#room-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#room-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> -->
                </div>
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0"><?php echo $row_room['name'] ?></h1>
                </div>
                <div class="d-flex flex-wrap pb-4 m-n1">
                    <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-bed text-primary me-2"></i><?php echo $row_room['bed'] ?>
                        Bed</small>
                    <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-bath text-primary me-2"></i><?php echo $row_room['bath'] ?>
                        Bath</small>
                    <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                    <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-tv text-primary me-2"></i>TV</small>
                </div>
                <p class="mb-5"><?php echo $row_room['description'] ?>
                </p>

            </div>


            <div class="col-lg-4">




                <div class="bg-light p-4 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title text-start mb-4">Thể Loại</h4>
                    <?php foreach ($list_categories as $categories) : ?>
                        <a class="d-block position-relative mb-3" href="<?php echo Helper::get_url('?c=room-grid&category_id='.$categories['id']) ?>">
                            <img class="img-fluid" src="../uploads/<?php echo $categories['image'] ?>" alt="">
                            <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3" style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto"><?php echo $categories['name'] ?></h5>
                            </div>
                        </a>

                    <?php endforeach; ?>

                </div>


                <div class="border p-1 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border p-4">
                        <h4 class="section-title text-start mb-4">Đặt Phòng</h4>
                        <p>Quý Khách Nhấn Vào Nút Bên Dưới Để Được Đặt Phòng</p>
                        <div class="bg-primary text-center p-3">
                            <a href="<?php echo Helper::get_url('?c=booking&room_id='.$row_room['id']) ?>">
                                <h4 class="text-white m-0">Đặt Phòng</h4>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Cùng Thể Loại</h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase"><?php echo $row_categories['name'] ?></span></h1>
                </div>
                <div class="row g-4">
                    <?php foreach($list_category_room as $category_room): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item rounded">
                            <div class="position-relative">
                                <img class="img-fluid" src="../uploads/<?php echo $category_room['image']?>" alt="">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$<?php echo number_format($category_room['price']) ?>/Đêm</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo substr($category_room['name'],0,25)?></h5>

                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $category_room['bed']?>
                                        Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $category_room['bath']?>
                                        Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3"><?php echo substr($category_room['description'],0,50)?></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="<?php echo Helper::get_url('?c=room-details&room_id='.$category_room['id']) ?>">Xem Thêm</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="<?php echo Helper::get_url('?c=booking&room_id='.$category_room['id']) ?>">Đặt Phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php endforeach; ?>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.9s">
                        <a href="" class="btn btn-primary py-3 px-5">Xem Thêm</a>
                    </div>
                </div>
            </div>
        </div>