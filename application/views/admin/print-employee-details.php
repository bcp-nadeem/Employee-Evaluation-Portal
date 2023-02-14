
<div class="content-wrapper">
            <div class="container-xxl flex-grow-1">
              <h4 class="fw-bold mb-4"></h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                          <img
                            src="<?php echo base_url($empdata->employee_image); ?>"
                            alt="user-avatar"
                            class="d-block rounded img-d-emp-print"
                          /> 
                        <div class="emp_info">
                            <div>
                                <h3><?php echo $empdata->employee_first_name; ?> <?php echo $empdata->employee_last_name; ?></h3>
                            </div>
                            <div id="emp-d-dd">
                                <span><i class='bx bxs-briefcase-alt-2'></i> <?php echo $empdata->department_name; ?></span> / <span><?php echo $empdata->employee_designation; ?></span></span>
                            </div>
                            <?php if($empinfo): ?>
                                <div class="emp-d-avg-btn">
                                  <?php $main_avg= $empinfo->main_emp_avg; ?>
                                  <?php if($main_avg <= 1): ?>
                                    <span class="badge bg-label-danger me-1">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php elseif($main_avg > 1 && $main_avg <= 2): ?>
                                    <span class="badge bg-label-danger me-1">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php elseif($main_avg > 2 && $main_avg < 3): ?>
                                    <span class="badge bg-label-warning me-1">Sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php elseif($main_avg >=3 && $main_avg <=4): ?>
                                    <span class="badge bg-label-success me-1">Good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php elseif($main_avg <= 5): ?>
                                    <span class="badge bg-label-success me-1">Very good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php else: ?>
                                    <span class="badge bg-label-success me-1">Excellent <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></span>
                                  <?php endif; ?>
                                </div>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-1 col-md-4 col-sm-4 col-sm-4 col-xs-6">
                            <label for="email" class="form-label"><b>E-mail:</b> </label>
                            <span><?php echo $empdata->employee_email; ?></span>
                           
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label for="organization" class="form-label"><b>Phone Number:</b> </label>
                            <span><?php echo $empdata->employee_number; ?></span>                          
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label for="address" class="form-label"><b>Address:</b> </label>
                            <span><?php echo $empdata->employee_address; ?></span>
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label for="state" class="form-label"><b>City:</b></label>
                            <span><?php echo $empdata->employee_city; ?></span>
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label class="form-label" for="country"><b>Country:</b></label>
                            <span><?php echo $empdata->employee_country; ?></span>
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label for="designation" class="form-label"><b>Date Of Joining:</b> </label>
                            <span><?php echo $empdata->employee_doj; ?></span>
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label for="designation" class="form-label"><b>Date Of Termination:</b></label>
                            <span><?php echo $empdata->employee_dot; ?></span>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          

<?php if ($empinfo): ?>
  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-12">
                   <div class="nav-align-top">
                    <h4>Communication</h4>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-justified-communication" role="tabpanel">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>INDICATOR</th>
                                        <th>ASSESSMENT
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                            (Out of 5)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr class="remove_bb">
                                        <td>
                                            <p></p>
                                        </td>
                                        <td>
                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>1. Proactively asking clarification questions</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_proactively_asking==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>2. Responds to messages/calls within a given time frame</p>
                                        </td>
                                        <td>
                                          <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_responds_to_messages==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>3. Proactively informing about delays or issues</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_proactively_informing==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>4. Level of English in project related communication</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_level_of_english==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>5. Communicates well with the team/client</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_team_client==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>6. Informs the supervisor about leave plans</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_Informs_the_supervisor==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                        </td>
                                        <td>

                                        <?php  $comm_avg= $empinfo->communication_emp_avg; ?>

                                        <?php if($comm_avg <= 1): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php elseif($comm_avg <= 5): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php else: ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php endif; ?>
                                          
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h4>Comments:</h4>
                                            <p><?php echo $empinfo->communication_comments; ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<?php endif ?>


<?php if ($empinfo): ?>
  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-12">
                   <div class="nav-align-top">
                    <h4>Productivity</h4>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-justified-communication" role="tabpanel">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>INDICATOR</th>
                                        <th>ASSESSMENT
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                            (Out of 5)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr class="remove_bb">
                                        <td>
                                            <p></p>
                                        </td>
                                        <td>
                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>1. Proactively asking clarification questions</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_proactively_asking==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>2. Responds to messages/calls within a given time frame</p>
                                        </td>
                                        <td>
                                          <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_responds_to_messages==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>3. Proactively informing about delays or issues</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_proactively_informing==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>4. Level of English in project related communication</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_level_of_english==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>5. Communicates well with the team/client</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_team_client==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p>6. Informs the supervisor about leave plans</p>
                                        </td>
                                        <td>
                                            <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              if($empinfo->communication_Informs_the_supervisor==$x){
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' checked disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                              }else{
                                                echo "<label class='radio-inline'> <input type='radio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                              }
                                              $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td>
                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                        </td>
                                        <td>

                                        <?php  $comm_avg= $empinfo->communication_emp_avg; ?>

                                        <?php if($comm_avg <= 1): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php elseif($comm_avg <= 5): ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php else: ?>
                                          <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                        <?php endif; ?>
                                          
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h4>Comments:</h4>
                                            <p><?php echo $empinfo->communication_comments; ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<?php endif ?>






</div>
</div>
</div>

