<?php

$chan = new chan(2); // create a new channel 
$chan->pop(); // Read data from the channel, it will block and wait if the channel is empty
$chan->push(); // Write data into the channel, it will block and wait if the channel is full


