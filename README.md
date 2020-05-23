# Laminas Mezzio-Config loader

Laminas module which loads `ConfigProvider` classes uses in Mezzio.

## Installation
```bash
composer require eventjet/laminas-mezzio-config-module
```

After installation, copy the empty config file into your application:
```bash
cp vendor/eventjet/laminas-mezzio-config-module/config/mezzio-modules.config.php ./config/
```

Then, add your `ConfigProvider`s to the array in `config/mezzio-modules.config.php`.
