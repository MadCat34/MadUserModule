<?php


/**
 * MadUser Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
$settings = [
    /**
     * User Model Entity Class
     *
     * The entity class should implement MadUser\Entity\UserInterface
     */
    //'user_entity_class' => 'MadUser\Entity\User',

    /**
     * Enable registration through the website
     */
    //'enable_registration' => true,

    /**
     * Enable Username
     *
     * Enables username field on the registration form, and allows users to log
     * in using their username OR email address. Default is false.
     */
    //'enable_username' => false,

    /**
     * Modes for authentication identity match
     *
     * Specify the allowable identity modes, in the order they should be
     * checked by the Authentication plugin.
     */
    //'auth_identity_fields' => ['email', 'username'],

    /**
     * Login form timeout
     *
     * Specify the timeout for the CSRF security field (login form) in seconds.
     * Default value is 300 seconds.
     */
    //'login_form_timeout' => 300,

    /**
     * Login After Registration
     *
     * Automatically logs the user in after they successfully register.
     */
    //'login_after_registration' => true,

    /**
     * Registration Form Captcha
     */
    //'use_registration_form_captcha' => true,

    /**
     * Form Captcha Options
     *
     * Currently used for the registration form, but re-usable anywhere. Use
     * this to configure which Zend\Captcha adapter to use, and the options to
     * pass to it. The default uses the Figlet captcha.
     */
    /*'form_captcha_options' => [
        'class'   => 'figlet',
        'options' => [
            'wordLen'    => 6,
            'expiration' => 300,
            'timeout'    => 300,
        ],
    ],*/

    /**
     * Use Redirect Parameter If Present
     *
     * Upon successful authentication, check for a 'redirect' POST or GET parameter
     *
     * Accepted values: boolean true or false
     */
    //'use_redirect_parameter_if_present' => true,

    /**
     * Sets the view template for the user login widget
     */
    //'user_login_widget_view_template' => 'mad-user/user/login.phtml',

    /**
     * Login Redirect Route
     *
     * Upon successful login the user will be redirected to the entered route
     */
    //'login_redirect_route' => 'maduser',

    /**
     * Logout Redirect Route
     *
     * Upon logging out the user will be redirected to the entered route
     */
    //'logout_redirect_route' => 'maduser/login',

    /**
     * Password Security
     *
     * DO NOT CHANGE THE PASSWORD HASH SETTINGS FROM THEIR DEFAULTS
     * Unless A) you have done sufficient research and fully understand exactly
     * what you are changing, AND B) you have a very specific reason to deviate
     * from the default settings and know what you're doing.
     *
     * The password hash settings may be changed at any time without
     * invalidating existing user accounts. Existing user passwords will be
     * re-hashed automatically on their next successful login.
     */

    /**
     * Password Cost
     *
     * The number represents the base-2 logarithm of the iteration count used for
     * hashing. Default is 14 (about 10 hashes per second on an i5).
     *
     * Accepted values: integer between 4 and 31
     */
    //'password_cost' => 14,

    /**
     * Enable user state usage
     *
     * Should user's state be used in the registration/login process?
     */
    //'enable_user_state' => true,

    /**
     * After registration, send an email with a link to enable user
     */
    //'enable_user_by_mail' => true,

    /**
     * Default user state upon registration
     */
    //'default_user_state' => 0,

    /**
     * States which are allowing user to login
     *
     * When user tries to login, is his/her state one of the following?
     * Include null if you want user's with no state to login as well.
     * Allowed value types: null and integer
     */
    //'allowed_login_states' => array( null, 1 ),

    /**
     * User table name
     */
    //'table_name' => 'user',

    /**
     * End of MadUser configuration
     */
];

/**
 * You do not need to edit below this line
 */
return [
    'maduser' => $settings,
    'service_manager' => [
        'aliases' => [
            'zfcuser_zend_db_adapter' => (isset($settings['zend_db_adapter'])) ? $settings['zend_db_adapter']: 'Zend\Db\Adapter\Adapter',
        ],
    ],
];