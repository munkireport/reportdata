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

return ['ip_ranges' => $ip_ranges,
       
	/*
	|===============================================
	| Client inactivity
	|===============================================
	|
	| Set this to be the number of days until a client shows as
	| being inactive in the round Client Activity widget, default is
	| 30 days.
	|
	*/
	$conf['days_inactive'] = getenv_default(30);
       
       ];
