{{-- @extends('layouts.app1') --}}
{{-- @section('content') --}}
<!DOCTYPE html>

{{-- <html lang="en"> --}}
<head>
<title>جدول محصولات</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
<body>
        <div class="container">
              <h2>جدول محصولات</h2>
              <div align="right">
                  <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">
add product
                  </button>

              </div>
              <br>
              <br>
           <table class="table table-bordered" id="laravel_datatable">
              <thead>
                 <tr>
                    {{-- <th>Id</th> --}}
                    <th>Name</th>
                    <th>Price</th>
                    <th>Number</th>
                    <th>image</th>
                    <th>Action</th>

                    {{-- <th>Created at</th> --}}
                 </tr>
              </thead>
           </table>
        </div>
    </body>
    </html>
    <div id="formmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 id="modal-title">Add new product</h4>
            </div>
            <div class="modal-body">
              <span id="form_result"></span>

              <form  id="sample_form" class="form-horizontal">
                @csrf
                {{-- @method('PUT') --}}
                <div class="form-group">
                    <label class="control-label col-md-4" >Name : </label>
                    <div class="col-md-8">
                        <input type="text" name="name" id="name" class="form-cotrol" >
                    </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-4" >Price : </label>
                      <div class="col-md-8">
                          <input type="text" name="price" id="price" class="form-cotrol" >
                      </div>
                  </div>
                  <div class="form-group">
                          <label class="control-label col-md-4" >Number : </label>
                          <div class="col-md-8">
                              <input type="text" name="num" id="num" class="form-cotrol" >
                          </div>
                      </div>
                      <div class="form-group" align="center">
                          <input type="hidden" name="action" id="action" value="Add">
                          <input type="hidden" name="hidden_id" id="hidden_id">
                          <input type="submit"  name="action_button" id="action_button" class="btn btn-warning" value="Add">

                      </div>


            </form>

            </div>
            </div>
        </div>
    </div>

    <div id="confirmmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modalbody">
                <h4 align="center" style="margin:10px;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">
                    Ok

                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

  <script>
  $(document).ready( function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   $('#laravel_datatable').DataTable({
          processing: true,
          serverSide: true,


          ajax: "{{ Route('admin.products.allproductdatatables') }}",
          
          columns: [
                //    { data: 'id', name: 'id' },
                   { data: 'name', name: 'name' },
                   { data: 'price', name: 'price' },
                   { data: 'num', name: 'num' },
                   { data: 'images', name: 'images[0].id' },
                   {data: 'action', name: 'action', orederable:false}
                //    { data: 'created_at', name: 'created_at' }
                ]
       });
       console.log('images[0]');



       $('#create_record').click(function(){
           $('#modal-title').text('Add new product');
           $('#action_button').val('Add');


           $('#action').val('Add');
           $('#form_result').html('');

           $('#formmodal').modal('show');


       });

       $('#sample_form').on('submit',function(event){
           event.preventDefault();
           var action_url='';
           var method='';
           if($('#action').val()=='Add')
           {
               action_url="{{route('admin.product.store')}}";
               method="POST";
           }
           if($('#action').val()=='Edit')
           {
               var id=$('#hidden_id').val();

            action_url="{{route('admin.product.update',"+id+")}}";
            method="PUT";



           }
           $.ajax({
               url:action_url,
               method:method,
               data:$(this).serialize(),
               daraType:"json",
               success:function(data)
               {
                   var html='';
                   if(data.errors)
                   {
                       html='<div class="alert alert-danger">';
                       for(var count=0; count<data.errors.length; count++)
                       {
                           html +='<p>'+data.errors[count]+'</p>';
                       }
                       html +='</div>';
                   }
                   if(data.success)
                   {
                       html='<div class="alert alert-success">'+
                       data.success+'</div>';
                       $('#sample_form')[0].reset();
                       $('#laravel_datatable').DataTable().ajax.reload();
                   }
                   $('#form_result').html(html);
               }
           });

       });

    //


          $(document).on('click','.edit',function(){
           var id=$(this).attr('id');

           $('#form_result').html('');
           $.ajax({
               url:"product/"+id+"/edit",
               dataType:"json",
               success:function(data){
                   $('#name').val(data.result.name);
                   $('#price').val(data.result.price);
                   $('#num').val(data.result.num);
                   $('#hidden_id').val(id);
                   $('#modal-title').text('Edit product');
                   $('#action_button').val('Edit');
                   $('#action').val('Edit');
                   $('#formmodal').modal('show');




               }
           });

       });

       var product_id;
       $(document).on('click','.delete',function(){
        product_id=$(this).attr('id');
        $('#confirmmodal').modal('show');


       });

       $('#ok_button').click(function(){
          $.ajax({

              type:'DELETE',

            url:"product/"+product_id,
            //   alert('hi');
              beforeSend:function(){
                  $('#ok_button').text('Deleting...');
              },

              success:function(data){
                  setTimeout(function(){
                    //   alert(data.ss);
                    $('#confirmmodal').modal('hide');
                    $('#laravel_datatable').DataTable().ajax.reload();
                    $('#ok_button').text('Ok');

                    // alert('Data deleted');

                  },2000);

              }


          });
       });





  });

 </script>

 {{-- @endsection --}}

