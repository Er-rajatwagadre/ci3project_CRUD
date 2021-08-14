
<div class="btn-toolbar">
    <!-- <button data-toggle="modal" data-target="#addModal" class="btn btn-primary">New User</button>
    <a data-target="#addModal" role="button" data-toggle="modal" class="btn">Import</a>
    <button class="btn">Edit</button> -->
    <button type="button" class="btn btn-info " data-toggle="modal" data-target="#addData">Add Data</button>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>#id</th>
          <th> Name</th>
          <th>password</th>
          <!-- <th>Username</th> -->
          <th ></th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($data as $value){ ?>
        <tr>
          <td><?php echo $value->id; ?></td>
          <td><?php echo $value->name; ?></td>
          <td><?php echo $value->password; ?></td>
          <td>
              <a href="<?php echo base_url('crudController/editData/').$value->id; ?>"><i class="icon-pencil">Edit</i></a> || 
              <a href="<?php echo base_url('CrudController/deldata/').$value->id;?>" ><i class="icon-remove">Delete</i></a>
          </td>
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
</div>

<h3>Api urls</h3>
<div class="pagination">
    <ul>
        <li><a href="#">EMP API</a></li>
        <li><a href="#">1 ADD emp:</a> http://localhost/ci3project/CrudController/apiAddData [post data allowed]</li>
        <li><a href="#">2 Update emp</a> http://localhost/ci3project/CrudController/apiEditData/13?name=raj&password=321&editSubmit=1</li>
        <li><a href="#">3 Delete emp</a> http://localhost/ci3project/CrudController/apiDeleteData/9</li>
        <li><a href="#">4 Featch All emp</a> http://localhost/ci3project/CrudController/apiGetAll</li>
        <li><a href="#">4 Featch One emp</a> http://localhost/ci3project/CrudController/apiGetOne/11</li>
        <li><a href="#">Next</a></li>
    </ul>
<h3>Short API URL [Routes]</h3>
    <ul>
        <li><a href="#">Short API URL [Routes]</a></li>
        <li><a href="http://localhost/ci3project/restapi/addemp" target="_blank">1 ADD emp:   http://localhost/ci3project/restapi/addemp </a>  [post data allowed]</li>
        <li><a href="http://localhost/ci3project/restapi/editemp/15?name=raj12&password=321&editSubmit=1" target="_blank">2 Update emp:  http://localhost/ci3project/restapi/editemp/15?name=raj12&password=321&editSubmit=1</a> </li>
        <li><a href="http://localhost/ci3project/restapi/del/12" target="_blank">3 Delete emp:  http://localhost/ci3project/restapi/del/12 </a> </li>
        <li><a href="http://localhost/ci3project/restapi/allemp" target="_blank">4 Featch All emp: http://localhost/ci3project/restapi/allemp </a> </li>
        <li><a href="http://localhost/ci3project/restapi/empdata/2" target="_blank">4 Featch One emp:  http://localhost/ci3project/restapi/empdata/2</a> </li>
        <li><a href="#">Next</a></li>
    </ul>



</div>


 <!-- Modal -->
 <div class="modal fade" id="addData" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Emploayee Data</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <?php echo form_open('crudController/addEmp',['class'=>'form','name'=>'addform']);  ?>
          <div class="form-group">
         <?php   echo form_label('UserName','uname');
            echo form_input(['name'=>'name','class'=>'form-control']);
        ?>
          </div>  

          <div class="form-group">
         <?php   echo form_label('Password','pword');
            echo form_input(['name'=>'password','class'=>'form-control']);
        ?>
          </div>  
          <?php echo form_submit(['name'=>'submit','value'=>'Add User', 'class'=>"btn btn-success"]); ?>

          
          <?php echo form_close(); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>
  
