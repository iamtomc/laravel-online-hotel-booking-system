@extends('admin.items.views.index')

@section('sub-vendor-css')

@endsection

@section('sub-header')

@endsection

@section('sub-main')

    <div class="app-content content">
        <div class="content-wrapper">
            @include('admin.layouts.widgets.breadcrumbs', ['page_title'=>$page_title , 'breadcrumbs'=> $breadcrumbs])
            <div class="content-detached content-right">
                <div class="content-body">
                    <div class="content-overlay"></div>
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bug-list-search">
                                        <div class="bug-list-search-content">
                                            <div class="sidebar-toggle d-block d-lg-none"><i class="ft-menu font-large-1"></i></div>
                                            <form action="#">
                                                <div class="position-relative">
                                                    <input type="search" id="search-contacts" class="form-control" placeholder="Search contacts...">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-search text-size-base text-muted la-rotate-270"></i>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="row all-contacts">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="table-responsive">

                                            <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
                                                <thead>
                                                <tr>
                                                    <th><input type="checkbox" class="input-chk" id="check-all" onclick="toggle();"></th>
                                                    <th>
                                                        title
                                                    </th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datas as $data)
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="input-chk check">
                                                        </td>
                                                        <td>
                                                            {{$data->content}}
                                                        </td>
                                                        <td>
                                                            @include('admin.layouts.widgets.actions', ['permissions'=>$permissions , 'type'=>'complaint'])
                                                            <a href="#" data-toggle="modal" data-target="#mdl-reply-complaint"
                                                               data-content="{{$data->id}}"
                                                               class="primary show mr-1">
                                                                <i class="fa fa-reply"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        title
                                                    </th>

                                                    <th>Actions</th>
                                                </tr>
                                                </tfoot>
                                            </table>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="sidebar-detached sidebar-left">
                <div class="sidebar">
                    <div class="bug-list-sidebar-content">
                        <!-- Predefined Views -->
                        <div class="card">
                            <div class="card-head">
                                <div class="media p-1">
                                    <div class="media-left pr-1">
                                    </div>
                                    <div class="media-body media-middle">
                                        <h5 class="media-heading">{{$page_title}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="lead">اطلاعات:</p>
                                <ul class="list-group">
                                    <li class="list-group-item">
<span class="badge badge-primary badge-pill float-right">
{{count($datas)}}
</span>
                                        <a href="#">
                                            تعداد آیتم ها
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body ">
                                <p class="lead">عملیات:</p>
                                <ul class="list-group">
                                    @can($permissions['create'])
                                        @if(isset($urls['create']))
                                            <li><a href="{{$urls['create']}}" class="list-group-item">جدید</a></li>
                                        @endif
                                    @endcan
                                </ul>
                            </div>
                            <div class="card-body ">
                                <p class="lead">فیلتر ها:</p>
                                <ul class="list-group">
                                    @isset($filters)
                                        @foreach($filters as $filter1)
                                            @foreach($filter1['properties'] as $property)
                                                @foreach($property->filters as $filter)
                                                    @if($filter['type'] == 'a')
                                                        <li>
                                                            <a href="{{$filter['url']}}" class="list-group-item">
                                                                {{isset($filter['title'][App::getLocale()]) ? $filter['title'][App::getLocale()] : '' }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    @endisset
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @isset($modals)
        @foreach($modals as $modal)
            @include('admin.components.modal-form', ['modal'=>$modal])
        @endforeach
    @endisset

    @include('admin.components.modal-reserve-action')
    @include('admin.components.mdl-show-check')
    @include('admin.components.modal-reply-complaint')




@endsection
@section('sub-vendor-js')

@endsection
@section('sub-footer')

    <script>
        $('a[data-target="#mdl-reply-complaint"]').on("click", function () {
            $('#mdl-reply-complaint').modal('show');
            $('#mdl-reply-complaint input[name=reply_to]').val($(this).attr("data-content"));
            $('#mdl-reply-complaint input[name=sender]').val('{{$user->id}}');
            $('#mdl-reply-complaint input[name=hotel]').val('1');
        });


        $('#reply-complaint-form').submit(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{route('items.store' , ['type'=>'complaint'])}}',
                method: 'post',
                data: $('#reply-message-form').serialize(),
                success: function (result) {
                    console.log(result);
                    alert("replied");
                    $('#mdl-reply-complaint').modal('hide');
                },
                error: function (result) {
                    alert(result.status);
                }
            });
        });

    </script>




@endsection
