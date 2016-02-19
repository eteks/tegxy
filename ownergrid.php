<table class="table">
                <thead>
                    <tr style="border-top: 1px solid rgb(221, 221, 221);">
                      <th>Owner Name</th>
                      <th>Designation</th>
                      <th>City</th>
                      <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td><?php echo $profiledetails[0]['RGT_OwnerName'];?></td>
                        <td><?php echo $profiledetails[0]['RGT_OwnDesign'];?></td>
                        <td><?php echo $citydisp[0][0];?></td>
                        <td>
<!--                                    <img src="images/add.png"/>-->
                            <section id="set-8">
                             <div class="hi-icon-wrap hi-icon-effect-8">

                                 <div class="button-wrap">
                                     <a href="#set-9" class="hi-icon hi-icon-pencil" data-dialog1="somedialog1" id="ownedit" class="trigger">Edit</a>
                                 </div>
                             </div>
                            </section>
                        </td>
                    </tr>
                </tbody>
            </table>
        
  