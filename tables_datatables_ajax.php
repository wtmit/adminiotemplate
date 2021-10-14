<?php include './header.php'; ?>
<main class="content">
   <div class="container-fluid p-0">
      <div class="mb-3">
         <h1 class="h3 d-inline align-middle">Ajax Sourced Data</h1>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="alert alert-warning alert-dismissible" role="alert">
               <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
               <div class="alert-message">
                  <h4 class="alert-heading">jQuery required</h4>
                  <p>
                     Unlike all other components included in this template, DataTables requires jQuery as a dependency. If you want to use
                     DataTables in your application, add the following script element to your HTML code. The file includes both jQuery and
                     DataTables.
                  </p>
                  <pre class="h6 text-danger mb-0">&lt;script src="js/datatables.js"&gt;&lt;/script&gt;</pre>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">DataTables Ajax Sourced Data</h5>
                  <h6 class="card-subtitle text-muted">DataTables has the ability to read data from virtually any JSON data source that can be
                     obtained by Ajax. See official documentation <a href="https://datatables.net/examples/data_sources/ajax.html" target="_blank" rel="noopener noreferrer nofollow">here</a>.
                  </h6>
               </div>
               <div class="card-body">
                  <div id="datatables-ajax_wrapper" class="dataTables_wrapper dt-bootstrap5">
                     <div class="row">
                        <div class="col-sm-12 col-md-6">
                           <div class="dataTables_length" id="datatables-ajax_length">
                              <label>
                                 Show 
                                 <select name="datatables-ajax_length" aria-controls="datatables-ajax" class="form-select form-select-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                 </select>
                                 entries
                              </label>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                           <div id="datatables-ajax_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatables-ajax" /></label></div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <table id="datatables-ajax" class="table table-striped dataTable" style="width: 100%;" aria-describedby="datatables-ajax_info">
                              <thead>
                                 <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 61px;" aria-sort="ascending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px;">Position</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 234px;">Office</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 106px;">Age</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 96px;">Start date</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 82px;">Salary</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="odd">
                                    <td class="sorting_1">Airi</td>
                                    <td>Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>28th Nov 08</td>
                                    <td>$162,700</td>
                                 </tr>
                                 <tr class="even">
                                    <td class="sorting_1">Angelica</td>
                                    <td>Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>9th Oct 09</td>
                                    <td>$1,200,000</td>
                                 </tr>
                                 <tr class="odd">
                                    <td class="sorting_1">Ashton</td>
                                    <td>Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>12th Jan 09</td>
                                    <td>$86,000</td>
                                 </tr>
                                 <tr class="even">
                                    <td class="sorting_1">Bradley</td>
                                    <td>Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>13th Oct 12</td>
                                    <td>$132,000</td>
                                 </tr>
                                 <tr class="odd">
                                    <td class="sorting_1">Brenden</td>
                                    <td>Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>7th Jun 11</td>
                                    <td>$206,850</td>
                                 </tr>
                                 <tr class="even">
                                    <td class="sorting_1">Brielle</td>
                                    <td>Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>2nd Dec 12</td>
                                    <td>$372,000</td>
                                 </tr>
                                 <tr class="odd">
                                    <td class="sorting_1">Bruno</td>
                                    <td>Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>3rd May 11</td>
                                    <td>$163,500</td>
                                 </tr>
                                 <tr class="even">
                                    <td class="sorting_1">Caesar</td>
                                    <td>Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>12th Dec 11</td>
                                    <td>$106,450</td>
                                 </tr>
                                 <tr class="odd">
                                    <td class="sorting_1">Cara</td>
                                    <td>Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>6th Dec 11</td>
                                    <td>$145,600</td>
                                 </tr>
                                 <tr class="even">
                                    <td class="sorting_1">Cedric</td>
                                    <td>Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>29th Mar 12</td>
                                    <td>$433,060</td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Position</th>
                                    <th rowspan="1" colspan="1">Office</th>
                                    <th rowspan="1" colspan="1">Age</th>
                                    <th rowspan="1" colspan="1">Start date</th>
                                    <th rowspan="1" colspan="1">Salary</th>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12 col-md-5">
                           <div class="dataTables_info" id="datatables-ajax_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                           <div class="dataTables_paginate paging_simple_numbers" id="datatables-ajax_paginate">
                              <ul class="pagination">
                                 <li class="paginate_button page-item previous disabled" id="datatables-ajax_previous"><a href="#" aria-controls="datatables-ajax" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                 <li class="paginate_button page-item active"><a href="#" aria-controls="datatables-ajax" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                 <li class="paginate_button page-item next disabled" id="datatables-ajax_next"><a href="#" aria-controls="datatables-ajax" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<?php include './footer.php'; ?>