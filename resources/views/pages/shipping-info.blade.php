@extends('layouts.app')
@section('main-content')
<br>
<<<<<<< HEAD
<div class="container">

=======
>>>>>>> 1c43c076b96eb913ffd58e297d1377410b62a1ad
   <div class="small-6 small-centered columns">
       <h3>Shipping Info</h3>

       {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

       <div class="form-group">
           {{ Form::label('addressline', 'Address Line') }}
           {{ Form::text('addressline', null, array('class' => 'form-control')) }}
       </div>

       <div class="form-group">
           {{ Form::label('city', 'City') }}
           {{ Form::text('city', null, array('class' => 'form-control')) }}
       </div>
<<<<<<< HEAD

=======
    
>>>>>>> 1c43c076b96eb913ffd58e297d1377410b62a1ad
       <div class="form-group">
           {{ Form::label('country', 'Country') }}
           {{ Form::text('country', null, array('class' => 'form-control')) }}
       </div>
       <div class="form-group">
           {{ Form::label('phone', 'Phone') }}
           {{ Form::text('phone', null, array('class' => 'form-control')) }}
       </div>
<<<<<<< HEAD
       {{ Form::submit('Save and create order', array('class' => 'button success')) }}
       {!! Form::close() !!}
   </div>
   <br>
   


</div>
</div>
=======

       {{ Form::submit('Proceed to Payment', array('class' => 'button success')) }}
       {!! Form::close() !!}
   </div>


</div>
>>>>>>> 1c43c076b96eb913ffd58e297d1377410b62a1ad



@endsection
