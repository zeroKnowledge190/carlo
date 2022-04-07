<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Blocbox Content and Users Management System ver. 1.0</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="../assets/global/plugins/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
        <script src="/reddrop_back/dist/js/scripts.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/reddrop_back/dist/assets/demo/chart-area-demo.js"></script>
        <script src="/reddrop_back/dist/assets/demo/chart-bar-demo.js"></script>
        <!-- <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script> -->
        <!-- <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script> -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script> 
        <!-- <script src="../assets/global/plugins/Chart.min.js" crossorigin="anonymous"></script>        -->
        <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script> -->
        <!-- <script src="/reddrop_back/dist/assets/demo/datatables-demo.js"></script> -->
        <!-- <script src="/jang/lib/jquery/jquery.min.js"></script> -->
		<!-- <script src="/jang/lib/jquery/jquery-migrate.min.js"></script> -->
        <!-- <script src="../assets/global/plugins/bootstrap.bundle.min.js"></script>   -->
        <!-- <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script> --> 
        <!-- <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script> -->
        <script src="../assets/global/scripts/jquery.inputmask.js"></script> 
        <script src="../assets/global/scripts/jquery.inputmask_updated.js"></script>        
        <!-- <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script> -->
        <script src="../assets/global/plugins/jquery.dataTables.min.js" type="text/javascript"></script>        
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        @include('reddrop_back.back_scripts.dash_load')
        @include('reddrop_back.back_scripts.add_documents')	
        @include('reddrop_back.back_scripts.sidenav_menu')   
        @include('reddrop_back.back_scripts.count_purchasings')
        @include('reddrop_back.modals.accept_members')
        @include('fil_views.back_scripts.navbars_table')
        @include('fil_views.back_scripts.manage_list_of_users')
        @include('fil_views.back_scripts.add_documents')	
        @include('fil_views.back_scripts.manage_contents_scripts')
        @include('fil_views.back_scripts.user_registration_scripts')
        @include('fil_views.back_scripts.jobs_table_scripts')
        @include('fil_views.back_scripts.list_of_questions')
        @include('fil_views.back_scripts.list_of_opinions')
        @include('fil_views.back_scripts.list_of_requisitions')
        @include('fil_views.back_scripts.list_of_petitions')
        @include('fil_views.back_scripts.list_of_applications')
        @include('fil_views.back_scripts.list_of_surveys')
    </body>
</html>