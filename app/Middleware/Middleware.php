<?php

namespace Mahathir\RailMvc\Middleware;

interface Middleware {
    function before(): void;
}