<?php namespace Retsly;

class TransactionRequest extends Request {
  function __construct (Client $client, $query=[]) {
    return parent::__construct($client, "get", $client->getURL("transactions", "pub"), $query);
  }
}
