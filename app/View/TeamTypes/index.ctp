<?php
$this->layout = 'admin';
$this->set('title_for_layout', 'title_for_layout');
$this->Html->css('bootstrap', array('inline' => false));
$this->Html->css('AdminLTE', array('inline' => false));
$this->Html->css('_all-skins', array('inline' => false));
echo $this->element('team_types/index_content');
?>
