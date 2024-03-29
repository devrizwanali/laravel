@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Company</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('savingcompany') }}">
          @csrf
          <div class="form-group">    
              <label for="company_name">Name:</label>
              <input type="text" class="form-control" name="company_name"/>
          </div>

          <div class="form-group">
              <label for="phone_number">Phone Number:</label>
              <input type="text" class="form-control" name="phone_number"/>
          </div>
                
          <button type="submit" class="btn btn-primary-outline">Add company</button>
          <a href="{{ route('allcompanies') }}" class="btn-primary-outline">Show Companies </a>
      </form>
  </div>
</div>
</div>
@endsection