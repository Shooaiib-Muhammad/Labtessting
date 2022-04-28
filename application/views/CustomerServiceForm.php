<?php
// print_r($CSR);
// die;
if ($CSR[0]['UserID'] == $this->session->userdata('user_id')) {
    $this->load->view('Header');
    if (isset($_SESSION['Products'])) {
        $ArraySize = count($_SESSION['Products']);
    }
?>

    <!--Body Content-->
    <div id="page-content">
        <div class="collection-header">
            <div class="collection-hero">
                <div class=" collection-hero__imageCustom"><img class="blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/cat-women6.jpg" src="assets/images/cat-women2.jpg" height="150px" width="100%" style="background-size: fixed; background-repeat:no-repeat;" alt="Women" title="Women" /></div>
                <div class="collection-hero__title-wrapper">
                    <!-- <h1 class="collection-hero__title page-width"></h1> -->
                </div>
            </div>
        </div>
        <br>

        <!--Page Title-->
        <div id="printCard">
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Customer Agreement Form</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->



            <div class="container w-50 h-50">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-4 border border-dark ">
                                <img src="<?php echo base_url(); ?>assets/images/LabLogo.JPG" alt="Forward Sports" />
                            </div>
                            <div class="col-md-4 border border-dark">
                                <h4>Quality Assurance Lab of Forward Sports (Pvt) Ltd</h4>
                            </div>
                            <div class="col-md-4 border border-dark">
                                <div class="row">
                                    <div class="col-md-6 border border-dark">
                                        <span><b>Document</b></span>
                                    </div>
                                    <div class="col-md-6 border border-dark">
                                        <span>QSD-6/CF</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 border border-dark">
                                        <span><b>Revision</b></span>
                                    </div>
                                    <div class="col-md-6 border border-dark">
                                        <span>00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 border border-dark">
                                        <span><b>Copy</b></span>
                                    </div>
                                    <div class="col-md-6 border border-dark">
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 border border-dark">
                                        <span><b>Holder</b></span>
                                    </div>
                                    <div class="col-md-6 border border-dark">
                                        <span>Lab</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 border border-dark">
                                        <span><b>Status</b></span>
                                    </div>
                                    <div class="col-md-6 border border-dark">
                                        <span>Controlled</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 border border-dark">
                                        <span><b>Issue Date</b></span>
                                    </div>
                                    <div class="col-md-6 border border-dark">
                                        <span>24 Apr, 2021</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12 border border-dark">
                                <span class="d-flex justify-content-center text-center"><b>Customer Contact Form</b></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container w-50 h-50 mt-5">



                <div class="row mt-2">
                    <div class="col-md-12">
                        <span><b>Applicant Information</b></span>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="row border border-dark">
                            <div class="col-md-6">
                                <h5>Supplier information :</h5>
                                <input type="text" value="<?php echo $CSR[0]['Supplier']; ?>" disabled />
                            </div>
                            <div class="col-md-6 border border-dark">

                                <h5>Service Request For :</h5>

                                <ul class="p-2">
                                    <?php
                                    $testNames = explode(",", $CSR[0]['TestName']);
                                    foreach ($testNames as $test) {
                                    ?>
                                        <li><?php echo $test; ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>


                </div>

                <!-- <div class="row">
                <div class="col-md-6 border border-dark">
                    <span>Raw Material Testing</span>
                </div>
                <div class="col-md-6 border border-dark">

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 border border-dark">
                    <span>Football Testing</span>
                </div>
                <div class="col-md-6 border border-dark">
                    <ul class="p-2">
                        <li>Raw Material Testing</li>
                        <li>Football Testing</li>
                        <li>Bag Testing</li>
                    </ul>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 border border-dark">
                    <span>Bag Testing</span>
                </div>
                <div class="col-md-6 border border-dark">
                </div>
            </div> -->

            </div>

            <div class="container w-50 h-50 mt-2">
                <div class="row">
                    <div class="col-md-6">
                        <span><b>Full Legal Name of Applicant</b></span>
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="<?php echo $CSR[0]['fullname']; ?>" disabled />

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <span><b>Address</b></span>
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="<?php echo $CSR[0]['Adress']; ?>" disabled />

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1">
                                <span><b>City</b></span>
                            </div>
                            <div class="col-md-2">
                                <input type="text" value="<?php echo $CSR[0]['City']; ?>" disabled />
                            </div>
                            <!-- <div class="col-md-1">
                                <span><b>State/<br>Province</b></span>
                            </div>
                            <div class="col-md-2">
                                <input type="text" value="<?php echo $CSR[0]['state']; ?>" disabled />

                            </div> -->
                            <div class="col-md-1">
                                <span><b>Postal Code</b></span>
                            </div>
                            <div class="col-md-2">
                                <input type="text" value="<?php echo $CSR[0]['postalcode']; ?>" disabled />

                            </div>
                            <div class="col-md-1">
                                <span><b>Country</b></span>
                            </div>
                            <div class="col-md-2">
                                <input type="text" value="<?php echo $CSR[0]['Country']; ?>" disabled />

                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <span><b>Contact Person</b></span>
                            </div>
                            <div class="col-md-3">
                                <input type="text" value="<?php echo $CSR[0]['Contactno']; ?>" disabled />

                            </div>
                            <div class="col-md-1">
                                <span><b>Email</b></span>

                            </div>
                            <div class="col-md-3">
                                <input type="text" value="<?php echo $CSR[0]['Email']; ?>" disabled />

                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row mt-3 p-3 h-25 border border-dark">
                    <div class="col-md-6">
                        <span><b>Requirements :</b></span>
                    </div>
                    <div class="col-md-12">
                        <span><?php echo $CSR[0]['requirements']; ?></span>

                    </div>
                </div> -->


                <!-- <div class="row mt-3 p-3 h-25 border border-dark">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1">
                            <input type="checkbox"/>

                        </div>
                        <div class="col-md-6">
                            <span>Need Detail Report in regular format</span>

                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-1">
                            <input type="checkbox"/>

                        </div>
                        <div class="col-md-6">
                            <span>Need Report in Simplified Format</span>

                        </div>
                    </div>
                </div>
            </div> -->

                <!-- <div class="row mt-5">
                <div class="col-md-12">
                    <span><b>Section 2 Billing Information</b></span>
                </div>
            </div> -->


                <!-- <div class="row mt-3 border border-dark">
                <div class="col-md-6 border border-dark">
                    <span>*Payment Method (Currency)</span>
                </div>
                <div class="col-md-6 border border-dark">

                </div>
              
            </div> -->
                <!-- <div class="row border border-dark">
                <div class="col-md-6 border border-dark">
                    <span>*Cheque Number/Evidence of Online Transfer</span>
                </div>
            </div> -->


                <div class="row mt-2">
                    <div class="col-md-12">
                        <span><b>receipient Detail of Test Report Receiver</b></span>
                    </div>
                </div>

                <div class="row mt-3 border border-dark">
                    <div class="col-md-3 border border-dark">
                        <span>Name :</span>
                    </div>
                    <div class="col-md-3 border border-dark">
                        <?php echo $CSR[0]['Name_of_recipient']; ?>
                    </div>
                    <div class="col-md-3 border border-dark">
                        <span>Email Address:</span>
                    </div>
                    <div class="col-md-3 border border-dark">
                        <?php echo $CSR[0]['REmail']; ?>
                    </div>

                </div>

                <div class="row border border-dark">
                    <div class="col-md-3 border border-dark">
                        <span>Tel #.</span>
                    </div>
                    <div class="col-md-3 border border-dark">
                        <?php echo $CSR[0]['RContact']; ?>
                    </div>

                    <!-- <div class="col-md-3 border border-dark">
                        <span>Fax:</span>
                    </div>
                    <div class="col-md-3 border border-dark">
                        <?php echo $CSR[0]['RFax']; ?>
                    </div> -->

                </div>


                <div class="row mt-5 border border-dark">
                    <div class="col-md-6 border border-dark">
                        <span>Authorized Signature</span>
                        <div class="row">
                            <div class="col-md-6 border border-dark">
                                <span>*Name of Signer</span>
                            </div>
                            <div class="col-md-6 border border-dark">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 border border-dark">
                                <span>*Date of Signer</span>
                            </div>
                            <div class="col-md-6 border border-dark">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 border border-dark">
                        <span>Company Chop</span>
                    </div>


                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <span><strong>Annex 1 --QA Lab's Condition of Services</strong></span>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <ol>
                            <tr>
                                <li><span>In this document the term applicant "mean customer who submit a sample to QA lab for testing or contact for testing" and client "mean Quality Assurance Lab of Forward Sports (Pvt) Ltd.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>QA Lab will start the testing process after receiving payment by Applicant.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>Sampling: Applicant is responsible to submit/send the sample to Customer Service Section of QA Lab.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>Customers are not allowed to interact the lab personnel in order to ensure impartially in results.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>Dispute Resolution. (a) If Applicant desires to assert a claim relating to the Services, it must submit the same to Company in writing setting forth with particularly the basis for such claim within 7 days from discovery of the claim and not more than 30 days after the date of issuance of the Report. Applicant wavies any and all claims without limitation that it does not submit within such time periods. (b) If a dispute arises under this Agreement , the Parties shall first attempt good faith negotiations, failing which, the Parties (i) agree that the courts of the country of governing law shall have exclusive jurisdiction to settle any such dispute related to this Agreement and (ii) irrevocably waive their right to trial by jury in any such action or proceeding.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>Retention of Sample: QA Lab will retain the sample of Applicant for 30 days after testing.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>Confidentially: QA Lab will not disclose any information of customer's product. If it is necessary to release, lab will take permission of customer before disclosing any information related to the customer's product.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>QA Lab will declare the statement of Confirmity on the demand of Applicant.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>QA Lab will send the test reports to person according to the information mentioned in <strong><em>Customer Contact Form</em></strong></span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>QA Lab will take the permission of customer if involve third party for their testing.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>Force Majeure. If any event of force majeure or any event outside the control of client occurs, client may immediately cancel or suspend its performance hereunder without incurring any liability whatsoever to Client.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>QA Lab has the authority to cancel the request of Applicant on any time without giving any reason.</span></li>
                            </tr>
                            <br>
                            <tr>
                                <li><span>These Conditions, the applicable order from and/or quotation and the Report represent the entire understanding of the Parties on the subject matter hereof, and no modification is binding unless in writing. Any of Client's terms and conditions attached to enclosed with or reffered to in any other form, purchase order or other document shall not apply.</span></li>
                            </tr>
                        </ol>
                    </div>
                </div>


            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="btn btn-primary" onclick="printDiv('printCard')" data-dismiss="modal" style="border-radius: 10px;">Print CSR</button>
                    <button type="button" class="btn btn-primary" id="showInvoice" data-dismiss="modal" style="border-radius: 10px;">Print Invoice</button>
                </div>
            </div>
        </div>

        <!--End Body Content-->

        <?php

        $this->load->view('Footer');
        ?>
        <script>
            $(document).ready(function() {
                let url = window.location.pathname;
                localStorage.setItem("previousURL", url);
            });

            $("#showInvoice").click(function() {
                let url = window.location.pathname.split("/")[4];
                location.href = `<?php echo base_url(); ?>Invoice/index/${url}`;
            });

            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
                window.location.reload();
            }
        </script>
    <?php
} else {
    redirect('Test');
}
    ?>