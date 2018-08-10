<script>
    $(document).ready(function () {
        show();
    });
    function show() {

        $.ajax({
            url: '<?= base_url('admin/alumni/show_alumni') ?>',
            type: 'POST',
            success: function (html) {
                $('#records').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError)
            {
                alert("Error: " + thrownError);
            }
        });
    }
    $('#addForm').submit(function(e){
		e.preventDefault();
		$.ajax({
			url:'<?= base_url('admin/alumni/show_alumni') ?>',
			type:'POST',
			dataType: 'html',
			data: $(this).serialize(),
			success: function() {
				$('#addModal').modal('hide');
				showRecords();
			},
			error: function(xhr, ajaxOptions, thrownError)
			{
				alert("Error: " + thrownError);
			}
		});
	});

</script>