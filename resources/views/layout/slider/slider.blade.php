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
                        <h4 class="card-title mb-3">Slider</h4>

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
                                    <a class="btn btn-success"  data-target="#Add_slider"  data-toggle="modal" href="#Add_slider"> Create New Categorie</a>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-body">
                                            <table class="table" id="MarqueTable">
                                                <thead>
                                                <tr >
                                                        <tr>
                                                            <th>sliderimage </th>
                                                            <th> title </th>
                                                            <th>etat </th>
                                                <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                     @foreach($sliders as $slider)
                                                        <tr id="sid{{$slider->id}}">
                                                     <td><img src="{{asset('images/Slider')}}/{{$slider->sliderimage}}" style="width: 57px !important;"></td>
                                                     <td>{{ $slider->title}}</td>
                                                     <td>
                                                     @if($slider->etat == "active")

                                                         <button class="btn btn-success btn-icon m-1" type="button">active</button>

                                                        @else
                                                        <button class="btn btn-outline-danger btn-icon m-1" type="button">nonactive</button>

                                                        @endif
                                                    </td>
                                                    <td>
                                                            <a    data-id="{{ $slider->id }}"
                                                                  class="btn btn-danger  DeletSlideropen"><i class="nav-icon i-Close-Window"></i></a>
                                                            <a href="/Slider-list/{{$slider->id}}" class="btn btn-success"><i class="nav-icon i-Pen-2"></i></a></td>



                                                        </tr>

                                                            @endforeach
                                                    </tbody>
                                                </table>


                                        </div>


                                    </div>
                                </div>
                                {!! $sliders->links() !!}

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
<div id="delet_slider" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="{{ route('slider.delete')}}" method="POST">
                {{csrf_field()}}

                <div class="modal-body">
                    <input type="hidden" name="sliderId" id="sliderId" value=""/>

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
<div id="Add_slider" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                 @csrf
                 <div class="modal-header">

                    <h4 class="modal-title">Add Slider</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="col-md-12 form-group mb-3">
                    <label for="credit1">Title</label>
                    <input class="form-control" type="text"  name="title"  id="credit1" placeholder="title">
                </div>
                <div class="col-md-12 form-group mb-3">


                    <label for="credit1">etat</label>

                    <select class="form-control" name="etat">
                        <option label="choose  "></option>
                    <option value="active">active</option>
                    <option value="nonActive">nonActive</option>

                    </select>
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
$(document).on("click", ".DeletSlideropen", function () {
     var Id = $(this).data('id');
     $(".modal-body #sliderId").val( Id );
     // As pointed out in comments,
     // it is unnecessary to have to manually call the modal.
     $('#delet_slider').modal('show');
});

</script>
@endsection
