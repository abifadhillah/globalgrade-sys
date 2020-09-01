<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <img src="<?php echo base_url(); ?>images/garuda.png" width="250" height="100" alt="Garuda">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="<?php echo site_url('Login/auth'); ?>" method="post">
                            <div class="form-group">

                                <label>Please sign-in:</label>
                                <input class="au-input au-input--full" type="text" name="username" placeholder="Username" required autofocus>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">

                            </div>
                            <?php echo $this->session->flashdata('msg'); ?>
                            <br>
                            <!-- <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy.
                                    </label>
                                </div> -->
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>