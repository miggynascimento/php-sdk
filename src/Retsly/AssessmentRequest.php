<?php namespace Retsly;

class AssessmentRequest extends Request {
  function __construct (Client $client, $query=[]) {
    return parent::__construct($client, "get", $client->getURL("assessments", "pub"), $query);
  }
}
