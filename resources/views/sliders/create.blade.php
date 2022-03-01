@extends('components.master')
@section('content')
<section id="create__form">
    <div class="container">
        <div class="row col-md-6">
            <h1 class="text-center mb-4 mt-2">Add New</h1>

            <form method="post" action={{route('sliders.store')}} enctype="multipart/form-data">
                @csrf

                <div class="mb-3 row" >
                    <!--                        <label for="inputId" class="col-sm-2 col-form-label">Id</label>-->
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="inputId" name="id" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="title" value="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Subtitle</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="subtitle" value="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="price" value="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" name="link" value="">
                    </div>
                </div>



                <div class="mb-3 row">
                    <label for="inputPicture" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputPicture" name="image" value="">
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="inputActive" name="status">
                    <label class="form-check-label" for="inputActive">
                        Status
                    </label>
                </div>




                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" >Add</button>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection