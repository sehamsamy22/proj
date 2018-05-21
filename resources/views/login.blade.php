@extends ('master')

@section ('content')

 <div class="col-md-8">

 <h3>login page</h3>
 <form  method ="post" action="/login" >
                    {{ csrf_field() }}
     
      <div class="form-group">
     <label for="email">E-mail:</label>
     <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
      </div>
      <div class="form-group">
     <label for="password">Password:</label>
     <input type="password" class="form-control" id="password" name="password">
      </div>

                
         <div class="form-group">
        <button type="submit" class="btn btn-primary">login</button>
          </div>
          </form>

            <div>
            @foreach ($errors->all() as $error)
            {{ $error }} <br>
            @endforeach
            
            </div>        

</div>

@stop