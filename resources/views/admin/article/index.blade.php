@extends(backpack_view('blank'))

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">
@section('content')

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th class="th-sm">Name
  
        </th>
        <th class="th-sm">Position
  
        </th>
        <th class="th-sm">Office
  
        </th>
        <th class="th-sm">Age
  
        </th>
        <th class="th-sm">Start date
  
        </th>
        <th class="th-sm">Salary
  
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th>Name
        </th>
        <th>Position
        </th>
        <th>Office
        </th>
        <th>Age
        </th>
        <th>Start date
        </th>
        <th>Salary
        </th>
      </tr>
    </tfoot>
  </table>

@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js">

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>