<?php

namespace ServerDev\NodeIcon;

use XF\Mvc\Entity\Entity;

class Listener
{
    public static function nodeEntityStructure(\XF\Mvc\Entity\Manager $em, \XF\Mvc\Entity\Structure &$structure)
    {
    	$structure->columns['fa_icon'] = ['type' => Entity::STR, 'nullable' => true];
    }
}