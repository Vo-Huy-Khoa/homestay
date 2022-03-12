  
  <?php
  $sql_room = "select * from rooms where status = '0' ";
  $list_room = Database::db_get_list($sql_room); 


  $sql_blog = "select * from blogs ";
  $list_blog = Database::db_get_list($sql_blog); 
  ?>
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="../public/user/img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Homestay
                                    Living</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Luxury
                                    Homestay</h1>
                                <a href="<?php echo Helper::get_url('?c=room-list') ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Phòng</a>
                                <a href="<?php echo Helper::get_url('?c=blog-list') ?>" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Bài Viết</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="../public/user/img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Homestay
                                    Living</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Luxury
                                    Homestay</h1>
                                <a href="<?php echo Helper::get_url('?c=room-list') ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Phòng</a>
                                <a href="<?php echo Helper::get_url('?c=blog-list') ?>" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Bài Viết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


  
  <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Về Chúng Tôi</h6>
                        <h1 class="mb-4">Chào Mừng Đến Với <span class="text-primary text-uppercase"> Luxury Homestay</span></h1>
                        <p class="mb-4">Với những “kẻ mộng mơ” hẳn phải yêu ngay Luxury Homestay ngay từ lần gặp đầu tiên bởi không gian biệt lập, yên tĩnh, đặc biệt sở hữu các căn phòng được lắp khung kính lớn trong suốt nhìn thẳng núi đồi xanh bát ngát tuyệt đẹp.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php echo count($list_room); ?></h2>
                                        <p class="mb-0">Phòng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">2</h2>
                                        <p class="mb-0">Quản Lý</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">4</h2>
                                        <p class="mb-0">Nhân Viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="<?php echo Helper::get_url('?c=about') ?>">Xem Thêm</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="../public/user/img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="../public/user/img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="../public/user/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="../public/user/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Danh Sách</h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase">Phòng</span></h1>
                </div>
                <div class="row g-4">
                <?php foreach($list_room as $room): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item rounded">
                            <div class="position-relative">
                                <img class="img-fluid" src="../uploads/<?php echo $room['image'] ?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$<?php echo number_format($room['price'])  ?>/Đêm</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo substr($room['name'],0,25) ?></h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $room['bed'] ?>
                                        Giường</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $room['bath'] ?>
                                        Tắm</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3"><?php echo substr($room['description'],0,150) ?></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="<?php echo Helper::get_url('?c=room-details&room_id='.$room['id']) ?>">Chi Tiết</a>
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="<?php echo Helper::get_url('?c=booking&room_id='.$room['id']) ?>">Đặt Phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>


        <div class="container-xxl py-5 px-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">Luxury Homestay</h6>
                        <h1 class="text-white mb-4">Luxury Homestay</h1>
                        <p class="text-white mb-4">Với những “kẻ mộng mơ” hẳn phải yêu ngay Luxury Homestay ngay từ lần gặp đầu tiên bởi không gian biệt lập, yên tĩnh, đặc biệt sở hữu các căn phòng được lắp khung kính lớn trong suốt nhìn thẳng núi đồi xanh bát ngát tuyệt đẹp.</p>
                        <a href="<?php echo Helper::get_url('?c=room-list') ?>" class="btn btn-primary py-md-3 px-md-5 me-3">Phòng</a>
                        <a href="<?php echo Helper::get_url('?c=blog-list') ?>" class="btn btn-light py-md-3 px-md-5">Bài Viết</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="#" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Blog</h6>
                    <h1 class="mb-5">Danh Sách Các <span class="text-primary text-uppercase"> Bài Viết</span></h1>
                </div>
                <div class="row g-4">

                <?php foreach($list_blog as $blog) :  ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="../uploads/<?php echo $blog['image'] ?>" alt="">
                            </div>
                            <div class="p-4">
                                <div class="d-flex mx-n2 mb-3">
                                    <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                    <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $blog['created_at'] ?></small>
                                </div>
                                <h5 class="lh-base mb-3"><?php echo substr($blog['title'],0,60)  ?></h5>
                                <a href="<?php echo Helper::get_url('?c=blog-details&blog_id='.$blog['id']) ?>" class="fw-medium text-uppercase">Xem Thêm<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

