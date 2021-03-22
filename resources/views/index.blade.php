<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" media="screen, projection"  type="text/css" href="{{asset('css/style1.css')}}">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
  <title>Migration Australia</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Immigration</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('moreabout')}}">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Australia Visas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('family')}}">Family Visa</a>
            <a class="dropdown-item" href="{{route('student')}}">Student Visa</a>
            <a class="dropdown-item" href="{{route('business')}}">Business Visa</a>
            <a class="dropdown-item" href="{{route('working')}}">Working Visa</a>
            <a class="dropdown-item" href="{{route('travel')}}">Travel Visa</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('news')}}">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('problems')}}">Visa Problems</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
    <div class="background-container">
      @foreach ($show as $item)
      <?php
            $imagename= ($item->imageFile);
        ?>
        <img src="{{asset('images')}}/{{$imagename}}" alt="">
      @endforeach
        <div class="front-content">
          <div class="front-text">
           <h2 class="headline-class">Australia Immigration and Visas</h2>
            <p>Find out what it takes to be eligible for Australian immigration <br/> and trusted Migration Agents and Lawyers </p>
          </div>
          <button type="submit">Book a Consulation</button>
        </div>
        <div class="message" >
          <i class="fa fa-commenting-o" aria-hidden="true" onclick="messageClickFuntcion()"></i>
          <div class="message-popup" id="mpu">
            <form action=""  id="messageId"> 
              @csrf
              <h4 class="msgtitle">How can we help you?</h4>
              <input id="message" class="input-message" type="text" name="message" placeholder="Enter Message">
                <button class="message-btn" id="submit" type="submit">Send</button>
            </form>
            <span onclick="document.getElementById('mpu').style.display='none'">
              <button class="w3-button">&times; </button>
              </span>
            <script>
              function messageClickFuntcion(){
                document.getElementById("mpu").style.display="block";
              }
            </script>
            <script>
              
            </script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

              <script type="text/javascript">
           
               $('#messageId').on('submit',function(event){
                   event.preventDefault();
      
                   let message = $('#message').val();
           
                   $.ajax({
                     url: "{{route('message')}}",
                     type:"POST",
                     data:{
                       "_token": "{{ csrf_token() }}",
                    
                       message:message,
                     },
                     success:function(response){
                       console.log(response)
                       $('#mpu').hide();
                     },
                    });
                   });
                 </script>
          </div>
        </div>
    </div>

  <section id="about">
    <div class="container ">
      <h3 class="about-text"> About Us</h3>
      <div class="about-image1">
        @foreach ($about as $item)
             <div class="aboutimg">
              <?php
                $imagename= ($item->imgfile);
                ?>
                <img src="{{asset('images')}}/{{$imagename}}" alt="">
              </div>
              <div class="about-content">
                  <p class="imagepara">
                    {{$item->paragraph}}
                </p>
                    <a href="{{route('moreabout')}}">
                      <button  type="submit">Read More...</button>
                    </a>
              </div>
              @endforeach
      </div>
    </div>
  </section>
    <section id="visas">
      <h3 class="visa-text">Visas</h3>
      <div class="visas container">
        <div class="row">
                  <div class="col-md-4">
                    @foreach ($visaone as $item)
                    <?php
                    $imagename= ($item->imgfile);
                     ?>
                    <a href="{{route('family')}}">
                      <img src="{{asset('images')}}/{{$imagename}}" alt=""
                      {{-- <img src="images\familyvisa.jpg" --}}
                       class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
                    <div class="student-content">
                      <h4 class="student-text">{{$item->title}}</h4>
                        {{-- Partner &family Visa --}}
                      <p>{{$item->content}}</p>
                        {{-- I want to sponser my family member or partner --}}
                    </div>
                    </a>
                    @endforeach
                  </div>
                  <div class="col-md-4"> 
                      @foreach ($visatwo as $item)
                    <?php
                    $imagename= ($item->imgfile);
                     ?>
                    <a href="{{route('student')}}"> 
                      <img src="{{asset('images')}}/{{$imagename}}"
                      class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
                      <div class="student-content">
                        <h4 class="student-text">{{$item->title}}</h4>
                          {{-- Student Visa --}}
                        <p>{{$item->content}}</p>
                          {{-- I am an international student in Australia and <br/> want to stayafter graduate --}}
                      </div>
                    </a>
                    @endforeach
                </div>
              <div class="col-md-4"> 
                @foreach ($visathree as $item)
                <?php
                $imagename= ($item->imgfile);
                 ?>
                <a href="{{route('travel')}}">
                  <img src="" alt="">
                  <img src="{{asset('images')}}/{{$imagename}}" alt=""
                 class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
                <div class="student-content">
                  <h4 class="student-text">{{$item->title}}</h4>
                    {{-- Travel Visa --}}
                  <p>{{$item->content}}</p>
                    {{-- I want to visit around Australia --}}
                </div>
              </a>
              @endforeach
              </div>
              <div class="col-md-4"> 
                @foreach ($visafour as $item)
                <?php
                $imagename= ($item->imgfile);
                 ?>
                <a href="{{route('business')}}">
                  <img src="{{asset('images')}}/{{$imagename}}" alt=""
                   class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
                  <div class="student-content">
                    <h4 class="student-text">{{$item->title}}</h4>
                      {{-- Invest & business Visa --}}
                    <p>{{$item->content}}</p>
                      {{-- I want to start new business in Australia --}}
                  </div>
              </a>
              @endforeach
              </div>
              <div class="col-md-4"> 
                @foreach ($visafive as $item)
                <?php
                $imagename= ($item->imgfile);
                 ?>
                <a href="{{route('working')}}">
                  <img src="{{asset('images')}}/{{$imagename}}" alt=""
                   class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
                  <div class="student-content">
                    <h4 class="student-text">{{$item->title}}</h4>
                      {{-- Working & job Visa --}}
                    <p>{{$item->content}}</p>
                      {{-- I am skilled employee and wanting to <br/> live and work in Australia --}}
                  </div>
              </a>
              @endforeach
              </div>
              <div class="col-md-4"> 
                @foreach ($visasix as $item)
                <?php
                $imagename= ($item->imgfile);
                 ?>
                <a href="{{route('dependent')}}">
                  <img src="{{asset('images')}}/{{$imagename}}" alt=""
                   class="img-fluid" alt="Responsive image" style="height: 320px; width: 440px;">
                  <div class="student-content">
                    <h4 class="student-text">{{$item->title}}</h4>
                      {{-- Dependent Visa --}}
                    <p>{{$item->content}}</p>
                      {{-- I want devendent visa --}}
                  </div>
              </a>
              @endforeach
            </div>
          </div>
        </div>
  </section>

  <section id="news">
    <h3 class="news-text">Latest Immigration News</h3>
    <div class="container">
      <div class="row">
          <div class="col-md-4"> 
                <div class="card">
             <a  href="{{route('news')}}#news1"> 
                  <img class="card-img-top" src="images\news1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">482 Work Visa Application in the time of COVID-19</h5>
              </a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
             </a>
          </div>
          <div class="col-md-4">
                <div class="card">
             <a  href="{{route('news')}}#news2"> 
                  <img class="card-img-top" src="images\news2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">The Federal Budget 2020- 2021: What it means for migrants</h5> 
             </a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
          </div>
          <div class="col-md-4"> 
                <div class="card">
             <a  href="{{route('news')}}#news3"> 
                  <img class="card-img-top"style="height:26vh" src="images\news3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Cryptocurrency and Australian business visas</h5>
              </a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
             </a>
          </div>
         
       </div>
       </div>
   </div>
  </section>

 
  <section id="problems">
    <div class="container">
      <h3 class="problem-text">Visa Problems</h3>
      <div class="problem-image">
        <div class="problemimgimg">
        <img src="images\visaproblem.jpg" alt="...">
        </div>
        <div class="problem-content">
          <p class="imagepara">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem aliquid reiciendis nam
            expedita dolore hic
            minus inventore, id omnis minima voluptates at labore commodi obcaecati exercitationem. Iusto corporis
            suscipit deleniti.</p>
              <a href="{{route('problems')}}">
                <button type="submit">Read More...</button>
              </a>
        </div>
      </div>
    </div>

  <section id="contact">
    <div class="container contact">
      <div class="row">
        <div class="col-md-3">
          <div class="contact-info">
            <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
            <h4>Contact Us</h4>
            <h5>We would love to hear from you !</h5>
          </div>
        </div>
        <div class="col-md-9">
          <div class="contact-form">
            <div class="form-group">
              <label class="control-label col-sm-2" for="fname">First Name:</label>
              <div class="col-sm-10">          
              <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="lname">Last Name:</label>
              <div class="col-sm-10">          
              <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="comment">Comment:</label>
              <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </section>

  <footer class="footer">
    <div class="container bottom_border">
    <div class="row">
    <div class=" col-sm-4 col-md col-sm-4  col-12 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
    <!--headin5_amrc-->
    <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
    <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
    <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
    
    
    </div>
    
    
    <div class=" col-sm-4 col-md  col-6 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
    <!--headin5_amrc-->
    <ul class="footer_ul_amrc">
    <li><a href="http://webenlance.com">Image Rectoucing</a></li>
    <li><a href="http://webenlance.com">Clipping Path</a></li>
    <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
    <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
    <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
    <li><a href="http://webenlance.com">Image Cropping</a></li>
    </ul>
    <!--footer_ul_amrc ends here-->
    </div>
    
    
    <div class=" col-sm-4 col-md  col-6 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
    <!--headin5_amrc-->
    <ul class="footer_ul_amrc">
    <li><a href="http://webenlance.com">Remove Background</a></li>
    <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
    <li><a href="http://webenlance.com">Logo Design</a></li>
    <li><a href="http://webenlance.com">Vectorization</a></li>
    <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
    <li><a href="http://webenlance.com">Image Cropping</a></li>
    </ul>
    <!--footer_ul_amrc ends here-->
    </div>
    
    
    <div class=" col-sm-4 col-md  col-12 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
    <!--headin5_amrc ends here-->
    
    <ul class="footer_ul2_amrc">
    <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
    <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
    <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
    </ul>
    <!--footer_ul2_amrc ends here-->
    </div>
    </div>
    </div>
    
    
    <div class="container">
    <ul class="foote_bottom_ul_amrc">
    <li><a href="http://webenlance.com">Home</a></li>
    <li><a href="http://webenlance.com">About</a></li>
    <li><a href="http://webenlance.com">Visas</a></li>
    {{-- <li><a href="http://webenlance.com">Pricing</a></li> --}}
    {{-- <li><a href="http://webenlance.com">Blog</a></li> --}}
    <li><a href="http://webenlance.com">Contact</a></li>
    </ul>
    <!--foote_bottom_ul_amrc ends here-->
    <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>
    
    <ul class="social_footer_ul">
    <li><a href="http://webenlance.com"><i class="fa fa-facebook-f"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fa fa-twitter"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fa fa-instagram"></i></a></li>
    </ul>
    <!--social_footer_ul ends here-->
    </div>
    
    </footer>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  

</body>

</html>