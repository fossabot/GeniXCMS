<?php
namespace IXR\DataType;

/**
 * IXR_Base64
 *
 * @package IXR
 * @since 1.5.0
 */
class Base64
{
    private $data;

    function __construct($data)
    {
        $this->data = $data;
    }

    function getXml()
    {
        return '<base64>' . base64_encode($this->data) . '</base64>';
    }
}
