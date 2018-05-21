@extends ('master')

@section ('content')

 <div class="col-md-8">

 <h3>Create New User</h3>
 <form  method ="POST" action="/register" >
                    {{ csrf_field() }}
      <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
      </div>
      <div class="form-group">
     <label for="email">E-mail:</label>
     <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
      </div>
      <div class="form-group">
     <label for="password">Passwword:</label>
     <input type="password" class="form-control" id="password" name="password">
      </div>

     
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                    </form>

</div>

@stop