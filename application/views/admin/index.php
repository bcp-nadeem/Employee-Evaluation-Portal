
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Average Assessment</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <div id="piechart" style="width: 400px; height: 200px;"></div>
                      </div>
                    </div>
                  </div>
                </div> -->
                
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Top 5 Performance</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">

                        <?php if($topper):?>
                          <?php foreach($topper as $data): ?>
                            <?php $finalAvg = number_format((float)$data->maximum_performance, 2, '.', ''); ?>
                            <?php if($finalAvg >= 3):?>
                                <li class="d-flex mb-4 pb-1">
                                  <div class="avatar flex-shrink-0 me-3">
                                    <img src="<?php echo base_url($data->employee_image); ?>" alt="User" class="rounded" />
                                  </div>
                                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                      <small class="text-muted d-block mb-1"><?php echo $data->employee_designation; ?></small>
                                      <h6 class="mb-0"><a href="<?php echo base_url('Admin/showEmployeeInfo/'.$data->main_employee_id); ?>"><?php echo $data->employee_first_name; ?> <?php echo $data->employee_last_name; ?></a></h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                      <h6 class="mb-0">
                                        <span class="badge bg-label-success">
                                            <?php echo $finalAvg; ?>
                                        </span>
                                      </h6>
                                    </div>
                                  </div>
                                </li>
                            <?php else: ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <?php endif; ?>
                  
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Top 5 Low Performance</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                      <?php if($lowper):?>
                          <?php foreach($lowper as $data): ?>
                            <?php $finalAvg = number_format((float)$data->maximum_performance, 2, '.', ''); ?>
                            <?php if($finalAvg < 3):?>
                                <li class="d-flex mb-4 pb-1">
                                  <div class="avatar flex-shrink-0 me-3">
                                    <img src="<?php echo base_url($data->employee_image); ?>" alt="User" class="rounded" />
                                  </div>
                                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                      <small class="text-muted d-block mb-1"><?php echo $data->employee_designation; ?></small>
                                      <h6 class="mb-0"><a href="<?php echo base_url('Admin/showEmployeeInfo/'.$data->main_employee_id); ?>"><?php echo $data->employee_first_name; ?> <?php echo $data->employee_last_name; ?></a></h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                      <h6 class="mb-0">
                                      <span class="badge bg-label-danger">
                                            <?php echo $finalAvg; ?>
                                        </span>
                                      </h6>
                                    </div>
                                  </div>
                                </li>
                            <?php else: ?>
                            <?php endif; ?>
                      
                        <?php endforeach; ?>
                        <?php else: ?>
                        <?php endif; ?>
                  
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Scores</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-2 pb-1">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                           <span class="scores-title"><b>1. Not sufficient</b> - not meeting expectations, performance issues requiring escalation.</span>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                           <span class="scores-title"><b>2. Sufficient</b> - but requiring improvement, some performance issues can be observed but easy and quick to improve. </span>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                           <span class="scores-title"><b>3. Good</b> - meeting expectations, job done on time and in decent quality, no issues but no highlights either. </span>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                           <span class="scores-title"><b>4. Very good</b> - quality of work is very good, reliable in getting the job done, very good communication. </span>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                           <span class="scores-title"><b>5. Excellent</b> - exceeding expectations in terms of time, quality, excellent communication skills, taking ownership for the project delivery. </span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>


                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">

                    <section class="color_indicators_sec">
                        <span>
                            <img src="<?php echo base_url('assets_admin/icons/danger.png'); ?>" alt=""> &nbsp;<b>ASSESSMENT < 2</b> &nbsp;&nbsp;
                            <img src="<?php echo base_url('assets_admin/icons/warning.png'); ?>" alt=""> &nbsp;<b>ASSESSMENT > 2 and < 3</b> &nbsp;&nbsp;
                            <img src="<?php echo base_url('assets_admin/icons/success.png'); ?>" alt=""> &nbsp;<b>ASSESSMENT > 3</b> &nbsp;&nbsp;
                        </span>
                    </section>
                    <h5 class="">Recently Added</h5>
                      <div class="card">
                          <div class="table-responsive text-nowrap">
                              <table class="table">
                              <thead class="table-light">
                                  <tr>
                                  <th>Employee</th>
                                  <th>Department</th>
                                  <th>Designation</th>
                                  <th>Start Date</th>
                                  <th>End Date</th>
                                  <th>Average</th>
                                  </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                  <?php if($empdata): ?>
                                      <?php foreach( $empdata as $data ): ?>

                                          <?php 
                                              $sumTotal = $data->communication_emp_avg + $data->p_adaptability_emp_avg + $data->p_creativity_problem_solving_emp_avg + $data->dependability_emp_avg + $data->p_initiative_proactive_emp_avg + $data->knowledge_emp_avg + $data->productivity_emp_avg + $data->quality_emp_avg + $data->software_emp_avg + $data->time_management_emp_avg; 
                                              $avgTotal = $sumTotal / 10;
                                              $finalAvg = number_format((float)$avgTotal, 2, '.', '');
                                          ?>
                                          
                                          <?php if($finalAvg <= 2): ?>
                                              <tr class="emp_improved">
                                          <?php else: ?>
                                              <tr class="emp_normal">
                                          <?php endif; ?>
                                          
                                              <td>
                                                  <div class="avatar3">
                                                      <img src="<?php echo base_url($data->employee_image); ?>" alt="<?php echo $data->employee_first_name; ?>" class="w-px-40 h-auto rounded-circle">&nbsp;
                                                      <strong><a href="<?php echo base_url('Admin/showEmployeeInfo/'.$data->main_employee_id); ?>"><?php echo $data->employee_first_name; ?> <?php echo $data->employee_last_name; ?>    <i class='bx bx-link' ></i></a></strong>
                                                  </div>
                                              </td>
                                              <td><?php echo $data->department_name; ?></td>
                                              <td><?php echo $data->employee_designation; ?></td>

                                              <td><?php echo $data->emp_performance_start_date; ?></td>
                                              <td><?php echo $data->emp_performance_end_date; ?></td>

                                              <?php 
                                                  $sumTotal = $data->communication_emp_avg + $data->p_adaptability_emp_avg + $data->p_creativity_problem_solving_emp_avg + $data->dependability_emp_avg + $data->p_initiative_proactive_emp_avg + $data->knowledge_emp_avg + $data->productivity_emp_avg + $data->quality_emp_avg + $data->software_emp_avg + $data->time_management_emp_avg; 
                                                  $avgTotal = $sumTotal / 10;
                                                  $finalAvg = number_format((float)$avgTotal, 2, '.', '');
                                              ?>

                                              <?php if($finalAvg <= 1): ?>
                                                  <td class="set_td_size set_bg_result_dr"><?php echo $finalAvg; ?></td>
                                              <?php elseif($finalAvg > 1 && $finalAvg <= 2): ?>

                                                  <td class="set_bg_result_r"><?php echo $finalAvg; ?></td>
                                              <?php elseif($finalAvg > 2 && $finalAvg < 3): ?>
                                                  <td class="set_td_size set_bg_result_w bg-warning"><?php echo $finalAvg; ?></td>

                                              <?php elseif($finalAvg >=3 && $finalAvg <=4): ?>
                                                  <td class="set_td_size set_bg_result_g"><?php echo $finalAvg; ?></td>

                                              <?php elseif($finalAvg <= 5): ?>
                                                  <td class="set_td_size set_bg_result_g"><?php echo $finalAvg; ?></td>
                                              <?php else: ?>
                                                  <td class="set_td_size set_bg_result_g"><?php echo $finalAvg; ?></td>
                                              <?php endif; ?>

                                          </tr>
                                      <?php endforeach; ?>
                                  <?php else: ?>
                                  <?php endif; ?>

                              </tbody>
                              </table>
                          </div>
                      </div>
                </div>

              </div>
            </div>
            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

   