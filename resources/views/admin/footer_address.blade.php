@extends('admin.layout.header')

@section('content')

  <div class="head-banner">
         <ul class="breadcrumb">
            <li>
               <a href="{{url('admin/home')}}">Home</a>
            </li>
            <li>
               <a href="index.html"><span>Footer Address</span></a>
            </li>
         </ul>
      </div>

      <div class="page mt-4 hosting-page title1" style="display: block;">
         <div class="list1">
            <h4 class="mb-0">Footer Address</h4>
         
         </div>
         <div class="sear-list">
            <div class="row">
               <div class="col-lg-12">
                
               </div>
            </div>
         </div>
         <div class="pro-table table-responsive">
            <table class="table table-bordered table-striped text">

            	@foreach($footer_address as $id)

                  <tr>
                     <th>Title</th>
                  </tr>

                  <tr>
                     <th class="text">{{$id->title}}</th>
                  </tr>

                  <tr>
                     <th>Address</th>
                  </tr>

                  <tr>
                 	   <th class="text">{!!$id->address!!}</th>
                  </tr>

                  <tr>
                  	 <th><button class="clo btn0"><a href="{{url('admin/add_footer_address_data')}}/{{$id->id}}">update</a></button></th>  
                  </tr>

                 @endforeach
                    
              
            </table>
            
         </div>
      </div>


       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.js"></script>
      
      <script type="text/javascript">


        $(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(3000); }, 3000)

             });


         function delete_industries($id){


               swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                 
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {

                    var BASE_URL = "{{ url('/') }}";

                    var id = $id;

                          $.ajax({

                                url:BASE_URL+'/admin/delete_industries/'+id,
                                type:'GET',
                                dataType: "json",

                                success: function(response){
        
                                     $('.industries_'+id).hide();
         
   
                                     },
 
                            error: function(response) {

                                     alert('error');
          
                                },        
          
                           });



                    
                    } else {
                     
                    }
                  });
      


      } 

      </script> 


@endsection