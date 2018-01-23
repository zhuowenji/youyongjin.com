<?php
class AscAuditCompensateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.audit.compensate";
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
                                    	                        	                        	                                            		                                    	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                        	                   			private $operatePin;
    	                        
	public function setOperatePin($operatePin){
		$this->operatePin = $operatePin;
         $this->apiParas["operatePin"] = $operatePin;
	}

	public function getOperatePin(){
	  return $this->operatePin;
	}

                        	                   			private $operateNick;
    	                        
	public function setOperateNick($operateNick){
		$this->operateNick = $operateNick;
         $this->apiParas["operateNick"] = $operateNick;
	}

	public function getOperateNick(){
	  return $this->operateNick;
	}

                        	                   			private $operateRemark;
    	                        
	public function setOperateRemark($operateRemark){
		$this->operateRemark = $operateRemark;
         $this->apiParas["operateRemark"] = $operateRemark;
	}

	public function getOperateRemark(){
	  return $this->operateRemark;
	}

                        	                   			private $extJsonStr;
    	                        
	public function setExtJsonStr($extJsonStr){
		$this->extJsonStr = $extJsonStr;
         $this->apiParas["extJsonStr"] = $extJsonStr;
	}

	public function getExtJsonStr(){
	  return $this->extJsonStr;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $approveNotes;
    	                        
	public function setApproveNotes($approveNotes){
		$this->approveNotes = $approveNotes;
         $this->apiParas["approveNotes"] = $approveNotes;
	}

	public function getApproveNotes(){
	  return $this->approveNotes;
	}

                        	                   			private $sysVersion;
    	                        
	public function setSysVersion($sysVersion){
		$this->sysVersion = $sysVersion;
         $this->apiParas["sysVersion"] = $sysVersion;
	}

	public function getSysVersion(){
	  return $this->sysVersion;
	}

                        	                   			private $questionTypeCid1;
    	                        
	public function setQuestionTypeCid1($questionTypeCid1){
		$this->questionTypeCid1 = $questionTypeCid1;
         $this->apiParas["questionTypeCid1"] = $questionTypeCid1;
	}

	public function getQuestionTypeCid1(){
	  return $this->questionTypeCid1;
	}

                        	                   			private $questionTypeCid2;
    	                        
	public function setQuestionTypeCid2($questionTypeCid2){
		$this->questionTypeCid2 = $questionTypeCid2;
         $this->apiParas["questionTypeCid2"] = $questionTypeCid2;
	}

	public function getQuestionTypeCid2(){
	  return $this->questionTypeCid2;
	}

                                            		                                    	                   			private $customerContactName;
    	                        
	public function setCustomerContactName($customerContactName){
		$this->customerContactName = $customerContactName;
         $this->apiParas["customerContactName"] = $customerContactName;
	}

	public function getCustomerContactName(){
	  return $this->customerContactName;
	}

                        	                   			private $customerContactTel;
    	                        
	public function setCustomerContactTel($customerContactTel){
		$this->customerContactTel = $customerContactTel;
         $this->apiParas["customerContactTel"] = $customerContactTel;
	}

	public function getCustomerContactTel(){
	  return $this->customerContactTel;
	}

                        	                   			private $customerContactMobile;
    	                        
	public function setCustomerContactMobile($customerContactMobile){
		$this->customerContactMobile = $customerContactMobile;
         $this->apiParas["customerContactMobile"] = $customerContactMobile;
	}

	public function getCustomerContactMobile(){
	  return $this->customerContactMobile;
	}

                        	                   			private $customerZipcode;
    	                        
	public function setCustomerZipcode($customerZipcode){
		$this->customerZipcode = $customerZipcode;
         $this->apiParas["customerZipcode"] = $customerZipcode;
	}

	public function getCustomerZipcode(){
	  return $this->customerZipcode;
	}

                        	                   			private $customerProvince;
    	                        
	public function setCustomerProvince($customerProvince){
		$this->customerProvince = $customerProvince;
         $this->apiParas["customerProvince"] = $customerProvince;
	}

	public function getCustomerProvince(){
	  return $this->customerProvince;
	}

                        	                   			private $customerCity;
    	                        
	public function setCustomerCity($customerCity){
		$this->customerCity = $customerCity;
         $this->apiParas["customerCity"] = $customerCity;
	}

	public function getCustomerCity(){
	  return $this->customerCity;
	}

                        	                   			private $customerCounty;
    	                        
	public function setCustomerCounty($customerCounty){
		$this->customerCounty = $customerCounty;
         $this->apiParas["customerCounty"] = $customerCounty;
	}

	public function getCustomerCounty(){
	  return $this->customerCounty;
	}

                        	                   			private $customerVillage;
    	                        
	public function setCustomerVillage($customerVillage){
		$this->customerVillage = $customerVillage;
         $this->apiParas["customerVillage"] = $customerVillage;
	}

	public function getCustomerVillage(){
	  return $this->customerVillage;
	}

                        	                   			private $customerDetailAddress;
    	                        
	public function setCustomerDetailAddress($customerDetailAddress){
		$this->customerDetailAddress = $customerDetailAddress;
         $this->apiParas["customerDetailAddress"] = $customerDetailAddress;
	}

	public function getCustomerDetailAddress(){
	  return $this->customerDetailAddress;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["wareId"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareName;
                              public function setWareName($wareName ){
                 $this->wareName=$wareName;
                 $this->apiParas["wareName"] = $wareName;
              }

              public function getWareName(){
              	return $this->wareName;
              }
                                                                                                                                                                                                                                                                                                                                              private $warePrice;
                              public function setWarePrice($warePrice ){
                 $this->warePrice=$warePrice;
                 $this->apiParas["warePrice"] = $warePrice;
              }

              public function getWarePrice(){
              	return $this->warePrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareQty;
                              public function setWareQty($wareQty ){
                 $this->wareQty=$wareQty;
                 $this->apiParas["wareQty"] = $wareQty;
              }

              public function getWareQty(){
              	return $this->wareQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareDescribe;
                              public function setWareDescribe($wareDescribe ){
                 $this->wareDescribe=$wareDescribe;
                 $this->apiParas["wareDescribe"] = $wareDescribe;
              }

              public function getWareDescribe(){
              	return $this->wareDescribe;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareType;
                              public function setWareType($wareType ){
                 $this->wareType=$wareType;
                 $this->apiParas["wareType"] = $wareType;
              }

              public function getWareType(){
              	return $this->wareType;
              }
                                                                                                                                        	                   			private $deliveryCenterId;
    	                        
	public function setDeliveryCenterId($deliveryCenterId){
		$this->deliveryCenterId = $deliveryCenterId;
         $this->apiParas["deliveryCenterId"] = $deliveryCenterId;
	}

	public function getDeliveryCenterId(){
	  return $this->deliveryCenterId;
	}

                        	                   			private $deliveryCenterName;
    	                        
	public function setDeliveryCenterName($deliveryCenterName){
		$this->deliveryCenterName = $deliveryCenterName;
         $this->apiParas["deliveryCenterName"] = $deliveryCenterName;
	}

	public function getDeliveryCenterName(){
	  return $this->deliveryCenterName;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $ifSendSms;
    	                        
	public function setIfSendSms($ifSendSms){
		$this->ifSendSms = $ifSendSms;
         $this->apiParas["ifSendSms"] = $ifSendSms;
	}

	public function getIfSendSms(){
	  return $this->ifSendSms;
	}

                        	                   			private $appendPickware;
    	                        
	public function setAppendPickware($appendPickware){
		$this->appendPickware = $appendPickware;
         $this->apiParas["appendPickware"] = $appendPickware;
	}

	public function getAppendPickware(){
	  return $this->appendPickware;
	}

                        	                   			private $smsType;
    	                        
	public function setSmsType($smsType){
		$this->smsType = $smsType;
         $this->apiParas["smsType"] = $smsType;
	}

	public function getSmsType(){
	  return $this->smsType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $newWareId;
                              public function setNewWareId($newWareId ){
                 $this->newWareId=$newWareId;
                 $this->apiParas["newWareId"] = $newWareId;
              }

              public function getNewWareId(){
              	return $this->newWareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $newWareName;
                              public function setNewWareName($newWareName ){
                 $this->newWareName=$newWareName;
                 $this->apiParas["newWareName"] = $newWareName;
              }

              public function getNewWareName(){
              	return $this->newWareName;
              }
                                                                                                                                                                                                                                                                                                                                              private $newWarePrice;
                              public function setNewWarePrice($newWarePrice ){
                 $this->newWarePrice=$newWarePrice;
                 $this->apiParas["newWarePrice"] = $newWarePrice;
              }

              public function getNewWarePrice(){
              	return $this->newWarePrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $newWareQty;
                              public function setNewWareQty($newWareQty ){
                 $this->newWareQty=$newWareQty;
                 $this->apiParas["newWareQty"] = $newWareQty;
              }

              public function getNewWareQty(){
              	return $this->newWareQty;
              }
                                                                                                                                            }





        
 

