# PHP Vulnerability Examples for Static Analysis

A collection of deliberately vulnerable PHP code examples for use with static analysis tools (SATs), security training, and research.

Originally created as part of a Master's program project in IT-Security at the University of Applied Sciences Vienna (FH Technikum Wien).

## Vulnerabilities Covered

| File | Vulnerability |
|------|--------------|
| `src/sql-injection.php` | SQL Injection (PDO, SQLite) |
| `src/sql-injection_2.php` | SQL Injection (PDO, SQLite) |
| `src/cross-site-scripting-xss.php` | Cross-Site Scripting (XSS) |
| `src/basic-collection.php` | XSS, SQL Injection, Command Injection, Deprecated Functions |
| `src/path-traversal.php` | Path Traversal / Local File Inclusion |
| `src/csrf.php` | Cross-Site Request Forgery (CSRF) |
| `src/insecure-file-upload.php` | Insecure File Upload |
| `src/idor.php` | Insecure Direct Object Reference (IDOR) |
| `src/open-redirect.php` | Open Redirect |
| `src/sensitive-data-exposure.php` | Sensitive Data Exposure (Hardcoded Credentials) |

### Tool-specific Test Files

Files under `src/tool-examples/` contain test code tailored to specific SATs:

| File | Tool |
|------|------|
| `src/tool-examples/progpilot.php` | [Progpilot](https://github.com/designsecurity/progpilot) |
| `src/tool-examples/phpcs-security-audit.php` | [phpcs-security-audit](https://github.com/FloeDesignTechnologies/phpcs-security-audit) |
| `src/tool-examples/php-security-scanner.php` | [php-security-scanner](https://github.com/dustyfresh/PHP-vulnerability-audit-cheatsheet) |

## Usage

```bash
git clone https://github.com/rubennati/vulnerable-php-code-examples.git
```

Run any PHP SAT against the files in `src/`. The SQLite database in `database/` is used by the SQL injection examples.

## Related

Based on research comparing open-source PHP static analysis tools and their effectiveness when combined into a toolchain. The evaluated SATs include Progpilot, phpcs-security-audit, php-security-scanner, OWASP WAP, SonarPHP, RIPS, and others.

## Warning

This repository contains intentionally insecure code. Do not deploy or use in production environments.
