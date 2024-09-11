<?php

// src/Service/FirebaseService.php
namespace App\Service;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;

class FirebaseService
{
    private $database;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount('../config/firebase_credentials.json');
        $this->database = $factory->createDatabase();
    }

    public function getDatabase(): Database
    {
        return $this->database;
    }

    public function addReview(array $reviewData): void
    {
    $reference = $this->database->getReference('reviews')->push($reviewData);
    }

    

}
