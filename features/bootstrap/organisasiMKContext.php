<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use GuzzleHttp\Client;
/**
 * Defines application features from the specific context.
 */
class OrganisasiMKContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When the user go to Organisasi MK page
     */
    public function theUserGoToOrganisasiMkPage()
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/organisasimk']);
        $response = $client->get(uri:'/organisasimk');
        $responseCode = $response->getStatusCode();
        if ($responseCode != 200){
            throw new Exception("Error Processing Request");
        }
        return true;
    }

    /**
     * @Then the user should see Term with ID :arg1
     */
    public function theUserShouldSeeTermWithId($arg1)
    {
        // Connect to the database
    $host = '127.0.0.1';
    $db   = 'projectbesarppl';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Fetch data from the "susunanmk" table
    $stmt = $pdo->query('SELECT * FROM susunanmk');
    $mk = $stmt->fetchAll();

    // Check if the Term with ID $arg1 exists
    foreach ($mk as $matkul) {
        if ($matkul['smt'] == $arg1) {
            return true;
        }
    }

    // MK with ID $arg1 not found, throw an exception
    throw new Exception("Error Processing Request");
    }
}
