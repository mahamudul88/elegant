<?php  
/*
Template Name: registration
*/ 
get_header();?>


<div class="register-sec">
    <div class="container">
        <div class="regi-warning text-center">
            <?php 
                global $wpdb;
        
                if ($_POST) {
        
                    $username = $wpdb->escape($_POST['txtUsername']);
                    $email = $wpdb->escape($_POST['txtEmail']);
                    $password = $wpdb->escape($_POST['txtPassword']);
                    $ConfPassword = $wpdb->escape($_POST['txtConfirmPassword']);
        
                    $error = array();
                    ?>
                    <div class="user-space">
                        <?php
                            if (strpos($username, ' ') !== FALSE) {
                                $error['username_space'] = "Username has Space";
                            }
                        ?>
                    </div>
        
                    <div class="user-name">
                        <?php
                        if (empty($username)) {
                            $error['username_empty'] = "Needed Username must";
                        }
                        ?>
                    </div>
        
                    <div class="user-exist">
                        <?php
                        if (username_exists($username)) {
                            $error['username_exists'] = "Username already exists";
                        }
                        ?>
                    </div>
        
                    <div class="user-email">
                        <?php
                        if (!is_email($email)) {
                            $error['email_valid'] = "Email has no valid value";
                        }
                        ?>
                    </div>
        
                    <div class="user-email-exist">
                        <?php
                        if (email_exists($email)) {
                            $error['email_existence'] = "Email already exists";
                        }
                        ?>
                    </div>
        
                    <div class="user-pass">
                        <?php
                        if (strcmp($password, $ConfPassword) !== 0) {
                            $error['password'] = "Password didn't match";
                        }
                        ?>
                    </div>
        
                    <div class="user-creat">
                        <?php
                        if (count($error) == 0) {
        
                            wp_create_user($username, $password, $email);
                            echo "User Created Successfully";
                            exit();
                        }else{
                            echo '<p>'.$error['username_empty'].'</p>';
                            echo '<p>'.$error['email_valid'].'</p>';
                            echo '<p>'.$error['password'].'</p>';                            
                            echo '<p>'.$error['email_existence'].'</p>';                            
                            echo '<p>'.$error['email_valid'].'</p>';                            
                            echo '<p>'.$error['username_exists'].'</p>';                            
                            //print_r($error);                         
                            
                        }
                        ?>
                    </div>
                    <?php
                }
            ?>
        </div>

        <div class="register-wrap text-center">
            <form class="register" method="post">
                <p>
                    <input type="text" name="txtUsername" id="txtUsername" placeholder="Username">
                </p>
                <p>
                    <input type="email" name="txtEmail" id="txtEmail" placeholder="Email">
                </p>
                <p>
                    <input type="password" name="txtPassword" id="txtPassword" placeholder="Password">
                </p>
                <p>
                    <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" placeholder="Confirm Password">
                </p>
                <div class="regi-sub">
                    <input type="submit" name="btnsubmit">
                </div>
            </form>
        </div>
    </div>
</div>


<?php get_footer(); ?>