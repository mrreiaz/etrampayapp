

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <!-- apexchar{{asset('')}}ts -->
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        
        <!-- Responsive examples -->
        <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
                @if(Session::has('message'))
                var type = "{{ Session::get('alert-type','info') }}"
                switch(type){
                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break; 
                }
                @endif 
        </script>
        <script>
                $(function(){
                        $(document).on('click','#delete',function(e){
                                e.preventDefault();
                                var link = $(this).attr("href");
                                        Swal.fire({
                                        title: 'Are you sure?',
                                        text: "Delete This Data?",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                        window.location.href = link
                                        Swal.fire(
                                                'Deleted!',
                                                'Your file has been deleted.',
                                                'success'
                                        )
                                        }
                                        }) 
                        });
                     

                        });
                        // 

                        /// Confirm Order 
                        $(function(){
                        $(document).on('click','#confirm',function(e){
                                e.preventDefault();
                                var link = $(this).attr("href");

                        
                                        Swal.fire({
                                        title: 'Are you sure to Confirm?',
                                        text: "Once Confirm, You will not be able to pending again?",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, Confirm!'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                        window.location.href = link
                                        Swal.fire(
                                                'Confirm!',
                                                'Confirm Change',
                                                'success'
                                        )
                                        }
                                        }) 


                        });

                        });
                        /// Eend Confirm Order 


                        /// Processing Order 
                        $(function(){
                        $(document).on('click','#processing',function(e){
                                e.preventDefault();
                                var link = $(this).attr("href");

                        
                                        Swal.fire({
                                        title: 'Are you sure to Processing?',
                                        text: "Once Processing, You will not be able to pending again?",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, Processing!'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                        window.location.href = link
                                        Swal.fire(
                                                'Processing!',
                                                'Processing Change',
                                                'success'
                                        )
                                        }
                                        }) 


                        });

                        });
                        /// Eend Processing Order 


                        /// Deliverd Order 
                        $(function(){
                        $(document).on('click','#delivered',function(e){
                                e.preventDefault();
                                var link = $(this).attr("href");

                        
                                        Swal.fire({
                                        title: 'Are you sure to Delivered?',
                                        text: "Once Delivered, You will not be able to pending again?",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, Delivered!'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                        window.location.href = link
                                        Swal.fire(
                                                'Delivered!',
                                                'Delivered Change',
                                                'success'
                                        )
                                        }
                                        }) 


                        });

                        });
                        /// End Deliverd Order 


                        /// Return Approved Order 
                        $(function(){
                        $(document).on('click','#approved',function(e){
                                e.preventDefault();
                                var link = $(this).attr("href");

                        
                                        Swal.fire({
                                        title: 'Are you sure to Approved?',
                                        text: "Return Order Approved",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, Approved!'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                        window.location.href = link
                                        Swal.fire(
                                                'Approved!',
                                                'Approved Change',
                                                'success'
                                        )
                                        }
                                        }) 


                        });

                });
                        /// End Deliverd Order 
        </script>
        @yield("js")