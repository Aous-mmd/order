<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="<?= site_url("assets/css/bootstrap.min.css") ?>" />
    <link rel="stylesheet" href="<?= site_url("assets/css/datatables.min.css") ?>" />
    <link rel="stylesheet" href="<?= site_url("assets/css/style.css") ?>" />
</head>

<body>
    <div class="container-fluid" style="padding: 30px 30px;">
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Order Name</th>
                    <th>Order Description</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($order_list) && count($order_list) > 0) {
                    foreach ($order_list as $o) { ?>
                        <tr>
                            <td><?php echo $o['name']; ?></td>
                            <td><?php echo $o['desc']; ?></td>
                            <td><?php echo $o['email']; ?></td>
                            <td><?php echo $o['phone']; ?></td>
                            <td><a class="btn btn-primary" href="<?php echo site_url('Form/update_order/') . $o['id'] ?>"> Edit</a></td>
                            <td><a class="btn btn-danger" href="<?php echo site_url('Form/delete_data/') . $o['id'] ?>"> Delete</a></td>
                        </tr>
                <?php }
                } else {
                    echo validation_errors();
                } ?>
            </tbody>
        </table>
    </div>
    <script src="<?= site_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= site_url("assets/js/bootstrap.min.js") ?>"></script>
    <script src="<?= site_url("assets/js/main.js") ?>"></script>
    <script src="<?= site_url('assets/js/datatables.min.js') ?>"></script>
    <script src="<?= site_url('assets/js/push.min.js') ?>"></script>
    <script src="<?= site_url('assets/js/serviceWorker.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
            show();
        });
        function show() {
            $.ajax({
                url: '<?php echo site_url('Form/get_notify'); ?>',
                dataType: 'json',
                type: "POST",
                success: function (data) {
                    alert("you have" + data + "orders");
                }
            });
        }
    </script>
</body>

</html>