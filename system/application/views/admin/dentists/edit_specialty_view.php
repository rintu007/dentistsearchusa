<script type="text/javascript">
	function save_success(){
	
	}
	$(function(){
		$('input#btn_save').click(function(){
			process_form('input#btn_save','SAVE','div#specialty_form_messages',true,'form#specialty_form','_admin_console/dentists/save_specialty/<?=$specialty['id']?>',false,'save_success');
		});
	})
</script>
<div>
	<br/><br/>
	<label class="page_header" >
		Edit Dentists specialty
	</label><br/><br/>
	<div id="specialty_form_messages" class="form_messages"></div>
	<form id="specialty_form">
		Specialty Title<br/>	
		<input type="text" class="wide_input_text" name="specialty_title" value="<?=$specialty['specialty_title']?>" /><br/><br/>
		Description<br/>
		<textarea style="height:200px;" class="wide_input_text"  name="description"><?=$specialty['description']?></textarea><br/><br/>
		<div class="btn-holder">
			<input class="btn03" type="button" value="CANCEL" />
			<input class="btn02" id="btn_save" type="button" value="SAVE" />
		</div><!-- /btn-holder end -->
	</form>
</div>