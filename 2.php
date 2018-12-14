<?php
Swoole\Runtime::enableCoroutine();

go(function() {
	sleep(1);
	echoi "b";
});

go(function () {
	sleep(1);
	echo "c";
});
