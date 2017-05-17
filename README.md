[![Build Status](https://travis-ci.org/KWRI/gluu-wrapper.svg?branch=master)](https://travis-ci.org/KWRI/gluu-wrapper)

This package provides a thin layer to interact with Gluu server.

# Installation

To install this package you should add these lines into your composer.json
```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/kwri/gluu-wrapper"
    }
  ],

  "require": {
    "kwri/gluu-wrapper": "dev-master"
  },

  "prefer-stable": true,
  "minimum-stability": "dev"
}
```
# Usage

1. Clone this repo as `openid` folder within your root directory (eg, in apache it would be `/var/www/html`). 
2. Do `composer install`.
3. Fill `idp_url`, `client_secret`, `client_password` and `valid_url` within [test.php](https://github.com/KWRI/gluu-wrapper/blob/master/test.php).
4. Now try to visit http://localhost/openid/test.php (complete the standard oauth flow, use `annie_team:sup3rs3cr3t`)
