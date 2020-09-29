<?php

declare(strict_types=1);

namespace TomasVotruba\Website\ValueObject;

use Nette\Utils\Strings;
use TomasVotruba\Website\Exception\ShouldNotHappenException;

final class PackagistPackage
{
    private string $name;

    private string $shortName;

    private string $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $shortName = (string) Strings::after($name, '/');
        if ($shortName === '') {
            $message = sprintf('Short name could not be determined from "%s"', $name);
            throw new ShouldNotHappenException($message);
        }
        $this->shortName = $shortName;

        $this->description = $description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
