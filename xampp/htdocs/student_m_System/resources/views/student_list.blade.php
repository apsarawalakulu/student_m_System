@extends('app')
@push('title')
    Student List
@endpush
@push('nav-brand')
  LMS
@endpush
 @section('content')
     <div class="container-fluid mt-5">
         <div class="row">
             <div class="col-12">
                 <h1 class="mb-5">Student List</h1>
             </div>
             <div class="col-12">
                 <table class="table">
                     <thead>
                     <tr>
                         <th scope="col">Reg No</th>
                         <th scope="col">Name</th>
                         <th scope="col">Address</th>
                         <th scope="col">DOB</th>
                         <th scope="col">Age</th>
                         <th scope="col">Weight</th>
                     </tr>
                     </thead>
                     <tbody>
                     @foreach($students as $student)
                         <tr>

                             <td>{{$student->reg_no}}</td>
                             <td>{{$student->name}}</td>
                             <td>{{$student->address}}</td>
                             <td>{{$student->dob}}</td>
                             <td>{{$student->age}}</td>
                             <td>{{$student->weight}}</td>
                             <td>
                                 <button class="btn btn-warning btn-sm">Update</button>
                                 <button  class="btn btn-danger btn-sm" >Delete</button>

                             </td>

                         </tr>
                     @endforeach

                     </tbody>
                 </table>

             </div>
         </div>


 @endsection
@push('script')
    <script>

    </script>

@endpush
