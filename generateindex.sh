#!/bin/sh

echo "<?php include(\"accessTracker.php\"); ?>" >index.php
cat index.html >>index.php

