<table class="table {{$user_type}}" id="select-table">
	<thead>
        <tr>
            <th>Name</th><th>DOB</th><th>ss</th><th>Phone#</th><th>Roll</th><th>Being</th><th>End</th><th>Address</th>							
        </tr>
    </thead>
    <tbody>
        @if(!$employees->isEmpty())
        @foreach($employees as $employee)
        <tr id="{{$employee->id}}">
            <td>{{$employee->fname}} {{$employee->lname}}</td>
            <td>{{$employee->dob}}</td>
            <td>{{$employee->ssn}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->role->name}}</td>
            <td>{{$employee->job_being}}</td>
            <td>{{$employee->job_end}}</td>
            <td>{{$employee->address}}</td>
        </tr>
        @endforeach
        @else
        <tr><td colspan="6">No {{ucfirst($user_type)}}</td></tr>
        @endif
    </tbody>
</table>
{{$employees->links()}}