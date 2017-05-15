[![Build Status](https://travis-ci.org/KWRI/gluu-wrapper.svg?branch=master)](https://travis-ci.org/KWRI/gluu-wrapper)

This package provides a think layer to interact with Gluu server.

Installation

To install this package you should add these lines into your composer.json

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
