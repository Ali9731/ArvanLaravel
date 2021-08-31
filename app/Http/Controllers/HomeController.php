<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Psr7;
class HomeController extends Controller
{
    public function Register(Request $request)
    {
      //  var_dump($request->file('resume')->getClientOriginalName());
        $post_data = "{rows:[{cells:[ {'column': 'name', 'value':'".$request['name']."'},{'column': 'phone', 'value':'".$request['phone']."'},{'column': 'mail', 'value': '".$request['email']."'},{'column': 'company', 'value': '".$request['company']."'},{'column': 'resume', 'value': '".$request['resume']."'},{'column': 'portfolio', 'value': '".$request['portfolio']."'},{'column': 'type', 'value': '".$request['type']."'},{'column': 'level', 'value':'".$request['level']."'},{'column': 'description', 'value': '".$request['description']."'}]}]})";
        $post_data = json_encode($post_data);



        echo $post_data;
     //   $client = new GuzzleHttp\Client();
   /*     $response = $client->request('POST', 'https://coda.io/apis/v1/docs/4p8T6nIqok/tables/ArvanTest/rows', [
            'headers'=>[ 'Content-type' =>'application/json' ],
            'multipart' => [
                [
                    'name'     => 'field_name',
                    'contents' => 'abc'
                ],
                [
                    'name'     => 'file_name',
                    'contents' => Psr7\Utils::tryFopen('/path/to/file', 'r')
                ],
                [
                    'name'     => 'other_file',
                    'contents' => 'hello',
                    'filename' => 'filename.txt',
                    'headers'  => [
                        'X-Foo' => 'this is an extra header to include'
                    ]
                ]
            ]
        ]);*/
      //  return view('welcome');
    }
}
