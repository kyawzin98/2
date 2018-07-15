<?php
$password= password_hash('Testing',PASSWORD_DEFAULT);

echo nl2br("{$password}\n");
$matches=password_verify('foo',$password);
echo nl2br("{$matches}\n");
$matches=password_verify('Testing',$password);
echo nl2br("{$matches}\n");
