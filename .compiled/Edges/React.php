<?php

namespace PhoNetworksAutogenerated\Edges 
{

use Pho\Kernel\Traits\Edge\PersistentTrait;
use Pho\Framework;
use Pho\Kernel\Foundation;



/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class React extends Foundation\ActorOut\Subscribe {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "reactee";
    const HEAD_LABELS = "reactees";
    const TAIL_LABEL = "reactor";
    const TAIL_LABELS = "reactors";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\ObjectNode::class];
    

    const FIELDS = "{\"type\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"uuid\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null},\"directives\":{\"md5\":false,\"now\":false,\"default\":\"Like\"}}}";

}

/* Predicate to load as a partial */
class ReactPredicate extends Foundation\ActorOut\SubscribePredicate
{
    protected $binding = false;
    protected $multiplicable = false;
    
    const T_CONSUMER = true;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */

}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1518
 * Compilation Time: 1931
 * 55ad7fc2cb3ecc58ef8d2ce13c633ebb
 ******************************************************/