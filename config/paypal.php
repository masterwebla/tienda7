<?php
return array(
    // set your paypal credential
    'client_id' => 'AQV9UXsbJfp2kIyLA_oYuV_ImsqGpvo7V3OCIwir88IM2pSedIlnaApqLqVLgYoE9ffNgY9gUhYRdmZg',
    'secret' => 'EAzT8TPAlssOCFrIuB2UUiIEsvN3s72nB2XFlPZ3MhwikhdbqPwqJoxg_6kim0jbAz1Kl4R5Gx08eKKc',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);