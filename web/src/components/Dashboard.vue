<template>
	<b-container>
		<!-- <b-row>
			<b-col md="4">
				<b-card title="Number of emails sent">
					<center>
						<span class="">4</span>
					</center>
				</b-card>
			</b-col>
			<b-col md="4">
				<b-card title="Last email send time">
					<center>
						<span class="">00:00 12th April, 2018</span>
					</center>
				</b-card>
			</b-col>
			<b-col md="4">
				<b-card title="Total email tasks">
					<center>
						<span class="">1</span>
					</center>
				</b-card>
			</b-col> 
		</b-row><br>
		<b-row>
			<b-col md="3">
				<b-card title="Completed Tasks" @click="selected = 'Completed Tasks'"
					:class="selected == 'Completed Tasks' ? 'selected' : ''"
					style="max-width: 20rem;"
					class="mb-2">
					<p class="card-text">
						0
					</p>
				</b-card>
			</b-col>
			<b-col md="3">
				<b-card title="Running Tasks" @click="selected = 'Running Tasks'"
					:class="selected == 'Running Tasks' ? 'selected' : ''"
					style="max-width: 20rem;"
					class="mb-2">
					<p class="card-text">
						1
					</p>
				</b-card>
			</b-col>
			<b-col md="3">
				<b-card title="Stopped Tasks" @click="selected = 'Stopped Tasks'"
					:class="selected == 'Stopped Tasks' ? 'selected' : ''"
					style="max-width: 20rem;"
					class="mb-2">
					<p class="card-text">
						0
					</p>
				</b-card>
			</b-col>
			<b-col md="3">
				<b-card title="Pending Tasks" @click="selected = 'Pending Tasks'"
					:class="selected == 'Pending Tasks' ? 'selected' : ''"
					style="max-width: 20rem;"
					class="mb-2">
					<p class="card-text">
						0
					</p>
				</b-card>
			</b-col>
		</b-row> -->
		<b-row>
			<b-col md="12">
				<b-card header="Email Tasks">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Task Subject</th>
								<th>Status</th>
								<th>Mails sent</th>
								<th>Last sent</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Test proposal</td>
								<td>Running</td>
								<td>3/50</td>
								<td>00:00 12th April, 2018</td>
								<td>
									<b-btn variant="danger">Stop</b-btn>
								</td>
							</tr>
						</tbody>
					</table>
				</b-card>
			</b-col>
		</b-row>
		<b-btn to="/create" variant="primary" class="float-right">New Task</b-btn>
	</b-container>
</template>
<script>

export default {
	data(){
		return {
			tasks: [
				{task_subject: 'Test proposal', completed_status: '30%'}
			],
			selected: '',
		}
	},
	
}
</script>

<style>
	.card-text{
		text-align: center;
		font-size: 30px;
	}

	.selected{
		background-color: gray; 
		color: white;
	}
</style>