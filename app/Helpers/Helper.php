<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Appointments;
use App\Plugins;
use App\Socials;
use \Swift_Mailer;
use \Swift_SmtpTransport;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Mobile_Detect;


class Helper implements HelperContract
{

 //public $md = new Mobile_Detect();
 
 public $signals = ['okays'=> [
                     //SUCCESS NOTIFICATIONS
					 "login-status" => "Welcome back!",            
                     "update-user-status" => "User profile updated.",
                     "remove-user-status" => "User profile removed.",
                     "book-status" => "Appointment booked!",
                     "update-appt-status" => "Appointment info updated!",
                     "remove-appt-status" => "Appointment removed.",
					 "update-plugin-status" => "Plugin updated.",
					 "remove-plugin-status" => "Plugin removed.",
	                                 "add-sender-status" => "Sender added",
                                         "remove-sender-status" => "Sender removed",
                                         "mark-sender-status" => "Sender updated",
					 
					 //ERROR NOTIFICATIONS
					 "invalid-user-status-error" => "User not found.",
					 "oauth-status-error" => "Social login failed, please try again.",
					 "login-auth-status-error" => "Your login/password was not correct.",
					 "validation-status-error" => "Please fill all required fields.",
					 "rp-invalid-token-status-error" => "The code is invalid or has expired.",
					 "network-status-error" => "Network error occured, please check your Internet connection and try again.",
					 "book-status-error" => "An error occured trying to book your appointment.",
                     "update-appt-status-error" => "An error occured trying to update appointment info.",
                     "remove-appt-status-error" => "An error occured trying to remove appointment info."
					 ]
                     
                   ];

           
		   #{'msg':msg,'em':em,'subject':subject,'link':link,'sn':senderName,'se':senderEmail,'ss':SMTPServer,'sp':SMTPPort,'su':SMTPUser,'spp':SMTPPass,'sa':SMTPAuth};
           function sendEmailSMTP($data,$view,$type="view")
           {
           	    // Setup a new SmtpTransport instance for new SMTP
                $transport = "";
if($data['sec'] != "none") $transport = new Swift_SmtpTransport($data['ss'], $data['sp'], $data['sec']);

else $transport = new Swift_SmtpTransport($data['ss'], $data['sp']);

   if($data['sa'] != "no"){
                  $transport->setUsername($data['su']);
                  $transport->setPassword($data['spp']);
     }
// Assign a new SmtpTransport to SwiftMailer
$smtp = new Swift_Mailer($transport);

// Assign it to the Laravel Mailer
Mail::setSwiftMailer($smtp);

$se = $data['se'];
$sn = $data['sn'];
$to = $data['em'];
$subject = $data['subject'];
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($to,$subject,$se,$sn){
                           $message->from($se,$sn);
                           $message->to($to);
                           $message->subject($subject);
                          if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
						  $message->getSwiftMessage()
						  ->getHeaders()
						  ->addTextHeader('x-mailgun-native-send', 'true');
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject,$se,$sn){
                            $message->from($se,$sn);
                           $message->to($to);
                           $message->subject($subject);
                           if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }
           }

           function bomb($data) 
           {
             $url = $data['url'];
               
			       $client = new Client([
                 // Base URI is used with relative requests
                 'base_uri' => 'https://mail.aceluxurystore.com',
                 // You can set any number of default request options.
                 //'timeout'  => 2.0,
				 'headers' => isset($data['headers']) && count($data['headers']) > 0 ? $data['headers'] : []
                 ]);
                  
				 
				 $dt = [
				    
				 ];
				 
				 if(isset($data['auth']))
				 {
					 $dt['auth'] = $data['auth'];
				 }
				 if(isset($data['data']))
				 {
					if(isset($data['type']) && $data['type'] == "raw")
					{
					  $dt['body'] = $data['data'];
					}
					else
					{
					  $dt['multipart'] = [];
					  foreach($data['data'] as $k => $v)
				      {
					    $temp = [
					      'name' => $k,
						  'contents' => $v
					     ];
						 
					     array_push($dt['multipart'],$temp);
				      }
					  
					   if(isset($data['atts']))
					   {
						   foreach($data['atts'] as $a)
						   {
							   $n = $a['name']; $r = $a['content']; 
							   $temp = [
					              'name' => 'attachment',
								  'filename' => $n,
						          'contents' => Psr7\Utils::tryFopen($r, 'r')
					           ];
						 
					           array_push($dt['multipart'],$temp);
						   }
					   }
					}
				   
				 }

				 
				 try
				 {
					# dd($dt);
					$res = $client->request(strtoupper($data['method']),$url,$dt);
					$ret = $res->getBody()->getContents(); 
			       //dd($ret);

				 }
				 catch(RequestException $e)
				 {
					#dd($e);
					# $mm = (is_null($e->getResponse())) ? null: Psr7\str($e->getResponse());
					 $mm = (is_null($e->getResponse())) ? null: $e->getResponse();
					 $ret = json_encode(["status" => "error","message" => $mm]);
				 }
			     $rett = json_decode($ret);
           return $ret; 
           }
		   
		   
		
		   
		   
