<?php

namespace Epmnzava\TraApiLaravel;

/**
 * 
 * Main interface of your billing system to TRA  
 * Electronic Fiscal Device Management System.
 * 
 */
class Tra
{


    public function __construct($client)
    {
    }

    /**
     * Efd or Vfd interface 
     * params $tin ( Vendor Tax Identification Number) , $certkey (Vendor System Serial Number)
     * Return VFD number
     * One time request
     */
    public function executeEfdRegistration(int $tin, string $certkey)
    {
    }




    /**
     * Zreport Interface
     */
    public function executeZReport()
    {
    }

    public function executeReceipt()
    {
        //check if token is valid

        return "I am executing the receipt now ";
    }
}
