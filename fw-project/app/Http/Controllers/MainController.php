<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

class MainController extends Controller
{
    //

    function __construct(){
    }

    public function Home(){
    	$value = session('user');
    	if ($value){
    		$data = [];
    		$mydata = storage_path('data/user.txt');
		        if ($fh = fopen($mydata, 'r')) {
		          while (!feof($fh)) {
		              $line = fgets($fh);
		              $content  = explode("|", $line);

		              if ($content[0] == session('user')) {
		                $data = $content;
		              }
		          }
		          fclose($fh);
		        }
            return view('home', ['data' => $data]);
        } else {
            return view('login');
        }
    }

    public function Navigasi(Request $request){
    	$username = $request->input('username');
    	$password = $request->input('password');
    	$login = FALSE;
    	$data = [];
    	if($request->input('signin')){
    		$mydata = storage_path('data/user.txt');
    		if ($fh = fopen($mydata, 'r')) {
				while (!feof($fh)) {
				  $line = fgets($fh);
				  $content  = explode("|", $line);
				  $content[3] = str_replace("\r\n", "", $content[3]);
				  if ($content[0] == $username && $content[3] == $password) {
				    session(['user' => $content[0]]);
				    $data = $content;
				    $login = TRUE;
				  }
				}
				fclose($fh);
    		}
    	} elseif ($request->input('register')) {
    		return view('register');
    	}

    	if ($login) {
        	return view('home', ['data' => $data]);
      	} else {
      		return view('login');
      	}
    }

    public function Registrasi(Request $request){
    	$username = $request->input('username');
		$nama = $request->input('nama');
		$email = $request->input('email');
		$password1 = $request->input('password1');
		$password2 = $request->input('password2');

		$validator = Validator::make($request->all(), [
            'username' => 'required|min:4',
		    'nama' => 'required',
		    'email' => 'required|email',
		    'password' => 'required',
		    'password_confirmation' => 'required|same:password',
        ]);

		if ($validator->fails()) {
            return redirect('reg')
            	->withErrors($validator)
                ->withInput();
        } else {
        	$mydata = storage_path('data/user.txt');
			if ($fh = fopen($mydata, 'a')) {
			  $input = "\r\n" .$username. "|" .$nama. "|" .$email. "|" .$password2;
			  fwrite($fh, $input);
			}
			return redirect('/')->with('alert', 'Berhasil! Silahkan login menggunakan akun anda.');
        }
    }
}
