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
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script> 
     <script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script> 
     <script src="https://cdn.jsdelivr.net/npm/vue@2.6.9/dist/vue.js"></script>
     <title>Home</title>
</head>
<body>
  
  <div class="row" style=" z-index:1 ; border-radius:1px;height:25px;max-width:1510px;background-color:#263B4E; position:fixed;width:100%">
        <div class="col-lg-2">
          
        </div>
        <div class="col-lg-8">
            <input type="text" style="border-radius:1px;width:320px;height:22px;text-align:center;margin-left:240px" placeholder="SEARCH" class="form-control">
        </div>
        <div class="col-lg-2">

        </div>

</div>
        <div class="row" style="border:2px solid;overflow-y:hidden;padding-top:1.5%;z-index:1">
      
            @foreach ($pdata as $item)
            <div class="col-lg-2"  style="border:2px solid;position:fixed;padding-bottom:0.7%">
                <img style="height:120px;width:120px;border-radius:90px;text-align:center;margin-top:10px;border:solid;margin-left:45px" src={{$item->Profpic}}>
                <h5 style="font-size:15px;margin-left:25px;margin-top:10px">{{$item->Username}}</h5>
              </div>
            @endforeach    
          
            <div class="col-lg-6" style="border:2px solid red;margin-left:16.3%">
                <div class="create">
                    <form action="/file" method="post" enctype="multipart/form-data" >      
                    <h6 style="color:white;height:23px;background-color:#263B4E;border-bottom:3px solid transparent;height:30px;text-align:center;">Create post  </h6>
                    <textarea  name="caption" type="text" style="height:70px;margin-top:-5px;width:495px;border:transparent;border-bottom:2px solid grey;resize:none;background-color:transparent" required></textarea>
                        <div style="background-color:transparent">
                        <input id="file" class="upload" type="file" name="image" method="post" multiple required >            
                        <label for="file">Photo</label>
                        <input style="" class="upload"  id="file" class="upload" type="file" name="file" method="post" multiple>            
                        <label for="file">GIF</label>
                        <input class="upload"  id="file" class="upload" type="file" name="file" method="post" multiple>            
                        <label for="file">Emoji</label>
                        <input   type="text"  hidden name="_token" value="{{csrf_token()}}">
                        <button  value="upload"  class="btn btn-primary" style="float:right;height:35px;width:80px;border-radius:2px;color:white;background-color:#263B4E;text-align:center;margin-right:4px" type="submit">Post </button>
                       
                       <style>
                           .upload {
                                width: 0.1px;
                                height: 0.1px;
                                opacity: 0;
                            }
                            
                            .upload + label {
                                border:1px solid ;
                                margin-left: 5px;
                                float: left;
                                width: 80px;
                                height:40px;
                                color: white;
                                line-height: 2.6em;
                                text-transform: uppercase;
                                text-align: center;
                                background-color: grey;
                                display: inline-block;
                                border-radius:30px                     
                                /* box-shadow: 0px 3px 0px #a73337;
                              */
                            }
                            
                            .upload:focus + label,
                            .upload + label:hover {
                                background-color: grey;
                              
                                /* box-shadow: 0px 5px 0px #d03338;
                               */
                                cursor:pointer;
                            }
                            
                            .upload:focus + label {
                                outline: 1px dotted #000;
                           
                                /* outline: -webkit-focus-ring-color auto 5px;
                            */
                            }
                            </style>

                  
                  
                    </div> 
                </form>                   
                
            
            </div>
            </div>
            
            <div class="col-lg-4" style="border:2px solid pink;margin-left:67.6%;position:fixed;">
              <div class="row">
                <div class="col-lg-4">
                    <p>asdasdasd</p>
                </div>
                
                <div class="col-lg-8">
                  <p>Lorem ipsum dolor, sit amio deleniti maxime possimus iste in aspernatur magnam quis itaque. Minus maiores sint omnis? Consectetur omnis eos reiciendis inventore.</p>
                  </div>
              </div>
            </div>
        </div>
        
