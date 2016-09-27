<?php

namespace mssql;

class Pdo extends \vitex\ext\Pdo
{
    public function getDsn($p)
    {
        $this->engine = isset($p['engine']) ? $p['engine'] : $this->engine;
        return $this->engine . ':Server=' . $p['host'] . ';Database=' . $p['database'] . ';';
    }
}
