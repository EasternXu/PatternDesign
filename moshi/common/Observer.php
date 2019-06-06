<?php

namespace common;

interface Observer
{
    function update($event = null);
}