           function createUser($data)
           {
			   $pass = (isset($data['pass']) && $data['pass'] != "") ? bcrypt($data['pass']) : "";
			   
           	   $ret = User::create(['fname' => $data['fname'], 
                                                      'lname' => $data['lname'], 
                                                      'username' => $data['username'], 
                                                      'role' => $data['role'], 
                                                      'status' => $data['status'], 
                                                      'password' => $pass, 
                                                      ]);
                                                      
                return $ret;
           }
		
   function getUsers()
   {
	   $ret = [];
	   
	   $users = User::where('id','>',"0")->get();
	   $users = $users->sortByDesc('created_at');
	   
	   if(!is_null($users))
	   {
		   foreach($users as $u)
		   {
				$temp = $this->getUser($u->id);
		        array_push($ret,$temp); 
	       }
	   }
	   
	   return $ret;
   }
   
		   
		   function getUser($id)
           {
           	$ret = [];
			if($id == "adminn" || $id == "suu")
			{
			  if($id == "adminn")
			  {
				  $ret = $this->admin;
			  }
			  else if($id == "suu")
			  {
				  $ret = $this->su;
			  }
			  
			  $ret['avatar'] = "";
			}
			else
			{
				$u = User::where('username',$id)
			            ->orWhere('id',$id)->first();
              
              if($u != null)
               {
                   	$temp['fname'] = $u->fname; 
                       $temp['lname'] = $u->lname; 
                       //$temp['wallet'] = $this->getWallet($u);
                       $temp['username'] = $u->username; 
                       $temp['role'] = $u->role; 
                       $temp['status'] = $u->status;
					  $temp['id'] = $u->id; 
                       $temp['date'] = $u->created_at->format("jS F, Y"); 
                       $temp['updated'] = $u->updated_at->format("jS F, Y h:i A"); 
                       $ret = $temp; 
               }
			}                                      
            
			return $ret;
           }
		   
		   function updateUser($data)
           {  
              $ret = 'error'; 
         
              if(isset($data['xf']))
               {
               	$u = User::where('id', $data['xf'])->first();
                   
                        if($u != null)
                        {
							$up = [];
							if(isset($data['fname'])) $up['fname'] = $data['fname'];
							if(isset($data['lname'])) $up['lname'] = $data['lname'];
							
                        	$u->update($up);
						                   
                                           $ret = "ok";
                        }                                    
               }                                 
                  return $ret;                               
           }
		   
		   function removeUser($data)
           {  
              $ret = 'error'; 
         
              if(isset($data['xf']))
               {
               	$u = User::where('id', $data['xf'])->first();
                   
                        if($u != null)
                        {
							$u->delete();
						    $ret = "ok";
                        }                                    
               }                                 
                  return $ret;                               
           }



function isDuplicateUser($data)
	{
		$ret = false;

		$dup = User::where('username',$data['username'])->get();

       if(count($dup) > 0) $ret = true;		
		return $ret;
	}
	
	function isValidUser($data)
	{
		$ret = false;
        $email = isset($data['email']) ? $data['email'] : "none";
        $phone = isset($data['phone']) ? $data['phone'] : "none";
		
		$dup = User::where('email',$email)
		           ->orWhere('phone',$phone)->get();

       if(count($dup) == 1) $ret = true;		
		return $ret;
	}

	function isOAuthSP($em)
	{
		$ret = false;
		
		$u = User::where('email',$em)->first();

       if($u->password == "") $ret = true;		
		return $ret;
	}
	
	function getPasswordResetCode($user)
           {
           	$u = $user; 
               
               if($u != null)
               {
               	//We have the user, create the code
                   $code = bcrypt(rand(125,999999)."rst".$u->id);
               	$u->update(['reset_code' => $code]);
               }
               
               return $code; 
           }
           
