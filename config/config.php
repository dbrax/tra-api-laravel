<?php


return [

    "vfd_reg_endpoint" => "https://virtual.tra.go.tz/efdmsRctApi/api/vfdRegReq",

    "vfd_receipt_post_endpoint" => "https://virtual.tra.go.tz/efdmsRctApi/api/efdmsRctInfo",

    "zreport_endpoint" => "https://virtual.tra.go.tz/efdmsRctApi/api/efdmszreport",

    "vdf_token_post_endpoint" => "https://virtual.tra.go.tz/efdmsRctApi/vfdtoken",

    "receipt_verification_endpoint" => "https://virtual.tra.go.tz/efdmsRctVerify",

    "cert_serial" => env("VFD_CERT_SERIAL", ""), // provided by tra during registration

    "client" => env("VFD_CLIENT", "") // provided by tra during integration


];
