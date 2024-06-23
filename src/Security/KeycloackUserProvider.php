<?php

namespace App\Security;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class KeycloackUserProvider implements UserProviderInterface
{
    /**
     * @throws \Exception
     */
    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        dump("JERE");
        exit();

        throw new \Exception('TODO: fill in loadUserByIdentifier() inside '.__FILE__);
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        if (!$user instanceof UserModel) {
            throw new UnsupportedUserException(sprintf('Invalid user class "%s".', get_class($user)));
        }

        throw new \Exception('TODO: fill in refreshUser() inside '.__FILE__);
    }

    /**
     * Tells Symfony to use this provider for this User class.
     */
    public function supportsClass(string $class): bool
    {
        return UserModel::class === $class || is_subclass_of($class, UserModel::class);
    }
}
