<?php

interface HttpCustomClientContract
{
//    public function __constructor($method, $link, $selector);
    public function setParameters($method ,$link, $selector);
    public function getClient();
}