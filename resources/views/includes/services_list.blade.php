<table class="table" id="select-table">
                                <thead><div class="form-group">
											<label class="btn btn-success">
													Browse <input type="file" name = "image" hidden>
											</label>
									</div>
                  <tr>
									   <th>Service Name</th>
									   <th>Category</th>
									   <th>Price</th>
									   <th>Time</th>
                    <th>Turn</th>
                    <th>Guarantee</th>
                  </tr>
                   </thead>
                     <tbody id="san_t_body">
                      <tr><td colspan="6">Loading....</td></tr>
					  @foreach($services as $service)
					  <tr id="'+value.id+'"><td>{{$service->name}}</td><td>{{$service->category->name}}</td><td>${{$service->price}}</td><td>{{$service->duration}}</td><td>yes</td><td>no</td></tr>
					  @endforeach
									 </tbody>
                  </table>
				  <div class="pagination_link" style="float: right;width: 13%;">
					{{ $services->links() }}
				</div>