<div class="row" style="border:2px solid;z-index:1">

    <div class="col-lg-2"  style="border:2px solid;position:fixed;z-index:1">
                
   <div style="height:432px">
    <div class="row" >
        <button  data-toggle="modal" data-target="#exampleModalLong" style="background-color:#263B4E;color:white; width:160px;border-radius:1px;margin-top:10px;margin-left:40px;z-index:10;margin-top:5px" type="button" class="btn btn-primary">Amigo</button>
   
        <div  style="margin-left:310px; %;;position:fixed;width:500px" class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div   class="modal-dialog" role="document">
              <div style="border-radius:8px;" class="modal-content">
                <div   style="background-color:#263B4E;height:10px;text-align:center;color:white" class="modal-header">
                  <h5 style=" font-size:15px;text-align:center;margin-top:-12px" class="modal-title" id="exampleModalLongTitle">Amigos</h5>
                  <button style="color:white;margin-top:-32px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div  class="col-lg-12">
                        <input placeholder="search"  style="text-align:center;width:250px;margin-left:100px;height:30px;border-radius:1px;border:1px solid #263B4E" class="form-control" type="text">
                    </div>
                      
                    @foreach ($pdata as $item)
                    <div style="background-color:#e6ecff;margin-top:10px;width:470px;margin-left:5px" class="row">
                        <div style="" class="col-lg-2">
                            <img style="width:60px;height:60px" src={{$item->Profpic}} >
                          </div>
                          <div class="col-lg-6" style="margin-right:70px">  
                            <h5 style="font-size:small;text-align:center;margin-top:20px;margin-right:40px;background-color:inherit;margin-left:25px">{{$item->Username}}</h5>
                          </div>
                          
                          <div style="float:right;text-align:right" class="col-lg-2">
                            <div style="float:right;margin-top:10px;" class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Opt
                                </button>
                                <div style="width:100px"  class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a style="font-size:smaller"  class="dropdown-item" href="#">Remove</a>
                                  <a style="font-size:smaller"  class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                          </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div style="height:50px" class="modal-footer">
                  <div class="row">
                    </div>
                </div>
              </div>
            </div>
          </div>

        
  <button id="nots"  data-toggle="modal" data-target="#exampleModal" style="background-color:#263B4E;color:white; width:160px;margin-left:40px;border-radius:1px;margin-top:-19px" type="button" class="btn btn-primary">Notifications
 <span id="notifications"></span> </button>
    @foreach ($pdata as $item)
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div style="margin-left:430px;height:80px;width:350px" class="modal-dialog" role="document">
        <div class="modal-content">
          <div style="background-color:#263B4E;height:10px;text-align:center;color:white" class="modal-header">
            <h5  style=" font-size:15px;text-align:center;margin-top:-12px" class="modal-title" id="exampleModalLabel">Notifications</h5>
            <button  style="margin-top:-32px;color:white" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span  aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div style="background-color:#263B4E" class="row">
                <div class="col-lg-2">
                  <img style="margin-left:-10px;float:left;height:55px;width:55px;border-radius:50%;" src={{$item->Profpic}}>
                </div>
                <div class="col-lg-10">
                  <p id='message' style="text-align:center;font-size:small;color:white">Lorem ipsum dolor sieriores ducimus necessitatibus distinc</p>
                </div>
              
              </div>
          </div>
         </div>
      </div>
    </div>

    @endforeach 
      
      
        <button data-toggle="modal" data-target="#settingsModal" style="background-color:#263B4E;color:white;width:160px;border-radius:1px;margin-left:40px;margin-top:-19px" type="button" class="btn btn-primary">Settings
        </button>
    
        <div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div style="margin-left:300px;height:80px;width:650px" class="modal-dialog" role="document">
            <div class="modal-content">
              <div  style="background-color:#263B4E;height:10px;text-align:center;color:white" class="modal-header">
                <h5  style=" font-size:15px;text-align:center;margin-top:-12px" class="modal-title" id="exampleModalLabel">Settings</h5>
                <button style="margin-top:-32px;color:white" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span  aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row" style="margin-top:-16px">
                  <div style="border:2px solid pink;background-color:;" class="col-lg-4">
                   
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item">
                      <a style="width:120px;color:blue;text-align:center;font-size:small" class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Personal Info</a>
                      </li>
                      <li class="nav-item">
                        <a style="width:120px;color:blue;text-align:center;font-size:small" class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a style="width:120px;color:blue;text-align:center;font-size:small" class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                     </li>
                    </ul>
                   

                  </div>
                  
                   <div class="col-lg-6">
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                          @foreach ($pdata as $item)
                              
                          <form action="/info" method="post" enctype="multipart/form-data" >
                        <div class="row">
                          <div class="col-lg-12">
                              <h5>Personal Info</h5>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <img  src={{$item->Profpic}}  style="margin-bottom:5px;height:65px;width:65px;border-radius:50%;border:2px solid;margin-left:110px" alt="">
                            </div>
                          </div>
                          
                          {{-- <div class="row">
                            <div class="col-lg-12">
                                <div style="border-radius:1px;height:30px;margin-left:25px" class="input-group mb-3">
                                    <div class="custom-file">
                                      <input name="profpic" value={{$item->Profpic}} id='profpic' style="border-radius:1px;" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                      <label style="border-radius:1px;" class="custom-file-label" for="inputGroupFile01">choose</label>
                                    </div>
                                  </div>
                            </div>
                          </div>
                         --}}
                          <div class="row">
                            <div class="col-lg-12">
                       <div style="margin-left:24px;border-radius:1px;" class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span style="border-radius:1px;height:30px" class="input-group-text" id="basic-addon1">@</span>
                          </div>
                          <input  name="usertag" id="usertag" style="border-radius:1px;height:30px" type="text" class="form-control" placeholder={{$item->Usertag}} aria-label="Username" aria-describedby="basic-addon1" value={{$item->Usertag}}>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <input name="username" style="margin-top:-10px; border-radius:1px;height:30px;width:220px;margin-left:24px;margin-bottom:5px" class="form-control" placeholder={{$item->Username}} type="text" value={{$item->Username}}>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-12">
                            <input id="email" name="email" style="border-radius:1px;height:30px;width:220px;margin-left:24px;margin-bottom:5px" class="form-control" placeholder={{$item->Email}} value={{$item->Email}} type="text">
                          </div>
                        </div>
                     <div class="row">
                      <div class="col-lg-12">
                        <textarea  name="About" id="" cols="30" rows="2" class="form-control" style="border-radius:1px;margin-left:25px" placeholder="Add about yourself">{{$item->About}}</textarea>
                      </div>
                    </form>
                      <div class="row">
                          <input   type="text"  hidden name="_token" value="{{csrf_token()}}">
                          <button style="margin-left:60px;margin-top:5px;width:200px;border-radius:1px" class="btn btn-primary" value="upload" type="submit" >Update</button>
                      </div>
                    </div>
                       
                      
                      </div>
                   
                      @endforeach
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">oluptatibus officiis velit ad vel? Veniam nisi dolor ab, obcaecati laudantium distinctio temporibus accusamus ratione neque amet. Ut consecte</div>
                      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">oluptatibus officiis velit ad vel? Veniam nisi dolor ab, obcaecati laudantium distinctio temporibus accusamus ratione neque amet. Ut consecte</div>
                    </div>
                  </div>
                </div>
              
              </div>
             </div>
          </div>
        </div>
    

      </div>
    
  
  
  </div>
   
      </div>
    



    <div class="col-lg-6" style="border:2px solid;overflow-x:hidden;margin-left:16.3%;">
