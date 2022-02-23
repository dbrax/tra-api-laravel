<?php

namespace Epmnzava\TraApiLaravel\Efdmsreg;


class Efdmsreg
{
    public function RegData($tin, $certkey)
    {
        $resData = "<REGDATA>
        <TIN>" . $tin . "</TIN>
        <CERTKEY>" . $certkey . "</CERTKEY>
        </REGDATA>";
        return $resData;
    }
}
