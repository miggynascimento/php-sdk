<?php namespace Retsly;

class ParcelRequest extends Request {
  function __construct (Client $client, $query=[]) {
    return parent::__construct($client, "get", $client->getURL("parcels", "pub"), $query);
  }
}
