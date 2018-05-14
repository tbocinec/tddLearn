<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Database\Eloquent\Model;
use Mockery\Exception;

class Language extends Model
{

    protected $table = 'programing_languages';

    protected $fillable = [
        'name', 'active','compiler_url','user','password'
    ];

    public static function  check($url,$password,$user){

        $client = new Client(['http_errors' => false]);
        $statuCode = "";

        try{
            $res = $client->request('GET', $url . '/loggin', [
                'auth' => [$user, $password]

            ]);
            $statuCode = $res->getStatusCode();
        }
        catch ( ConnectException $e) {
            $statuCode = 504;
        }


        return $statuCode;

    }
}
