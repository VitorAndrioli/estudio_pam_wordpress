=== WordPress File Monitor ===
Contributors: nicolly
Donate link: 
Tags: files, file, monitor, plugin, security, secure
Requires at least: 3.1
Tested up to: 4.7
Stable tag: 1.0.4

Monitor your website for added, changed and deleted files! Track changes in all website directories and get email alerts! Stay secure for free!

== Description ==

= Features =

- Monitoring file system for added / deleted / changed files.
- Tracking changes of the file size, modification date, permissions, file content.
- Sending email with the detailed information when changes are detected.
- Displaying monitor alerts in the administration area.
- Monitoring files for changes based on file hash, time stamp and/or file size.
- Excluding files and directories from scan.
- Allows to run the file checking via an external cron so not to slow down visits to your website and to give greater flexibility over scheduling.
- Allows to include / exclude files from scanning by extension.
- Multisite compatible (plugin settings are located under the Settings menu of the main website).

This plugin is a fork of the [WordPress File Monitor Plus](https://wordpress.org/plugins/wordpress-file-monitor-plus/) plugin which has not been updated for 5 years and contained a bunch of critical security issues.

= Languages = 

- Russian
- Arabic
- German
- Japanese

= Credits = 
Thanks to the <a href="https://likebtn.com/en/wordpress-like-button-plugin?utm_source=wfm3_readme&utm_campaign=wfm3_readme" title="WordPress Like Button Rating Plugin">LikeBtn</a> for providing a rating feature for our plugin.

== Installation ==

* Upload to a directory named "wordpress-file-monitor" in your plugins directory (usually wp-content/plugins/).
* Activate the plugin.
* Visit Settings page under Settings -> WordPress File Monitor in your WordPress Administration Area (if you are using WordPress in a Multisite mode, the plugin settings are located under the Settings menu of the main website)
* Configure plugin settings.

== Frequently Asked Questions ==

= Only admins can see the admin alert. Is it possible to let other user roles see the admin notice? =

Yes you can, add the following code to your wp-config.php file: `define('WFM3_ADMIN_ALERT_PERMISSION', 'capability');` and change the capability to a level you want. Please visit [Roles and Capabilities] to see all available capabilities that you can set to.

[Roles and Capabilities]: http://codex.wordpress.org/Roles_and_Capabilities

== Screenshots ==

1. Settings
2. Admin alert
3. Admin changed files report
4. Email changed files report

== Changelog ==

= 1.0.4 =
* Fixed: fixed get_home_path function not working occasionally on HHVM installations 

= 1.0.3 =
* Added: Track file permissions changes
* Added: Instructions for excluding files/dirs

= 1.0.0 =
* Lauched.