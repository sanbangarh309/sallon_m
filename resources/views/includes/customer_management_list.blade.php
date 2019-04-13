<table class="table" id="select-table">
	<thead>
        <tr>
            <th>Customer Name</th>
            <th>Phone#</th>
        </tr>
    </thead>
    <tbody>
        @if(!$customer_management->isEmpty())
        @foreach($customer_management as $customer)
        <tr id="{{$customer->id}}">
            <td>{{$customer->fname}} {{$customer->lname}}</td>
            <td>{{$customer->phone}}</td>
        </tr>
        @endforeach
        @else
        <tr id="no_appointments"><td colspan="6">No Customer</td></tr>
        @endif
    </tbody>
</table>
{{$customer_management->links()}}