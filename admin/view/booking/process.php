<?php

$sql = "select * from bookings where status = '0' ";
$list_booking = Database::db_get_list($sql);
$sql = "select * from rooms";
$list_room = Database::db_get_list($sql);

?>




<!-- Blank Start -->
<div class="container pt-4 px-4">
    <div class="row vh-100 bg-light rounded mx-0">
        <div class="col-md-12">
            <h3>Process</h3>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Room Name</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>People</th>
                        <th>Check in</th>
                        <th>Check out</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_booking as $booking) : ?>
                        <tr>
                            <td> <?php foreach ($list_room as $room) :
                                        if ($room['id'] == $booking['room_id']) {
                                            echo $room['name'];
                                        }
                                    endforeach;
                                    ?></td>
                            <td><?php echo $booking['name']; ?></td>
                            <td><?php echo $booking['email']; ?></td>
                            <td><?php echo $booking['phone']; ?></td>
                            <td><?php echo $booking['people']; ?></td>
                            <td><?php echo $booking['check_in']; ?></td>
                            <td><?php echo $booking['check_out']; ?></td>
                            <td><?php echo $booking['message']; ?></td>
                            <?php
                            if ($booking['status'] == '0') {
                                echo '<td style="color: red;">No Close</td>';
                            } elseif(($booking['status'] == '1')) {
                                echo '<td style="color: green;">Close</td>';
                            }else{
                                echo '<td style="color: blue;">None</td>';
                            }
                            ?>

                            <td>
                                <?php
                                if ($booking['status'] == '0') { ?>
                                    <a href="<?php echo Helper::get_url('?c=booking-in&id=' . $booking['id']) ?>">In</a> <br>
                                <?php } else { ?>
                                    <a href="<?php echo Helper::get_url('?c=booking-out&id=' . $booking['id']) ?>">Out</a><br>
                                <?php  }
                                ?>
                                <a href="<?php echo Helper::get_url('?c=booking-edit&id=' . $booking['id']) ?>">Edit</a>&nbsp;&nbsp;
                                <a href="<?php echo Helper::get_url('?c=booking-delete&id=' . $booking['id']) ?>">Delete</a>
                           
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- Blank End -->