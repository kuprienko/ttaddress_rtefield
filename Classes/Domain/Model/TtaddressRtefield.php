<?php

namespace Turn3\TtaddressRtefield\Domain\Model;

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
   protected $txTtaddressrtefieldRtecontent = '';

   /**
    * Get tx_ttaddressrtefield_rtecontent
    *
    * @return string
    */
   public function getTxTtaddressrtefieldRtecontent()
   {
      return $this->txTtaddressrtefieldRtecontent;
   }

   /**
    * Set tx_ttaddressrtefield_rtecontent
    *
    * @param string $tx_ttaddressrtefield_rtecontent
    * @return void
    */
   public function setTxTtaddressrtefieldRtecontent($txTtaddressrtefieldRtecontent)
   {
      $this->txTtaddressrtefieldRtecontent = $txTtaddressrtefieldRtecontent;
   }
}