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

class StatusUpdate extends Foundation\AbstractObjectDP {

    const T_EDITABLE = true;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x07500;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"content\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"255\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"create_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}}}";

    const FEED_SIMPLE = "";
    const FEED_AGGREGATED = "";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Kernel\Foundation\AbstractActor $actor, \Pho\Lib\Graph\GraphInterface $graph , string $content)
    {
        $this->registerIncomingEdges(Edges\Post::class);
        $this->registerIncomingEdges(Edges\React::class);
        $this->registerIncomingEdges(Edges\Comment::class);
        $this->registerIncomingEdges(Edges\Consume::class);
        if(class_exists(PhoNetworksAutogenerated\Edges\Mention::class))
            $this->registerOutgoingEdges(PhoNetworksAutogenerated\Edges\Mention::class);
        parent::__construct($kernel, $actor, $graph);
                $this->setContent($content, true);
        $this->setCreateTime(time(), true);

        $this->persist();
    }

}

/*****************************************************
 * Timestamp: 1523668278
 * Size (in bytes): 2241
 * Compilation Time: 14
 * e890b04eee17e9adfd38ec0f6bfd6b55
 ******************************************************/