# PHP SWoole Coroutines

## ToC

- Swoole Coroutines => ./coroutines

## Source

- [https://www.swoole.co.uk/article/swoole-coroutine](https://www.swoole.co.uk/article/swoole-coroutine)


## Setup

```bash
	pecl install swoole			   # install SWoole onto the machine
	php -i | grep php.ini                      # check the php.ini file location
	sudo echo "extension=swoole.so" >> php.ini # add the extension=swoole.so to the end of php.ini
	php -m | grep swoole                       # check if the swoole extension has been enabled
```


## Run

```bash
	time php {{filename}}.php
```

