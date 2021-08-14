<?php 
// print_r($emp);
echo form_open('crudController/editData/'.$emp[0]->id,array('class'=>'form','name'=>'editform')); ?>
<h1>Edit Form</h1>
<div class="form-group">
    <?php
    echo form_label('Username','uname');
    echo form_input(['name'=>'name','value'=>$emp[0]->name,'class'=>'form-control']);
    ?>
</div>
<div class="form-group">
    <?php
    echo form_label('password','pword');
    echo form_input(['name'=>'password','value'=>$emp[0]->password,'type'=>'password','class'=>'form-control']);
    ?>
</div>
<div class="form-group">
    <?php
    echo form_label('tested Dropdown','pword');
    // echo form_input(['name'=>'password','value'=>$emp[0]->password,'type'=>'password','class'=>'form-control']);
    echo form_dropdown('slect',['1'=>'-1','2'=>'-2','3'=>'3','55'=>'55'],'55',['class'=>'form-control']);
    ?>
</div>
<div class="form-group">
    <?php
    echo form_label('tested checkbox','pword');
    // echo form_input(['name'=>'password','value'=>$emp[0]->password,'type'=>'password','class'=>'form-control']);
    echo form_checkbox(['name'=>'gender','value'=>'male','class'=>'form-control','content'=>'ABC']);
    echo form_checkbox(['name'=>'gender','value'=>'male','class'=>'form-control']);
    ?>
</div>
<div class="form-group">
    <?php  echo form_label('tested radio','pword'); ?>
    <div class="form-control">
            <?php
           
            // echo form_input(['name'=>'password','value'=>$emp[0]->password,'type'=>'password','class'=>'form-control']);
                echo form_radio(['name'=>'sex','value'=>'Male']);
                echo form_label('Male');
                echo form_radio(['name'=>'sex','value'=>'Female']);
                echo form_label('Female');
            ?>
    </div>
</div>
<div class="form-group">
    <?php
    echo form_label('tested multiple button','pword');
    // echo form_input(['name'=>'password','value'=>$emp[0]->password,'type'=>'password','class'=>'form-control']);
    // echo form_dropdown('slect',['1'=>'-1','2'=>'-2','3'=>'3','55'=>'55'],'55',['class'=>'form-control']);
    echo form_reset(['name'=>'reset','value'=>'Reset ']);
    echo form_button(['name'=>'button','value'=>'add','class'=>'btn btn-primary','content'=>'Add']);
    ?>
</div>
<div class="form-group">
    <?php
    echo form_submit(['name'=>'editSubmit','value'=>"Edit Data",'class'=>'btn btn-warning']);
    ?>
</div>
<?php echo form_close(); ?>