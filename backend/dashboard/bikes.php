
<main id="" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="card-header">
              <div class="card-tools" style="float: right; margin-top: -2%;">
                <a class="btn btn-block btn-sm btn-default btn-flat border-primary new_bike"
                  href="?page=create"><i class="bi bi-plus"></i> Add New</a>
              </div>
            </div>

            <div class="datatable-top">
              <div class="datatable-dropdown">
                <label>
                  <select class="datatable-selector">
                    <option value="5">5</option>
                    <option value="10" selected="">10</option>
                    <option value="15">15</option>
                    <option value="-1">All</option>
                  </select> entries per page
                </label>
              </div>
              <div class="datatable-search">
                <input class="datatable-input" placeholder="Search..." type="search" title="Search within table">
              </div>
            </div>


            <!-- table -->
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Number</th>
                  <th scope="col">Name</th>
                  <th scope="col">Bike ID</th>
                  <th scope="col">Status</th>
                  <th scope="col">Owner</th>
                  <th scope="col">Agent Username</th>
                  <th scope="col">Agent NID</th>
                  <th scope="col">Approved Motif</th>
                  <th scope="col">Use Type</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>001</td>
                  <td>Mountain Bike</td>
                  <td>101</td>
                  <td>Available</td>
                  <td>John Doe</td>
                  <td>agent1</td>
                  <td>123456789</td>
                  <td>Approved for sports</td>
                  <td>Personal</td>
                  <td>

                    <div class="btn-group">
                      <a href="javascript:void(0)" data-id="SU 568707"
                        class="btn btn-primary btn-flat btn-sm print_bike ">
                        <i class="bi bi-print"></i>
                      </a>
                      <a href="javascript:void(0)" data-id="SU 568707"
                        class="btn btn-primary btn-flat btn-sm bike_receipt ">
                        <i class="bi bi-receipt"></i>
                      </a>

                      <a href="javascript:void(0)" data-id="SU 568707" class="btn btn-primary btn-flat btn-sm mutate">
                        <i class="bi bi-bicycle"></i>
                      </a>
                      <a href="javascript:void(0)" data-id="1199380172402010"
                        class="btn btn-primary btn-flat btn-sm view_owner">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="?page=edit" data-id="51" class="btn btn-primary btn-flat btn-sm manage_bike">
                        <i class="bi bi-pencil" href="createModal.html"></i>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm btn-flat delete_bike" data-id="51">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>

            <!-- pagination -->
            <div class="datatable-bottom">
              <div class="datatable-info">Showing 1 to 10 of 100 entries</div>
              <nav class="datatable-pagination">
                <ul class="datatable-pagination-list">
                  <li class="datatable-pagination-list-item datatable-hidden datatable-disabled"><button data-page="1"
                      class="datatable-pagination-list-item-link" aria-label="Page 1">‹</button></li>
                  <li class="datatable-pagination-list-item datatable-active"><button data-page="1"
                      class="datatable-pagination-list-item-link" aria-label="Page 1">1</button></li>
                  <li class="datatable-pagination-list-item"><button data-page="2"
                      class="datatable-pagination-list-item-link" aria-label="Page 2">2</button></li>
                  <li class="datatable-pagination-list-item"><button data-page="3"
                      class="datatable-pagination-list-item-link" aria-label="Page 3">3</button></li>
                  <li class="datatable-pagination-list-item"><button data-page="4"
                      class="datatable-pagination-list-item-link" aria-label="Page 4">4</button></li>
                  <li class="datatable-pagination-list-item"><button data-page="5"
                      class="datatable-pagination-list-item-link" aria-label="Page 5">5</button></li>
                  <li class="datatable-pagination-list-item"><button data-page="6"
                      class="datatable-pagination-list-item-link" aria-label="Page 6">6</button></li>
                  <li class="datatable-pagination-list-item"><button data-page="7"
                      class="datatable-pagination-list-item-link" aria-label="Page 7">7</button></li>
                  <li class="datatable-pagination-list-item datatable-ellipsis datatable-disabled"><button
                      class="datatable-pagination-list-item-link">…</button></li>
                  <li class="datatable-pagination-list-item"><button data-page="10"
                      class="datatable-pagination-list-item-link" aria-label="Page 10">10</button></li>
                  <li class="datatable-pagination-list-item"><button data-page="2"
                      class="datatable-pagination-list-item-link" aria-label="Page 2">›</button></li>
                </ul>
              </nav>
            </div>

          </div>
        </div>

      </div>
      </div>
    </section>

  </main><!-- End #main -->



  
</html>