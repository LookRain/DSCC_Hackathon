@extends('layouts.master')

@section('content')

<section class="content-header">
	<h1>
		Survey
		<small>Please answer the questions</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Survey</li>
	</ol>
</section>

<section class="content">




	<div class="row">
		<div class="col-xs-12">

			<div class="box box-solid">
				<div class="box-header">
					<div id="survey">
					<div class="columns">
						<div class="column">
							
						</div>
					</div>
						<form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
							<div class="control">
								<label for="field1">1. On a scale from 1(best) - 5(worst), how happy are you?:</label>

								<input type="text" id="field1" name="field1" class="input" v-model="form.field1"> 

							</div>

							<div class="control">
								<label for="field2">2. Gender: (1 for male, 2 for female)</label>

								<input type="text" id="field2" name="field2" class="input" v-model="form.field2">

							</div>

							<div class="control">
								<label for="field3">3. Trouble sleeping?(1 yes, 2 no)</label>

								<input type="text" id="field3" name="field3" class="input" v-model="form.field3">

							</div>

						</div>

						<div class="control">
							<label for="field4">4. Have difficulties concentrating?(1 yes, 2 no)</label>

							<input type="text" id="field4" name="field4" class="input" v-model="form.field4">
						</div>

						<div class="control">
							<label for="field5">5. How's your ability to taste salt? (1 better, 2 worse, 3 no change)</label>            
							<input type="text" id="field5" name="field5" class="input" v-model="form.field5">
						</div>

						<div class="control">
							<label for="field6">6. Total family income? <small>(% 1 $ 0 to $ 4,999
								% 2 $ 5,000 to $ 9,999
								% 3 $10,000 to $14,999
								% 4 $15,000 to $19,999
								% 5 $20,000 to $24,999
								% 6 $25,000 to $34,999
								% 7 $35,000 to $44,999
								% 8 $45,000 to $54,999
								% 9 $55,000 to $64,999
								% 10 $65,000 to $74,999
								% 12 $20,000 and Over
								% 13 Under $20,000
								% 14 $75,000 to $99,999
								% 15 $100,000 and Over
								)</small></label>            
								<input type="text" id="field6" name="field6" class="input" v-model="form.field6">
							</div>

							<div class="control">
								<label for="field7">7. Smoked tabacco in last 5 days?(1 yes, 2 no)</label>            
								<input type="text" id="field7" name="field7" class="input" v-model="form.field7">
							</div>

							<div class="control">
								<label for="field8">8. Had problem tasting in last 12 days?(1 yes, 2 no)</label>            
								<input type="text" id="field8" name="field8" class="input" v-model="form.field8">
							</div>

							<div class="control">
								<label for="field9">9. Had problem tasting in last 12 days?(1 yes, 2 no)</label>            
								<input type="text" id="field9" name="field9" class="input" v-model="form.field9">
							</div>

							<div class="control">
								<button class="button is-primary" :disabled="form.errors.any()">Create</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.2/vue.js"></script>
<script src="/js/form.js"></script>
{{-- <script src="https://surveyjs.azureedge.net/0.12.12/survey.jquery.min.js"></script> --}}
{{-- <script src="https://surveyjs.azureedge.net/0.12.12/survey.vue.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script> --}}


@endsection