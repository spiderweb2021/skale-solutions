<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
              
               <span>Skale Solution</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Accuiel</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Enterprises</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Cabinets de conseil</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Consultants</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Blog</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>join us</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">FAQ</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Jobs</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Press</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Dummy Address 1 <br>
              Dummy Address 2<br>
              United States <br><br>
              <strong>Phone:</strong> +1 555 55555 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{Company Name}</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->
  <script type="text/javascript">
                  $('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('input[name="_token"]').val()
                  }
              });
               
               $.ajax({
                  url: "{{ route('userregister') }}",
                  method: 'post',
                  data: {
                     name: $('#name').val(),
                     email: $('#email').val(),
                     mobile: $('#mobile').val(),
                     password: $('#password').val(),
                     usertype:  $("input[name='usertype']:checked").val(),

                  },
                  success: function(result){
                    if(result.errors)
                    {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value){
                            $('.registerdanger').show();
                            $('.registerdanger').append('<li>'+value+'</li>');
                        });
                    }
                    else if(result.error)
                    {
                      $('.alert-danger').html(result.error);
                    }else
                    {
                        //alert(result.success);
                        $('.registerdanger').hide();
                        $('.registersuccess').html(result.success);
                         $('.registersuccess').show();
                         
                        //$('#myModal').modal('hide');
                    }
                  }});
               });



               $('#ajaxloginSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('input[name="_token"]').val()
                  }
              });
               
               $.ajax({
                  url: "{{ route('userlogin') }}",
                  method: 'post',
                  data: {
                     email: $('#login_email').val(),
                     password: $('#login_password').val(),
                     

                  },
                  success: function(result){
                    if(result.errors)
                    {
                        $('.logindanger').html('');
                       
                        
                        $.each(result.errors, function(key, value){
                            $('.logindanger').show();
                            $('.logindanger').append('<li>'+value+'</li>');
                        });
                        $('#login_password').val('');
                    }
                    else if(result.error)
                    {
                       swal('Error', result.error, 'error')
                    }else
                    {
                      if(result.type=='1')
                      {
                       window.location.href = "{{route('dashboard')}}";
                      }

                      else 
                      {
                         window.location.href = "{{route('userdashboard')}}";
                      }
                       
                        //alert(result.success);
                        $('.logindanger').hide();
                        $('.loginsucces').html(result.success);
                         $('.loginsucces').show();
                        //$('#myModal').modal('hide');
                    }
                  }});
               });

  </script>