<div class="modal fade" id="accountModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg  " role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Account</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Account title') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Account title" id="basic-addon1"><i class="fas fa-heading" title="Account title"></i></span>
                            <input type="text" class="form-control" name="title" placeholder="Account title">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Initial Balance') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Initial Balance" id="basic-addon1"><i class="fas fa-dollar-sign" title="Name"></i></span>
                            <input type="text" class="form-control" name="initial_balance" placeholder="Initial Balance">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Contact Person') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Account Number" id="basic-addon1"><i class="fas fa-university" title="Contact Person"></i></span>
                            <input type="text" class="form-control" name="person" placeholder="Contact Person">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Phone') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-mobile" title="Name"></i></span>
                            <input type="number" min="0" class="form-control" name="phone" placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Account Description') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Account Description"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                            <textarea name="description" class="form-control" id="" cols="5" rows="1" placeholder="Account description in short note"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Status') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <select name="status" class="form-control select2">
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                        <button type="submit" class="add-to-cart btn btn-success btn-block">Add Account</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" type="button">Save</button>
                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
