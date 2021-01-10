@extends('layout.navbar')

@section('admin_content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Input Group</h1>
            <ul>
                <li><a href="href.html">Form</a></li>
                <li>Input Group</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title"> Update marque</div>

            <form  method="POST" action="{{route('marque.update')}}" enctype="multipart/form-data">
                 @csrf
                 <div class="modal-header">
                    <input class="form-control" type="hidden" value="{{$marque->id}}" name="id" >
                    <h4 class="modal-title">Add marque</h4>
                    <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="col-md-12 form-group mb-3">
                    <label for="credit1">nom</label>
                    <input class="form-control" type="text" value="{{$marque->nom}}" name="nom"  id="credit1" placeholder="Card">
                </div>
                <div class="col-md-12 form-group mb-3">
                    <label for="website">Images</label>
                <input class="form-control"  type="file" value="{{$marque->marqueimage}}"  name="file" id="website" onchange="previewFile(this)" placeholder="Web address">
                    <img id="previewImg" src="{{asset('images/marque')}}/{{$marque->marqueimage}}" alt="profile image" style="max-width: 130px; margin-top:20px;"/>

                </div>


                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>


                    </div>
                </div>
            </div>

        </div><!-- end of main-content -->
    </div><!-- Footer Start -->
    <div class="flex-grow-1"></div>

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
@endsection
