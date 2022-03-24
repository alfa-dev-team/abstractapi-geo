<?php

namespace AlfaDevTeam\AbstractapiGeo\Services;

use AlfaDevTeam\AbstractapiGeo\Models\LocationLog;
use Illuminate\Support\Facades\Http;

class Location
{
    private $locationData;

    public static function getGeoByIp($ip)
    {
        return (new self())->sendRequest($ip);
    }

    public function getCountry()
    {
        return $this->locationData->country ?? null;
    }

    public function getCity()
    {
        return $this->locationData->city ?? null;
    }

    public function getСoordinates()
    {
        return [
            'lon' => $this->locationData->longitude,
            'lat' => $this->locationData->latitude,
        ];
    }

    protected function sendRequest($ip)
    {
        $apiKey = config('services.abstractapi.ip_geolocation.api_key');
        $this->locationData = Http::withHeaders(['Accept' => 'application/json'])
            ->get('https://ipgeolocation.abstractapi.com/v1/',
                [
                    'api_key' => $apiKey,
                    'ip_address' => $ip,
                ]
            )
            ->object();
        return $this;
    }

    private function __construct(){}

    public function saveToDb($userId)
    {
        LocationLog::create([
            'user_id' => $userId,
            'response' => json_encode($this->locationData),
        ]);
        return $this;
    }
}
