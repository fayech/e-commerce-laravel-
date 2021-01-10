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
                                                             <th>categorie</th>
                                                             <th>Marque</th>

                                                            <th> prix </th>
                                                            <th> qtestock </th>

                                                <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($articles as $article)
                                                        <tr id="sid{{$article->id}}">
                                                     <td><img src="{{asset('images/article')}}/{{$article->articleimage}}" style="width: 57px !important;"></td>
                                                     <td>{{ $article->nom}}</td>

                                                        <td>{{ $article->categories}}</td>
                                                        <td>{{ $article->marques}}</td>
                                                         <td>{{ $article->prix}}</td>
                                                        <td>{{ $article->qtestoch}}</td>

                                                        <td>

                                                            <a    data-id="{{ $article->id }}"
                                                                  class="btn btn-danger  Deletarticleopen"><i class="nav-icon i-Close-Window"></i></a>
                                                            <a href="/list-Article/{{$article->id}}" class="btn btn-success"><i class="nav-icon i-Pen-2"></i></a></td>



                                                        </tr>

                                                            @endforeach
                                                    </tbody>
                                                </table>


                                        </div>


                                    </div>
                                </div>
                                {!! $articles->links() !!}

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
<div id="delet_article" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="{{ route('article.delete')}}" method="POST">
                {{csrf_field()}}

                <div class="modal-body">
                    <input type="hidden" name="articleId" id="articleId" value=""/>

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
            <form  method="POST" action="{{route('article.store')}}" enctype="multipart/form-data" id="registerform">
                 @csrf
                 <div class="modal-header">

                    <h4 class="modal-title">Add marque</h4>
                    <button type="button" class="close" data-dismiss="modal"   aria-hidden="true">&times;</button>
                </div>
                <div class="col-md-12 form-group mb-3">
                    <label for="credit1">nom</label>
                    <input class="form-control" type="text"  name="nom"   required data-parsley-pattern="[a-zA-Z ]+$"  id="credit1" placeholder="nom article">
             @error('nom')
             <div class="invalid-feedback">
                  {{ $message }}
            </div>
             @enderror

                </div>
                <div class="col-md-12 form-group mb-3">
                    <label for="credit1">prix</label>
                    <input class="form-control" type="number"  required data-parsley-pattern="[0-9]+$"  data-parsley-length="[1,7]" name="prix"  id="credit1" placeholder="prix article">
                    @error('prix')
                    <div class="invalid-feedback">
                         {{ $message }}
                   </div>
                    @enderror

                </div>

                <div class="col-md-12 form-group mb-3">
                    <label for="credit1">quantite</label>
                    <input class="form-control" type="number"  required data-parsley-pattern="[0-9]+$"  data-parsley-length="[1,7]" name="qtestoch"  id="credit1" placeholder="prix article">
                    @error('qtestoch')
                    <div class="invalid-feedback">
                         {{ $message }}
                   </div>
                    @enderror

                </div>
                <div class="col-md-12 form-group mb-3">
                    <label for="credit1">description</label>
                    <textarea id="mytextarea" name="description"></textarea>
                    @error('description')
                    <div class="invalid-feedback">
                         {{ $message }}
                   </div>
                    @enderror
                </div>
                <div class="col-md-12 form-group mb-3">
                    <label for="credit1">Categorie</label>

                    <select class="form-control" name="categorie">
                        <option label="choose category "></option>
                        @foreach($categories as $categorie )
                    <option value="{{$categorie->id}}">{{ $categorie->Nom }}</option>

                        @endforeach
                    </select>

                    @error('categorie')
                    <div class="invalid-feedback">
                         {{ $message }}
                   </div>
                    @enderror
                </div>

                <div class="col-md-12 form-group mb-3">
                    <label for="credit1">marque</label>

                    <select class="form-control" name="marque">
                        <option label="choose marque "></option>
                        @foreach($marques as $marque)
                    <option value="{{$marque->id}}">{{ $marque->nom}}</option>

                        @endforeach
                    </select>
                    @error('marque')
                    <div class="invalid-feedback">
                         {{ $message }}
                   </div>
                    @enderror
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


$(function(){
    $("#registerform").parsley();
});



</script>


<script>
$(document).ready(function (e) {
$.ajaxSetup({
 headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

});
$(document).on("click", ".Deletarticleopen", function () {
     var Id = $(this).data('id');
     $(".modal-body #articleId").val( Id );
     // As pointed out in comments,
     // it is unnecessary to have to manually call the modal.
     $('#delet_article').modal('show');
});

</script>
@endsection
