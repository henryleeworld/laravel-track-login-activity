<?php

use Aginev\LoginActivity\Commands\LoginActivityClean;
use Illuminate\Support\Facades\Schedule;

Schedule::command(LoginActivityClean::class)->daily();
