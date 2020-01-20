<div class="main-content">
    <div class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo $smallTitle;?></h4>
                        </div>

                        <div class="card-body">
                        <div class="col-xs-12 col-md-12 col-lg-12">
                           <div class="card-content table-full-width">
                                <h4 class="leftdownline">Income Details</h4>
                               <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Wallet</th>
                                        <th>Tranaction type</th>
                                        <th>Rupess/-</th>
                                       
                                    </tr>
                                </thead>
                                    <tbody>
                                          <tr>
                                     <td>Direct Level Income</td>
                                     <?php if($li->num_rows()>0){?>
                                      <td><?php echo "Direct Level Income"; ?></td> 
                                       <td><?php echo $li->row()->amount; ?></td> 
                                       <?php }else{?>
                                      <td>0</td> 
                                       <td>0</td> 
                                       <?php }?>
                                        
                                    </tr>
                                    <tr>
                                     <td>Sponsor Income</td>
                                     <?php if($si->num_rows()>0){?>
                                      <td><?php echo "Sponsor Income"; ?></td> 
                                       <td><?php echo $si->row()->amount; ?></td> 
                                       <?php }else{?>
                                      <td>0</td> 
                                       <td>0</td> 
                                       <?php }?>
                                        
                                    </tr>
                                    <tr>
                                     <td>Auto Pool Income</td>
                                      <?php if($api->num_rows()>0){?>
                                      <td><?php echo "Auto Pool Income"; ?></td> 
                                       <td><?php echo $api->row()->amount; ?></td> 
                                       <?php }else{?>
                                      <td>0</td> 
                                       <td>0</td> 
                                       <?php }?>
                                        
                                    </tr>
                                     <tr>
                                      <td>Royalty Income</td>
                                      <?php if($ri->num_rows()>0){?>
                                      <td><?php echo "Royalty Income"; ?></td> 
                                       <td><?php echo $ri->row()->amount; ?></td> 
                                       <?php }else{?>
                                      <td>0</td> 
                                       <td>0</td> 
                                       <?php }?>
                                        
                                    </tr>
                                    
                                    
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