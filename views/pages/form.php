
<form action="?controller=polls&action=save" method="POST">
	<input type="hidden" name="poll_id" value="<?= $poll->id ?>">
	<p>
		<span>Название экспертной сессии:</span>
		<input type="text" required="required" name="poll_name" value="<?= $poll->name ?>">
	</p>
	<p class="submit-block">
		<input type="button" id="add-question" value="Добавить вопрос">
		<input type="submit" value="Сохранить опрос">
	</p>	
</form>

<div id="template" class="template">
	<a href="#" class="remove" title="удалить...">✖</a>
	<span>Тип поля:</span>
	<select name="field_type[]">
		<option value="1">Число</option>
		<option value="2">Положительное число</option>
		<option value="3">Строка</option>
		<option value="4">Текст</option>
		<option value="5">Множественный выбор (radio)</option>
		<option value="6">Множественный выбор (чекбоксы)</option>
	</select>
	<span>Название поля:</span>
	<input name="field_name[]" required="required">
	<div class="options">
		<p class="first-question">
			<a href="#" class="question-add" title="добавить...">✚</a>
			<a href="#" class="question-remove" title="удалить...">✖</a>
			<span>Название ответа:</span>
			<input name="opt_name[]" type="text">
			<span>Баллов за ответ:</span>
			<input name="opt_val[]" type="number" value="0" min="-100" max="100">
		</p>	
	</div>	
</div>

<script>

	var fieldCount = 0

	function addField(params) {
		
		var $el = $('#template').clone();
		
		if (fieldCount == 0) $el.addClass('first-block');
		$el.attr('id', '');
		
		$el.find('.remove').click(function(e) {
			$(e.target).parent().remove();
		});
		
		$el.find('input[name="field_name[]"]')
			.attr('name', 'field_name[' + fieldCount + ']')
		
		$el.find('select[name="field_type[]"]')
			.attr('name', 'field_type[' + fieldCount + ']')
			.change(function(e) {
				var opt = e.target.value;
				var $tmpl = $(e.target).parent();
				var $opts = $tmpl.find('.options');
				if (opt == 5 || opt == 6) {
					$opts.show();
					$opts.find('input').attr('required', 'required');
				}
				else {
					$opts.hide();
					$opts.find('input').attr('required', null);
				}
			});
			
		$el.find('input[name="opt_name[]"]')
			.attr('name', 'opt_name[' + fieldCount + '][]')
			
		$el.find('input[name="opt_val[]"]')
			.attr('name', 'opt_val[' + fieldCount + '][]')			
			
		$el.insertBefore($('.submit-block'));
		$el.show();
		
		var questionRemove = function(e) {
			$(e.target).parent().remove();
		};
		
		$el.find('.question-add').click(function(e) {
			var $first = $(e.target).parent();
			var $el = $first.clone();
			$el.removeClass('first-question');
			$first.parent().append($el);
			
			$el.find('.question-remove').click(questionRemove);
		});	

		$el.find('.question-remove').click(questionRemove);
		if (params && params.id) {
			$('*[name="field_name[' + fieldCount + ']"]').val(params.name);
			$('*[name="field_type[' + fieldCount + ']"]').val(params.type).change();
			if (params.type == 5 || params.type == 6)
			{
				var $opts = $el.find('.options');
				var first = true;
				console.log( params.options);
				for (var key in params.options)
				{
					if ( ! key.length) continue;					
					
					if ( ! first) {
						$el.find('.question-add').click();
					}
					else {
						first = false;
					}
				
					$inps = $opts.find('input');
					$inps[$inps.length - 1].value = params.options[key];
					$inps[$inps.length - 2].value = key;
				}
			}
		}
		
		fieldCount++;
	}
	
	document.addEventListener('DOMContentLoaded', function() {
		$('#add-question').click(addField);
		ready();
	});	
</script>