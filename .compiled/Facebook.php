<?php

namespace PhoNetworksAutogenerated;

use Pho\Framework;
use Pho\Kernel\Kernel;
use Pho\Kernel\Traits;
use Pho\Kernel\Foundation;




/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Facebook extends Foundation\AbstractGraphDP {

    const T_EDITABLE = false;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x0f751;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"founder\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}}}";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Kernel\Foundation\AbstractActor $actor, \Pho\Lib\Graph\GraphInterface $graph , \PhoNetworksAutogenerated\User $founder)
    {
        parent::__construct($kernel, $actor, $graph);
                $this->setFounder($founder, true);

        $this->persist();
    }

}

/*****************************************************
 * Timestamp: 1523555561
 * Size (in bytes): 1465
 * Compilation Time: 13
 * 71bd6152913f755e055accee551c8979
 ******************************************************/