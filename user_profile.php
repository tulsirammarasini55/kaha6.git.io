
<?php
include 'navbar1.php';
?>

  <div id="page-wrapper">
   <div class="row" style="margin-top: 62px;">
    <div class="card mb-3 col-sm-12 col-lg-3 col-md-6" style="" >			 
      <div class="card-header"  style="text-align: center;">Tulsiram Marasini</div>
			    <div class="card-body">
                    <form action="dataprocessing.php" method="POST">
                      <img src="images/bike.jpg" class="card-img-top img-fluid rounded-circle" alt="..." style="width: 73px; height: 83px; margin-left:50%; ">
                      

				    

				    

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
                </div><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">My location</button>
            </div>
            
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                </div>
               <input type="text" class="form-control" placeholder="Contact Number" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-bell"></i></span>
                </div>
               <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="material-icons" style="font-size:87px;color:black;">add_a_photo</i>
                    
                  </span>
                </div>
               
            </div>
             <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Visit My Website</a>

  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
       To  visit your website you must be   fullfill about you and your bussineess .When you have done this, then you must be visit your website, so you must click on <strong> Make My Site Complete</strong> botton.
      </div>
      
       
    
    </div>
  </div>
           


                    <hr style="width: 322px; margin-left: -35px;">

                    
				</div>


                			  
     </div>


                    
                    
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                  <div class="card col-lg-12">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                                    a publication</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload image</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">share</button>
                            </div>
                            <div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
                
              
                <!--
                <div class="card mb-3 col-lg-12 col-md-6 col-sm-12">
                    <div class="card-header"  style="text-align: center;">NEPALI SEWA</div>
                    <div class="card-body text-primary">
                        <h5 style="float: left; margin-right: 43px ">Online Quiz</h5>
                        <h5 style="margin-left:212px;">Booked  Hotels</h5>

                        <p>Nepali system is the the busssiness search engine which is develped to easier the nepalese. please fill confort to set up . Thanks you</p>
                        
                    </div>
                 </div>
                </div>
           -->

                    

      <div class="row">
        <div class="card  col-lg-12 col-md-6 col-sm-12">
                                      
            <div class="input-group mt-3 mb-3">
                 <div class="input-group-prepend">
                     <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose Your Caterograzied</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
                      <input type="text" class="form-control col-sm-8 col-lg-9" placeholder="Enter Your Bussiness or Company Name" >
             </div>



              <div class="input-group mb-3"  style="margin-top: -15px;">
                      <span class="input-group-text">Eg:https://example.com/users</span>
                      <input type="text" class="form-control" placeholder="enter your website address" id="demo" name="email">
              </div>

         </div>
      </div>

      <div class="row" style="margin-top: 2%;">
        <div class="card col-lg-12">
          <div class="card-header">
            This is the your topic
          </div>
          <div class="card-body">
            <textarea rows="3">
              
            </textarea>
          </div>
          <div class="card-footer">
            this 
          </div>
        </div>
      </div>
    </div>
  


  <div class="card col-lg-3" >
       <div class="card-title">tulsi</div>
          <div class="card-body">
                <textarea rows="4"></textarea>
          </div>
        <div class="card-footer">
          tulsidai
       </div>
       
    
  </div>

       

    
   









       <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="" method="POST">
            <label>Your Full name</label>
            <input type="text" name="district" class="form-control">
            <label>Location</label>
            <input type="text" name="palika" class="form-control">

            <label>Contact Number</label>
            <input type="text" name="ward" class="form-control">

           


            




        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary"  value="Save Data"></button>
    </form>
      </div>
    </div>
  </div>
</div>





</div>















</form>
</div>
</div>
</div>
</div>
</div></div></div></div>
</form>






</div></body>
<!--<div class="dropdown">
                         <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                              <div class="h6 dropdown-header">Configuration</div>
                                      <a class="dropdown-item" href="#">Save</a>
                                       <a class="dropdown-item" href="#">Hide</a>
                                       <a class="dropdown-item" href="#">Report</a>
                          </div>
                      </div>
                    -->