<nav style="height:40px">
    <div class="nav nav-tabs" id="nav-tab" role="tablist" style="background-color:#263B4E;border-radius:1px;padding-bottom:5px;overflow-y:none;color:black;height:52px;margin-top:4px;border-radius:22px">
      <a style="border-radius:500px;font-size:15px;" class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Feeds</a>
      <a style="border-radius:500px;font-size:15px;" class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
      <a style="border-radius:500px;font-size:15px;" class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Heell</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> 
        <table >
            
            <th>
                @foreach ($pdata as $item)
                       
              @foreach ($data as $dat)
                          
                <div class="container">
            
                   <div class=" postbox" >
            
                        <div class="container-fluid">
                          <div class="row" style="height:60px;border-bottom:2px solid Grey;overflow:auto;   ">
                                <img  class="imgpost" src={{$item->Profpic}} alt="">                                            
                                  <h5 style="font-size:15px;margin:0px auto;margin-top:19px;float:left;margin-right:20%" >{{$item->Username}}</h5>
                           <button style="background:#263B4E;border:none" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"> <img style="height:30px;width:30px;margin:0px auto;" src="https://img.icons8.com/color/48/000000/more.png" alt=""></button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/delete/{{$dat->id}}">Delete</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>                  
                            </div>
                            
                            <div class="row" style="height:50px;">
                                <div class="postss">
                                    <p id="caption" style="font-size:12px;color:white;margin-top:5px;float:left">{{$dat->caption}}</p> 
                                </div>
                            </div>
                          
                            <div class="row" style="height:450px;border-bottom:2px solid grey">
                                <div class="postss">
                                  <img class="img-fluid" style=" max-height:100%;height:auto ;max-width:80%;width:auto;margin-top:10px;margin-left:10%;" src={{$dat->path}} alt="">
                                </div>
                            </div>
                          
                              <div class="row">
                                <div class="postss">
                                  <div class="row" style="margin-top:5px" >
                                  <button v-on:click="count+=1" id="claps" style="margin-top:.5px;height:45px;width:166px;border-radius:20px;border:1px solid white;color:white;margin-left:5px" class="btn btn-outline-primary"><img src="https://img.icons8.com/color/30/000000/applause.png">@{{clap}}</button>
                                      <button  id="trash" style="margin-top:.5px;height:45px;width:166px;border-radius:20px;border:1px solid white;color:white;margin-left:5px" class="btn btn-outline-primary"><img src="https://img.icons8.com/color/30/000000/delete.png">Trash</button>
                                     
                                      <button id="comment" data-toggle="modal" data-target="#commentModal"  style="margin-top:.5px;height:45px;width:166px;border-radius:20px;border:1px solid white;color:white;margin-left:5px " class="btn btn-outline-primary"><img src="https://img.icons8.com/color/30/000000/comments.png"> comment
                                      </button>
                                  
                                       @foreach ($pdata as $item)
                                
                                       <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div style="height:400px;margin-left:430px;width:350px;" class="modal-dialog" role="document">
                                             <div style="height:400px;border-radius:7px;" class="modal-content">
                                               <div  style="background-color:#263B4E;height:10px;text-align:center;color:white" class="modal-header">
                                                 <h5  style=" font-size:15px;text-align:center;margin-top:-12px" class="modal-title" id="exampleModalLabel">Comment</h5>
                                                 <button style="margin-top:-32px;color:white" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span  aria-hidden="true">&times;</span>
                                                 </button>
                                               </div>
                                               <div class="modal-body" style="overflow-y: scroll">
                                               
                                                
                                                <div class="row" style="border:2px solid;border-bottom:2px solid grey">
                                                  <div class="col-lg-2" >
                                                    <img src="images\1548165700.jpg" style="height:50px;width:50px" alt="">
                                                  </div>
                                                  <div class="col-lg-10">
                                                    <textarea name="" id="" cols="30" rows="2"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row" style="margin-top:5px;border:2px solid green">
                                                  <div class="col-lg-2">
                                                      <img src="images\1548165700.jpg" style="height:40px;width:40px;border-radius:40%" alt="">
                                                  </div>
                                                  <div class="col-lg-10">
                                                    <p style="font:smaller;color:black;font-size:smaller"> Muhammad Abubakar  </p>
                                                    <p style="color:black;font-weight:normal;font-size:smaller">
                                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eveniet, magni facilis eaque earum odit officia sint temporibus eos repudiandae quod quia, cupiditate corrupti quidem, ut voluptatum dolores dolorem sequi!
                                                    </p>
                                                  </div>
                                                </div>
                                                 </div>   
                                              </div>
                                              </div>
                                           </div>
                                         </div>
                                     
                                         @endforeach 
                                           
                                    </div>
                              </div>
                          </div>
                </div>
               
            </div>
            </div>
            @endforeach
            @endforeach  
            </th>
              
            </table>
    </div>
    @foreach ($pdata as $item)
    @foreach ($data as $dat)
        
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div style="border:2px solid black;margin-top:2%;background-color:#d9d9d9">
         <img style="border-radius:500px;height:100px;width:100px;margin-left:40%" src={{$item->Profpic}}  alt="" >   
          <h4 style="text-align:center;margin-right:20px">{{$item->Username}}</h4>
        
          <div class="row">
        <div class="col-lg-12" style="text-align:center">
          <p>Lorem ipsum dolor sit, amet consectetur adictus.</p>
        </div>
       </div>
       
          <div class="row">
     <div class="col-lg-6">
        <h5 style="margin-left:40%;">Amigos <span style="font-size:12px"> 26</span></h5>
        <h5 style="margin-left:40%;">claps <span style="font-size:12px"> 26</span></h5>
        
     </div>
     
     <div class="col-lg-6">
        <h5 style="margin-left:30%">Postings <span style="font-size:12px"> 26</span></h5>
        <h5 style="margin-left:30%">Trashed <span style="font-size:12px"> 26</span></h5>
        
      </div>
        </div>
        <div class="row">
          <div class="col-lg-12" style="text-align:center"> 
            <div style="margin-left:40%">
              <p style="height:35%;width:30%;border-radius:500px;border:2px solid;background-color:#6666cc;color:white">Noob</p>
            </div>
          </div>
        </div>
        </div>   
      <h4 style="text-align:center;paddin-top:5px">Feeds</h4>
      <table >
            
            <th>                
                                
                <div class="container">
            
                   <div class=" postbox" >
            
                        <div class="container-fluid">
                         <div class="row" style="height:60px;border-bottom:2px solid Grey;overflow:auto;   ">
                                <img class="imgpost" src={{$item->Profpic}} alt="">                                            
                                  <h5 style="font-size:15px;margin:0px auto;margin-top:19px;float:left;margin-right:20%" >{{$item->Username}}</h5>
                           <button style="background:#263B4E;border:none" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"> <img style="height:30px;width:30px;margin:0px auto;" src="https://img.icons8.com/color/48/000000/more.png" alt=""></button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/delete/{{$dat->id}}">Delete</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>                  
                            </div>
                            <div class="row" style="height:50px;">
                                <div class="postss">
                                    <p id="caption" style="font-size:12px;color:white;margin-top:5px;float:left">{{$dat->caption}}</p> 
                                </div>
                            </div>
                          
                            <div class="row" style="height:450px;border-bottom:2px solid grey">
                                <div class="postss">
                                  <img  style=" max-height:100%;height:auto ;max-width:80%;width:auto;margin-top:10px;margin-left:10%;" src={{$dat->path}} alt="">
                                
                                </div>
                            </div>
                          
                              <div class="row">
                                <div class="postss">
                                  <div class="row" style="margin-top:5px" >
                                      <button id="claps" style="margin-top:.5px;height:45px;width:166px;border-radius:20px;border:1px solid white;color:white;margin-left:5px" class="btn btn-outline-primary"><img src=@{{img}}>@{{Claps}}</button>
                                      <button id="trash" style="margin-top:.5px;height:45px;width:166px;border-radius:20px;border:1px solid white;color:white;margin-left:5px" class="btn btn-outline-primary"><img src="https://img.icons8.com/color/30/000000/delete.png"> Trash</button>
                                                               
                                      <button id="comment"  data-toggle="modal" data-target="#comment2Modal"  style="margin-top:.5px;height:45px;width:166px;border-radius:20px;border:1px solid white;color:white;margin-left:5px " class="btn btn-outline-primary"><img src="https://img.icons8.com/color/30/000000/comments.png"> comment
                                      </button>
                                  
                                       @foreach ($pdata as $item)
                                
                                       <div class="modal fade" id="comment2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div style="height:400px;margin-left:430px;width:350px;" class="modal-dialog" role="document">
                                             <div style="height:400px;border-radius:7px;" class="modal-content">
                                               <div  style="background-color:#263B4E;height:10px;text-align:center;color:white" class="modal-header">
                                                 <h5  style=" font-size:15px;text-align:center;margin-top:-12px" class="modal-title" id="exampleModalLabel">Comment</h5>
                                                 <button style="margin-top:-32px;color:white" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span  aria-hidden="true">&times;</span>
                                                 </button>
                                               </div>
                                               <div class="modal-body" style="overflow-y: scroll">
                                               
                                                
                                                <div class="row" style="border:2px solid;border-bottom:2px solid grey">
                                                  <div class="col-lg-2" >
                                                    <img src="images\1548165700.jpg" style="height:50px;width:50px" alt="">
                                                  </div>
                                                  <div class="col-lg-10">
                                                    <textarea name="" id="" cols="30" rows="2"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row" style="margin-top:5px;border:2px solid green">
                                                  <div class="col-lg-2">
                                                      <img src="images\1548165700.jpg" style="height:40px;width:40px;border-radius:40%" alt="">
                                                  </div>
                                                  <div class="col-lg-10">
                                                    <p style="font:smaller;color:black;font-size:smaller"> Muhammad Abubakar  </p>
                                                    <p style="color:black;font-weight:normal;font-size:smaller">
                                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eveniet, magni facilis eaque earum odit officia sint temporibus eos repudiandae quod quia, cupiditate corrupti quidem, ut voluptatum dolores dolorem sequi!
                                                   </p>
                                                  </div>
                                                </div>
                                                 </div>   
                                              </div>
                                              </div>
                                           </div>
                                         </div>
                                     
                                         @endforeach 
               
                                    </div>
                              </div>
                          </div>
                </div>
                      
               
                
            </div>
            </div>
            </th>
              
            </table>

    </div>
    @endforeach
     
    @endforeach
     
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            


    </div>
  </div>



</div>
    
@foreach ($pdata as $item)
              
    <div class="col-lg-4 col-md-3 col-sm-2 col-xs-1" style="border:2px solid;position:fixed;margin-left:67.6%;width:100%" >
      <div class="row" style="height:429px">
          <div style="border:2px solid" class="col-lg-4">
            <input class="form-control" style="background-color:inherit;border-radius:1px;height:inherit;border:none;width:150px;margin-left:-15%;border-bottom:1px solid gray" placeholder="Search" type="text">
            <div class="row">
              <div class="col-lg-6">
                <button style="width:73px;margin-left:-38%;border:none;background-color:#263B4E;border-right:1px solid;color:white;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Online</button>
              </div>
              <div class="col-lg-6">
                  <button style="width:73px;margin-left:-38%;border:none;background-color:#263B4E;border-left:1px solid;color:white;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Unread</button>
             
                </div>
            </div>
                    
                
              <div style="border:2px solid;width:145px;margin-left:-13%">
               <div class="row" >
                <div class="col-lg-4" >
                    <img  src={{$item->Profpic}} style="height:40px;width:40px" alt="">
            
                </div>
                <div class="col-lg-8" >
                    <p style="text-align:center">@abz</p>
                </div>
              </div>
              <div class="row">
                  <div class="col-lg-4">
                      <img src={{$item->Profpic}} style="height:40px;width:40px" alt="">
              
                  </div>
                  <div class="col-lg-8">
                      <p style="text-align:center" id="app">@abz</p>
                  </div>
                </div>
              
                <div class="row">
                    <div class="col-lg-4">
                        <img src={{$item->Profpic}} style="height:40px;width:40px" alt="">
                
                    </div>
                    <div class="col-lg-8">
                        <p style="text-align:center">@abz</p>
                    </div>
                  </div>
                  
            </div>
           
          </div>
          


          <div style="border:2px solid" class="col-lg-8">
        <div class="row" style="border:2px solid;height:35px;background-color:#263B4E;">
              <p style="margin-left:45%;color:white">asd</p>
            </div>
          <div style="margin-left:2%;margin-top:133.4%;">
              <input placeholder="enter message" style="height:30px;width:254px;border-radius:1px;border-radius:500px;border:1px solid black" type="text" class="form-control">
          
          </div>
            
          </div>
          
      </div>
    </div>
    @endforeach
</div>
 
<script>
var postclap=new Vue({
  el:'#clap',
  data:
  {
    Clap:'Claps',
    img:"https://img.icons8.com/color/30/000000/applause.png",
    count:0
  }

})


  
</script>



</body>



</html>