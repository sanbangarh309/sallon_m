@php($customer_management = App\Models\Appointment::with('user')->where('provider_id',$providerid)->latest('created_at')->paginate(5))
<table class="table" id="select-table">
	<thead>
        <tr>
            <th>Customer Name</th>
            <th>Phone#</th>
            <th>Since</th>
            <th>#Visit</th>
            <th>Total spent </th>
            <th>Reward point</th>
            <th>Reward level</th>
        </tr>
    </thead>
    <tbody>
        @if(!$customer_management->isEmpty())
        @foreach($customer_management as $customer)
        <tr id="{{$customer->id}}">
            <td>{{$customer->fname}} {{$customer->lname}}</td>
            <td>{{$customer->phone}}</td>
            @php($services = unserialize($customer->services))
            <td>{{$customer->created_at}}</td>
            <td>{{$customer->created_at}}</td>
            <td>{{$customer->created_at}}</td>
            <td>{{$customer->created_at}}</td>
            <td>{{$customer->created_at}}</td>
        </tr>
        @endforeach
        @else
        <tr id="no_appointments"><td colspan="6">No Customer</td></tr>
        @endif
    </tbody>
</table>
{{$customer_management->links()}}