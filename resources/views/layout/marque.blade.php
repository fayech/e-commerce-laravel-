@extends('layout.navbar')

@section('admin_content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Datatables</h1>
            <ul>
                <li><a href="#">UI Kits</a></li>
                <li>Datatables</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>Datatables</h4>
                <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, build upon
                    the foundations of progressive enhancement, that adds all of these advanced features to any HTML
                    table.</p>
            </div>
        </div>
        <!-- end of row-->
        <div class="row mb-4">


            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Language options</h4>
                        <p>Changing the language information displayed by DataTables is as simple as passing in a
                            language object to the DataTable constructor. This example shows a different set of English
                            string being used, rather than the defaults.</p>
                        <div class="table-responsive">
                            <div id="language_option_table_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="language_option_table_length"><label>Display
                                                <select name="language_option_table_length"
                                                    aria-controls="language_option_table"
                                                    class="form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> records per page</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="language_option_table_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                    placeholder="" aria-controls="language_option_table"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered data-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">nom</th>
                                                        <th width="280px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                            <td class="sorting_1">Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>

                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>

                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>

                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>

                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>

                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>

                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>

                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>

                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>

                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>

                                                        </tr></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->
        </div>
        <!-- end of row-->
        <!-- end of main-content -->
    </div>



</div>

@endsection
