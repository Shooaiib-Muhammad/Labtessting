<?php $data = $this->session->userdata();


?>
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form style="visibility: hidden;" class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">



                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">

                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $data['user_email'] ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="https://cdn3.vectorstock.com/i/1000x1000/30/97/flat-business-man-user-profile-avatar-icon-vector-4333097.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <?php
                                    if (!$this->session->has_userdata('user_id')) {
                                    ?>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?php echo $data['user_email'] ?></a>
                                            </h5>
                                            <span class="email"><?php echo $data['user_email'] ?></span>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="<?php echo base_url() ?>CoolAdmin/account">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>


                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="<?php echo base_url(); ?>Login/logout">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>