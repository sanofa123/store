<!DOCTYPE html>
<html style="height: auto; min-height: 100%;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Sorena Pizza Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('adminLib/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('adminLib/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminLib/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminLib/css/_all-skins.min.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <style media="screen">
    .cancel-btn {
        background: white;
        border: 0;
    }

    .starter-template {
        padding: 40px 15px;
        text-align: center;
    }

    .flexed {
        display: flex !important;
    }

    .flex-n-justify {
        display: flex;
        justify-content: space-between;
    }

    .side-float {
        margin-left: auto !important;
    }

    .margin-top {
        margin-top: 15px;
    }

    .img-preview {
        width: 100px;
        height: 100px;
    }

    .tab-pane {
        margin-top: 10px;
    }

    .subfields-tab {
        padding: 10px;
        border: 5px solid rgba(0, 0, 0, .1);
    }

    .group-photos {
        margin-top: 10px;
    }

    .group-photos>* {
        display: block;
    }

    .material-switch {
        margin-top: 5px;
        margin-left: 5px;
    }

    .material-switch>input[type="checkbox"] {
        display: none;
    }

    .material-switch>label {
        cursor: pointer;
        height: 0px;
        position: relative;
        width: 40px;
    }

    .material-switch>label::before {
        background: rgb(0, 0, 0);
        box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        content: '';
        height: 16px;
        margin-top: -8px;
        position: absolute;
        opacity: 0.3;
        transition: all 0.4s ease-in-out;
        width: 40px;
    }

    .material-switch>label::after {
        background: rgb(255, 255, 255);
        border-radius: 16px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        content: '';
        height: 24px;
        left: -4px;
        margin-top: -8px;
        position: absolute;
        top: -4px;
        transition: all 0.3s ease-in-out;
        width: 24px;
    }

    .material-switch>input[type="checkbox"]:checked+label::before {
        background: inherit;
        opacity: 0.5;
    }

    .material-switch>input[type="checkbox"]:checked+label::after {
        background: inherit;
        left: 20px;
    }

    .material-switch>input[type="checkbox"] {
        display: none;
    }

    .material-switch>label {
        cursor: pointer;
        height: 0px;
        position: relative;
        width: 40px;
    }

    .material-switch>label::before {
        background: rgb(0, 0, 0);
        box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        content: '';
        height: 16px;
        margin-top: -8px;
        position: absolute;
        opacity: 0.3;
        transition: all 0.4s ease-in-out;
        width: 40px;
    }

    .material-switch>label::after {
        background: rgb(255, 255, 255);
        border-radius: 16px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        content: '';
        height: 24px;
        left: -4px;
        margin-top: -8px;
        position: absolute;
        top: -4px;
        transition: all 0.3s ease-in-out;
        width: 24px;
    }

    .material-switch>input[type="checkbox"]:checked+label::before {
        background: inherit;
        opacity: 0.5;
    }

    .material-switch>input[type="checkbox"]:checked+label::after {
        background: inherit;
        left: 20px;
    }

    @media only screen and (max-width: 425px) {
        .flex-n-justify {
            flex-direction: column;
        }
    }

    .form-control {
        border-radius: 15px;
    }
    </style>
    <link rel="stylesheet" href="css/custom.css">
</head>

