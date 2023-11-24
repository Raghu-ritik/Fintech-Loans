<?php
namespace Config;

/*
 * Copyright (c) 2003-2022 BrightOutcome Inc.  All rights reserved.
 * 
 * This software is the confidential and proprietary information of
 * BrightOutcome Inc. ("Confidential Information").  You shall not
 * disclose such Confidential Information and shall use it only
 * in accordance with the terms of the license agreement you
 * entered into with BrightOutcome.
 * 
 * BRIGHTOUTCOME MAKES NO REPRESENTATIONS OR WARRANTIES ABOUT THE
 * SUITABILITY OF THE SOFTWARE, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT 
 * NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE, OR NON-INFRINGEMENT. BRIGHTOUTCOME SHALL NOT BE LIABLE
 * FOR ANY DAMAGES SUFFERED BY LICENSEE AS A RESULT OF USING, MODIFYING OR
 * DISTRIBUTING THIS SOFTWARE OR ITS DERIVATIVES.
*/

use CodeIgniter\Config\BaseConfig;

class Auth extends BaseConfig {
    /**
        * Name:  Auth
        *
        * Version: 2.5.2
        *
        * Created:  17.02.2022
        * Requirements: PHP7.2 or above
        *
    */
    /*
        | -------------------------------------------------------------------------
        | Hash Method (sha1 or bcrypt)
        | -------------------------------------------------------------------------
        | Bcrypt is available in PHP 5.3+
        |
        | IMPORTANT: Based on the recommendation by many professionals, it is highly recommended to use
        | bcrypt instead of sha1.
        |
        | NOTE: If you use bcrypt you will need to increase your password column character limit to (80)
        |
        | Below there is "default_rounds" setting.  This defines how strong the encryption will be,
        | but remember the more rounds you set the longer it will take to hash (CPU usage) So adjust
        | this based on your server hardware.
        |
        | If you are using Bcrypt the Admin password field also needs to be changed in order to login as admin:
        | $2y$: $2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa
        | $2a$: $2a$08$6TTcWD1CJ8pzDy.2U3mdi.tpl.nYOR1pwYXwblZdyQd9SL16B7Cqa
        |
        | Be careful how high you set max_rounds, I would do your own testing on how long it takes
        | to encrypt with x rounds.
        |
        | salt_prefix: Used for bcrypt. Versions of PHP before 5.3.7 only support "$2a$" as the salt prefix
        | Versions 5.3.7 or greater should use the default of "$2y$".
    */
    public $hash_method    = 'bcrypt';	// sha1 or bcrypt, bcrypt is STRONGLY recommended
    public $default_rounds = 8;		// This does not apply if random_rounds is set to true
    public $random_rounds  = FALSE;
    public $min_rounds     = 5;
    public $max_rounds     = 9;
    public $salt_prefix    = '$2y$';

    /*
        | -------------------------------------------------------------------------
        | Authentication options.
        | -------------------------------------------------------------------------
        | maximum_login_attempts: This maximum is not enforced by the library, but is
        | used by $this->ion_auth->is_max_login_attempts_exceeded().
        | The controller should check this function and act
        | appropriately. If this variable set to 0, there is no maximum.
    */
    public $identity  = 'email';// You can use any unique column in your table as identity column. The values in this column, alongside password, will be used for login purposes
    public $min_password_length  = 8;// Minimum Required Length of Password
    public $max_password_length  = 20;// Maximum Allowed Length of Password
    public $track_login_attempts  = TRUE;// Track the number of failed login attempts for each user or ip.
    // Track login attempts by IP Address, if FALSE will track based on identity. (Default: TRUE)
    public $maximum_login_attempts  = 5;                   // The maximum number of failed login attempts.
    /* The number of seconds to lockout an account due to exceeded attempts
         You should not use a value below 60 (1 minute) */
    public $forgotPasswordExpiration  = 24;// The number of milliseconds after which a forgot password request will expire. If set to 0, forgot password requests will not expire.
    public $authorization_code_expiration  = 24;// The number of milliseconds after which a forgot password request will expire. If set to 0, forgot password requests will not expire.
    public $sessionTimeout = 1800;
    /*
        | -------------------------------------------------------------------------
        | Salt options
        | -------------------------------------------------------------------------
        | salt_length Default: 22
        | store_salt: Should the salt be stored in the database?
        | This will change your password encryption algorithm,
        | default password, 'password', changes to
        | fbaa5e216d163a02ae630ab1a43372635dd374c0 with default salt.
    */
    public $salt_length  = 22;
    public $store_salt   = TRUE;
    /**
     * @desc 
     */
    public $store_number_of_password = 6; // How much previous password store for password history
    public $lockout_time  = 10;

    public $permitted_uri_chars = 'a-z 0-9~%.:_\-';
    public $enable_query_strings = FALSE;
    public $expire_time = 10;
    /* End of file auth.php */
    /* Location: ./app/config/auth.php */
}