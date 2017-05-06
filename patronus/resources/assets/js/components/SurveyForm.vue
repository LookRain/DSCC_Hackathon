<template>
	
	<div>
		<span>Multiline message is:</span>
		<p style="white-space: pre">{{ message }}</p>
		<br>
		<textarea v-model="message" placeholder="add multiple lines"></textarea>
	</div>
</template>

<script>
	// import SF from './SF.js';
	import SurveyController from './SurveyController.js';

	export default {

	}
</script>