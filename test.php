<?php

require "vendor/autoload.php";

use KWRI\GluuWrapper\OpenIDConnectClient;

$oidc = new OpenIDConnectClient('https://dev.idp.kw.com/',
                                '@!8EF4.0267.10A3.7789!0001!58DE.5ADC!0008!3190.FCC4',
                                '5ZJ3Tjf63EwbMupAkfMqSyaqzQqqmnvh');

$oidc->setRedirectURL('http://localhost/openid/test.php');

if ($oidc->authenticate() && $oidc->getAccessToken()) {
    $info = $oidc->requestUserInfo();
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
        <?php foreach ($info as $claim): ?>
        <p><?php echo $claim->getName() . ' : ' . $claim->getValue()  ?></p>
        <?php endforeach; ?>
    </div>

</body>
</html>

<?php
}
?>
