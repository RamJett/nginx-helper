== Installation ==

1. Extract the zip file.
1. Add `PRESS_CACHE_OPTIONS` to your wp-config.php
1. Upload them to `/wp-content/mu-plugins/` directory on your WordPress installation.
1. Copy `/wp-content/mu-plugins/nginx-helper/nginx-helper-mu.php` to `/wp-content/mu-plugins/nginx-helper.php`

example:

```
define('PRESS_CACHE_OPTIONS', '{"enable_purge":1,"cache_method":"enable_fastcgi","purge_method":"get_request","enable_log":1,"log_level":"INFO","purge_homepage_on_edit":1,"purge_homepage_on_del":1,"purge_archive_on_edit":1,"purge_archive_on_del":1,"purge_page_on_mod":1,"purge_page_on_new_comment":1,"purge_page_on_deleted_comment":1}');
```

== Options ==

With example values

```
    [enable_purge] => 1
    [cache_method] => enable_fastcgi
    [purge_method] => get_request
    [enable_map] => 0
    [enable_log] => 0
    [log_level] => INFO
    [log_filesize] => 5
    [enable_stamp] => 0
    [purge_homepage_on_edit] => 1
    [purge_homepage_on_del] => 1
    [purge_archive_on_edit] => 1
    [purge_archive_on_del] => 1
    [purge_archive_on_new_comment] => 0
    [purge_archive_on_deleted_comment] => 0
    [purge_page_on_mod] => 1
    [purge_page_on_new_comment] => 1
    [purge_page_on_deleted_comment] => 1
    [purge_feeds] => 1
    [redis_hostname] => 127.0.0.1
    [redis_port] => 6379
    [redis_prefix] => nginx-cache:
    [redis_enabled_by_constant] => 0
```
