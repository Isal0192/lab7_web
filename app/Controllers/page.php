<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class page extends BaseController
{
    public function about()
    {
        echo "Hello World, from about";
    }
    public function contact()
    {
        echo "Hello World, from contact";
    }
    public function faq()
    {
        echo "Hello World, from faq";
    }
    public function tos()
    {
        echo "Hello World, from tos";
    }
}