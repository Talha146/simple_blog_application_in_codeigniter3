<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="padding-top:50px;">

                <?php $errorMsg = $this->session->userdata('errorMsg'); ?>
                <?php if(!empty($errorMsg)) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMsg;?>
                </div>
                <?php }?>
                <form name="loginform" id="loginform" method="post"
                    action="<?php echo base_url().'login/index' ?>">
                    <h3 class="text-center pb-5">Please Sign In</h3>
                    <div class="mb-4">
                        <input type="text" class="form-control" id="username" name="username"
                            value="<?php echo set_value('username') ?>" placeholder="Enter Username">
                        <p>
                            <?php echo form_error('username'); ?>
                        </p>
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter Password">
                        <p>
                            <?php echo form_error('password'); ?>
                        </p>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>