<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use GuzzleHttp\Client;
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected $response;
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
     * @Given the user is on the main dashboard
     */
    public function theUserIsOnTheMainDashboard()
    {
        $client = new Client(['base_uri' => 'http://localhost:8000']);
        $response = $client->get(uri:'/');
        $responseCode = $response->getStatusCode();
        if ($responseCode != 200){
            throw new Exception("Error Processing Request");
        }
        return true;
    }

    /**
     * @When the user go to Susunan MK page
     */
    public function theUserGoToSusunanMkPage()
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/susunanmk']);
        $this->response = $client->get(uri:'/susunanmk');
        $responseCode = $this->response->getStatusCode();
        if ($responseCode != 200){
            throw new Exception("Error Processing Request");
        }
        return true;
    }

    /**
     * @Then the user should see MK with ID :arg1
     */
    public function theUserShouldSeeMkWithId($arg1)
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

    // Check if the MK with ID $arg1 exists
    foreach ($mk as $matkul) {
        if ($matkul['kodeMK'] == $arg1) {
            return true;
        }
    }

    // MK with ID $arg1 not found, throw an exception
    throw new Exception("Error Processing Request");
}

/**
     * @Then the user should see BK with ID :arg1
     */
    public function theUserShouldSeeBkWithId2($arg1)
    {
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
        $bk = $stmt->fetchAll();

        // Check if the MK with ID $arg1 exists
        foreach ($bk as $bahan) {
            if ($bahan['bk'] == $arg1) {
                return true;
            }
        }

        // BK with ID $arg1 not found, throw an exception
        throw new Exception("Error Processing Request");  
    }

}
