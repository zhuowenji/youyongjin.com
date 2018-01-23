<?php
class AscProcessLinechangeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.process.linechange";
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

                        	                   			private $opFlag;
    	                        
	public function setOpFlag($opFlag){
		$this->opFlag = $opFlag;
         $this->apiParas["opFlag"] = $opFlag;
	}

	public function getOpFlag(){
	  return $this->opFlag;
	}

                        	                   			private $shipWay;
    	                        
	public function setShipWay($shipWay){
		$this->shipWay = $shipWay;
         $this->apiParas["shipWay"] = $shipWay;
	}

	public function getShipWay(){
	  return $this->shipWay;
	}

                        	                   			private $shipWayName;
    	                        
	public function setShipWayName($shipWayName){
		$this->shipWayName = $shipWayName;
         $this->apiParas["shipWayName"] = $shipWayName;
	}

	public function getShipWayName(){
	  return $this->shipWayName;
	}

                        	                   			private $wayBill;
    	                        
	public function setWayBill($wayBill){
		$this->wayBill = $wayBill;
         $this->apiParas["wayBill"] = $wayBill;
	}

	public function getWayBill(){
	  return $this->wayBill;
	}

                        	                   			private $relationBillId;
    	                        
	public function setRelationBillId($relationBillId){
		$this->relationBillId = $relationBillId;
         $this->apiParas["relationBillId"] = $relationBillId;
	}

	public function getRelationBillId(){
	  return $this->relationBillId;
	}

                        	                   			private $partType;
    	                        
	public function setPartType($partType){
		$this->partType = $partType;
         $this->apiParas["partType"] = $partType;
	}

	public function getPartType(){
	  return $this->partType;
	}

                        	                   			private $partTypeName;
    	                        
	public function setPartTypeName($partTypeName){
		$this->partTypeName = $partTypeName;
         $this->apiParas["partTypeName"] = $partTypeName;
	}

	public function getPartTypeName(){
	  return $this->partTypeName;
	}

                        	                   			private $partSrc;
    	                        
	public function setPartSrc($partSrc){
		$this->partSrc = $partSrc;
         $this->apiParas["partSrc"] = $partSrc;
	}

	public function getPartSrc(){
	  return $this->partSrc;
	}

                        	                   			private $partSrcName;
    	                        
	public function setPartSrcName($partSrcName){
		$this->partSrcName = $partSrcName;
         $this->apiParas["partSrcName"] = $partSrcName;
	}

	public function getPartSrcName(){
	  return $this->partSrcName;
	}

                            }





        
 

