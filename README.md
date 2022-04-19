# abstractapi-geo

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/alfa-dev-team/abstractapi-geo.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/alfa-dev-team/abstractapi-geo.svg?style=flat-square)](https://packagist.org/packages/alfa-dev-team/abstractapi-geo)

## Install
`composer require alfa-dev-team/abstractapi-geo`<br>

`php artisan vendor:publish --provider="AlfaDevTeam\AbstractapiGeo\AbstractapiGeoServiceProvider" --tag="migrations"`
## Usage
Add parameter `ABSTRACTAPI_IP_GEOLOCATION_API_KEY=` to the .env file.<br>
You can then use `Location::getGeoByIp({ip})` to retrieve the location object.
After you can call follow method:
- `getCountry();`
- `getCity();`
- `getСoordinates();`
## Testing
Run the tests with:

``` bash
vendor/bin/phpunit
```