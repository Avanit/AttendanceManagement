<div class="container-fluid">
    <br>
    <br>
    <br>
    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title"><i class="fa fa-lock"></i> Please enter your login details.</h1>
                </div>
                <div class="panel-body">
                    <?php if(isset($error_msg)) { ?>
                        <div class="alert alert-danger">
                            <i class="fa fa-exclamation-circle"></i> <?php echo $error_msg; ?>
                            <button data-dismiss="alert" class="close" type="button">×</button>
                        </div>
                    <?php } ?>

                    <form enctype="multipart/form-data" method="POST" name="login" action='<?php echo $this->webroot; ?>users/login'>
                        <div class="form-group">
                            <label for="input-email">Username</label>
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="username" value="" name="User[username]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-password">Password</label>
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="User[password]">
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-key"></i> Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>