<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Global Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'login' => [
        'title'   => '登入',
        'content' => [
            'email'       => '電子郵件',
            'password'    => '密碼',
            'remember_me' => '記住我',
        ],
    ],
    'confirm_password' => [
        'title'     => '確認密碼',
        'statement' => '請先確認您的密碼，然後再繼續。',
        'content'   => [
            'password' => '密碼',
        ],
    ],
    'forgot_your_password' => [
        'title'     => '忘記您的密碼？',
    ],
    'logout' => [
        'title' => '登出',
    ],
    'register' => [
        'title'   => '註冊',
        'content' => [
            'confirm_password'   => '確認密碼',
            'email'              => '電子郵件',
            'name'               => '姓名',
            'password'           => '密碼',
        ],
    ],
    'reset_password' => [
        'title'   => '重設密碼',
        'content' => [
            'confirm_password'         => '確認密碼',
            'email'                    => '電子郵件',
            'password'                 => '密碼',
            'send_password_reset_link' => '發送密碼重設連結',
        ],
    ],
    'verify_email' => [
        'title'     => '確認您的電子郵件地址',
        'content' => [
            'a_new_verification_link'          => '新的驗證連結已發送到您在註冊過程中提供的電子郵件地址。',
            'before_proceeding'                => '在繼續之前，請檢查您的電子郵件以取得驗證連結。',
            'click_here_to_request_another'    => '點擊此處請求另外一個',
            'if_you_did_not_receive_the_email' => '如果您沒有收到電子郵件，',
        ],
    ],
];
