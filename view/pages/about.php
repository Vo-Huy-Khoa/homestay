<?php
  $sql_room = "select * from rooms ";
  $list_room = Database::db_get_list($sql_room); 
?>
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../public/user/img/carousel-2.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Về Chúng Tôi</h1>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>



        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Về Chúng Tôi</h6>
                        <h1 class="mb-4">Chào Mừng Đến <span class="text-primary text-uppercase"> Luxury Homestay</span></h1>
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
                                        <h2 class="mb-1" data-toggle="counter-up">6</h2>
                                        <p class="mb-0">Nhân Viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#">Explore More</a>
                    </div>
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
                </div>
            </div>
        </div>


        <div class="container-fluid my-5 p-0">
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item">
                        <h5 class="bg-primary text-white text-center p-4 m-0">Fitness Clab</h5>
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../public/user/img/feature-1.jpg" alt="">
                            <div class="feature-text text-white text-center">
                                <p class="m-0">Clita sed diam est vero elitr ipsum. Et ipsum amet sea sed amet sed dolor
                                    justo vero lorem. Vero amet erat eos ipsum stet elitr tempor magna</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item">
                        <h5 class="bg-dark text-white text-center p-4 m-0">Party Center</h5>
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../public/user/img/feature-2.jpg" alt="">
                            <div class="feature-text text-white text-center">
                                <p class="m-0">Clita sed diam est vero elitr ipsum. Et ipsum amet sea sed amet sed dolor
                                    justo vero lorem. Vero amet erat eos ipsum stet elitr tempor magna</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-item">
                        <h5 class="bg-primary text-white text-center p-4 m-0">Restaurant</h5>
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../public/user/img/feature-3.jpg" alt="">
                            <div class="feature-text text-white text-center">
                                <p class="m-0">Clita sed diam est vero elitr ipsum. Et ipsum amet sea sed amet sed dolor
                                    justo vero lorem. Vero amet erat eos ipsum stet elitr tempor magna</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="feature-item">
                        <h5 class="bg-dark text-white text-center p-4 m-0">Private Beach</h5>
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../public/user/img/feature-4.jpg" alt="">
                            <div class="feature-text text-white text-center">
                                <p class="m-0">Clita sed diam est vero elitr ipsum. Et ipsum amet sea sed amet sed dolor
                                    justo vero lorem. Vero amet erat eos ipsum stet elitr tempor magna</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 pt-4" style="min-height: 350px;">
                        <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                            <img class="position-absolute img-fluid w-100 h-100 rounded" src="../public/user/img/feature.jpg"
                                style="object-fit: cover;" alt="">
                            <div class="bg-white border p-1 position-absolute top-0 end-0 mt-n4 me-n4">
                                <div class="border py-4 px-5">
                                    <h1 class="display-4 text-primary mb-0">10 <span class="fs-4 text-dark">Năm</span>
                                    </h1>
                                    <h4>Kinh Nghiệm</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Tương Lai</h6>
                        <h1 class="mb-4"><span class="text-primary text-uppercase">Tại Sao Chọn Chúng Tôi ?</span></h1>
                        <p class="mb-4">Với Các Tiêu Chí Của Chúng Tôi Sẽ Làm Quý Khách Vừa Lòng!</p>
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 border rounded p-1" style="width: 50px; height: 50px;">
                                        <div
                                            class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                            <i class="fa fa-bed text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="ps-4">
                                        <h5>Không Gian Thư Giãn</h5>
                                        <p class="m-0">Hệ Thống Phòng Không Gian Thoáng Mát Và Vô Cùng Mát Mẻ.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 border rounded p-1" style="width: 50px; height: 50px;">
                                        <div
                                            class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                            <i class="fa fa-shield-alt text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="ps-4">
                                        <h5>An Toàn</h5>
                                        <p class="m-0">Bảo Đảm An Ninh Bên Ngoài Và Trong Homestay.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 border rounded p-1" style="width: 50px; height: 50px;">
                                        <div
                                            class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                            <i class="fa fa-phone-alt text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="ps-4">
                                        <h5> Hỗ Trợ Tư Vấn 24/7</h5>
                                        <p class="m-0">Nếu Có Thắc Mắc Hay Cần Gì Giúp Đỡ Hãy Liên Hệ Cho Chúng Tôi.</p>
                                    </div>
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
                    <h6 class="section-title text-center text-primary text-uppercase">Đội Ngũ Nhân Viên</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <div class="position-relative">
                                <img class="img-fluid" src="../public/user/img/team-1.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Cap</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <div class="position-relative">
                                <img class="img-fluid" src="../public/user/img/team-2.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Dr Strange</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <div class="position-relative">
                                <img class="img-fluid" src="../public/user/img/team-3.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Peter Parker</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <div class="position-relative">
                                <img class="img-fluid" src="../public/user/img/team-4.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Tom Holland</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