           function verifyPasswordResetCode($code)
           {
           	$u = User::where('reset_code',$code)->first();
               
               if($u != null)
               {
               	//We have the user, delete the code
               	$u->update(['reset_code' => '']);
               }
               
               return $u; 
           }
	
	
	 function getSender($id)
           {
           	$ret = [];
               $s = Senders::where('id',$id)->first();
 
              if($s != null)
               {
                   	$temp['ss'] = $s->ss; 
                       $temp['sp'] = $s->sp; 
                       $temp['se'] = $s->se;
                       $temp['sec'] = $s->sec; 
                       $temp['sa'] = $s->sa; 
                       $temp['su'] = $s->su; 
                       $temp['current'] = $s->current; 
                       $temp['spp'] = $s->spp; 
					   $temp['type'] = $s->type;
                       $sn = $s->sn;
                       $temp['sn'] = $sn;
                        $snn = explode(" ",$sn);					   
                       $temp['snf'] = $snn[0]; 
                       $temp['snl'] = count($snn) > 0 ? $snn[1] : ""; 
					   
                       $temp['status'] = $s->status; 
                       $temp['id'] = $s->id; 
                       $temp['date'] = $s->created_at->format("jS F, Y"); 
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }
		   
		    function getCurrentSender()
		   {
			   $ret = [];
			   $s = Senders::where('current',"yes")->first();
			   
			   if($s != null)
			   {
				   $ret = $this->getSender($s['id']);
			   }
			   
			   return $ret;
		   }
		   
		   function createPlugin($data)
           {
			   #dd($data);
			 $ret = null;
			 
			 
				 $ret = Plugins::create(['name' => $data['name'], 
                                                      'value' => $data['value'], 
                                                      'status' => $data['status'], 
                                                      ]);
			  return $ret;
           }
		   
		    function getPlugins()
   {
	   $ret = [];
	   
	   $plugins = Plugins::where('id','>',"0")->get();
	   
	   if(!is_null($plugins))
	   {
		   foreach($plugins as $p)
		   {
			 
				$temp = $this->getPlugin($p->id);
		        array_push($ret,$temp); 
			 
	       }
	   }
	   
	   return $ret;
   }
   
   function getPlugin($id)
           {
           	$ret = [];
               $p = Plugins::where('id',$id)->first();
 
              if($p != null)
               {
                   	$temp['name'] = $p->name; 
                       $temp['value'] = $p->value; 	   
                       $temp['status'] = $p->status; 
                       $temp['id'] = $p->id; 
                       $temp['date'] = $p->created_at->format("jS F, Y"); 
                       $temp['updated'] = $p->updated_at->format("jS F, Y"); 
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }
		   
		    function updatePlugin($data,$user=null)
           {
			   #dd($data);
			 $ret = "error";
			  $p = Plugins::where('id',$data['xf'])->first();
			 
			 
			 if(!is_null($p))
			 {
				 $p->update(['name' => $data['name'], 
                                                      'value' => $data['value'], 
                                                      'status' => $data['status']
                                                      ]);
			   $ret = "ok";
			 }
           	
                                                      
                return $ret;
           }

		   function removePlugin($xf,$user=null)
           {
			   #dd($data);
			 $ret = "error";
			 $p = Plugins::where('id',$xf)->first();

			 
			 if(!is_null($p))
			 {
				 $p->delete();
			   $ret = "ok";
			 }
           
           }
		   
		    function isAdmin($user)
           {
           	$ret = false; 
               if($user->role === "admin" || $user->role === "su") $ret = true; 
           	return $ret;
           }
		   



function createSocial($data)
           {
			   $token = isset($data['token']) ? $data['token'] : "";
			   $ret = Socials::create(['name' => $data['name'], 
                                                      'email' => $data['email'],
                                                      'token' => $token,
                                                      'type' => $data['type']
                                                      ]);
                                                      
                return $ret;
           }
		   
		   function getSocials($em)
           {
           	$ret = [];
              $socials = Socials::where('email',$em)->get();
              $socials = $socials->sortByDesc('created_at');	
			  
              if($socials != null)
               {
				  foreach($socials as $s)
				  {
					  $temp = $this->getSocial($s->id);
					  array_push($ret,$temp);
				  }
               }                         
                                  
                return $ret;
           }
		   
		   function getSocial($id)
           {
           	$ret = [];
              $s = Socials::where('id',$id)
			                 ->orWhere('email',$id)->first();
 
              if($s != null)
               {
				  $temp = [];
				  $temp['id'] = $s->id;
				  $temp['name'] = $s->name;
				  $temp['token'] = $s->token;
     			  $temp['email'] = $s->email;
     			  $temp['type'] = $s->type;
				  $temp['date'] = $s->created_at->format("jS F, Y");
				  $ret = $temp;
               }                         
                                                      
                return $ret;
           }
		   
		   
		   function oauth($dt)
		   {
			   #dd($dt);
			   /**
^ array:5 [▼
  "name" => "Tobi Kudayisi"
  "type" => "google"
  "email" => "kudayisitobi@gmail.com"
  "img" => "https://lh5.googleusercontent.com/-4mnp7uOSAcQ/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnPGlNuP-mD3NeQ2yJaa3I_OzCrzQ/photo.jpg"
  "token" => "ya29.a0AfH6SMCXQrY-b4cp1DDLepffsJKBg7tHsoGTuDuXCGguKJ-IAuK3ZGCu2bSJ3MByO2H4YQmLDJ1T2z2QC5JiyZkASGWN_xc1gI4UBv9TOu4S15w5r4XdusffD_xKdo8P-BCvzX0Ti5pa4zTVUl3YDcZvw ▶"
]
			   **/
			    $ret = ['status' => "error",
					           'message' => "oauth"
							  ];
							  
			   if($dt != null && count($dt) > 0)
			   {
				    $s = [
					          'name' => $dt['name'],
					          'email' => $dt['email'],
					          'type' => $dt['type'],
					          'token' => $dt['token']
					        ];
							
				   //check if user exists in db
				   $userExists = $this->isValidUser($dt);
				   $social =  Socials::where('email',$dt['email'])
				                           ->where('type',$dt['type'])->first();
				   if($userExists)
				   {
					   //user exists. Log user in
					   $u = User::where('email',$dt['email'])->first();
					   if($u->password == "")
					   {
						   //User signed up via social and has not set password
						  
                            $ret = [
							   'status' => "ok",
					           'message' => "existing-user-no-pass",
							   'user' => $u
							  ];
					   }
					   else
					   {
						  //User exists and has password. Sign user in 
						  Auth::login($u);
					      $ret = [
						          'status' => "ok",
					              'message' => "existing-user"
							     ]; 
							     
							        //update avatar 
					  if($u->avatar == "") $u->update(['avatar' => $dt['img'],'avatar_type' => "social"]);
					   }
				   }
				   else
				   {
					   //user does not exist. create new user
                       $nn = explode(" ",$dt['name']);
                       $dt['fname'] = $nn[0];
                       $dt['lname'] = $nn[1];
                       $dt['phone'] = "";
                       $dt['pass'] = "";
                       $dt['role'] = "user";    
                       $dt['status'] = "enabled";           
                       $dt['mode'] = "guest";           
                       $dt['currency'] = "ngn";           
                       $dt['verified'] = "yes";
					  
                       $uu = $this->createUser($dt);
                       
					   //set avatar 
					  if($uu->avatar == "") $uu->update(['avatar' => $dt['img'],'avatar_type' => "social"]);
					  
                       //set password for new user
                       $ret = ['status' => "ok",
					           'message' => "new-user",
							   'user' => $uu
							  ];
						
				   }
				   
				   //save social profile
                   if($social == null) $s = $this->createSocial($s);
			   }
			   
			   return $ret;
		   }
		   
		   
		
		   
		   function createAppointment($dt)
		   {
			    $ret = Appointments::create([
				   'user_id' => $dt['user_id'],
				   'appt_date' => $dt['appt_date'],
				   'amount' => $dt['amount'],
				   'status' => "confirmed"
				]);
				return $ret;
		   }
		   
		   function getAppointments($mid="all")
           {
           	$ret = [];
			  $atts = null;
			  if($mid == "all") $atts = Appointments::where('id','>',0)->get();
			  else $atts = Appointments::where('user_id',$mid)->get();
			  
              if($atts != null)
               {
				   $atts = $atts->sortByDesc('created_at');	
			  
				  foreach($atts as $a)
				  {
					  $temp = $this->getAppointment($a->id,$mid);
					  array_push($ret,$temp);
				  }
               }                         
                                  
                return $ret;
           }
		   
		   function getAppointment($id,$mid)
		   {
			   $ret = [];
			   $a = Appointments::where('id',$id)->first();
			  # dd($a);
			  
			  if($a != null)
               {
				  $temp = [];
				  $temp['id'] = $a->id;
				  if($mid == "all") $temp['user'] = $this->getUser($a->user_id);
				  else $temp['user_id'] = $a->user_id;
				  $temp['appt_date'] = Carbon::parse($a->appt_date)->format("m/d/Y h:i A");
				  $temp['amount'] = $a->amount;
				  $temp['status'] = $a->status;
     			  $temp['date'] = $a->created_at->format("m/d/Y h:i A");
				  $ret = $temp;
               }

               return $ret;			   
		   }

		   function updateAppointment($dt)
		   {
			   $ret = "error";
			   $a = Appointments::where('id',$dt['xf'])->first();
			  # dd($a);
			 
			   
			   if($a != null)
               {
				  $temp = [];
				  if(isset($dt['appt_date'])) $temp['appt_date'] = $dt['appt_date'];
				  if(isset($dt['amount'])) $temp['amount'] = $dt['amount'];
				  if(isset($dt['status'])) $temp['status'] = $dt['status'];
				  
				  $a->update($temp);
				  $ret = "ok";
               }

               return $ret;			   
		   }

		   function removeAppointment($dt)
		   {
			   $ret = "error";
			   $a = Appointments::where('id',$dt['xf'])->first();
			  # dd($a);
			 
			   
			   if($a != null)
               {
				  $a->delete();
				  $ret = "ok";
               }

               return $ret;			   
		   }
		   
		   
		   
	
	function createSender($data)
           {
			   #dd($data);
			 $ret = null;
			 
			 
				 $ret = Senders::create(['ss' => $data['ss'], 
                                                      'type' => $data['type'], 
                                                      'sp' => $data['sp'], 
                                                      'sec' => $data['sec'], 
                                                      'sa' => $data['sa'], 
                                                      'su' => $data['su'], 
                                                      'current' => $data['current'], 
                                                      'spp' => $data['spp'], 
                                                      'sn' => $data['sn'], 
                                                      'se' => $data['se'], 
                                                      'status' => "enabled", 
                                                      ]);
			  return $ret;
           }

   function getSenders()
   {
	   $ret = [];
	   
	   $senders = Senders::where('id','>',"0")->get();
	   
	   if(!is_null($senders))
	   {
		   foreach($senders as $s)
		   {
		     $temp = $this->getSender($s->id);
		     array_push($ret,$temp);
	       }
	   }
	   
	   return $ret;
   }
   
  
		   
		   
		  function updateSender($data,$user=null)
           {
			   #dd($data);
			 $ret = "error";
			 if($user == null)
			 {
				 $s = Senders::where('id',$data['xf'])->first();
			 }
			 else
			 {
				$s = Senders::where('id',$data['xf'])
			             ->where('user_id',$user->id)->first(); 
			 }
			 
			 
			 if(!is_null($s))
			 {
				 $s->update(['ss' => $data['ss'], 
                                                      'type' => $data['type'], 
                                                      'sp' => $data['sp'], 
                                                      'sec' => $data['sec'], 
                                                      'sa' => $data['sa'], 
                                                      'su' => $data['su'], 
                                                      'spp' => $data['spp'], 
                                                      'sn' => $data['sn'], 
                                                      'se' => $data['se'], 
                                                      'status' => "enabled", 
                                                      ]);
			   $ret = "ok";
			 }
           	
                                                      
                return $ret;
           }

		   function removeSender($xf,$user=null)
           {
			   #dd($data);
			 $ret = "error";
			 if($user == null)
			 {
				 $s = Senders::where('id',$xf)->first();
			 }
			 else
			 {
				$s = Senders::where('id',$xf)
			             ->where('user_id',$user->id)->first(); 
			 }
			 
			 
			 if(!is_null($s))
			 {
				 $s->delete();
			   $ret = "ok";
			 }
           
           }
		   
		   function setAsCurrentSender($id)
		   {
			   $s = Senders::where('id',$id)->first();
			   
			   if($s != null)
			   {
				   $prev = Senders::where('current',"yes")->first();
				   if($prev != null) $prev->update(['current' => "no"]);
				   $s->update(['current' => "yes"]);
			   }
		   }
		   
		   
	   
		
	
		
		function clean($str)
		{
			// Strip HTML Tags
			$clear = strip_tags($str);
			// Clean up things like &amp;
			$clear = html_entity_decode($clear);
			// Strip out any url-encoded stuff
			$clear = urldecode($clear);
			// Replace non-AlNum characters with space
			$clear = preg_replace('/[^A-Za-z0-9]/', ' ', $clear);
			// Replace Multiple spaces with single space
			$clear = preg_replace('/ +/', ' ', $clear);
			// Trim the string of leading/trailing space
			$clear = trim($clear);
			
			return $clear;
		}

}
?>
