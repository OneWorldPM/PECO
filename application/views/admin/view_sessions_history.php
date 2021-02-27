<link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet">

<style>
    .peco-dt-btns{
        margin-right: 5px;
        margin-bottom: 5px;
    }
</style>


<div class="main-content">
    <div class="wrap-content container" id="container">
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw">
            <div class="row">
                <div class="panel panel-primary" id="panel5">
                    <div class="panel-heading">
                        <h4 class="panel-title text-white">View Sessions History</h4>
                    </div>
                    <div class="panel-body bg-white" style="border: 1px solid #b2b7bb!important;">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-bordered table-striped text-center" id="user">
                                    <thead class="th_center">
                                        <tr>
                                            <th>User</th>
                                            <th>IP Address</th>
                                            <th>Operating System</th>
                                            <th>Browser</th>
                                            <th>Resolution</th>
                                            <th>Entry Time</th>
                                            <th>End Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($view_sessions_history) && !empty($view_sessions_history)) {
                                            foreach ($view_sessions_history as $val) {
                                                ?>
                                                <tr>

                                                    <td><?= $val->first_name . ' ' . $val->last_name ?></td>
                                                    <td><?= $val->ip_address ?></td>
                                                    <td><?= $val->operating_system ?></td>
                                                    <td><?= $val->computer_type ?></td>
                                                    <td><?= $val->resolution ?></td>
                                                    <td><?= date("Y-m-d h:i:s", strtotime($val->start_date_time)) ?></td>
                                                    <td>
                                                        <?php if ($val->end_date_time != '') { ?>
                                                            <?= date("Y-m-d h:i:s", strtotime($val->end_date_time)) ?>
                                                        <?php } else { ?>
                                                            -
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.print.min.js"></script>

<script src="https://kit.fontawesome.com/fd91b3535c.js" crossorigin="anonymous"></script>

<script type="text/javascript">
    document.title = "Session <?=$session_id?> - History";

        $(document).ready(function () {
        $('#user').DataTable( {
            "ordering": false,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            initComplete: function () {
                $('.buttons-copy').removeClass('dt-button');
                $('.buttons-copy').addClass('btn btn-info peco-dt-btns');
                $('.buttons-copy').html('<span><i class="fas fa-copy fa-2x"></i> Copy</span>');

                $('.buttons-csv').removeClass('dt-button');
                $('.buttons-csv').addClass('btn btn-primary peco-dt-btns');
                $('.buttons-csv').html('<span><i class="fas fa-file-csv fa-2x"></i> CSV <i class="fas fa-download"></i></span>');

                $('.buttons-excel').removeClass('dt-button');
                $('.buttons-excel').addClass('btn btn-success peco-dt-btns');
                $('.buttons-excel').html('<span><i class="fas fa-file-excel fa-2x"></i> Excel <i class="fas fa-download"></i></span>');

                $('.buttons-pdf').removeClass('dt-button');
                $('.buttons-pdf').addClass('btn btn-warning peco-dt-btns');
                $('.buttons-pdf').html('<span><i class="fas fa-file-pdf fa-2x"></i> PDF <i class="fas fa-download"></i></span>');

                $('.buttons-print').removeClass('dt-button');
                $('.buttons-print').addClass('btn btn-info peco-dt-btns');
                $('.buttons-print').html('<span><i class="fas fa-print fa-2x"></i> Print</span>');

            }
        } );
        // $("#user").dataTable({
        //     "ordering": false,
        //     dom: 'Bfrtip',
        //     buttons: [
        //         'csv', 'excel', 'pdf', 'print'
        //     ]
        // });
    });
</script>








