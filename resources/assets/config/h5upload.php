<?php
return [
    'type_dev' => 'ali',//上传驱动
    'ali' => [
        // 端口设置
        'endpoint' => env('ALIYUN_OSS_ENDPOINT'),
        'bucket' => env('ALIYUN_OSS_BUCKET'),
        'bucket_private' => env('ALIYUN_OSS_BUCKET_PRIVATE'),

        // Access Key
        'access_key' => env('ALIYUN_OSS_ACCESS_KEY'),
        'access_secret' => env('ALIYUN_OSS_ACCESS_SECRET'),

        //sts
        'sts_ram' => env('ALIYUN_STS_RAM'),
        'sts_endpoint' => env('ALIYUN_STS_ENDPOINT'),
        'sts_region_id' => env('ALIYUN_STS_REGION_ID'),

        //域名
        'public_domain' => env('ALIYUN_OSS_PUBLIC_DOMAIN'),
        'private_domain' => env('ALIYUN_OSS_PRIVATE_DOMAIN'),
        'domain' => env('ALIYUN_OSS_DOMAIN'),

        'policy' => '{
        "Statement": [
            {
                "Action": [
                    "oss:GetBucketAcl",
                    "oss:ListObjects"
                ],
                "Effect": "Allow",
                "Resource": [
                    "acs:oss:*:*:$bucket/*"
                ]
            },
            {
                "Action": [
                    "oss:PutObject"
                ],
                "Effect": "Allow",
                "Resource":[
                    "acs:oss:*:*:$bucket/*"
                ]
            }
        ],
        "Version": "1"
        }'
    ]
];
