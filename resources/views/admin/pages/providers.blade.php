@php($page = 'provider')
@extends('admin.layouts.app')
@section('main-content')
<div class="content" id="providers">
            <div class="container-fluid">
                
                <!-- Providers List -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Providers List</h4>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" style="float:right;" data-target="#add_provider_modal">Add Provider</button>
                            </div>
                            <div class="content table-responsive table-full-width">
                             @include('admin.includes.providers_list')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
        @section('javascript')
            <script type="text/javascript">
                $(document).on('click', '#browse', function(){
                  $('#icon_img').click();
                });
                $(document).on('click', '#edit_browse', function(){
                  $('#edit_provider_modal #edit_icon_img').click();
                });
            </script>
        @endsection
@endsection