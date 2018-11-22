<?php

$ip_ranges = [];
if (env('IP_LABELS', [])) {
    foreach (env('IP_LABELS', []) as $label) {
        if (env('IP_RANGES_' . $label, [])) {
            if (env('IP_NAME_' . $label)) {
                $name = env('IP_NAME_' . $label);
            }
            else{
                $name = $label;
            }
            $ip_ranges[$name] = env('IP_RANGES_' . $label, []);
        }
    }
}

return ['ip_ranges' => $ip_ranges];
