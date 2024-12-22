<?php

namespace App\Service;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use Psr\Log\LoggerInterface;
class FirebaseService
{
    private Database $database;
    private $firestore;
    private LoggerInterface $logger;

    public function __construct(Factory $factory, LoggerInterface $logger)
    {
        $factory = (new Factory)
            ->withServiceAccount('../config/firebase/firebase_credentials.json')
            ->withDatabaseUri('https://zooparadis-d65fe-default-rtdb.europe-west1.firebasedatabase.app/');

        $this->database = $factory->createDatabase();
        $this->firestore = $factory->createFirestore();
        $this->logger = $logger;
    }

    public function getDatabase(): Database
    {
        return $this->database;
    }


    public function sendMessage($contact): bool
    {
        try {
            $contactRef = $this->firestore->database()->collection('contacts')->newDocument();
            $contactRef->set([
                'titre' => $contact->getTitre(),
                'email' => $contact->getEmail(),
                'message' => $contact->getDescription(),
                'createdAt' => (new \DateTimeImmutable())->format('Y-m-d H:i:s'),
            ]);
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Erreur d\'envoi Firebase : ' . $e->getMessage());
            return false;
        }
    }
}