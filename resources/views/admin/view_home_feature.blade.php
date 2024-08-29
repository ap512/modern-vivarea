@extends('admin.layout.header')

@section('content')

<style type="text/css">
   .arr_d{
      display: flex;
      flex-wrap: wrap;
   }
   .arr_d1{
      width: 50%;
   }
   .arr_d tr th{
      display: block;
   }
   .table-title{
      font-size: 20px;
      color: #6b6b7a;
   }
   button.clo.btn0 {
       display: block;
       margin-left: auto;
       margin-top: 2%;
       margin-bottom: 2%;
   }
   .btn0 a{
      padding: 10px 12px!important;
   }
   .button-new{
      margin-right: auto;
      margin-left: 5px!important;
   }
   .co-features ul {
       list-style-type: disc;
       padding-left: 30px !important;
   }
</style>

  <div class="head-banner">
         <ul class="breadcrumb">
            <li>
               <a href="{{url('admin/home')}}">Home</a>
            </li>
            <li>
               <a href="{{url('/admin/home')}}"><span>Home Feature Detail</span></a>
            </li>
         </ul>
      </div>

      <div class="page mt-4 hosting-page title1" style="display: block;">
         <div class="list1">
            <h4 class="mb-0">Home Feature detail</h4>
         
         </div>
         <div class="sear-list">
            <div class="row">
               <div class="col-lg-12">
                
               </div>
            </div>
         </div>
         <div class="pro-table">
            <table class="table table-bordered table-striped text">
               <tbody class="arr_d">

            	@foreach($home_feature as $ab)
                        <tr class="w-100">
                          <th>Image</th>
                          <th><img src="/uploads/{{$ab->image}}" height="200" width="200"></th>
                        </tr>

                        <tr class="w-100">
                          <th>Title</th>
                          <th class="text">{{$ab->title}}</th>
                        </tr>

                 @endforeach

                  <tr class="w-100">
                     <th>
                        <div class="co-features">
                        <!-- <div class="container">
                           <div class="Features-main">
                              <div class="row">
                                 @foreach($features as $f)
                                 <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="Features-details">
                                       <p>{{$f->description}}</p>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div> -->
                           <ul>
                              @foreach($features as $f)
                              <li class="text">{{$f->description}}</li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                     </th>
                     
                  </tr>

               </tbody>
              
            </table>
            
         </div>
      </div>

      <div class="d-flex mx-auto">
      
         <button class="clo btn0"><a href="{{url('/admin/add_home_feature_data')}}/{{$id}}">Update Details</a></button>
      

      <button class="clo btn0 button-new"><a href="{{url('/admin/home_feature')}}">Back to Details</a></button>
      </div>


<style type="text/css">
   
   .features-title h4 {
       font-family: 'Playfair Display';
       font-weight: 600;
       font-size: 40px;
       line-height: 52px;
       color: #00155F;
       text-align: center;
       padding-bottom: 18px;
   }
   .Features-details img {
       width: 48px;
       height: 48px;
       margin-right: 13px;
   }
   .Features-details {
       background: #FFFFFF;
       box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.16);
       border-radius: 6.32754px;
       display: flex;
       padding: 20px;
       align-items: center;
   }
   .Features-details p {
       font-family: 'Open Sans';
       font-weight: 400;
       font-size: 16px;
       line-height: 26px;
       color: #565656;
       margin: 0;
   }
   .service-image1 {
       margin: 0 0 0 auto;
   }
   .Features-main .col-lg-3 {
       display: flex;
   }



</style>
   
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">


        $(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(3000); }, 3000)

             });


      </script> 


@endsection