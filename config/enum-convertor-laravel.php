<?php

return [
    /*
     * relative paths from the project root
     */
    'enum_paths' => [
        'app/Enums' => 'resources/js/types/enums',
        // 'input/folder' => 'output/folder'
    ],

    /*
     * extension to use for the enum files
     */
    'enum_extension' => '.ts',

    /*
     * Enable File hash check
     * - adds a hash check to determine if a file has changed to speed up performance
     */
    'enable_file_hash_check' => true,
];
