<div style="width: 100%;text-align: center;padding:20px;">
<div style="margin-left:auto;margin-right:auto;width:600px;min-height:700px;border:1px solid #eaeaea;text-align: center;border-radius:5px;">
	<div style="background: #ff7b00;height:70px; text-align: center;color:#fff;font-size:25px;padding:0 50px">
		<span style="line-height: 70px;font-weight: 700;">{{$type}} Evaluation</span>
	</div>

	<div style="margin-top:10px;padding:10px;">
		<table border='1' cellpadding="10px" style="text-align:center;margin:0 auto;">
		    
		    <tr>
		        <td style="width:200px;text-align:right;">ID</td><td style="width:200px;text-align:left;">{{$e->student_id}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Name</td><td style="width:200px;text-align:left;">{{$e->student->first_name}} {{$e->student->last_name}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Tutor</td><td style="width:200px;text-align:left;">{{$e->tutor_name}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Module</td><td style="width:200px;text-align:left;">{{$e->session}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Test Type</td><td style="width:200px;text-align:left;">{{$e->test_type == 1 ? 'Practice':'Mock'}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Feeback Introduction Part</td><td style="width:200px;text-align:left;">{{$e->feedback_1}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Feeback Body Paragraph 1</td><td style="width:200px;text-align:left;">{{$e->feedback_2}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Feeback Body Paragraph 2</td><td style="width:200px;text-align:left;">{{$e->feedback_3}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Feeback Body Paragraph 3</td><td style="width:200px;text-align:left;">{{$e->feedback_4}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Feeback Conclusion Part</td><td style="width:200px;text-align:left;">{{$e->feedback_5}}</td>
		    </tr>
		     <tr>
		        <td style="width:200px;text-align:right;">Task Response</td><td style="width:200px;text-align:left;">{{$e->task_response}}</td>
		    </tr>
		    <tr>
		        <td style="width:200px;text-align:right;">Cohesion & Coherence</td><td style="width:200px;text-align:left;">{{$e->cohesion_coherence}}</td>
		    </tr>
		  
		    <tr>
		        <td style="width:200px;text-align:right;">Grammatical Range & Accuracy</td><td style="width:200px;text-align:left;">{{$e->grammatical_range_and_accuracy}}</td>
		    </tr>
		    <tr>
		        <td style="width:200px;text-align:right;">Lexical Resource</td><td style="width:200px;text-align:left;">{{$e->lexical_resource}}</td>
		    </tr>
		    <tr>
		        <td style="width:200px;text-align:right;">Total Score</td><td style="width:200px;text-align:left;">{{$e->total_score}}</td>
		    </tr>
		    <tr>
		        <td style="width:200px;text-align:right;">Suggestions</td><td style="width:200px;text-align:left;">{{$e->suggestions}}</td>
		    </tr>
			<tr>
		        <td style="width:200px;text-align:right;">Answer Sheet</td><td style="width:200px;text-align:left;"><a href="{{asset('img/answer_sheets')}}/{{$e->answer_sheet}}" target="_blank">Click To View Answer Sheet</a></td>
		    </tr>
		    
		   
		   
		</table>
	</div>

</div>
</div>