# Laravel Fix For PostgreSQL 'pgbouncer'



### This is a small fix for boolean values in Laravel, when PostgreSQL connection set-up with parameter:
``` PDO::ATTR_EMULATE_PREPARES => true ```


### Instruction: 
- Copy `PostgresConnection.php` in `App\Database` folder
- Connect `PostgresConnection` class in `AppServiceProvider.php` file like in [example](AppServiceProvider.php)
- Add `casts` in you models for all boolean values
