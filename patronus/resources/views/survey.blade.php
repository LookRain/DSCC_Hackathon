@extends('layouts.master')

@section('content')

<section class="content-header">
	<h1>
		How are you doing? :)
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
	
						<form method="POST" action="/projects" @submit.prevent="onSubmit">
							<div class="control">
								<label for="field1">1. On a scale from 1(best) - 5(worst), how happy are you?:</label>

								<input type="number" id="field1" name="field1" class="input" v-model="form.field1"> 

							</div>

							<div class="control">
								<label for="field2">2. Gender: (1 for male, 2 for female)</label>

								<input type="number" id="field2" name="field2" class="input" v-model="form.field2">

							</div>

							<div class="control">
								<label for="field3">3. Trouble sleeping?(1 yes, 2 no)</label>

								<input type="number" id="field3" name="field3" class="input" v-model="form.field3">

							</div>

						

						<div class="control">
							<label for="field4">4. Have difficulties concentrating?(1 yes, 2 no)</label>

							<input type="number" id="field4" name="field4" class="input" v-model="form.field4">
						</div>

						<div class="control">
							<label for="field5">5. How's your ability to taste salt? (1 better, 2 worse, 3 no change)</label>            
							<input type="number" id="field5" name="field5" class="input" v-model="form.field5">
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
								<input type="number" id="field6" name="field6" class="input" v-model="form.field6">
							</div>

							<div class="control">
								<label for="field7">7. Smoked tabacco in last 5 days?(1 yes, 2 no)</label>            
								<input type="number" id="field7" name="field7" class="input" v-model="form.field7">
							</div>

							<div class="control">
								<label for="field8">8. Had problem tasting in last 12 months?(1 yes, 2 no)</label>            
								<input type="number" id="field8" name="field8" class="input" v-model="form.field8">
							</div>

							<div class="control">
								<label for="field9">9. How would you want your weight to change?(1 more than now, 2 less than now, 3 no change)</label>            
								<input type="number" id="field9" name="field9" class="input" v-model="form.field9">
							</div>

							<div class="control">
								<label for="field10">10. Did you walk or bicycle in a week for at lease 10min?(1 yes, 2 no)</label>            
								<input type="number" id="field10" name="field10" class="input" v-model="form.field10">
							</div>

							<div class="control">
								<label for="field11">11. Age at first sexual intercourse?(age 9 being minimum)</label>            
								<input type="number" id="field11" name="field11" class="input" v-model="form.field11">
							</div>

							<div class="control">
								<label for="field12">12. Did you have stomach or intestinal illness in past month?(1 yes, 2 no)</label>            
								<input type="number" id="field12" name="field12" class="input" v-model="form.field12">
							</div>

							<div class="control">
								<label for="field13">13. Did you have serious difficulty walking? (1 yes, 2 no)</label>            
								<input type="number" id="field13" name="field13" class="input" v-model="form.field13">
							</div>

							<div class="control">
								<label for="field14">14. Average number of alcholic drinks per day in past year(range: 1- 25)</label>            
								<input type="number" id="field14" name="field14" class="input" v-model="form.field14">
							</div>

							<div class="control">
								<label for="field15">15. Do you experience memory or confusion problems?(1 yes, 2 no)</label>            
								<input type="number" id="field15" name="field15" class="input" v-model="form.field15">
							</div>

							<div class="control">
								<label for="field16">16. Did you have any flu or ear infection in past month?(1 yes, 2 no)</label>            
								<input type="number" id="field16" name="field16" class="input" v-model="form.field16">
							</div>

							<div class="control">
								<label for="field17">17. Hours spent watching TV or video? <small>(0: Less than 1 hour, 1: 1 hour, 2: 2 hours, 3: 3 hours, 4: 4 hours, 5: 5 hours or more, 8: You don't watch TV or videos )</small></label>            
									<input type="number" id="field17" name="field17" class="input" v-model="form.field17">
								</div>

								<div class="control">
									<label for="field18">18. What's your monthly grocery expenditure in USD?(range: 0 - 4285)</label>            
									<input type="number" id="field18" name="field18" class="input" v-model="form.field18">
								</div>

								<div class="control">
									<label for="field19">19. Ever used marijuana or hashish?(1 yes, 2 no)</label>            
									<input type="number" id="field19" name="field19" class="input" v-model="form.field19">
								</div>

						

								<div class="control">
									<button class="button is-primary">Submit</button>
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