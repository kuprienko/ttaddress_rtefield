<?php

// creating a model that extends the address base model, 
// add new field in this custom model and 
// tell extbase to use this altered model for the address records.

namespace Turn3\ttaddress_rtefield\Domain\Model;

/**
 * Address model for default address
 *
 * @package TYPO3
 * @subpackage tt_address
 */
class TtaddressRtefield extends \TYPO3\TtAddress\Domain\Model\Address {
   /**
    * @var string
    */
   protected $TxTtaddressrtefieldRtecontent;

   /**
    * Get tx_ttaddressrtefield_rtecontent
    *
    * @return string
    */
   public function getTxTtaddressrtefieldRtecontent()
   {
      // return "teststring";
      return $this->TxTtaddressrtefieldRtecontent;
   }

   /**
    * Set tx_ttaddressrtefield_rtecontent
    *
    * @param string $tx_ttaddressrtefield_rtecontent
    * @return void
    */
 #  public function setTxTtaddressrtefieldRtecontent($TxTtaddressrtefieldRtecontent)
 #  {
 #     $this->TxTtaddressrtefieldRtecontent = $TxTtaddressrtefieldRtecontent;
 #  }
}