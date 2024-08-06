<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Você deseja sair?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Clique no botão "Sair" abaixo se você quiser encerrar sua sessão atual no painel administrativo.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="">Sair</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
   <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/js/misc.js')}}"></script>
<script src="{{asset('assets/js/settings.js')}}"></script>
<script src="{{asset('assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('assets/js/dashboard.js')}}"></script>
  
  <script>
    //Inputs página de criação de pagamentos
    document.getElementById("sparcelamento").style.display = "none";
    document.getElementById("Pquantidade").style.display = "none";  
    function Parcelamento(){
       var input = $("#metodoPagemento").val();
       var input2 = $("#inparcela").val();
       
            if(input == "1"){
                document.getElementById("sparcelamento").style.display = "inline";
                    if(input2 == "1"){
                        document.getElementById("Pquantidade").style.display = "inline";
                    }
               
            }
            else{
                document.getElementById("sparcelamento").style.display = "none";
                document.getElementById("Pquantidade").style.display = "none";
            }
    }
    function PermitirParcela(){
        var input = $("#inparcela").val();
        
        if(input == "1"){
            document.getElementById("Pquantidade").style.display = "inline";
        }
        else{
            document.getElementById("Pquantidade").style.display = "none";
        }
    }
  </script>
  <script type="text/javascript">
   
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });
</script>


