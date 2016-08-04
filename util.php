<?php

/**
 * Returns GCM stats queried from GCM proxy
 * @return array
 */
function getGCMStats() {
    $url = 'https://gcm-proxy.munin-for-android.com/stats/get';
    $json = json_decode(file_get_contents($url), true);
    $hits = $json['hits_count'];
    $last = $json['last_hit'];

    return [
        'hits' => $hits,
        'last' => $last
    ];
}

/**
 * Returns GCM stats directly usable in view
 */
function getViewGCMStats() {
    $stats = getGCMStats();
    $hits = $stats['hits'];
    /** @var DateTime $lastHit */
    $lastHit = $stats['last'];

    return [
        'hits' => $hits_array = str_split(str_pad($hits, strlen($hits)+1, '0', STR_PAD_LEFT)),
        'last_hit' => compare_dates($lastHit, time())
    ];
}

/**
 * Date difference to human readable format
 * Adapted from http://php.net/manual/fr/ref.datetime.php#90989
 * @param $date1
 * @param $date2
 * @return string
 */
function compare_dates($date1, $date2) {
    $blocks = [
        ['name'=>'year', 'amount'   =>    60*60*24*365  ],
        ['name'=>'month', 'amount'  =>    60*60*24*31   ],
        ['name'=>'week', 'amount'   =>    60*60*24*7    ],
        ['name'=>'day', 'amount'    =>    60*60*24      ],
        ['name'=>'hour', 'amount'   =>    60*60         ],
        ['name'=>'minute', 'amount' =>    60            ],
        ['name'=>'second', 'amount' =>    1             ]
    ];

    $diff = abs($date1-$date2);

    $levels = 2;
    $current_level = 1;
    $result = array();
    foreach($blocks as $block)
    {
        if ($current_level > $levels) {break;}
        if ($diff/$block['amount'] >= 1)
        {
            $amount = floor($diff/$block['amount']);
            if ($amount>1) {$plural='s';} else {$plural='';}
            $result[] = $amount.' '.$block['name'].$plural;
            $diff -= $amount*$block['amount'];
            $current_level++;
        }
    }
    return implode(' ', $result).' ago';
}
