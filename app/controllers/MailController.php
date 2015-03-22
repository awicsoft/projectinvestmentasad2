

		
		<?php
class MailController extends BaseController{


	function  testsendCartMail(){

		$this->sendCartMail("testing");
	}

	function sendCartMail($paypalinfo){

		$cartController = new CartController();
		
		$ccn = new CategoryController();
			$allCategory = $ccn->allCategory();

			$ip = Request::getClientIp();
			$cart =  Cart::where('ip' , $ip);
			if($cart->count()){

				$cart = $cart->first();

				$buckets = Bucket::where('cartID' , $cart->ID)->get();

				
		$totalBuckets = $cartController->getTotalBuckets();



		
		$user = 


		Mail::send('mailcart',['paypalinfo' =>$paypalinfo ,'allCategory' => $allCategory,'buckets' => $buckets,'totalBuckets' => $totalBuckets ,'cart' =>$cart] ,function($message) {




			$message->to("muhammadusamariaz@gmail.com", "Cart")->subject('NEW ORDER');

		});




	}


}
}

?>