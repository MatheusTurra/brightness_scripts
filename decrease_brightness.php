#!/usr/bin/php
<?php

$new_brightness = 1.0;
$dec_brightness_command = "";
$current_brightness = shell_exec("xrandr --verbose | grep -m 1 -i brightness | cut -f2 -d ' '");

if($current_brightness > 0.1) {
   $new_brightness = floatval($current_brightness) - 0.1;
   $dec_brightness_command = "xrandr --output eDP-1 --brightness $new_brightness ; xrandr --output HDMI-1 --brightness $new_brightness";
   shell_exec($dec_brightness_command);
}
