<?php
echo "Sequential processing\n";

function test1() {
	sleep(1);
	echo "b";
}

function test2() {
	sleep(2);
	echo "c";
}

test1();
test2();

echo"\n";
