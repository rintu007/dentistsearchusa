<script type="text/javascript" src="<?=base_url()?>wysiwyg/admin/scripts/innovaeditor.js"></script>
<script type="text/javascript">
	function save_success(){
	
	}
	$(function(){
		$('input#btn_save').click(function(){
			process_form('input#btn_save','SAVE','div#specialties_form_messages',true,'form#specialties_form','_admin_console/dentists/save_specialty',false,'save_success');
		});
	})
</script>
<div>
	<br/><br/>
	<label class="page_header" >
		Add Dentist Specialty
	</label><br/><br/>
	<div id="specialties_form_messages" class="form_messages"></div>
	<form id="specialties_form">
		Specialty Title<br/>	
		<input type="text" class="wide_input_text" name="specialty_title" /><br/><br/>
		Description<br/>
		<textarea style="height:200px;" class="wide_input_text"  name="description"></textarea><br/><br/>
		<div class="btn-holder">
			<input class="btn03" type="button" value="CANCEL" />
			<input class="btn02" id="btn_save" type="button" value="SAVE" />
		</div><!-- /btn-holder end -->
	</form>
</div>