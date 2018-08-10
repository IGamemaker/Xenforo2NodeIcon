<?php

namespace ServerDev\NodeIcon;

use XF\AddOn\AbstractSetup;
//<span class="node-icon" aria-hidden="true"><i></i></span>

class Setup extends AbstractSetup
{
	public function install(array $stepParams = [])
	{
		$this->schemaManager()->alterTable('xf_node', function (\XF\Db\Schema\Alter $table)
        {
            $table->addColumn('fa_icon', 'varchar', 50)->nullable()->after('effective_navigation_id');
        });
	}

	public function upgrade(array $stepParams = [])
	{
		
	}

	public function uninstall(array $stepParams = [])
	{
		$this->schemaManager()->alterTable('xf_node', function (\XF\Db\Schema\Alter $table)
        {
            $table->dropColumns(['fa_icon']);
        });
	}
}