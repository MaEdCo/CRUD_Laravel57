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
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">New Student</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('Student.store') }}"  role="form">
							{{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="inputID">ID</label>
                                        <input type="text" class="form-control" name="id_student" id="id_student" placeholder="">
                                    </div> 
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputLastName">LastName</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="LastName">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="inputAge">Age</label>
                                        <input type="number" class="form-control" name="age" id="age" min="1" max="40">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputPhone">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="310">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Carrera ">
                                    </div>                             
                                 
                                    <div class="form-group">
                                    <label for="inputAddress">BirthDate</label>
									<input type="text" class="form-control" name="birthdate" id="birthdate" >
									
								
										
								                   					
                                        <script type="text/javascript">
                                        $("#birthdate").datepicker({
											dateFormat: 'yy-mm-dd'
										});
                                        </script>
								
                               

                                    </div>


									<div class="form-row">
                                        <div class="form-group col-md-6">
											<input type="submit"  value="Create" class="btn btn-success btn-block">
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
