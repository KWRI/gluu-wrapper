<?php

require "vendor/autoload.php";

use KWRI\GluuWrapper\OpenIDConnectClient;

$oidc = new OpenIDConnectClient('idp_url',
                                'client_secret',
                                'client_password');

$oidc->setRedirectURL('valid_url');

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
