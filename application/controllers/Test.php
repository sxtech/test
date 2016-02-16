<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * test
 *
 * This is a document
 *
 * @package		CodeIgniter
 * @subpackage	Cgs Rest Server
 * @category	Controller
 * @author		Fire
*/


class Test extends CI_Controller
{
	public function __construct()
    {
        // Construct our parent class
        parent::__construct();
        
        $this->load->helper('url');

        $this->load->config('myconfig');
    }
    
    /**
     * decument index
     * 
     * @return void
     */
    public function test()
    {
        $this->load->view('test');
    }

    /**
     * decument index
     * 
     * @return void
     */
    public function test2()
    {
        #echo '123';
        $this->load->view('test2');
    }

    public function test3()
    {
        $this->load->view('test3');
    }


}