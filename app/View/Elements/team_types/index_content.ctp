<?php $paginator = $this->Paginator; ?>
<section class="content">

  <!-- Default box -->
  <div class="box">
	<div class="box-header with-border">
	  <h3 class="box-title">ข้อมูลประเภททีมแบบรายการ</h3>
	  <div class="box-tools">
        <div style="width: 150px;" class="input-group input-group-sm">
			<?php
			echo $this->Form->create('TeamType', array(
				'inputDefaults' => array(
					'label' => false,
					'div' => false
				),
				'novalidate' => true,
				'type' => 'get'
			));
			?>
			<?php echo $this->Form->input('key', array(
				'class' => 'form-control pull-right',
				'value' => (isset($this->request->params['query']['key'])) ? $this->request->params['query']['key'] : ''
			));?>
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
          </div>
		  <?php echo $this->Form->end();?>
        </div>
      </div>
	</div>
	<div class="box-body">
		<table class="table">
			<thead>
				<th><?php echo $paginator->sort('TeamType.id', 'ID');?></th>
				<th><?php echo $paginator->sort('TeamType.name', 'ชื่อ');?></th>
				<th><?php echo $paginator->sort('TeamType.country', 'ประเภทประเทศ');?></th>
				<th><?php echo $paginator->sort('TeamType.leage', 'ประเภทลีค');?></th>
				<th><?php echo $paginator->sort('TeamType.division', 'ระดับชั้น');?></th>
				<th></th>
			</thead>
			<tbody>
			<?php if ($teamTypes) :?>
				<?php foreach ($teamTypes as $key => $value) : ?>
					<tr>
						<td><?php echo h($value['TeamType']['id']);?></td>
						<td><?php echo h($value['TeamType']['name']);?></td>
						<td><?php echo h($value['TeamType']['country']);?></td>
						<td><?php echo h($value['TeamType']['leage']);?></td>
						<td><?php echo h($value['TeamType']['division']);?></td>
						<td>

						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
			</tbody>
		</table>
		<?php echo $this->element('layouts/paginator_bottom');?>
	</div>
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
