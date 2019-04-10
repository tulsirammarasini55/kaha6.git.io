
<?php
include 'navbar1.php';
?>
  

   <body style="background-color:lightgray;">
   
    <div class="row" style="margin-top: 62px;">
        <div class="col-lg-9 col-md-7 col-sm-12">
          <div class="row">
                  <div class="card col-lg-12">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist" style="">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">
                                  <i class="material-icons">&#xe5d3;</i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">
                                  <i class="material-icons">&#xe412;</i>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="product-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">
                                  <i class="material-icons">&#xe03c;</i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="mpa-tap" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">
                                  <i class="material-icons">&#xe567;</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                  <div class="card-body">
                      <div class="tab-content" id="myTabContent">
                         <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                           <div class="form-group">


                                  
                                  
                                          
                                          <!--media is for inline -->
              <div class="row"  style="overflow: hidden";>
                  <li class="d-flex">
                  <i class="fas fa-camera rounded-circle bg-primary camera"></i>
                  <span class=" badge-pill bname ">business rishi ram name


                     <span data-toggle="modal" data-target="#exampleModalbname">
                       <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-edit"style=" font-size:20px; color: blue;"></i>
                     </span>

                  </a></span>
                  </li>
               </div>

            
               
              <div class="row">
                <button type="button" class="btn  btn-secondary col-lg-5 col-sm-6" data-toggle="modal" data-target="#exampleModal">My location</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add your location</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <form action="dataprocessing.php" method="POST">
                                <label>District</label>
                                <select class="form-control" name="district">
                                  <option>Rupendehi</option>
                                  <option>Gulmi</option>
                                  <option>Kapilvastu</option>
                                  <option>Palpa</option>
                                  <option>Arkhaghachi</option>
                                  <option>Dang</option>
                                  <option>Banke</option>
                                </select>

                              <label>Nagar/Gaun/UpaNagar/MahaNagar-Palika</label>
                                <input type="text"  class="form-control" name="palika">
                                <label>Ward_No</label>
                                <select class="form-control" name="ward">
                                  <option>01</option>
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                </select>
                                <label>Path/Toll</label>
                                <input type="text"  class="form-control" name="toll">



                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary"  value="Save Data"></button>
                          </form>
                        </div>
                    </div>
                 </div>
             </div>
             <!-- model start  of contact section-->

         
               
            
          
                <div class="col-lg-2"></div>
                <button type="button" class="btn  btn-secondary col-lg-5 col-sm-6" style="margin-right:0px;" data-toggle="modal" data-target="#contact">Contact Me</button>

                 <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Your Contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <form action="" method="POST">
                                <label>Phone</label>
                                <input type="number" name="" class="form-control">

                                <label>Email</label>
                                <input type="text" name="" class="form-control">
                                <label>Offical Number</label>
                                <input type="number" name="" class="form-control">


                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary"  value="Save Data"></button>
                          </form>
                        </div>
                    </div>
                 </div>
             </div>






               <!--- this div is closed for the location and address row-->
           </div>

           
             <button class="btn-primary col-lg-12 btn-lg" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1" style="margin-top: 23px;">Basic Information</button>
           
             

  
                  <div class="collapse multi-collapse show" id="multiCollapseExample1">
                          <div class="card card-body">
                          

                          <form>
                           
                             
                               
                                  <label>Choose Your Catogory</label>
                                    <!--<option selected>Choose Your Caterograzied</option>-->
                                     <select class="form-control">
                                    <option value="1">Computer/Mobile</option>
                                    <option value="2">Hotels</option>
                                    
                                    <option value="3">Bank / Offices</option>
                                    <option value="3">Hardware/Electrity</option>
                                  <option value="3">Kirana/ General Shop</option>
                                    <option value="3">Fancy / Casmetic</option>
                                    <option value="3">Extra</option>
                                  </select>
                          

                            <label>Your Bussiness Name</label>
                           <input type="text" name="" class="form-control" required="">

                           <label>Bussiness Types</label>
                           <select class="form-control">
                             <option>Single</option>
                             <option>Partnership</option>
                             <option>Have Many Ownership</option>

                           </select>
                         </form>

                       </div>
                 </div>


                 <!-- start for the bussiness details multicollapsad-->
                 <button class="btn-primary col-lg-12 btn-lg" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="true" aria-controls="multiCollapseExample2" style="margin-top: 23px;"> My Bussiness Details</button>
           </div>
             

  
                  <div class="collapse multi-collapse" id="multiCollapseExample2">
                          <div class="card card-body">
                          

                          <form>
                           
                           <label></label>

                            <label style="margin-top: 12px;">Our Services</label>
                           <textarea  rows="6" class="form-control"></textarea>

                           
                            <label>Number Of Employee</label>
                            <span style="color: red;">*If more then 1</span>
                          <input type="number" name="" class="form-control">
                         </form>

                       </div>
                 </div>

                 <!-- start for the collapsed of third botton-->

                 <button class="btn-primary col-lg-12 btn-lg" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="true" aria-controls="multiCollapseExample3" style="margin-top: 23px;">Extra Details</button>

                  <div class="collapse multi-collapse" id="multiCollapseExample3">
                          <div class="card card-body">
                          

                         
                          <label>Open Time</label>
                          <input type="number" name="" class="form-control">

                          <label>Closed Time</label>
                          <input type="number" name="" class="form-control">
                         

                       </div>
                 </div>

                      
               
                      
                      






                                




                                </div>

                            </div>

                          <!-- <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Visit My Website</a>

  
                       <div class="collapse multi-collapse" id="multiCollapseExample1">
                          <div class="card card-body">
                           To  visit your website you must be   fullfill about you and your bussineess .When you have done this, then you must be visit your website, so you must click on <strong> Make My Site Complete</strong> botton.
                          </div>
                        -->
                          
                           
                        
                        
                        <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                           <div class="row no-gutters gallerys">
              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="images/bike.jpg" target="_blank" >
                  <img src="images/bike.jpg" class="img-fluid">
                </a>
              </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="images/bike.jpg" target="_blank" >
                  <img src="images/bike.jpg" class="img-fluid">
                </a>
              </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="images/bike.jpg" target="_blank" >
                  <img src="images/bike.jpg" class="img-fluid">
                </a>
              </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="images/bike.jpg" target="_blank" >
                  <img src="images/bike.jpg" class="img-fluid">
                </a>
              </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="images/bike.jpg" target="_blank" >
                  <img src="images/bike.jpg" class="img-fluid">
                </a>
              </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="images/bike.jpg" target="_blank" >
                  <img src="images/bike.jpg" class="img-fluid">
                </a>
              </div>
            
          </div>
   
                      

                                      

      
                    

                  