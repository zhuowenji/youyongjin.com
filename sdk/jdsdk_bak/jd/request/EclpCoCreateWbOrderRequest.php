<?php
class EclpCoCreateWbOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.createWbOrder";
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
                                                        		                                    	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $senderNickName;
    	                        
	public function setSenderNickName($senderNickName){
		$this->senderNickName = $senderNickName;
         $this->apiParas["senderNickName"] = $senderNickName;
	}

	public function getSenderNickName(){
	  return $this->senderNickName;
	}

                        	                   			private $receiverNickName;
    	                        
	public function setReceiverNickName($receiverNickName){
		$this->receiverNickName = $receiverNickName;
         $this->apiParas["receiverNickName"] = $receiverNickName;
	}

	public function getReceiverNickName(){
	  return $this->receiverNickName;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $grossWeight;
    	                        
	public function setGrossWeight($grossWeight){
		$this->grossWeight = $grossWeight;
         $this->apiParas["grossWeight"] = $grossWeight;
	}

	public function getGrossWeight(){
	  return $this->grossWeight;
	}

                        	                   			private $grossVolume;
    	                        
	public function setGrossVolume($grossVolume){
		$this->grossVolume = $grossVolume;
         $this->apiParas["grossVolume"] = $grossVolume;
	}

	public function getGrossVolume(){
	  return $this->grossVolume;
	}

                        	                   			private $receivable;
    	                        
	public function setReceivable($receivable){
		$this->receivable = $receivable;
         $this->apiParas["receivable"] = $receivable;
	}

	public function getReceivable(){
	  return $this->receivable;
	}

                        	                   			private $vehicleTypeName;
    	                        
	public function setVehicleTypeName($vehicleTypeName){
		$this->vehicleTypeName = $vehicleTypeName;
         $this->apiParas["vehicleTypeName"] = $vehicleTypeName;
	}

	public function getVehicleTypeName(){
	  return $this->vehicleTypeName;
	}

                        	                   			private $vehicleTypeNo;
    	                        
	public function setVehicleTypeNo($vehicleTypeNo){
		$this->vehicleTypeNo = $vehicleTypeNo;
         $this->apiParas["vehicleTypeNo"] = $vehicleTypeNo;
	}

	public function getVehicleTypeNo(){
	  return $this->vehicleTypeNo;
	}

                        	                   			private $expressItemName;
    	                        
	public function setExpressItemName($expressItemName){
		$this->expressItemName = $expressItemName;
         $this->apiParas["expressItemName"] = $expressItemName;
	}

	public function getExpressItemName(){
	  return $this->expressItemName;
	}

                        	                   			private $expressItemQty;
    	                        
	public function setExpressItemQty($expressItemQty){
		$this->expressItemQty = $expressItemQty;
         $this->apiParas["expressItemQty"] = $expressItemQty;
	}

	public function getExpressItemQty(){
	  return $this->expressItemQty;
	}

                        	                   			private $signReceiptFlag;
    	                        
	public function setSignReceiptFlag($signReceiptFlag){
		$this->signReceiptFlag = $signReceiptFlag;
         $this->apiParas["signReceiptFlag"] = $signReceiptFlag;
	}

	public function getSignReceiptFlag(){
	  return $this->signReceiptFlag;
	}

                        	                   			private $deliveryReceiptFlag;
    	                        
	public function setDeliveryReceiptFlag($deliveryReceiptFlag){
		$this->deliveryReceiptFlag = $deliveryReceiptFlag;
         $this->apiParas["deliveryReceiptFlag"] = $deliveryReceiptFlag;
	}

	public function getDeliveryReceiptFlag(){
	  return $this->deliveryReceiptFlag;
	}

                        	                   			private $deliveryIntoWarehouse;
    	                        
	public function setDeliveryIntoWarehouse($deliveryIntoWarehouse){
		$this->deliveryIntoWarehouse = $deliveryIntoWarehouse;
         $this->apiParas["deliveryIntoWarehouse"] = $deliveryIntoWarehouse;
	}

	public function getDeliveryIntoWarehouse(){
	  return $this->deliveryIntoWarehouse;
	}

                        	                   			private $loadFlag;
    	                        
	public function setLoadFlag($loadFlag){
		$this->loadFlag = $loadFlag;
         $this->apiParas["loadFlag"] = $loadFlag;
	}

	public function getLoadFlag(){
	  return $this->loadFlag;
	}

                        	                   			private $unloadFlag;
    	                        
	public function setUnloadFlag($unloadFlag){
		$this->unloadFlag = $unloadFlag;
         $this->apiParas["unloadFlag"] = $unloadFlag;
	}

	public function getUnloadFlag(){
	  return $this->unloadFlag;
	}

                        	                   			private $receiptFlag;
    	                        
	public function setReceiptFlag($receiptFlag){
		$this->receiptFlag = $receiptFlag;
         $this->apiParas["receiptFlag"] = $receiptFlag;
	}

	public function getReceiptFlag(){
	  return $this->receiptFlag;
	}

                        	                   			private $fcFlag;
    	                        
	public function setFcFlag($fcFlag){
		$this->fcFlag = $fcFlag;
         $this->apiParas["fcFlag"] = $fcFlag;
	}

	public function getFcFlag(){
	  return $this->fcFlag;
	}

                        	                   			private $guaranteeValue;
    	                        
	public function setGuaranteeValue($guaranteeValue){
		$this->guaranteeValue = $guaranteeValue;
         $this->apiParas["guaranteeValue"] = $guaranteeValue;
	}

	public function getGuaranteeValue(){
	  return $this->guaranteeValue;
	}

                        	                   			private $pickupBeginTime;
    	                        
	public function setPickupBeginTime($pickupBeginTime){
		$this->pickupBeginTime = $pickupBeginTime;
         $this->apiParas["pickupBeginTime"] = $pickupBeginTime;
	}

	public function getPickupBeginTime(){
	  return $this->pickupBeginTime;
	}

                        	                   			private $pickupEndTime;
    	                        
	public function setPickupEndTime($pickupEndTime){
		$this->pickupEndTime = $pickupEndTime;
         $this->apiParas["pickupEndTime"] = $pickupEndTime;
	}

	public function getPickupEndTime(){
	  return $this->pickupEndTime;
	}

                        	                   			private $deliveryType;
    	                        
	public function setDeliveryType($deliveryType){
		$this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
	}

	public function getDeliveryType(){
	  return $this->deliveryType;
	}

                                                    	}





        
 

