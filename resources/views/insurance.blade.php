<!doctype html>
<html class="no-js" lang="zxx">


<body>
    
@include('parts.header');
    
      <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Insurance Policies</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">What we offer for you</h3>
                        
                    </div>
                </div>
            </div>


           


        
                    @foreach($all_categories as $category)
 
           
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="img/svg_icon/service_1.png" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>{{$category->name}}</span>
                            <h3>{{$category->installment_amount}}</h3>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Profit rate - {{$category->interest_rate}} </li>
                                <li>Monthly Installment Amount (BDT) - {{$category->installment_amount}}</li>
                            </ul>
                         <center>
                            <div class="apply_btn">
                                <a href="{{route('userpolicy', ['id'=>$category->id])}}" class="boxed-btn3" >Apply Now</a>
                            </div>
                            </center>
                        </div>
                    </div>
                
          
             @endforeach
                   {{$all_categories->links()}}

        </div>
    </div>

    
          
   
  

  
   @include('parts.footer');

 
</body>

</html>