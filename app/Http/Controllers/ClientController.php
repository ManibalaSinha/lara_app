<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//add the model with
use App\Title as Title;

class ClientController extends Controller
{
    //create constructor with
    public function __construct(Title $titles)
    {
    	$this->titles = $titles->all();
    }
    public function di()
    {
    	dd($this->titles);
    }
    public function index()
    {
        //defined array data
        $data = [];

        $obj = new \stdClass;
        $obj->id = 1;
        $obj->title = 'mr';
        $obj->name = 'john';
        $obj->last_name = 'doe';
        $obj->email = 'john@domain.com';
        //add 1st data to array
        $data['clients'][] = $obj;

        $obj = new \stdClass;
        $obj->id = 2;
        $obj->title = 'ms';
        $obj->name = 'jane';
        $obj->last_name = 'doe';
        $obj->email = 'jane@another-domain.com';
        $data['clients'][] = $obj;

        //name of folder client & name of method index
    	return view('client/index', $data);
    }
    //using dependency injection by passing request variable to method
    public function newClient( Request $request )
    {
        $data = [];
        //catch our data
        $data['title'] = $request->input('title');
        //same for every input on the form
        $data['name'] = $request->input('name');
        $data['last_name'] = $request->input('last_name');
        $data['address'] = $request->input('address');
        $data['zip_code'] = $request->input('zip_code');
        $data['city'] = $request->input('city');
        $data['state'] = $request->input('state');
        $data['email'] = $request->input('email');

        $data['titles'] = $this->titles;
        //add new index
        $data['modify'] = 0;
        //folder client & method newClient
    	return view('client/form', $data);
    }
    public function create()
    {
        // folder client & method create
    	return view('client/create');
    }
    public function show($client_id)
    {
    	$data = [];
        $data['titles'] = $this->titles;
        //add new index
        $data['modify'] = 1;
        //folder client & method newClient
        return view('client/form', $data);
    }
}
