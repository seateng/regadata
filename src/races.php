<?php
$app['races'] = array(
    'tjv2013' => array(
        'id'                 => 'tjv2013',
        'hashtag'            => 'tjv2013',
        'showTwailorHashtag' => false,
        'host'               => 'tjv2013.regadata.org',
        'ua'                 => 'UA-328215-6',

        'departure'          => 'Le Havre',
        'departure_lat'      => '49.4900000',
        'departure_lon'      => '00.1000000',

        // 'arrival'            => 'Itajaí',
        // 'arrival_lat'        => '-26.9077778',
        // 'arrival_lon'        => '-048.6619444',

        'arrival'            => 'Roscoff',
        'arrival_lat'        => '48.7162, ',
        'arrival_lon'        => '-3.9652',

        'total_distance'     => '5450',

        'start_date'         => 'sunday 3 november 2013 13:02',
        // 'url_update'         => 'http://transat-jacquesvabre.geovoile.com/2013/shared/data/race/update.hwz',
        // 'url_static'         => 'http://transat-jacquesvabre.geovoile.com/2013/shared/data/race/static.hwz',
        'url_xls'            => 'http://www.transat-jacques-vabre.com/sites/default/files/classement/%file%',
        'url_map'            => 'http://tracking.transat-jacques-vabre.com/fr/',
        'url_gmap'           => 'http://goo.gl/GjX18r', // https://maps.google.com/?q=http://tjv2013.regadata.org/kml/tjv2013/trace_FULL.kmz
        'parser'             => 'geovoile',
        'type'               => 'race',
        'tweetUrlFr'         => 'goo.gl/iqqyF0', // http://tjv2013.regadata.org/fr/reports/latest?utm_source=twitter&utm_medium=link&utm_campaign=twitter_fr
        'tweetUrlEn'         => 'goo.gl/yU7dhP', // http://tjv2013.regadata.org/en/reports/latest?utm_source=twitter&utm_medium=link&utm_campaign=twitter_en
        'xls_service'        => 'srv.tjv2013xls',
        'xls_service_class'  => 'Service\Xls\Tjv2013Xls',
        'showReportFooter'   => true,
        'modes'              => array(
            'class40' => 'Class 40',
            'multi50' => 'Multi 50',
            'imoca'   => 'IMOCA',
            'mod70'   => 'MOD 70',
        ),
        'menu'               => array(
            'map'           => true,
            'documentation' => true,
            'about'         => false,
        ),
    ),
    'mini2013' => array(
        'id'                 => 'mini2013',
        'hashtag'            => 'MiniTransat',
        'showTwailorHashtag' => false,
        'host'               => 'mini2013.regadata.org',
        'ua'                 => 'UA-328215-6',
        'departure'          => 'Sada',
        'departure_lat'      => '43.3609',
        'departure_lon'      => '-8.2465',
        'arrival'            => 'Pointe-à-Pitre',
        'arrival_lat'        => '16.2411',
        'arrival_lon'        => '-61.5331',
        'total_distance'     => '1250',

        // 'arrival'            => 'Lanzarote',
        // 'arrival_lat'        => '19.6716700',
        // 'arrival_lon'        => '-99.3350000',
        // 'total_distance'     => '2770',

        'start_date'         => 'tuesday 29 october 2013 13:00',
        // 'url_update'         => 'http://transat-jacquesvabre.geovoile.com/2013/shared/data/race/update.hwz',
        // 'url_static'         => 'http://transat-jacquesvabre.geovoile.com/2013/shared/data/race/static.hwz',
        'url_xls'            => 'http://www.minitransat.fr/classement/historique/doc/%file%',
        'url_map'            => 'http://www.minitransat.fr/cartographie',
        'url_gmap'           => 'http://goo.gl/PJpyA0', // https://maps.google.com/?q=http://mini2013.regadata.org/kml/mini2013/trace_FULL.kmz
        'parser'             => 'geovoile',
        'type'               => 'race',
        'tweetUrlFr'         => 'goo.gl/t1zp9L', // http://mini2013.regadata.org/fr/reports/latest?utm_source=twitter&utm_medium=link&utm_campaign=twitter_fr
        'tweetUrlEn'         => 'goo.gl/aHv5cw', // http://mini2013.regadata.org/en/reports/latest?utm_source=twitter&utm_medium=link&utm_campaign=twitter_en
        'xls_service'        => 'srv.mini2013xls',
        'xls_service_class'  => 'Service\Xls\Mini2013Xls',
        'showReportFooter'   => true,
        'modes'              => false,
        'menu'               => array(
            'map'           => true,
            'documentation' => true,
            'about'         => false,
        ),
    ),
    'tbm2013' => array(
        'id'                 => 'tbm2013',
        'hashtag'            => 'TransatBM',
        'showTwailorHashtag' => false,
        'host'               => 'tbm2013.regadata.org',
        'ua'                 => 'UA-328215-6',
        'departure'          => 'Brest',
        'departure_lat'      => '48.390604',
        'departure_lon'      => '-4.486901',
        'arrival'            => 'Fort-de-France',
        'arrival_lat'        => '14.603518',
        'arrival_lon'        => '-61.066818',
        'start_date'         => 'sunday 17 march 2013 13:00',
        'total_distance'     => '3500',
        'url_update'         => 'http://transat-bretagnemartinique.geovoile.com/2013/shared/data/race/leg1.update.hwz',
        'url_static'         => 'http://transat-bretagnemartinique.geovoile.com/2013/shared/data/race/leg1.static.hwz',
        'url_xls'            => 'http://www.transat-bretagnemartinique.com/fr/s10_classement/s10p04_get_xls.php?no_classement=%file%',
        'url_map'            => 'http://transat-bretagnemartinique.geovoile.com/2013/',
        'url_gmap'           => 'http://goo.gl/BE59RZ', // https://maps.google.com/?q=http://tbm2013.regadata.org/kml/tbm2013/trace_FULL.kmz
        'parser'             => 'geovoile',
        'type'               => 'race',
        'tweetUrlFr'         => 'goo.gl/rDb2z', // http://tbm2013.regadata.org/fr/reports/latest?utm_source=twitter&utm_medium=link&utm_campaign=twitter_fr
        'tweetUrlEn'         => 'goo.gl/PXc96', // http://tbm2013.regadata.org/en/reports/latest?utm_source=twitter&utm_medium=link&utm_campaign=twitter_en
        'xls_service'        => 'srv.tbmxls',
        'xls_service_class'  => 'Service\Xls\Tbm2013Xls',
        'showReportFooter'   => true,
        'modes'              => false,
        'menu'               => array(
            'map'           => true,
            'documentation' => true,
            'about'         => false,
        ),
    ),
    'vg2012' => array(
        'id'                 => 'vg2012',
        'hashtag'            => 'VG2012',
        'showTwailorHashtag' => false,
        'host'               => 'vg2012.saliou.name',
        'ua'                 => 'UA-328215-5',
        'departure'          => "Les Sables-d'Olonne",
        'departure_lat'      => '46.4972',
        'departure_lon'      => '-1.7833',
        'arrival'            => "Les Sables-d'Olonne",
        'arrival_lat'        => '46.4972',
        'arrival_lon'        => '-1.7833',
        'start_date'         => 'saturday 10 november 2012 15:02',
        'total_distance'     => '24016',
        'url_xls'            => 'http://tracking2012.vendeeglobe.org/download/%file%',
        'url_map'            => 'http://tracking2012.vendeeglobe.org/fr/',
        'url_gmap'           => 'http://goo.gl/jCUHeK', // https://maps.google.com/?q=http://vg2012.saliou.name/kml/vg2012/trace_FULL.kmz
        'parser'             => 'vg',
        'type'               => 'race',
        'tweetUrlFr'         => 'goo.gl/B8yKv', // http://vg2012.saliou.name/fr/reports/latest?utm_source=twitter&utm_medium=link&utm_campaign=twitter_fr
        'tweetUrlEn'         => 'goo.gl/3VJyD', // http://vg2012.saliou.name/en/reports/latest?utm_source=twitter&utm_medium=link&utm_campaign=twitter_en
        'showReportFooter'   => true,
        'xls_service'        => 'srv.vgxls',
        'xls_service_class'  => 'Service\Xls\Vg2012Xls',
        'modes'              => false,
        'menu'               => array(
            'map'           => true,
            'documentation' => true,
            'about'         => true,
        ),
    ),
    'guochuansailing-2012' => array(
        'id'            => 'guochuansailing-2012',
        'host'          => 'guochuansailing-2012.regadata.org',
        'departure'     => 'Sanghai',
        'departure_lat' => '46',
        'departure_lon' => '-1',
        'arrival'       => 'Sanghai',
        'arrival_lat'   => '47',
        'arrival_lon'   => '-1',
        'start_date'    => 'saturday 10 november 2012 15:02',
        'url_update'    => 'http://guochuansailing.geovoile.com/roundtheworld/2012/shared/data/race/update.hwz',
        'url_static'    => 'http://guochuansailing.geovoile.com/roundtheworld/2012/shared/data/race/static.hwz',
        'parser'        => 'geovoile',
        'type'          => 'record',
        'modes'         => false,
    ),
    'soldini-2012' => array(
        'id'            => 'soldini-2012',
        'host'          => 'soldini-2012.regadata.org',
        'departure'     => 'New York',
        'departure_lat' => '46',
        'departure_lon' => '-1',
        'arrival'       => 'San Francisco',
        'arrival_lat'   => '47',
        'arrival_lon'   => '-1',
        'start_date'    => 'saturday 10 november 2012 15:02',
        'url_update'    => 'http://soldini.geovoile.com/newyorksanfrancisco/2012/private/data/update.hwz',
        'url_static'    => 'http://soldini.geovoile.com/newyorksanfrancisco/2012/private/data/static.hwz',
        'parser'        => 'geovoile',
        'type'          => 'record',
        'modes'         => false,
    ),
);
