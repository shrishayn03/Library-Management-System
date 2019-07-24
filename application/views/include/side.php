 <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Joe Romlin</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="<?php echo base_url('home/dash');?>">
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="<?php echo base_url('home/Book_stock_manage');?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i>Book Stock Manage     
	   
                       
                    </a>
                   
                </li>
                <li class="panel ">
                    <a href="<?php echo base_url('home/Book_Issue_Submit');?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i>Book Issue & Submit
	   
                     
                    </a>
                  
                </li>

                <li class="panel">
                    <a href="<?php echo base_url('home/member_manage');?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Memebers
	   
                    </a>
                  
                </li>
				
				 <li class="panel">
                    <a href="<?php echo base_url('home/submit_book_list');?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Submit Book List
	   
                    </a>
                  
                </li>
               
            <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Amount & Expenses
	   
                    </a>
                  
                </li>

              

                
           

            </ul>

        </div>