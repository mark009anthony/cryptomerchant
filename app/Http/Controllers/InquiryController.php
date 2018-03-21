<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Swift_Mailer;
use Swift_Transport;
use Swift_Message;

class InquiryController extends Controller
{
    public function send(){

		
		$name      =  $_POST['name'];
		$email     =  $_POST['email'];
		$subject   =  $_POST['subject'];
		$message   =  $_POST['message'];

		
		$data_toview = array();
		$data_toview['name'] = $name;
		$data_toview['email'] = $email;
		$data_toview['subject'] = $subject;
    	$data_toview['bodymessage'] = $message;
    	

    	
		$backup = \Mail::getSwiftMailer();

		try{

			$transport = new \Swift_SmtpTransport('smtp.gmail.com','587','tls');
			$transport->setUsername('anton09antipov26@gmail.com');
			$transport->setPassword('pbmeeqwxmpbbowni');

			$mailer = new Swift_Mailer($transport);

			\Mail::setSwiftMailer($mailer);

			$data['emailfrom'] = $email;
			$data['namefrom'] = $name;
			$data['subject'] = $subject;
			$data['to'] = 'anton09antipov26@gmail.com';
			
			
			Mail::send('inquiry',$data_toview, function($message) use ($data)
			{
			
    	 	$message->from($data['emailfrom'], $data['namefrom']);
    	 	$message->to($data['to'])
    	 	->replyTo($data['emailfrom'], 'Crypto Merchant Online')
    	 	->subject($data['subject']);
    	 	
    	 	echo 'The mail has been sent successfully';
    	 });
			
			
	}
	catch(\Swift_TransportException $e){

			$response = $e->getMessage();
			echo $response;
		}
		Mail::setSwiftMailer($backup);
		
		
		return redirect('contact');
		
}
}
