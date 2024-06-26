@extends('backend.layouts.master')
@section('title','E-SHOP || Crear marca')
@section('main-content')

<div class="card">
    <h5 class="card-header">{{__("Add Brand")}}</h5>
    <div class="card-body">
      <form method="post" action="{{route('brand.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">{{__("Title")}} <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder=""  value="{{old('title')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <div class="form-group">
          <label for="status" class="col-form-label">{{__("Status")}} <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">{{__("Active")}}</option>
              <option value="inactive">{{__("Inactive")}}</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">{{__("Reset")}}</button>
           <button class="btn btn-success" type="submit">{{__("Submit")}}</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Escribe una breve descripción......",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush