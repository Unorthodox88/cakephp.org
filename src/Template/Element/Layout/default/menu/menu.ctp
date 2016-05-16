<ul class="menu">
    <li class="toggle-menu"><i class="fa icon_menu"></i></li>
    <li class="first">
        <?=
        $this->Html->link(
            $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-down']) . __('Documentation'),
            '#',
            ['escape' => false]
        );
        ?>
        <ul class="submenu">
            <?= $this->App->menuItems($this->Menu->documentationItems()); ?>
        </ul>
    </li>
    <li>
        <?=
        $this->Html->link(
            __('Business Solutions'),
            '/pages/business-solutions',
            ['escape' => false]
        );?>
    </li>
    <li>
        <?=
        $this->Html->link(
            __('Showcase'),
            ['plugin' => 'showcase', 'controller' => 'projects', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
    <li>
        <?=
        $this->Html->link(
            $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-down']) . __('Community'),
            '#',
            ['escape' => false]
        );
        ?>
        <div class="megamenu full">
            <div class="row">
				<div class="col-6">
                    <ul class="megamenu-list">
                        <li class="menu-title">
                            <?=
                            $this->Html->link(
                                $this->Html->tag('i', '', ['class' => 'fa fa-menu-title fa-comments-o']) . __('Help & Support'),
                                '#',
                                ['escape' => false]
                            ) ?>
                        </li>
                        <?= $this->App->menuItems($this->Menu->helpAndSupportItems()); ?>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="megamenu-list">
                        <li class="menu-title">
                            <?= $this->Html->link(
                                $this->Html->tag('i', '', ['class' => 'fa fa-menu-title fa-users']) . __('Community'),
                                '#',
                                ['escape' => false]
                            ) ?>
                        </li>
                        <?= $this->App->menuItems($this->Menu->communityItems()); ?>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div id="wrap" class="hide">
            <?= $this->element('Layout/default/menu/search') ?>
        </div>
    </li>
</ul>
