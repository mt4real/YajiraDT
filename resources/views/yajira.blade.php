<!DOCTYPE html>
<html>
<head>
	  <meta name="csrf-token" content="{{csrf_token()}}">
	<title>Yajira table</title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" />
</head>
<body>
	<div class="container m-5">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="display-3 text-capitalize  text-center mt-5">Yajira Live table</h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-sm-12">
			
<table id="live_table" class="table table-bordered table-responsive table-hover ">
	<thead>
		<tr>
	<th>Id</th>
	<th>FirstName</th>
	<th>LastName</th>
	<th>Email</th>
	<th>Address</th>
	<th>Date Created</th>
	<th>Date Updated</th>
	<th>Actions</th>
</tr>
</thead>

</table>
</div>
</div>
</div>


<!--Edit Modal-->
    <div class="modal fade" id="editModal" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title-text"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-save" name="form-save" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">

                                <input type="hidden" name="id" id="id">

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">firstname</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Lastname</label>
                                    <div class="col-sm-12">
                                       
                                         <input type="text" class="form-control form-control-lg" id="lastname" name="lastname"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">E-mail</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control form-control-lg" id="email" name="email" value=""
                                            required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Address</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="address" id="address" required></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="btn_save"
                                    value="create">Edit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- END OF  MODAL -->


    <!-- Modal Delete -->
              <div class="modal fade" tabindex="-1" role="dialog" id="modalDelete" data-backdrop="static" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Are you sure you want to delete this data?</b></p>
                    <p>Because You will not be able to revert it</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" name="btn_delete" id="btn_delete">Delete</button>
                </div>
            </div>
        </div>
    </div>




<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
	
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous"></script>
	<script type="text/javascript">


		  $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

		$(document).ready(function() {

	$('#live_table').DataTable({

		processing:true,
		serverSide:true,
		ajax:{

			url: "{{route('yajira.live')}}",
			type:'GET',
		},
		columns:[
		 { data:'id', name:'id'},
         { data:'firstname', name:'firstname'},
         { data:'lastname', name:'firstname'},
          { data:'email', name:'email'},
           { data:'address', name:'address'},
            { data:'created_at', name:'created_at'},
             { data:'updated_at', name:'updated_at'},
               { data:'action', name:'action'},

		],
		order:[[0,'asc']]
	});
});



		if ($("#form-save").length > 0) {
			// var row_id=$('.edit-data').val();
			//  var data_id = row_id.data('id');
            $("#form-save").validate({
                submitHandler: function (form) {
                    var actionType = $('#btn_save').val();
                    $('#btn_save').html('Sending..');
                    $.ajax({
                        data: $('#form-save')
                            .serialize(), 
                        url: "{{route('live.save')}}", 
                        type: "POST", 
                        dataType: 'json', 
                        success: function (data) {  
                            $('#form-save').trigger("reset"); 
                            $('#editModal').modal('hide'); 
                            $('#btn_save').html('Edit');
                            var oTable = $('#live_table').dataTable(); 
                            oTable.fnDraw(false); 
                            iziToast.success({ 
                                title: 'Data Successfully Edited',
                                message: '{{ Session('
                                success ')}}',
                                position: 'bottomRight'
                            });
                        },
                        error: function (data) { 
                            console.log('Error:', data);
                            $('#btn_edit').html('Edit');
                        }
                    });
                }
            })
        }




        //modal edit


         $('body').on('click', '.edit-data', function () {
            var data_id = $(this).data('id');
            $.get('/live-edit/' + data_id + '/data', function (data) {
                $('#modal-title-text').html("Edit Data");
                $('#btn_save').val("edit-data");
                $('#editModal').modal('show');               
                $('#id').val(data.id);
                $('#firstname').val(data.firstname);
                $('#lastname').val(data.lastname);
                $('#email').val(data.email);
                $('#address').val(data.address);
            })
        });

  
         //modal add data

          $('body').on('click', '.save-data', function () {
           $('#modal-title-text').html("Add Data");
            $('#id').val('');             
            $('#form-save').trigger("reset"); 
            $('#btn_save').html("Add"); 
            $('#editModal').modal('show'); 
        });

//modal delete
                $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#modalDelete').modal('show');
             $('#btn_delete').html('Delete'); 
             });
       


        
        $('#btn_delete').click(function () {
            $.ajax({
                url: "/live-delete/"+dataId, 
               // type: 'delete',
                beforeSend: function () {
                    $('#btn_delete').text('Deleting...'); 
                },
                success: function (data) { 
                    setTimeout(function () {

                        $('#modalDelete').modal('hide'); 
                         $('#live_table').DataTable().ajax.reload();
                        var oTable = $('#live_table').dataTable();
                        oTable.fnDraw(false); 
                    });
                    iziToast.warning({ 
                        title: 'Delete data',
                        message: '{{ Session('
                        delete ')}}',
                        position: 'bottomRight'
                    });
                }
            })
       
 });

	</script>
</body>
</html>