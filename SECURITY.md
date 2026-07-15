# Security Policy

## Supported Versions

We actively maintain and provide security patches for the following versions of PhisingSim:

| Version | Supported |
| ------- | --------- |
| 1.0.x   | Yes       |
| < 1.0   | No        |

## Reporting a Vulnerability

We take the security of this project seriously. If you discover any security vulnerability within PhisingSim (either in the core system or templates), please do **not** open a public issue on GitHub. Instead, report it responsibly.

### How to Report
Please send an email to the repository owner/maintainer. 
*(Note: If you are setting up this repository, please update this file with your email address or preferred contact method).*

In your report, please include:
1. **Description**: A detailed description of the vulnerability and its potential impact.
2. **Steps to Reproduce**: Step-by-step instructions (or a proof-of-concept script/exploit) to replicate the issue.
3. **Environment Details**: PHP version, Laravel version, OS, browser, etc.
4. **Suggested Mitigation**: If you have a fix or mitigation suggestion, please include it.

### Scope
Only vulnerabilities in the PhisingSim framework itself (e.g., SQL Injection, XSS in the dashboard, Remote Code Execution, Privilege Escalation) are in scope. Out-of-scope issues include:
- Standard behavior of the templates (e.g., that they look like Facebook or other login pages, as that is the intended design of the simulator).
- Missing HTTPS/SSL configuration on your local development environment (which is a deployment configuration responsibility).

### Our Commitment
We will acknowledge receipt of your vulnerability report within 48 hours and work to provide a patch or mitigation as quickly as possible. We ask that you give us reasonable time to fix the issue before disclosing it publicly.