<body style="height: auto; min-height: 100%;" class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper" style="height: auto; min-height: 100%;">

        <header class="main-header">
            <!-- Logo -->
            <!-- Header Navbar: style can be found in header.less -->
            <a class="logo" href="#" style="background-color: white;">
                <img src="{{asset('images/LOGO.png')}}" width="100" height="60"></a>
            <nav class="navbar navbar-static-top" style="background-color:#be1f29;">
                <!-- Sidebar toggle button-->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li><a href="{{route('cook-index')}}"><i class="fa fa-home"></i></a></li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                                <span class="hidden-md">Welcome , Admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->

                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li>
                                    <a href="#" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i>Sign
                                        out</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar" style="height: auto;">
                <!-- Sidebar user panel -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu tree" data-widget="tree">
                    <li class="side-wid active">
                        <a class="openTab homesettings">
                            <i class="fa fa-home"></i> <span>Site Panel</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->

        <div class="main-content content-wrapper" style="min-height: 2581px;">
            @yield('sec')
        </div>
        <!-- Main content -->

        <!-- /.content -->

        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright © {{now()->format('yy')}} <a href="https://sanofa.se/">Sanofa</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <!-- <li class="active"><a href="control-sidebar-theme-demo-options-tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-wrench"></i></a></li><li class=""><a href="control-sidebar-home-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-home"></i></a></li> -->
                <!-- <li class=""><a href="control-sidebar-settings-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-gears"></i></a></li> -->
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active">
                    <div>
                        <!-- <h4 class="control-sidebar-heading">Layout Options</h4> -->




                        <h4 class="control-sidebar-heading">Skins</h4>
                        <ul class="list-unstyled clearfix">
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span
                                            class="bg-light-blue"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Blue</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span
                                            style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span>
                                    </div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Black</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-purple-active"></span><span class="bg-purple"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Purple</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-green-active"></span><span class="bg-green"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Green</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-red-active"></span><span class="bg-red"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Red</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-yellow-active"></span><span class="bg-yellow"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin">Yellow</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-blue-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span
                                            class="bg-light-blue"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Blue Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-black-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span
                                            style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span>
                                    </div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Black Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-purple-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-purple-active"></span><span class="bg-purple"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Purple Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-green-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-green-active"></span><span class="bg-green"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Green Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-red-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-red-active"></span><span class="bg-red"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Red Light</p>
                            </li>
                            <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                    data-skin="skin-yellow-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                    <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                            class="bg-yellow-active"></span><span class="bg-yellow"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                    <div><span
                                            style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                    </div>
                                </a>
                                <p class="text-center no-margin" style="font-size: 12px">Yellow Light</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->

            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    {{-- @include('admin.inc.lookup_item_modal')
    @include('admin.inc.lookup_model')
    @include('admin.inc.category_modal')
    @include('admin.inc.addLanguageModal')
    @include('admin.inc.123')
    @include('admin.inc.store_field_modal')
    @include('admin.inc.edit_language_modal') --}}

    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('adminLib/js/bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('adminLib/js/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('adminLib/js/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('adminLib/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('adminLib/js/demo.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        const select = document.querySelectorAll('#selectGroup');
        const input = document.querySelector('#searchLanguageGroup');
        const options = Array.from(select[0].options);

        function findMatches(search, options) {
            return options.filter((option) => {
                const regex = new RegExp(search, "gi");
                return option.text.match(regex);
            });
        }

        function filterOptions() {
            options.forEach((option) => {
                option.remove();
                option.selected = false;
            });
            const matchArray = findMatches(this.value, options);
            select[0].append(...matchArray);
        }
        input.addEventListener('keyup', filterOptions);

    $(document).ready(function() {
                        $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': "{{csrf_token()}}"
                    }
                });
        var menudt = $('#menuTable').DataTable({
            searching: false,
            info: false,
            ajax: {
                type: 'post',
                url: 'api/get_all_meals',
                dataSrc: '',
                // data: function(d) {
                //     d.page = $('#selectGroup').val()
                // },
                error: function(xhr, error, thrown) {
                    menudt.ajax.reload();
                }
            },
            columns: [{
                    data: 'id'
                },
                // {defaultContent:`<input type="checkbox">`}
                {
                    data: 'name'
                },
                {
                    data: 'price_ordinarie'
                },
                {
                    data: 'price_family'
                },
                {
                    data: 'photo'
                },
                {
                    data: 'desc'
                },
                {
                    data: 'type'
                },
                {
                    defaultContent: `<button type="button" class="editMealTable btn btn-warning btn-sm fa fa-edit"></button>
                    <button type="button" class="deleteMealTable btn btn-danger btn-sm fa fa-trash"></button>`
                }
            ],
            // initComplete: function() {
            //     this.api().columns().every(function() {
            //         var column = this.column(0);
            //         var select = $('#selectGroup')
            //             .on('change', function() {
            //                 dt.ajax.reload();

            //             });

            //     });
            // }
        });

var ahdt = $('#aboutHomeTable').DataTable({
            searching: false,
            info: false,
            ajax: {
                type: 'post',
                url: 'api/get_about_home',
                dataSrc: '',
                // data: function(d) {
                //     d.page = $('#selectGroup').val()
                // },
                error: function(xhr, error, thrown) {
                    ahdt.ajax.reload();
                }
            },
            columns: [{
                    data: 'id'
                },
                // {defaultContent:`<input type="checkbox">`}
                {
                    data: 'title'
                },
                {
                    data: 'Type'
                },
                {
                    data: 'photo'
                },
                {
                    data: 'desc'
                },
                
                {
                    defaultContent: `<button type="button" class="editAboutHomeTable btn btn-warning btn-sm fa fa-edit"></button>`
                }
            ],
            // initComplete: function() {
            //     this.api().columns().every(function() {
            //         var column = this.column(0);
            //         var select = $('#selectGroup')
            //             .on('change', function() {
            //                 dt.ajax.reload();

            //             });

            //     });
            // }
        });
        $(document).on('click','.editAboutHomeTable',function(){
            var data = ahdt.row($(this).closest('tr')).data();
            $('#about_id').val(data.id)
            $('#about_title').val(data.title)
            $('#about_Type').val(data.Type)
            $('#about_desc').text(data.desc)
            $("#edit-aboutHome-modal").modal('show');
        });
        $(document).on('click','.editMealTable',function(){
            var data = menudt.row($(this).closest('tr')).data();
            $('#meal_id').val(data.id);
            $('#meal_name').val(data.name);
            $('#meal_type').val(data.type);
            $('#meal_desc').val(data.desc);
            $('#meal_price_ordinarie').val(data.price_ordinarie);
            $('#meal_price_family').val(data.price_family);
            $("#edit-meal-modal").modal('show');
        });
        $(document).on('click','.deleteMealTable',function(){
            var data = menudt.row($(this).closest('tr')).data();
            var id=data.id;
        Swal.fire({
                title: 'Är du säker?',
                text: "Du kommer inte att radera detta!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText:"annullera",
                confirmButtonText: 'Ja, ta bort det!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/restaurant/api/meal_delete",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            id
                        },
                        success: function(response) {
                            menudt.ajax.reload();
                        },
                        error: function(response) {}
                    });
                }
            });
        });
    });

</script>

</body>

</html>
