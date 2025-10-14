
    <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">AAKDA/PANA DATA</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           
              <div class="modal-body">
                <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
            <div class="form-group">
              <label for="inputName" style=" font-size:15px;font-weight:bold;">Date 
              </label>
              <input type="date" name="date"  value='<?php echo set_value('date'); ?>' class="form-control" id="inputName1">
            </div>
          </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
            <div class="form-group">
              <label for="inputName" style=" font-size:15px;font-weight:bold;">Bazar
              </label>
              <select  name="bazar" value='<?php echo set_value('bazar'); ?>' class="form-control select_group" id="showbazar1" >
                   
                        <option value="">Select One</option>
            <?php
            $i=1;
    foreach ($b->result() as $row)
    {
    ?>      
                      <option value="<?php echo $row->id; ?>"><?php echo $row->bazar_name; ?></option>
      <?php

  }
?>
                      </select>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
            <div class="form-group">
              <label for="inputName"style=" font-size:15px;font-weight:bold;">Category</label>
              <select class="form-control select_group" onchange="top_bottom_call()" value='<?php echo set_value('category'); ?>'  name="category" id="showtype1" name="showWaiter">
                       <?php
                       
                       if(set_value('category')){
                       
                       ?>
                       
                        <option value="<?php echo set_value('category'); ?>"><?php echo set_value('category'); ?></option>
                       
                       <?php
                       
                       }
                       ?>
                        <option value="">Select One</option>
            <option value="open">open</option>
            <option value="close">close</option>
            
                      </select>
            </div>
          </div>
        </div>

                  <div class="tabbable">
                      <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                        <li class="active">
                          <a data-toggle="tab" href="#home4">TOP </a>&nbsp;&nbsp;&nbsp;&nbsp;|
                        </li>

                        <li>
                          &nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="tab" href="#profile4">BOTTOM</a>
                        </li>

                       
                      </ul>

                      <div class="tab-content" id="tab">
                    

                        
                      </div>
                    </div>
                  
              </div>
             
              <div class="modal-footer">
             <button class="btn btn-sm btn-danger" class="close" data-dismiss="modal">
          <i class="ace-icon  bigger-110 fa fa-times " ></i>
          <span class="bigger-110 no-text-shadow">Cancel</span>
        </button>
               
              </div>
  <script type="text/javascript">
    function top_bottom_call(){
 
  
    var bazar = $('#showbazar1').val();
    var category = $('#showtype1').val();
    var date = $('#inputName1').val();
    $.ajax({
            url:"<?php echo base_url();?>GameResult/search_top_bottom",
            type: "POST",
            data: {'bazar_id': bazar,'bazar_type':category,'date':date},
            dataType:'html',
            success: function (resultdata) {
                $('#tab').html(resultdata);
               
             }
          });
   }

  </script>