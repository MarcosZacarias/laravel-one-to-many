@extends('layouts.app')

@section('content')
<section>
    <div class="container mt-5">
        <a href="{{ route('admin.projects.index') }}" class="">
            <button class="btn btn-outline-secondary mb-3">Return to the list</button>
        </a>

        <h1>Create Project</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <h4>Correct the errors:</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-4">
                    <img src="" alt="" id="preview-image">
                </div>
                <div class="col-8">
                    <div class="row g-4">
                        <div class="col-4">
                            <label for="name" class="form-label"><strong>Name</strong></label>
                            <input 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name" name="name" 
                            value="{{ old('name')}}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-8">
                            <label for="img_path" class="form-label"><strong>Link image</strong></label>
                            <input 
                            type="url" 
                            class="form-control @error('img_path') is-invalid @enderror" 
                            id="img_path" 
                            name="img_path" 
                            value="{{old('img_path')}}">
                            @error('img_path')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>                        
                        <div class="col-3">
                            <label for="name_repo" class="form-label"><strong>Name Repository</strong></label>
                            <input 
                            type="text" 
                            class="form-control @error('name_repo') is-invalid @enderror" 
                            id="name_repo" 
                            name="name_repo" 
                            value="{{old('name_repo')}}">
                            @error('name_repo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label"><strong>Description</strong></label>
                            <textarea 
                            type="text"
                            rows="5"
                            class="form-control @error('description') is-invalid @enderror" 
                            id="description" 
                            name="description">
                                {{old('description')}}
                            </textarea>
                            @error('description')   
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Save</button>
                        </div>
                    </div>
                </div>
                
            </div>


            

        </form>
    </div>
</section>

@endsection

@section('scripts')
<script>
    const previewImg = document.getElementById('preview-image');
    const srcInput = document.getElementById('thumb');

    srcInput.addEventListener('change', function() {
        previewImg.src = this.value
    })

</script>
@endsection