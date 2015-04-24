		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/readmore.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
	add_task();

	function add_task(){
		$('.add-new-task').submit(function(){
			var new_task = $('.add-new-task input[name = new-task]').val();

			if(new_task != ''){
				$.post('add-task.php', {task: new_task}, function(data){
					$('add-new-task input[name = new-task]').val();
						$(data).appendTo('.task-list ul').hide().fadeIn();
				});
			}
			return false;
		});
	}

	$('.delete-button').click(function(){
		var current_element = $(this);
		var task_id = $(this).attr('id');

		$.post('delete-task.php', {id: task_id}, function(){
			current_element.parent().fadeOut("fast", function(){
				$(this).remove();
			});
		});
	});
</script>
	</body>
</html>