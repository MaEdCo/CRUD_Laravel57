@extends('layouts.app')
@section('content')


@if (session('status'))
			<div class="alert alert-success">
      {{ session('status') }}
			</div>
@endif

<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Students List</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Student.create') }}" class="btn btn-info" >Add Student</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>ID Student</th>
               <th>Name</th>
               <th>Last Name</th>
               <th>Age</th>
               <th>Phone</th>
               <th>Address</th>
               <th>BirthDate</th>
               <th>Edit</th>
               <th>Delete</th>
             </thead>
             <tbody>
           
              @if($students->count())  
              @foreach($students as $student)  
              <tr>
                <td>{{$student->id_student}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->birthdate}}</td>

                               
                <td><a class="btn btn-primary btn-xs" href="{{action('StudentController@edit', $student->id_student)}}" ><i class="fas fa-pencil-alt"></i></a></td>

                


                <td>
                  <form action="{{action('StudentController@destroy', $student->id_student)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><i class="fas fa-trash"></i></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No records!!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
     
    </div>
  </div>
</section>
 
@endsection