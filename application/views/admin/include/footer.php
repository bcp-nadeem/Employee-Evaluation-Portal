
    <script src="<?php echo base_url('assets_admin/vendor/libs/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/popper/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/menu.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/apex-charts/apexcharts.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/dashboards-analytics.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/parsley.js'); ?>"></script>
    <script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>


    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
        ['Assessment', 'Employee Performance Report'],
        ['Grateful', 11],
        ['Good',     2],
        ['Average',  1]
        ]);

        var options = {
        title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    </script> -->




    <script type="text/javascript">
        $(document).ready(function(){
        $('#department_id').change(function(){
            var department_id = $('#department_id').val();
            if(department_id != ''){
            $.ajax({
            url:"<?php echo base_url(); ?>Admin/fetchDepartmentDrop",
            method:"POST",
            data:{department_id:department_id},
            success:function(data)
            {
            $('#designation_id').html(data);
            }
            });
            }
        });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
        $('#main_employee_id').change(function(){

            var employee_id = $('#main_employee_id').val();

            if(employee_id != ''){
                $.ajax({
                url:"<?php echo base_url(); ?>Admin/fetchDDInput",
                method:"POST",
                data:{employee_id:employee_id},
                success:function(data){
                    $('#department_name').val(data);
                }
                });
            }
            
            if(employee_id != ''){
                $.ajax({
                url:"<?php echo base_url(); ?>Admin/fetchDesiInput",
                method:"POST",
                data:{employee_id:employee_id},
                success:function(data){
                    $('#designation_name').val(data);
                }
                });
            }
        });
        });
    </script>


          <script>
        
            // International telephone format
            // $("#phone").intlTelInput();
            // get the country data from the plugin
            var countryData = window.intlTelInputGlobals.getCountryData(),
              input = document.querySelector("#phone"),
              addressDropdown = document.querySelector("#address-country");

            // init plugin
            var iti = window.intlTelInput(input, {
              hiddenInput: "full_phone",
              utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570" // just for formatting/placeholders etc
            });

            // populate the country dropdown
            for (var i = 0; i < countryData.length; i++) {
              var country = countryData[i];
              var optionNode = document.createElement("option");
              optionNode.value = country.iso2;
              var textNode = document.createTextNode(country.name);
              optionNode.appendChild(textNode);
              addressDropdown.appendChild(optionNode);
            }
            // set it's initial value
            addressDropdown.value = iti.getSelectedCountryData().iso2;

            // listen to the telephone input for changes
            input.addEventListener('countrychange', function(e) {
              addressDropdown.value = iti.getSelectedCountryData().iso2;
            });

            // listen to the address dropdown for changes
            addressDropdown.addEventListener('change', function() {
              iti.setCountry(this.value);
            });
    </script>

    <script>
      $(document).ready(() => {
          $("#upload").change(function () {
              const file = this.files[0];
              if (file) {
                  let reader = new FileReader();
                  reader.onload = function (event) {
                      $("#imgPreview")
                        .attr("src", event.target.result);
                  };
                  reader.readAsDataURL(file);
              }
          });
      });
  </script>
</body>
</html>