<?php

namespace App\Security;

use Symfony\Component\Security\Http\AccessToken\AccessTokenHandlerInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;

class AccessTokenHandler implements AccessTokenHandlerInterface
{

    public function getUserBadgeFrom(string $accessToken): UserBadge
    {
        dump($accessToken);

        return new UserBadge($accessToken);
    }
}