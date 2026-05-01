# Static Analysis Tools Reference

This repository was originally created to evaluate and test open-source PHP static analysis tools (SATs) as part of a Master's program project in IT-Security at FH Technikum Wien (2019). Thirteen tools were evaluated; three were selected for a vulnerability scanning toolchain.

> Evaluation criteria, rankings, and scan results are from 2019. Current status reflects the state as of 2025/2026.

---

## Selected Tools (Toolchain)

### 1. Progpilot
A PHP static analysis tool focused on security vulnerabilities using taint analysis.
- **Repo:** https://github.com/designsecurity/progpilot
- **Install:** `composer require --dev designsecurity/progpilot`
- **2019 evaluation:** Ranked #1 — CLI, active community, error-free installation
- **Current status:** ✅ Active — 362 stars, last push August 2025

### 2. phpcs-security-audit v2
A set of PHP CodeSniffer rules that detect security vulnerabilities in PHP code.
- **Repo:** https://github.com/FloeDesignTechnologies/phpcs-security-audit
- **Install:** `composer require --dev pheromone/phpcs-security-audit`
- **2019 evaluation:** Ranked #2 — CLI, broad ruleset, active
- **Current status:** ⚠️ Maintained — 728 stars, last push January 2023

### 3. php-security-scanner
A lightweight PHP vulnerability scanner based on pattern matching.
- **Repo:** https://github.com/dustyfresh/PHP-vulnerability-audit-cheatsheet
- **Install:** Clone via git
- **2019 evaluation:** Ranked #3 — CLI, simple integration, some dependency issues
- **Current status:** ✅ Active — 364 stars, last push March 2025

---

## Scan Results (2019)

Findings per tool against the four test files in this repository:

| File | Progpilot | phpcs-security-audit | php-security-scanner |
|------|:---------:|:--------------------:|:--------------------:|
| `src/tool-examples/progpilot.php` | 1 | 1 | 1 |
| `src/tool-examples/php-security-scanner.php` | 1 | 1 | 3 |
| `src/tool-examples/phpcs-security-audit.php` | 5 | 50 | 0 |
| `src/basic-collection.php` | 3 | 3 | 2 |

Results represent the total number of findings (hints, warnings, errors). Tools show different strengths and overlaps — the toolchain covers a broader range than any single tool alone.

---

## All 13 Evaluated Tools

| # | Tool | K.O. | Reason / Note | Current Status |
|---|------|:----:|---------------|---------------|
| 1 | **Progpilot** | — | ✅ Selected (#1) | Active (2025) |
| 2 | ThunderScan | ✗ | Commercial, not open source | Commercial |
| 3 | RIPS 0.5 | ✗ | No API, web GUI only, deprecated | Superseded by RIPS NG |
| 4 | RIPS Next Generation | ✗ | Commercial, not open source | Commercial |
| 5 | **phpcs-security-audit v2** | — | ✅ Selected (#2) | Maintained (2023) |
| 6 | SonarPHP | — | IDE/GUI plugin only (SonarQube/SonarLint), not CLI | Active via SonarQube |
| 7 | PHP Malware Finder | — | Detects obfuscated/malware code, not a security scanner | Archived (2023) |
| 8 | SensioLabs Security Checker | ✗ | Checks dependencies, not source code | Deprecated |
| 9 | Parse | — | Installation issues, not error-free | Inactive (2018) |
| 10 | PHPStan | ✗ | Code quality tool, not a security scanner | Very active (13k stars) |
| 11 | PHP malware detector | — | No API response | Inactive |
| 12 | OWASP WAP | — | Ranked #4 (backup) — Java-based CLI, deprecated | Unavailable |
| 13 | **php-security-scanner** | — | ✅ Selected (#3) | Active (2025) |

---

## Selection Criteria (2019)

**K.O. criteria** — tool excluded if any not met:
- PHP and security code focus
- Static analysis tool
- Open source
- Source code availability

**Secondary criteria** — used for ranking:
- API or CLI availability
- Up-to-date / recent commits
- Community activity
- Operation mode
- Error-free installation and usage
