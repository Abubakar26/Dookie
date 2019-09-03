<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/home/ab/Documents/webstuff/frontend/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('js/Index.js') }}" rel="script"> 
  <link href="{{ URL::asset('css/profile.css') }}" rel="stylesheet">
 
  
  <title>Profile</title>
</head>
<body>
   
        <div class="row" style="max-width:2010px;">
                <div class="col-lg-2" style="background-color:blue">
            
                </div>        
                
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12" style="background-color:blue">
                    <input type="text" placeholder="search" style="margin-left:230px;width:400px;height:25px;border-radius:1px" class="form-control">
  
                  </div>        
                  
                <div class="col-lg-2" style="background-color:blue">
                  </div>        
                </div>
                

                <div class="row" style="border-bottom:3px solid grey;height:200px;border:2px solid;    background-color:#263B4E;
                color:white">
                         <div class="col-lg-2 " style="border:2px solid;height:200px"  >
                                <img style="height:120px; width:120px;margin-left:45px" class="img1" src="images\1548170167.jpg" alt="">
                                <h5 style="font-size:15px;margin-left:25px;margin-top:10px" class="h3">Muhammad Abubakar</h3>
                               
                              </div> 
                           
                           
                            <div class="col-lg-8 "  style="border:2px solid;height:200px">
                           </div>
                        
                        
                           <div class="col-lg-2 "style="border:2px solid;height:200px" >
                              </div>
                  </div>
                </div>

                        <div class="container-fluid">
                          <div class="row " style="border:2px solid firebrick">
                        
                        <div class="col-lg-2" style="border:2px solid firebrick">
                                <h5>About</h5>
                                
                        </div>
                        <div class="col-lg-8">
                            <div class="postss" style="margin-left:180px">
                                <h5  style="display:block;margin-left:auto;margin-right:auto">Posts</h5>                             
                       
                                  <div class=" postbox">
                                     <div class="container-fluid">
                                          <div class="row" style="height:60px;border-bottom:2px solid Grey;   ">
                                          
                                            <img class="imgpost" src="images\1548170167.jpg" alt="">                                            
                                                <h5 style="margin:0px auto;margin-top:10px" >Muhammad Abubakar</h5>
                                            <a style="margin-right:10px;margin-top:8px;height:50px" href=""> <img style="height:30px;width:30px;margin:0px auto;" src="https://img.icons8.com/color/48/000000/more.png" alt=""></a>
                                            
                                          </div>
                                          <div class="row" style="height:50px;">
                                              <div class="postss">
                                                  <p id="caption" style="font-size:12px;color:white;margin-top:5px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod itaque esse, perferendis id asperiores iure laborum, magnam tempore a doloribus amet! Doloribus repellat quibusdam explicabo nulla esse autem quisquam ipsum!</p> 
                                              </div>
                                          </div>
                                        
                                          <div class="row" style="height:450px;">
                                              <div class="postss">
                                                <img style="height:430px ;width:430px;margin-top:10px;" src="images\1548165700.jpg" alt="">
                                              
                                              </div>
                                          </div>
                                        
                                            <div class="row">
                                              <div class="postss">
                                                <div class="row">
                                                    <button style="margin-top:.5px;height:45px;width:166px;border-radius:1px;border:1px solid white;color:white" class="btn btn-outline-primary"><img src="https://img.icons8.com/color/30/000000/applause.png"> Clap</button>
                                                    <button style="margin-top:.5px;height:45px;width:166px;border-radius:1px;border:1px solid white;color:white" class="btn btn-outline-primary"><img src="https://img.icons8.com/color/30/000000/delete.png"> Trash</button>
                                                    <button style="margin-top:.5px;height:45px;width:166px;border-radius:1px;border:1px solid white;color:white " class="btn btn-outline-primary"><img src="https://img.icons8.com/color/30/000000/comments.png"> comment</button>
                                                    
                                                  
                                                </div>
  
                                            </div>
  
  
                                        
                                        </div>
                       
                              </div>
                       
  
                            </div>
                          </div>
  
                        </div>
                      <div class="col-lg-2" style="border:2px solid">

                      </div>    
                      </div>
                        </div>
                            
                            <script>

                          $('#caption').append($('<a id="lestag" href=""><img src="https://img.icons8.com/color/48/000000/more.png"> </img></a>'));

                          $(function(){
                              $("#caption").each(function(i){
                                len=$(this).text().length;
                                      if(len>100)
                                          {
                                           $(this).text($(this).text().substr(0,100)+'...');
                                          }
                                             });       
                                    });


                        </script>
                        

                      </body>

                      </html>