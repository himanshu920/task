<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
class RegisterController extends Controller
{
    public function register(Request $request) {
    	if($request->isMethod('post')) {
    			$this->validate($request,[
    				'username' => 'required',
    			]);
    			$gitResponse = $this->getGitData($request->username);

    			if(!empty($gitResponse)) {
    				$checkUserName = User::where('username','=', $gitResponse['login'])->first('id');
    				if(empty($checkUserName)) {
    					$password = substr(time(),7,15).uniqId();
    					$userTabe 						= new User();
		    			$userTabe->git_id 		= $gitResponse['id'];
		    			$userTabe->username 	= $gitResponse['login'];
		    			$userTabe->password 	= Hash::make($password);
		    			$userTabe->avatar_url = $gitResponse['avatar_url'];
		    			$userTabe->fullname 	= $gitResponse['name'];
		    			$userTabe->bio 				= $gitResponse['bio'];
		    			if($userTabe->save()) {
		    				$storePath = public_path('git_response/').$gitResponse['login'].'.json';
		    				$file = fopen($storePath,'w');
		    				fwrite($file,json_encode($gitResponse),400);
		    				fclose($file);

		    			}
		    			return redirect()->back()->with('message','Thanks for register here. You generated password is: '.$password);
    				} else {
    				 	return redirect()->back()->with('message','User already exist please try another one.');
    				}
	    			
    			} else {
    				return redirect()->back()->with('message','Record not found');
    			}
    		
    	} else {

    		return view('register');
    	}
    }


    	


    public function users(Request $request) {
    	$year = $request->year;
    		$users = User::with(['userlist' => function($query) use($year) {
    			$query->where('year','=',$year);
    		}])
    	->get();
    			if(!empty($users)) {
    				return view('userlist',['data' => $users]);
    			} else {
    				return redirect()->back()->with('message','Record not found');
    			}
    		
    	
    }



    public function getGitData($username=null) {
    		if(!empty($username)){
    			$url 	= 'https://api.github.com/users/'.$username;
					$curl = curl_init();
					curl_setopt_array($curl, [
					    CURLOPT_RETURNTRANSFER => 1,
					    CURLOPT_URL => $url,
					    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
					]);
					$response = curl_exec($curl);
					curl_close($curl);
					return json_decode($response,true);
    		}
    }
}
