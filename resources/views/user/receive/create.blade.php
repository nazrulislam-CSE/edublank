@extends('layouts.user.app', ['pageTitle' => $pageTitle])
@section('content')
    <div class="main-content-body">
        <form action="{{ route('user.account.store') }}" method="post">
            @csrf
            <!-- Col -->
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                    <p class="card-title my-0">{{ $pageTitle }}</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Client" id="basic-addon1"><i class="fas fa-user-tie" title="Client"></i></span>
                                    <select name="client_id" class="form-control select2">
                                        <option label="Choose Client">Select Client</option>
                                        <option value="islam">abc</option>
                                        <option value="hinduism">abc1</option>
                                        <option value="buddhism">abc2</option>
                                        <option value="christianity">abc3</option>
                                    </select>
                                    <a data-bs-target="#clientAddModal" data-bs-toggle="modal" class="add-to-cart btn btn-danger" type="button" href="javascript:;"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Invoice Id"><i class="fas fa-file-invoice" title="Name"></i></span>
                                    <select name="invoice_id" class="form-control select2">
                                        <option label="Choose Invoice Id">Select invoice id</option>
                                        <option value="islam">1224</option>
                                        <option value="hinduism">1445</option>
                                        <option value="buddhism">1244</option>
                                        <option value="christianity">1042</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Date"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                    <input class="form-control fc-datepicker" name="date" placeholder="MM/DD/YYYY" type="text" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Account" id="basic-addon1"><i class="fas fa-university" title="Account"></i></span>
                                    <select name="account_id" class="form-control select2">
                                        <option label="Choose Account">Select Account</option>
                                        <option value="islam">1224</option>
                                        <option value="hinduism">1445</option>
                                        <option value="buddhism">1244</option>
                                        <option value="christianity">1042</option>
                                    </select>
                                    <a data-bs-target="#accountModal" data-bs-toggle="modal" class="add-to-cart btn btn-danger" type="button" href="javascript:;"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Description"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                    <textarea name="description" class="form-control" id="" cols="5" rows="1" placeholder="Receive description in short note"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Account" id="basic-addon1"><i class="fas fa-university" title="Category"></i></span>
                                    <select name="category_id" class="form-control select2">
                                        <option label="Choose Income Category">Select Income Category</option>
                                        <option value="islam">abc</option>
                                        <option value="hinduism">abc1</option>
                                        <option value="buddhism">abc2</option>
                                        <option value="christianity">abc3</option>
                                    </select>
                                    <a data-bs-target="#incomecategoryModal" data-bs-toggle="modal" class="add-to-cart btn btn-danger" type="button" href="javascript:;"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Payment" id="basic-addon1"><i class="fas fa-money-check" title="Payment"></i></span>
                                    <select name="payment" class="form-control select2">
                                        <option label="Choose Payment">Select Payment</option>
                                        <option value="islam">cash</option>
                                        <option value="hinduism">bkash</option>
                                        <option value="buddhism">nagad</option>
                                        <option value="christianity">amarpay</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Bank" id="basic-addon1"><i class="fas fa-money-check" title="Bank"></i></span>
                                    <select name="bank" class="form-control select2">
                                        <option label="Choose Bank">Select Bank</option>
                                        <option value="islam">Islami Bank</option>
                                        <option value="hinduism">Bank Asia</option>
                                        <option value="buddhism">DBBL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Cheque No" id="basic-addon1"><i class="fas fa-bars" title="Cheque No"></i></span>
                                    <input type="text" class="form-control" name="cheque_no" placeholder="Cheque No">
                                </div>
                            </div>

                            <div class="form-group  col-xl-12 col-lg-12 col-md-6">
                                <label class="input-group form-control d-flex justify-content-between">
                                    <span class="form-switch-description tx-15 me-2"><i class="fas fa-sms" title="Checkout No"></i> Send SMS</span>
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control form-checkbox custom-control-md">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                            <span class="custom-control-label custom-control-label-md  tx-17"></span>
                                        </label>
                                    </div>
                                </label>
                            </div>

                            <div class="form-group  col-xl-12 col-lg-12 col-md-6">
                                <label class="input-group form-control d-flex justify-content-between">
                                    <span class="form-switch-description tx-15 me-2"><i class="fas fa-at" title="Checkout No"></i> Email Send</span>
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control form-checkbox custom-control-md">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                            <span class="custom-control-label custom-control-label-md  tx-17"></span>
                                        </label>
                                    </div>
                                </label>
                            </div>

                            <div class="form-group col-xl-12 col-lg-12 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                                    <select name="status" class="form-control select2">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                                <button type="submit" class="add-to-cart btn btn-success btn-block">Add New Receive</button>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12">
                            <div class="table-responsive">
									<div id="responsive-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="responsive-datatable_length"><label>Show <select name="responsive-datatable_length" aria-controls="responsive-datatable" class="form-select form-select-sm select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-responsive-datatable_length-96-container"><span class="select2-selection__rendered" id="select2-responsive-datatable_length-96-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="responsive-datatable_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control" placeholder="Search..." aria-controls="responsive-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table border-top-0 table-bordered text-nowrap border-bottom dataTable no-footer" id="responsive-datatable" role="grid" aria-describedby="responsive-datatable_info">
										<thead>
											<tr role="row"><th class="wd-15p border-bottom-0 sorting sorting_asc" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 114.688px;">First name</th><th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 114.688px;">Last name</th><th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 166.594px;">Position</th><th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 114.688px;">Start date</th><th class="wd-10p border-bottom-0 sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 62.7969px;">Salary</th><th class="wd-25p border-bottom-0 sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 218.547px;">E-mail</th></tr>
										</thead>
										<tbody>
										<tr class="odd">
												<td class="sorting_1">Adrian</td>
												<td>Terry</td>
												<td>Marketing Officer</td>
												<td>2013/04/21</td>
												<td>$543,769</td>
												<td>a.terry@datatables.net</td>
											</tr><tr class="even">
												<td class="sorting_1">Angelica</td>
												<td>Ramos</td>
												<td>Chief Executive Officer</td>
												<td>20017/10/15</td>
												<td>$6,234,000</td>
												<td>a.ramos@datatables.net</td>
											</tr><tr class="odd">
												<td class="sorting_1">Bella</td>
												<td>Chloe</td>
												<td>System Developer</td>
												<td>2018/03/12</td>
												<td>$654,765</td>
												<td>b.Chloe@datatables.net</td>
											</tr><tr class="even">
												<td class="sorting_1">Brenden</td>
												<td>Wagner</td>
												<td>Software Engineer</td>
												<td>2013/07/14</td>
												<td>$206,850</td>
												<td>b.wagner@datatables.net</td>
											</tr><tr class="odd">
												<td class="sorting_1">Bruno</td>
												<td>Nash</td>
												<td>Software Engineer</td>
												<td>2015/05/03</td>
												<td>$163,500</td>
												<td>b.nash@datatables.net</td>
											</tr><tr class="even">
												<td class="sorting_1">Cameron</td>
												<td>Watson</td>
												<td>Sales Support</td>
												<td>2013/9/7</td>
												<td>$675,876</td>
												<td>c.watson@datatables.net</td>
											</tr><tr class="odd">
												<td class="sorting_1">Connor</td>
												<td>Johne</td>
												<td>Web Developer</td>
												<td>2011/1/25</td>
												<td>$92,575</td>
												<td>C.johne@datatables.net</td>
											</tr><tr class="even">
												<td class="sorting_1">Dominic</td>
												<td>Hudson</td>
												<td>Sales Assistant</td>
												<td>2015/10/16</td>
												<td>$654,300</td>
												<td>d.hudson@datatables.net</td>
											</tr><tr class="odd">
												<td class="sorting_1">Donna</td>
												<td>Bond</td>
												<td>Account Manager</td>
												<td>2012/02/21</td>
												<td>$543,654</td>
												<td>d.bond@datatables.net</td>
											</tr><tr class="even">
												<td class="sorting_1">Evan</td>
												<td>Terry</td>
												<td>Sales Manager</td>
												<td>2013/10/26</td>
												<td>$66,340</td>
												<td>d.terry@datatables.net</td>
											</tr></tbody>
									</table></div></div><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="responsive-datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="responsive-datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="responsive-datatable_previous"><a href="#" aria-controls="responsive-datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="responsive-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="responsive-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="responsive-datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="responsive-datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="responsive-datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="responsive-datatable_next"><a href="#" aria-controls="responsive-datatable" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
								</div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Col -->
        </form>
    </div>
    @include('user.receive.client-add-modal')
    @include('user.receive.account-modal')
    @include('user.receive.income-category-modal')
@endsection

@push('js_script')
    <script>
        $(document).ready(function() {
            $('.image').change(function(event) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('.showImage').attr('src', event.target.result);
                }
                reader.readAsDataURL(event.target.files['0']);
            });
            // select2 form input
        });
    </script>
@endpush
