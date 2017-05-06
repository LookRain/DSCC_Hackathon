<template>
    <div>
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
                            <survey-form></survey-form>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</template>
<script>
import SurveyForm from '../components/SurveyForm';

    export default {
        components: { SurveyForm },
        data() {
            return {

            }
        }
    }
</script>


