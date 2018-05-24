<?php

return [
    'shortname' => [
        'required' => true,
        'env'      => 'DISQUS_SHORTNAME',
        'bind'     => 'anomaly.extension.disqus_block::disqus.shortname',
        'type'     => 'anomaly.field_type.text',
    ],
];
