## Preparation

- Reset Got It tooltips
- Close all projects in PHPStorm
- Close PHPStorm
- Make sure ddev-integration-demo directory is deleted
- Make sure `ddev list` is clean
- Run `ddev poweroff`
- Close browser tabs
- `rm -Rf /run/WSL/*` before presentation to avoid Win11 interop bug

## Demonstration

- Start PHPStorm 2022.1
- `Checkout git@github.com:php-perfect/ddev-integration-demo.git` to
  `\\wsl$\Ubuntu\home\nl\projects\ddev-integration-demo`
- Show composer.json
- Show index.php
- Show World.php
- Show WorldTest.php
- Run ddev config
- Show autocompletion in `.ddev/config.yml` by changing to apache-fpm
- Write a new config key to show autocompletion list with description
- Run `ddev start`
- Run install in composer.json
- Run WorldTest.php
- Create `.ddev/php/xdebug.ini`
  ```ini
  [xdebug]
  xdebug.mode = develop,debug,profile,trace
  xdebug.start_with_request = trigger
  ```
- Set `xdebug_enabled=1` in `.ddev/config.yml`
- Debug WorldTest.php
- Run with coverage WorldTest.php -> Error because of missing /opt/phpstorm-coverage
- Open DDEV Terminal
    - `sudo mkdir /opt/phpstorm-coverage`
    - `sudo chmod a+rw /opt/phpstorm-coverage`
- Run WorldTest with coverage again
- Open Website via Status Bar
- Open Mailhog via Status Bar
- Open Database Administration via Status Bar
- Execute queries in `create.sql`
- Show database in database tool window
- Execute query in `select.sql`
- Modify select to show autocompletion
- Show Plugin Settings

## Epilogue

- Download from JetBrains Marketplace
- Beta Testing / Contributing
