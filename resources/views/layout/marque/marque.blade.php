@extends('layout.navbar')

@section('admin_content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Datatables</h1>
            <ul>
                <li><a href="#">UI Kits</a></li>
                <li>Datatables</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>Datatables</h4>

            </div>
        </div>
        <!-- end of row-->
        <div class="row mb-4">


            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Marque</h4>

                        <div class="table-responsive">
                            <div id="language_option_table_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="language_option_table_length"><label>Display
                                                <select name="language_option_table_length"
                                                    aria-controls="language_option_table"
                                                    class="form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> records per page</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="language_option_table_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                    placeholder="" aria-controls="language_option_table"></label></div>
                                    </div>
                                    <a class="btn btn-success"  data-target="#Add_marques"  data-toggle="modal" href="#Add_marques"> Create New Categorie</a>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-body">
                                            <table class="table" id="MarqueTable">
                                                <thead>
                                                <tr >
                                                        <tr>
                                                            <th>imges </th>
                                                            <th> name </th>



                                                <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($marques as $marque)
                                                        <tr id="sid{{$marque->id}}">
                                                     <td><img src="{{asset('images/marque')}}/{{$marque->marqueimage}}" style="width: 57px !important;"></td>

                                                        <td>{{ $marque->nom}}</td>

                                                        <td>

                                                            <a    data-id="{{ $marque->id }}"
                                                                  class="btn btn-danger  Deletmarqueopen"><i class="nav-icon i-Close-Window"></i></a>
                                                            <a href="/Marque-list/{{$marque->id}}" class="btn btn-success"><i class="nav-icon i-Pen-2"></i></a></td>



                                                        </tr>

                                                            @endforeach
                                                    </tbody>
                                                </table>


                                        </div>


                                    </div>
                                </div>
                                {!! $marques->links() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->
        </div>
        <!-- end of row-->
        <!-- end of main-content -->
    </div>



</div>




<!-- Delete Modal HTML -->
<div id="delet_marque" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="{{ route('marque.delete')}}" method="POST">
                {{csrf_field()}}

                <div class="modal-body">
                    <input type="hidden" name="marqueId" id="marqueId" value=""/>

                    <h5 class="text-center">Are you sure you want to delete </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes, Delete Project</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- end of Delete Modal HTML -->



    <!-- Delete Modal HTML -->
<div id="Add_marques" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST" action="{{route('marque.store')}}" enctype="multipart/form-data">
                 @csrf
                 <div class="modal-header">

                    <h4 class="modal-title">Add marque</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="col-md-12 form-group mb-3">
                    <label for="credit1">nom</label>
                    <input class="form-control" type="text"  name="nom"  id="credit1" placeholder="nom marque">
                </div>
                <div class="col-md-12 form-group mb-3">
                    <label for="website">Images</label>
                    <input class="form-control"  type="file"  name="file" id="website" onchange="previewFile(this)" placeholder="Web address">
                    <img id="previewImg" alt="profile image" style="max-width: 130px; margin-top:20px;"/>

                </div>


                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>

        </div>
    </div>
</div>



<script>
    function previewFile(input){
        var file =$("input[type=file]").get(0).files[0];
        if(file)
        {
            var reader = new FileReader();
            reader.onload = function(){
                $("#previewImg").attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }






</script>


<script>
$(document).ready(function (e) {
$.ajaxSetup({
 headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

});
$(document).on("click", ".Deletmarqueopen", function () {
     var Id = $(this).data('id');
     $(".modal-body #marqueId").val( Id );
     // As pointed out in comments,
     // it is unnecessary to have to manually call the modal.
     $('#delet_marque').modal('show');
});

</script>
@endsection
