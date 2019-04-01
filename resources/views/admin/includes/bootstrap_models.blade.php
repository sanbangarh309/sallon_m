<!-- MODAL-STARTS -->
@if(Auth::check() && !isset($provider))
  <div id="add_provider_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Provider</h4>
                        </div>
                        <div class="modal-body">
                        <div class="container-fluid">
                        <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <div id="reg_msg_block_success"></div>
                                <form id="add_provider">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Sallon Name</label>
                                                <input type="text" class="form-control" name="name" required="required" placeholder="Sallon Name" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" required="required" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" id="status" name="status" required="required">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Duration</label>
                                                <select name="duration" id="_duration" class="form-control" required="required">
                                                  <option value="">Select Duration</option>
                                                  <option value="1_month">1 Month</option><option value="3_month">3 Month</option><option value="4_month">6 Month</option><option value="1_year">1 Year</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Enter Password" value="" name="password">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea rows="5" class="form-control" name="address" placeholder="Here can be your description" value="Enter Address"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Commision</label>
                                                <input type="text" class="form-control" placeholder="Enter Commision" value="" name="commission">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="file" name="image" class="file" id="icon_img">
                                                <button class="browse btn btn-primary input-lg" id="browse" type="button"><i class="pe-7s-plus"></i> Browse</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group list-grp">
                                              @foreach($modules as $slug => $module)
                                                <label class="lab_container">{{$module['name']}}
                                                  <input type="checkbox" name="modules[]" value="{{$slug}}">
                                                  <span class="checkmark"></span>
                                                </label>
                                              @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right" id="add_btn_provider">Add Provider</button>
                                    <button class="buttonload btn btn-info btn-fill pull-right">
                                        <i class="fa fa-spinner fa-spin"></i>Loading..
                                    </button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
@elseif(Auth::check() && isset($provider))
<div id="edit_provider_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Provider</h4>
                        </div>
                        <div class="modal-body">
                        <div class="container-fluid">
                        <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <div id="reg_msg_block_success"></div>
                                <form id="edit_provider" action="{{route('updateproviders')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{$provider->id}}" name="id">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Sallon Name</label>
                                                <input type="text" class="form-control" name="name" required="required" placeholder="Sallon Name" value="{{$provider->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{$provider->phone}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" required="required" placeholder="Email" value="{{$provider->email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" id="status" name="status" required="required">
                                                    <option value="1" @if($provider->status == 1) selected="selected" @endif>Active</option>
                                                    <option value="0" @if($provider->status == 0) selected="selected" @endif>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Duration</label>
                                                <select name="duration" id="_duration" class="form-control" required="required">
                                                  <option value="">Select Duration</option>
                                                  <option @if($provider->duration =='1_month') selected="selected" @endif value="1_month">1 Month</option>
                                                  <option @if($provider->duration =='3_month') selected="selected" @endif value="3_month">3 Month</option>
                                                  <option @if($provider->duration =='6_month') selected="selected" @endif value="6_month">6 Month</option>
                                                  <option @if($provider->duration =='1_year') selected="selected" @endif value="1_year">1 Year</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea rows="5" class="form-control" name="address" placeholder="Here can be your description" value="Enter Address">{!!$provider->address!!}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Commision</label>
                                                <input type="text" class="form-control" placeholder="Enter Commision" value="{{$provider->commission}}" name="commission">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                            <input type="file" name="image" class="file" id="edit_icon_img">
                                                <img src="{{$provider->avatar}}" alt="No Image">
                                                <button class="browse btn btn-primary input-lg" id="edit_browse" type="button"><i class="pe-7s-plus"></i> Browse</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group list-grp">
                                            @foreach($modules as $slug => $module)
                                                <label class="lab_container">{{$module['name']}}
                                                  <input type="checkbox" name="modules[]" @if(in_array($slug, $provider->modules)) checked @endif value="{{$slug}}">
                                                  <span class="checkmark"></span>
                                                </label>
                                              @endforeach
                                            </div>
                                        </div> 
                                    </div>
                                    <button type="submit" id="submit_btn" class="btn btn-info btn-fill pull-right">Update</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
@endif
