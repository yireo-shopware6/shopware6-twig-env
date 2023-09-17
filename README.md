# YireoTwigEnv

**Extremely simple Shopware 6 plugin that adds a Twig variable `env` with all environment variables. Mainly a proof of concept, but perhaps handy during
development.**

## Installation
```bash
composer require yireo/shopware6-twig-env --dev
bin/console plugin:refresh
bin/console plugin:install --activate YireoTwigEnv
```

## Usage
Just add a `{{ dump() }}` somewhere to your Twig templates. You'll see a variable `env` being added to the page.
