<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="main">
        <div id="content">
            <div id="form_input">
                <?php if (isset($error) && !empty($error)) { ?>
                    <div>
                        <?php echo $error; ?>

                    </div>
                <?php } ?>
                <form action="<?php echo site_url('form/update_data/') . $order['id'] ?>" method="post" class="form-inline form">
                    <label>
                        Order Name
                    </label>
                    <input type="text" name='name' placeholder='Please Enter Order name' class='input_box' value="<?php echo $order['name']; ?>" required>
                    <label>
                        Description
                    </label>
                    <input type="text" name='desc' placeholder='Please Enter Order Description' class='input_box' value="<?php echo $order['desc']; ?>" required>
                    <label>
                        Email
                    </label>
                    <input type="text" name='email' placeholder='Please Enter Your Email' class='input_box' value="<?php echo $order['email']; ?>" required>
                    <label>
                        Number
                    </label>
                    <input type="text" name='phone' placeholder='Please Enter Your Number' class='input_box' value="<?php echo $order['phone']; ?>" required>
                    <button type="submit" class="submit">Save</button>
                </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</body>

</html>