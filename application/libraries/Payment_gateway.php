<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment
{
    public function __construct()
    {
        require_once APPPATH.'third_party/moip/autoload.inc.php';
    }
}