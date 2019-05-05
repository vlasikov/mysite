<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
//для версии 5.2 и ранее:
//use DB;
use App\Http\Controllers\Controller;


class AjaxController extends Controller {

  public function post(Request $request){
     $response = array(
          'status' => 'success',
          'msg' => $request->message,
      );
      return response()->json($response); 
  }



  public function read(Request $request){

     $response = array(
          'status' => 'success',
          'msg' => '<p  style="">ответ от аякс пришел<p><br><br>',
      );
      return response()->json($response); 
  }

  public function index(Request $request)
  {
    $users = DB::table('guests')->get();
    return response()->json($users); 
  }

  public function getWeather(Request $request)
  {
    $weather = DB::table('pressure')->get();
    return response()->json($weather); 
  }

  public function dbpuship(Request $request)
  {
    $users = DB::table('guests')->get();
    DB::table('guests')->insert(
      ['timestamp' => $request->timestamp, 'ip' => $request->ip]
    );
    return 1;
  }

}
