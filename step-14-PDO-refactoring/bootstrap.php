<?php

/*

A bootstrap file is like a factory worker where it
builds up a connection or something generic.

*/

require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make()
);
