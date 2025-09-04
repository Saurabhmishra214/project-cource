@extends('admin_dashboard.master_layout')
@section('content')

    <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                                <h4 class="page-title">Users</h4>
                                <div class="">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Mifty</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Users</a>
                                        </li>
                                        <li class="breadcrumb-item active">List</li>
                                    </ol>
                                </div>                                
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Users</h4>                      
                                        </div>
                                        <div class="col-auto"> 
                                            <form class="row g-2">
                                                <div class="col-auto">
                                                    <a class="btn bg-primary-subtle text-primary dropdown-toggle d-flex align-items-center arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-auto-close="outside">
                                                        <i class="iconoir-filter-alt me-1"></i> Filter
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <div class="p-2">
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-all">
                                                                <label class="form-check-label" for="filter-all">All</label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-one">
                                                                <label class="form-check-label" for="filter-one">New</label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-two">
                                                                <label class="form-check-label" for="filter-two">VIP</label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-three">
                                                                <label class="form-check-label" for="filter-three">Repeat</label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-four">
                                                                <label class="form-check-label" for="filter-four">Referral</label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-five">
                                                                <label class="form-check-label" for="filter-five">Inactive</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-six">
                                                                <label class="form-check-label" for="filter-six">Loyal</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>    
                                        </div>
                                    </div>                                  
                                </div>

                                <div class="card-body pt-0">

                                    <!-- Export Buttons -->
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-sm btn-primary export-csv">Export CSV</button>
                                        <button type="button" class="btn btn-sm btn-primary export-excel">Export Excel</button>
                                        <button type="button" class="btn btn-sm btn-primary export-sql">Export SQL</button>
                                        <button type="button" class="btn btn-sm btn-primary export-txt">Export TXT</button>
                                        <button type="button" class="btn btn-sm btn-primary export-json">Export JSON</button>
                                        <button type="button" class="btn btn-sm btn-primary export-pdf">Download PDF</button>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table mb-0 checkbox-all" id="users-table">
                                            <thead class="table-light">
                                              <tr>
                                                <th style="width: 16px;">
                                                    <div class="form-check mb-0 ms-n1">
                                                        <input type="checkbox" class="form-check-input" name="select-all" id="select-all">                                                    
                                                    </div>
                                                </th>
                                                <th class="ps-0">Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Referred By</th>
                                                <th>Last Login</th>
                                                <th class="text-end">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <td style="width: 16px;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="check" id="check-{{ $user->id }}">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <img src="" alt="" class="thumb-md d-inline rounded-circle me-1">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="font-13 fw-medium">{{ $user->name }}</span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="d-inline-block align-middle mb-0 text-body">{{ $user->email }}</a>
                                                    </td>
                                                    <td>
                                                        @php
                                                            $statusColors = [
                                                                'VIP' => 'bg-danger-subtle text-danger',
                                                                'Loyal' => 'bg-success-subtle text-success',
                                                                'Referral' => 'bg-success-subtle text-success',
                                                                'Inactive' => 'bg-secondary-subtle text-secondary',
                                                                'New' => 'bg-success-subtle text-success',
                                                                'Repeat' => 'bg-blue-subtle text-blue',
                                                                'Potential' => 'bg-success-subtle text-success'
                                                            ];
                                                            $statusClass = $statusColors[$user->status] ?? 'bg-secondary-subtle text-secondary';
                                                        @endphp
                                                        <span class="badge {{ $statusClass }}">{{ $user->status }}</span>
                                                    </td>
                                                    <td>{{ $user->referred_by ?? '-' }}</td>
                                                    <td>{{ $user->last_login_at ? $user->last_login_at->format('d M, Y H:i') : '-' }}</td>
                                                    <td class="text-end">
                                                        <a href="{{ route('admin.user.details', $user->id)}}"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                                        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this user\'s data?');">
                                                                <i class="las la-trash-alt text-secondary fs-18"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <div class="d-flex justify-content-center mt-3">
                                            <ul class="pagination">
                                                {{-- Previous Page Link --}}
                                                @if ($users->onFirstPage())
                                                    <li class="page-item disabled">
                                                        <span class="page-link">Previous</span>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $users->previousPageUrl() }}" rel="prev">Previous</a>
                                                    </li>
                                                @endif

                                                {{-- Pagination Elements --}}
                                                @foreach ($users->links()->elements[0] ?? [] as $page => $url)
                                                    @if ($page == $users->currentPage())
                                                        <li class="page-item active">
                                                            <span class="page-link">{{ $page }}</span>
                                                        </li>
                                                    @else
                                                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                                    @endif
                                                @endforeach

                                                {{-- Next Page Link --}}
                                                @if ($users->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $users->nextPageUrl() }}" rel="next">Next</a>
                                                    </li>
                                                @else
                                                    <li class="page-item disabled">
                                                        <span class="page-link">Next</span>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                     
                </div>
                
                <!--Start Rightbar-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom justify-content-between">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">  
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div>
                        </div>
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div>
                        </div>               
                    </div>
                </div>
                <!--end Rightbar-->
            </div>
        </div>

        @if(session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "{{ session('success') }}",
                });
            });
        </script>
        @endif

    <!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Export Functionality -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const table = document.getElementById('users-table');

    // CSV Export
    document.querySelector('.export-csv').addEventListener('click', () => {
        let wb = XLSX.utils.table_to_book(table, {sheet:"Users"});
        XLSX.writeFile(wb, 'users.csv');
    });

    // Excel Export (.xlsx)
    document.querySelector('.export-excel').addEventListener('click', () => {
        // Convert HTML table to workbook
        let wb = XLSX.utils.table_to_book(table, { sheet: "Users" });
        
        // Save as Excel file
        XLSX.writeFile(wb, 'users.xlsx');
    });

    // TXT Export
    document.querySelector('.export-txt').addEventListener('click', () => {
        let rows = Array.from(table.querySelectorAll('tr')).map(tr => {
            return Array.from(tr.querySelectorAll('th, td')).map(td => td.innerText.trim()).join('\t');
        }).join('\n');
        let blob = new Blob([rows], {type: "text/plain;charset=utf-8"});
        saveAs(blob, 'users.txt');
    });

    // JSON Export
    document.querySelector('.export-json').addEventListener('click', () => {
        let headers = Array.from(table.querySelectorAll('thead th')).map(th => th.innerText.trim());
        let data = Array.from(table.querySelectorAll('tbody tr')).map(tr => {
            let cells = Array.from(tr.querySelectorAll('td'));
            return headers.reduce((obj, header, i) => {
                obj[header] = cells[i]?.innerText.trim() ?? '';
                return obj;
            }, {});
        });
        let blob = new Blob([JSON.stringify(data, null, 2)], {type: "application/json;charset=utf-8"});
        saveAs(blob, 'users.json');
    });

    // PDF Export
    document.querySelector('.export-pdf').addEventListener('click', () => {
        const { jsPDF } = window.jspdf;
        let doc = new jsPDF();

        // Optional: title
        doc.text("Users List", 14, 20);

        // Prepare table data
        let headers = Array.from(table.querySelectorAll('thead th')).map(th => th.innerText.trim());
        let rows = [];
        table.querySelectorAll('tbody tr').forEach(tr => {
            rows.push(Array.from(tr.querySelectorAll('td')).map(td => td.innerText.trim()));
        });

        // Generate table
        doc.autoTable({
            head: [headers],
            body: rows,
            startY: 25,
            styles: { fontSize: 8 },
            headStyles: { fillColor: [41, 128, 185] } // Optional: header color
        });

        // Save PDF
        doc.save('users.pdf');
    });


    // SQL Export (CREATE TABLE + INSERT, without DROP TABLE)
    document.querySelector('.export-sql').addEventListener('click', () => {
        const tableName = "users";

        // Create table statement
        let createTableSQL = `
    CREATE TABLE \`${tableName}\` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    status VARCHAR(50),
    referred_by VARCHAR(255),
    last_login_at DATETIME
    );\n`;

        // Prepare INSERT statements
        let rows = Array.from(table.querySelectorAll('tbody tr'));
        let values = rows.map(tr => {
            let tds = tr.querySelectorAll('td');
            let name = tds[1].innerText.trim().replace(/'/g, "\\'");
            let email = tds[2].innerText.trim().replace(/'/g, "\\'");
            let status = tds[3].innerText.trim().replace(/'/g, "\\'");
            let referred_by = tds[4].innerText.trim().replace(/'/g, "\\'");
            let last_login_at = tds[5].innerText.trim() || 'NULL';
            last_login_at = last_login_at === '-' ? 'NULL' : `'${last_login_at}'`;
            return `('${name}','${email}','${status}','${referred_by}',${last_login_at})`;
        }).join(",\n");

        let sql = createTableSQL + `INSERT INTO \`${tableName}\` (name,email,status,referred_by,last_login_at) VALUES\n` + values + ';';

        let blob = new Blob([sql], {type: "text/sql;charset=utf-8"});
        saveAs(blob, 'users.sql');
    });


});
</script>

@endsection
