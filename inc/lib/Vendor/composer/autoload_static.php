<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0c97bd9f2eeb278d17396dd6e6a9a25
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'O' => 
        array (
            'Omnipay\\PayPal\\' => 15,
        ),
        'I' => 
        array (
            'IXR\\' => 4,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Omnipay\\PayPal\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/paypal/src',
        ),
        'IXR\\' => 
        array (
            0 => __DIR__ . '/..' . '/kissifrot/php-ixr/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'O' => 
        array (
            'Omnipay\\Common\\' => 
            array (
                0 => __DIR__ . '/..' . '/omnipay/common/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'Omnipay\\Omnipay' => __DIR__ . '/..' . '/omnipay/common/src/Omnipay/Omnipay.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'RecursiveCallbackFilterIterator' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeLocalFileSystem.class.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'elFinder' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinder.class.php',
        'elFinderConnector' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderConnector.class.php',
        'elFinderLibGdBmp' => __DIR__ . '/..' . '/studio-42/elfinder/php/libs/GdBmp.php',
        'elFinderPluginAutoResize' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/AutoResize/plugin.php',
        'elFinderPluginAutoRotate' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/AutoRotate/plugin.php',
        'elFinderPluginNormalizer' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/Normalizer/plugin.php',
        'elFinderPluginSanitizer' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/Sanitizer/plugin.php',
        'elFinderPluginWatermark' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/Watermark/plugin.php',
        'elFinderSession' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderSession.php',
        'elFinderSessionInterface' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderSessionInterface.php',
        'elFinderVolumeDriver' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeDriver.class.php',
        'elFinderVolumeDropbox' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeDropbox.class.php',
        'elFinderVolumeFTP' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeFTP.class.php',
        'elFinderVolumeFlysystemGoogleDriveCache' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderFlysystemGoogleDriveNetmount.php',
        'elFinderVolumeFlysystemGoogleDriveNetmount' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderFlysystemGoogleDriveNetmount.php',
        'elFinderVolumeLocalFileSystem' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeLocalFileSystem.class.php',
        'elFinderVolumeMySQL' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeMySQL.class.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0c97bd9f2eeb278d17396dd6e6a9a25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0c97bd9f2eeb278d17396dd6e6a9a25::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb0c97bd9f2eeb278d17396dd6e6a9a25::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb0c97bd9f2eeb278d17396dd6e6a9a25::$classMap;

        }, null, ClassLoader::class);
    }
}
