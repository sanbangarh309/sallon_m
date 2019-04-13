<table class="table" id="select-table">
	<thead>
        <tr>
            <th>Name</th><th>Phone#</th><th>Appointment Date</th>							
        </tr>
    </thead>
    <tbody>
        @if(!$appointment->isEmpty())
        @foreach($appointment as $book)
        <tr id="{{$book->id}}">
            <td>{{$book->fname}} {{$book->lname}}</td>
            <td>{{$book->phone}}</td>
            <td>{{$book->appointment_date}}</td>
        </tr>
        @endforeach
        @else
        <tr id="no_appointments"><td colspan="6">No Appointment</td></tr>
        @endif
    </tbody>
</table>
{{$appointment->links()}}