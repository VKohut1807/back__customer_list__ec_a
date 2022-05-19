<?php

namespace Tests\Unit;
use Tests\TestCase;
// use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_new_client_succesfull()
    {
       $response = $this->post('/api/clients',[
            "name"=>"name1",
            "email"=>"email@asd.as",
            "address_street"=>"address_street1",
            "address_city"=>"address_city1",
            "address_zipcode"=>"12121212",
            "phone"=>"12121212",
            "company_name"=>"company_name1",
            "company_bs"=>"company_bs1",
        ]);
        $this->assertEquals(201,$response->status());
    }
    
    public function test_show_new_client()
    {
       $response = $this->get('/api/clients/1');
        $this->assertEquals(200,$response->status());
    }

    public function test_client_changed_succesfull()
    {
       $response = $this->put('/api/clients/1',[
            "name"=>"name2",
            "email"=>"ema222il@asd.as",
            "address_street"=>"address_street2",
            "address_city"=>"address_city2",
            "address_zipcode"=>"222222",
            "phone"=>"2222222",
            "company_name"=>"company_name2",
            "company_bs"=>"",
        ]);
        $this->assertEquals(200,$response->status());
    }
    
    public function test_client_destroyed_succesfull()
    {
       $response = $this->delete('/api/clients/1');
        $this->assertEquals(204,$response->status());
    }

    // TEST ANAGRAM
    function test_anagram_word()
    {
        $word1 = "Qwerty";
        $word2 = "YQTwre";
    	$wordFind1 = str_split(strtolower(strval($word1)));
        $wordFind2 = str_split(strtolower(strval($word2)));
        $this->assertTrue(!array_diff($wordFind1, $wordFind2) && !array_diff($wordFind2, $wordFind1));
    }
}
