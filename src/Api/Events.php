<?php namespace Alpaca\Api;

use Alpaca\Alpaca;

class Events
{
    /**
     * @var \Alpaca\Alpaca
     */
    protected $alpaca;

    /**
     * Construct
     */
    public function __construct(Alpaca $alpaca)
    {
        $this->alpaca = $alpaca;
    }

    /**
     *  Listen to events related to change of account status.
     * 
     * @param JSON $params
     * 
     * @return array
     */
    public function getAccountsStatus($params=[])
    {
        return $this->alpaca->stream('events_accounts', $params);
    }

    /**
     *  Listen to events related to limit trades.
     * 
     * @param JSON $params
     * 
     * @return array
     */
    public function getTradesStatus($params=[])
    {
        return $this->alpaca->stream('events_trades', $params);
    }

    /**
     *  Listen to events related to transfers.
     * 
     * @param JSON $params
     * 
     * @return array
     */
    public function getTransfersStatus($params=[])
    {
        return $this->alpaca->stream('events_transfers', $params);
    }

    /**
     *  Listen to events related to journal.
     * 
     * @param JSON $params
     * 
     * @return array
     */
    public function getJournalStatus($params=[])
    {
        return $this->alpaca->stream('events_journal', $params);
    }

    /**
     *  Listen to when NTAs are pushed such as CSDs, JNLC (journals) or FEEs.
     * 
     * @param JSON $params
     * 
     * @return array
     */
    public function getNtaStatus($params=[])
    {
        return $this->alpaca->stream('events_nta', $params);
    }

}