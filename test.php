<?php

require "vendor/autoload.php";

use KWRI\GluuWrapper\OpenIDConnectClient;

$oidc = new OpenIDConnectClient('https://dev.idp.kw.com/',
                                '@!8EF4.0267.10A3.7789!0001!58DE.5ADC!0008!3190.FCC4',
                                '5ZJ3Tjf63EwbMupAkfMqSyaqzQqqmnvh');

$oidc->authenticate();
$name = $oidc->requestUserInfo('given_name');

?>

<html>
<head>
    <title>Example OpenID Connect Client Use</title>
    <style>
        body {
            font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div>
        Hello <?php echo $name; ?>
    </div>

</body>
</html>
