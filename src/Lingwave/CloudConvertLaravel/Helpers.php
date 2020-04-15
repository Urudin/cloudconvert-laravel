<?php

namespace Lingwave\CloudConvertLaravel;

class Helpers
{
    public static function getPublicObjectVars($obj)
    {
        return get_object_vars($obj);
    }

}
