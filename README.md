# Grithin's PHP Tools Base Site Example
## Design Goal
-	Show how the tools can be used as a 'simple' framework

## Explanation
-	Point apache virtual host to /public
-	.htaccess will redirect requests for non-existent files to public/index.php
-	index.php will run the `\Grithin\Route`, using `control/_routing.php`
-	root route will load `control/_control.php` and then `control/index.php`
-	`control/index.php` will use `\Grithin\Template` to load `template/index.php`
-	`template/index.php` will wrap itself in `template/layout/standard.php`
-	`template/layout/standard.php` will wrap itself in `template/layout/top.php`


## Note
Added `control/cli.php` as an example of how to restrict web access to control files.