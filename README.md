# Semiorbit UpWatch (PHP Helper)

This package is the PHP-side companion for **Semiorbit UpWatch**.

It only registers uploaded files for scanning (**using ClamAV/clamscan on RHEL based linux**) by the server-level UpWatch system.

## Installation

### 1. Install ClamAV (clamscan)
Make sure ClamAV is installed and working on your server.

### 2. Install Semiorbit UpWatch (Linux)
Install from GitHub:

[https://github.com/semiorbit/upwatch](https://github.com/semiorbit/upwatch)

### 3. Install semiorbit/upwatch PHP package in your web project
Note that your project should have a folder (create it) 
```shell
/home/USER/YOUR-PROJECT/var/log
```


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


MIT License  
2026 © Semiorbit Solutions
