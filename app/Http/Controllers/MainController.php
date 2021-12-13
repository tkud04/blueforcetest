<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Cookie;
use Validator; 
use Carbon\Carbon;
use App\User; 
use Response;
//use Codedge\Fpdf\Fpdf\Fpdf;
use PDF;

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                      
    }

	
	/**
	 * Show the application home page.
	 *
	 * @return Response
	 */
	public function getTemp(Request $request)
    {
		$user = null;
		$v = "";
		
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
        $cpt = ['user','signals','plugins'];
		$req = $request->all();
		$v = "temp";
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		return view($v,compact($cpt));
    }
	
	/**
	 * Show the application home page.
	 *
	 * @return Response
	 */
	public function getIndex(Request $request)
    {
		#$this->helpers->parseMessage(275);
		$user = null;
		$nope = false;
		$v = "";
		
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
		$categories = [];
        $cpt = ['user','categories','signals','plugins'];
		$req = $request->all();
		$v = "index";
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		return view($v,compact($cpt));
		
    }
    
    /**
	 * Show the application home page.
	 *
	 * @return Response
	 */
	public function getProfile(Request $request)
    {
		$user = null;
		$nope = false;
		$v = "";
		
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
        $cpt = ['user','signals','plugins'];
		$req = $request->all();
		
		if(Auth::check())
		{
			$user = Auth::user();
				  $v = "profile"; 
				 $appts = $this->helpers->getAppointments($user->id);
				 #dd($appts);
				 array_push($cpt,'appts');
		}
		else
		{
			return redirect()->intended('/');
		}
		
		return view($v,compact($cpt));
		
    } 
    
   	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postProfile(Request $request)
    {
        $user = null;
		$req = $request->all();

       if(Auth::check())
		{
			$user = Auth::user();
		}
		else
		{
			return redirect()->intended('/');
		}

       #dd($req);
	  
			 $validator = Validator::make($req, [
                             'fname' => 'required',
                             'lname' => 'required'                  
         ]);
         
         if($validator->fails())
         {
             session()->flash("validation-status-error","ok");
			 return redirect()->back()->withInput();
         }
         
         else
         {
             $req['xf'] = $user->id;
             $this->helpers->updateUser($req);
			 session()->flash("update-user-status","ok");
			 return  redirect()->intended('profile');		
          }	 
		 
		
    } 

