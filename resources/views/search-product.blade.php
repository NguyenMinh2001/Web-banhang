@include('inc.nav-index')
                <!-- End of Topbar -->
                <div style="margin-top: 100px">
                    @include('inc.chose-search')
                    <div class="container" id="df">
                        <!-- Page Heading -->                         
                        <h2 style="margin-top: 30px">{{$name}}
                        </h2>
                        <div class="row">
                        @foreach ($products as $product)
                        {{-- {{$products->product}}                           --}}
                        @endforeach 
                        @foreach ($product->products as $pro)
                            <div class="card" style="width: 23%; margin-right: 1%;  margin-left: 1%;">
                            <img class="card-img-top" src="backend/img/{{$pro->poster}}">
                            <div class="card-body">
                              <h6 class="card-title">{{$pro->name}}</h6>
                              <p class="card-text">${{$pro->price}}</p>
                              <a href="#" class="btn btn-primary">Add to cart</a>
                            </div>
                          </div>
                        @endforeach
                        
                        </div>
                      
                        
                          
                <!-- /.container-fluid -->
                </div>           
                <!-- Begin Page Content -->
                
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            
            </div>
            <!-- End of Content Wrapper -->
            
        </div>
            <!-- End of Page Wrapper -->
            
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
            </a>
            
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout">Logout</a>
                </div>
            </div>
            </div>
            </div>
                </div>
                    
            
            <!-- Bootstrap core JavaScript-->
            <script src="{{('frontend/vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            
            <!-- Core plugin JavaScript-->
            <script src="{{('frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
            
            <!-- Custom scripts for all pages-->
            <script src="{{('frontend/js/sb-admin-2.min.js')}}"></script>
            
            <!-- Page level plugins -->
           {{-- <script src="{{('frontend/vendor/chart.js/Chart.min.js')}}"></script> --}}
            
            <!-- Page level custom scripts -->
            {{-- <script src="{{('frontend/js/demo/chart-area-demo.js')}}"></script> --}}

            </body>
            
    </html>