# Vulnerability Reference

A simple reference for all vulnerability types covered in this repository, with OWASP classification.

---

## Command Injection
Unsanitized user input is passed directly to a system command.
An attacker can execute arbitrary commands on the server.
→ OWASP: [A03:2021 – Injection](https://owasp.org/Top10/A03_2021-Injection/)
→ `src/basic-collection.php`

---

## Cross-Site Request Forgery (CSRF)
A malicious site tricks a logged-in user's browser into sending an unintended request.
An attacker can perform actions on behalf of the victim without their knowledge.
→ OWASP: [A01:2021 – Broken Access Control](https://owasp.org/Top10/A01_2021-Broken_Access_Control/)
→ `src/csrf.php`

---

## Cross-Site Scripting (XSS)
Unsanitized user input is rendered as HTML or JavaScript in the browser.
An attacker can steal session cookies, redirect users, or deface pages.
→ OWASP: [A03:2021 – Injection](https://owasp.org/Top10/A03_2021-Injection/)
→ `src/cross-site-scripting-xss.php`

---

## Insecure Deserialization
User-supplied data is deserialized without validation.
An attacker can inject malicious objects to execute arbitrary code or manipulate application logic.
→ OWASP: [A08:2021 – Software and Data Integrity Failures](https://owasp.org/Top10/A08_2021-Software_and_Data_Integrity_Failures/)
→ `src/insecure-deserialization.php`

---

## Insecure Direct Object Reference (IDOR)
Resources are accessed directly by user-supplied IDs without ownership checks.
An attacker can access or modify other users' data by changing the ID.
→ OWASP: [A01:2021 – Broken Access Control](https://owasp.org/Top10/A01_2021-Broken_Access_Control/)
→ `src/idor.php`

---

## Insecure File Upload
Uploaded files are stored without validating type or content.
An attacker can upload a PHP webshell and execute arbitrary code on the server.
→ OWASP: [A04:2021 – Insecure Design](https://owasp.org/Top10/A04_2021-Insecure_Design/)
→ `src/insecure-file-upload.php`

---

## LDAP Injection
User input is inserted directly into an LDAP query without escaping.
An attacker can manipulate the query to bypass authentication or extract directory data.
→ OWASP: [A03:2021 – Injection](https://owasp.org/Top10/A03_2021-Injection/)
→ `src/ldap-injection.php`

---

## Open Redirect
A user-supplied URL is used directly in a redirect without validation.
An attacker can redirect victims to malicious sites, enabling phishing attacks.
→ OWASP: [A01:2021 – Broken Access Control](https://owasp.org/Top10/A01_2021-Broken_Access_Control/)
→ `src/open-redirect.php`

---

## Path Traversal / Local File Inclusion
User input is used directly in a file path without sanitization.
An attacker can read arbitrary files on the server, including sensitive configuration files.
→ OWASP: [A01:2021 – Broken Access Control](https://owasp.org/Top10/A01_2021-Broken_Access_Control/)
→ `src/path-traversal.php`

---

## Remote File Inclusion (RFI)
A user-supplied path is passed directly to an include statement.
An attacker can load and execute a remote malicious PHP file on the server.
→ OWASP: [A03:2021 – Injection](https://owasp.org/Top10/A03_2021-Injection/)
→ `src/remote-file-inclusion.php`

---

## Security Misconfiguration
Verbose error reporting and server information are exposed in production.
An attacker gains detailed insight into the system, aiding further attacks.
→ OWASP: [A05:2021 – Security Misconfiguration](https://owasp.org/Top10/A05_2021-Security_Misconfiguration/)
→ `src/security-misconfiguration.php`

---

## Sensitive Data Exposure
Credentials and API keys are hardcoded directly in source code.
An attacker with code access gains immediate access to databases and external services.
→ OWASP: [A02:2021 – Cryptographic Failures](https://owasp.org/Top10/A02_2021-Cryptographic_Failures/)
→ `src/sensitive-data-exposure.php`

---

## Session Fixation
An attacker-supplied session ID is accepted without regeneration after login.
An attacker can hijack a victim's session by knowing the session ID in advance.
→ OWASP: [A07:2021 – Identification and Authentication Failures](https://owasp.org/Top10/A07_2021-Identification_and_Authentication_Failures/)
→ `src/session-fixation.php`

---

## SQL Injection
Unsanitized user input is inserted directly into a database query.
An attacker can read, modify, or delete data — or execute commands on the database server.
→ OWASP: [A03:2021 – Injection](https://owasp.org/Top10/A03_2021-Injection/)
→ `src/sql-injection.php`, `src/sql-injection_2.php`

---

## Type Juggling
PHP's loose comparison operator (`==`) coerces types, leading to unexpected results.
An attacker can bypass authentication or logic checks by exploiting type coercion.
→ OWASP: [A07:2021 – Identification and Authentication Failures](https://owasp.org/Top10/A07_2021-Identification_and_Authentication_Failures/)
→ `src/type-juggling.php`, `src/type-juggling_2.php`

---

## Weak Cryptography
Insecure hashing algorithms (MD5, SHA1) and weak random number generation are used for security-sensitive operations.
An attacker can crack hashed passwords or predict generated tokens.
→ OWASP: [A02:2021 – Cryptographic Failures](https://owasp.org/Top10/A02_2021-Cryptographic_Failures/)
→ `src/weak-cryptography.php`

---

## XML External Entity (XXE)
External XML entities are enabled when parsing user-supplied XML.
An attacker can read local files, perform SSRF, or cause denial of service.
→ OWASP: [A05:2021 – Security Misconfiguration](https://owasp.org/Top10/A05_2021-Security_Misconfiguration/)
→ `src/xxe.php`
