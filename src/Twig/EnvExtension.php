<?php declare(strict_types=1);

namespace Yireo\TwigEnv\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class EnvExtension extends AbstractExtension implements GlobalsInterface
{
    public function getGlobals(): array
    {
        return [
            'env' => $_ENV
        ];
    }
}