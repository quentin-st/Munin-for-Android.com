<?php

abstract class GCMStats
{
    /**
     * Returns GCM stats queried from GCM proxy
     *
     * @return array{'hits': number, 'last': number}
     */
    private static function getGCMStats(): array
    {
        $url = 'https://gcm-proxy.munin-for-android.com/stats/get';
        $json = file_get_contents($url);
        if ($json === false) {
            throw new RuntimeException('Could not query stats');
        }
        $json = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
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
    public static function getViewGCMStats(): array
    {
        $stats = self::getGCMStats();
        $hits = $stats['hits'];
        $lastHit = $stats['last'];

        // Compute average hits per time
        $diff = abs($lastHit-1470344400); // 1470344400 is when we began to stat
        $rate = $diff/$hits;

        return [
            'hits' => str_split((string) $hits),
            'last_hit' => self::humanReadableTimeDiff($lastHit, time()),
            'frequency' => self::humanReadable($rate)
        ];
    }

    /**
     * Date difference to human readable format
     *
     * Adapted from http://php.net/manual/fr/ref.datetime.php#90989
     */
    private static function humanReadableTimeDiff(int $date1, int $date2, string $format='text'): string
    {
        return self::humanReadable(abs($date1-$date2), $format);
    }

    /**
     * @param 'text'|'array' $format
     */
    private static function humanReadable(int|float $diff, string $format='text'): string|array
    {
        $blocks = [
            ['name'=>'year', 'amount'   =>    60*60*24*365  ],
            ['name'=>'month', 'amount'  =>    60*60*24*31   ],
            ['name'=>'week', 'amount'   =>    60*60*24*7    ],
            ['name'=>'day', 'amount'    =>    60*60*24      ],
            ['name'=>'hour', 'amount'   =>    60*60         ],
            ['name'=>'minute', 'amount' =>    60            ],
            ['name'=>'second', 'amount' =>    1             ]
        ];

        $levels = 2;
        $current_level = 1;
        $result = array();
        foreach($blocks as $block)
        {
            if ($current_level > $levels) {break;}
            if ($diff/$block['amount'] >= 1)
            {
                $amount = floor($diff/$block['amount']);
                $plural = $amount>1 ? 's' : '';
                $result[] = $format === 'text' ?
                    $amount.' '.$block['name'].$plural
                    : ['amount' => $amount, 'block' => $block['name'].$plural];
                $diff -= $amount*$block['amount'];
                $current_level++;
            }
        }
        return $format === 'text' ? implode(' ', $result) : $result;
    }
}
