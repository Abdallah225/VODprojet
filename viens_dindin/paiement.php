<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="col-md-3">

</div>
   <div class="col-md-6 offset-md-3">
                    <div class="row">
                      <h3>Payez par Mobile Money</h3>
                      <img src="images/orange_money.png" alt="" width="50" height="50">
                      <img src="images/moov_money.jpg" alt="" width="50" height="50">
                      <img src="images/mtn_money.jpg" alt="" width="50" height="50">
                    </div>

                    <span class="anchor" id="formPayment"></span>
                    <hr class="my-5">
                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Payez par carte de crédit</h3>
                            <hr>
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a>
                                Le code CVC est obligatoire.
                            </div>
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="cc_name">Nom sur la carte</label>
                                    <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="First and last name" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Numéro de la carte</label>
                                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12">Dated'expiration </label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_mo" size="0">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_yr" size="0">
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12">Prix</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Fr CFA</span></div>
                                        <input type="text" class="form-control text-right" id="exampleInputAmount" placeholder="39">
                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-default btn-lg btn-block">Réinitialiser</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-lg btn-block" >Valider</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card cc payment -->
</div>
<div class="col-md-3">

</div>
