<?php
class SellerPromotionV2OrderDiscountCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.v2.order.discount.create";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                    	                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $port;
    	                        
	public function setPort($port){
		$this->port = $port;
         $this->apiParas["port"] = $port;
	}

	public function getPort(){
	  return $this->port;
	}

                        	                   			private $requestId;
    	                                                            
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                                                                        		                                    	                        	                   			private $promoName;
    	                                                            
	public function setPromoName($promoName){
		$this->promoName = $promoName;
         $this->apiParas["promo_name"] = $promoName;
	}

	public function getPromoName(){
	  return $this->promoName;
	}

                        	                        	                   			private $beginTime;
    	                                                            
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $bound;
    	                        
	public function setBound($bound){
		$this->bound = $bound;
         $this->apiParas["bound"] = $bound;
	}

	public function getBound(){
	  return $this->bound;
	}

                        	                   			private $slogan;
    	                        
	public function setSlogan($slogan){
		$this->slogan = $slogan;
         $this->apiParas["slogan"] = $slogan;
	}

	public function getSlogan(){
	  return $this->slogan;
	}

                        	                   			private $comment;
    	                        
	public function setComment($comment){
		$this->comment = $comment;
         $this->apiParas["comment"] = $comment;
	}

	public function getComment(){
	  return $this->comment;
	}

                        	                   			private $link;
    	                        
	public function setLink($link){
		$this->link = $link;
         $this->apiParas["link"] = $link;
	}

	public function getLink(){
	  return $this->link;
	}

                        	                        	                   			private $allowOthersOperate;
    	                                                                        
	public function setAllowOthersOperate($allowOthersOperate){
		$this->allowOthersOperate = $allowOthersOperate;
         $this->apiParas["allow_others_operate"] = $allowOthersOperate;
	}

	public function getAllowOthersOperate(){
	  return $this->allowOthersOperate;
	}

                        	                   			private $allowOthersCheck;
    	                                                                        
	public function setAllowOthersCheck($allowOthersCheck){
		$this->allowOthersCheck = $allowOthersCheck;
         $this->apiParas["allow_others_check"] = $allowOthersCheck;
	}

	public function getAllowOthersCheck(){
	  return $this->allowOthersCheck;
	}

                        	                   			private $allowOtherUserOperate;
    	                                                                                    
	public function setAllowOtherUserOperate($allowOtherUserOperate){
		$this->allowOtherUserOperate = $allowOtherUserOperate;
         $this->apiParas["allow_other_user_operate"] = $allowOtherUserOperate;
	}

	public function getAllowOtherUserOperate(){
	  return $this->allowOtherUserOperate;
	}

                        	                   			private $allowOtherUserCheck;
    	                                                                                    
	public function setAllowOtherUserCheck($allowOtherUserCheck){
		$this->allowOtherUserCheck = $allowOtherUserCheck;
         $this->apiParas["allow_other_user_check"] = $allowOtherUserCheck;
	}

	public function getAllowOtherUserCheck(){
	  return $this->allowOtherUserCheck;
	}

                        	                   			private $needManualCheck;
    	                                                                        
	public function setNeedManualCheck($needManualCheck){
		$this->needManualCheck = $needManualCheck;
         $this->apiParas["need_manual_check"] = $needManualCheck;
	}

	public function getNeedManualCheck(){
	  return $this->needManualCheck;
	}

                        	                        	                   			private $rate;
    	                        
	public function setRate($rate){
		$this->rate = $rate;
         $this->apiParas["rate"] = $rate;
	}

	public function getRate(){
	  return $this->rate;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["sku_id"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                }





        
 

