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
                        <div class="card-title"> Update article</div>

                        <form  method="POST" action="{{route('article.update')}}" enctype="multipart/form-data" id="registerform">
                            @csrf
                            <div class="modal-header">

                               <h4 class="modal-title">Add article</h4>
                            <button type="button" class="close" data-dismiss="modal"    aria-hidden="true">&times;</button>
                           </div>
                           <input class="form-control" type="hidden" value="{{$article->id}}" name="id" >

                           <div class="col-md-12 form-group mb-3">
                               <label for="credit1">nom</label>


                           <input class="form-control" type="text"  name="nom" value="{{$article->nom}}"  required data-parsley-pattern="[a-zA-Z ]+$"  id="credit1" placeholder="nom article">
                        @error('nom')
                        <div class="invalid-feedback">
                             {{ $message }}
                       </div>
                        @enderror


                           </div>
                           <div class="col-md-12 form-group mb-3">
                               <label for="credit1">prix</label>
                           <input class="form-control" type="number" value="{{$article->prix}}" required data-parsley-pattern="[0-9]+$"  data-parsley-length="[1,7]" name="prix"  id="credit1" placeholder="prix article">
                               @error('prix')
                               <div class="invalid-feedback">
                                    {{ $message }}
                              </div>
                               @enderror

                           </div>

                           <div class="col-md-12 form-group mb-3">
                               <label for="credit1">quantite</label>
                               <input class="form-control" type="number" value="{{$article->qtestoch}}" required data-parsley-pattern="[0-9]+$"  data-parsley-length="[1,7]" name="qtestoch"  id="credit1" placeholder="prix article">
                               @error('qtestoch')
                               <div class="invalid-feedback">
                                    {{ $message }}
                              </div>
                               @enderror

                           </div>


                           <div class="col-md-12 form-group mb-3">
                               <label for="credit1">description</label>
                           <textarea  >{{$article->description}}</textarea>
                               @error('description')
                               <div class="invalid-feedback">
                                    {{ $message }}
                              </div>
                               @enderror
                           </div>
                           <div class="col-md-12 form-group mb-3">
                               <label for="credit1">Categorie</label>

                               <select class="form-control" name="categorie">
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
                               <img id="previewImg" src="{{asset('images/Article')}}/{{$article->articleimage}}" alt="profile image" style="max-width: 130px; margin-top:20px;"/>

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
