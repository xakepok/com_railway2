<?php
defined('_JEXEC') or die;
?>

<div>
	<ul>
		<?php
        $menu = JFactory::getApplication()->getMenu()->getMenu();
        foreach ($menu as $item) {
            if ($item->parent_id == '248') {
                ?>
                <li>
                    <?php echo JHtml::link(JRoute::_($item->link.'&Itemid='.$item->id), $item->title);?>
                </li>
                <?php
            }
        }
        ?>
	</ul>
</div>