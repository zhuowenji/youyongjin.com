<?php
class AscCollectionCountRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.collection.count";
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

                        	                   			private $jdIntervention;
    	                        
	public function setJdIntervention($jdIntervention){
		$this->jdIntervention = $jdIntervention;
         $this->apiParas["jdIntervention"] = $jdIntervention;
	}

	public function getJdIntervention(){
	  return $this->jdIntervention;
	}

                        	                   			private $balanceFlag;
    	                        
	public function setBalanceFlag($balanceFlag){
		$this->balanceFlag = $balanceFlag;
         $this->apiParas["balanceFlag"] = $balanceFlag;
	}

	public function getBalanceFlag(){
	  return $this->balanceFlag;
	}

                        	                   			private $applyDateBegin;
    	                        
	public function setApplyDateBegin($applyDateBegin){
		$this->applyDateBegin = $applyDateBegin;
         $this->apiParas["applyDateBegin"] = $applyDateBegin;
	}

	public function getApplyDateBegin(){
	  return $this->applyDateBegin;
	}

                        	                   			private $applyDateEnd;
    	                        
	public function setApplyDateEnd($applyDateEnd){
		$this->applyDateEnd = $applyDateEnd;
         $this->apiParas["applyDateEnd"] = $applyDateEnd;
	}

	public function getApplyDateEnd(){
	  return $this->applyDateEnd;
	}

                        	                   			private $extJsonStr;
    	                        
	public function setExtJsonStr($extJsonStr){
		$this->extJsonStr = $extJsonStr;
         $this->apiParas["extJsonStr"] = $extJsonStr;
	}

	public function getExtJsonStr(){
	  return $this->extJsonStr;
	}

                            }





        
 

