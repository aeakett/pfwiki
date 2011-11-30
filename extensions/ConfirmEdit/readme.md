

A special case CAPTCHA plugin for ConfirmEdit. Instead of presenting a CAPTCHA to solve when adding a new link to an external site, A simple message is displayed indicating that the edit will not be accepted.

This plugin is really just a back-job on FancyCaptcha.php and family. Given the it's limited functionality, it might be worthwhile to re-implement it as it's own MediaWiki extension. That way, we could still use ConfirmEdit for account creation CAPTCHAs.