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
    <div class="main">
        <div id="content">
            <div id="form_input">
                <form action="<?php echo site_url('Form/data_submitted') ?>" method="post" class="form-inline form">
                    <label>
                        Order Name
                    </label>
                    <input type="text" name='name' placeholder='Please Enter Order name' 
                    value="<?= $this->input->post("name")?$this->input->post("name"):""?>"
                    class='input_box' required>
                    <label>
                        Description
                    </label>
                    <input type="text" name='desc' placeholder='Please Enter Order Description' value="<?= $this->input->post("desc")?$this->input->post("desc"):""?>"
                    class='input_box' required>
                    <label>
                        Email
                    </label>
                    <input type="text" name='email' placeholder='Please Enter Your Email' value="<?= $this->input->post("email")?$this->input->post("email"):""?>" 
                    class='input_box' required>
                    <label>
                        Number
                    </label>
                    <input type="text" name='phone' value="<?= $this->input->post("phone")?$this->input->post("phone"):""?>" placeholder='Please Enter Your Number' class='input_box' required>
                    <button type="submit" class="submit">
                        Add
                    </button>
                </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
    <script src="<?= site_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= site_url("assets/js/bootstrap.min.js") ?>"></script>
    <script src="<?= site_url("assets/js/main.js") ?>"></script>
    <script src="<?= site_url('assets/js/datatables.min.js') ?>"></script>
</body>

</html>