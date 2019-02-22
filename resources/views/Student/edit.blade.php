@extends('layouts.app')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Review the required fields.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
            @if (session('status'))
			<div class="alert alert-success">
            {{ session('status') }}
			</div>
             @endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Student</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('Student.update',$student->id_student) }}"  role="form">
                            @method('PUT')
							@csrf							
                           
                            <div class="form-group">
                                        <label for="inputID">ID</label>
                                        <input type="text" name="id_student" value="{{$student->id_student}}" class="form-control">
                                    </div> 
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$student->name}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputLastName">LastName</label>
                                        <input type="text" class="form-control" name="lastname" value="{{$student->lastname}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="inputAge">Age</label>
                                        <input type="number" class="form-control" name="age" min="1" max="40" value="{{$student->age}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputPhone">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{$student->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$student->address}}">
                                    </div>                             
                                 
                                    <div class="form-group">
                                    
                                    <label for="inputDate">BirthDate</label>
                                    <input type="text" class="form-control" name="birthdate" id="birthdate" value="{{$student->birthdate}}">

                                   
                                        <script type="text/javascript">
                                        $("#birthdate").datepicker({
											dateFormat: 'yy-mm-dd'
										});
                                        </script>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
											<input type="submit"  value="Update" class="btn btn-success btn-block">
                                        </div>
                                        <div class="form-group col-md-6">
											<a href="{{ route('Student.index') }}" class="btn btn-info btn-block" >Back</a>
                                        </div>
                                    </div>			







						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection