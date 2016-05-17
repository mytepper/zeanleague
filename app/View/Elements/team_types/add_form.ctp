<section class="content">
	<div class="box">
		<div class="box-header with-border">
		  <h3 class="box-title">เพิ่มข้อมูลประเภททีม</h3>
		  <?php echo $this->Flash->render('team_types');?>
		</div>
		<div class="box-body">
			<?php
			echo $this->Form->create('TeamType', array(
				'inputDefaults' => array(
					'label' => false,
					'div' => false
				),
				'novalidate' => true,
			));
			?>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<?php echo $this->Form->input('name', array(
							'class' => 'form-control',
							'placeholder' => 'ชื่อ *'
						));?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<?php echo $this->Form->button('Save', array(
							  'class' => 'btn btn-primary',
							  'type' => 'submit'
						 ));?>
					</div>
				</div>
			</div>
			<?php echo $this->Form->end();?>
			</div>
	</div>
</section>
