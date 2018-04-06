@extends('layout.main')
@section('title', $title)
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Produk Halal</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('/backend/letter/letter-generator')}}">Cari Produk</a>
                </li>

            </ol>
        </div>
        <div class="col-lg-2"></div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div class="ibox-content">

                                <form onsubmit="return false;" id="form-konten" class='form-horizontal'>
                                    <div class='form-group'>
                                        <label for='letter_template_name' class='col-sm-3 col-xs-12 control-label'>Cari Product</label>
                                        <div class='col-sm-9 col-xs-12'>
                                            <input type="text" class="form-control" name="cari" required>

                                        </div>
                                    </div>

                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>

                                    <div class='form-group'>
                                        <label for='letter_template_name' class='col-sm-3 col-xs-12 control-label'>&nbsp;</label>
                                        <div class='col-sm-9 col-xs-12'>
                                            <input type="submit" class="btn btn-primary" value="Cari Product">
                                        </div>
                                    </div>

                                </form>


                                <div id="result-form-konten"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#form-konten').submit(function () {
                var data = getFormData('form-konten');
                ajaxTransfer('/backend/product/view', data, '#result-form-konten');
            });
        });
        var table = $('#table-role');
        table.dataTable({
            pageLength: 10,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            columnDefs: [
                {"targets": 0, "orderable": false},
                // {"targets": 1, "visible": false, "searchable": false},
            ],
            order: [[1, "asc"]],
            buttons: [
                {extend: 'copy'},
                {extend: 'csv', title: 'Jabatan'},
                {extend: 'excel', title: 'Jabatan'},
                {extend: 'pdf', title: 'Jabatan'},
                {
                    extend: 'print',
                    customize: function (win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]
        });
    </script>
    </script>
@endsection

@endsection