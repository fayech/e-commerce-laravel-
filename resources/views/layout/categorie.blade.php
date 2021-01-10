@extends('layout.navbar')

@section('admin_content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Table</h1>
            <ul>
                <li><a href="#">Componets</a></li>
                <li>Table</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row mb-4">
            <div class="col-md-12 mb-6">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Basic Table</h4>

                        <a class="btn btn-success" href="javascript:void(0)" id="createNewCategorie"> Create New Categorie</a>
                        <div class="table-responsive">
                            <table class="table table-bordered data-table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">nom</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->

            <!-- end of col-->
        </div>
        <!-- end of row-->

<!-- Footer Start -->

    <!-- fotter end -->
</div>

<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="categorieForm" name="categorieForm" class="form-horizontal">
                    <input type="hidden" name="categorie_id" id="categorie_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">nom</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                    </div>



                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
   $(function () {

     $.ajaxSetup({
         headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });

     var table = $('.data-table').DataTable({
         processing: true,
         serverSide: true,
         ajax: "{{ route('Categorie.index') }}",
         columns: [
             {data: 'DT_RowIndex', name: 'DT_RowIndex'},
             {data: 'Nom', name: 'Nom'},
             {data: 'action', name: 'action', orderable: false, searchable: false},
         ]
     });

     $('#createNewCategorie').click(function () {
         $('#saveBtn').val("create-product");
         $('#categorie_id').val('');
         $('#categorieForm').trigger("reset");
         $('#modelHeading').html("Create New Product");
         $('#ajaxModel').modal('show');
     });

     $('body').on('click', '.editCategorie', function () {
         var categorie_id = $(this).data('id');
         $.get("{{ route('Categorie.index') }}" +'/' + categorie_id +'/edit', function (data) {
             $('#modelHeading').html("Edit Product");
             $('#saveBtn').val("edit-user");
             $('#ajaxModel').modal('show');
             $('#categorie_id').val(data.id);
             $('#Nom').val(data.Nom);
         })
     });

     $('#saveBtn').click(function (e) {
         e.preventDefault();
         $(this).html('Sending..');

         $.ajax({
             data: $('#categorieForm').serialize(),
             url: "{{ route('Categorie.store') }}",
             type: "POST",
             dataType: 'json',
             success: function (data) {
                 $('#categorieForm').trigger("reset");
                 $('#ajaxModel').modal('hide');
                 table.draw();
             },
             error: function (data) {
                 console.log('Error:', data);
                 $('#saveBtn').html('Save Changes');
             }
         });
     });

    $('body').on('click', '.deleteCategorie', function (){
        var categorie_id = $(this).data("id");
        var result = confirm("Are You sure want to delete !");
        if(result){
            $.ajax({
                type: "DELETE",
                url: "{{ route('Categorie.store') }}"+'/'+categorie_id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }else{
            return false;
        }
    });
});
</script>


@endsection
		<!-- end of Delete Modal HTML -->
