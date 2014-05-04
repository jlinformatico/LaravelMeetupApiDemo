<?php


class ApiController extends \BaseController 
{

	 protected function response($data, $code = 200) {

	    $data['response']['code'] = $code;

        return Response::json($data, $code)->setcallback(Input::get('callback'));
	  }

}