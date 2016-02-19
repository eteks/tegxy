<table class="table">
                <thead>
                    <tr style="border-top: 1px solid rgb(221, 221, 221);">
                      <th>Company Name</th>
                      <th>Industry</th>
                      <th>City</th>
                      <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td><?php echo $profiledetails[0]['RGT_CompName'];?></td>
                        <td><?php echo $industrydisp[0]['S_Name'];?></td>
                        <td><?php echo $citydisp[0]['Area'];?></td>
                        <td>
                        <section id="set-8">
                            <div class="hi-icon-wrap hi-icon-effect-8">

                                <div class="button-wrap">
                                    <a href="#set-8" class="hi-icon hi-icon-pencil" data-dialog="somedialog" id="compedit" class="trigger">Edit</a>

                                </div>
                            </div>
                        </section>
                        </td>
                    </tr>
                </tbody>
            </table>