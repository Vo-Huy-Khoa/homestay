<?php
$sql_categories = "select * from categories";
$list_categories = Database::db_get_list($sql_categories);

$sql = "select * from rooms";
$list_room = Database::db_get_list($sql);

?>




<!-- Blank Start -->
<div class="container pt-4 px-4">
    <div class="row vh-100 bg-light rounded mx-0">
        <div class="col-md-12">
            <h3>Room List</h3>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Categories Name</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Bed</th>
                        <th>Bath</th>
                        <th>Price</th>
                        <th>status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_room as $room) : ?>
                        <tr>
                            <td>
                                <?php foreach ($list_categories as $categories) :
                                    if ($categories['id'] == $room['category_id']) {
                                        echo $categories['name'];
                                    }
                                endforeach;
                                ?>
                            </td>
                            <td><?php echo $room['name']; ?></td>
                            <td><?php echo substr($room['description'],0,200); ?></td>
                            <td><?php echo $room['bed']; ?></td>
                            <td><?php echo $room['bath']; ?></td>
                            <td><?php echo number_format($room['price']).'$'; ?></td>
                            <td><?php if ($room['status'] == '0'){
                                    echo 'Phòng Trống';
                            }
                              else
                                 echo 'Phòng Đầy'; ?>
                             </td>
                            <td><img width="120px" height="200px" src="../../uploads/<?php echo $room['image'] ?>" alt=""></td>
                            <td><a href="<?php echo Helper::get_url('?c=room-add') ?>">Add</a>&nbsp;&nbsp;
                                <a href="<?php echo Helper::get_url('?c=room-edit&id=' . $room['id']) ?>">Edit</a>&nbsp;&nbsp;
                                <a href="<?php echo Helper::get_url('?c=room-delete&id=' . $room['id']) ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- Blank End -->