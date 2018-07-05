<?php

// 1) general: crop images: -------------------------------------------------------------------------------------------------------------
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [
  'default' => [
    'title' => 'Desktop',
    'allowedAspectRatios' => [
      'NaN' => [
        'title' => 'Free',
        'value' => 0.0
      ],
      '3:2' => [
        'title' => '3:2',
        'value' => 3 / 2
      ],
      '1:1' => [
        'title' => '1:1',
        'value' => 1 / 1
      ],
      'person' => [
        'title' => 'Portrait',
        'value' => 0.6666
      ],
    ],
    'selectedRatio' => 'NaN',
  ],
  'tablet' => [
    'title' => 'Tablet',
    'allowedAspectRatios' => [
      'NaN' => [
        'title' => 'Free',
        'value' => 0.0
      ],
      '3:2' => [
        'title' => '3:2',
        'value' => 3 / 2
      ],
      '1:1' => [
        'title' => '1:1',
        'value' => 1 / 1
      ],
      'person' => [
        'title' => 'Portrait',
        'value' => 0.6666
      ],
    ],
    'selectedRatio' => 'NaN',
  ],
  'mobile' => [
    'title' => 'Mobile',
    'allowedAspectRatios' => [
      'NaN' => [
        'title' => 'Free',
        'value' => 0.0
      ],
      '3:2' => [
        'title' => '3:2',
        'value' => 3 / 2
      ],
      '1:1' => [
        'title' => '1:1',
        'value' => 1 / 1
      ],
      'person' => [
        'title' => 'Portrait',
        'value' => 0.6666
      ],
    ],
    'selectedRatio' => 'NaN',
  ],
];

// 2) example: crop function for e.g. CE "MY_HEADER_CE"
// -------------------------------------------------------------------------------------------------------------
// $GLOBALS['TCA']['tt_content']['types']['MY_HEADER_CE']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
// 'desktop' => [
//   'title' => '11:3',
//   'allowedAspectRatios' => [
//     'NaN' => [
//         'title' => 'Desktop',
//         'value' => 0.0
//     ]
//   ]
// ],        
// 'landscape' => [
//   'title' => '256:125',
//   'allowedAspectRatios' => [
//     '256:125' => [
//       'title' => 'Tablet Landscape',
//       'value' => 256 / 125
//     ]
//   ]
// ],
// 'tablet' => [
//   'title' => '192:125',
//   'allowedAspectRatios' => [
//     '192:125' => [
//       'title' => 'Tablet Portrait',
//       'value' => 192 / 125
//     ]
//   ]
// ],
// 'mobile' => [
//   'title' => '6:5',
//   'allowedAspectRatios' => [
//     '6:5' => [
//       'title' => 'Phone',
//       'value' =>  6 / 5
//       ]
//     ]
//   ]
// ];