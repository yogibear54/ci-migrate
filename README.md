# Migration Controller for Codeigniter
This migration class allows you to run migrations through the command line.

Migrations can be run by typing the following:

- Latest migration
`php index.php migrate/now`

- Specific migration #
`php index.php migrate/now/2`

## Moving the migration number
When you've created your next migration, update the migration version number.

- Open 'application/config/migration.php'
- Update the following with the latest migration number:  $config['migration_version'] = 1;
- Run migration:  `php index.php migrate/now`