<?php
return [
    'alipay' => [
        'app_id'         => '2016091300503330',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3gblTM0vxtT5HalKNctKgoRrqKy+wPwMJF2RM82XXu7fLizKGpP/WQgGgtHAhJK/vsFl3r8/iJcx4bZZrQS97ZmfpurRVMIp+Kts/+am35wRLa6S6/RJP2xCjzPKIo37ab8s/KLqL0nE9BwfxtDoHho8b4NkbAW15Y6WAX2PQwQ0Y5KPOnZ+C1IxCz6w3X1/CX43BTC7BrdC8RjqPuzJMCvcg7IOBhpOvqIl5t+MYcTTGn2C2DxUfLbv6w2CKcRIGlrPsDpjxKt/1NEQQIAynYezngRepg9vbnNK2NGJjWBDmYWDFmtM0pvejr8kOQUoagFX5QBQLZlSbHzbnG8CNwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAyxEOpk8B+RTszJvDj5STVJb7o7tBPZGdbNjWz6b3qi0wfyXFGSdBIJqHtJFxJpgQ6+1JeV5IigDi5OG1+gba55WcX8jKk64ezPIknGVVSAbznZv1fPae/tSbJM04s2hRFMMiv4hsb40zPlTfpIROJ7dd8Tz4E3GcKInEoy7Je0IJbFKxTBePIHuv0nBPIJqTQuIBc083E7GuhmsmOXM0I5ysodeXJlZu67NMEvrmti5vwbRvanh9F7EBw+FJ8aF8C/GIeUrMbU95n0bP6cYBQuLPWjAX1EdATB5+LHlqPIKEw+zPhhQlYdw3jo/YAgsEmBAQU7LBFJ79Y3afkgvOcQIDAQABAoIBAD5Pl500tThHUXpfeZy/TI4yXjkZpqVL33CdAR1q8KhJgY4iet6DCxsEEAw6bOwY0WhzwY36fmvKZdUx5XM5U0aow/koVfEHBvCAhPdwqMCXUX3Vc3jK/HLZrlmWl4WFxwuF7U20gQGh5E2GIbIL3yeUvsDdoonk3LQbwjkIjE7DoqogddkVIp2fKXZYOGrzkj9cqFmyX54aPcGZA/i6cr167QTAzBpR0Avlc5RCl6oQF0+4oZIV1Dl+V7bJB6ej5WJoH24mx2UFjxoh3EbHWFteUT60/nsbnpTmkeEsLipNzc1+XmpF5pnQCZsFPHxY+6KvvyHKiyduzZ5c30uJcYECgYEA7qDE2qYxBVv67RU8VIbsanHGRGGum15GTkDH6/JRAA2IGWeMOKsL/wU1lwcYKXViccsOcFROQuYzEOTiTATCaSMEHH3KHjmFPAa8uE8tjOepuXQ1o+Fnnuv+XTVfoOa7jbrLIbwe/ZoIyk5rzAqBiK2yH+/cGAnR7z7QEPl1OkkCgYEA2dmK77Tbxb3cWhRUwvsXHZpBjN5eA4C+m0PLbzZgJ4KLSeGyMOTf1ODYZv1llDqP8J/1PKPBZ5jaKsCwcTmWhn6JVzqkBlJheKQ2mo/UrahbrYZfg43sakyIOYMNrQr56LXtGu14Y/I1Z3UpyBIMMhx646p39nDYWJlGx+07sukCgYBJa2Wl8GQ8xeQadeIuD6VFyuO5vmQ+oW74PK5GRjPt1Dv/tQBLnzT9rdijMyeX+enkIRm8LfQ2WSV1GTcXNI+sUX2+VmWNjx0TLu95tcLKC60IxlyKo5uCJhIJE5bsppEmNkaxhnPyiyYROLep+8GHEAoyEVaifsL83VKfJmGPIQKBgQC+eCm1s1eD6KBEUgpZ/9cSFtDBLZrdTS9Z6UhxEAW6BbVq/14gybu6EGykf2DU3O8E35Y3UqXCwi3du2OJW2R0ayYBkk/fByAZrtnfAWpd+xlM+nOAPhI6Tne8cQ0AAtzFzmpkZMQh/p8auaGyP7VSCvyXGXCRk9BUho8QNidAIQKBgGRbKwVR2XAD3yaK6r8bHasXUvOw2MMaGfSF576gek/eGAlzri1v/0bQW+EAC3l/aDFCR8kBu9lWKECtNsMpjhL5DhYs7D3HitEmrb8CCNvRMrfRCgVPNB82Hko7st6Dtx6rORymqPH6tuVAGGKg8FeJJkEt2tjHnxLDojeTir1m',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '', // 公众号 app id
        'mch_id'      => '', // 第一步获取到的商户号
        'key'         => '',// 刚刚设置的 API 密钥
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];