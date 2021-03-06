<?php

namespace ServerDev\NodeIcon\XF\Admin\Controller;

class Page extends XFCP_Page
{
	protected function saveTypeDataExtend(\XF\Mvc\FormAction $form, \XF\Entity\Node $node, \XF\Entity\AbstractNode $data)
	{
		$form->setup(function() use ($node)
	    {
	    	$input = $this->filter([
				'node' => [
					'fa_icon' => 'str'
				]
			]);

	        $node->fa_icon = $input['node']['fa_icon'];
	    });
	}
	
	protected function saveTypeData(\XF\Mvc\FormAction $form, \XF\Entity\Node $node, \XF\Entity\AbstractNode $data)
	{
	    parent::saveTypeData($form, $node, $data);
		$this->saveTypeDataExtend($form, $node, $data);
	}
}