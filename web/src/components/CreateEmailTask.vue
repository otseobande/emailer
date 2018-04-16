<template>
	<b-container class="create-email-area">
		<h3>Create new email task</h3>
		<b-row>
			<b-col md="2">
				<label>To: </label>
			</b-col>
			<b-col md="6">
				<b-form-input />
			</b-col>
			<b-col md="4">
				<b-form-file placeholder="upload .csv file" />
			</b-col>
		</b-row>
		<b-row>
			<b-col md="2">
				<label>Return email: </label>
			</b-col>
			<b-col md="10">
				<b-form-input />
			</b-col>
		</b-row>
		<b-row>
			<b-col md="2">
				<label>Waiting period before sending: </label>
			</b-col>
			<b-col md="10">
				<b-form-input type="number" />
			</b-col>
		</b-row>
		<b-row>
			<b-col md="2">
				<label>Delay between emails: </label>
			</b-col>
			<b-col md="10">
				<b-form-input type="number" />
			</b-col>
		</b-row>
		<b-row>
			<b-col md="2">
				<label>Subject: </label>
			</b-col>
			<b-col md="10">
				<b-form-input />
			</b-col>
		</b-row>
		<b-row>
			<b-col md="2">
				<label>Message: </label>
			</b-col>
			<b-col md="10">
				<b-form-textarea :rows="6" />
				<div class="attachment-area">
					<span>Upload attachments</span>
				</div>
			</b-col>
		</b-row>
    <b-btn class="float-right">Save</b-btn>
		<b-btn variant="primary" class="float-right" style="margin-right: 5px;">Start sending</b-btn>
	</b-container>
</template>

<script>
export default {
	data(){
		return {

		}
	},
}
</script>

<style>
	.row{
		margin-bottom: 10px;
	}

	.attachment-area{
		background-color: gray;
		color: white;
		padding: 2px;
		border-radius: 3px;
	}
</style>