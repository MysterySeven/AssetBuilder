@extends('index')


@section('content')
<div class="container">
<div class="row">
<a href="{{ route('addUser') }}" class="btn btn-primary">Add Patient</a>
</div>
<div class="row">
    <table class="table table-bordered display" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Place of Birth</th>
                <th>Actions</th>
            </tr>
        </thead>
        </tbody>
                @foreach($body as $patient)
                    <tr>
                    <td class="id">{{ $patient->id }}</td>
                    <td>{{ $patient->first_name }} </td>
                    <td>{{ $patient->last_name}}</td>
                    <td>{{ $patient->address}} </td>
                    <td>{{ $patient->age}}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->phone_number}}</td>
                    <td>{{ $patient->place_of_birth}}</td>
                    <td>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="save"></label>
                        <div class="col-md-6">
                           <button  class="btn btn-success testing" >Edit</button>
                           <button class="btn btn-danger delete">Delete</button>
                        </div>
                        </div>
                    </td>
                    </tr>
                @endforeach

   

        </tbody>
    </table>
</div>
</div>
@stop


@push('script')
        <script>
            $(document).ready(function(){
                $(".testing").click(function() {
                    
                    var $row = $(this).closest("tr");    // Find the row
                    var $text = $row.find(".id").text(); // Find the text
                    
                    // Let's test it out
                    window.location.href="http://localhost:8000/add/edit/" + $text;
              });

               $(".delete").click(function(e) {
                
                var row = $(this).closest("tr");    // Find the row
                    var text = row.find(".id").text();
              
                  // Let's test it out
                window.location.href = "http://localhost:8000/delete/" + text;

             
    
          });



            });
        </script>

@endpush