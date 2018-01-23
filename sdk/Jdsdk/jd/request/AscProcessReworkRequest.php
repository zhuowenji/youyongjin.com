<?php
class AscProcessReworkRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.process.rework";
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

                        	                   			private $receiptName;
    	                        
	public function setReceiptName($receiptName){
		$this->receiptName = $receiptName;
         $this->apiParas["receiptName"] = $receiptName;
	}

	public function getReceiptName(){
	  return $this->receiptName;
	}

                                            		                                    	                   			private $provinceCode;
    	                        
	public function setProvinceCode($provinceCode){
		$this->provinceCode = $provinceCode;
         $this->apiParas["provinceCode"] = $provinceCode;
	}

	public function getProvinceCode(){
	  return $this->provinceCode;
	}

                        	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $countyCode;
    	                        
	public function setCountyCode($countyCode){
		$this->countyCode = $countyCode;
         $this->apiParas["countyCode"] = $countyCode;
	}

	public function getCountyCode(){
	  return $this->countyCode;
	}

                        	                   			private $villageCode;
    	                        
	public function setVillageCode($villageCode){
		$this->villageCode = $villageCode;
         $this->apiParas["villageCode"] = $villageCode;
	}

	public function getVillageCode(){
	  return $this->villageCode;
	}

                        	                   			private $detailAddress;
    	                        
	public function setDetailAddress($detailAddress){
		$this->detailAddress = $detailAddress;
         $this->apiParas["detailAddress"] = $detailAddress;
	}

	public function getDetailAddress(){
	  return $this->detailAddress;
	}

                                                    	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $applyDescription;
    	                        
	public function setApplyDescription($applyDescription){
		$this->applyDescription = $applyDescription;
         $this->apiParas["applyDescription"] = $applyDescription;
	}

	public function getApplyDescription(){
	  return $this->applyDescription;
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

                        	                   			private $isPickFreight;
    	                        
	public function setIsPickFreight($isPickFreight){
		$this->isPickFreight = $isPickFreight;
         $this->apiParas["isPickFreight"] = $isPickFreight;
	}

	public function getIsPickFreight(){
	  return $this->isPickFreight;
	}

                        	                   			private $pickwareFreight;
    	                        
	public function setPickwareFreight($pickwareFreight){
		$this->pickwareFreight = $pickwareFreight;
         $this->apiParas["pickwareFreight"] = $pickwareFreight;
	}

	public function getPickwareFreight(){
	  return $this->pickwareFreight;
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
                                                                                                                                                                                                                                                                                                                       private $wareQty;
                              public function setWareQty($wareQty ){
                 $this->wareQty=$wareQty;
                 $this->apiParas["wareQty"] = $wareQty;
              }

              public function getWareQty(){
              	return $this->wareQty;
              }
                                                                                                                                                                                                                                                                                                                       private $relationWareId;
                              public function setRelationWareId($relationWareId ){
                 $this->relationWareId=$relationWareId;
                 $this->apiParas["relationWareId"] = $relationWareId;
              }

              public function getRelationWareId(){
              	return $this->relationWareId;
              }
                                                                                                                                                                                                                                                                                                                       private $relationWareType;
                              public function setRelationWareType($relationWareType ){
                 $this->relationWareType=$relationWareType;
                 $this->apiParas["relationWareType"] = $relationWareType;
              }

              public function getRelationWareType(){
              	return $this->relationWareType;
              }
                                                                                                                                            }





        
 

