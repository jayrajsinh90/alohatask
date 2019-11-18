<?php


class Theme_Ajax{
    
    function __construct(){

    	add_action( "wp_ajax_nopriv_register_new_user", array($this,'register_new_user_func'));
		add_action( "wp_ajax_register_new_user", array($this,'register_new_user_func'));

        add_action( "wp_ajax_nopriv_login_user", array($this,'login_user_func'));
        add_action( "wp_ajax_login_user", array($this,'login_user_func'));

        add_action( "wp_ajax_update_user_profile", array($this,'update_user_profile_func'));
        add_action( "wp_ajax_update_user_password", array($this,'update_user_password_func'));

        add_action('wp_logout', array($this,'auto_redirect_after_logout'));
    }

    function auto_redirect_after_logout(){
      wp_redirect( home_url() );
      exit();
    }

    function register_new_user_func()
    {
        $userdata = $_POST; 
        //print_r($userdata);       

        if ( !isset($_POST['register_newuser']) || !wp_verify_nonce($_POST['register_newuser'], 'register_newusers')) {
            echo '<div class="err_msg">Some error occured while registration... Please try again....</div>';
            
        }
        
        
        if(username_exists( $userdata['newreg_email'] ) || email_exists($userdata['newreg_email'])) {
            echo '<div class="err_msg">Email Id already registered with Grantspass.</div>';
        }
        else
        {
            if(empty($userdata['newreg_email']) || empty($userdata['newreg_pswd']) || empty($userdata['newreg_fname']))
            {
                echo '<div class="err_msg">All the feilds are mandatory.</div>';
            }
            else
            {
                $recaptcha=$_POST['recaptcha'];
                if(empty($recaptcha))
                {
                    echo '<div class="err_msg">Please enter reCAPTCHA</div>';
        
                    die();
                }

                $user_data = array(
                    'user_login' => $userdata['newreg_email'],
                    'user_email' => $userdata['newreg_email'],
                    'user_pass'  => $userdata['newreg_pswd'],
                    'first_name' => $userdata['newreg_fname'],
                    'last_name'  => $userdata['newreg_lname'],
                    'nickname'   => $userdata['newreg_fname'] . ' ' . $userdata['newreg_lname'],
                    'display_name'=> $userdata['newreg_fname'] . ' ' . $userdata['newreg_lname'],
                );
                $new_userid = wp_insert_user( $user_data );

                wp_set_current_user($new_userid);
                wp_set_auth_cookie($new_userid, true, false);
                $user = get_user_by( 'id', $new_userid );
                do_action( 'wp_login', $user->user_login, $user );

                $emailBodyContent = emailTemplate(array(
                                    'emailType' => 'newRegistration',
                                    'emailUserType' => 'user_admin',
                                    'toName' => $userdata['newreg_fname'].' '.$userdata['newreg_lname'],
                                    'toEmail' => $userdata['newreg_email'],
                                    'emailData' => $userdata
                                ));

                echo '<div class="suc_msg">Successfully registered with Grantspass.</div>';
            }
        }

        

        die();
    }

    function login_user_func()
    {
        $userdata = $_POST;

        $username = $userdata['usrname'];
        $password = $userdata['pswd'];
        if($userdata['remember']){$remember = true;}else{$remember = false;}
        $user_data = array();

        $user_data['user_login'] = $username;
        $user_data['user_password'] = $password; 
        $user_data['remember'] = $remember; 
        $user = wp_signon( $user_data, false);

        if ( is_wp_error($user) ) {
            echo '<div class="err_msg">Invalid Credentials</div>';
        }else{
            $userID = $user->ID;
            $userEmail = $user->user_email;
            wp_set_current_user( $user->ID );
            wp_set_auth_cookie( $userID, true, false );
            do_action( 'wp_login', $user->user_login, $user );
            $user_info = wp_get_current_user();

            echo '<div class="suc_msg">Successfully Logged In.</div>';
        }

        die();
    }

    function update_user_profile_func()
    {
        $userid = get_current_user_id();
        if(!empty($_POST['first_name']))
        {
            $user_data = array(
                'ID' => $userid,
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
            );
            if(wp_update_user( $user_data ))
            {
                echo '<div class="suc_msg">Successfully updated profile details.</div>';
            }
            else
            {
                echo '<div class="err_msg">Error while updateing profile details</div>';
            }
        }
        else
        {
            echo '<div class="err_msg">All the feilds are mandatory.</div>';
        }
        die();
    }

    function update_user_password_func()
    {
        if(!empty($_POST['old_pwd']) || !empty($_POST['mypassword']) || !empty($_POST['password_confirm']))
        {
            $userid = get_current_user_id();
            $user = get_user_by('id', $userid);

            if ( $user && wp_check_password( $_POST['old_pwd'], $user->data->user_pass, $user->ID ) ) 
            {
                if($_POST['old_pwd'] == $_POST['mypassword'])
                {
                    echo '<div class="err_msg">Old password and your new password cannot be same.</div>';
                }
                else
                {
                    $passUpdate = wp_set_password( $_POST['mypassword'], $userid );
                    
                    echo '<div class="suc_msg">Password Successfully Updated.</div>';
                }
            } else {
                echo '<div class="err_msg">Incorrect Current Password...</div>';
            }
        }
        else
        {
            echo '<div class="err_msg">All the fields are mandatory.</div>';
        }
        die();
    }
}