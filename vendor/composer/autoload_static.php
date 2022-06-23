<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb21e59bdf6e67eefb9d3a8c8b6bff8b9
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
        'Jurosh\\PDFMerge\\PDFMerger' => __DIR__ . '/..' . '/jurosh/pdf-merge/src/Jurosh/PDFMerge/PDFMerger.php',
        'Jurosh\\PDFMerge\\PdfObject' => __DIR__ . '/..' . '/jurosh/pdf-merge/src/Jurosh/PDFMerge/PDFObject.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb21e59bdf6e67eefb9d3a8c8b6bff8b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb21e59bdf6e67eefb9d3a8c8b6bff8b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb21e59bdf6e67eefb9d3a8c8b6bff8b9::$classMap;

        }, null, ClassLoader::class);
    }
}
