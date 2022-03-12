<?php

$sql_categories = "select * from categories";
$list_categories = Database::db_get_list($sql_categories);

$id = filter_input(INPUT_GET, 'id');
$sql_room = "select * from rooms where id = :id ";
$param_room = [
    "id" => $id
];

$room = Database::db_get_row($sql_room, $param_room);

if (filter_input(INPUT_POST, 'action') == 'add') {

    $category_id = filter_input(INPUT_POST, 'category_id');
    $name = filter_input(INPUT_POST, 'name');
    $description = filter_input(INPUT_POST, 'description');
    $bed = filter_input(INPUT_POST, 'bed');
    $bath = filter_input(INPUT_POST, 'bath');
    $price = filter_input(INPUT_POST, 'price');
    $imgfile = "";
    $inputfile = "files";
    if (!filter_input(INPUT_POST, 'files'))
        $image = "";
    if (Helper::upload_file($inputfile, $imgfile)) {
        $image = $imgfile;
    }

    $sql = "update rooms set category_id = :category_id, name = :name, description = :description, bed = :bed, bath = :bath, price = :price, image = :image where id = :id";
    $params = [
        'id' => $id,
        "category_id" => $category_id,
        'name' => $name,
        'description' => $description,
        'bed' => $bed,
        'bath' => $bath,
        'price' => $price,
        'image' => $image
    ];

    if (Database::db_execute($sql, $params)) {
        Helper::redirect_js(Helper::get_url('?c=room-list'));
    }
}
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Room Edit</h6>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                         <label for="category_id" class="form-label">Categories Name</label><br>
                         <select class="custom-select tm-select-accounts" id="category_id" name="category_id">
                             <?php foreach ($list_categories as $categories) : ?>
                                 <option <?php if ($room['category_id'] == $categories['id']) {
                                                echo "selected";
                                            }
                                            ?> value="<?php echo $categories['id'] ?>"><?php echo $categories['name'] ?>
                                 </option>
                             <?php endforeach; ?>
                         </select>
                     </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $room['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="<?php echo $room['description'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="bed" class="form-label">Bed</label>
                        <input type="text" class="form-control" id="bed" name="bed" value="<?php echo $room['bed'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="bath" class="form-label">Bath</label>
                        <input type="text" class="form-control" id="bath" name="bath" value="<?php echo $room['bath'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $room['price'] ?>">
                    </div>

                    <div class="mb-3">
                         <!-- Uploaded image area-->
                         <div class="image-area mt-4"><img style="height: 300px; width:300px; border-radius:50px;" id="imageResult" src="../uploads/<?php echo $room['image'] ?>" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                     </div>
                     <div class="mb-3">
                         <!-- Upload image input-->
                         <div class="input-group  rounded-pill bg-white shadow-sm">
                             <input id="upload" name="files" type="file" value="<?php echo $room['image'] ?>" onchange="readURL(this);" class="form-control border-0">
                             <div class="input-group-append">
                                 <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                             </div>
                         </div>
                     </div>
                    
                     <input type="hidden" name="action" value="add">
                    <button type="submit" class="btn btn-primary">EDIT</button>
                </form>
            </div>
        </div>


    </div>
</div>
<!-- Form End -->