/**
	 * Show the application home page.
	 *
	 * @return Response
	 */
	public function getBook(Request $request)
    {
		$user = null;
		$nope = false;
		$v = "";
		
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
        $cpt = ['user','signals','plugins'];
		$req = $request->all();
		
		if(Auth::check())
		{
			$user = Auth::user();
				  $v = "book"; 
				 
		}
		else
		{
			return redirect()->intended('/');
		}
		
		return view($v,compact($cpt));
		
    } 
    
   	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postBook(Request $request)
    {
        $user = null;
		$req = $request->all();

       if(Auth::check())
		{
			$user = Auth::user();
		}
		else
		{
			return redirect()->intended('/');
		}

       #dd($req);
	  
			 $validator = Validator::make($req, [
                             'appt_date' => 'required',
                             'hours' => 'required',                
                             'amount' => 'required'                  
         ]);
         
         if($validator->fails())
         {
             session()->flash("validation-status-error","ok");
			 return redirect()->back();
         }
         
         else
         {
             $req['user_id'] = $user->id;
             $this->helpers->createAppointment($req);
			 session()->flash("book-status","ok");
			 return  redirect()->intended('profile');		
          }	 
		 
		
    }
	
	
	  /**
	 * Show the application home page.
	 *
	 * @return Response
	 */
	public function getAppointments(Request $request)
    {
		$user = null;
		$nope = false;
		$v = "";
		
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
        $cpt = ['user','signals','plugins'];
		$req = $request->all();
		
		if(Auth::check())
		{
			$user = Auth::user();
			
			if($user->role == "admin")
			{
				$v = "appointments"; 
				 $appts = $this->helpers->getAppointments();
				 array_push($cpt,'appts');
			}
			else
		    {
			  return redirect()->intended('profile');
		    }
				  
		}
		else
		{
			return redirect()->intended('/');
		}
		
		return view($v,compact($cpt));
		
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getRemoveAppointment(Request $request)
    {
        $user = null;
		$req = $request->all();

      if(Auth::check())
		{
			$user = Auth::user();
			
			if($user->role != "admin")
			{
			  return redirect()->intended('profile');
		    }
				  
		}
		else
		{
			return redirect()->intended('/');
		}

       #dd($req);
	  
			 $validator = Validator::make($req, [
                             'xf' => 'required'               
         ]);
         
         if($validator->fails())
         {
             session()->flash("validation-status-error","ok");
			 return redirect()->back();
         }
         
         else
         {
             $this->helpers->removeAppointment($req);
			 session()->flash("remove-appt-status","ok");
			 return  redirect()->intended('appointments');		
          }	 
		 
		
    }
	
	  /**
	 * Show the application home page.
	 *
	 * @return Response
	 */
	public function getUsers(Request $request)
    {
		$user = null;
		$nope = false;
		$v = "";
		
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
        $cpt = ['user','signals','plugins'];
		$req = $request->all();
		
		if(Auth::check())
		{
			$user = Auth::user();
			
			if($user->role == "admin")
			{
				$v = "users"; 
				 $users = $this->helpers->getUsers();
				 array_push($cpt,'users');
			}
			else
		    {
			  return redirect()->intended('profile');
		    }
				  
		}
		else
		{
			return redirect()->intended('/');
		}
		
		return view($v,compact($cpt));
		
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getRemoveUser(Request $request)
    {
        $user = null;
		$req = $request->all();

      if(Auth::check())
		{
			$user = Auth::user();
			
			if($user->role != "admin")
			{
			  return redirect()->intended('profile');
		    }
				  
		}
		else
		{
			return redirect()->intended('/');
		}

       #dd($req);
	  
			 $validator = Validator::make($req, [
                             'xf' => 'required'               
         ]);
         
         if($validator->fails())
         {
             session()->flash("validation-status-error","ok");
			 return redirect()->back();
         }
         
         else
         {
             if($req['xf'] != $user->id) $this->helpers->removeUser($req);         
			 session()->flash("remove-user-status","ok");
			 return  redirect()->intended('users');		
          }	 
		 
		
    }
	
	
	
	
	
/**
	 * Switch user mode (host/guest).
	 *
	 * @return Response
	 */
	public function getTestBomb(Request $request)
    {
		$user = null;
		$messages = [];
		$ret = ['status' => "error", 'message' => "nothing happened"];
		
		if(Auth::check())
		{
			$user = Auth::user();
			$messages = $this->helpers->getMessages(['user_id' => $user->id]);
		}
		else
		{
			$ret['message'] = "auth";
		}
		
		$req = $request->all();
		
		$validator = Validator::make($req, [
                             'type' => 'required',
                             'method' => 'required',
                             'url' => 'required'
         ]);
         
         if($validator->fails())
         {
             $ret['message'] = "validation";
         }
		 else
		 {
       $rr = [
          'data' => [],
          'headers' => [],
          'url' => $req['url'],
          'method' => $req['method']
         ];
      
      $dt = [];
      
		   switch($req['type'])
		   {
		     case "bvn":
		       /**
			   $rr['data'] = [
		         'bvn' => $req['bvn'],
		         'account_number' => $req['account_number'],
		        'bank_code' => $req['bank_code'],
		         ];
		       **/  
			   //localhost:8000/tb?url=https://api.paystack.co/bank/resolve_bvn/:22181211888&method=get&type=bvn
		         $rr['headers'] = [
		           'Authorization' => "Bearer ".env("PAYSTACK_SECRET_KEY")
		           ];
		     break;
		   }
		   
			$ret = $this->helpers->bomb($rr);
			 
		 }
		 
		 dd($ret);
    }
	
	public function getTest(Request $request)
    {
		$user = null;
		$messages = [];
		$ret = ['status' => "error", 'message' => "nothing happened"];
		
		if(Auth::check())
		{
			$user = Auth::user();
			//$messages = $this->helpers->getMessages(['user_id' => $user->id]);
		}
		else
		{
			$ret['message'] = "auth";
		}
		
		$req = $request->all();
		$fm =  $this->helpers->getFmail("95");
		#dd($fm);
		 $m = json_decode($fm['message'],true);
		  //Attachments
					   $fatts = $m['attachments'];
					  
					   
					   $fatts = $m['attachments'];

					   foreach($fatts as $ff)
					   {
						   $atts = [];
						   $content = $ff['content'];
						   $atts['message_id'] = "1935";
						   $atts['cid'] = $ff['cid'];
						   $atts['ctype'] = $ff['contentType'];
						   $atts['filename'] = $ff['filename'];
						   //$ret = $this->helpers->uploadCloudImage($content['data']);
						   $atts['content'] = json_encode($content['data']);
						   $atts['checksum'] = $ff['checksum'];
						   $atts['size'] = $ff['size'];
						   $this->helpers->createAttachment($atts);
					   }
		 
		 
    }
	
	
	

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "97916613";
    	return $ret;
    }
	
	

	
}
