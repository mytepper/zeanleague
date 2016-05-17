<?php $paginator = $this->Paginator; ?>
<div class="box-footer clearfix">
	<ul class="pagination pagination-sm no-margin pull-right">
		<li><?php echo $paginator->first("First"); ?></li>
		<?php if($paginator->hasPrev()){
			echo '<li>';
            echo $paginator->prev("Prev");
			echo '</li>';
		} ?>
		<li><?php echo $paginator->numbers(array('modulus' => 10)); ?></li>
		<?php if($paginator->hasNext()){
			echo '<li>';
            echo $paginator->next("Next");
			echo '</li>';
		} ?>
		<li><?php echo $paginator->last("Last"); ?></li>
	</ul>
</div>
