<?php
/**
 * Created by PhpStorm.
 * User: daniyuu
 * Date: 2014/11/28
 * Time: 16:29
 */

class Blog extends CI_Controller{

    function Blog(){

    }

    function index(){
        $data['title'] = "My blog title";
        $data['heading'] = "My blog heading";
        $data['todo'] = array("1","2","3","test");
        $this->load->view('blog_view',$data);
    }
} 