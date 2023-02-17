<?php 
class Custom404 extends CI_Controller 
{
 public function __construct() 
 {
    parent::__construct(); 
 } 

 public function index() 
 { 
    $this->load->view('errors/custom404');//loading in custom error view
 } 
} 