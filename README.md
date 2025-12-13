# Semiorbit UpWatch (PHP Helper)

This package is the PHP-side companion for **Semiorbit UpWatch**.

It only registers uploaded files for scanning (**using Maldet on RHEL based linux**) by the server-level UpWatch system.

## Installation

```bash
composer require semiorbit/upwatch
```

## Usage

```php
use SemiorbitUpWatch\UpWatch;

UpWatch::file(
    '/absolute/path/to/file.jpg',
    '/absolute/path/to/var/log/uploads.log'
);
```

### Behavior

- Appends file path to uploads.log if it exists
- Throws RuntimeException if log missing (default)
- Returns false if `$abort = false`

```php
UpWatch::file($file, $log, false);
```

## Server Requirement

Semiorbit UpWatch must be installed on the server:

```bash
curl -fsSL https://raw.githubusercontent.com/semiorbit/UpWatch/main/install.sh | bash
```

## License

MIT
