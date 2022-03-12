

<?php 

$category_id = filter_input(INPUT_GET,'category_id');

$sql_categories = "select * from categories where id = '$category_id' ";
$row_categories = Database::db_get_row($sql_categories);

$sql_list_room = "select * from rooms where category_id = '$category_id' and status = '0' ";
$list_room = Database::db_get_list($sql_list_room);
 
?>
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../public/user/img/carousel-2.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Phòng</h1>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Room Grid</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>



        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Danh Mục</h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase"><?php echo $row_categories['name'] ?></span></h1>
                </div>
                <div class="row g-4">

                <?php foreach($list_room as $room): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="room-item rounded">
                            <div class="position-relative">
                                <img class="img-fluid" src="../uploads/<?php echo $room['image'] ?>" alt="">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$<?php echo $room['price'] ?>/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo substr($room['name'],0,30) ?></h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $room['bed'] ?>
                                        Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $room['bath'] ?>
                                        Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3"><?php echo substr($room['description'],0,150) ?></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="<?php echo Helper::get_url('?c=room-details&room_id='.$room['id']) ?>">View Detail</a>
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="<?php echo Helper::get_url('?c=booking&room_id='.$room['id']) ?>">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center m-0">
                                <li class="page-item disabled">
                                    <a class="page-link rounded-0" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link rounded-0" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

