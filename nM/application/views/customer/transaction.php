


<div class="main-content">
<section class="section">
<div class="section-body">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4><?php echo $smallTitle;?></h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                     
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Customer ID</th>
                           
                            <?php 
                          
                              if($gdetails->num_rows()>0){
                                  if($this->uri->segment("3")!=9){
                                 if (($gdetails->row()->ttype==1)){ ?>
                                     <th>Binary Income</th>
                                     <th>Upgade Income</th>
                                      <th>Total Income</th>
                          <?php       
                              }else{
                            ?>
                             <th>Amount</th>
                            <?php } }?>
                            <?php if($gdetails->row()->ttype==1 or $gdetails->row()->ttype==7){ ?>
                            <th>Pair</th>
                            <?php } else{ ?>
                            <th>Level</th>
                            <?php } }?>
                            <th>Type</th>
                            <th>Invoice No</th>
                            <th>Date</th>
                           
                          </tr>
                        </thead>
                        <tbody>

                        <?php 
                        
                        if($gdetails->num_rows()>0){
                          $i=1;
                        foreach($gdetails->result() as $data):
                         $id= $data->c_id;
                    //   echo $id;
                      //  $sumamt= $this->cmodel->getsumamount($data->paid_to,$data->transaction_type);
                       // echo $sumamt;
                        //exit;
                        //  $one= $this->cmodel->getsumamount($data->paid_to,1);
                        //   $five= $this->cmodel->getsumamount($data->paid_to,5);
                        //   echo $one;
                        //   echo $five;
                        //   exit();
                    //   echo $sumamt->row()->amount;
                    //   exit;
                        $fivetype=0;
                    if($this->uri->segment("3")!=9){
                          $custnm= $this->cmodel->getCrecord($data->c_id)->row();
                         
                          $this->db->where("id",$data->ttype);
                         $ttype= $this->db->get("transaction_type");
                    }else{
                        $ttypeh=9;
                    }
                        ?>
                          <tr>
                            <td><?php echo $i;?></td>
                            <td class="align-middle"><?php  echo $custnm->customer_name ."[".$custnm->username ."]"; ?></td>
                            
                            <td><?php echo $data->amount;
                            if($data->ttype==1){
                               
                                 
                                $this->db->where("invoice_no",$data->invoice_no);
                                $this->db->where("ttype",1);
                                $this->db->where("c_id",$data->c_id);
                                $bindt2=$this->db->get("direct_income");
                                if($bindt2->num_rows()>0){
                                 $onetype=  $bindt2->row()->amount; 
                               
                                 }
                                 else{ $onetype= "0.00"; 
                                       
                                 }
                                
                                 
                            
                            ?></td>
                           
                            <td> </td>
                            <td> <?php 
                             $total=$onetype +$fivetype;
                                 echo $total;
                            ?> 
                           </td><?php } ?>
                           
                            <td><?php if($data->ttype==7){ 
                            $direct=$data->amount/100;
                            echo $direct;
                            }else if($data->ttype==1){
                            $binary =$data->amount/300;
                            echo $binary;
                            }else{ 
                            $this->db->where("c_id",$custnm->id);
                            $cust_auto=$this->db->get("autopool_details");
                            if($cust_auto->num_rows()>0){
                                echo $cust_auto->row()->level;
                            }
                            else{
                                echo "0";
                            }
                            
                            } ?></td>
                            <td><?php if($ttype->num_rows()>0){echo $ttype->row()->name; } else{ echo $ttypeh; }?></td>
                            <td><?php echo $data->invoice_no;?></td>
                            <td><?php //echo $data->date1;?></td>
                           
                          </tr>
                          
                          <?php //} 
                          $i++; endforeach; ?>
                        </tbody>
                   
                        <?php 
                         } else{
                            echo "data not found";
                          }
                        ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </section>
            </div>
