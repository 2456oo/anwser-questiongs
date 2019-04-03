<?php
namespace app\teacher\controller;

use think\Controller;
use think\Cookie;
use think\Request;

class Index extends Controller
{
  public function index()
  {
    if(Cookie::has('tname')){
      $name = cookie('tname');
      return view('index_login')->assign('name',$name);
    }else
    return view();
  }


}
