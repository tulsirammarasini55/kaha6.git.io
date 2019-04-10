
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
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">All</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="product-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Our Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="mpa-tap" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Maps</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <h4>  Tulsiram Computer Workshop</h4>
                                   


                                        <table class="table table-hover table-borderd">
                                          <thead>
                                            <tr>
                                              <th scope="col">S.NO</th>
                                              <th scope="col">Where We Are?</th>
                                              <th scope="col">Contact Us</th>
                                              <th scope="col">Open Time</th>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">i)</th>
                                              <td>Mark</td>
                                              <td>Otto</td>
                                              <td>@mdo</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">ii)</th>
                                              <td>Jacob</td>
                                              <td>Thornton</td>
                                              <td>@fat</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">iii)</th>
                                              <td colspan="2">Larry the Bird</td>
                                              <td>@twitter</td>
                                            </tr>
                                          </tbody>
                                        </table>









                                <div class="row no-gutters">
                                  <div class="col-lg-6 col-sm-12">
                                    <img src="images/bike.jpg" style="width: 100%;">
                                   </div>
                                   <div class="col-lg-6 col-sm-12">
                                   <img src="images/bike.jpg" style="width: 100%;">
                                   </div>

                                 </div>

                                 
                                  
                                  
                                      <div class="card">
                                        <div class="card-header"><p  style="text-align: center;">Our Services</p></div>
                                        <div class="card-body">
                                          This is some text within a card body.
                                          This is some text within a card body.
                                          This is some text within a card body.
                                          This is some text within a card body.
                                        </div>
                                      </div>

                                      <div class="card">
                                        <div class="card-header"><p style="text-align: center;">Our product</p></div>
                                        <div class="card-body">
                                         
                                        </div>
                                      </div>










                                 


                                 </div>

                            </div>


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
   
         </div>
         <!-- div end of tha images tab-->
  </div>
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


          
        </div>
s
    </body>

<script type="text/javascript">
  
  $(document).ready(function()
  {
    $('.gallerys').magnificPopup(
    {
      type:'image',
      delegate:'a',
      gallery:{
        enabled:true;

      }
    })
  })
</script>
