<div class="modal fade" id="clientAddModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Client</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('ID No') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-id-card" title="Name"></i></span>
                            <input type="text" class="form-control" name="id_no" placeholder="ID No">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Owner`s Name') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Proprietor Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <input type="text" class="form-control" name="proprietor_name" placeholder="Proprietor name">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Company Name') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Company Name" id="basic-addon1"><i class="fas fa-building" title="Name"></i></span>
                            <input type="text" class="form-control" name="company_name" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Address') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-building" title="Name"></i></span>
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Phone') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <input type="number" min="0" class="form-control" name="phone1" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Phone (Optional)') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-mobile" title="Name"></i></span>
                            <input type="number" min="0" class="form-control" name="phone2" placeholder="Phone Number (Optional)">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Previous Due') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Previous Due" id="basic-addon1"><i class="fas fa-money-check" title="Name"></i></span>
                            <input type="text" class="form-control" name="previous_due" placeholder="Previous Due">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Email') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Previous Due" id="basic-addon1"><i class="fas fa-envelope" title="Name"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Date Of Birth') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Date Of Birth" id="basic-addon1"><i class="fas fa-calendar-day" title="Name"></i></span>
                            <input type="text" class="form-control fc-datepicker" name="date_of_birth" placeholder="MM/DD/YYYY" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Upazilla / Thana') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Upazilla / Thana" id="basic-addon1"><i class="fas fa-city" title="Name"></i></span>
                            <input type="text" class="form-control" name="upazilla_thana" placeholder="Upazilla / Thana">
                        </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Zip Code') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Date Of Birth" id="basic-addon1"><i class="fas fa-map-marked-alt" title="Name"></i></span>
                            <input type="text" class="form-control" name="zip_code" placeholder="Zip Code">
                        </div>
                    </div>


                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="" class="form-label">{{ __('Client Group') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-layer-group" title="Name"></i></span>
                            <select name="group_id" class="form-control select2">
                                <option label="Choose Group">Select Group</option>
                                <option value="male">Science</option>
                                <option value="female">Arc</option>
                                <option value="other">Commerce</option>
                            </select>
                            <a data-bs-target="#clientGroupModal" data-bs-toggle="modal" class="add-to-cart btn btn-danger" type="button" href="javascript:;"><i class="fas fa-plus"></i></a>
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
                        <button type="submit" class="add-to-cart btn btn-success btn-block">Add Client</button>
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
@include('user.client.group-modal')
