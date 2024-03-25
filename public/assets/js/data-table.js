$(function() {
  'use strict';

  $(function() {
    $('#dataTableExample').DataTable({
      "aLengthMenu": [
        [10, 30, 50, -1],
        [10, 30, 50, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      }
    });
    // $('#dataTableExample_filter').prepend('<button type="button" class="btn btn-danger btn-sm btn-icon-text"><i class="link-icon" data-feather="x-square"></i> Hapus Data</button>');
    // $('#dataTableExample_filter').prepend('<button type="button" style="margin-right: 10px;" class="btn btn-success btn-sm btn-icon-text"><i class="link-icon" data-feather="plus-square"></i> Tambah Data</button>');
    // feather.replace();
    $('#dataTableExample').each(function() {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Cari');
      search_input.removeClass('form-control-sm');
      // LENGTH - Inline-Form control
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
      length_sel.removeClass('form-control-sm');
    });
  });
});