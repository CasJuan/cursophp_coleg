<?php


class DBConection {

    const DEFAUL_HOST =  "mysql";

    public function __construct($dns = "mysql")
    {
        //existo
    }

}

$singleton = new DBConection(DBConection::DEFAUL_HOST);
